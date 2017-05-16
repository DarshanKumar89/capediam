<?php /*%%SmartyHeaderCode:26363095357e3edffa4a4d5-61992102%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b1ddb0edf1db072cb57ebdabf4eb1265b66fad75' => 
    array (
      0 => '/var/www/public/carpedmfashion.com/core/config/../../app/themes/cpanel/router/ajax/route_direct_form.tpl',
      1 => 1469707233,
      2 => 'extends',
    ),
  ),
  'nocache_hash' => '26363095357e3edffa4a4d5-61992102',
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
  'unifunc' => 'content_57e3edffb00942_20249763',
  'cache_lifetime' => 120,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57e3edffb00942_20249763')) {function content_57e3edffb00942_20249763($_smarty_tpl) {?><div class="row">
    <div class="col-lg-2">
        <div class="form-group">
            <label>
                REQUEST METHOD                <span style="color:red;">*</span>
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
                BIT [0]                <span style="color:red;">*</span>
            </label>
            <input type="text" name="bit-0" value="" class="form-control tagsinput" required/>
        </div><!-- end form-group -->
    </div><!-- end col -->
    <div class="col-lg-2">
        <div class="form-group">
            <label>
                BIT [1]                <span style="color:red;">*</span>
            </label>
            <input type="text" name="bit-1" value="" class="form-control tagsinput" required/>
        </div><!-- end form-group -->
    </div><!-- end col -->
    <div class="col-lg-2">
        <div class="form-group">
            <label>
                CONTROLLER                <span style="color:red;">*</span>
            </label>
            <select id="c-l" name="ctrl" class="form-control select" required>
                <option value="0">Vyberte...</option>
                                    <option value="thumbnail">ThumbnailController</option>
                                    <option value="index">IndexController</option>
                                    <option value="cpanel">CpanelController</option>
                                    <option value="store">StoreController</option>
                                    <option value="signin">SigninController</option>
                                    <option value="page">PageController</option>
                                    <option value="page-list">PageListController</option>
                                    <option value="redirect">RedirectController</option>
                                    <option value="language">LanguageController</option>
                                    <option value="api">API_Controller</option>
                                    <option value="catalog">CatalogController</option>
                                    <option value="product">ProductController</option>
                                    <option value="forms">FormsController</option>
                                    <option value="email">EmailController</option>
                                    <option value="bank">BankController</option>
                            </select>
        </div><!-- end form-group -->
    </div><!-- end col -->
    <div class="col-lg-2">
        <div class="form-group">
            <label>
                METHOD                <span style="color:red;">*</span>
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
<script>
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
</script><?php }} ?>
