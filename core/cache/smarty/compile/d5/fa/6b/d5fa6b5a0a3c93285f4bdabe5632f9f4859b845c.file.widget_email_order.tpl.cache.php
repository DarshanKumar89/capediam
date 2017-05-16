<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-09-21 19:23:05
         compiled from "/var/www/public/carpedmfashion.com/app/themes/default/widgets/email/order/120/widget_email_order.tpl" */ ?>
<?php /*%%SmartyHeaderCode:145445609557e2c1f9054bf7-81634502%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd5fa6b5a0a3c93285f4bdabe5632f9f4859b845c' => 
    array (
      0 => '/var/www/public/carpedmfashion.com/app/themes/default/widgets/email/order/120/widget_email_order.tpl',
      1 => 1474475088,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '145445609557e2c1f9054bf7-81634502',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'order' => 0,
    'discount' => 0,
    'item' => 0,
    'personal_pickup' => 0,
    'delivery_cost' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_57e2c1f922f093_94726691',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57e2c1f922f093_94726691')) {function content_57e2c1f922f093_94726691($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include '/var/www/public/carpedmfashion.com/core/lib/smarty/plugins/modifier.date_format.php';
?><div style="margin: 0;padding: 0;font-family: DejaVu Sans, sans-serif;font-size: 12px;">
  <div class="fa-number" style="background-color: #ddd;width: 100%;height: 44px;padding: 0 15px;">
    <p style="font-size: 15px;font-weight: bold;line-height: 40px;text-transform: uppercase;">
      Ordine-codice:&nbsp;<?php echo $_smarty_tpl->tpl_vars['order']->value->reference;?>
&nbsp;|&nbsp;<?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['order']->value->close_date,"%d.%m.%Y");?>

    </p>
  </div>
  <table class="fa-header" style="border-collapse: collapse;width: 100%;margin-top: 5px;border: 1px solid #ddd;">
    <tbody>
        <tr>
          <td class="fa-header-left" style="vertical-align: text-top;padding: 5px;width: 49.4%;height: 226.771653543px;border-right: 1px solid #ddd;">
            <h4 style="margin: 0 0 10px 0;padding: 0;line-height: 100%;">
              Venditore:
            </h4>
            <p style="margin: 0 0 10px 0;padding: 0;line-height: 100%;">
              <strong>Stanislava Kleinova - CARPE DM </strong><br>
              Via Portici 253<br>
              39012 Merano
              <br><br>
              IVA 02837500210
            </p>
            <table class="t-inline" style="margin-top: 15px;border-collapse: collapse;">
              <tbody>
                <tr>
                  <td width="30%" style="vertical-align: text-top;padding: 0px;">
                    E-mail:
                  </td>
                  <td width="70%" style="vertical-align: text-top;padding: 0px;">
                    italia@carpedmfashion.com
                  </td>
                </tr>
                <tr>
                  <td width="30%" style="vertical-align: text-top;padding: 0px;">
                    Telefono:
                  </td>
                  <td width="70%" style="vertical-align: text-top;padding: 0px;">
                    +39 320 394 4879 
                  </td>
                </tr>
              </tbody>
            </table>
          </td>
          <td class="fa-header-right" style="vertical-align: text-top;padding: 5px;width: 49.4%;height: 226.771653543px;border-left: 1px solid #ddd;">
            <h4 style="margin: 0 0 10px 0;padding: 0;line-height: 100%;">
              Acquirente:
            </h4>
            <p style="margin: 0 0 10px 0;padding: 0;line-height: 100%;">
              <?php echo $_smarty_tpl->tpl_vars['order']->value->address->invoice->first_name;?>
&nbsp;<?php echo $_smarty_tpl->tpl_vars['order']->value->address->invoice->last_name;?>
<br>
              <?php echo $_smarty_tpl->tpl_vars['order']->value->address->invoice->street;?>
<br>
              <?php echo $_smarty_tpl->tpl_vars['order']->value->address->invoice->zip;?>
&nbsp;<?php echo $_smarty_tpl->tpl_vars['order']->value->address->invoice->city;?>

            </p>
            <?php if ($_smarty_tpl->tpl_vars['order']->value->address->primary->id_contact!==$_smarty_tpl->tpl_vars['order']->value->address->invoice->id_contact) {?>
            <p style="margin: 0 0 10px 0;padding: 0;line-height: 100%;">
              <?php echo $_smarty_tpl->tpl_vars['order']->value->address->primary->first_name;?>
&nbsp;<?php echo $_smarty_tpl->tpl_vars['order']->value->address->primary->last_name;?>
<br>
              <?php echo $_smarty_tpl->tpl_vars['order']->value->address->primary->street;?>
<br>
              <?php echo $_smarty_tpl->tpl_vars['order']->value->address->primary->zip;?>
&nbsp;<?php echo $_smarty_tpl->tpl_vars['order']->value->address->primary->city;?>

            </p>
            <?php }?>
            <table class="t-inline" style="margin-top: 15px;border-collapse: collapse;">
              <tbody>
                <tr>
                  <td width="30%" style="vertical-align: text-top;padding: 0px;">
                    E-mail:
                  </td>
                  <td width="70%" style="vertical-align: text-top;padding: 0px;">
                    <?php echo $_smarty_tpl->tpl_vars['order']->value->address->invoice->email;?>

                  </td>
                </tr>
                <tr>
                  <td width="30%" style="vertical-align: text-top;padding: 0px;">
                    Telefono:
                  </td>
                  <td width="70%" style="vertical-align: text-top;padding: 0px;">
                    <?php echo $_smarty_tpl->tpl_vars['order']->value->address->invoice->phone;?>

                  </td>
                </tr>
                <tr>
                  <td width="30%" style="vertical-align: text-top;padding: 0px;">
                    Azienda:
                  </td>
                  <td width="70%" style="vertical-align: text-top;padding: 0px;">
                    <?php if (!empty($_smarty_tpl->tpl_vars['order']->value->address->invoice->company_name)) {
echo $_smarty_tpl->tpl_vars['order']->value->address->invoice->company_name;
} else { ?>-<?php }?>
                  </td>
                </tr>
                <tr>
                  <td width="30%" style="vertical-align: text-top;padding: 0px;">
                    
                  </td>
                  <td width="70%" style="vertical-align: text-top;padding: 0px;">
                    <?php if (!empty($_smarty_tpl->tpl_vars['order']->value->address->invoice->company_reg_number)) {
echo $_smarty_tpl->tpl_vars['order']->value->address->invoice->company_reg_number;
} else { ?>-<?php }?>
                  </td>
                </tr>
                <tr>
                  <td width="30%" style="vertical-align: text-top;padding: 0px;">
                    
                  </td>
                  <td width="70%" style="vertical-align: text-top;padding: 0px;">
                    <?php if (!empty($_smarty_tpl->tpl_vars['order']->value->address->invoice->vat)) {
echo $_smarty_tpl->tpl_vars['order']->value->address->invoice->vat;
} else { ?>-<?php }?>
                  </td>
                </tr>
                <tr>
                  <td width="30%" style="vertical-align: text-top;padding: 0px;">
                    IVA:
                  </td>
                  <td width="70%" style="vertical-align: text-top;padding: 0px;">
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
  <table class="fa-info" style="border-collapse: collapse;width: 100%;margin-top: 5px;border: 1px solid #ddd;">
    <tbody>
      <tr>
        <td width="30%" style="vertical-align: text-top;padding: 0 5px;">
          Metodo di pagamento:
        </td>
        <td width="70%" style="vertical-align: text-top;padding: 0 5px;">
          <?php echo $_smarty_tpl->tpl_vars['order']->value->payment->payment_name;?>

        </td>
      </tr>
      <tr>
        <td width="30%" style="vertical-align: text-top;padding: 0 5px;">
          Metodo di consegna:
        </td>
        <td width="70%" style="vertical-align: text-top;padding: 0 5px;">
          <?php echo $_smarty_tpl->tpl_vars['order']->value->delivery->delivery_name;?>
&nbsp;
          (<?php if (!empty($_smarty_tpl->tpl_vars['order']->value->delivery->delivery_time)) {
echo $_smarty_tpl->tpl_vars['order']->value->delivery->delivery_time;
echo $_smarty_tpl->tpl_vars['order']->value->delivery->delivery_time_unit;?>
 - <?php }
if ($_smarty_tpl->tpl_vars['discount']->value==true) {?>0.00<?php } else {
echo $_smarty_tpl->tpl_vars['order']->value->delivery->cost;
}
echo $_smarty_tpl->tpl_vars['order']->value->delivery->sign;?>
) 
          - <?php echo $_smarty_tpl->tpl_vars['order']->value->delivery->description;?>

        </td>
      </tr>
      <tr>
        <td width="30%" style="vertical-align: text-top;padding: 0 5px;">
          Data di consegna:
        </td>
        <td width="70%" style="vertical-align: text-top;padding: 0 5px;">
          <?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['order']->value->close_date,"%d.%m.%Y");?>

        </td>
      </tr>
      <tr>
        <td width="30%" style="vertical-align: text-top;padding: 0 5px;">
          Data dell'ordine:
        </td>
        <td width="70%" style="vertical-align: text-top;padding: 0 5px;">
          <?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['order']->value->close_date,"%d.%m.%Y");?>

        </td>
      </tr>
      <tr>
        <td width="30%" style="vertical-align: text-top;padding: 0 5px;">
          
        </td>
        <td width="70%" style="vertical-align: text-top;padding: 0 5px;">
          <?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['order']->value->close_date,"%d.%m.%Y");?>

        </td>
      </tr>
    </tbody>
  </table>
  <table class="fa-al" style="border-collapse: collapse;width: 100%;margin-top: 5px;border: 1px solid #ddd;">
    <thead>
      <tr>
        <th style="width: 21%;text-align: center;background-color: #ddd;font-size: 9px;padding-right: 5px;vertical-align: text-top;">
          Prodotti ordinati<br> (Codice del prodotto)
        </th>
        <th style="width: 5%;text-align: center;background-color: #ddd;font-size: 9px;padding-right: 5px;vertical-align: text-top;">
          Pz
        </th>
        <th style="width: 10%;text-align: center;background-color: #ddd;font-size: 9px;padding-right: 5px;vertical-align: text-top;">
          Prezzo / Pz
        </th>
        <th style="background-color: #ddd;font-size: 9px;padding-right: 5px;vertical-align: text-top;">
          IVA
        </th>
        <th style="width: 10%;text-align: right;background-color: #ddd;font-size: 9px;padding-right: 5px;vertical-align: text-top;">
          Prezzo / Pz<br> 
          con IVA
        </th>
        <th style="width: 15%;text-align: right;background-color: #ddd;font-size: 9px;padding-right: 5px;vertical-align: text-top;">
          Totale<br>
          senza IVA
        </th>
        <th style="width: 15%;text-align: right;background-color: #ddd;font-size: 9px;padding-right: 5px;vertical-align: text-top;">
          Totale<br>
          IVA
        </th>
        <th style="width: 26%;text-align: right;background-color: #ddd;font-size: 9px;padding-right: 5px;vertical-align: text-top;">
          Totale<br> con IVA
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
          <td style="vertical-align: text-top;padding: 3px;font-size: 9px;border: 1px solid #ddd;">
            <strong><?php echo mb_strtoupper($_smarty_tpl->tpl_vars['item']->value->sku, 'UTF-8');?>
</strong><br>
            <?php echo $_smarty_tpl->tpl_vars['item']->value->article_name;?>
<br>
            <?php if ((isset($_smarty_tpl->tpl_vars['item']->value->matrix->par_a)&&is_object($_smarty_tpl->tpl_vars['item']->value->matrix->par_a))&&(isset($_smarty_tpl->tpl_vars['item']->value->matrix->par_b)&&is_object($_smarty_tpl->tpl_vars['item']->value->matrix->par_b))) {?>
              <?php echo $_smarty_tpl->tpl_vars['item']->value->matrix->par_a->value;?>
 - <?php echo $_smarty_tpl->tpl_vars['item']->value->matrix->par_b->value;?>

            <?php }?>
          </td>
          <td class="number" style="vertical-align: text-top;text-align: right;padding: 3px;font-size: 9px;border: 1px solid #ddd;">
            <?php echo $_smarty_tpl->tpl_vars['item']->value->qty;?>

          </td>
          <td class="number" style="vertical-align: text-top;text-align: right;padding: 3px;font-size: 9px;border: 1px solid #ddd;">
            <?php echo $_smarty_tpl->tpl_vars['item']->value->retail_price;?>
&nbsp;<?php echo $_smarty_tpl->tpl_vars['order']->value->currency->iso_code;?>

          </td>
          <td class="td-center" style="vertical-align: text-top;text-align: center;padding: 3px;font-size: 9px;border: 1px solid #ddd;">
            IVA IT 22%
          </td>
          <td class="number" style="vertical-align: text-top;text-align: right;padding: 3px;font-size: 9px;border: 1px solid #ddd;">
            <?php echo $_smarty_tpl->tpl_vars['item']->value->retail_tax_price;?>
&nbsp;<?php echo $_smarty_tpl->tpl_vars['order']->value->currency->iso_code;?>

          </td>
          <td class="number" style="vertical-align: text-top;text-align: right;padding: 3px;font-size: 9px;border: 1px solid #ddd;">
            <?php echo $_smarty_tpl->tpl_vars['item']->value->amount_without_tax;?>
&nbsp;<?php echo $_smarty_tpl->tpl_vars['order']->value->currency->iso_code;?>

          </td>
          <td class="number" style="vertical-align: text-top;text-align: right;padding: 3px;font-size: 9px;border: 1px solid #ddd;">
            <?php echo $_smarty_tpl->tpl_vars['item']->value->tax;?>
&nbsp;<?php echo $_smarty_tpl->tpl_vars['order']->value->currency->iso_code;?>

          </td>
          <td class="number" style="vertical-align: text-top;text-align: right;padding: 3px;font-size: 9px;border: 1px solid #ddd;">
            <?php echo $_smarty_tpl->tpl_vars['item']->value->amount;?>
&nbsp;<?php echo $_smarty_tpl->tpl_vars['order']->value->currency->iso_code;?>

          </td>
        </tr>
      <?php } ?>
      <?php if (($_smarty_tpl->tpl_vars['personal_pickup']->value==false)&&($_smarty_tpl->tpl_vars['discount']->value==false)&&!is_null($_smarty_tpl->tpl_vars['delivery_cost']->value)) {?>
        <tr>
          <td style="vertical-align: text-top;padding: 3px;font-size: 9px;border: 1px solid #ddd;">
            <?php echo $_smarty_tpl->tpl_vars['delivery_cost']->value->delivery_name;?>

          </td>
          <td class="number" style="vertical-align: text-top;text-align: right;padding: 3px;font-size: 9px;border: 1px solid #ddd;">
            <?php echo $_smarty_tpl->tpl_vars['delivery_cost']->value->qty;?>

          </td>
          <td class="number" style="vertical-align: text-top;text-align: right;padding: 3px;font-size: 9px;border: 1px solid #ddd;">
            <?php echo $_smarty_tpl->tpl_vars['delivery_cost']->value->price;?>
&nbsp;<?php echo $_smarty_tpl->tpl_vars['order']->value->currency->iso_code;?>

          </td>
          <td class="td-center" style="vertical-align: text-top;text-align: center;padding: 3px;font-size: 9px;border: 1px solid #ddd;">
            <?php echo $_smarty_tpl->tpl_vars['delivery_cost']->value->tax_name;?>

          </td>
          <td class="number" style="vertical-align: text-top;text-align: right;padding: 3px;font-size: 9px;border: 1px solid #ddd;">
            <?php echo $_smarty_tpl->tpl_vars['delivery_cost']->value->price_tax;?>
&nbsp;<?php echo $_smarty_tpl->tpl_vars['order']->value->currency->iso_code;?>

          </td>
          <td class="number" style="vertical-align: text-top;text-align: right;padding: 3px;font-size: 9px;border: 1px solid #ddd;">
            <?php echo $_smarty_tpl->tpl_vars['delivery_cost']->value->price;?>
&nbsp;<?php echo $_smarty_tpl->tpl_vars['order']->value->currency->iso_code;?>

          </td>
          <td class="number" style="vertical-align: text-top;text-align: right;padding: 3px;font-size: 9px;border: 1px solid #ddd;">
            <?php echo $_smarty_tpl->tpl_vars['delivery_cost']->value->tax;?>
&nbsp;<?php echo $_smarty_tpl->tpl_vars['order']->value->currency->iso_code;?>

          </td>
          <td class="number" style="vertical-align: text-top;text-align: right;padding: 3px;font-size: 9px;border: 1px solid #ddd;">
            <?php echo $_smarty_tpl->tpl_vars['delivery_cost']->value->price_tax;?>
&nbsp;<?php echo $_smarty_tpl->tpl_vars['order']->value->currency->iso_code;?>

          </td>
        </tr>
      <?php }?>
    </tbody>
    <tfoot>
      <tr>
        <td colspan="5" style="vertical-align: text-top;padding: 0 5px;font-weight: bold;border: 1px solid #ddd;">
          Totale
        </td>
        <td class="number" style="vertical-align: text-top;text-align: right;padding: 0 5px;font-weight: bold;border: 1px solid #ddd;">
          <?php echo $_smarty_tpl->tpl_vars['order']->value->total_without_tax;?>
&nbsp;<?php echo $_smarty_tpl->tpl_vars['order']->value->currency->iso_code;?>

        </td>
        <td class="number" style="vertical-align: text-top;text-align: right;padding: 0 5px;font-weight: bold;border: 1px solid #ddd;">
          <?php echo $_smarty_tpl->tpl_vars['order']->value->total_tax;?>
&nbsp;<?php echo $_smarty_tpl->tpl_vars['order']->value->currency->iso_code;?>

        </td>
        <td class="number" style="vertical-align: text-top;text-align: right;padding: 0 5px;font-weight: bold;border: 1px solid #ddd;">
          <?php echo $_smarty_tpl->tpl_vars['order']->value->total_price;?>
&nbsp;<?php echo $_smarty_tpl->tpl_vars['order']->value->currency->iso_code;?>

        </td>
      </tr>
      <tr>
        <td colspan="7" style="vertical-align: text-top;padding: 0 5px;font-weight: bold;border: 1px solid #ddd;">
          <span style="font-size:16px;">Totale da pagare</span>
        </td>
        <td class="number" style="padding-right: 0px;vertical-align: text-top;text-align: right;padding: 0 5px;font-weight: bold;border: 1px solid #ddd;">
          <span style="font-size:16px;">
            <?php echo $_smarty_tpl->tpl_vars['order']->value->total_price;?>
&nbsp;<?php echo $_smarty_tpl->tpl_vars['order']->value->currency->iso_code;?>

          </span>
        </td>
      </tr>
    </tfoot>
  </table>
</div><?php }} ?>
