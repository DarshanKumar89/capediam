<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-12-05 07:29:00
         compiled from "/var/www/public/carpedmfashion.com/core/config/../../app/themes/cpanel/drive/ajax/drive_search.tpl" */ ?>
<?php /*%%SmartyHeaderCode:17842605265845092c9d18d3-86603948%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
  ),
  'nocache_hash' => '17842605265845092c9d18d3-86603948',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'folderList' => 0,
    'item' => 0,
    'fileList' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5845092caac197_34428855',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5845092caac197_34428855')) {function content_5845092caac197_34428855($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_truncate')) include '/var/www/public/carpedmfashion.com/core/lib/smarty/plugins/modifier.truncate.php';
?><?php if (count($_smarty_tpl->tpl_vars['folderList']->value)>0) {?>
    <div class="row" style="min-height:275px;" role="presentation">
        <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['folderList']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
            <div    class="col-lg-2 a-v-yc-m"
                    style="min-width:186px;margin-top:30px;"
                    role="option" 
                    tabindex="-1" 
                    title="<?php echo $_smarty_tpl->tpl_vars['item']->value->folder_name;?>
" 
                    draggable="true"
                    data-target="doc"
                    data-is-doc-name="true"
                    data-id="<?php echo $_smarty_tpl->tpl_vars['item']->value->folder_hash;?>
"
                    data-type="1"
                    data-toggle="tooltip" 
                    data-placement="bottom" 
                    data-original-title="<?php echo $_smarty_tpl->tpl_vars['item']->value->folder_name;?>
"
                    aria-selected="false"
            >
                <div class="a-v-yc-Jj-od-Fd"></div>
                <div class="k-v-yc k-v-n" aria-label="<?php echo $_smarty_tpl->tpl_vars['item']->value->folder_name;?>
 MyDrive Folder Not selected">
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
                        <div class="k-v-L" aria-label="<?php echo $_smarty_tpl->tpl_vars['item']->value->folder_name;?>
">
                            <span class="k-wa-P-x"><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['item']->value->folder_name,50,"...",true);?>
</span>
                        </div>
                    </div>
                    <div class="k-v-n-Na-Lb"></div>
                </div>
            </div>
        <?php } ?>
    </div><!-- end row (folder section) -->
<?php }?>
<?php if (count($_smarty_tpl->tpl_vars['fileList']->value)>0) {?>
    <div id="l-i-f-f-b-i-m-p" class="row" style="min-height:275px;" role="presentation">
        <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['fileList']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
            <div    class="x1 a-v-yc-m d-f-g-b-i-m"
                    style="margin-top:16px;"
                    role="option" 
                    tabindex="-1"
                    title="<?php echo $_smarty_tpl->tpl_vars['item']->value->file_name;?>
"
                    data-target="doc" 
                    data-is-doc-name="true" 
                    draggable="true" 
                    data-id="<?php echo $_smarty_tpl->tpl_vars['item']->value->file_hash;?>
"
                    data-type="2"
                    data-toggle="tooltip" 
                    data-placement="bottom" 
                    data-original-title="<?php echo $_smarty_tpl->tpl_vars['item']->value->file_name;?>
"
                    aria-selected="false"
            >
                <div class="a-v-yc-Jj-od-Fd"></div>
                <div class="k-v-yc k-v-wa k-Yh-Zd">
                    <div class="k-G-ia-yi"></div>
                    <div class="k-v-wa-xa-m">
                        <div class="k-v-wa-xa rb-ub-zn-jd">
                            <div class="k-v-wa-xa-Vo-Fd"></div>
                            <?php if ($_smarty_tpl->tpl_vars['item']->value->file_type_id==1) {?>
                                <a href="<?php echo $_smarty_tpl->tpl_vars['item']->value->file_url;?>
" onclick="return false;" class="img-item" rel="group" title="<?php echo $_smarty_tpl->tpl_vars['item']->value->file_name;?>
">
                                    <img class="k-v-wa-xa-za f-i-w" src="<?php echo $_smarty_tpl->tpl_vars['item']->value->file_url;?>
" height="130" alt="<?php echo $_smarty_tpl->tpl_vars['item']->value->file_name;?>
">
                                </a>
                            <?php }?>
                            <?php if ($_smarty_tpl->tpl_vars['item']->value->file_type_id==2) {?>
                                <img class="k-v-wa-xa-za" src="extensions/cpanel/img/drive/icons/pdficon.png" alt="<?php echo $_smarty_tpl->tpl_vars['item']->value->file_name;?>
">
                            <?php }?>
                        </div>
                    </div>
                    <div class="k-v-wa-P-m">
                        <div class="k-v-wa-P" aria-label="<?php echo $_smarty_tpl->tpl_vars['item']->value->file_name;
echo $_smarty_tpl->tpl_vars['item']->value->file_ext;?>
 Image Not selected">
                            <div class="k-v-wa-d">
                                <div class="a-d">
                                    <?php if ($_smarty_tpl->tpl_vars['item']->value->file_type_id==1) {?>
                                        <img src="extensions/cpanel/img/drive/icons/icon_1_image_x16.png" alt="Image">
                                    <?php }?>
                                    <?php if ($_smarty_tpl->tpl_vars['item']->value->file_type_id==2) {?>
                                        <img src="extensions/cpanel/img/drive/icons/icon_2_pdf_x16" alt="Pdf">
                                    <?php }?>
                                </div>
                            </div>
                            <div class="k-v-L" aria-label="<?php echo $_smarty_tpl->tpl_vars['item']->value->file_name;
echo $_smarty_tpl->tpl_vars['item']->value->file_ext;?>
">
                                <span class="k-wa-P-x">
                                    <?php if (strlen($_smarty_tpl->tpl_vars['item']->value->file_name)>25) {?>
                                        <?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['item']->value->file_name,25,"...",true);?>

                                    <?php } else { ?>
                                        <?php echo $_smarty_tpl->tpl_vars['item']->value->file_name;
echo $_smarty_tpl->tpl_vars['item']->value->file_ext;?>

                                    <?php }?>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php } ?>
    </div><!-- end row (files section) -->
<?php }?><?php }} ?>
