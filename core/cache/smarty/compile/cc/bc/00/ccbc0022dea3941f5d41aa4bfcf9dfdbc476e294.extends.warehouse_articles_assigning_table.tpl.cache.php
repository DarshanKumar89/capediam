<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-05-11 13:07:01
         compiled from "/Users/henrich/Work/SlatyFork/carpedm.mozayc.net/core/config/../../app/themes/cpanel/store/warehouses/ajax/warehouse_articles_assigning_table.tpl" */ ?>
<?php /*%%SmartyHeaderCode:8658276057332e7593fe76-86691484%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
  ),
  'nocache_hash' => '8658276057332e7593fe76-86691484',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'data' => 0,
    'sort' => 0,
    'page' => 0,
    'limit' => 0,
    'keywords' => 0,
    'total' => 0,
    'global_label_article_list' => 0,
    'whAL' => 0,
    'pagination_info' => 0,
    'pagination' => 0,
    'store_articles_table_header_picture' => 0,
    'store_articles_table_header_sku' => 0,
    'store_articles_table_header_article_name' => 0,
    'store_articles_table_header_base_price' => 0,
    'store_articles_table_header_retail_price' => 0,
    'store_articles_table_header_qty' => 0,
    'store_articles_table_header_publish' => 0,
    'global_gallery_table_header_remove' => 0,
    'i' => 0,
    'item' => 0,
    'global_alert_info' => 0,
    'store_warehouse_info_not_any_article' => 0,
    'global_form_select_choose' => 0,
    'store_warehouse_submit_action' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_57332e759a3dd3_16253724',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57332e759a3dd3_16253724')) {function content_57332e759a3dd3_16253724($_smarty_tpl) {?><form action="cpanel/store-warehouse-update-article-list" method="post" role="form">
  <input type="hidden" name="whId" value="<?php echo $_smarty_tpl->tpl_vars['data']->value->id_wh;?>
"/>
  <input type="hidden" name="sort" value="<?php echo $_smarty_tpl->tpl_vars['sort']->value;?>
"/>
  <input type="hidden" name="page" value="<?php echo $_smarty_tpl->tpl_vars['page']->value;?>
"/>
  <input type="hidden" name="limit" value="<?php echo $_smarty_tpl->tpl_vars['limit']->value;?>
"/>
  <input type="hidden" name="keywords" value="<?php echo $_smarty_tpl->tpl_vars['keywords']->value;?>
"/>
  <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
    <div class="panel panel-default">
      <div class="panel-heading ui-draggable-handle">
        <h3 class="panel-title">
          <span class="btn btn-info" style="margin: 0 15px;"><?php echo $_smarty_tpl->tpl_vars['total']->value;?>
</span>
          <?php if (!empty($_smarty_tpl->tpl_vars['global_label_article_list']->value)) {
echo mb_strtoupper($_smarty_tpl->tpl_vars['global_label_article_list']->value, 'UTF-8');
} else { ?>ARTICLE LIST<?php }?>
          <?php if (is_array($_smarty_tpl->tpl_vars['whAL']->value)&&(count($_smarty_tpl->tpl_vars['whAL']->value)>0)) {?>&nbsp;<span class="badge"><?php echo $_smarty_tpl->tpl_vars['pagination_info']->value;?>
</span><?php }?>
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
        <?php if (is_array($_smarty_tpl->tpl_vars['whAL']->value)&&(count($_smarty_tpl->tpl_vars['whAL']->value)>0)) {?>
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
                <select class="form-control select" onchange="location = 'cpanel/store-warehouse-manage/<?php echo $_smarty_tpl->tpl_vars['data']->value->secure_key;?>
/'+this.options[this.selectedIndex].value+'/<?php echo $_smarty_tpl->tpl_vars['page']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['limit']->value;?>
'<?php if (strlen($_smarty_tpl->tpl_vars['keywords']->value)>0) {?>+'?q=<?php echo $_smarty_tpl->tpl_vars['keywords']->value;?>
'<?php }?>;">
                  <option value="0" <?php if ($_smarty_tpl->tpl_vars['sort']->value==0) {?>selected<?php }?>>Možnosťi zoradenia...</option>
                  <option value="1" <?php if ($_smarty_tpl->tpl_vars['sort']->value==1) {?>selected<?php }?>>Názov produktu: od A po Z</option>
                  <option value="2" <?php if ($_smarty_tpl->tpl_vars['sort']->value==2) {?>selected<?php }?>>Názov produktu: od Z po A</option>
                  <option value="3" <?php if ($_smarty_tpl->tpl_vars['sort']->value==3) {?>selected<?php }?>>Ceny: od najnižšej</option>
                  <option value="4" <?php if ($_smarty_tpl->tpl_vars['sort']->value==4) {?>selected<?php }?>>Ceny: od najvyššej</option>
                  <option value="5" <?php if ($_smarty_tpl->tpl_vars['sort']->value==5) {?>selected<?php }?>>Pridané produkty: vzostupne</option>
                  <option value="6" <?php if ($_smarty_tpl->tpl_vars['sort']->value==6) {?>selected<?php }?>>Pridané produkty: zostupne</option>
                  <option value="7" <?php if ($_smarty_tpl->tpl_vars['sort']->value==7) {?>selected<?php }?>>Naposledy aktualizované: vzostupne</option>
                  <option value="8" <?php if ($_smarty_tpl->tpl_vars['sort']->value==8) {?>selected<?php }?>>Naposledy aktualizované: zostupne</option>
                </select>
              </div><!-- end form-group -->
              <div class="form-group pull-left" style="width:80px;margin-right:5px;">
                <select class="form-control select" onchange="location = 'cpanel/store-warehouse-manage/<?php echo $_smarty_tpl->tpl_vars['data']->value->secure_key;?>
/<?php echo $_smarty_tpl->tpl_vars['sort']->value;?>
/1/'+this.options[this.selectedIndex].value<?php if (strlen($_smarty_tpl->tpl_vars['keywords']->value)>0) {?>+'?q=<?php echo $_smarty_tpl->tpl_vars['keywords']->value;?>
'<?php }?>;">
                  <option value="10" <?php if ($_smarty_tpl->tpl_vars['limit']->value==10) {?>selected<?php }?>>10</option>
                  <option value="20" <?php if ($_smarty_tpl->tpl_vars['limit']->value==20) {?>selected<?php }?>>20</option>
                  <option value="50" <?php if ($_smarty_tpl->tpl_vars['limit']->value==50) {?>selected<?php }?>>50</option>
                  <option value="100" <?php if ($_smarty_tpl->tpl_vars['limit']->value==100) {?>selected<?php }?>>100</option>
                  <option value="200" <?php if ($_smarty_tpl->tpl_vars['limit']->value==200) {?>selected<?php }?>>200</option>
                  <option value="500" <?php if ($_smarty_tpl->tpl_vars['limit']->value==500) {?>selected<?php }?>>500</option>
                </select>
              </div>
              <div class="form-group pull-left" style="width:400px;margin-right:5px;">
                <div class="input-group">
                  <input type="text" id="search" value="<?php if (strlen($_smarty_tpl->tpl_vars['keywords']->value)>0) {
echo $_smarty_tpl->tpl_vars['keywords']->value;
}?>" placeholder="Hladať" class="form-control">
                    <span class="input-group-btn">
                        <button type="button" onclick="location = 'cpanel/store-warehouse-manage/<?php echo $_smarty_tpl->tpl_vars['data']->value->secure_key;?>
/<?php echo $_smarty_tpl->tpl_vars['sort']->value;?>
/1/10?q='+document.getElementById('search').value;" class="btn btn-default">
                          <i class="fa fa-search"></i>
                        </button>
                    </span>
                </div>
              </div>
              <?php echo $_smarty_tpl->tpl_vars['pagination']->value;?>

            </div><!-- end col -->
          </div><!-- end row -->
          <div class="table-responsive" style="border-top:1px solid #E5E5E5;">
            <table id="whAL" class="table table-bordered table-striped table-actions">
              <thead>
                <tr>
                  <th width="30" class="text-center">
                    #
                  </th>
                  <th width="30" class="text-center">
                    <?php if (!empty($_smarty_tpl->tpl_vars['store_articles_table_header_picture']->value)) {
echo mb_strtoupper($_smarty_tpl->tpl_vars['store_articles_table_header_picture']->value, 'UTF-8');
} else { ?>IMAGE<?php }?>
                  </th>
                  <th width="200" class="text-center">
                    <?php if (!empty($_smarty_tpl->tpl_vars['store_articles_table_header_sku']->value)) {
echo mb_strtoupper($_smarty_tpl->tpl_vars['store_articles_table_header_sku']->value, 'UTF-8');
} else { ?>SKU<?php }?>
                  </th>
                  <th class="text-left" style="min-width: 300px;">
                    <?php if (!empty($_smarty_tpl->tpl_vars['store_articles_table_header_article_name']->value)) {
echo mb_strtoupper($_smarty_tpl->tpl_vars['store_articles_table_header_article_name']->value, 'UTF-8');
} else { ?>ARTICLE NAME<?php }?>
                  </th>
                  <th width="150" class="text-center">
                    RRP
                  </th>
                  <th width="150" class="text-center">
                    ROZDIEL
                  </th>
                  <th width="150" class="text-center">
                    <?php if (!empty($_smarty_tpl->tpl_vars['store_articles_table_header_base_price']->value)) {
echo mb_strtoupper($_smarty_tpl->tpl_vars['store_articles_table_header_base_price']->value, 'UTF-8');
} else { ?>RETAIL PRICE<?php }?>
                  </th>
                  <th width="150" class="text-center">
                    DAŇ
                  </th>
                  <th width="150" class="text-center">
                    <?php if (!empty($_smarty_tpl->tpl_vars['store_articles_table_header_retail_price']->value)) {
echo mb_strtoupper($_smarty_tpl->tpl_vars['store_articles_table_header_retail_price']->value, 'UTF-8');
} else { ?>RETAIL TAX PRICE<?php }?>
                  </th>
                  <th width="150" class="text-center">
                    <?php if (!empty($_smarty_tpl->tpl_vars['store_articles_table_header_qty']->value)) {
echo mb_strtoupper($_smarty_tpl->tpl_vars['store_articles_table_header_qty']->value, 'UTF-8');
} else { ?>QTY<?php }?>
                  </th>
                  <th width="150" class="text-center">
                    MATRICA
                  </th>
                  <th width="150" class="text-center">
                    EDITOVAŤ ARTIKEL
                  </th>
                  <th width="100" class="text-center">
                    <?php if (!empty($_smarty_tpl->tpl_vars['store_articles_table_header_publish']->value)) {
echo mb_strtoupper($_smarty_tpl->tpl_vars['store_articles_table_header_publish']->value, 'UTF-8');
} else { ?>PUBLISH<?php }?>
                  </th>
                  <th width="100" class="text-center">
                    <?php if (!empty($_smarty_tpl->tpl_vars['global_gallery_table_header_remove']->value)) {
echo mb_strtoupper($_smarty_tpl->tpl_vars['global_gallery_table_header_remove']->value, 'UTF-8');
} else { ?>REMOVE<?php }?>
                  </th>
                </tr>
              </thead>
              <tbody>
                <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['whAL']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
 $_smarty_tpl->tpl_vars['i']->value = $_smarty_tpl->tpl_vars['item']->key;
?>
                  <tr>
                    <td class="text-center">
                      <input type="hidden" name="whAL[<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
]['matrix']" value="<?php if (is_object($_smarty_tpl->tpl_vars['item']->value->matrix)) {?>1<?php } else { ?>0<?php }?>"/>
                      <input type="hidden" name="whAL[<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
]['article-id']" value="<?php echo $_smarty_tpl->tpl_vars['item']->value->id_article;?>
"/>
                      <input type="checkbox" name="whAL[<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
]['on']" value="<?php echo $_smarty_tpl->tpl_vars['item']->value->id_article;?>
" class="x-remove x-cb">
                    </td>
                    <td class="text-center">
                      <?php if (!is_null($_smarty_tpl->tpl_vars['item']->value->image)) {?>
                        <img src="<?php echo $_smarty_tpl->tpl_vars['item']->value->image->file_url;?>
" height="35" alt="<?php echo $_smarty_tpl->tpl_vars['item']->value->image->file_name;?>
"/>
                      <?php } else { ?>
                        <span style="font-size:1.4em;color:red;">
                          <i class="glyphicon glyphicon-eye-open"></i>
                        </span>
                      <?php }?>
                    </td>
                    <td class="text-center">
                      <strong><?php echo $_smarty_tpl->tpl_vars['item']->value->sku;?>
</strong>
                    </td>
                    <td class="text-left">
                      <?php echo $_smarty_tpl->tpl_vars['item']->value->article_name_internal;?>

                    </td>
                    <td class="text-right indicator">
                      <strong><?php echo $_smarty_tpl->tpl_vars['item']->value->former_price;
echo $_smarty_tpl->tpl_vars['data']->value->currency->sign;?>
</strong>
                    </td>
                    <td class="text-right indicator">
                      <strong style="color:<?php if ((((int) $_smarty_tpl->tpl_vars['item']->value->id_action===1)||((int) $_smarty_tpl->tpl_vars['item']->value->id_action===3))) {?>orange<?php } elseif ((((int) $_smarty_tpl->tpl_vars['item']->value->id_action===2)||((int) $_smarty_tpl->tpl_vars['item']->value->id_action===4))) {?>green<?php } else { ?>#000<?php }?>">
                        <?php if ((((int) $_smarty_tpl->tpl_vars['item']->value->id_action===1)||((int) $_smarty_tpl->tpl_vars['item']->value->id_action===3))) {?>-<?php }?>
                        <?php if ((((int) $_smarty_tpl->tpl_vars['item']->value->id_action===2)||((int) $_smarty_tpl->tpl_vars['item']->value->id_action===4))) {?>+<?php }?>
                        <?php echo $_smarty_tpl->tpl_vars['item']->value->cost_difference;
echo $_smarty_tpl->tpl_vars['data']->value->currency->sign;?>

                      </strong>
                    </td>
                    <td class="text-right indicator">
                      <strong><?php echo $_smarty_tpl->tpl_vars['item']->value->retail_price;
echo $_smarty_tpl->tpl_vars['data']->value->currency->sign;?>
</strong>
                    </td>
                    <td class="text-right indicator">
                      <strong><?php echo $_smarty_tpl->tpl_vars['item']->value->tax_price;
echo $_smarty_tpl->tpl_vars['data']->value->currency->sign;?>
</strong>
                    </td>
                    <td class="text-right indicator">
                      <a href="#" onclick="return false;" class="price-dev-list" title="">
                        <i class="fa fa-pencil"></i>
                        <strong>
                          <?php echo $_smarty_tpl->tpl_vars['item']->value->retail_tax_price;
echo $_smarty_tpl->tpl_vars['data']->value->currency->sign;?>

                        </strong>
                      </a>
                    </td>
                    <td class="text-right price indicator">
                      <?php if (is_object($_smarty_tpl->tpl_vars['item']->value->matrix)) {?>
                        <strong><?php echo $_smarty_tpl->tpl_vars['item']->value->qty;?>
</strong>
                      <?php } else { ?>
                        <div class="form-group upd-qty pull-left" style="width:100%;min-width: 190px;margin: 0;">
                          <div class="input-group">  
                            <span class="input-group-addon text-right" style="background-color: #1b1e24;border-color: #1b1e24;">
                              <i class="fa fa-calculator"></i>
                            </span>
                            <input type="text" name="whAL[<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
]['qty']" value="<?php echo $_smarty_tpl->tpl_vars['item']->value->qty;?>
" class="form-control text-right itp-qty" data-article-id="<?php echo $_smarty_tpl->tpl_vars['item']->value->id_article;?>
" data-qty="<?php echo $_smarty_tpl->tpl_vars['item']->value->qty;?>
" style="min-width: 70px;font-weight: 700;" autocomplete="off">
                          </div>
                        </div><!-- end form-group -->
                      <?php }?>
                    </td>
                    <td class="text-center">
                      <?php if (is_object($_smarty_tpl->tpl_vars['item']->value->matrix)) {?>
                        <a href="cpanel/store-warehouse-matrix-qty/<?php echo $_smarty_tpl->tpl_vars['item']->value->matrix->secure_key;?>
" class="btn btn-info" title="<?php echo $_smarty_tpl->tpl_vars['item']->value->article_name_internal;?>
 - Matrix">
                          &nbsp;&nbsp;<i class="fa fa-table"></i>
                        </a>
                      <?php } else { ?>
                        <a href="cpanel/store-warehouse-create-matrix/<?php echo $_smarty_tpl->tpl_vars['data']->value->id_wh;?>
/<?php echo $_smarty_tpl->tpl_vars['item']->value->id_article;?>
" class="btn btn-default" title="<?php echo $_smarty_tpl->tpl_vars['item']->value->article_name_internal;?>
 - Matrix">
                          &nbsp;&nbsp;<i class="fa fa-4x fa-columns"></i>
                        </a>
                      <?php }?>
                    </td>
                    <td class="text-center">
                      <a href="cpanel/store/catalog/article/edit/<?php echo $_smarty_tpl->tpl_vars['item']->value->id_article;?>
" class="btn btn-warning">
                        &nbsp;&nbsp;<i class="fa fa-pencil-square-o"></i>
                      </a>
                    </td>
                    <td class="text-center">
                      <label class="switch">
                        <input type="checkbox" name="whAL[<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
]['enable']" value="1" <?php if ($_smarty_tpl->tpl_vars['item']->value->enabled==1) {?>checked=""<?php }?>>
                        <span></span>
                      </label>
                    </td>
                    <td class="text-center">
                      <button type="button" data-article-id="<?php echo $_smarty_tpl->tpl_vars['item']->value->id_article;?>
" class="btn btn-danger push-x">
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
            <?php if (!empty($_smarty_tpl->tpl_vars['store_warehouse_info_not_any_article']->value)) {
echo $_smarty_tpl->tpl_vars['store_warehouse_info_not_any_article']->value;
} else { ?>There are not any article.<?php }?>
          </div><!-- end alert -->
        <?php }?>
      </div><!-- end panel-body -->
      <?php if (is_array($_smarty_tpl->tpl_vars['whAL']->value)&&(count($_smarty_tpl->tpl_vars['whAL']->value)>0)) {?>
        <div class="panel-footer">
          <div class="form-group pull-left" style="width:200px;margin-right:15px;margin-bottom:0px;">     
            <select name="action" class="form-control select" required>
              <option value="0"><?php if (!empty($_smarty_tpl->tpl_vars['global_form_select_choose']->value)) {
echo $_smarty_tpl->tpl_vars['global_form_select_choose']->value;
} else { ?>Choose...<?php }?></option>
              <option value="1">
                Percentuálne zníženie
              </option>
              <option value="2">
                Percentuálne navýšenie
              </option>
              <option value="3">
                Čiastkové zníženie
              </option>
              <option value="4">
                Čiastkové navýšenie
              </option>
              <option value="5">
                Východzia základna cena
              </option>
            </select>
          </div><!-- end form-group -->
          <div class="form-group pull-left" style="width:140px;margin-right:15px;margin-bottom:0px;">
            <div class="input-group">  
              <span class="input-group-addon" style="background-color: #3fbae4;border-color: #3fbae4;">.00</span>
              <input type="text"  name="value" value="" class="form-control text-right">
            </div>
          </div><!-- end form-group -->
          <button type="submit" class="btn btn-warning">
            <i class="fa fa-save"></i>&nbsp;
            <?php if (!empty($_smarty_tpl->tpl_vars['store_warehouse_submit_action']->value)) {
echo mb_strtoupper($_smarty_tpl->tpl_vars['store_warehouse_submit_action']->value, 'UTF-8');
} else { ?>OK<?php }?>
          </button>
          <button type="button" id="UFWAL" class="btn btn-primary">
            <i class="fa fa-save"></i>&nbsp;
            UPLATNIŤ NA VŠETKY ARTIKLE
          </button>
          <div class="delete-group pull-right">
            <button type="button" class="btn btn-block btn-danger">
              <i class="fa fa-exclamation-triangle"></i>&nbsp;
              VYMAZAŤ VŠETKY ARTIKLE
            </button>
            <div class="warning-info">
              <p>
                <strong style="color: red;">
                  Varovanie: história vývoja cien bude navždy zmazaná.
                </strong>
                <strong>
                  Skutočne chcete vymazať celkom <span class="total"><?php echo $_smarty_tpl->tpl_vars['total']->value;?>
</span> artiklov?
                </strong>
              </p>
              <div class="btn-group" role="group" aria-label="...">
                <button type="button" id="dFAL" class="btn btn-default">
                  Áno
                </button>
                <button type="button" class="btn btn-info btn-cls">
                  Nie
                </button>
              </div><!-- end btn-group -->
            </div><!-- end warning-info -->
          </div><!-- end delete-group -->
          <button type="button" id="sdAL" class="btn btn-danger pull-right" style="margin-right: 15px;">
            <i class="fa fa-times"></i>&nbsp;
            VYMAZAŤ OZNAČENÉ ARTIKLE
          </button>
        </div><!-- end panel-footer -->
      <?php }?>
    </div><!-- end panel -->
  </div><!-- end col -->
</form>
<?php echo '<script'; ?>
>
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
<?php echo '</script'; ?>
><?php }} ?>
