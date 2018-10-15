<?php
/* Smarty version 3.1.30, created on 2018-10-15 16:36:05
  from "/var/www/html/smarty/templates/pages/review.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5bc4c1f57de358_10949560',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c7171ca412edc4787f4af64bab46435af67519f9' => 
    array (
      0 => '/var/www/html/smarty/templates/pages/review.tpl',
      1 => 1539621348,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:modules/mod_succerrors.tpl' => 1,
  ),
),false)) {
function content_5bc4c1f57de358_10949560 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_modifier_truncate')) require_once '/var/www/Smarty/libs/plugins/modifier.truncate.php';
if (FALSE) {?>
<div class="alignCenter uchighlight bld">
<p>Please note: the Webshop team will be on vacation from January 1st to January 14th 2018. During these two weeks, the online store will be open for orders but no wine will be shipped. Wine shipments will resume the week of January 15th.</p>
</div>
<?php }?>

<table class="buyprocess">
<tr>
<td class="nowrap">Billing & Shipping</td>
<td>&mdash;</td>
<td class="buyprocessCurrent">Review</td>
<td>&mdash;</td>
<td>Pay</td>
<td>&mdash;</td>
<td>Receipt</td>
</tr>
</table>

<h1>Review Your Order</h1>

<?php $_smarty_tpl->_subTemplateRender("file:modules/mod_succerrors.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<article id="cart">
<div class="div_l" >
<table cellpadding="3" cellspacing="0" >
<tr>
<td colspan="5"><span class="review_change">Order Information</span>&nbsp; <a href="/cart/" title="Change cart"><b>Change</b></a></td>
</tr>
<tr><td colspan="5" style="border-top: 1px solid #000000; padding:3px;"></td></tr>
<tr>
<td style="width:5%;"><b>Year</b></td>
<td style="width:60%;"><b>Name</b></td>
<td style="width:7%;" class="alignRight"><b>Quantity</b></td>
<td style="width:9%;" class="alignRight nowrap"><b>Unit Price</b></td>
<td style="width:9%;" class="alignRight"><b>Total</b></td>
</tr>
<tr><td colspan="5" class="dotted"></td></tr>
<?php
$__section_bit_0_saved = isset($_smarty_tpl->tpl_vars['__smarty_section_bit']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit'] : false;
$__section_bit_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['items']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_bit_0_total = $__section_bit_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_bit'] = new Smarty_Variable(array());
if ($__section_bit_0_total != 0) {
for ($__section_bit_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] = 0; $__section_bit_0_iteration <= $__section_bit_0_total; $__section_bit_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']++){
?>
<tr>
<td><?php if ($_smarty_tpl->tpl_vars['items']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['year']) {
echo $_smarty_tpl->tpl_vars['items']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['year'];
}?></td>
<td><a href="<?php echo $_smarty_tpl->tpl_vars['items']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['url'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['items']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['title'];?>
"><?php echo $_smarty_tpl->tpl_vars['items']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['full_name'];?>
</a></td>
<td class="alignRight"><?php echo $_smarty_tpl->tpl_vars['items']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['quantity'];?>
</td>
<td class="alignRight nowrap"><?php if ($_smarty_tpl->tpl_vars['items']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['base_price'] > $_smarty_tpl->tpl_vars['items']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['price']) {?><strike>$<?php echo $_smarty_tpl->tpl_vars['items']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['base_price'];?>
</strike> <?php }?> $<?php echo $_smarty_tpl->tpl_vars['items']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['price'];?>
</td>
<td class="alignRight">$<?php echo $_smarty_tpl->tpl_vars['items']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['total'];?>
</td>
</tr>
<?php
}
}
if ($__section_bit_0_saved) {
$_smarty_tpl->tpl_vars['__smarty_section_bit'] = $__section_bit_0_saved;
}
if ($_smarty_tpl->tpl_vars['bonus_bottle']->value) {?>
<tr><td></td><td>Bonus Bottle, Thanks for your business!</td><td class="alignRight"><?php echo $_smarty_tpl->tpl_vars['bonus_bottle']->value;?>
</td><td class="alignRight">$0.00</td><td class="alignRight">$0.00</td></tr>
<?php }?>
<tr><td colspan="5" class="topdotted"></td></tr>
<tr><td colspan="4" class="alignRight">Tax:</td>
<td colspan="1" class="alignRight">$<?php echo $_smarty_tpl->tpl_vars['order']->value['tax'];?>
</td></tr>
<tr><td colspan="4" class="alignRight">Shipping:</td>
<td colspan="1" class="alignRight">
<?php if ($_smarty_tpl->tpl_vars['order']->value['shipping'] == 0) {?><span class="rdd bld">FREE</span><?php } else { ?>$<?php echo $_smarty_tpl->tpl_vars['order']->value['shipping'];
}?>
</td></tr>
<?php if ($_smarty_tpl->tpl_vars['total_shipping_savings']->value) {?>
<tr><td colspan="5" class="alignRight"><span class="bld">Vino Danubia Shipping Savings: $<?php echo $_smarty_tpl->tpl_vars['total_shipping_savings']->value;?>
</span></td></tr>
<?php }
if ($_smarty_tpl->tpl_vars['order']->value['adult_signature'] > 0) {?>
<tr><td colspan="4" class="alignRight">Adult Signature:</td>
<td colspan="1" class="alignRight"><?php if ($_smarty_tpl->tpl_vars['wineclub_shipping']->value && ($_smarty_tpl->tpl_vars['order']->value['shipping'] > 0)) {?><span class="rdd bld"><?php echo $_smarty_tpl->tpl_vars['order']->value['adult_signature'];?>
</span><?php } else { ?>$<?php echo $_smarty_tpl->tpl_vars['order']->value['adult_signature'];
}?></td></tr>
<?php }
if ($_smarty_tpl->tpl_vars['wineclub_shipping']->value && ($_smarty_tpl->tpl_vars['order']->value['shipping'] > 0)) {?>
<tr><td colspan="5" class="alignRight"><span class="rdd bld">Order a multiple of 6 to get free shipping</span></td></tr>
<?php }
if ($_smarty_tpl->tpl_vars['order']->value['include_card']) {?>
<tr><td colspan="4" class="alignRight">Greeting Card:</td>
<td colspan="1" class="alignRight">$<?php echo $_smarty_tpl->tpl_vars['order']->value['include_card_cost'];?>
</td></tr>
<?php }?>
<tr><td colspan="5" class="topdotted"></td></tr>
<?php if ($_smarty_tpl->tpl_vars['order']->value['giftcard_code']) {?>
<tr><td colspan="4" class="pix14 rdd bld alignRight">Total:</td>
<td colspan="1" class="pix14 rdd bld alignRight">$<?php echo $_smarty_tpl->tpl_vars['order']->value['grand_total'];?>
</td></tr>
<form method="post" action="/apply_giftcard/">
<tr>
<td colspan="5" class="pix14 rdd bld alignRight" style="vertical-align:middle;">
Gift Card:
<input style="background-color:#FDEFEF;" type="text" name="giftcard_code" value="<?php echo $_smarty_tpl->tpl_vars['order']->value['giftcard_code'];?>
" maxlength="20" size="16" />
<button type="submit" title="Apply" name="apply_giftcard" class="btn btn-sm btn-primary">Apply</button>
</td>
</tr>
</form>
<tr><td colspan="4" class="pix14 rdd bld alignRight nowrap">Gift Card Payment:</td>
<td colspan="1" class="pix14 rdd bld alignRight">-$<?php echo $_smarty_tpl->tpl_vars['order']->value['giftcard_payment'];?>
</td></tr>
<tr><td colspan="4" class="pix14 rdd bld alignRight">Grand Total:</td>
<td colspan="1" class="pix14 rdd bld alignRight">$<?php echo $_smarty_tpl->tpl_vars['order']->value['giftcard_total'];?>
</td></tr>
<?php } else { ?>
<form method="post" action="/apply_giftcard/">
<tr>
<td colspan="5" class="pix14 rdd bld alignRight" style="vertical-align:middle;">
Gift Card:
<input style="background-color:#FDEFEF;" type="text" name="giftcard_code" value="<?php echo $_smarty_tpl->tpl_vars['order']->value['giftcard_code'];?>
" maxlength="20" size="16" />
<button type="submit" title="Apply" name="apply_giftcard" class="btn btn-sm btn-primary">Apply</button>
</td>
</tr>
</form>
<tr><td colspan="4" class="pix14 rdd bld alignRight">Order Total:</td>
<td colspan="1" class="pix14 rdd bld alignRight">$<?php echo $_smarty_tpl->tpl_vars['order']->value['grand_total'];?>
</td></tr>
<?php }?>
</table>
</div>

<div class="div_p">
<table cellpadding="3" cellspacing="0">
<tr>
<td colspan="3"><span class="review_change">Order Information</span>&nbsp; <a href="/cart/" title="Change cart"><b>Change</b></a></td>
</tr>
<tr><td colspan="3" style="border-top: 1px solid #000000; padding:3px;"></td></tr>
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
<?php echo $_smarty_tpl->tpl_vars['items']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['quantity'];?>

</td>
<td>
<a href="<?php echo $_smarty_tpl->tpl_vars['items']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['url'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['items']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['title'];?>
"><?php echo $_smarty_tpl->tpl_vars['items']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['title'];?>
</a>
<?php if ($_smarty_tpl->tpl_vars['items']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['base_price'] > $_smarty_tpl->tpl_vars['items']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['price']) {?><strike>$<?php echo $_smarty_tpl->tpl_vars['items']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['base_price'];?>
</strike> <?php }?> $<?php echo $_smarty_tpl->tpl_vars['items']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['price'];?>

</td>
<td class="alignRight">$<?php echo $_smarty_tpl->tpl_vars['items']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['total'];?>
</td>
</tr>
<?php
}
}
if ($__section_bit_1_saved) {
$_smarty_tpl->tpl_vars['__smarty_section_bit'] = $__section_bit_1_saved;
}
if ($_smarty_tpl->tpl_vars['bonus_bottle']->value) {?>
<tr><td class="alignRight" style="width:1%;"><?php echo $_smarty_tpl->tpl_vars['bonus_bottle']->value;?>
</td><td>Bonus Bottle, Thanks for your business! $0.00</td><td class="alignRight">$0.00</td></tr>
<?php }?>
<tr><td colspan="3" class="topdotted"></td></tr>
<tr><td colspan="2" class="alignRight">Tax:</td>
<td colspan="1" class="alignRight">$<?php echo $_smarty_tpl->tpl_vars['order']->value['tax'];?>
</td></tr>
<tr><td colspan="2" class="alignRight">Shipping:</td>
<td colspan="1" class="alignRight">
<?php if ($_smarty_tpl->tpl_vars['wineclub_shipping']->value) {
if ($_smarty_tpl->tpl_vars['order']->value['shipping'] == 0) {?><span class="rdd bld">FREE</span><?php } else {
if ($_smarty_tpl->tpl_vars['shipping_savings']->value) {?>$<?php echo $_smarty_tpl->tpl_vars['order']->value['shipping'];
} else { ?><span class="rdd bld">$<?php echo $_smarty_tpl->tpl_vars['order']->value['shipping'];?>
</span><?php }
}
} else { ?>$<?php echo $_smarty_tpl->tpl_vars['order']->value['shipping'];
}?>
</td></tr>
<?php if ($_smarty_tpl->tpl_vars['total_shipping_savings']->value) {?>
<tr><td colspan="3" class="alignRight"><span class="bld">Vino Danubia Shipping Savings: $<?php echo $_smarty_tpl->tpl_vars['total_shipping_savings']->value;?>
</span></td></tr>
<?php }
if ($_smarty_tpl->tpl_vars['order']->value['adult_signature'] > 0) {?>
<tr><td colspan="2" class="alignRight">Adult Signature:</td>
<td colspan="1" class="alignRight"><?php if ($_smarty_tpl->tpl_vars['wineclub_shipping']->value && ($_smarty_tpl->tpl_vars['order']->value['shipping'] > 0)) {?><span class="rdd bld"><?php echo $_smarty_tpl->tpl_vars['order']->value['adult_signature'];?>
</span><?php } else { ?>$<?php echo $_smarty_tpl->tpl_vars['order']->value['adult_signature'];
}?></td></tr>
<?php }
if ($_smarty_tpl->tpl_vars['wineclub_shipping']->value && ($_smarty_tpl->tpl_vars['order']->value['shipping'] > 0)) {?>
<tr><td colspan="3" class="alignRight"><span class="rdd bld">Order a multiple of 6 to get free shipping</span></td></tr>
<?php }
if (($_smarty_tpl->tpl_vars['wineclub_saving']->value > 0)) {?>
<tr><td colspan="3" class="alignRight"><span class="bld">Join our club <a href="/wineclub/" title="Join Vino Danubia">Vino Danubia</a> and save <span class="rdd">$<?php echo $_smarty_tpl->tpl_vars['wineclub_saving']->value;?>
</span> in shipping cost!</span></td></tr>
<?php }
if ($_smarty_tpl->tpl_vars['order']->value['include_card']) {?>
<tr><td colspan="2" class="alignRight">Greeting Card:</td>
<td colspan="1" class="alignRight">$<?php echo $_smarty_tpl->tpl_vars['order']->value['include_card_cost'];?>
</td></tr>
<?php }?>
<tr><td colspan="3" class="topdotted"></td></tr>
<?php if ($_smarty_tpl->tpl_vars['order']->value['giftcard_code']) {?>
<tr><td colspan="2" class="pix14 rdd bld alignRight">Total:</td>
<td colspan="1" class="pix14 rdd bld alignRight">$<?php echo $_smarty_tpl->tpl_vars['order']->value['grand_total'];?>
</td></tr>
<form method="post" action="/apply_giftcard/">
<tr class="nowrap">
<td colspan="3" class="pix14 rdd bld alignRight" style="vertical-align:middle;">
Gift Card:
<input style="background-color:#FDEFEF;" type="text" name="giftcard_code" value="<?php echo $_smarty_tpl->tpl_vars['order']->value['giftcard_code'];?>
" maxlength="20" size="16" />
<button type="submit" title="Apply" name="apply_giftcard" class="btn btn-sm btn-primary">Apply</button></td>
</tr>
</form>
<tr><td colspan="2" class="pix14 rdd bld alignRight nowrap">Gift Card Payment:</td>
<td colspan="1" class="pix14 rdd bld alignRight nowrap">-$<?php echo $_smarty_tpl->tpl_vars['order']->value['giftcard_payment'];?>
</td></tr>
<tr><td colspan="2" class="pix14 rdd bld alignRight">Grand Total:</td>
<td colspan="1" class="pix14 rdd bld alignRight">$<?php echo $_smarty_tpl->tpl_vars['order']->value['giftcard_total'];?>
</td></tr>
<?php } else { ?>
<form method="post" action="/apply_giftcard/">
<tr class="nowrap">
<td colspan="3" class="pix14 rdd bld alignRight" style="vertical-align:middle;">
Gift Card:
<input style="background-color:#FDEFEF;" type="text" name="giftcard_code" value="<?php echo $_smarty_tpl->tpl_vars['order']->value['giftcard_code'];?>
" maxlength="20" size="16" />
<button type="submit" title="Apply" name="apply_giftcard" class="btn btn-sm btn-primary">Apply</button></td>
</tr>
</form>
<tr><td colspan="2" class="pix14 rdd bld alignRight">Order Total:</td>
<td colspan="1" class="pix14 rdd bld alignRight">$<?php echo $_smarty_tpl->tpl_vars['order']->value['grand_total'];?>
</td></tr>
<?php }?>
</table>
</div>
</article>

<div>
<article class="bdgrid6first billship billshipaligned">
<table>
<tr>
<td colspan="2"><span class="review_change">Billing Information</span>&nbsp; <a href="/billship/" title="Change billing information"><b>Change</b></a></td>
</tr>
<tr><td colspan="2" style="border-top: 1px solid #000000; padding:3px;"></td></tr>
<tr>
<td class="alignRight" style="width:20%;">Name:</td><td style="width:80%;"><?php echo $_smarty_tpl->tpl_vars['recipient']->value['first_name'];?>
 <?php echo $_smarty_tpl->tpl_vars['recipient']->value['last_name'];?>
</td>
</tr>
<?php if ($_smarty_tpl->tpl_vars['recipient']->value['address1'] || $_smarty_tpl->tpl_vars['order']->value['address1']) {?>
<tr>
<td class="alignRight">Address:</td><td><?php echo $_smarty_tpl->tpl_vars['recipient']->value['address1'];?>
</td>
</tr>
<?php }
if ($_smarty_tpl->tpl_vars['recipient']->value['address2'] || $_smarty_tpl->tpl_vars['order']->value['address2']) {?>
<tr>
<td class="alignRight">Address2:</td><td><?php echo $_smarty_tpl->tpl_vars['recipient']->value['address2'];?>
</td>
</tr>
<?php }
if ($_smarty_tpl->tpl_vars['recipient']->value['city'] || $_smarty_tpl->tpl_vars['order']->value['city']) {?>
<tr>
<td class="alignRight">City:</td><td><?php echo $_smarty_tpl->tpl_vars['recipient']->value['city'];?>
, <?php echo $_smarty_tpl->tpl_vars['recipient']->value['state'];?>
 <?php echo $_smarty_tpl->tpl_vars['recipient']->value['zipcode'];?>
</td>
</tr>
<?php }
if ($_smarty_tpl->tpl_vars['recipient']->value['email'] || $_smarty_tpl->tpl_vars['order']->value['email']) {?>
<tr>
<td class="alignRight">Email:</td><td><?php echo $_smarty_tpl->tpl_vars['recipient']->value['email'];?>
</td>
</tr>
<?php }
if ($_smarty_tpl->tpl_vars['recipient']->value['phone'] || $_smarty_tpl->tpl_vars['order']->value['phone']) {?>
<tr>
<td class="alignRight">Phone:</td><td><?php echo $_smarty_tpl->tpl_vars['recipient']->value['phone'];?>
</td>
</tr>
<?php }?>
<tr>
<td class="alignRight">Instructions:</td>
<?php if ($_smarty_tpl->tpl_vars['order']->value['instructions']) {?>
<td><?php echo $_smarty_tpl->tpl_vars['order']->value['instructions'];?>
</td>
<?php } else { ?>
<td>No special instructions</td>
<?php }?>
</tr>
<?php if ($_smarty_tpl->tpl_vars['order']->value['include_card_msg']) {?>
<tr>
<td class="alignRight nowrap">Personalized Message:</td><td><?php echo $_smarty_tpl->tpl_vars['order']->value['include_card_msg'];?>
</td>
</tr>
<?php }?>
</table>
</article>

<article class="bdgrid6last billship billshipaligned">
<table>
<tr>
<td colspan="2"><span class="review_change">Shipping Information</span>&nbsp; <a href="/billship/" title="Change shipping information"><b>Change</b></a></td>
</tr>
<tr><td colspan="2" style="border-top: 1px solid #000000; padding:3px;"></td></tr>
<tr>
<td class="alignRight" style="width:20%;">Name:</td><td style="width:80%;"><?php echo $_smarty_tpl->tpl_vars['order']->value['first_name'];?>
 <?php echo $_smarty_tpl->tpl_vars['order']->value['last_name'];?>
</td>
</tr>
<?php if ($_smarty_tpl->tpl_vars['recipient']->value['address1'] || $_smarty_tpl->tpl_vars['order']->value['address1']) {?>
<tr>
<td class="alignRight">Address:</td><td><?php echo $_smarty_tpl->tpl_vars['order']->value['address1'];?>
</td>
</tr>
<?php }
if ($_smarty_tpl->tpl_vars['recipient']->value['address2'] || $_smarty_tpl->tpl_vars['order']->value['address2']) {?>
<tr>
<td class="alignRight">Address2:</td><td><?php echo $_smarty_tpl->tpl_vars['order']->value['address2'];?>
</td>
</tr>
<?php }
if ($_smarty_tpl->tpl_vars['recipient']->value['city'] || $_smarty_tpl->tpl_vars['order']->value['city']) {?>
<tr>
<td class="alignRight">City:</td><td><?php echo $_smarty_tpl->tpl_vars['order']->value['city'];?>
, <?php echo $_smarty_tpl->tpl_vars['order']->value['state'];?>
 <?php echo $_smarty_tpl->tpl_vars['order']->value['zipcode'];?>
</td>
</tr>
<?php }
if ($_smarty_tpl->tpl_vars['recipient']->value['email'] || $_smarty_tpl->tpl_vars['order']->value['email']) {?>
<tr>
<td class="alignRight">Email:</td><td><?php echo $_smarty_tpl->tpl_vars['order']->value['email'];?>
</td>
</tr>
<?php }
if ($_smarty_tpl->tpl_vars['recipient']->value['phone'] || $_smarty_tpl->tpl_vars['order']->value['phone']) {?>
<tr>
<td class="alignRight">Phone:</td><td><?php echo $_smarty_tpl->tpl_vars['order']->value['phone'];?>
</td>
</tr>
<?php }?>
<tr>
<td class="alignRight">Shipping:</td><td><?php echo $_smarty_tpl->tpl_vars['order']->value['shipping_method'];?>
</td>
</tr>
<tr>
<td class="alignRight">Needed By:</td>
<?php if ($_smarty_tpl->tpl_vars['order']->value['need_by_date']) {?>
<td><?php echo $_smarty_tpl->tpl_vars['order']->value['need_by_date'];?>
</td>
<?php } else { ?>
<td>n/a</td>
<?php }?>
</tr>
</table>
</article>
</div>

<div class="clean"></div>

<?php if ($_smarty_tpl->tpl_vars['order_giftcard_paid']->value) {?>
<form method="post" action="<?php echo $_smarty_tpl->tpl_vars['form_action']->value;?>
">
<div class="reviewsubmit">
<button type="submit" title="Place Your Order" name="submit_checkout" class="btn btn-sm btn-primary">Place Your Order</button>
</div>
</form>
<?php } else { ?>
<form method="post" action="https://secure.authorize.net/gateway/transact.dll">
  <input type="hidden" name="x_login" value="<?php echo $_smarty_tpl->tpl_vars['x_login']->value;?>
" />
  <input type="hidden" name="x_fp_sequence" value="<?php echo $_smarty_tpl->tpl_vars['x_fp_sequence']->value;?>
" />
  <input type="hidden" name="x_fp_timestamp" value="<?php echo $_smarty_tpl->tpl_vars['x_fp_timestamp']->value;?>
" />
  <input type="hidden" name="x_amount" value="<?php echo $_smarty_tpl->tpl_vars['x_amount']->value;?>
" />
  <input type="hidden" name="x_tax" value="Tax<|><|><?php echo $_smarty_tpl->tpl_vars['order']->value['tax'];?>
" />
  <input type="hidden" name="x_tax_exempt" value="<?php echo $_smarty_tpl->tpl_vars['x_tax_exempt']->value;?>
" />
  <input type="hidden" name="x_freight" value="Shipping<|><|><?php echo $_smarty_tpl->tpl_vars['x_shipping']->value;?>
" />
  <input type="hidden" name="x_fp_hash" value="<?php echo $_smarty_tpl->tpl_vars['x_fp_hash']->value;?>
" />
  <input type='hidden' name="x_show_form" value="<?php echo $_smarty_tpl->tpl_vars['x_show_form']->value;?>
">
  <input type='hidden' name="x_test_request" value="<?php echo $_smarty_tpl->tpl_vars['x_test_request']->value;?>
" />
  <input type='hidden' name="x_method" value="<?php echo $_smarty_tpl->tpl_vars['x_method']->value;?>
">
  <input type="hidden" name="x_type" value="<?php echo $_smarty_tpl->tpl_vars['x_type']->value;?>
" />
  <input type="hidden" name="x_cancel_url" value="<?php echo $_smarty_tpl->tpl_vars['x_cancel_url']->value;?>
" />
  <input type="hidden" name="x_cancel_url_text" value="<?php echo $_smarty_tpl->tpl_vars['x_cancel_url_ext']->value;?>
" />
  <input type="hidden" name="x_version" value="<?php echo $_smarty_tpl->tpl_vars['x_version']->value;?>
" />
  <input type="hidden" name="x_relay_response" value="<?php echo $_smarty_tpl->tpl_vars['x_relay_response']->value;?>
" />
  <input type='hidden' name='x_relay_url' value="<?php echo $_smarty_tpl->tpl_vars['x_relay_response_url']->value;?>
" />
  <input type="hidden" name="x_invoice_num" value="<?php echo $_smarty_tpl->tpl_vars['order']->value['invoice_number'];?>
" />
  <input type="hidden" name="x_description" value="<?php echo $_smarty_tpl->tpl_vars['order']->value['invoice_number'];?>
" />
  <input type="hidden" name="x_cust_id" value="<?php echo $_smarty_tpl->tpl_vars['order']->value['rec_id'];?>
" />
  <input type="hidden" name="x_first_name" value="<?php echo $_smarty_tpl->tpl_vars['recipient']->value['first_name'];?>
" />
  <input type="hidden" name="x_last_name" value="<?php echo $_smarty_tpl->tpl_vars['recipient']->value['last_name'];?>
" />
  <input type="hidden" name="x_address" value="<?php echo $_smarty_tpl->tpl_vars['x_address']->value;?>
" />
  <input type="hidden" name="x_country" value="<?php echo $_smarty_tpl->tpl_vars['x_country']->value;?>
" />
  <input type="hidden" name="x_city" value="<?php echo $_smarty_tpl->tpl_vars['recipient']->value['city'];?>
" />
  <input type="hidden" name="x_state" value="<?php echo $_smarty_tpl->tpl_vars['x_state']->value;?>
" />
  <input type="hidden" name="x_zip" value="<?php echo $_smarty_tpl->tpl_vars['x_zipcode']->value;?>
" />
  <input type="hidden" name="x_phone" value="<?php echo $_smarty_tpl->tpl_vars['recipient']->value['phone'];?>
" />
  <input type="hidden" name="x_email" value="<?php echo $_smarty_tpl->tpl_vars['recipient']->value['email'];?>
" />
  <input type="hidden" name="x_ship_to_first_name" value="<?php echo $_smarty_tpl->tpl_vars['order']->value['first_name'];?>
" />
  <input type="hidden" name="x_ship_to_last_name" value="<?php echo $_smarty_tpl->tpl_vars['order']->value['last_name'];?>
" />
  <input type="hidden" name="x_ship_to_address" value="<?php echo $_smarty_tpl->tpl_vars['x_ship_to_address']->value;?>
" />
  <input type="hidden" name="x_ship_to_city" value="<?php echo $_smarty_tpl->tpl_vars['order']->value['city'];?>
" />
  <input type="hidden" name="x_ship_to_state" value="<?php echo $_smarty_tpl->tpl_vars['order']->value['state'];?>
" />
  <input type="hidden" name="x_ship_to_zip" value="<?php echo $_smarty_tpl->tpl_vars['order']->value['zipcode'];?>
" />
  <input type="hidden" name="x_ship_to_country" value="<?php echo $_smarty_tpl->tpl_vars['x_shipcountry']->value;?>
" />
  <input type="hidden" name="ship_to_phone" value="<?php echo $_smarty_tpl->tpl_vars['order']->value['phone'];?>
" />
  <input type="hidden" name="ship_to_email" value="<?php echo $_smarty_tpl->tpl_vars['order']->value['email'];?>
" />
  <input type="hidden" name="instructions" value="<?php echo $_smarty_tpl->tpl_vars['order']->value['instructions'];?>
" />
  <input type="hidden" name="order_placed" value="<?php echo $_smarty_tpl->tpl_vars['order']->value['placed'];?>
" />
  <input type="hidden" name="Site" value="BDW Office" />
  <input type="hidden" name="x_logo_url" value="https://www.bluedanubewine.com/img/all/logo_for_authorize.png" />
  <input type="hidden" name="x_footer_html_payment_form" value='<center><span style="font-size:11px;"><a href="http://bluedanubewine.com/" title="home">home</a> | <a href="http://bluedanubewine.com/news_events/" title="news and events"> news and events</a> | <a href="http://bluedanubewine.com/blog/" title="blog"> blog</a> | <a href="http://bluedanubewine.com/wines/" title="shop">shop</a> | <a href="http://bluedanubewine.com/shipping/" title="shipping">shipping</a> | <a href="http://bluedanubewine.com/about/" title="about us">about us</a> | <a href="http://bluedanubewine.com/contact/" title="contact">contact</a></span></center>' />
  <?php
$__section_bit_2_saved = isset($_smarty_tpl->tpl_vars['__smarty_section_bit']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit'] : false;
$__section_bit_2_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['items']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_bit_2_total = $__section_bit_2_loop;
$_smarty_tpl->tpl_vars['__smarty_section_bit'] = new Smarty_Variable(array());
if ($__section_bit_2_total != 0) {
for ($__section_bit_2_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] = 0; $__section_bit_2_iteration <= $__section_bit_2_total; $__section_bit_2_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']++){
?>
  <input type='hidden' name="x_line_item" value="<?php echo $_smarty_tpl->tpl_vars['items']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['product_id'];?>
<|><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['items']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['product_name'],29,'',true);?>
<|><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['items']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['description'],250,'',true);?>
<|><?php echo $_smarty_tpl->tpl_vars['items']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['quantity'];?>
<|><?php echo $_smarty_tpl->tpl_vars['items']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['price'];?>
<|><?php echo $_smarty_tpl->tpl_vars['items']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['taxable'];?>
">
  <?php
}
}
if ($__section_bit_2_saved) {
$_smarty_tpl->tpl_vars['__smarty_section_bit'] = $__section_bit_2_saved;
}
if ($_smarty_tpl->tpl_vars['order']->value['adult_signature'] > 0) {?>
<input type='hidden' name="x_line_item" value="<?php echo $_smarty_tpl->tpl_vars['x_adult_signature_name']->value;?>
<|><?php echo $_smarty_tpl->tpl_vars['x_adult_signature_name']->value;?>
<|><?php echo $_smarty_tpl->tpl_vars['x_adult_signature_description']->value;?>
<|>1<|><?php echo $_smarty_tpl->tpl_vars['x_adult_signature']->value;?>
<|>N">
<?php }
if ($_smarty_tpl->tpl_vars['order']->value['include_card']) {?>
<input type='hidden' name="x_line_item" value="<?php echo $_smarty_tpl->tpl_vars['x_include_card_name']->value;?>
<|><?php echo $_smarty_tpl->tpl_vars['x_include_card_name']->value;?>
<|><?php echo $_smarty_tpl->tpl_vars['x_include_card_description']->value;?>
<|>1<|><?php echo $_smarty_tpl->tpl_vars['x_include_card_cost']->value;?>
<|>N">
<?php }
if ($_smarty_tpl->tpl_vars['shipping_savings']->value) {?>
<input type='hidden' name="x_line_item" value="<?php echo $_smarty_tpl->tpl_vars['x_shipping_saving_name']->value;?>
<|><?php echo $_smarty_tpl->tpl_vars['x_shipping_saving_name']->value;?>
<|><?php echo $_smarty_tpl->tpl_vars['x_shipping_saving_description']->value;?>
<|>1<|><?php echo $_smarty_tpl->tpl_vars['x_shipping_saving_cost']->value;?>
<|>N">
<?php }
if ($_smarty_tpl->tpl_vars['adult_signature_savings']->value) {?>
<input type='hidden' name="x_line_item" value="<?php echo $_smarty_tpl->tpl_vars['x_adult_signature_saving_name']->value;?>
<|><?php echo $_smarty_tpl->tpl_vars['x_adult_signature_saving_name']->value;?>
<|><?php echo $_smarty_tpl->tpl_vars['x_adult_signature_saving_description']->value;?>
<|>1<|><?php echo $_smarty_tpl->tpl_vars['x_adult_signature_saving_cost']->value;?>
<|>N">
<?php }
if ($_smarty_tpl->tpl_vars['x_giftcard_amount']->value > 0) {?>
<input type='hidden' name="x_line_item" value="<?php echo $_smarty_tpl->tpl_vars['x_giftcard_amount_name']->value;?>
<|><?php echo $_smarty_tpl->tpl_vars['x_giftcard_amount_name']->value;?>
<|><?php echo $_smarty_tpl->tpl_vars['x_giftcard_amount_description']->value;?>
<|>1<|><?php echo $_smarty_tpl->tpl_vars['x_giftcard_amount']->value;?>
<|>N">
<?php }?>

<div class="reviewsubmit">
<button type="submit" title="Place Your Order" name="submit_checkout" class="btn btn-sm btn-primary">Place Your Order</button>
</div>
</form>
<?php }?>
<div class="some_space2 itl">
Please note: shipping during periods of extreme heat can damage wine. Your wines will be shipped by us in perfect condition and any damage due to weather is not covered by UPS insurance, or guaranteed by us. Please contact our Customer Service at webshop@bluedanubewine.com or +1 (650) 941-4699 and we will gladly store your wine until the weather is cooler.
</div>
<?php if ($_smarty_tpl->tpl_vars['ca_customer']->value) {?>
<div class="some-space2 alignCenter ucbox">
<span class="bld">WARNING</span>: Drinking distilled spirits, beer, coolers, wine and other alcoholic beverages may increase cancer risk, and, during pregnancy, can cause birth defects. <br>For more information go to <a href="https://www.P65Warnings.ca.gov/alcohol" target="_blank">www.P65Warnings.ca.gov/alcohol</a>
</div>
<?php }?>


<div class="authorizelogo">
Secure payment by &nbsp;
<a href="http://www.authorize.net/"><img style="vertical-align:middle;" src="https://www.authorize.net/images/authorizenet_150_42.gif" border="0" alt="Authorize.Net Logo" width="150" height="42" /></a>
</div>


<?php $_smarty_tpl->_assignInScope('head_title', " - Review Order");
}
}
