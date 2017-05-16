<?php /*%%SmartyHeaderCode:1959801498588efa5addbc81-69512940%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '31f3d5335b48e8f5f002a236393318cf0a0b968c' => 
    array (
      0 => '/var/www/public/carpedmfashion.com/core/config/../../app/themes/cpanel/store/warehouses/ajax/warehouse_matrix_reload.tpl',
      1 => 1469707252,
      2 => 'extends',
    ),
  ),
  'nocache_hash' => '1959801498588efa5addbc81-69512940',
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
  'unifunc' => 'content_588efa5b0818a4_15947074',
  'cache_lifetime' => 120,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_588efa5b0818a4_15947074')) {function content_588efa5b0818a4_15947074($_smarty_tpl) {?><div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
  <form action="cpanel/store-warehouse-matrix-update-par-x-vs" method="post" role="form">
    <input type="hidden" name="matrix-id" value="462" />
    <div class="panel panel-primary">
      <div class="panel-heading ui-draggable-handle">
        <h3 class="panel-title">
          <i class="fa fa-cogs"></i>&nbsp;
          PARAMETER - A
        </h3>
        <ul class="panel-controls">
                      <li>
              <a href="#" onclick="return false;" style="background: #222 !important;color: #fff;border-color: #222;" title="">
                3
              </a>
            </li>
                    <li>
            <a href="#" onclick="return false;" id="parAPopUp">
              <span class="fa fa-plus"></span>
            </a>
          </li>
          <li><a href="#" class="panel-collapse"><span class="fa fa-angle-down"></span></a></li>
        </ul>
      </div><!-- end panel-heading -->
      <div id="MPA" class="panel-body panel-body-table">
                  <ul class="tags list-inline">
                          <li>
                <span class="label label-info" style="background: #a7933e !important;">
                  Bavlnen&eacute; farby
                </span>
              </li>
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
                    ODSTRÁNIŤ                  </th>
                </tr>
              </thead>
              <tbody>
                                  <tr>
                    <td class="text-center">
                      <input type="hidden" name="parX[0]['attr-v-id']" value="4"/>
                      <input type="checkbox" name="parX[0]['on']" value="4" class="x-remove">
                    </td>
                    <td class="text-center">
                      4
                    </td>
                    <td class="text-center">
                      <span class="agc" style="background: #a7933e;">
                        <i class="fa fa-bullseye"></i>
                      </span>
                    </td>
                    <td class="text-left">
                      <strong>
                        melanžov&aacute;
                      </strong>
                    </td>
                    <td class="text-center">
                      <span class="circle" style="background: #c4c4c4;"><!-- --></span>
                    </td>
                    <td class="text-center">
                      <select name="parX[0]['cdt']" style="display: inline-block;width: 100%;">
                        <option value="0" selected>Vyberte...</option>
                        <option value="1" >%</option>
                        <option value="2" >+</option>
                      </select>
                    </td>
                    <td class="text-right">
                      <div class="form-group upd-m-qty pull-left" style="width:100%;">
                        <input type="text" name="parX[0]['cdv']" value="0.00" class="form-control text-right" style="min-width: 70px;font-weight: 700;" autocomplete="off">
                      </div><!-- end form-group -->
                    </td>
                    <td class="text-center">
                      <button type="button" class="btn btn-danger push-x" data-attr-v-id="4">
                        &nbsp;&nbsp;<span class="fa fa-minus"></span>
                      </button>
                    </td>
                  </tr>
                                  <tr>
                    <td class="text-center">
                      <input type="hidden" name="parX[1]['attr-v-id']" value="6"/>
                      <input type="checkbox" name="parX[1]['on']" value="6" class="x-remove">
                    </td>
                    <td class="text-center">
                      6
                    </td>
                    <td class="text-center">
                      <span class="agc" style="background: #a7933e;">
                        <i class="fa fa-bullseye"></i>
                      </span>
                    </td>
                    <td class="text-left">
                      <strong>
                        kr&aacute;lovsk&aacute; modr&aacute;
                      </strong>
                    </td>
                    <td class="text-center">
                      <span class="circle" style="background: #4169e1;"><!-- --></span>
                    </td>
                    <td class="text-center">
                      <select name="parX[1]['cdt']" style="display: inline-block;width: 100%;">
                        <option value="0" selected>Vyberte...</option>
                        <option value="1" >%</option>
                        <option value="2" >+</option>
                      </select>
                    </td>
                    <td class="text-right">
                      <div class="form-group upd-m-qty pull-left" style="width:100%;">
                        <input type="text" name="parX[1]['cdv']" value="0.00" class="form-control text-right" style="min-width: 70px;font-weight: 700;" autocomplete="off">
                      </div><!-- end form-group -->
                    </td>
                    <td class="text-center">
                      <button type="button" class="btn btn-danger push-x" data-attr-v-id="6">
                        &nbsp;&nbsp;<span class="fa fa-minus"></span>
                      </button>
                    </td>
                  </tr>
                                  <tr>
                    <td class="text-center">
                      <input type="hidden" name="parX[2]['attr-v-id']" value="7"/>
                      <input type="checkbox" name="parX[2]['on']" value="7" class="x-remove">
                    </td>
                    <td class="text-center">
                      7
                    </td>
                    <td class="text-center">
                      <span class="agc" style="background: #a7933e;">
                        <i class="fa fa-bullseye"></i>
                      </span>
                    </td>
                    <td class="text-left">
                      <strong>
                        tmavomodr&aacute;
                      </strong>
                    </td>
                    <td class="text-center">
                      <span class="circle" style="background: #191970;"><!-- --></span>
                    </td>
                    <td class="text-center">
                      <select name="parX[2]['cdt']" style="display: inline-block;width: 100%;">
                        <option value="0" selected>Vyberte...</option>
                        <option value="1" >%</option>
                        <option value="2" >+</option>
                      </select>
                    </td>
                    <td class="text-right">
                      <div class="form-group upd-m-qty pull-left" style="width:100%;">
                        <input type="text" name="parX[2]['cdv']" value="0.00" class="form-control text-right" style="min-width: 70px;font-weight: 700;" autocomplete="off">
                      </div><!-- end form-group -->
                    </td>
                    <td class="text-center">
                      <button type="button" class="btn btn-danger push-x" data-attr-v-id="7">
                        &nbsp;&nbsp;<span class="fa fa-minus"></span>
                      </button>
                    </td>
                  </tr>
                              </tbody>
            </table>
          </div><!-- end table-responsive -->
              </div><!-- end panel-body -->
              <div class="panel-footer">
          <button type="submit" class="btn btn-success">
            <i class="fa fa-floppy-o"></i>&nbsp;
            ULOŽIŤ ZMENY          </button>
          <button type="button" id="MPADF" class="btn btn-danger pull-right">
            <i class="fa fa-exclamation-triangle"></i>&nbsp;
            VYMAZAŤ VŠETKO
          </button>
          <button type="button" id="MPADS" class="btn btn-warning pull-right" style="margin-right: 15px;">
            <i class="fa fa-times"></i>&nbsp;
            VYMAZAŤ OZNAČENÉ
          </button>
        </div><!-- end panel-footer -->
          </div><!-- end panel -->
  </form>
</div><!-- end col -->
<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
  <form action="cpanel/store-warehouse-matrix-update-par-x-vs" method="post" role="form">
    <input type="hidden" name="matrix-id" value="462" />
    <div class="panel panel-primary">
      <div class="panel-heading ui-draggable-handle">
        <h3 class="panel-title">
          <i class="fa fa-cogs"></i>&nbsp;
          PARAMETER - B
        </h3>
        <ul class="panel-controls">
                      <li>
              <a href="#" onclick="return false;" style="background: #222 !important;color: #fff;border-color: #222;" title="">
                5
              </a>
            </li>
                    <li>
            <a href="#" onclick="return false;" id="parBPopUp">
              <span class="fa fa-plus"></span>
            </a>
          </li>
          <li><a href="#" class="panel-collapse"><span class="fa fa-angle-down"></span></a></li>
        </ul>
      </div><!-- end panel-heading -->
      <div id="MPB" class="panel-body panel-body-table">
                  <ul class="tags list-inline">
                          <li>
                <span class="label label-info" style="background: #272672 !important;">
                  Mužsk&eacute; veľkosti
                </span>
              </li>
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
                    ODSTRÁNIŤ                  </th>
                </tr>
              </thead>
              <tbody>
                                  <tr>
                    <td class="text-center">
                      <input type="hidden" name="parX[0]['attr-v-id']" value="118"/>
                      <input type="checkbox" name="parX[0]['on']" value="118" class="x-remove x-cb">
                    </td>
                    <td class="text-center">
                      118
                    </td>
                    <td class="text-center">
                      <span class="agc" style="background: #272672;">
                        <i class="fa fa-bullseye"></i>
                      </span>
                    </td>
                    <td class="text-left">
                      <strong>
                        S
                      </strong>
                    </td>
                    <td class="text-center">
                      <span class="circle" style="background: #FFFFFF;"><!-- --></span>
                    </td>
                    <td class="text-center">
                      <select name="parX[0]['cdt']" style="display: inline-block;width: 100%;">
                        <option value="0" selected>Vyberte...</option>
                        <option value="1" >%</option>
                        <option value="2" >+</option>
                      </select>
                    </td>
                    <td class="text-right">
                      <div class="form-group upd-m-qty pull-left" style="width:100%;">
                        <input type="text" name="parX[0]['cdv']" value="0.00" class="form-control text-right" style="min-width: 70px;font-weight: 700;" autocomplete="off">
                      </div><!-- end form-group -->
                    </td>
                    <td class="text-center">
                      <button type="button" class="btn btn-danger push-x" data-attr-v-id="118">
                        &nbsp;&nbsp;<span class="fa fa-minus"></span>
                      </button>
                    </td>
                  </tr>
                                  <tr>
                    <td class="text-center">
                      <input type="hidden" name="parX[1]['attr-v-id']" value="119"/>
                      <input type="checkbox" name="parX[1]['on']" value="119" class="x-remove x-cb">
                    </td>
                    <td class="text-center">
                      119
                    </td>
                    <td class="text-center">
                      <span class="agc" style="background: #272672;">
                        <i class="fa fa-bullseye"></i>
                      </span>
                    </td>
                    <td class="text-left">
                      <strong>
                        M
                      </strong>
                    </td>
                    <td class="text-center">
                      <span class="circle" style="background: #FFFFFF;"><!-- --></span>
                    </td>
                    <td class="text-center">
                      <select name="parX[1]['cdt']" style="display: inline-block;width: 100%;">
                        <option value="0" selected>Vyberte...</option>
                        <option value="1" >%</option>
                        <option value="2" >+</option>
                      </select>
                    </td>
                    <td class="text-right">
                      <div class="form-group upd-m-qty pull-left" style="width:100%;">
                        <input type="text" name="parX[1]['cdv']" value="0.00" class="form-control text-right" style="min-width: 70px;font-weight: 700;" autocomplete="off">
                      </div><!-- end form-group -->
                    </td>
                    <td class="text-center">
                      <button type="button" class="btn btn-danger push-x" data-attr-v-id="119">
                        &nbsp;&nbsp;<span class="fa fa-minus"></span>
                      </button>
                    </td>
                  </tr>
                                  <tr>
                    <td class="text-center">
                      <input type="hidden" name="parX[2]['attr-v-id']" value="120"/>
                      <input type="checkbox" name="parX[2]['on']" value="120" class="x-remove x-cb">
                    </td>
                    <td class="text-center">
                      120
                    </td>
                    <td class="text-center">
                      <span class="agc" style="background: #272672;">
                        <i class="fa fa-bullseye"></i>
                      </span>
                    </td>
                    <td class="text-left">
                      <strong>
                        L
                      </strong>
                    </td>
                    <td class="text-center">
                      <span class="circle" style="background: #FFFFFF;"><!-- --></span>
                    </td>
                    <td class="text-center">
                      <select name="parX[2]['cdt']" style="display: inline-block;width: 100%;">
                        <option value="0" selected>Vyberte...</option>
                        <option value="1" >%</option>
                        <option value="2" >+</option>
                      </select>
                    </td>
                    <td class="text-right">
                      <div class="form-group upd-m-qty pull-left" style="width:100%;">
                        <input type="text" name="parX[2]['cdv']" value="0.00" class="form-control text-right" style="min-width: 70px;font-weight: 700;" autocomplete="off">
                      </div><!-- end form-group -->
                    </td>
                    <td class="text-center">
                      <button type="button" class="btn btn-danger push-x" data-attr-v-id="120">
                        &nbsp;&nbsp;<span class="fa fa-minus"></span>
                      </button>
                    </td>
                  </tr>
                                  <tr>
                    <td class="text-center">
                      <input type="hidden" name="parX[3]['attr-v-id']" value="121"/>
                      <input type="checkbox" name="parX[3]['on']" value="121" class="x-remove x-cb">
                    </td>
                    <td class="text-center">
                      121
                    </td>
                    <td class="text-center">
                      <span class="agc" style="background: #272672;">
                        <i class="fa fa-bullseye"></i>
                      </span>
                    </td>
                    <td class="text-left">
                      <strong>
                        XL
                      </strong>
                    </td>
                    <td class="text-center">
                      <span class="circle" style="background: #FFFFFF;"><!-- --></span>
                    </td>
                    <td class="text-center">
                      <select name="parX[3]['cdt']" style="display: inline-block;width: 100%;">
                        <option value="0" selected>Vyberte...</option>
                        <option value="1" >%</option>
                        <option value="2" >+</option>
                      </select>
                    </td>
                    <td class="text-right">
                      <div class="form-group upd-m-qty pull-left" style="width:100%;">
                        <input type="text" name="parX[3]['cdv']" value="0.00" class="form-control text-right" style="min-width: 70px;font-weight: 700;" autocomplete="off">
                      </div><!-- end form-group -->
                    </td>
                    <td class="text-center">
                      <button type="button" class="btn btn-danger push-x" data-attr-v-id="121">
                        &nbsp;&nbsp;<span class="fa fa-minus"></span>
                      </button>
                    </td>
                  </tr>
                                  <tr>
                    <td class="text-center">
                      <input type="hidden" name="parX[4]['attr-v-id']" value="122"/>
                      <input type="checkbox" name="parX[4]['on']" value="122" class="x-remove x-cb">
                    </td>
                    <td class="text-center">
                      122
                    </td>
                    <td class="text-center">
                      <span class="agc" style="background: #272672;">
                        <i class="fa fa-bullseye"></i>
                      </span>
                    </td>
                    <td class="text-left">
                      <strong>
                        2XL
                      </strong>
                    </td>
                    <td class="text-center">
                      <span class="circle" style="background: #FFFFFF;"><!-- --></span>
                    </td>
                    <td class="text-center">
                      <select name="parX[4]['cdt']" style="display: inline-block;width: 100%;">
                        <option value="0" selected>Vyberte...</option>
                        <option value="1" >%</option>
                        <option value="2" >+</option>
                      </select>
                    </td>
                    <td class="text-right">
                      <div class="form-group upd-m-qty pull-left" style="width:100%;">
                        <input type="text" name="parX[4]['cdv']" value="0.00" class="form-control text-right" style="min-width: 70px;font-weight: 700;" autocomplete="off">
                      </div><!-- end form-group -->
                    </td>
                    <td class="text-center">
                      <button type="button" class="btn btn-danger push-x" data-attr-v-id="122">
                        &nbsp;&nbsp;<span class="fa fa-minus"></span>
                      </button>
                    </td>
                  </tr>
                              </tbody>
            </table>
          </div><!-- end table-responsive -->
              </div><!-- end panel-body -->
              <div class="panel-footer">
          <button type="submit" class="btn btn-success">
            <i class="fa fa-floppy-o"></i>&nbsp;
            ULOŽIŤ ZMENY          </button>
          <button type="button" id="MPBDF" class="btn btn-danger pull-right">
            <i class="fa fa-exclamation-triangle"></i>&nbsp;
            VYMAZAŤ VŠETKO
          </button>
          <button type="button" id="MPBDS" class="btn btn-warning pull-right" style="margin-right: 15px;">
            <i class="fa fa-times"></i>&nbsp;
            VYMAZAŤ OZNAČENÉ
          </button>
        </div><!-- end panel-footer -->
          </div><!-- end panel -->
  </form>
</div><!-- end col --><?php }} ?>
