<?php
/* Smarty version 3.1.30, created on 2018-05-02 22:16:08
  from "/var/www/html/smarty/templates/pages/view_order.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5aea38a843b7a0_12161972',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9f516eb63c0c97e424b44d57b57461a8f16d6dea' => 
    array (
      0 => '/var/www/html/smarty/templates/pages/view_order.tpl',
      1 => 1523659342,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5aea38a843b7a0_12161972 (Smarty_Internal_Template $_smarty_tpl) {
if (!$_smarty_tpl->tpl_vars['order_found']->value) {?>
<div class="ucvalidation">
&bull;&nbsp;Sorry, we cannot access this order: permission denied
</div>
<?php } else { ?>

<article class="view_order">
<h1>View Order</h1>

<div class="some_space">

<h4 style="margin:1em 0em 1em 0em">Order Information:</h4>

<div class="div_l">

<table >
<tr><td colspan="4" style="border-top: 1px solid #000000; padding:3px;"></td></tr>
<tr>
<td style="width:80%;"><b>Item</b></td>
<td style="width:5%;" class="alignRight"><b>Quantity</b></td>
<td style="width:10%;" class="alignRight nowrap"><b>Unit Price</b></td>
<td style="width:15%;" class="alignRight"><b>Total</b></td>
</tr>
<tr><td colspan="4" class="dotted"></td></tr>
<?php
$__section_bit_0_saved = isset($_smarty_tpl->tpl_vars['__smarty_section_bit']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit'] : false;
$__section_bit_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['items']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_bit_0_total = $__section_bit_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_bit'] = new Smarty_Variable(array());
if ($__section_bit_0_total != 0) {
for ($__section_bit_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] = 0; $__section_bit_0_iteration <= $__section_bit_0_total; $__section_bit_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']++){
?>
<tr>
<td><?php echo $_smarty_tpl->tpl_vars['items']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['ident'];?>
</td>
<td class="alignRight"><?php if ($_smarty_tpl->tpl_vars['items']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['quantity'] > '0') {
echo $_smarty_tpl->tpl_vars['items']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['quantity'];
}?></td>
<td class="alignRight nowrap" ><?php if ($_smarty_tpl->tpl_vars['items']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['base_price'] > $_smarty_tpl->tpl_vars['items']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['price']) {?><strike>$<?php echo $_smarty_tpl->tpl_vars['items']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['base_price'];?>
</strike> <?php }?> $<?php echo $_smarty_tpl->tpl_vars['items']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['price'];?>
</td>
<td class="alignRight">$<?php echo $_smarty_tpl->tpl_vars['items']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['total_price'];?>
</td>
</tr>
<?php
}
}
if ($__section_bit_0_saved) {
$_smarty_tpl->tpl_vars['__smarty_section_bit'] = $__section_bit_0_saved;
}
?>
<tr><td colspan="4" class="topdotted"></td></tr>
<tr><td colspan="3" class="alignRight">Tax:</td>
<td colspan="1" class="alignRight">$<?php echo $_smarty_tpl->tpl_vars['order']->value['tax'];?>
</td></tr>
<tr><td colspan="3" class="alignRight">Shipping:</td>
<td colspan="1" class="alignRight">$<?php echo $_smarty_tpl->tpl_vars['order']->value['shipping'];?>
</td></tr>
<?php if ($_smarty_tpl->tpl_vars['wine_club']->value && $_smarty_tpl->tpl_vars['order']->value['shipping_savings'] > 0) {?>
<tr><td colspan="4" class="bld alignRight">Vino Danubia Shipping Savings: $<?php echo $_smarty_tpl->tpl_vars['order']->value['shipping_savings'];?>
</td></tr>
<?php }
if ($_smarty_tpl->tpl_vars['order']->value['adult_signature'] > 0) {?>
<tr><td colspan="3" class="alignRight">Adult Signature:</td>
<td colspan="1" class="alignRight">$<?php echo $_smarty_tpl->tpl_vars['order']->value['adult_signature'];?>
</td></tr>
<?php }
if ($_smarty_tpl->tpl_vars['wine_club']->value && $_smarty_tpl->tpl_vars['order']->value['adult_signature_savings'] > 0) {?>
<tr><td colspan="4" class="bld alignRight">Vino Danubia Adult Signature savings: $<?php echo $_smarty_tpl->tpl_vars['order']->value['adult_signature_savings'];?>
</td></tr>
<?php }
if ($_smarty_tpl->tpl_vars['order']->value['include_card_cost'] > 0) {?>
<tr><td colspan="3" class="alignRight">Greeting Card:</td>
<td colspan="1" class="alignRight">$<?php echo $_smarty_tpl->tpl_vars['order']->value['include_card_cost'];?>
</td></tr>
<?php }?>
<tr><td colspan="4" class="topdotted"></td></tr>
<?php if ($_smarty_tpl->tpl_vars['order']->value['giftcard_id'] > 0) {?>
<tr><td colspan="3" class="pix14 rdd bld alignRight">Total:</td>
<td colspan="1" class="pix14 bld alignRight">$<?php echo $_smarty_tpl->tpl_vars['order']->value['grand_total'];?>
</td></tr>
<tr><td colspan="3" class="pix14 rdd bld alignRight">Gift Card Payment:</td>
<td colspan="1" class="pix14 bld alignRight nowrap">-$<?php echo $_smarty_tpl->tpl_vars['order']->value['giftcard_payment'];?>
</td></tr>
<tr><td colspan="3" class="pix14 rdd bld alignRight">Grand Total:</td>
<td colspan="1" class="pix14 bld alignRight">$<?php echo $_smarty_tpl->tpl_vars['order']->value['giftcard_total'];?>
</td></tr>
<?php } else { ?>
<tr><td colspan="3" class="pix14 rdd bld alignRight">Order Total:</td>
<td colspan="1" class="pix14 bld alignRight">$<?php echo $_smarty_tpl->tpl_vars['order']->value['grand_total'];?>
</td></tr>
<?php }?>
<tr><td colspan="4" style="border-bottom: 1px solid #000000; padding:3px;"></td></tr>
<tr><td colspan="4">&nbsp;</td></tr>
</table>
</div>

<div class="div_p">
<table>
<tr>
<td colspan="2" style="width:90%;" class="bld">Item</td>
<td colspan="1" style="width:10%;" class="bld alignRight">Total</td>
</tr>
<tr><td colspan="3" class="dotted"></td></tr>
<?php
$__section_bit_1_saved = isset($_smarty_tpl->tpl_vars['__smarty_section_bit']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit'] : false;
$__section_bit_1_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['items']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_bit_1_total = $__section_bit_1_loop;
$_smarty_tpl->tpl_vars['__smarty_section_bit'] = new Smarty_Variable(array());
if ($__section_bit_1_total != 0) {
for ($__section_bit_1_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] = 0; $__section_bit_1_iteration <= $__section_bit_1_total; $__section_bit_1_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']++){
?>
<tr>
<td class="alignRight" style="width:1%;">
<?php if ($_smarty_tpl->tpl_vars['items']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['quantity'] > '0') {
echo $_smarty_tpl->tpl_vars['items']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['quantity'];
}?>
</td>
<td><?php echo $_smarty_tpl->tpl_vars['items']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['product_name'];?>

<?php if ($_smarty_tpl->tpl_vars['items']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['base_price'] > $_smarty_tpl->tpl_vars['items']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['price']) {?><strike>$<?php echo $_smarty_tpl->tpl_vars['items']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['base_price'];?>
</strike> <?php }?> $<?php echo $_smarty_tpl->tpl_vars['items']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['price'];?>

</td>
<td class="alignRight">$<?php echo $_smarty_tpl->tpl_vars['items']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['total_price'];?>
</td>
</tr>
<?php
}
}
if ($__section_bit_1_saved) {
$_smarty_tpl->tpl_vars['__smarty_section_bit'] = $__section_bit_1_saved;
}
?>
<tr><td colspan="3" class="topdotted"></td></tr>
<tr><td colspan="2" class="alignRight">Tax:</td>
<td colspan="1" class="alignRight">$<?php echo $_smarty_tpl->tpl_vars['order']->value['tax'];?>
</td></tr>
<tr><td colspan="2" class="alignRight">Shipping:</td>
<td colspan="1" class="alignRight">$<?php echo $_smarty_tpl->tpl_vars['order']->value['shipping'];?>
</td></tr>
<?php if ($_smarty_tpl->tpl_vars['wine_club']->value && $_smarty_tpl->tpl_vars['order']->value['shipping_savings'] > 0) {?>
<tr><td colspan="3" class="bld alignRight">Vino Danubia Shipping Savings: $<?php echo $_smarty_tpl->tpl_vars['order']->value['shipping_savings'];?>
</td></tr>
<?php }
if ($_smarty_tpl->tpl_vars['order']->value['adult_signature'] > 0) {?>
<tr><td colspan="2" class="alignRight">Adult Signature:</td>
<td colspan="1" class="alignRight">$<?php echo $_smarty_tpl->tpl_vars['order']->value['adult_signature'];?>
</td></tr>
<?php }
if ($_smarty_tpl->tpl_vars['wine_club']->value && $_smarty_tpl->tpl_vars['order']->value['adult_signature_savings'] > 0) {?>
<tr><td colspan="3" class="bld alignRight">Vino Danubia Adult Signature savings: $<?php echo $_smarty_tpl->tpl_vars['order']->value['adult_signature_savings'];?>
</td></tr>
<?php }
if ($_smarty_tpl->tpl_vars['order']->value['include_card_cost'] > 0) {?>
<tr><td colspan="2" class="alignRight">Greeting Card:</td>
<td colspan="1" class="alignRight">$<?php echo $_smarty_tpl->tpl_vars['order']->value['include_card_cost'];?>
</td></tr>
<?php }?>
<tr><td colspan="3" class="topdotted"></td></tr>
<?php if ($_smarty_tpl->tpl_vars['order']->value['giftcard_id'] > 0) {?>
<tr><td colspan="2" class="pix14 rdd bld alignRight">Total:</td>
<td colspan="1" class="pix14 bld alignRight">$<?php echo $_smarty_tpl->tpl_vars['order']->value['grand_total'];?>
</td></tr>
<tr><td colspan="2" class="pix14 rdd bld alignRight">Gift Card Payment:</td>
<td colspan="1" class="pix14 bld alignRight nowrap">-$<?php echo $_smarty_tpl->tpl_vars['order']->value['giftcard_payment'];?>
</td></tr>
<tr><td colspan="2" class="pix14 rdd bld alignRight">Grand Total:</td>
<td colspan="1" class="pix14 bld alignRight">$<?php echo $_smarty_tpl->tpl_vars['order']->value['giftcard_total'];?>
</td></tr>
<?php } else { ?>
<tr><td colspan="2" class="pix14 rdd bld alignRight">Order Total:</td>
<td colspan="1" class="pix14 rdd bld alignRight">$<?php echo $_smarty_tpl->tpl_vars['order']->value['grand_total'];?>
</td></tr>
<?php }?>
</table>
</div>
</div>
<div class="clean"></div>

<div class="view_order">
<h4>Payment Information:</h4>
<div class="bdgrid6first billship">
<table>
<tr><td class="alignRight" nowrap>Invoice Number:</td><td style="width:80%;"><?php echo $_smarty_tpl->tpl_vars['order']->value['invoice_number'];?>
</td></tr>
<tr><td class="alignRight" nowrap>Payment Method:</td><td style="width:80%;"><?php echo $_smarty_tpl->tpl_vars['order']->value['payment_method'];?>
 <?php echo $_smarty_tpl->tpl_vars['order']->value['account_number'];?>
</td></tr>
<?php if ($_smarty_tpl->tpl_vars['order']->value['giftcard_id'] > 0) {?>
<tr><td class="alignRight" nowrap>Gift Card Balance:</td><td style="width:80%;">$<?php echo $_smarty_tpl->tpl_vars['order']->value['giftcard_balance'];?>
</td></tr>
<?php }?>
</table>
</div>
<div class="bdgrid6last billship">
<table>
<tr><td class="alignRight" style="width:5%;" nowrap>Placed:</td><td style="width:95%;"><?php echo $_smarty_tpl->tpl_vars['order']->value['placed'];?>
</td></tr>
<tr><td class="alignRight" nowrap>Status:</td><td style="width:80%;"><?php echo $_smarty_tpl->tpl_vars['order']->value['status'];?>
 on <?php echo $_smarty_tpl->tpl_vars['order']->value['status_timestamp'];?>
</td></tr>
</table>
</div>
</div>
<div class="clean"></div>


<div class="view_order some_space2">
<div class="bdgrid6first billship">
<h4>Billing Information:</h4>
<table>
<tr><td class="alignRight" style="width:20%;">Name:</td><td style="width:80%;"><?php echo $_smarty_tpl->tpl_vars['recipient']->value['name'];?>
</td></tr>
<?php if ($_smarty_tpl->tpl_vars['recipient']->value['address'] || $_smarty_tpl->tpl_vars['order']->value['address']) {?>
<tr><td class="alignRight">Address:</td><td><?php echo $_smarty_tpl->tpl_vars['recipient']->value['address'];?>
</td></tr>
<?php }
if ($_smarty_tpl->tpl_vars['recipient']->value['city'] || $_smarty_tpl->tpl_vars['order']->value['city']) {?>
<tr><td class="alignRight">City:</td><td><?php echo $_smarty_tpl->tpl_vars['recipient']->value['city'];?>
</td></tr>
<?php }
if ($_smarty_tpl->tpl_vars['recipient']->value['email'] || $_smarty_tpl->tpl_vars['order']->value['email']) {?>
<tr><td class="alignRight">Email:</td><td><?php echo $_smarty_tpl->tpl_vars['recipient']->value['email'];?>
</td></tr>
<?php }
if ($_smarty_tpl->tpl_vars['recipient']->value['phone'] || $_smarty_tpl->tpl_vars['order']->value['phone']) {?>
<tr><td class="alignRight">Phone:</td><td><?php echo $_smarty_tpl->tpl_vars['recipient']->value['phone'];?>
</td></tr>
<?php }
if ($_smarty_tpl->tpl_vars['order']->value['need_by_date']) {?>
<tr><td colspan="2">Needed By: <?php echo $_smarty_tpl->tpl_vars['order']->value['need_by_date'];?>
</td></tr>
<?php }
if ($_smarty_tpl->tpl_vars['order']->value['instructions']) {?>
<tr><td colspan="2">Instructions: <?php echo $_smarty_tpl->tpl_vars['order']->value['instructions'];?>
</td></tr>
<?php }
if ($_smarty_tpl->tpl_vars['order']->value['include_card_msg']) {?>
<tr><td colspan="2">Personalised Message: <?php echo $_smarty_tpl->tpl_vars['order']->value['include_card_msg'];?>
</td></tr>
<?php }?>
</table>
</div>

<div class="bdgrid6last billship">
<h4>Shipping Information:</h4>
<table>
<tr><td class="alignRight" style="width:20%;">Name:</td><td style="width:80%;"><?php echo $_smarty_tpl->tpl_vars['order']->value['name'];?>
</td></tr>
<?php if ($_smarty_tpl->tpl_vars['recipient']->value['address'] || $_smarty_tpl->tpl_vars['order']->value['address']) {?>
<tr><td class="alignRight">Address:</td><td><?php echo $_smarty_tpl->tpl_vars['order']->value['address'];?>
</td></tr>
<?php }
if ($_smarty_tpl->tpl_vars['recipient']->value['city'] || $_smarty_tpl->tpl_vars['order']->value['city']) {?>
<tr><td class="alignRight">City:</td><td><?php echo $_smarty_tpl->tpl_vars['order']->value['city'];?>
</td></tr>
<?php }
if ($_smarty_tpl->tpl_vars['recipient']->value['email'] || $_smarty_tpl->tpl_vars['order']->value['email']) {?>
<tr><td class="alignRight">Email:</td><td><?php echo $_smarty_tpl->tpl_vars['order']->value['email'];?>
</td></tr>
<?php }
if ($_smarty_tpl->tpl_vars['recipient']->value['phone'] || $_smarty_tpl->tpl_vars['order']->value['phone']) {?>
<tr><td class="alignRight">Phone:</td><td><?php echo $_smarty_tpl->tpl_vars['order']->value['phone'];?>
</td></tr>
<?php }
if ($_smarty_tpl->tpl_vars['order']->value['shipping_method']) {?>
<tr><td class="alignRight">Shipping:</td><td><?php echo $_smarty_tpl->tpl_vars['order']->value['shipping_method'];?>
</td></tr>
<?php }?>
</table>
</div>
</div>

<div class="clean"></div>
</article>
<?php }
$_smarty_tpl->_assignInScope('head_title', " - View Order");
}
}
