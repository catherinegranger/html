{if $tri == "success"}<div class="error" style="text-align:center;">Order updated successfully!</div>{/if}
{if $tri == "error"}<div class="error" style="text-align:center;">There was a problem.</div>{/if}

<div style="margin-left:10px;width:750px;">

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
<td style="text-align:right;">${$items[bit].price}</td>
<td style="text-align:right;">${$items[bit].total_price}</td>
</tr>
{/section}
<tr><td colspan="5" style="border-top: 1px dotted #aeaeae; padding-top:3px;"></td></tr>
<tr><td colspan="4" style="text-align:right;">Tax:</td>
<td colspan="1" style="text-align:right;">${$tax}</td></tr>
<tr><td colspan="4" style="text-align:right;">Shipping:</td>
<td colspan="1" style="text-align:right;">${$shipping}</td></tr>

<tr><td colspan="5" style="border-top: 1px dotted #aeaeae; padding-top:3px;"></td></tr>
<tr>
<td colspan="4" style="text-align:right;" class="pix14 rdd bld">Order Total:</td>
<td colspan="1" class="pix14 rdd bld" style="text-align:right;">${$grand_total}</td>
</tr>
</table>

<table cellpadding="4" cellspacing="0">
<tr><td colspan="2">
<b>Invoice Number:</b> W{$o_id} 
<br /><b>Placed:</b> {$placed}
{if $response_code == 1}
<br /><b>Transaction Id:</b> {$transaction_id}
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
<tr><td colspan="2"><b>Shipping Method:</b> {$shipping_method}</td></tr>
<tr><td colspan="2">
{if $instructions}
<b>Special Instructions:</b><br />{$instructions}
{else}
No special instructions.
{/if}
</td></tr>

</table>

<form method="post" action="/update_order/"><input type="hidden" name="o_id" value="{$o_id}" />
<div id="status">
<br /><b>Status:</b> 
<select name="status" onchange="this.form.submit()">
				<option value="5"{if $status == '5'} selected{/if}>New Order</option>
				<option value="6"{if $status == '6'} selected{/if}>Invoiced</option>
				<option value="2"{if $status == '2'} selected{/if}>PAID</option>
				<option value="3"{if $status == '3'} selected{/if}>Delivered</option>
				<option value="0"{if $status == '0'} selected{/if}>Declined by Customer</option>
				<option value="1"{if $status == '1'} selected{/if}>Declined by BDW</option>
				<option value="1"{if $status == '7'} selected{/if}>Payment Declined</option>
				<option value="4"{if $status == '4'} selected{/if}>Discard</option>
</select>
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