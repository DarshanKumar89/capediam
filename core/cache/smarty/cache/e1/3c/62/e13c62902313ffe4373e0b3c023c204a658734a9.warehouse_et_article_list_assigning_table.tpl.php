<?php /*%%SmartyHeaderCode:72961434458510c700c5659-71525458%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e13c62902313ffe4373e0b3c023c204a658734a9' => 
    array (
      0 => '/var/www/public/carpedmfashion.com/core/config/../../app/themes/cpanel/store/warehouses/ajax/warehouse_et_article_list_assigning_table.tpl',
      1 => 1469707251,
      2 => 'extends',
    ),
  ),
  'nocache_hash' => '72961434458510c700c5659-71525458',
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
  'unifunc' => 'content_58510c70373e53_73297819',
  'cache_lifetime' => 120,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58510c70373e53_73297819')) {function content_58510c70373e53_73297819($_smarty_tpl) {?><form action="cpanel/update-warehouse-expedition-time-al" method="post" role="form">
  <input type="hidden" name="whEtId" value="2"/>
  <input type="hidden" name="sort" value="0"/>
  <input type="hidden" name="page" value="1"/>
  <input type="hidden" name="limit" value="10"/>
  <input type="hidden" name="keywords" value="poor"/>
  <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
    <div class="panel panel-default">
      <div class="panel-heading ui-draggable-handle">
        <h3 class="panel-title">
          <span class="btn btn-info" style="margin: 0 15px;">224</span>
          ZOZNAM ARTIKLOV          &nbsp;<span class="badge">Zobrazených 1-10 z 224 záznamov</span>        </h3>
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
                <select class="form-control select" onchange="location = 'cpanel/warehouse-expedition-time-assign-article/2c16f1ef5d2af438a8dce841743a194f/2/'+this.options[this.selectedIndex].value+'/1/10'+'?q=poor';">
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
                <select class="form-control select" onchange="location = 'cpanel/warehouse-expedition-time-assign-article/2c16f1ef5d2af438a8dce841743a194f/2/0/1/'+this.options[this.selectedIndex].value+'?q=poor';">
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
                  <input type="text" id="search" value="poor" placeholder="Hladať" class="form-control">
                    <span class="input-group-btn">
                        <button type="button" onclick="location = 'cpanel/warehouse-expedition-time-assign-article/2c16f1ef5d2af438a8dce841743a194f/2/0/1/10?q='+document.getElementById('search').value;" class="btn btn-default">
                          <i class="fa fa-search"></i>
                        </button>
                    </span>
                </div>
              </div>
              <ul class="pagination pagination-sm pull-right"><li class="disabled"><a href="cpanel/warehouse-expedition-time-assign-article/2c16f1ef5d2af438a8dce841743a194f/2/0/0/10?q=poor"onclick="return false;"><i class="fa fa-angle-left"></i></a></li><li class="active"><a href="cpanel/warehouse-expedition-time-assign-article/2c16f1ef5d2af438a8dce841743a194f/2/0/1/10?q=poor">1</a></li><li class=""><a href="cpanel/warehouse-expedition-time-assign-article/2c16f1ef5d2af438a8dce841743a194f/2/0/2/10?q=poor">2</a></li><li class=""><a href="cpanel/warehouse-expedition-time-assign-article/2c16f1ef5d2af438a8dce841743a194f/2/0/3/10?q=poor">3</a></li><li class=""><a href="cpanel/warehouse-expedition-time-assign-article/2c16f1ef5d2af438a8dce841743a194f/2/0/4/10?q=poor">4</a></li><li class=""><a href="cpanel/warehouse-expedition-time-assign-article/2c16f1ef5d2af438a8dce841743a194f/2/0/5/10?q=poor">5</a></li><li class=""><a href="cpanel/warehouse-expedition-time-assign-article/2c16f1ef5d2af438a8dce841743a194f/2/0/6/10?q=poor">6</a></li><li class="disabled"><span>...</span></li><li><a href="cpanel/warehouse-expedition-time-assign-article/2c16f1ef5d2af438a8dce841743a194f/2/0/23/10?q=poor">23</a></li><li class=""><a href="cpanel/warehouse-expedition-time-assign-article/2c16f1ef5d2af438a8dce841743a194f/2/0/2/10?q=poor"><i class="fa fa-angle-right"></i></a></li></ul>
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
                      <input type="hidden" name="whETAL[0]['article-id']" value="321"/>
                      <input type="checkbox" name="whETAL[0]['on']" value="321" class="x-remove x-cb">
                    </td>
                    <td class="text-center">
                                              <img src="/files/0b25ede73eb07ae5cb5b8ab16b380e92.jpg" height="35" alt="poor man5"/>
                                          </td>
                    <td class="text-center">
                      <strong>100315</strong>
                    </td>
                    <td class="text-left">
                      POOR MAN
                    </td>
                    <td class="text-center">
                      <button type="button" data-article-id="321" class="btn btn-danger push-x">
                        &nbsp;&nbsp;<span class="fa fa-minus"></span>
                      </button>
                    </td>
                  </tr>
                                  <tr>
                    <td class="text-center">
                      <input type="hidden" name="whETAL[1]['article-id']" value="353"/>
                      <input type="checkbox" name="whETAL[1]['on']" value="353" class="x-remove x-cb">
                    </td>
                    <td class="text-center">
                                              <span style="font-size:1.4em;color:red;">
                          <i class="glyphicon glyphicon-eye-open"></i>
                        </span>
                                          </td>
                    <td class="text-center">
                      <strong>100347</strong>
                    </td>
                    <td class="text-left">
                      POOR WOMAN PANTS
                    </td>
                    <td class="text-center">
                      <button type="button" data-article-id="353" class="btn btn-danger push-x">
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
