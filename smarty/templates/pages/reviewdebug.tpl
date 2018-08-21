{if FALSE}
<div class="alignCenter uchighlight bld">
<p>Please note: the Webshop team will be on vacation from January 1st to January 14th 2018. During these two weeks, the online store will be open for orders but no wine will be shipped. Wine shipments will resume the week of January 15th.</p>
</div>
{/if}

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

{include file="modules/mod_succerrors.tpl"}

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
<td><a href="{$items[bit].url}" title="{$items[bit].title}">{$items[bit].full_name}</a></td>
<td class="alignRight">{$items[bit].quantity}</td>
<td class="alignRight nowrap">{if $items[bit].base_price > $items[bit].price}<strike>${$items[bit].base_price}</strike> {/if} ${$items[bit].price}</td>
<td class="alignRight">${$items[bit].total}</td>
</tr>
{/section}
{if $bonus_bottle}
<tr><td></td><td>Bonus Bottle, Thanks for your business!</td><td class="alignRight">{$bonus_bottle}</td><td class="alignRight">$0.00</td><td class="alignRight">$0.00</td></tr>
{/if}
<tr><td colspan="5" class="topdotted"></td></tr>
<tr><td colspan="4" class="alignRight">Tax:</td>
<td colspan="1" class="alignRight">${$order.tax}</td></tr>
<tr><td colspan="4" class="alignRight">Shipping:</td>
<td colspan="1" class="alignRight">
{if $wineclub_shipping}{if $order.shipping == 0}<span class="rdd bld">FREE</span>{else}{if $shipping_savings}${$order.shipping}{else}<span class="rdd bld">${$order.shipping}</span>{/if}{/if}{else}${$order.shipping}{/if}
</td></tr>
{if $total_shipping_savings}
<tr><td colspan="5" class="alignRight"><span class="bld">Vino Danubia Shipping Savings: ${$total_shipping_savings}</span></td></tr>
{/if}
{if $order.adult_signature > 0}
<tr><td colspan="4" class="alignRight">Adult Signature:</td>
<td colspan="1" class="alignRight">{if $wineclub_shipping && ($order.shipping > 0)}<span class="rdd bld">{$order.adult_signature}</span>{else}${$order.adult_signature}{/if}</td></tr>
{/if}
{if $wineclub_shipping && ($order.shipping > 0)}
<tr><td colspan="5" class="alignRight"><span class="rdd bld">Order a multiple of 6 to get free shipping</span></td></tr>
{/if}
{if $order.include_card}
<tr><td colspan="4" class="alignRight">Greeting Card:</td>
<td colspan="1" class="alignRight">${$order.include_card_cost}</td></tr>
{/if}
<tr><td colspan="5" class="topdotted"></td></tr>
{if $order.giftcard_code}
<tr><td colspan="4" class="pix14 rdd bld alignRight">Total:</td>
<td colspan="1" class="pix14 rdd bld alignRight">${$order.grand_total}</td></tr>
<form method="post" action="/apply_giftcard/">
<tr>
<td colspan="5" class="pix14 rdd bld alignRight" style="vertical-align:middle;">
Gift Card:
<input style="background-color:#FDEFEF;" type="text" name="giftcard_code" value="{$order.giftcard_code}" maxlength="20" size="16" />
<button type="submit" title="Apply" name="apply_giftcard" class="btn btn-sm btn-primary">Apply</button>
</td>
</tr>
</form>
<tr><td colspan="4" class="pix14 rdd bld alignRight nowrap">Gift Card Payment:</td>
<td colspan="1" class="pix14 rdd bld alignRight">-${$order.giftcard_payment}</td></tr>
<tr><td colspan="4" class="pix14 rdd bld alignRight">Grand Total:</td>
<td colspan="1" class="pix14 rdd bld alignRight">${$order.giftcard_total}</td></tr>
{else}
<form method="post" action="/apply_giftcard/">
<tr>
<td colspan="5" class="pix14 rdd bld alignRight" style="vertical-align:middle;">
Gift Card:
<input style="background-color:#FDEFEF;" type="text" name="giftcard_code" value="{$order.giftcard_code}" maxlength="20" size="16" />
<button type="submit" title="Apply" name="apply_giftcard" class="btn btn-sm btn-primary">Apply</button>
</td>
</tr>
</form>
<tr><td colspan="4" class="pix14 rdd bld alignRight">Order Total:</td>
<td colspan="1" class="pix14 rdd bld alignRight">${$order.grand_total}</td></tr>
{/if}
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
<a href="{$items[bit].url}" title="{$items[bit].title}">{$items[bit].title}</a>
{if $items[bit].base_price > $items[bit].price}<strike>${$items[bit].base_price}</strike> {/if} ${$items[bit].price}
</td>
<td class="alignRight">${$items[bit].total}</td>
</tr>
{/section}
{if $bonus_bottle}
<tr><td class="alignRight" style="width:1%;">{$bonus_bottle}</td><td>Bonus Bottle, Thanks for your business! $0.00</td><td class="alignRight">$0.00</td></tr>
{/if}
<tr><td colspan="3" class="topdotted"></td></tr>
<tr><td colspan="2" class="alignRight">Tax:</td>
<td colspan="1" class="alignRight">${$order.tax}</td></tr>
<tr><td colspan="2" class="alignRight">Shipping:</td>
<td colspan="1" class="alignRight">
{if $wineclub_shipping}{if $order.shipping == 0}<span class="rdd bld">FREE</span>{else}{if $shipping_savings}${$order.shipping}{else}<span class="rdd bld">${$order.shipping}</span>{/if}{/if}{else}${$order.shipping}{/if}
</td></tr>
{if $total_shipping_savings}
<tr><td colspan="3" class="alignRight"><span class="bld">Vino Danubia Shipping Savings: ${$total_shipping_savings}</span></td></tr>
{/if}
{if $order.adult_signature > 0}
<tr><td colspan="2" class="alignRight">Adult Signature:</td>
<td colspan="1" class="alignRight">{if $wineclub_shipping && ($order.shipping > 0)}<span class="rdd bld">{$order.adult_signature}</span>{else}${$order.adult_signature}{/if}</td></tr>
{/if}
{if $wineclub_shipping && ($order.shipping > 0)}
<tr><td colspan="3" class="alignRight"><span class="rdd bld">Order a multiple of 6 to get free shipping</span></td></tr>
{/if}
{if ($wineclub_saving > 0)}
<tr><td colspan="3" class="alignRight"><span class="bld">Join our club <a href="/wineclub/" title="Join Vino Danubia">Vino Danubia</a> and save <span class="rdd">${$wineclub_saving}</span> in shipping cost!</span></td></tr>
{/if}
{if $order.include_card}
<tr><td colspan="2" class="alignRight">Greeting Card:</td>
<td colspan="1" class="alignRight">${$order.include_card_cost}</td></tr>
{/if}
<tr><td colspan="3" class="topdotted"></td></tr>
{if $order.giftcard_code}
<tr><td colspan="2" class="pix14 rdd bld alignRight">Total:</td>
<td colspan="1" class="pix14 rdd bld alignRight">${$order.grand_total}</td></tr>
<form method="post" action="/apply_giftcard/">
<tr class="nowrap">
<td colspan="3" class="pix14 rdd bld alignRight" style="vertical-align:middle;">
Gift Card:
<input style="background-color:#FDEFEF;" type="text" name="giftcard_code" value="{$order.giftcard_code}" maxlength="20" size="16" />
<button type="submit" title="Apply" name="apply_giftcard" class="btn btn-sm btn-primary">Apply</button></td>
</tr>
</form>
<tr><td colspan="2" class="pix14 rdd bld alignRight nowrap">Gift Card Payment:</td>
<td colspan="1" class="pix14 rdd bld alignRight nowrap">-${$order.giftcard_payment}</td></tr>
<tr><td colspan="2" class="pix14 rdd bld alignRight">Grand Total:</td>
<td colspan="1" class="pix14 rdd bld alignRight">${$order.giftcard_total}</td></tr>
{else}
<form method="post" action="/apply_giftcard/">
<tr class="nowrap">
<td colspan="3" class="pix14 rdd bld alignRight" style="vertical-align:middle;">
Gift Card:
<input style="background-color:#FDEFEF;" type="text" name="giftcard_code" value="{$order.giftcard_code}" maxlength="20" size="16" />
<button type="submit" title="Apply" name="apply_giftcard" class="btn btn-sm btn-primary">Apply</button></td>
</tr>
</form>
<tr><td colspan="2" class="pix14 rdd bld alignRight">Order Total:</td>
<td colspan="1" class="pix14 rdd bld alignRight">${$order.grand_total}</td></tr>
{/if}
</table>
</div>
</article>

<div>
<article class="bdgrid6first billship billshipaligned">
<table>
<tr>
<td colspan="2"><span class="review_change">Billing Information</span>&nbsp; <a href="/billshipdebug/" title="Change billing information"><b>Change</b></a></td>
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
<td class="alignRight">Instructions:</td>
{if $order.instructions}
<td>{$order.instructions}</td>
{else}
<td>No special instructions</td>
{/if}
</tr>
{if $order.include_card_msg}
<tr>
<td class="alignRight nowrap">Personalized Message:</td><td>{$order.include_card_msg}</td>
</tr>
{/if}
</table>
</article>

<article class="bdgrid6last billship billshipaligned">
<table>
<tr>
<td colspan="2"><span class="review_change">Shipping Information</span>&nbsp; <a href="/billshipdebug/" title="Change shipping information"><b>Change</b></a></td>
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
<tr>
<td class="alignRight">Needed By:</td>
{if $order.need_by_date}
<td>{$order.need_by_date}</td>
{else}
<td>n/a</td>
{/if}
</tr>
</table>
</article>
</div>

<div class="clean"></div>

{if $order_giftcard_paid}
<form method="post" action="{$form_action}">
<div class="reviewsubmit">
<button type="submit" title="Place Your Order" name="submit_checkout" class="btn btn-sm btn-primary">Place Your Order</button>
</div>
</form>
{else}
<form method="post" action="https://secure.authorize.net/gateway/transact.dll">
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
  <input type="hidden" name="Site" value="BDW Office" />
  <input type="hidden" name="x_logo_url" value="https://www.bluedanubewine.com/img/all/logo_for_authorize.png" />
  <input type="hidden" name="x_footer_html_payment_form" value='<center><span style="font-size:11px;"><a href="http://bluedanubewine.com/" title="home">home</a> | <a href="http://bluedanubewine.com/news_events/" title="news and events"> news and events</a> | <a href="http://bluedanubewine.com/blog/" title="blog"> blog</a> | <a href="http://bluedanubewine.com/wines/" title="shop">shop</a> | <a href="http://bluedanubewine.com/shipping/" title="shipping">shipping</a> | <a href="http://bluedanubewine.com/about/" title="about us">about us</a> | <a href="http://bluedanubewine.com/contact/" title="contact">contact</a></span></center>' />
  {section name=bit loop=$items}
  <input type='hidden' name="x_line_item" value="{$items[bit].product_id}<|>{$items[bit].product_name|truncate:29:"":true}<|>{$items[bit].description|truncate:250:"":true}<|>{$items[bit].quantity}<|>{$items[bit].price}<|>{$items[bit].taxable}">
  {/section}
{if $order.adult_signature > 0}
<input type='hidden' name="x_line_item" value="{$x_adult_signature_name}<|>{$x_adult_signature_name}<|>{$x_adult_signature_description}<|>1<|>{$x_adult_signature}<|>N">
{/if}
{if $order.include_card}
<input type='hidden' name="x_line_item" value="{$x_include_card_name}<|>{$x_include_card_name}<|>{$x_include_card_description}<|>1<|>{$x_include_card_cost}<|>N">
{/if}
{if $shipping_savings}
<input type='hidden' name="x_line_item" value="{$x_shipping_saving_name}<|>{$x_shipping_saving_name}<|>{$x_shipping_saving_description}<|>1<|>{$x_shipping_saving_cost}<|>N">
{/if}
{if $adult_signature_savings}
<input type='hidden' name="x_line_item" value="{$x_adult_signature_saving_name}<|>{$x_adult_signature_saving_name}<|>{$x_adult_signature_saving_description}<|>1<|>{$x_adult_signature_saving_cost}<|>N">
{/if}
{if $x_giftcard_amount > 0}
<input type='hidden' name="x_line_item" value="{$x_giftcard_amount_name}<|>{$x_giftcard_amount_name}<|>{$x_giftcard_amount_description}<|>1<|>{$x_giftcard_amount}<|>N">
{/if}

<div class="reviewsubmit">
<button type="submit" title="Place Your Order" name="submit_checkout" class="btn btn-sm btn-primary">Place Your Order</button>
</div>
</form>
{/if}
<div class="some_space2 itl">
Please note: shipping during periods of extreme heat can damage wine. Your wines will be shipped by us in perfect condition and any damage due to weather is not covered by UPS insurance, or guaranteed by us. Please contact our Customer Service at webshop@bluedanubewine.com or +1 (650) 941-4699 and we will gladly store your wine until the weather is cooler.
</div>
{if $ca_customer}
<div class="some-space2 alignCenter ucbox">
<span class="bld">WARNING</span>: Drinking distilled spirits, beer, coolers, wine and other alcoholic beverages may increase cancer risk, and, during pregnancy, can cause birth defects. <br>For more information go to <a href="https://www.P65Warnings.ca.gov/alcohol" target="_blank">www.P65Warnings.ca.gov/alcohol</a>
</div>
{/if}

<div class="authorizelogo">
Secure payment by &nbsp;
<a href="http://www.authorize.net/"><img style="vertical-align:middle;" src="https://www.authorize.net/images/authorizenet_150_42.gif" border="0" alt="Authorize.Net Logo" width="150" height="42" /></a>
</div>


{assign var="head_title" value=" - Review Order"}