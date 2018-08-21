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

<form method="post" action="http://sql1.hungerhost.com/gateway/transact.dll">
  <input type="hidden" name="x_login" value="{$x_login}" />
  <input type="hidden" name="x_fp_sequence" value="{$x_fp_sequence}" />
  <input type="hidden" name="x_fp_timestamp" value="{$x_fp_timestamp}" />
  <input type="hidden" name="x_amount" value="{$x_amount}" />
  <input type="hidden" name="x_tax" value="Tax<|><|>{$order.tax}" />
  <input type="hidden" name="x_tax_exempt" value="{$x_tax_exempt}" />
  <input type="hidden" name="x_freight" value="Shipping<|><|>{$x_shipping}" />
  <input type="hidden" name="x_fp_hash" value="{$x_fp_hash}" />
  <input type='hidden' name="x_show_form" value="{$x_show_form}">
  <input type='hidden' name="x_test_request" value="{$x_test_request}" />
  <input type='hidden' name="x_method" value="{$x_method}">
  <input type="hidden" name="x_type" value="{$x_type}" />
  <input type="hidden" name="x_cancel_url" value="{$x_cancel_url}" />
  <input type="hidden" name="x_cancel_url_text" value="{$x_cancel_url_ext}" />
  <input type="hidden" name="x_version" value="{$x_version}" />
  <input type="hidden" name="x_relay_response" value="{$x_relay_response}" />
  <input type='hidden' name='x_relay_url' value="{$x_relay_response_url}" />
  <input type="hidden" name="x_invoice_num" value="{$order.invoice_number}" />
  <input type="hidden" name="x_description" value="{$order.invoice_number}" />
  <input type="hidden" name="x_cust_id" value="{$order.rec_id}" />
  <input type="hidden" name="x_first_name" value="{$recipient.first_name}" />
  <input type="hidden" name="x_last_name" value="{$recipient.last_name}" />
  <input type="hidden" name="x_address" value="{$x_address}" />
  <input type="hidden" name="x_country" value="{$x_country}" />
  <input type="hidden" name="x_city" value="{$recipient.city}" />
  <input type="hidden" name="x_state" value="{$x_state}" />
  <input type="hidden" name="x_zip" value="{$x_zipcode}" />
  <input type="hidden" name="x_phone" value="{$recipient.phone}" />
  <input type="hidden" name="x_email" value="{$recipient.email}" />
  <input type="hidden" name="x_ship_to_first_name" value="{$order.first_name}" />
  <input type="hidden" name="x_ship_to_last_name" value="{$order.last_name}" />
  <input type="hidden" name="x_ship_to_address" value="{$x_ship_to_address}" />
  <input type="hidden" name="x_ship_to_city" value="{$order.city}" />
  <input type="hidden" name="x_ship_to_state" value="{$order.state}" />
  <input type="hidden" name="x_ship_to_zip" value="{$order.zipcode}" />
  <input type="hidden" name="x_ship_to_country" value="{$x_shipcountry}" />
  <input type="hidden" name="ship_to_phone" value="{$order.phone}" />
  <input type="hidden" name="ship_to_email" value="{$order.email}" />
  <input type="hidden" name="instructions" value="{$order.instructions}" />
  <input type="hidden" name="order_placed" value="{$order.placed}" />
  <input type="hidden" name="x_footer_html_payment_form" value='<center><span style="font-size:11px;"><a href="http://bluedanubewine.com/" title="home">home</a> | <a href="http://bluedanubewine.com/news_events/" title="news and events"> news and events</a> | <a href="http://bluedanubewine.com/blog/" title="blog"> blog</a> | <a href="http://bluedanubewine.com/wines/" title="shop">shop</a> | <a href="http://bluedanubewine.com/shipping/" title="shipping">shipping</a> | <a href="http://bluedanubewine.com/about/" title="about us">about us</a> | <a href="http://bluedanubewine.com/contact/" title="contact">contact</a></span></center>' />
  {section name=bit loop=$items}
  <input type='hidden' name="x_line_item" value="{$items[bit].product_id}<|>{$items[bit].product_name|truncate:29:"":true}<|>{$items[bit].description|truncate:250:"":true}<|>{$items[bit].quantity}<|>{$items[bit].price}<|>{$x_item_taxable}">
  {/section}
{if $order.adult_signature > 0}
<input type='hidden' name="x_line_item" value="{$x_adult_signature_name}<|>{$x_adult_signature_name}<|>{$x_adult_signature_description}<|>1<|>{$x_adult_signature}<|>N">
{/if}

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
{section name=bit loop=$items}
<tr>
<td>{if $items[bit].year}{$items[bit].year}{/if}</td>
<td><a href="/wine/{if $items[bit].grup}sampler/{/if}{$items[bit].vint_id}/" title="{if $items[bit].wy_name}{if $items[bit].wy_name != "Specials"}{$items[bit].wy_name} {/if}{/if}{$items[bit].name} {if $items[bit].year}{$items[bit].year}{/if}">{if $items[bit].wy_name}{if $items[bit].wy_name != "Specials"}{$items[bit].wy_name} {/if}{/if}{$items[bit].name}</a></td>
<td class="alignRight">{$items[bit].quantity}</td>
<td class="alignRight nowrap">{if $items[bit].base_price > $items[bit].price}<strike>${$items[bit].base_price}</strike> {/if} ${$items[bit].price}</td>
<td class="alignRight">${$items[bit].total}</td>
</tr>
{/section}
<tr><td colspan="5" class="topdotted"></td></tr>
<tr><td colspan="4" class="alignRight">Tax:</td>
<td colspan="1" class="alignRight">${$order.tax}</td></tr>
<tr><td colspan="4" class="alignRight">Shipping:</td>
<td colspan="1" class="alignRight">${$order.shipping}</td></tr>
{if $order.adult_signature > 0}
<tr><td colspan="4" class="alignRight">Adult Signature:</td>
<td colspan="1" class="alignRight">${$order.adult_signature}</td></tr>
{/if}
<tr><td colspan="5" class="topdotted"></td></tr>
<tr><td colspan="4" class="pix14 rdd bld alignRight">Order Total:</td>
<td colspan="1" class="pix14 rdd bld alignRight">${$order.grand_total}</td></tr>
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
{section name=bit loop=$items}
<tr>
<td class="alignRight" style="width:1%;">
{$items[bit].quantity}
</td>
<td>
<a href="/wine/{if $items[bit].grup}sampler/{/if}{$items[bit].vint_id}/" title="{if $items[bit].wy_name}{if $items[bit].wy_name != "Specials"}{$items[bit].wy_name} {/if}{/if} {$items[bit].name} {if $items[bit].year}{$items[bit].year}{/if}">{if $items[bit].year}{$items[bit].year}{/if} {if $items[bit].wy_name}{if $items[bit].wy_name != "Specials"}{$items[bit].wy_name} {/if}{/if}{$items[bit].name}</a>
{if $items[bit].base_price > $items[bit].price}<strike>${$items[bit].base_price}</strike> {/if} ${$items[bit].price}
</td>
<td class="alignRight">${$items[bit].total}</td>
</tr>
{/section}
<tr><td colspan="3" class="topdotted"></td></tr>
<tr><td colspan="2" class="alignRight">Tax:</td>
<td colspan="1" class="alignRight">${$order.tax}</td></tr>
<tr><td colspan="2" class="alignRight">Shipping:</td>
<td colspan="1" class="alignRight">${$order.shipping}</td></tr>
{if $order.adult_signature > 0}
<tr><td colspan="2" class="alignRight">Adult Signature:</td>
<td colspan="1" class="alignRight">${$order.adult_signature}</td></tr>
{/if}
<tr><td colspan="3" class="topdotted"></td></tr>
<tr><td colspan="2" class="pix14 rdd bld alignRight">Order Total:</td>
<td colspan="1" class="pix14 rdd bld alignRight">${$order.grand_total}</td></tr>
</table>
</div>
</article>

<div>
<article class="billship bill billshipaligned">
<table>
<tr>
<td colspan="2"><span class="review_change">Billing Information</span>&nbsp; <a href="/billship/" title="Change billing information"><b>Change</b></a></td>
</tr>
<tr><td colspan="2" style="border-top: 1px solid #000000; padding:3px;"></td></tr>
<tr>
<td class="alignRight" style="width:20%;">Name:</td><td style="width:80%;">{$recipient.first_name} {$recipient.last_name}</td>
</tr>
{if $recipient.address1 || $order.address1}
<tr>
<td class="alignRight">Address:</td><td>{$recipient.address1}</td>
</tr>
{/if}
{if $recipient.address2 || $order.address2}
<tr>
<td class="alignRight">Address2:</td><td>{$recipient.address2}</td>
</tr>
{/if}
{if $recipient.city || $order.city}
<tr>
<td class="alignRight">City:</td><td>{$recipient.city}, {$recipient.state} {$recipient.zipcode}</td>
</tr>
{/if}
{if $recipient.email || $order.email}
<tr>
<td class="alignRight">Email:</td><td>{$recipient.email}</td>
</tr>
{/if}
{if $recipient.phone || $order.phone}
<tr>
<td class="alignRight">Phone:</td><td>{$recipient.phone}</td>
</tr>
{/if}
<tr>
{if $order.instructions}
<td class="alignRight">Instructions:</td><td>{$order.instructions}</td>
{else}
<td class="alignRight"></td><td></td>
{/if}
</tr>
</table>
</article>

<article class="billship ship billshipaligned">
<table>
<tr>
<td colspan="2"><span class="review_change">Shipping Information</span>&nbsp; <a href="/billship/" title="Change shipping information"><b>Change</b></a></td>
</tr>
<tr><td colspan="2" style="border-top: 1px solid #000000; padding:3px;"></td></tr>
<tr>
<td class="alignRight" style="width:20%;">Name:</td><td style="width:80%;">{$order.first_name} {$order.last_name}</td>
</tr>
{if $recipient.address1 || $order.address1}
<tr>
<td class="alignRight">Address:</td><td>{$order.address1}</td>
</tr>
{/if}
{if $recipient.address2 || $order.address2}
<tr>
<td class="alignRight">Address2:</td><td>{$order.address2}</td>
</tr>
{/if}
{if $recipient.city || $order.city}
<tr>
<td class="alignRight">City:</td><td>{$order.city}, {$order.state} {$order.zipcode}</td>
</tr>
{/if}
{if $recipient.email || $order.email}
<tr>
<td class="alignRight">Email:</td><td>{$order.email}</td>
</tr>
{/if}
{if $recipient.phone || $order.phone}
<tr>
<td class="alignRight">Phone:</td><td>{$order.phone}</td>
</tr>
{/if}
<tr>
<td class="alignRight">Shipping:</td><td>{$order.shipping_method}</td>
</tr>
</table>
</article>
<div class="clean"></div>
</div>
<div class="clean"></div>
<div class="buyprocess_buttons alignCenter">
<button type="submit" title="Place Your Order" name="submit_checkout">Place Your Order</button>
</div>
</form>
<div class="alignRight itl">
Secure payment by &nbsp;
<a href="http://www.authorize.net/"><img style="vertical-align:middle;" src="http://www.authorize.net/images/authorizenet_150_42.gif" border="0" alt="Authorize.Net Logo" width="150" height="42" /></a>
</div>


{assign var="head_title" value=" - Review Order"}
