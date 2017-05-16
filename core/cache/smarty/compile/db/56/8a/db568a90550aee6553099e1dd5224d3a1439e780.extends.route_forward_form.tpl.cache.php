<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-09-23 10:38:04
         compiled from "/var/www/public/carpedmfashion.com/core/config/../../app/themes/cpanel/router/ajax/route_forward_form.tpl" */ ?>
<?php /*%%SmartyHeaderCode:139353418557e4e9ecdf4891-25007135%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
  ),
  'nocache_hash' => '139353418557e4e9ecdf4891-25007135',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'global_router_label_' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_57e4e9ece62300_78960092',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57e4e9ece62300_78960092')) {function content_57e4e9ece62300_78960092($_smarty_tpl) {?><div class="row">
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
    <div class="col-lg-2">
        <div class="form-group">
            <label>
                <?php if (!empty($_smarty_tpl->tpl_vars['global_router_label_']->value)) {
echo mb_strtoupper($_smarty_tpl->tpl_vars['global_router_label_']->value, 'UTF-8');
} else { ?>BIT [0]<?php }?>
                <span style="color:red;">*</span>
            </label>
            <input type="text" name="bit-0" value="" class="form-control tagsinput" required/>
        </div><!-- end form-group -->
    </div><!-- end col -->
    <div class="col-lg-2">
        <div class="form-group">
            <label>
                <?php if (!empty($_smarty_tpl->tpl_vars['global_router_label_']->value)) {
echo mb_strtoupper($_smarty_tpl->tpl_vars['global_router_label_']->value, 'UTF-8');
} else { ?>BIT [1]<?php }?>
                <span style="color:red;">*</span>
            </label>
            <input type="text" name="bit-1" value="" class="form-control tagsinput" required/>
        </div><!-- end form-group -->
    </div><!-- end col -->
    <div class="col-lg-6">
        <div class="form-group">
            <label>
                <?php if (!empty($_smarty_tpl->tpl_vars['global_router_label_']->value)) {
echo mb_strtoupper($_smarty_tpl->tpl_vars['global_router_label_']->value, 'UTF-8');
} else { ?>REDIRECT URL<?php }?>
                <span style="color:red;">*</span>
            </label>
            <input type="text" name="rw-url" value="" class="form-control" required/>
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
});
<?php echo '</script'; ?>
><?php }} ?>
