<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-09-19 10:49:57
         compiled from "/var/www/public/carpedmfashion.com/app/themes/cpanel/store/statuses/ajax/status_edit_form.tpl" */ ?>
<?php /*%%SmartyHeaderCode:150516455557dfa6b5743524-62225232%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
  ),
  'nocache_hash' => '150516455557dfa6b5743524-62225232',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'data' => 0,
    'store_statuses_modal_window_edit_status' => 0,
    'store_statuses_modal_window_form_label_status_section' => 0,
    'store_statuses_modal_window_form_label_option_article' => 0,
    'store_statuses_modal_window_form_label_option_cart' => 0,
    'store_statuses_modal_window_form_label_option_order' => 0,
    'store_statuses_modal_window_form_label_option_warehouse' => 0,
    'store_statuses_modal_window_form_help_assigned_status' => 0,
    'global_form_header_color' => 0,
    'languages' => 0,
    'i' => 0,
    'lang' => 0,
    'store_statuses_modal_window_form_label_option_status_name' => 0,
    'global_form_helper_invalid_characters' => 0,
    'global_alert_warning' => 0,
    'global_alert_no_languages' => 0,
    'global_form_button_save_changes' => 0,
    'global_form_button_close' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_57dfa6b59143a2_16179128',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57dfa6b59143a2_16179128')) {function content_57dfa6b59143a2_16179128($_smarty_tpl) {?><style>
.colorpicker, .colorpicker * {
    z-index: 999999;
}
</style>
<?php if (is_null($_smarty_tpl->tpl_vars['data']->value)) {?>
<div class="alert alert-warning" role="alert">
    <strong>Warning!</strong> Status not found.
</div>
<?php } else { ?>
    <form action="cpanel/store/status/update" method="post" role="form">
        <input type="hidden" name="status-id" value="<?php echo $_smarty_tpl->tpl_vars['data']->value->id_status;?>
"/>
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title">
                    <strong>
                        <?php if (!empty($_smarty_tpl->tpl_vars['store_statuses_modal_window_edit_status']->value)) {
echo mb_strtoupper($_smarty_tpl->tpl_vars['store_statuses_modal_window_edit_status']->value, 'UTF-8');
} else { ?>EDIT STATUS<?php }?>
                    </strong> 
                </h3>
            </div><!-- end panel-header -->
            <div class="panel-body panel-body-form">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label>
                                <?php if (!empty($_smarty_tpl->tpl_vars['store_statuses_modal_window_form_label_status_section']->value)) {
echo mb_strtoupper($_smarty_tpl->tpl_vars['store_statuses_modal_window_form_label_status_section']->value, 'UTF-8');
} else { ?>SECTION<?php }?>
                                <span style="color:red;">*</span>
                            </label>
                            <select name="pattern-id" class="form-control select"required="">
                                <option value="1" <?php if ($_smarty_tpl->tpl_vars['data']->value->id_pattern==1) {?>selected<?php }?>>
                                    <?php if (!empty($_smarty_tpl->tpl_vars['store_statuses_modal_window_form_label_option_article']->value)) {
echo mb_strtoupper($_smarty_tpl->tpl_vars['store_statuses_modal_window_form_label_option_article']->value, 'UTF-8');
} else { ?>ARTICLE<?php }?>
                                </option>
                                <option value="2" <?php if ($_smarty_tpl->tpl_vars['data']->value->id_pattern==2) {?>selected<?php }?>>
                                    <?php if (!empty($_smarty_tpl->tpl_vars['store_statuses_modal_window_form_label_option_cart']->value)) {
echo mb_strtoupper($_smarty_tpl->tpl_vars['store_statuses_modal_window_form_label_option_cart']->value, 'UTF-8');
} else { ?>CART<?php }?>
                                </option>
                                <option value="3" <?php if ($_smarty_tpl->tpl_vars['data']->value->id_pattern==3) {?>selected<?php }?>>
                                    <?php if (!empty($_smarty_tpl->tpl_vars['store_statuses_modal_window_form_label_option_order']->value)) {
echo mb_strtoupper($_smarty_tpl->tpl_vars['store_statuses_modal_window_form_label_option_order']->value, 'UTF-8');
} else { ?>ORDER<?php }?>
                                </option>
                                <option value="4" <?php if ($_smarty_tpl->tpl_vars['data']->value->id_pattern==4) {?>selected<?php }?>>
                                    <?php if (!empty($_smarty_tpl->tpl_vars['store_statuses_modal_window_form_label_option_warehouse']->value)) {
echo mb_strtoupper($_smarty_tpl->tpl_vars['store_statuses_modal_window_form_label_option_warehouse']->value, 'UTF-8');
} else { ?>WAREHOUSE<?php }?>
                                </option>
                            </select>
                            <span class="help-block"><?php if (!empty($_smarty_tpl->tpl_vars['store_statuses_modal_window_form_help_assigned_status']->value)) {
echo $_smarty_tpl->tpl_vars['store_statuses_modal_window_form_help_assigned_status']->value;
} else { ?>Choose a section to which is to be assigned status.<?php }?></span>
                        </div><!-- end form-group -->
                    </div><!-- end col -->
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label><?php if (!empty($_smarty_tpl->tpl_vars['global_form_header_color']->value)) {
echo $_smarty_tpl->tpl_vars['global_form_header_color']->value;
} else { ?>Color<?php }?></label>
                            <div class="input-group color" data-color="<?php echo $_smarty_tpl->tpl_vars['data']->value->color;?>
" data-color-format="hex" id="cpicker">
                                <input type="text" name="color" value="<?php echo $_smarty_tpl->tpl_vars['data']->value->color;?>
" class="form-control"/>
                                <span class="input-group-addon">
                                    <i style="background-color: <?php echo $_smarty_tpl->tpl_vars['data']->value->color;?>
"></i>
                                </span>
                            </div>
                        </div><!-- end form-group -->
                    </div><!-- end col -->
                    <div class="col-lg-12">
                        <?php if (!empty($_smarty_tpl->tpl_vars['languages']->value)) {?>
                            <div class="panel panel-default tabs">                            
                                <ul class="nav nav-tabs" role="tablist" style="margin-top: -2px;padding:0;">
                                    <?php  $_smarty_tpl->tpl_vars['lang'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['lang']->_loop = false;
 $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['languages']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['lang']->key => $_smarty_tpl->tpl_vars['lang']->value) {
$_smarty_tpl->tpl_vars['lang']->_loop = true;
 $_smarty_tpl->tpl_vars['i']->value = $_smarty_tpl->tpl_vars['lang']->key;
?>
                                        <li <?php if ($_smarty_tpl->tpl_vars['i']->value==0) {?>class="active"<?php }?>>
                                            <a href="#m-tab-<?php echo $_smarty_tpl->tpl_vars['lang']->value->language_code;?>
" role="tab" data-toggle="tab">
                                                <span class="flag-icon flag-icon-<?php echo $_smarty_tpl->tpl_vars['lang']->value->language_code;?>
"  style="width:23px;height:23px;"></span>
                                                <span style="position: relative;top: 5.5px;left: 1.5px;"><?php echo $_smarty_tpl->tpl_vars['lang']->value->lang_name;?>
</span>
                                            </a>
                                        </li>
                                    <?php } ?>
                                </ul>                            
                                <div class="panel-body tab-content">
                                    <?php  $_smarty_tpl->tpl_vars['lang'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['lang']->_loop = false;
 $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['languages']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['lang']->key => $_smarty_tpl->tpl_vars['lang']->value) {
$_smarty_tpl->tpl_vars['lang']->_loop = true;
 $_smarty_tpl->tpl_vars['i']->value = $_smarty_tpl->tpl_vars['lang']->key;
?>
                                        <div class="tab-pane <?php if ($_smarty_tpl->tpl_vars['i']->value==0) {?>active<?php }?>" id="m-tab-<?php echo $_smarty_tpl->tpl_vars['lang']->value->language_code;?>
">
                                            <div class="form-group">
                                                <label>
                                                    <?php if (!empty($_smarty_tpl->tpl_vars['store_statuses_modal_window_form_label_option_status_name']->value)) {
echo mb_strtoupper($_smarty_tpl->tpl_vars['store_statuses_modal_window_form_label_option_status_name']->value, 'UTF-8');
} else { ?>STATUS NAME<?php }?>
                                                    <span style="color:red;">*</span>
                                                </label>
                                                <div class="input-group">
                                                    <span class="input-group-addon">
                                                        <span class="flag-icon flag-icon-<?php echo $_smarty_tpl->tpl_vars['lang']->value->language_code;?>
"></span>
                                                    </span>
                                                    <input type="text" name="statuses-lang[<?php echo $_smarty_tpl->tpl_vars['lang']->value->id_lang;?>
]['status-name']" value="<?php if (isset($_smarty_tpl->tpl_vars['data']->value->lang[$_smarty_tpl->tpl_vars['lang']->value->id_lang]->status_name)) {
echo $_smarty_tpl->tpl_vars['data']->value->lang[$_smarty_tpl->tpl_vars['lang']->value->id_lang]->status_name;
}?>" class="form-control" minlength="5" maxlength="150" required="">
                                                    <span class="input-group-addon">
                                                        <i class="fa fa-file-text-o"></i>
                                                    </span>
                                                </div>
                                                <span class="help-block"><?php if (!empty($_smarty_tpl->tpl_vars['global_form_helper_invalid_characters']->value)) {
echo $_smarty_tpl->tpl_vars['global_form_helper_invalid_characters']->value;
} else { ?>Invalid characters <>;=#{ }<?php }?></span>
                                            </div><!-- end form-group -->
                                        </div>
                                    <?php } ?>
                                </div><!-- end panel-body -->
                            </div><!-- end panel -->
                        <?php } else { ?>
                            <div class="alert alert-warning" role="alert" style="margin-top:25px;">
                                <strong><?php if (!empty($_smarty_tpl->tpl_vars['global_alert_warning']->value)) {
echo mb_strtoupper($_smarty_tpl->tpl_vars['global_alert_warning']->value, 'UTF-8');
} else { ?>WARNING!<?php }?>!</strong>
                                <?php if (!empty($_smarty_tpl->tpl_vars['global_alert_no_languages']->value)) {
echo $_smarty_tpl->tpl_vars['global_alert_no_languages']->value;
} else { ?>Is not actived any from of the supported languages.<?php }?>
                            </div>
                        <?php }?>
                    </div><!-- end col -->
                </div><!-- end row -->
            </div><!-- end panel-body -->
            <div class="panel-footer">                                 
                <button type="submit" class="btn btn-success">
                    <i class="fa fa-save"></i>&nbsp;<?php if (!empty($_smarty_tpl->tpl_vars['global_form_button_save_changes']->value)) {
echo mb_strtoupper($_smarty_tpl->tpl_vars['global_form_button_save_changes']->value, 'UTF-8');
} else { ?>SAVE CHANGES<?php }?>
                </button>
                <button type="button" class="btn btn-default" data-dismiss="modal">
                    <?php if (!empty($_smarty_tpl->tpl_vars['global_form_button_close']->value)) {
echo mb_strtoupper($_smarty_tpl->tpl_vars['global_form_button_close']->value, 'UTF-8');
} else { ?>CLOSE<?php }?>
                </button>
            </div><!-- end panel-footer -->  
        </div><!-- end panel -->
    </form>
<?php }?>
<?php echo '<script'; ?>
 type="text/javascript" src="extensions/cpanel/js/plugins/bootstrap/bootstrap-select.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="extensions/cpanel/js/plugins/bootstrap/bootstrap-colorpicker.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
>
$(function(){
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
    if($("#cpicker").length > 0){
        $('#cpicker').colorpicker();
    }
});
<?php echo '</script'; ?>
><?php }} ?>
