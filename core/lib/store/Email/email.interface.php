<?php
/*
*  Copyright 2016 MOZAYC s.r.o
*
*  NOTICE OF LICENSE
*
*  @author     Mozayc s.r.o. //-- Henrich Barkoczy  <henrich@mozayc.net>
*  @copyright  Mozayc s.r.o.
*  @license    http://www.mozayc.net/software-license - Software License
*/

interface Email {
  
  public function createEmail( $data = null );
  
  public function updateEmail( $data = null );
  
  public function updateEmails( $data = null );
  
  public function sendEmailById( $emailId = 0, $objectId = 0, $recipient = '' );
  
}