<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-07-26 14:04:26
         compiled from "/Users/henrich/Work/SlatyFork/carpedmfashion.com/core/config/../../app/themes/cpanel/store/thumbnail/ajax/reload.tpl" */ ?>
<?php /*%%SmartyHeaderCode:185181512057976dea3fb815-07513629%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
  ),
  'nocache_hash' => '185181512057976dea3fb815-07513629',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'global_form_select_choose' => 1,
    'global_form_button_create' => 1,
    'resizeRuleList' => 1,
    'global_table_header_remove' => 1,
    'i' => 1,
    'item' => 1,
    'global_form_button_save_changes' => 1,
    'thumbSectionList' => 1,
    'entity_a' => 1,
    'entity_b' => 1,
    'entity_c' => 1,
    'resize_rule' => 1,
  ),
  'has_nocache_code' => true,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_57976dea4ae240_49894009',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57976dea4ae240_49894009')) {function content_57976dea4ae240_49894009($_smarty_tpl) {?>
<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12" style="padding: 0;">
  <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
    <form action="cpanel/create-resize-rule" method="post" role="form">
      <div class="panel panel-primary panel-toggled">
        <div class="panel-heading ui-draggable-handle">
          <h3 class="panel-title">
            Vytvoriť pravidlo úpravy obrázkov
          </h3>
          <ul class="panel-controls">
            <li><a href="#" onclick="return false;" class="panel-collapse"><span class="fa fa-angle-down"></span></a></li>
          </ul>                
        </div><!-- end panel-header -->
        <div class="panel-body panel-body-form">
          <div class="col-lg-2 col-md-2 col-sm-12 col-xs-12">
            <div class="form-group">
              <label>
                ZARIADENIE
                <span style="color:red;">*</span>
              </label>
              <select name="device" class="form-control select">
                <option value="0">
                  <?php echo '/*%%SmartyNocache:185181512057976dea3fb815-07513629%%*/<?php if (isset($_smarty_tpl->tpl_vars[\'global_form_select_choose\']->value)&&(strlen($_smarty_tpl->tpl_vars[\'global_form_select_choose\']->value)>0)) {?>/*/%%SmartyNocache:185181512057976dea3fb815-07513629%%*/';?>

                    <?php echo '/*%%SmartyNocache:185181512057976dea3fb815-07513629%%*/<?php echo $_smarty_tpl->tpl_vars[\'global_form_select_choose\']->value;?>
/*/%%SmartyNocache:185181512057976dea3fb815-07513629%%*/';?>

                  <?php echo '/*%%SmartyNocache:185181512057976dea3fb815-07513629%%*/<?php } else { ?>/*/%%SmartyNocache:185181512057976dea3fb815-07513629%%*/';?>

                    Choose...
                  <?php echo '/*%%SmartyNocache:185181512057976dea3fb815-07513629%%*/<?php }?>/*/%%SmartyNocache:185181512057976dea3fb815-07513629%%*/';?>

                </option>
                <option value="1">
                  VŠETKY ZARIADENIA
                </option>
                <option value="2">
                  PC
                </option>
                <option value="3">
                  PC A TABLET
                </option>
                <option value="4">
                  TABLET
                </option>
                <option value="5">
                  MOBIL
                </option>
              </select>
            </div><!-- end form-group -->
          </div><!-- end col -->
          <div class="col-lg-2 col-md-2 col-sm-12 col-xs-12">
            <div class="form-group">
              <label>
                VIEWPORT
              </label>
              <select name="viewport" class="form-control select">
                <option value="0">
                  <?php echo '/*%%SmartyNocache:185181512057976dea3fb815-07513629%%*/<?php if (isset($_smarty_tpl->tpl_vars[\'global_form_select_choose\']->value)&&(strlen($_smarty_tpl->tpl_vars[\'global_form_select_choose\']->value)>0)) {?>/*/%%SmartyNocache:185181512057976dea3fb815-07513629%%*/';?>

                    <?php echo '/*%%SmartyNocache:185181512057976dea3fb815-07513629%%*/<?php echo $_smarty_tpl->tpl_vars[\'global_form_select_choose\']->value;?>
/*/%%SmartyNocache:185181512057976dea3fb815-07513629%%*/';?>

                  <?php echo '/*%%SmartyNocache:185181512057976dea3fb815-07513629%%*/<?php } else { ?>/*/%%SmartyNocache:185181512057976dea3fb815-07513629%%*/';?>

                    Choose...
                  <?php echo '/*%%SmartyNocache:185181512057976dea3fb815-07513629%%*/<?php }?>/*/%%SmartyNocache:185181512057976dea3fb815-07513629%%*/';?>

                </option>
                <option value="1">
                  min-width
                </option>
                <option value="2">
                  max-width
                </option>
                <option value="3">
                  min-height
                </option>
                <option value="4">
                  max-height
                </option>
                <option value="5">
                  min-width / max-width
                </option>
                <option value="6">
                  min-height / max-height
                </option>
              </select>
            </div><!-- end form-group -->
          </div><!-- end col -->
          <div class="col-lg-1 col-md-1 col-sm-12 col-xs-12">
            <div class="form-group">
              <label>
                MIN [ <strong>PX</strong> ]
              </label>
              <input type="text"  name="min" value="0" class="form-control text-right" style="width:100%;margin:0 auto;">
            </div><!-- end form-group -->
          </div><!-- end col -->
          <div class="col-lg-1 col-md-1 col-sm-12 col-xs-12">
            <div class="form-group">
              <label>
                MAX [ <strong>PX</strong> ]
              </label>
              <input type="text"  name="max" value="0" class="form-control text-right" style="width:100%;margin:0 auto;">
            </div><!-- end form-group -->
          </div><!-- end col -->
          <div class="col-lg-2 col-md-2 col-sm-12 col-xs-12">
            <div class="form-group">
              <label>
                METÓDA ÚPRAVY OBRÁZKOV
                <span style="color:red;">*</span>
              </label>
              <select name="resize" class="form-control select">
                <option value="0">
                  <?php echo '/*%%SmartyNocache:185181512057976dea3fb815-07513629%%*/<?php if (isset($_smarty_tpl->tpl_vars[\'global_form_select_choose\']->value)&&(strlen($_smarty_tpl->tpl_vars[\'global_form_select_choose\']->value)>0)) {?>/*/%%SmartyNocache:185181512057976dea3fb815-07513629%%*/';?>

                    <?php echo '/*%%SmartyNocache:185181512057976dea3fb815-07513629%%*/<?php echo $_smarty_tpl->tpl_vars[\'global_form_select_choose\']->value;?>
/*/%%SmartyNocache:185181512057976dea3fb815-07513629%%*/';?>

                  <?php echo '/*%%SmartyNocache:185181512057976dea3fb815-07513629%%*/<?php } else { ?>/*/%%SmartyNocache:185181512057976dea3fb815-07513629%%*/';?>

                    Choose...
                  <?php echo '/*%%SmartyNocache:185181512057976dea3fb815-07513629%%*/<?php }?>/*/%%SmartyNocache:185181512057976dea3fb815-07513629%%*/';?>

                </option>
                <option value="1">
                  AUTO
                </option>
                <option value="2">
                  CROP
                </option>
                <option value="3">
                  EXACT
                </option>
                <option value="4">
                  LANDSCAPE
                </option>
                <option value="5">
                  PORTRAIT
                </option>
              </select>
            </div><!-- end form-group -->
          </div><!-- end col -->
          <div class="col-lg-2 col-md-2 col-sm-12 col-xs-12">
            <div class="form-group">
              <label>
                ŠÍRKA [ <strong>PX</strong> ]
                <span style="color:red;">*</span>
              </label>
              <input type="text"  name="width" value="0" class="form-control text-right" style="width:100%;margin:0 auto;">
            </div><!-- end form-group -->
          </div><!-- end col -->
          <div class="col-lg-2 col-md-2 col-sm-12 col-xs-12">
            <div class="form-group">
              <label>
                VÝŠKA [ <strong>PX</strong> ]
                <span style="color:red;">*</span>
              </label>
              <input type="text"  name="height" value="0" class="form-control text-right" style="width:100%;margin:0 auto;">
            </div><!-- end form-group -->
          </div><!-- end col -->
          <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="alert alert-info" style="margin: 20px 0 0 0;" role="alert">
              <ol>
                <li>
                  <strong>AUTO:</strong> Systém automatický zvolí vhodnú úpravu veľkosti (CROP, EXACT) na vybrané fotky. 
                </li>
                <li>
                  <strong>CROP:</strong> Úprava veľkosti s orezom bez deformácie fotiek.
                </li>
                <li>
                  <strong>EXACT:</strong> Úprava veľkosti podľa zadaných parametrov šírka/výška. Pri zmene pomeru strán nastane deformácia fotiek.
                </li>
                <li>
                  <strong>LANDSCAPE:</strong> Úprava veľkosti podľa zadaného parametru šírka. Výška je prispôsobená automaticky podľa pomeru strán bez deformácie fotiek.
                </li>
                <li>
                  <strong>PORTRAIT:</strong> Úprava veľkosti podľa zadaného parametru výška. Šírka je prispôsobená automaticky podľa pomeru strán bez deformácie fotiek. 
                </li>
              </ol>
            </div><!-- end alert -->
          </div><!-- end col -->
        </div><!-- end panel-body -->
        <div class="panel-footer">
          <button type="submit" class="btn btn-success">
            <i class="fa fa-save"></i>&nbsp;
            <?php echo '/*%%SmartyNocache:185181512057976dea3fb815-07513629%%*/<?php if (!empty($_smarty_tpl->tpl_vars[\'global_form_button_create\']->value)) {?>/*/%%SmartyNocache:185181512057976dea3fb815-07513629%%*/';
echo '/*%%SmartyNocache:185181512057976dea3fb815-07513629%%*/<?php echo mb_strtoupper($_smarty_tpl->tpl_vars[\'global_form_button_create\']->value, \'UTF-8\');?>
/*/%%SmartyNocache:185181512057976dea3fb815-07513629%%*/';
echo '/*%%SmartyNocache:185181512057976dea3fb815-07513629%%*/<?php } else { ?>/*/%%SmartyNocache:185181512057976dea3fb815-07513629%%*/';?>
CREATE<?php echo '/*%%SmartyNocache:185181512057976dea3fb815-07513629%%*/<?php }?>/*/%%SmartyNocache:185181512057976dea3fb815-07513629%%*/';?>

          </button>
        </div><!-- end panel-footer -->
      </div><!-- end panel -->
    </form>
  </div><!-- end col -->
  <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="padding-left: 50px;">
    <form action="cpanel/delete-resize-rules" method="post" role="form">
      <div class="panel panel-info">
        <div class="panel-heading ui-draggable-handle">
          <h3 class="panel-title">
            Zoznam pravidiel na úpravu obrazkov
          </h3>
          <ul class="panel-controls">
            <li><a href="#" onclick="return false;" class="panel-collapse"><span class="fa fa-angle-down"></span></a></li>
          </ul>                
        </div><!-- end panel-header -->
        <div class="panel-body panel-body-table">
          <?php echo '/*%%SmartyNocache:185181512057976dea3fb815-07513629%%*/<?php if (isset($_smarty_tpl->tpl_vars[\'resizeRuleList\']->value)&&(is_array($_smarty_tpl->tpl_vars[\'resizeRuleList\']->value)&&(count($_smarty_tpl->tpl_vars[\'resizeRuleList\']->value)>0))) {?>/*/%%SmartyNocache:185181512057976dea3fb815-07513629%%*/';?>

            <div class="table-responsive resize-list" style="border-top:1px solid #E5E5E5;">
              <table id="resizeRuleList" class="table table-bordered table-striped table-actions">
                <thead>
                  <tr>
                    <th class="text-center">
                      ID
                    </th>
                    <th class="text-center">
                      ZARIADENIE
                    </th>
                    <th class="text-center">
                      VIEWPORT
                    </th>
                    <th class="text-right">
                      MIN [ <strong>PX</strong> ]
                    </th>
                    <th class="text-right">
                      MAX [ <strong>PX</strong> ]
                    </th>
                    <th class="text-center">
                      METÓDA ÚPRAVY OBRÁZKOV
                    </th>
                    <th class="text-right">
                      ŠÍRKA [ <strong>PX</strong> ]
                    </th>
                    <th class="text-right">
                      VÝŠKA [ <strong>PX</strong> ]
                    </th>
                    <th class="text-center">
                      <?php echo '/*%%SmartyNocache:185181512057976dea3fb815-07513629%%*/<?php if (!empty($_smarty_tpl->tpl_vars[\'global_table_header_remove\']->value)) {?>/*/%%SmartyNocache:185181512057976dea3fb815-07513629%%*/';
echo '/*%%SmartyNocache:185181512057976dea3fb815-07513629%%*/<?php echo mb_strtoupper($_smarty_tpl->tpl_vars[\'global_table_header_remove\']->value, \'UTF-8\');?>
/*/%%SmartyNocache:185181512057976dea3fb815-07513629%%*/';
echo '/*%%SmartyNocache:185181512057976dea3fb815-07513629%%*/<?php } else { ?>/*/%%SmartyNocache:185181512057976dea3fb815-07513629%%*/';?>
REMOVE<?php echo '/*%%SmartyNocache:185181512057976dea3fb815-07513629%%*/<?php }?>/*/%%SmartyNocache:185181512057976dea3fb815-07513629%%*/';?>

                    </th>
                  </tr>
                </thead>
                <tbody>
                  <?php echo '/*%%SmartyNocache:185181512057976dea3fb815-07513629%%*/<?php  $_smarty_tpl->tpl_vars[\'item\'] = new Smarty_Variable; $_smarty_tpl->tpl_vars[\'item\']->_loop = false;
 $_smarty_tpl->tpl_vars[\'i\'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars[\'resizeRuleList\']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, \'array\');}
foreach ($_from as $_smarty_tpl->tpl_vars[\'item\']->key => $_smarty_tpl->tpl_vars[\'item\']->value) {
$_smarty_tpl->tpl_vars[\'item\']->_loop = true;
 $_smarty_tpl->tpl_vars[\'i\']->value = $_smarty_tpl->tpl_vars[\'item\']->key;
?>/*/%%SmartyNocache:185181512057976dea3fb815-07513629%%*/';?>

                    <tr>
                      <td class="td-device text-center">
                        <input type="hidden" name="resizeRuleList[<?php echo '/*%%SmartyNocache:185181512057976dea3fb815-07513629%%*/<?php echo $_smarty_tpl->tpl_vars[\'i\']->value;?>
/*/%%SmartyNocache:185181512057976dea3fb815-07513629%%*/';?>
]['id']" value="<?php echo '/*%%SmartyNocache:185181512057976dea3fb815-07513629%%*/<?php echo $_smarty_tpl->tpl_vars[\'item\']->value->id_rule;?>
/*/%%SmartyNocache:185181512057976dea3fb815-07513629%%*/';?>
" />
                        <strong><?php echo '/*%%SmartyNocache:185181512057976dea3fb815-07513629%%*/<?php echo $_smarty_tpl->tpl_vars[\'item\']->value->id_rule;?>
/*/%%SmartyNocache:185181512057976dea3fb815-07513629%%*/';?>
</strong>
                        <?php echo '/*%%SmartyNocache:185181512057976dea3fb815-07513629%%*/<?php if ($_smarty_tpl->tpl_vars[\'item\']->value->device==1) {?>/*/%%SmartyNocache:185181512057976dea3fb815-07513629%%*/';?>

                          <div class="device all">
                            <i class="fa fa-circle" aria-hidden="true"></i>
                          </div><!-- end divece -->
                        <?php echo '/*%%SmartyNocache:185181512057976dea3fb815-07513629%%*/<?php }?>/*/%%SmartyNocache:185181512057976dea3fb815-07513629%%*/';?>

                        <?php echo '/*%%SmartyNocache:185181512057976dea3fb815-07513629%%*/<?php if ($_smarty_tpl->tpl_vars[\'item\']->value->device==2) {?>/*/%%SmartyNocache:185181512057976dea3fb815-07513629%%*/';?>

                          <div class="device desktop">
                            <i class="fa fa-desktop" aria-hidden="true"></i>
                          </div><!-- end divece -->
                        <?php echo '/*%%SmartyNocache:185181512057976dea3fb815-07513629%%*/<?php }?>/*/%%SmartyNocache:185181512057976dea3fb815-07513629%%*/';?>

                        <?php echo '/*%%SmartyNocache:185181512057976dea3fb815-07513629%%*/<?php if ($_smarty_tpl->tpl_vars[\'item\']->value->device==4) {?>/*/%%SmartyNocache:185181512057976dea3fb815-07513629%%*/';?>

                          <div class="device tablet">
                            <i class="fa fa-tablet" aria-hidden="true"></i>
                          </div><!-- end divece -->
                        <?php echo '/*%%SmartyNocache:185181512057976dea3fb815-07513629%%*/<?php }?>/*/%%SmartyNocache:185181512057976dea3fb815-07513629%%*/';?>

                        <?php echo '/*%%SmartyNocache:185181512057976dea3fb815-07513629%%*/<?php if ($_smarty_tpl->tpl_vars[\'item\']->value->device==5) {?>/*/%%SmartyNocache:185181512057976dea3fb815-07513629%%*/';?>

                          <div class="device mobile">
                            <i class="fa fa-mobile" aria-hidden="true"></i>
                          </div><!-- end divece -->
                        <?php echo '/*%%SmartyNocache:185181512057976dea3fb815-07513629%%*/<?php }?>/*/%%SmartyNocache:185181512057976dea3fb815-07513629%%*/';?>

                      </td>
                      <td class="text-left">
                        <?php echo '/*%%SmartyNocache:185181512057976dea3fb815-07513629%%*/<?php if ($_smarty_tpl->tpl_vars[\'item\']->value->device==1) {?>/*/%%SmartyNocache:185181512057976dea3fb815-07513629%%*/';?>

                          VŠETKY ZARIADENIA
                        <?php echo '/*%%SmartyNocache:185181512057976dea3fb815-07513629%%*/<?php }?>/*/%%SmartyNocache:185181512057976dea3fb815-07513629%%*/';?>

                        <?php echo '/*%%SmartyNocache:185181512057976dea3fb815-07513629%%*/<?php if ($_smarty_tpl->tpl_vars[\'item\']->value->device==2) {?>/*/%%SmartyNocache:185181512057976dea3fb815-07513629%%*/';?>

                          PC
                        <?php echo '/*%%SmartyNocache:185181512057976dea3fb815-07513629%%*/<?php }?>/*/%%SmartyNocache:185181512057976dea3fb815-07513629%%*/';?>

                        <?php echo '/*%%SmartyNocache:185181512057976dea3fb815-07513629%%*/<?php if ($_smarty_tpl->tpl_vars[\'item\']->value->device==3) {?>/*/%%SmartyNocache:185181512057976dea3fb815-07513629%%*/';?>

                          PC A TABLET
                        <?php echo '/*%%SmartyNocache:185181512057976dea3fb815-07513629%%*/<?php }?>/*/%%SmartyNocache:185181512057976dea3fb815-07513629%%*/';?>

                        <?php echo '/*%%SmartyNocache:185181512057976dea3fb815-07513629%%*/<?php if ($_smarty_tpl->tpl_vars[\'item\']->value->device==4) {?>/*/%%SmartyNocache:185181512057976dea3fb815-07513629%%*/';?>

                          TABLET
                        <?php echo '/*%%SmartyNocache:185181512057976dea3fb815-07513629%%*/<?php }?>/*/%%SmartyNocache:185181512057976dea3fb815-07513629%%*/';?>

                        <?php echo '/*%%SmartyNocache:185181512057976dea3fb815-07513629%%*/<?php if ($_smarty_tpl->tpl_vars[\'item\']->value->device==5) {?>/*/%%SmartyNocache:185181512057976dea3fb815-07513629%%*/';?>

                          MOBIL
                        <?php echo '/*%%SmartyNocache:185181512057976dea3fb815-07513629%%*/<?php }?>/*/%%SmartyNocache:185181512057976dea3fb815-07513629%%*/';?>

                      </td>
                      <td class="text-left">
                        <?php echo '/*%%SmartyNocache:185181512057976dea3fb815-07513629%%*/<?php if ($_smarty_tpl->tpl_vars[\'item\']->value->viewport==0) {?>/*/%%SmartyNocache:185181512057976dea3fb815-07513629%%*/';?>

                          -
                        <?php echo '/*%%SmartyNocache:185181512057976dea3fb815-07513629%%*/<?php }?>/*/%%SmartyNocache:185181512057976dea3fb815-07513629%%*/';?>

                        <?php echo '/*%%SmartyNocache:185181512057976dea3fb815-07513629%%*/<?php if ($_smarty_tpl->tpl_vars[\'item\']->value->viewport==1) {?>/*/%%SmartyNocache:185181512057976dea3fb815-07513629%%*/';?>

                          min-width
                        <?php echo '/*%%SmartyNocache:185181512057976dea3fb815-07513629%%*/<?php }?>/*/%%SmartyNocache:185181512057976dea3fb815-07513629%%*/';?>

                        <?php echo '/*%%SmartyNocache:185181512057976dea3fb815-07513629%%*/<?php if ($_smarty_tpl->tpl_vars[\'item\']->value->viewport==2) {?>/*/%%SmartyNocache:185181512057976dea3fb815-07513629%%*/';?>

                          max-width
                        <?php echo '/*%%SmartyNocache:185181512057976dea3fb815-07513629%%*/<?php }?>/*/%%SmartyNocache:185181512057976dea3fb815-07513629%%*/';?>

                        <?php echo '/*%%SmartyNocache:185181512057976dea3fb815-07513629%%*/<?php if ($_smarty_tpl->tpl_vars[\'item\']->value->viewport==3) {?>/*/%%SmartyNocache:185181512057976dea3fb815-07513629%%*/';?>

                          min-height
                        <?php echo '/*%%SmartyNocache:185181512057976dea3fb815-07513629%%*/<?php }?>/*/%%SmartyNocache:185181512057976dea3fb815-07513629%%*/';?>

                        <?php echo '/*%%SmartyNocache:185181512057976dea3fb815-07513629%%*/<?php if ($_smarty_tpl->tpl_vars[\'item\']->value->viewport==4) {?>/*/%%SmartyNocache:185181512057976dea3fb815-07513629%%*/';?>

                          max-height
                        <?php echo '/*%%SmartyNocache:185181512057976dea3fb815-07513629%%*/<?php }?>/*/%%SmartyNocache:185181512057976dea3fb815-07513629%%*/';?>

                        <?php echo '/*%%SmartyNocache:185181512057976dea3fb815-07513629%%*/<?php if ($_smarty_tpl->tpl_vars[\'item\']->value->viewport==5) {?>/*/%%SmartyNocache:185181512057976dea3fb815-07513629%%*/';?>

                          min-width / max-width
                        <?php echo '/*%%SmartyNocache:185181512057976dea3fb815-07513629%%*/<?php }?>/*/%%SmartyNocache:185181512057976dea3fb815-07513629%%*/';?>

                        <?php echo '/*%%SmartyNocache:185181512057976dea3fb815-07513629%%*/<?php if ($_smarty_tpl->tpl_vars[\'item\']->value->viewport==6) {?>/*/%%SmartyNocache:185181512057976dea3fb815-07513629%%*/';?>

                          min-height / max-height
                        <?php echo '/*%%SmartyNocache:185181512057976dea3fb815-07513629%%*/<?php }?>/*/%%SmartyNocache:185181512057976dea3fb815-07513629%%*/';?>

                      </td>
                      <td class="text-right">
                        <?php echo '/*%%SmartyNocache:185181512057976dea3fb815-07513629%%*/<?php echo $_smarty_tpl->tpl_vars[\'item\']->value->min_size;?>
/*/%%SmartyNocache:185181512057976dea3fb815-07513629%%*/';?>

                      </td>
                      <td class="text-right">
                        <?php echo '/*%%SmartyNocache:185181512057976dea3fb815-07513629%%*/<?php echo $_smarty_tpl->tpl_vars[\'item\']->value->max_size;?>
/*/%%SmartyNocache:185181512057976dea3fb815-07513629%%*/';?>

                      </td>
                      <td class="text-left">
                        <?php echo '/*%%SmartyNocache:185181512057976dea3fb815-07513629%%*/<?php if ($_smarty_tpl->tpl_vars[\'item\']->value->resize==1) {?>/*/%%SmartyNocache:185181512057976dea3fb815-07513629%%*/';?>

                          AUTO
                        <?php echo '/*%%SmartyNocache:185181512057976dea3fb815-07513629%%*/<?php }?>/*/%%SmartyNocache:185181512057976dea3fb815-07513629%%*/';?>

                        <?php echo '/*%%SmartyNocache:185181512057976dea3fb815-07513629%%*/<?php if ($_smarty_tpl->tpl_vars[\'item\']->value->resize==2) {?>/*/%%SmartyNocache:185181512057976dea3fb815-07513629%%*/';?>

                          CROP
                        <?php echo '/*%%SmartyNocache:185181512057976dea3fb815-07513629%%*/<?php }?>/*/%%SmartyNocache:185181512057976dea3fb815-07513629%%*/';?>

                        <?php echo '/*%%SmartyNocache:185181512057976dea3fb815-07513629%%*/<?php if ($_smarty_tpl->tpl_vars[\'item\']->value->resize==3) {?>/*/%%SmartyNocache:185181512057976dea3fb815-07513629%%*/';?>

                          EXACT
                        <?php echo '/*%%SmartyNocache:185181512057976dea3fb815-07513629%%*/<?php }?>/*/%%SmartyNocache:185181512057976dea3fb815-07513629%%*/';?>

                        <?php echo '/*%%SmartyNocache:185181512057976dea3fb815-07513629%%*/<?php if ($_smarty_tpl->tpl_vars[\'item\']->value->resize==4) {?>/*/%%SmartyNocache:185181512057976dea3fb815-07513629%%*/';?>

                          LANDSCAPE
                        <?php echo '/*%%SmartyNocache:185181512057976dea3fb815-07513629%%*/<?php }?>/*/%%SmartyNocache:185181512057976dea3fb815-07513629%%*/';?>

                        <?php echo '/*%%SmartyNocache:185181512057976dea3fb815-07513629%%*/<?php if ($_smarty_tpl->tpl_vars[\'item\']->value->resize==5) {?>/*/%%SmartyNocache:185181512057976dea3fb815-07513629%%*/';?>

                          PORTRAIT
                        <?php echo '/*%%SmartyNocache:185181512057976dea3fb815-07513629%%*/<?php }?>/*/%%SmartyNocache:185181512057976dea3fb815-07513629%%*/';?>

                      </td>
                      <td class="text-right">
                        <?php echo '/*%%SmartyNocache:185181512057976dea3fb815-07513629%%*/<?php echo $_smarty_tpl->tpl_vars[\'item\']->value->width;?>
/*/%%SmartyNocache:185181512057976dea3fb815-07513629%%*/';?>

                      </td>
                      <td class="text-right">
                        <?php echo '/*%%SmartyNocache:185181512057976dea3fb815-07513629%%*/<?php echo $_smarty_tpl->tpl_vars[\'item\']->value->height;?>
/*/%%SmartyNocache:185181512057976dea3fb815-07513629%%*/';?>

                      </td>
                      <td class="text-center">
                        <label class="switch">
                          <input type="checkbox" name="resizeRuleList[<?php echo '/*%%SmartyNocache:185181512057976dea3fb815-07513629%%*/<?php echo $_smarty_tpl->tpl_vars[\'i\']->value;?>
/*/%%SmartyNocache:185181512057976dea3fb815-07513629%%*/';?>
]['delete']" value="1">
                          <span></span>
                        </label>
                      </td>
                    </tr>
                  <?php echo '/*%%SmartyNocache:185181512057976dea3fb815-07513629%%*/<?php } ?>/*/%%SmartyNocache:185181512057976dea3fb815-07513629%%*/';?>

                </tbody>
              </table>
            </div><!-- end table-responsive -->
          <?php echo '/*%%SmartyNocache:185181512057976dea3fb815-07513629%%*/<?php } else { ?>/*/%%SmartyNocache:185181512057976dea3fb815-07513629%%*/';?>

            <div class="alert alert-info" style="float: none;width: 99%;margin: 5px auto;" role="alert">
              <strong>INFO!</strong>
              Vytvorte pravidlo na úpravu obázkov.
            </div>
          <?php echo '/*%%SmartyNocache:185181512057976dea3fb815-07513629%%*/<?php }?>/*/%%SmartyNocache:185181512057976dea3fb815-07513629%%*/';?>

        </div><!-- end panel-body -->
        <?php echo '/*%%SmartyNocache:185181512057976dea3fb815-07513629%%*/<?php if (isset($_smarty_tpl->tpl_vars[\'resizeRuleList\']->value)&&(is_array($_smarty_tpl->tpl_vars[\'resizeRuleList\']->value)&&(count($_smarty_tpl->tpl_vars[\'resizeRuleList\']->value)>0))) {?>/*/%%SmartyNocache:185181512057976dea3fb815-07513629%%*/';?>

          <div class="panel-footer">
            <button type="submit" class="btn btn-success">
              <i class="fa fa-save"></i>&nbsp;
              <?php echo '/*%%SmartyNocache:185181512057976dea3fb815-07513629%%*/<?php if (!empty($_smarty_tpl->tpl_vars[\'global_form_button_save_changes\']->value)) {?>/*/%%SmartyNocache:185181512057976dea3fb815-07513629%%*/';
echo '/*%%SmartyNocache:185181512057976dea3fb815-07513629%%*/<?php echo mb_strtoupper($_smarty_tpl->tpl_vars[\'global_form_button_save_changes\']->value, \'UTF-8\');?>
/*/%%SmartyNocache:185181512057976dea3fb815-07513629%%*/';
echo '/*%%SmartyNocache:185181512057976dea3fb815-07513629%%*/<?php } else { ?>/*/%%SmartyNocache:185181512057976dea3fb815-07513629%%*/';?>
SAVE CHANGES<?php echo '/*%%SmartyNocache:185181512057976dea3fb815-07513629%%*/<?php }?>/*/%%SmartyNocache:185181512057976dea3fb815-07513629%%*/';?>

            </button>
          </div><!-- end panel-footer -->
        <?php echo '/*%%SmartyNocache:185181512057976dea3fb815-07513629%%*/<?php }?>/*/%%SmartyNocache:185181512057976dea3fb815-07513629%%*/';?>

      </div><!-- end panel -->
    </form>
  </div><!-- end col -->
</div><!-- end col -->
<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12" style="padding: 0;">
  <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
    <form id="pForm" role="form">
      <div class="panel panel-primary panel-toggled">
        <div class="panel-heading ui-draggable-handle">
          <h3 class="panel-title">
            Uplatniť na sekciu 
          </h3>
          <ul class="panel-controls">
            <li><a href="#" onclick="return false;" class="panel-collapse"><span class="fa fa-angle-down"></span></a></li>
          </ul>                
        </div><!-- end panel-header -->
        <div class="panel-body panel-body-form">
          <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
            <div class="form-group">
              <label>
                SEKCIA
                <span style="color:red;">*</span>
              </label>
              <select name="kind" class="form-control select">
                <option value="0">
                  <?php echo '/*%%SmartyNocache:185181512057976dea3fb815-07513629%%*/<?php if (isset($_smarty_tpl->tpl_vars[\'global_form_select_choose\']->value)&&(strlen($_smarty_tpl->tpl_vars[\'global_form_select_choose\']->value)>0)) {?>/*/%%SmartyNocache:185181512057976dea3fb815-07513629%%*/';?>

                    <?php echo '/*%%SmartyNocache:185181512057976dea3fb815-07513629%%*/<?php echo $_smarty_tpl->tpl_vars[\'global_form_select_choose\']->value;?>
/*/%%SmartyNocache:185181512057976dea3fb815-07513629%%*/';?>

                  <?php echo '/*%%SmartyNocache:185181512057976dea3fb815-07513629%%*/<?php } else { ?>/*/%%SmartyNocache:185181512057976dea3fb815-07513629%%*/';?>

                    Choose...
                  <?php echo '/*%%SmartyNocache:185181512057976dea3fb815-07513629%%*/<?php }?>/*/%%SmartyNocache:185181512057976dea3fb815-07513629%%*/';?>

                </option>
                <option value="1">
                  Všetky sekcie
                </option>
                <option value="2">
                  Kategória
                </option>
                <option value="3">
                  Atribúty
                </option>
                <option value="4">
                  Hodnoty atribútov
                </option>
              </select>
            </div><!-- end form-group -->
          </div><!-- end col -->
          <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
            <div class="form-group">
              <label>
                SPÔSOB UPLATNENIA
              </label>
              <select name="type" class="form-control select">
                <option value="0">
                  <?php echo '/*%%SmartyNocache:185181512057976dea3fb815-07513629%%*/<?php if (isset($_smarty_tpl->tpl_vars[\'global_form_select_choose\']->value)&&(strlen($_smarty_tpl->tpl_vars[\'global_form_select_choose\']->value)>0)) {?>/*/%%SmartyNocache:185181512057976dea3fb815-07513629%%*/';?>

                    <?php echo '/*%%SmartyNocache:185181512057976dea3fb815-07513629%%*/<?php echo $_smarty_tpl->tpl_vars[\'global_form_select_choose\']->value;?>
/*/%%SmartyNocache:185181512057976dea3fb815-07513629%%*/';?>

                  <?php echo '/*%%SmartyNocache:185181512057976dea3fb815-07513629%%*/<?php } else { ?>/*/%%SmartyNocache:185181512057976dea3fb815-07513629%%*/';?>

                    Choose...
                  <?php echo '/*%%SmartyNocache:185181512057976dea3fb815-07513629%%*/<?php }?>/*/%%SmartyNocache:185181512057976dea3fb815-07513629%%*/';?>

                </option>
                <option value="1">
                  Zvoliť
                </option>
                <option value="2">
                  Všetko
                </option>
                <option value="3">
                  Všetko s výnimkou
                </option>
              </select>
            </div><!-- end form-group -->
          </div><!-- end col -->
          <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
            <div class="form-group">
              <label>
                UPRESNENIE
              </label>
              <div id="specification">
                <div class="alert alert-info text-center" role="alert" style="margin: 0;padding: 5px 15px;">
                  <i class="fa fa-ban" aria-hidden="true"></i>
                </div>
              </div><!-- end sv -->
            </div><!-- end form-group -->
          </div><!-- end col -->
          <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="margin-top: 15px;">
            <div class="form-group">
              <label>
                PRAVIDLÁ ÚPRAVY OBRÁZKOV
                <span style="color:red;">*</span>
              </label>
              <?php echo '/*%%SmartyNocache:185181512057976dea3fb815-07513629%%*/<?php if (isset($_smarty_tpl->tpl_vars[\'resizeRuleList\']->value)&&(is_array($_smarty_tpl->tpl_vars[\'resizeRuleList\']->value)&&(count($_smarty_tpl->tpl_vars[\'resizeRuleList\']->value)>0))) {?>/*/%%SmartyNocache:185181512057976dea3fb815-07513629%%*/';?>

                <select name="rules[]" class="form-control select" multiple="true">
                  <?php echo '/*%%SmartyNocache:185181512057976dea3fb815-07513629%%*/<?php  $_smarty_tpl->tpl_vars[\'item\'] = new Smarty_Variable; $_smarty_tpl->tpl_vars[\'item\']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars[\'resizeRuleList\']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, \'array\');}
foreach ($_from as $_smarty_tpl->tpl_vars[\'item\']->key => $_smarty_tpl->tpl_vars[\'item\']->value) {
$_smarty_tpl->tpl_vars[\'item\']->_loop = true;
?>/*/%%SmartyNocache:185181512057976dea3fb815-07513629%%*/';?>

                    <option value="<?php echo '/*%%SmartyNocache:185181512057976dea3fb815-07513629%%*/<?php echo $_smarty_tpl->tpl_vars[\'item\']->value->id_rule;?>
/*/%%SmartyNocache:185181512057976dea3fb815-07513629%%*/';?>
">
                      [ <?php echo '/*%%SmartyNocache:185181512057976dea3fb815-07513629%%*/<?php echo $_smarty_tpl->tpl_vars[\'item\']->value->id_rule;?>
/*/%%SmartyNocache:185181512057976dea3fb815-07513629%%*/';?>
 ]
                      |
                      <?php echo '/*%%SmartyNocache:185181512057976dea3fb815-07513629%%*/<?php if ($_smarty_tpl->tpl_vars[\'item\']->value->device==1) {?>/*/%%SmartyNocache:185181512057976dea3fb815-07513629%%*/';?>

                        VŠETKY ZARIADENIA
                      <?php echo '/*%%SmartyNocache:185181512057976dea3fb815-07513629%%*/<?php }?>/*/%%SmartyNocache:185181512057976dea3fb815-07513629%%*/';?>

                      <?php echo '/*%%SmartyNocache:185181512057976dea3fb815-07513629%%*/<?php if ($_smarty_tpl->tpl_vars[\'item\']->value->device==2) {?>/*/%%SmartyNocache:185181512057976dea3fb815-07513629%%*/';?>

                        PC
                      <?php echo '/*%%SmartyNocache:185181512057976dea3fb815-07513629%%*/<?php }?>/*/%%SmartyNocache:185181512057976dea3fb815-07513629%%*/';?>

                      <?php echo '/*%%SmartyNocache:185181512057976dea3fb815-07513629%%*/<?php if ($_smarty_tpl->tpl_vars[\'item\']->value->device==3) {?>/*/%%SmartyNocache:185181512057976dea3fb815-07513629%%*/';?>

                        PC A TABLET
                      <?php echo '/*%%SmartyNocache:185181512057976dea3fb815-07513629%%*/<?php }?>/*/%%SmartyNocache:185181512057976dea3fb815-07513629%%*/';?>

                      <?php echo '/*%%SmartyNocache:185181512057976dea3fb815-07513629%%*/<?php if ($_smarty_tpl->tpl_vars[\'item\']->value->device==4) {?>/*/%%SmartyNocache:185181512057976dea3fb815-07513629%%*/';?>

                        TABLET
                      <?php echo '/*%%SmartyNocache:185181512057976dea3fb815-07513629%%*/<?php }?>/*/%%SmartyNocache:185181512057976dea3fb815-07513629%%*/';?>

                      <?php echo '/*%%SmartyNocache:185181512057976dea3fb815-07513629%%*/<?php if ($_smarty_tpl->tpl_vars[\'item\']->value->device==5) {?>/*/%%SmartyNocache:185181512057976dea3fb815-07513629%%*/';?>

                        MOBIL
                      <?php echo '/*%%SmartyNocache:185181512057976dea3fb815-07513629%%*/<?php }?>/*/%%SmartyNocache:185181512057976dea3fb815-07513629%%*/';?>

                      |
                      <?php echo '/*%%SmartyNocache:185181512057976dea3fb815-07513629%%*/<?php if ($_smarty_tpl->tpl_vars[\'item\']->value->viewport==0) {?>/*/%%SmartyNocache:185181512057976dea3fb815-07513629%%*/';?>

                        -
                      <?php echo '/*%%SmartyNocache:185181512057976dea3fb815-07513629%%*/<?php }?>/*/%%SmartyNocache:185181512057976dea3fb815-07513629%%*/';?>

                      <?php echo '/*%%SmartyNocache:185181512057976dea3fb815-07513629%%*/<?php if ($_smarty_tpl->tpl_vars[\'item\']->value->viewport==1) {?>/*/%%SmartyNocache:185181512057976dea3fb815-07513629%%*/';?>

                        min-width
                      <?php echo '/*%%SmartyNocache:185181512057976dea3fb815-07513629%%*/<?php }?>/*/%%SmartyNocache:185181512057976dea3fb815-07513629%%*/';?>

                      <?php echo '/*%%SmartyNocache:185181512057976dea3fb815-07513629%%*/<?php if ($_smarty_tpl->tpl_vars[\'item\']->value->viewport==2) {?>/*/%%SmartyNocache:185181512057976dea3fb815-07513629%%*/';?>

                        max-width
                      <?php echo '/*%%SmartyNocache:185181512057976dea3fb815-07513629%%*/<?php }?>/*/%%SmartyNocache:185181512057976dea3fb815-07513629%%*/';?>

                      <?php echo '/*%%SmartyNocache:185181512057976dea3fb815-07513629%%*/<?php if ($_smarty_tpl->tpl_vars[\'item\']->value->viewport==3) {?>/*/%%SmartyNocache:185181512057976dea3fb815-07513629%%*/';?>

                        min-height
                      <?php echo '/*%%SmartyNocache:185181512057976dea3fb815-07513629%%*/<?php }?>/*/%%SmartyNocache:185181512057976dea3fb815-07513629%%*/';?>

                      <?php echo '/*%%SmartyNocache:185181512057976dea3fb815-07513629%%*/<?php if ($_smarty_tpl->tpl_vars[\'item\']->value->viewport==4) {?>/*/%%SmartyNocache:185181512057976dea3fb815-07513629%%*/';?>

                        max-height
                      <?php echo '/*%%SmartyNocache:185181512057976dea3fb815-07513629%%*/<?php }?>/*/%%SmartyNocache:185181512057976dea3fb815-07513629%%*/';?>

                      <?php echo '/*%%SmartyNocache:185181512057976dea3fb815-07513629%%*/<?php if ($_smarty_tpl->tpl_vars[\'item\']->value->viewport==5) {?>/*/%%SmartyNocache:185181512057976dea3fb815-07513629%%*/';?>

                        min-width / max-width
                      <?php echo '/*%%SmartyNocache:185181512057976dea3fb815-07513629%%*/<?php }?>/*/%%SmartyNocache:185181512057976dea3fb815-07513629%%*/';?>

                      <?php echo '/*%%SmartyNocache:185181512057976dea3fb815-07513629%%*/<?php if ($_smarty_tpl->tpl_vars[\'item\']->value->viewport==6) {?>/*/%%SmartyNocache:185181512057976dea3fb815-07513629%%*/';?>

                        min-height / max-height
                      <?php echo '/*%%SmartyNocache:185181512057976dea3fb815-07513629%%*/<?php }?>/*/%%SmartyNocache:185181512057976dea3fb815-07513629%%*/';?>

                      |
                      <?php echo '/*%%SmartyNocache:185181512057976dea3fb815-07513629%%*/<?php echo $_smarty_tpl->tpl_vars[\'item\']->value->min_size;?>
/*/%%SmartyNocache:185181512057976dea3fb815-07513629%%*/';?>

                      |
                      <?php echo '/*%%SmartyNocache:185181512057976dea3fb815-07513629%%*/<?php echo $_smarty_tpl->tpl_vars[\'item\']->value->max_size;?>
/*/%%SmartyNocache:185181512057976dea3fb815-07513629%%*/';?>

                      |
                      <?php echo '/*%%SmartyNocache:185181512057976dea3fb815-07513629%%*/<?php if ($_smarty_tpl->tpl_vars[\'item\']->value->resize==1) {?>/*/%%SmartyNocache:185181512057976dea3fb815-07513629%%*/';?>

                        AUTO
                      <?php echo '/*%%SmartyNocache:185181512057976dea3fb815-07513629%%*/<?php }?>/*/%%SmartyNocache:185181512057976dea3fb815-07513629%%*/';?>

                      <?php echo '/*%%SmartyNocache:185181512057976dea3fb815-07513629%%*/<?php if ($_smarty_tpl->tpl_vars[\'item\']->value->resize==2) {?>/*/%%SmartyNocache:185181512057976dea3fb815-07513629%%*/';?>

                        CROP
                      <?php echo '/*%%SmartyNocache:185181512057976dea3fb815-07513629%%*/<?php }?>/*/%%SmartyNocache:185181512057976dea3fb815-07513629%%*/';?>

                      <?php echo '/*%%SmartyNocache:185181512057976dea3fb815-07513629%%*/<?php if ($_smarty_tpl->tpl_vars[\'item\']->value->resize==3) {?>/*/%%SmartyNocache:185181512057976dea3fb815-07513629%%*/';?>

                        EXACT
                      <?php echo '/*%%SmartyNocache:185181512057976dea3fb815-07513629%%*/<?php }?>/*/%%SmartyNocache:185181512057976dea3fb815-07513629%%*/';?>

                      <?php echo '/*%%SmartyNocache:185181512057976dea3fb815-07513629%%*/<?php if ($_smarty_tpl->tpl_vars[\'item\']->value->resize==4) {?>/*/%%SmartyNocache:185181512057976dea3fb815-07513629%%*/';?>

                        LANDSCAPE
                      <?php echo '/*%%SmartyNocache:185181512057976dea3fb815-07513629%%*/<?php }?>/*/%%SmartyNocache:185181512057976dea3fb815-07513629%%*/';?>

                      <?php echo '/*%%SmartyNocache:185181512057976dea3fb815-07513629%%*/<?php if ($_smarty_tpl->tpl_vars[\'item\']->value->resize==5) {?>/*/%%SmartyNocache:185181512057976dea3fb815-07513629%%*/';?>

                        PORTRAIT
                      <?php echo '/*%%SmartyNocache:185181512057976dea3fb815-07513629%%*/<?php }?>/*/%%SmartyNocache:185181512057976dea3fb815-07513629%%*/';?>

                      |
                      <?php echo '/*%%SmartyNocache:185181512057976dea3fb815-07513629%%*/<?php echo $_smarty_tpl->tpl_vars[\'item\']->value->width;?>
/*/%%SmartyNocache:185181512057976dea3fb815-07513629%%*/';?>

                      |
                      <?php echo '/*%%SmartyNocache:185181512057976dea3fb815-07513629%%*/<?php echo $_smarty_tpl->tpl_vars[\'item\']->value->height;?>
/*/%%SmartyNocache:185181512057976dea3fb815-07513629%%*/';?>

                    </option>
                  <?php echo '/*%%SmartyNocache:185181512057976dea3fb815-07513629%%*/<?php } ?>/*/%%SmartyNocache:185181512057976dea3fb815-07513629%%*/';?>

                </select>
              <?php echo '/*%%SmartyNocache:185181512057976dea3fb815-07513629%%*/<?php } else { ?>/*/%%SmartyNocache:185181512057976dea3fb815-07513629%%*/';?>

                <div class="alert alert-danger text-center" role="alert" style="margin: 0;padding: 5px 15px;">
                  <i class="fa fa-exclamation-circle" aria-hidden="true"></i>
                </div>
              <?php echo '/*%%SmartyNocache:185181512057976dea3fb815-07513629%%*/<?php }?>/*/%%SmartyNocache:185181512057976dea3fb815-07513629%%*/';?>

            </div><!-- end form-group -->
          </div><!-- end col -->
        </div><!-- end panel-body -->
        <div class="panel-footer">
          <button type="submit" class="btn btn-success">
            <i class="fa fa-save"></i>&nbsp;
            <?php echo '/*%%SmartyNocache:185181512057976dea3fb815-07513629%%*/<?php if (!empty($_smarty_tpl->tpl_vars[\'global_form_button_create\']->value)) {?>/*/%%SmartyNocache:185181512057976dea3fb815-07513629%%*/';
echo '/*%%SmartyNocache:185181512057976dea3fb815-07513629%%*/<?php echo mb_strtoupper($_smarty_tpl->tpl_vars[\'global_form_button_create\']->value, \'UTF-8\');?>
/*/%%SmartyNocache:185181512057976dea3fb815-07513629%%*/';
echo '/*%%SmartyNocache:185181512057976dea3fb815-07513629%%*/<?php } else { ?>/*/%%SmartyNocache:185181512057976dea3fb815-07513629%%*/';?>
CREATE<?php echo '/*%%SmartyNocache:185181512057976dea3fb815-07513629%%*/<?php }?>/*/%%SmartyNocache:185181512057976dea3fb815-07513629%%*/';?>

          </button>
        </div><!-- end panel-footer -->
      </div><!-- end panel -->
    </form>
  </div><!-- end col -->
  <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
    <form action="cpanel/delete-thumbnails" method="post" role="form">
      <div class="panel panel-info">
        <div class="panel-heading ui-draggable-handle">
          <h3 class="panel-title">
            Zoznam sekcií
          </h3>
          <ul class="panel-controls">
            <li><a href="api/generate-thumbnail" target="_blank"><i class="fa fa-bolt" aria-hidden="true"></i></a></li>
            <li><a href="#" onclick="return false;" class="panel-collapse"><span class="fa fa-angle-down"></span></a></li>
          </ul>                
        </div><!-- end panel-header -->
        <div class="panel-body panel-body-table">
          <?php echo '/*%%SmartyNocache:185181512057976dea3fb815-07513629%%*/<?php if (isset($_smarty_tpl->tpl_vars[\'thumbSectionList\']->value)&&(is_array($_smarty_tpl->tpl_vars[\'thumbSectionList\']->value)&&(count($_smarty_tpl->tpl_vars[\'thumbSectionList\']->value)>0))) {?>/*/%%SmartyNocache:185181512057976dea3fb815-07513629%%*/';?>

            <div class="table-responsive thumb-section-list" style="border-top:1px solid #E5E5E5;">
              <table id="thumbSectionList" class="table table-bordered table-striped table-actions">
                <thead>
                  <tr>
                    <th class="text-center">
                      ID
                    </th>
                    <th class="text-center">
                      SEKCIA
                    </th>
                    <th class="text-center">
                      SPÔSOB UPLATNENIA
                    </th>
                    <th class="text-center">
                      UPRESNENIE
                    </th>
                    <th class="text-center">
                      PRAVIDLÁ ÚPRAVY OBRÁZKOV [ IDs ]
                    </th>
                    <th class="text-center">
                      STATUS
                    </th>
                    <th class="text-center">
                      <?php echo '/*%%SmartyNocache:185181512057976dea3fb815-07513629%%*/<?php if (!empty($_smarty_tpl->tpl_vars[\'global_table_header_remove\']->value)) {?>/*/%%SmartyNocache:185181512057976dea3fb815-07513629%%*/';
echo '/*%%SmartyNocache:185181512057976dea3fb815-07513629%%*/<?php echo mb_strtoupper($_smarty_tpl->tpl_vars[\'global_table_header_remove\']->value, \'UTF-8\');?>
/*/%%SmartyNocache:185181512057976dea3fb815-07513629%%*/';
echo '/*%%SmartyNocache:185181512057976dea3fb815-07513629%%*/<?php } else { ?>/*/%%SmartyNocache:185181512057976dea3fb815-07513629%%*/';?>
REMOVE<?php echo '/*%%SmartyNocache:185181512057976dea3fb815-07513629%%*/<?php }?>/*/%%SmartyNocache:185181512057976dea3fb815-07513629%%*/';?>

                    </th>
                  </tr>
                </thead>
                <tbody>
                  <?php echo '/*%%SmartyNocache:185181512057976dea3fb815-07513629%%*/<?php  $_smarty_tpl->tpl_vars[\'item\'] = new Smarty_Variable; $_smarty_tpl->tpl_vars[\'item\']->_loop = false;
 $_smarty_tpl->tpl_vars[\'i\'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars[\'thumbSectionList\']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, \'array\');}
foreach ($_from as $_smarty_tpl->tpl_vars[\'item\']->key => $_smarty_tpl->tpl_vars[\'item\']->value) {
$_smarty_tpl->tpl_vars[\'item\']->_loop = true;
 $_smarty_tpl->tpl_vars[\'i\']->value = $_smarty_tpl->tpl_vars[\'item\']->key;
?>/*/%%SmartyNocache:185181512057976dea3fb815-07513629%%*/';?>

                    <tr>
                      <td class="text-center">
                        <input type="hidden" name="thumbList[<?php echo '/*%%SmartyNocache:185181512057976dea3fb815-07513629%%*/<?php echo $_smarty_tpl->tpl_vars[\'i\']->value;?>
/*/%%SmartyNocache:185181512057976dea3fb815-07513629%%*/';?>
]['id']" value="<?php echo '/*%%SmartyNocache:185181512057976dea3fb815-07513629%%*/<?php echo $_smarty_tpl->tpl_vars[\'item\']->value->id_thumb_section;?>
/*/%%SmartyNocache:185181512057976dea3fb815-07513629%%*/';?>
" />
                        <strong><?php echo '/*%%SmartyNocache:185181512057976dea3fb815-07513629%%*/<?php echo $_smarty_tpl->tpl_vars[\'item\']->value->id_thumb_section;?>
/*/%%SmartyNocache:185181512057976dea3fb815-07513629%%*/';?>
</strong>
                      </td>
                      <td class="text-left">
                        <?php echo '/*%%SmartyNocache:185181512057976dea3fb815-07513629%%*/<?php if ($_smarty_tpl->tpl_vars[\'item\']->value->kind==1) {?>/*/%%SmartyNocache:185181512057976dea3fb815-07513629%%*/';?>

                          Všetky sekcie
                        <?php echo '/*%%SmartyNocache:185181512057976dea3fb815-07513629%%*/<?php }?>/*/%%SmartyNocache:185181512057976dea3fb815-07513629%%*/';?>

                        <?php echo '/*%%SmartyNocache:185181512057976dea3fb815-07513629%%*/<?php if ($_smarty_tpl->tpl_vars[\'item\']->value->kind==2) {?>/*/%%SmartyNocache:185181512057976dea3fb815-07513629%%*/';?>

                          Kategória
                        <?php echo '/*%%SmartyNocache:185181512057976dea3fb815-07513629%%*/<?php }?>/*/%%SmartyNocache:185181512057976dea3fb815-07513629%%*/';?>

                        <?php echo '/*%%SmartyNocache:185181512057976dea3fb815-07513629%%*/<?php if ($_smarty_tpl->tpl_vars[\'item\']->value->kind==3) {?>/*/%%SmartyNocache:185181512057976dea3fb815-07513629%%*/';?>

                          Atribúty
                        <?php echo '/*%%SmartyNocache:185181512057976dea3fb815-07513629%%*/<?php }?>/*/%%SmartyNocache:185181512057976dea3fb815-07513629%%*/';?>

                        <?php echo '/*%%SmartyNocache:185181512057976dea3fb815-07513629%%*/<?php if ($_smarty_tpl->tpl_vars[\'item\']->value->kind==4) {?>/*/%%SmartyNocache:185181512057976dea3fb815-07513629%%*/';?>

                          Hodnoty atribútov
                        <?php echo '/*%%SmartyNocache:185181512057976dea3fb815-07513629%%*/<?php }?>/*/%%SmartyNocache:185181512057976dea3fb815-07513629%%*/';?>

                      </td>
                      <td class="text-center">
                        <?php echo '/*%%SmartyNocache:185181512057976dea3fb815-07513629%%*/<?php if ($_smarty_tpl->tpl_vars[\'item\']->value->type==1) {?>/*/%%SmartyNocache:185181512057976dea3fb815-07513629%%*/';?>

                          Zvoliť
                        <?php echo '/*%%SmartyNocache:185181512057976dea3fb815-07513629%%*/<?php }?>/*/%%SmartyNocache:185181512057976dea3fb815-07513629%%*/';?>

                        <?php echo '/*%%SmartyNocache:185181512057976dea3fb815-07513629%%*/<?php if (($_smarty_tpl->tpl_vars[\'item\']->value->type==0)||($_smarty_tpl->tpl_vars[\'item\']->value->type==2)) {?>/*/%%SmartyNocache:185181512057976dea3fb815-07513629%%*/';?>

                          Všetko
                        <?php echo '/*%%SmartyNocache:185181512057976dea3fb815-07513629%%*/<?php }?>/*/%%SmartyNocache:185181512057976dea3fb815-07513629%%*/';?>

                        <?php echo '/*%%SmartyNocache:185181512057976dea3fb815-07513629%%*/<?php if ($_smarty_tpl->tpl_vars[\'item\']->value->type==3) {?>/*/%%SmartyNocache:185181512057976dea3fb815-07513629%%*/';?>

                          Všetko s výnimkou
                        <?php echo '/*%%SmartyNocache:185181512057976dea3fb815-07513629%%*/<?php }?>/*/%%SmartyNocache:185181512057976dea3fb815-07513629%%*/';?>

                      </td>
                      <td class="<?php echo '/*%%SmartyNocache:185181512057976dea3fb815-07513629%%*/<?php if ($_smarty_tpl->tpl_vars[\'item\']->value->kind==1) {?>/*/%%SmartyNocache:185181512057976dea3fb815-07513629%%*/';?>
text-center<?php echo '/*%%SmartyNocache:185181512057976dea3fb815-07513629%%*/<?php } else { ?>/*/%%SmartyNocache:185181512057976dea3fb815-07513629%%*/';?>
text-left<?php echo '/*%%SmartyNocache:185181512057976dea3fb815-07513629%%*/<?php }?>/*/%%SmartyNocache:185181512057976dea3fb815-07513629%%*/';?>
">
                        <?php echo '/*%%SmartyNocache:185181512057976dea3fb815-07513629%%*/<?php if ($_smarty_tpl->tpl_vars[\'item\']->value->kind==1) {?>/*/%%SmartyNocache:185181512057976dea3fb815-07513629%%*/';?>

                          <span style="font-size: 1.3em;color: #3fbae4;">
                            <i class="fa fa-ban" aria-hidden="true"></i>
                          </span>
                        <?php echo '/*%%SmartyNocache:185181512057976dea3fb815-07513629%%*/<?php }?>/*/%%SmartyNocache:185181512057976dea3fb815-07513629%%*/';?>

                        <?php echo '/*%%SmartyNocache:185181512057976dea3fb815-07513629%%*/<?php if ($_smarty_tpl->tpl_vars[\'item\']->value->kind==2) {?>/*/%%SmartyNocache:185181512057976dea3fb815-07513629%%*/';?>

                          <?php echo '/*%%SmartyNocache:185181512057976dea3fb815-07513629%%*/<?php if (is_array($_smarty_tpl->tpl_vars[\'item\']->value->entity_list)&&(count($_smarty_tpl->tpl_vars[\'item\']->value->entity_list)>0)) {?>/*/%%SmartyNocache:185181512057976dea3fb815-07513629%%*/';?>

                            <?php echo '/*%%SmartyNocache:185181512057976dea3fb815-07513629%%*/<?php  $_smarty_tpl->tpl_vars[\'entity_a\'] = new Smarty_Variable; $_smarty_tpl->tpl_vars[\'entity_a\']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars[\'item\']->value->entity_list; if (!is_array($_from) && !is_object($_from)) { settype($_from, \'array\');}
foreach ($_from as $_smarty_tpl->tpl_vars[\'entity_a\']->key => $_smarty_tpl->tpl_vars[\'entity_a\']->value) {
$_smarty_tpl->tpl_vars[\'entity_a\']->_loop = true;
?>/*/%%SmartyNocache:185181512057976dea3fb815-07513629%%*/';?>

                              <span class="label label-info">
                                <?php echo '/*%%SmartyNocache:185181512057976dea3fb815-07513629%%*/<?php echo $_smarty_tpl->tpl_vars[\'entity_a\']->value->category_name;?>
/*/%%SmartyNocache:185181512057976dea3fb815-07513629%%*/';?>

                              </span>
                            <?php echo '/*%%SmartyNocache:185181512057976dea3fb815-07513629%%*/<?php } ?>/*/%%SmartyNocache:185181512057976dea3fb815-07513629%%*/';?>

                          <?php echo '/*%%SmartyNocache:185181512057976dea3fb815-07513629%%*/<?php }?>/*/%%SmartyNocache:185181512057976dea3fb815-07513629%%*/';?>

                        <?php echo '/*%%SmartyNocache:185181512057976dea3fb815-07513629%%*/<?php }?>/*/%%SmartyNocache:185181512057976dea3fb815-07513629%%*/';?>

                        <?php echo '/*%%SmartyNocache:185181512057976dea3fb815-07513629%%*/<?php if ($_smarty_tpl->tpl_vars[\'item\']->value->kind==3) {?>/*/%%SmartyNocache:185181512057976dea3fb815-07513629%%*/';?>

                          <?php echo '/*%%SmartyNocache:185181512057976dea3fb815-07513629%%*/<?php if (is_array($_smarty_tpl->tpl_vars[\'item\']->value->entity_list)&&(count($_smarty_tpl->tpl_vars[\'item\']->value->entity_list)>0)) {?>/*/%%SmartyNocache:185181512057976dea3fb815-07513629%%*/';?>

                            <?php echo '/*%%SmartyNocache:185181512057976dea3fb815-07513629%%*/<?php  $_smarty_tpl->tpl_vars[\'entity_b\'] = new Smarty_Variable; $_smarty_tpl->tpl_vars[\'entity_b\']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars[\'item\']->value->entity_list; if (!is_array($_from) && !is_object($_from)) { settype($_from, \'array\');}
foreach ($_from as $_smarty_tpl->tpl_vars[\'entity_b\']->key => $_smarty_tpl->tpl_vars[\'entity_b\']->value) {
$_smarty_tpl->tpl_vars[\'entity_b\']->_loop = true;
?>/*/%%SmartyNocache:185181512057976dea3fb815-07513629%%*/';?>

                              <span class="label label-info">
                                <?php echo '/*%%SmartyNocache:185181512057976dea3fb815-07513629%%*/<?php echo $_smarty_tpl->tpl_vars[\'entity_b\']->value->attribute_name_public;?>
/*/%%SmartyNocache:185181512057976dea3fb815-07513629%%*/';?>

                              </span>
                            <?php echo '/*%%SmartyNocache:185181512057976dea3fb815-07513629%%*/<?php } ?>/*/%%SmartyNocache:185181512057976dea3fb815-07513629%%*/';?>

                          <?php echo '/*%%SmartyNocache:185181512057976dea3fb815-07513629%%*/<?php }?>/*/%%SmartyNocache:185181512057976dea3fb815-07513629%%*/';?>

                        <?php echo '/*%%SmartyNocache:185181512057976dea3fb815-07513629%%*/<?php }?>/*/%%SmartyNocache:185181512057976dea3fb815-07513629%%*/';?>

                        <?php echo '/*%%SmartyNocache:185181512057976dea3fb815-07513629%%*/<?php if ($_smarty_tpl->tpl_vars[\'item\']->value->kind==4) {?>/*/%%SmartyNocache:185181512057976dea3fb815-07513629%%*/';?>

                          <?php echo '/*%%SmartyNocache:185181512057976dea3fb815-07513629%%*/<?php if (is_array($_smarty_tpl->tpl_vars[\'item\']->value->entity_list)&&(count($_smarty_tpl->tpl_vars[\'item\']->value->entity_list)>0)) {?>/*/%%SmartyNocache:185181512057976dea3fb815-07513629%%*/';?>

                            <?php echo '/*%%SmartyNocache:185181512057976dea3fb815-07513629%%*/<?php  $_smarty_tpl->tpl_vars[\'entity_c\'] = new Smarty_Variable; $_smarty_tpl->tpl_vars[\'entity_c\']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars[\'item\']->value->entity_list; if (!is_array($_from) && !is_object($_from)) { settype($_from, \'array\');}
foreach ($_from as $_smarty_tpl->tpl_vars[\'entity_c\']->key => $_smarty_tpl->tpl_vars[\'entity_c\']->value) {
$_smarty_tpl->tpl_vars[\'entity_c\']->_loop = true;
?>/*/%%SmartyNocache:185181512057976dea3fb815-07513629%%*/';?>

                              <span class="label label-info">
                                <?php echo '/*%%SmartyNocache:185181512057976dea3fb815-07513629%%*/<?php echo $_smarty_tpl->tpl_vars[\'entity_c\']->value->value;?>
/*/%%SmartyNocache:185181512057976dea3fb815-07513629%%*/';?>

                              </span>
                            <?php echo '/*%%SmartyNocache:185181512057976dea3fb815-07513629%%*/<?php } ?>/*/%%SmartyNocache:185181512057976dea3fb815-07513629%%*/';?>

                          <?php echo '/*%%SmartyNocache:185181512057976dea3fb815-07513629%%*/<?php }?>/*/%%SmartyNocache:185181512057976dea3fb815-07513629%%*/';?>

                        <?php echo '/*%%SmartyNocache:185181512057976dea3fb815-07513629%%*/<?php }?>/*/%%SmartyNocache:185181512057976dea3fb815-07513629%%*/';?>

                      </td>
                      <td class="text-left">
                        <?php echo '/*%%SmartyNocache:185181512057976dea3fb815-07513629%%*/<?php if (is_array($_smarty_tpl->tpl_vars[\'item\']->value->resize_rules)&&(count($_smarty_tpl->tpl_vars[\'item\']->value->resize_rules)>0)) {?>/*/%%SmartyNocache:185181512057976dea3fb815-07513629%%*/';?>

                          <?php echo '/*%%SmartyNocache:185181512057976dea3fb815-07513629%%*/<?php  $_smarty_tpl->tpl_vars[\'resize_rule\'] = new Smarty_Variable; $_smarty_tpl->tpl_vars[\'resize_rule\']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars[\'item\']->value->resize_rules; if (!is_array($_from) && !is_object($_from)) { settype($_from, \'array\');}
foreach ($_from as $_smarty_tpl->tpl_vars[\'resize_rule\']->key => $_smarty_tpl->tpl_vars[\'resize_rule\']->value) {
$_smarty_tpl->tpl_vars[\'resize_rule\']->_loop = true;
?>/*/%%SmartyNocache:185181512057976dea3fb815-07513629%%*/';?>

                            <span class="label label-info">
                              <?php echo '/*%%SmartyNocache:185181512057976dea3fb815-07513629%%*/<?php echo $_smarty_tpl->tpl_vars[\'resize_rule\']->value->id_rule;?>
/*/%%SmartyNocache:185181512057976dea3fb815-07513629%%*/';?>

                            </span>
                          <?php echo '/*%%SmartyNocache:185181512057976dea3fb815-07513629%%*/<?php } ?>/*/%%SmartyNocache:185181512057976dea3fb815-07513629%%*/';?>

                        <?php echo '/*%%SmartyNocache:185181512057976dea3fb815-07513629%%*/<?php }?>/*/%%SmartyNocache:185181512057976dea3fb815-07513629%%*/';?>

                      </td>
                      <td class="text-center">
                        <?php echo '/*%%SmartyNocache:185181512057976dea3fb815-07513629%%*/<?php if ($_smarty_tpl->tpl_vars[\'item\']->value->cron==0) {?>/*/%%SmartyNocache:185181512057976dea3fb815-07513629%%*/';?>

                          <span style="font-size: 1.3em;color: #95b75d;">
                            <i class="fa fa-check-circle-o" aria-hidden="true"></i>
                          </span>
                        <?php echo '/*%%SmartyNocache:185181512057976dea3fb815-07513629%%*/<?php } else { ?>/*/%%SmartyNocache:185181512057976dea3fb815-07513629%%*/';?>

                          <span style="font-size: 1.3em;color: #fea223;">
                            <i class="fa fa-history" aria-hidden="true"></i>
                          </span>
                        <?php echo '/*%%SmartyNocache:185181512057976dea3fb815-07513629%%*/<?php }?>/*/%%SmartyNocache:185181512057976dea3fb815-07513629%%*/';?>

                      </td>
                      <td class="text-center">
                        <label class="switch">
                          <input type="checkbox" name="thumbList[<?php echo '/*%%SmartyNocache:185181512057976dea3fb815-07513629%%*/<?php echo $_smarty_tpl->tpl_vars[\'i\']->value;?>
/*/%%SmartyNocache:185181512057976dea3fb815-07513629%%*/';?>
]['delete']" value="1">
                          <span></span>
                        </label>
                      </td>
                    </tr>
                  <?php echo '/*%%SmartyNocache:185181512057976dea3fb815-07513629%%*/<?php } ?>/*/%%SmartyNocache:185181512057976dea3fb815-07513629%%*/';?>

                </tbody>
              </table>
            </div><!-- end table-responsive -->
          <?php echo '/*%%SmartyNocache:185181512057976dea3fb815-07513629%%*/<?php } else { ?>/*/%%SmartyNocache:185181512057976dea3fb815-07513629%%*/';?>

            <div class="alert alert-info" style="float: none;width: 99%;margin: 5px auto;" role="alert">
              <strong>INFO!</strong>
              Definujte sekciu pre ktorú sa má uplatniť pravidlo na úpravu obrázkov.
            </div>
          <?php echo '/*%%SmartyNocache:185181512057976dea3fb815-07513629%%*/<?php }?>/*/%%SmartyNocache:185181512057976dea3fb815-07513629%%*/';?>

        </div><!-- end panel-body -->
        <?php echo '/*%%SmartyNocache:185181512057976dea3fb815-07513629%%*/<?php if (isset($_smarty_tpl->tpl_vars[\'thumbSectionList\']->value)&&(is_array($_smarty_tpl->tpl_vars[\'thumbSectionList\']->value)&&(count($_smarty_tpl->tpl_vars[\'thumbSectionList\']->value)>0))) {?>/*/%%SmartyNocache:185181512057976dea3fb815-07513629%%*/';?>

          <div class="panel-footer">
            <button type="submit" class="btn btn-success">
              <i class="fa fa-save"></i>&nbsp;
              <?php echo '/*%%SmartyNocache:185181512057976dea3fb815-07513629%%*/<?php if (!empty($_smarty_tpl->tpl_vars[\'global_form_button_save_changes\']->value)) {?>/*/%%SmartyNocache:185181512057976dea3fb815-07513629%%*/';
echo '/*%%SmartyNocache:185181512057976dea3fb815-07513629%%*/<?php echo mb_strtoupper($_smarty_tpl->tpl_vars[\'global_form_button_save_changes\']->value, \'UTF-8\');?>
/*/%%SmartyNocache:185181512057976dea3fb815-07513629%%*/';
echo '/*%%SmartyNocache:185181512057976dea3fb815-07513629%%*/<?php } else { ?>/*/%%SmartyNocache:185181512057976dea3fb815-07513629%%*/';?>
SAVE CHANGES<?php echo '/*%%SmartyNocache:185181512057976dea3fb815-07513629%%*/<?php }?>/*/%%SmartyNocache:185181512057976dea3fb815-07513629%%*/';?>

            </button>
          </div><!-- end panel-footer -->
        <?php echo '/*%%SmartyNocache:185181512057976dea3fb815-07513629%%*/<?php }?>/*/%%SmartyNocache:185181512057976dea3fb815-07513629%%*/';?>

      </div><!-- end panel -->
    </form>
  </div><!-- end col -->
</div><!-- end col -->
<?php }} ?>
