<?php /*%%SmartyHeaderCode:3999803335819ce3d21a203-75109808%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '28af47e46a039913f58d62471df815a035c9d55f' => 
    array (
      0 => '/var/www/public/carpedmfashion.com/core/config/../../app/themes/cpanel/gallery/ajax/gallery_captions_form.tpl',
      1 => 1469707228,
      2 => 'extends',
    ),
  ),
  'nocache_hash' => '3999803335819ce3d21a203-75109808',
  'variables' => 
  array (
    'languages' => 0,
    'galleryId' => 0,
    'imageId' => 0,
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
  'unifunc' => 'content_5819ce3d2ef2a6_23961217',
  'cache_lifetime' => 120,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5819ce3d2ef2a6_23961217')) {function content_5819ce3d2ef2a6_23961217($_smarty_tpl) {?>  <form id="captionsForm" role="form">
    <input type="hidden" name="command" value="2"/>
    <input type="hidden" name="galleryId" value="249"/>
    <input type="hidden" name="imageId" value="4686"/>
    <div id="mAlert" class="row" style="display:none;">
      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="alert alert-success" role="alert">
            <strong>
                              ÚSPECH
              !
            </strong>
                          Titulky boli úspešne uložené.
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
                      </ul>                       
          <div class="panel-body tab-content">
                          <div class="tab-pane " id="tab-en-GB">
                <div class="row">
                  <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="form-group">
                      <label>
                                                  WEB Odkaz
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
                                                  Titulka
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
                                                  Popis
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
                                                  WEB Odkaz
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
                                                  Titulka
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
                                                  Popis
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
                                                  WEB Odkaz
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
                                                  Titulka
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
                                                  Popis
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
                      </div><!-- end panel-body -->
        </div><!-- end panel -->
      </div><!-- end col -->
    </div><!-- end row -->
    <div class="row" style="margin-top:25px;">
      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <button type="submit" class="btn btn-block btn-success">
          <i class="fa fa-save"></i>&nbsp;
                      ULOŽIŤ ZMENY
                  </button>
      </div><!-- end col -->
    </div><!-- end row -->
  </form>
<script type="text/javascript">
$(function() {
  $('#captionsForm').submit(function() {
    $.ajax({
      url: 'cpanel/gallery-captions/save',
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
