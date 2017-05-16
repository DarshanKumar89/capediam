<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-09-05 15:08:32
         compiled from "/var/www/public/carpedmfashion.com/core/config/../../app/themes/cpanel/drive/ajax/drive_trash.tpl" */ ?>
<?php /*%%SmartyHeaderCode:11608477357cd6e505aada0-24427489%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
  ),
  'nocache_hash' => '11608477357cd6e505aada0-24427489',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'trash' => 1,
    'item' => 1,
  ),
  'has_nocache_code' => true,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_57cd6e506bb300_07676440',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57cd6e506bb300_07676440')) {function content_57cd6e506bb300_07676440($_smarty_tpl) {?><?php echo '/*%%SmartyNocache:11608477357cd6e505aada0-24427489%%*/<?php $_smarty = $_smarty_tpl->smarty; if (!is_callable(\'smarty_modifier_truncate\')) include \'/var/www/public/carpedmfashion.com/core/lib/smarty/plugins/modifier.truncate.php\';
?>/*/%%SmartyNocache:11608477357cd6e505aada0-24427489%%*/';?>

    <?php echo '/*%%SmartyNocache:11608477357cd6e505aada0-24427489%%*/<?php if (!empty($_smarty_tpl->tpl_vars[\'trash\']->value)) {?>/*/%%SmartyNocache:11608477357cd6e505aada0-24427489%%*/';?>

        <?php echo '/*%%SmartyNocache:11608477357cd6e505aada0-24427489%%*/<?php if (count($_smarty_tpl->tpl_vars[\'trash\']->value[\'folders\'])>0) {?>/*/%%SmartyNocache:11608477357cd6e505aada0-24427489%%*/';?>

            <div class="row" style="margin-top:15px;">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="panel panel-colorful">
                        <div class="panel-heading">
                            <h3 class="panel-title text-uppercase" style="overflow: hidden;">
                                <span style="display:block;font-size:1.4em;float:left;">
                                    <i class="fa fa-folder"></i>&nbsp;
                                    <span style="font-weight:100;color:#000;">Priečinky</span>
                                </span>
                            </h3>
                        </div>
                    </div>
                </div><!-- end col -->
            </div><!-- end row -->
            <div class="row" role="presentation">
                <?php echo '/*%%SmartyNocache:11608477357cd6e505aada0-24427489%%*/<?php  $_smarty_tpl->tpl_vars[\'item\'] = new Smarty_Variable; $_smarty_tpl->tpl_vars[\'item\']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars[\'trash\']->value[\'folders\']; if (!is_array($_from) && !is_object($_from)) { settype($_from, \'array\');}
foreach ($_from as $_smarty_tpl->tpl_vars[\'item\']->key => $_smarty_tpl->tpl_vars[\'item\']->value) {
$_smarty_tpl->tpl_vars[\'item\']->_loop = true;
?>/*/%%SmartyNocache:11608477357cd6e505aada0-24427489%%*/';?>

                    <div    class="col-lg-2 col-md-2 a-v-yc-m"
                            style="margin-top:16px;margin-right:16px"
                            role="option" 
                            tabindex="-1" 
                            title="<?php echo '/*%%SmartyNocache:11608477357cd6e505aada0-24427489%%*/<?php echo $_smarty_tpl->tpl_vars[\'item\']->value->folder_name;?>
/*/%%SmartyNocache:11608477357cd6e505aada0-24427489%%*/';?>
" 
                            draggable="true"
                            data-target="doc"
                            data-is-doc-name="true"
                            data-id="<?php echo '/*%%SmartyNocache:11608477357cd6e505aada0-24427489%%*/<?php echo $_smarty_tpl->tpl_vars[\'item\']->value->folder_hash;?>
/*/%%SmartyNocache:11608477357cd6e505aada0-24427489%%*/';?>
"
                            data-type="1"
                            data-toggle="tooltip" 
                            data-placement="bottom" 
                            data-original-title="<?php echo '/*%%SmartyNocache:11608477357cd6e505aada0-24427489%%*/<?php echo $_smarty_tpl->tpl_vars[\'item\']->value->folder_name;?>
/*/%%SmartyNocache:11608477357cd6e505aada0-24427489%%*/';?>
"
                            aria-selected="false"
                    >
                        <div class="a-v-yc-Jj-od-Fd"></div>
                        <div class="k-v-yc k-v-n" aria-label="<?php echo '/*%%SmartyNocache:11608477357cd6e505aada0-24427489%%*/<?php echo $_smarty_tpl->tpl_vars[\'item\']->value->folder_name;?>
/*/%%SmartyNocache:11608477357cd6e505aada0-24427489%%*/';?>
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
                                <div class="k-v-L" aria-label="<?php echo '/*%%SmartyNocache:11608477357cd6e505aada0-24427489%%*/<?php echo $_smarty_tpl->tpl_vars[\'item\']->value->folder_name;?>
/*/%%SmartyNocache:11608477357cd6e505aada0-24427489%%*/';?>
">
                                    <span class="k-wa-P-x"><?php echo '/*%%SmartyNocache:11608477357cd6e505aada0-24427489%%*/<?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars[\'item\']->value->folder_name,20,"...",true);?>
/*/%%SmartyNocache:11608477357cd6e505aada0-24427489%%*/';?>
</span>
                                </div>
                            </div>
                            <div class="k-v-n-Na-Lb"></div>
                        </div>
                    </div>
                <?php echo '/*%%SmartyNocache:11608477357cd6e505aada0-24427489%%*/<?php } ?>/*/%%SmartyNocache:11608477357cd6e505aada0-24427489%%*/';?>

            </div><!-- end row (folder section) -->
        <?php echo '/*%%SmartyNocache:11608477357cd6e505aada0-24427489%%*/<?php }?>/*/%%SmartyNocache:11608477357cd6e505aada0-24427489%%*/';?>

        <?php echo '/*%%SmartyNocache:11608477357cd6e505aada0-24427489%%*/<?php if (count($_smarty_tpl->tpl_vars[\'trash\']->value[\'files\'])>0) {?>/*/%%SmartyNocache:11608477357cd6e505aada0-24427489%%*/';?>

            <div class="row" style="margin-top:25px;">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="panel panel-colorful">
                        <div class="panel-heading">
                            <h3 class="panel-title text-uppercase" style="overflow: hidden;">
                                <span style="display:block;font-size:1.4em;float:left;">
                                    <i class="fa fa-file"></i>&nbsp;
                                    <span style="font-weight:100;color:#000;">Súbory</span>
                                </span>
                            </h3>
                        </div>
                    </div>
                </div><!-- end col -->
            </div><!-- end row -->
            <div id="l-i-f-f-b-i-m-p" class="row" role="presentation">
                <?php echo '/*%%SmartyNocache:11608477357cd6e505aada0-24427489%%*/<?php  $_smarty_tpl->tpl_vars[\'item\'] = new Smarty_Variable; $_smarty_tpl->tpl_vars[\'item\']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars[\'trash\']->value[\'files\']; if (!is_array($_from) && !is_object($_from)) { settype($_from, \'array\');}
foreach ($_from as $_smarty_tpl->tpl_vars[\'item\']->key => $_smarty_tpl->tpl_vars[\'item\']->value) {
$_smarty_tpl->tpl_vars[\'item\']->_loop = true;
?>/*/%%SmartyNocache:11608477357cd6e505aada0-24427489%%*/';?>

                    <div    class="x1 col-md-2 a-v-yc-m d-f-g-b-i-m"
                            style="margin-top:16px;margin-right:16px"
                            role="option" 
                            tabindex="-1"
                            title="<?php echo '/*%%SmartyNocache:11608477357cd6e505aada0-24427489%%*/<?php echo $_smarty_tpl->tpl_vars[\'item\']->value->file_name;?>
/*/%%SmartyNocache:11608477357cd6e505aada0-24427489%%*/';?>
"
                            data-target="doc" 
                            data-is-doc-name="true" 
                            draggable="true" 
                            data-id="<?php echo '/*%%SmartyNocache:11608477357cd6e505aada0-24427489%%*/<?php echo $_smarty_tpl->tpl_vars[\'item\']->value->file_hash;?>
/*/%%SmartyNocache:11608477357cd6e505aada0-24427489%%*/';?>
"
                            data-type="2"
                            data-toggle="tooltip" 
                            data-placement="bottom" 
                            data-original-title="<?php echo '/*%%SmartyNocache:11608477357cd6e505aada0-24427489%%*/<?php echo $_smarty_tpl->tpl_vars[\'item\']->value->file_name;?>
/*/%%SmartyNocache:11608477357cd6e505aada0-24427489%%*/';?>
"
                            aria-selected="false"
                    >
                        <div class="a-v-yc-Jj-od-Fd"></div>
                        <div class="k-v-yc k-v-wa k-Yh-Zd">
                            <div class="k-G-ia-yi"></div>
                            <div class="k-v-wa-xa-m">
                                <div class="k-v-wa-xa rb-ub-zn-jd">
                                    <div class="k-v-wa-xa-Vo-Fd"></div>
                                    <?php echo '/*%%SmartyNocache:11608477357cd6e505aada0-24427489%%*/<?php if ($_smarty_tpl->tpl_vars[\'item\']->value->file_type_id==1) {?>/*/%%SmartyNocache:11608477357cd6e505aada0-24427489%%*/';?>

                                        <img class="k-v-wa-xa-za f-i-w" src="<?php echo '/*%%SmartyNocache:11608477357cd6e505aada0-24427489%%*/<?php echo $_smarty_tpl->tpl_vars[\'item\']->value->file_url;?>
/*/%%SmartyNocache:11608477357cd6e505aada0-24427489%%*/';?>
" height="130" alt="<?php echo '/*%%SmartyNocache:11608477357cd6e505aada0-24427489%%*/<?php echo $_smarty_tpl->tpl_vars[\'item\']->value->file_name;?>
/*/%%SmartyNocache:11608477357cd6e505aada0-24427489%%*/';?>
">
                                    <?php echo '/*%%SmartyNocache:11608477357cd6e505aada0-24427489%%*/<?php }?>/*/%%SmartyNocache:11608477357cd6e505aada0-24427489%%*/';?>

                                    <?php echo '/*%%SmartyNocache:11608477357cd6e505aada0-24427489%%*/<?php if ($_smarty_tpl->tpl_vars[\'item\']->value->file_type_id==2) {?>/*/%%SmartyNocache:11608477357cd6e505aada0-24427489%%*/';?>

                                        <img class="k-v-wa-xa-za" src="extensions/cpanel/img/drive/icons/pdficon.png" alt="<?php echo '/*%%SmartyNocache:11608477357cd6e505aada0-24427489%%*/<?php echo $_smarty_tpl->tpl_vars[\'item\']->value->file_name;?>
/*/%%SmartyNocache:11608477357cd6e505aada0-24427489%%*/';?>
">
                                    <?php echo '/*%%SmartyNocache:11608477357cd6e505aada0-24427489%%*/<?php }?>/*/%%SmartyNocache:11608477357cd6e505aada0-24427489%%*/';?>

                                </div>
                            </div>
                            <div class="k-v-wa-P-m">
                                <div class="k-v-wa-P" aria-label="<?php echo '/*%%SmartyNocache:11608477357cd6e505aada0-24427489%%*/<?php echo $_smarty_tpl->tpl_vars[\'item\']->value->file_name;?>
/*/%%SmartyNocache:11608477357cd6e505aada0-24427489%%*/';
echo '/*%%SmartyNocache:11608477357cd6e505aada0-24427489%%*/<?php echo $_smarty_tpl->tpl_vars[\'item\']->value->file_ext;?>
/*/%%SmartyNocache:11608477357cd6e505aada0-24427489%%*/';?>
 Not selected">
                                    <div class="k-v-wa-d">
                                        <div class="a-d">
                                            <?php echo '/*%%SmartyNocache:11608477357cd6e505aada0-24427489%%*/<?php if ($_smarty_tpl->tpl_vars[\'item\']->value->file_type_id==1) {?>/*/%%SmartyNocache:11608477357cd6e505aada0-24427489%%*/';?>

                                                <img src="extensions/cpanel/img/drive/icons/icon_1_image_x16.png" alt="Image">
                                            <?php echo '/*%%SmartyNocache:11608477357cd6e505aada0-24427489%%*/<?php }?>/*/%%SmartyNocache:11608477357cd6e505aada0-24427489%%*/';?>

                                            <?php echo '/*%%SmartyNocache:11608477357cd6e505aada0-24427489%%*/<?php if ($_smarty_tpl->tpl_vars[\'item\']->value->file_type_id==2) {?>/*/%%SmartyNocache:11608477357cd6e505aada0-24427489%%*/';?>

                                                <img src="extensions/cpanel/img/drive/icons/icon_2_pdf_x16" alt="Pdf">
                                            <?php echo '/*%%SmartyNocache:11608477357cd6e505aada0-24427489%%*/<?php }?>/*/%%SmartyNocache:11608477357cd6e505aada0-24427489%%*/';?>

                                        </div>
                                    </div>
                                    <div class="k-v-L" aria-label="<?php echo '/*%%SmartyNocache:11608477357cd6e505aada0-24427489%%*/<?php echo $_smarty_tpl->tpl_vars[\'item\']->value->file_name;?>
/*/%%SmartyNocache:11608477357cd6e505aada0-24427489%%*/';
echo '/*%%SmartyNocache:11608477357cd6e505aada0-24427489%%*/<?php echo $_smarty_tpl->tpl_vars[\'item\']->value->file_ext;?>
/*/%%SmartyNocache:11608477357cd6e505aada0-24427489%%*/';?>
">
                                        <span class="k-wa-P-x">
                                            <?php echo '/*%%SmartyNocache:11608477357cd6e505aada0-24427489%%*/<?php if (strlen($_smarty_tpl->tpl_vars[\'item\']->value->file_name)>25) {?>/*/%%SmartyNocache:11608477357cd6e505aada0-24427489%%*/';?>

                                                <?php echo '/*%%SmartyNocache:11608477357cd6e505aada0-24427489%%*/<?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars[\'item\']->value->file_name,25,"...",true);?>
/*/%%SmartyNocache:11608477357cd6e505aada0-24427489%%*/';?>

                                            <?php echo '/*%%SmartyNocache:11608477357cd6e505aada0-24427489%%*/<?php } else { ?>/*/%%SmartyNocache:11608477357cd6e505aada0-24427489%%*/';?>

                                                <?php echo '/*%%SmartyNocache:11608477357cd6e505aada0-24427489%%*/<?php echo $_smarty_tpl->tpl_vars[\'item\']->value->file_name;?>
/*/%%SmartyNocache:11608477357cd6e505aada0-24427489%%*/';
echo '/*%%SmartyNocache:11608477357cd6e505aada0-24427489%%*/<?php echo $_smarty_tpl->tpl_vars[\'item\']->value->file_ext;?>
/*/%%SmartyNocache:11608477357cd6e505aada0-24427489%%*/';?>

                                            <?php echo '/*%%SmartyNocache:11608477357cd6e505aada0-24427489%%*/<?php }?>/*/%%SmartyNocache:11608477357cd6e505aada0-24427489%%*/';?>

                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php echo '/*%%SmartyNocache:11608477357cd6e505aada0-24427489%%*/<?php } ?>/*/%%SmartyNocache:11608477357cd6e505aada0-24427489%%*/';?>

            </div><!-- end row (files section) -->
        <?php echo '/*%%SmartyNocache:11608477357cd6e505aada0-24427489%%*/<?php }?>/*/%%SmartyNocache:11608477357cd6e505aada0-24427489%%*/';?>

    <?php echo '/*%%SmartyNocache:11608477357cd6e505aada0-24427489%%*/<?php }?>/*/%%SmartyNocache:11608477357cd6e505aada0-24427489%%*/';?>

<?php }} ?>
