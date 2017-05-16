<?php /*%%SmartyHeaderCode:182478874957fcbcc75f74a4-52262324%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7314135a83f308d6cda975e803c664214497edde' => 
    array (
      0 => '/var/www/public/carpedmfashion.com/core/config/../../app/themes/cpanel/slider/ajax/slider_captions_form.tpl',
      1 => 1469707235,
      2 => 'extends',
    ),
  ),
  'nocache_hash' => '182478874957fcbcc75f74a4-52262324',
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
  'unifunc' => 'content_57fcbcc775d6e2_57708025',
  'cache_lifetime' => 120,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57fcbcc775d6e2_57708025')) {function content_57fcbcc775d6e2_57708025($_smarty_tpl) {?>  <form id="captionsForm" role="form">
    <input type="hidden" name="command" value="2"/>
    <input type="hidden" name="sliderId" value="1"/>
    <input type="hidden" name="itemId" value="3100"/>
    <div id="mAlert" class="row" style="display:none;">
      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="alert alert-success" role="alert">
            <strong>
                              SUCCESS
              !
            </strong>
                          Captions have been successfully saved.
                    </div><!-- end alert -->
      </div><!-- end col -->
    </div><!-- end mAlert -->
    <div class="row">
      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">                                 
        <div class="panel panel-default tabs" style="margin:5px 0;">                            
          <ul class="nav nav-tabs" role="tablist" style="margin-top: -2px;padding:0;">
                          <li >
                <a href="#tab-en-GB" role="tab" data-toggle="tab">
                    <span class="flag-icon flag-icon-en-GB"  style="width:23px;height:23px;"></span>
                    <span style="position: relative;top: 5.5px;left: 1.5px;">English (United Kingdom)</span>
                </a>
              </li>
                          <li >
                <a href="#tab-it-IT" role="tab" data-toggle="tab">
                    <span class="flag-icon flag-icon-it-IT"  style="width:23px;height:23px;"></span>
                    <span style="position: relative;top: 5.5px;left: 1.5px;">Italian (Italy)</span>
                </a>
              </li>
                          <li >
                <a href="#tab-sk" role="tab" data-toggle="tab">
                    <span class="flag-icon flag-icon-sk"  style="width:23px;height:23px;"></span>
                    <span style="position: relative;top: 5.5px;left: 1.5px;">Slovak</span>
                </a>
              </li>
                          <li >
                <a href="#tab-tr" role="tab" data-toggle="tab">
                    <span class="flag-icon flag-icon-tr"  style="width:23px;height:23px;"></span>
                    <span style="position: relative;top: 5.5px;left: 1.5px;">Turkish</span>
                </a>
              </li>
                      </ul>                       
          <div class="panel-body tab-content">
                          <div class="tab-pane " id="tab-en-GB">
                <div class="row">
                  <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="form-group">
                      <label>
                                                  WEB Link
                                              </label>
                      <div class="input-group">
                        <span class="input-group-addon">
                          <span class="flag-icon flag-icon-en-GB"></span>
                        </span>
                        <input type="text" name="captions[51]['link']" value="" class="form-control">
                        <span class="input-group-addon">
                          <i class="fa fa-external-link"></i>
                        </span>
                      </div><!-- end input-group -->
                    </div><!-- end form-group -->
                    <div class="form-group">
                      <label>
                                                  Title
                                              </label>
                      <div class="input-group">
                        <span class="input-group-addon">
                          <span class="flag-icon flag-icon-en-GB"></span>
                        </span>
                        <input type="text" name="captions[51]['title']" value="" class="form-control">
                        <span class="input-group-addon">
                          <i class="fa fa-file-text-o"></i>
                        </span>
                      </div><!-- end input-group -->
                    </div><!-- end form-group -->
                    <div class="form-group">
                      <label>
                                                  Description
                                              </label>
                      <div class="input-group">
                        <span class="input-group-addon">
                          <span class="flag-icon flag-icon-en-GB"></span>
                        </span>
                        <textarea name="captions[51]['description']" class="form-control" rows="5"></textarea>
                        <span class="input-group-addon">
                          <i class="fa fa-file-text-o"></i>
                        </span>
                      </div><!-- end input-group -->
                    </div><!-- end form-group -->
                  </div><!-- end col -->
                </div><!-- end row -->
              </div><!-- end tab -->
                          <div class="tab-pane " id="tab-it-IT">
                <div class="row">
                  <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="form-group">
                      <label>
                                                  WEB Link
                                              </label>
                      <div class="input-group">
                        <span class="input-group-addon">
                          <span class="flag-icon flag-icon-it-IT"></span>
                        </span>
                        <input type="text" name="captions[120]['link']" value="" class="form-control">
                        <span class="input-group-addon">
                          <i class="fa fa-external-link"></i>
                        </span>
                      </div><!-- end input-group -->
                    </div><!-- end form-group -->
                    <div class="form-group">
                      <label>
                                                  Title
                                              </label>
                      <div class="input-group">
                        <span class="input-group-addon">
                          <span class="flag-icon flag-icon-it-IT"></span>
                        </span>
                        <input type="text" name="captions[120]['title']" value="" class="form-control">
                        <span class="input-group-addon">
                          <i class="fa fa-file-text-o"></i>
                        </span>
                      </div><!-- end input-group -->
                    </div><!-- end form-group -->
                    <div class="form-group">
                      <label>
                                                  Description
                                              </label>
                      <div class="input-group">
                        <span class="input-group-addon">
                          <span class="flag-icon flag-icon-it-IT"></span>
                        </span>
                        <textarea name="captions[120]['description']" class="form-control" rows="5"></textarea>
                        <span class="input-group-addon">
                          <i class="fa fa-file-text-o"></i>
                        </span>
                      </div><!-- end input-group -->
                    </div><!-- end form-group -->
                  </div><!-- end col -->
                </div><!-- end row -->
              </div><!-- end tab -->
                          <div class="tab-pane " id="tab-sk">
                <div class="row">
                  <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="form-group">
                      <label>
                                                  WEB Link
                                              </label>
                      <div class="input-group">
                        <span class="input-group-addon">
                          <span class="flag-icon flag-icon-sk"></span>
                        </span>
                        <input type="text" name="captions[189]['link']" value="" class="form-control">
                        <span class="input-group-addon">
                          <i class="fa fa-external-link"></i>
                        </span>
                      </div><!-- end input-group -->
                    </div><!-- end form-group -->
                    <div class="form-group">
                      <label>
                                                  Title
                                              </label>
                      <div class="input-group">
                        <span class="input-group-addon">
                          <span class="flag-icon flag-icon-sk"></span>
                        </span>
                        <input type="text" name="captions[189]['title']" value="" class="form-control">
                        <span class="input-group-addon">
                          <i class="fa fa-file-text-o"></i>
                        </span>
                      </div><!-- end input-group -->
                    </div><!-- end form-group -->
                    <div class="form-group">
                      <label>
                                                  Description
                                              </label>
                      <div class="input-group">
                        <span class="input-group-addon">
                          <span class="flag-icon flag-icon-sk"></span>
                        </span>
                        <textarea name="captions[189]['description']" class="form-control" rows="5"></textarea>
                        <span class="input-group-addon">
                          <i class="fa fa-file-text-o"></i>
                        </span>
                      </div><!-- end input-group -->
                    </div><!-- end form-group -->
                  </div><!-- end col -->
                </div><!-- end row -->
              </div><!-- end tab -->
                          <div class="tab-pane " id="tab-tr">
                <div class="row">
                  <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="form-group">
                      <label>
                                                  WEB Link
                                              </label>
                      <div class="input-group">
                        <span class="input-group-addon">
                          <span class="flag-icon flag-icon-tr"></span>
                        </span>
                        <input type="text" name="captions[216]['link']" value="" class="form-control">
                        <span class="input-group-addon">
                          <i class="fa fa-external-link"></i>
                        </span>
                      </div><!-- end input-group -->
                    </div><!-- end form-group -->
                    <div class="form-group">
                      <label>
                                                  Title
                                              </label>
                      <div class="input-group">
                        <span class="input-group-addon">
                          <span class="flag-icon flag-icon-tr"></span>
                        </span>
                        <input type="text" name="captions[216]['title']" value="" class="form-control">
                        <span class="input-group-addon">
                          <i class="fa fa-file-text-o"></i>
                        </span>
                      </div><!-- end input-group -->
                    </div><!-- end form-group -->
                    <div class="form-group">
                      <label>
                                                  Description
                                              </label>
                      <div class="input-group">
                        <span class="input-group-addon">
                          <span class="flag-icon flag-icon-tr"></span>
                        </span>
                        <textarea name="captions[216]['description']" class="form-control" rows="5"></textarea>
                        <span class="input-group-addon">
                          <i class="fa fa-file-text-o"></i>
                        </span>
                      </div><!-- end input-group -->
                    </div><!-- end form-group -->
                  </div><!-- end col -->
                </div><!-- end row -->
              </div><!-- end tab -->
                      </div><!-- end panel-body -->
        </div><!-- end panel -->
      </div><!-- end col -->
    </div><!-- end row -->
    <div class="row" style="margin-top:25px;">
      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <button type="submit" class="btn btn-block btn-success">
          <i class="fa fa-save"></i>&nbsp;
                      SAVE CHANGES
                  </button>
      </div><!-- end col -->
    </div><!-- end row -->
  </form>
<script type="text/javascript">
$(function() {
  $('#captionsForm').submit(function() {
    $.ajax({
      url: 'cpanel/slider-captions',
      type: 'POST',
      data: $(this).serialize(),
      success: function(responseJSON) {
        if((typeof responseJSON.status !== 'undefined') &&
          (responseJSON.status === 200)
        ) {
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
