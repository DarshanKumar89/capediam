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

class catalogModel {
  
  /** @var Registry **/
  protected static $registry;

  public function __construct( Registry $registry ) 
  {
    self::$registry = $registry;
  }
  
  /**
  *
  * CATALOG_CATEGORY
  *
  **/
  
  public function createCategory( $data = null )
  {
    self::$registry->getService('storage')->insert( 'app_catalog_category', $data );
    
    return self::$registry->getService('storage')->lastInsertId();
  }
  
  public function categoryList()
  {
    $qry = "SELECT
              a.id_category, b.category_name, b.description, a.enabled
            FROM
              app_catalog_category a,
              app_catalog_category_lang b
            WHERE
              a.id_category = b.id_category";
    $keys = array(
      ':b.id_lang' => ( $this->__haveCategorySupportLanguage( self::$registry->getService('languages')->getCurrentLanguage() ) ) ? self::$registry->getService('languages')->getCurrentLanguage() : $this->__getCategorySupportLanguage()
    );
    $filter = "ORDER BY position ASC";
    self::$registry->getService('storage')->executeQuery( $qry, $keys, $filter );
    
    return (self::$registry->getService('storage')->rowCount() > 0 ) ? self::$registry->getService('storage')->getResult() : [];
  }
  
  public function insertCategoryLang( $data = null )
  {
    self::$registry->getService('storage')->insert( 'app_catalog_category_lang', $data );
    
    return self::$registry->getService('storage')->executed();
  }
  
  
  
  
  
  
  public function articlesList()
  {
    $qry = "SELECT 
              a.article_id, c.article_name, c.short_description, a.visible, 
              a.created, a.date_upd, d.first_name, d.last_name, f.file_hash
            FROM
              app_catalog a
            INNER JOIN
              cms_langs b
            ON
              b.default = 1
            INNER JOIN
              app_catalog_lang c
            ON
              a.article_id = c.article_id
            AND
              c.lang_id = b.id
            LEFT JOIN
              app_users_info d
            ON 
              a.creator = d.user_id
            LEFT JOIN
              app_gallery_items_list e
            ON
              a.gallery_id = e.gallery_id
            AND
              e.item_main = 1
            LEFT JOIN
              app_drive_files f
            ON
              e.item_id = f.file_id";
    self::$registry->getService('storage')->executeQuery( $qry );
    
    return (self::$registry->getService('storage')->rowCount() > 0 ) ? self::$registry->getService('storage')->getResult() : [];
  }
  
  
  
  
  
  
  
  
  
  
  public function categoryDataById( $catId )
  {
    $data = [];
    
    $qry = "SELECT
              lang_id, cat_name, description, content, link_rewrite, 
              meta_title, meta_keywords, meta_description
            FROM
              app_catalog_categories_lang";
    $keys = array(
      ':cat_id' => $catId
    );
    self::$registry->getService('storage')->executeQuery( $qry, $keys );
    
    if(self::$registry->getService('storage')->rowCount() > 0 ) {
      $data['catId'] = $catId;
      
      foreach( self::$registry->getService('storage')->getResult() as $value )
      {
        $data['lang'][ $value->lang_id ] = $value;
      }
    }
    return $data;
  }
  
  public function isCategoryById( $catId )
  {
    $qry = "SELECT
              cat_id
            FROM
              app_catalog_categories";
    $keys = array(
      ':cat_id' => $catId
    );
    self::$registry->getService('storage')->executeQuery( $qry, $keys );
    
    return (self::$registry->getService('storage')->rowCount() > 0 ) ? true : false;
  }
  
  public function attributeList()
  {
    $qry = "SELECT
              attr_id, attr_name, description, active
            FROM
              app_catalog_attributes";
    self::$registry->getService('storage')->executeQuery( $qry );
    
    return (self::$registry->getService('storage')->rowCount() > 0) ? self::$registry->getService('storage')->getResult() : [];
  }
  
  public function articleDataById( $articleId )
  {
    $data = [];
    
    $qry1 = "SELECT
              article_id, attachment, gallery_id,
              show_article_title, show_related_articles,
              allow_attachments, allow_comments, status_id, visible
            FROM
              app_catalog";
    $keys1 = array(
      ':article_id' => $articleId
    );
    self::$registry->getService('storage')->executeQuery( $qry1, $keys1 );
    
    if(self::$registry->getService('storage')->rowCount() > 0 )
    {
      $data['base'] = self::$registry->getService('storage')->getResult()[0];
      
      $qry2 = "SELECT
                lang_id, article_name, link_rewrite, short_description,
                long_description, meta_title, meta_description, meta_keywords
              FROM
                app_catalog_lang";
      $keys2 = array(
        ':article_id' => $articleId
      );
      self::$registry->getService('storage')->executeQuery( $qry2, $keys2 );
      
      if(self::$registry->getService('storage')->rowCount() > 0 )
      {
        foreach( self::$registry->getService('storage')->getResult() as $value )
        {
          $data['lang'][ $value->lang_id ] = $value;
        }
      }
      
      $qry3 = "SELECT
                a.cat_id, c.cat_name, c.description
              FROM
                app_catalog_items_categories a
              INNER JOIN
                cms_langs b
              ON
                b.default = 1
              INNER JOIN
                app_catalog_categories_lang c
              ON
                a.cat_id = c.cat_id
              AND
                b.id = c.lang_id";
      $keys3 = array(
        ':a.article_id' => $articleId
      );
      self::$registry->getService('storage')->executeQuery( $qry3, $keys3 );
      
      $data['categories'] = (self::$registry->getService('storage')->rowCount() > 0 ) ? self::$registry->getService('storage')->getResult() : null;
      
      $qry4 = "SELECT
                b.attr_id, b.attr_name, a.attr_value
              FROM
                app_catalog_items_attributes a,
                app_catalog_attributes b
              WHERE
                a.attr_id = b.attr_id";
      $keys4 = array(
        ':a.article_id' => $articleId
      );
      self::$registry->getService('storage')->executeQuery( $qry4, $keys4 );
      
      $data['attributes'] = (self::$registry->getService('storage')->rowCount() > 0 ) ? self::$registry->getService('storage')->getResult() : null;
    }
    return $data;
  }
  
  public function isArticleById( $articleId )
  {
    $qry = "SELECT
              article_id
            FROM
              app_catalog";
    $keys = array(
      ':article_id' => $articleId
    );
    self::$registry->getService('storage')->executeQuery( $qry, $keys );
    
    return (self::$registry->getService('storage')->rowCount() > 0 ) ? true : false;
  }
  
  public function catIdByUrlKey( $key )
  {
    $qry = "SELECT
              cat_id
            FROM
              app_catalog_categories_lang";
    $keys = array(
      ':link_rewrite' => $key
    );
    self::$registry->getService('storage')->executeQuery( $qry, $keys );
    
    return (self::$registry->getService('storage')->rowCount() > 0 ) ? (int) self::$registry->getService('storage')->getResult()[0]->cat_id : null;
  }
  
  public function catLangIdByUrlKey( $key )
  {
    $qry = "SELECT
              lang_id
            FROM
              app_catalog_categories_lang";
    $keys = array(
      ':link_rewrite' => $key
    );
    self::$registry->getService('storage')->executeQuery( $qry, $keys );
    
    return (self::$registry->getService('storage')->rowCount() > 0 ) ? (int) self::$registry->getService('storage')->getResult()[0]->lang_id : null;
  }
  
  public function articlesListOnSiteByCatId( $catId, $langId )
  {
    $data = [];
    
    $qry1 = "SELECT
              a.cat_id, b.cat_name, b.content, b.link_rewrite,
              b.meta_title, b.meta_keywords, b.meta_description
            FROM
              app_catalog_categories a
            INNER JOIN
              app_catalog_categories_lang b
            ON
              a.cat_id = b.cat_id
            WHERE
              a.active = 1";
    $keys1 = array(
      ':a.cat_id' => $catId,
      ':b.lang_id'  => $langId
    );
    self::$registry->getService('storage')->executeQuery( $qry1, $keys1 );
    
    if(self::$registry->getService('storage')->rowCount() > 0 )
    {
      $data['category'] = self::$registry->getService('storage')->getResult()[0];
      
      $qry2 = "SELECT
                b.article_name, b.short_description, 
                b.link_rewrite, e.file_hash
              FROM
                app_catalog a
              INNER JOIN
                app_catalog_lang b
              ON
                a.article_id = b.article_id
              INNER JOIN
                app_catalog_items_categories c
              ON
                a.article_id = c.article_id
              LEFT JOIN
                app_gallery_items_list d
              ON
                a.gallery_id = d.gallery_id
              AND
                d.item_main = 1
              LEFT JOIN
                app_drive_files e
              ON
                d.item_id = e.file_id";
      $keys2 = array(
        ':a.visible'  => 1,
        ':c.cat_id'  => $catId,
        ':b.lang_id' => $langId
      );
      $filter2 = ' ORDER BY b.article_name ASC';
      self::$registry->getService('storage')->executeQuery( $qry2, $keys2, $filter2 );
      
      $data['list'] = (self::$registry->getService('storage')->rowCount() > 0 ) ? self::$registry->getService('storage')->getResult() : [];
    }
    return $data;
  }
  
  public function getArticleIdByKey( $key )
  {
    $qry = "SELECT
              article_id
            FROM
              app_catalog";
    $keys = array(
      ':link_rewrite' => $key
    );
    self::$registry->getService('storage')->executeQuery( $qry, $keys );
    
    return (self::$registry->getService('storage')->rowCount() > 0 ) ? (int) self::$registry->getService('storage')->getResult()[0]->article_id : null;
  }
  
  public function getArticleOnSiteById( $articleId )
  {
    $data = [];
    
    $qry = "SELECT
              article_name, long_description, meta_title,
              meta_description, meta_keywords, gallery_id,
              show_article_title, show_related_articles,
              allow_attachments, allow_comments
            FROM
              app_catalog";
    $keys = array(
      ':article_id' => $articleId,
      ':visible'    => 1
    );
    self::$registry->getService('storage')->executeQuery( $qry, $keys );
    
    if((self::$registry->getService('storage')->rowCount() > 0 ))
    {
      $data['base'] = self::$registry->getService('storage')->getResult()[0];
      $data['base']->long_description = html_entity_decode($data['base']->long_description, ENT_QUOTES, "UTF-8");
      
      $qry2 = "SELECT
                b.attr_id, b.attr_name, a.attr_value
              FROM
                app_catalog_items_attributes a,
                app_catalog_attributes b
              WHERE
                a.attr_id = b.attr_id";
      $keys2 = array(
        ':a.article_id' => $articleId
      );
      self::$registry->getService('storage')->executeQuery( $qry2, $keys2 );
      
      $data['attributes'] = (self::$registry->getService('storage')->rowCount() > 0 ) ? self::$registry->getService('storage')->getResult() : null;
      
      $qry3 = "SELECT
                c.file_hash, c.file_url, (b.item_main) as main
              FROM
                app_catalog a,
                app_gallery_items_list b,
                app_drive_files c
              WHERE
                a.gallery_id = b.gallery_id
              AND
                b.item_id = c.file_id";
      $keys3 = array(
        ':a.article_id' => $articleId
      );
      self::$registry->getService('storage')->executeQuery( $qry3, $keys3 );
      
      $data['gallery'] = (self::$registry->getService('storage')->rowCount() > 0 ) ? self::$registry->getService('storage')->getResult() : null;
      
      unset($data['base']->gallery_id);
    }
    return $data;
  }
  
  public function articlesListFC()
  {
    $qry = "SELECT
              a.article_id, b.article_name, b.short_description
            FROM
              app_catalog a,
              app_catalog_lang b,
              cms_langs c
            WHERE
              a.article_id = b.article_id
            AND
              b.lang_id = c.id
            AND
              c.default = 1";
    self::$registry->getService('storage')->executeQuery( $qry );
    
    return (self::$registry->getService('storage')->rowCount() > 0 ) ? self::$registry->getService('storage')->getResult() : [];
  }
  
  public function isCatInArticleById( $articleId, $catId )
  {
    $qry = "SELECT
              cat_id
            FROM
              app_catalog_items_categories";
    $keys = array(
     ':article_id' => $articleId,
     ':cat_id'     => $catId
    );
    self::$registry->getService('storage')->executeQuery( $qry, $keys );
    
    return (self::$registry->getService('storage')->rowCount() > 0 ) ? true : false;
  }
  
  public function articlesListByCatId( $catId )
  {
    $qry = "SELECT
              a.article_id, b.article_name, b.short_description
            FROM
              app_catalog a,
              app_catalog_lang b,
              app_catalog_items_categories c
            WHERE
              a.article_id = b.article_id
            AND
              a.article_id = c.article_id";
    $keys = array(
     ':b.lang_id' => 1,
     ':c.cat_id'  => (int) $catId,
    );
    self::$registry->getService('storage')->executeQuery( $qry, $keys );
    
    return (self::$registry->getService('storage')->rowCount() > 0 ) ? self::$registry->getService('storage')->getResult() : [];
  }
  
  public function articleIdByUrlKey( $key )
  {
    $qry = "SELECT
              article_id
            FROM
              app_catalog_lang";
    $keys = array(
     ':link_rewrite' => $key
    );
    self::$registry->getService('storage')->executeQuery( $qry, $keys );
    
    return (self::$registry->getService('storage')->rowCount() > 0 ) ? (int) self::$registry->getService('storage')->getResult()[0]->article_id : null;
  }
  
  public function articleLangIdByUrlKey( $key )
  {
    $qry = "SELECT
              lang_id
            FROM
              app_catalog_lang";
    $keys = array(
     ':link_rewrite' => $key
    );
    self::$registry->getService('storage')->executeQuery( $qry, $keys );
    
    return (self::$registry->getService('storage')->rowCount() > 0 ) ? (int) self::$registry->getService('storage')->getResult()[0]->lang_id : null;
  }

  public function articleDataOnSiteById( $articleId, $langId )
  {
    $qry = "SELECT
              a.show_article_title,a.show_related_articles,a.allow_attachments,
              a.allow_comments,a.gallery_id,b.article_name,b.link_rewrite,
              b.long_description,b.meta_title,b.meta_description,b.meta_keywords
            FROM
              app_catalog a
            INNER JOIN
              app_catalog_lang b
            ON
              a.article_id = b.article_id";
    $keys = array(
     ':a.article_id' => $articleId,
     ':b.lang_id'    => $langId
    );
    self::$registry->getService('storage')->executeQuery( $qry, $keys );
    
    if(self::$registry->getService('storage')->rowCount() > 0 ) {
      $data = self::$registry->getService('storage')->getResult()[0];
      $data->gallery = self::$registry->getService('gallery')->getGalleryById( $data->gallery_id );
      
      return $data;
    }
    return null;
  }
  
  public function createArticle( $data )
  {
    self::$registry->getService('storage')->insert( 'app_catalog', $data );
    
    return self::$registry->getService('storage')->lastInsertId();
  }
  
  public function saveArticleLangData( $data )
  {
    self::$registry->getService('storage')->insert( 'app_catalog_lang', $data );
  }
  
  public function updateArticleById( $changes, $articleId )
  {
    self::$registry->getService('storage')->update( 'app_catalog', $changes, ' article_id = '. $articleId );
  }
  
  public function clearArticleLangDataById( $articleId )
  {
    self::$registry->getService('storage')->delete( 'app_catalog_lang', ':article_id' , $articleId );
  }
  
  public function saveCategoryByArticleId( $data )
  {
    self::$registry->getService('storage')->insert( 'app_catalog_items_categories', $data );
  }
  
  public function saveAttributeByArticleId( $data )
  {
    self::$registry->getService('storage')->insert( 'app_catalog_items_attributes', $data );
  }
  
  
  
  
  
  public function updateCategoryById( $changes, $catId )
  {
    self::$registry->getService('storage')->update( 'app_catalog_categories', $changes, ' cat_id = '. $catId );
  }
  
  public function removeCategoryById( $catId )
  {
    self::$registry->getService('storage')->delete( 'app_catalog_categories', ':cat_id' , $catId );
    self::$registry->getService('storage')->delete( 'app_catalog_categories_lang', ':cat_id' , $catId );
    self::$registry->getService('storage')->delete( 'app_catalog_items_categories', ':cat_id' , $catId );
  }
  
  public function createAttribute( $data = null )
  {
    self::$registry->getService('storage')->insert( 'app_catalog_attributes', $data );
    
    return self::$registry->getService('storage')->executed();
  }
  
  public function updateAttributeById( $changes = null )
  {
    self::$registry->getService('storage')->update( 'app_catalog_attributes', $changes, ' attr_id = '. $changes['attr_id'] );
    
    return self::$registry->getService('storage')->executed();
  }
  
  public function removeAttributeById( $attrId )
  {
    self::$registry->getService('storage')->delete( 'app_catalog_attributes', ':attr_id' , $attrId );
    self::$registry->getService('storage')->delete( 'app_catalog_items_attributes', ':attr_id' , $attrId );
  }
  
  public function clearCategoriesByArticleId( $articleId )
  {
    self::$registry->getService('storage')->delete( 'app_catalog_items_categories', ':article_id' , $articleId );
  }
  
  public function clearCategoryById( $catId )
  {
    self::$registry->getService('storage')->delete( 'app_catalog_items_categories', ':cat_id' , $catId );
  }
  
  public function clearAttributesByArticleId( $articleId )
  {
    self::$registry->getService('storage')->delete( 'app_catalog_items_attributes', ':article_id' , $articleId );
  }
  
  public function removeArticleById( $articleId )
  {
    self::$registry->getService('storage')->delete( 'app_catalog', ':article_id' , $articleId );
    self::$registry->getService('storage')->delete( 'app_catalog_items_categories', ':article_id' , $articleId );
    self::$registry->getService('storage')->delete( 'app_catalog_items_attributes', ':article_id' , $articleId );
  }
  
  public function clearCategoryDataByCatId( $catId )
  {
    self::$registry->getService('storage')->delete( 'app_catalog_categories_lang', ':cat_id' , $catId );
  }
  
  private function __haveSupportLanguage( $langId = 0 )
  {
    $qry = "SELECT  (
              SELECT 
                  COUNT(id_article)
              FROM   
                  app_catalog
              ) AS avx,
              (
              SELECT 
                  count(id_article)
              FROM   
                  app_catalog_lang
              WHERE
                  id_lang = ".(int) $langId."
              GROUP BY
                  id_lang	
              ) AS avs";
    self::$registry->getService('storage')->executeQuery( $qry );
    
    if(self::$registry->getService('storage')->rowCount() > 0) {
      $data = self::$registry->getService('storage')->getResult()[0];
      
      return ( (int) $data->avx === (int) $data->avs ) ? true : false;
    }
    return false;
  }
  
  private function __getSupportLanguages()
  {
    $qry = "SELECT
                *
            FROM (
              SELECT
                id_lang, count(id_lang) as avx
              FROM
                app_catalog_lang
              GROUP BY
                id_lang
            ) as result
            ORDER BY
                avx DESC
            LIMIT 1";
    self::$registry->getService('storage')->executeQuery( $qry );
    
    return (self::$registry->getService('storage')->rowCount() > 0 ) ? (int) self::$registry->getService('storage')->getResult()[0]->id_lang : self::$registry->getService('languages')->getCurrentLanguage();
  }
  
  private function __haveCategorySupportLanguage( $langId = 0 )
  {
    $qry = "SELECT  (
              SELECT 
                  COUNT(id_category)
              FROM   
                  app_catalog_category
              ) AS avx,
              (
              SELECT 
                  count(id_category)
              FROM   
                  app_catalog_category_lang
              WHERE
                  id_lang = ".(int) $langId."
              GROUP BY
                  id_lang	
              ) AS avs";
    self::$registry->getService('storage')->executeQuery( $qry );
    
    if(self::$registry->getService('storage')->rowCount() > 0) {
      $data = self::$registry->getService('storage')->getResult()[0];
      
      return ( (int) $data->avx === (int) $data->avs ) ? true : false;
    }
    return false;
  }
  
  private function __getCategorySupportLanguage()
  {
    $qry = "SELECT
                *
            FROM (
              SELECT
                id_lang, count(id_lang) as avx
              FROM
                app_catalog_category_lang
              GROUP BY
                id_lang
            ) as result
            ORDER BY
                avx DESC
            LIMIT 1";
    self::$registry->getService('storage')->executeQuery( $qry );
            
    return (self::$registry->getService('storage')->rowCount() > 0 ) ? (int) self::$registry->getService('storage')->getResult()[0]->id_lang : self::$registry->getService('languages')->getCurrentLanguage();
  }
  
}