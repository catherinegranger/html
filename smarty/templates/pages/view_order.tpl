{if !$order_found}
<div class="ucvalidation">
&bull;&nbsp;Sorry, we cannot access this order: permission denied
</div>
{else}

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
{section name=bit loop=$items}
<tr>
<td>{$items[bit].ident}</td>
<td class="alignRight">{if $items[bit].quantity > '0'}{$items[bit].quantity}{/if}</td>
<td class="alignRight nowrap" >{if $items[bit].base_price > $items[bit].price}<strike>${$items[bit].base_price}</strike> {/if} ${$items[bit].price}</td>
<td class="alignRight">${$items[bit].total_price}</td>
</tr>
{/section}
<tr><td colspan="4" class="topdotted"></td></tr>
<tr><td colspan="3" class="alignRight">Tax:</td>
<td colspan="1" class="alignRight">${$order.tax}</td></tr>
<tr><td colspan="3" class="alignRight">Shipping:</td>
<td colspan="1" class="alignRight">${$order.shipping}</td></tr>
{if $wine_club && $order.shipping_savings > 0}
<tr><td colspan="4" class="bld alignRight">Vino Danubia Shipping Savings: ${$order.shipping_savings}</td></tr>
{/if}
{if $order.adult_signature > 0}
<tr><td colspan="3" class="alignRight">Adult Signature:</td>
<td colspan="1" class="alignRight">${$order.adult_signature}</td></tr>
{/if}
{if $wine_club && $order.adult_signature_savings > 0}
<tr><td colspan="4" class="bld alignRight">Vino Danubia Adult Signature savings: ${$order.adult_signature_savings}</td></tr>
{/if}
{if $order.include_card_cost > 0}
<tr><td colspan="3" class="alignRight">Greeting Card:</td>
<td colspan="1" class="alignRight">${$order.include_card_cost}</td></tr>
{/if}
<tr><td colspan="4" class="topdotted"></td></tr>
{if $order.giftcard_id > 0}
<tr><td colspan="3" class="pix14 rdd bld alignRight">Total:</td>
<td colspan="1" class="pix14 bld alignRight">${$order.grand_total}</td></tr>
<tr><td colspan="3" class="pix14 rdd bld alignRight">Gift Card Payment:</td>
<td colspan="1" class="pix14 bld alignRight nowrap">-${$order.giftcard_payment}</td></tr>
<tr><td colspan="3" class="pix14 rdd bld alignRight">Grand Total:</td>
<td colspan="1" class="pix14 bld alignRight">${$order.giftcard_total}</td></tr>
{else}
<tr><td colspan="3" class="pix14 rdd bld alignRight">Order Total:</td>
<td colspan="1" class="pix14 bld alignRight">${$order.grand_total}</td></tr>
{/if}
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
{section name=bit loop=$items}
<tr>
<td class="alignRight" style="width:1%;">
{if $items[bit].quantity > '0'}{$items[bit].quantity}{/if}
</td>
<td>{$items[bit].product_name}
{if $items[bit].base_price > $items[bit].price}<strike>${$items[bit].base_price}</strike> {/if} ${$items[bit].price}
</td>
<td class="alignRight">${$items[bit].total_price}</td>
</tr>
{/section}
<tr><td colspan="3" class="topdotted"></td></tr>
<tr><td colspan="2" class="alignRight">Tax:</td>
<td colspan="1" class="alignRight">${$order.tax}</td></tr>
<tr><td colspan="2" class="alignRight">Shipping:</td>
<td colspan="1" class="alignRight">${$order.shipping}</td></tr>
{if $wine_club && $order.shipping_savings > 0}
<tr><td colspan="3" class="bld alignRight">Vino Danubia Shipping Savings: ${$order.shipping_savings}</td></tr>
{/if}
{if $order.adult_signature > 0}
<tr><td colspan="2" class="alignRight">Adult Signature:</td>
<td colspan="1" class="alignRight">${$order.adult_signature}</td></tr>
{/if}
{if $wine_club && $order.adult_signature_savings > 0}
<tr><td colspan="3" class="bld alignRight">Vino Danubia Adult Signature savings: ${$order.adult_signature_savings}</td></tr>
{/if}
{if $order.include_card_cost > 0}
<tr><td colspan="2" class="alignRight">Greeting Card:</td>
<td colspan="1" class="alignRight">${$order.include_card_cost}</td></tr>
{/if}
<tr><td colspan="3" class="topdotted"></td></tr>
{if $order.giftcard_id > 0}
<tr><td colspan="2" class="pix14 rdd bld alignRight">Total:</td>
<td colspan="1" class="pix14 bld alignRight">${$order.grand_total}</td></tr>
<tr><td colspan="2" class="pix14 rdd bld alignRight">Gift Card Payment:</td>
<td colspan="1" class="pix14 bld alignRight nowrap">-${$order.giftcard_payment}</td></tr>
<tr><td colspan="2" class="pix14 rdd bld alignRight">Grand Total:</td>
<td colspan="1" class="pix14 bld alignRight">${$order.giftcard_total}</td></tr>
{else}
<tr><td colspan="2" class="pix14 rdd bld alignRight">Order Total:</td>
<td colspan="1" class="pix14 rdd bld alignRight">${$order.grand_total}</td></tr>
{/if}
</table>
</div>
</div>
<div class="clean"></div>

<div class="view_order">
<h4>Payment Information:</h4>
<div class="bdgrid6first billship">
<table>
<tr><td class="alignRight" nowrap>Invoice Number:</td><td style="width:80%;">{$order.invoice_number}</td></tr>
<tr><td class="alignRight" nowrap>Payment Method:</td><td style="width:80%;">{$order.payment_method} {$order.account_number}</td></tr>
{if $order.giftcard_id > 0}
<tr><td class="alignRight" nowrap>Gift Card Balance:</td><td style="width:80%;">${$order.giftcard_balance}</td></tr>
{/if}
</table>
</div>
<div class="bdgrid6last billship">
<table>
<tr><td class="alignRight" style="width:5%;" nowrap>Placed:</td><td style="width:95%;">{$order.placed}</td></tr>
<tr><td class="alignRight" nowrap>Status:</td><td style="width:80%;">{$order.status} on {$order.status_timestamp}</td></tr>
</table>
</div>
</div>
<div class="clean"></div>


<div class="view_order some_space2">
<div class="bdgrid6first billship">
<h4>Billing Information:</h4>
<table>
<tr><td class="alignRight" style="width:20%;">Name:</td><td style="width:80%;">{$recipient.name}</td></tr>
{if $recipient.address || $order.address}
<tr><td class="alignRight">Address:</td><td>{$recipient.address}</td></tr>
{/if}
{if $recipient.city || $order.city}
<tr><td class="alignRight">City:</td><td>{$recipient.city}</td></tr>
{/if}
{if $recipient.email || $order.email}
<tr><td class="alignRight">Email:</td><td>{$recipient.email}</td></tr>
{/if}
{if $recipient.phone || $order.phone}
<tr><td class="alignRight">Phone:</td><td>{$recipient.phone}</td></tr>
{/if}
{if $order.need_by_date}
<tr><td colspan="2">Needed By: {$order.need_by_date}</td></tr>
{/if}
{if $order.instructions}
<tr><td colspan="2">Instructions: {$order.instructions}</td></tr>
{/if}
{if $order.include_card_msg}
<tr><td colspan="2">Personalised Message: {$order.include_card_msg}</td></tr>
{/if}
</table>
</div>

<div class="bdgrid6last billship">
<h4>Shipping Information:</h4>
<table>
<tr><td class="alignRight" style="width:20%;">Name:</td><td style="width:80%;">{$order.name}</td></tr>
{if $recipient.address || $order.address}
<tr><td class="alignRight">Address:</td><td>{$order.address}</td></tr>
{/if}
{if $recipient.city || $order.city}
<tr><td class="alignRight">City:</td><td>{$order.city}</td></tr>
{/if}
{if $recipient.email || $order.email}
<tr><td class="alignRight">Email:</td><td>{$order.email}</td></tr>
{/if}
{if $recipient.phone || $order.phone}
<tr><td class="alignRight">Phone:</td><td>{$order.phone}</td></tr>
{/if}
{if $order.shipping_method}
<tr><td class="alignRight">Shipping:</td><td>{$order.shipping_method}</td></tr>
{/if}
</table>
</div>
</div>

<div class="clean"></div>
</article>
{/if}
{assign var="head_title" value=" - View Order"}
