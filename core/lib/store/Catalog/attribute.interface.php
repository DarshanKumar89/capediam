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

interface Attribute {

    public function createAttribute( $form = null );

    public function createAttributeValue( $form = null );

    public function insertArticleListToAttributeValue( $attrId = 0, $attrVId = 0, $ids = null );

    public function updateAttributeDataById( $form = null );

    public function updateAttributeImage( $attrId = 0, $langId = 0, $files = null );

    public function updateAttributeList( $form = null );

    public function updateAttributeValue( $form = null );

    public function getAttributeList( $pagination = false );

    public function getAttributeWidgets();

    public function getAttributeTree( $attributeId = 0 );

    public function getAttributeValueListById( $attrId = 0, $pagination = false );

    public function attributeTreeByAVId( $valueId = 0 );

    public function attrValueList();

    public function attrCaseByParams( $typeId = 0, $object = null, $params = null, $sortRuleId = 0, $priceFrom = 0, $priceUpTo = 0, $manufacturerIds = null );

    public function attributeBreadcrumbById( $attrId = 0, $langId = 0 );

    public function buildTreeByAttrId( $attrId = 0, $langId = 0 );

    public function resetAttrTreeArr();

    public function attributeLastChildById( $attrId = 0 );

    public function deleteArticleListFromAttributeValue( $attrId = 0, $attrVId = 0, $articleList = null );

    public function deleteAttributeValueList( $form = null );

    /**
    *
    * OLD
    *
    **/

    public function createAttributeLink($form = null);

    public function editAttributeLink($form = null);

    public function orderingAttributeLinks($form = null);

    public function getAttributeSortLinkDataById($itemId = 0);

    public function getOrderingAttributeLinksById($itemId = 0);

}