<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-09-20 08:22:38
         compiled from "/var/www/public/carpedmfashion.com/core/config/../../app/themes/cpanel/store/catalog/category/ajax/category_assigning_article_table.tpl" */ ?>
<?php /*%%SmartyHeaderCode:115725689357e0d5ae057d18-79570593%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
  ),
  'nocache_hash' => '115725689357e0d5ae057d18-79570593',
  'function' => 
  array (
  ),
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
  'unifunc' => 'content_57e0d5ae1e6f96_20624488',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57e0d5ae1e6f96_20624488')) {function content_57e0d5ae1e6f96_20624488($_smarty_tpl) {?><form id="caal-form" action="cpanel/store-delete-article-list-from-category" method="post" role="form">
    <input type="hidden" name="category-id" value="<?php echo $_smarty_tpl->tpl_vars['categoryId']->value;?>
"/>
    <div class="panel panel-default">
      <div class="panel-heading ui-draggable-handle">
          <h3 class="panel-title">
            <?php if (!empty($_smarty_tpl->tpl_vars['store_categories_form_assigning_articles_title']->value)) {
echo mb_strtoupper($_smarty_tpl->tpl_vars['store_categories_form_assigning_articles_title']->value, 'UTF-8');
} else { ?>CATEGORY - ARTICLES LIST<?php }?>
            <?php if (is_array($_smarty_tpl->tpl_vars['articleListCL']->value)&&(count($_smarty_tpl->tpl_vars['articleListCL']->value)>0)) {?>
              <span class="btn btn-info" style="margin: 0 15px;"><?php echo $_smarty_tpl->tpl_vars['total']->value;?>
</span>
              <span class="btn btn-warning" style="margin: 0 15px;"><?php echo $_smarty_tpl->tpl_vars['numberOfLastOrder']->value;?>
</span>
              <span class="badge"><?php echo $_smarty_tpl->tpl_vars['pagination_info']->value;?>
</span>
              <span class="badge"><?php echo $_smarty_tpl->tpl_vars['totalOrder']->value;?>
&nbsp;Zotriedených záznamov</span>
              <span class="badge"><?php echo $_smarty_tpl->tpl_vars['totalNotOrder']->value;?>
&nbsp;Nezotriedených záznamov</span>
            <?php }?>
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
          <?php if (is_array($_smarty_tpl->tpl_vars['articleListCL']->value)&&(count($_smarty_tpl->tpl_vars['articleListCL']->value)>0)) {?>
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
                          <select class="form-control select" onchange="location = 'cpanel/store-category-assigning-article-form/<?php echo $_smarty_tpl->tpl_vars['categoryId']->value;?>
/1/'+this.options[this.selectedIndex].value+'?q=<?php if (strlen($_smarty_tpl->tpl_vars['keywords']->value)>0) {
echo $_smarty_tpl->tpl_vars['keywords']->value;
}?>';">
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
                                  <button type="button" onclick="location = 'cpanel/store-category-assigning-article-form/<?php echo $_smarty_tpl->tpl_vars['categoryId']->value;?>
/1/10?q='+document.getElementById('search').value;" class="btn btn-default">
                                      <i class="fa fa-search"></i>
                                  </button>
                              </span>
                          </div>
                      </div>
                      <?php echo $_smarty_tpl->tpl_vars['pagination']->value;?>

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
                                  <?php if (!empty($_smarty_tpl->tpl_vars['store_articles_table_header_picture']->value)) {
echo mb_strtoupper($_smarty_tpl->tpl_vars['store_articles_table_header_picture']->value, 'UTF-8');
} else { ?>IMAGE<?php }?>
                              </th>
                              <th width="200" class="text-center">
                                  <?php if (!empty($_smarty_tpl->tpl_vars['store_articles_table_header_sku']->value)) {
echo mb_strtoupper($_smarty_tpl->tpl_vars['store_articles_table_header_sku']->value, 'UTF-8');
} else { ?>SKU<?php }?>
                              </th>
                              <th class="text-left">
                                  <?php if (!empty($_smarty_tpl->tpl_vars['store_articles_table_header_article_name']->value)) {
echo mb_strtoupper($_smarty_tpl->tpl_vars['store_articles_table_header_article_name']->value, 'UTF-8');
} else { ?>ARTICLE NAME<?php }?>
                              </th>
                              <th class="text-center" width="150">
                                <?php if (!empty($_smarty_tpl->tpl_vars['global_pages_table_header_order']->value)) {
echo mb_strtoupper($_smarty_tpl->tpl_vars['global_pages_table_header_order']->value, 'UTF-8');
} else { ?>Order<?php }?>
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
 $_from = $_smarty_tpl->tpl_vars['articleListCL']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
 $_smarty_tpl->tpl_vars['i']->value = $_smarty_tpl->tpl_vars['item']->key;
?>
                              <tr>
                                  <td class="text-center">
                                      <input type="hidden" name="articleList[<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
]['article-id']" value="<?php echo $_smarty_tpl->tpl_vars['item']->value->id_article;?>
"/>
                                      <input type="checkbox" name="articleList[<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
]['on']" value="1">
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
                                      <?php echo $_smarty_tpl->tpl_vars['item']->value->sku;?>

                                  </td>
                                  <td class="text-left">
                                      <?php echo $_smarty_tpl->tpl_vars['item']->value->article_name_internal;?>

                                  </td>
                                  <td class="text-center">
                                    <div class="form-group pull-right" style="width:150px;">
                                        <div id="ig-info" class="input-group">                                            
                                            <span class="input-group-addon">
                                                <i class="fa fa-sort-numeric-desc"></i>
                                            </span>
                                            <input type="text"  name="articleList[<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
]['position']" value="<?php echo $_smarty_tpl->tpl_vars['item']->value->position;?>
" min="1" class="form-control text-right">
                                        </div>
                                    </div>
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
              <div class="alert alert-info" style="float: none;width: 99%;margin: 15px auto;" role="alert">
                  <strong><?php if (!empty($_smarty_tpl->tpl_vars['global_alert_info']->value)) {
echo $_smarty_tpl->tpl_vars['global_alert_info']->value;
} else { ?>INFO<?php }?>!</strong> 
                  Nie sú priradené žiadne produkty k danej kategorií.Pokračujte kliknutím na tlačidlo v pravo hore s ikonou plus a pridajte požadované produkty k dannej kategorií.
              </div>
          <?php }?>
      </div><!-- end panel-body -->
      <?php if (is_array($_smarty_tpl->tpl_vars['articleListCL']->value)&&(count($_smarty_tpl->tpl_vars['articleListCL']->value)>0)) {?>
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
      <?php }?>
  </div><!-- end panel -->
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
