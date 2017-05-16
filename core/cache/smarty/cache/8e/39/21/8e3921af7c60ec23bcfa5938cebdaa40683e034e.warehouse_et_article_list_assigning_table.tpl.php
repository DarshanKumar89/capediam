<?php /*%%SmartyHeaderCode:119278779357397be7904191-82366391%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8e3921af7c60ec23bcfa5938cebdaa40683e034e' => 
    array (
      0 => '/Users/henrich/Work/SlatyFork/carpedm.mozayc.net/core/config/../../app/themes/cpanel/store/warehouses/ajax/warehouse_et_article_list_assigning_table.tpl',
      1 => 1463232367,
      2 => 'extends',
    ),
  ),
  'nocache_hash' => '119278779357397be7904191-82366391',
  'variables' => 
  array (
    'whET' => 0,
    'sort' => 0,
    'page' => 0,
    'limit' => 0,
    'keywords' => 0,
    'total' => 0,
    'global_label_article_list' => 0,
    'whETAL' => 0,
    'pagination_info' => 0,
    'wh' => 0,
    'pagination' => 0,
    'store_articles_table_header_picture' => 0,
    'store_articles_table_header_sku' => 0,
    'store_articles_table_header_article_name' => 0,
    'global_gallery_table_header_remove' => 0,
    'i' => 0,
    'item' => 0,
    'global_alert_info' => 0,
    'store_warehouse_info_not_any_article' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_57397be7981273_21227182',
  'cache_lifetime' => 120,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57397be7981273_21227182')) {function content_57397be7981273_21227182($_smarty_tpl) {?><form action="cpanel/update-warehouse-expedition-time-al" method="post" role="form">
  <input type="hidden" name="whEtId" value="1"/>
  <input type="hidden" name="sort" value="0"/>
  <input type="hidden" name="page" value="1"/>
  <input type="hidden" name="limit" value="10"/>
  <input type="hidden" name="keywords" value="MARVEL SNAKE"/>
  <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
    <div class="panel panel-default">
      <div class="panel-heading ui-draggable-handle">
        <h3 class="panel-title">
          <span class="btn btn-info" style="margin: 0 15px;">1</span>
          ZOZNAM ARTIKLOV          &nbsp;<span class="badge">Zobrazených 1-10 z 1 záznamov</span>        </h3>
        <ul class="panel-controls">
          <li>
            <a href="#" onclick="return false;" id="a-o-a-l" title="Article List">
              <span class="fa fa-plus"></span>
            </a>
          </li>
          <li>
            <a href="#" onclick="return false;" class="panel-collapse">
              <span class="fa fa-angle-down"></span>
            </a>
          </li>
        </ul>
      </div><!-- end panel-heading -->
      <div class="panel-body panel-body-table">
                  <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="padding:15px 10px;">
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
              </div>
              <div class="form-group pull-left" style="width:280px;margin-right:5px;">
                <select class="form-control select" onchange="location = 'cpanel/warehouse-expedition-time-assign-article/2c16f1ef5d2af438a8dce841743a194f/1/'+this.options[this.selectedIndex].value+'/1/10'+'?q=MARVEL SNAKE';">
                  <option value="0" selected>Možnosťi zoradenia...</option>
                  <option value="1" >Názov produktu: od A po Z</option>
                  <option value="2" >Názov produktu: od Z po A</option>
                  <option value="3" >Ceny: od najnižšej</option>
                  <option value="4" >Ceny: od najvyššej</option>
                  <option value="5" >Pridané produkty: vzostupne</option>
                  <option value="6" >Pridané produkty: zostupne</option>
                  <option value="7" >Naposledy aktualizované: vzostupne</option>
                  <option value="8" >Naposledy aktualizované: zostupne</option>
                </select>
              </div><!-- end form-group -->
              <div class="form-group pull-left" style="width:80px;margin-right:5px;">
                <select class="form-control select" onchange="location = 'cpanel/warehouse-expedition-time-assign-article/2c16f1ef5d2af438a8dce841743a194f/1/0/1/'+this.options[this.selectedIndex].value+'?q=MARVEL SNAKE';">
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
                  <input type="text" id="search" value="MARVEL SNAKE" placeholder="Hladať" class="form-control">
                    <span class="input-group-btn">
                        <button type="button" onclick="location = 'cpanel/warehouse-expedition-time-assign-article/2c16f1ef5d2af438a8dce841743a194f/1/0/1/10?q='+document.getElementById('search').value;" class="btn btn-default">
                          <i class="fa fa-search"></i>
                        </button>
                    </span>
                </div>
              </div>
              <ul class="pagination pagination-sm pull-right"><li class="disabled"><a href="cpanel/warehouse-expedition-time-assign-article/2c16f1ef5d2af438a8dce841743a194f/1/0/0/10?q=MARVEL SNAKE"onclick="return false;"><i class="fa fa-angle-left"></i></a></li><li class="active"><a href="cpanel/warehouse-expedition-time-assign-article/2c16f1ef5d2af438a8dce841743a194f/1/0/1/10?q=MARVEL SNAKE">1</a></li><li class="disabled"><a href="cpanel/warehouse-expedition-time-assign-article/2c16f1ef5d2af438a8dce841743a194f/1/0/2/10?q=MARVEL SNAKE"onclick="return false;"><i class="fa fa-angle-right"></i></a></li></ul>
            </div><!-- end col -->
          </div><!-- end row -->
          <div class="table-responsive" style="border-top:1px solid #E5E5E5;">
            <table id="whETAL" class="table table-bordered table-striped table-actions">
              <thead>
                <tr>
                  <th width="30" class="text-center">
                    #
                  </th>
                  <th width="30" class="text-center">
                    OBRÁZOK                  </th>
                  <th width="200" class="text-center">
                    SKU                  </th>
                  <th class="text-left" style="min-width: 300px;">
                    NÁZOV ARTIKLU                  </th>
                  <th width="100" class="text-center">
                    ODSTRÁNIŤ                  </th>
                </tr>
              </thead>
              <tbody>
                                  <tr>
                    <td class="text-center">
                      <input type="hidden" name="whETAL[0]['article-id']" value="200"/>
                      <input type="checkbox" name="whETAL[0]['on']" value="200" class="x-remove x-cb">
                    </td>
                    <td class="text-center">
                                              <img src="/files/5f94bbf9c0d3a907f5bcb0cdf578aae0.jpg" height="35" alt="DSC06454_u"/>
                                          </td>
                    <td class="text-center">
                      <strong>100201</strong>
                    </td>
                    <td class="text-left">
                      MARVEL SNAKE
                    </td>
                    <td class="text-center">
                      <button type="button" data-article-id="200" class="btn btn-danger push-x">
                        &nbsp;&nbsp;<span class="fa fa-minus"></span>
                      </button>
                    </td>
                  </tr>
                              </tbody>
            </table>
          </div><!-- end table-responsive -->
              </div><!-- end panel-body -->
              <div class="panel-footer">
          <button type="button" id="delete-saa" class="btn btn-danger" style="margin-right: 15px;">
            <i class="fa fa-times"></i>&nbsp;
            VYMAZAŤ OZNAČENÉ ARTIKLE
          </button>
          <button type="button" id="delete-aaa"class="btn btn-danger">
            <i class="fa fa-exclamation-triangle"></i>&nbsp;
            VYMAZAŤ VŠETKY ARTIKLE
          </button>
        </div><!-- end panel-footer -->
          </div><!-- end panel -->
  </div><!-- end col -->
</form>
<script>
$(function() {
  if($(".select").length > 0) {
    $(".select").selectpicker();

    $(".select").on("change", function () {
      if ($(this).val() == "" || null === $(this).val()) {
        if(!$(this).attr("multiple")) {
          $(this).val("").find("option").removeAttr("selected").prop("selected", false);
        }
      } else {
        $(this).find("option[value=" + $(this).val() + "]").attr("selected", true);
      }
    });
  }
});
</script><?php }} ?>
