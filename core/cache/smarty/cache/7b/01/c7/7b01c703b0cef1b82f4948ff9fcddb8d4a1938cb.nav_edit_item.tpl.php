<?php /*%%SmartyHeaderCode:120572143857320156478052-71905536%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7b01c703b0cef1b82f4948ff9fcddb8d4a1938cb' => 
    array (
      0 => '/Users/henrich/Work/SlatyFork/carpedm.mozayc.net/core/config/../../app/themes/cpanel/navigation/nav_edit_item.tpl',
      1 => 1460547448,
      2 => 'extends',
    ),
  ),
  'nocache_hash' => '120572143857320156478052-71905536',
  'variables' => 
  array (
    'data' => 0,
    'global_site_modal_window_edit_navigation_item_title' => 0,
    'global_site_modal_window_new_navigation_item_pages' => 0,
    'global_form_select_choose' => 0,
    'pageList' => 0,
    'item' => 0,
    'global_site_modal_window_new_navigation_item_categories' => 0,
    'categoryList' => 0,
    'global_site_modal_window_new_navigation_item_page_list' => 0,
    'global_site_form_header_access' => 0,
    'global_site_form_header_publish' => 0,
    'global_site_modal_window_new_navigation_item_form_label_icon' => 0,
    'global_site_form_header_css_id' => 0,
    'global_site_form_header_css_classes' => 0,
    'languages' => 0,
    'i' => 0,
    'lang' => 0,
    'store_categories_form_category_image' => 0,
    'global_site_modal_window_new_navigation_item_form_label_item_name' => 0,
    'global_site_modal_window_new_navigation_item_form_label_friendly_url' => 0,
    'global_form_header_html_content' => 0,
    'global_form_button_save_changes' => 0,
    'global_form_button_close' => 0,
    'baseUrl' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5732015651ad28_89965721',
  'cache_lifetime' => 120,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5732015651ad28_89965721')) {function content_5732015651ad28_89965721($_smarty_tpl) {?><div class="row">
    <div class="col-lg-12">
        <form action="cpanel/update-nav-item" method="post" role="form">
            <input type="hidden" name="itemId" value="17" />
            <input type="hidden" name="patternId" value="1" />
            <input type="hidden" name="access" value="0" />
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">
                        <strong>
                            Editácia navigačnej položky                        </strong>
                    </h3>
                </div>
                <div class="panel-body">                                                                        
                    <div class="row thumbnail">
                        <div class="col-lg-6">
                            <div class="form-group col-lg-12 col-sm-12 col-xs-12">
                                <label>
                                    Stránky                                </label>                                        
                                <select id="page" name="page-id" class="form-control select" data-live-search="true" required="">
                                    <option value="0">Vyberte...</option>
                                                                            <option value="1" >Prehľad veľkost&iacute;</option>
                                                                            <option value="2" >MAJK SPIRIT</option>
                                                                            <option value="3" >SANGRE NUEVE</option>
                                                                            <option value="5" >KOLEKCIA BLACKGREY</option>
                                                                            <option value="6" >OĽGA BEST&Auml;NDIGOV&Aacute; </option>
                                                                            <option value="7" >CarpeDM fashion</option>
                                                                            <option value="8" >MARTINA SEDL&Aacute;ROV&Aacute; - IFBB BIKINY ATHLET</option>
                                                                            <option value="10" >Dodacie podmienky</option>
                                                                            <option value="11" >Kontakty</option>
                                                                            <option value="12" >Obchodn&eacute; podmienky</option>
                                                                            <option value="13" >O n&aacute;s</option>
                                                                            <option value="14" >Z&aacute;ruka a reklamačn&yacute; poriadok</option>
                                                                    </select>
                            </div><!-- end form-group -->
                            <div class="form-group col-lg-12 col-sm-12 col-xs-12">
                                <label>
                                    Kategórie                                </label>                                        
                                <select id="category" name="category-id" class="form-control select" data-live-search="true" required="">
                                    <option value="0">Vyberte...</option>
                                                                            <option value="1" >Ženy</option>
                                                                            <option value="2" >Basics d&aacute;mske tepl&aacute;ky</option>
                                                                            <option value="3" >D&aacute;mska kolekcia BLACKGREY</option>
                                                                            <option value="4" >Blackgrey d&aacute;mske tepl&aacute;ky</option>
                                                                            <option value="5" >D&aacute;mska kolekcia FITNESS</option>
                                                                            <option value="55" >Nov&eacute; p&aacute;nske tepl&aacute;ky</option>
                                                                            <option value="7" >Muži</option>
                                                                            <option value="8" >Basics p&aacute;nske tepl&aacute;ky</option>
                                                                            <option value="54" >Nov&eacute; d&aacute;mske tepl&aacute;ky</option>
                                                                            <option value="10" >Deti</option>
                                                                            <option value="12" >D&aacute;mske novinky</option>
                                                                            <option value="13" >Basics detsk&eacute; tepl&aacute;ky</option>
                                                                            <option value="73" >Basics d&aacute;mske oblečenie</option>
                                                                            <option value="72" >Novinky</option>
                                                                            <option value="71" >EGO p&aacute;nske tepl&aacute;ky</option>
                                                                            <option value="70" >FITNESS d&aacute;mske tepl&aacute;ky</option>
                                                                            <option value="69" >Detsk&eacute; tepl&aacute;ky</option>
                                                                            <option value="68" >P&aacute;nske tepl&aacute;ky</option>
                                                                            <option value="67" >D&aacute;mske tepl&aacute;ky</option>
                                                                            <option value="66" >Basics detsk&eacute; čiapky</option>
                                                                            <option value="65" >Basics detsk&eacute; bundy</option>
                                                                            <option value="64" >Basics detsk&eacute; svetre a pul&oacute;vre</option>
                                                                            <option value="25" >D&aacute;mske kolekcie</option>
                                                                            <option value="53" >Detsk&eacute; novinky</option>
                                                                            <option value="27" >Outlet</option>
                                                                            <option value="63" >Basics detsk&eacute; kraťasy</option>
                                                                            <option value="62" >Basics detsk&eacute; tričk&aacute;</option>
                                                                            <option value="30" >Basics p&aacute;nske tielka</option>
                                                                            <option value="61" >Basics detsk&eacute; tepl&aacute;kov&eacute; s&uacute;pravy</option>
                                                                            <option value="60" >Basics detsk&eacute; mikiny</option>
                                                                            <option value="59" >Zlacnen&eacute; detsk&eacute; tepl&aacute;ky</option>
                                                                            <option value="58" >Zlacnen&eacute; p&aacute;nske tepl&aacute;ky</option>
                                                                            <option value="57" >Zlacnen&eacute; d&aacute;mske tepl&aacute;ky</option>
                                                                            <option value="36" >D&aacute;mske limitovan&eacute; oblečenie</option>
                                                                            <option value="37" >Limitovan&eacute; p&aacute;nske tepl&aacute;ky</option>
                                                                            <option value="52" >P&aacute;nske novinky</option>
                                                                            <option value="56" >Nov&eacute; detsk&eacute; tepl&aacute;ky</option>
                                                                            <option value="51" >D&aacute;mske ta&scaron;ky a kabelky</option>
                                                                            <option value="50" >Outlet deti</option>
                                                                            <option value="42" >P&aacute;nske kolekcie</option>
                                                                            <option value="43" >Detsk&eacute; kolekcie</option>
                                                                            <option value="44" >P&aacute;nske limitovan&eacute; oblečenie</option>
                                                                            <option value="45" >Detsk&eacute; limitovan&eacute; oblečenie</option>
                                                                            <option value="46" >D&aacute;mske doplnky</option>
                                                                            <option value="47" >P&aacute;nske doplnky</option>
                                                                            <option value="48" >Outlet ženy</option>
                                                                            <option value="49" >Outlet muži</option>
                                                                            <option value="41" >BLACKGREY d&aacute;mske leg&iacute;ny</option>
                                                                            <option value="40" >Basics detsk&eacute; tielka</option>
                                                                            <option value="38" >Limitovan&eacute; d&aacute;mske tepl&aacute;ky</option>
                                                                            <option value="26" >P&aacute;nska kolekcia EGO</option>
                                                                            <option value="9" >Basics p&aacute;nske mikiny</option>
                                                                            <option value="6" selected>Basics d&aacute;mske mikiny</option>
                                                                            <option value="39" >Limitovan&eacute; detsk&eacute; tepl&aacute;ky</option>
                                                                            <option value="28" >Basics p&aacute;nske tepl&aacute;kov&eacute; s&uacute;pravy</option>
                                                                            <option value="15" >Basics d&aacute;mske tepl&aacute;kov&eacute; s&uacute;pravy</option>
                                                                            <option value="74" >Basics detsk&eacute; oblečenie</option>
                                                                            <option value="29" >Basics p&aacute;nske tričk&aacute;</option>
                                                                            <option value="16" >Basics d&aacute;mske tričk&aacute; a tielka</option>
                                                                            <option value="31" >Basics p&aacute;nske kraťasy</option>
                                                                            <option value="17" >Basics d&aacute;mske tielka</option>
                                                                            <option value="32" >Basics p&aacute;nske svetre a pul&oacute;vre</option>
                                                                            <option value="18" >Basics d&aacute;mske &scaron;ortky, kraťasy a sukne</option>
                                                                            <option value="33" >Basics p&aacute;nske overaly</option>
                                                                            <option value="19" >Basics d&aacute;mske svetre a pul&oacute;vre</option>
                                                                            <option value="34" >Basics p&aacute;nske bundy</option>
                                                                            <option value="20" >Basics d&aacute;mske &scaron;aty</option>
                                                                            <option value="35" >Basics p&aacute;nske čiapky</option>
                                                                            <option value="21" >Basics d&aacute;mske overaly a kombin&eacute;zy</option>
                                                                            <option value="22" >Basics d&aacute;mske bundy a sak&aacute;</option>
                                                                            <option value="75" >Basics p&aacute;nske oblečenie</option>
                                                                            <option value="23" >Basics d&aacute;mske spodn&eacute; pr&aacute;dlo</option>
                                                                            <option value="24" >Basics d&aacute;mske čiapky</option>
                                                                    </select>
                            </div><!-- end form-group -->
                            <div class="form-group col-lg-12 col-sm-12 col-xs-12" style="display: none;">
                                <label>
                                    Zoznam stránok                                </label>                                        
                                <select id="pageList" name="page-list-id" class="form-control select" data-live-search="true" required="">
                                    <option value="0">Vyberte...</option>
                                    
                                </select>
                            </div><!-- end form-group -->
                            <div class="form-group col-lg-12 col-sm-12 col-xs-12">
                                <label>
                                    Úroveň prístupu                                </label>                                        
                                <select class="form-control select" data-style="btn-warning" disabled>
                                    <option value="0">default</option>
                                </select>
                            </div><!-- end form-group -->
                            <div class="form-group col-lg-6 pull-left">
                                <label>
                                    Publikovať                                </label><br>
                                <label class="switch">
                                    <input type="checkbox" name="publish" value="1" checked="">
                                    <span></span>
                                </label>
                            </div><!-- end form-group -->
                            <div class="form-group col-lg-6 pull-right">
                                <label>
                                    USE HTML
                                </label><br>
                                <label class="switch">
                                    <input type="checkbox" name="use-html" value="1" >
                                    <span></span>
                                </label>
                            </div><!-- end form-group -->
                        </div><!-- end col -->
                        <div class="col-lg-6">
                           <div class="form-group">
                                <label>
                                    Ikona                                </label>
                                <input class="form-control" type="text" name="icon" value="">
                            </div><!-- end form-group -->
                            <div class="form-group">
                                <label>
                                    CSS ID                                </label>
                                <input class="form-control" type="text" name="css-id" value="">
                            </div><!-- end form-group -->
                            <div class="form-group">
                                <label>
                                    CSS Triedy                                </label>
                                <input class="tagsinput form-control" type="text" name="css-classes" value="">
                            </div><!-- end form-group -->
                        </div><!-- end col -->
                                                    <div class="col-lg-12">
                                <!-- START TABS -->                                
                                <div class="panel panel-default tabs">                            
                                    <ul class="nav nav-tabs" role="tablist" style="margin-top: -2px;padding:0;">
                                                                                    <li class="active">
                                                <a href="#tab-sk" role="tab" data-toggle="tab">
                                                    <span class="flag-icon flag-icon-sk"  style="width:23px;height:23px;"></span>
                                                    <span style="position: relative;top: 5.5px;left: 1.5px;">Slovak</span>
                                                </a>
                                            </li>
                                                                            </ul>           
                                </div>
                                <div class="panel-body tab-content">
                                                                                <div class="tab-pane itemLang active" id="tab-sk">
                                            <div class="row">
                                                <div class="col-lg-12" style="margin-bottom:15px;">
                                                    <label>
                                                        OBRÁZOK NAVIGAČNEJ POLOŽKY
                                                    </label>
                                                    <div class="form-group">
                                                        <div class="input-group col-lg-3 pull-left">
                                                            <span class="nav-item-image ">
                                                                                                                                    <i class="glyphicon glyphicon-eye-open"></i>
                                                                 
                                                            </span>
                                                        </div><!-- end image -->
                                                        <div class="input-group col-lg-9 pull-right">
                                                            <span class="input-group-btn">
                                                                <a href="cpanel/choose-nav-item-image/17/189/7259b712f116a7fe6310cdc765c836af" class="btn btn-default">
                                                                    <i class="glyphicon glyphicon-hdd"></i>
                                                                </a>
                                                            </span>
                                                            <input type="text" class="form-control" placeholder="Načítať obrázok z drive">
                                                            <span class="input-group-addon">
                                                                <i class="glyphicon glyphicon-eye-open"></i>
                                                            </span>
                                                        </div><!-- end input-group -->
                                                    </div><!-- end form-group -->
                                                </div><!-- end col -->
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label>
                                                            Názov navigačnej položky                                                        </label>
                                                        <div class="input-group">
                                                            <span class="input-group-addon">
                                                                <span class="flag-icon flag-icon-sk"></span>
                                                            </span>
                                                            <input type="text"
                                                                   name="linksname[189]['name']"
                                                                   value="Mikiny"
                                                                   placeholder="Názov navigačnej položky"
                                                                   class="form-control ipt"
                                                                   data-lang-id="189"
                                                                   required/>
                                                            <span class="input-group-addon">
                                                                <i class="fa fa-bars"></i>
                                                            </span>
                                                        </div><!-- end input-group -->
                                                    </div><!-- end form-group -->
                                                </div><!-- end col -->
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label>
                                                            URL                                                        </label>
                                                        <div class="input-group">
                                                            <span class="input-group-addon">
                                                                <span class="flag-icon flag-icon-sk"></span>
                                                            </span>
                                                            <input type="text"
                                                                   name="linksname[189]['url_link']"
                                                                   value=""
                                                                   class="form-control tagsinput"/>
                                                            <span class="input-group-addon">
                                                                <i class="fa fa-external-link"></i>
                                                            </span>
                                                        </div><!-- end input-group -->
                                                    </div><!-- end form-group -->
                                                </div><!-- end col -->
                                                <div class="col-lg-12" style="margin:15px 0;">
                                                    <div class="form-group">
                                                        <label>
                                                            HTML OBSAH                                                        </label>
                                                        <div class="input-group">
                                                            <span class="input-group-addon">
                                                                <span class="flag-icon flag-icon-sk"></span>
                                                            </span>
                                                            <textarea name="linksname[189]['html-content']" id="ckeditor_189" class="ckeditor" row="5"></textarea>
                                                        </div><!-- end form-group -->  
                                                    </div><!-- end form-group -->
                                                </div><!-- end col -->
                                            </div><!-- end row -->
                                        </div>
                                                                    </div>
                            </div><!-- end col -->
                                            </div>
                </div><!-- end panel-body -->
                <div class="panel-footer">                                 
                    <button type="submit" class="btn btn-success">
                        <i class="fa fa-save"></i>&nbsp;ULOŽIŤ ZMENY                    </button>
                    <button type="button" class="btn btn-default" data-dismiss="modal">
                        ZAVRIEŤ                    </button>
                </div><!-- end panel-footer -->
            </div><!-- end panel -->
        </form>
    </div>
</div>
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
    if($(".tagsinput").length > 0){       
        $(".tagsinput").each(function(){

            if($(this).data("placeholder") != ''){
                var dt = $(this).data("placeholder");
            }else
                var dt = 'add a tag';

            $(this).tagsInput({ width: '100%',height:'auto',defaultText: dt });
        });
    }
    $('#page').on('change',function() {
        var value = $(this).val();

        if(value == '0') {
            clearLangInpts();
        } else {
            $.ajax({
                url: 'cpanel/nav-page-lang-data',
                data: { pageId: value},
                type: 'POST',
                success: function(responseJSON) {
                    if(responseJSON.status === 200) {
                      for(var i in responseJSON.data) {
                        if(responseJSON.data[i].heading.length > 0) {
                            $('[data-lang-id='+responseJSON.data[i].id_lang+']').val(responseJSON.data[i].heading);
                        } else {
                            $('[data-lang-id='+responseJSON.data[i].id_lang+']').val('');
                        }
                      }
                    } else {
                        clearLangInpts();
                    }
                },
                error: function(data) {
                    console.log(data);
                },
                dataType: 'JSON'
            });
        }
    });
    
    $('#category').on('change',function() {
        var value = $(this).val();

        if(value == '0') {
            clearLangInpts();
        } else {
            $.ajax({
                url: 'cpanel/store-category-lang-data',
                data: { categoryId: value},
                type: 'POST',
                success: function(responseJSON) {
                    if(responseJSON.status === 200) {
                      for(var i in responseJSON.data) {
                        if(responseJSON.data[i].category_name.length > 0) {
                            $('[data-lang-id='+responseJSON.data[i].id_lang+']').val(responseJSON.data[i].category_name);
                        } else {
                            $('[data-lang-id='+responseJSON.data[i].id_lang+']').val('');
                        }
                      }
                    } else {
                        clearLangInpts();
                    }
                },
                error: function(data) {
                    console.log(data);
                },
                dataType: 'JSON'
            });
        }
    });
    
    function clearLangInpts() {
        $('.itemLang').find('.ipt').each(function() {
            $(this).val('');
        });
    }
    
            CKEDITOR.replace('ckeditor_189', {
            "extraPlugins": "imagebrowser",
            "imageBrowser_listUrl": "http://carpedmfashion.local/cpanel/drive-api/build-image-register"
        });
     
});
</script><?php }} ?>
