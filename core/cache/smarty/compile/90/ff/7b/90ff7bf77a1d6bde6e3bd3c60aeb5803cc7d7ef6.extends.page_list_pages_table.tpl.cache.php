<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-10-24 11:23:47
         compiled from "/var/www/public/carpedmfashion.com/core/config/../../app/themes/cpanel/page/ajax/page_list_pages_table.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2099560769580dd32361dda1-93390049%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
  ),
  'nocache_hash' => '2099560769580dd32361dda1-93390049',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'global_section_pages' => 0,
    'total' => 0,
    'countLastOrder' => 0,
    'pagination_info' => 0,
    'countOrder' => 0,
    'countNotOrder' => 0,
    'pageList' => 0,
    'pageListId' => 0,
    'page' => 0,
    'limit' => 0,
    'sort' => 0,
    'pagination' => 0,
    'global_pages_table_header_background_image' => 0,
    'global_pages_label_page_name' => 0,
    'global_pages_table_header_owner' => 0,
    'global_pages_table_header_last_modified' => 0,
    'global_pages_table_header_order' => 0,
    'global_pages_table_header_publish' => 0,
    'global_pages_table_header_remove' => 0,
    'i' => 0,
    'item' => 0,
    'global_alert_info' => 0,
    'global_pages_empty_list' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_580dd3237f60d9_69313339',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_580dd3237f60d9_69313339')) {function content_580dd3237f60d9_69313339($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include '/var/www/public/carpedmfashion.com/core/lib/smarty/plugins/modifier.date_format.php';
?><div class="panel panel-info">
    <div class="panel-heading ui-draggable-handle">
        <h3 class="panel-title">
            <i class="fa fa-list"></i>&nbsp;
            <?php if (!empty($_smarty_tpl->tpl_vars['global_section_pages']->value)) {
echo $_smarty_tpl->tpl_vars['global_section_pages']->value;
} else { ?>Pages<?php }?>&nbsp;
            <span class="btn btn-info" style="margin: 0 15px;"><?php echo $_smarty_tpl->tpl_vars['total']->value;?>
</span>
            <span class="btn btn-warning" style="margin: 0 15px;"><?php echo $_smarty_tpl->tpl_vars['countLastOrder']->value;?>
</span>
            <span class="badge"><?php echo $_smarty_tpl->tpl_vars['pagination_info']->value;?>
</span>
            <span class="badge"><?php echo $_smarty_tpl->tpl_vars['countOrder']->value;?>
&nbsp;Zotriedených záznamov</span>
            <span class="badge"><?php echo $_smarty_tpl->tpl_vars['countNotOrder']->value;?>
&nbsp;Nezotriedených záznamov</span>
        </h3>
        <ul class="panel-controls">
            <li>
                <a href="#" id="showPageListModal" onclick="return false;" title="Page List">
                    <span class="fa fa-plus"></span>
                </a>
            </li>
            <li>
                <a href="#" onclick="return false;" class="panel-collapse">
                    <span class="fa fa-angle-up"></span>
                </a>
            </li>
        </ul>    
    </div><!-- end panel-heading -->
    <div class="panel-body panel-body-table">
        <?php if (count($_smarty_tpl->tpl_vars['pageList']->value)>0) {?>
            <div class="row">
                <div class="col-lg-12" style="padding:15px 10px;">
                    <div class="form-group pull-left" style="width:280px;margin-right:5px;">
                        <select class="form-control select" onchange="location = 'cpanel/page-list-edit/<?php echo $_smarty_tpl->tpl_vars['pageListId']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['page']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['limit']->value;?>
/'+this.options[this.selectedIndex].value;">
                            <option value="0">Triedenie</option>
                            <option value="99" <?php if ($_smarty_tpl->tpl_vars['sort']->value==99) {?>selected<?php }?>>
                                Vzostupne
                            </option>
                            <option value="88" <?php if ($_smarty_tpl->tpl_vars['sort']->value==88) {?>selected<?php }?>>
                                Zostupne
                            </option>
                            <option value="77" <?php if ($_smarty_tpl->tpl_vars['sort']->value==77) {?>selected<?php }?>>
                                Zoradiť od A po Z.
                            </option>
                            <option value="66" <?php if ($_smarty_tpl->tpl_vars['sort']->value==66) {?>selected<?php }?>>
                                Zoradiť od Z po A
                            </option>
                            <option value="55" <?php if ($_smarty_tpl->tpl_vars['sort']->value==55) {?>selected<?php }?>>
                                Zoradiť od najstaršieho po najnovšie.
                            </option>
                            <option value="44" <?php if ($_smarty_tpl->tpl_vars['sort']->value==44) {?>selected<?php }?>>
                                Zoradiť od najnovšieho po najstaršie
                            </option>
                        </select>
                    </div>
                    <div class="form-group pull-left" style="width:80px;margin-right:5px;">
                        <select class="form-control select" onchange="location = 'cpanel/page-list-edit/<?php echo $_smarty_tpl->tpl_vars['pageListId']->value;?>
/1/'+this.options[this.selectedIndex].value+'/<?php echo $_smarty_tpl->tpl_vars['sort']->value;?>
';">
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
                                <button type="button" onclick="location = 'cpanel/page-list-edit/<?php echo $_smarty_tpl->tpl_vars['pageListId']->value;?>
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
                <table id="pageList" class="table table-bordered table-striped table-actions">
                    <thead>
                        <tr>
                            <th width="70" class="text-center">
                                <?php if (!empty($_smarty_tpl->tpl_vars['global_pages_table_header_background_image']->value)) {
echo mb_strtoupper($_smarty_tpl->tpl_vars['global_pages_table_header_background_image']->value, 'UTF-8');
} else { ?>BACKGROUND IMAGE<?php }?>
                            </th>
                            <th class="text-left">
                               <?php if (!empty($_smarty_tpl->tpl_vars['global_pages_label_page_name']->value)) {
echo mb_strtoupper($_smarty_tpl->tpl_vars['global_pages_label_page_name']->value, 'UTF-8');
} else { ?>PAGE NAME<?php }?>
                            </th>
                            <th width="200" class="text-center">
                                <?php if (!empty($_smarty_tpl->tpl_vars['global_pages_table_header_owner']->value)) {
echo mb_strtoupper($_smarty_tpl->tpl_vars['global_pages_table_header_owner']->value, 'UTF-8');
} else { ?>OWNER<?php }?>
                            </th>
                            <th width="100" class="text-center">
                                <?php if (!empty($_smarty_tpl->tpl_vars['global_pages_table_header_last_modified']->value)) {
echo mb_strtoupper($_smarty_tpl->tpl_vars['global_pages_table_header_last_modified']->value, 'UTF-8');
} else { ?>LAST MODIFIED<?php }?>
                            </th>
                            <th class="text-center" width="40">
                                <?php if (!empty($_smarty_tpl->tpl_vars['global_pages_table_header_order']->value)) {
echo mb_strtoupper($_smarty_tpl->tpl_vars['global_pages_table_header_order']->value, 'UTF-8');
} else { ?>Order<?php }?>
                            </th>
                            <th width="100" class="text-center">
                                <?php if (!empty($_smarty_tpl->tpl_vars['global_pages_table_header_publish']->value)) {
echo mb_strtoupper($_smarty_tpl->tpl_vars['global_pages_table_header_publish']->value, 'UTF-8');
} else { ?>PUBLISH<?php }?>
                            </th>
                            <th width="100" class="text-center">
                                <?php if (!empty($_smarty_tpl->tpl_vars['global_pages_table_header_remove']->value)) {
echo mb_strtoupper($_smarty_tpl->tpl_vars['global_pages_table_header_remove']->value, 'UTF-8');
} else { ?>REMOVE<?php }?>
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['pageList']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
 $_smarty_tpl->tpl_vars['i']->value = $_smarty_tpl->tpl_vars['item']->key;
?>
                            <tr>
                                <td class="text-center">
                                    <input type="hidden" name="pageList[<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
]['page-id']" value="<?php echo $_smarty_tpl->tpl_vars['item']->value->id_page;?>
" />
                                    <?php if (!is_null($_smarty_tpl->tpl_vars['item']->value->background)) {?>
                                        <img src="thumbnail/crop/<?php echo $_smarty_tpl->tpl_vars['item']->value->background->file_hash;?>
/35/35" width="35" height="35" alt="<?php echo $_smarty_tpl->tpl_vars['item']->value->background->file_name;?>
"/>
                                    <?php } else { ?>
                                        <span style="font-size:1.4em;color:red;">
                                            <i class="glyphicon glyphicon-eye-open"></i>
                                        </span>
                                    <?php }?>
                                </td>
                                <td class="text-left">
                                    <?php echo $_smarty_tpl->tpl_vars['item']->value->pagename;?>

                                </td>
                                <td class="text-left">
                                    <?php echo $_smarty_tpl->tpl_vars['item']->value->first_name;?>
&nbsp;<?php echo $_smarty_tpl->tpl_vars['item']->value->last_name;?>

                                </td>
                                <td class="text-center">
                                    <?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['item']->value->upd_date,"%d-%m-%Y");?>

                                </td>
                                <td class="text-center">
                                    <div class="form-group pull-right" style="width:80px;">
                                        <div id="ig-info" class="input-group">                                            
                                            <span class="input-group-addon">
                                                <i class="fa fa-sort-numeric-desc"></i>
                                            </span>
                                            <input type="text"  name="pageList[<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
]['position']" value="<?php echo $_smarty_tpl->tpl_vars['item']->value->position;?>
" min="1" class="form-control text-right">
                                        </div>
                                    </div>
                                </td>
                                <td class="text-center">
                                    <label class="switch">
                                        <input type="checkbox" name="pageList[<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
]['publish']" <?php if ($_smarty_tpl->tpl_vars['item']->value->publish==1) {?>checked=""<?php }?> value="1">
                                        <span></span>
                                    </label>
                                </td>
                                <td class="text-center">
                                    <label class="switch">
                                        <input type="checkbox" name="pageList[<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
]['remove']" value="1">
                                        <span></span>
                                    </label>
                                </td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div><!-- end table-responsive -->
        <?php } else { ?>
            <div class="alert alert-info" role="alert" style="margin: 15px auto;">
                <strong><?php if (!empty($_smarty_tpl->tpl_vars['global_alert_info']->value)) {
echo $_smarty_tpl->tpl_vars['global_alert_info']->value;
} else { ?>INFO!<?php }?></strong>
                <?php if (!empty($_smarty_tpl->tpl_vars['global_pages_empty_list']->value)) {
echo $_smarty_tpl->tpl_vars['global_pages_empty_list']->value;
} else { ?>There are no pages.<?php }?>
            </div>
        <?php }?>
    </div><!-- end panel-body -->
</div><!-- end panel -->
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
><?php }} ?>
