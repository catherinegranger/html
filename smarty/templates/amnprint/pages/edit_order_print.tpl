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
<tr><td style="text-align:center;white-space:nowrap;">{$date}</td>
<td style="text-align:center;white-space:nowrap;">W{$o_id}</td></tr>
</table>
</td></tr></table>
<br/><br/>
<table cellpadding="4" cellspacing="0" border="0" width="100%">
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
</table>
<br/><b>Terms:</b> {$payment_method}
<br/><b>Ship Via:</b> {$shipping_method}
{if $discount_name}
<br/><b>Offer Code:</b> {$discount_name}
{/if}
<br/><br/>
<table  cellpadding="4" cellspacing="0">
<tr>
<td style="width:50%;"><b>Description</b></td>
<td style="width:7%;text-align:right;"><b>Quantity</b></td>
<td style="width:9%;text-align:right;"><b>Price Each</b></td>
<td style="width:9%;text-align:right;"><b>Amount</b></td>
</tr>
<tr><td colspan="4" style="border-top: 1px solid #aeaeae; padding: 3px;"></td></tr>
{section name=bit loop=$items}
<tr>
<td style="white-space:nowrap;">{$items[bit].ident}</td>
<td style="text-align:right;">{$items[bit].quantity}</td>
<td style="text-align:right;white-space:nowrap;">{if $items[bit].base_price > $items[bit].price}<strike>${$items[bit].base_price}</strike> {/if} ${$items[bit].price}</td>
<td style="text-align:right;">${$items[bit].total_price}</td>
</tr>
{/section}
{if $bonus_bottle}
<tr><td>Bonus Bottle</td><td style="text-align:right;">{$bonus_bottle}</td><td style="text-align:right;">$0.00</td><td style="text-align:right;">$0.00</td></tr>
{/if}
<tr><td colspan="4" style="border-top: 1px solid #aeaeae; padding-top:3px;"></td></tr>
<tr>
<td colspan="3" style="text-align:right;white-space:nowrap;">Sales Tax (8.75%):</td>
<td colspan="1" style="text-align:right;">${$tax}</td></tr>
<tr><td colspan="3" style="text-align:right;">Shipping:</td>
<td colspan="1" style="text-align:right;">${$shipping}</td></tr>
{if $wine_club && $shipping_savings > 0}
<tr><td colspan="4" style="text-align:right;"><b>Vino Danubia Shipping Savings: ${$shipping_savings}</b></td></tr>
{/if}

{if $adult_signature > 0}
<tr><td colspan="3" style="text-align:right;">Adult Signature:</td>
<td colspan="1" style="text-align:right;">${$adult_signature}</td></tr>
{/if}
{if $wine_club && $adult_signature_savings > 0}
<tr><td colspan="4" style="text-align:right;"><b>Vino Danubia Adult Signature savings: ${$adult_signature_savings}</b></td></tr>
{/if}
{if $include_card_cost > 0}
<tr><td colspan="3" style="text-align:right;">Greeting Card:</td>
<td colspan="1" style="text-align:right;">${$include_card_cost}</td></tr>
{/if}
<tr><td colspan="4" style="border-top: 1px solid #aeaeae; padding-top:3px;"></td></tr>
{if $giftcard_id > 0}
<tr><td colspan="2" style="white-space:nowrap;"></td>
<td colspan="1" class="pix14" style="text-align:right;">Total:</td>
<td colspan="1" class="pix14" style="text-align:right;">${$grand_total}</td></tr>
<tr><td colspan="2" style="white-space:nowrap;"></td>
<td colspan="1" class="pix14" style="text-align:right;white-space:nowrap;">Gift Card Payment:</td>
<td colspan="1" class="pix14" style="text-align:right;white-space:nowrap;">-${$giftcard_payment}</td></tr>
<tr><td colspan="2" style="white-space:nowrap;"></td>
<td colspan="1" class="pix16" style="text-align:right;white-space:nowrap;"><b>Grand Total:</b></td>
<td colspan="1" class="pix14" style="text-align:right;"><b>${$giftcard_total}</b></td></tr>
{else}
<tr><td colspan="2" style="white-space:nowrap;"></td>
<td colspan="1" class="pix16" style="text-align:right;"><b>Total:</b></td>
<td colspan="1" class="pix14" style="text-align:right;"><b>${$grand_total}</b></td></tr>
{/if}
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


