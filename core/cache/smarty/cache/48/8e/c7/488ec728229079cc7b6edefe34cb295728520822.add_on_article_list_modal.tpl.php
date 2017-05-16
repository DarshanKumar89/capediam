<?php /*%%SmartyHeaderCode:122705424657c94226b6d175-34156156%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '488ec728229079cc7b6edefe34cb295728520822' => 
    array (
      0 => '/var/www/public/carpedmfashion.com/core/config/../../app/themes/cpanel/store/catalog/category/ajax/add_on_article_list_modal.tpl',
      1 => 1469707240,
      2 => 'extends',
    ),
  ),
  'nocache_hash' => '122705424657c94226b6d175-34156156',
  'variables' => 
  array (
    'articleList' => 0,
    'store_articles_table_header_articles' => 0,
    'pagination_info' => 0,
    'global_alert_please_wait' => 0,
    'limit' => 0,
    'keywords' => 0,
    'pagination' => 0,
    'store_articles_table_header_picture' => 0,
    'store_articles_table_header_sku' => 0,
    'store_articles_table_header_article_name' => 0,
    'global_catalog_table_header_add' => 0,
    'item' => 0,
    'global_form_button_add_selections' => 0,
    'global_form_button_close' => 0,
    'global_alert_info' => 0,
    'global_pages_empty_list' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_57c94226cf4691_86282589',
  'cache_lifetime' => 120,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57c94226cf4691_86282589')) {function content_57c94226cf4691_86282589($_smarty_tpl) {?><style>
    #modal-lyr {
        position: relative;
    }
    
    #ael {
        display: none;
        margin: 15px 0 0 0;
    }
    #ow {
        position: relative;
        min-height: 577px;
        z-index: 100;
    }
    #messenger {
        display: none;
        margin: 15px 0 0 0;
    }
    .iw {
        display: inline-block;
        cursor: pointer;
    }
    .f-img {
        background: #FFFFFF;
        display: none;
        position: absolute;
        top: 10%;
        left: 2.5%;
        right: 2.5%;
        width: 95%;
        height: 600px;
        z-index: 999;
        border: 2px solid #3fbae4;
        border-radius: 9px;
    }
    .cls {
        position: absolute;
        top: -19px;
        right: -16px;
        width: 45px;
        height: 45px;
        margin: 0;
        padding: 7px;
        line-height: 100%;
        border-radius: 100%;
    }
    .ovl {
        background: rgba(0,0,0,.8);
        display: none;
        position: absolute;
        top: 0;
        left: 0;
        bottom: 0;
        right: 0;
        z-index: 9999;
    }
    .ovl p.txt {
        margin: 300px auto 0 auto;
        font-size: 3em;
        letter-spacing: .1em;
        text-align: center;
        color: #fff;
    }
</style>
<div id="modal-lyr">
    <div class="f-img"><!-- --></div>
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="panel panel-default">
                    <div class="panel-heading ui-draggable-handle">
                        <h3 class="panel-title">
                            ZOZNAM ARTIKLOV&nbsp;&nbsp;
                            <span style="background:#000;position: relative;top: -1px;left: 5px;padding: 7px 11px;font-size: .8em;color:#fff;border-radius: 9px;">Zobrazených 1-10 z 5 záznamov</span>
                        </h3>
                        <div id="messenger" class="alert pull-right" role="alert"><!-- --></div>
                    </div>
                    <div id="ow" class="panel-body panel-body-table panel-body-form">
                        <div class="ovl row">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <p class="txt">Prosím počkajte...</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="padding:15px 10px;">
                                <div class="form-group pull-left" style="width:150px;margin-right:5px;">
                                    <select id="m-c-control" class="form-control select">
                                        <option value="0">Vyberte...</option>
                                        <option value="99">
                                            Oznažiť všetko
                                        </option>
                                        <option value="88">
                                            Odznažiť všetko
                                        </option>
                                    </select>
                                </div>
                                <div class="form-group pull-left" style="width:80px;margin-right:5px;">
                                    <select id="perPage" class="form-control select">
                                        <option value="10" selected>10</option>
                                        <option value="20" >20</option>
                                        <option value="50" >50</option>
                                        <option value="100" >100</option>
                                        <option value="200" >200</option>
                                        <option value="500" >500</option>
                                    </select>
                                </div>
                                <div class="form-group pull-left" style="width:400px;margin-right:5px;">
                                    <div class="input-group">
                                        <input type="text" id="m-search" value="INITIALS SWAN" placeholder="Hladať" class="form-control">
                                        <span class="input-group-btn">
                                            <button type="button" class="btn btn-default btn-s-send">
                                                <i class="fa fa-search"></i>
                                            </button>
                                        </span>
                                    </div>
                                </div>
                                <ul class="pagination pagination-sm pull-right"><li class="disabled"><a href="#" onclick="return false;" data-page="0" data-limit="10"><i class="fa fa-angle-left"></i></a></li><li class="active"><a href="#" onclick="return false;" data-page="1" data-limit="10">1</a></li><li class="disabled"><a href="#" onclick="return false;" data-page="2" data-limit="10"><i class="fa fa-angle-right"></i></a></li></ul>
                            </div><!-- end col -->
                        </div><!-- end row -->
                        <div class="table-responsive" style="border-top:1px solid #E5E5E5;">
                            <table id="addOnArticleList" class="table table-bordered table-striped table-actions">
                                <thead>
                                    <tr>
                                        <th width="40" class="text-center">
                                            #
                                        </th>
                                        <th width="30" class="text-center">
                                            OBRÁZOK                                        </th>
                                        <th width="100" class="text-center">
                                            SKU                                        </th>
                                        <th class="text-left">
                                            NÁZOV ARTIKLU                                        </th>
                                        <th width="110" class="text-center">
                                            PRIDAŤ                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                                                            <tr>
                                            <td class="text-center">
                                                <input type="checkbox" name="on" value="262">
                                            </td>
                                            <td class="text-center">
                                                                                                    <img src="/files/c2907eef73be3c4bd9ff505eeab427b5.jpg" height="35" alt="DSC06942_u2" class="iw"/>
                                                                                            </td>
                                            <td class="text-center">
                                                100262
                                            </td>
                                            <td class="text-left">
                                                SWAN
                                            </td>
                                            <td class="text-center">
                                                <button type="button" data-article-id="262" class="btn btn-success push-a">
                                                    &nbsp;&nbsp;<span class="fa fa-plus-square"></span>
                                                </button>
                                            </td>
                                        </tr>
                                                                            <tr>
                                            <td class="text-center">
                                                <input type="checkbox" name="on" value="275">
                                            </td>
                                            <td class="text-center">
                                                                                                    <img src="/files/c040f114359c50f5ba6fe516c670bc0b.jpg" height="35" alt="Swan short man" class="iw"/>
                                                                                            </td>
                                            <td class="text-center">
                                                100275
                                            </td>
                                            <td class="text-left">
                                                SWAN SHORT MAN
                                            </td>
                                            <td class="text-center">
                                                <button type="button" data-article-id="275" class="btn btn-success push-a">
                                                    &nbsp;&nbsp;<span class="fa fa-plus-square"></span>
                                                </button>
                                            </td>
                                        </tr>
                                                                            <tr>
                                            <td class="text-center">
                                                <input type="checkbox" name="on" value="281">
                                            </td>
                                            <td class="text-center">
                                                                                                    <img src="/files/3c381398598442956c966a756dff0469.jpg" height="35" alt="Swan light woman" class="iw"/>
                                                                                            </td>
                                            <td class="text-center">
                                                100281
                                            </td>
                                            <td class="text-left">
                                                SWAN LIGHT WOMAN
                                            </td>
                                            <td class="text-center">
                                                <button type="button" data-article-id="281" class="btn btn-success push-a">
                                                    &nbsp;&nbsp;<span class="fa fa-plus-square"></span>
                                                </button>
                                            </td>
                                        </tr>
                                                                            <tr>
                                            <td class="text-center">
                                                <input type="checkbox" name="on" value="276">
                                            </td>
                                            <td class="text-center">
                                                                                                    <span style="font-size:1.4em;color:red;">
                                                        <i class="glyphicon glyphicon-eye-open"></i>
                                                    </span>
                                                                                            </td>
                                            <td class="text-center">
                                                UhT30fodSY
                                            </td>
                                            <td class="text-left">
                                                INITIALS THANK
                                            </td>
                                            <td class="text-center">
                                                <button type="button" data-article-id="276" class="btn btn-success push-a">
                                                    &nbsp;&nbsp;<span class="fa fa-plus-square"></span>
                                                </button>
                                            </td>
                                        </tr>
                                                                            <tr>
                                            <td class="text-center">
                                                <input type="checkbox" name="on" value="286">
                                            </td>
                                            <td class="text-center">
                                                                                                    <span style="font-size:1.4em;color:red;">
                                                        <i class="glyphicon glyphicon-eye-open"></i>
                                                    </span>
                                                                                            </td>
                                            <td class="text-center">
                                                N9yJXDWbIB
                                            </td>
                                            <td class="text-left">
                                                INITIALS FAY IN
                                            </td>
                                            <td class="text-center">
                                                <button type="button" data-article-id="286" class="btn btn-success push-a">
                                                    &nbsp;&nbsp;<span class="fa fa-plus-square"></span>
                                                </button>
                                            </td>
                                        </tr>
                                                                    </tbody>
                             </table>
                        </div><!-- end table-responsive -->
                    </div><!-- end panel-body -->
                    <div class="panel-footer">
                        <button type="button" id="addSelections" class="btn btn-success">
                            PRIDAŤ VÝBER                        </button>
                        <button type="button" class="btn btn-default" data-dismiss="modal">
                            ZAVRIEŤ                        </button>
                    </div><!-- end panel-footer -->
                </div><!-- end panel -->
                    </div><!-- end col -->
    </div><!-- end row -->
</div><!-- end modal-lyr --><?php }} ?>
