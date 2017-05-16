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

interface Gallery {
  
  public function createGallery( $form = null );
  
  public function galleryImagesList( $galleryId = 0, $folderHash = '' );
  
  public function insertGalleryImages( $form = null );
  
  public function updateGallery( $form = null );
  
  public function updateGalleries( $form = null );

  public function insertGalleryCaptions( $galleryId = 0, $imageId = 0, $captions = null );
  
}