<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-10-21 08:07:57
         compiled from "/var/www/public/carpedmfashion.com/core/config/../../app/themes/cpanel/store/orders/ajax/order_setting_edit_form.tpl" */ ?>
<?php /*%%SmartyHeaderCode:10468794005809b0bd1ffd50-78561214%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
  ),
  'nocache_hash' => '10468794005809b0bd1ffd50-78561214',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'data' => 0,
    'store_' => 0,
    'store_s' => 0,
    'statusList' => 0,
    'global_form_select_choose' => 0,
    'item' => 0,
    'emailList' => 0,
    'global_alert_info' => 0,
    'global_form_button_create' => 0,
    'global_form_button_close' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5809b0bd310549_63205661',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5809b0bd310549_63205661')) {function content_5809b0bd310549_63205661($_smarty_tpl) {?><form id="createStatusForm" action="cpanel/store/orders/save-setting-rule" method="post" role="form">
    <input type="hidden" name="osr-id" value="<?php echo $_smarty_tpl->tpl_vars['data']->value->id_rule;?>
"/>
    <div class="panel panel-default">
        <div class="panel-heading">
            <h3 class="panel-title">
                <strong>
                    <?php if (!empty($_smarty_tpl->tpl_vars['store_']->value)) {
echo mb_strtoupper($_smarty_tpl->tpl_vars['store_s']->value, 'UTF-8');
} else { ?>EDIT SETTING RULE<?php }?>
                </strong> 
            </h3>
        </div><!-- end panel-header -->
        <div class="panel-body panel-body-form">
            <?php if (!empty($_smarty_tpl->tpl_vars['statusList']->value)) {?>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label>
                                STATUS<span style="color:red;">*</span>
                            </label>
                            <select name="status-id" class="form-control select" data-live-search="true" required>
                                <option value="0"><?php if (!empty($_smarty_tpl->tpl_vars['global_form_select_choose']->value)) {
echo $_smarty_tpl->tpl_vars['global_form_select_choose']->value;
} else { ?>Choose...<?php }?></option>
                                <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['statusList']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
                                    <option value="<?php echo $_smarty_tpl->tpl_vars['item']->value->id_status;?>
" <?php if ($_smarty_tpl->tpl_vars['data']->value->id_status===$_smarty_tpl->tpl_vars['item']->value->id_status) {?>selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['item']->value->status_name;?>
</option>
                                <?php } ?>
                            </select> 
                        </div><!-- end form-group -->
                        <div class="form-group">
                            <label>
                                EMAIL
                            </label>
                            <?php if (!empty($_smarty_tpl->tpl_vars['emailList']->value)) {?>
                                <select name="email-id" class="form-control select" data-live-search="true">
                                    <option value="0"><?php if (!empty($_smarty_tpl->tpl_vars['global_form_select_choose']->value)) {
echo $_smarty_tpl->tpl_vars['global_form_select_choose']->value;
} else { ?>Choose...<?php }?></option>
                                    <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['emailList']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
                                        <option value="<?php echo $_smarty_tpl->tpl_vars['item']->value->id_email;?>
" <?php if ($_smarty_tpl->tpl_vars['data']->value->id_email===$_smarty_tpl->tpl_vars['item']->value->id_email) {?>selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['item']->value->email_name;?>
</option>
                                    <?php } ?>
                                </select> 
                            <?php } else { ?>
                                <div class="alert alert-info" role="alert" style="padding: 5px 15px;">
                                    <span style="font-size:11px;">
                                        <i class="fa fa-info-circle"></i>
                                        <strong>There are no emails.</strong>
                                    </span>
                                </div>
                            <?php }?>
                        </div><!-- end form-group -->
                        <div class="form-group">
                            <label>
                                TIMER NOTIFICATION
                            </label>
                            <div class="input-group bootstrap-timepicker">
                                <input type="text" name="timer" value="<?php echo $_smarty_tpl->tpl_vars['data']->value->timer;?>
" class="form-control timepicker24">
                                <span class="input-group-addon"><span class="glyphicon glyphicon-time"></span></span>
                            </div>
                        </div>
                    </div><!-- end col -->
                </div><!-- end row -->
                <div class="row" style="margin-top:15px;">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label>
                            <?php if (!empty($_smarty_tpl->tpl_vars['store_']->value)) {
echo $_smarty_tpl->tpl_vars['store_']->value;
} else { ?><strong>AUTOMATIC SEND EMAIL?</strong> YES / NO<?php }?>
                            </label><br>
                            <label class="switch">
                                <input type="checkbox" name="auto-send" value="1" <?php if ($_smarty_tpl->tpl_vars['data']->value->is_auto_sendemail==1) {?>checked<?php }?>>
                                <span></span>
                            </label>
                        </div><!-- end form-group -->
                    </div><!-- end col -->
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label>
                                <?php if (!empty($_smarty_tpl->tpl_vars['store_']->value)) {
echo $_smarty_tpl->tpl_vars['store_']->value;
} else { ?>ENABLE TIME NOTIFY<?php }?>
                            </label><br>
                            <label class="switch">
                                <input type="checkbox" name="notify-send" value="1" <?php if ($_smarty_tpl->tpl_vars['data']->value->is_auto_notify==1) {?>checked<?php }?>>
                                <span></span>
                            </label>
                        </div><!-- end form-group -->
                    </div><!-- end col -->
                </div><!-- end row -->
            <?php } else { ?>
                <div class="alert alert-warning" role="alert">
                    <strong><?php if (!empty($_smarty_tpl->tpl_vars['global_alert_info']->value)) {
echo $_smarty_tpl->tpl_vars['global_alert_info']->value;
} else { ?>INFO<?php }?>!</strong> 
                    Nemáte žiadne stavy v okruhu objednávky.Najprv je nutné si vytvoriť stav/stavy v sekcii Stavy a priradiť do okruhu objednávky.
                </div>
            <?php }?>
        </div><!-- end panel-body -->
        <div class="panel-footer">                                 
            <button type="submit" class="btn btn-success">
                <i class="fa fa-save"></i>&nbsp;<?php if (!empty($_smarty_tpl->tpl_vars['global_form_button_create']->value)) {
echo mb_strtoupper($_smarty_tpl->tpl_vars['global_form_button_create']->value, 'UTF-8');
} else { ?>CREATE<?php }?>
            </button>
            <button type="button" class="btn btn-default" data-dismiss="modal">
                <?php if (!empty($_smarty_tpl->tpl_vars['global_form_button_close']->value)) {
echo mb_strtoupper($_smarty_tpl->tpl_vars['global_form_button_close']->value, 'UTF-8');
} else { ?>CLOSE<?php }?>
            </button>
        </div><!-- end panel-footer -->  
    </div><!-- end panel -->
</form>
<?php echo '<script'; ?>
>
    $(function() {
        if($(".select").length > 0){
            $(".select").selectpicker();
        }
        if($(".timepicker24").length > 0){
            $(".timepicker24").timepicker();
        }
    });
<?php echo '</script'; ?>
><?php }} ?>
