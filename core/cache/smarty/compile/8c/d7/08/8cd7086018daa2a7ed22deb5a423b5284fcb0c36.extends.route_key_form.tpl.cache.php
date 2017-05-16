<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-09-23 10:38:06
         compiled from "/var/www/public/carpedmfashion.com/core/config/../../app/themes/cpanel/router/ajax/route_key_form.tpl" */ ?>
<?php /*%%SmartyHeaderCode:198713647557e4e9eec72dc4-32707954%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
  ),
  'nocache_hash' => '198713647557e4e9eec72dc4-32707954',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'global_router_label_' => 0,
    'global_form_select_choose' => 0,
    'controllerList' => 0,
    'i' => 0,
    'item' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_57e4e9eecc6bd9_26275513',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57e4e9eecc6bd9_26275513')) {function content_57e4e9eecc6bd9_26275513($_smarty_tpl) {?><div class="row">
    <div class="col-lg-2">
        <div class="form-group">
            <label>
                <?php if (!empty($_smarty_tpl->tpl_vars['global_router_label_']->value)) {
echo mb_strtoupper($_smarty_tpl->tpl_vars['global_router_label_']->value, 'UTF-8');
} else { ?>REQUEST METHOD<?php }?>
                <span style="color:red;">*</span>
            </label>
            <select name="rm-id" class="form-control select" required>
                <option value="1">GET</option>
                <option value="2">POST</option>
                <option value="3">PUT</option>
                <option value="4">DELETE</option>
            </select>
        </div><!-- end form-group -->
    </div><!-- end col -->
    <div class="col-lg-4">
        <div class="form-group">
            <label>
                <?php if (!empty($_smarty_tpl->tpl_vars['global_router_label_']->value)) {
echo mb_strtoupper($_smarty_tpl->tpl_vars['global_router_label_']->value, 'UTF-8');
} else { ?>KEY<?php }?>
                <span style="color:red;">*</span>
            </label>
            <input type="text" name="key" value="" class="form-control tagsinput" required/>
        </div><!-- end form-group -->
    </div><!-- end col -->
    <div class="col-lg-2">
        <div class="form-group">
            <label>
                <?php if (!empty($_smarty_tpl->tpl_vars['global_router_label_']->value)) {
echo mb_strtoupper($_smarty_tpl->tpl_vars['global_router_label_']->value, 'UTF-8');
} else { ?>CONTROLLER<?php }?>
                <span style="color:red;">*</span>
            </label>
            <select id="c-l" name="ctrl" class="form-control select" required>
                <option value="0"><?php if (!empty($_smarty_tpl->tpl_vars['global_form_select_choose']->value)) {
echo $_smarty_tpl->tpl_vars['global_form_select_choose']->value;
} else { ?>Choose...<?php }?></option>
                <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['controllerList']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
 $_smarty_tpl->tpl_vars['i']->value = $_smarty_tpl->tpl_vars['item']->key;
?>
                    <option value="<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value['classname'];?>
</option>
                <?php } ?>
            </select>
        </div><!-- end form-group -->
    </div><!-- end col -->
    <div class="col-lg-2">
        <div class="form-group">
            <label>
                <?php if (!empty($_smarty_tpl->tpl_vars['global_router_label_']->value)) {
echo mb_strtoupper($_smarty_tpl->tpl_vars['global_router_label_']->value, 'UTF-8');
} else { ?>METHOD<?php }?>
                <span style="color:red;">*</span>
            </label>
            <div class="sv" style="height: 70px;">
                <div class="alert alert-info" role="alert" style="padding: 5px 15px;">
                    <span style="font-size:11px;">
                        <i class="fa fa-info-circle"></i>
                        <strong class="text-uppercase">Select controller.</strong>
                    </span>
                </div>
            </div>
        </div><!-- end form-group -->
    </div><!-- end col -->
</div><!-- end row -->
<?php echo '<script'; ?>
>
$(function() {
    if($(".select").length > 0) {
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
    if($(".tagsinput").length > 0) {       
        $(".tagsinput").each(function() {
            $(this).tagsInput({
                width: '100%',
                height:'auto',
                defaultText: ''
            });
        });
    }
    $('#c-l').on('change',function() {
        var container = $('.sv'),
                value = $(this).val();
                
        if((container.length > 0) && (value !== '0')) {
            $.ajax({
                url: 'cpanel/router/class-methods',
                type: 'POST',
                data: { index: value },
                success: function(content) {
                    container.empty().html( content );
                    $('.sv').find('.select').selectpicker();
                },
                error: function(err) {
                   console.log(err);
                },
                dataType: 'HTML'
            });
        } else {
            container.empty().html('<div class="alert alert-info" style="padding: 5px 15px;" role="alert"><i class="fa fa-info-circle"></i>&nbsp;<strong class="text-uppercase">Select controller.</strong></div>');
        }
    });
});
<?php echo '</script'; ?>
><?php }} ?>
