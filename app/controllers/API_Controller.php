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

class API_Controller {
  
  CONST PASSWORD = 'piska';
  
  CONST MAILCHIMP_API_KEY = "2780646095e5b01e8119679de29c7872-us13";
  
  CONST MAILCHIMP_LIST_ID = "e1df041000";

  /** @var Registry **/
  protected static $registry;
  
  /** @var array **/
  private $category;
  
  /** @var null **/
  private $parrent;
  
  /** @var array **/
  private $tree;
  
  public function __construct( Registry $registry ) 
  {
    self::$registry = $registry;
  }
  
  public function run() 
  {
    self::$registry->getService('helper')->dump(1);
  }
  
  public function locator()
  {
    self::$registry->getService('template')->assign(
      'detector',
      self::$registry->getService('idetector')->detect()
    );
    self::$registry->getService('template')->assign(
      'visitor',
      self::$registry->getService('geoip')->getVisitor()
    );
    self::$registry->getService('template')->assign(
      'ip',
      self::$registry->getService('irequest')->getRemoteAddress()
    );
    self::$registry->getService('template')->display('extends:locator.tpl');
  }
  
  public function importDictionaryKeys()
  {
    $qry = "SELECT
              `block`, `key`, `value_it`
            FROM
              import_dic_ent";
    self::$registry->getService('storage')->executeQuery( $qry );

    if(self::$registry->getService('storage')->rowCount() > 0) 
    {
      $langId = 120;

      foreach(self::$registry->getService('storage')->getResult() as $value)
      {
        if(self::$registry->getService('dictionary')->isKey($langId, $value->key))
        {
          self::$registry->getService('dictionary')->updateItemOnDictionary(array(
            'section' => 'FRONT',
            'block'   => $value->block,
            'l_key'   => $langId,
            't_key'   => $value->key,
            't_value' => $value->value_it, 
          ), self::$registry->getService('dictionary')->itemIdByKeyLang($langId, $value->key));
        }
        else
        {
          self::$registry->getService('dictionary')->createItem(array(
            ':section' => 'FRONT',
            ':block'   => $value->block,
            ':l_key'   => $langId,
            ':t_key'   => $value->key,
            ':t_value' => $value->value_it, 
          ));
        }
      }
    }
  }
  
  public function generate_sitemap()
  {
    print_r((((bool) self::$registry->getService('sitemap')->generate() === true) ? '200OK' : '500ERROR' ) );
  }
  
  public function generate_thumbnail()
  {
    $thumbCronTaskList = self::$registry->getService('store')->thumbCronTaskList();
    $output = array(
      'status'  => 200
    );
    if(is_array($thumbCronTaskList) && (count($thumbCronTaskList) > 0))
    {
      foreach($thumbCronTaskList as $cronTask)
      {
        $data = self::$registry->getService('store')->thumbListByParams(
          $cronTask->id_thumb_section,
          $cronTask->id_resize_rule
        );
        if(is_array($data) && (count($data) > 0))
        {
          foreach($data as $value)
          {
            $this->__resizeImage(
              $value->id_thumb,
              $value->id_file,
              $cronTask->width,
              $cronTask->height,
              $cronTask->resize_method
            );
          }
          self::$registry->getService('store')->deleteThumbCronTaskById( $cronTask->id_job );
          self::$registry->getService('store')->updateThumbSecCronStatusById( $cronTask->id_thumb_section );
        }
      }
    }
    self::$registry->getService('json')->push($output);
    self::$registry->getService('json')->renderJSON();
  }
  
  private function __resizeImage( $thumbId = 0, $id_image = 0, $width = 0.00, $height = 0.00, $resize_method = '' )
  {
    if((bool) self::$registry->getService('drive')->isFileById( $id_image ) === true) 
    {
      $file = self::$registry->getService('drive')->fileById( $id_image );

      if(is_object($file)) 
      {
        $salt = self::$registry->getService('hash')->generateRandomString(20);
        $name = (self::$registry->getService('hash')->ripemd128( $salt . $file->file_hash )). $file->file_ext;
        $path = __UPLOAD_PATH__ . $file->file_hash . $file->file_ext;
        $imgW = ((float) $width > 0) ? (float) $width : null;
        $imgH = ((float) $height > 0) ? (float) $height : null;
        $link = self::$registry->getService('thumbnail')->create(
          $path,
          $name,
          $imgW,
          $imgH,
          $resize_method
        );
        if(strlen($link) > 0)
        {
          self::$registry->getService('store')->updateThumbnailById($link, $thumbId);
        }
      }
    }
  }
  
  public function download_files_from_folder_form( $password = null )
  {
    if((string) $password === self::PASSWORD) {
      self::$registry->getService('template')->display("extends:[cpanel]download_files_from_folder_form.tpl");
    } else {
      throw new Exception('BAD PASSWORD', 402);
    }
  }
  
  public function download_files_from_folder()
  {
    $form    = self::$registry->getService('irequest')->getPost();
    $folders = (isset($form['folders']) && (is_array($form['folders']) && (count($form['folders']) > 0))) ? $form['folders'] : null;
    
    if(is_array($folders) && (count($folders) > 0)) {
      $folderIds = [];
      
      foreach($folders as $folderRef) {
        $folderIds[] = self::$registry->getService('drive')->folderIdByHash( $folderRef );
      }
      if(is_array($folderIds) && (count($folderIds) > 0)) {
        $folderPath = __CACHE_DIR__ . 'images';
        
        if(is_dir($folderPath)) {
          foreach($folderIds as $folderId) {
            $data = self::$registry->getService('drive')->fileListByFolderId( $folderId );

            if(is_array($data) && (count($data) > 0)) {
              foreach($data as $file) {
                $file_path   = __UPLOAD_PATH__ . $file->file_hash . $file->file_ext;
                $image_cache = $folderPath . DIRECTORY_SEPARATOR . $file->file_hash . $file->file_ext;

                if(file_exists($file_path)) {
                  // IMAGE BLOB
                  $fileBlob = file_get_contents( $file_path );

                  // CREATE CACHE IMAGE
                  if((bool) file_put_contents($image_cache, $fileBlob) === false) {
                    throw new Exception('An error occurred while create the picture. ['.$file->file_hash.'] ', 402);
                  }
                }
              }
            }
          }
          // REMOVE CACHE IMAGES
          foreach(new DirectoryIterator( $folderPath ) as $fileInfo) {
            if(!$fileInfo->isDot()) {
              unlink($fileInfo->getPathname());
            }
          }
          // DOWNLOAD
          self::$registry->getService('helper')->create_zip(
            null, 
            $folderPath, 
            __CACHE_DIR__, 
            'images.zip', 
            true 
          );
        } else {
          throw new Exception('CACHE IMAGE FOLDER NOT FOUND', 401);
        }
      } else {
        throw new Exception('ARRAY FOLDER IDS IS EMPTY', 401);
      }
    } else {
      throw new Exception('BAD REQUEST', 401);
    }
  }
  
  private function __reindexArticleFullTextIndexes()
  {
    $articleList = self::$registry->getService('store')->articleList();

    foreach($articleList as $value) {
      self::$registry->getService('store')->reindexArticleFullTextIndexesById( $value->id_article );
    }
  }
  
  private function __buildHtmlFAL()
  {
    $articleList = self::$registry->getService('store')->articleList();

    foreach($articleList as $value) {
      $html = self::$registry->getService('store')->articleDataById( $value->id_article )->lang[ 189 ]->html_content;
      
      self::$registry->getService('store')->updateArticleLangById(array(
        'html_content' => html_entity_decode($html, ENT_QUOTES, "UTF-8")
      ), $value->id_article, 189);
    }
    print_r('200OK');
  }
  
  private function __buildArticlesURLKeys()
  {
    $articleList = self::$registry->getService('store')->articleList();
    
    foreach($articleList as $value) {
      $object = (object) array(
        'rule' => 5,
        'rm'   => 1,
        'ctrl' => 'store',
        'mth'  => 'article',
        'key'  => self::$registry->getService('helper')->createUrlKey( $value->article_name_internal )
      );
      $routeId = self::$registry->getService('irouter')->addRoute( $object );

      if((bool) self::$registry->getService('router')->isRouteById( $routeId ) === true) {
        self::$registry->getService('store')->updateArticleRouteById($routeId, $value->id_article, 189);
      } else {
        print_r($value->id_article.'<br>');
      }
    }
    print_r('200OK');
  }
  
  private function imp()
  {
    $data = $this->__impAttrVDataSheet();
    
    foreach($data as $value) {
      $attrVId = self::$registry->getService('store')->insertAttributeValue(array(
        //':id_attribute' => $attrId,
        ':color'        => '#'.$value->color
      ));
      self::$registry->getService('store')->insertAttributeValueLang(array(
        //':id_attribute' => $attrId,
        ':id_value'     => $attrVId,
        ':id_lang'      => 189,
        ':value'        => $value->attr_v
      ));    
    }
    echo 1;
  }
  
  private function __impAttrVDataSheet()
  {
    $qry = "SELECT
              *
            FROM
              imp_attr_v";
    self::$registry->getService('storage')->executeQuery( $qry );

    return (self::$registry->getService('storage')->rowCount() > 0) ? self::$registry->getService('storage')->getResult() : null;
  }
  
  private function __exportArticleDataSheet()
  {
    $qry = "SELECT
              *
            FROM
              export_article";
    self::$registry->getService('storage')->executeQuery( $qry );

    if(self::$registry->getService('storage')->rowCount() > 0) {
      $data = self::$registry->getService('storage')->getResult();
      
      foreach($data as $key => $value) {
        $data[ $key ]->lang    = $this->__exportArticleLang( $value->id_article );
        $data[ $key ]->gallery = $this->__exportArticleGallery( $value->id_article );
      }
      return $data;
    }
    return null;
  }
  
  private function __exportArticleLang( $articleId = 0 )
  {
    $qry = "SELECT
              *
            FROM
              export_article_lang";
    $keys = array(
      ':id_article' => (int) $articleId
    );
    self::$registry->getService('storage')->executeQuery( $qry, $keys );
    
    if(self::$registry->getService('storage')->rowCount() > 0) {
      $data = [];
      
      foreach(self::$registry->getService('storage')->getResult() as $value) {
        $data[ $value->id_lang ] = $value;
        
        unset( $data[ $value->id_lang ]->id_lang );
      }
      return $data;
    }
    return null;
  }
  
  private function __exportArticleGallery( $articleId = 0 )
  {
    $qry = "SELECT
              main, file_url, cache_link
            FROM
              export_atricle_gallery";
    $keys = array(
      ':id_article' => (int) $articleId
    );
    self::$registry->getService('storage')->executeQuery( $qry, $keys );
    
    return (self::$registry->getService('storage')->rowCount() > 0) ? self::$registry->getService('storage')->getResult() : null;
  }
  
  private function __importArticles()
  {
    $data = $this->__exportArticleDataSheet();
    
    //self::$registry->getService('helper')->dump($data[0]->lang[1]->description);

    foreach($data as $value) {
      $articleId = self::$registry->getService('store')->createArticle($value->article_name, 1);
      $folderId  = self::$registry->getService('drive')->insertFolder(array(
        ':folder_hash'      => self::$registry->getService('hash')->ripemd128(self::$registry->getService('hash')->generateRandomString().$value->article_name.self::$registry->getService('hash')->generateRandomString()),
        ':folder_name'      => $value->article_name,
        ':folder_owner'     => 1,
        ':folder_parent_id' => 2,
        ':is_root'          => 0
      ));
      $fileId  = 0;
      $glrId   = 0;
      $prefix  = 'http://ecec.local/files/compressed/';
      $prefix2 = 'http://ecec.local/files/313131/';
      
      // IMAGE
      if(count($value->gallery) === 1) {
        $imgPath = trim((strlen($value->gallery[0]->cache_link) > 0) ? $prefix . $value->gallery[0]->cache_link : $prefix2 . $value->gallery[0]->file_url);
        $blob    = file_get_contents($imgPath);

        if(!is_bool($blob)) {
          $ext = (substr(trim($value->gallery[0]), -3) == 'jpg') ? '.jpg' : '.png';
          $fileHash = self::$registry->getService('hash')->ripemd128(self::$registry->getService('hash')->generateRandomString(). $value->article_name .self::$registry->getService('hash')->generateRandomString());
          $file = array(
              ':folder_id'    => $folderId,
              ':file_hash'    => $fileHash,
              ':file_name'    => $value->article_name,
              ':file_owner'   => 1,
              ':file_url'     => 'files/' . $fileHash . $ext,
              ':file_type_id' => 1,
              ':file_ext'     => $ext,
              ':file_size'    => self::$registry->getService('helper')->getFileSizeFromUrl($imgPath),
          );
          if(file_put_contents(__UPLOAD_PATH__ . $fileHash . $ext, $blob)) {
            self::$registry->getService('drive')->insertFile($file);

            $fileId = self::$registry->getService('drive')->fileIdByHash($fileHash);
          }
        }
      }
      // GALLERY
      if(count($value->gallery) > 1) {
        $cImgList = [];

        foreach($value->gallery as $key => $image) {
          $imgPath = trim((strlen($image->cache_link) > 0) ? $prefix . $image->cache_link : $prefix2 . $image->file_url);
          $blob    = file_get_contents($imgPath);

          if(!is_bool($blob)) {
            $ext = (substr($imgPath, -3) == 'jpg') ? '.jpg' : '.png';
            $fileHash = self::$registry->getService('hash')->ripemd128(self::$registry->getService('hash')->generateRandomString().$value->article_name.self::$registry->getService('hash')->generateRandomString());
            $file = array(
              ':folder_id'    => $folderId,
              ':file_hash'    => $fileHash,
              ':file_name'    => $value->article_name.'_'.$key,
              ':file_owner'   => 1,
              ':file_url'     => 'files/'.$fileHash.$ext,
              ':file_type_id' => 1,
              ':file_ext'     => $ext,
              ':file_size'    => self::$registry->getService('helper')->getFileSizeFromUrl($imgPath),
            );
            if(file_put_contents(__UPLOAD_PATH__.$fileHash.$ext, $blob)) {
              self::$registry->getService('drive')->insertFile( $file );

              $cImgList[] = (int) self::$registry->getService('drive')->fileIdByHash( $fileHash );
            }
          }
        }
        $glrId = (int) self::$registry->getService('gallery')->createGallery(array(
          ':gallery_name' => $value->article_name,
          ':id_group'     => 3,
          ':id_type'      => 1,
          ':id_page'      => 0,
          ':owner'        => 1,
          ':position'     => (int) self::$registry->getService('gallery')->getGalleryLastPosition(),
          ':publish'      => 1,
        ));
        $i = 1;
        foreach($cImgList as $key => $cImg) {
          $imgInfo = getimagesize( __UPLOAD_PATH__ . $fileHash . $ext );

          self::$registry->getService('gallery')->insertImage(array(
            ':id_gallery' => $glrId,
            ':id_image'   => $cImg,
            ':width'      => (isset($imgInfo) && $imgInfo[0] !== null) ? $imgInfo[0] : 0,
            ':height'     => (isset($imgInfo) && $imgInfo[1] !== null) ? $imgInfo[1] : 0,
            ':main'       => ($key === 0) ? 1 : 0,
            ':position'   => $i,
          ));
          $i++;
        }
      }
      // ARTICLE
      $form = array(
        'article-ext-id'            => $value->id_article,
        'article-type-id'           => 1,
        'visibility-id'             => 0,
        'currency-id'               => 1,
        'tax-id'                    => 1,
        'country-of-manufacture-id' => 0,
        'gallery-id'                => $glrId,
        'image-id'                  => $fileId,
        'sku'                       => $value->sku,
        'article-name-internal'     => $value->article_name,
        'ean13-jan-barcode'         => '',
        'upc-barcode'               => '',
        'recommended-retail-price'  => 0.00,
        'wholesale_price'           => 0.00,
        'retail_price'              => (float) $value->retail_tax_price,
        'retail_tax_price'          => 0.00,
        'unit_price'                => 0.00,
        'unity'                     => '',
        'qty'                       => (int) $value->qty,
        'qty_out_of_stock'          => 0,
        'min_qty_in_cart'           => 0,
        'max_qty_in_cart'           => 0,
        'new-from-date'             => '2015-11-28 00:00:00',
        'new-to-date'               => '2015-11-28 00:00:00',
        'ap-width'                  => 0.00,
        'ap-height'                 => 0.00,
        'ap-depth'                  => 0.00,
        'ap-weight'                 => 0.00,
        'ap-shipping-fee'           => 0.00,
        'lang' => array(
          189 => array(
            "'article-name'"     => $value->article_name,
            "'description'"      => htmlentities(html_entity_decode($value->lang[1]->description, ENT_QUOTES, "UTF-8"), ENT_QUOTES, "UTF-8"),
            "'site-title'"       => $value->lang[1]->site_title,
            "'meta-keywords'"    => $value->lang[1]->meta_keywords,
            "'meta-description'" => htmlentities(html_entity_decode(substr($value->lang[1]->description, 0, 255), ENT_QUOTES, "UTF-8"), ENT_QUOTES, "UTF-8"),
            "'meta-robot'"       => 'all',
            "'html-content'"     => htmlentities(html_entity_decode($value->lang[1]->html_content, ENT_QUOTES, "UTF-8"), ENT_QUOTES, "UTF-8")
          ),
          51 => array(
            "'article-name'"     => $value->article_name,
            "'description'"      => htmlentities(html_entity_decode($value->lang[2]->description, ENT_QUOTES, "UTF-8"), ENT_QUOTES, "UTF-8"),
            "'site-title'"       => $value->lang[2]->site_title,
            "'meta-keywords'"    => $value->lang[2]->meta_keywords,
            "'meta-description'" => htmlentities(html_entity_decode(substr($value->lang[2]->description, 0, 255), ENT_QUOTES, "UTF-8"), ENT_QUOTES, "UTF-8"),
            "'meta-robot'"       => 'all',
            "'html-content'"     => htmlentities(html_entity_decode($value->lang[2]->html_content, ENT_QUOTES, "UTF-8"), ENT_QUOTES, "UTF-8")
          ),
        )
      );
      self::$registry->getService('store')->updateArticleDataById($form, $articleId, 1);
    }
    print_r('200OK');
    exit;
  }
  
  private function __buildAttrVPath()
  {
    $test   = true;
    $attrId = 0;
    $pref   = 'nazov-';
    $data   = self::$registry->getService('store')->attributeValueListByAttrId($attrId, false);
    $arr    = [];
    
    foreach($data as $value) {
      $link = $pref . self::$registry->getService('helper')->createUrlKey( $value->value );
      
      if((bool) $test === true) {
        $arr[] = $link;
      } else {
        $this->__createAttrVPath($value->id_value, $link);
      }
    }
    if((bool) $test === true) {
      self::$registry->getService('helper')->dump($arr);
    } else {
      self::$registry->getService('helper')->dump(1);
    }
  }
  
  private function __createAttrVPath( $attrVId = 0, $link = '' )
  {
    $object = (object) array(
      'rule' => 5,
      'rm'   => 1,
      'ctrl' => 'store',
      'mth'  => 'attr3',
      'key'  => $link
    );
    $routeId = self::$registry->getService('irouter')->addRoute( $object );

    if(self::$registry->getService('router')->isRouteById( $routeId )) {
      self::$registry->getService('store')->updateAttributeValueRouteById($routeId, $attrVId, 189);
    }
  }
  
  private function __createArticleSchema()
  {
    $data = self::$registry->getService('store')->articleList();
    
    foreach($data as $value) {
      $article = self::$registry->getService('store')->articleDataById( $value->id_article );
      
      $categoryTree = self::$registry->getService('store')->articleBreadcrumbById($article->id_article, 189);
      $articlePath  = self::$registry->getService('store')->articlePathById($article->id_article, 189);
      $articleKey   = (is_null($articlePath)) ? self::$registry->getService('helper')->createUrlKey( $value->article_name_internal ) : $articlePath;
      $schema       = [];
      
      if(is_array($categoryTree) && (count($categoryTree) > 0)) {
        foreach($categoryTree as $catBit) {
          $schema[] = (object) array(
            'type'   => 1,
            'filter' => 0,
            'value'  => (string) $catBit->path
          );
        }
        $schema[] = (object) array(
          'type'   => 3,
          'filter' => 7,
          'value'  => (string) $articleKey
        );
        $object = (object) array(
          'rule'   => 6,
          'rm'     => 1,
          'ctrl'   => 'store',
          'mth'    => 'article',
          'schema' => $schema,
        );
        $routeId = self::$registry->getService('irouter')->addRoute($object);
        
        if(((bool) self::$registry->getService('router')->isRouteById( $routeId ) === true) &&
          (self::$registry->getService('irouter')->deleteRouteById( $article->lang[189]->id_route ) === true)
        ) {
          self::$registry->getService('store')->updateArticleRouteById($routeId, $value->id_article, 189);
        } else {
          print_r($value->id_article.'<br>');
        }
      }
    }
  }
  
  private function __createArticlesSchemaPath()
  {
    $articleList = self::$registry->getService('store')->articleList();
    
    foreach($articleList as $value) {
      $article = self::$registry->getService('store')->articleDataById( $value->id_article )->lang[ 189 ];
      $cAEPath = self::$registry->getService('store')->articlePathById($value->id_article, 189);

      if(is_null($cAEPath)) {
        $object = (object) array(
          'rule' => 5,
          'rm'   => 1,
          'ctrl' => 'store',
          'mth'  => 'article',
          'key'  => self::$registry->getService('helper')->createUrlKey( $article->article_name )
        );
        $routeId = self::$registry->getService('irouter')->addRoute( $object );
        
        self::$registry->getService('store')->updateArticleRouteById($routeId, $value->id_article, 189);
      }
    }
    print_r('200OK');
  }
  
  private function __importArticleAttrV()
  {
    $data = $this->__exportArticleAttrData();
    
    self::$registry->getService('helper')->dump($data);
    
    foreach($data as $value) {
      $articleId = self::$registry->getService('store')->articleIdBySKU( $value->sku );
      
      if(self::$registry->getService('store')->isArticleById( $articleId )) {
        // Cislo sarze
        $this->createAttributeValue(2, $value->batch, $articleId);
        // Mnozstvo
        $this->createAttributeValue(3, $value->package_amount, $articleId);
        // Farba
        $this->createAttributeValue(4, $value->color, $articleId);
        // Odroda
        $this->createAttributeValue(5, $value->type2, $articleId);
        // Kvalita
        $this->createAttributeValue(6, $value->quality, $articleId);
        // Rocnik
        $this->createAttributeValue(7, $value->vintage, $articleId);
        // Alkohol
        $this->createAttributeValue(8, $value->alcohol2, $articleId);
        // Zostatkovy cukor
        $this->createAttributeValue(9, $value->residual_sugar, $articleId);
        // Kyseliny
        $this->createAttributeValue(10, $value->acid, $articleId);
        // Bezcukrovy extrakt
        $this->createAttributeValue(11, $value->non_sugar_extract, $articleId);
        // Cukornatost
        $this->createAttributeValue(12, $value->sugar, $articleId);
        // Archivacia
        $this->createAttributeValue(13, $value->archiving, $articleId);
        // Zber hrozna
        $this->createAttributeValue(15, $value->grape_harvest, $articleId);
      }
    }
    print_r('200OK');
  }
  
  public function createAttributeValue( $attrId = 0, $value = '', $articleId = 0 )
  {
    if((strlen($value) > 0) && self::$registry->getService('store')->isArticleById( $articleId )) {
      $valueId = self::$registry->getService('store')->attributeValueIdByKeyword( $value );
      
      if((int) $valueId === 0) {
        $valueId = self::$registry->getService('store')->insertAttributeValue(array(
          ':id_attribute' => (int) $attrId
        ));
        if(self::$registry->getService('store')->isAttributeValueById($attrId, $valueId)) {
          self::$registry->getService('store')->insertAttributeValueLang(array(
            ':id_attribute'     => (int) $attrId,
            ':id_value'         => (int) $valueId,
            ':id_lang'          => 189,
            ':value'            => $value,
            ':site_title'       => $value,
            ':description'      => $value,
            ':meta_robot'       => 'all',
            ':meta_keywords'    => $value,
            ':meta_description' => $value,
            ':html_content'     => ''
          ));
        }
      }
      if(self::$registry->getService('store')->isAttributeValueById($attrId, $valueId) &&
        ((bool) self::$registry->getService('store')->haveArticleAttributeValueById($articleId, $attrId, $valueId) === false)
      ) {
        self::$registry->getService('store')->insertArticleAttributeById(array(
          ':id_article'   => (int) $articleId,
          ':id_attribute' => (int) $attrId,
          ':id_value'     => (int) $valueId
        ));
      }
    }
  }
  
  private function __exportArticleAttrData()
  {
    $qry = "SELECT
              a.sku, a.batch, b.package_amount, b.color, b.type2, b.quality, b.vintage,
              b.alcohol2, b.residual_sugar, b.acid, a.non_sugar_extract, b.sugar,
              b.archiving, b.grape_harvest
            FROM
              export_article_data_2 a
            INNER JOIN
              export_article_data b
            ON
              a.sku = b.sku";
    self::$registry->getService('storage')->executeQuery( $qry );

    return (self::$registry->getService('storage')->rowCount() > 0) ? self::$registry->getService('storage')->getResult() : null;
  }
  
  private function __createPage( $pagename = '', $link = '', $html_content = '', $langId = 189 )
  {
    $pageId = self::$registry->getService('page')->insertPage(array(
      ':pagename'      => $pagename,
      ':owner'         => 1,
      ':signature'     => 1,
      ':show_date'     => 1,
      ':enabled_aside' => 1,
      ':publish'       => 1,
      ':upd_date'      => date("Y-m-d H:i:s")
    ));
    self::$registry->getService('page')->insertPageContent(array(
      ':id_page'          => $pageId,
      ':id_lang'          => $langId,
      ':heading'          => $pagename,
      ':subheading'       => $pagename,
      ':site_title'       => $pagename,
      ':meta_keywords'    => '',
      ':meta_description' => '',
      ':meta_robot'       => 'all',
      ':html_content'     => $html_content,
    ));
    $this->__addPageFullTextSearchIndex(array(
      'pagename'    => $pagename,
      'heading'     => $pagename,
      'description' => '',
      'html'        => ''
    ), $pageId, $langId);
    $object = (object) array(
      'rule' => 5,
      'rm'   => 1,
      'ctrl' => 'page',
      'mth'  => 'run',
      'key'  => $link
    );
    $routeId = self::$registry->getService('irouter')->addRoute( $object );

    self::$registry->getService('page')->updatePageRouteById($routeId, $pageId, $langId);
      
    return false;
  }
  
  private function __addPageFullTextSearchIndex( $data = null, $pageId = 0, $langId = 0 )
  {
    if(self::$registry->getService('page')->isPageById($pageId) &&
      self::$registry->getService('languages')->isLangById($langId) &&
      self::$registry->getService('page')->deletePageFullTextIndexByPageId($pageId, $langId)     
    ) {
      return self::$registry->getService('page')->insertPageFullTextIndex(array(
        ':id_page' => (int) $pageId,
        ':id_lang' => (int) $langId,
        ':a_index' => html_entity_decode($data["pagename"], ENT_QUOTES, "UTF-8"),
        ':b_index' => html_entity_decode($data["heading"], ENT_QUOTES, "UTF-8"),
        ':c_index' => html_entity_decode($data["description"], ENT_QUOTES, "UTF-8"),
        ':d_index' => html_entity_decode(strip_tags($data["html"]), ENT_QUOTES, "UTF-8")
      ));
    }
  }
  
  private function __exportPostData()
  {
    $qry = "SELECT
              post_title, post_name, post_content
            FROM
              wp_posts
            WHERE
              post_status = 'publish'
            AND
              post_title != ''";
    self::$registry->getService('storage')->executeQuery( $qry );

    return (self::$registry->getService('storage')->rowCount() > 0) ? self::$registry->getService('storage')->getResult() : null;
  }
  
  private function __createArticlesKeyPath()
  {
    $articleList = self::$registry->getService('store')->articleList();
    
    foreach($articleList as $value) {
      $cAEPath = self::$registry->getService('store')->articlePathById($value->id_article, 189);

      if(is_null($cAEPath)) {
        $path = $this->__exportArticlePathBySKU( $value->sku );
        
        //self::$registry->getService('helper')->dump($path);
        
        if(!is_null($path)  && (strlen($path) > 0)) {
          $object = (object) array(
            'rule' => 5,
            'rm'   => 1,
            'ctrl' => 'store',
            'mth'  => 'article',
            'key'  => $path
          );
          $routeId = self::$registry->getService('irouter')->addRoute( $object );

          self::$registry->getService('store')->updateArticleRouteById($routeId, $value->id_article, 189);
        }
      }
    }
    print_r('200OK');
  }
  
  private function __exportArticlePathBySKU( $sku = '' )
  {
    $qry = "SELECT
              a.product_name, a.sku, b.qty, a.price, a.description, b.url_path, b.gallery
            FROM
              export_article_data_2 a
            INNER JOIN 
              export_article_data b
            ON
              a.sku = b.sku";
    $keys = array(
      ':a.sku' => (string) $sku
    );
    self::$registry->getService('storage')->executeQuery( $qry, $keys );

    return (self::$registry->getService('storage')->rowCount() > 0) ? (string) self::$registry->getService('storage')->getResult()[0]->url_path : null;
  }
  
  private function __flushRouteList()
  {
    $routeList = self::$registry->getService('router')->routeList();
    
    foreach($routeList as $route) {
      if(((string) $route->ctrl === 'page') || 
        ((string) $route->ctrl === 'page-list') || 
        (((string) $route->ctrl === 'store') && (((string) $route->mth === 'article') || ((string) $route->mth === 'category') || ((string) $route->mth === 'attr3')))
      ) {
        self::$registry->getService('irouter')->deleteRouteById( $route->id_route );
      }
    }
  }
  
  public function strip_symbols( $text = '' )
  {
      $plus   = '\+\x{FE62}\x{FF0B}\x{208A}\x{207A}';
      $minus  = '\x{2012}\x{208B}\x{207B}';

      $units  = '\\x{00B0}\x{2103}\x{2109}\\x{23CD}';
      $units .= '\\x{32CC}-\\x{32CE}';
      $units .= '\\x{3300}-\\x{3357}';
      $units .= '\\x{3371}-\\x{33DF}';
      $units .= '\\x{33FF}';

      $ideo   = '\\x{2E80}-\\x{2EF3}';
      $ideo  .= '\\x{2F00}-\\x{2FD5}';
      $ideo  .= '\\x{2FF0}-\\x{2FFB}';
      $ideo  .= '\\x{3037}-\\x{303F}';
      $ideo  .= '\\x{3190}-\\x{319F}';
      $ideo  .= '\\x{31C0}-\\x{31CF}';
      $ideo  .= '\\x{32C0}-\\x{32CB}';
      $ideo  .= '\\x{3358}-\\x{3370}';
      $ideo  .= '\\x{33E0}-\\x{33FE}';
      $ideo  .= '\\x{A490}-\\x{A4C6}';

      return preg_replace(
          array(
          // Remove modifier and private use symbols.
              '/[\p{Sk}\p{Co}]/u',
          // Remove mathematics symbols except + - = ~ and fraction slash
              '/\p{Sm}(?<![' . $plus . $minus . '=~\x{2044}])/u',
          // Remove + - if space before, no number or currency after
              '/((?<= )|^)[' . $plus . $minus . ']+((?![\p{N}\p{Sc}])|$)/u',
          // Remove = if space before
              '/((?<= )|^)=+/u',
          // Remove + - = ~ if space after
              '/[' . $plus . $minus . '=~]+((?= )|$)/u',
          // Remove other symbols except units and ideograph parts
              '/\p{So}(?<![' . $units . $ideo . '])/u',
          // Remove consecutive white space
              '/ +/',
          ),
          ' ',
          $text );
  }
  
  public function import()
  {
    exit;
    
    $data = null;

    foreach($data as $key => $value) {
      if((int) $key > 2895) {
        $productName = mb_convert_encoding($value->product_name, 'UTF-8', 'UTF-8');
        $articleId = self::$registry->getService('store')->createArticle($productName, 1);
        $galleryId = 0;

        if(is_array($value->img_list)  && (count($value->img_list) > 0)) {
          $folderId  = self::$registry->getService('drive')->createFolder(array(
            ':folder_hash'      => self::$registry->getService('hash')->ripemd128(self::$registry->getService('hash')->generateRandomString().$value->product_name.self::$registry->getService('hash')->generateRandomString()),
            ':folder_name'      => $productName,
            ':folder_owner'     => 1,
            ':folder_parent_id' => 2,
            ':is_root'          => 0,
          ));
          $cImgList = [];

          foreach($value->img_list as $key => $image) {
            $imgPath = self::HIGHLITE_IMG_PREFIX . (($key === 0) ? str_replace('/','',$image) : $image);
            $blob    = file_get_contents($imgPath);

            if(!is_bool($blob)) {
              $ext = (substr($imgPath, -3) == 'jpg') ? '.jpg' : '.png';
              $fileHash = self::$registry->getService('hash')->ripemd128(self::$registry->getService('hash')->generateRandomString().$imgPath.self::$registry->getService('hash')->generateRandomString());
              $file = array(
                ':folder_id'    => $folderId,
                ':file_hash'    => $fileHash,
                ':file_name'    => str_replace($ext,'',str_replace('/','',$image)),
                ':file_owner'   => 1,
                ':file_url'     => 'files/'.$fileHash.$ext,
                ':file_type_id' => 1,
                ':file_ext'     => $ext,
                ':file_size'    => self::$registry->getService('helper')->getFileSizeFromUrl($imgPath),
              );
              if(file_put_contents(__UPLOAD_PATH__.$fileHash.$ext, $blob)) {
                self::$registry->getService('drive')->insertFile( $file );

                $cImgList[] = (int) self::$registry->getService('drive')->fileIdByHash( $fileHash );
              }
            }
          }
          $galleryId = (int) self::$registry->getService('gallery')->createGallery(array(
            ':gallery_name' => $productName,
            ':id_group'     => 3,
            ':id_type'      => 1,
            ':id_page'      => 0,
            ':owner'        => 1,
            ':position'     => (int) self::$registry->getService('gallery')->getGalleryLastPosition(),
            ':publish'      => 1,
          ));
          $i = 1;
          foreach($cImgList as $key => $cImg) {
            $imgInfo = getimagesize( __UPLOAD_PATH__ . $fileHash . $ext );

            self::$registry->getService('gallery')->insertImageToGalleryById(array(
              ':id_gallery' => $galleryId,
              ':id_image'   => $cImg,
              ':width'      => (isset($imgInfo) && $imgInfo[0] !== null) ? $imgInfo[0] : 0,
              ':height'     => (isset($imgInfo) && $imgInfo[1] !== null) ? $imgInfo[1] : 0,
              ':main'       => ($key === 0) ? 1 : 0,
              ':position'   => $i,
            ));
            $i++;
          }
        }
        $form = array(
          'article-ext-id'            => (string) $value->id_product,
          'article-type-id'           => 1,
          'visibility-id'             => 0,
          'currency-id'               => 1,
          'tax-id'                    => 1,
          'country-of-manufacture-id' => 0,
          'gallery-id'                => $galleryId,
          'image-id'                  => 0,
          'sku'                       => $value->ean,
          'article-name-internal'     => $productName,
          'ean13-jan-barcode'         => '', 
          'upc-barcode'               => '',
          'wholesale_price'           => $value->unit_price,
          'retail_price'              => 0.00,
          'retail_tax_price'          => 0.00,
          'unit_price'                => $value->unit_price,
          'unity'                     => '',
          'qty'                       => 0,
          'qty_out_of_stock'          => 0,
          'min_qty_in_cart'           => 0,
          'max_qty_in_cart'           => 0,
          'new-from-date'             => '2015-08-20 15:00:00',
          'new-to-date'               => '2015-08-20 15:00:00',
          'ap-width'                  => 0.00,
          'ap-height'                 => 0.00,
          'ap-depth'                  => 0.00,
          'ap-weight'                 => 0.00,
          'ap-shipping-fee'           => 0.00,
          'lang' => array(
            51 => array(
              "'article-name'"     => $productName,
              "'description'"      => '',
              "'site-title'"       => '',
              "'meta-keywords'"    => '',
              "'meta-description'" => '',
              "'meta-robot'"       => 'all',
              "'html-content'"     => htmlentities($value->description_en.((strlen($value->specs_en) > 0) ? '<br>'.$value->specs_en : ''), ENT_QUOTES, "UTF-8")
            )
          )
        );
        self::$registry->getService('store')->updateArticleDataById($form, $articleId, 1);

        if((int) $value->width !== 0) {
          $this->__setWidth( $value->width, $articleId );
        }
        if((int) $value->height !== 0) {
          $this->__setHeight( $value->height, $articleId );
        }
        if((int) $value->length !== 0) {
          $this->__setDepth( $value->length, $articleId );
        }
        if((int) $value->weigth !== 0) {
          $this->__setWeight( $value->weigth, $articleId );
        }
        if(strlen($value->brand) > 0) {
          $this->__setBrand( $value->brand, $articleId );
        }
      }
    }
    print_r('200OK');
    exit;
  }
  
  private function __articleAssigningCategory()
  {
    $articleList = $this->__articleList();
    
    foreach($articleList as $value) {
      if(!is_null($value->categoryList)) {
        foreach($value->categoryList as $category) {
          $categoryTree = self::$registry->getService('store')->categoryBreadcrumbById($category->id_category, 189);

          foreach($categoryTree as $twig) {
            if((bool) self::$registry->getService('store')->haveArticleCategoryById($value->id_article, $twig["id_category"]) === false) {
              self::$registry->getService('store')->insertArticleCategoryById(array(
                ':id_article'  => (int) $value->id_article,
                ':id_category' => (int) $twig["id_category"]
              ));
            }
          }
        }
      }
    }
    return true;
  }
  
  private function __articleList()
  {
    $qry = "SELECT
              id_article
            FROM
              app_store_article";
    self::$registry->getService('storage')->executeQuery( $qry );
    
    if(self::$registry->getService('storage')->rowCount() > 0) {
      $data = self::$registry->getService('storage')->getResult();
      
      foreach($data as $key => $value) {
        $data[ $key ]->categoryList = $this->__getArticleCategoryListById( $value->id_article );
      }
      return (count($data) > 0) ? $data : null;
    }
    return null;
  }
  
  private function __getArticleCategoryListById( $articleId = 0 )
  {
    $qry = "SELECT
              id_category
            FROM
              app_store_article_category";
    $keys = array(
      ":id_article" => (int) $articleId
    );
    self::$registry->getService('storage')->executeQuery( $qry, $keys );
    
    if(self::$registry->getService('storage')->rowCount() > 0) {
      $res  = self::$registry->getService('storage')->getResult();
      $data = [];
      
      foreach($res as $value) {
        $data[] = self::$registry->getService('store')->categoryDataForArticleById( $value->id_category );
      }
      return (count($data) > 0) ? $data : null;
    }
    return null;
  }
  
  private function __importCategories()
  {
    $this->__buildTree( $this->__oldCategoryList() );
    
    if(is_array($this->tree) && (count($this->tree) > 0)) {
      $this->__buildCategories( $this->tree );
    }
    self::$registry->getService('helper')->dump( $this->tree );
  }
  
  private function __buildCategories( $data = null , $oCatId = 0, $nCatId = 0 )
  {
    if(is_array($data) && (count($data) > 0)) {
      foreach($data as $value) {
        if(((int) $oCatId !== 0) && ((int) $nCatId !== 0)) {
          $this->__insertCategorySync(array(
            ':id_m_category' => (int) $nCatId,
            ':id_s_category' => (int) $oCatId
          ));
        }
        $cCatId = $this->__createCategory($value->name, $nCatId);
        
        $this->__insertCategorySync(array(
          ':id_m_category' => (int) $cCatId,
          ':id_s_category' => (int) $value->id
        ));
        if(is_array($value->childrens) && (count($value->childrens) > 0)) {
          $this->__buildCategories($value->childrens, $value->id, $cCatId);
        }
      }
    }
    return true;
  }
  
  private function __createCategory( $category_name = '', $parentId = 0 )
  {
    $obj = $this->__isCategoryByName( $category_name );
    
    if(is_object($obj)) {
      return (int) $obj->id_category;
    } else {
      $catId = (int) self::$registry->getService('store')->insertCategory($data = array(
        ':id_parent'        => (int) $parentId,
        ':is_root_category' => 0,
        ':guest'            => 1,
        ':visitor'          => 1,
        ':customer'         => 1,
        ':active'           => 1,
        ':position'         => self::$registry->getService('store')->categoryLastPosition( $parentId ),
        ':date_upd'         => date("Y-m-d H:i:s"),
        ':date_add'         => date("Y-m-d H:i:s"),
        ':creator'          => 1
      ));
      if(self::$registry->getService('store')->isCategoryById( $catId )) {
        foreach(self::$registry->getService('languages')->getEnabledLanguages() as $value) {
          $this->status[] = self::$registry->getService('store')->insertCategoryLang(array(
            ":id_category"      => $catId,
            ":id_lang"          => $value->id_lang,
            ":category_name"    => $category_name,
            ":title"            => $category_name,
            ":description"      => $category_name,
            ":meta_robots"      => 'all',
            ":meta_keywords"    => '',
            ":meta_description" => $category_name,
            ":html_content"     => ''
          ));
        }
        return $catId;
      }
      return 0;
    }
  }
  
  private function __insertCategorySync( $data = null )
  {
    self::$registry->getService('storage')->insert( 'export_category_sync', $data );
    
    return self::$registry->getService('storage')->executed();
  }
  
  private function __buildTree( $source = null )
  {
    foreach($source as $key => $twig) {
      $this->tree[ $key ] = $twig;
      $this->tree[ $key ]->childrens = $this->__buildTreeByCatId( $twig->id );
    }
  }
  
  private function __buildTreeByCatId( $catId = 0 )
  { 
    $children = $this->__childrenByItemId( $catId );
    
    if(is_array($children) && (count($children) > 0)) {
      $markup = [];
      
      foreach($children as $key => $child) {
        $list = $this->__childrenByItemId( $child->id );

        $markup[ $key ] = $child;
        $markup[ $key ]->childrens = (!is_null($list)) ? $this->__buildTreeByCatId( $child->id ) : null;
      }
      return $markup;
    }
    return null;
  }
  
  private function __childrenByItemId( $categoryId = 0 )
  {
    $qry = "SELECT
              id, `name`
            FROM
              export_category_list";
    $keys = array(
      ':parent_id' => (int) $categoryId
    );
    self::$registry->getService('storage')->executeQuery( $qry, $keys );
    
    return (self::$registry->getService('storage')->rowCount() > 0) ? self::$registry->getService('storage')->getResult() : null;
  }
  
  private function __oldCategoryList()
  {
    $qry = "SELECT
              id, `name`, parent_id
            FROM
              export_category_list";
    $keys = array(
      ':parent_id' => 2
    );
    self::$registry->getService('storage')->executeQuery( $qry, $keys );
    
    return (self::$registry->getService('storage')->rowCount() > 0) ? self::$registry->getService('storage')->getResult() : null;
  }
  
  private function __isCategoryByName( $categoryName = '' )
  {
    $qry = "SELECT
              id_category, category_name
            FROM
              app_store_category_lang
            WHERE
              id_lang = 189";
    self::$registry->getService('storage')->executeQuery( $qry );
    
    if(self::$registry->getService('storage')->rowCount() > 0) {
      $data = self::$registry->getService('storage')->getResult();
      
      foreach($data as $value) {
        if((string) strtolower(html_entity_decode($value->category_name, ENT_QUOTES, "UTF-8")) === (string) strtolower($categoryName)) {
          return $value;
        }
      }
      return false;
    }
    return false;
  }
  
  public function path()
  {
    $articleList = $this->__syncList();
    
    if(is_array($articleList) && (count($articleList) > 0)) {
      foreach($articleList as $article) {
        $data   = self::$registry->getService('store')->articleDataById( $article->id_article )->lang[ 189 ];
        $exData = $this->__exArticleDataById( $article->id_item );
        
        self::$registry->getService('store')->updateArticleLangById(array(
          'description'  => ((strlen($exData->description) > 0) ? strip_tags($exData->description) : strip_tags($data->description)),
          'html_content' => ((strlen($exData->detail) > 0) ? (strip_tags($exData->description)).'<br>'.$exData->detail : $data->html_content)
        ), $article->id_article, 189);
      }
      print_r('200OK');
      exit;
    }
    print_r('ARTICLE LIST IS EMPTY.');
    exit;
  }
  
  private function __syncList()
  {
    $qry = "SELECT
              a.id_article, (b.id) as id_item
            FROM
              app_store_article a
            INNER JOIN
              export_article_list b
            ON
              a.id_ext_article = b.cat_number";
    self::$registry->getService('storage')->executeQuery( $qry );
    
    return (self::$registry->getService('storage')->rowCount() > 0) ? self::$registry->getService('storage')->getResult() : null;
  }
  
  private function __exArticleDataById( $itemId = 0 )
  {
    $qry = "SELECT
              *
            FROM
              export_article_list";
    $keys = array(
      ':id' => (int) $itemId
    );
    self::$registry->getService('storage')->executeQuery( $qry, $keys );
    
    return (self::$registry->getService('storage')->rowCount() > 0) ? self::$registry->getService('storage')->getResult()[0] : null;
  }
  
  public function router() 
  {
    exit;
    $type  = 5;
    $count = 10000;
    $status = [];
    
    for ($i = 1; $i <= $count; $i++) {
      $status[] = self::$registry->getService('irouter')->addRoute( $this->__createRouteObject( $type ) );
    }
    print_r(((self::$registry->getService('helper')->checkStatus( $status )) ? '200OK' : 'ERROR'));
  }

  public function price()
  {
    echo 'RUN?';
    exit;
    
    $qry = "SELECT
              id_article, retail_price
            FROM
              app_store_article";
    self::$registry->getService('storage')->executeQuery( $qry );
    
    if(self::$registry->getService('storage')->rowCount() > 0) {
      $data = self::$registry->getService('storage')->getResult();
      
      foreach($data as $value) {
        $prices = $this->__getRetailTaxPrice(0, $value->retail_price, 1);
        
        self::$registry->getService('store')->updateArticleById(array(
          'retail_price'     => $prices->retail_price,
          'retail_tax_price' => $prices->retail_tax_price,
          'tax_price'        => $prices->tax_price
        ), $value->id_article);
      }
      print_r('200OK');
      exit;
    }
    print_r('ARTICLE LIST NO LOADED.');
  }
  
  private function __setWidth( $value = '', $articleId = 0 )
  {
    $vId = (int) self::$registry->getService('store')->attributeValueIdByKeyword( $value );
    $vId = ($vId !== 0) ? $vId : $this->__createAttrV($value, 3);
    
    if(self::$registry->getService('store')->isAttributeValueById(3, $vId)) {
      self::$registry->getService('store')->insertArticleAttributeById(array(
        ':id_article'   => (int) $articleId,
        ':id_attribute' => 3,
        ':id_value'     => (int) $vId
      ));
    }
  }
  
  private function __setHeight( $value = '', $articleId = 0 )
  {
    $vId = (int) self::$registry->getService('store')->attributeValueIdByKeyword( $value );
    $vId = ($vId !== 0) ? $vId : $this->__createAttrV($value, 4);
    
    if(self::$registry->getService('store')->isAttributeValueById(4, $vId)) {
      self::$registry->getService('store')->insertArticleAttributeById(array(
        ':id_article'   => (int) $articleId,
        ':id_attribute' => 4,
        ':id_value'     => (int) $vId
      ));
    }
  }
  
  private function __setDepth( $value = '', $articleId = 0 )
  {
    $vId = (int) self::$registry->getService('store')->attributeValueIdByKeyword( $value );
    $vId = ($vId !== 0) ? $vId : $this->__createAttrV($value, 5);
    
    if(self::$registry->getService('store')->isAttributeValueById(5, $vId)) {
      self::$registry->getService('store')->insertArticleAttributeById(array(
        ':id_article'   => (int) $articleId,
        ':id_attribute' => (int) 5,
        ':id_value'     => (int) $vId
      ));
    }
  }
  
  private function __setWeight( $value = '', $articleId = 0 )
  {
    $vId = (int) self::$registry->getService('store')->attributeValueIdByKeyword( $value );
    $vId = ($vId !== 0) ? $vId : $this->__createAttrV($value, 6);
    
    if(self::$registry->getService('store')->isAttributeValueById(6, $vId)) {
      self::$registry->getService('store')->insertArticleAttributeById(array(
        ':id_article'   => (int) $articleId,
        ':id_attribute' => 6,
        ':id_value'     => (int) $vId
      ));
    }
  }
  
  private function __setBrand( $value = '', $articleId = 0 )
  {
    $vId = (int) self::$registry->getService('store')->attributeValueIdByKeyword( $value );
    $vId = ($vId !== 0) ? $vId : $this->__createAttrV($value, 2);
    
    if(self::$registry->getService('store')->isAttributeValueById(2, $vId)) {
      self::$registry->getService('store')->insertArticleAttributeById(array(
        ':id_article'   => (int) $articleId,
        ':id_attribute' => 2,
        ':id_value'     => (int) $vId
      ));
    }
  }
  
  private function __createAttrV( $value = null, $attrId = 0 )
  {
    $string1 = self::$registry->getService('helper')->generateRandomString(20);
    $string2 = self::$registry->getService('helper')->generateRandomString(20);
    $valueId = self::$registry->getService('store')->insertAttributeValue(array(
      ':id_attribute' => (int) $attrId
    ));
    self::$registry->getService('store')->insertAttributeValueLang(array(
      ':id_attribute'     => (int) $attrId,
      ':id_value'         => (int) $valueId,
      ':id_lang'          => 51,
      ':value'            => (string) $value,
      ':link_rewrite'     => self::$registry->getService('hash')->ripemd128($string1.$value.$string2),
      ':site_title'       => '',
      ':meta_robot'       => '',
      ':meta_keywords'    => '',
      ':meta_description' => '',
      ':html_content'     => ''
    ));
    return $valueId;
  }
  
  private function __getHtmlByArticleId( $articleExtId = '' )
  {
    $qry = "SELECT
              a.id_article, b.id_lang, b.html_content
            FROM
              app_store_article a
            INNER JOIN
              app_store_article_lang b
            ON
              a.id_article = b.id_article";
    $keys = array(
      'a.id_ext_article' => (string) $articleExtId,
      'b.id_lang'        => 51
    );
    self::$registry->getService('storage')->executeQuery( $qry, $keys );
    
    return (self::$registry->getService('storage')->rowCount() > 0) ? self::$registry->getService('storage')->getResult()[0] : null;
  }
  
  private function __getRetailTaxPrice( $retailPrice = 0, $retailTaxPrice = 0, $taxId = 0 )
  {
    $obj = (object) array(
      'retail_price'     => ((float) $retailPrice !== 0) ? (float) $retailPrice : 0,
      'retail_tax_price' => ((float) $retailTaxPrice !== 0) ? (float) $retailTaxPrice : 0,
      'tax_price'        => 0
    );
    if(self::$registry->getService('store')->isExistsTaxById($taxId)) {
      $taxRate = ((float) self::$registry->getService('store')->getTaxDataById($taxId)->rate / 100) + 1;
      
      if($obj->retail_price < 1) {
        $obj->tax_price    = $obj->retail_tax_price - ($obj->retail_tax_price / $taxRate);
        $obj->retail_price = $obj->retail_tax_price - $obj->tax_price;
      }
      if($obj->retail_tax_price < 1) {
        $obj->retail_tax_price = $obj->retail_price * $taxRate;
        $obj->tax_price = $obj->retail_tax_price - $obj->retail_price;
      }
      if($obj->tax_price < 1) {
        $obj->tax_price = $obj->retail_tax_price - ($obj->retail_tax_price / $taxRate);
      }
    }
    return $obj;
  }
  
  private function __initDigit()
  {
    $routeList = self::$registry->getService('router')->routeList();
    
    foreach($routeList as $value) {
      self::$registry->getService('router')->updateRouteById(array(
        'digit' => $this->__pathToDigit( $value->path )
      ),$value->id_route);
    }
  }
  
  private function __pathToDigit( $path = '' )
  {
    $digit = (int) strlen($path);

    if(strlen($path) > 0) {
      foreach(str_split($path) as $value) {
        $digit = $digit + $this->__charToDigit( $value );
      }
      return $digit;
    }
    return false;
  }
  
  private function __charToDigit( $char = null )
  {
    if(!is_null($char)) {
      $alphabet = array(
        'a' => 1270, 'b' => 1888, 'c' => 2521, 'd' => 5973, 'e' => 1337, 'f' => 5069, 'g' => 1169,
        'h' => 2139, 'i' => 5642, 'j' => 2148, 'k' => 4479, 'l' => 3376, 'm' => 4979, 'n' => 3954, 
        'o' => 4091, 'p' => 4928, 'q' => 2883, 'r' => 3985, 's' => 2899, 't' => 3786, 'u' => 3240,
        'v' => 4317, 'w' => 1562, 'x' => 4645, 'y' => 1274, 'z' => 2848, 'A' => 1563, 'B' => 2775, 
        'C' => 5878, 'D' => 5148, 'E' => 2696, 'F' => 1148, 'G' => 1035, 'H' => 4218, 'I' => 1120,
        'J' => 1373, 'K' => 3287, 'L' => 1289, 'M' => 2512, 'N' => 2928, 'O' => 2438, 'P' => 5991,
        'Q' => 5304, 'R' => 1416, 'S' => 3945, 'T' => 3395, 'U' => 5345, 'V' => 5829, 'W' => 1379,
        'X' => 2243, 'Y' => 3614, 'Z' => 3619
      );
      return (array_key_exists((string) $char, $alphabet)) ? $alphabet[ $char ] : ((is_numeric($char) && ((int) $char > 0)) ? (int) $char : (((string) $char === "-") ? 66 : 55));
    }
    return 0;
  }
  
  private function _b()
  {
    for($i=1;$i<=52;$i++) {
      echo $i. ' = '. rand(1000, 6000). '<br>';
    }
    exit;
    $v = array(
      'a' => 1, 'b' => 2, 'c' => 3, 'd' => 4, 'e' => 5, 'f' => 6, 'g' => 7,
      'h' => 8, 'i' => 9, 'j' => 10, 'k' => 11, 'l' => 12, 'm' => 13, 'n' => 14, 
      'o' => 15, 'p' => 16, 'q' => 17, 'r' => 18, 's' => 19, 't' => 20, 'u' => 21,
      'v' => 22, 'w' => 23, 'x' => 24, 'y' => 25, 'z' => 26, 'A' => 27, 'B' => 28, 
      'C' => 29, 'D' => 30, 'E' => 31, 'F' => 32, 'G' => 33, 'H' => 34, 'I' => 35,
      'J' => 36, 'K' => 37, 'L' => 38, 'M' => 39, 'N' => 40, 'O' => 41, 'P' => 42,
      'Q' => 43, 'R' => 44, 'S' => 45, 'T' => 46, 'U' => 47, 'V' => 48, 'W' => 49,
      'X' => 50, 'Y' => 51, 'Z' => 52
    );
  }
  
  private function __createRouteObject( $type = 0 )
  {
    switch((int) $type) {
      case 1:
        $object = (object) array(
          'rule'   => 1,
          'rm'     => 1,
          'ctrl'   => 'api',
          'mth'    => 'routeTest',
          'direction' => array($this->__randomWord(),$this->__randomWord())
        );    
        return $object;
      case 5:
        $object = (object) array(
          'rule' => 5,
          'rm'   => 1,
          'ctrl' => 'api',
          'mth'  => 'routeTest',
          'key'  => $this->__createRouteKey()
        );
        return $object;
      case 6:
        $schema = [];
      
        for($i=0;$i<rand(3,6);$i++) {
          $schema[] = (object) array(
            'type'   => 1,
            'filter' => 0,
            'value'  => $this->__randomWord()
          );
        }
        $object = (object) array(
          'rule'   => 6,
          'rm'     => null,
          'ctrl'   => null,
          'mth'    => null,
          'schema' => $schema,
        );
        return $object;
      default:
        return null;
    }
  }
  
  private function __randomWord( $len = 10 ) 
  {
    $word = array_merge(range('a', 'z'), range('A', 'Z'));
    shuffle($word);
    return substr(implode($word), 0, $len);
  }
  
  private function __createRouteKey()
  {
    $key = '';
    
    foreach(str_split(self::$registry->getService('helper')->generateRandomString(4)) as $value) {
      $key .= $value.'-';
    }
    return substr($key, 0, -1);
  }
  
  private function createUrlKey( $heading = '' )
  {
    return $this->hyphenize(html_entity_decode($heading, ENT_QUOTES, 'UTF-8'));
  }
  
  private function hyphenize( $string = '' ) 
  {
    $link = strtolower(
      preg_replace(
        array( '#[\\s-]+#', '#[^A-Za-z0-9\. -]+#' ),
        array( '-', '' ),
        $this->cleanString(urldecode($string))
      )
    );
    return ((string) substr($link, 0, 1) === '-') ? substr($link ,-(strlen($link)-1)) : $link;
  }

  private function cleanString( $text = '' ) 
  {
    $utf8 = array(
        '/[áàâãªä]/u'   =>   'a',
        '/[ÁÀÂÃÄ]/u'    =>   'A',
        '/[ÍÌÎÏ]/u'     =>   'I',
        '/[íìîï]/u'     =>   'i',
        '/[éèêë]/u'     =>   'e',
        '/[ÉÈÊË]/u'     =>   'E',
        '/[óòôõºö]/u'   =>   'o',
        '/[ÓÒÔÕÖ]/u'    =>   'O',
        '/[úùûü]/u'     =>   'u',
        '/[ÚÙÛÜ]/u'     =>   'U',
        '/ç/'           =>   'c',
        '/Ç/'           =>   'C',
        '/ñ/'           =>   'n',
        '/Ñ/'           =>   'N',
        '/–/'           =>   '-', // UTF-8 hyphen to "normal" hyphen
        '/[’‘‹›‚]/u'    =>   ' ', // Literally a single quote
        '/[“”«»„]/u'    =>   ' ', // Double quote
        '/ /'           =>   ' ', // nonbreaking space (equiv. to 0x160)
    );
    return preg_replace(array_keys($utf8), array_values($utf8), $text);
  }
	
  public function facebook()
  { 
    echo 'WAIT...';
    exit;
    
    $data = array(
      'link'        => "https://www.zalando.co.uk/jo-ghost-lace-ups-testa-di-moro-jo712a02s-o11.html",
      'picture'     => "https://secure-i3.ztat.net//detail/JO/71/2A/02/SO/11/JO712A02S-O11@10.1.jpg",
      'name'        => "Jo Ghost Lace-ups - testa di moro.",
      'caption'     => "ZALANDO",
      'description' => "Jo Ghost men's shoes. For men who dare to take fashion to the ultimate limit.",
      'message'     => "Gentlemen of the world, the ultimate in footwear perfection has well and truly been achieved and its name is Jo Ghost men's shoes. They say seeing is believing, but you really won't believe what you witness when you feast your eyes on what the luxurious Jo Ghost men's shoes brand has to offer. Never before have men's shoes been so gorgeous, so breathtaking, so alive with vibrancy and vigour. ."
    );
    $postId = self::$registry->getService('facebook-api')->sendPost($data);
    $result = self::$registry->getService('facebook')->insertPost(array(
      ':id_fb_post'  => $postId,
      ':link'        => $data["link"],
      ':picture'     => $data["picture"],
      ':name'        => $data["name"],
      ':caption'     => $data["caption"],
      ':description' => $data["description"],
      ':message'     => $data["message"],
      ':creator'     => 1
    ));
    self::$registry->getService('helper')->dump($result);
  }
  
}