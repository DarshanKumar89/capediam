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

// PROJECT
define('__ORGANIZATION__','CARPE DM FASHION');
define('__PROJECT_NAME__','CARPE DM FASHION');
define('__PROJECT_VERSION','1.0');
// GLOBALS
define('__ROOT_DIR__', __DIR__ .'/../../');
define('__APP_DIR__', __ROOT_DIR__ . 'app/');
define('__CORE_DIR__', __ROOT_DIR__ . 'core/');
define('__CONFIG_DIR__', __CORE_DIR__. 'config/');
define('__CERT_DIR__', __CORE_DIR__ . 'cert/');
define('__KERNEL_DIR__', __CORE_DIR__ . 'kernel/');
define('__LIB_DIR__', __CORE_DIR__ . 'lib/');
define('__CACHE_DIR__',__CORE_DIR__ . 'cache/');
define('__PUBLIC_PATH__', __ROOT_DIR__ . 'public');
define('__UPLOAD_PATH__', __ROOT_DIR__ . 'public/files/');
// CORE RULES
define('__DB_USE__', TRUE);
define('__DICTIONARY_USE__', FALSE);
// SMARTY
define('__SMARTY_COMPILE_DIR__',__CACHE_DIR__ . 'smarty/compile');
define('__SMARTY_CACHE_DIR__',__CACHE_DIR__ . 'smarty/cache');
// THEME
define('__THEMES_DIR__',__APP_DIR__ . 'themes/');
define('__THEMES_SET__','default');
define('__THEME__', 'default');
// SITE SETTINGS
define('__SITE_NAME__', 'CARPE DM FASHION');
define('__SITE_URL__', 'http://www.carpedmfashion.com');
define('__MAIL_SVR__', '');
define('__MAIL_FROM_DEFAULT__','');
// DB
define('__SQL_HOST__','localhost');
define('__SQL_DB__','carpedmfashion');
define('__SQL_USER__','betser0909');
define('__SQL_PASS__','NewYork.2*');
// LANGUAGE
define('__USE_MULTI_LANGUAGES__', true);
define('__DEFAULT_LANG_ID__', 189);
// SENDMAIL
define('__DEFAULT_SENDER_EMAIL__','customerservices@slatyfork.eu');
// DRIVE
define('__DRIVE_ROOT_ID__', '7259b712f116a7fe6310cdc765c836af');
// GEOIP
define('__GEOIP_EXTERNAL_URL__','http://geoip.slatyfork.eu/?ip=');
// COOKIE
define('__USER_EXPIRE_TIME__', (time()+3600 * 24 * 365));
// SITEMAP
define('__SITEMAP__', __ROOT_DIR__ . 'public/sitemap.xml');