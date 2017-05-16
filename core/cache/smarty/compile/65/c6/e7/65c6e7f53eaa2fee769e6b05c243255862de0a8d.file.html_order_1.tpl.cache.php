<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-05-23 16:24:16
         compiled from "/Users/henrich/Work/SlatyFork/carpedm.mozayc.net/app/themes/default/store/docs/html_order_1.tpl" */ ?>
<?php /*%%SmartyHeaderCode:182830195957432eb0a3bad4-47919462%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '65c6e7f53eaa2fee769e6b05c243255862de0a8d' => 
    array (
      0 => '/Users/henrich/Work/SlatyFork/carpedm.mozayc.net/app/themes/default/store/docs/html_order_1.tpl',
      1 => 1463590874,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '182830195957432eb0a3bad4-47919462',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'datetime' => 0,
    'orderId' => 0,
    'order' => 0,
    'isDiscount' => 0,
    'item' => 0,
    'isPersonalPickUp' => 0,
    'deliveryCost' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_57432eb0a95bd3_67341271',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57432eb0a95bd3_67341271')) {function content_57432eb0a95bd3_67341271($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include '/Users/henrich/Work/SlatyFork/carpedm.mozayc.net/core/lib/smarty/plugins/modifier.date_format.php';
?><div style="margin: 0;padding: 0;font-family: DejaVu Sans, sans-serif;font-size: 12px;">
  <div class="fa-number" style="background-color: #ddd;width: 100%;height: 44px;padding: 0 15px;">
    <p style="font-size: 15px;font-weight: bold;line-height: 40px;text-transform: uppercase;">
      Objednávka <span style="font-size: 13px;text-transform: none;">číslo</span>: <?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['datetime']->value,"%Y%m%d");
echo $_smarty_tpl->tpl_vars['orderId']->value;?>
 - <?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['datetime']->value,"%Y/%m/%d");?>
&nbsp;|&nbsp;<?php echo $_smarty_tpl->tpl_vars['order']->value->reference;?>

    </p>
  </div>
  <table class="fa-header" style="border-collapse: collapse;width: 100%;margin-top: 5px;border: 1px solid #ddd;">
    <tbody>
        <tr>
          <td class="fa-header-left" style="vertical-align: text-top;padding: 5px;width: 49.4%;height: 226.771653543px;border-right: 1px solid #ddd;">
            <h4 style="margin: 0 0 10px 0;padding: 0;line-height: 100%;">
              Dodávateľ:
            </h4>
            <p style="margin: 0 0 10px 0;padding: 0;line-height: 100%;">
              <strong>CARPE DM, s. r. o.</strong><br>
              Tatranská 243<br>
              059 86 Nová Lesná
              <br><br>
              OR OS Prešov, 
              Oddiel: Sro, 
              Vložka číslo: 24408/P
            </p>
            <table class="t-inline" style="margin-top: 15px;border-collapse: collapse;">
              <tbody>
                <tr>
                  <td width="30%" style="vertical-align: text-top;padding: 0px;">
                    E-mail:
                  </td>
                  <td width="70%" style="vertical-align: text-top;padding: 0px;">
                    estore@carpedmfashion.com
                  </td>
                </tr>
                <tr>
                  <td width="30%" style="vertical-align: text-top;padding: 0px;">
                    Telefón:
                  </td>
                  <td width="70%" style="vertical-align: text-top;padding: 0px;">
                    +421 52 381 11 87 
                  </td>
                </tr>
                <tr>
                  <td width="30%" style="vertical-align: text-top;padding: 0px;">
                    IČO:
                  </td>
                  <td width="70%" style="vertical-align: text-top;padding: 0px;">
                    46171096
                  </td>
                </tr>
                <tr>
                  <td width="30%" style="vertical-align: text-top;padding: 0px;">
                    DIČ:
                  </td>
                  <td width="70%" style="vertical-align: text-top;padding: 0px;">
                    2023261746
                  </td>
                </tr>
                <tr>
                  <td width="30%" style="vertical-align: text-top;padding: 0px;">
                    IČ DPH:
                  </td>
                  <td width="70%" style="vertical-align: text-top;padding: 0px;">
                    SK2023261746
                  </td>
                </tr>
                <tr>
                  <td width="30%" style="vertical-align: text-top;padding: 0px;">
                    Banka
                  </td>
                  <td width="70%" style="vertical-align: text-top;padding: 0px;">
                    VUB BANKA, a. s.
                  </td>
                </tr>
                <tr>
                  <td width="30%" style="vertical-align: text-top;padding: 0px;">
                    Účet (IBAN):
                  </td>
                  <td width="70%" style="vertical-align: text-top;padding: 0px;">
                    SK62 0200 0000 0028 9171 0354
                  </td>
                </tr>
                <tr>
                  <td width="30%" style="vertical-align: text-top;padding: 0px;">
                    SWIFT:
                  </td>
                  <td width="70%" style="vertical-align: text-top;padding: 0px;">
                    SUBASKBX
                  </td>
                </tr>
                <tr>
                  <td width="30%" style="vertical-align: text-top;padding: 0px;">
                    Variabilný symbol:
                  </td>
                  <td width="70%" style="vertical-align: text-top;padding: 0px;">
                    <?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['datetime']->value,"%Y%m%d");
echo $_smarty_tpl->tpl_vars['orderId']->value;?>

                  </td>
                </tr>
              </tbody>
            </table>
          </td>
          <td class="fa-header-right" style="vertical-align: text-top;padding: 5px;width: 49.4%;height: 226.771653543px;border-left: 1px solid #ddd;">
            <h4 style="margin: 0 0 10px 0;padding: 0;line-height: 100%;">
              Odberateľ:
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
                    Telefón:
                  </td>
                  <td width="70%" style="vertical-align: text-top;padding: 0px;">
                    <?php echo $_smarty_tpl->tpl_vars['order']->value->address->invoice->phone;?>

                  </td>
                </tr>
                <tr>
                  <td width="30%" style="vertical-align: text-top;padding: 0px;">
                    Firma:
                  </td>
                  <td width="70%" style="vertical-align: text-top;padding: 0px;">
                    <?php if (!empty($_smarty_tpl->tpl_vars['order']->value->address->invoice->company_name)) {
echo $_smarty_tpl->tpl_vars['order']->value->address->invoice->company_name;
} else { ?>-<?php }?>
                  </td>
                </tr>
                <tr>
                  <td width="30%" style="vertical-align: text-top;padding: 0px;">
                    IČO:
                  </td>
                  <td width="70%" style="vertical-align: text-top;padding: 0px;">
                    <?php if (!empty($_smarty_tpl->tpl_vars['order']->value->address->invoice->company_reg_number)) {
echo $_smarty_tpl->tpl_vars['order']->value->address->invoice->company_reg_number;
} else { ?>-<?php }?>
                  </td>
                </tr>
                <tr>
                  <td width="30%" style="vertical-align: text-top;padding: 0px;">
                    DIČ:
                  </td>
                  <td width="70%" style="vertical-align: text-top;padding: 0px;">
                    <?php if (!empty($_smarty_tpl->tpl_vars['order']->value->address->invoice->vat)) {
echo $_smarty_tpl->tpl_vars['order']->value->address->invoice->vat;
} else { ?>-<?php }?>
                  </td>
                </tr>
                <tr>
                  <td width="30%" style="vertical-align: text-top;padding: 0px;">
                    IČ DPH:
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
          Spôsob platby:
        </td>
        <td width="70%" style="vertical-align: text-top;padding: 0 5px;">
          <?php echo $_smarty_tpl->tpl_vars['order']->value->payment->payment_name;?>

        </td>
      </tr>
      <tr>
        <td width="30%" style="vertical-align: text-top;padding: 0 5px;">
          Spôsob dopravy:
        </td>
        <td width="70%" style="vertical-align: text-top;padding: 0 5px;">
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
        <td width="30%" style="vertical-align: text-top;padding: 0 5px;">
          Dátum dodania tovaru/služby:
        </td>
        <td width="70%" style="vertical-align: text-top;padding: 0 5px;">
          <?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['datetime']->value,"%Y.%m.%d");?>

        </td>
      </tr>
      <tr>
        <td width="30%" style="vertical-align: text-top;padding: 0 5px;">
          Dátum vystavenia dokladu:
        </td>
        <td width="70%" style="vertical-align: text-top;padding: 0 5px;">
          <?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['datetime']->value,"%Y.%m.%d");?>

        </td>
      </tr>
      <tr>
        <td width="30%" style="vertical-align: text-top;padding: 0 5px;">
          Dátum splatnosti:
        </td>
        <td width="70%" style="vertical-align: text-top;padding: 0 5px;">
          <?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['datetime']->value,"%Y.%m.%d");?>

        </td>
      </tr>
    </tbody>
  </table>
  <table class="fa-al" style="border-collapse: collapse;width: 100%;margin-top: 5px;border: 1px solid #ddd;">
    <thead>
      <tr>
        <th style="width: 21%;text-align: center;background-color: #ddd;font-size: 9px;padding-right: 5px;vertical-align: text-top;">
          (Číslo produktu)<br> Objednaný tovar
        </th>
        <th style="width: 5%;text-align: center;background-color: #ddd;font-size: 9px;padding-right: 5px;vertical-align: text-top;">
          Ks
        </th>
        <th style="width: 10%;text-align: center;background-color: #ddd;font-size: 9px;padding-right: 5px;vertical-align: text-top;">
          Cena / Ks
        </th>
        <th style="background-color: #ddd;font-size: 9px;padding-right: 5px;vertical-align: text-top;">
          DPH
        </th>
        <th style="width: 10%;text-align: right;background-color: #ddd;font-size: 9px;padding-right: 5px;vertical-align: text-top;">
          Cena / ks<br> 
          s DPH
        </th>
        <th style="width: 15%;text-align: right;background-color: #ddd;font-size: 9px;padding-right: 5px;vertical-align: text-top;">
          Celkom<br>
          bez DPH
        </th>
        <th style="width: 15%;text-align: right;background-color: #ddd;font-size: 9px;padding-right: 5px;vertical-align: text-top;">
          Celkom<br>
          DPH
        </th>
        <th style="width: 26%;text-align: right;background-color: #ddd;font-size: 9px;padding-right: 5px;vertical-align: text-top;">
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
<br>
            / ks
          </td>
          <td class="td-center" style="vertical-align: text-top;text-align: center;padding: 3px;font-size: 9px;border: 1px solid #ddd;">
            <?php echo $_smarty_tpl->tpl_vars['order']->value->tax->tax_name;?>

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
      <?php if ($_smarty_tpl->tpl_vars['isPersonalPickUp']->value==false&&$_smarty_tpl->tpl_vars['isDiscount']->value==false&&!is_null($_smarty_tpl->tpl_vars['deliveryCost']->value)) {?>
        <tr>
          <td style="vertical-align: text-top;padding: 3px;font-size: 9px;border: 1px solid #ddd;">
            <?php echo $_smarty_tpl->tpl_vars['deliveryCost']->value->delivery_name;?>

          </td>
          <td class="number" style="vertical-align: text-top;text-align: right;padding: 3px;font-size: 9px;border: 1px solid #ddd;">
            <?php echo $_smarty_tpl->tpl_vars['deliveryCost']->value->qty;?>

          </td>
          <td class="number" style="vertical-align: text-top;text-align: right;padding: 3px;font-size: 9px;border: 1px solid #ddd;">
            <?php echo $_smarty_tpl->tpl_vars['deliveryCost']->value->price;?>
&nbsp;<?php echo $_smarty_tpl->tpl_vars['order']->value->currency->iso_code;?>

          </td>
          <td class="td-center" style="vertical-align: text-top;text-align: center;padding: 3px;font-size: 9px;border: 1px solid #ddd;">
            <?php echo $_smarty_tpl->tpl_vars['deliveryCost']->value->tax_name;?>

          </td>
          <td class="number" style="vertical-align: text-top;text-align: right;padding: 3px;font-size: 9px;border: 1px solid #ddd;">
            <?php echo $_smarty_tpl->tpl_vars['deliveryCost']->value->price_tax;?>
&nbsp;<?php echo $_smarty_tpl->tpl_vars['order']->value->currency->iso_code;?>

          </td>
          <td class="number" style="vertical-align: text-top;text-align: right;padding: 3px;font-size: 9px;border: 1px solid #ddd;">
            <?php echo $_smarty_tpl->tpl_vars['deliveryCost']->value->price;?>
&nbsp;<?php echo $_smarty_tpl->tpl_vars['order']->value->currency->iso_code;?>

          </td>
          <td class="number" style="vertical-align: text-top;text-align: right;padding: 3px;font-size: 9px;border: 1px solid #ddd;">
            <?php echo $_smarty_tpl->tpl_vars['deliveryCost']->value->tax;?>
&nbsp;<?php echo $_smarty_tpl->tpl_vars['order']->value->currency->iso_code;?>

          </td>
          <td class="number" style="vertical-align: text-top;text-align: right;padding: 3px;font-size: 9px;border: 1px solid #ddd;">
            <?php echo $_smarty_tpl->tpl_vars['deliveryCost']->value->price_tax;?>
&nbsp;<?php echo $_smarty_tpl->tpl_vars['order']->value->currency->iso_code;?>

          </td>
        </tr>
      <?php }?>
    </tbody>
    <tfoot>
      <tr>
        <td colspan="5" style="vertical-align: text-top;padding: 0 5px;font-weight: bold;border: 1px solid #ddd;">
          Celkom
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
          <span style="font-size:16px;">Celkom k úhrade</span>
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
