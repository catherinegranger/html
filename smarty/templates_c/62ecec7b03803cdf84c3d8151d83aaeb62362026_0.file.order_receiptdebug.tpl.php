<?php
/* Smarty version 3.1.30, created on 2018-04-20 23:22:40
  from "/var/www/html/smarty/templates/pages/order_receiptdebug.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5ada76406da131_03769588',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '62ecec7b03803cdf84c3d8151d83aaeb62362026' => 
    array (
      0 => '/var/www/html/smarty/templates/pages/order_receiptdebug.tpl',
      1 => 1523659342,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:modules/mod_succerrors.tpl' => 1,
  ),
),false)) {
function content_5ada76406da131_03769588 (Smarty_Internal_Template $_smarty_tpl) {
if (!$_smarty_tpl->tpl_vars['order_found']->value) {?>
<div class="ucvalidation some_space5">
&bull;&nbsp;Sorry, we cannot access this order: permission denied
</div>

<?php } elseif (!$_smarty_tpl->tpl_vars['order_success']->value) {?>
<div class="ucvalidation some_space5">
&bull;&nbsp;Sorry, your payment was not processed successfully for the following reason: <?php echo $_smarty_tpl->tpl_vars['order']->value['response_reason_text'];?>

</div>

<?php } elseif ($_smarty_tpl->tpl_vars['order_processed']->value) {?>
<div class="ucsuccess some_space5">
&bull;&nbsp;Thanks for your order! Your payment was processed successfully and an e-mail confirmation has been sent to you.
</div>

<?php } else { ?>
<table class="buyprocess">
<tr>
<td class="nowrap">Billing & Shipping</td>
<td>&mdash;</td>
<td>Review</td>
<td>&mdash;</td>
<td>Pay</td>
<td>&mdash;</td>
<td class="buyprocessCurrent" >Receipt</td>
</tr>
</table>

<div id="order_receipt_border">
<h1>Payment Receipt</h1>
<div class="some_space5">
<?php if ($_smarty_tpl->tpl_vars['receipt_success']->value) {
if ($_smarty_tpl->tpl_vars['response_code']->value == '1') {?>
<span class="bld pix16">Thank you for your order!</span>
<p>Your payment was processed successfully and an e-mail confirmation has been sent to you.</p>
<?php } else { ?>
<span class="bld pix16">Thank you for your business!</span>
<p>Your order has been received and an e-mail confirmation will be sent to you.</p>
<?php }?>
</div>
<?php }
$_smarty_tpl->_subTemplateRender("file:modules/mod_succerrors.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<h4>Payment Information:</h4>
<div class="bdgrid6first billship">
<table>
<tr><td class="alignRight" nowrap>Invoice Number:</td><td style="width:80%;"><?php echo $_smarty_tpl->tpl_vars['order']->value['invoice_number'];?>
</td></tr>
<tr><td class="alignRight" style="width:5%;" nowrap>Order Placed:</td><td style="width:95%;"><?php echo $_smarty_tpl->tpl_vars['order']->value['placed'];?>
</td></tr>
</table>
</div>
<div class="bdgrid6last billship">
<table>
<tr><td class="alignRight" nowrap>Payment Method:</td><td style="width:80%;"><?php echo $_smarty_tpl->tpl_vars['order']->value['payment_method'];?>
 <?php echo $_smarty_tpl->tpl_vars['order']->value['account_number'];?>
</td></tr>
<?php if ($_smarty_tpl->tpl_vars['order']->value['authorization_code']) {?>
<tr><td class="alignRight" nowrap>Authorization Code:</td><td style="width:80%;"><?php echo $_smarty_tpl->tpl_vars['order']->value['authorization_code'];?>
</td></tr>
<?php }
if ($_smarty_tpl->tpl_vars['order']->value['giftcard_id'] > 0) {?>
<tr><td class="alignRight" nowrap>Gift Card Balance:</td><td style="width:80%;">$<?php echo $_smarty_tpl->tpl_vars['order']->value['giftcard_balance'];?>
</td></tr>
<?php }?>
</table>
</div>
<div class="clean"></div>
<div class="some_space5">
<table cellpadding="3" cellspacing="0" >
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
<td><?php echo $_smarty_tpl->tpl_vars['items']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['product_name'];?>
 <?php if ($_smarty_tpl->tpl_vars['items']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['product_name'] == "Gift Card") {?><br><a href="/print/giftcard_print/<?php echo $_smarty_tpl->tpl_vars['items']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['created_date'];?>
/" target="_blank">Print/Preview E-Gift Card >></a><?php }?></td>
<td style="text-align:right;"><?php if ($_smarty_tpl->tpl_vars['items']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['quantity'] > '0') {
echo $_smarty_tpl->tpl_vars['items']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['quantity'];
}?></td>
<td style="text-align:right;">$<?php echo $_smarty_tpl->tpl_vars['items']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['price'];?>
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
?>
<tr><td colspan="4" class="topdotted"></td></tr>
<tr><td colspan="3" class="alignRight">Tax:</td>
<td colspan="1" class="alignRight">$<?php echo $_smarty_tpl->tpl_vars['order']->value['tax'];?>
</td></tr>
<tr><td colspan="3" class="alignRight">Shipping:</td>
<td colspan="1" class="alignRight">$<?php echo $_smarty_tpl->tpl_vars['order']->value['shipping'];?>
</td></tr>
<?php if ($_smarty_tpl->tpl_vars['order']->value['include_card']) {?>
<tr><td colspan="3" class="alignRight">Greeting Card:</td>
<td colspan="1" class="alignRight">$<?php echo $_smarty_tpl->tpl_vars['order']->value['include_card_cost'];?>
</td></tr>
<?php }
if ($_smarty_tpl->tpl_vars['order']->value['adult_signature'] > 0) {?>
<tr><td colspan="3" class="alignRight">Adult Signature:</td>
<td colspan="1" class="alignRight">$<?php echo $_smarty_tpl->tpl_vars['order']->value['adult_signature'];?>
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
</table>
</div>

<div class="bdgrid6first billship">
<h4>Billing Information:</h4>
<table>
<tr><td class="alignRight" style="width:20%;">Name:</td><td style="width:80%;"><?php echo $_smarty_tpl->tpl_vars['order']->value['name'];?>
</td></tr>
<?php if ($_smarty_tpl->tpl_vars['order']->value['address'] || $_smarty_tpl->tpl_vars['order']->value['ship_address']) {?>
<tr><td class="alignRight">Address:</td><td><?php echo $_smarty_tpl->tpl_vars['order']->value['address'];?>
</td></tr>
<?php }
if ($_smarty_tpl->tpl_vars['order']->value['city'] || $_smarty_tpl->tpl_vars['order']->value['ship_city']) {?>
<tr><td class="alignRight">City:</td><td><?php echo $_smarty_tpl->tpl_vars['order']->value['city'];?>
</td></tr>
<?php }
if ($_smarty_tpl->tpl_vars['order']->value['email'] || $_smarty_tpl->tpl_vars['order']->value['ship_email']) {?>
<tr><td class="alignRight">Email:</td><td><?php echo $_smarty_tpl->tpl_vars['order']->value['email'];?>
</td></tr>
<?php }
if ($_smarty_tpl->tpl_vars['order']->value['phone'] || $_smarty_tpl->tpl_vars['order']->value['ship_phone']) {?>
<tr><td class="alignRight">Phone:</td><td><?php echo $_smarty_tpl->tpl_vars['order']->value['phone'];?>
</td></tr>
<?php }
if ($_smarty_tpl->tpl_vars['order']->value['instructions']) {?>
<tr><td class="alignRight">Instructions:</td><td><?php echo $_smarty_tpl->tpl_vars['order']->value['instructions'];?>
</td></tr>
<?php }
if ($_smarty_tpl->tpl_vars['order']->value['include_card_msg']) {?>
<tr><td class="alignRight nowrap">Personalised Message:</td><td><?php echo $_smarty_tpl->tpl_vars['order']->value['include_card_msg'];?>
</td></tr>
<?php }?>
</table>
</div>
<div class="bdgrid6last billship">
<h4>Shipping Information:</h4>
<table>
<tr><td class="alignRight" style="width:20%;">Name:</td><td style="width:80%;"><?php echo $_smarty_tpl->tpl_vars['order']->value['ship_name'];?>
</td></tr>
<?php if ($_smarty_tpl->tpl_vars['order']->value['address'] || $_smarty_tpl->tpl_vars['order']->value['ship_address']) {?>
<tr><td class="alignRight">Address:</td><td><?php echo $_smarty_tpl->tpl_vars['order']->value['ship_address'];?>
</td></tr>
<?php }
if ($_smarty_tpl->tpl_vars['order']->value['city'] || $_smarty_tpl->tpl_vars['order']->value['ship_city']) {?>
<tr><td class="alignRight">City:</td><td><?php echo $_smarty_tpl->tpl_vars['order']->value['ship_city'];?>
</td></tr>
<?php }
if ($_smarty_tpl->tpl_vars['order']->value['email'] || $_smarty_tpl->tpl_vars['order']->value['ship_email']) {?>
<tr><td class="alignRight">Email:</td><td><?php echo $_smarty_tpl->tpl_vars['order']->value['ship_email'];?>
</td></tr>
<?php }
if ($_smarty_tpl->tpl_vars['order']->value['phone'] || $_smarty_tpl->tpl_vars['order']->value['ship_phone']) {?>
<tr><td class="alignRight">Phone:</td><td><?php echo $_smarty_tpl->tpl_vars['order']->value['ship_phone'];?>
</td></tr>
<?php }
if ($_smarty_tpl->tpl_vars['order']->value['ship_method']) {?>
<tr><td class="alignRight">Shipping Method:</td><td><?php echo $_smarty_tpl->tpl_vars['order']->value['ship_method'];?>
</td></tr>
<?php }
if ($_smarty_tpl->tpl_vars['order']->value['need_by_date']) {?>
<tr><td class="alignRight nowrap">Needed By:</td><td><?php echo $_smarty_tpl->tpl_vars['order']->value['need_by_date'];?>
</td></tr>
<?php }?>
</table>
</div>
<div class="clean"></div>
<div class="some_space5">
<p><span class="bld">Unfavorable Weather:</span> Shipping during periods of extreme heat or cold can damage wine. Your wines will be shipped by us in perfect condition and any damage due to weather is not covered by UPS insurance, or guaranteed by us. Please contact us at webshop@bluedanubewine.com or +1 (650) 941-4699 and we will gladly store your wine.</p>
<p><span class="bld">Manage your home deliveries with UPS My Choice:</span> Take control of your home deliveries by signing up for UPS My Choice today! As a UPS My Choice Member you can reschedule, redirect, or give authorization online for UPS to deliver packages without a signature when you won't be home to sign in person &mdash; that means no more missed deliveries. With two membership levels to choose from, UPS My Choice &mdash; which is free &mdash; and UPS My Choice Premium, you decide how much control you need when it comes to managing your UPS home deliveries. If this interests you please sign up at <a href="http://www.ups.com/mychoice/" target="_blank">http://www.ups.com/mychoice/</a></p>
</div>

</div>


<?php if ($_smarty_tpl->tpl_vars['nondebug']->value) {?>
<!-- Google Code for shop Conversion Page -->

<?php echo '<script'; ?>
 type="text/javascript">
/* <![CDATA[ */
var google_conversion_id = 1071156706;
var google_conversion_language = "en";
var google_conversion_format = "1";
var google_conversion_color = "ffffff";
var google_conversion_label = "7V2wCMCRywIQ4pvi_gM";
var google_conversion_value = 1.00;
var google_conversion_currency = "USD";
var google_remarketing_only = false;
/* ]]> */
<?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="//www.googleadservices.com/pagead/conversion.js">
<?php echo '</script'; ?>
>

<noscript>
<div style="display:inline;">
<img height="1" width="1" style="border-style:none;" alt="" src="//www.googleadservices.com/pagead/conversion/1071156706/?value=1.00&amp;currency_code=USD&amp;label=7V2wCMCRywIQ4pvi_gM&amp;guid=ON&amp;script=0"/>
</div>
</noscript>


<?php echo '<script'; ?>
>
ga('require', 'ecommerce', 'ecommerce.js');
ga('ecommerce:addTransaction', {'id': '<?php echo $_smarty_tpl->tpl_vars['order']->value['invoice_number'];?>
','affiliation': 'Blue Danube Wine','revenue': '<?php echo $_smarty_tpl->tpl_vars['order']->value['grand_total'];?>
','shipping': '<?php echo $_smarty_tpl->tpl_vars['order']->value['shipping'];?>
','tax': '<?php echo $_smarty_tpl->tpl_vars['order']->value['tax'];?>
'});

<?php
$__section_bit_1_saved = isset($_smarty_tpl->tpl_vars['__smarty_section_bit']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit'] : false;
$__section_bit_1_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['items']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_bit_1_total = $__section_bit_1_loop;
$_smarty_tpl->tpl_vars['__smarty_section_bit'] = new Smarty_Variable(array());
if ($__section_bit_1_total != 0) {
for ($__section_bit_1_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] = 0; $__section_bit_1_iteration <= $__section_bit_1_total; $__section_bit_1_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']++){
?>
ga('ecommerce:addItem', {
  'id': '<?php echo $_smarty_tpl->tpl_vars['order']->value['invoice_number'];?>
',                     
  'name': '<?php echo $_smarty_tpl->tpl_vars['items']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['product_name'];?>
',    
  'sku': '<?php echo $_smarty_tpl->tpl_vars['items']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['product_id'];?>
',                 
  'price': '<?php echo $_smarty_tpl->tpl_vars['items']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['price'];?>
',                 
  'quantity': '<?php echo $_smarty_tpl->tpl_vars['items']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['quantity'];?>
'                   
});
<?php
}
}
if ($__section_bit_1_saved) {
$_smarty_tpl->tpl_vars['__smarty_section_bit'] = $__section_bit_1_saved;
}
?>
ga('ecommerce:send');
<?php echo '</script'; ?>
>

<!-- End Google Analytics -->
<?php }?>

<?php }?>


<?php $_smarty_tpl->_assignInScope('head_title', " - Order Receipt");
}
}
