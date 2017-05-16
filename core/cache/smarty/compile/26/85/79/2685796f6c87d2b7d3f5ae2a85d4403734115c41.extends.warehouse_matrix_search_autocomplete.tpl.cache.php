<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-10-18 10:25:47
         compiled from "/var/www/public/carpedmfashion.com/core/config/../../app/themes/cpanel/store/warehouses/ajax/warehouse_matrix_search_autocomplete.tpl" */ ?>
<?php /*%%SmartyHeaderCode:10471228195805dc8bab7141-83128795%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
  ),
  'nocache_hash' => '10471228195805dc8bab7141-83128795',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'whAL' => 1,
    'item' => 1,
    'keywords' => 1,
  ),
  'has_nocache_code' => true,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5805dc8bb29811_04304598',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5805dc8bb29811_04304598')) {function content_5805dc8bb29811_04304598($_smarty_tpl) {?>
  <?php echo '/*%%SmartyNocache:10471228195805dc8bab7141-83128795%%*/<?php if (is_array($_smarty_tpl->tpl_vars[\'whAL\']->value)&&(count($_smarty_tpl->tpl_vars[\'whAL\']->value)>0)) {?>/*/%%SmartyNocache:10471228195805dc8bab7141-83128795%%*/';?>

    <?php echo '/*%%SmartyNocache:10471228195805dc8bab7141-83128795%%*/<?php  $_smarty_tpl->tpl_vars[\'item\'] = new Smarty_Variable; $_smarty_tpl->tpl_vars[\'item\']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars[\'whAL\']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, \'array\');}
foreach ($_from as $_smarty_tpl->tpl_vars[\'item\']->key => $_smarty_tpl->tpl_vars[\'item\']->value) {
$_smarty_tpl->tpl_vars[\'item\']->_loop = true;
?>/*/%%SmartyNocache:10471228195805dc8bab7141-83128795%%*/';?>

      <?php echo '/*%%SmartyNocache:10471228195805dc8bab7141-83128795%%*/<?php if (is_object($_smarty_tpl->tpl_vars[\'item\']->value->matrix)) {?>/*/%%SmartyNocache:10471228195805dc8bab7141-83128795%%*/';?>

        <a href="cpanel/store-warehouse-matrix-qty/<?php echo '/*%%SmartyNocache:10471228195805dc8bab7141-83128795%%*/<?php echo $_smarty_tpl->tpl_vars[\'item\']->value->matrix->secure_key;?>
/*/%%SmartyNocache:10471228195805dc8bab7141-83128795%%*/';?>
" class="btn btn-ui-ac col-lg-1 col-md-1 col-sm-12 col-xs-12" style="min-width:200px;height:189px;" title="<?php echo '/*%%SmartyNocache:10471228195805dc8bab7141-83128795%%*/<?php echo $_smarty_tpl->tpl_vars[\'item\']->value->article_name_internal;?>
/*/%%SmartyNocache:10471228195805dc8bab7141-83128795%%*/';?>
">
          <div class="panel panel-default">
            <div class="panel-body profile bg-info">
              <div class="profile-image">
                <?php echo '/*%%SmartyNocache:10471228195805dc8bab7141-83128795%%*/<?php if (is_object($_smarty_tpl->tpl_vars[\'item\']->value->image)) {?>/*/%%SmartyNocache:10471228195805dc8bab7141-83128795%%*/';?>

                  <img src="<?php echo '/*%%SmartyNocache:10471228195805dc8bab7141-83128795%%*/<?php echo $_smarty_tpl->tpl_vars[\'item\']->value->image->file_url;?>
/*/%%SmartyNocache:10471228195805dc8bab7141-83128795%%*/';?>
" height="100"  alt="<?php echo '/*%%SmartyNocache:10471228195805dc8bab7141-83128795%%*/<?php echo $_smarty_tpl->tpl_vars[\'item\']->value->article_name;?>
/*/%%SmartyNocache:10471228195805dc8bab7141-83128795%%*/';?>
"/>
                <?php echo '/*%%SmartyNocache:10471228195805dc8bab7141-83128795%%*/<?php }?>/*/%%SmartyNocache:10471228195805dc8bab7141-83128795%%*/';?>

              </div>
              <div class="profile-data">
                <div class="profile-data-name">
                  <?php echo '/*%%SmartyNocache:10471228195805dc8bab7141-83128795%%*/<?php echo $_smarty_tpl->tpl_vars[\'item\']->value->article_name_internal;?>
/*/%%SmartyNocache:10471228195805dc8bab7141-83128795%%*/';?>

                </div>
              </div><!-- end profile-data -->
            </div><!-- end panel-body -->                           
          </div><!-- end panel -->
        </a><!-- end link -->
      <?php echo '/*%%SmartyNocache:10471228195805dc8bab7141-83128795%%*/<?php }?>/*/%%SmartyNocache:10471228195805dc8bab7141-83128795%%*/';?>

    <?php echo '/*%%SmartyNocache:10471228195805dc8bab7141-83128795%%*/<?php } ?>/*/%%SmartyNocache:10471228195805dc8bab7141-83128795%%*/';?>

  <?php echo '/*%%SmartyNocache:10471228195805dc8bab7141-83128795%%*/<?php } else { ?>/*/%%SmartyNocache:10471228195805dc8bab7141-83128795%%*/';?>

    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
      <div class="alert alert-info" style="float:none;width: 99%;margin: 15px 0;" role="alert">
        <strong>Your search - <?php echo '/*%%SmartyNocache:10471228195805dc8bab7141-83128795%%*/<?php echo $_smarty_tpl->tpl_vars[\'keywords\']->value;?>
/*/%%SmartyNocache:10471228195805dc8bab7141-83128795%%*/';?>
 - did not match any product.</strong>
      </div>
    </div><!-- end col -->
  <?php echo '/*%%SmartyNocache:10471228195805dc8bab7141-83128795%%*/<?php }?>/*/%%SmartyNocache:10471228195805dc8bab7141-83128795%%*/';?>

<?php }} ?>
