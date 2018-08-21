{if $tri == "success"}<div class="error" style="text-align:center;">Order updated successfully!</div>{/if}
{if $tri == "error"}<div class="error" style="text-align:center;">There was a problem.</div>{/if}

<div style="margin-left:10px;width:750px;">

<p>View the customer invoice in a <a href="/amnprint/edit_order_print/{$o_id}">print friendly format</a>.</p>

<form method="post" action="/update_order/">
<input type="hidden" name="o_id" value="{$o_id}" />
<input type="hidden" name="ship_address1" value="{$ship_address1}" />
<input type="hidden" name="ship_address2" value="{$ship_address2}" />
<input type="hidden" name="ship_city" value="{$ship_city}" />
<input type="hidden" name="ship_state" value="{$ship_state}" />
<input type="hidden" name="ship_zipcode" value="{$ship_zipcode}" />
<input type="hidden" name="status" value="{$status}" />
<input type="hidden" name="status_timestamp" value="{$status_timestamp}" />

<table cellpadding="2" cellspacing="0">
<tr>
<td style="width:5%;white-space:nowrap;"><b>Product Id</b></td>
<td style="width:50%;"><b>Item</b></td>
<td style="width:7%;text-align:right;"><b>Quantity</b></td>
<td style="width:9%;text-align:right;"><b>Unit Price</b></td>
<td style="width:9%;text-align:right;"><b>Total</b></td>
</tr>
<tr><td colspan="5" style="border-top: 1px dotted #aeaeae; padding: 3px;"></td></tr>
{section name=bit loop=$items}
<tr>
<td>{$items[bit].product_id}</td>
<td>{$items[bit].ident}</td>
<td style="text-align:right;">{$items[bit].quantity}</td>
<td style="text-align:right;white-space:nowrap;">{if $items[bit].base_price > $items[bit].price}<strike>${$items[bit].base_price}</strike> {/if} ${$items[bit].price}</td>
<td style="text-align:right;">${$items[bit].total_price}</td>
</tr>
{/section}
{if $bonus_bottle}
<tr><td></td><td>Bonus Bottle</td><td class="alignRight">{$bonus_bottle}</td><td class="alignRight">$0.00</td><td class="alignRight">$0.00</td></tr>
{/if}
<tr><td colspan="5" style="border-top: 1px dotted #aeaeae; padding-top:3px;"></td></tr>
<tr><td colspan="4" style="text-align:right;">Tax:</td>
<td colspan="1" style="text-align:right;">${$tax}</td></tr>
<tr><td colspan="4" style="text-align:right;">Shipping:</td>
<td colspan="1" style="text-align:right;">${$shipping}</td></tr>
{if $wine_club && $shipping_savings > 0}
<tr><td colspan="5" class="bld alignRight">Vino Danubia Shipping Savings: ${$shipping_savings}</td></tr>
{/if}
{if $adult_signature > 0}
<tr><td colspan="4" style="text-align:right;">Adult Signature:</td>
<td colspan="1" style="text-align:right;">${$adult_signature}</td></tr>
{/if}
{if $wine_club && $adult_signature_savings > 0}
<tr><td colspan="5" class="bld alignRight">Vino Danubia Adult Signature savings: ${$adult_signature_savings}</td></tr>
{/if}
{if $include_card_cost > 0}
<tr><td colspan="4" style="text-align:right;">Greeting Card:</td>
<td colspan="1" style="text-align:right;">${$include_card_cost}</td></tr>
{/if}
<tr><td colspan="5" style="border-top: 1px dotted #aeaeae; padding-top:3px;"></td></tr>
{if $giftcard_id > 0}
<tr><td colspan="4" class="pix14 rdd bld alignRight">Total:</td>
<td colspan="1" class="pix14 bld alignRight">${$grand_total}</td></tr>
<tr><td colspan="4" class="pix14 rdd bld alignRight">Gift Card {$giftcard_quickbooks_id} Payment:</td>
<td colspan="1" class="pix14 bld alignRight nowrap">-${$giftcard_payment}</td></tr>
<tr><td colspan="4" class="pix14 rdd bld alignRight">Grand Total:</td>
<td colspan="1" class="pix14 bld alignRight">${$giftcard_total}</td></tr>
{else}
<tr><td colspan="4" class="pix14 rdd bld alignRight">Order Total:</td>
<td colspan="1" class="pix14 bld alignRight">${$grand_total}</td></tr>
{/if}
</table>

<table cellpadding="4" cellspacing="0">
<tr><td>
<b>Invoice Number:</b> W{$o_id} 
<br /><b>Placed:</b> {$placed}
{if $wine_club}
<br /><b>Wine Club Member</b> 
{/if}
{if $discount_name}
<br /><b>Discount Code:</b> {$discount_name}
{/if}
{if $giftcard_id > 0}
<br><b>Gift Card {$giftcard_quickbooks_id} Balance:</b> {$giftcard_balance}
{/if}

</td>
<td>
{if $response_code == 1 || $response_code == 4}
{if $response_code == 4}
<b>Held for review:</b> {$response_reason_text}<br>
{/if}
<b>Transaction Id:</b> {$transaction_id}
<br /><b>Authorization Code:</b> {$authorization_code}
<br /><b>Payment Method:</b> {$payment_method} {$account_number}
{elseif $response_reason_text}
<br /><b>Payment Declined:</b> {$response_reason_text}
{/if}
</td></tr>
<tr>
<td style="width:50%;">
<b>Bill To:</b><br />
{$first_name} {$last_name}<br />
{$address1}
{if $address2}<br />{$address2}{/if}<br />
{$city}, {$state} {$zipcode}<br />
{$email}<br />
{$phone}<br />
</td>
<td style="width:50%;">
{if $ship_first_name}
<b>Ship To:</b><br />
{$ship_first_name} {$ship_last_name}<br />
{$ship_address1}
{if $ship_address2}<br />{$ship_address2}{/if}<br />
{$ship_city}, {$ship_state} {$ship_zipcode}<br />
{$ship_email}<br />
{$ship_phone}<br />
{else}
<b>Same as Billing</b>
{/if}
</td>
</tr>
<tr><td></td><td><button type="submit" title="Verify" name="submit_verify">&nbsp;Verify Address&nbsp;</button></td></tr>
{if $validated_address}<tr><td></td><td>{$validated_address}</td></tr>{/if}
<tr><td>
<b>Shipping Method:</b> {$shipping_method}</td>
<td><b>Admin Notes:</b></td>
</tr>
<tr><td>
{if $need_by_date}<b>Needed By:</b> {$need_by_date}<br>{/if}
{if $instructions}<b>Special Instructions:</b><br />{$instructions}<br>{/if}
{if $include_card_msg}<b>Include Greeting Card Message:</b><br />{$include_card_msg}<br>{/if}
</td>
<td><textarea rows="3" cols="20" name="status_notes">{$status_notes}</textarea></td>
</tr>
<tr><td></td><td><button type="submit" title="Update" name="submit_update">&nbsp;Update&nbsp;</button></td></tr>
</table>
</form>

<form method="post" action="/update_order/">
<input type="hidden" name="o_id" value="{$o_id}" />
<input type="hidden" name="status_notes" value="{$status_notes}" />
<div id="status">
<br /><b>Status:</b> 
<select name="status" onchange="this.form.submit()">
	<option value="3"{if $status == '3'} selected{/if}>Shipped</option>
	<option value="5"{if $status == '5'} selected{/if}>New Order</option>
	<option value="6"{if $status == '6'} selected{/if}>Invoiced</option>
	<option value="2"{if $status == '2'} selected{/if}>Paid Authorize</option>
	<option value="23"{if $status == '23'} selected{/if}>Duplicate for Paid Authorize</option>
	<option value="9"{if $status == '9'} selected{/if}>Paid QuickBooks</option>
	<option value="21"{if $status == '21'} selected{/if}>Paid Gift Card</option>
	<option value="20"{if $status == '20'} selected{/if}>Partially Payed</option>
	<option value="11"{if $status == '11'} selected{/if}>Partially Shipped</option>
	<option value="12"{if $status == '12'} selected{/if}>Ship Later</option>
	<option value="13"{if $status == '13'} selected{/if}>Backlog</option>
	<option value="19"{if $status == '19'} selected{/if}>THub Download Failed</option>
	<option value="14"{if $status == '14'} selected{/if}>Weather Delay</option>
	<option value="15"{if $status == '15'} selected{/if}>Damaged</option>
	<option value="16"{if $status == '16'} selected{/if}>Re-ship</option>
	<option value="17"{if $status == '17'} selected{/if}>Returned to BDW</option>
	<option value="0"{if $status == '0'} selected{/if}>Declined by Customer</option>
	<option value="1"{if $status == '1'} selected{/if}>Declined by BDW</option>
	<option value="7"{if $status == '7'} selected{/if}>Authorize Payment Declined</option>
	<option value="22"{if $status == '22'} selected{/if}>Gift Card Maxed Out</option>
	<option value="8"{if $status == '8'} selected{/if}>Suspended by Customer</option>
	<option value="18"{if $status == '18'} selected{/if}>Contacted by BDW</option>
	<option value="4"{if $status == '4'} selected{/if}>Discard</option>
</select> &nbsp; <b>Status Date:</b> {$status_timestamp}
<br /><i>If you change this dropdown, it will update the status of the order.</i>
</div>
</form>

</div>

{*
<div id="notes">
<form method="post" action="/submit_order_note/"><input type="hidden" name="o_id" value="{$o_id}" /><input type="hidden" name="u_id" value="{$smarty.session.u_id}" />
{section name=bit loop=$notes}
<b>Entered By:</b> {$notes[bit].name}<br />
<b>Date Entered:</b> {$notes[bit].note_placed}<br />
{$notes[bit].details}
<br />&nbsp;<br />
{/section}
<b>Submit a Note for this Order:</b><br />
<textarea rows="3" cols="35" name="details"></textarea><br />
<input type="submit" value="Add Note" />
</form>
</div>
*}