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

class PageModel {
  
  /** @var Registry **/
  protected static $registry;

  public function __construct( Registry $registry ) 
  {
    self::$registry = $registry;
  }
  
  public function insertPage( $data = null )
  {
    self::$registry->getService('storage')->insert( 'app_pages', $data );
    
    return (self::$registry->getService('storage')->executed()) ? self::$registry->getService('storage')->lastInsertId() : 0;
  }
  
  public function insertPageList( $data = null )
  {
    self::$registry->getService('storage')->insert( 'app_page_list', $data );
    
    return (self::$registry->getService('storage')->executed()) ? self::$registry->getService('storage')->lastInsertId() : 0;
  }
  
  public function insertPageContent( $data = null )
  {
    self::$registry->getService('storage')->insert( 'app_pages_content', $data );
    
    return self::$registry->getService('storage')->executed();
  }
  
  public function insertPageListContent( $data = null )
  {
    self::$registry->getService('storage')->insert( 'app_page_list_content', $data );
    
    return self::$registry->getService('storage')->executed();
  }
  
  public function insertPageToPageList( $data = null )
  {
    self::$registry->getService('storage')->insert( 'app_page_list_pages', $data );
    
    return self::$registry->getService('storage')->executed();
  }
  
  public function insertPageFullTextIndex( $data = null )
  {
    self::$registry->getService('storage')->insert( 'app_page_full_text_indexes', $data );
    
    return self::$registry->getService('storage')->executed();
  }
  
  public function insertPageListFullTextIndex( $data = null )
  {
    self::$registry->getService('storage')->insert( 'app_page_list_full_text_indexes', $data );
    
    return self::$registry->getService('storage')->executed();
  }
  
  public function updatePageImageById( $actionId = 0, $pageId = 0, $langId = 0, $fileId = 0 )
  {
    switch($actionId)
    {
      case 1:
        self::$registry->getService('storage')->update( 'app_pages', array('id_background_image' => (int) $fileId), ' id_page = '. (int) $pageId );
        
        return self::$registry->getService('storage')->executed();
      case 2:
        self::$registry->getService('storage')->update( 'app_pages_content', array('id_image' => (int) $fileId), ' id_page = '. (int) $pageId . ' AND id_lang = '. (int) $langId );
        
        return self::$registry->getService('storage')->executed();
      default:
        return false;
    }
  }
  
  public function updatePageListImageById( $actionId = 0, $pageListId = 0, $langId = 0, $fileId = 0 )
  {
    switch($actionId)
    {
      case 1:
        self::$registry->getService('storage')->update( 'app_page_list', array('id_background_image' => (int) $fileId), ' id_page_list = '. (int) $pageListId );
        
        return self::$registry->getService('storage')->executed();
      case 2:
        self::$registry->getService('storage')->update( 'app_page_list_content', array('id_image' => (int) $fileId), ' id_page_list = '. (int) $pageListId . ' AND id_lang = '. (int) $langId );
        
        return self::$registry->getService('storage')->executed();
      default:
        return false;
    }
  }
  
  public function updatePageRouteById( $routeId = 0, $pageId = 0, $langId = 0 )
  {
    self::$registry->getService('storage')->update( 'app_pages_content', array('id_route' => (int) $routeId), ' id_page = '. (int) $pageId . ' AND id_lang = '. (int) $langId );
        
    return self::$registry->getService('storage')->executed();
  }
  
  public function updatePageListRouteById( $routeId = 0, $pageListId = 0, $langId = 0 )
  {
    self::$registry->getService('storage')->update( 'app_page_list_content', array('id_route' => (int) $routeId), ' id_page_list = '. (int) $pageListId . ' AND id_lang = '. (int) $langId );
        
    return self::$registry->getService('storage')->executed();
  }
  
  public function updatePageById( $changes = null, $pageId = 0 )
  {
    self::$registry->getService('storage')->update( 'app_pages', $changes, ' id_page = '. (int) $pageId );
    
    return self::$registry->getService('storage')->executed();
  }
  
  public function updatePageListById( $changes = null, $pageListId = 0 )
  {
    self::$registry->getService('storage')->update( 'app_page_list', $changes, ' id_page_list = '. (int) $pageListId );
    
    return self::$registry->getService('storage')->executed();
  }
  
  public function updatePageContentById( $changes = null, $pageId = 0, $langId = 0 )
  {
    self::$registry->getService('storage')->update( 'app_pages_content', $changes, ' id_page = '. (int) $pageId . ' AND id_lang = '. (int) $langId );
    
    return self::$registry->getService('storage')->executed();
  }
  
  public function updatePageListContentById( $changes = null, $pageListId = 0, $langId = 0 )
  {
    self::$registry->getService('storage')->update( 'app_page_list_content', $changes, ' id_page_list = '. (int) $pageListId . ' AND id_lang = '. (int) $langId );
    
    return self::$registry->getService('storage')->executed();
  }
  
  public function updatePageInPageListById( $changes = null, $pageListId = 0, $pageId = 0 )
  {
    self::$registry->getService('storage')->update( 'app_page_list_pages', $changes, ' id_page_list = '. (int) $pageListId . ' AND id_page = '. (int) $pageId );
    
    return self::$registry->getService('storage')->executed();
  }
  
  public function countPages( $ignoreList = null, $useList = null, $usePL = false, $pageListId = 0 )
  {
    $qry = "SELECT
              (count(id_page)) as avx
            FROM
              app_pages";
    $keys = null;
    if((bool) $usePL === true) {
      $qry = "SELECT
              (count(id_page)) as avx
            FROM
              app_page_list_pages";
      $keys = array(
        ':id_page_list' => (int) $pageListId
      );
    }
    if(is_array($ignoreList) && (count($ignoreList) > 0)) {
      $qry .= " WHERE id_page NOT IN (".implode(",",$ignoreList).")";
    }
    if(is_array($useList) && (count($useList) > 0)) {
      $qry .= ((is_null($ignoreList)) ? ' WHERE ' : ' AND ' )." id_page IN (".implode(",",$useList).")";
    }
    self::$registry->getService('storage')->executeQuery( $qry, $keys );
    
    return (self::$registry->getService('storage')->rowCount() > 0) ? (int) self::$registry->getService('storage')->getResult()[0]->avx : 0;
  }
  
  public function countList( $useList = null )
  {
    $qry = "SELECT
              (count(id_page_list)) as avx
            FROM
              app_page_list";
    if(is_array($useList) && (count($useList) > 0)) {
      $qry .= " WHERE id_page IN (".implode(",",$useList).")";
    }
    self::$registry->getService('storage')->executeQuery( $qry );
    
    return (self::$registry->getService('storage')->rowCount() > 0) ? (int) self::$registry->getService('storage')->getResult()[0]->avx : 0;
  }
  
  public function countLastOrder( $pageListId = 0 )
  {
    $qry = "SELECT
              position
            FROM
              app_page_list_pages
            WHERE
              position != 0";
    $keys = array(
      ':id_page_list' => (int) $pageListId
    );
    $filter = "ORDER BY position DESC LIMIT 1";
    self::$registry->getService('storage')->executeQuery( $qry, $keys, $filter );
    
    return (self::$registry->getService('storage')->rowCount() > 0) ? (int) self::$registry->getService('storage')->getResult()[0]->position : 0;
  }
  
  public function countOrder( $pageListId = 0 )
  {
    $qry = "SELECT
              (count(id_page)) as avx
            FROM
              app_page_list_pages
            WHERE
              position != 0";
    $keys = array(
      ':id_page_list' => (int) $pageListId
    );
    self::$registry->getService('storage')->executeQuery( $qry, $keys );
    
    return (self::$registry->getService('storage')->rowCount() > 0) ? (int) self::$registry->getService('storage')->getResult()[0]->avx : 0;
  }
  
  public function countNotOrder( $pageListId = 0 )
  {
    $qry = "SELECT
              (count(id_page)) as avx
            FROM
              app_page_list_pages
            WHERE
              position = 0";
    $keys = array(
      ':id_page_list' => (int) $pageListId
    );
    self::$registry->getService('storage')->executeQuery( $qry, $keys );
    
    return (self::$registry->getService('storage')->rowCount() > 0) ? (int) self::$registry->getService('storage')->getResult()[0]->avx : 0;
  }
  
  public function pageList( $pagination = false, $ignoreList = null, $useList = null, $filter = null, $usePL = false, $pageListId = 0 )
  {
    $qry = "SELECT
              a.id_page, a.pagename, a.id_background_image,
              a.background_color, a.publish, a.owner,
              a.upd_date, b.first_name, b.last_name
            FROM
              app_pages a
            LEFT JOIN
              app_users_info b
            ON
              a.owner = b.id_user";
    $keys = null;
    // PAGES IN PAGE LIST
    if((bool) $usePL === true) {
      if(is_null($filter)) {
        $qry = "SELECT 
                  * 
                FROM 
                  (
                    SELECT
                      a.id_page, a.pagename, a.id_background_image,
                      a.background_color, a.owner, a.upd_date,
                      b.first_name, b.last_name, c.publish, c.position
                    FROM
                      app_pages a
                    LEFT JOIN
                      app_users_info b
                    ON
                      a.owner = b.id_user
                    INNER JOIN
                      app_page_list_pages c
                    ON
                      a.id_page = c.id_page
                    WHERE
                      c.id_page_list = ".(int) $pageListId."
                    AND    		
                      c.position != 0
                    ORDER BY 
                      c.position ASC               
                  ) as A 
                UNION
                  SELECT 
                    * 
                  FROM 
                    (
                      SELECT
                        a.id_page, a.pagename, a.id_background_image,
                        a.background_color, a.owner, a.upd_date,
                        b.first_name, b.last_name, c.publish, c.position
                      FROM
                        app_pages a
                      LEFT JOIN
                        app_users_info b
                      ON
                        a.owner = b.id_user
                      INNER JOIN
                        app_page_list_pages c
                      ON
                        a.id_page = c.id_page
                      WHERE
                        c.id_page_list = ".(int) $pageListId."
                      AND
                        c.position = 0
                      ORDER BY 
                        UNIX_TIMESTAMP(a.created) DESC
                    ) as B";
      } else {
        $qry = "SELECT
                  a.id_page, a.pagename, a.id_background_image,
                  a.background_color, a.owner, a.upd_date,
                  b.first_name, b.last_name, c.publish, c.position
                FROM
                  app_pages a
                LEFT JOIN
                  app_users_info b
                ON
                  a.owner = b.id_user
                INNER JOIN
                  app_page_list_pages c
                ON
                  a.id_page = c.id_page";
        $keys = array(
          'c.id_page_list' => (int) $pageListId
        );
      }
    }
    if(is_array($ignoreList) && (count($ignoreList) > 0)) {
      $qry .= ((((bool) $usePL === false)) ? ' WHERE ' : ' AND ' ).((((bool) $usePL === true) && is_null($filter)) ? ' id_page ' : ' a.id_page ' )." NOT IN (".implode(",",$ignoreList).")";
    }
    if(is_array($useList) && (count($useList) > 0)) {
      $qry .= ((is_null($ignoreList)) ? ' WHERE ' : ' AND ' ).((((bool) $usePL === true) && is_null($filter)) ? ' id_page ' : ' a.id_page ' )." IN (".implode(",",$useList).")";
    }
    if($pagination) {
      self::$registry->getService('pagination')->fetch( $qry, $keys, $filter );
    } else {
      self::$registry->getService('storage')->executeQuery( $qry, $keys, $filter );
    }
    if(self::$registry->getService('storage')->rowCount() > 0) {
      $data = self::$registry->getService('storage')->getResult();
      
      foreach($data as $key => $value) {
        $data[ $key ]->background = ((int) $value->id_background_image > 0) ? self::$registry->getService('drive')->fileById( $value->id_background_image ) : null;
        
        unset($data[ $key ]->id_background_image);
      }
      return $data;
    }
    return null;
  }
  
  public function listTable( $pagination = false, $useList = null, $filter = null, $limit = 0 )
  {
    $qry = "SELECT
              a.id_page_list, a.page_list_name, a.id_background_image,
              a.background_color, a.publish, a.owner,
              a.upd_date, b.first_name, b.last_name
            FROM
              app_page_list a
            LEFT JOIN
              app_users_info b
            ON
              a.owner = b.id_user";
    if(is_array($useList) && (count($useList) > 0)) {
      $qry .= " WHERE a.id_page_list IN (".implode(",",$useList).")";
    }
    if($pagination) {
      self::$registry->getService('pagination')->fetch( $qry, null, $filter );
    } else {
      self::$registry->getService('storage')->executeQuery( $qry, null, $filter );
    }
    if(self::$registry->getService('storage')->rowCount() > 0) {
      $data = self::$registry->getService('storage')->getResult();
      
      foreach($data as $key => $value) {
        $data[ $key ]->background = ((int) $value->id_background_image > 0) ? self::$registry->getService('drive')->fileById( $value->id_background_image ) : null;
        $data[ $key ]->n_o_pages  = $this->__getNumberOfPagesByPageListId( $value->id_page_list );
        
        unset($data[ $key ]->id_background_image);
      }
      return $data;
    }
    return null;
  }
  
  private function __getNumberOfPagesByPageListId( $pageListId = 0 )
  {
    $qry = "SELECT
              (count(id_page)) as avx
            FROM
              app_page_list_pages";
    $keys = array(
      ':id_page_list' => (int) $pageListId
    );
    self::$registry->getService('storage')->executeQuery( $qry, $keys );
    
    return (self::$registry->getService('storage')->rowCount() > 0) ? (int) self::$registry->getService('storage')->getResult()[0]->avx : 0;
  }
  
  public function pageIdsByKeywords( $keywords = null )
  {
    // CLEAR
    $keywords2 = htmlspecialchars(html_entity_decode(self::$registry->getService('irequest')->sanitize( $keywords ), ENT_QUOTES, "UTF-8"), ENT_QUOTES, "UTF-8");
    // QUERY
    $qry = "SELECT
              *
            FROM 
            (
            SELECT
              id_page, MATCH(a_index,b_index,c_index,d_index) AGAINST('".$keywords2."' IN BOOLEAN MODE) AS score
            FROM
              app_page_full_text_indexes
            WHERE
              MATCH(a_index,b_index,c_index,d_index) AGAINST('".$keywords2."' IN BOOLEAN MODE)
            GROUP BY
              id_page
            ) as result
            ORDER BY
              score DESC";
    // FETCH
    self::$registry->getService('storage')->executeQuery( $qry );
    // ids
    $data = [];
    // Result
    if(self::$registry->getService('storage')->rowCount() > 0) {
      $ids = self::$registry->getService('storage')->getResult();
      
      foreach($ids as $value) {
        $data[] = $value->id_page;
      }
    } else {
      $qry2 = "SELECT 
                id_page
              FROM 
                app_page_full_text_indexes 
              WHERE
                a_index LIKE ('%".implode('_',explode(' ',$keywords2))."%')
              OR
                b_index LIKE ('%".implode('_',explode(' ',$keywords2))."%')
              OR
                c_index LIKE ('%".implode('_',explode(' ',$keywords2))."%')
              OR
                d_index LIKE ('%".implode('_',explode(' ',$keywords2))."%')
              GROUP BY
                id_page";
      self::$registry->getService('storage')->executeQuery( $qry2 );

      if(self::$registry->getService('storage')->rowCount() > 0) {
        $ids2 = self::$registry->getService('storage')->getResult();

        foreach($ids2 as $value) {
          $data[] = $value->id_page;
        }
      }
    }
    return (is_array($data) && (count($data) > 0)) ? $data : null;
  }
  
  public function pageListIdsByKeywords( $keywords = null )
  {
    // CLEAR
    $keywords2 = htmlspecialchars(html_entity_decode(self::$registry->getService('irequest')->sanitize( $keywords ), ENT_QUOTES, "UTF-8"), ENT_QUOTES, "UTF-8");
    // QUERY
    $qry = "SELECT
              *
            FROM 
            (
            SELECT
              id_page_list, MATCH(a_index,b_index,c_index,d_index) AGAINST('".$keywords2."' IN BOOLEAN MODE) AS score
            FROM
              app_page_list_full_text_indexes
            WHERE
              MATCH(a_index,b_index,c_index,d_index) AGAINST('".$keywords2."' IN BOOLEAN MODE)
            GROUP BY
              id_page_list
            ) as result
            ORDER BY
              score DESC";
    // FETCH
    self::$registry->getService('storage')->executeQuery( $qry );
    // ids
    $data = [];
    // Result
    if(self::$registry->getService('storage')->rowCount() > 0) {
      $ids = self::$registry->getService('storage')->getResult();
      
      foreach($ids as $value) {
        $data[] = $value->id_page_list;
      }
    } else {
      $qry2 = "SELECT 
                id_page_list
              FROM 
                app_page_list_full_text_indexes 
              WHERE
                a_index LIKE ('%".implode('_',explode(' ',$keywords2))."%')
              OR
                b_index LIKE ('%".implode('_',explode(' ',$keywords2))."%')
              OR
                c_index LIKE ('%".implode('_',explode(' ',$keywords2))."%')
              OR
                d_index LIKE ('%".implode('_',explode(' ',$keywords2))."%')
              GROUP BY
                id_page_list";
      self::$registry->getService('storage')->executeQuery( $qry2 );

      if(self::$registry->getService('storage')->rowCount() > 0) {
        $ids2 = self::$registry->getService('storage')->getResult();

        foreach($ids2 as $value) {
          $data[] = $value->id_page_list;
        }
      }
    }
    return (is_array($data) && (count($data) > 0)) ? $data : null;
  }
  
  public function pageIdsByPageListId( $pageListId = 0 )
  {
    $qry = "SELECT
              id_page
            FROM
              app_page_list_pages";
    $keys = array(
      ':id_page_list' => (int) $pageListId
    );
    self::$registry->getService('storage')->executeQuery( $qry, $keys );
    
    if(self::$registry->getService('storage')->rowCount() > 0) {
      $result = self::$registry->getService('storage')->getResult();
      $data = [];

      foreach($result as $value) {
        $data[] = (int) $value->id_page;
      }
    }
    return (isset($data) && (count($data) > 0)) ? $data : null;
  }
  
  public function metaRobots()
  {
    $qry = "SELECT
              id_robot, value
            FROM
              app_pages_robots";
    self::$registry->getService('storage')->executeQuery( $qry );
    
    return (self::$registry->getService('storage')->rowCount() > 0) ? self::$registry->getService('storage')->getResult() : null;
  }
  
  public function pageById( $pageId = 0 )
  {
    $qry1 = "SELECT
              id_page, id_page_layout, pagename, `owner`, id_background_image, background_color, css_id, css_classes,
              show_page_title, show_sitelinks, allow_attachments, allow_comments, visitor, registred_user, signature,
              show_date, enabled_aside, widget, publish
            FROM
              app_pages";
    $keys1 = array(
      ':id_page' => (int) $pageId
    );
    self::$registry->getService('storage')->executeQuery( $qry1, $keys1 );
    
    if(self::$registry->getService('storage')->rowCount() > 0) {
      $page = self::$registry->getService('storage')->getResult()[0];
      $page->background_image = ((int) $page->id_background_image > 0) ? self::$registry->getService('drive')->fileById( $page->id_background_image ) : null;
      
      $qry2 = "SELECT
                id_lang, id_route, id_image, color, heading, subheading, description,
                site_title, meta_keywords, meta_description, meta_robot, html_content
              FROM
                app_pages_content";
      $keys2 = array(
        ':id_page' => $pageId
      );
      self::$registry->getService('storage')->executeQuery( $qry2, $keys2 );

      if(self::$registry->getService('storage')->rowCount() > 0) {
        $data = self::$registry->getService('storage')->getResult();
        $page->lang = [];
        
        foreach($data as $value) {
          $page->lang[ $value->id_lang ] = $value;
          $page->lang[ $value->id_lang ]->image = ((int) $value->id_image > 0) ? self::$registry->getService('drive')->fileById( $value->id_image ) : null;
          
          unset($page->lang[ $value->id_lang ]->id_image);
          unset($page->lang[ $value->id_lang ]->id_lang);
        }
        return $page;
      }
      return null;
    }
    return null;    
  }
  
  public function pageListById( $pageListId = 0 )
  {
    $qry = "SELECT
              id_page_list, id_page_list_layout, id_background_image, use_pagination, 
              page_list_name, background_color, css_id, css_classes, show_page_list_title, 
              visitor, registred_user, enabled_aside, widget, publish, per_page, `owner`,
              id_list_layout
            FROM
              app_page_list";
    $keys = array(
      ':id_page_list' => (int) $pageListId
    );
    self::$registry->getService('storage')->executeQuery( $qry, $keys );
    
    if(self::$registry->getService('storage')->rowCount() > 0) {
      $data = self::$registry->getService('storage')->getResult()[0];
      // BACKGROUND
      $data->background_image = ((int) $data->id_background_image > 0) ? self::$registry->getService('drive')->fileById( $data->id_background_image ) : null;
      // HTML - SEO
      $data->lang = $this->__pageListContentById( $data->id_page_list );
      // RETURN
      return $data;
    }
    return null;
  }
  
  private function __pageListContentById( $pageListId = 0 )
  {
    $qry = "SELECT
              id_lang, id_route, id_image, color, heading, description,
              site_title, meta_keywords, meta_description, meta_robot,
              html_content
            FROM
              app_page_list_content";
    $keys = array(
      ':id_page_list' => (int) $pageListId
    );
    self::$registry->getService('storage')->executeQuery( $qry, $keys );

    if(self::$registry->getService('storage')->rowCount() > 0) {
      $result = self::$registry->getService('storage')->getResult();
      $data = [];

      foreach($result as $value) {
        $data[ $value->id_lang ] = $value;
        $data[ $value->id_lang ]->image = ((int) $value->id_image > 0) ? self::$registry->getService('drive')->fileById( $value->id_image ) : null;

        unset($data[ $value->id_lang ]->id_image);
        unset($data[ $value->id_lang ]->id_lang);
      }
      return $data;
    }
    return null;
  }
  
  public function pageHeadingByPageId( $pageId = 0 )
  {
    $qry = "SELECT
              id_lang, heading
            FROM
              app_pages_content";
    $keys = array(
      ':id_page' => (int) $pageId
    );
    self::$registry->getService('storage')->executeQuery( $qry, $keys );
    
    if(self::$registry->getService('storage')->rowCount() > 0) {
      $data = self::$registry->getService('storage')->getResult();
      
      foreach($data as $key => $value) {
        $data[ $key ]->heading = html_entity_decode($value->heading, ENT_QUOTES, "UTF-8");
      }
      return $data;
    }
    return null;
  }
  
  public function pageObjByRouteId( $routeId = 0 )
  {
    $qry = "SELECT
              a.id_page, a.id_lang, b.publish
            FROM
              app_pages_content a
            INNER JOIN
              app_pages b
            ON
              a.id_page = b.id_page";
    $keys = array(
      ':id_route' => (int) $routeId
    );
    self::$registry->getService('storage')->executeQuery( $qry, $keys );
    
    return (self::$registry->getService('storage')->rowCount() > 0) ? self::$registry->getService('storage')->getResult()[0] : null;
  }
  
  public function pageRouteIdById( $pageId = 0, $langId = 0 )
  {
    $qry = "SELECT
              id_route
            FROM
              app_pages_content";
    $keys = array(
      ':id_page' => (int) $pageId,
      ':id_lang' => (int) $langId
    );
    self::$registry->getService('storage')->executeQuery( $qry, $keys );
    
    return (self::$registry->getService('storage')->rowCount() > 0) ? (int) self::$registry->getService('storage')->getResult()[0]->id_route : 0;
  }
  
  public function pageListObjByRouteId( $routeId = 0 )
  {
    $qry = "SELECT
              a.id_page_list, a.id_lang, b.use_pagination, b.publish, b.per_page
            FROM
              app_page_list_content a
            INNER JOIN
              app_page_list b
            ON
              a.id_page_list = b.id_page_list";
    $keys = array(
      ':id_route' => (int) $routeId
    );
    self::$registry->getService('storage')->executeQuery( $qry, $keys );
    
    if(self::$registry->getService('storage')->rowCount() > 0) {
      $data = self::$registry->getService('storage')->getResult()[0];
      $data->path = self::$registry->getService('router')->routeById( $routeId )->path;
      
      return $data;
    }
    return null;
  }
  
  public function pageOnSiteById( $pageId = 0, $langId = 0 )
  {
    $qry = "SELECT
              a.id_page, a.id_page_layout, a.owner, a.id_background_image, a.background_color, a.css_id, a.css_classes,
              a.show_page_title, a.show_sitelinks, a.allow_attachments, a.allow_comments, a.signature, a.show_date,
              a.enabled_aside, a.widget, a.upd_date, a.created, b.id_image, b.color, b.id_route, b.heading, b.subheading, b.description,
              b.site_title, b.meta_keywords, b.meta_description, b.meta_robot, b.html_content
            FROM
              app_pages a,
              app_pages_content b
            WHERE
              a.id_page = b.id_page";
    $keys = array(
      ':a.id_page'  => (int) $pageId,
      ':b.id_lang'  => (int) $langId,
      ':a.publish'  => 1
    );
    self::$registry->getService('storage')->executeQuery( $qry, $keys );
    
    if(self::$registry->getService('storage')->rowCount() > 0) {
      $data  = self::$registry->getService('storage')->getResult()[0];
      $user  = self::$registry->getService('users')->getUserDataByID( $data->owner )[0];
      $route = self::$registry->getService('router')->routeById( $data->id_route );
      
      $data->background_image = ( (int) $data->id_background_image > 0 ) ? self::$registry->getService('drive')->fileById( $data->id_background_image ) : null;
      $data->owner   = $user->first_name.'&nbsp;'.$user->last_name;
      $data->image   = ((int) $data->id_image > 0) ? self::$registry->getService('drive')->fileById( $data->id_image ) : null;
      $data->gallery = ($this->isPageGalleryById( $pageId )) ? self::$registry->getService('gallery')->galleryByPageId($pageId, $langId) : null;
      $data->link    = (is_object($route)) ? $route->path : null;
      
      unset($data->id_background_image);
      unset($data->id_image);
      
      return $data;
    }
    return null;
  }
  
  public function pageListShortLinksOnSiteById( $langId = 0, $limit = 0 )
  {
    $qry = "SELECT
              b.id_page_list, a.id_route, a.heading, a.description
            FROM
              app_page_list_content a
            INNER JOIN
              app_page_list b
            ON
              a.id_page_list = b.id_page_list";
    $keys = array(
      ':a.id_lang' => (int) $langId,
      ':b.publish' => 1
    );
    $filter = ((int) $limit > 0) ? ' LIMIT '.(int) $limit : null;
    
    self::$registry->getService('storage')->executeQuery( $qry, $keys, $filter );
    
    if(self::$registry->getService('storage')->rowCount() > 0) {
      $data = self::$registry->getService('storage')->getResult();
      
      foreach($data as $key => $value) {
        $route = self::$registry->getService('router')->routeById( $value->id_route );
        
        $data[ $key ]->path = (is_object($route)) ? $route->path : null;
        
        unset($data[ $key ]->id_route);
      }
      return $data;
    }
    return null;
  }
  
  public function pageListOnSiteById( $pageListId = 0, $langId = 0 )
  {
    $qry = "SELECT
              a.id_page_list, a.id_page_list_layout, a.id_list_layout, a.id_background_image, a.use_pagination,
              a.page_list_name, a.background_color, a.css_id, a.css_classes, a.show_page_list_title,
              a.visitor, a.registred_user, a.enabled_aside, a.widget, a.per_page, a.publish, a.owner,
              b.id_route, b.id_image, b.color, b.heading, b.description, b.site_title, b.meta_keywords,
              b.meta_description, b.meta_robot, b.html_content
            FROM
              app_page_list a,
              app_page_list_content b
            WHERE
              a.id_page_list = b.id_page_list";
    $keys = array(
      ':a.id_page_list' => (int) $pageListId,
      ':b.id_lang'      => (int) $langId,
      ':a.publish'      => 1
    );
    self::$registry->getService('storage')->executeQuery( $qry, $keys );
    
    if(self::$registry->getService('storage')->rowCount() > 0) {
      $data  = self::$registry->getService('storage')->getResult()[0];
      $user  = self::$registry->getService('users')->getUserDataByID( $data->owner )[0];
      $route = ((int) $data->id_route > 0) ? self::$registry->getService('router')->routeById( $data->id_route ) : null;
      
      $data->background_image = ( (int) $data->id_background_image > 0 ) ? self::$registry->getService('drive')->fileById( $data->id_background_image ) : null;
      $data->owner = $user->first_name.'&nbsp;'.$user->last_name;
      $data->image = ((int) $data->id_image > 0) ? self::$registry->getService('drive')->fileById( $data->id_image ) : null;
      $data->link  = (is_object($route)) ? $route->path : null;
      $data->list  = $this->__pagesOnSiteByPageListId($data->id_page_list, $langId, (((int) $data->use_pagination === 1) ? true : false));
      
      unset($data->id_background_image);
      unset($data->id_image);
      
      return $data;
    }
    return null;
  }
  
  private function __pagesOnSiteByPageListId( $pageListId = 0, $langId = 0, $pagination = false )
  {
    $qry = "SELECT 
              * 
            FROM 
              (
                SELECT
                  a.id_page
                FROM
                  app_page_list_pages a
                INNER JOIN
                  app_pages b
                ON
                  a.id_page = b.id_page
                  WHERE
                    a.id_page_list = ".(int) $pageListId."
                  AND
                    a.publish = 1
                  AND
                    b.publish = 1
                  AND
                    a.position != 0
                  ORDER BY 
                    position ASC               
              ) as A 
            UNION
              SELECT 
                * 
              FROM 
                (
                  SELECT
                    a.id_page
                  FROM
                    app_page_list_pages a
                  INNER JOIN
                    app_pages b
                  ON
                    a.id_page = b.id_page
                  WHERE
                    a.id_page_list = ".(int) $pageListId."
                  AND
                    a.publish = 1
                  AND
                    b.publish = 1
                  AND
                    a.position = 0
                  ORDER BY 
                    UNIX_TIMESTAMP(b.created) DESC
                ) as B";
    if($pagination) {
      self::$registry->getService('pagination')->fetch( $qry );
    } else {
      self::$registry->getService('storage')->executeQuery( $qry );
    }    
    if(self::$registry->getService('storage')->rowCount() > 0) {
      $pageList = [];
      
      foreach(self::$registry->getService('storage')->getResult() as $key => $value) {
        $pageList[ $key ] = $this->pageOnSiteById($value->id_page, $langId);
      }
      return $pageList;
    }
    return null;
  }
  
  public function pageUrlById( $pageId = 0, $langId = 0 )
  {
    $qry = "SELECT
              id_route
            FROM
              app_pages_content";
    $keys = array(
      ':id_page' => (int) $pageId,
      ':id_lang' => (int) $langId
    );
    self::$registry->getService('storage')->executeQuery( $qry, $keys );
    
    if(self::$registry->getService('storage')->rowCount() > 0) {
      $routeId = (int) self::$registry->getService('storage')->getResult()[0]->id_route;
      
      if(self::$registry->getService('router')->routeById( $routeId )) {
        return self::$registry->getService('router')->routeById( $routeId )->path;
      }
    }
    return null;
  }
  
  public function urlKeysByPageId( $pageId = 0 )
  {
      $qry = "SELECT
               id_lang, link_rewrite
              FROM
               app_pages_content";
    $keys = array(
      ':id_page' => (int) $pageId,
    );
    self::$registry->getService('storage')->executeQuery( $qry, $keys );
    
    return (self::$registry->getService('storage')->rowCount() > 0) ? self::$registry->getService('storage')->getResult() : null;
  }
  
  public function pageAnotById( $pageId = 0, $langId = 0 )
  {
    $qry = "SELECT
              b.link_rewrite, b.heading, b.description
            FROM
              app_pages a,
              app_pages_content b
            WHERE
              a.id_page = b.id_page";
    $keys = array(
      ':a.id_page' => (int) $pageId,
      ':b.id_lang' => (int) $langId,
      ':a.visible' => 1
    );
    self::$registry->getService('storage')->executeQuery( $qry, $keys );
    
    if(self::$registry->getService('storage')->rowCount() > 0) {
      $data = self::$registry->getService('storage')->getResult()[0];
      $data->image = ( (int) $data->id_image > 0 ) ? self::$registry->getService('drive')->fileById( $data->id_image ) : null;
      
      unset($data->id_image);
      
      return $data;
    }
    return null;
  }
  
  public function isPageById( $pageId = 0 )
  {
    $qry = "SELECT
              id_page
            FROM
              app_pages";
    $keys = array(
      ':id_page' => (int) $pageId
    );
    self::$registry->getService('storage')->executeQuery( $qry, $keys );
    
    return (self::$registry->getService('storage')->rowCount() > 0) ? true : false;
  }
  
  public function isPageListById( $pageListId = 0 )
  {
    $qry = "SELECT
              id_page_list
            FROM
              app_page_list";
    $keys = array(
      ':id_page_list' => (int) $pageListId
    );
    self::$registry->getService('storage')->executeQuery( $qry, $keys );
    
    return (self::$registry->getService('storage')->rowCount() > 0) ? true : false;
  }
  
  public function isPageInPageListById( $pageListId = 0, $pageId = 0 )
  {
    $qry = "SELECT
              id_page
            FROM
              app_page_list_pages";
    $keys = array(
      ':id_page_list' => (int) $pageListId,
      ':id_page'      => (int) $pageId
    );
    self::$registry->getService('storage')->executeQuery( $qry, $keys );
    
    return (self::$registry->getService('storage')->rowCount() > 0) ? true : false;
  }
  
  public function isPageContentById( $pageId = 0, $langId = 0 )
  {
    $qry = "SELECT
              id_page
            FROM
              app_pages_content";
    $keys = array(
      ':id_page' => (int) $pageId,
      ':id_lang' => (int) $langId
    );
    self::$registry->getService('storage')->executeQuery( $qry, $keys );
    
    return (self::$registry->getService('storage')->rowCount() > 0) ? true : false;
  }
  
  public function isPageListContentById( $pageListId = 0, $langId = 0 )
  {
    $qry = "SELECT
              id_page_list
            FROM
              app_page_list_content";
    $keys = array(
      ':id_page_list' => (int) $pageListId,
      ':id_lang'      => (int) $langId
    );
    self::$registry->getService('storage')->executeQuery( $qry, $keys );
    
    return (self::$registry->getService('storage')->rowCount() > 0) ? true : false;
  }
  
  public function isPageGalleryById( $pageId = 0 )
  {
    $qry = "SELECT
                id_page
            FROM
                app_gallery";
    $keys = array(
      ':id_page' => (int) $pageId
    );
    $filter = "GROUP BY id_page LIMIT 1";
    self::$registry->getService('storage')->executeQuery( $qry, $keys, $filter );
    
    return (self::$registry->getService('storage')->rowCount() > 0) ? true : false;
  }
  
  public function isPageSliderById( $pageId = 0 )
  {
    $qry = "SELECT
              id_page
            FROM
              app_slider";
    $keys = array(
      ':id_page' => (int) $pageId
    );
    $filter = "GROUP BY id_page LIMIT 1";
    self::$registry->getService('storage')->executeQuery( $qry, $keys, $filter );
    
    return (self::$registry->getService('storage')->rowCount() > 0) ? true : false;
  }
  
  public function clearPageLangDataById( $pageId = 0 )
  {
    self::$registry->getService('storage')->delete( 'app_pages_content', ':id_page' , (int) $pageId );
    
    return self::$registry->getService('storage')->executed();
  }
  
  public function deletePageById( $pageId = 0 )
  {
    $status = [];
    
    // ST 1
    $status[] = $this->__deletePageRoutesById( $pageId );
    // ST 2
    self::$registry->getService('storage')->delete( 'app_pages', ':id_page', (int) $pageId );
    
    $status[] = self::$registry->getService('storage')->executed();
    // ST 3
    self::$registry->getService('storage')->delete( 'app_pages_content', ':id_page', (int) $pageId );
    
    $status[] = self::$registry->getService('storage')->executed();
    // ST 4
    self::$registry->getService('storage')->delete( 'app_page_full_text_indexes', ':id_page', (int) $pageId );
    
    $status[] = self::$registry->getService('storage')->executed();
    // RES
    return self::$registry->getService('helper')->checkStatus($status);
  }
  
  private function __deletePageRoutesById( $pageId = 0 )
  {
    $qry = "SELECT
              id_route
            FROM
              app_pages_content
            WHERE
              id_route != 0";
    $keys = array(
      ':id_page' => (int) $pageId
    );
    self::$registry->getService('storage')->executeQuery( $qry, $keys );
    
    if(self::$registry->getService('storage')->rowCount() > 0) {
      $status = [];
      
      foreach(self::$registry->getService('storage')->getResult() as $value) {
        $status[] = self::$registry->getService('irouter')->deleteRouteById( $value->id_route );
      }
      return self::$registry->getService('helper')->checkStatus($status);
    }
    return true;
  }
  
  public function deletePageListById( $pageListId = 0 )
  {
    $status = [];
    
    // ST 1
    $status[] = $this->__deletePageListRoutesById( $pageListId );
    // ST 2
    self::$registry->getService('storage')->delete( 'app_page_list', ':id_page_list', (int) $pageListId );
    
    $status[] = self::$registry->getService('storage')->executed();
    // ST 3
    self::$registry->getService('storage')->delete( 'app_page_list_content', ':id_page_list', (int) $pageListId );
    
    $status[] = self::$registry->getService('storage')->executed();
    // ST 4
    self::$registry->getService('storage')->delete( 'app_page_list_pages', ':id_page_list', (int) $pageListId );
    
    $status[] = self::$registry->getService('storage')->executed();
    // ST 5
    self::$registry->getService('storage')->delete( 'app_page_list_full_text_indexes', ':id_page_list', (int) $pageListId );
    
    $status[] = self::$registry->getService('storage')->executed();
    // RES
    return self::$registry->getService('helper')->checkStatus($status);
  }
  
  private function __deletePageListRoutesById( $pageListId = 0 )
  {
    $qry = "SELECT
              id_route
            FROM
              app_page_list_content
            WHERE
              id_route != 0";
    $keys = array(
      ':id_page_list' => (int) $pageListId
    );
    self::$registry->getService('storage')->executeQuery( $qry, $keys );
    
    if(self::$registry->getService('storage')->rowCount() > 0) {
      $data = self::$registry->getService('storage')->getResult();
      $status = [];
      
      foreach($data as $value) {
        $status[] = self::$registry->getService('irouter')->deleteRouteById( $value->id_route );
      }
      return self::$registry->getService('helper')->checkStatus($status);
    }
    return true;
  }
  
  public function deletePageFullTextIndexByPageId( $pageId = 0, $langId = 0 )
  {
    self::$registry->getService('storage')->delete( 'app_page_full_text_indexes', array(':id_page' => (int) $pageId, ':id_lang' => (int) $langId) );
    
    return self::$registry->getService('storage')->executed();
  }
  
  public function deletePageListFullTextIndexByPageId( $pageListId = 0, $langId = 0 )
  {
    self::$registry->getService('storage')->delete( 'app_page_list_full_text_indexes', array(':id_page_list' => (int) $pageListId, ':id_lang' => (int) $langId) );
    
    return self::$registry->getService('storage')->executed();
  }
  
  public function deletePageFromPageListById( $pageListId = 0, $pageId = 0 )
  {
    self::$registry->getService('storage')->delete( 'app_page_list_pages', array(':id_page_list' => (int) $pageListId, ':id_page' => (int) $pageId) );
    
    return self::$registry->getService('storage')->executed();
  }
  
  /*
  *
  * PAGES
  *
  **/
  
  public function unfiledPageList()
  {
    $qry1 = "SELECT
              id_page
            FROM
              app_nav_items";
    $keys1 = array(
      ':id_page' => 0
    );
    $filter1 = "GROUP BY id_page";
    self::$registry->getService('storage')->executeQuery( $qry1, $keys1, $filter1 );
    
    if(self::$registry->getService('storage')->rowCount() > 0) {
      $ids = [];
      
      foreach(self::$registry->getService('storage')->getResult() as $value) {
        $ids[] = (int) $value->id_page;
      }
      $qry2 = "SELECT
                a.id_page, a.pagename, a.created, 
                b.first_name, b.last_name
              FROM
                app_pages a,
                app_users_info b
              WHERE
                a.owner = b.id_user";
      $filter2 = "AND id_page NOT IN(".implode(",",$ids).")";
      self::$registry->getService('storage')->executeQuery( $qry2, null, $filter2 );
      
      return (self::$registry->getService('storage')->rowCount() > 0) ? self::$registry->getService('storage')->getResult() : null;
    }
    return null;
  }
  
  public function pageListByRIN( $navId = '' )
  {
    $ids = $this->__getPageIdsByNavId( $navId, 0, true );
    
    $qry = "SELECT
              a.id_page, a.pagename, a.created, 
              b.first_name, b.last_name
            FROM
              app_pages a,
              app_users_info b
            WHERE
              a.owner = b.id_user";
    $filter = "AND id_page IN(".implode(",",$ids).")";
    self::$registry->getService('storage')->executeQuery( $qry, null, $filter );
    
    return (self::$registry->getService('storage')->rowCount() > 0) ? self::$registry->getService('storage')->getResult() : null;
  }
  
  public function pageListByIND( $navId = '', $itemId = 0 )
  {
    $ids = $this->__getPageIdsByNavId( $navId, $itemId, false );
    
    $qry = "SELECT
              a.id_page, a.pagename, a.created, 
              b.first_name, b.last_name
            FROM
              app_pages a,
              app_users_info b
            WHERE
              a.owner = b.id_user";
    $filter = " AND id_page IN(".implode(",",$ids).")";
    self::$registry->getService('storage')->executeQuery( $qry, null, $filter );
      
    return (self::$registry->getService('storage')->rowCount() > 0) ? self::$registry->getService('storage')->getResult() : null;
  }
  
  public function unfiledPageListCount()
  {
    return count($this->unfiledPageList());
  }
  
  private function __getPageIdsByNavId( $navId = '', $itemId = 0, $root = true )
  {
    $qry = "SELECT
              id_page
            FROM
              app_nav_items";
    $keys = array(
      ':id_nav'    => self::$registry->getService('nav')->navIdByHash( $navId ),
      ':is_root'   => ($root) ? 1 : 0,
    );
    if($root) {
      $keys[':id_parent'] = (int) $itemId;
    }
    $filter = "GROUP BY id_page";
    self::$registry->getService('storage')->executeQuery( $qry, $keys, $filter );
    
    if(self::$registry->getService('storage')->rowCount() > 0) {
      $data = self::$registry->getService('storage')->getResult();
      $ids  = [];
      
      foreach( $data as $value) {
        $ids[] = (int) $value->id_page;
      }
      return $ids;
    }
    return null;
  }
  
}