<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-09-13 11:08:25
         compiled from "/var/www/public/carpedmfashion.com/app/themes/cpanel/locator.tpl" */ ?>
<?php /*%%SmartyHeaderCode:59542664257d7c2093950b0-48899619%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
  ),
  'nocache_hash' => '59542664257d7c2093950b0-48899619',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'ip' => 0,
    'detector' => 0,
    'visitor' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_57d7c209421d17_19457577',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57d7c209421d17_19457577')) {function content_57d7c209421d17_19457577($_smarty_tpl) {?><!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>LOCATOR | MOZAYC</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <?php echo '<script'; ?>
 src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"><?php echo '</script'; ?>
>
      <?php echo '<script'; ?>
 src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"><?php echo '</script'; ?>
>
    <![endif]-->
  </head>
  <body>
    <div class="container">
      <div class="row" style="margin-top: 80px;">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
          <table class="table table-condensed table-striped table-bordered">
            <caption class="text-center text-uppercase" style="font-size: 1.8em;font-weight: 700;">
              <strong>LOCATOR</strong>
            </caption>
            <tbody>
              <tr>
                <td class="text-uppercase">
                  <strong>IP adress</strong>
                </td>
                <td>
                  <?php echo $_smarty_tpl->tpl_vars['ip']->value;?>

                </td>
                <td class="text-uppercase">
                  <strong>Operating system</strong>
                </td>
                <td>
                  <?php echo $_smarty_tpl->tpl_vars['detector']->value->osFull;?>

                </td>
              </tr>
              <tr>
                <td class="text-uppercase">
                  <strong>Continent</strong>
                </td>
                <td>
                  <?php echo $_smarty_tpl->tpl_vars['visitor']->value->continent;?>

                </td>
                <td class="text-uppercase">
                  <strong>WEB Browser</strong>
                </td>
                <td>
                  <?php echo $_smarty_tpl->tpl_vars['detector']->value->browserFull;?>

                </td>
              </tr>
              <tr>
                <td class="text-uppercase">
                  <strong>Country Code</strong>
                </td>
                <td>
                  <?php echo $_smarty_tpl->tpl_vars['visitor']->value->countryCode;?>

                </td>
                <td class="text-uppercase">
                  <strong>Device</strong>
                </td>
                <td>
                  <?php if ($_smarty_tpl->tpl_vars['detector']->value->isComputer==true) {?>
                    Desktop
                  <?php }?>
                  <?php if ($_smarty_tpl->tpl_vars['detector']->value->isTablet==true) {?>
                    Tablet
                  <?php }?>
                  <?php if ($_smarty_tpl->tpl_vars['detector']->value->isMobile==true) {?>
                    Mobile
                  <?php }?>
                  <?php if ($_smarty_tpl->tpl_vars['detector']->value->isMobileDevice==true) {?>
                    Mobile device
                  <?php }?>
                </td>
              </tr>
              <tr>
                <td class="text-uppercase">
                  <strong>Country Name</strong>
                </td>
                <td>
                  <?php echo $_smarty_tpl->tpl_vars['visitor']->value->countryName;?>

                </td>
                <td class="text-uppercase">
                  <strong>Screen width</strong>
                </td>
                <td>
                  <?php if (isset($_smarty_tpl->tpl_vars['detector']->value->screenattributes)) {?>
                    <?php echo $_smarty_tpl->tpl_vars['detector']->value->screenattributes->windowWidth;?>

                  <?php } else { ?>
                    -
                  <?php }?>
                </td>
              </tr>
              <tr>
                <td class="text-uppercase">
                  <strong>City</strong>
                </td>
                <td>
                  <?php echo $_smarty_tpl->tpl_vars['visitor']->value->city;?>

                </td>
                <td class="text-uppercase">
                  <strong>Screen height</strong>
                </td>
                <td>
                  <?php if (isset($_smarty_tpl->tpl_vars['detector']->value->screenattributes)) {?>
                    <?php echo $_smarty_tpl->tpl_vars['detector']->value->screenattributes->windowHeight;?>

                  <?php } else { ?>
                    -
                  <?php }?>
                </td>
              </tr>
              <tr>
                <td class="text-uppercase">
                  <strong>Latitude</strong>
                </td>
                <td>
                  <?php echo $_smarty_tpl->tpl_vars['visitor']->value->latitude;?>

                </td>
                <td class="text-uppercase">
                  <strong>Screen depth</strong>
                </td>
                <td>
                  <?php if (isset($_smarty_tpl->tpl_vars['detector']->value->screenattributes)) {?>
                    <?php echo $_smarty_tpl->tpl_vars['detector']->value->screenattributes->colorDepth;?>

                  <?php } else { ?>
                    -
                  <?php }?>
                </td>
              </tr>
              <tr>
                <td class="text-uppercase">
                  <strong>Longitude</strong>
                </td>
                <td>
                  <?php echo $_smarty_tpl->tpl_vars['visitor']->value->longitude;?>

                </td>
                <td class="text-uppercase">
                  <strong>Javascript</strong>
                </td>
                <td>
                  <?php if (!$_smarty_tpl->tpl_vars['detector']->value->nojs) {?>
                    ON
                  <?php } else { ?>
                    OFF
                  <?php }?>
                </td>
              </tr>
              <tr>
                <td class="text-uppercase">
                  <strong>Timezone</strong>
                </td>
                <td>
                  <?php if (isset($_smarty_tpl->tpl_vars['visitor']->value->timezone)) {?>
                    <?php echo $_smarty_tpl->tpl_vars['visitor']->value->timezone["timeZoneId"];?>

                  <?php } else { ?>
                    -
                  <?php }?>
                </td>
                <td class="text-uppercase">
                  <strong>GEO LOCATION</strong>
                </td>
                <td>
                  <?php if ($_smarty_tpl->tpl_vars['detector']->value->geolocation) {?>
                    ON
                  <?php } else { ?>
                    OFF
                  <?php }?>
                </td>
              </tr>
              <tr>
                <td class="text-uppercase">
                  <strong>Timezone name</strong>
                </td>
                <td>
                  <?php if (isset($_smarty_tpl->tpl_vars['visitor']->value->timezone)) {?>
                    <?php echo $_smarty_tpl->tpl_vars['visitor']->value->timezone["timeZoneName"];?>

                  <?php } else { ?>
                    -
                  <?php }?>
                </td>
                <td class="text-uppercase">
                  <strong>FLEXBOX</strong>
                </td>
                <td>
                  <?php if ($_smarty_tpl->tpl_vars['detector']->value->flexbox) {?>
                    ON
                  <?php } else { ?>
                    OFF
                  <?php }?>
                </td>
              </tr>
            </tbody>
          </table>
        </div><!-- end col -->
      </div><!-- end row -->
    </div><!-- end container -->
    <?php echo '<script'; ?>
 src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"><?php echo '</script'; ?>
>
  </body>
</html><?php }} ?>
