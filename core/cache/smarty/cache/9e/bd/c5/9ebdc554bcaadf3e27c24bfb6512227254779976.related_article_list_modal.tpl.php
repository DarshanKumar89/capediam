<?php /*%%SmartyHeaderCode:20453623905838295bbf76e8-34528633%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9ebdc554bcaadf3e27c24bfb6512227254779976' => 
    array (
      0 => '/var/www/public/carpedmfashion.com/core/config/../../app/themes/cpanel/store/api/related_article_list_modal.tpl',
      1 => 1469707236,
      2 => 'extends',
    ),
  ),
  'nocache_hash' => '20453623905838295bbf76e8-34528633',
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
  'unifunc' => 'content_5838295bd3b1f5_50426080',
  'cache_lifetime' => 120,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5838295bd3b1f5_50426080')) {function content_5838295bd3b1f5_50426080($_smarty_tpl) {?><style>
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
                                <span style="background:#000;position: relative;top: -1px;left: 5px;padding: 7px 11px;font-size: .8em;color:#fff;border-radius: 9px;">Zobrazených 1-10 z 4 záznamov</span>
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
                                            <input type="text" id="search" value="vagabond" placeholder="Hladať" class="form-control">
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
                                                                                    <tr data-an="9">
                                                <td class="text-center" style="font-weight:700;color:#660000;">
                                                    <input type="hidden" name="articles[0]['article-id']" value="9"/>
                                                    1
                                                </td>
                                                <td class="text-center">
                                                                                                            <img src="files/b36252689109297a41b338394c31c270.png" height="35" alt="VAGABOND JACKET WOMAN_0" class="iw"/>
                                                                                                    </td>
                                                <td class="text-center">
                                                    100009
                                                </td>
                                                <td class="text-left">
                                                    VAGABOND HOODIE WOMAN
                                                </td>
                                                <td class="text-center">
                                                    <button type="button" data-article-id="9" class="btn btn-success push-a">
                                                        &nbsp;&nbsp;<span class="fa fa-plus-square"></span>
                                                    </button>
                                                </td>
                                            </tr>
                                                                                    <tr data-an="37">
                                                <td class="text-center" style="font-weight:700;color:#660000;">
                                                    <input type="hidden" name="articles[1]['article-id']" value="37"/>
                                                    2
                                                </td>
                                                <td class="text-center">
                                                                                                            <img src="/files/93b410719b5efa926a14deb7c969c0cb.jpg" height="35" alt="DSC05600_u2" class="iw"/>
                                                                                                    </td>
                                                <td class="text-center">
                                                    100037
                                                </td>
                                                <td class="text-left">
                                                    VAGABOND WOMAN
                                                </td>
                                                <td class="text-center">
                                                    <button type="button" data-article-id="37" class="btn btn-success push-a">
                                                        &nbsp;&nbsp;<span class="fa fa-plus-square"></span>
                                                    </button>
                                                </td>
                                            </tr>
                                                                                    <tr data-an="48">
                                                <td class="text-center" style="font-weight:700;color:#660000;">
                                                    <input type="hidden" name="articles[2]['article-id']" value="48"/>
                                                    3
                                                </td>
                                                <td class="text-center">
                                                                                                            <img src="/files/4112b8a85eba8c46369882c4aa7473b4.jpg" height="35" alt="DSC07157_u2" class="iw"/>
                                                                                                    </td>
                                                <td class="text-center">
                                                    100048
                                                </td>
                                                <td class="text-left">
                                                    VAGABOND MAN
                                                </td>
                                                <td class="text-center">
                                                    <button type="button" data-article-id="48" class="btn btn-success push-a">
                                                        &nbsp;&nbsp;<span class="fa fa-plus-square"></span>
                                                    </button>
                                                </td>
                                            </tr>
                                                                                    <tr data-an="352">
                                                <td class="text-center" style="font-weight:700;color:#660000;">
                                                    <input type="hidden" name="articles[3]['article-id']" value="352"/>
                                                    4
                                                </td>
                                                <td class="text-center">
                                                                                                            <img src="/files/2ec6aa4fa5012b9014860bf9c0b37b9c.jpg" height="35" alt="Vagabond hoodie man5" class="iw"/>
                                                                                                    </td>
                                                <td class="text-center">
                                                    100346
                                                </td>
                                                <td class="text-left">
                                                    VAGABOND HOODIE MAN
                                                </td>
                                                <td class="text-center">
                                                    <button type="button" data-article-id="352" class="btn btn-success push-a">
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
