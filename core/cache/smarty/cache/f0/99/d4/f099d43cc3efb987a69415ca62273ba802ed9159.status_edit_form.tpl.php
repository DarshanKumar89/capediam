<?php /*%%SmartyHeaderCode:150516455557dfa6b5743524-62225232%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f099d43cc3efb987a69415ca62273ba802ed9159' => 
    array (
      0 => '/var/www/public/carpedmfashion.com/app/themes/cpanel/store/statuses/ajax/status_edit_form.tpl',
      1 => 1469707249,
      2 => 'extends',
    ),
  ),
  'nocache_hash' => '150516455557dfa6b5743524-62225232',
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
  'unifunc' => 'content_57dfa6b592c5e8_44058497',
  'cache_lifetime' => 120,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57dfa6b592c5e8_44058497')) {function content_57dfa6b592c5e8_44058497($_smarty_tpl) {?><style>
.colorpicker, .colorpicker * {
    z-index: 999999;
}
</style>
    <form action="cpanel/store/status/update" method="post" role="form">
        <input type="hidden" name="status-id" value="1"/>
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title">
                    <strong>
                        EDITÁCIA STAVU                    </strong> 
                </h3>
            </div><!-- end panel-header -->
            <div class="panel-body panel-body-form">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label>
                                SEKCIA                                <span style="color:red;">*</span>
                            </label>
                            <select name="pattern-id" class="form-control select"required="">
                                <option value="1" >
                                    ARTIKEL                                </option>
                                <option value="2" >
                                    NÁKUPNÝ KOSÍK                                </option>
                                <option value="3" selected>
                                    OBJEDNÁVKA                                </option>
                                <option value="4" >
                                    SKLAD                                </option>
                            </select>
                            <span class="help-block">Vyberte si sekciu, ku ktorej má byť pridelený stav</span>
                        </div><!-- end form-group -->
                    </div><!-- end col -->
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label>Farba</label>
                            <div class="input-group color" data-color="#5810f2" data-color-format="hex" id="cpicker">
                                <input type="text" name="color" value="#5810f2" class="form-control"/>
                                <span class="input-group-addon">
                                    <i style="background-color: #5810f2"></i>
                                </span>
                            </div>
                        </div><!-- end form-group -->
                    </div><!-- end col -->
                    <div class="col-lg-12">
                                                    <div class="panel panel-default tabs">                            
                                <ul class="nav nav-tabs" role="tablist" style="margin-top: -2px;padding:0;">
                                                                            <li >
                                            <a href="#m-tab-en-GB" role="tab" data-toggle="tab">
                                                <span class="flag-icon flag-icon-en-GB"  style="width:23px;height:23px;"></span>
                                                <span style="position: relative;top: 5.5px;left: 1.5px;">English (United Kingdom)</span>
                                            </a>
                                        </li>
                                                                            <li >
                                            <a href="#m-tab-it-IT" role="tab" data-toggle="tab">
                                                <span class="flag-icon flag-icon-it-IT"  style="width:23px;height:23px;"></span>
                                                <span style="position: relative;top: 5.5px;left: 1.5px;">Italian (Italy)</span>
                                            </a>
                                        </li>
                                                                            <li >
                                            <a href="#m-tab-sk" role="tab" data-toggle="tab">
                                                <span class="flag-icon flag-icon-sk"  style="width:23px;height:23px;"></span>
                                                <span style="position: relative;top: 5.5px;left: 1.5px;">Slovak</span>
                                            </a>
                                        </li>
                                                                    </ul>                            
                                <div class="panel-body tab-content">
                                                                            <div class="tab-pane " id="m-tab-en-GB">
                                            <div class="form-group">
                                                <label>
                                                    NÁZOV STAVU                                                    <span style="color:red;">*</span>
                                                </label>
                                                <div class="input-group">
                                                    <span class="input-group-addon">
                                                        <span class="flag-icon flag-icon-en-GB"></span>
                                                    </span>
                                                    <input type="text" name="statuses-lang[51]['status-name']" value="" class="form-control" minlength="5" maxlength="150" required="">
                                                    <span class="input-group-addon">
                                                        <i class="fa fa-file-text-o"></i>
                                                    </span>
                                                </div>
                                                <span class="help-block">Neplatné znaky ;=#{ }</span>
                                            </div><!-- end form-group -->
                                        </div>
                                                                            <div class="tab-pane " id="m-tab-it-IT">
                                            <div class="form-group">
                                                <label>
                                                    NÁZOV STAVU                                                    <span style="color:red;">*</span>
                                                </label>
                                                <div class="input-group">
                                                    <span class="input-group-addon">
                                                        <span class="flag-icon flag-icon-it-IT"></span>
                                                    </span>
                                                    <input type="text" name="statuses-lang[120]['status-name']" value="" class="form-control" minlength="5" maxlength="150" required="">
                                                    <span class="input-group-addon">
                                                        <i class="fa fa-file-text-o"></i>
                                                    </span>
                                                </div>
                                                <span class="help-block">Neplatné znaky ;=#{ }</span>
                                            </div><!-- end form-group -->
                                        </div>
                                                                            <div class="tab-pane " id="m-tab-sk">
                                            <div class="form-group">
                                                <label>
                                                    NÁZOV STAVU                                                    <span style="color:red;">*</span>
                                                </label>
                                                <div class="input-group">
                                                    <span class="input-group-addon">
                                                        <span class="flag-icon flag-icon-sk"></span>
                                                    </span>
                                                    <input type="text" name="statuses-lang[189]['status-name']" value="Prijat&eacute;" class="form-control" minlength="5" maxlength="150" required="">
                                                    <span class="input-group-addon">
                                                        <i class="fa fa-file-text-o"></i>
                                                    </span>
                                                </div>
                                                <span class="help-block">Neplatné znaky ;=#{ }</span>
                                            </div><!-- end form-group -->
                                        </div>
                                                                    </div><!-- end panel-body -->
                            </div><!-- end panel -->
                                            </div><!-- end col -->
                </div><!-- end row -->
            </div><!-- end panel-body -->
            <div class="panel-footer">                                 
                <button type="submit" class="btn btn-success">
                    <i class="fa fa-save"></i>&nbsp;ULOŽIŤ ZMENY                </button>
                <button type="button" class="btn btn-default" data-dismiss="modal">
                    ZAVRIEŤ                </button>
            </div><!-- end panel-footer -->  
        </div><!-- end panel -->
    </form>
<script type="text/javascript" src="extensions/cpanel/js/plugins/bootstrap/bootstrap-select.js"></script>
<script type="text/javascript" src="extensions/cpanel/js/plugins/bootstrap/bootstrap-colorpicker.js"></script>
<script>
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
</script><?php }} ?>
