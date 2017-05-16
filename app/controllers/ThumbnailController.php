<?php
/*
*  2015 Slaty Site
*
*  NOTICE OF LICENSE
*
*  @author     Slaty Fork s.r.o. //-- Henrich Barkoczy  <henrich.barkoczy@slatyfork.eu>
*  @copyright  Slaty Fork s.r.o.
*  @license    http://www.slatyfork.cz - Software License
*/

class ThumbnailController {
  
  /** @var Registry */
  protected static $registry;
  
  public function __construct( Registry $registry ) 
  {
    self::$registry = $registry;
  }
  
  public function run()
  {
    $hash   = self::$registry->getService('irequest')->getUrlBit(1);
    $width  = self::$registry->getService('irequest')->getUrlBit(2);
    $height = self::$registry->getService('irequest')->getUrlBit(3);

    if( ( !is_numeric($hash) ) &&
        ( $width == "auto" || intval($width) > 0) &&
        ( $height == "auto" || intval($height) > 0)
    ) {
      $fileId = (int) self::$registry->getService('drive')->fileIdByHash( $hash );
      $file   = self::$registry->getService('drive')->fileById( $fileId );
      $path   = __UPLOAD_PATH__ . $file->file_hash . $file->file_ext;
      $type   = getimagesize($path)["mime"];
      $format = str_replace("image/", "", $type);
      $w      = ($width == "auto") ? 0 : $width;
      $h      = ($height == "auto") ? 0 : $height;
      
      if( is_file($path) && is_readable($path) && @filemtime($path)) {
        $thumb = new Imagick();
        $thumb->readimage($path);
        $thumb->resizeimage($w,$h,Imagick::FILTER_LANCZOS,1);
        // display
        header("Content-Type: ".$type);
        print_r($thumb->getimageblob());
        // destroy
        $thumb->clear(); 
        $thumb->destroy();
      }
    }
  }
  
  public function crop()
  {
    $hash   = self::$registry->getService('irequest')->getUrlBit(2);
    $width  = (int) self::$registry->getService('irequest')->getUrlBit(3);
    $height = (int) self::$registry->getService('irequest')->getUrlBit(4);
    
    if( ( !is_numeric($hash) ) &&
        ( $width > 0 ) &&
        ( $height > 0 )
    ) {
      // file
      $fileId = (int) self::$registry->getService('drive')->fileIdByHash( $hash );
      $file   = self::$registry->getService('drive')->fileById( $fileId );
      $path   = __UPLOAD_PATH__ . $file->file_hash . $file->file_ext;
      
      if( is_file($path) && is_readable($path) && @filemtime($path))  {
        $type   = getimagesize($path)["mime"];
        $format = str_replace("image/", "", $type);
        // inst
        $thumb = new Imagick();
        $thumb->readimage($path);
        // geo
        $geo = $thumb->getimagegeometry();
        // crop the image
        if(($geo['width']/$width) < ($geo['height']/$height)) {
          $thumb->cropimage($geo['width'], floor($height*$geo['width']/$width), 0, (($geo['height']-($height*$geo['width']/$width))/2));
        }
        else {
          $thumb->cropimage(ceil($width*$geo['height']/$height), $geo['height'], (($geo['width']-($width*$geo['height']/$height))/2), 0);
        }
        // thumbnail the image
        $thumb->thumbnailimage($width,$height,true);
        // thumbnail the image
        $thumb->setimageformat($format);
        // display
        header("Content-Type: ".$type);
        print_r($thumb->getimageblob());
        // destroy
        $thumb->clear(); 
        $thumb->destroy();
      }
    }
  }
  
  public function landscape()
  {
    $hash   = self::$registry->getService('irequest')->getUrlBit(2);
    $width  = (int) self::$registry->getService('irequest')->getUrlBit(3);
    $height = (int) self::$registry->getService('irequest')->getUrlBit(4);
    
    if( ( !is_numeric($hash) ) &&
        ( $width > 0 ) &&
        ( $height > 0 )
    ) {
      // file
      $fileId = (int) self::$registry->getService('drive')->fileIdByHash( $hash );
      $file   = self::$registry->getService('drive')->fileById( $fileId );
      $path   = __UPLOAD_PATH__ . $file->file_hash . $file->file_ext;
      
      if( is_file($path) && is_readable($path) && @filemtime($path)) 
      {
        $type   = getimagesize($path)["mime"];
        $format = str_replace("image/", "", $type);
        // inst
        $thumb = new Imagick();
        $thumb->readimage($path);
        $thumb->resizeimage($w,$this->getSizeByFixedWidth($h),Imagick::FILTER_LANCZOS,1);
        // display
        header("Content-Type: ".$type);
        print_r($thumb->getimageblob());
        // destroy
        $thumb->clear(); 
        $thumb->destroy();
      }
    }
  }
  
  public function portrait()
  {
    $hash   = self::$registry->getService('irequest')->getUrlBit(2);
    $width  = (int) self::$registry->getService('irequest')->getUrlBit(3);
    $height = (int) self::$registry->getService('irequest')->getUrlBit(4);
    
    if( ( !is_numeric($hash) ) &&
        ( $width > 0 ) &&
        ( $height > 0 )
    ) {
      // file
      $fileId = (int) self::$registry->getService('drive')->fileIdByHash( $hash );
      $file   = self::$registry->getService('drive')->fileById( $fileId );
      $path   = __UPLOAD_PATH__ . $file->file_hash . $file->file_ext;
      
      if( is_file($path) && is_readable($path) && @filemtime($path)) 
      {
        $type   = getimagesize($path)["mime"];
        $format = str_replace("image/", "", $type);
        // inst
        $thumb = new Imagick();
        $thumb->readimage($path);
        $thumb->resizeimage($this->getSizeByFixedHeight($w),$h,Imagick::FILTER_LANCZOS,1);
        // display
        header("Content-Type: ".$type);
        print_r($thumb->getimageblob());
        // destroy
        $thumb->clear(); 
        $thumb->destroy();
      }
    }
  }
  
  public function pdf()
  {
    $method = self::$registry->getService('irequest')->getUrlBit(2);
    $hash   = self::$registry->getService('irequest')->getUrlBit(3);
    $width  = (int) (self::$registry->getService('irequest')->getUrlBit(4) == 'auto') ? 0 : self::$registry->getService('irequest')->getUrlBit(4);
    $height = (int) (self::$registry->getService('irequest')->getUrlBit(5) == 'auto') ? 0 : self::$registry->getService('irequest')->getUrlBit(4);
    
    if( ( $method == 'auto' || $method == 'crop' ) &&
        ( !is_numeric($hash) ) &&
        ( $width > 0 ) &&
        ( $height > 0 )
    ) {
      $thumb = new Imagick();
      $thumb->setResolution(300,300);
      $thumb->readImage("{$pdf}[0]"); 
      // geo
      $geo = $thumb->getimagegeometry();
      // resize
      if( $method == 'auto') {
        $nWidth  = ($width == 0) ? ($geo['width'] * $height) / $geo['height'] : $width; 
        $nHeight = ($height == 0) ? ($geo['height'] * $width) / $geo['width'] : $height;

        $thumb->resizeImage($nWidth, $nHeight, imagick::FILTER_LANCZOS, 0.9, true);
      }
      // crop the image
      if( $method == 'crop') {
        if(($geo['width']/$width) < ($geo['height']/$height)) {
          $thumb->cropimage($geo['width'], floor($height*$geo['width']/$width), 0, (($geo['height']-($height*$geo['width']/$width))/2));
        }
        else {
          $thumb->cropimage(ceil($width*$geo['height']/$height), $geo['height'], (($geo['width']-($width*$geo['height']/$height))/2), 0);
        }
        // thumbnail the image
        $thumb->thumbnailimage($width,$height,true);
      }
      // image format
      $thumb->setImageFormat('png');
      // render
      header("Content-type: image/".$thumb->getImageFormat());
      print_r($thumb->getimageblob());
      // destroy
      $thumb->clear(); 
      $thumb->destroy();
    }
  }
  
  public function fileview( $file = '' )
  {
    $path = __UPLOAD_PATH__ . $file;
    
    $fileModTime = filemtime($path);
    $mime_type   = finfo_file(finfo_open(FILEINFO_MIME_TYPE), $path);
    // Getting headers sent by the client.
    $headers = $this->getRequestHeaders();
    // Checking if the client is validating his cache and if it is current.
    if (isset($headers['If-Modified-Since']) && (strtotime($headers['If-Modified-Since']) == $fileModTime)) {
        // Client's cache IS current, so we just respond '304 Not Modified'.
        header('Last-Modified: '.gmdate('D, d M Y H:i:s', $fileModTime).' GMT', true, 304);
      } else {
        header('Last-Modified: '.gmdate('D, d M Y H:i:s', $fileModTime).' GMT', true, 200);
        
        switch ($mime_type){
          case "image/jpeg":
              // Set the content type header - in this case image/jpg
              header('Content-Type: image/jpeg');
              header('Content-transfer-encoding: binary');
              header('Content-length: '.filesize($path));

              imagejpeg(imagecreatefromjpeg($path));
               
              break;
          case "image/png":
              // Set the content type header - in this case image/png
              header('Content-Type: image/png');
              header('Content-transfer-encoding: binary');
              header('Content-length: '.filesize($path));
              // Get image from file
              $img = imagecreatefrompng($path); 
              // integer representation of the color black (rgb: 0,0,0)
              $background = imagecolorallocate($img, 0, 0, 0); 
              // removing the black from the placeholder
              imagecolortransparent($img, $background); 
              // turning off alpha blending (to ensure alpha channel information 
              // is preserved, rather than removed (blending with the rest of the 
              // image in the form of black))
              imagealphablending($img, false); 
              // turning on alpha channel information saving (to ensure the full range 
              // of transparency is preserved)
              imagesavealpha($img, true);
              // Output the image
              imagepng($img);
               
              break;
          case "image/gif":
              // Set the content type header - in this case image/gif
              header('Content-Type: image/gif');
              header('Content-transfer-encoding: binary');
              header('Content-length: '.filesize($path)); 
              // Get image from file
              $img = imagecreatefromgif($path); 
              // integer representation of the color black (rgb: 0,0,0)
              $background = imagecolorallocate($img, 0, 0, 0); 
              // removing the black from the placeholder
              imagecolortransparent($img, $background); 
              // Output the image
              imagegif($img);
               
              break;
      }
      // Free up memory
      imagedestroy($img);
    }
  }
  
  private function getRequestHeaders()
  {
    if (function_exists("apache_request_headers")) {
      if($headers = apache_request_headers()) {
        return $headers;
      }
    }
    $headers = array();
    // Grab the IF_MODIFIED_SINCE header
    if (isset($_SERVER['HTTP_IF_MODIFIED_SINCE'])) {
      $headers['If-Modified-Since'] = $_SERVER['HTTP_IF_MODIFIED_SINCE'];
    }
    return $headers;
  }
  
  private function getSizeByFixedHeight($newHeight)
  {
    $ratio = $this->width / $this->height;
    $newWidth = $newHeight * $ratio;
    return $newWidth;
  }
  
  private function getSizeByFixedWidth($newWidth)
  {
    $ratio = $this->height / $this->width;
    $newHeight = $newWidth * $ratio;
    return $newHeight;
  }
  
}