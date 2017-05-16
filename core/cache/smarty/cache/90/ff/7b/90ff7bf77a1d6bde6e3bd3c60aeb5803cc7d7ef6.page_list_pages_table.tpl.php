<?php /*%%SmartyHeaderCode:2099560769580dd32361dda1-93390049%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '90ff7bf77a1d6bde6e3bd3c60aeb5803cc7d7ef6' => 
    array (
      0 => '/var/www/public/carpedmfashion.com/core/config/../../app/themes/cpanel/page/ajax/page_list_pages_table.tpl',
      1 => 1469707231,
      2 => 'extends',
    ),
  ),
  'nocache_hash' => '2099560769580dd32361dda1-93390049',
  'variables' => 
  array (
    'global_section_pages' => 0,
    'total' => 0,
    'countLastOrder' => 0,
    'pagination_info' => 0,
    'countOrder' => 0,
    'countNotOrder' => 0,
    'pageList' => 0,
    'pageListId' => 0,
    'page' => 0,
    'limit' => 0,
    'sort' => 0,
    'pagination' => 0,
    'global_pages_table_header_background_image' => 0,
    'global_pages_label_page_name' => 0,
    'global_pages_table_header_owner' => 0,
    'global_pages_table_header_last_modified' => 0,
    'global_pages_table_header_order' => 0,
    'global_pages_table_header_publish' => 0,
    'global_pages_table_header_remove' => 0,
    'i' => 0,
    'item' => 0,
    'global_alert_info' => 0,
    'global_pages_empty_list' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_580dd323828f83_29333585',
  'cache_lifetime' => 120,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_580dd323828f83_29333585')) {function content_580dd323828f83_29333585($_smarty_tpl) {?><div class="panel panel-info">
    <div class="panel-heading ui-draggable-handle">
        <h3 class="panel-title">
            <i class="fa fa-list"></i>&nbsp;
            Stránky&nbsp;
            <span class="btn btn-info" style="margin: 0 15px;">12</span>
            <span class="btn btn-warning" style="margin: 0 15px;">0</span>
            <span class="badge">Zobrazených 1-50 z 12 záznamov</span>
            <span class="badge">0&nbsp;Zotriedených záznamov</span>
            <span class="badge">12&nbsp;Nezotriedených záznamov</span>
        </h3>
        <ul class="panel-controls">
            <li>
                <a href="#" id="showPageListModal" onclick="return false;" title="Page List">
                    <span class="fa fa-plus"></span>
                </a>
            </li>
            <li>
                <a href="#" onclick="return false;" class="panel-collapse">
                    <span class="fa fa-angle-up"></span>
                </a>
            </li>
        </ul>    
    </div><!-- end panel-heading -->
    <div class="panel-body panel-body-table">
                    <div class="row">
                <div class="col-lg-12" style="padding:15px 10px;">
                    <div class="form-group pull-left" style="width:280px;margin-right:5px;">
                        <select class="form-control select" onchange="location = 'cpanel/page-list-edit//1/50/'+this.options[this.selectedIndex].value;">
                            <option value="0">Triedenie</option>
                            <option value="99" >
                                Vzostupne
                            </option>
                            <option value="88" >
                                Zostupne
                            </option>
                            <option value="77" >
                                Zoradiť od A po Z.
                            </option>
                            <option value="66" >
                                Zoradiť od Z po A
                            </option>
                            <option value="55" >
                                Zoradiť od najstaršieho po najnovšie.
                            </option>
                            <option value="44" >
                                Zoradiť od najnovšieho po najstaršie
                            </option>
                        </select>
                    </div>
                    <div class="form-group pull-left" style="width:80px;margin-right:5px;">
                        <select class="form-control select" onchange="location = 'cpanel/page-list-edit//1/'+this.options[this.selectedIndex].value+'/0';">
                            <option value="10" >10</option>
                            <option value="20" >20</option>
                            <option value="50" selected>50</option>
                            <option value="100" >100</option>
                            <option value="200" >200</option>
                            <option value="500" >500</option>
                        </select>
                    </div>
                    <div class="form-group pull-left" style="width:400px;margin-right:5px;">
                        <div class="input-group">
                            <input type="text" id="search" value="" placeholder="Hladať" class="form-control">
                            <span class="input-group-btn">
                                <button type="button" onclick="location = 'cpanel/page-list-edit//1/10?q='+document.getElementById('search').value;" class="btn btn-default">
                                    <i class="fa fa-search"></i>
                                </button>
                            </span>
                        </div>
                    </div>
                    <ul class="pagination pagination-sm pull-right"><li class="disabled"><a href="cpanel/page-list-edit/1/0/50"onclick="return false;"><i class="fa fa-angle-left"></i></a></li><li class="active"><a href="cpanel/page-list-edit/1/1/50">1</a></li><li class="disabled"><a href="cpanel/page-list-edit/1/2/50"onclick="return false;"><i class="fa fa-angle-right"></i></a></li></ul>
                </div>
            </div><!-- end row -->
            <div class="table-responsive" style="border-top:1px solid #E5E5E5;">
                <table id="pageList" class="table table-bordered table-striped table-actions">
                    <thead>
                        <tr>
                            <th width="70" class="text-center">
                                OBRÁZOK POZADIA STRÁNKY                            </th>
                            <th class="text-left">
                               NÁZOV STRÁNKY                            </th>
                            <th width="200" class="text-center">
                                VLASTNÍK                            </th>
                            <th width="100" class="text-center">
                                POSLEDNÁ ZMENA                            </th>
                            <th class="text-center" width="40">
                                PORADIE                            </th>
                            <th width="100" class="text-center">
                                PUBLIKOVAŤ                            </th>
                            <th width="100" class="text-center">
                                VYMAZAŤ                            </th>
                        </tr>
                    </thead>
                    <tbody>
                                                    <tr>
                                <td class="text-center">
                                    <input type="hidden" name="pageList[0]['page-id']" value="19" />
                                                                            <img src="thumbnail/crop/406d7f16aef0bf7d2655df4c865eaacc/35/35" width="35" height="35" alt="carpedm-dava-sancu-mladym1"/>
                                                                    </td>
                                <td class="text-left">
                                    Carpe DM d&aacute;va &scaron;ancu mlad&yacute;m
                                </td>
                                <td class="text-left">
                                    Alexander&nbsp;Kernasevic
                                </td>
                                <td class="text-center">
                                    24-10-2016
                                </td>
                                <td class="text-center">
                                    <div class="form-group pull-right" style="width:80px;">
                                        <div id="ig-info" class="input-group">                                            
                                            <span class="input-group-addon">
                                                <i class="fa fa-sort-numeric-desc"></i>
                                            </span>
                                            <input type="text"  name="pageList[0]['position']" value="0" min="1" class="form-control text-right">
                                        </div>
                                    </div>
                                </td>
                                <td class="text-center">
                                    <label class="switch">
                                        <input type="checkbox" name="pageList[0]['publish']" checked="" value="1">
                                        <span></span>
                                    </label>
                                </td>
                                <td class="text-center">
                                    <label class="switch">
                                        <input type="checkbox" name="pageList[0]['remove']" value="1">
                                        <span></span>
                                    </label>
                                </td>
                            </tr>
                                                    <tr>
                                <td class="text-center">
                                    <input type="hidden" name="pageList[1]['page-id']" value="18" />
                                                                            <span style="font-size:1.4em;color:red;">
                                            <i class="glyphicon glyphicon-eye-open"></i>
                                        </span>
                                                                    </td>
                                <td class="text-left">
                                    Čo ony maj&uacute; a my nie?!
                                </td>
                                <td class="text-left">
                                    Alexander&nbsp;Kernasevic
                                </td>
                                <td class="text-center">
                                    21-09-2016
                                </td>
                                <td class="text-center">
                                    <div class="form-group pull-right" style="width:80px;">
                                        <div id="ig-info" class="input-group">                                            
                                            <span class="input-group-addon">
                                                <i class="fa fa-sort-numeric-desc"></i>
                                            </span>
                                            <input type="text"  name="pageList[1]['position']" value="0" min="1" class="form-control text-right">
                                        </div>
                                    </div>
                                </td>
                                <td class="text-center">
                                    <label class="switch">
                                        <input type="checkbox" name="pageList[1]['publish']" checked="" value="1">
                                        <span></span>
                                    </label>
                                </td>
                                <td class="text-center">
                                    <label class="switch">
                                        <input type="checkbox" name="pageList[1]['remove']" value="1">
                                        <span></span>
                                    </label>
                                </td>
                            </tr>
                                                    <tr>
                                <td class="text-center">
                                    <input type="hidden" name="pageList[2]['page-id']" value="16" />
                                                                            <span style="font-size:1.4em;color:red;">
                                            <i class="glyphicon glyphicon-eye-open"></i>
                                        </span>
                                                                    </td>
                                <td class="text-left">
                                    TEPL&Aacute;KOV&Eacute; SPOVEDE
                                </td>
                                <td class="text-left">
                                    Alexander&nbsp;Kernasevic
                                </td>
                                <td class="text-center">
                                    19-09-2016
                                </td>
                                <td class="text-center">
                                    <div class="form-group pull-right" style="width:80px;">
                                        <div id="ig-info" class="input-group">                                            
                                            <span class="input-group-addon">
                                                <i class="fa fa-sort-numeric-desc"></i>
                                            </span>
                                            <input type="text"  name="pageList[2]['position']" value="0" min="1" class="form-control text-right">
                                        </div>
                                    </div>
                                </td>
                                <td class="text-center">
                                    <label class="switch">
                                        <input type="checkbox" name="pageList[2]['publish']" checked="" value="1">
                                        <span></span>
                                    </label>
                                </td>
                                <td class="text-center">
                                    <label class="switch">
                                        <input type="checkbox" name="pageList[2]['remove']" value="1">
                                        <span></span>
                                    </label>
                                </td>
                            </tr>
                                                    <tr>
                                <td class="text-center">
                                    <input type="hidden" name="pageList[3]['page-id']" value="17" />
                                                                            <span style="font-size:1.4em;color:red;">
                                            <i class="glyphicon glyphicon-eye-open"></i>
                                        </span>
                                                                    </td>
                                <td class="text-left">
                                    Beach Volley turnaj s CarpeDM
                                </td>
                                <td class="text-left">
                                    Alexander&nbsp;Kernasevic
                                </td>
                                <td class="text-center">
                                    13-09-2016
                                </td>
                                <td class="text-center">
                                    <div class="form-group pull-right" style="width:80px;">
                                        <div id="ig-info" class="input-group">                                            
                                            <span class="input-group-addon">
                                                <i class="fa fa-sort-numeric-desc"></i>
                                            </span>
                                            <input type="text"  name="pageList[3]['position']" value="0" min="1" class="form-control text-right">
                                        </div>
                                    </div>
                                </td>
                                <td class="text-center">
                                    <label class="switch">
                                        <input type="checkbox" name="pageList[3]['publish']" checked="" value="1">
                                        <span></span>
                                    </label>
                                </td>
                                <td class="text-center">
                                    <label class="switch">
                                        <input type="checkbox" name="pageList[3]['remove']" value="1">
                                        <span></span>
                                    </label>
                                </td>
                            </tr>
                                                    <tr>
                                <td class="text-center">
                                    <input type="hidden" name="pageList[4]['page-id']" value="8" />
                                                                            <span style="font-size:1.4em;color:red;">
                                            <i class="glyphicon glyphicon-eye-open"></i>
                                        </span>
                                                                    </td>
                                <td class="text-left">
                                    MARTINA SEDL&Aacute;ROV&Aacute; - SPOD TATIER DO SVETA
                                </td>
                                <td class="text-left">
                                    Alexander&nbsp;Kernasevic
                                </td>
                                <td class="text-center">
                                    09-09-2016
                                </td>
                                <td class="text-center">
                                    <div class="form-group pull-right" style="width:80px;">
                                        <div id="ig-info" class="input-group">                                            
                                            <span class="input-group-addon">
                                                <i class="fa fa-sort-numeric-desc"></i>
                                            </span>
                                            <input type="text"  name="pageList[4]['position']" value="0" min="1" class="form-control text-right">
                                        </div>
                                    </div>
                                </td>
                                <td class="text-center">
                                    <label class="switch">
                                        <input type="checkbox" name="pageList[4]['publish']" checked="" value="1">
                                        <span></span>
                                    </label>
                                </td>
                                <td class="text-center">
                                    <label class="switch">
                                        <input type="checkbox" name="pageList[4]['remove']" value="1">
                                        <span></span>
                                    </label>
                                </td>
                            </tr>
                                                    <tr>
                                <td class="text-center">
                                    <input type="hidden" name="pageList[5]['page-id']" value="15" />
                                                                            <span style="font-size:1.4em;color:red;">
                                            <i class="glyphicon glyphicon-eye-open"></i>
                                        </span>
                                                                    </td>
                                <td class="text-left">
                                    Balada o tepl&aacute;koch
                                </td>
                                <td class="text-left">
                                    Neva&nbsp;Eva
                                </td>
                                <td class="text-center">
                                    09-09-2016
                                </td>
                                <td class="text-center">
                                    <div class="form-group pull-right" style="width:80px;">
                                        <div id="ig-info" class="input-group">                                            
                                            <span class="input-group-addon">
                                                <i class="fa fa-sort-numeric-desc"></i>
                                            </span>
                                            <input type="text"  name="pageList[5]['position']" value="0" min="1" class="form-control text-right">
                                        </div>
                                    </div>
                                </td>
                                <td class="text-center">
                                    <label class="switch">
                                        <input type="checkbox" name="pageList[5]['publish']" checked="" value="1">
                                        <span></span>
                                    </label>
                                </td>
                                <td class="text-center">
                                    <label class="switch">
                                        <input type="checkbox" name="pageList[5]['remove']" value="1">
                                        <span></span>
                                    </label>
                                </td>
                            </tr>
                                                    <tr>
                                <td class="text-center">
                                    <input type="hidden" name="pageList[6]['page-id']" value="7" />
                                                                            <span style="font-size:1.4em;color:red;">
                                            <i class="glyphicon glyphicon-eye-open"></i>
                                        </span>
                                                                    </td>
                                <td class="text-left">
                                    CARPE DM FASHION - PR&Iacute;BEH TALENTU A V&Aacute;&Scaron;NE
                                </td>
                                <td class="text-left">
                                    Alexander&nbsp;Kernasevic
                                </td>
                                <td class="text-center">
                                    06-09-2016
                                </td>
                                <td class="text-center">
                                    <div class="form-group pull-right" style="width:80px;">
                                        <div id="ig-info" class="input-group">                                            
                                            <span class="input-group-addon">
                                                <i class="fa fa-sort-numeric-desc"></i>
                                            </span>
                                            <input type="text"  name="pageList[6]['position']" value="0" min="1" class="form-control text-right">
                                        </div>
                                    </div>
                                </td>
                                <td class="text-center">
                                    <label class="switch">
                                        <input type="checkbox" name="pageList[6]['publish']" checked="" value="1">
                                        <span></span>
                                    </label>
                                </td>
                                <td class="text-center">
                                    <label class="switch">
                                        <input type="checkbox" name="pageList[6]['remove']" value="1">
                                        <span></span>
                                    </label>
                                </td>
                            </tr>
                                                    <tr>
                                <td class="text-center">
                                    <input type="hidden" name="pageList[7]['page-id']" value="2" />
                                                                            <span style="font-size:1.4em;color:red;">
                                            <i class="glyphicon glyphicon-eye-open"></i>
                                        </span>
                                                                    </td>
                                <td class="text-left">
                                    MAJK SPIRIT - BIELY PRINC
                                </td>
                                <td class="text-left">
                                    Alexander&nbsp;Kernasevic
                                </td>
                                <td class="text-center">
                                    06-09-2016
                                </td>
                                <td class="text-center">
                                    <div class="form-group pull-right" style="width:80px;">
                                        <div id="ig-info" class="input-group">                                            
                                            <span class="input-group-addon">
                                                <i class="fa fa-sort-numeric-desc"></i>
                                            </span>
                                            <input type="text"  name="pageList[7]['position']" value="0" min="1" class="form-control text-right">
                                        </div>
                                    </div>
                                </td>
                                <td class="text-center">
                                    <label class="switch">
                                        <input type="checkbox" name="pageList[7]['publish']" checked="" value="1">
                                        <span></span>
                                    </label>
                                </td>
                                <td class="text-center">
                                    <label class="switch">
                                        <input type="checkbox" name="pageList[7]['remove']" value="1">
                                        <span></span>
                                    </label>
                                </td>
                            </tr>
                                                    <tr>
                                <td class="text-center">
                                    <input type="hidden" name="pageList[8]['page-id']" value="3" />
                                                                            <span style="font-size:1.4em;color:red;">
                                            <i class="glyphicon glyphicon-eye-open"></i>
                                        </span>
                                                                    </td>
                                <td class="text-left">
                                    SANGRE NUEVA
                                </td>
                                <td class="text-left">
                                    Alexander&nbsp;Kernasevic
                                </td>
                                <td class="text-center">
                                    06-09-2016
                                </td>
                                <td class="text-center">
                                    <div class="form-group pull-right" style="width:80px;">
                                        <div id="ig-info" class="input-group">                                            
                                            <span class="input-group-addon">
                                                <i class="fa fa-sort-numeric-desc"></i>
                                            </span>
                                            <input type="text"  name="pageList[8]['position']" value="0" min="1" class="form-control text-right">
                                        </div>
                                    </div>
                                </td>
                                <td class="text-center">
                                    <label class="switch">
                                        <input type="checkbox" name="pageList[8]['publish']" checked="" value="1">
                                        <span></span>
                                    </label>
                                </td>
                                <td class="text-center">
                                    <label class="switch">
                                        <input type="checkbox" name="pageList[8]['remove']" value="1">
                                        <span></span>
                                    </label>
                                </td>
                            </tr>
                                                    <tr>
                                <td class="text-center">
                                    <input type="hidden" name="pageList[9]['page-id']" value="6" />
                                                                            <span style="font-size:1.4em;color:red;">
                                            <i class="glyphicon glyphicon-eye-open"></i>
                                        </span>
                                                                    </td>
                                <td class="text-left">
                                    OĽGA BEST&Auml;NDIGOV&Aacute; - TR&Eacute;NING S KR&Aacute;ĽOVNOU ĽADU 
                                </td>
                                <td class="text-left">
                                    Alexander&nbsp;Kernasevic
                                </td>
                                <td class="text-center">
                                    06-09-2016
                                </td>
                                <td class="text-center">
                                    <div class="form-group pull-right" style="width:80px;">
                                        <div id="ig-info" class="input-group">                                            
                                            <span class="input-group-addon">
                                                <i class="fa fa-sort-numeric-desc"></i>
                                            </span>
                                            <input type="text"  name="pageList[9]['position']" value="0" min="1" class="form-control text-right">
                                        </div>
                                    </div>
                                </td>
                                <td class="text-center">
                                    <label class="switch">
                                        <input type="checkbox" name="pageList[9]['publish']" checked="" value="1">
                                        <span></span>
                                    </label>
                                </td>
                                <td class="text-center">
                                    <label class="switch">
                                        <input type="checkbox" name="pageList[9]['remove']" value="1">
                                        <span></span>
                                    </label>
                                </td>
                            </tr>
                                                    <tr>
                                <td class="text-center">
                                    <input type="hidden" name="pageList[10]['page-id']" value="5" />
                                                                            <span style="font-size:1.4em;color:red;">
                                            <i class="glyphicon glyphicon-eye-open"></i>
                                        </span>
                                                                    </td>
                                <td class="text-left">
                                    KOLEKCIA BLACKGREY
                                </td>
                                <td class="text-left">
                                    Alexander&nbsp;Kernasevic
                                </td>
                                <td class="text-center">
                                    23-08-2016
                                </td>
                                <td class="text-center">
                                    <div class="form-group pull-right" style="width:80px;">
                                        <div id="ig-info" class="input-group">                                            
                                            <span class="input-group-addon">
                                                <i class="fa fa-sort-numeric-desc"></i>
                                            </span>
                                            <input type="text"  name="pageList[10]['position']" value="0" min="1" class="form-control text-right">
                                        </div>
                                    </div>
                                </td>
                                <td class="text-center">
                                    <label class="switch">
                                        <input type="checkbox" name="pageList[10]['publish']" checked="" value="1">
                                        <span></span>
                                    </label>
                                </td>
                                <td class="text-center">
                                    <label class="switch">
                                        <input type="checkbox" name="pageList[10]['remove']" value="1">
                                        <span></span>
                                    </label>
                                </td>
                            </tr>
                                            </tbody>
                </table>
            </div><!-- end table-responsive -->
            </div><!-- end panel-body -->
</div><!-- end panel -->
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
