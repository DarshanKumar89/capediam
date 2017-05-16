<?php /*%%SmartyHeaderCode:1852794757572b3b9ed33881-12154383%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1c36f902464bfcdeee711dbf60ead7aa956baa01' => 
    array (
      0 => '/Users/henrich/Work/SlatyFork/carpedm.mozayc.net/core/config/../../app/themes/cpanel/download_files_from_folder_form.tpl',
      1 => 1462451098,
      2 => 'extends',
    ),
  ),
  'nocache_hash' => '1852794757572b3b9ed33881-12154383',
  'variables' => 
  array (
    'baseUrl' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_572b3b9ed50587_02623523',
  'cache_lifetime' => 120,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_572b3b9ed50587_02623523')) {function content_572b3b9ed50587_02623523($_smarty_tpl) {?><!DOCTYPE html>
<html>
  <head>
    <base href="http://carpedmfashion.local" />
    <title>DOWNLOAD FILES FROM FOLDER / FOLDERS</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link type="text/css" rel="stylesheet" href="extensions/bootstrap/css/bootstrap.min.css">
    <link type="text/css" rel="stylesheet" href="extensions/bootstrap/css/bootstrap-theme.min.css">
    <link type="text/css" rel="stylesheet" href="extensions/font-awesome/css/font-awesome.min.css" media="screen, projection">
    <style>
      .container {
        margin-top: 50px;
      }
      h1 {
        margin-bottom: 25px;
      }
      .form-group {
        position: relative;
      }
      .remove_field {
        position: absolute;
        right: -20px;
        top: 7.5px;
      }
      
    </style>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>
  </head>
  <body role="document">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
          <h1 class="text-center text-uppercase">
            DOWNLOAD FILES FROM FOLDER / FOLDERS
          </h1>
          <form action="api/download-files-from-folder" method="POST" role="form">
            <div class="input_fields_wrap">
              <div class="form-group"><input type="text" name="folders[]" value="" class="form-control"></div>
            </div>
            <div class="btn-group" role="group">
              <button type="submit" class="btn btn-info">
                DOWNLOAD
              </button>
              <button type="button" class="btn btn-default add_field_button">
                ADD FIELD
              </button>
            </div>
          </form>
        </div><!-- end col -->
      </div><!-- end row -->
    </div><!-- end container -->
    <script src="extensions/bootstrap/js/bootstrap.min.js"></script>
    <script>
      $(document).ready(function() {
          var max_fields      = 10; //maximum input boxes allowed
          var wrapper         = $(".input_fields_wrap"); //Fields wrapper
          var add_button      = $(".add_field_button"); //Add button ID

          var x = 1; //initlal text box count
          $(add_button).click(function(e){ //on add input button click
              e.preventDefault();
              if(x < max_fields){ //max input box allowed
                  x++; //text box increment
                  $(wrapper).append('<div class="form-group"><input type="text" name="folders[]" value="" class="form-control"/><a href="#" class="remove_field"><i class="fa fa-times" aria-hidden="true"></i></a></div>'); //add input box
              }
          });

          $(wrapper).on("click",".remove_field", function(e){ //user click on remove text
              e.preventDefault(); $(this).parent('div').remove(); x--;
          })
      });
    </script>
  </body>
</html><?php }} ?>
