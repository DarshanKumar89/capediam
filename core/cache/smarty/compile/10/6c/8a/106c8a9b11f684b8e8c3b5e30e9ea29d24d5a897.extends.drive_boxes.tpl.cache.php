<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-12-05 06:35:50
         compiled from "/var/www/public/carpedmfashion.com/core/config/../../app/themes/cpanel/drive/ajax/drive_boxes.tpl" */ ?>
<?php /*%%SmartyHeaderCode:17831317245844fcb673cc33-40042847%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
  ),
  'nocache_hash' => '17831317245844fcb673cc33-40042847',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'folderList' => 1,
    'total1' => 1,
    'pagination_info1' => 1,
    'hash' => 1,
    'page1' => 1,
    'page2' => 1,
    'limit2' => 1,
    'pagination1' => 1,
    'item' => 1,
    'fileList' => 1,
    'total2' => 1,
    'pagination_info2' => 1,
    'limit1' => 1,
    'pagination2' => 1,
  ),
  'has_nocache_code' => true,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5844fcb6819ff8_90239278',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5844fcb6819ff8_90239278')) {function content_5844fcb6819ff8_90239278($_smarty_tpl) {?><?php echo '/*%%SmartyNocache:17831317245844fcb673cc33-40042847%%*/<?php $_smarty = $_smarty_tpl->smarty; if (!is_callable(\'smarty_modifier_truncate\')) include \'/var/www/public/carpedmfashion.com/core/lib/smarty/plugins/modifier.truncate.php\';
?>/*/%%SmartyNocache:17831317245844fcb673cc33-40042847%%*/';?>

    <?php echo '/*%%SmartyNocache:17831317245844fcb673cc33-40042847%%*/<?php if (count($_smarty_tpl->tpl_vars[\'folderList\']->value)>0) {?>/*/%%SmartyNocache:17831317245844fcb673cc33-40042847%%*/';?>

        <div class="row" style="margin-top:15px;">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="panel panel-colorful">
                    <div class="panel-heading">
                        <span class="btn btn-info pull-left xt">
                            <?php echo '/*%%SmartyNocache:17831317245844fcb673cc33-40042847%%*/<?php echo $_smarty_tpl->tpl_vars[\'total1\']->value;?>
/*/%%SmartyNocache:17831317245844fcb673cc33-40042847%%*/';?>

                        </span>
                        <h3 class="panel-title text-uppercase" style="overflow: hidden;">
                            <span style="display:block;font-size:1.4em;float:left;">
                                <i class="fa fa-folder"></i>&nbsp;
                                <span style="font-weight:100;color:#000;">Priečinky</span>
                            </span>
                        </h3>
                        <span class="badge"><?php echo '/*%%SmartyNocache:17831317245844fcb673cc33-40042847%%*/<?php echo $_smarty_tpl->tpl_vars[\'pagination_info1\']->value;?>
/*/%%SmartyNocache:17831317245844fcb673cc33-40042847%%*/';?>
</span>
                    </div>
                </div>
            </div><!-- end col -->
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="form-group pull-left" style="width:80px;margin-right:25px;">
                    <select class="form-control select" onchange="location = 'cpanel/my-drive/folders/<?php echo '/*%%SmartyNocache:17831317245844fcb673cc33-40042847%%*/<?php echo $_smarty_tpl->tpl_vars[\'hash\']->value;?>
/*/%%SmartyNocache:17831317245844fcb673cc33-40042847%%*/';?>
/<?php echo '/*%%SmartyNocache:17831317245844fcb673cc33-40042847%%*/<?php echo $_smarty_tpl->tpl_vars[\'page1\']->value;?>
/*/%%SmartyNocache:17831317245844fcb673cc33-40042847%%*/';?>
/'+this.options[this.selectedIndex].value+'/<?php echo '/*%%SmartyNocache:17831317245844fcb673cc33-40042847%%*/<?php echo $_smarty_tpl->tpl_vars[\'page2\']->value;?>
/*/%%SmartyNocache:17831317245844fcb673cc33-40042847%%*/';?>
/<?php echo '/*%%SmartyNocache:17831317245844fcb673cc33-40042847%%*/<?php echo $_smarty_tpl->tpl_vars[\'limit2\']->value;?>
/*/%%SmartyNocache:17831317245844fcb673cc33-40042847%%*/';?>
';">
                        <option value="all" <?php echo '/*%%SmartyNocache:17831317245844fcb673cc33-40042847%%*/<?php if ($_smarty_tpl->tpl_vars[\'limit2\']->value==\'all\') {?>/*/%%SmartyNocache:17831317245844fcb673cc33-40042847%%*/';?>
selected<?php echo '/*%%SmartyNocache:17831317245844fcb673cc33-40042847%%*/<?php }?>/*/%%SmartyNocache:17831317245844fcb673cc33-40042847%%*/';?>
>všetko</option>
                        <option value="10" <?php echo '/*%%SmartyNocache:17831317245844fcb673cc33-40042847%%*/<?php if ($_smarty_tpl->tpl_vars[\'limit2\']->value==10) {?>/*/%%SmartyNocache:17831317245844fcb673cc33-40042847%%*/';?>
selected<?php echo '/*%%SmartyNocache:17831317245844fcb673cc33-40042847%%*/<?php }?>/*/%%SmartyNocache:17831317245844fcb673cc33-40042847%%*/';?>
>10</option>
                        <option value="30" <?php echo '/*%%SmartyNocache:17831317245844fcb673cc33-40042847%%*/<?php if ($_smarty_tpl->tpl_vars[\'limit2\']->value==30) {?>/*/%%SmartyNocache:17831317245844fcb673cc33-40042847%%*/';?>
selected<?php echo '/*%%SmartyNocache:17831317245844fcb673cc33-40042847%%*/<?php }?>/*/%%SmartyNocache:17831317245844fcb673cc33-40042847%%*/';?>
>30</option>
                        <option value="50" <?php echo '/*%%SmartyNocache:17831317245844fcb673cc33-40042847%%*/<?php if ($_smarty_tpl->tpl_vars[\'limit2\']->value==50) {?>/*/%%SmartyNocache:17831317245844fcb673cc33-40042847%%*/';?>
selected<?php echo '/*%%SmartyNocache:17831317245844fcb673cc33-40042847%%*/<?php }?>/*/%%SmartyNocache:17831317245844fcb673cc33-40042847%%*/';?>
>50</option>
                        <option value="100" <?php echo '/*%%SmartyNocache:17831317245844fcb673cc33-40042847%%*/<?php if ($_smarty_tpl->tpl_vars[\'limit2\']->value==100) {?>/*/%%SmartyNocache:17831317245844fcb673cc33-40042847%%*/';?>
selected<?php echo '/*%%SmartyNocache:17831317245844fcb673cc33-40042847%%*/<?php }?>/*/%%SmartyNocache:17831317245844fcb673cc33-40042847%%*/';?>
>100</option>
                        <option value="200" <?php echo '/*%%SmartyNocache:17831317245844fcb673cc33-40042847%%*/<?php if ($_smarty_tpl->tpl_vars[\'limit2\']->value==200) {?>/*/%%SmartyNocache:17831317245844fcb673cc33-40042847%%*/';?>
selected<?php echo '/*%%SmartyNocache:17831317245844fcb673cc33-40042847%%*/<?php }?>/*/%%SmartyNocache:17831317245844fcb673cc33-40042847%%*/';?>
>200</option>
                        <option value="500" <?php echo '/*%%SmartyNocache:17831317245844fcb673cc33-40042847%%*/<?php if ($_smarty_tpl->tpl_vars[\'limit2\']->value==500) {?>/*/%%SmartyNocache:17831317245844fcb673cc33-40042847%%*/';?>
selected<?php echo '/*%%SmartyNocache:17831317245844fcb673cc33-40042847%%*/<?php }?>/*/%%SmartyNocache:17831317245844fcb673cc33-40042847%%*/';?>
>500</option>
                        <option value="1000" <?php echo '/*%%SmartyNocache:17831317245844fcb673cc33-40042847%%*/<?php if ($_smarty_tpl->tpl_vars[\'limit2\']->value==1000) {?>/*/%%SmartyNocache:17831317245844fcb673cc33-40042847%%*/';?>
selected<?php echo '/*%%SmartyNocache:17831317245844fcb673cc33-40042847%%*/<?php }?>/*/%%SmartyNocache:17831317245844fcb673cc33-40042847%%*/';?>
>1000</option>
                    </select>
                </div>
                <?php echo '/*%%SmartyNocache:17831317245844fcb673cc33-40042847%%*/<?php echo $_smarty_tpl->tpl_vars[\'pagination1\']->value;?>
/*/%%SmartyNocache:17831317245844fcb673cc33-40042847%%*/';?>

            </div><!-- end col -->
        </div><!-- end row -->
        <div class="row" style="min-height: 300px;" role="presentation">
            <?php echo '/*%%SmartyNocache:17831317245844fcb673cc33-40042847%%*/<?php  $_smarty_tpl->tpl_vars[\'item\'] = new Smarty_Variable; $_smarty_tpl->tpl_vars[\'item\']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars[\'folderList\']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, \'array\');}
foreach ($_from as $_smarty_tpl->tpl_vars[\'item\']->key => $_smarty_tpl->tpl_vars[\'item\']->value) {
$_smarty_tpl->tpl_vars[\'item\']->_loop = true;
?>/*/%%SmartyNocache:17831317245844fcb673cc33-40042847%%*/';?>

                <div    class="col-lg-2 a-v-yc-m"
                        style="min-width:186px;margin-top:16px;margin-right:16px;"
                        role="option" 
                        tabindex="-1" 
                        title="<?php echo '/*%%SmartyNocache:17831317245844fcb673cc33-40042847%%*/<?php echo $_smarty_tpl->tpl_vars[\'item\']->value->folder_name;?>
/*/%%SmartyNocache:17831317245844fcb673cc33-40042847%%*/';?>
" 
                        draggable="true"
                        data-target="doc"
                        data-is-doc-name="true"
                        data-id="<?php echo '/*%%SmartyNocache:17831317245844fcb673cc33-40042847%%*/<?php echo $_smarty_tpl->tpl_vars[\'item\']->value->folder_hash;?>
/*/%%SmartyNocache:17831317245844fcb673cc33-40042847%%*/';?>
"
                        data-type="1"
                        data-toggle="tooltip" 
                        data-placement="bottom" 
                        data-original-title="<?php echo '/*%%SmartyNocache:17831317245844fcb673cc33-40042847%%*/<?php echo $_smarty_tpl->tpl_vars[\'item\']->value->folder_name;?>
/*/%%SmartyNocache:17831317245844fcb673cc33-40042847%%*/';?>
"
                        aria-selected="false"
                >
                    <div class="t-f-w">
                        <div class="t-f-i-f btn-info">
                            <i class="fa fa-file"></i>
                            <span><?php echo '/*%%SmartyNocache:17831317245844fcb673cc33-40042847%%*/<?php echo $_smarty_tpl->tpl_vars[\'item\']->value->totalFiles;?>
/*/%%SmartyNocache:17831317245844fcb673cc33-40042847%%*/';?>
</span>
                        </div>
                        <div class="t-f-i-f btn-success">
                            <i class="fa fa-folder"></i>
                            <span><?php echo '/*%%SmartyNocache:17831317245844fcb673cc33-40042847%%*/<?php echo $_smarty_tpl->tpl_vars[\'item\']->value->totalFolders;?>
/*/%%SmartyNocache:17831317245844fcb673cc33-40042847%%*/';?>
</span>
                        </div>
                    </div>
                    <div class="a-v-yc-Jj-od-Fd"></div>
                    <div class="k-v-yc k-v-n" aria-label="<?php echo '/*%%SmartyNocache:17831317245844fcb673cc33-40042847%%*/<?php echo $_smarty_tpl->tpl_vars[\'item\']->value->folder_name;?>
/*/%%SmartyNocache:17831317245844fcb673cc33-40042847%%*/';?>
 KCMS MyDrive Folder Not selected">
                        <div class="k-G-ia-yi"></div>
                        <div class="k-v-n-d-m">
                            <div class="k-v-n-d">
                                <div class="k-n-d-we" aria-label="KCMS  MyDrive Folder">
                                    <svg height="16px" width="16px" viewBox="0 -1 16 16" focusable="false">
                                        <g>
                                            <path fill="#8f8f8f" d="M6.4,0H1.6C0.716,0,0,0.596,0,1.562V12.25C0,13.216,0.716,14,1.6,14h12.8 c0.884,0,1.6-0.784,1.6-1.75V3.5 c0-0.966-0.721-1.499-1.604-1.499L8,2L6.4,0z"></path>
                                        </g>
                                    </svg>
                                </div>
                            </div>
                            <div class="k-v-n-d-pn">
                                <div class="k-n-d-we" aria-label="">
                                    <svg height="16px" width="16px" viewBox="0 -1 16 16" focusable="false">
                                        <g>
                                            <path fill="#ffffff" d="M6.4,0H1.6C0.716,0,0,0.596,0,1.562V12.25C0,13.216,0.716,14,1.6,14h12.8 c0.884,0,1.6-0.784,1.6-1.75V3.5 c0-0.966-0.721-1.499-1.604-1.499L8,2L6.4,0z"></path>
                                        </g>
                                    </svg>
                                </div>
                            </div>
                        </div>
                        <div class="k-v-n-L-m">
                            <div class="k-v-L" aria-label="<?php echo '/*%%SmartyNocache:17831317245844fcb673cc33-40042847%%*/<?php echo $_smarty_tpl->tpl_vars[\'item\']->value->folder_name;?>
/*/%%SmartyNocache:17831317245844fcb673cc33-40042847%%*/';?>
">
                                <span class="k-wa-P-x"><?php echo '/*%%SmartyNocache:17831317245844fcb673cc33-40042847%%*/<?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars[\'item\']->value->folder_name,50,"...",true);?>
/*/%%SmartyNocache:17831317245844fcb673cc33-40042847%%*/';?>
</span>
                            </div>
                        </div>
                        <div class="k-v-n-Na-Lb"></div>
                    </div>
                </div>
            <?php echo '/*%%SmartyNocache:17831317245844fcb673cc33-40042847%%*/<?php } ?>/*/%%SmartyNocache:17831317245844fcb673cc33-40042847%%*/';?>

        </div><!-- end row (folder section) -->
    <?php echo '/*%%SmartyNocache:17831317245844fcb673cc33-40042847%%*/<?php }?>/*/%%SmartyNocache:17831317245844fcb673cc33-40042847%%*/';?>

    <?php echo '/*%%SmartyNocache:17831317245844fcb673cc33-40042847%%*/<?php if (count($_smarty_tpl->tpl_vars[\'fileList\']->value)>0) {?>/*/%%SmartyNocache:17831317245844fcb673cc33-40042847%%*/';?>

        <div class="row" style="margin-top:25px;">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="panel panel-colorful">
                    <div class="panel-heading">
                        <span class="btn btn-info pull-left xt">
                            <?php echo '/*%%SmartyNocache:17831317245844fcb673cc33-40042847%%*/<?php echo $_smarty_tpl->tpl_vars[\'total2\']->value;?>
/*/%%SmartyNocache:17831317245844fcb673cc33-40042847%%*/';?>

                        </span>
                        <h3 class="panel-title text-uppercase" style="overflow: hidden;">
                            <span style="display:block;font-size:1.4em;float:left;">
                                <i class="fa fa-file"></i>&nbsp;
                                <span style="font-weight:100;color:#000;">Súbory</span>
                            </span>
                        </h3>
                        <span class="badge"><?php echo '/*%%SmartyNocache:17831317245844fcb673cc33-40042847%%*/<?php echo $_smarty_tpl->tpl_vars[\'pagination_info2\']->value;?>
/*/%%SmartyNocache:17831317245844fcb673cc33-40042847%%*/';?>
</span>
                    </div>
                </div>
            </div><!-- end col -->
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="form-group pull-left" style="width:80px;margin-right:25px;">
                    <select class="form-control select" onchange="location = 'cpanel/my-drive/folders/<?php echo '/*%%SmartyNocache:17831317245844fcb673cc33-40042847%%*/<?php echo $_smarty_tpl->tpl_vars[\'hash\']->value;?>
/*/%%SmartyNocache:17831317245844fcb673cc33-40042847%%*/';?>
/<?php echo '/*%%SmartyNocache:17831317245844fcb673cc33-40042847%%*/<?php echo $_smarty_tpl->tpl_vars[\'page1\']->value;?>
/*/%%SmartyNocache:17831317245844fcb673cc33-40042847%%*/';?>
/<?php echo '/*%%SmartyNocache:17831317245844fcb673cc33-40042847%%*/<?php echo $_smarty_tpl->tpl_vars[\'limit1\']->value;?>
/*/%%SmartyNocache:17831317245844fcb673cc33-40042847%%*/';?>
/<?php echo '/*%%SmartyNocache:17831317245844fcb673cc33-40042847%%*/<?php echo $_smarty_tpl->tpl_vars[\'page2\']->value;?>
/*/%%SmartyNocache:17831317245844fcb673cc33-40042847%%*/';?>
/'+this.options[this.selectedIndex].value;">
                        <option value="all" <?php echo '/*%%SmartyNocache:17831317245844fcb673cc33-40042847%%*/<?php if ($_smarty_tpl->tpl_vars[\'limit2\']->value==\'all\') {?>/*/%%SmartyNocache:17831317245844fcb673cc33-40042847%%*/';?>
selected<?php echo '/*%%SmartyNocache:17831317245844fcb673cc33-40042847%%*/<?php }?>/*/%%SmartyNocache:17831317245844fcb673cc33-40042847%%*/';?>
>všetko</option>
                        <option value="10" <?php echo '/*%%SmartyNocache:17831317245844fcb673cc33-40042847%%*/<?php if ($_smarty_tpl->tpl_vars[\'limit2\']->value==10) {?>/*/%%SmartyNocache:17831317245844fcb673cc33-40042847%%*/';?>
selected<?php echo '/*%%SmartyNocache:17831317245844fcb673cc33-40042847%%*/<?php }?>/*/%%SmartyNocache:17831317245844fcb673cc33-40042847%%*/';?>
>10</option>
                        <option value="30" <?php echo '/*%%SmartyNocache:17831317245844fcb673cc33-40042847%%*/<?php if ($_smarty_tpl->tpl_vars[\'limit2\']->value==30) {?>/*/%%SmartyNocache:17831317245844fcb673cc33-40042847%%*/';?>
selected<?php echo '/*%%SmartyNocache:17831317245844fcb673cc33-40042847%%*/<?php }?>/*/%%SmartyNocache:17831317245844fcb673cc33-40042847%%*/';?>
>30</option>
                        <option value="50" <?php echo '/*%%SmartyNocache:17831317245844fcb673cc33-40042847%%*/<?php if ($_smarty_tpl->tpl_vars[\'limit2\']->value==50) {?>/*/%%SmartyNocache:17831317245844fcb673cc33-40042847%%*/';?>
selected<?php echo '/*%%SmartyNocache:17831317245844fcb673cc33-40042847%%*/<?php }?>/*/%%SmartyNocache:17831317245844fcb673cc33-40042847%%*/';?>
>50</option>
                        <option value="100" <?php echo '/*%%SmartyNocache:17831317245844fcb673cc33-40042847%%*/<?php if ($_smarty_tpl->tpl_vars[\'limit2\']->value==100) {?>/*/%%SmartyNocache:17831317245844fcb673cc33-40042847%%*/';?>
selected<?php echo '/*%%SmartyNocache:17831317245844fcb673cc33-40042847%%*/<?php }?>/*/%%SmartyNocache:17831317245844fcb673cc33-40042847%%*/';?>
>100</option>
                        <option value="200" <?php echo '/*%%SmartyNocache:17831317245844fcb673cc33-40042847%%*/<?php if ($_smarty_tpl->tpl_vars[\'limit2\']->value==200) {?>/*/%%SmartyNocache:17831317245844fcb673cc33-40042847%%*/';?>
selected<?php echo '/*%%SmartyNocache:17831317245844fcb673cc33-40042847%%*/<?php }?>/*/%%SmartyNocache:17831317245844fcb673cc33-40042847%%*/';?>
>200</option>
                        <option value="500" <?php echo '/*%%SmartyNocache:17831317245844fcb673cc33-40042847%%*/<?php if ($_smarty_tpl->tpl_vars[\'limit2\']->value==500) {?>/*/%%SmartyNocache:17831317245844fcb673cc33-40042847%%*/';?>
selected<?php echo '/*%%SmartyNocache:17831317245844fcb673cc33-40042847%%*/<?php }?>/*/%%SmartyNocache:17831317245844fcb673cc33-40042847%%*/';?>
>500</option>
                        <option value="1000" <?php echo '/*%%SmartyNocache:17831317245844fcb673cc33-40042847%%*/<?php if ($_smarty_tpl->tpl_vars[\'limit2\']->value==1000) {?>/*/%%SmartyNocache:17831317245844fcb673cc33-40042847%%*/';?>
selected<?php echo '/*%%SmartyNocache:17831317245844fcb673cc33-40042847%%*/<?php }?>/*/%%SmartyNocache:17831317245844fcb673cc33-40042847%%*/';?>
>1000</option>
                    </select>
                </div>
                <?php echo '/*%%SmartyNocache:17831317245844fcb673cc33-40042847%%*/<?php echo $_smarty_tpl->tpl_vars[\'pagination2\']->value;?>
/*/%%SmartyNocache:17831317245844fcb673cc33-40042847%%*/';?>

            </div><!-- end col -->
        </div><!-- end row -->
        <div id="l-i-f-f-b-i-m-p" class="row" style="min-height: 300px;" role="presentation">
            <?php echo '/*%%SmartyNocache:17831317245844fcb673cc33-40042847%%*/<?php  $_smarty_tpl->tpl_vars[\'item\'] = new Smarty_Variable; $_smarty_tpl->tpl_vars[\'item\']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars[\'fileList\']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, \'array\');}
foreach ($_from as $_smarty_tpl->tpl_vars[\'item\']->key => $_smarty_tpl->tpl_vars[\'item\']->value) {
$_smarty_tpl->tpl_vars[\'item\']->_loop = true;
?>/*/%%SmartyNocache:17831317245844fcb673cc33-40042847%%*/';?>

                <div    class="x1 a-v-yc-m d-f-g-b-i-m"
                        style="margin-top:16px;margin-right:16px"
                        role="option" 
                        tabindex="-1"
                        title="<?php echo '/*%%SmartyNocache:17831317245844fcb673cc33-40042847%%*/<?php echo $_smarty_tpl->tpl_vars[\'item\']->value->file_name;?>
/*/%%SmartyNocache:17831317245844fcb673cc33-40042847%%*/';?>
"
                        data-target="doc" 
                        data-is-doc-name="true" 
                        draggable="true" 
                        data-id="<?php echo '/*%%SmartyNocache:17831317245844fcb673cc33-40042847%%*/<?php echo $_smarty_tpl->tpl_vars[\'item\']->value->file_hash;?>
/*/%%SmartyNocache:17831317245844fcb673cc33-40042847%%*/';?>
"
                        data-type="2"
                        data-toggle="tooltip" 
                        data-placement="bottom" 
                        data-original-title="<?php echo '/*%%SmartyNocache:17831317245844fcb673cc33-40042847%%*/<?php echo $_smarty_tpl->tpl_vars[\'item\']->value->file_name;?>
/*/%%SmartyNocache:17831317245844fcb673cc33-40042847%%*/';?>
"
                        aria-selected="false"
                >
                    <div class="a-v-yc-Jj-od-Fd"></div>
                    <div class="k-v-yc k-v-wa k-Yh-Zd">
                        <div class="k-G-ia-yi"></div>
                        <div class="k-v-wa-xa-m">
                            <div class="k-v-wa-xa rb-ub-zn-jd">
                                <div class="k-v-wa-xa-Vo-Fd"></div>
                                <?php echo '/*%%SmartyNocache:17831317245844fcb673cc33-40042847%%*/<?php if ($_smarty_tpl->tpl_vars[\'item\']->value->file_type_id==1) {?>/*/%%SmartyNocache:17831317245844fcb673cc33-40042847%%*/';?>

                                    <img class="k-v-wa-xa-za f-i-w" src="<?php echo '/*%%SmartyNocache:17831317245844fcb673cc33-40042847%%*/<?php echo $_smarty_tpl->tpl_vars[\'item\']->value->file_url;?>
/*/%%SmartyNocache:17831317245844fcb673cc33-40042847%%*/';?>
" height="130" alt="<?php echo '/*%%SmartyNocache:17831317245844fcb673cc33-40042847%%*/<?php echo $_smarty_tpl->tpl_vars[\'item\']->value->file_name;?>
/*/%%SmartyNocache:17831317245844fcb673cc33-40042847%%*/';?>
">
                                <?php echo '/*%%SmartyNocache:17831317245844fcb673cc33-40042847%%*/<?php }?>/*/%%SmartyNocache:17831317245844fcb673cc33-40042847%%*/';?>

                                <?php echo '/*%%SmartyNocache:17831317245844fcb673cc33-40042847%%*/<?php if ($_smarty_tpl->tpl_vars[\'item\']->value->file_type_id==2) {?>/*/%%SmartyNocache:17831317245844fcb673cc33-40042847%%*/';?>

                                    <img class="k-v-wa-xa-za" src="extensions/cpanel/img/drive/icons/pdficon.png" alt="<?php echo '/*%%SmartyNocache:17831317245844fcb673cc33-40042847%%*/<?php echo $_smarty_tpl->tpl_vars[\'item\']->value->file_name;?>
/*/%%SmartyNocache:17831317245844fcb673cc33-40042847%%*/';?>
">
                                <?php echo '/*%%SmartyNocache:17831317245844fcb673cc33-40042847%%*/<?php }?>/*/%%SmartyNocache:17831317245844fcb673cc33-40042847%%*/';?>

                            </div>
                        </div>
                        <div class="k-v-wa-P-m">
                            <div class="k-v-wa-P" aria-label="<?php echo '/*%%SmartyNocache:17831317245844fcb673cc33-40042847%%*/<?php echo $_smarty_tpl->tpl_vars[\'item\']->value->file_name;?>
/*/%%SmartyNocache:17831317245844fcb673cc33-40042847%%*/';
echo '/*%%SmartyNocache:17831317245844fcb673cc33-40042847%%*/<?php echo $_smarty_tpl->tpl_vars[\'item\']->value->file_ext;?>
/*/%%SmartyNocache:17831317245844fcb673cc33-40042847%%*/';?>
 Image Not selected">
                                <div class="k-v-wa-d">
                                    <div class="a-d">
                                        <?php echo '/*%%SmartyNocache:17831317245844fcb673cc33-40042847%%*/<?php if ($_smarty_tpl->tpl_vars[\'item\']->value->file_type_id==1) {?>/*/%%SmartyNocache:17831317245844fcb673cc33-40042847%%*/';?>

                                            <img src="extensions/cpanel/img/drive/icons/icon_1_image_x16.png" alt="Image">
                                        <?php echo '/*%%SmartyNocache:17831317245844fcb673cc33-40042847%%*/<?php }?>/*/%%SmartyNocache:17831317245844fcb673cc33-40042847%%*/';?>

                                        <?php echo '/*%%SmartyNocache:17831317245844fcb673cc33-40042847%%*/<?php if ($_smarty_tpl->tpl_vars[\'item\']->value->file_type_id==2) {?>/*/%%SmartyNocache:17831317245844fcb673cc33-40042847%%*/';?>

                                            <img src="extensions/cpanel/img/drive/icons/icon_2_pdf_x16" alt="Pdf">
                                        <?php echo '/*%%SmartyNocache:17831317245844fcb673cc33-40042847%%*/<?php }?>/*/%%SmartyNocache:17831317245844fcb673cc33-40042847%%*/';?>

                                    </div>
                                </div>
                                <div class="k-v-L" aria-label="<?php echo '/*%%SmartyNocache:17831317245844fcb673cc33-40042847%%*/<?php echo $_smarty_tpl->tpl_vars[\'item\']->value->file_name;?>
/*/%%SmartyNocache:17831317245844fcb673cc33-40042847%%*/';
echo '/*%%SmartyNocache:17831317245844fcb673cc33-40042847%%*/<?php echo $_smarty_tpl->tpl_vars[\'item\']->value->file_ext;?>
/*/%%SmartyNocache:17831317245844fcb673cc33-40042847%%*/';?>
">
                                    <span class="k-wa-P-x">
                                        <?php echo '/*%%SmartyNocache:17831317245844fcb673cc33-40042847%%*/<?php if (strlen($_smarty_tpl->tpl_vars[\'item\']->value->file_name)>25) {?>/*/%%SmartyNocache:17831317245844fcb673cc33-40042847%%*/';?>

                                            <?php echo '/*%%SmartyNocache:17831317245844fcb673cc33-40042847%%*/<?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars[\'item\']->value->file_name,25,"...",true);?>
/*/%%SmartyNocache:17831317245844fcb673cc33-40042847%%*/';?>

                                        <?php echo '/*%%SmartyNocache:17831317245844fcb673cc33-40042847%%*/<?php } else { ?>/*/%%SmartyNocache:17831317245844fcb673cc33-40042847%%*/';?>

                                            <?php echo '/*%%SmartyNocache:17831317245844fcb673cc33-40042847%%*/<?php echo $_smarty_tpl->tpl_vars[\'item\']->value->file_name;?>
/*/%%SmartyNocache:17831317245844fcb673cc33-40042847%%*/';
echo '/*%%SmartyNocache:17831317245844fcb673cc33-40042847%%*/<?php echo $_smarty_tpl->tpl_vars[\'item\']->value->file_ext;?>
/*/%%SmartyNocache:17831317245844fcb673cc33-40042847%%*/';?>

                                        <?php echo '/*%%SmartyNocache:17831317245844fcb673cc33-40042847%%*/<?php }?>/*/%%SmartyNocache:17831317245844fcb673cc33-40042847%%*/';?>

                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php echo '/*%%SmartyNocache:17831317245844fcb673cc33-40042847%%*/<?php } ?>/*/%%SmartyNocache:17831317245844fcb673cc33-40042847%%*/';?>

        </div><!-- end row (files section) -->
    <?php echo '/*%%SmartyNocache:17831317245844fcb673cc33-40042847%%*/<?php }?>/*/%%SmartyNocache:17831317245844fcb673cc33-40042847%%*/';?>


<?php echo '<script'; ?>
 type="text/javascript">
$(function() {
    $("a.img-item").fancybox({
        'transitionIn'	: 'elastic',
        'transitionOut'	: 'elastic',
        'speedIn'	: 600, 
        'speedOut'	: 200, 
        'overlayShow'	: false
    });
});
<?php echo '</script'; ?>
><?php }} ?>
