<?php /*%%SmartyHeaderCode:87703740057166415be39a4-04806846%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7203709f57049d6a9cf356a97042264213a476dc' => 
    array (
      0 => '/Users/henrich/Work/SlatyFork/carpedm.mozayc.net/core/config/../../app/themes/cpanel/slider/ajax/slider_captions_form.tpl',
      1 => 1460547454,
      2 => 'extends',
    ),
  ),
  'nocache_hash' => '87703740057166415be39a4-04806846',
  'variables' => 
  array (
    'languages' => 0,
    'sliderId' => 0,
    'itemId' => 0,
    'global_alert_success' => 0,
    'global_slider_alert_success_message' => 0,
    'i' => 0,
    'lang' => 0,
    'global_slider_form_label_web_link' => 0,
    'captions' => 0,
    'global_slider_form_label_title' => 0,
    'global_slider_form_label_description' => 0,
    'global_form_button_save_changes' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_57166415c1e486_95364915',
  'cache_lifetime' => 120,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57166415c1e486_95364915')) {function content_57166415c1e486_95364915($_smarty_tpl) {?>    <form id="captionsForm" role="form">
        <input type="hidden" name="command" value="2"/>
        <input type="hidden" name="sliderId" value="1"/>
        <input type="hidden" name="itemId" value="2671"/>
        <div id="mAlert" class="row" style="display:none;">
            <div class="col-lg-12">
                <div class="alert alert-success" role="alert">
                    <strong>ÚSPECH!</strong>
                    Titulky boli úspešne uložené.                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">  
                <!-- START TABS -->                                
                <div class="panel panel-default tabs" style="margin:5px 0;">                            
                    <ul class="nav nav-tabs" role="tablist" style="margin-top: -2px;padding:0;">
                                                    <li class="active">
                                <a href="#tab-sk" role="tab" data-toggle="tab">
                                    <span class="flag-icon flag-icon-sk"  style="width:23px;height:23px;"></span>
                                    <span style="position: relative;top: 5.5px;left: 1.5px;">Slovak</span>
                                </a>
                            </li>
                                            </ul>                       
                    <div class="panel-body tab-content">
                                                    <div class="tab-pane active" id="tab-sk">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label>
                                                WEB Odkaz                                            </label>
                                            <div class="input-group">
                                                <span class="input-group-addon">
                                                    <span class="flag-icon flag-icon-sk"></span>
                                                </span>
                                                <input type="text" name="captions[189]['link']" value="damska-kolekcia-blackgrey" class="form-control">
                                                <span class="input-group-addon">
                                                    <i class="fa fa-external-link"></i>
                                                </span>
                                            </div>
                                        </div><!-- end form-group -->
                                        <div class="form-group">
                                            <label>
                                                Titulka                                            </label>
                                            <div class="input-group">
                                                <span class="input-group-addon">
                                                    <span class="flag-icon flag-icon-sk"></span>
                                                </span>
                                                <input type="text" name="captions[189]['title']" value="NOV&Aacute; KOLEKCIA" class="form-control">
                                                <span class="input-group-addon">
                                                    <i class="fa fa-file-text-o"></i>
                                                </span>
                                            </div>
                                        </div><!-- end form-group -->
                                        <div class="form-group">
                                            <label>
                                                Popis                                            </label>
                                            <div class="input-group">
                                                <span class="input-group-addon">
                                                    <span class="flag-icon flag-icon-sk"></span>
                                                </span>
                                                <textarea name="captions[189]['description']" class="form-control" rows="5">BLACKGREY</textarea>
                                                <span class="input-group-addon">
                                                    <i class="fa fa-file-text-o"></i>
                                                </span>
                                            </div>
                                        </div><!-- end form-group -->
                                    </div><!-- end col -->
                                </div><!-- end row -->
                            </div><!-- end tab -->
                                            </div><!-- end panel-body -->
                </div><!-- end pane -->
            </div><!-- end col -->
        </div><!-- end row -->
        <div class="row" style="margin-top:25px;">
            <div class="col-lg-12">
                <button type="submit" class="btn btn-block btn-success">
                    <i class="fa fa-save"></i>&nbsp;ULOŽIŤ ZMENY                </button>
            </div>
        </div>
    </form>
<script type="text/javascript">
$(function() {
    $('#captionsForm').submit(function() {
        $.ajax({
            url: 'cpanel/slider-captions',
            type: 'POST',
            data: $(this).serialize(),
            success: function(response) {
                if(response.status == 200) {
                    $('#mAlert').fadeIn( 300 ).delay( 800 ).fadeOut( 400 );
                }
            },
            error: function(data) {
                console.log(data);
            },
            dataType: 'JSON'
        });
        return false;
    });
});
</script><?php }} ?>
