<?php /* Smarty version Smarty-3.1.21-dev, created on 2017-01-26 07:20:12
         compiled from "/var/www/public/carpedmfashion.com/app/themes/default/store/docs/html_invoice_1.tpl" */ ?>
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
  'function' => 
  array (
  ),
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
  'unifunc' => 'content_5889951cc89406_95959126',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5889951cc89406_95959126')) {function content_5889951cc89406_95959126($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include '/var/www/public/carpedmfashion.com/core/lib/smarty/plugins/modifier.date_format.php';
?><!doctype html>
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
      <p>FAKTÚRA <span>číslo</span>: <?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['datetime']->value,"%Y%m%d");
if (!empty($_smarty_tpl->tpl_vars['invcc']->value)) {
echo $_smarty_tpl->tpl_vars['invcc']->value;
} else {
echo $_smarty_tpl->tpl_vars['invoiceId']->value;
}?> - <?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['datetime']->value,"%Y/%m/%d");?>
&nbsp;|&nbsp;<?php echo $_smarty_tpl->tpl_vars['order']->value->reference;?>
</p>
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
                    <?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['datetime']->value,"%Y%m%d");
if (!empty($_smarty_tpl->tpl_vars['invcc']->value)) {
echo $_smarty_tpl->tpl_vars['invcc']->value;
} else {
echo $_smarty_tpl->tpl_vars['invoiceId']->value;
}?>
                  </td>
                </tr>
              </tbody>
            </table>
          </td>
            <td class="fa-header-right">
              <h4>Odberateľ:</h4>
                <p>
                  <?php echo $_smarty_tpl->tpl_vars['order']->value->address->invoice->first_name;?>
&nbsp;<?php echo $_smarty_tpl->tpl_vars['order']->value->address->invoice->last_name;?>
<br>
                  <?php echo $_smarty_tpl->tpl_vars['order']->value->address->invoice->street;?>
<br>
                  <?php echo $_smarty_tpl->tpl_vars['order']->value->address->invoice->zip;?>
&nbsp;<?php echo $_smarty_tpl->tpl_vars['order']->value->address->invoice->city;?>

                </p>
                <?php if ($_smarty_tpl->tpl_vars['order']->value->address->primary->id_contact!==$_smarty_tpl->tpl_vars['order']->value->address->invoice->id_contact) {?>
                <p>
                  <?php echo $_smarty_tpl->tpl_vars['order']->value->address->primary->first_name;?>
&nbsp;<?php echo $_smarty_tpl->tpl_vars['order']->value->address->primary->last_name;?>
<br>
                  <?php echo $_smarty_tpl->tpl_vars['order']->value->address->primary->street;?>
<br>
                  <?php echo $_smarty_tpl->tpl_vars['order']->value->address->primary->zip;?>
&nbsp;<?php echo $_smarty_tpl->tpl_vars['order']->value->address->primary->city;?>

                </p>
                <?php }?>
                <table class="t-inline" style="margin-top:15px;">
                  <tbody>
                    <tr>
                      <td width="30%">
                        E-mail:
                      </td>
                      <td width="70%">
                        <?php echo $_smarty_tpl->tpl_vars['order']->value->address->invoice->email;?>

                      </td>
                    </tr>
                    <tr>
                      <td width="30%">
                        Telefón:
                      </td>
                      <td width="70%">
                        <?php echo $_smarty_tpl->tpl_vars['order']->value->address->invoice->phone;?>

                      </td>
                    </tr>
                    <tr>
                      <td width="30%">
                        Firma:
                      </td>
                      <td width="70%">
                        <?php if (!empty($_smarty_tpl->tpl_vars['order']->value->address->invoice->company_name)) {
echo $_smarty_tpl->tpl_vars['order']->value->address->invoice->company_name;
} else { ?>-<?php }?>
                      </td>
                    </tr>
                    <tr>
                      <td width="30%">
                        IČO:
                      </td>
                      <td width="70%">
                        <?php if (!empty($_smarty_tpl->tpl_vars['order']->value->address->invoice->company_reg_number)) {
echo $_smarty_tpl->tpl_vars['order']->value->address->invoice->company_reg_number;
} else { ?>-<?php }?>
                      </td>
                    </tr>
                    <tr>
                      <td width="30%">
                        DIČ:
                      </td>
                      <td width="70%">
                        <?php if (!empty($_smarty_tpl->tpl_vars['order']->value->address->invoice->vat)) {
echo $_smarty_tpl->tpl_vars['order']->value->address->invoice->vat;
} else { ?>-<?php }?>
                      </td>
                    </tr>
                    <tr>
                      <td width="30%">
                        IČ DPH:
                      </td>
                      <td width="70%">
                        <?php if (!empty($_smarty_tpl->tpl_vars['order']->value->address->invoice->vat_code)) {
echo $_smarty_tpl->tpl_vars['order']->value->address->invoice->vat_code;
} else { ?>-<?php }?>
                      </td>
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
            <?php echo $_smarty_tpl->tpl_vars['order']->value->payment->payment_name;?>

          </td>
        </tr>
        <tr>
          <td width="30%">
            Spôsob dopravy:
          </td>
          <td width="70%">
            <?php echo $_smarty_tpl->tpl_vars['order']->value->delivery->delivery_name;?>
&nbsp;
            (<?php if (!empty($_smarty_tpl->tpl_vars['order']->value->delivery->delivery_time)) {
echo $_smarty_tpl->tpl_vars['order']->value->delivery->delivery_time;
echo $_smarty_tpl->tpl_vars['order']->value->delivery->delivery_time_unit;?>
 - <?php }
if ($_smarty_tpl->tpl_vars['isDiscount']->value==true) {?>0.00<?php } else {
echo $_smarty_tpl->tpl_vars['order']->value->delivery->cost;
}
echo $_smarty_tpl->tpl_vars['order']->value->delivery->sign;?>
) 
            - <?php echo $_smarty_tpl->tpl_vars['order']->value->delivery->description;?>

          </td>
        </tr>
        <tr>
          <td width="30%">
            Dátum vystavenia dokladu:
          </td>
          <td width="70%">
            <?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['datetime']->value,"%Y.%m.%d");?>

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
        <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['order']->value->cart->articleList; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
          <tr>
            <td>
              <strong><?php echo mb_strtoupper($_smarty_tpl->tpl_vars['item']->value->sku, 'UTF-8');?>
</strong><br>
              <?php echo $_smarty_tpl->tpl_vars['item']->value->article_name;?>
<br>
              <?php if ((isset($_smarty_tpl->tpl_vars['item']->value->matrix->par_a)&&is_object($_smarty_tpl->tpl_vars['item']->value->matrix->par_a))&&(isset($_smarty_tpl->tpl_vars['item']->value->matrix->par_b)&&is_object($_smarty_tpl->tpl_vars['item']->value->matrix->par_b))) {?>
                <?php echo $_smarty_tpl->tpl_vars['item']->value->matrix->par_a->value;?>
 - <?php echo $_smarty_tpl->tpl_vars['item']->value->matrix->par_b->value;?>

              <?php }?>
            </td>
            <td class="number">
              <?php echo $_smarty_tpl->tpl_vars['item']->value->qty;?>

            </td>
            <td class="number">
              <?php echo $_smarty_tpl->tpl_vars['item']->value->retail_price;?>
&nbsp;<?php echo $_smarty_tpl->tpl_vars['order']->value->currency->iso_code;?>
<br>
              / ks
            </td>
            <td class="td-center">
              <?php echo $_smarty_tpl->tpl_vars['order']->value->tax->tax_name;?>

            </td>
            <td class="number">
              <?php echo $_smarty_tpl->tpl_vars['item']->value->retail_tax_price;?>
&nbsp;<?php echo $_smarty_tpl->tpl_vars['order']->value->currency->iso_code;?>

            </td>
            <td class="number">
              <?php echo $_smarty_tpl->tpl_vars['item']->value->amount_without_tax;?>
&nbsp;<?php echo $_smarty_tpl->tpl_vars['order']->value->currency->iso_code;?>

            </td>
            <td class="number">
              <?php echo $_smarty_tpl->tpl_vars['item']->value->tax;?>
&nbsp;<?php echo $_smarty_tpl->tpl_vars['order']->value->currency->iso_code;?>

            </td>
            <td class="number">
              <?php echo $_smarty_tpl->tpl_vars['item']->value->amount;?>
&nbsp;<?php echo $_smarty_tpl->tpl_vars['order']->value->currency->iso_code;?>

            </td>
          </tr>
        <?php } ?>
        <?php if ($_smarty_tpl->tpl_vars['isPersonalPickUp']->value==false&&$_smarty_tpl->tpl_vars['isDiscount']->value==false&&!is_null($_smarty_tpl->tpl_vars['deliveryCost']->value)) {?>
          <tr>
            <td>
              <?php echo $_smarty_tpl->tpl_vars['deliveryCost']->value->delivery_name;?>

            </td>
            <td class="number">
              <?php echo $_smarty_tpl->tpl_vars['deliveryCost']->value->qty;?>

            </td>
            <td class="number">
              <?php echo $_smarty_tpl->tpl_vars['deliveryCost']->value->price;?>
&nbsp;<?php echo $_smarty_tpl->tpl_vars['order']->value->currency->iso_code;?>

            </td>
            <td class="td-center">
              <?php echo $_smarty_tpl->tpl_vars['deliveryCost']->value->tax_name;?>

            </td>
            <td class="number">
              <?php echo $_smarty_tpl->tpl_vars['deliveryCost']->value->price_tax;?>
&nbsp;<?php echo $_smarty_tpl->tpl_vars['order']->value->currency->iso_code;?>

            </td>
            <td class="number">
              <?php echo $_smarty_tpl->tpl_vars['deliveryCost']->value->price;?>
&nbsp;<?php echo $_smarty_tpl->tpl_vars['order']->value->currency->iso_code;?>

            </td>
            <td class="number">
              <?php echo $_smarty_tpl->tpl_vars['deliveryCost']->value->tax;?>
&nbsp;<?php echo $_smarty_tpl->tpl_vars['order']->value->currency->iso_code;?>

            </td>
            <td class="number">
              <?php echo $_smarty_tpl->tpl_vars['deliveryCost']->value->price_tax;?>
&nbsp;<?php echo $_smarty_tpl->tpl_vars['order']->value->currency->iso_code;?>

            </td>
          </tr>
        <?php }?>
      </tbody>
      <tfoot>
        <tr>
          <td colspan="5">
            Celkom
          </td>
          <td class="number">
            <?php echo $_smarty_tpl->tpl_vars['order']->value->total_without_tax;?>
&nbsp;<?php echo $_smarty_tpl->tpl_vars['order']->value->currency->iso_code;?>

          </td>
          <td class="number">
            <?php echo $_smarty_tpl->tpl_vars['order']->value->total_tax;?>
&nbsp;<?php echo $_smarty_tpl->tpl_vars['order']->value->currency->iso_code;?>

          </td>
          <td class="number">
            <?php echo $_smarty_tpl->tpl_vars['order']->value->total_price;?>
&nbsp;<?php echo $_smarty_tpl->tpl_vars['order']->value->currency->iso_code;?>

          </td>
        </tr>
        <tr>
          <td colspan="7">
            <span style="font-size:16px;">Celkom k úhrade</span>
          </td>
          <td class="number" style="padding-right:0px;">
            <span style="font-size:16px;">
              <?php echo $_smarty_tpl->tpl_vars['order']->value->total_price;?>
&nbsp;<?php echo $_smarty_tpl->tpl_vars['order']->value->currency->iso_code;?>

            </span>
          </td>
        </tr>
      </tfoot>
    </table>
  </body>
</html><?php }} ?>
