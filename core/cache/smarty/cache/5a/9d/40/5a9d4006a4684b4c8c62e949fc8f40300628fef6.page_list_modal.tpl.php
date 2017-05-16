<?php /*%%SmartyHeaderCode:1657073309580dd325889859-10632900%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5a9d4006a4684b4c8c62e949fc8f40300628fef6' => 
    array (
      0 => '/var/www/public/carpedmfashion.com/core/config/../../app/themes/cpanel/page/ajax/page_list_modal.tpl',
      1 => 1469707231,
      2 => 'extends',
    ),
  ),
  'nocache_hash' => '1657073309580dd325889859-10632900',
  'variables' => 
  array (
    'pageList' => 0,
    'global_site_modal_window_new_navigation_item_page_list' => 0,
    'pagination_info' => 0,
    'global_alert_please_wait' => 0,
    'limit' => 0,
    'keywords' => 0,
    'pagination' => 0,
    'global_pages_table_header_background_image' => 0,
    'global_pages_label_page_name' => 0,
    'global_pages_table_header_owner' => 0,
    'global_pages_table_header_last_modified' => 0,
    'global_catalog_table_header_add' => 0,
    'item' => 0,
    'global_form_button_add_selections' => 0,
    'global_form_button_close' => 0,
    'global_alert_info' => 0,
    'global_pages_empty_list' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_580dd325a3e4c2_31197486',
  'cache_lifetime' => 120,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_580dd325a3e4c2_31197486')) {function content_580dd325a3e4c2_31197486($_smarty_tpl) {?><style>
    #modal-lyr {
        position: relative;
    }
    #ow {
        position: relative;
        min-height: 577px;
        z-index: 100;
    }
    #messenger {
        display: none;
        margin: 15px 0 0 0;
    }
    .ovl {
        background: rgba(0,0,0,.8);
        display: none;
        position: absolute;
        top: 0;
        left: 0;
        bottom: 0;
        right: 0;
        z-index: 9999;
    }
    .ovl p.txt {
        margin: 300px auto 0 auto;
        font-size: 3em;
        letter-spacing: .1em;
        text-align: center;
        color: #fff;
    }
</style>
<div id="modal-lyr">
    <div class="row">
        <div class="col-lg-12 col-sm-12 col-xs-12">
                            <div class="panel panel-default">
                    <div class="panel-heading ui-draggable-handle">
                        <h3 class="panel-title">
                            Zoznam stránok&nbsp;&nbsp;
                            <span style="background:#000;position: relative;top: -1px;left: 5px;padding: 7px 11px;font-size: .8em;color:#fff;border-radius: 9px;">Zobrazených 1-10 z 6 záznamov</span>
                        </h3>
                        <div id="messenger" class="alert pull-right" role="alert"><!-- --></div>
                    </div>
                    <div id="ow" class="panel-body panel-body-table panel-body-form">
                        <div class="ovl row">
                            <div class="col-lg-12 col-sm-12 col-xs-12">
                                <p class="txt">Prosím počkajte...</p>
                            </div>
                        </div>
                        <div class="row">
                          <div class="col-lg-12" style="padding:15px 10px;">
                              <div class="form-group pull-left" style="width:150px;margin-right:5px;">
                                <select id="c-control" class="form-control select">
                                    <option value="0">Vyberte...</option>
                                    <option value="99">
                                        Oznažiť všetko
                                    </option>
                                    <option value="88">
                                        Odznažiť všetko
                                    </option>
                                </select>
                              </div><!-- end form-group -->
                              <div class="form-group pull-left" style="width:80px;margin-right:5px;">
                                  <select id="perPage" class="form-control select">
                                      <option value="10" selected>10</option>
                                      <option value="20" >20</option>
                                      <option value="50" >50</option>
                                      <option value="100" >100</option>
                                      <option value="200" >200</option>
                                      <option value="500" >500</option>
                                  </select>
                              </div>
                              <div class="form-group pull-left" style="width:400px;margin-right:5px;">
                                  <div class="input-group">
                                      <input type="text" id="m-search" value="" placeholder="Hladať" class="form-control">
                                      <span class="input-group-btn">
                                          <button type="button" class="btn btn-default btn-s-send">
                                              <i class="fa fa-search"></i>
                                          </button>
                                      </span>
                                  </div>
                              </div>
                              <ul class="pagination pagination-sm pull-right"><li class="disabled"><a href="#" onclick="return false;" data-page="0" data-limit="10"><i class="fa fa-angle-left"></i></a></li><li class="active"><a href="#" onclick="return false;" data-page="1" data-limit="10">1</a></li><li class="disabled"><a href="#" onclick="return false;" data-page="2" data-limit="10"><i class="fa fa-angle-right"></i></a></li></ul>
                            </div><!-- end col -->
                        </div><!-- end row -->
                        <div class="table-responsive" style="border-top:1px solid #E5E5E5;">
                            <table id="addOnPageList" class="table table-bordered table-striped table-actions">
                                <thead>
                                    <tr>
                                        <th width="40" class="text-center">
                                            #
                                        </th>
                                        <th width="70" class="text-center">
                                            OBRÁZOK POZADIA STRÁNKY                                        </th>
                                        <th class="text-left">
                                           NÁZOV STRÁNKY                                        </th>
                                        <th width="200" class="text-center">
                                            VLASTNÍK                                        </th>
                                        <th width="100" class="text-center">
                                            POSLEDNÁ ZMENA                                        </th>
                                        <th width="110" class="text-center">
                                            PRIDAŤ                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                                                            <tr>
                                            <td class="text-center">
                                              <input type="checkbox" name="on" value="1">
                                            </td>
                                            <td class="text-center">
                                                                                                    <span style="font-size:1.4em;color:red;">
                                                        <i class="glyphicon glyphicon-eye-open"></i>
                                                    </span>
                                                                                            </td>
                                            <td class="text-left">
                                                Tabuľka veľkost&iacute;
                                            </td>
                                            <td class="text-left">
                                                Henrich&nbsp;Barkoczy
                                            </td>
                                            <td class="text-center">
                                                19-08-2016
                                            </td>
                                            <td class="text-center">
                                                <button type="button" data-page-id="1" class="btn btn-success push-a">
                                                    &nbsp;&nbsp;<span class="fa fa-plus-square"></span>
                                                </button>
                                            </td>
                                        </tr>
                                                                            <tr>
                                            <td class="text-center">
                                              <input type="checkbox" name="on" value="10">
                                            </td>
                                            <td class="text-center">
                                                                                                    <span style="font-size:1.4em;color:red;">
                                                        <i class="glyphicon glyphicon-eye-open"></i>
                                                    </span>
                                                                                            </td>
                                            <td class="text-left">
                                                Dodacie podmienky
                                            </td>
                                            <td class="text-left">
                                                Alexander&nbsp;Kernasevic
                                            </td>
                                            <td class="text-center">
                                                19-08-2016
                                            </td>
                                            <td class="text-center">
                                                <button type="button" data-page-id="10" class="btn btn-success push-a">
                                                    &nbsp;&nbsp;<span class="fa fa-plus-square"></span>
                                                </button>
                                            </td>
                                        </tr>
                                                                            <tr>
                                            <td class="text-center">
                                              <input type="checkbox" name="on" value="11">
                                            </td>
                                            <td class="text-center">
                                                                                                    <span style="font-size:1.4em;color:red;">
                                                        <i class="glyphicon glyphicon-eye-open"></i>
                                                    </span>
                                                                                            </td>
                                            <td class="text-left">
                                                Kontakty
                                            </td>
                                            <td class="text-left">
                                                Alexander&nbsp;Kernasevic
                                            </td>
                                            <td class="text-center">
                                                28-09-2016
                                            </td>
                                            <td class="text-center">
                                                <button type="button" data-page-id="11" class="btn btn-success push-a">
                                                    &nbsp;&nbsp;<span class="fa fa-plus-square"></span>
                                                </button>
                                            </td>
                                        </tr>
                                                                            <tr>
                                            <td class="text-center">
                                              <input type="checkbox" name="on" value="12">
                                            </td>
                                            <td class="text-center">
                                                                                                    <span style="font-size:1.4em;color:red;">
                                                        <i class="glyphicon glyphicon-eye-open"></i>
                                                    </span>
                                                                                            </td>
                                            <td class="text-left">
                                                V&scaron;eobecn&eacute; obchodn&eacute; podmienky
                                            </td>
                                            <td class="text-left">
                                                Alexander&nbsp;Kernasevic
                                            </td>
                                            <td class="text-center">
                                                30-08-2016
                                            </td>
                                            <td class="text-center">
                                                <button type="button" data-page-id="12" class="btn btn-success push-a">
                                                    &nbsp;&nbsp;<span class="fa fa-plus-square"></span>
                                                </button>
                                            </td>
                                        </tr>
                                                                            <tr>
                                            <td class="text-center">
                                              <input type="checkbox" name="on" value="13">
                                            </td>
                                            <td class="text-center">
                                                                                                    <span style="font-size:1.4em;color:red;">
                                                        <i class="glyphicon glyphicon-eye-open"></i>
                                                    </span>
                                                                                            </td>
                                            <td class="text-left">
                                                O n&aacute;s
                                            </td>
                                            <td class="text-left">
                                                Alexander&nbsp;Kernasevic
                                            </td>
                                            <td class="text-center">
                                                21-09-2016
                                            </td>
                                            <td class="text-center">
                                                <button type="button" data-page-id="13" class="btn btn-success push-a">
                                                    &nbsp;&nbsp;<span class="fa fa-plus-square"></span>
                                                </button>
                                            </td>
                                        </tr>
                                                                            <tr>
                                            <td class="text-center">
                                              <input type="checkbox" name="on" value="14">
                                            </td>
                                            <td class="text-center">
                                                                                                    <span style="font-size:1.4em;color:red;">
                                                        <i class="glyphicon glyphicon-eye-open"></i>
                                                    </span>
                                                                                            </td>
                                            <td class="text-left">
                                                Z&aacute;ruka a reklamačn&yacute; poriadok
                                            </td>
                                            <td class="text-left">
                                                Alexander&nbsp;Kernasevic
                                            </td>
                                            <td class="text-center">
                                                19-08-2016
                                            </td>
                                            <td class="text-center">
                                                <button type="button" data-page-id="14" class="btn btn-success push-a">
                                                    &nbsp;&nbsp;<span class="fa fa-plus-square"></span>
                                                </button>
                                            </td>
                                        </tr>
                                                                    </tbody>
                             </table>
                        </div><!-- end table-responsive -->
                    </div><!-- end panel-body -->
                    <div class="panel-footer">
                        <button type="button" id="addSelections" class="btn btn-success">
                            PRIDAŤ VÝBER                        </button>
                        <button type="button" class="btn btn-default" data-dismiss="modal">
                            ZAVRIEŤ                        </button>
                    </div><!-- end panel-footer -->
                </div><!-- end panel -->
                    </div><!-- end col -->
    </div><!-- end row -->
</div><!-- end modal-lyr -->
<script>
    $(function() {
        if ($(".select").length > 0) {
            $(".select").selectpicker();

            $(".select").on("change", function () {
                if ($(this).val() == "" || null === $(this).val()) {
                    if (!$(this).attr("multiple"))
                        $(this).val("").find("option").removeAttr("selected").prop("selected", false);
                } else {
                    $(this).find("option[value=" + $(this).val() + "]").attr("selected", true);
                }
            });
        }
    });
</script><?php }} ?>
