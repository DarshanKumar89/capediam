<?php /*%%SmartyHeaderCode:49531022757eb9c24d6b111-16193300%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '73687beeb3c84c750927690f3592bb60742c9e16' => 
    array (
      0 => '/var/www/public/carpedmfashion.com/app/themes/cpanel/store/catalog/ordering/ajax/ordering_rule_edit.tpl',
      1 => 1469707241,
      2 => 'extends',
    ),
  ),
  'nocache_hash' => '49531022757eb9c24d6b111-16193300',
  'variables' => 
  array (
    'data' => 0,
    'store_ordering_edit_rule' => 0,
    'global_form_select_choose' => 0,
    'global_form_button_save_changes' => 0,
    'global_form_button_close' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_57eb9c24e02b01_71680314',
  'cache_lifetime' => 120,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57eb9c24e02b01_71680314')) {function content_57eb9c24e02b01_71680314($_smarty_tpl) {?><div class="row">
    <div class="col-lg-12">
                    <form action="cpanel/store/catalog/ordering/update" method="post" role="form">
                <input type="hidden" name="rule-id" value="1"/>
                <div class="panel panel-default">
                    <div class="panel-heading">                                
                        <h3 class="panel-title">
                            UPRAVIŤ USPORIADAVACIE PRAVIDLO                        </h3>
                    </div>
                    <div class="panel-body panel-body-form">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label>
                                        Pravidlo
                                    </label>
                                    <select name="type-id" class="form-control select" data-style="btn-warning">
                                        <option value="0">Vyberte...</option>
                                        <option value="1" >Názov produktu: od A po Z</option>
                                        <option value="2" >Názov produktu: od Z po A</option>
                                        <option value="3" >Ceny: od najnižšej</option>
                                        <option value="4" >Ceny: od najvyššej</option>
                                        <option value="5" >Pridané produkty: vzostupne</option>
                                        <option value="6" selected>Pridané produkty: zostupne</option>
                                        <option value="7" >Upravené produkty: vzostupne</option>
                                        <option value="8" >Upravené produkty: zostupne</option>
                                        <option value="9" >Vyhľadávané produkty: vzostupne</option>
                                        <option value="10" >Vyhľadávané produkty: zostupne</option>
                                        <option value="11" >Predávané produkty: vzostupne</option>
                                        <option value="12" >Predávané produkty: zostupne</option>
                                        <option value="13" >Nevyhľadávané produkty: vzostupne</option>
                                        <option value="14" >Nevyhľadávané produkty: zostupne</option>
                                        <option value="15" >Nepredávané produkty: vzostupne</option>
                                        <option value="16" >Nepredávané produkty: zostupne</option>
                                    </select>
                                </div><!-- end form-group -->
                            </div><!-- end col -->
                        </div><!-- end row -->
                    </div><!-- end panel-body -->
                    <div class="panel-footer">                                 
                        <button type="submit" class="btn btn-success">
                        <i class="fa fa-save"></i>&nbsp;ULOŽIŤ ZMENY                        </button>
                        <button type="button" class="btn btn-default" data-dismiss="modal">
                            ZAVRIEŤ                        </button>
                    </div><!-- end panel-footer -->
                </div><!-- end panel -->
            </form>
            </div><!-- end col -->
</div><!-- end row -->
<script type="text/javascript" src="extensions/cpanel/js/plugins/bootstrap/bootstrap-select.js"></script>
<script>
$(function() {
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
});
</script><?php }} ?>
