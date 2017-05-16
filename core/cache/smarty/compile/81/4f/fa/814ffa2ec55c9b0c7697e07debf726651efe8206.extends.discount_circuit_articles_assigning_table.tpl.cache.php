<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-11-01 11:10:41
         compiled from "/var/www/public/carpedmfashion.com/core/config/../../app/themes/cpanel/store/discount_circuit/ajax/discount_circuit_articles_assigning_table.tpl" */ ?>
<?php /*%%SmartyHeaderCode:185458370358186a21170347-20169738%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
  ),
  'nocache_hash' => '185458370358186a21170347-20169738',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'dCircuitId' => 1,
    'total' => 1,
    'articleListDL' => 1,
    'pagination_info' => 1,
    'limit' => 1,
    'pagination' => 1,
    'store_articles_table_header_picture' => 1,
    'store_articles_table_header_sku' => 1,
    'store_articles_table_header_article_name' => 1,
    'global_gallery_table_header_remove' => 1,
    'i' => 1,
    'item' => 1,
    'global_alert_info' => 1,
  ),
  'has_nocache_code' => true,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_58186a212dad32_53070088',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58186a212dad32_53070088')) {function content_58186a212dad32_53070088($_smarty_tpl) {?>
 <form action="cpanel/store-delete-article-list-from-discount-circuit" method="post" role="form">
  <input type="hidden" name="dc-id" value="<?php echo '/*%%SmartyNocache:185458370358186a21170347-20169738%%*/<?php echo $_smarty_tpl->tpl_vars[\'dCircuitId\']->value;?>
/*/%%SmartyNocache:185458370358186a21170347-20169738%%*/';?>
"/>
  <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
    <div class="panel panel-default">
      <div class="panel-heading ui-draggable-handle">
        <h3 class="panel-title">
          <span class="btn btn-info" style="margin: 0 15px;"><?php echo '/*%%SmartyNocache:185458370358186a21170347-20169738%%*/<?php echo $_smarty_tpl->tpl_vars[\'total\']->value;?>
/*/%%SmartyNocache:185458370358186a21170347-20169738%%*/';?>
</span>
          ZOZNAM PRODUKTOV
          <?php echo '/*%%SmartyNocache:185458370358186a21170347-20169738%%*/<?php if (is_array($_smarty_tpl->tpl_vars[\'articleListDL\']->value)&&(count($_smarty_tpl->tpl_vars[\'articleListDL\']->value)>0)) {?>/*/%%SmartyNocache:185458370358186a21170347-20169738%%*/';?>
&nbsp;<span class="badge"><?php echo '/*%%SmartyNocache:185458370358186a21170347-20169738%%*/<?php echo $_smarty_tpl->tpl_vars[\'pagination_info\']->value;?>
/*/%%SmartyNocache:185458370358186a21170347-20169738%%*/';?>
</span><?php echo '/*%%SmartyNocache:185458370358186a21170347-20169738%%*/<?php }?>/*/%%SmartyNocache:185458370358186a21170347-20169738%%*/';?>

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
        <?php echo '/*%%SmartyNocache:185458370358186a21170347-20169738%%*/<?php if (is_array($_smarty_tpl->tpl_vars[\'articleListDL\']->value)&&(count($_smarty_tpl->tpl_vars[\'articleListDL\']->value)>0)) {?>/*/%%SmartyNocache:185458370358186a21170347-20169738%%*/';?>

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
              <div class="form-group pull-left" style="width:80px;margin-right:5px;">
                <select class="form-control select" onchange="location = 'cpanel/store-update-discount-circuit-form/<?php echo '/*%%SmartyNocache:185458370358186a21170347-20169738%%*/<?php echo $_smarty_tpl->tpl_vars[\'dCircuitId\']->value;?>
/*/%%SmartyNocache:185458370358186a21170347-20169738%%*/';?>
/1/'+this.options[this.selectedIndex].value;">
                  <option value="10" <?php echo '/*%%SmartyNocache:185458370358186a21170347-20169738%%*/<?php if ($_smarty_tpl->tpl_vars[\'limit\']->value==10) {?>/*/%%SmartyNocache:185458370358186a21170347-20169738%%*/';?>
selected<?php echo '/*%%SmartyNocache:185458370358186a21170347-20169738%%*/<?php }?>/*/%%SmartyNocache:185458370358186a21170347-20169738%%*/';?>
>10</option>
                  <option value="20" <?php echo '/*%%SmartyNocache:185458370358186a21170347-20169738%%*/<?php if ($_smarty_tpl->tpl_vars[\'limit\']->value==20) {?>/*/%%SmartyNocache:185458370358186a21170347-20169738%%*/';?>
selected<?php echo '/*%%SmartyNocache:185458370358186a21170347-20169738%%*/<?php }?>/*/%%SmartyNocache:185458370358186a21170347-20169738%%*/';?>
>20</option>
                  <option value="50" <?php echo '/*%%SmartyNocache:185458370358186a21170347-20169738%%*/<?php if ($_smarty_tpl->tpl_vars[\'limit\']->value==50) {?>/*/%%SmartyNocache:185458370358186a21170347-20169738%%*/';?>
selected<?php echo '/*%%SmartyNocache:185458370358186a21170347-20169738%%*/<?php }?>/*/%%SmartyNocache:185458370358186a21170347-20169738%%*/';?>
>50</option>
                  <option value="100" <?php echo '/*%%SmartyNocache:185458370358186a21170347-20169738%%*/<?php if ($_smarty_tpl->tpl_vars[\'limit\']->value==100) {?>/*/%%SmartyNocache:185458370358186a21170347-20169738%%*/';?>
selected<?php echo '/*%%SmartyNocache:185458370358186a21170347-20169738%%*/<?php }?>/*/%%SmartyNocache:185458370358186a21170347-20169738%%*/';?>
>100</option>
                  <option value="200" <?php echo '/*%%SmartyNocache:185458370358186a21170347-20169738%%*/<?php if ($_smarty_tpl->tpl_vars[\'limit\']->value==200) {?>/*/%%SmartyNocache:185458370358186a21170347-20169738%%*/';?>
selected<?php echo '/*%%SmartyNocache:185458370358186a21170347-20169738%%*/<?php }?>/*/%%SmartyNocache:185458370358186a21170347-20169738%%*/';?>
>200</option>
                  <option value="500" <?php echo '/*%%SmartyNocache:185458370358186a21170347-20169738%%*/<?php if ($_smarty_tpl->tpl_vars[\'limit\']->value==500) {?>/*/%%SmartyNocache:185458370358186a21170347-20169738%%*/';?>
selected<?php echo '/*%%SmartyNocache:185458370358186a21170347-20169738%%*/<?php }?>/*/%%SmartyNocache:185458370358186a21170347-20169738%%*/';?>
>500</option>
                </select>
              </div>
              <div class="form-group pull-left" style="width:400px;margin-right:5px;">
                <div class="input-group">
                  <input type="text" id="search" value="" placeholder="Hladať" class="form-control">
                    <span class="input-group-btn">
                        <button type="button" onclick="location = 'cpanel/store-update-discount-circuit-form/<?php echo '/*%%SmartyNocache:185458370358186a21170347-20169738%%*/<?php echo $_smarty_tpl->tpl_vars[\'dCircuitId\']->value;?>
/*/%%SmartyNocache:185458370358186a21170347-20169738%%*/';?>
/1/10?q='+document.getElementById('search').value;" class="btn btn-default">
                          <i class="fa fa-search"></i>
                        </button>
                    </span>
                </div>
              </div>
              <?php echo '/*%%SmartyNocache:185458370358186a21170347-20169738%%*/<?php echo $_smarty_tpl->tpl_vars[\'pagination\']->value;?>
/*/%%SmartyNocache:185458370358186a21170347-20169738%%*/';?>

            </div>
          </div><!-- end row -->
          <div class="table-responsive" style="border-top:1px solid #E5E5E5;">
            <table id="articleListDL" class="table table-bordered table-striped table-actions">
              <thead>
              <tr>
                <th width="70" class="text-center">
                  #
                </th>
                <th width="30" class="text-center">
                  <?php echo '/*%%SmartyNocache:185458370358186a21170347-20169738%%*/<?php if (!empty($_smarty_tpl->tpl_vars[\'store_articles_table_header_picture\']->value)) {?>/*/%%SmartyNocache:185458370358186a21170347-20169738%%*/';
echo '/*%%SmartyNocache:185458370358186a21170347-20169738%%*/<?php echo mb_strtoupper($_smarty_tpl->tpl_vars[\'store_articles_table_header_picture\']->value, \'UTF-8\');?>
/*/%%SmartyNocache:185458370358186a21170347-20169738%%*/';
echo '/*%%SmartyNocache:185458370358186a21170347-20169738%%*/<?php } else { ?>/*/%%SmartyNocache:185458370358186a21170347-20169738%%*/';?>
IMAGE<?php echo '/*%%SmartyNocache:185458370358186a21170347-20169738%%*/<?php }?>/*/%%SmartyNocache:185458370358186a21170347-20169738%%*/';?>

                </th>
                <th width="200" class="text-center">
                  <?php echo '/*%%SmartyNocache:185458370358186a21170347-20169738%%*/<?php if (!empty($_smarty_tpl->tpl_vars[\'store_articles_table_header_sku\']->value)) {?>/*/%%SmartyNocache:185458370358186a21170347-20169738%%*/';
echo '/*%%SmartyNocache:185458370358186a21170347-20169738%%*/<?php echo mb_strtoupper($_smarty_tpl->tpl_vars[\'store_articles_table_header_sku\']->value, \'UTF-8\');?>
/*/%%SmartyNocache:185458370358186a21170347-20169738%%*/';
echo '/*%%SmartyNocache:185458370358186a21170347-20169738%%*/<?php } else { ?>/*/%%SmartyNocache:185458370358186a21170347-20169738%%*/';?>
SKU<?php echo '/*%%SmartyNocache:185458370358186a21170347-20169738%%*/<?php }?>/*/%%SmartyNocache:185458370358186a21170347-20169738%%*/';?>

                </th>
                <th class="text-left">
                  <?php echo '/*%%SmartyNocache:185458370358186a21170347-20169738%%*/<?php if (!empty($_smarty_tpl->tpl_vars[\'store_articles_table_header_article_name\']->value)) {?>/*/%%SmartyNocache:185458370358186a21170347-20169738%%*/';
echo '/*%%SmartyNocache:185458370358186a21170347-20169738%%*/<?php echo mb_strtoupper($_smarty_tpl->tpl_vars[\'store_articles_table_header_article_name\']->value, \'UTF-8\');?>
/*/%%SmartyNocache:185458370358186a21170347-20169738%%*/';
echo '/*%%SmartyNocache:185458370358186a21170347-20169738%%*/<?php } else { ?>/*/%%SmartyNocache:185458370358186a21170347-20169738%%*/';?>
ARTICLE NAME<?php echo '/*%%SmartyNocache:185458370358186a21170347-20169738%%*/<?php }?>/*/%%SmartyNocache:185458370358186a21170347-20169738%%*/';?>

                </th>
                <th width="150" class="text-right">
                  Pôvodná suma
                </th>
                <th width="150" class="text-right">
                  Zľava (suma)
                </th>
                <th width="150" class="text-right">
                  Zľava (percentá)
                </th>
                <th width="150" class="text-right">
                  Suma po zľave
                </th>
                <th width="100" class="text-center">
                  <?php echo '/*%%SmartyNocache:185458370358186a21170347-20169738%%*/<?php if (!empty($_smarty_tpl->tpl_vars[\'global_gallery_table_header_remove\']->value)) {?>/*/%%SmartyNocache:185458370358186a21170347-20169738%%*/';
echo '/*%%SmartyNocache:185458370358186a21170347-20169738%%*/<?php echo mb_strtoupper($_smarty_tpl->tpl_vars[\'global_gallery_table_header_remove\']->value, \'UTF-8\');?>
/*/%%SmartyNocache:185458370358186a21170347-20169738%%*/';
echo '/*%%SmartyNocache:185458370358186a21170347-20169738%%*/<?php } else { ?>/*/%%SmartyNocache:185458370358186a21170347-20169738%%*/';?>
REMOVE<?php echo '/*%%SmartyNocache:185458370358186a21170347-20169738%%*/<?php }?>/*/%%SmartyNocache:185458370358186a21170347-20169738%%*/';?>

                </th>
              </tr>
              </thead>
              <tbody>
              <?php echo '/*%%SmartyNocache:185458370358186a21170347-20169738%%*/<?php  $_smarty_tpl->tpl_vars[\'item\'] = new Smarty_Variable; $_smarty_tpl->tpl_vars[\'item\']->_loop = false;
 $_smarty_tpl->tpl_vars[\'i\'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars[\'articleListDL\']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, \'array\');}
foreach ($_from as $_smarty_tpl->tpl_vars[\'item\']->key => $_smarty_tpl->tpl_vars[\'item\']->value) {
$_smarty_tpl->tpl_vars[\'item\']->_loop = true;
 $_smarty_tpl->tpl_vars[\'i\']->value = $_smarty_tpl->tpl_vars[\'item\']->key;
?>/*/%%SmartyNocache:185458370358186a21170347-20169738%%*/';?>

                <tr>
                  <td class="text-center">
                    <input type="hidden" name="articleList[<?php echo '/*%%SmartyNocache:185458370358186a21170347-20169738%%*/<?php echo $_smarty_tpl->tpl_vars[\'i\']->value;?>
/*/%%SmartyNocache:185458370358186a21170347-20169738%%*/';?>
]['article-id']" value="<?php echo '/*%%SmartyNocache:185458370358186a21170347-20169738%%*/<?php echo $_smarty_tpl->tpl_vars[\'item\']->value->id_article;?>
/*/%%SmartyNocache:185458370358186a21170347-20169738%%*/';?>
"/>
                    <input type="checkbox" name="articleList[<?php echo '/*%%SmartyNocache:185458370358186a21170347-20169738%%*/<?php echo $_smarty_tpl->tpl_vars[\'i\']->value;?>
/*/%%SmartyNocache:185458370358186a21170347-20169738%%*/';?>
]['on']" value="1">
                  </td>
                  <td class="text-center">
                    <?php echo '/*%%SmartyNocache:185458370358186a21170347-20169738%%*/<?php if (!is_null($_smarty_tpl->tpl_vars[\'item\']->value->image)) {?>/*/%%SmartyNocache:185458370358186a21170347-20169738%%*/';?>

                      <img src="<?php echo '/*%%SmartyNocache:185458370358186a21170347-20169738%%*/<?php echo $_smarty_tpl->tpl_vars[\'item\']->value->image->file_url;?>
/*/%%SmartyNocache:185458370358186a21170347-20169738%%*/';?>
" height="35" alt="<?php echo '/*%%SmartyNocache:185458370358186a21170347-20169738%%*/<?php echo $_smarty_tpl->tpl_vars[\'item\']->value->image->file_name;?>
/*/%%SmartyNocache:185458370358186a21170347-20169738%%*/';?>
"/>
                    <?php echo '/*%%SmartyNocache:185458370358186a21170347-20169738%%*/<?php } else { ?>/*/%%SmartyNocache:185458370358186a21170347-20169738%%*/';?>

                      <span style="font-size:1.4em;color:red;">
                        <i class="glyphicon glyphicon-eye-open"></i>
                      </span>
                    <?php echo '/*%%SmartyNocache:185458370358186a21170347-20169738%%*/<?php }?>/*/%%SmartyNocache:185458370358186a21170347-20169738%%*/';?>

                  </td>
                  <td class="text-center">
                    <?php echo '/*%%SmartyNocache:185458370358186a21170347-20169738%%*/<?php echo mb_strtoupper($_smarty_tpl->tpl_vars[\'item\']->value->sku, \'UTF-8\');?>
/*/%%SmartyNocache:185458370358186a21170347-20169738%%*/';?>

                  </td>
                  <td class="text-left">
                    <?php echo '/*%%SmartyNocache:185458370358186a21170347-20169738%%*/<?php echo $_smarty_tpl->tpl_vars[\'item\']->value->article_name_internal;?>
/*/%%SmartyNocache:185458370358186a21170347-20169738%%*/';?>

                  </td>
                  <td class="text-right">
                    <strong><?php echo '/*%%SmartyNocache:185458370358186a21170347-20169738%%*/<?php echo $_smarty_tpl->tpl_vars[\'item\']->value->former_price;?>
/*/%%SmartyNocache:185458370358186a21170347-20169738%%*/';?>
&euro;</strong>
                  </td>
                  <td class="text-right">
                    <strong><?php echo '/*%%SmartyNocache:185458370358186a21170347-20169738%%*/<?php echo $_smarty_tpl->tpl_vars[\'item\']->value->discount;?>
/*/%%SmartyNocache:185458370358186a21170347-20169738%%*/';?>
&euro;</strong>
                  </td>
                  <td class="text-right">
                    <strong><?php echo '/*%%SmartyNocache:185458370358186a21170347-20169738%%*/<?php echo $_smarty_tpl->tpl_vars[\'item\']->value->discount_percent;?>
/*/%%SmartyNocache:185458370358186a21170347-20169738%%*/';?>
%</strong>
                  </td>
                  <td class="text-right price">
                    <strong><?php echo '/*%%SmartyNocache:185458370358186a21170347-20169738%%*/<?php echo $_smarty_tpl->tpl_vars[\'item\']->value->retail_tax_price;?>
/*/%%SmartyNocache:185458370358186a21170347-20169738%%*/';?>
&euro;</strong>
                  </td>
                  <td class="text-center">
                    <button type="button" data-article-id="<?php echo '/*%%SmartyNocache:185458370358186a21170347-20169738%%*/<?php echo $_smarty_tpl->tpl_vars[\'item\']->value->id_article;?>
/*/%%SmartyNocache:185458370358186a21170347-20169738%%*/';?>
" class="btn btn-danger push-x">
                      &nbsp;&nbsp;<span class="fa fa-minus"></span>
                    </button>
                  </td>
                </tr>
              <?php echo '/*%%SmartyNocache:185458370358186a21170347-20169738%%*/<?php } ?>/*/%%SmartyNocache:185458370358186a21170347-20169738%%*/';?>

              </tbody>
            </table>
          </div><!-- end table-responsive -->
        <?php echo '/*%%SmartyNocache:185458370358186a21170347-20169738%%*/<?php } else { ?>/*/%%SmartyNocache:185458370358186a21170347-20169738%%*/';?>

          <div class="alert alert-info" role="alert" style="margin: 15px auto;">
            <strong><?php echo '/*%%SmartyNocache:185458370358186a21170347-20169738%%*/<?php if (!empty($_smarty_tpl->tpl_vars[\'global_alert_info\']->value)) {?>/*/%%SmartyNocache:185458370358186a21170347-20169738%%*/';
echo '/*%%SmartyNocache:185458370358186a21170347-20169738%%*/<?php echo $_smarty_tpl->tpl_vars[\'global_alert_info\']->value;?>
/*/%%SmartyNocache:185458370358186a21170347-20169738%%*/';
echo '/*%%SmartyNocache:185458370358186a21170347-20169738%%*/<?php } else { ?>/*/%%SmartyNocache:185458370358186a21170347-20169738%%*/';?>
INFO!<?php echo '/*%%SmartyNocache:185458370358186a21170347-20169738%%*/<?php }?>/*/%%SmartyNocache:185458370358186a21170347-20169738%%*/';?>
</strong>
            Nie sú priradené žiadne produkty.
          </div><!-- end alert -->
        <?php echo '/*%%SmartyNocache:185458370358186a21170347-20169738%%*/<?php }?>/*/%%SmartyNocache:185458370358186a21170347-20169738%%*/';?>

      </div><!-- end panel-body -->
      <?php echo '/*%%SmartyNocache:185458370358186a21170347-20169738%%*/<?php if (is_array($_smarty_tpl->tpl_vars[\'articleListDL\']->value)&&(count($_smarty_tpl->tpl_vars[\'articleListDL\']->value)>0)) {?>/*/%%SmartyNocache:185458370358186a21170347-20169738%%*/';?>

        <div class="panel-footer">
          <button type="submit" class="btn btn-danger">
            <i class="fa fa-times"></i>&nbsp;VYMAZAŤ VÝBER
          </button>
        </div><!-- end panel-footer -->
      <?php echo '/*%%SmartyNocache:185458370358186a21170347-20169738%%*/<?php }?>/*/%%SmartyNocache:185458370358186a21170347-20169738%%*/';?>

    </div><!-- end panel -->
  </div><!-- end col -->
</form>
<?php echo '<script'; ?>
>
$(function() {
  if($(".select").length > 0){
    $(".select").selectpicker();

    $(".select").on("change", function(){
      if($(this).val() == "" || null === $(this).val()){
          if(!$(this).attr("multiple"))
              $(this).val("").find("option").removeAttr("selected").prop("selected",false);
      }else{
          $(this).find("option[value="+$(this).val()+"]").attr("selected",true);
      }
    });
  }
});
<?php echo '</script'; ?>
>
<?php }} ?>
