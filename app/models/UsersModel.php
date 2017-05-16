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

class UsersModel {
  
  /** @var Registry **/
  protected static $registry;

  public function __construct( Registry $registry ) 
  {
    self::$registry = $registry;
  }
  
  public function userIdBySession()
  {
    $qry = "SELECT
              id_user
            FROM
              app_users_auth
            WHERE
              status = 1";
    $keys = array(
      ':sid' => (string) self::$registry->getService('sessions')->get('sn_auth_session_uid')
    );
    self::$registry->getService('storage')->executeQuery( $qry, $keys );
    
    return (self::$registry->getService('storage')->rowCount() > 0) ? (int) self::$registry->getService('storage')->getResult()[0]->id_user : 0;
  }
  
  public function checkUserSID( $sid )
  {
    $qry = "SELECT
              sid
            FROM
              app_users_auth
            WHERE
              status = 1";
    $keys = array(
        ':sid' => $sid
    );
    self::$registry->getService('storage')->executeQuery( $qry, $keys );
    
    return ( self::$registry->getService('storage')->rowCount() == 1 ) ? true : false;
  }
  
  public function authUser( $email, $passwd )
  {
    $qry = "SELECT
              sid
            FROM
              app_users_auth
            WHERE
              status = 1";
    $keys = array(
      ':email'    => $email,
      ':password' => $passwd
    );
    self::$registry->getService('storage')->executeQuery( $qry, $keys );
    
    return (self::$registry->getService('storage')->rowCount() == 1) ? self::$registry->getService('storage')->getResult() : null;
  }
  
  public function getUserDataBySID( $sid = '' )
  {
    $qry = "SELECT
              a.id_user, a.email, b.first_name, b.last_name,
              c.profile_image, d.rule
            FROM
              app_users_auth a
            LEFT JOIN 
              app_users_info b
            ON 
              a.id_user = b.id_user
            LEFT JOIN 
              app_users_profiles c
            ON 
              a.id_user = c.id_user
            INNER JOIN
              app_users_acl d
            ON
              a.id_user = d.id_user";
    $keys = array(
      ':a.sid' => $sid
    );
    self::$registry->getService('storage')->executeQuery( $qry, $keys );
    
    if(self::$registry->getService('storage')->rowCount() === 1) {
      return self::$registry->getService('storage')->getResult();
    } else {
      throw new Exception('I/O Error - E100', 500);
    }
  }
  
  public function getUserDataByID( $userId = 0 )
  {
    $qry = "SELECT
              a.id_user, a.email, b.first_name, b.last_name,
              c.profile_image, d.rule
            FROM
              app_users_auth a
            LEFT JOIN 
              app_users_info b
            ON 
              a.id_user = b.id_user
            LEFT JOIN 
              app_users_profiles c
            ON 
              a.id_user = c.id_user
            INNER JOIN
              app_users_acl d
            ON
              a.id_user = d.id_user";
    $keys = array(
        ':a.id_user' => (int) $userId,
    );
    self::$registry->getService('storage')->executeQuery( $qry, $keys );
    
    return (self::$registry->getService('storage')->rowCount() === 1) ? self::$registry->getService('storage')->getResult() : null;
  }
  
  public function userList()
  {
    $qry = "SELECT
              a.id_user, a.email, b.first_name, b.last_name, c.profile_image
            FROM
              app_users_auth a
            LEFT JOIN 
              app_users_info b
            ON 
              a.id_user = b.id_user
            LEFT JOIN 
              app_users_profiles c
            ON 
              a.id_user = c.id_user";
    self::$registry->getService('storage')->executeQuery( $qry );
    
    return (self::$registry->getService('storage')->rowCount() > 0) ? self::$registry->getService('storage')->getResult() : null;
  }
  
}