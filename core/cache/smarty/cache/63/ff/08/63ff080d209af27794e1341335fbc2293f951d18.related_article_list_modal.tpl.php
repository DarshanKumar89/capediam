<?php /*%%SmartyHeaderCode:1256986378574304fbbd0738-71600519%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '63ff080d209af27794e1341335fbc2293f951d18' => 
    array (
      0 => '/Users/henrich/Work/SlatyFork/carpedm.mozayc.net/core/config/../../app/themes/cpanel/store/api/related_article_list_modal.tpl',
      1 => 1460547455,
      2 => 'extends',
    ),
  ),
  'nocache_hash' => '1256986378574304fbbd0738-71600519',
  'variables' => 
  array (
    'articleList' => 0,
    'store_articles_table_header_articles' => 0,
    'pagination_info' => 0,
    'limit' => 0,
    'keywords' => 0,
    'pagination' => 0,
    'store_articles_table_header_picture' => 0,
    'store_articles_table_header_sku' => 0,
    'store_articles_table_header_article_name' => 0,
    'global_catalog_table_header_add' => 0,
    'item' => 0,
    'i' => 0,
    'global_form_button_close' => 0,
    'global_alert_info' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_574304fbc2c242_74160348',
  'cache_lifetime' => 120,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_574304fbc2c242_74160348')) {function content_574304fbc2c242_74160348($_smarty_tpl) {?><style>
    #modal-lyr {
        position: relative;
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
    #ael {
        display: none;
        margin: 15px 0 0 0;
    }
</style>
<div id="modal-lyr">
    <div class="f-img"><!-- --></div>
    <div class="row">
        <div class="col-lg-12">
                                <div class="panel panel-default">
                        <div class="panel-heading ui-draggable-handle">
                            <h3 class="panel-title">
                                ZOZNAM ARTIKLOV&nbsp;&nbsp;
                                <span style="background:#000;position: relative;top: -1px;left: 5px;padding: 7px 11px;font-size: .8em;color:#fff;border-radius: 9px;">Zobrazených 1-10 z 15 záznamov</span>
                            </h3>
                            <div id="ael" class="alert pull-right" role="alert"><!-- --></div>
                        </div>
                        <div class="panel-body panel-body-table panel-body-form">
                            <div class="row">
                                <div class="col-lg-12" style="padding:15px 10px;">
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
                                            <input type="text" id="search" value="rustle ego" placeholder="Hladať" class="form-control">
                                            <span class="input-group-btn">
                                                <button type="button" class="btn btn-default btn-s-send">
                                                    <i class="fa fa-search"></i>
                                                </button>
                                            </span>
                                        </div>
                                    </div>
                                    <ul class="pagination pagination-sm pull-right"><li class="disabled"><a href="#" onclick="return false;" data-page="0" data-limit="10"><i class="fa fa-angle-left"></i></a></li><li class="active"><a href="#" onclick="return false;" data-page="1" data-limit="10">1</a></li><li class=""><a href="#" onclick="return false;" data-page="2" data-limit="10">2</a></li><li class=""><a href="#" onclick="return false;" data-page="2" data-limit="10"><i class="fa fa-angle-right"></i></a></li></ul>
                                </div><!-- end col -->
                            </div><!-- end row -->
                            <div class="table-responsive" style="border-top:1px solid #E5E5E5;">
                                <table id="AddOnArticleList" class="table table-bordered table-striped table-actions">
                                    <thead>
                                        <tr>
                                            <th width="25" class="text-center">#</th>
                                            <th width="30" class="text-center">
                                                OBRÁZOK                                            </th>
                                            <th width="100" class="text-center">
                                                SKU                                            </th>
                                            <th class="text-left">
                                                NÁZOV ARTIKLU                                            </th>
                                            <th width="110" class="text-center">
                                                PRIDAŤ                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>                                            
                                                                                    <tr data-an="49">
                                                <td class="text-center" style="font-weight:700;color:#660000;">
                                                    <input type="hidden" name="articles[0]['article-id']" value="49"/>
                                                    1
                                                </td>
                                                <td class="text-center">
                                                                                                            <img src="files/adcd8ba920e9b73b933c83b594ce60de.png" height="35" alt="ELECTION 2_5" class="iw"/>
                                                                                                    </td>
                                                <td class="text-center">
                                                    100049
                                                </td>
                                                <td class="text-left">
                                                    ELECTION 2
                                                </td>
                                                <td class="text-center">
                                                    <button type="button" data-article-id="49" class="btn btn-success push-a">
                                                        &nbsp;&nbsp;<span class="fa fa-plus-square"></span>
                                                    </button>
                                                </td>
                                            </tr>
                                                                                    <tr data-an="50">
                                                <td class="text-center" style="font-weight:700;color:#660000;">
                                                    <input type="hidden" name="articles[1]['article-id']" value="50"/>
                                                    2
                                                </td>
                                                <td class="text-center">
                                                                                                            <img src="files/af89ad7c7422e12b6286fcf550afbb07.png" height="35" alt="WARY_0" class="iw"/>
                                                                                                    </td>
                                                <td class="text-center">
                                                    100050
                                                </td>
                                                <td class="text-left">
                                                    WARY
                                                </td>
                                                <td class="text-center">
                                                    <button type="button" data-article-id="50" class="btn btn-success push-a">
                                                        &nbsp;&nbsp;<span class="fa fa-plus-square"></span>
                                                    </button>
                                                </td>
                                            </tr>
                                                                                    <tr data-an="51">
                                                <td class="text-center" style="font-weight:700;color:#660000;">
                                                    <input type="hidden" name="articles[2]['article-id']" value="51"/>
                                                    3
                                                </td>
                                                <td class="text-center">
                                                                                                            <img src="files/199a95c379837a9cc1284faf61e580ea.png" height="35" alt="NIGHT WARRIOR_1" class="iw"/>
                                                                                                    </td>
                                                <td class="text-center">
                                                    100051
                                                </td>
                                                <td class="text-left">
                                                    NIGHT WARRIOR
                                                </td>
                                                <td class="text-center">
                                                    <button type="button" data-article-id="51" class="btn btn-success push-a">
                                                        &nbsp;&nbsp;<span class="fa fa-plus-square"></span>
                                                    </button>
                                                </td>
                                            </tr>
                                                                                    <tr data-an="52">
                                                <td class="text-center" style="font-weight:700;color:#660000;">
                                                    <input type="hidden" name="articles[3]['article-id']" value="52"/>
                                                    4
                                                </td>
                                                <td class="text-center">
                                                                                                            <img src="files/56ed0b3d221d86fcff4c453ef0e91be6.png" height="35" alt="RED WARRIOR_2" class="iw"/>
                                                                                                    </td>
                                                <td class="text-center">
                                                    100052
                                                </td>
                                                <td class="text-left">
                                                    RED WARRIOR
                                                </td>
                                                <td class="text-center">
                                                    <button type="button" data-article-id="52" class="btn btn-success push-a">
                                                        &nbsp;&nbsp;<span class="fa fa-plus-square"></span>
                                                    </button>
                                                </td>
                                            </tr>
                                                                                    <tr data-an="53">
                                                <td class="text-center" style="font-weight:700;color:#660000;">
                                                    <input type="hidden" name="articles[4]['article-id']" value="53"/>
                                                    5
                                                </td>
                                                <td class="text-center">
                                                                                                            <img src="files/72d6b565d7cd8c2842dab1e30ddfb325.png" height="35" alt="KNOW_1" class="iw"/>
                                                                                                    </td>
                                                <td class="text-center">
                                                    100053
                                                </td>
                                                <td class="text-left">
                                                    KNOW
                                                </td>
                                                <td class="text-center">
                                                    <button type="button" data-article-id="53" class="btn btn-success push-a">
                                                        &nbsp;&nbsp;<span class="fa fa-plus-square"></span>
                                                    </button>
                                                </td>
                                            </tr>
                                                                                    <tr data-an="61">
                                                <td class="text-center" style="font-weight:700;color:#660000;">
                                                    <input type="hidden" name="articles[5]['article-id']" value="61"/>
                                                    6
                                                </td>
                                                <td class="text-center">
                                                                                                            <img src="files/7e845eb9e36a34ea3b10b01f8650f847.png" height="35" alt="PATRON_7" class="iw"/>
                                                                                                    </td>
                                                <td class="text-center">
                                                    100061
                                                </td>
                                                <td class="text-left">
                                                    PATRON
                                                </td>
                                                <td class="text-center">
                                                    <button type="button" data-article-id="61" class="btn btn-success push-a">
                                                        &nbsp;&nbsp;<span class="fa fa-plus-square"></span>
                                                    </button>
                                                </td>
                                            </tr>
                                                                                    <tr data-an="62">
                                                <td class="text-center" style="font-weight:700;color:#660000;">
                                                    <input type="hidden" name="articles[6]['article-id']" value="62"/>
                                                    7
                                                </td>
                                                <td class="text-center">
                                                                                                            <img src="files/b3d82539015fbe5abc2c42ba46f2fcf6.png" height="35" alt="WARRANT_0" class="iw"/>
                                                                                                    </td>
                                                <td class="text-center">
                                                    100062
                                                </td>
                                                <td class="text-left">
                                                    WARRANT
                                                </td>
                                                <td class="text-center">
                                                    <button type="button" data-article-id="62" class="btn btn-success push-a">
                                                        &nbsp;&nbsp;<span class="fa fa-plus-square"></span>
                                                    </button>
                                                </td>
                                            </tr>
                                                                                    <tr data-an="63">
                                                <td class="text-center" style="font-weight:700;color:#660000;">
                                                    <input type="hidden" name="articles[7]['article-id']" value="63"/>
                                                    8
                                                </td>
                                                <td class="text-center">
                                                                                                            <img src="/files/e467e8b7d07d435f284fd744cba94c5c.jpg" height="35" alt="DSC07148" class="iw"/>
                                                                                                    </td>
                                                <td class="text-center">
                                                    100063
                                                </td>
                                                <td class="text-left">
                                                    RUSTLE EGO
                                                </td>
                                                <td class="text-center">
                                                    <button type="button" data-article-id="63" class="btn btn-success push-a">
                                                        &nbsp;&nbsp;<span class="fa fa-plus-square"></span>
                                                    </button>
                                                </td>
                                            </tr>
                                                                                    <tr data-an="64">
                                                <td class="text-center" style="font-weight:700;color:#660000;">
                                                    <input type="hidden" name="articles[8]['article-id']" value="64"/>
                                                    9
                                                </td>
                                                <td class="text-center">
                                                                                                            <img src="files/0d1745d7fd96ad8d318083d597347afa.png" height="35" alt="ELECTION_5" class="iw"/>
                                                                                                    </td>
                                                <td class="text-center">
                                                    100064
                                                </td>
                                                <td class="text-left">
                                                    ELECTION
                                                </td>
                                                <td class="text-center">
                                                    <button type="button" data-article-id="64" class="btn btn-success push-a">
                                                        &nbsp;&nbsp;<span class="fa fa-plus-square"></span>
                                                    </button>
                                                </td>
                                            </tr>
                                                                                    <tr data-an="65">
                                                <td class="text-center" style="font-weight:700;color:#660000;">
                                                    <input type="hidden" name="articles[9]['article-id']" value="65"/>
                                                    10
                                                </td>
                                                <td class="text-center">
                                                                                                            <img src="files/6ba3e5e5e45ec7a67cc390a12a18859f.png" height="35" alt="TOSS EGO_0" class="iw"/>
                                                                                                    </td>
                                                <td class="text-center">
                                                    100065
                                                </td>
                                                <td class="text-left">
                                                    TOSS EGO
                                                </td>
                                                <td class="text-center">
                                                    <button type="button" data-article-id="65" class="btn btn-success push-a">
                                                        &nbsp;&nbsp;<span class="fa fa-plus-square"></span>
                                                    </button>
                                                </td>
                                            </tr>
                                                                            </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="panel-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">
                                ZAVRIEŤ                            </button>
                        </div><!-- end panel-footer -->
                    </div><!-- end panel -->
                    </div><!-- end col -->
    </div><!-- end row -->
</div><?php }} ?>
