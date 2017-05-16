<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-09-28 12:32:04
         compiled from "/var/www/public/carpedmfashion.com/app/themes/cpanel/store/catalog/ordering/ajax/ordering_rule_edit.tpl" */ ?>
<?php /*%%SmartyHeaderCode:49531022757eb9c24d6b111-16193300%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
  ),
  'nocache_hash' => '49531022757eb9c24d6b111-16193300',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'data' => 0,
    'store_ordering_edit_rule' => 0,
    'global_form_select_choose' => 0,
    'global_form_button_save_changes' => 0,
    'global_form_button_close' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_57eb9c24dfac82_92073463',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57eb9c24dfac82_92073463')) {function content_57eb9c24dfac82_92073463($_smarty_tpl) {?><div class="row">
    <div class="col-lg-12">
        <?php if (!is_null($_smarty_tpl->tpl_vars['data']->value)) {?>
            <form action="cpanel/store/catalog/ordering/update" method="post" role="form">
                <input type="hidden" name="rule-id" value="<?php echo $_smarty_tpl->tpl_vars['data']->value->id_rule;?>
"/>
                <div class="panel panel-default">
                    <div class="panel-heading">                                
                        <h3 class="panel-title">
                            <?php if (!empty($_smarty_tpl->tpl_vars['store_ordering_edit_rule']->value)) {
echo mb_strtoupper($_smarty_tpl->tpl_vars['store_ordering_edit_rule']->value, 'UTF-8');
} else { ?>EDIT ORDERING RULE<?php }?>
                        </h3>
                    </div>
                    <div class="panel-body panel-body-form">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label>
                                        Pravidlo
                                    </label>
                                    <select name="type-id" class="form-control select" data-style="btn-warning">
                                        <option value="0"><?php if (!empty($_smarty_tpl->tpl_vars['global_form_select_choose']->value)) {
echo $_smarty_tpl->tpl_vars['global_form_select_choose']->value;
} else { ?>Choose...<?php }?></option>
                                        <option value="1" <?php if ($_smarty_tpl->tpl_vars['data']->value->id_type==1) {?>selected<?php }?>>Názov produktu: od A po Z</option>
                                        <option value="2" <?php if ($_smarty_tpl->tpl_vars['data']->value->id_type==2) {?>selected<?php }?>>Názov produktu: od Z po A</option>
                                        <option value="3" <?php if ($_smarty_tpl->tpl_vars['data']->value->id_type==3) {?>selected<?php }?>>Ceny: od najnižšej</option>
                                        <option value="4" <?php if ($_smarty_tpl->tpl_vars['data']->value->id_type==4) {?>selected<?php }?>>Ceny: od najvyššej</option>
                                        <option value="5" <?php if ($_smarty_tpl->tpl_vars['data']->value->id_type==5) {?>selected<?php }?>>Pridané produkty: vzostupne</option>
                                        <option value="6" <?php if ($_smarty_tpl->tpl_vars['data']->value->id_type==6) {?>selected<?php }?>>Pridané produkty: zostupne</option>
                                        <option value="7" <?php if ($_smarty_tpl->tpl_vars['data']->value->id_type==7) {?>selected<?php }?>>Upravené produkty: vzostupne</option>
                                        <option value="8" <?php if ($_smarty_tpl->tpl_vars['data']->value->id_type==8) {?>selected<?php }?>>Upravené produkty: zostupne</option>
                                        <option value="9" <?php if ($_smarty_tpl->tpl_vars['data']->value->id_type==9) {?>selected<?php }?>>Vyhľadávané produkty: vzostupne</option>
                                        <option value="10" <?php if ($_smarty_tpl->tpl_vars['data']->value->id_type==10) {?>selected<?php }?>>Vyhľadávané produkty: zostupne</option>
                                        <option value="11" <?php if ($_smarty_tpl->tpl_vars['data']->value->id_type==11) {?>selected<?php }?>>Predávané produkty: vzostupne</option>
                                        <option value="12" <?php if ($_smarty_tpl->tpl_vars['data']->value->id_type==12) {?>selected<?php }?>>Predávané produkty: zostupne</option>
                                        <option value="13" <?php if ($_smarty_tpl->tpl_vars['data']->value->id_type==13) {?>selected<?php }?>>Nevyhľadávané produkty: vzostupne</option>
                                        <option value="14" <?php if ($_smarty_tpl->tpl_vars['data']->value->id_type==14) {?>selected<?php }?>>Nevyhľadávané produkty: zostupne</option>
                                        <option value="15" <?php if ($_smarty_tpl->tpl_vars['data']->value->id_type==15) {?>selected<?php }?>>Nepredávané produkty: vzostupne</option>
                                        <option value="16" <?php if ($_smarty_tpl->tpl_vars['data']->value->id_type==16) {?>selected<?php }?>>Nepredávané produkty: zostupne</option>
                                    </select>
                                </div><!-- end form-group -->
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
        <?php } else { ?>
            <div class="alert alert-danger" role="alert">
                <strong>ERROR!</strong>
                ORDERING RULE NOT FOUND.
            </div>
        <?php }?>
    </div><!-- end col -->
</div><!-- end row -->
<?php echo '<script'; ?>
 type="text/javascript" src="extensions/cpanel/js/plugins/bootstrap/bootstrap-select.js"><?php echo '</script'; ?>
>
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
