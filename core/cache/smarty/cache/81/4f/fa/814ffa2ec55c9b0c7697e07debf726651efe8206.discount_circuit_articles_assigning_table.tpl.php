<?php /*%%SmartyHeaderCode:185458370358186a21170347-20169738%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '814ffa2ec55c9b0c7697e07debf726651efe8206' => 
    array (
      0 => '/var/www/public/carpedmfashion.com/core/config/../../app/themes/cpanel/store/discount_circuit/ajax/discount_circuit_articles_assigning_table.tpl',
      1 => 1469707243,
      2 => 'extends',
    ),
  ),
  'nocache_hash' => '185458370358186a21170347-20169738',
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
  'unifunc' => 'content_58186a212f56f4_28103832',
  'cache_lifetime' => 120,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58186a212f56f4_28103832')) {function content_58186a212f56f4_28103832($_smarty_tpl) {?> <form action="cpanel/store-delete-article-list-from-discount-circuit" method="post" role="form">
  <input type="hidden" name="dc-id" value="<?php echo $_smarty_tpl->tpl_vars['dCircuitId']->value;?>
"/>
  <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
    <div class="panel panel-default">
      <div class="panel-heading ui-draggable-handle">
        <h3 class="panel-title">
          <span class="btn btn-info" style="margin: 0 15px;"><?php echo $_smarty_tpl->tpl_vars['total']->value;?>
</span>
          ZOZNAM PRODUKTOV
          <?php if (is_array($_smarty_tpl->tpl_vars['articleListDL']->value)&&(count($_smarty_tpl->tpl_vars['articleListDL']->value)>0)) {?>&nbsp;<span class="badge"><?php echo $_smarty_tpl->tpl_vars['pagination_info']->value;?>
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
        <?php if (is_array($_smarty_tpl->tpl_vars['articleListDL']->value)&&(count($_smarty_tpl->tpl_vars['articleListDL']->value)>0)) {?>
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
                <select class="form-control select" onchange="location = 'cpanel/store-update-discount-circuit-form/<?php echo $_smarty_tpl->tpl_vars['dCircuitId']->value;?>
/1/'+this.options[this.selectedIndex].value;">
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
                  <input type="text" id="search" value="" placeholder="Hladať" class="form-control">
                    <span class="input-group-btn">
                        <button type="button" onclick="location = 'cpanel/store-update-discount-circuit-form/<?php echo $_smarty_tpl->tpl_vars['dCircuitId']->value;?>
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
            <table id="articleListDL" class="table table-bordered table-striped table-actions">
              <thead>
              <tr>
                <th width="70" class="text-center">
                  #
                </th>
                <th width="30" class="text-center">
                  <?php if (!empty($_smarty_tpl->tpl_vars['store_articles_table_header_picture']->value)) {?><?php echo mb_strtoupper($_smarty_tpl->tpl_vars['store_articles_table_header_picture']->value, 'UTF-8');?>
<?php } else { ?>IMAGE<?php }?>
                </th>
                <th width="200" class="text-center">
                  <?php if (!empty($_smarty_tpl->tpl_vars['store_articles_table_header_sku']->value)) {?><?php echo mb_strtoupper($_smarty_tpl->tpl_vars['store_articles_table_header_sku']->value, 'UTF-8');?>
<?php } else { ?>SKU<?php }?>
                </th>
                <th class="text-left">
                  <?php if (!empty($_smarty_tpl->tpl_vars['store_articles_table_header_article_name']->value)) {?><?php echo mb_strtoupper($_smarty_tpl->tpl_vars['store_articles_table_header_article_name']->value, 'UTF-8');?>
<?php } else { ?>ARTICLE NAME<?php }?>
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
                  <?php if (!empty($_smarty_tpl->tpl_vars['global_gallery_table_header_remove']->value)) {?><?php echo mb_strtoupper($_smarty_tpl->tpl_vars['global_gallery_table_header_remove']->value, 'UTF-8');?>
<?php } else { ?>REMOVE<?php }?>
                </th>
              </tr>
              </thead>
              <tbody>
              <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['articleListDL']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
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
                    <?php echo mb_strtoupper($_smarty_tpl->tpl_vars['item']->value->sku, 'UTF-8');?>

                  </td>
                  <td class="text-left">
                    <?php echo $_smarty_tpl->tpl_vars['item']->value->article_name_internal;?>

                  </td>
                  <td class="text-right">
                    <strong><?php echo $_smarty_tpl->tpl_vars['item']->value->former_price;?>
&euro;</strong>
                  </td>
                  <td class="text-right">
                    <strong><?php echo $_smarty_tpl->tpl_vars['item']->value->discount;?>
&euro;</strong>
                  </td>
                  <td class="text-right">
                    <strong><?php echo $_smarty_tpl->tpl_vars['item']->value->discount_percent;?>
%</strong>
                  </td>
                  <td class="text-right price">
                    <strong><?php echo $_smarty_tpl->tpl_vars['item']->value->retail_tax_price;?>
&euro;</strong>
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
          <div class="alert alert-info" role="alert" style="margin: 15px auto;">
            <strong><?php if (!empty($_smarty_tpl->tpl_vars['global_alert_info']->value)) {?><?php echo $_smarty_tpl->tpl_vars['global_alert_info']->value;?>
<?php } else { ?>INFO!<?php }?></strong>
            Nie sú priradené žiadne produkty.
          </div><!-- end alert -->
        <?php }?>
      </div><!-- end panel-body -->
      <?php if (is_array($_smarty_tpl->tpl_vars['articleListDL']->value)&&(count($_smarty_tpl->tpl_vars['articleListDL']->value)>0)) {?>
        <div class="panel-footer">
          <button type="submit" class="btn btn-danger">
            <i class="fa fa-times"></i>&nbsp;VYMAZAŤ VÝBER
          </button>
        </div><!-- end panel-footer -->
      <?php }?>
    </div><!-- end panel -->
  </div><!-- end col -->
</form>
<script>
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
</script>
<?php }} ?>
