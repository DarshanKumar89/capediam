<?php /* Smarty version Smarty-3.1.21-dev, created on 2017-01-30 09:33:30
         compiled from "/var/www/public/carpedmfashion.com/core/config/../../app/themes/cpanel/store/warehouses/ajax/warehouse_matrix_reload.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1959801498588efa5addbc81-69512940%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
  ),
  'nocache_hash' => '1959801498588efa5addbc81-69512940',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'matrix' => 0,
    'item' => 0,
    'global_table_header_remove' => 0,
    'i' => 0,
    'global_form_select_choose' => 0,
    'global_alert_info' => 0,
    'global_form_button_save_changes' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_588efa5b06e318_56628894',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_588efa5b06e318_56628894')) {function content_588efa5b06e318_56628894($_smarty_tpl) {?><div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
  <form action="cpanel/store-warehouse-matrix-update-par-x-vs" method="post" role="form">
    <input type="hidden" name="matrix-id" value="<?php echo $_smarty_tpl->tpl_vars['matrix']->value->id_matrix;?>
" />
    <div class="panel panel-primary">
      <div class="panel-heading ui-draggable-handle">
        <h3 class="panel-title">
          <i class="fa fa-cogs"></i>&nbsp;
          PARAMETER - A
        </h3>
        <ul class="panel-controls">
          <?php if (isset($_smarty_tpl->tpl_vars['matrix']->value->parA->list)&&(is_array($_smarty_tpl->tpl_vars['matrix']->value->parA->list)&&(count($_smarty_tpl->tpl_vars['matrix']->value->parA->list)>0))) {?>
            <li>
              <a href="#" onclick="return false;" style="background: #222 !important;color: #fff;border-color: #222;" title="">
                <?php echo count($_smarty_tpl->tpl_vars['matrix']->value->parA->list);?>

              </a>
            </li>
          <?php }?>
          <li>
            <a href="#" onclick="return false;" id="parAPopUp">
              <span class="fa fa-plus"></span>
            </a>
          </li>
          <li><a href="#" class="panel-collapse"><span class="fa fa-angle-down"></span></a></li>
        </ul>
      </div><!-- end panel-heading -->
      <div id="MPA" class="panel-body panel-body-table">
        <?php if ((isset($_smarty_tpl->tpl_vars['matrix']->value->parA->tags)&&isset($_smarty_tpl->tpl_vars['matrix']->value->parA->list))&&((is_array($_smarty_tpl->tpl_vars['matrix']->value->parA->tags)&&(count($_smarty_tpl->tpl_vars['matrix']->value->parA->tags)>0))&&(is_array($_smarty_tpl->tpl_vars['matrix']->value->parA->list)&&(count($_smarty_tpl->tpl_vars['matrix']->value->parA->list)>0)))) {?>
          <ul class="tags list-inline">
            <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['matrix']->value->parA->tags; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
              <li>
                <span class="label label-info" <?php if (strlen($_smarty_tpl->tpl_vars['item']->value->agc)>0) {?>style="background: <?php echo $_smarty_tpl->tpl_vars['item']->value->agc;?>
 !important;"<?php }?>>
                  <?php echo $_smarty_tpl->tpl_vars['item']->value->attr_name;?>

                </span>
              </li>
            <?php } ?>
          </ul>
          <div class="table-responsive" style="max-height: 690px;border-top: 1px solid #E5E5E5;">
            <table class="table table-bordered table-striped table-actions">
              <thead>
                <tr>
                  <th width="30" class="text-center">
                    #
                  </th>
                  <th width="50" class="text-center">
                    ID
                  </th>
                  <th width="30" class="text-center">
                    AG
                  </th>
                  <th class="text-center">
                    NÁZOV HODNOTY
                  </th>
                  <th width="30" class="text-center">
                    FARBA
                  </th>
                  <th width="100" class="text-center">
                    NAVÝŠENIE
                  </th>
                  <th width="130" class="text-center">
                    HODNOTA
                  </th>
                  <th width="50" class="text-center">
                    <?php if (!empty($_smarty_tpl->tpl_vars['global_table_header_remove']->value)) {
echo mb_strtoupper($_smarty_tpl->tpl_vars['global_table_header_remove']->value, 'UTF-8');
} else { ?>REMOVE<?php }?>
                  </th>
                </tr>
              </thead>
              <tbody>
                <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['matrix']->value->parA->list; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
 $_smarty_tpl->tpl_vars['i']->value = $_smarty_tpl->tpl_vars['item']->key;
?>
                  <tr>
                    <td class="text-center">
                      <input type="hidden" name="parX[<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
]['attr-v-id']" value="<?php echo $_smarty_tpl->tpl_vars['item']->value->id_value;?>
"/>
                      <input type="checkbox" name="parX[<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
]['on']" value="<?php echo $_smarty_tpl->tpl_vars['item']->value->id_value;?>
" class="x-remove">
                    </td>
                    <td class="text-center">
                      <?php echo $_smarty_tpl->tpl_vars['item']->value->id_value;?>

                    </td>
                    <td class="text-center">
                      <span class="agc" <?php if (strlen($_smarty_tpl->tpl_vars['item']->value->agc)>0) {?>style="background: <?php echo $_smarty_tpl->tpl_vars['item']->value->agc;?>
;"<?php }?>>
                        <i class="fa fa-bullseye"></i>
                      </span>
                    </td>
                    <td class="text-left">
                      <strong>
                        <?php echo $_smarty_tpl->tpl_vars['item']->value->value;?>

                      </strong>
                    </td>
                    <td class="text-center">
                      <span class="circle" style="background: <?php if (strlen($_smarty_tpl->tpl_vars['item']->value->color)>0) {
echo $_smarty_tpl->tpl_vars['item']->value->color;
} else { ?>#FFF<?php }?>;"><!-- --></span>
                    </td>
                    <td class="text-center">
                      <select name="parX[<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
]['cdt']" style="display: inline-block;width: 100%;">
                        <option value="0" <?php if ($_smarty_tpl->tpl_vars['item']->value->id_cost_differce==0) {?>selected<?php }?>><?php if (!empty($_smarty_tpl->tpl_vars['global_form_select_choose']->value)) {
echo $_smarty_tpl->tpl_vars['global_form_select_choose']->value;
} else { ?>Choose...<?php }?></option>
                        <option value="1" <?php if ($_smarty_tpl->tpl_vars['item']->value->id_cost_differce==1) {?>selected<?php }?>>%</option>
                        <option value="2" <?php if ($_smarty_tpl->tpl_vars['item']->value->id_cost_differce==2) {?>selected<?php }?>>+</option>
                      </select>
                    </td>
                    <td class="text-right">
                      <div class="form-group upd-m-qty pull-left" style="width:100%;">
                        <input type="text" name="parX[<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
]['cdv']" value="<?php echo $_smarty_tpl->tpl_vars['item']->value->cost_difference;?>
" class="form-control text-right" style="min-width: 70px;font-weight: 700;" autocomplete="off">
                      </div><!-- end form-group -->
                    </td>
                    <td class="text-center">
                      <button type="button" class="btn btn-danger push-x" data-attr-v-id="<?php echo $_smarty_tpl->tpl_vars['item']->value->id_value;?>
">
                        &nbsp;&nbsp;<span class="fa fa-minus"></span>
                      </button>
                    </td>
                  </tr>
                <?php } ?>
              </tbody>
            </table>
          </div><!-- end table-responsive -->
        <?php } else { ?>
          <div class="alert alert-info" role="alert" style="float:none;width: 98% !important;margin: 15px auto;">
            <strong><?php if (!empty($_smarty_tpl->tpl_vars['global_alert_info']->value)) {
echo mb_strtoupper($_smarty_tpl->tpl_vars['global_alert_info']->value, 'UTF-8');
} else { ?>INFO!<?php }?></strong>
            Kliknutím na tlačidlo so znakom plus pridáte novú hodnotu.
          </div><!-- end alert -->
        <?php }?>
      </div><!-- end panel-body -->
      <?php if ((isset($_smarty_tpl->tpl_vars['matrix']->value->parA->tags)&&isset($_smarty_tpl->tpl_vars['matrix']->value->parA->list))&&((is_array($_smarty_tpl->tpl_vars['matrix']->value->parA->tags)&&(count($_smarty_tpl->tpl_vars['matrix']->value->parA->tags)>0))&&(is_array($_smarty_tpl->tpl_vars['matrix']->value->parA->list)&&(count($_smarty_tpl->tpl_vars['matrix']->value->parA->list)>0)))) {?>
        <div class="panel-footer">
          <button type="submit" class="btn btn-success">
            <i class="fa fa-floppy-o"></i>&nbsp;
            <?php if (!empty($_smarty_tpl->tpl_vars['global_form_button_save_changes']->value)) {
echo mb_strtoupper($_smarty_tpl->tpl_vars['global_form_button_save_changes']->value, 'UTF-8');
} else { ?>SAVE CHANGES<?php }?>
          </button>
          <button type="button" id="MPADF" class="btn btn-danger pull-right">
            <i class="fa fa-exclamation-triangle"></i>&nbsp;
            VYMAZAŤ VŠETKO
          </button>
          <button type="button" id="MPADS" class="btn btn-warning pull-right" style="margin-right: 15px;">
            <i class="fa fa-times"></i>&nbsp;
            VYMAZAŤ OZNAČENÉ
          </button>
        </div><!-- end panel-footer -->
      <?php }?>
    </div><!-- end panel -->
  </form>
</div><!-- end col -->
<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
  <form action="cpanel/store-warehouse-matrix-update-par-x-vs" method="post" role="form">
    <input type="hidden" name="matrix-id" value="<?php echo $_smarty_tpl->tpl_vars['matrix']->value->id_matrix;?>
" />
    <div class="panel panel-primary">
      <div class="panel-heading ui-draggable-handle">
        <h3 class="panel-title">
          <i class="fa fa-cogs"></i>&nbsp;
          PARAMETER - B
        </h3>
        <ul class="panel-controls">
          <?php if (isset($_smarty_tpl->tpl_vars['matrix']->value->parB->list)&&(is_array($_smarty_tpl->tpl_vars['matrix']->value->parB->list)&&(count($_smarty_tpl->tpl_vars['matrix']->value->parB->list)>0))) {?>
            <li>
              <a href="#" onclick="return false;" style="background: #222 !important;color: #fff;border-color: #222;" title="">
                <?php echo count($_smarty_tpl->tpl_vars['matrix']->value->parB->list);?>

              </a>
            </li>
          <?php }?>
          <li>
            <a href="#" onclick="return false;" id="parBPopUp">
              <span class="fa fa-plus"></span>
            </a>
          </li>
          <li><a href="#" class="panel-collapse"><span class="fa fa-angle-down"></span></a></li>
        </ul>
      </div><!-- end panel-heading -->
      <div id="MPB" class="panel-body panel-body-table">
        <?php if ((isset($_smarty_tpl->tpl_vars['matrix']->value->parB->tags)&&isset($_smarty_tpl->tpl_vars['matrix']->value->parB->list))&&((is_array($_smarty_tpl->tpl_vars['matrix']->value->parB->tags)&&(count($_smarty_tpl->tpl_vars['matrix']->value->parB->tags)>0))&&(is_array($_smarty_tpl->tpl_vars['matrix']->value->parB->list)&&(count($_smarty_tpl->tpl_vars['matrix']->value->parB->list)>0)))) {?>
          <ul class="tags list-inline">
            <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['matrix']->value->parB->tags; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
              <li>
                <span class="label label-info" <?php if (strlen($_smarty_tpl->tpl_vars['item']->value->agc)>0) {?>style="background: <?php echo $_smarty_tpl->tpl_vars['item']->value->agc;?>
 !important;"<?php }?>>
                  <?php echo $_smarty_tpl->tpl_vars['item']->value->attr_name;?>

                </span>
              </li>
            <?php } ?>
          </ul>
          <div class="table-responsive" style="max-height: 690px;border-top: 1px solid #E5E5E5;">
            <table class="table table-bordered table-striped table-actions">
              <thead>
                <tr>
                  <th width="30" class="text-center">
                    #
                  </th>
                  <th width="50" class="text-center">
                    ID
                  </th>
                  <th width="30" class="text-center">
                    AG
                  </th>
                  <th class="text-center">
                    NÁZOV HODNOTY
                  </th>
                  <th width="30" class="text-center">
                    FARBA
                  </th>
                  <th width="100" class="text-center">
                    NAVÝŠENIE
                  </th>
                  <th width="130" class="text-center">
                    HODNOTA
                  </th>
                  <th width="50" class="text-center">
                    <?php if (!empty($_smarty_tpl->tpl_vars['global_table_header_remove']->value)) {
echo mb_strtoupper($_smarty_tpl->tpl_vars['global_table_header_remove']->value, 'UTF-8');
} else { ?>REMOVE<?php }?>
                  </th>
                </tr>
              </thead>
              <tbody>
                <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['matrix']->value->parB->list; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
 $_smarty_tpl->tpl_vars['i']->value = $_smarty_tpl->tpl_vars['item']->key;
?>
                  <tr>
                    <td class="text-center">
                      <input type="hidden" name="parX[<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
]['attr-v-id']" value="<?php echo $_smarty_tpl->tpl_vars['item']->value->id_value;?>
"/>
                      <input type="checkbox" name="parX[<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
]['on']" value="<?php echo $_smarty_tpl->tpl_vars['item']->value->id_value;?>
" class="x-remove x-cb">
                    </td>
                    <td class="text-center">
                      <?php echo $_smarty_tpl->tpl_vars['item']->value->id_value;?>

                    </td>
                    <td class="text-center">
                      <span class="agc" <?php if (strlen($_smarty_tpl->tpl_vars['item']->value->agc)>0) {?>style="background: <?php echo $_smarty_tpl->tpl_vars['item']->value->agc;?>
;"<?php }?>>
                        <i class="fa fa-bullseye"></i>
                      </span>
                    </td>
                    <td class="text-left">
                      <strong>
                        <?php echo $_smarty_tpl->tpl_vars['item']->value->value;?>

                      </strong>
                    </td>
                    <td class="text-center">
                      <span class="circle" style="background: <?php if (strlen($_smarty_tpl->tpl_vars['item']->value->color)>0) {
echo $_smarty_tpl->tpl_vars['item']->value->color;
} else { ?>#FFF<?php }?>;"><!-- --></span>
                    </td>
                    <td class="text-center">
                      <select name="parX[<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
]['cdt']" style="display: inline-block;width: 100%;">
                        <option value="0" <?php if ($_smarty_tpl->tpl_vars['item']->value->id_cost_differce==0) {?>selected<?php }?>><?php if (!empty($_smarty_tpl->tpl_vars['global_form_select_choose']->value)) {
echo $_smarty_tpl->tpl_vars['global_form_select_choose']->value;
} else { ?>Choose...<?php }?></option>
                        <option value="1" <?php if ($_smarty_tpl->tpl_vars['item']->value->id_cost_differce==1) {?>selected<?php }?>>%</option>
                        <option value="2" <?php if ($_smarty_tpl->tpl_vars['item']->value->id_cost_differce==2) {?>selected<?php }?>>+</option>
                      </select>
                    </td>
                    <td class="text-right">
                      <div class="form-group upd-m-qty pull-left" style="width:100%;">
                        <input type="text" name="parX[<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
]['cdv']" value="<?php echo $_smarty_tpl->tpl_vars['item']->value->cost_difference;?>
" class="form-control text-right" style="min-width: 70px;font-weight: 700;" autocomplete="off">
                      </div><!-- end form-group -->
                    </td>
                    <td class="text-center">
                      <button type="button" class="btn btn-danger push-x" data-attr-v-id="<?php echo $_smarty_tpl->tpl_vars['item']->value->id_value;?>
">
                        &nbsp;&nbsp;<span class="fa fa-minus"></span>
                      </button>
                    </td>
                  </tr>
                <?php } ?>
              </tbody>
            </table>
          </div><!-- end table-responsive -->
        <?php } else { ?>
          <div class="alert alert-info" role="alert" style="float:none;width: 98% !important;margin: 15px auto;">
            <strong><?php if (!empty($_smarty_tpl->tpl_vars['global_alert_info']->value)) {
echo mb_strtoupper($_smarty_tpl->tpl_vars['global_alert_info']->value, 'UTF-8');
} else { ?>INFO!<?php }?></strong>
            Kliknutím na tlačidlo so znakom plus pridáte novú hodnotu.
          </div><!-- end alert -->
        <?php }?>
      </div><!-- end panel-body -->
      <?php if ((isset($_smarty_tpl->tpl_vars['matrix']->value->parB->tags)&&isset($_smarty_tpl->tpl_vars['matrix']->value->parB->list))&&((is_array($_smarty_tpl->tpl_vars['matrix']->value->parB->tags)&&(count($_smarty_tpl->tpl_vars['matrix']->value->parB->tags)>0))&&(is_array($_smarty_tpl->tpl_vars['matrix']->value->parB->list)&&(count($_smarty_tpl->tpl_vars['matrix']->value->parB->list)>0)))) {?>
        <div class="panel-footer">
          <button type="submit" class="btn btn-success">
            <i class="fa fa-floppy-o"></i>&nbsp;
            <?php if (!empty($_smarty_tpl->tpl_vars['global_form_button_save_changes']->value)) {
echo mb_strtoupper($_smarty_tpl->tpl_vars['global_form_button_save_changes']->value, 'UTF-8');
} else { ?>SAVE CHANGES<?php }?>
          </button>
          <button type="button" id="MPBDF" class="btn btn-danger pull-right">
            <i class="fa fa-exclamation-triangle"></i>&nbsp;
            VYMAZAŤ VŠETKO
          </button>
          <button type="button" id="MPBDS" class="btn btn-warning pull-right" style="margin-right: 15px;">
            <i class="fa fa-times"></i>&nbsp;
            VYMAZAŤ OZNAČENÉ
          </button>
        </div><!-- end panel-footer -->
      <?php }?>
    </div><!-- end panel -->
  </form>
</div><!-- end col --><?php }} ?>
