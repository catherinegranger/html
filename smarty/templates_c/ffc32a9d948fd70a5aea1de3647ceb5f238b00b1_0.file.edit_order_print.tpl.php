<?php
/* Smarty version 3.1.30, created on 2018-04-29 03:30:55
  from "/var/www/html/smarty/templates/amnprint/pages/edit_order_print.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5ae53c6f96fb77_89819659',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ffc32a9d948fd70a5aea1de3647ceb5f238b00b1' => 
    array (
      0 => '/var/www/html/smarty/templates/amnprint/pages/edit_order_print.tpl',
      1 => 1523659342,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ae53c6f96fb77_89819659 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div style="width:630px;margin-left:10px;">

<table><tr>
<td class="size14">Blue Danube Wine Company
<br/>Box 1011
<br/>Los Altos, CA 94023
<br/>T/F: (650) 941-4699
<br/>webshop@BlueDanubeWine.com
<br/>www.BlueDanubeWine.com</td>
<td style="width:15%;text-align:right;">
<table>
<tr><td style="text-align:center;white-space:nowrap;">Date</td>
<td style="text-align:center;white-space:nowrap;">Invoice #</td></tr>
<tr><td style="text-align:center;white-space:nowrap;"><?php echo $_smarty_tpl->tpl_vars['date']->value;?>
</td>
<td style="text-align:center;white-space:nowrap;">W<?php echo $_smarty_tpl->tpl_vars['o_id']->value;?>
</td></tr>
</table>
</td></tr></table>
<br/><br/>
<table cellpadding="4" cellspacing="0" border="0" width="100%">
<tr>
<td style="width:50%;">
<b>Bill To:</b><br />
<?php echo $_smarty_tpl->tpl_vars['first_name']->value;?>
 <?php echo $_smarty_tpl->tpl_vars['last_name']->value;?>
<br />
<?php echo $_smarty_tpl->tpl_vars['address1']->value;?>

<?php if ($_smarty_tpl->tpl_vars['address2']->value) {?><br /><?php echo $_smarty_tpl->tpl_vars['address2']->value;
}?><br />
<?php echo $_smarty_tpl->tpl_vars['city']->value;?>
, <?php echo $_smarty_tpl->tpl_vars['state']->value;?>
 <?php echo $_smarty_tpl->tpl_vars['zipcode']->value;?>
<br />
<?php echo $_smarty_tpl->tpl_vars['email']->value;?>
<br />
<?php echo $_smarty_tpl->tpl_vars['phone']->value;?>
<br />
</td>
<td style="width:50%;">
<?php if ($_smarty_tpl->tpl_vars['ship_first_name']->value) {?>
<b>Ship To:</b><br />
<?php echo $_smarty_tpl->tpl_vars['ship_first_name']->value;?>
 <?php echo $_smarty_tpl->tpl_vars['ship_last_name']->value;?>
<br />
<?php echo $_smarty_tpl->tpl_vars['ship_address1']->value;?>

<?php if ($_smarty_tpl->tpl_vars['ship_address2']->value) {?><br /><?php echo $_smarty_tpl->tpl_vars['ship_address2']->value;
}?><br />
<?php echo $_smarty_tpl->tpl_vars['ship_city']->value;?>
, <?php echo $_smarty_tpl->tpl_vars['ship_state']->value;?>
 <?php echo $_smarty_tpl->tpl_vars['ship_zipcode']->value;?>
<br />
<?php echo $_smarty_tpl->tpl_vars['ship_email']->value;?>
<br />
<?php echo $_smarty_tpl->tpl_vars['ship_phone']->value;?>
<br />
<?php } else { ?>
<b>Same as Billing</b>
<?php }?>
</td>
</tr>
</table>
<br/><b>Terms:</b> <?php echo $_smarty_tpl->tpl_vars['payment_method']->value;?>

<br/><b>Ship Via:</b> <?php echo $_smarty_tpl->tpl_vars['shipping_method']->value;?>

<?php if ($_smarty_tpl->tpl_vars['discount_name']->value) {?>
<br/><b>Offer Code:</b> <?php echo $_smarty_tpl->tpl_vars['discount_name']->value;?>

<?php }?>
<br/><br/>
<table  cellpadding="4" cellspacing="0">
<tr>
<td style="width:50%;"><b>Description</b></td>
<td style="width:7%;text-align:right;"><b>Quantity</b></td>
<td style="width:9%;text-align:right;"><b>Price Each</b></td>
<td style="width:9%;text-align:right;"><b>Amount</b></td>
</tr>
<tr><td colspan="4" style="border-top: 1px solid #aeaeae; padding: 3px;"></td></tr>
<?php
$__section_bit_0_saved = isset($_smarty_tpl->tpl_vars['__smarty_section_bit']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit'] : false;
$__section_bit_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['items']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_bit_0_total = $__section_bit_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_bit'] = new Smarty_Variable(array());
if ($__section_bit_0_total != 0) {
for ($__section_bit_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] = 0; $__section_bit_0_iteration <= $__section_bit_0_total; $__section_bit_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']++){
?>
<tr>
<td style="white-space:nowrap;"><?php echo $_smarty_tpl->tpl_vars['items']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['ident'];?>
</td>
<td style="text-align:right;"><?php echo $_smarty_tpl->tpl_vars['items']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['quantity'];?>
</td>
<td style="text-align:right;white-space:nowrap;"><?php if ($_smarty_tpl->tpl_vars['items']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['base_price'] > $_smarty_tpl->tpl_vars['items']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['price']) {?><strike>$<?php echo $_smarty_tpl->tpl_vars['items']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['base_price'];?>
</strike> <?php }?> $<?php echo $_smarty_tpl->tpl_vars['items']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['price'];?>
</td>
<td style="text-align:right;">$<?php echo $_smarty_tpl->tpl_vars['items']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['total_price'];?>
</td>
</tr>
<?php
}
}
if ($__section_bit_0_saved) {
$_smarty_tpl->tpl_vars['__smarty_section_bit'] = $__section_bit_0_saved;
}
if ($_smarty_tpl->tpl_vars['bonus_bottle']->value) {?>
<tr><td>Bonus Bottle</td><td style="text-align:right;"><?php echo $_smarty_tpl->tpl_vars['bonus_bottle']->value;?>
</td><td style="text-align:right;">$0.00</td><td style="text-align:right;">$0.00</td></tr>
<?php }?>
<tr><td colspan="4" style="border-top: 1px solid #aeaeae; padding-top:3px;"></td></tr>
<tr>
<td colspan="3" style="text-align:right;white-space:nowrap;">Sales Tax (8.75%):</td>
<td colspan="1" style="text-align:right;">$<?php echo $_smarty_tpl->tpl_vars['tax']->value;?>
</td></tr>
<tr><td colspan="3" style="text-align:right;">Shipping:</td>
<td colspan="1" style="text-align:right;">$<?php echo $_smarty_tpl->tpl_vars['shipping']->value;?>
</td></tr>
<?php if ($_smarty_tpl->tpl_vars['wine_club']->value && $_smarty_tpl->tpl_vars['shipping_savings']->value > 0) {?>
<tr><td colspan="4" style="text-align:right;"><b>Vino Danubia Shipping Savings: $<?php echo $_smarty_tpl->tpl_vars['shipping_savings']->value;?>
</b></td></tr>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['adult_signature']->value > 0) {?>
<tr><td colspan="3" style="text-align:right;">Adult Signature:</td>
<td colspan="1" style="text-align:right;">$<?php echo $_smarty_tpl->tpl_vars['adult_signature']->value;?>
</td></tr>
<?php }
if ($_smarty_tpl->tpl_vars['wine_club']->value && $_smarty_tpl->tpl_vars['adult_signature_savings']->value > 0) {?>
<tr><td colspan="4" style="text-align:right;"><b>Vino Danubia Adult Signature savings: $<?php echo $_smarty_tpl->tpl_vars['adult_signature_savings']->value;?>
</b></td></tr>
<?php }
if ($_smarty_tpl->tpl_vars['include_card_cost']->value > 0) {?>
<tr><td colspan="3" style="text-align:right;">Greeting Card:</td>
<td colspan="1" style="text-align:right;">$<?php echo $_smarty_tpl->tpl_vars['include_card_cost']->value;?>
</td></tr>
<?php }?>
<tr><td colspan="4" style="border-top: 1px solid #aeaeae; padding-top:3px;"></td></tr>
<?php if ($_smarty_tpl->tpl_vars['giftcard_id']->value > 0) {?>
<tr><td colspan="2" style="white-space:nowrap;"></td>
<td colspan="1" class="pix14" style="text-align:right;">Total:</td>
<td colspan="1" class="pix14" style="text-align:right;">$<?php echo $_smarty_tpl->tpl_vars['grand_total']->value;?>
</td></tr>
<tr><td colspan="2" style="white-space:nowrap;"></td>
<td colspan="1" class="pix14" style="text-align:right;white-space:nowrap;">Gift Card Payment:</td>
<td colspan="1" class="pix14" style="text-align:right;white-space:nowrap;">-$<?php echo $_smarty_tpl->tpl_vars['giftcard_payment']->value;?>
</td></tr>
<tr><td colspan="2" style="white-space:nowrap;"></td>
<td colspan="1" class="pix16" style="text-align:right;white-space:nowrap;"><b>Grand Total:</b></td>
<td colspan="1" class="pix14" style="text-align:right;"><b>$<?php echo $_smarty_tpl->tpl_vars['giftcard_total']->value;?>
</b></td></tr>
<?php } else { ?>
<tr><td colspan="2" style="white-space:nowrap;"></td>
<td colspan="1" class="pix16" style="text-align:right;"><b>Total:</b></td>
<td colspan="1" class="pix14" style="text-align:right;"><b>$<?php echo $_smarty_tpl->tpl_vars['grand_total']->value;?>
</b></td></tr>
<?php }?>
<tr><td colspan="4">
<center>
<div> 
<div class="size30" style="margin:20px 0px 25px 0px;font-family:Arial,Helvetica,serif;font-style:oblique;font-weight:stronger;font-size:30px;">Thank you for Your Order!</div>
<div class="size15" style="margin-bottom:5px;margin-left:0px;font-family:Arial,Helvetica,serif;font-style:italic;font-weight:stronger;">We appreciate your business and hope</div>
<div class="size15" style="margin-bottom:5px;margin-left:0px;font-family:Arial,Helvetica,serif;font-style:italic;font-weight:stronger;">you'll enjoy our wine with friends and family</div>
</div>
</center>
</td></tr>
</table>


<?php }
}
