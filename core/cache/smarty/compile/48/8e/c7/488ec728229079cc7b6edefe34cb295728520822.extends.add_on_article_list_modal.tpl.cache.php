<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-09-02 11:11:02
         compiled from "/var/www/public/carpedmfashion.com/core/config/../../app/themes/cpanel/store/catalog/category/ajax/add_on_article_list_modal.tpl" */ ?>
<?php /*%%SmartyHeaderCode:122705424657c94226b6d175-34156156%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
  ),
  'nocache_hash' => '122705424657c94226b6d175-34156156',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'articleList' => 0,
    'store_articles_table_header_articles' => 0,
    'pagination_info' => 0,
    'global_alert_please_wait' => 0,
    'limit' => 0,
    'keywords' => 0,
    'pagination' => 0,
    'store_articles_table_header_picture' => 0,
    'store_articles_table_header_sku' => 0,
    'store_articles_table_header_article_name' => 0,
    'global_catalog_table_header_add' => 0,
    'item' => 0,
    'global_form_button_add_selections' => 0,
    'global_form_button_close' => 0,
    'global_alert_info' => 0,
    'global_pages_empty_list' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_57c94226cdbfa3_94594247',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57c94226cdbfa3_94594247')) {function content_57c94226cdbfa3_94594247($_smarty_tpl) {?><style>
    #modal-lyr {
        position: relative;
    }
    
    #ael {
        display: none;
        margin: 15px 0 0 0;
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
    .iw {
        display: inline-block;
        cursor: pointer;
    }
    .f-img {
        background: #FFFFFF;
        display: none;
        position: absolute;
        top: 10%;
        left: 2.5%;
        right: 2.5%;
        width: 95%;
        height: 600px;
        z-index: 999;
        border: 2px solid #3fbae4;
        border-radius: 9px;
    }
    .cls {
        position: absolute;
        top: -19px;
        right: -16px;
        width: 45px;
        height: 45px;
        margin: 0;
        padding: 7px;
        line-height: 100%;
        border-radius: 100%;
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
    <div class="f-img"><!-- --></div>
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <?php if (count($_smarty_tpl->tpl_vars['articleList']->value)>0) {?>
                <div class="panel panel-default">
                    <div class="panel-heading ui-draggable-handle">
                        <h3 class="panel-title">
                            <?php if (!empty($_smarty_tpl->tpl_vars['store_articles_table_header_articles']->value)) {
echo mb_strtoupper($_smarty_tpl->tpl_vars['store_articles_table_header_articles']->value, 'UTF-8');
} else { ?>ARTICLE LIST<?php }?>&nbsp;&nbsp;
                            <span style="background:#000;position: relative;top: -1px;left: 5px;padding: 7px 11px;font-size: .8em;color:#fff;border-radius: 9px;"><?php echo $_smarty_tpl->tpl_vars['pagination_info']->value;?>
</span>
                        </h3>
                        <div id="messenger" class="alert pull-right" role="alert"><!-- --></div>
                    </div>
                    <div id="ow" class="panel-body panel-body-table panel-body-form">
                        <div class="ovl row">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <p class="txt"><?php if (!empty($_smarty_tpl->tpl_vars['global_alert_please_wait']->value)) {
echo $_smarty_tpl->tpl_vars['global_alert_please_wait']->value;
} else { ?>Please wait<?php }?>...</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="padding:15px 10px;">
                                <div class="form-group pull-left" style="width:150px;margin-right:5px;">
                                    <select id="m-c-control" class="form-control select">
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
                                    <select id="perPage" class="form-control select">
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
                                        <input type="text" id="m-search" value="<?php echo $_smarty_tpl->tpl_vars['keywords']->value;?>
" placeholder="Hladať" class="form-control">
                                        <span class="input-group-btn">
                                            <button type="button" class="btn btn-default btn-s-send">
                                                <i class="fa fa-search"></i>
                                            </button>
                                        </span>
                                    </div>
                                </div>
                                <?php echo $_smarty_tpl->tpl_vars['pagination']->value;?>

                            </div><!-- end col -->
                        </div><!-- end row -->
                        <div class="table-responsive" style="border-top:1px solid #E5E5E5;">
                            <table id="addOnArticleList" class="table table-bordered table-striped table-actions">
                                <thead>
                                    <tr>
                                        <th width="40" class="text-center">
                                            #
                                        </th>
                                        <th width="30" class="text-center">
                                            <?php if (!empty($_smarty_tpl->tpl_vars['store_articles_table_header_picture']->value)) {
echo mb_strtoupper($_smarty_tpl->tpl_vars['store_articles_table_header_picture']->value, 'UTF-8');
} else { ?>IMAGE<?php }?>
                                        </th>
                                        <th width="100" class="text-center">
                                            <?php if (!empty($_smarty_tpl->tpl_vars['store_articles_table_header_sku']->value)) {
echo mb_strtoupper($_smarty_tpl->tpl_vars['store_articles_table_header_sku']->value, 'UTF-8');
} else { ?>SKU<?php }?>
                                        </th>
                                        <th class="text-left">
                                            <?php if (!empty($_smarty_tpl->tpl_vars['store_articles_table_header_article_name']->value)) {
echo mb_strtoupper($_smarty_tpl->tpl_vars['store_articles_table_header_article_name']->value, 'UTF-8');
} else { ?>ARTICLE NAME<?php }?>
                                        </th>
                                        <th width="110" class="text-center">
                                            <?php if (!empty($_smarty_tpl->tpl_vars['global_catalog_table_header_add']->value)) {
echo mb_strtoupper($_smarty_tpl->tpl_vars['global_catalog_table_header_add']->value, 'UTF-8');
} else { ?>ADD<?php }?>
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['articleList']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
 $_smarty_tpl->tpl_vars['i']->value = $_smarty_tpl->tpl_vars['item']->key;
?>
                                        <tr>
                                            <td class="text-center">
                                                <input type="checkbox" name="on" value="<?php echo $_smarty_tpl->tpl_vars['item']->value->id_article;?>
">
                                            </td>
                                            <td class="text-center">
                                                <?php if (!is_null($_smarty_tpl->tpl_vars['item']->value->image)) {?>
                                                    <img src="<?php echo $_smarty_tpl->tpl_vars['item']->value->image->file_url;?>
" height="35" alt="<?php echo $_smarty_tpl->tpl_vars['item']->value->image->file_name;?>
" class="iw"/>
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
                                                <button type="button" data-article-id="<?php echo $_smarty_tpl->tpl_vars['item']->value->id_article;?>
" class="btn btn-success push-a">
                                                    &nbsp;&nbsp;<span class="fa fa-plus-square"></span>
                                                </button>
                                            </td>
                                        </tr>
                                    <?php } ?>
                                </tbody>
                             </table>
                        </div><!-- end table-responsive -->
                    </div><!-- end panel-body -->
                    <div class="panel-footer">
                        <button type="button" id="addSelections" class="btn btn-success">
                            <?php if (!empty($_smarty_tpl->tpl_vars['global_form_button_add_selections']->value)) {
echo mb_strtoupper($_smarty_tpl->tpl_vars['global_form_button_add_selections']->value, 'UTF-8');
} else { ?>ADD SELECTIONS<?php }?>
                        </button>
                        <button type="button" class="btn btn-default" data-dismiss="modal">
                            <?php if (!empty($_smarty_tpl->tpl_vars['global_form_button_close']->value)) {
echo mb_strtoupper($_smarty_tpl->tpl_vars['global_form_button_close']->value, 'UTF-8');
} else { ?>CLOSE<?php }?>
                        </button>
                    </div><!-- end panel-footer -->
                </div><!-- end panel -->
            <?php } else { ?>
                <div class="alert alert-info" role="alert">
                    <strong><?php if (!empty($_smarty_tpl->tpl_vars['global_alert_info']->value)) {
echo mb_strtoupper($_smarty_tpl->tpl_vars['global_alert_info']->value, 'UTF-8');
} else { ?>INFO<?php }?>!</strong>
                    <?php if (!empty($_smarty_tpl->tpl_vars['global_pages_empty_list']->value)) {
echo $_smarty_tpl->tpl_vars['global_pages_empty_list']->value;
} else { ?>There are no articles.<?php }?>
                </div>
            <?php }?>
        </div><!-- end col -->
    </div><!-- end row -->
</div><!-- end modal-lyr --><?php }} ?>
