<?php /*%%SmartyHeaderCode:10468794005809b0bd1ffd50-78561214%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'eab9089e37936a91a9773d3b0d53291409e08b1f' => 
    array (
      0 => '/var/www/public/carpedmfashion.com/core/config/../../app/themes/cpanel/store/orders/ajax/order_setting_edit_form.tpl',
      1 => 1469707247,
      2 => 'extends',
    ),
  ),
  'nocache_hash' => '10468794005809b0bd1ffd50-78561214',
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
  'unifunc' => 'content_5809b0bd31f928_07742644',
  'cache_lifetime' => 120,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5809b0bd31f928_07742644')) {function content_5809b0bd31f928_07742644($_smarty_tpl) {?><form id="createStatusForm" action="cpanel/store/orders/save-setting-rule" method="post" role="form">
    <input type="hidden" name="osr-id" value="3"/>
    <div class="panel panel-default">
        <div class="panel-heading">
            <h3 class="panel-title">
                <strong>
                    EDIT SETTING RULE                </strong> 
            </h3>
        </div><!-- end panel-header -->
        <div class="panel-body panel-body-form">
                            <div class="row">
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label>
                                STATUS<span style="color:red;">*</span>
                            </label>
                            <select name="status-id" class="form-control select" data-live-search="true" required>
                                <option value="0">Vyberte...</option>
                                                                    <option value="1" >Prijat&eacute;</option>
                                                                    <option value="2" >Čakaj&uacute;ce</option>
                                                                    <option value="3" selected>Vybaven&eacute;</option>
                                                                    <option value="4" >Testovacie</option>
                                                            </select> 
                        </div><!-- end form-group -->
                        <div class="form-group">
                            <label>
                                EMAIL
                            </label>
                                                            <select name="email-id" class="form-control select" data-live-search="true">
                                    <option value="0">Vyberte...</option>
                                                                            <option value="1" >Prijat&aacute; objedn&aacute;vka</option>
                                                                            <option value="2" selected>Objedn&aacute;vka spracovan&aacute;</option>
                                                                    </select> 
                                                    </div><!-- end form-group -->
                        <div class="form-group">
                            <label>
                                TIMER NOTIFICATION
                            </label>
                            <div class="input-group bootstrap-timepicker">
                                <input type="text" name="timer" value="" class="form-control timepicker24">
                                <span class="input-group-addon"><span class="glyphicon glyphicon-time"></span></span>
                            </div>
                        </div>
                    </div><!-- end col -->
                </div><!-- end row -->
                <div class="row" style="margin-top:15px;">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label>
                            <strong>AUTOMATIC SEND EMAIL?</strong> YES / NO                            </label><br>
                            <label class="switch">
                                <input type="checkbox" name="auto-send" value="1" checked>
                                <span></span>
                            </label>
                        </div><!-- end form-group -->
                    </div><!-- end col -->
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label>
                                ENABLE TIME NOTIFY                            </label><br>
                            <label class="switch">
                                <input type="checkbox" name="notify-send" value="1" >
                                <span></span>
                            </label>
                        </div><!-- end form-group -->
                    </div><!-- end col -->
                </div><!-- end row -->
                    </div><!-- end panel-body -->
        <div class="panel-footer">                                 
            <button type="submit" class="btn btn-success">
                <i class="fa fa-save"></i>&nbsp;VYTVORIŤ            </button>
            <button type="button" class="btn btn-default" data-dismiss="modal">
                ZAVRIEŤ            </button>
        </div><!-- end panel-footer -->  
    </div><!-- end panel -->
</form>
<script>
    $(function() {
        if($(".select").length > 0){
            $(".select").selectpicker();
        }
        if($(".timepicker24").length > 0){
            $(".timepicker24").timepicker();
        }
    });
</script><?php }} ?>
