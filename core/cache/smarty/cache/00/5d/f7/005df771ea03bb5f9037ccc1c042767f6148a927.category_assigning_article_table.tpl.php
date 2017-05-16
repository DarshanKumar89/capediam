<?php /*%%SmartyHeaderCode:115725689357e0d5ae057d18-79570593%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '005df771ea03bb5f9037ccc1c042767f6148a927' => 
    array (
      0 => '/var/www/public/carpedmfashion.com/core/config/../../app/themes/cpanel/store/catalog/category/ajax/category_assigning_article_table.tpl',
      1 => 1469707240,
      2 => 'extends',
    ),
  ),
  'nocache_hash' => '115725689357e0d5ae057d18-79570593',
  'variables' => 
  array (
    'categoryId' => 0,
    'store_categories_form_assigning_articles_title' => 0,
    'articleListCL' => 0,
    'total' => 0,
    'numberOfLastOrder' => 0,
    'pagination_info' => 0,
    'totalOrder' => 0,
    'totalNotOrder' => 0,
    'keywords' => 0,
    'limit' => 0,
    'pagination' => 0,
    'store_articles_table_header_picture' => 0,
    'store_articles_table_header_sku' => 0,
    'store_articles_table_header_article_name' => 0,
    'global_pages_table_header_order' => 0,
    'global_gallery_table_header_remove' => 0,
    'i' => 0,
    'item' => 0,
    'global_alert_info' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_57e0d5ae209452_87107280',
  'cache_lifetime' => 120,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57e0d5ae209452_87107280')) {function content_57e0d5ae209452_87107280($_smarty_tpl) {?><form id="caal-form" action="cpanel/store-delete-article-list-from-category" method="post" role="form">
    <input type="hidden" name="category-id" value="76"/>
    <div class="panel panel-default">
      <div class="panel-heading ui-draggable-handle">
          <h3 class="panel-title">
            KATEGÓRIA - ZOZNAM ARTIKLOV                          <span class="btn btn-info" style="margin: 0 15px;">7</span>
              <span class="btn btn-warning" style="margin: 0 15px;">0</span>
              <span class="badge">Zobrazených 1-10 z 7 záznamov</span>
              <span class="badge">0&nbsp;Zotriedených záznamov</span>
              <span class="badge">7&nbsp;Nezotriedených záznamov</span>
                      </h3>
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
                      </div>
                      <div class="form-group pull-left" style="width:80px;margin-right:5px;">
                          <select class="form-control select" onchange="location = 'cpanel/store-category-assigning-article-form/76/1/'+this.options[this.selectedIndex].value+'?q=';">
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
                              <input type="text" id="search" value="" placeholder="Hladať" class="form-control">
                              <span class="input-group-btn">
                                  <button type="button" onclick="location = 'cpanel/store-category-assigning-article-form/76/1/10?q='+document.getElementById('search').value;" class="btn btn-default">
                                      <i class="fa fa-search"></i>
                                  </button>
                              </span>
                          </div>
                      </div>
                      <ul class="pagination pagination-sm pull-right"><li class="disabled"><a href="cpanel/store-category-assigning-article-form/76/0/10"onclick="return false;"><i class="fa fa-angle-left"></i></a></li><li class="active"><a href="cpanel/store-category-assigning-article-form/76/1/10">1</a></li><li class="disabled"><a href="cpanel/store-category-assigning-article-form/76/2/10"onclick="return false;"><i class="fa fa-angle-right"></i></a></li></ul>
                  </div>
              </div><!-- end row -->
              <div class="table-responsive" style="border-top:1px solid #E5E5E5;">
                  <table id="assigningArticleList" class="table table-bordered table-striped table-actions">
                      <thead>
                          <tr>
                              <th width="70" class="text-center">
                                  #
                              </th>
                              <th width="30" class="text-center">
                                  OBRÁZOK                              </th>
                              <th width="200" class="text-center">
                                  SKU                              </th>
                              <th class="text-left">
                                  NÁZOV ARTIKLU                              </th>
                              <th class="text-center" width="150">
                                PORADIE                              </th>
                              <th width="100" class="text-center">
                                  ODSTRÁNIŤ                              </th>
                          </tr>
                      </thead>
                      <tbody>
                                                        <tr>
                                  <td class="text-center">
                                      <input type="hidden" name="articleList[0]['article-id']" value="277"/>
                                      <input type="checkbox" name="articleList[0]['on']" value="1">
                                  </td>
                                  <td class="text-center">
                                                                                <img src="/files/86d566b06d54e41add3b5ce53b6b0ba3.jpg" height="35" alt="DSC07583_u2"/>
                                                                        </td>
                                  <td class="text-center">
                                      100277
                                  </td>
                                  <td class="text-left">
                                      INITIALS T-SHIRT
                                  </td>
                                  <td class="text-center">
                                    <div class="form-group pull-right" style="width:150px;">
                                        <div id="ig-info" class="input-group">                                            
                                            <span class="input-group-addon">
                                                <i class="fa fa-sort-numeric-desc"></i>
                                            </span>
                                            <input type="text"  name="articleList[0]['position']" value="0" min="1" class="form-control text-right">
                                        </div>
                                    </div>
                                </td>
                                  <td class="text-center">
                                      <button type="button" data-article-id="277" class="btn btn-danger push-x">
                                          &nbsp;&nbsp;<span class="fa fa-minus"></span>
                                      </button>
                                  </td>
                              </tr>
                                                        <tr>
                                  <td class="text-center">
                                      <input type="hidden" name="articleList[1]['article-id']" value="286"/>
                                      <input type="checkbox" name="articleList[1]['on']" value="1">
                                  </td>
                                  <td class="text-center">
                                                                                <img src="/files/1199aa1ad04b7fd726220e56a194b0d2.jpg" height="35" alt="INITIALS_FAY_IN_BLUE_FRONT_4"/>
                                                                        </td>
                                  <td class="text-center">
                                      100286
                                  </td>
                                  <td class="text-left">
                                      INITIALS FAY IN
                                  </td>
                                  <td class="text-center">
                                    <div class="form-group pull-right" style="width:150px;">
                                        <div id="ig-info" class="input-group">                                            
                                            <span class="input-group-addon">
                                                <i class="fa fa-sort-numeric-desc"></i>
                                            </span>
                                            <input type="text"  name="articleList[1]['position']" value="0" min="1" class="form-control text-right">
                                        </div>
                                    </div>
                                </td>
                                  <td class="text-center">
                                      <button type="button" data-article-id="286" class="btn btn-danger push-x">
                                          &nbsp;&nbsp;<span class="fa fa-minus"></span>
                                      </button>
                                  </td>
                              </tr>
                                                        <tr>
                                  <td class="text-center">
                                      <input type="hidden" name="articleList[2]['article-id']" value="291"/>
                                      <input type="checkbox" name="articleList[2]['on']" value="1">
                                  </td>
                                  <td class="text-center">
                                                                                <img src="/files/db6c7b3724c762eeebeec9cc2d3996b8.jpg" height="35" alt="DSC07680_u2"/>
                                                                        </td>
                                  <td class="text-center">
                                      100287
                                  </td>
                                  <td class="text-left">
                                      INITIALS SWAN
                                  </td>
                                  <td class="text-center">
                                    <div class="form-group pull-right" style="width:150px;">
                                        <div id="ig-info" class="input-group">                                            
                                            <span class="input-group-addon">
                                                <i class="fa fa-sort-numeric-desc"></i>
                                            </span>
                                            <input type="text"  name="articleList[2]['position']" value="0" min="1" class="form-control text-right">
                                        </div>
                                    </div>
                                </td>
                                  <td class="text-center">
                                      <button type="button" data-article-id="291" class="btn btn-danger push-x">
                                          &nbsp;&nbsp;<span class="fa fa-minus"></span>
                                      </button>
                                  </td>
                              </tr>
                                                        <tr>
                                  <td class="text-center">
                                      <input type="hidden" name="articleList[3]['article-id']" value="293"/>
                                      <input type="checkbox" name="articleList[3]['on']" value="1">
                                  </td>
                                  <td class="text-center">
                                                                                <img src="/files/dedda9190404eb508f73d438cfbb0c9b.jpg" height="35" alt="DSC07758_u2"/>
                                                                        </td>
                                  <td class="text-center">
                                      100288
                                  </td>
                                  <td class="text-left">
                                      INITIALS ASYMETRIC HOODIE
                                  </td>
                                  <td class="text-center">
                                    <div class="form-group pull-right" style="width:150px;">
                                        <div id="ig-info" class="input-group">                                            
                                            <span class="input-group-addon">
                                                <i class="fa fa-sort-numeric-desc"></i>
                                            </span>
                                            <input type="text"  name="articleList[3]['position']" value="0" min="1" class="form-control text-right">
                                        </div>
                                    </div>
                                </td>
                                  <td class="text-center">
                                      <button type="button" data-article-id="293" class="btn btn-danger push-x">
                                          &nbsp;&nbsp;<span class="fa fa-minus"></span>
                                      </button>
                                  </td>
                              </tr>
                                                        <tr>
                                  <td class="text-center">
                                      <input type="hidden" name="articleList[4]['article-id']" value="294"/>
                                      <input type="checkbox" name="articleList[4]['on']" value="1">
                                  </td>
                                  <td class="text-center">
                                                                                <img src="/files/10d60e39b0f03a429094757302796a3a.jpg" height="35" alt="INITIALS_BASIC_FRONT"/>
                                                                        </td>
                                  <td class="text-center">
                                      100289
                                  </td>
                                  <td class="text-left">
                                      INITIALS BASIC
                                  </td>
                                  <td class="text-center">
                                    <div class="form-group pull-right" style="width:150px;">
                                        <div id="ig-info" class="input-group">                                            
                                            <span class="input-group-addon">
                                                <i class="fa fa-sort-numeric-desc"></i>
                                            </span>
                                            <input type="text"  name="articleList[4]['position']" value="0" min="1" class="form-control text-right">
                                        </div>
                                    </div>
                                </td>
                                  <td class="text-center">
                                      <button type="button" data-article-id="294" class="btn btn-danger push-x">
                                          &nbsp;&nbsp;<span class="fa fa-minus"></span>
                                      </button>
                                  </td>
                              </tr>
                                                        <tr>
                                  <td class="text-center">
                                      <input type="hidden" name="articleList[5]['article-id']" value="295"/>
                                      <input type="checkbox" name="articleList[5]['on']" value="1">
                                  </td>
                                  <td class="text-center">
                                                                                <img src="/files/29a74dd4450109ea8b0859c9b6fe04af.jpg" height="35" alt="DSC07696_u2"/>
                                                                        </td>
                                  <td class="text-center">
                                      100290
                                  </td>
                                  <td class="text-left">
                                      INITIALS FLOW HOODIE
                                  </td>
                                  <td class="text-center">
                                    <div class="form-group pull-right" style="width:150px;">
                                        <div id="ig-info" class="input-group">                                            
                                            <span class="input-group-addon">
                                                <i class="fa fa-sort-numeric-desc"></i>
                                            </span>
                                            <input type="text"  name="articleList[5]['position']" value="0" min="1" class="form-control text-right">
                                        </div>
                                    </div>
                                </td>
                                  <td class="text-center">
                                      <button type="button" data-article-id="295" class="btn btn-danger push-x">
                                          &nbsp;&nbsp;<span class="fa fa-minus"></span>
                                      </button>
                                  </td>
                              </tr>
                                                        <tr>
                                  <td class="text-center">
                                      <input type="hidden" name="articleList[6]['article-id']" value="278"/>
                                      <input type="checkbox" name="articleList[6]['on']" value="1">
                                  </td>
                                  <td class="text-center">
                                                                                <img src="/files/261092c0e1796069b9c02cfce6539168.jpg" height="35" alt="DSC07769_u2"/>
                                                                        </td>
                                  <td class="text-center">
                                      100278
                                  </td>
                                  <td class="text-left">
                                      INITIALS TANK
                                  </td>
                                  <td class="text-center">
                                    <div class="form-group pull-right" style="width:150px;">
                                        <div id="ig-info" class="input-group">                                            
                                            <span class="input-group-addon">
                                                <i class="fa fa-sort-numeric-desc"></i>
                                            </span>
                                            <input type="text"  name="articleList[6]['position']" value="0" min="1" class="form-control text-right">
                                        </div>
                                    </div>
                                </td>
                                  <td class="text-center">
                                      <button type="button" data-article-id="278" class="btn btn-danger push-x">
                                          &nbsp;&nbsp;<span class="fa fa-minus"></span>
                                      </button>
                                  </td>
                              </tr>
                                                </tbody>
                  </table>
              </div><!-- end table-responsive -->
                </div><!-- end panel-body -->
              <div class="panel-footer">
          <button type="submit" class="btn btn-danger pull-left">
            <i class="fa fa-times"></i>&nbsp;
            VYMAZAŤ VÝBER
          </button>
          <button type="button" id="btn-order-update" class="btn btn-info pull-right">
            <i class="fa fa-sort-numeric-asc"></i>
            &nbsp;ULOŽIŤ ZORADENIE
          </button>
        </div><!-- end panel-footer -->
        </div><!-- end panel -->
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
