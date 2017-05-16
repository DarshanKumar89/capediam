<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-12-14 10:05:25
         compiled from "/var/www/public/carpedmfashion.com/core/config/../../app/themes/cpanel/router/ajax/router_form.tpl" */ ?>
<?php /*%%SmartyHeaderCode:27857494758510b5506faf8-68767105%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
  ),
  'nocache_hash' => '27857494758510b5506faf8-68767105',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'languages' => 0,
    'tabLang' => 0,
    'i' => 0,
    'lang' => 0,
    'router' => 0,
    'baseUrl' => 0,
    'global_router_label_close' => 0,
    'global_router_label_change' => 0,
    'global_router_label_delete' => 0,
    'global_router_label_create' => 0,
    'global_router_label_suggestions' => 0,
    'global_alert_info' => 0,
    'global_router_alert_no_suggestions' => 0,
    'global_router_label_redirection' => 0,
    'global_router_label_path' => 0,
    'global_router_label_use' => 0,
    'global_router_label_remove' => 0,
    'item' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_58510b5530cba8_29428739',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58510b5530cba8_29428739')) {function content_58510b5530cba8_29428739($_smarty_tpl) {?><!-- START TABS -->
<div class="panel panel-default tabs" style="margin: 5px 0;">                            
  <ul class="nav nav-tabs" role="tablist" style="margin-top: -2px;padding:0;">
    <?php  $_smarty_tpl->tpl_vars['lang'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['lang']->_loop = false;
 $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['languages']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['lang']->key => $_smarty_tpl->tpl_vars['lang']->value) {
$_smarty_tpl->tpl_vars['lang']->_loop = true;
 $_smarty_tpl->tpl_vars['i']->value = $_smarty_tpl->tpl_vars['lang']->key;
?>
      <li <?php if (($_smarty_tpl->tpl_vars['tabLang']->value->mode==1)&&($_smarty_tpl->tpl_vars['tabLang']->value->code==$_smarty_tpl->tpl_vars['i']->value)) {?>class="active"<?php }
if (($_smarty_tpl->tpl_vars['tabLang']->value->mode==2)&&($_smarty_tpl->tpl_vars['tabLang']->value->code==$_smarty_tpl->tpl_vars['lang']->value->id_lang)) {?>class="active"<?php }?>>
        <a href="#tab-direction-<?php echo $_smarty_tpl->tpl_vars['lang']->value->language_code;?>
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
      <div class="tab-pane <?php if (($_smarty_tpl->tpl_vars['tabLang']->value->mode==1)&&($_smarty_tpl->tpl_vars['tabLang']->value->code==$_smarty_tpl->tpl_vars['i']->value)) {?>active<?php }
if (($_smarty_tpl->tpl_vars['tabLang']->value->mode==2)&&($_smarty_tpl->tpl_vars['tabLang']->value->code==$_smarty_tpl->tpl_vars['lang']->value->id_lang)) {?>active<?php }?>" id="tab-direction-<?php echo $_smarty_tpl->tpl_vars['lang']->value->language_code;?>
">
        <div class="row">
          <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="form-group">
              <div id="r-k-v-c-<?php if (isset($_smarty_tpl->tpl_vars['router']->value->list[$_smarty_tpl->tpl_vars['lang']->value->id_lang])) {
echo $_smarty_tpl->tpl_vars['router']->value->list[$_smarty_tpl->tpl_vars['lang']->value->id_lang]->id_route;
} else { ?>0<?php }?>-<?php echo $_smarty_tpl->tpl_vars['lang']->value->id_lang;?>
" class="input-group">
                <?php if (isset($_smarty_tpl->tpl_vars['router']->value->list[$_smarty_tpl->tpl_vars['lang']->value->id_lang])&&($_smarty_tpl->tpl_vars['router']->value->list[$_smarty_tpl->tpl_vars['lang']->value->id_lang]->id_route!=0)) {?>
                  <span class="input-group-addon">
                    <i class="fa fa-chrome"></i>
                  </span>
                  <input type="text" value="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['router']->value->list[$_smarty_tpl->tpl_vars['lang']->value->id_lang]->path;?>
" class="form-control" />
                  <span class="input-group-btn">
                    <a href="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['router']->value->list[$_smarty_tpl->tpl_vars['lang']->value->id_lang]->path;?>
" target="__blank" class="btn btn-primary">
                      <i class="fa fa-eye"></i>
                    </a>
                  </span>
                <?php } else { ?>
                  <span class="input-group-addon">
                    <?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>

                  </span>
                  <input id="r-k-i-<?php if (isset($_smarty_tpl->tpl_vars['router']->value->list[$_smarty_tpl->tpl_vars['lang']->value->id_lang])) {
echo $_smarty_tpl->tpl_vars['router']->value->list[$_smarty_tpl->tpl_vars['lang']->value->id_lang]->id_route;
} else { ?>0<?php }?>-<?php echo $_smarty_tpl->tpl_vars['lang']->value->id_lang;?>
"
                    type="text" 
                    value="" 
                    class="form-control r-k-v"
                    data-route-id="<?php if (isset($_smarty_tpl->tpl_vars['router']->value->list[$_smarty_tpl->tpl_vars['lang']->value->id_lang])) {
echo $_smarty_tpl->tpl_vars['router']->value->list[$_smarty_tpl->tpl_vars['lang']->value->id_lang]->id_route;
} else { ?>0<?php }?>"
                    data-lang-id="<?php echo $_smarty_tpl->tpl_vars['lang']->value->id_lang;?>
"
                    data-object-id="<?php echo $_smarty_tpl->tpl_vars['router']->value->id_object;?>
"
                    data-object-type-id="<?php echo $_smarty_tpl->tpl_vars['router']->value->id_object_type;?>
"
                    style="border-radius: 0px;"
                  />
                  <span class="input-group-addon">
                    <span class="flag-icon flag-icon-<?php echo $_smarty_tpl->tpl_vars['lang']->value->language_code;?>
"></span>
                  </span>
                <?php }?>
              </div><!-- end input-group -->
            </div><!-- end form-group -->
            <div id="r-k-c-c-<?php if (isset($_smarty_tpl->tpl_vars['router']->value->list[$_smarty_tpl->tpl_vars['lang']->value->id_lang])) {
echo $_smarty_tpl->tpl_vars['router']->value->list[$_smarty_tpl->tpl_vars['lang']->value->id_lang]->id_route;
} else { ?>0<?php }?>-<?php echo $_smarty_tpl->tpl_vars['lang']->value->id_lang;?>
" class="row" style="display:none;">
              <div class="col-lg-10 col-sm-10 col-xs-10" style="padding-left: 0px;">
                <div class="form-group">
                  <label for="key">
                    URL KEY
                  </label>
                  <div class="input-group">
                    <span class="input-group-addon">
                      <span class="flag-icon flag-icon-<?php echo $_smarty_tpl->tpl_vars['lang']->value->language_code;?>
"></span>
                    </span>
                    <input id="r-k-c-i-<?php if (isset($_smarty_tpl->tpl_vars['router']->value->list[$_smarty_tpl->tpl_vars['lang']->value->id_lang])) {
echo $_smarty_tpl->tpl_vars['router']->value->list[$_smarty_tpl->tpl_vars['lang']->value->id_lang]->id_route;
} else { ?>0<?php }?>-<?php echo $_smarty_tpl->tpl_vars['lang']->value->id_lang;?>
"
                      type="text" 
                      value="" 
                      class="form-control"
                      data-route-id="<?php if (isset($_smarty_tpl->tpl_vars['router']->value->list[$_smarty_tpl->tpl_vars['lang']->value->id_lang])) {
echo $_smarty_tpl->tpl_vars['router']->value->list[$_smarty_tpl->tpl_vars['lang']->value->id_lang]->id_route;
} else { ?>0<?php }?>"
                      data-lang-id="<?php echo $_smarty_tpl->tpl_vars['lang']->value->id_lang;?>
"
                      data-object-id="<?php echo $_smarty_tpl->tpl_vars['router']->value->id_object;?>
"
                      data-object-type-id="<?php echo $_smarty_tpl->tpl_vars['router']->value->id_object_type;?>
"
                      style="border-radius: 0px;"
                    />
                    <span class="input-group-btn">
                      <button type="button" 
                        id="r-k-c-b-u-<?php if (isset($_smarty_tpl->tpl_vars['router']->value->list[$_smarty_tpl->tpl_vars['lang']->value->id_lang])) {
echo $_smarty_tpl->tpl_vars['router']->value->list[$_smarty_tpl->tpl_vars['lang']->value->id_lang]->id_route;
} else { ?>0<?php }?>-<?php echo $_smarty_tpl->tpl_vars['lang']->value->id_lang;?>
" 
                        class="btn btn-success r-k-c-b-u"
                        data-route-id="<?php if (isset($_smarty_tpl->tpl_vars['router']->value->list[$_smarty_tpl->tpl_vars['lang']->value->id_lang])) {
echo $_smarty_tpl->tpl_vars['router']->value->list[$_smarty_tpl->tpl_vars['lang']->value->id_lang]->id_route;
} else { ?>0<?php }?>"
                        data-lang-id="<?php echo $_smarty_tpl->tpl_vars['lang']->value->id_lang;?>
"
                        data-object-id="<?php echo $_smarty_tpl->tpl_vars['router']->value->id_object;?>
"
                        data-object-type-id="<?php echo $_smarty_tpl->tpl_vars['router']->value->id_object_type;?>
"
                        disabled
                      >
                        <i class="fa fa-floppy-o"></i>
                      </button>
                    </span>
                  </div><!-- end input-group -->
                </div><!-- end form-group -->
              </div><!-- end col -->
              <div class="col-lg-2 col-sm-2 col-xs-2" style="padding-right: 0px;">
                <button type="button" id="r-k-c-b-c-<?php if (isset($_smarty_tpl->tpl_vars['router']->value->list[$_smarty_tpl->tpl_vars['lang']->value->id_lang])) {
echo $_smarty_tpl->tpl_vars['router']->value->list[$_smarty_tpl->tpl_vars['lang']->value->id_lang]->id_route;
} else { ?>0<?php }?>-<?php echo $_smarty_tpl->tpl_vars['lang']->value->id_lang;?>
" class="btn btn-default btn-block" style="margin-top: 22px;">
                  <i class="fa fa-times"></i>&nbsp;
                  <?php if (!empty($_smarty_tpl->tpl_vars['global_router_label_close']->value)) {
echo mb_strtoupper($_smarty_tpl->tpl_vars['global_router_label_close']->value, 'UTF-8');
} else { ?>CLOSE<?php }?>
                </button>
              </div><!-- end col -->
            </div><!-- end row -->
            <?php if ($_smarty_tpl->tpl_vars['router']->value->allow_prefix==true) {?>
              <div id="r-p-c-<?php if (isset($_smarty_tpl->tpl_vars['router']->value->list[$_smarty_tpl->tpl_vars['lang']->value->id_lang])) {
echo $_smarty_tpl->tpl_vars['router']->value->list[$_smarty_tpl->tpl_vars['lang']->value->id_lang]->id_route;
} else { ?>0<?php }?>-<?php echo $_smarty_tpl->tpl_vars['lang']->value->id_lang;?>
" class="row" style="display:none;">
                <div class="col-lg-10 col-sm-10 col-xs-10" style="padding-left: 0px;">
                  <div class="form-group">
                      <label for="prefix">
                          URL PREFIX
                      </label>
                      <div class="input-group">
                        <span class="input-group-addon">
                          <span class="flag-icon flag-icon-<?php echo $_smarty_tpl->tpl_vars['lang']->value->language_code;?>
"></span>
                        </span>
                        <input id="r-p-i-<?php if (isset($_smarty_tpl->tpl_vars['router']->value->list[$_smarty_tpl->tpl_vars['lang']->value->id_lang])) {
echo $_smarty_tpl->tpl_vars['router']->value->list[$_smarty_tpl->tpl_vars['lang']->value->id_lang]->id_route;
} else { ?>0<?php }?>-<?php echo $_smarty_tpl->tpl_vars['lang']->value->id_lang;?>
"
                          type="text" 
                          value="" 
                          class="form-control r-p-v"
                          data-route-id="<?php if (isset($_smarty_tpl->tpl_vars['router']->value->list[$_smarty_tpl->tpl_vars['lang']->value->id_lang])) {
echo $_smarty_tpl->tpl_vars['router']->value->list[$_smarty_tpl->tpl_vars['lang']->value->id_lang]->id_route;
} else { ?>0<?php }?>"
                          data-lang-id="<?php echo $_smarty_tpl->tpl_vars['lang']->value->id_lang;?>
"
                          data-object-id="<?php echo $_smarty_tpl->tpl_vars['router']->value->id_object;?>
"
                          data-object-type-id="<?php echo $_smarty_tpl->tpl_vars['router']->value->id_object_type;?>
"
                          style="border-radius: 0px;"
                        />
                        <span class="input-group-btn">
                          <button type="button" 
                            id="r-p-b-u-<?php if (isset($_smarty_tpl->tpl_vars['router']->value->list[$_smarty_tpl->tpl_vars['lang']->value->id_lang])) {
echo $_smarty_tpl->tpl_vars['router']->value->list[$_smarty_tpl->tpl_vars['lang']->value->id_lang]->id_route;
} else { ?>0<?php }?>-<?php echo $_smarty_tpl->tpl_vars['lang']->value->id_lang;?>
" 
                            class="btn btn-success r-p-b-u" 
                            data-route-id="<?php if (isset($_smarty_tpl->tpl_vars['router']->value->list[$_smarty_tpl->tpl_vars['lang']->value->id_lang])) {
echo $_smarty_tpl->tpl_vars['router']->value->list[$_smarty_tpl->tpl_vars['lang']->value->id_lang]->id_route;
} else { ?>0<?php }?>"
                            data-lang-id="<?php echo $_smarty_tpl->tpl_vars['lang']->value->id_lang;?>
"
                            data-object-id="<?php echo $_smarty_tpl->tpl_vars['router']->value->id_object;?>
"
                            data-object-type-id="<?php echo $_smarty_tpl->tpl_vars['router']->value->id_object_type;?>
"
                            disabled
                          >
                            <i class="fa fa-floppy-o"></i>
                          </button>
                        </span>
                      </div><!-- end input-group -->
                  </div><!-- end form-group -->
                </div><!-- end col -->
                <div class="col-lg-2 col-sm-2 col-xs-2" style="padding-right: 0px;">
                  <button type="button" id="r-p-b-cl-<?php if (isset($_smarty_tpl->tpl_vars['router']->value->list[$_smarty_tpl->tpl_vars['lang']->value->id_lang])) {
echo $_smarty_tpl->tpl_vars['router']->value->list[$_smarty_tpl->tpl_vars['lang']->value->id_lang]->id_route;
} else { ?>0<?php }?>-<?php echo $_smarty_tpl->tpl_vars['lang']->value->id_lang;?>
" class="btn btn-default btn-block" style="margin-top: 22px;">
                    <i class="fa fa-times"></i>&nbsp;
                    <?php if (!empty($_smarty_tpl->tpl_vars['global_router_label_close']->value)) {
echo mb_strtoupper($_smarty_tpl->tpl_vars['global_router_label_close']->value, 'UTF-8');
} else { ?>CLOSE<?php }?>
                  </button>
                </div><!-- end col -->
              </div><!-- end row -->
            <?php }?>
          </div><!-- end col -->
        </div><!-- end row -->
        <div class="row" style="margin-top: 15px;">
          <div class="col-lg-4 col-sm-12 col-xs-12">
            <?php if (isset($_smarty_tpl->tpl_vars['router']->value->list[$_smarty_tpl->tpl_vars['lang']->value->id_lang])&&($_smarty_tpl->tpl_vars['router']->value->list[$_smarty_tpl->tpl_vars['lang']->value->id_lang]->id_route!=0)) {?>
              <div class="row" style="margin-bottom: 5px;">
                <div class="col-lg-6 col-sm-6 col-xs-6" style="padding-left: 0px;">
                  <button 
                    type="button"
                    id="r-k-c-<?php echo $_smarty_tpl->tpl_vars['router']->value->list[$_smarty_tpl->tpl_vars['lang']->value->id_lang]->id_route;?>
-<?php echo $_smarty_tpl->tpl_vars['lang']->value->id_lang;?>
"
                    class="btn btn-warning btn-block r-k-c"
                    data-route-id="<?php echo $_smarty_tpl->tpl_vars['router']->value->list[$_smarty_tpl->tpl_vars['lang']->value->id_lang]->id_route;?>
"
                    data-lang-id="<?php echo $_smarty_tpl->tpl_vars['lang']->value->id_lang;?>
"
                    data-object-id="<?php echo $_smarty_tpl->tpl_vars['router']->value->id_object;?>
"
                    data-object-type-id="<?php echo $_smarty_tpl->tpl_vars['router']->value->id_object_type;?>
"
                  >
                    <i class="fa fa-exchange"></i>&nbsp;
                    <?php if (!empty($_smarty_tpl->tpl_vars['global_router_label_change']->value)) {
echo mb_strtoupper($_smarty_tpl->tpl_vars['global_router_label_change']->value, 'UTF-8');
} else { ?>CHANGE URL KEY<?php }?>
                  </button>
                </div><!-- end col -->
                <div class="col-lg-6 col-sm-6 col-xs-6" style="padding-right: 0px;">
                  <button 
                    type="button"
                    class="btn btn-danger btn-block r-d-d"
                    data-route-id="<?php echo $_smarty_tpl->tpl_vars['router']->value->list[$_smarty_tpl->tpl_vars['lang']->value->id_lang]->id_route;?>
"
                    data-lang-id="<?php echo $_smarty_tpl->tpl_vars['lang']->value->id_lang;?>
"
                    data-object-id="<?php echo $_smarty_tpl->tpl_vars['router']->value->id_object;?>
"
                    data-object-type-id="<?php echo $_smarty_tpl->tpl_vars['router']->value->id_object_type;?>
"
                  >
                    <i class="fa fa-times"></i>&nbsp;
                    <?php if (!empty($_smarty_tpl->tpl_vars['global_router_label_delete']->value)) {
echo mb_strtoupper($_smarty_tpl->tpl_vars['global_router_label_delete']->value, 'UTF-8');
} else { ?>DELETE<?php }?>
                  </button>
                </div><!-- end col -->
              </div><!-- end row -->
              <?php if ($_smarty_tpl->tpl_vars['router']->value->allow_prefix==true) {?>
                <button type="button" 
                  id="r-p-b-c-<?php echo $_smarty_tpl->tpl_vars['router']->value->list[$_smarty_tpl->tpl_vars['lang']->value->id_lang]->id_route;?>
-<?php echo $_smarty_tpl->tpl_vars['lang']->value->id_lang;?>
" 
                  data-route-id="<?php echo $_smarty_tpl->tpl_vars['router']->value->list[$_smarty_tpl->tpl_vars['lang']->value->id_lang]->id_route;?>
"
                  data-lang-id="<?php echo $_smarty_tpl->tpl_vars['lang']->value->id_lang;?>
"
                  data-object-id="<?php echo $_smarty_tpl->tpl_vars['router']->value->id_object;?>
"
                  data-object-type-id="<?php echo $_smarty_tpl->tpl_vars['router']->value->id_object_type;?>
"
                  class="btn btn-default btn-block r-p-b-c"
                >
                  <i class="fa fa-location-arrow"></i>&nbsp;
                  <?php if (!empty($_smarty_tpl->tpl_vars['global_router_label_create']->value)) {
echo mb_strtoupper($_smarty_tpl->tpl_vars['global_router_label_create']->value, 'UTF-8');
} else { ?>ADD URL PREFIX<?php }?>
                </button>
              <?php }?>
              <?php if ($_smarty_tpl->tpl_vars['router']->value->allow_schema==true) {?>
                <button type="button" class="btn btn-default btn-block" disabled>
                  <i class="fa fa-object-group"></i>&nbsp;
                  <?php if (!empty($_smarty_tpl->tpl_vars['global_router_label_create']->value)) {
echo mb_strtoupper($_smarty_tpl->tpl_vars['global_router_label_create']->value, 'UTF-8');
} else { ?>CREATE SCHEMA<?php }?>
                </button>
              <?php }?>
            <?php } else { ?>
              <button 
                type="button" 
                id="r-c-k-d-b-<?php if (isset($_smarty_tpl->tpl_vars['router']->value->list[$_smarty_tpl->tpl_vars['lang']->value->id_lang])) {
echo $_smarty_tpl->tpl_vars['router']->value->list[$_smarty_tpl->tpl_vars['lang']->value->id_lang]->id_route;
} else { ?>0<?php }?>-<?php echo $_smarty_tpl->tpl_vars['lang']->value->id_lang;?>
" 
                class="btn btn-success btn-block r-c-k-d-b"
                data-route-id="<?php echo $_smarty_tpl->tpl_vars['router']->value->list[$_smarty_tpl->tpl_vars['lang']->value->id_lang]->id_route;?>
"
                data-lang-id="<?php echo $_smarty_tpl->tpl_vars['lang']->value->id_lang;?>
"
                data-object-id="<?php echo $_smarty_tpl->tpl_vars['router']->value->id_object;?>
"
                data-object-type-id="<?php echo $_smarty_tpl->tpl_vars['router']->value->id_object_type;?>
"
                <?php if (isset($_smarty_tpl->tpl_vars['router']->value->list[$_smarty_tpl->tpl_vars['lang']->value->id_lang])||($_smarty_tpl->tpl_vars['router']->value->list[$_smarty_tpl->tpl_vars['lang']->value->id_lang]->id_route==0)) {?>disabled<?php }?>
              >
                <i class="fa fa-floppy-o"></i>&nbsp;
                <?php if (!empty($_smarty_tpl->tpl_vars['global_router_label_create']->value)) {
echo mb_strtoupper($_smarty_tpl->tpl_vars['global_router_label_create']->value, 'UTF-8');
} else { ?>CREATE<?php }?>
              </button>
            <?php }?>
          </div><!-- end col -->
          <div class="col-lg-8 col-sm-12 col-xs-12">
            <div class="panel panel-default">
              <div class="panel-heading ui-draggable-handle">
                <h3 class="panel-title">
                  <i class="fa fa-map-o"></i>&nbsp;
                  <?php if (!empty($_smarty_tpl->tpl_vars['global_router_label_suggestions']->value)) {
echo mb_strtoupper($_smarty_tpl->tpl_vars['global_router_label_suggestions']->value, 'UTF-8');
} else { ?>SUGGESTIONS<?php }?>
                </h3>
              </div><!-- end panel-heading -->
              <div class="panel-body panel-body-table">
                <div class="alert alert-info" style="width: 95%;margin: 1.5% 2.5%;" role="alert">
                  <strong><?php if (!empty($_smarty_tpl->tpl_vars['global_alert_info']->value)) {
echo mb_strtoupper($_smarty_tpl->tpl_vars['global_alert_info']->value, 'UTF-8');
} else { ?>INFO!<?php }?>!</strong>
                  <?php if (!empty($_smarty_tpl->tpl_vars['global_router_alert_no_suggestions']->value)) {
echo $_smarty_tpl->tpl_vars['global_router_alert_no_suggestions']->value;
} else { ?>There are no suggestions.<?php }?>
                </div>
              </div><!-- end panel-body -->
            </div><!-- end panel -->
          </div><!-- end col -->
        </div><!-- end row -->
        <div class="row" style="margin-top: 5px;">
          <div class="col-lg-12 col-sm-12 col-xs-12">
            <div class="panel panel-default">
              <div class="panel-heading ui-draggable-handle">
                <h3 class="panel-title">
                  <i class="fa fa-exchange"></i>&nbsp;
                  <?php if (!empty($_smarty_tpl->tpl_vars['global_router_label_redirection']->value)) {
echo mb_strtoupper($_smarty_tpl->tpl_vars['global_router_label_redirection']->value, 'UTF-8');
} else { ?>SEO REDIRECTION<?php }?>
                </h3>
              </div><!-- end panel-heading -->
              <div class="panel-body panel-body-table">
                <?php if (isset($_smarty_tpl->tpl_vars['router']->value->redirectList[$_smarty_tpl->tpl_vars['lang']->value->id_lang])&&(count($_smarty_tpl->tpl_vars['router']->value->redirectList[$_smarty_tpl->tpl_vars['lang']->value->id_lang])>0)) {?>
                  <div class="table-responsive" style="border-top:1px solid #E5E5E5;">
                    <table id="statusList" class="table table-bordered table-striped table-actions">
                      <thead>
                        <tr>
                          <th width="25" class="text-center">
                            #
                          </th>
                          <th class="text-center">
                            <?php if (!empty($_smarty_tpl->tpl_vars['global_router_label_path']->value)) {
echo mb_strtoupper($_smarty_tpl->tpl_vars['global_router_label_path']->value, 'UTF-8');
} else { ?>PATH<?php }?>
                          </th>
                          <th width="100" class="text-center">
                            <?php if (!empty($_smarty_tpl->tpl_vars['global_router_label_use']->value)) {
echo mb_strtoupper($_smarty_tpl->tpl_vars['global_router_label_use']->value, 'UTF-8');
} else { ?>USE<?php }?>
                          </th>
                          <th width="100" class="text-center">
                            <?php if (!empty($_smarty_tpl->tpl_vars['global_router_label_remove']->value)) {
echo mb_strtoupper($_smarty_tpl->tpl_vars['global_router_label_remove']->value, 'UTF-8');
} else { ?>DELETE<?php }?>
                          </th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['router']->value->redirectList[$_smarty_tpl->tpl_vars['lang']->value->id_lang]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
 $_smarty_tpl->tpl_vars['i']->value = $_smarty_tpl->tpl_vars['item']->key;
?>
                          <tr>
                            <td class="text-center" style="font-weight:700;color:#660000;">
                              <?php echo $_smarty_tpl->tpl_vars['i']->value+1;?>

                            </td>
                            <td class="text-left">
                              <strong><?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['item']->value->path;?>
</strong>
                            </td>
                            <td class="text-center">
                              <button type="button"
                                data-object-id="<?php echo $_smarty_tpl->tpl_vars['router']->value->id_object;?>
"
                                data-object-type-id="<?php echo $_smarty_tpl->tpl_vars['router']->value->id_object_type;?>
"
                                data-lang-id="<?php echo $_smarty_tpl->tpl_vars['item']->value->id_lang;?>
"
                                data-redirect-id="<?php echo $_smarty_tpl->tpl_vars['item']->value->id_rw;?>
" 
                                data-route-id="<?php echo $_smarty_tpl->tpl_vars['router']->value->list[$_smarty_tpl->tpl_vars['lang']->value->id_lang]->id_route;?>
" 
                                class="btn btn-warning r-r-u-b"
                              >
                                &nbsp;&nbsp;<i class="fa fa-check"></i>
                              </button>
                            </td>
                            <td class="text-center">
                              <button type="button"
                                data-object-id="<?php echo $_smarty_tpl->tpl_vars['router']->value->id_object;?>
"
                                data-object-type-id="<?php echo $_smarty_tpl->tpl_vars['router']->value->id_object_type;?>
"
                                data-redirect-id="<?php echo $_smarty_tpl->tpl_vars['item']->value->id_rw;?>
"
                                class="btn btn-danger r-r-d-b"
                              >
                                &nbsp;&nbsp;<i class="fa fa-times"></i>
                              </button>
                            </td>
                          </tr>
                        <?php } ?>
                      </tbody>
                    </table>
                  </div><!-- end table-responsive -->             
                <?php } else { ?>
                  <div class="alert alert-info" style="width: 98%;margin: 0.5% 1%;" role="alert">
                    <strong><?php if (!empty($_smarty_tpl->tpl_vars['global_alert_info']->value)) {
echo mb_strtoupper($_smarty_tpl->tpl_vars['global_alert_info']->value, 'UTF-8');
} else { ?>INFO!<?php }?>!</strong>
                    <?php if (!empty($_smarty_tpl->tpl_vars['global_router_alert_no_suggestions']->value)) {
echo $_smarty_tpl->tpl_vars['global_router_alert_no_suggestions']->value;
} else { ?>There are no redirection.<?php }?>
                  </div>
                <?php }?>
              </div><!-- end panel-body -->
            </div><!-- end panel -->
          </div><!-- end col -->
        </div><!-- end row -->
      </div><!-- end tab-pane -->
    <?php } ?>
  </div><!-- end panel-body -->
</div><!-- end panel -->
<!-- END TABS --><?php }} ?>
