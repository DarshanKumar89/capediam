<?php /*%%SmartyHeaderCode:14934475865889951ca6f243-46401706%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '777043c1eb8704f712392c6293826360d94662a0' => 
    array (
      0 => '/var/www/public/carpedmfashion.com/app/themes/default/store/docs/html_invoice_1.tpl',
      1 => 1474392116,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14934475865889951ca6f243-46401706',
  'variables' => 
  array (
    'datetime' => 0,
    'invcc' => 0,
    'invoiceId' => 0,
    'order' => 0,
    'isDiscount' => 0,
    'item' => 0,
    'isPersonalPickUp' => 0,
    'deliveryCost' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5889951cc9bcb8_43008364',
  'cache_lifetime' => 120,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5889951cc9bcb8_43008364')) {function content_5889951cc9bcb8_43008364($_smarty_tpl) {?><!doctype html>
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
    <div class="fa-number">
      <p>FAKTÚRA <span>číslo</span>: 201701260050 - 2017/01/26&nbsp;|&nbsp;U3XGVD9Y6F</p>
    </div>
    <table class="fa-header">
      <tbody>
        <tr>
          <td class="fa-header-left">
            <h4>Dodávateľ:</h4>
            <p>
              <strong>CARPE DM, s. r. o.</strong><br>
              Tatranská 243<br>
              059 86 Nová Lesná
              <br><br>
              OR OS Prešov,<br> 
              Oddiel: Sro,<br> 
              Vložka číslo: 24408/P
            </p>
            <table class="t-inline" style="margin-top:15px;">
              <tbody>
                <tr>
                  <td width="30%">
                    E-mail:
                  </td>
                  <td width="70%">
                    estore@carpedmfashion.com
                  </td>
                </tr>
                <tr>
                  <td width="30%">
                    Telefón:
                  </td>
                  <td width="70%">
                    +421 52 381 11 87
                  </td>
                </tr>
                <tr>
                  <td width="30%">
                    IČO:
                  </td>
                  <td width="70%">
                    46171096 
                  </td>
                </tr>
                <tr>
                  <td width="30%">
                    DIČ:
                  </td>
                  <td width="70%">
                    2023261746
                  </td>
                </tr>
                <tr>
                  <td width="30%">
                    IČ DPH:
                  </td>
                  <td width="70%">
                    SK2023261746
                  </td>
                </tr>
                <tr>
                  <td width="30%">
                    Banka
                  </td>
                  <td width="70%">
                    VUB BANKA, a. s.
                  </td>
                </tr>
                <tr>
                  <td width="30%">
                    Účet (IBAN):
                  </td>
                  <td width="70%">
                    SK62 0200 0000 0028 9171 0354
                  </td>
                </tr>
                <tr>
                  <td width="30%">
                    SWIFT:
                  </td>
                  <td width="70%">
                    SUBASKBX
                  </td>
                </tr>
                <tr>
                  <td width="30%">
                    Variabilný symbol:
                  </td>
                  <td width="70%">
                    201701260050                  </td>
                </tr>
              </tbody>
            </table>
          </td>
            <td class="fa-header-right">
              <h4>Odberateľ:</h4>
                <p>
                  Norbert &nbsp;Tanoczk&yacute;<br>
                  Rozmar&iacute;nov&aacute; 6<br>
                  91101&nbsp;Trenč&iacute;n
                </p>
                                <table class="t-inline" style="margin-top:15px;">
                  <tbody>
                    <tr>
                      <td width="30%">
                        E-mail:
                      </td>
                      <td width="70%">
                        tanoczky.2xn@gmail.com
                      </td>
                    </tr>
                    <tr>
                      <td width="30%">
                        Telefón:
                      </td>
                      <td width="70%">
                        Rozmar&iacute;nov&aacute; 6
                      </td>
                    </tr>
                    <tr>
                      <td width="30%">
                        Firma:
                      </td>
                      <td width="70%">
                        -                      </td>
                    </tr>
                    <tr>
                      <td width="30%">
                        IČO:
                      </td>
                      <td width="70%">
                        -                      </td>
                    </tr>
                    <tr>
                      <td width="30%">
                        DIČ:
                      </td>
                      <td width="70%">
                        -                      </td>
                    </tr>
                    <tr>
                      <td width="30%">
                        IČ DPH:
                      </td>
                      <td width="70%">
                        -                      </td>
                    </tr>
                  </tbody>
                </table>
            </td>
          </tr>
        </tbody>
    </table>
    <table class="fa-info">
      <tbody>
        <tr>
          <td width="30%">
            Spôsob platby:
          </td>
          <td width="70%">
            Platba v hotovosti
          </td>
        </tr>
        <tr>
          <td width="30%">
            Spôsob dopravy:
          </td>
          <td width="70%">
            Dobierka&nbsp;
            (24h - 4.00&euro;) 
            - (vyzdvihnutie z&aacute;sielky na Slovenskej po&scaron;te)
          </td>
        </tr>
        <tr>
          <td width="30%">
            Dátum vystavenia dokladu:
          </td>
          <td width="70%">
            2017.01.26
          </td>
        </tr>
      </tbody>
    </table>
    <table class="fa-al">
      <thead>
        <tr>
          <th style="width:21%;text-align:center;">
            (Číslo produktu)<br> Objednaný tovar
          </th>
          <th style="width:5%;text-align:center;">
            Ks
          </th>
          <th style="width:10%;text-align:center;">
            Cena / Ks
          </th>
          <th>
            DPH
          </th>
          <th style="width:10%;text-align:right;">
            Cena / ks<br> 
            s DPH
          </th>
          <th style="width:15%;text-align:right;">
            Celkom<br>
            bez DPH
          </th>
          <th style="width:15%;text-align:right;">
            Celkom<br>
            DPH
          </th>
          <th style="width:26%;text-align:right;">
            Celkom<br> s DPH
          </th>
        </tr>
      </thead>
      <tbody>
                  <tr>
            <td>
              <strong>100048</strong><br>
              VAGABOND MAN<br>
                              tmavomodr&aacute; - L
                          </td>
            <td class="number">
              1
            </td>
            <td class="number">
              61.67&nbsp;EUR<br>
              / ks
            </td>
            <td class="td-center">
              DPH SK 20%
            </td>
            <td class="number">
              74.00&nbsp;EUR
            </td>
            <td class="number">
              61.67&nbsp;EUR
            </td>
            <td class="number">
              12.33&nbsp;EUR
            </td>
            <td class="number">
              74.00&nbsp;EUR
            </td>
          </tr>
                          <tr>
            <td>
              Dobierka
            </td>
            <td class="number">
              1
            </td>
            <td class="number">
              3.33&nbsp;EUR
            </td>
            <td class="td-center">
              DPH SK 20%
            </td>
            <td class="number">
              4.00&nbsp;EUR
            </td>
            <td class="number">
              3.33&nbsp;EUR
            </td>
            <td class="number">
              0.67&nbsp;EUR
            </td>
            <td class="number">
              4.00&nbsp;EUR
            </td>
          </tr>
              </tbody>
      <tfoot>
        <tr>
          <td colspan="5">
            Celkom
          </td>
          <td class="number">
            65.00&nbsp;EUR
          </td>
          <td class="number">
            13.00&nbsp;EUR
          </td>
          <td class="number">
            78.00&nbsp;EUR
          </td>
        </tr>
        <tr>
          <td colspan="7">
            <span style="font-size:16px;">Celkom k úhrade</span>
          </td>
          <td class="number" style="padding-right:0px;">
            <span style="font-size:16px;">
              78.00&nbsp;EUR
            </span>
          </td>
        </tr>
      </tfoot>
    </table>
  </body>
</html><?php }} ?>
