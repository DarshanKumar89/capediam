<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-05-16 07:51:03
         compiled from "/Users/henrich/Work/SlatyFork/carpedm.mozayc.net/core/config/../../app/themes/cpanel/store/warehouses/ajax/warehouse_et_article_list_assigning_table.tpl" */ ?>
<?php /*%%SmartyHeaderCode:119278779357397be7904191-82366391%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
  ),
  'nocache_hash' => '119278779357397be7904191-82366391',
  'function' => 
  array (
  ),
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
  'unifunc' => 'content_57397be79770f5_33542255',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57397be79770f5_33542255')) {function content_57397be79770f5_33542255($_smarty_tpl) {?><form action="cpanel/update-warehouse-expedition-time-al" method="post" role="form">
  <input type="hidden" name="whEtId" value="<?php echo $_smarty_tpl->tpl_vars['whET']->value->id_et;?>
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
          <?php if (is_array($_smarty_tpl->tpl_vars['whETAL']->value)&&(count($_smarty_tpl->tpl_vars['whETAL']->value)>0)) {?>&nbsp;<span class="badge"><?php echo $_smarty_tpl->tpl_vars['pagination_info']->value;?>
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
        <?php if (is_array($_smarty_tpl->tpl_vars['whETAL']->value)&&(count($_smarty_tpl->tpl_vars['whETAL']->value)>0)) {?>
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
                <select class="form-control select" onchange="location = 'cpanel/warehouse-expedition-time-assign-article/<?php echo $_smarty_tpl->tpl_vars['wh']->value->secure_key;?>
/<?php echo $_smarty_tpl->tpl_vars['whET']->value->id_et;?>
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
                <select class="form-control select" onchange="location = 'cpanel/warehouse-expedition-time-assign-article/<?php echo $_smarty_tpl->tpl_vars['wh']->value->secure_key;?>
/<?php echo $_smarty_tpl->tpl_vars['whET']->value->id_et;?>
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
                        <button type="button" onclick="location = 'cpanel/warehouse-expedition-time-assign-article/<?php echo $_smarty_tpl->tpl_vars['wh']->value->secure_key;?>
/<?php echo $_smarty_tpl->tpl_vars['whET']->value->id_et;?>
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
            <table id="whETAL" class="table table-bordered table-striped table-actions">
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
 $_from = $_smarty_tpl->tpl_vars['whETAL']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
 $_smarty_tpl->tpl_vars['i']->value = $_smarty_tpl->tpl_vars['item']->key;
?>
                  <tr>
                    <td class="text-center">
                      <input type="hidden" name="whETAL[<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
]['article-id']" value="<?php echo $_smarty_tpl->tpl_vars['item']->value->id_article;?>
"/>
                      <input type="checkbox" name="whETAL[<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
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
      <?php if (is_array($_smarty_tpl->tpl_vars['whETAL']->value)&&(count($_smarty_tpl->tpl_vars['whETAL']->value)>0)) {?>
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
