<?php
/*
*  Copyright 2016 MOZAYC s.r.o
*
*  NOTICE OF LICENSE
*
*  @author     Mozayc s.r.o. //-- Henrich Barkoczy  <henrich@mozayc.net>
*  @copyright  Mozayc s.r.o.
*  @license    http://www.mozayc.net/software-license - Software License
*/
require_once __LIB_DIR__ .'thumbnail/ImageCache.php';

class Thumbnail {
  
  /**  @var Registry **/
  protected static $registry;
  
  /** @var ImageCache **/
  private $imageCache;
  
  /** @var void **/
  private static $image;
  
  /** @var string **/
  private $cache_resize_image_dir;
  
  /** @var string **/
  private $format;
  
  /** @var float **/
  private $width;
  
  /** @var float **/
  private $height;
  
  public function __construct( Registry $registry ) 
  {
    self::$registry   = $registry;
    $this->imageCache = new ImageCache(array(
      "cached_image_directory" => realpath( __UPLOAD_PATH__ . 'cached' ),
      "cached_image_url"       => "/files/cached"
    ));
    $this->cache_resize_image_dir = realpath( __CACHE_DIR__ . 'resize' );
  }
  
  /*
  * TODO:
  * Resize image (options: exact, portrait, landscape, auto, crop)
  * 
  * exact     = Resize by exact width/height. (exact)
  * landscape = Resize by width - exact width will be set, height will be adjusted according to aspect ratio. (landscape)
  * portrait  = Resize by height - like Resize by Width, but the height will be set and width adjusted dynamically. (portrait)
  * auto      = Auto determine options 2 and 3. If you're looping through a folder with different size photos, let the script determine how to handle this. (auto)
  * crop      = Resize, then crop. This is my favourite. Exact size, no distortion. (crop) 
  * 
  * @param string $image_path | Original image real path 
  * @param float or null $width
  * @param float or null $height  
  * @param string $options | (exact, portrait, landscape, auto, crop)
  *
  * @return string | Image cache hash key  
  */
  public function create( 
    $image_path = '',
    $image_name = '',
    $width = null,
    $height = null,
    $options = 'auto'
  ) {
    // Real path
    $image_path = realpath($image_path);
    // Resize image cache path
    $output = $this->cache_resize_image_dir . DIRECTORY_SEPARATOR . $image_name;
    // Imagic instance
    $this->openImage( $image_path );
    // Image format
    $this->setFormat( $image_path );
    // Set image sizes
    $this->setSizes();
    // Resize
    switch($options)
    {
      case 'auto':
        $this->auto($width, $height);
        
        break;
      case 'crop':
        $this->crop($width, $height);
        
        break;
      case 'exact':
        $this->exact($width, $height);
        
        break;
      case 'landscape':
        $this->landscape( $width );
        
        break;
      case 'portrait':
        $this->portrait( $height );
        
        break;
      default:
        return null;
    }
    // Save resized image
    if($this->saveImage( $output ))
    {
      // Destroy
      $this->closeImage();
      // Thumbnail path
      $rc_image = $this->compress( $output );
      // Destroy resized cache image 
      unlink($output);
      // Insert thumbnail path
      return $rc_image;
    }
    else
    {
      throw new Exception('The image will not be saved. PATH: ' . $image_path, 500);
    }
  }
  
  private function openImage( $file = '' )
  {
    self::$image = new Imagick();
    self::$image->readimage($file);
  }
  
  private function closeImage()
  {
    self::$image->clear(); 
    self::$image->destroy();
  }
  
  private function setFormat( $file = '' )
  {
    $type = getimagesize($file)["mime"];

    $this->format = str_replace("image/", "", $type);
  }
  
  private function setSizes()
  {
    $geo = self::$image->getimagegeometry();
    
    $this->width  = (float) $geo['width'];
    $this->height = (float) $geo['height'];
  }
  
  private function auto( $width = 0.00, $height = 0.00 )
  {
    $size = $this->getSizeByAuto(
      $width,
      $height
    );
    self::$image->adaptiveResizeImage(
      $size->optimalWidth, 
      $size->optimalHeight, 
      true
    );
  }
  
  private function crop( $width = 0.00, $height = 0.00 )
  {
    if(($this->width / $width) < ($this->height / $height)) 
    {
      self::$image->cropimage($this->width, floor($height * $this->width / $width), 0, (($this->height - ($height * $this->width / $width)) / 2));
    }
    else 
    {
      self::$image->cropimage(ceil($width * $this->height / $height), $this->height, (($this->width - ($width * $this->height / $height)) / 2), 0);
    }
  }
  
  private function exact( $width = 0.00, $height = 0.00 )
  {
    self::$image->adaptiveResizeImage($width, $height, true);
  }
  
  private function landscape( $width = 0.00 )
  {
    self::$image->adaptiveResizeImage($width, $this->getSizeByFixedWidth( $this->height ), true);
  }
  
  private function portrait( $height = 0.00 )
  {
    self::$image->adaptiveResizeImage($this->getSizeByFixedHeight( $this->width ), $height, true);
  }
  
  private function saveImage( $output = '' )
  {
    self::$image->setImageFormat( $this->format );

    return file_put_contents($output, self::$image);
  }
  
  private function compress( $image_path = '' )
  {
    return $this->imageCache->cache( $image_path );
  }
  
  private function getSizeByAuto( $width = 0.00, $height = 0.00 )
  {
    // *** Image to be resized is wider (landscape)
    if($this->height < $this->width)
    {
      $optimalWidth = $width;
      $optimalHeight= $this->getSizeByFixedWidth($width);
    }
    // *** Image to be resized is taller (portrait)
    elseif ($this->height > $this->width)
    {
      $optimalWidth = $this->getSizeByFixedHeight($height);
      $optimalHeight= $height;
    }
    // *** Image to be resizerd is a square
    else
    {
      if($height < $width) 
      {
        $optimalWidth = $width;
        $optimalHeight= $this->getSizeByFixedWidth($width);
      } 
      else if ($height > $width) 
      {
        $optimalWidth = $this->getSizeByFixedHeight($height);
        $optimalHeight= $height;
      } 
      else 
      {
        // *** Sqaure being resized to a square
        $optimalWidth = $width;
        $optimalHeight= $height;
      }
    }
    return (object) array(
      'optimalWidth'  => $optimalWidth, 
      'optimalHeight' => $optimalHeight
    );
  }
  
  private function getSizeByFixedHeight( $height = 0.00 )
  {
    $ratio = $this->width / $this->height;
    $width = $height * $ratio;
    
    return $width;
  }
  
  private function getSizeByFixedWidth( $width = 0.00 )
  {
    $ratio  = $this->height / $this->width;
    $height = $width * $ratio;
    
    return $height;
  }
  
}