<?php
/* Smarty version 3.1.30, created on 2018-04-27 19:33:30
  from "/var/www/html/smarty/templates/amn/pages/edit_order.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5ae37b0a6d7b54_61880349',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b1bb66724180dac44887e89d9cc2fea81577407b' => 
    array (
      0 => '/var/www/html/smarty/templates/amn/pages/edit_order.tpl',
      1 => 1523659342,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ae37b0a6d7b54_61880349 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['tri']->value == "success") {?><div class="error" style="text-align:center;">Order updated successfully!</div><?php }
if ($_smarty_tpl->tpl_vars['tri']->value == "error") {?><div class="error" style="text-align:center;">There was a problem.</div><?php }?>

<div style="margin-left:10px;width:750px;">

<p>View the customer invoice in a <a href="/amnprint/edit_order_print/<?php echo $_smarty_tpl->tpl_vars['o_id']->value;?>
">print friendly format</a>.</p>

<form method="post" action="/update_order/">
<input type="hidden" name="o_id" value="<?php echo $_smarty_tpl->tpl_vars['o_id']->value;?>
" />
<input type="hidden" name="ship_address1" value="<?php echo $_smarty_tpl->tpl_vars['ship_address1']->value;?>
" />
<input type="hidden" name="ship_address2" value="<?php echo $_smarty_tpl->tpl_vars['ship_address2']->value;?>
" />
<input type="hidden" name="ship_city" value="<?php echo $_smarty_tpl->tpl_vars['ship_city']->value;?>
" />
<input type="hidden" name="ship_state" value="<?php echo $_smarty_tpl->tpl_vars['ship_state']->value;?>
" />
<input type="hidden" name="ship_zipcode" value="<?php echo $_smarty_tpl->tpl_vars['ship_zipcode']->value;?>
" />
<input type="hidden" name="status" value="<?php echo $_smarty_tpl->tpl_vars['status']->value;?>
" />
<input type="hidden" name="status_timestamp" value="<?php echo $_smarty_tpl->tpl_vars['status_timestamp']->value;?>
" />

<table cellpadding="2" cellspacing="0">
<tr>
<td style="width:5%;white-space:nowrap;"><b>Product Id</b></td>
<td style="width:50%;"><b>Item</b></td>
<td style="width:7%;text-align:right;"><b>Quantity</b></td>
<td style="width:9%;text-align:right;"><b>Unit Price</b></td>
<td style="width:9%;text-align:right;"><b>Total</b></td>
</tr>
<tr><td colspan="5" style="border-top: 1px dotted #aeaeae; padding: 3px;"></td></tr>
<?php
$__section_bit_0_saved = isset($_smarty_tpl->tpl_vars['__smarty_section_bit']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit'] : false;
$__section_bit_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['items']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_bit_0_total = $__section_bit_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_bit'] = new Smarty_Variable(array());
if ($__section_bit_0_total != 0) {
for ($__section_bit_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] = 0; $__section_bit_0_iteration <= $__section_bit_0_total; $__section_bit_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']++){
?>
<tr>
<td><?php echo $_smarty_tpl->tpl_vars['items']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['product_id'];?>
</td>
<td><?php echo $_smarty_tpl->tpl_vars['items']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['ident'];?>
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
<tr><td></td><td>Bonus Bottle</td><td class="alignRight"><?php echo $_smarty_tpl->tpl_vars['bonus_bottle']->value;?>
</td><td class="alignRight">$0.00</td><td class="alignRight">$0.00</td></tr>
<?php }?>
<tr><td colspan="5" style="border-top: 1px dotted #aeaeae; padding-top:3px;"></td></tr>
<tr><td colspan="4" style="text-align:right;">Tax:</td>
<td colspan="1" style="text-align:right;">$<?php echo $_smarty_tpl->tpl_vars['tax']->value;?>
</td></tr>
<tr><td colspan="4" style="text-align:right;">Shipping:</td>
<td colspan="1" style="text-align:right;">$<?php echo $_smarty_tpl->tpl_vars['shipping']->value;?>
</td></tr>
<?php if ($_smarty_tpl->tpl_vars['wine_club']->value && $_smarty_tpl->tpl_vars['shipping_savings']->value > 0) {?>
<tr><td colspan="5" class="bld alignRight">Vino Danubia Shipping Savings: $<?php echo $_smarty_tpl->tpl_vars['shipping_savings']->value;?>
</td></tr>
<?php }
if ($_smarty_tpl->tpl_vars['adult_signature']->value > 0) {?>
<tr><td colspan="4" style="text-align:right;">Adult Signature:</td>
<td colspan="1" style="text-align:right;">$<?php echo $_smarty_tpl->tpl_vars['adult_signature']->value;?>
</td></tr>
<?php }
if ($_smarty_tpl->tpl_vars['wine_club']->value && $_smarty_tpl->tpl_vars['adult_signature_savings']->value > 0) {?>
<tr><td colspan="5" class="bld alignRight">Vino Danubia Adult Signature savings: $<?php echo $_smarty_tpl->tpl_vars['adult_signature_savings']->value;?>
</td></tr>
<?php }
if ($_smarty_tpl->tpl_vars['include_card_cost']->value > 0) {?>
<tr><td colspan="4" style="text-align:right;">Greeting Card:</td>
<td colspan="1" style="text-align:right;">$<?php echo $_smarty_tpl->tpl_vars['include_card_cost']->value;?>
</td></tr>
<?php }?>
<tr><td colspan="5" style="border-top: 1px dotted #aeaeae; padding-top:3px;"></td></tr>
<?php if ($_smarty_tpl->tpl_vars['giftcard_id']->value > 0) {?>
<tr><td colspan="4" class="pix14 rdd bld alignRight">Total:</td>
<td colspan="1" class="pix14 bld alignRight">$<?php echo $_smarty_tpl->tpl_vars['grand_total']->value;?>
</td></tr>
<tr><td colspan="4" class="pix14 rdd bld alignRight">Gift Card <?php echo $_smarty_tpl->tpl_vars['giftcard_quickbooks_id']->value;?>
 Payment:</td>
<td colspan="1" class="pix14 bld alignRight nowrap">-$<?php echo $_smarty_tpl->tpl_vars['giftcard_payment']->value;?>
</td></tr>
<tr><td colspan="4" class="pix14 rdd bld alignRight">Grand Total:</td>
<td colspan="1" class="pix14 bld alignRight">$<?php echo $_smarty_tpl->tpl_vars['giftcard_total']->value;?>
</td></tr>
<?php } else { ?>
<tr><td colspan="4" class="pix14 rdd bld alignRight">Order Total:</td>
<td colspan="1" class="pix14 bld alignRight">$<?php echo $_smarty_tpl->tpl_vars['grand_total']->value;?>
</td></tr>
<?php }?>
</table>

<table cellpadding="4" cellspacing="0">
<tr><td>
<b>Invoice Number:</b> W<?php echo $_smarty_tpl->tpl_vars['o_id']->value;?>
 
<br /><b>Placed:</b> <?php echo $_smarty_tpl->tpl_vars['placed']->value;?>

<?php if ($_smarty_tpl->tpl_vars['wine_club']->value) {?>
<br /><b>Wine Club Member</b> 
<?php }
if ($_smarty_tpl->tpl_vars['discount_name']->value) {?>
<br /><b>Discount Code:</b> <?php echo $_smarty_tpl->tpl_vars['discount_name']->value;?>

<?php }
if ($_smarty_tpl->tpl_vars['giftcard_id']->value > 0) {?>
<br><b>Gift Card <?php echo $_smarty_tpl->tpl_vars['giftcard_quickbooks_id']->value;?>
 Balance:</b> <?php echo $_smarty_tpl->tpl_vars['giftcard_balance']->value;?>

<?php }?>

</td>
<td>
<?php if ($_smarty_tpl->tpl_vars['response_code']->value == 1 || $_smarty_tpl->tpl_vars['response_code']->value == 4) {
if ($_smarty_tpl->tpl_vars['response_code']->value == 4) {?>
<b>Held for review:</b> <?php echo $_smarty_tpl->tpl_vars['response_reason_text']->value;?>
<br>
<?php }?>
<b>Transaction Id:</b> <?php echo $_smarty_tpl->tpl_vars['transaction_id']->value;?>

<br /><b>Authorization Code:</b> <?php echo $_smarty_tpl->tpl_vars['authorization_code']->value;?>

<br /><b>Payment Method:</b> <?php echo $_smarty_tpl->tpl_vars['payment_method']->value;?>
 <?php echo $_smarty_tpl->tpl_vars['account_number']->value;?>

<?php } elseif ($_smarty_tpl->tpl_vars['response_reason_text']->value) {?>
<br /><b>Payment Declined:</b> <?php echo $_smarty_tpl->tpl_vars['response_reason_text']->value;?>

<?php }?>
</td></tr>
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
<tr><td></td><td><button type="submit" title="Verify" name="submit_verify">&nbsp;Verify Address&nbsp;</button></td></tr>
<?php if ($_smarty_tpl->tpl_vars['validated_address']->value) {?><tr><td></td><td><?php echo $_smarty_tpl->tpl_vars['validated_address']->value;?>
</td></tr><?php }?>
<tr><td>
<b>Shipping Method:</b> <?php echo $_smarty_tpl->tpl_vars['shipping_method']->value;?>
</td>
<td><b>Admin Notes:</b></td>
</tr>
<tr><td>
<?php if ($_smarty_tpl->tpl_vars['need_by_date']->value) {?><b>Needed By:</b> <?php echo $_smarty_tpl->tpl_vars['need_by_date']->value;?>
<br><?php }
if ($_smarty_tpl->tpl_vars['instructions']->value) {?><b>Special Instructions:</b><br /><?php echo $_smarty_tpl->tpl_vars['instructions']->value;?>
<br><?php }
if ($_smarty_tpl->tpl_vars['include_card_msg']->value) {?><b>Include Greeting Card Message:</b><br /><?php echo $_smarty_tpl->tpl_vars['include_card_msg']->value;?>
<br><?php }?>
</td>
<td><textarea rows="3" cols="20" name="status_notes"><?php echo $_smarty_tpl->tpl_vars['status_notes']->value;?>
</textarea></td>
</tr>
<tr><td></td><td><button type="submit" title="Update" name="submit_update">&nbsp;Update&nbsp;</button></td></tr>
</table>
</form>

<form method="post" action="/update_order/">
<input type="hidden" name="o_id" value="<?php echo $_smarty_tpl->tpl_vars['o_id']->value;?>
" />
<input type="hidden" name="status_notes" value="<?php echo $_smarty_tpl->tpl_vars['status_notes']->value;?>
" />
<div id="status">
<br /><b>Status:</b> 
<select name="status" onchange="this.form.submit()">
	<option value="3"<?php if ($_smarty_tpl->tpl_vars['status']->value == '3') {?> selected<?php }?>>Shipped</option>
	<option value="5"<?php if ($_smarty_tpl->tpl_vars['status']->value == '5') {?> selected<?php }?>>New Order</option>
	<option value="6"<?php if ($_smarty_tpl->tpl_vars['status']->value == '6') {?> selected<?php }?>>Invoiced</option>
	<option value="2"<?php if ($_smarty_tpl->tpl_vars['status']->value == '2') {?> selected<?php }?>>Paid Authorize</option>
	<option value="23"<?php if ($_smarty_tpl->tpl_vars['status']->value == '23') {?> selected<?php }?>>Duplicate for Paid Authorize</option>
	<option value="9"<?php if ($_smarty_tpl->tpl_vars['status']->value == '9') {?> selected<?php }?>>Paid QuickBooks</option>
	<option value="21"<?php if ($_smarty_tpl->tpl_vars['status']->value == '21') {?> selected<?php }?>>Paid Gift Card</option>
	<option value="20"<?php if ($_smarty_tpl->tpl_vars['status']->value == '20') {?> selected<?php }?>>Partially Payed</option>
	<option value="11"<?php if ($_smarty_tpl->tpl_vars['status']->value == '11') {?> selected<?php }?>>Partially Shipped</option>
	<option value="12"<?php if ($_smarty_tpl->tpl_vars['status']->value == '12') {?> selected<?php }?>>Ship Later</option>
	<option value="13"<?php if ($_smarty_tpl->tpl_vars['status']->value == '13') {?> selected<?php }?>>Backlog</option>
	<option value="19"<?php if ($_smarty_tpl->tpl_vars['status']->value == '19') {?> selected<?php }?>>THub Download Failed</option>
	<option value="14"<?php if ($_smarty_tpl->tpl_vars['status']->value == '14') {?> selected<?php }?>>Weather Delay</option>
	<option value="15"<?php if ($_smarty_tpl->tpl_vars['status']->value == '15') {?> selected<?php }?>>Damaged</option>
	<option value="16"<?php if ($_smarty_tpl->tpl_vars['status']->value == '16') {?> selected<?php }?>>Re-ship</option>
	<option value="17"<?php if ($_smarty_tpl->tpl_vars['status']->value == '17') {?> selected<?php }?>>Returned to BDW</option>
	<option value="0"<?php if ($_smarty_tpl->tpl_vars['status']->value == '0') {?> selected<?php }?>>Declined by Customer</option>
	<option value="1"<?php if ($_smarty_tpl->tpl_vars['status']->value == '1') {?> selected<?php }?>>Declined by BDW</option>
	<option value="7"<?php if ($_smarty_tpl->tpl_vars['status']->value == '7') {?> selected<?php }?>>Authorize Payment Declined</option>
	<option value="22"<?php if ($_smarty_tpl->tpl_vars['status']->value == '22') {?> selected<?php }?>>Gift Card Maxed Out</option>
	<option value="8"<?php if ($_smarty_tpl->tpl_vars['status']->value == '8') {?> selected<?php }?>>Suspended by Customer</option>
	<option value="18"<?php if ($_smarty_tpl->tpl_vars['status']->value == '18') {?> selected<?php }?>>Contacted by BDW</option>
	<option value="4"<?php if ($_smarty_tpl->tpl_vars['status']->value == '4') {?> selected<?php }?>>Discard</option>
</select> &nbsp; <b>Status Date:</b> <?php echo $_smarty_tpl->tpl_vars['status_timestamp']->value;?>

<br /><i>If you change this dropdown, it will update the status of the order.</i>
</div>
</form>

</div>

<?php }
}
