{if !$order_found}
<div class="ucvalidation some_space5">
&bull;&nbsp;Sorry, we cannot access this order: permission denied
</div>

{elseif !$order_success}
<div class="ucvalidation some_space5">
&bull;&nbsp;Sorry, your payment was not processed successfully for the following reason: {$order.response_reason_text}
</div>

{elseif $order_processed}
<div class="ucsuccess some_space5">
&bull;&nbsp;Thanks for your order! Your payment was processed successfully and an e-mail confirmation has been sent to you.
</div>

{else}
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
{if $receipt_success}
{if $response_code == '1'}
<span class="bld pix16">Thank you for your order!</span>
<p>Your payment was processed successfully and an e-mail confirmation has been sent to you.</p>
{else}
<span class="bld pix16">Thank you for your business!</span>
<p>Your order has been received and an e-mail confirmation will be sent to you.</p>
{/if}
</div>
{/if}
{include file="modules/mod_succerrors.tpl"}

<h4>Payment Information:</h4>
<div class="bdgrid6first billship">
<table>
<tr><td class="alignRight" nowrap>Invoice Number:</td><td style="width:80%;">{$order.invoice_number}</td></tr>
<tr><td class="alignRight" style="width:5%;" nowrap>Order Placed:</td><td style="width:95%;">{$order.placed}</td></tr>
</table>
</div>
<div class="bdgrid6last billship">
<table>
<tr><td class="alignRight" nowrap>Payment Method:</td><td style="width:80%;">{$order.payment_method} {$order.account_number}</td></tr>
{if $order.authorization_code}
<tr><td class="alignRight" nowrap>Authorization Code:</td><td style="width:80%;">{$order.authorization_code}</td></tr>
{/if}
{if $order.giftcard_id > 0}
<tr><td class="alignRight" nowrap>Gift Card Balance:</td><td style="width:80%;">${$order.giftcard_balance}</td></tr>
{/if}
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
{section name=bit loop=$items}
<tr>
<td>{$items[bit].product_name} {if $items[bit].product_name == "Gift Card"}<br><a href="/print/giftcard_print/{$items[bit].created_date}/" target="_blank">Print/Preview E-Gift Card >></a>{/if}</td>
<td style="text-align:right;">{if $items[bit].quantity > '0'}{$items[bit].quantity}{/if}</td>
<td style="text-align:right;">${$items[bit].price}</td>
<td style="text-align:right;">${$items[bit].total_price}</td>
</tr>
{/section}
<tr><td colspan="4" class="topdotted"></td></tr>
<tr><td colspan="3" class="alignRight">Tax:</td>
<td colspan="1" class="alignRight">${$order.tax}</td></tr>
<tr><td colspan="3" class="alignRight">Shipping:</td>
<td colspan="1" class="alignRight">${$order.shipping}</td></tr>
{if $order.include_card}
<tr><td colspan="3" class="alignRight">Greeting Card:</td>
<td colspan="1" class="alignRight">${$order.include_card_cost}</td></tr>
{/if}
{if $order.adult_signature > 0}
<tr><td colspan="3" class="alignRight">Adult Signature:</td>
<td colspan="1" class="alignRight">${$order.adult_signature}</td></tr>
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
</table>
</div>

<div class="bdgrid6first billship">
<h4>Billing Information:</h4>
<table>
<tr><td class="alignRight" style="width:20%;">Name:</td><td style="width:80%;">{$order.name}</td></tr>
{if $order.address || $order.ship_address}
<tr><td class="alignRight">Address:</td><td>{$order.address}</td></tr>
{/if}
{if $order.city || $order.ship_city}
<tr><td class="alignRight">City:</td><td>{$order.city}</td></tr>
{/if}
{if $order.email || $order.ship_email}
<tr><td class="alignRight">Email:</td><td>{$order.email}</td></tr>
{/if}
{if $order.phone || $order.ship_phone}
<tr><td class="alignRight">Phone:</td><td>{$order.phone}</td></tr>
{/if}
{if $order.instructions}
<tr><td class="alignRight">Instructions:</td><td>{$order.instructions}</td></tr>
{/if}
{if $order.include_card_msg}
<tr><td class="alignRight nowrap">Personalised Message:</td><td>{$order.include_card_msg}</td></tr>
{/if}
</table>
</div>
<div class="bdgrid6last billship">
<h4>Shipping Information:</h4>
<table>
<tr><td class="alignRight" style="width:20%;">Name:</td><td style="width:80%;">{$order.ship_name}</td></tr>
{if $order.address || $order.ship_address}
<tr><td class="alignRight">Address:</td><td>{$order.ship_address}</td></tr>
{/if}
{if $order.city || $order.ship_city}
<tr><td class="alignRight">City:</td><td>{$order.ship_city}</td></tr>
{/if}
{if $order.email || $order.ship_email}
<tr><td class="alignRight">Email:</td><td>{$order.ship_email}</td></tr>
{/if}
{if $order.phone || $order.ship_phone}
<tr><td class="alignRight">Phone:</td><td>{$order.ship_phone}</td></tr>
{/if}
{if $order.ship_method}
<tr><td class="alignRight">Shipping Method:</td><td>{$order.ship_method}</td></tr>
{/if}
{if $order.need_by_date}
<tr><td class="alignRight nowrap">Needed By:</td><td>{$order.need_by_date}</td></tr>
{/if}
</table>
</div>
<div class="clean"></div>
<div class="some_space5">
<p><span class="bld">Unfavorable Weather:</span> Shipping during periods of extreme heat or cold can damage wine. Your wines will be shipped by us in perfect condition and any damage due to weather is not covered by UPS insurance, or guaranteed by us. Please contact us at webshop@bluedanubewine.com or +1 (650) 941-4699 and we will gladly store your wine.</p>
</div>

</div>


{if $nondebug}
<!-- Google Code for shop Conversion Page -->
{literal}
<script type="text/javascript">
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
</script>
<script type="text/javascript" src="//www.googleadservices.com/pagead/conversion.js">
</script>
{/literal}
<noscript>
<div style="display:inline;">
<img height="1" width="1" style="border-style:none;" alt="" src="//www.googleadservices.com/pagead/conversion/1071156706/?value=1.00&amp;currency_code=USD&amp;label=7V2wCMCRywIQ4pvi_gM&amp;guid=ON&amp;script=0"/>
</div>
</noscript>

{literal}
<script>
ga('require', 'ecommerce', 'ecommerce.js');
ga('ecommerce:addTransaction', {'id': '{/literal}{$order.invoice_number}{literal}','affiliation': 'Blue Danube Wine','revenue': '{/literal}{$order.grand_total}{literal}','shipping': '{/literal}{$order.shipping}{literal}','tax': '{/literal}{$order.tax}{literal}'});

{/literal}{section name=bit loop=$items}{literal}
ga('ecommerce:addItem', {
  'id': '{/literal}{$order.invoice_number}{literal}',                     
  'name': '{/literal}{$items[bit].product_name}{literal}',    
  'sku': '{/literal}{$items[bit].product_id}{literal}',                 
  'price': '{/literal}{$items[bit].price}{literal}',                 
  'quantity': '{/literal}{$items[bit].quantity}{literal}'                   
});
{/literal}{/section}{literal}
ga('ecommerce:send');
</script>
{/literal}
<!-- End Google Analytics -->
{/if}

{/if}


{assign var="head_title" value=" - Order Receipt"}
