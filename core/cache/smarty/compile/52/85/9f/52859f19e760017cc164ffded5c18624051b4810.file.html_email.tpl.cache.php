<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-07-27 11:47:03
         compiled from "/Users/henrich/Work/SlatyFork/carpedmfashion.com/app/themes/default/store/docs/html_email.tpl" */ ?>
<?php /*%%SmartyHeaderCode:174658768257989f377bb887-00148466%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '52859f19e760017cc164ffded5c18624051b4810' => 
    array (
      0 => '/Users/henrich/Work/SlatyFork/carpedmfashion.com/app/themes/default/store/docs/html_email.tpl',
      1 => 1469548746,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '174658768257989f377bb887-00148466',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'html' => 0,
    'signature' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_57989f377c0644_65064726',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57989f377c0644_65064726')) {function content_57989f377c0644_65064726($_smarty_tpl) {?><!doctype html>
<html>
  <head>
    <meta charset="UTF-8">
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: DejaVu Sans, sans-serif;
            font-size: 12px;
        }
        #order-wrap {
            position: relative;
            display: block;
            width: 100%;
            min-height:1px;
        }
        table {
            border-collapse: collapse;
        }
        table td {
            vertical-align: text-top;
        }
        table td.number {
            text-align: right;
        }
        table td.td-center {
            text-align: center;
        }
        .t-inline td {
            padding: 0px;
        }
        .fa-number {
            background-color: #ddd;
            width: 100%;
            height: 44px;
            padding: 0 15px;
        }
        .fa-number p {
            font-size: 15px;
            font-weight: bold;
            line-height: 100%;
            text-transform: uppercase;
        }
        .fa-number span {
            font-size: 13px;
            text-transform: none;
        }
        .fa-header,
        .fa-info,
        .fa-al {
            width: 100%;
            margin-top: 5px;
            border: 1px solid #ddd;
        }
        .fa-header td h4,
        .fa-header td p {
            margin: 0 0 10px 0;
            padding: 0;
            line-height: 100%;
        }
        .fa-header .fa-header-left,
        .fa-header .fa-header-right {
            padding: 5px;
            width: 49.4%;
            height: 226.771653543px;
        }
        .fa-header .fa-header-left {
            border-right: 1px solid #ddd;
        }
        .fa-header .fa-header-right {
            border-left: 1px solid #ddd;
        }
        .fa-info td {
            padding: 0 5px;
        }
        .fa-info tr:first-child td {
            padding-top: 3px;
        }
        .fa-info tr:last-child td {
            padding-bottom: 3px;
        }
        .fa-al thead th {
            background-color: #ddd;
            font-size: 9px;
            padding-right: 5px;
            vertical-align: text-top;
        }
        .fa-al tbody td {
            padding: 3px;
            font-size: 9px;
            border: 1px solid #ddd;
        }
        .fa-al tfoot td {
            padding: 0 5px;
            font-weight: bold;
            border: 1px solid #ddd;
        }
    </style>
  </head>
  <body>
    <?php echo $_smarty_tpl->tpl_vars['html']->value;?>

    <?php echo nl2br($_smarty_tpl->tpl_vars['signature']->value);?>

  </body>
</html><?php }} ?>
