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

class DriveModel {
  
  /** @var Registry **/
  protected static $registry;

  public function __construct( Registry $registry ) 
  {
    self::$registry = $registry;
  }
  
  public function insertFolder( $data = null )
  {
    self::$registry->getService('storage')->insert( 'app_drive_folders', $data );
    
    return self::$registry->getService('storage')->lastInsertId();
  }
  
  public function insertFile( $data = null )
  {
    self::$registry->getService('storage')->insert( 'app_drive_files', $data );
    
    return self::$registry->getService('storage')->lastInsertId();
  }
  
  public function countFoldersByFolderId( $folderId = 0 )
  {
    $qry = "SELECT
              (count(folder_id)) as avx
            FROM
              app_drive_folders";
    $keys = array(
      ':folder_parent_id' => (int) $folderId
    );
    self::$registry->getService('storage')->executeQuery( $qry, $keys );
    
    return (self::$registry->getService('storage')->rowCount() > 0) ? (int) self::$registry->getService('storage')->getResult()[0]->avx : 0;
  }
  
  public function countFilesByFolderId( $folderId = 0 )
  {
    $qry = "SELECT
              (count(file_id))  as avx
            FROM
              app_drive_files";
    $keys = array(
      ':folder_id' => (int) $folderId
    );
    self::$registry->getService('storage')->executeQuery( $qry, $keys );
    
    return (self::$registry->getService('storage')->rowCount() > 0) ? (int) self::$registry->getService('storage')->getResult()[0]->avx : 0;
  }
  
  public function itemTypeByHash( $itemHash = '' )
  {
    $qry1 = "SELECT
              folder_id
            FROM
              app_drive_folders";
    $keys1 = array(
      ':folder_hash' => (string) $itemHash
    );
    self::$registry->getService('storage')->executeQuery( $qry1, $keys1 );
    
    if(self::$registry->getService('storage')->rowCount() > 0) {
      $data = array(
        'id' => (int) self::$registry->getService('storage')->getResult()[0]->folder_id,
        't'  => 1
      );
    } else {
      $qry2 = "SELECT
                file_id
              FROM
                app_drive_files";
      $keys2 = array(
        ':file_hash' => (string) $itemHash
      );
      self::$registry->getService('storage')->executeQuery( $qry2, $keys2 );
      
      if(self::$registry->getService('storage')->rowCount() > 0) {
        $data = array(
          'id' => (int) self::$registry->getService('storage')->getResult()[0]->file_id,
          't'  => 2
        );
      }
    }
    return (isset($data) && (count($data) > 0)) ? $data : null;
  }
  
  public function rootFolder()
  {
    $rootFolder = array();
    $rootFolder['root'] = new stdClass();
    $rootFolder['root']->folder_id = 1;
    $rootFolder['root']->is_root   = 1; 
    $qry1 = "SELECT
              a.folder_hash, a.folder_url, a.folder_name, a.folder_color,
              a.last_modified, a.created, b.first_name, b.last_name
            FROM
              app_drive_folders a,
              app_users_info b
            WHERE 
              a.folder_owner = b.id_user";
    $keys1 = array(
      ':a.is_root'          => 0,
      ':a.is_trash'         => 0,
      ':a.folder_parent_id' => 1
    );
    self::$registry->getService('storage')->executeQuery( $qry1, $keys1 );
    
    if(self::$registry->getService('storage')->rowCount() > 0)  {
      $rootFolder['folders'] = self::$registry->getService('storage')->getResult();
    
      $qry2 = "SELECT
                a.file_hash, a.file_url, a.file_name, a.file_type_id,
                a.file_size, a.file_width, a.file_height, a.file_ext, 
                a.last_modified, a.created, b.first_name, b.last_name
              FROM
                app_drive_files a,
                app_users_info b
              WHERE 
                a.file_owner = b.id_user";
      $keys2 = array(
        ':a.folder_id' => 1,
        ':a.is_trash'  => 0
      );
      self::$registry->getService('storage')->executeQuery( $qry2, $keys2 );

      if(self::$registry->getService('storage')->rowCount() > 0) {
        $rootFolder['files'] = self::$registry->getService('storage')->getResult();
        
        foreach($rootFolder['files'] as $item) {
          $item->file_size = self::$registry->getService('helper')->formatBytes( $item->file_size );
        }
      }
    }
    return $rootFolder;
  }
  
  public function parentFolder( $folderId = 0 )
  {
    $qry = "SELECT
              folder_hash, folder_name, folder_parent_id
            FROM
              app_drive_folders";
    $keys = array(
      ':folder_id' => (int) $folderId
    );
    self::$registry->getService('storage')->executeQuery( $qry, $keys );
    
    return (self::$registry->getService('storage')->rowCount() > 0) ? self::$registry->getService('storage')->getResult()[0] : null;
  }
  
  public function folderById( $folderId = 0 )
  {
     $qry = "SELECT
              a.folder_hash, a.folder_url, a.folder_name, a.folder_color,
              a.last_modified, a.created, b.first_name, b.last_name
            FROM
              app_drive_folders a,
              app_users_info b
            WHERE 
              a.folder_owner = b.id_user";
    $keys = array(
      ':a.is_root'   => 0,
      ':a.is_trash'  => 0,
      ':a.folder_id' => (int) $folderId
    );
    self::$registry->getService('storage')->executeQuery( $qry, $keys );
    
    return (self::$registry->getService('storage')->rowCount() > 0) ? self::$registry->getService('storage')->getResult()[0] : null;
  }
  
  public function fileById( $fileId = 0 )
  {
    $qry = "SELECT
              file_id, file_type_id, file_hash, file_name, file_url, file_size,
              file_width, file_height, file_ext, last_modified
            FROM
              app_drive_files";
    $keys = array(
      ':file_id' => (int) $fileId
    );
    self::$registry->getService('storage')->executeQuery( $qry, $keys );
    
    return (self::$registry->getService('storage')->rowCount() > 0) ? self::$registry->getService('storage')->getResult()[0] : null;
  }
  
  public function trash()
  {
    // TRASH
    $trash = array();
    // FOLDERS
    $qry1 = "SELECT
              a.folder_hash, a.folder_url, a.folder_name, a.folder_color,
              a.last_modified, a.created, b.first_name, b.last_name
            FROM
              app_drive_folders a,
              app_users_info b
            WHERE
              a.folder_owner = b.id_user";
    $keys1 = array(
      ':is_trash' => 1
    );
    self::$registry->getService('storage')->executeQuery( $qry1, $keys1 );
    
    $trash['folders'] = (self::$registry->getService('storage')->rowCount() > 0) ? self::$registry->getService('storage')->getResult() : null;
    
    // FILES
    $qry2 = "SELECT
                a.file_hash, a.file_url, a.file_name, a.file_type_id,
                a.file_size, a.last_modified, a.created,
                b.first_name, b.last_name
              FROM
                app_drive_files a,
                app_users_info b
              WHERE 
                a.file_owner = b.id_user";
    $keys2 = array(
      ':is_trash' => 1
    );
    self::$registry->getService('storage')->executeQuery( $qry2, $keys2 );

    $trash['files'] = (self::$registry->getService('storage')->rowCount() > 0) ?  self::$registry->getService('storage')->getResult() : null;
      
    return $trash;
  }

  public function folderListByFolderId( $folderId = 0, $pagination = false )
  {
    $qry = "SELECT
              a.folder_id, a.folder_hash, a.folder_url, a.folder_name, a.folder_color,
              a.last_modified, a.created, b.first_name, b.last_name
            FROM
              app_drive_folders a
            LEFT JOIN
              app_users_info b
            ON
              a.folder_owner = b.id_user";
    $keys = array(
      ':a.is_root'          => 0,
      ':a.is_trash'         => 0,
      ':a.folder_parent_id' => (int) $folderId
    );
    if($pagination) {
      self::$registry->getService('pagination')->fetch( $qry, $keys );
    } else {
      self::$registry->getService('storage')->executeQuery( $qry, $keys );
    }
    if(self::$registry->getService('storage')->rowCount() > 0) {
      $data = self::$registry->getService('storage')->getResult();
      
      foreach($data as $key => $value) {
        $data[ $key ]->totalFolders = $this->countFoldersByFolderId( $value->folder_id );
        $data[ $key ]->totalFiles   = $this->countFilesByFolderId( $value->folder_id );
      }
    }
    return (isset($data) && (count($data) > 0)) ? $data : null;
  }
  
  public function fileListByFolderId( $folderId = 0, $pagination = false )
  {
    $qry = "SELECT
              a.file_hash, a.file_ext, a.file_url, a.file_name, a.file_type_id,
              a.file_size, a.file_width, a.file_height, a.last_modified, 
              a.created, b.first_name, b.last_name
            FROM
              app_drive_files a
            LEFT JOIN
              app_users_info b
            ON 
              a.file_owner = b.id_user";
    $keys = array(
      ':a.folder_id' => (int) $folderId,
      ':a.is_trash'  => 0
    );
    if($pagination) {
      self::$registry->getService('pagination')->fetch( $qry, $keys );
    } else {
      self::$registry->getService('storage')->executeQuery( $qry, $keys );
    }
    return (self::$registry->getService('storage')->rowCount() > 0) ? self::$registry->getService('storage')->getResult() : null;
  }
  
  public function rootFolders()
  {
    $qry = "SELECT
              folder_id, folder_hash, folder_name
            FROM
              app_drive_folders";
    $keys = array(
      ':is_root'          => 0,
      ':is_trash'         => 0,
      ':folder_parent_id' => 1
    );
    self::$registry->getService('storage')->executeQuery( $qry, $keys );
    
    return (self::$registry->getService('storage')->rowCount() > 0) ? self::$registry->getService('storage')->getResult() : null;
  }
  
  public function foldersFromTrash()
  {
    $qry = "SELECT
              folder_id, folder_hash
            FROM
              app_drive_folders";
    $keys = array(
      ':is_trash' => 1
    );
    self::$registry->getService('storage')->executeQuery( $qry, $keys );
    
    return (self::$registry->getService('storage')->rowCount() > 0) ? self::$registry->getService('storage')->getResult() : null;
  }
  
  public function filesFromTrash()
  {
    $qry = "SELECT
              file_id, file_hash, file_ext
            FROM
              app_drive_files";
    $keys = array(
      ':is_trash' => 1
    );
    self::$registry->getService('storage')->executeQuery( $qry, $keys );
    
    return (self::$registry->getService('storage')->rowCount() > 0) ? self::$registry->getService('storage')->getResult() : null;
  }
  
  public function CKEditorImagesList()
  {
    $qry = "SELECT 
              b.folder_name,a.file_hash, a.file_ext
            FROM
              app_drive_files a,
              app_drive_folders b
            WHERE
              a.folder_id = b.folder_id";
    $keys = array(
      ':a.file_type_id' => 1
    );
    self::$registry->getService('storage')->executeQuery( $qry, $keys );
    
    return (self::$registry->getService('storage')->rowCount() > 0) ? self::$registry->getService('storage')->getResult() : [];
  }
  
  public function parentsFolderByFolderId( $folderId = 0 )
  {
    $qry = "SELECT
              folder_id
            FROM
              app_drive_folders";
    $keys = array(
      ':folder_parent_id' => (int) $folderId
    );
    self::$registry->getService('storage')->executeQuery( $qry, $keys );
    
    return (self::$registry->getService('storage')->rowCount() > 0) ? self::$registry->getService('storage')->getResult() : null;
  }
  
  public function foldersByParentId( $folderId = 0 )
  {
    $qry = "SELECT
              folder_id, folder_hash, folder_name
            FROM
              app_drive_folders";
    $keys = array(
      ':is_root'          => 0,
      ':is_trash'         => 0,
      ':folder_parent_id' => (int) $folderId
    );
    self::$registry->getService('storage')->executeQuery( $qry, $keys );
    
    return (self::$registry->getService('storage')->rowCount() > 0) ? self::$registry->getService('storage')->getResult() : null;
  }
  
  public function search( $keywords = '' )
  {
    $qry = "SELECT
              a.folder_id, b.file_id,
              MATCH(a.folder_name) AGAINST('".$keywords."' IN BOOLEAN MODE) as tscore,
              MATCH(b.file_name) AGAINST('".$keywords."' IN BOOLEAN MODE) as ascore
            FROM 
               app_drive_folders a
            LEFT JOIN
               app_drive_files b
            ON
               a.folder_id = b.folder_id
            WHERE 
               MATCH(a.folder_name) AGAINST('".$keywords."' IN BOOLEAN MODE)
            OR 
               MATCH(b.file_name) AGAINST('".$keywords."' IN BOOLEAN MODE)
            ORDER BY 
             (tscore + ascore) DESC";
    self::$registry->getService('storage')->executeQuery( $qry );
    
    if(self::$registry->getService('storage')->rowCount() > 0) {
      $result = self::$registry->getService('storage')->getResult();
      $data = new stdClass();
      $fids = [];
      
      foreach($result as $value) {
        if(isset($value->folder_id) && ((int) $value->folder_id !== 1)) {
          if(!in_array($value->folder_id, $fids)) {
            array_push($fids, $value->folder_id);
            $data->folders[] = $this->folderById( $value->folder_id );
          }
        }
        if(isset($value->file_id)) {
          $data->files[] = $this->fileById( $value->file_id );
        }
      }
    }
    return (isset($data) && (count($data) > 0)) ? $data : null;
  }
  
  public function addOnDriveByFolderId( $folderId = 0, $fidsSet = null )
  {
    $data = [];
    
    $qry1 = "SELECT
              folder_hash, folder_name
            FROM
              app_drive_folders";
    $keys1 = array(
      ':folder_parent_id' => (int) $folderId
    );
    self::$registry->getService('storage')->executeQuery( $qry1, $keys1 );
    
    $data['folders'] = (self::$registry->getService('storage')->rowCount() > 0 ) ? self::$registry->getService('storage')->getResult() : null;
      
    $qry2 = "SELECT
              file_hash, file_url, file_name
             FROM
              app_drive_files";
    $keys2 = array(
      ':folder_id' => (int) $folderId,
      ':is_trash' => 0
    );
    if(!is_null($fidsSet)) {
      $filter = " AND file_id NOT IN (".join(',',$fidsSet).")";

      self::$registry->getService('storage')->executeQuery( $qry2, $keys2, $filter );
    } else {
      self::$registry->getService('storage')->executeQuery( $qry2, $keys2 );
    }
    if ( self::$registry->getService('storage')->rowCount() > 0 ) {
      $data['files'] = self::$registry->getService('storage')->getResult();
    }
    return (isset($data) && (count($data) > 0)) ? $data : null;
  }
  
  public function folderIdByHash( $folderHash = '' )
  {
    $qry = "SELECT
              folder_id
            FROM
              app_drive_folders";
    $keys = array(
      ':folder_hash' => (string) $folderHash
    );
    self::$registry->getService('storage')->executeQuery( $qry, $keys );
    
    return (self::$registry->getService('storage')->rowCount() > 0) ? (int) self::$registry->getService('storage')->getResult()[0]->folder_id : null;
  }
  
  public function folderHashByFolderId( $folderId = 0 )
  {
   $qry = "SELECT
              folder_hash
            FROM
              app_drive_folders";
    $keys = array(
      ':folder_id' => (int) $folderId
    );
    self::$registry->getService('storage')->executeQuery( $qry, $keys );
    
    return (self::$registry->getService('storage')->rowCount() > 0 ) ? (string) self::$registry->getService('storage')->getResult()[0]->folder_hash : null;
  }
  
  public function fileIdByHash( $fileHash = '' )
  {
    $qry = "SELECT
              file_id
            FROM
              app_drive_files";
    $keys = array(
      ':file_hash' => (string) $fileHash
    );
    self::$registry->getService('storage')->executeQuery( $qry, $keys );
    
    return (self::$registry->getService('storage')->rowCount() > 0) ? (int) self::$registry->getService('storage')->getResult()[0]->file_id : null;
  }
  
  public function haveFolderChildrensById( $folderId = 0 )
  {
    $qry = "SELECT
              folder_id, folder_name
            FROM
              app_drive_folders";
    $keys = array(
      ':is_root'          => 0,
      ':is_trash'         => 0,
      ':folder_parent_id' => (int) $folderId
    );
    self::$registry->getService('storage')->executeQuery( $qry, $keys );
    
    return (self::$registry->getService('storage')->rowCount() > 0) ? true : false;
  }
  
  public function isFolderByHash( $folderHash = '' )
  {
    $qry = "SELECT
              folder_id
            FROM
              app_drive_folders";
    $keys = array(
      ':folder_hash' => (string) $folderHash
    );
    self::$registry->getService('storage')->executeQuery( $qry, $keys );
    
    return (self::$registry->getService('storage')->rowCount() > 0) ? true : false;
  }
  
  public function isFolderById( $folderId = 0 )
  {
    $qry = "SELECT
              folder_id
            FROM
              app_drive_folders";
    $keys = array(
      ':folder_id' => (int) $folderId
    );
    self::$registry->getService('storage')->executeQuery( $qry, $keys );
    
    return (self::$registry->getService('storage')->rowCount() > 0) ? true : false;
  }
  
  public function isFileById( $fileId = 0 )
  {
    $qry = "SELECT
              file_id
            FROM
              app_drive_files";
    $keys = array(
      ':file_id' => (int) $fileId
    );
    self::$registry->getService('storage')->executeQuery( $qry, $keys );
    
    return (self::$registry->getService('storage')->rowCount() > 0) ? true : false;
  }
  
  public function moveFolder( $changes = null, $folderId = 0 )
  {
    self::$registry->getService('storage')->update( 'app_drive_folders', $changes, ' folder_id = '. (int) $folderId );
    
    return self::$registry->getService('storage')->executed();
  }
  
  public function moveFile( $changes = null, $fileId = 0 )
  {
    self::$registry->getService('storage')->update( 'app_drive_files', $changes, ' file_id = '. (int) $fileId );
    
    return self::$registry->getService('storage')->executed();
  }
  
  public function renameFolderById( $changes = null, $folderId = 0 )
  {
    self::$registry->getService('storage')->update( 'app_drive_folders', $changes, ' folder_id = '. (int) $folderId );
    
    return self::$registry->getService('storage')->executed();
  }
  
  public function renameFileById( $changes = null, $fileId = 0 )
  {
    self::$registry->getService('storage')->update( 'app_drive_files', $changes, ' file_id = '. (int) $fileId );
    
    return self::$registry->getService('storage')->executed();
  }
  
  public function restoreFolderById( $changes = null, $folderId = 0 )
  {
    self::$registry->getService('storage')->update( 'app_drive_folders', $changes, ' folder_id = '.(int) $folderId  );
    
    return self::$registry->getService('storage')->executed();
  }
  
  public function restoreFileById( $changes = null, $fileId = 0 )
  {
    self::$registry->getService('storage')->update( 'app_drive_files', $changes, ' file_id = '.(int) $fileId );
    
    return self::$registry->getService('storage')->executed();
  }
  
  public function restoreAllFoldersFromTrash( $changes = null )
  {
    self::$registry->getService('storage')->update( 'app_drive_folders', $changes, ' is_trash = 1 ' );
    
    return self::$registry->getService('storage')->executed();
  }
  
  public function restoreAllFilesFromTrash( $changes = null )
  {
    self::$registry->getService('storage')->update( 'app_drive_files', $changes, ' is_trash = 1 ' );
    
    return self::$registry->getService('storage')->executed();
  }
  
  public function trashFolderById( $changes = null, $folderId = 0 )
  {
    self::$registry->getService('storage')->update( 'app_drive_folders', $changes, ' folder_id = '.(int) $folderId );
    
    return self::$registry->getService('storage')->executed();
  }
  
  public function trashFileById( $changes = null, $fileId = 0 )
  {
    self::$registry->getService('storage')->update( 'app_drive_files', $changes, ' file_id = '.(int) $fileId );
    
    return self::$registry->getService('storage')->executed();
  }
  
  public function trashAllItemsFromFolderById( $changes = null, $folderId = 0 )
  {
    self::$registry->getService('storage')->update( 'app_drive_files', $changes, ' folder_id = '.(int) $folderId );
    
    return self::$registry->getService('storage')->executed();
  }
  
  public function deleteForlderById( $folderId = 0 )
  {
    self::$registry->getService('storage')->delete( 'app_drive_folders', ':folder_id', (int) $folderId );
    
    return self::$registry->getService('storage')->executed();
  }
  
  public function deleteFileById( $fileId = 0 )
  {
    self::$registry->getService('storage')->delete( 'app_drive_files', ':file_id', (int) $fileId );
    
    return self::$registry->getService('storage')->executed();
  }
  
  public function deleteFileFromDriveByFileId( $fileId = 0 )
  {
    if($this->isFileById( $fileId ))
    {
      $file = $this->fileById( $fileId );

      if((bool) self::$registry->getService('store')->haveFileThumbnailById( $fileId ) === true)
      {
        $cachedLink = __PUBLIC_PATH__ . '/files/cached/' . $file->file_hash . $file->file_ext;

        self::$registry->getService('store')->deleteThumbImageByLink( $cachedLink );
      }
      if(is_file( __UPLOAD_PATH__ . $file->file_hash . $file->file_ext ))
      {
        chdir(__UPLOAD_PATH__);
        
        $deleted = unlink($file->file_hash . $file->file_ext);
        
        return (((bool) $this->deleteFileById( $fileId ) === true) && ((bool) $deleted === true)) ? true : false;
      }
      else
      {
        return false;
      }
    }
    return false;
  }
  
}