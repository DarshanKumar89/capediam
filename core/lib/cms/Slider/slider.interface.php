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

interface Slider {
  
  public function createSlider( $form = null );
  
  public function sliderImagesList( $sliderId = 0, $folderHash = '' );
  
  public function insertImagesToSlider( $form = null );
  
  public function updateSlider( $form = null );
  
  public function updateSliders( $form = null );
  
  public function insertSliderCaptions( $sliderId = 0, $imageId = 0, $captions = null );
  
}