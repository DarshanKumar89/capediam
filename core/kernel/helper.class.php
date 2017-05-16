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

class Helper {
  
  /**  @var Registry **/
  protected static $registry;
  
  /** @var array **/
  private static $chars;

  public function __construct( Registry $registry )
  {
    self::$registry = $registry;
    self::$chars    = include_once __CONFIG_DIR__ . 'chars.inc.php';
  }
  
  /***************************************
  * 
  * COUNTRY ID
  *  
  ***************************************/
  
  public function getCountryId()
  {
    $cc  = (isset(self::$registry->getService('geoip')->getVisitor()->countryCode)) ? strtoupper( self::$registry->getService('geoip')->getVisitor()->countryCode ) : null;
    $cId = ((strlen($cc) === 2) && ((bool) self::$registry->getService('languages')->isCountryByCode( $cc ) === true)) ? self::$registry->getService('languages')->getCountryIdByCCode( $cc ) : 0;
    
    return $cId;
  }
  
  /***************************************
  * 
  * CREATE URL KEY 
  *  
  ***************************************/
  
  public function createUrlKey( $heading = '' )
  {
    return $this->hyphenize(html_entity_decode($heading, ENT_QUOTES, 'UTF-8'));
  }
  
  public function hyphenize( $string = '' ) 
  {
    $aString = $this->remove_accents($string);
    $bString = $this->strip_symbols($aString);
    $link    = strtolower(
      preg_replace(
        array( '#[\\s-]+#', '#[^A-Za-z0-9\. -]+#' ),
        array( '-', '' ),
        $this->cleanString(urldecode($bString))
      )
    );
    return ((string) substr($link, (strlen($link) - 1), 1) === "-") ? substr($link, 0, -1) : $link;
  }

  public function cleanString( $text = '' ) 
  { 
    $utf8 = array(
        '/[áàâãªä]/u'   =>   'a',
        '/[ÁÀÂÃÄ]/u'    =>   'A',
        '/[ÍÌÎÏ]/u'     =>   'I',
        '/[íìîï]/u'     =>   'i',
        '/[éèêë]/u'     =>   'e',
        '/[č]/u'        =>   'c',
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
  
  /***************************************
  * 
  * DRIVE , FORMAT, FILE EXT. 
  *  
  ***************************************/
  
  public function formatBytes( $bytes = 0, $precision = 2 ) 
  { 
    $units = array('B', 'KB', 'MB', 'GB', 'TB'); 

    $bytes = max($bytes, 0); 
    $pow = floor(($bytes ? log($bytes) : 0) / log(1024)); 
    $pow = min($pow, count($units) - 1); 
    $bytes /= pow(1024, $pow);
    $bytes /= (1 << (10 * $pow)); 

    return round($bytes, $precision) . ' ' . $units[$pow]; 
  }
  
  public function setFileExt( $fileType = '' )
  {
    $ext = '';
    switch($fileType)
    {
      case 'image/jpeg':
        $ext = '.jpg';
        break;
      case 'image/png':
        $ext = '.png';
        break;
      case 'image/gif':
        $ext = '.gif';
        break;
      case 'application/pdf':
        $ext = '.pdf';
        break;
      case 'text/csv':
        $ext = '.csv';
        break;
    }
    return $ext;
  }
  
  public function setFileTypeId( $fileType = '' )
  {
    $ext = 0;
    switch($fileType) {
      case 'image/jpeg':
        $ext = 1;
        break;
      case 'image/png':
        $ext = 1;
        break;
      case 'image/gif':
        $ext = 1;
        break;
      case 'application/pdf':
        $ext = 2;
        break;
    }
    return $ext;
  }
  
  public function replaceFileType( $string = '' )
  {
    $start = array(
      ".jpg",
      ".png",
      ".gif",
      ".pdf",
      ".bmp"
    );
    $replace = array("","","","","");
    return str_replace($start,$replace,$string);
  }
  
  public function isDuplicateParametersInURL( $urlBits = null )
  {
    return (count(array_unique($urlBits)) < count($urlBits)) ? true : false;
  }
  
  public function isEmail( $email = '' )
  {
    return filter_var($email, FILTER_VALIDATE_EMAIL);
  }
  
  public function isPhone( $phone = '' )
  {
    return preg_replace("/[^0-9]/", '', $phone);
  }
  
  public function getFileSizeFromUrl( $url = '' ) 
  {
    if(file_get_contents($url) !== false) {
      $headers = get_headers($url, 1);
      if (isset($headers['Content-Length'])) return $headers['Content-Length'];
      if (isset($headers['Content-length'])) return $headers['Content-length'];

      $c = curl_init();
      curl_setopt_array($c, array(
          CURLOPT_URL => $url,
          CURLOPT_RETURNTRANSFER => true,
          CURLOPT_HTTPHEADER => array('User-Agent: Mozilla/5.0 (Macintosh; U; Intel Mac OS X 10.5; en-US; rv:1.9.1.3) Gecko/20090824 Firefox/3.5.3'),
          ));
      curl_exec($c);
      return curl_getinfo($c, CURLINFO_SIZE_DOWNLOAD);
    }
    return null;
  }
  
  public function mainImageFromGallery( $imageList = null )
  {
    if(is_array($imageList) && (count($imageList) > 0)) {
      foreach($imageList as $key => $image) {
        if((int) $image->main === 1) {
          return $imageList[ $key ];
        }
      }
    }
    return null;
  }
  
  public function array_sort_by_column(&$arr, $col, $dir = SORT_DESC) {
    $sort_col = array();
    
    foreach($arr as $key=> $row) {
        $sort_col[$key] = $row->$col;
    }
    array_multisort($sort_col, $dir, $arr);
  }
  
  public function create_zip( $files = null, $source = '', $destination = '', $zipname = '', $download = false ) 
  {
    if(is_null($files)) {
      $files = glob($source . '/*');
    }
    if(strlen($destination) === 0) {
      $destination = __CACHE_DIR__.'zip'.DIRECTORY_SEPARATOR;
    }
    if(!is_null($files) && is_array($files) && (count($files) > 0)) {
        $zip = new ZipArchive();
        if($zip->open($destination.$zipname, (file_exists($destination.$zipname)) ? ZIPARCHIVE::OVERWRITE : ZIPARCHIVE::CREATE) !== true) {
          return false;
        }
        foreach($files as $file) {
          $zip->addFile($file, basename($file));
        }
        $zip->close();
        
        if((bool) $download === false) {
          return file_exists($destination.$zipname);
        }
        ob_get_clean();
        header('Content-Type: application/zip');
        header("Content-Disposition: attachment; filename='".$zipname."'");
        header("Content-Transfer-Encoding: binary");
        header('Content-Length: ' . filesize($destination.$zipname));
        readfile($destination.$zipname);
    } 
    return false;
  }
  
  public function array_to_xml( $xmlArray = null, $xml = null, $item = '', $filename = '', $unlink = true ) 
  {
    if((strlen((string) $filename) > 0) && file_exists( $filename )) {
      if(((bool) $unlink === true) && (!unlink( $filename )))
        return false;
    }
    if(!is_null($xmlArray) && is_array($xmlArray) && (count($xmlArray) > 0) && isset($xml)) {
      foreach($xmlArray as $key => $value) {
        if(is_array($value)) {
            if(!is_numeric($key)){
              $subnode = $xml->addChild($key);

              $this->array_to_xml($value, $subnode);
            }
            else{
              $subnode = $xml->addChild($item);

              $this->array_to_xml($value, $subnode);
            }
        } else {
          $xml->addChild($key,htmlspecialchars($value));
        }
      }
      return (strlen((string) $filename) > 0) ? $xml->asXML( $filename ) : $xml->asXML();
    }
    return false;
  }
  
  function validateDate( $input = null, $format = 'Y-m-d H:i:s')
  {
    $date = DateTime::createFromFormat($format, $input);
    
    return ($date == false || !(date_format($date,$format) == $input) ) ? false : true;
  }
  
  public function checkStatus( $arr = null )
  {
    if(!empty($arr)) {      
      foreach($arr as $status) {
        if( (bool) $status === false) return false;
      }
      return true;
    }
    return false;
  }
  
  public function dump( $var = null )
  {
    echo '<pre>';
    var_dump($var);
    echo '</pre>';
    exit;
  }
  
  public function money_format( $price = 0 )
  {
    return number_format((float) round($price,3), 2, '.', '.');
  }
  
  public function generateRandomString( $length = 10 ) 
  {
    $characters   = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $stringLength = ( (int) $length > 0) ? (int) $length : $this->length;
    $randomString = '';
    for ($i = 0; $i < $stringLength; $i++) {
        $randomString .= $characters[rand(0, strlen($characters) - 1)];
    }
    return $randomString;
  }
  
  public function randColor() 
  {
    return '#' . str_pad(dechex(mt_rand(0, 0xFFFFFF)), 6, '0', STR_PAD_LEFT);
  }
  
  public function strip_symbols( $string = '' )
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
          $string );
  }
  
  public function replace_accents( $string = '' )
  {
    return strtr($string, self::$chars);
  }
  
  public function remove_accents($string) 
  {
    if(!preg_match('/[\x80-\xff]/', $string) )
      return $string;

    if($this->__seems_utf8($string)) {
        $chars = array(
        // Decompositions for Latin-1 Supplement
        chr(195).chr(128) => 'A', chr(195).chr(129) => 'A',
        chr(195).chr(130) => 'A', chr(195).chr(131) => 'A',
        chr(195).chr(132) => 'A', chr(195).chr(133) => 'A',
        chr(195).chr(135) => 'C', chr(195).chr(136) => 'E',
        chr(195).chr(137) => 'E', chr(195).chr(138) => 'E',
        chr(195).chr(139) => 'E', chr(195).chr(140) => 'I',
        chr(195).chr(141) => 'I', chr(195).chr(142) => 'I',
        chr(195).chr(143) => 'I', chr(195).chr(145) => 'N',
        chr(195).chr(146) => 'O', chr(195).chr(147) => 'O',
        chr(195).chr(148) => 'O', chr(195).chr(149) => 'O',
        chr(195).chr(150) => 'O', chr(195).chr(153) => 'U',
        chr(195).chr(154) => 'U', chr(195).chr(155) => 'U',
        chr(195).chr(156) => 'U', chr(195).chr(157) => 'Y',
        chr(195).chr(159) => 's', chr(195).chr(160) => 'a',
        chr(195).chr(161) => 'a', chr(195).chr(162) => 'a',
        chr(195).chr(163) => 'a', chr(195).chr(164) => 'a',
        chr(195).chr(165) => 'a', chr(195).chr(167) => 'c',
        chr(195).chr(168) => 'e', chr(195).chr(169) => 'e',
        chr(195).chr(170) => 'e', chr(195).chr(171) => 'e',
        chr(195).chr(172) => 'i', chr(195).chr(173) => 'i',
        chr(195).chr(174) => 'i', chr(195).chr(175) => 'i',
        chr(195).chr(177) => 'n', chr(195).chr(178) => 'o',
        chr(195).chr(179) => 'o', chr(195).chr(180) => 'o',
        chr(195).chr(181) => 'o', chr(195).chr(182) => 'o',
        chr(195).chr(182) => 'o', chr(195).chr(185) => 'u',
        chr(195).chr(186) => 'u', chr(195).chr(187) => 'u',
        chr(195).chr(188) => 'u', chr(195).chr(189) => 'y',
        chr(195).chr(191) => 'y',
        // Decompositions for Latin Extended-A
        chr(196).chr(128) => 'A', chr(196).chr(129) => 'a',
        chr(196).chr(130) => 'A', chr(196).chr(131) => 'a',
        chr(196).chr(132) => 'A', chr(196).chr(133) => 'a',
        chr(196).chr(134) => 'C', chr(196).chr(135) => 'c',
        chr(196).chr(136) => 'C', chr(196).chr(137) => 'c',
        chr(196).chr(138) => 'C', chr(196).chr(139) => 'c',
        chr(196).chr(140) => 'C', chr(196).chr(141) => 'c',
        chr(196).chr(142) => 'D', chr(196).chr(143) => 'd',
        chr(196).chr(144) => 'D', chr(196).chr(145) => 'd',
        chr(196).chr(146) => 'E', chr(196).chr(147) => 'e',
        chr(196).chr(148) => 'E', chr(196).chr(149) => 'e',
        chr(196).chr(150) => 'E', chr(196).chr(151) => 'e',
        chr(196).chr(152) => 'E', chr(196).chr(153) => 'e',
        chr(196).chr(154) => 'E', chr(196).chr(155) => 'e',
        chr(196).chr(156) => 'G', chr(196).chr(157) => 'g',
        chr(196).chr(158) => 'G', chr(196).chr(159) => 'g',
        chr(196).chr(160) => 'G', chr(196).chr(161) => 'g',
        chr(196).chr(162) => 'G', chr(196).chr(163) => 'g',
        chr(196).chr(164) => 'H', chr(196).chr(165) => 'h',
        chr(196).chr(166) => 'H', chr(196).chr(167) => 'h',
        chr(196).chr(168) => 'I', chr(196).chr(169) => 'i',
        chr(196).chr(170) => 'I', chr(196).chr(171) => 'i',
        chr(196).chr(172) => 'I', chr(196).chr(173) => 'i',
        chr(196).chr(174) => 'I', chr(196).chr(175) => 'i',
        chr(196).chr(176) => 'I', chr(196).chr(177) => 'i',
        chr(196).chr(178) => 'IJ',chr(196).chr(179) => 'ij',
        chr(196).chr(180) => 'J', chr(196).chr(181) => 'j',
        chr(196).chr(182) => 'K', chr(196).chr(183) => 'k',
        chr(196).chr(184) => 'k', chr(196).chr(185) => 'L',
        chr(196).chr(186) => 'l', chr(196).chr(187) => 'L',
        chr(196).chr(188) => 'l', chr(196).chr(189) => 'L',
        chr(196).chr(190) => 'l', chr(196).chr(191) => 'L',
        chr(197).chr(128) => 'l', chr(197).chr(129) => 'L',
        chr(197).chr(130) => 'l', chr(197).chr(131) => 'N',
        chr(197).chr(132) => 'n', chr(197).chr(133) => 'N',
        chr(197).chr(134) => 'n', chr(197).chr(135) => 'N',
        chr(197).chr(136) => 'n', chr(197).chr(137) => 'N',
        chr(197).chr(138) => 'n', chr(197).chr(139) => 'N',
        chr(197).chr(140) => 'O', chr(197).chr(141) => 'o',
        chr(197).chr(142) => 'O', chr(197).chr(143) => 'o',
        chr(197).chr(144) => 'O', chr(197).chr(145) => 'o',
        chr(197).chr(146) => 'OE',chr(197).chr(147) => 'oe',
        chr(197).chr(148) => 'R',chr(197).chr(149) => 'r',
        chr(197).chr(150) => 'R',chr(197).chr(151) => 'r',
        chr(197).chr(152) => 'R',chr(197).chr(153) => 'r',
        chr(197).chr(154) => 'S',chr(197).chr(155) => 's',
        chr(197).chr(156) => 'S',chr(197).chr(157) => 's',
        chr(197).chr(158) => 'S',chr(197).chr(159) => 's',
        chr(197).chr(160) => 'S', chr(197).chr(161) => 's',
        chr(197).chr(162) => 'T', chr(197).chr(163) => 't',
        chr(197).chr(164) => 'T', chr(197).chr(165) => 't',
        chr(197).chr(166) => 'T', chr(197).chr(167) => 't',
        chr(197).chr(168) => 'U', chr(197).chr(169) => 'u',
        chr(197).chr(170) => 'U', chr(197).chr(171) => 'u',
        chr(197).chr(172) => 'U', chr(197).chr(173) => 'u',
        chr(197).chr(174) => 'U', chr(197).chr(175) => 'u',
        chr(197).chr(176) => 'U', chr(197).chr(177) => 'u',
        chr(197).chr(178) => 'U', chr(197).chr(179) => 'u',
        chr(197).chr(180) => 'W', chr(197).chr(181) => 'w',
        chr(197).chr(182) => 'Y', chr(197).chr(183) => 'y',
        chr(197).chr(184) => 'Y', chr(197).chr(185) => 'Z',
        chr(197).chr(186) => 'z', chr(197).chr(187) => 'Z',
        chr(197).chr(188) => 'z', chr(197).chr(189) => 'Z',
        chr(197).chr(190) => 'z', chr(197).chr(191) => 's',
        // Euro Sign
        chr(226).chr(130).chr(172) => 'E',
        // GBP (Pound) Sign
        chr(194).chr(163) => '');

        $string = strtr($string, $chars);
    } else {
        // Assume ISO-8859-1 if not UTF-8
        $chars['in'] = chr(128).chr(131).chr(138).chr(142).chr(154).chr(158)
            .chr(159).chr(162).chr(165).chr(181).chr(192).chr(193).chr(194)
            .chr(195).chr(196).chr(197).chr(199).chr(200).chr(201).chr(202)
            .chr(203).chr(204).chr(205).chr(206).chr(207).chr(209).chr(210)
            .chr(211).chr(212).chr(213).chr(214).chr(216).chr(217).chr(218)
            .chr(219).chr(220).chr(221).chr(224).chr(225).chr(226).chr(227)
            .chr(228).chr(229).chr(231).chr(232).chr(233).chr(234).chr(235)
            .chr(236).chr(237).chr(238).chr(239).chr(241).chr(242).chr(243)
            .chr(244).chr(245).chr(246).chr(248).chr(249).chr(250).chr(251)
            .chr(252).chr(253).chr(255);

        $chars['out'] = "EfSZszYcYuAAAAAACEEEEIIIINOOOOOOUUUUYaaaaaaceeeeiiiinoooooouuuuyy";

        $string = strtr($string, $chars['in'], $chars['out']);
        $double_chars['in'] = array(chr(140), chr(156), chr(198), chr(208), chr(222), chr(223), chr(230), chr(240), chr(254));
        $double_chars['out'] = array('OE', 'oe', 'AE', 'DH', 'TH', 'ss', 'ae', 'dh', 'th');
        $string = str_replace($double_chars['in'], $double_chars['out'], $string);
    }
    return $string;
  }
  
  private function __seems_utf8($str) {
    $length = strlen($str);
    for ($i=0; $i < $length; $i++) {
        $c = ord($str[$i]);
        if ($c < 0x80) $n = 0; # 0bbbbbbb
        elseif (($c & 0xE0) == 0xC0) $n=1; # 110bbbbb
        elseif (($c & 0xF0) == 0xE0) $n=2; # 1110bbbb
        elseif (($c & 0xF8) == 0xF0) $n=3; # 11110bbb
        elseif (($c & 0xFC) == 0xF8) $n=4; # 111110bb
        elseif (($c & 0xFE) == 0xFC) $n=5; # 1111110b
        else return false; # Does not match any model
        for ($j=0; $j<$n; $j++) { # n bytes matching 10bbbbbb follow ?
            if ((++$i == $length) || ((ord($str[$i]) & 0xC0) != 0x80))
                return false;
        }
    }
    return true;
  }
  
  public function entities2utf8( $unicode_c = '' )
  {
    $unicode_c = preg_replace("/\&\#([\da-f]{5})\;/es", "$this->entity2utf8onechar('\\1')", $unicode_c);
    return $unicode_c;
  }
  
  public function entity2utf8onechar( $unicode_c = '' )
  {
    $unicode_c_val = intval($unicode_c);
    $f=0x80; // 10000000
    $str = "";
    // U-00000000 - U-0000007F:   0xxxxxxx
    if($unicode_c_val <= 0x7F){         $str = chr($unicode_c_val);     }     //U-00000080 - U-000007FF:  110xxxxx 10xxxxxx
    else if($unicode_c_val >= 0x80 && $unicode_c_val <= 0x7FF){         $h=0xC0; // 11000000
        $c1 = $unicode_c_val >> 6 | $h;
        $c2 = ($unicode_c_val & 0x3F) | $f;
        $str = chr($c1).chr($c2);
    } else if($unicode_c_val >= 0x800 && $unicode_c_val <= 0xFFFF){         $h=0xE0; // 11100000
        $c1 = $unicode_c_val >> 12 | $h;
        $c2 = (($unicode_c_val & 0xFC0) >> 6) | $f;
        $c3 = ($unicode_c_val & 0x3F) | $f;
        $str=chr($c1).chr($c2).chr($c3);
    }
    //U-00010000 - U-001FFFFF:  11110xxx 10xxxxxx 10xxxxxx 10xxxxxx
    else if($unicode_c_val >= 0x10000 && $unicode_c_val <= 0x1FFFFF){         $h=0xF0; // 11110000
        $c1 = $unicode_c_val >> 18 | $h;
        $c2 = (($unicode_c_val & 0x3F000) >>12) | $f;
        $c3 = (($unicode_c_val & 0xFC0) >>6) | $f;
        $c4 = ($unicode_c_val & 0x3F) | $f;
        $str = chr($c1).chr($c2).chr($c3).chr($c4);
    }
    //U-00200000 - U-03FFFFFF:  111110xx 10xxxxxx 10xxxxxx 10xxxxxx 10xxxxxx
    else if($unicode_c_val >= 0x200000 && $unicode_c_val <= 0x3FFFFFF){         $h=0xF8; // 11111000
        $c1 = $unicode_c_val >> 24 | $h;
        $c2 = (($unicode_c_val & 0xFC0000)>>18) | $f;
        $c3 = (($unicode_c_val & 0x3F000) >>12) | $f;
        $c4 = (($unicode_c_val & 0xFC0) >>6) | $f;
        $c5 = ($unicode_c_val & 0x3F) | $f;
        $str = chr($c1).chr($c2).chr($c3).chr($c4).chr($c5);
    }
    //U-04000000 - U-7FFFFFFF:  1111110x 10xxxxxx 10xxxxxx 10xxxxxx 10xxxxxx 10xxxxxx
    else if($unicode_c_val >= 0x4000000 && $unicode_c_val <= 0x7FFFFFFF){         $h=0xFC; // 11111100
        $c1 = $unicode_c_val >> 30 | $h;
        $c2 = (($unicode_c_val & 0x3F000000)>>24) | $f;
        $c3 = (($unicode_c_val & 0xFC0000)>>18) | $f;
        $c4 = (($unicode_c_val & 0x3F000) >>12) | $f;
        $c5 = (($unicode_c_val & 0xFC0) >>6) | $f;
        $c6 = ($unicode_c_val & 0x3F) | $f;
        $str = chr($c1).chr($c2).chr($c3).chr($c4).chr($c5).chr($c6);
    }
    return $str;
  }

}