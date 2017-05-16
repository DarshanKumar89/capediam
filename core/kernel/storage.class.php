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

class Storage {
  
  /** @var Registry **/
  protected static $registry;

  /** @var array  **/
  private $conn = array();

  /** @var int  **/
  private $affectedRows;

  /** @var int  **/
  private $count;

  /** @var array **/
  private $result;
  
  /** @var boolean **/
  private $executed = false;
  
  public function __construct( Registry $registry )
  {
    self::$registry = $registry;
  }
  
  public function createLocalStorageConn()
  {
    try {
        $this->conn['master'] = new PDO('mysql:host='.__SQL_HOST__.';dbname='.__SQL_DB__, __SQL_USER__, __SQL_PASS__);
        $this->conn['master']->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch(PDOException $e) {
      throw new Exception($e->getMessage());
    }
  }
  
  public function insert( $table = '', $data = null )
  {
    try {
      $fields  = "";
      $kValues = "";
      
      foreach ( $data as $key => $value )
      {
        $kValues .= $key.",";
        $fields  .= str_replace(':','',$key).",";
      }
      
      $fields  = substr($fields, 0, -1);
      $kValues = substr($kValues, 0, -1);
      
      $stmt = $this->conn['master']->prepare("INSERT INTO ".$table." (".$fields.") VALUES (".$kValues.")");
      foreach ( $data as $key => $value ) {
        $stmt->bindValue($key, $value);
      }
      $this->executed = ($stmt->execute()) ? true : false;
      $this->affectedRows = $stmt->rowCount();
    } catch(PDOException $e) {
      throw new Exception($e->getMessage());
    }
  }
  
  public function update( $table = '', $changes = null, $condition = '' )
  {
    try {
      $prepare  = "UPDATE " . $table . " SET ";
      $execute = array();
      
      foreach( $changes as $field => $value )
      {
        $prepare   .= $field."=?, ";
        $execute[]  = $value;
      }
      $prepare = substr($prepare, 0, -2);
      
      if( $condition != '' )
      {
        $prepare .= " WHERE " . $condition;
      }
      $stmt = $this->conn['master']->prepare( $prepare );
      $this->executed = ($stmt->execute( $execute )) ? true : false;
      $this->affectedRows = $stmt->rowCount();
    } catch(PDOException $e) {
      throw new Exception($e->getMessage());
    }
  }
  
  public function delete( $table = '', $key = null, $value = null )
  {
    try {
      if(is_array($key)) {
        $statment = '';
        $i = 0;
        
        foreach( $key as $k => $v) {
          $statment .= ($i == 0) ? str_replace(":","",$k).' = '.$v : ' AND '.str_replace(":","",$k).' = '.$v;
          $i++;
        }
        $stmt = $this->conn['master']->prepare('DELETE FROM '.$table.' WHERE '. $statment );
        $stmt->execute();
        $this->affectedRows = $stmt->rowCount();
      } else {
        $stmt = $this->conn['master']->prepare('DELETE FROM '.$table.' WHERE '.str_replace(":","",$key).' = '.$key );
        $stmt->bindParam( $key, $value );
        $this->executed = ($stmt->execute()) ? true : false;
        $this->affectedRows = $stmt->rowCount();
      }
    } catch(PDOException $e) {
      throw new Exception($e->getMessage());
    }
  }
  
  public function executeQuery( $qry = '', $keys = null, $filter = null )
  {
    try {
      if ( !empty( $keys ) ) {
        $sepa  = array_keys($keys);
        $pos   = strpos($qry, 'WHERE', 0);
        $sKeys = array();
        foreach ( $sepa as $value  ) {
          if ( strpos($value, '.') === false ) {
            if ( ($sepa[0] == $value) && (strpos($qry, 'WHERE', 0) < 5 || strpos($qry, 'WHERE', 0) === false) ) {
              $qry .= " WHERE ".str_replace(':', '', $value)." = ".$value;
            } else {
              $qry .= " AND ".str_replace(':', '', $value)." = ".$value;
            }
          } else {
            $a = substr($value, ($pos2 = strpos($value, '.')) !== false ? $pos2 + 1 : 0);
            if ( ($sepa[0] == $value) && ($pos < 5 || $pos === false) ) {
              $qry .= " WHERE ".str_replace(':', '', $value)." = :".$a;
            } else {
              $qry .= " AND ".str_replace(':', '', $value)." = :".$a;
            }
            $b = ":".$a;
            $sKeys[$b] = $keys[$value];
          }
        }
      }
      if(!is_null($filter)) {
        $qry .= " ".$filter;
      }      
      $stmt = $this->conn['master']->prepare($qry);
      if ( !empty( $sKeys ) ) {
          $this->executed = ($stmt->execute( $sKeys )) ? true : false;
      } else if ( !empty ( $keys ) ) {
          $this->executed = ($stmt->execute( $keys )) ? true : false;
      } else {
        $this->executed = ($stmt->execute()) ? true : false;
      }      
      $this->result = $stmt->fetchAll(PDO::FETCH_OBJ);
      $this->count  = $stmt->rowCount();
    } catch(PDOException $e) {
        throw new Exception($e->getMessage());
    }
  }
  
  public function truncate( $table = '' )
  {
    try {
      $this->conn['master']->query("TRUNCATE TABLE ".$table);
      
      return true;
    } catch(PDOException $e) {
        throw new Exception($e->getMessage());
    }
  }
  
  public function getResult()
  {
    return $this->result;
  }
  
  public function lastInsertId()
  {
    return $this->conn['master']->lastInsertId();
  }
  
  public function rowCount()
  {
    return $this->count;
  }
  
  public function affectedRows()
  {
    return $this->affectedRows;
  }
  
  public function executed()
  {
    return $this->executed;
  }
  
}