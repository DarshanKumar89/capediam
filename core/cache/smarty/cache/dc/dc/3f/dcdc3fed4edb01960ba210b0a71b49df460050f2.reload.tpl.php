<?php /*%%SmartyHeaderCode:5204599125808f30aa558a4-63513747%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'dcdc3fed4edb01960ba210b0a71b49df460050f2' => 
    array (
      0 => '/var/www/public/carpedmfashion.com/core/config/../../app/themes/cpanel/store/thumbnail/ajax/reload.tpl',
      1 => 1469707249,
      2 => 'extends',
    ),
  ),
  'nocache_hash' => '5204599125808f30aa558a4-63513747',
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
  'unifunc' => 'content_5808f30ace5857_15038252',
  'cache_lifetime' => 120,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5808f30ace5857_15038252')) {function content_5808f30ace5857_15038252($_smarty_tpl) {?><div class="col-lg-6 col-md-6 col-sm-12 col-xs-12" style="padding: 0;">
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
                  <?php if (isset($_smarty_tpl->tpl_vars['global_form_select_choose']->value)&&(strlen($_smarty_tpl->tpl_vars['global_form_select_choose']->value)>0)) {?>
                    <?php echo $_smarty_tpl->tpl_vars['global_form_select_choose']->value;?>

                  <?php } else { ?>
                    Choose...
                  <?php }?>
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
                  <?php if (isset($_smarty_tpl->tpl_vars['global_form_select_choose']->value)&&(strlen($_smarty_tpl->tpl_vars['global_form_select_choose']->value)>0)) {?>
                    <?php echo $_smarty_tpl->tpl_vars['global_form_select_choose']->value;?>

                  <?php } else { ?>
                    Choose...
                  <?php }?>
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
                  <?php if (isset($_smarty_tpl->tpl_vars['global_form_select_choose']->value)&&(strlen($_smarty_tpl->tpl_vars['global_form_select_choose']->value)>0)) {?>
                    <?php echo $_smarty_tpl->tpl_vars['global_form_select_choose']->value;?>

                  <?php } else { ?>
                    Choose...
                  <?php }?>
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
            <?php if (!empty($_smarty_tpl->tpl_vars['global_form_button_create']->value)) {?><?php echo mb_strtoupper($_smarty_tpl->tpl_vars['global_form_button_create']->value, 'UTF-8');?>
<?php } else { ?>CREATE<?php }?>
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
          <?php if (isset($_smarty_tpl->tpl_vars['resizeRuleList']->value)&&(is_array($_smarty_tpl->tpl_vars['resizeRuleList']->value)&&(count($_smarty_tpl->tpl_vars['resizeRuleList']->value)>0))) {?>
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
                      <?php if (!empty($_smarty_tpl->tpl_vars['global_table_header_remove']->value)) {?><?php echo mb_strtoupper($_smarty_tpl->tpl_vars['global_table_header_remove']->value, 'UTF-8');?>
<?php } else { ?>REMOVE<?php }?>
                    </th>
                  </tr>
                </thead>
                <tbody>
                  <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['resizeRuleList']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
 $_smarty_tpl->tpl_vars['i']->value = $_smarty_tpl->tpl_vars['item']->key;
?>
                    <tr>
                      <td class="td-device text-center">
                        <input type="hidden" name="resizeRuleList[<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
]['id']" value="<?php echo $_smarty_tpl->tpl_vars['item']->value->id_rule;?>
" />
                        <strong><?php echo $_smarty_tpl->tpl_vars['item']->value->id_rule;?>
</strong>
                        <?php if ($_smarty_tpl->tpl_vars['item']->value->device==1) {?>
                          <div class="device all">
                            <i class="fa fa-circle" aria-hidden="true"></i>
                          </div><!-- end divece -->
                        <?php }?>
                        <?php if ($_smarty_tpl->tpl_vars['item']->value->device==2) {?>
                          <div class="device desktop">
                            <i class="fa fa-desktop" aria-hidden="true"></i>
                          </div><!-- end divece -->
                        <?php }?>
                        <?php if ($_smarty_tpl->tpl_vars['item']->value->device==4) {?>
                          <div class="device tablet">
                            <i class="fa fa-tablet" aria-hidden="true"></i>
                          </div><!-- end divece -->
                        <?php }?>
                        <?php if ($_smarty_tpl->tpl_vars['item']->value->device==5) {?>
                          <div class="device mobile">
                            <i class="fa fa-mobile" aria-hidden="true"></i>
                          </div><!-- end divece -->
                        <?php }?>
                      </td>
                      <td class="text-left">
                        <?php if ($_smarty_tpl->tpl_vars['item']->value->device==1) {?>
                          VŠETKY ZARIADENIA
                        <?php }?>
                        <?php if ($_smarty_tpl->tpl_vars['item']->value->device==2) {?>
                          PC
                        <?php }?>
                        <?php if ($_smarty_tpl->tpl_vars['item']->value->device==3) {?>
                          PC A TABLET
                        <?php }?>
                        <?php if ($_smarty_tpl->tpl_vars['item']->value->device==4) {?>
                          TABLET
                        <?php }?>
                        <?php if ($_smarty_tpl->tpl_vars['item']->value->device==5) {?>
                          MOBIL
                        <?php }?>
                      </td>
                      <td class="text-left">
                        <?php if ($_smarty_tpl->tpl_vars['item']->value->viewport==0) {?>
                          -
                        <?php }?>
                        <?php if ($_smarty_tpl->tpl_vars['item']->value->viewport==1) {?>
                          min-width
                        <?php }?>
                        <?php if ($_smarty_tpl->tpl_vars['item']->value->viewport==2) {?>
                          max-width
                        <?php }?>
                        <?php if ($_smarty_tpl->tpl_vars['item']->value->viewport==3) {?>
                          min-height
                        <?php }?>
                        <?php if ($_smarty_tpl->tpl_vars['item']->value->viewport==4) {?>
                          max-height
                        <?php }?>
                        <?php if ($_smarty_tpl->tpl_vars['item']->value->viewport==5) {?>
                          min-width / max-width
                        <?php }?>
                        <?php if ($_smarty_tpl->tpl_vars['item']->value->viewport==6) {?>
                          min-height / max-height
                        <?php }?>
                      </td>
                      <td class="text-right">
                        <?php echo $_smarty_tpl->tpl_vars['item']->value->min_size;?>

                      </td>
                      <td class="text-right">
                        <?php echo $_smarty_tpl->tpl_vars['item']->value->max_size;?>

                      </td>
                      <td class="text-left">
                        <?php if ($_smarty_tpl->tpl_vars['item']->value->resize==1) {?>
                          AUTO
                        <?php }?>
                        <?php if ($_smarty_tpl->tpl_vars['item']->value->resize==2) {?>
                          CROP
                        <?php }?>
                        <?php if ($_smarty_tpl->tpl_vars['item']->value->resize==3) {?>
                          EXACT
                        <?php }?>
                        <?php if ($_smarty_tpl->tpl_vars['item']->value->resize==4) {?>
                          LANDSCAPE
                        <?php }?>
                        <?php if ($_smarty_tpl->tpl_vars['item']->value->resize==5) {?>
                          PORTRAIT
                        <?php }?>
                      </td>
                      <td class="text-right">
                        <?php echo $_smarty_tpl->tpl_vars['item']->value->width;?>

                      </td>
                      <td class="text-right">
                        <?php echo $_smarty_tpl->tpl_vars['item']->value->height;?>

                      </td>
                      <td class="text-center">
                        <label class="switch">
                          <input type="checkbox" name="resizeRuleList[<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
]['delete']" value="1">
                          <span></span>
                        </label>
                      </td>
                    </tr>
                  <?php } ?>
                </tbody>
              </table>
            </div><!-- end table-responsive -->
          <?php } else { ?>
            <div class="alert alert-info" style="float: none;width: 99%;margin: 5px auto;" role="alert">
              <strong>INFO!</strong>
              Vytvorte pravidlo na úpravu obázkov.
            </div>
          <?php }?>
        </div><!-- end panel-body -->
        <?php if (isset($_smarty_tpl->tpl_vars['resizeRuleList']->value)&&(is_array($_smarty_tpl->tpl_vars['resizeRuleList']->value)&&(count($_smarty_tpl->tpl_vars['resizeRuleList']->value)>0))) {?>
          <div class="panel-footer">
            <button type="submit" class="btn btn-success">
              <i class="fa fa-save"></i>&nbsp;
              <?php if (!empty($_smarty_tpl->tpl_vars['global_form_button_save_changes']->value)) {?><?php echo mb_strtoupper($_smarty_tpl->tpl_vars['global_form_button_save_changes']->value, 'UTF-8');?>
<?php } else { ?>SAVE CHANGES<?php }?>
            </button>
          </div><!-- end panel-footer -->
        <?php }?>
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
                  <?php if (isset($_smarty_tpl->tpl_vars['global_form_select_choose']->value)&&(strlen($_smarty_tpl->tpl_vars['global_form_select_choose']->value)>0)) {?>
                    <?php echo $_smarty_tpl->tpl_vars['global_form_select_choose']->value;?>

                  <?php } else { ?>
                    Choose...
                  <?php }?>
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
                  <?php if (isset($_smarty_tpl->tpl_vars['global_form_select_choose']->value)&&(strlen($_smarty_tpl->tpl_vars['global_form_select_choose']->value)>0)) {?>
                    <?php echo $_smarty_tpl->tpl_vars['global_form_select_choose']->value;?>

                  <?php } else { ?>
                    Choose...
                  <?php }?>
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
              <?php if (isset($_smarty_tpl->tpl_vars['resizeRuleList']->value)&&(is_array($_smarty_tpl->tpl_vars['resizeRuleList']->value)&&(count($_smarty_tpl->tpl_vars['resizeRuleList']->value)>0))) {?>
                <select name="rules[]" class="form-control select" multiple="true">
                  <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['resizeRuleList']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
                    <option value="<?php echo $_smarty_tpl->tpl_vars['item']->value->id_rule;?>
">
                      [ <?php echo $_smarty_tpl->tpl_vars['item']->value->id_rule;?>
 ]
                      |
                      <?php if ($_smarty_tpl->tpl_vars['item']->value->device==1) {?>
                        VŠETKY ZARIADENIA
                      <?php }?>
                      <?php if ($_smarty_tpl->tpl_vars['item']->value->device==2) {?>
                        PC
                      <?php }?>
                      <?php if ($_smarty_tpl->tpl_vars['item']->value->device==3) {?>
                        PC A TABLET
                      <?php }?>
                      <?php if ($_smarty_tpl->tpl_vars['item']->value->device==4) {?>
                        TABLET
                      <?php }?>
                      <?php if ($_smarty_tpl->tpl_vars['item']->value->device==5) {?>
                        MOBIL
                      <?php }?>
                      |
                      <?php if ($_smarty_tpl->tpl_vars['item']->value->viewport==0) {?>
                        -
                      <?php }?>
                      <?php if ($_smarty_tpl->tpl_vars['item']->value->viewport==1) {?>
                        min-width
                      <?php }?>
                      <?php if ($_smarty_tpl->tpl_vars['item']->value->viewport==2) {?>
                        max-width
                      <?php }?>
                      <?php if ($_smarty_tpl->tpl_vars['item']->value->viewport==3) {?>
                        min-height
                      <?php }?>
                      <?php if ($_smarty_tpl->tpl_vars['item']->value->viewport==4) {?>
                        max-height
                      <?php }?>
                      <?php if ($_smarty_tpl->tpl_vars['item']->value->viewport==5) {?>
                        min-width / max-width
                      <?php }?>
                      <?php if ($_smarty_tpl->tpl_vars['item']->value->viewport==6) {?>
                        min-height / max-height
                      <?php }?>
                      |
                      <?php echo $_smarty_tpl->tpl_vars['item']->value->min_size;?>

                      |
                      <?php echo $_smarty_tpl->tpl_vars['item']->value->max_size;?>

                      |
                      <?php if ($_smarty_tpl->tpl_vars['item']->value->resize==1) {?>
                        AUTO
                      <?php }?>
                      <?php if ($_smarty_tpl->tpl_vars['item']->value->resize==2) {?>
                        CROP
                      <?php }?>
                      <?php if ($_smarty_tpl->tpl_vars['item']->value->resize==3) {?>
                        EXACT
                      <?php }?>
                      <?php if ($_smarty_tpl->tpl_vars['item']->value->resize==4) {?>
                        LANDSCAPE
                      <?php }?>
                      <?php if ($_smarty_tpl->tpl_vars['item']->value->resize==5) {?>
                        PORTRAIT
                      <?php }?>
                      |
                      <?php echo $_smarty_tpl->tpl_vars['item']->value->width;?>

                      |
                      <?php echo $_smarty_tpl->tpl_vars['item']->value->height;?>

                    </option>
                  <?php } ?>
                </select>
              <?php } else { ?>
                <div class="alert alert-danger text-center" role="alert" style="margin: 0;padding: 5px 15px;">
                  <i class="fa fa-exclamation-circle" aria-hidden="true"></i>
                </div>
              <?php }?>
            </div><!-- end form-group -->
          </div><!-- end col -->
        </div><!-- end panel-body -->
        <div class="panel-footer">
          <button type="submit" class="btn btn-success">
            <i class="fa fa-save"></i>&nbsp;
            <?php if (!empty($_smarty_tpl->tpl_vars['global_form_button_create']->value)) {?><?php echo mb_strtoupper($_smarty_tpl->tpl_vars['global_form_button_create']->value, 'UTF-8');?>
<?php } else { ?>CREATE<?php }?>
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
          <?php if (isset($_smarty_tpl->tpl_vars['thumbSectionList']->value)&&(is_array($_smarty_tpl->tpl_vars['thumbSectionList']->value)&&(count($_smarty_tpl->tpl_vars['thumbSectionList']->value)>0))) {?>
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
                      <?php if (!empty($_smarty_tpl->tpl_vars['global_table_header_remove']->value)) {?><?php echo mb_strtoupper($_smarty_tpl->tpl_vars['global_table_header_remove']->value, 'UTF-8');?>
<?php } else { ?>REMOVE<?php }?>
                    </th>
                  </tr>
                </thead>
                <tbody>
                  <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['thumbSectionList']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
 $_smarty_tpl->tpl_vars['i']->value = $_smarty_tpl->tpl_vars['item']->key;
?>
                    <tr>
                      <td class="text-center">
                        <input type="hidden" name="thumbList[<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
]['id']" value="<?php echo $_smarty_tpl->tpl_vars['item']->value->id_thumb_section;?>
" />
                        <strong><?php echo $_smarty_tpl->tpl_vars['item']->value->id_thumb_section;?>
</strong>
                      </td>
                      <td class="text-left">
                        <?php if ($_smarty_tpl->tpl_vars['item']->value->kind==1) {?>
                          Všetky sekcie
                        <?php }?>
                        <?php if ($_smarty_tpl->tpl_vars['item']->value->kind==2) {?>
                          Kategória
                        <?php }?>
                        <?php if ($_smarty_tpl->tpl_vars['item']->value->kind==3) {?>
                          Atribúty
                        <?php }?>
                        <?php if ($_smarty_tpl->tpl_vars['item']->value->kind==4) {?>
                          Hodnoty atribútov
                        <?php }?>
                      </td>
                      <td class="text-center">
                        <?php if ($_smarty_tpl->tpl_vars['item']->value->type==1) {?>
                          Zvoliť
                        <?php }?>
                        <?php if (($_smarty_tpl->tpl_vars['item']->value->type==0)||($_smarty_tpl->tpl_vars['item']->value->type==2)) {?>
                          Všetko
                        <?php }?>
                        <?php if ($_smarty_tpl->tpl_vars['item']->value->type==3) {?>
                          Všetko s výnimkou
                        <?php }?>
                      </td>
                      <td class="<?php if ($_smarty_tpl->tpl_vars['item']->value->kind==1) {?>text-center<?php } else { ?>text-left<?php }?>">
                        <?php if ($_smarty_tpl->tpl_vars['item']->value->kind==1) {?>
                          <span style="font-size: 1.3em;color: #3fbae4;">
                            <i class="fa fa-ban" aria-hidden="true"></i>
                          </span>
                        <?php }?>
                        <?php if ($_smarty_tpl->tpl_vars['item']->value->kind==2) {?>
                          <?php if (is_array($_smarty_tpl->tpl_vars['item']->value->entity_list)&&(count($_smarty_tpl->tpl_vars['item']->value->entity_list)>0)) {?>
                            <?php  $_smarty_tpl->tpl_vars['entity_a'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['entity_a']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['item']->value->entity_list; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['entity_a']->key => $_smarty_tpl->tpl_vars['entity_a']->value) {
$_smarty_tpl->tpl_vars['entity_a']->_loop = true;
?>
                              <span class="label label-info">
                                <?php echo $_smarty_tpl->tpl_vars['entity_a']->value->category_name;?>

                              </span>
                            <?php } ?>
                          <?php }?>
                        <?php }?>
                        <?php if ($_smarty_tpl->tpl_vars['item']->value->kind==3) {?>
                          <?php if (is_array($_smarty_tpl->tpl_vars['item']->value->entity_list)&&(count($_smarty_tpl->tpl_vars['item']->value->entity_list)>0)) {?>
                            <?php  $_smarty_tpl->tpl_vars['entity_b'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['entity_b']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['item']->value->entity_list; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['entity_b']->key => $_smarty_tpl->tpl_vars['entity_b']->value) {
$_smarty_tpl->tpl_vars['entity_b']->_loop = true;
?>
                              <span class="label label-info">
                                <?php echo $_smarty_tpl->tpl_vars['entity_b']->value->attribute_name_public;?>

                              </span>
                            <?php } ?>
                          <?php }?>
                        <?php }?>
                        <?php if ($_smarty_tpl->tpl_vars['item']->value->kind==4) {?>
                          <?php if (is_array($_smarty_tpl->tpl_vars['item']->value->entity_list)&&(count($_smarty_tpl->tpl_vars['item']->value->entity_list)>0)) {?>
                            <?php  $_smarty_tpl->tpl_vars['entity_c'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['entity_c']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['item']->value->entity_list; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['entity_c']->key => $_smarty_tpl->tpl_vars['entity_c']->value) {
$_smarty_tpl->tpl_vars['entity_c']->_loop = true;
?>
                              <span class="label label-info">
                                <?php echo $_smarty_tpl->tpl_vars['entity_c']->value->value;?>

                              </span>
                            <?php } ?>
                          <?php }?>
                        <?php }?>
                      </td>
                      <td class="text-left">
                        <?php if (is_array($_smarty_tpl->tpl_vars['item']->value->resize_rules)&&(count($_smarty_tpl->tpl_vars['item']->value->resize_rules)>0)) {?>
                          <?php  $_smarty_tpl->tpl_vars['resize_rule'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['resize_rule']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['item']->value->resize_rules; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['resize_rule']->key => $_smarty_tpl->tpl_vars['resize_rule']->value) {
$_smarty_tpl->tpl_vars['resize_rule']->_loop = true;
?>
                            <span class="label label-info">
                              <?php echo $_smarty_tpl->tpl_vars['resize_rule']->value->id_rule;?>

                            </span>
                          <?php } ?>
                        <?php }?>
                      </td>
                      <td class="text-center">
                        <?php if ($_smarty_tpl->tpl_vars['item']->value->cron==0) {?>
                          <span style="font-size: 1.3em;color: #95b75d;">
                            <i class="fa fa-check-circle-o" aria-hidden="true"></i>
                          </span>
                        <?php } else { ?>
                          <span style="font-size: 1.3em;color: #fea223;">
                            <i class="fa fa-history" aria-hidden="true"></i>
                          </span>
                        <?php }?>
                      </td>
                      <td class="text-center">
                        <label class="switch">
                          <input type="checkbox" name="thumbList[<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
]['delete']" value="1">
                          <span></span>
                        </label>
                      </td>
                    </tr>
                  <?php } ?>
                </tbody>
              </table>
            </div><!-- end table-responsive -->
          <?php } else { ?>
            <div class="alert alert-info" style="float: none;width: 99%;margin: 5px auto;" role="alert">
              <strong>INFO!</strong>
              Definujte sekciu pre ktorú sa má uplatniť pravidlo na úpravu obrázkov.
            </div>
          <?php }?>
        </div><!-- end panel-body -->
        <?php if (isset($_smarty_tpl->tpl_vars['thumbSectionList']->value)&&(is_array($_smarty_tpl->tpl_vars['thumbSectionList']->value)&&(count($_smarty_tpl->tpl_vars['thumbSectionList']->value)>0))) {?>
          <div class="panel-footer">
            <button type="submit" class="btn btn-success">
              <i class="fa fa-save"></i>&nbsp;
              <?php if (!empty($_smarty_tpl->tpl_vars['global_form_button_save_changes']->value)) {?><?php echo mb_strtoupper($_smarty_tpl->tpl_vars['global_form_button_save_changes']->value, 'UTF-8');?>
<?php } else { ?>SAVE CHANGES<?php }?>
            </button>
          </div><!-- end panel-footer -->
        <?php }?>
      </div><!-- end panel -->
    </form>
  </div><!-- end col -->
</div><!-- end col -->
<?php }} ?>
