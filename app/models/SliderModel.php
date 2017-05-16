<?php
/*
*  2015 SLATY STORE
*
*  NOTICE OF LICENSE
*
*  @author     Slaty Fork s.r.o. //-- Henrich Barkoczy  <henrich.barkoczy@slatyfork.eu>
*  @copyright  Slaty Fork s.r.o.
*  @license    http://www.slatyfork.eu - Software License
*/

class SliderModel {
  
  /** @var Registry **/
  protected static $registry;

  public function __construct( Registry $registry ) 
  {
    self::$registry = $registry;
  }
  
  public function createSlider( $data = null )
  {
    self::$registry->getService('storage')->insert( 'app_slider', $data );
    
    return self::$registry->getService('storage')->lastInsertId();
  }
  
  public function insertImages( $data = null )
  {
    self::$registry->getService('storage')->insert( 'app_slider_images', $data );
    
    return self::$registry->getService('storage')->executed();
  }
  
  public function insertSliderCaption( $data = null )
  {
    self::$registry->getService('storage')->insert( 'app_slider_images_captions', $data );
    
    return self::$registry->getService('storage')->executed();
  }
  
  public function updateSliderById( $changes = null, $sliderId = 0 )
  {
    self::$registry->getService('storage')->update( 'app_slider', $changes, ' id_slider = '. (int) $sliderId );
    
    return self::$registry->getService('storage')->executed();
  }
  
  public function updateItemSliderById( $changes = null, $sliderId = 0, $imageId = 0 )
  {
    self::$registry->getService('storage')->update( 'app_slider_images', $changes, ' id_slider = '. (int) $sliderId . ' AND id_image = '. (int) $imageId );
    
    return self::$registry->getService('storage')->executed();
  }
  
  public function setRewriteLinkByItemId( $sliderId = 0, $imageId = 0, $langId = 0, $rewriteLink = null )
  {
    self::$registry->getService('storage')->update(
      'app_slider_images_captions',
      array("link_rewrite" => $rewriteLink),
      ' id_slider = '. (int) $sliderId . ' AND id_image = '. (int) $imageId . " AND id_lang = ". (int) $langId
    );
    return self::$registry->getService('storage')->executed();
  }
  
  public function countSliders( $useList = null )
  {
    $qry = "SELECT
              (count(id_slider)) as avx
            FROM
              app_slider";
    if(is_array($useList) && (count($useList) > 0)) {
      $qry .= " WHERE id_slider IN (".implode(",",$useList).")";
    }
    self::$registry->getService('storage')->executeQuery( $qry );
    
    return (self::$registry->getService('storage')->rowCount() > 0) ? (int) self::$registry->getService('storage')->getResult()[0]->avx : 0;
  }
  
  public function sliderList( $pagination = false, $useList = null )
  {
    $qry = "SELECT
              a.id_slider, a.slider_name, a.publish, a.use_captions,
              b.pagename, c.first_name, c.last_name, a.created
            FROM
              app_slider a
            LEFT JOIN
              app_pages b
            ON
              a.id_page = b.id_page
            LEFT JOIN
              app_users_info c
            ON
              a.creator = c.id_user";
    if(is_array($useList) && (count($useList) > 0)) {
      $qry .= " WHERE a.id_slider IN (".implode(",",$useList).")";
    }
    if($pagination) {
      self::$registry->getService('pagination')->fetch( $qry );
    } else {
      self::$registry->getService('storage')->executeQuery( $qry );
    }
    return (self::$registry->getService('storage')->rowCount() > 0) ? self::$registry->getService('storage')->getResult() : null;
  }
  
  public function sliderIdsByKeywords( $keywords = '' )
  {
    // CLEAR
    $keywords2 = htmlspecialchars(html_entity_decode(self::$registry->getService('irequest')->sanitize( $keywords ), ENT_QUOTES, "UTF-8"), ENT_QUOTES, "UTF-8");
    // SLIDER ID LIST
    $ids = [];
    $qn  = 2;
    
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
    $data = [];
    
    switch((int) $typeId) {
      case 1:
        $qry = "SELECT
                  id_slider
                FROM
                  app_slider
                WHERE
                  slider_name LIKE ('%".$keywords."%')";
        self::$registry->getService('storage')->executeQuery( $qry );
        
        if(self::$registry->getService('storage')->rowCount() > 0) {
          foreach(self::$registry->getService('storage')->getResult() as $value) {
            $data[] = $value->id_slider;
          }
        }
        break;
      case 2:
        $qry = "SELECT
                  id_slider
                FROM
                  app_slider_images_captions
                WHERE
                  title LIKE ('%".$keywords."%')
                OR
                  description LIKE ('%".$keywords."%')";
        self::$registry->getService('storage')->executeQuery( $qry );
        
        if(self::$registry->getService('storage')->rowCount() > 0) {
          foreach(self::$registry->getService('storage')->getResult() as $value) {
            $data[] = $value->id_slider;
          }
        }
        break;
    }
    return (count($data) > 0) ? $data : null;
  }
  
  public function sliderNameById( $sliderId = 0 )
  {
    $qry = "SELECT
              slider_name
            FROM
              app_slider";
    $keys = array(
      ':id_slider' => (int) $sliderId,
    );
    self::$registry->getService('storage')->executeQuery( $qry, $keys );
    
    return (self::$registry->getService('storage')->rowCount() > 0) ? self::$registry->getService('storage')->getResult()[0]->slider_name : null;
  }
  
  public function sliderDataById( $sliderId = 0 )
  {
    $qry1 = "SELECT
              id_slider, slider_name, id_page, use_captions, publish
            FROM
              app_slider";
    $keys1 = array(
      ':id_slider' => (int) $sliderId,
    );
    self::$registry->getService('storage')->executeQuery( $qry1, $keys1 );
    
    if(self::$registry->getService('storage')->rowCount() > 0) {
      $data = self::$registry->getService('storage')->getResult()[0];
    
      $qry2 = "SELECT
                id_image, id_page, width, height, id_device_type,
                id_viewport_size_type, min_size, max_size, publish
              FROM
                app_slider_images";
      $keys2 = array(
        ':id_slider' => $sliderId,
      );
      $filter2 = " ORDER BY position ASC";
      self::$registry->getService('storage')->executeQuery( $qry2, $keys2, $filter2 );

      if(self::$registry->getService('storage')->rowCount() > 0) {
        $data2 = self::$registry->getService('storage')->getResult();
        $data->imageList = [];
        
        foreach($data2 as $key => $value ) {
          $data->imageList[ $key ] = $value;
          $data->imageList[ $key ]->image = ((int) $value->id_image > 0) ? self::$registry->getService('drive')->fileById( $value->id_image ) : null;
          $data->imageList[ $key ]->image->file_size = self::$registry->getService('helper')->formatBytes($data->imageList[ $key ]->image->file_size, 3);
        }
      }
    }
    return (isset($data) && (count($data) > 0)) ? $data : null;
  }
  
  public function sliderCaptionsById( $sliderId = 0, $imageId = 0 )
  {
    $qry = "SELECT
              id_lang, link, title, description
            FROM
              app_slider_images_captions";
    $keys = array(
      ':id_slider' => (int) $sliderId,
      ':id_image'  => (int) $imageId
    );
    self::$registry->getService('storage')->executeQuery( $qry, $keys );
    
    if(self::$registry->getService('storage')->rowCount() > 0) {
      $data = [];
      
      foreach(self::$registry->getService('storage')->getResult() as $value) {
        $data[ $value->id_lang ] = $value;
      }
      return $data;
    }
    return null;
  }
  
  public function getFilesIdBySliderId( $sliderId = 0 )
  {
    $qry = "SELECT
              id_image
            FROM
              app_slider_images";
    $keys = array(
      ':id_slider' => (int) $sliderId
    );
    self::$registry->getService('storage')->executeQuery( $qry, $keys );
    
    if(self::$registry->getService('storage')->rowCount() > 0) {
      $ids = [];
      
      foreach(self::$registry->getService('storage')->getResult() as $value) {
        $ids[] = $value->id_image;
      }
    }
    return (isset($ids) && (count($ids) > 0)) ? $ids : null;
  }
  
  public function isSliderById( $sliderId = 0 )
  {
    $qry = "SELECT
              id_slider
            FROM
              app_slider";
    $keys = array(
      ':id_slider' => (int) $sliderId
    );
    self::$registry->getService('storage')->executeQuery( $qry, $keys );
    
    return (self::$registry->getService('storage')->rowCount() > 0) ? true : false;
  }
  
  public function clearSliderCaptionsById( $data = null )
  {
    self::$registry->getService('storage')->delete( 'app_slider_images_captions', $data );
    
    return self::$registry->getService('storage')->executed();
  }
  
  public function removeItemFromSliderById( $sliderId = 0, $imageId = 0 )
  {
    self::$registry->getService('storage')->delete( 'app_slider_images', array(':id_slider' => (int) $sliderId,'id_image' => (int) $imageId ) );
    self::$registry->getService('storage')->delete( 'app_slider_images_captions', array(':id_slider' => (int) $sliderId,'id_image' => (int) $imageId ) );
    
    return self::$registry->getService('storage')->executed();
  }
  
  public function removeSliderById( $sliderId = 0 )
  {
    self::$registry->getService('storage')->delete( 'app_slider', ':id_slider', (int) $sliderId );
    self::$registry->getService('storage')->delete( 'app_slider_images', ':id_slider', (int) $sliderId );
    self::$registry->getService('storage')->delete( 'app_slider_images_captions', ':id_slider', (int) $sliderId );
    
    return self::$registry->getService('storage')->executed();
  }
  
  /*****************************************************************************
  *
  * FRONTEND_METHOD
  *
  ******************************************************************************/

  public function sliderOnSiteById( $sliderId = 0, $langId = 0, $pageId = 0 )
  {
    if((bool) $this->isSliderById( $sliderId ) === true) {
      $qry1 = "SELECT
                id_slider, slider_name, use_captions
              FROM
                app_slider";
      $keys1 = array(
        ':id_slider' => (int) $sliderId,
        ':publish'   => 1
      );
      if(self::$registry->getService('page')->isPageById($pageId)) {
        $keys1[':id_page'] = (int) $pageId;
      }
      self::$registry->getService('storage')->executeQuery( $qry1, $keys1 );

      if(self::$registry->getService('storage')->rowCount() > 0) {
        $data   = self::$registry->getService('storage')->getResult()[0];
        $imgIds = $this->__getSliderImageIdsById( $sliderId ); 

        $qry2 = "SELECT
                    b.id_page, c.link, c.title, c.description, 
                    d.file_name, d.file_hash, d.file_url
                  FROM
                    app_slider a
                  INNER JOIN
                    app_slider_images b
                  ON
                    a.id_slider = b.id_slider
                  AND
                    b.publish = 1
                  LEFT JOIN
                    app_slider_images_captions c
                  ON
                    a.id_slider = c.id_slider
                  AND
                    b.id_image = c.id_image
                  AND
                    c.id_lang = ".$langId."
                  INNER JOIN
                    app_drive_files d
                  ON
                    b.id_image = d.file_id";
        if(is_array($imgIds) && (count($imgIds) > 0)) {
          $qry2 .= " WHERE b.id_image IN (".implode(",",$imgIds).")";
          $keys2 = array(
            ':a.id_slider' => (int) $sliderId
          );
        } else {
          $keys2 = array(
            ':a.id_slider'      => (int) $sliderId,
            ':b.id_device_type' => 0
          );
        }
        $filter2 = "ORDER BY b.position ASC";
        self::$registry->getService('storage')->executeQuery( $qry2, $keys2, $filter2 );

        if(self::$registry->getService('storage')->rowCount() > 0) {
          $data->imageList = self::$registry->getService('storage')->getResult();

          foreach($data->imageList as $key => $image) {
            $pageRouteId = (self::$registry->getService('page')->isPageById( $image->id_page )) ? self::$registry->getService('page')->pageRouteIdById($image->id_page, $langId) : 0;
            $route       = (self::$registry->getService('router')->isRouteById( $pageRouteId )) ? self::$registry->getService('router')->routeById( $pageRouteId ) : null;

            $data->imageList[ $key ]->link = ((strlen($image->link) === 0) && is_object($route)) ? $route->path : $image->link;
          }
        }
        return $data;
      }
      return null;
    }
    return null;
  }
  
  private function __getSliderImageIdsById( $sliderId = 0 )
  {
    $detector = self::$registry->getService('idetector')->detect();
    
    if(is_object($detector) && 
      (isset($detector->isComputer) && isset($detector->isTablet)) && 
      (isset($detector->isMobile) || isset($detector->isMobileDevice)) &&
      (isset($detector->screenattributes) && is_object($detector->screenattributes)) && 
      (isset($detector->screenattributes->windowWidth) && isset($detector->screenattributes->windowHeight)) && 
      ((float) $detector->screenattributes->windowWidth > 0) &&
      ((float) $detector->screenattributes->windowHeight > 0)
    ) {
      $deviceTypeId = 0;
              
      // [ 1 ] DESKTOP
      if((bool) $detector->isComputer === true) {
        $deviceTypeId = 1;
      }
      // [ 2 ] TABLET
      if((bool) $detector->isTablet === true) {
        $deviceTypeId = 2;
      }
      // [ 3 ] MOBILE
      if(((bool) $detector->isTablet === false) && 
        (((bool) $detector->isMobile === true) || ((bool) $detector->isMobileDevice === true))
      ) {
        $deviceTypeId = 3;
      }
      if($deviceTypeId !== 0) {
        $qry = "SELECT
                  id_image, id_viewport_size_type, min_size, max_size
                FROM
                  app_slider_images
                WHERE 
                  id_device_type IN (".implode(",",array(0, $deviceTypeId)).")";
        $keys = array(
          ':id_slider' => (int) $sliderId
        );
        self::$registry->getService('storage')->executeQuery( $qry, $keys );
        
        if(self::$registry->getService('storage')->rowCount() > 0) {
          $imgIds = [];
          
          foreach(self::$registry->getService('storage')->getResult() as $image) {
            $width  = (float) $detector->screenattributes->windowWidth;
            $height = (float) $detector->screenattributes->windowHeight;
            
            switch((int) $image->id_viewport_size_type) {
              // [ 0 ] allow
              case 0:
                $imgIds[] = (int) $image->id_image;
                break;
              // [ 1 ] min-width
              case 1:
                if($width >= (float) $image->min_size) {
                  $imgIds[] = (int) $image->id_image;
                }
                break;
              // [ 2 ] max-width
              case 2:
                if($width <= (float) $image->max_size) {
                  $imgIds[] = (int) $image->id_image;
                }
                break;
              // [ 3 ] min-height
              case 3:
                if($height >= (float) $image->min_size) {
                  $imgIds[] = (int) $image->id_image;
                }
                break;
              // [ 4 ] max-height
              case 4:
                if($height <= (float) $image->max_size) {
                  $imgIds[] = (int) $image->id_image;
                }
                break;
              // [ 5 ] min-width / max-width
              case 5:
                if(($width >= (float) $image->min_size) && 
                 ($width <= (float) $image->max_size)       
                ) {
                  $imgIds[] = (int) $image->id_image;
                }
                break;
              // [ 6 ] min-height / max-height
              case 6:
                if(($height >= (float) $image->min_size) && 
                 ($height <= (float) $image->max_size)       
                ) {
                  $imgIds[] = (int) $image->id_image;
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
  
}