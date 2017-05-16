<?php
/*
*  2015 MOZAYC
*
*  NOTICE OF LICENSE
*
*  @author     Slaty Fork s.r.o. //-- Henrich Barkoczy  <henrich.barkoczy@slatyfork.eu>
*  @copyright  Slaty Fork s.r.o.
*  @license    http://www.slatyfork.eu - Software License
*/

class GalleryModel {
  
  /** @var Registry **/
  protected static $registry;

  public function __construct( Registry $registry ) 
  {
    self::$registry = $registry;
  }
  
  public function createGallery( $data = null )
  {
    self::$registry->getService('storage')->insert( 'app_gallery', $data );
    
    return self::$registry->getService('storage')->lastInsertId();
  }
  
  public function insertLang( $data = null )
  {
    self::$registry->getService('storage')->insert( 'app_gallery_lang', $data );
    
    return self::$registry->getService('storage')->executed();
  }
  
  public function insertImage( $data = null )
  {
    self::$registry->getService('storage')->insert( 'app_gallery_images', $data );
    
    return self::$registry->getService('storage')->executed();
  }
  
  public function insertGalleryCaption( $data = null )
  {
    self::$registry->getService('storage')->insert( 'app_gallery_images_lang', $data );
    
    return self::$registry->getService('storage')->executed();
  }
  
  public function updateGalleryById( $changes = null, $galleryId = 0 )
  {
    self::$registry->getService('storage')->update( 'app_gallery', $changes, ' id_gallery = '. (int) $galleryId );
    
    return self::$registry->getService('storage')->executed();
  }
  
  public function updateImage( $changes = null, $galleryId = 0, $imgId = 0 )
  {
    self::$registry->getService('storage')->update( 'app_gallery_images', $changes, ' id_gallery = '. (int) $galleryId .' AND id_image = '. (int) $imgId );
    
    return self::$registry->getService('storage')->executed();
  }
  
  public function countGalleries( $filter = 0, $useList = null )
  {
    $qry = "SELECT
              (count(id_gallery)) as avx
            FROM
              app_gallery";
    if(is_array($useList) && (count($useList) > 0)) {
      $qry .= " WHERE id_gallery IN (".implode(",",$useList).")";
    }
    $keys = (($filter > 0) && ( $filter < 5)) ? ($filter === 4) ? array(':id_group' => 0) : array(':id_group' => $filter) : null;
    
    self::$registry->getService('storage')->executeQuery( $qry, $keys );
    
    return (self::$registry->getService('storage')->rowCount() > 0) ? (int) self::$registry->getService('storage')->getResult()[0]->avx : null;
  }
  
  public function galleryList( $pagination = false, $filter = 0, $useList = null )
  {
    $qry = "SELECT
              a.id_gallery, a.gallery_name, a.id_type, a.id_group, a.publish,
              a.last_modified, b.first_name, b.last_name, c.pagename
            FROM
              app_gallery a
            INNER JOIN
              app_users_info b
            ON
              a.owner = b.id_user
            LEFT JOIN
              app_pages c
            ON
              a.id_page = c.id_page";
    if(is_array($useList) && (count($useList) > 0)) {
      $qry .= " WHERE a.id_gallery IN (".implode(",",$useList).")";
    }
    $keys = (($filter > 0) && ( $filter < 5)) ? ($filter === 4) ? array(':id_group' => 0) : array(':id_group' => $filter) : null;
    $order = "ORDER BY a.position ASC";
    if($pagination) {
      self::$registry->getService('pagination')->fetch( $qry, $keys, $order );
    } else {
      self::$registry->getService('storage')->executeQuery( $qry, $keys, $order );
    }
    if(self::$registry->getService('storage')->rowCount() > 0) {
      $data = self::$registry->getService('storage')->getResult();
      
      foreach($data as $key => $value) {
        $data[ $key ]->countImg = $this->__countImagesById( $value->id_gallery );
      }
    }
    return (isset($data) && (count($data) > 0)) ? $data : null;
  }
  
  private function __countImagesById( $galleryId = 0 )
  {
    $qry = "SELECT
              (count(id_gallery)) as avx
            FROM
              app_gallery_images";
    $keys = array(
      ':id_gallery' => (int) $galleryId
    );
    self::$registry->getService('storage')->executeQuery( $qry, $keys );
    
    return (self::$registry->getService('storage')->rowCount() > 0) ? (int) self::$registry->getService('storage')->getResult()[0]->avx : 0;
  }
  
  public function galleryIdsByKeywords( $keywords = '' )
  {
    // CLEAR
    $keywords2 = htmlspecialchars(html_entity_decode(self::$registry->getService('irequest')->sanitize( $keywords ), ENT_QUOTES, "UTF-8"), ENT_QUOTES, "UTF-8");
    // ROUTE ID LIST
    $ids = [];
    $qn = 3;
    
    for($i=1;$i<=$qn;$i++) {
      $result = $this->__searchQry($i, $keywords2);
      
      if(!is_null($result)) {
        foreach($result as $value) {
          if(!in_array($value, $ids)) {
            array_push($ids, $value);
          }
        }
      }
    }
    return (count($ids) > 0) ? $ids : null;
  }
  
  private function __searchQry( $typeId = 0, $keywords = '' )
  {
    switch((int) $typeId) {
      case 1:
        $qry = "SELECT
                  id_gallery
                FROM
                  app_gallery
                WHERE
                  gallery_name LIKE ('%".$keywords."%')";
        self::$registry->getService('storage')->executeQuery( $qry );
        
        if(self::$registry->getService('storage')->rowCount() > 0) {
          $ids = self::$registry->getService('storage')->getResult();

          foreach($ids as $value) {
            $data[] = $value->id_gallery;
          }
        }
        return (isset($data) && (count($data) > 0)) ? $data : null;
      case 2:
        $qry = "SELECT
                  id_gallery
                FROM
                  app_gallery_lang
                WHERE
                  title LIKE ('%".$keywords."%')
                OR
                  description LIKE ('%".$keywords."%')";
        self::$registry->getService('storage')->executeQuery( $qry );
        
        if(self::$registry->getService('storage')->rowCount() > 0) {
          $ids = self::$registry->getService('storage')->getResult();

          foreach($ids as $value) {
            $data[] = $value->id_gallery;
          }
        }
        return (isset($data) && (count($data) > 0)) ? $data : null;
      case 3:
        $qry = "SELECT
                  id_gallery
                FROM
                  app_gallery_images_lang
                WHERE
                  title LIKE ('%".$keywords."%')
                OR
                  description LIKE ('%".$keywords."%')";
        self::$registry->getService('storage')->executeQuery( $qry );
        
        if(self::$registry->getService('storage')->rowCount() > 0) {
          $ids = self::$registry->getService('storage')->getResult();

          foreach($ids as $value) {
            $data[] = $value->id_gallery;
          }
        }
        return (isset($data) && (count($data) > 0)) ? $data : null;
    }
  }
  
  public function galleryImageIdsById( $galleryId = 0 )
  {
    $qry = "SELECT
                id_image
              FROM
                app_gallery_images";
    $keys = array(
      ':id_gallery' => (int) $galleryId
    );
    self::$registry->getService('storage')->executeQuery( $qry, $keys );
    
    return (self::$registry->getService('storage')->rowCount() > 0) ? self::$registry->getService('storage')->getResult() : null;
  }
  
  public function galleryById( $galleryId = 0, $onSite = false, $kind = 0, $sectionId = 0 )
  {
    if((bool) $this->isGalleryById( $galleryId ) === true) 
    {
      $qry = "SELECT
                id_gallery, id_type, id_group, id_page, gallery_name, owner, publish
              FROM
                app_gallery";
      $keys = array(
        ':id_gallery' => (int) $galleryId,
      );
      self::$registry->getService('storage')->executeQuery( $qry, $keys );

      if(self::$registry->getService('storage')->rowCount() > 0) {
        $gallery            = self::$registry->getService('storage')->getResult()[0];
        $gallery->lang      = $this->__langById( $galleryId );
        $gallery->imageList = $this->__imageList(
          $galleryId, 
          $onSite,
          $kind,
          $sectionId
        );
        return $gallery;
      }
      return null;
    }
    return null;
  }
  
  private function __langById( $galleryId = 0 )
  {
    $qry = "SELECT
              id_lang, title, description
            FROM
              app_gallery_lang";
    $keys = array(
      ':id_gallery' => (int) $galleryId
    );
    self::$registry->getService('storage')->executeQuery( $qry, $keys );
    
    if(self::$registry->getService('storage')->rowCount() > 0) {
      $data = [];

      foreach(self::$registry->getService('storage')->getResult() as $value) {
        $data[ $value->id_lang ] = $value;
        
        unset($data[ $value->id_lang ]->id_lang);
      }
      return $data;
    }
    return null;
  }
  
  private function __imageList( $galleryId = 0, $onSite = false, $kind = 0, $sectionId = 0 )
  {
    if((bool) $onSite === true) 
    {
      $qry = "SELECT
                id_image, id_page, main, publish
              FROM
                app_gallery_images";
      $imgIds = $this->__getGalleryImageIdsById( $galleryId );
      
      if(is_array($imgIds) && (count($imgIds) > 0)) {
        $qry .= " WHERE id_image IN (".implode(",",$imgIds).")";
        $keys = array(
          ':id_gallery' => (int) $galleryId,
          ':publish'    => 1
        );
      } else {
        $keys = array(
          ':id_gallery'     => (int) $galleryId,
          ':id_device_type' => 0,
          ':publish'        => 1
        );
      }
    } 
    else 
    {
      $qry = "SELECT
                id_image, id_page, id_device_type, id_viewport_size_type, 
                width, height, min_size, max_size, main, publish
              FROM
                app_gallery_images";
      $keys = array(
        ':id_gallery' => (int) $galleryId         
      );
    }
    $filter = "ORDER BY position ASC";
    self::$registry->getService('storage')->executeQuery( $qry, $keys, $filter );

    if(self::$registry->getService('storage')->rowCount() > 0) {
      $items = self::$registry->getService('storage')->getResult();
      
      foreach($items as $key => $item)
      {
        $items[ $key ]->lang = $this->__imageLang( $galleryId );
        $items[ $key ]->file = self::$registry->getService('drive')->fileById( $item->id_image );

        if(is_object($items[ $key ]->file))
        {
          $items[ $key ]->file->file_size  = self::$registry->getService('helper')->formatBytes( $items[ $key ]->file->file_size, 3);
          $items[ $key ]->file->cache_link = ((bool) self::$registry->getService('store')->haveFileThumbnailById( $item->file->file_id ) === true) ? self::$registry->getService('store')->thumbnailLinkByParams($item->file->file_id, $kind, $sectionId) : null;
        }
      }
      return $items;
    }
    return null;
  }
  
  private function __getGalleryImageIdsById( $galleryId = 0 )
  {
    $detector = self::$registry->getService('idetector')->detect();

    if(is_object($detector) &&
      (isset($detector->isComputer) && isset($detector->isTablet)) &&
      (isset($detector->isMobile) || isset($detector->isMobileDevice)) &&
      (isset($detector->screenattributes) && is_object($detector->screenattributes)) &&
      (isset($detector->screenattributes->windowWidth) && isset($detector->screenattributes->windowHeight)) &&
      ((float)$detector->screenattributes->windowWidth > 0) &&
      ((float)$detector->screenattributes->windowHeight > 0)
    ) {
      $deviceTypeId = 0;

      // [ 1 ] DESKTOP
      if ((bool) $detector->isComputer === true) {
        $deviceTypeId = 1;
      }
      // [ 2 ] TABLET
      if ((bool) $detector->isTablet === true) {
        $deviceTypeId = 2;
      }
      // [ 3 ] MOBILE
      if (((bool) $detector->isTablet === false) &&
          (((bool) $detector->isMobile === true) || ((bool)$detector->isMobileDevice === true))
      ) {
        $deviceTypeId = 3;
      }
      if($deviceTypeId !== 0)
      {
        $qry = "SELECT
                  id_image, id_viewport_size_type, min_size, max_size
                FROM
                  app_gallery_images
                WHERE 
                  id_device_type IN (" . implode(",", array(0, $deviceTypeId)). ")";
        $keys = array(
            ':id_gallery' => (int)$galleryId,
            ':publish' => 1
        );
        self::$registry->getService('storage')->executeQuery($qry, $keys);

        if (self::$registry->getService('storage')->rowCount() > 0) {
          $imgIds = [];

          foreach (self::$registry->getService('storage')->getResult() as $key => $image) {
            $width  = (float) $detector->screenattributes->windowWidth;
            $height = (float) $detector->screenattributes->windowHeight;

            switch ((int) $image->id_viewport_size_type) {
              // [ 0 ] allow
              case 0:
                $imgIds[ $key ] = (int) $image->id_image;
                break;
              // [ 1 ] min-width
              case 1:
                if ($width >= (float) $image->min_size) {
                  $imgIds[ $key ] = (int) $image->id_image;
                }
                break;
              // [ 2 ] max-width
              case 2:
                if ($width <= (float) $image->max_size) {
                  $imgIds[ $key ] = (int) $image->id_image;
                }
                break;
              // [ 3 ] min-height
              case 3:
                if ($height >= (float) $image->min_size) {
                  $imgIds[ $key ] = (int) $image->id_image;
                }
                break;
              // [ 4 ] max-height
              case 4:
                if ($height <= (float) $image->max_size) {
                  $imgIds[ $key ] = (int) $image->id_image;
                }
                break;
              // [ 5 ] min-width / max-width
              case 5:
                if (($width >= (float) $image->min_size) &&
                    ($width <= (float) $image->max_size)
                ) {
                  $imgIds[ $key ] = (int) $image->id_image;
                }
                break;
              // [ 6 ] min-height / max-height
              case 6:
                if (($height >= (float) $image->min_size) &&
                    ($height <= (float) $image->max_size)
                ) {
                  $imgIds[ $key ] = (int) $image->id_image;
                }
                break;
            }
          }
          return $imgIds;
        }
        return null;
      }
      return null;
    }
    return null;
  }
  
  private function __imageLang( $galleryId = 0, $imageId = 0 )
  {
    $qry = "SELECT
              id_lang, title, description, url_link
            FROM
              app_gallery_images_lang";
    $keys = array(
      ':id_gallery' => (int) $galleryId,
      ':id_image'   => (int) $imageId
    );
    self::$registry->getService('storage')->executeQuery( $qry, $keys );
    
    return (self::$registry->getService('storage')->rowCount() > 0) ? self::$registry->getService('storage')->getResult() : null;
  }
  
  public function lastPositionImageById( $galleryId = 0 )
  {
    $qry = "SELECT
              position
            FROM
              app_gallery_images";
    $keys = array(
      ':id_gallery' => (int) $galleryId
    );
    $filter = "ORDER BY position DESC LIMIT 1";
    self::$registry->getService('storage')->executeQuery( $qry, $keys, $filter );
    
    return (self::$registry->getService('storage')->rowCount() > 0) ? (int) self::$registry->getService('storage')->getResult()[0]->position : 1;
  }
  
  
  public function deleteImage( $galleryId = 0, $imgId = 0 )
  { 
    self::$registry->getService('storage')->delete( 'app_gallery_images', array(':id_gallery' => (int) $galleryId, ':id_image' => (int) $imgId) );
    
    return self::$registry->getService('storage')->executed();
  }
  
  public function deleteLangById( $galleryId = 0 )
  {
    self::$registry->getService('storage')->delete( 'app_gallery_lang', ':id_gallery', (int) $galleryId );
    
    return self::$registry->getService('storage')->executed();
  }
  
  public function deleteGalleryId( $galleryId = 0 )
  {
   self::$registry->getService('storage')->delete( 'app_gallery', ':id_gallery', (int) $galleryId );
   self::$registry->getService('storage')->delete( 'app_gallery_lang', ':id_gallery', (int) $galleryId );
   self::$registry->getService('storage')->delete( 'app_gallery_images', ':id_gallery', (int) $galleryId );
   self::$registry->getService('storage')->delete( 'app_gallery_images_lang', ':id_gallery', (int) $galleryId );
   
   return self::$registry->getService('storage')->executed();
  }
  
  public function getGalleryLastPosition()
  {
    $qry = "SELECT
              position
            FROM
              app_gallery";
    $filter = "ORDER BY position DESC LIMIT 1";
    self::$registry->getService('storage')->executeQuery( $qry, null, $filter );
    
    return (self::$registry->getService('storage')->rowCount() > 0) ? (int) self::$registry->getService('storage')->getResult()[0]->position + 1 : 0;
  }
  
  public function galleryNameById( $galleryId = 0 )
  {
    $qry = "SELECT
              gallery_name
            FROM
              app_gallery";
    $keys = array(
      ':id_gallery' => (int) $galleryId
    );
    self::$registry->getService('storage')->executeQuery( $qry, $keys );
    
    return (self::$registry->getService('storage')->rowCount() > 0) ? self::$registry->getService('storage')->getResult()[0]->gallery_name : '';
  }
  
  public function galleryImagesIdsById( $galleryId = 0 )
  {
    $qry = "SELECT
              id_image
            FROM
              app_gallery_images";
    $keys = array(
      ':id_gallery' => (int) $galleryId
    );
    self::$registry->getService('storage')->executeQuery( $qry, $keys );
    
    if(self::$registry->getService('storage')->rowCount() > 0) {
      $data = self::$registry->getService('storage')->getResult();
      $ids  = [];
      
      foreach($data as $value) {
        $ids[] = (int) $value->id_image;
      }
      return $ids;
    }
    return null;
  }
  
  public function isGalleryById( $galleryId = 0 )
  {
    $qry = "SELECT
              id_gallery
            FROM
              app_gallery";
    $keys = array(
      ':id_gallery' => (int) $galleryId
    );
    self::$registry->getService('storage')->executeQuery( $qry, $keys );
    
    return (self::$registry->getService('storage')->rowCount() > 0) ? true : false;
  }
  
  public function isImageById( $galleryId = 0, $imgId = 0 )
  {
    $qry = "SELECT
              id_gallery
            FROM
              app_gallery_images";
    $keys = array(
      ':id_gallery' => (int) $galleryId,
      ':id_image'   => (int) $imgId
    );
    self::$registry->getService('storage')->executeQuery( $qry, $keys );
    
    return (self::$registry->getService('storage')->rowCount() > 0) ? true : false;
  }
  
  public function galleryByPageId( $pageId = 0, $langId = 0 )
  {
    $qry = "SELECT
              id_gallery
            FROM
              app_gallery";
    $keys = array(
      ':id_page' => (int) $pageId
    );
    self::$registry->getService('storage')->executeQuery( $qry, $keys );
    
    if(self::$registry->getService('storage')->rowCount() > 0) {
      $data                 = self::$registry->getService('storage')->getResult()[0];
      $gallery              = $this->galleryById( $data->id_gallery );
      $gallery->title       = $gallery->lang[ $langId ]->title;
      $gallery->description = $gallery->lang[ $langId ]->description;
      
      unset($gallery->lang);

      return $gallery;
    }
    return null;
  }
  
  public function galleryImageLangById( $galleryId = 0, $imageId = 0 )
  {
    $qry = "SELECT
              id_lang, link_rewrite, title, description
            FROM
              app_gallery_images_lang";
    $keys = array(
      ':id_gallery' => (int) $galleryId,
      ':id_image'   => (int) $imageId
    );
    self::$registry->getService('storage')->executeQuery( $qry, $keys );
    
    if(self::$registry->getService('storage')->rowCount() > 0) {
      $data = self::$registry->getService('storage')->getResult();
      $lang = [];
      
      foreach($data as $value) {
        $lang[ $value ] = $value;
        
        unset($lang[ $value ]->id_lang);
      }
      return $lang;
    }
    return null;
  }
  
  public function galleryCaptionsById( $galleryId = 0, $imageId = 0 )
  {
    $data = [];
    
    $qry = "SELECT
              id_lang, url_link, title, description
            FROM
              app_gallery_images_lang";
    $keys = array(
      ':id_gallery' => (int) $galleryId,
      ':id_image'   => (int) $imageId
    );
    self::$registry->getService('storage')->executeQuery( $qry, $keys );
    
    if(self::$registry->getService('storage')->rowCount() > 0) {
      foreach(self::$registry->getService('storage')->getResult() as $value) {
        $data[ $value->id_lang ] = $value;
      }
    }
    return $data;
  }
  
  public function clearGalleryCaptionsById( $data = null )
  {
    self::$registry->getService('storage')->delete( 'app_gallery_images_lang', $data );
    
    return self::$registry->getService('storage')->executed();
  }
  
}