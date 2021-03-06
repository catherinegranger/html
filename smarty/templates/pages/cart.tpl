<article id="cart">

{if $items}

{include file="modules/mod_succerrors.tpl"}

You have
{if $two == 'deleted'}
now
{/if}
{if $total_items > 1}
{$total_items} items in your cart.
{else}
{$total_items} item in your cart.
{/if}
<div id="cart_table" class="div_l">
<form method="post" action="/cart/">
<table cellpadding="3" cellspacing="0">
<tr>
<td style="width:6%;"><b>Year</b></td>
<td style="width:67%;"><b>Name</b></td>
<td style="width:5%;" class="alignRight nowrap" colspan="2"><b>Unit Price</b></td>
<td style="width:8%;" class="alignRight"><b>Quantity</b></td>
<td style="width:8%;" class="alignRight"><b>Total</b></td>
<td style="width:6%;"></td>
</tr>
<tr><td colspan="6" class="dotted"></td><td></td></tr>
{section name=bit loop=$items}
<tr>
<td>{if $items[bit].year}{$items[bit].year}{/if}</td>
<td><a href="{$items[bit].url}" title="{$items[bit].title}">{$items[bit].full_name}</a></td>
<td class="alignRight nowrap">
{if $items[bit].base_price > $items[bit].price}<strike>${$items[bit].base_price}</strike> {/if}
</td>
<td class="alignRight nowrap">${$items[bit].price}</td>
<td class="alignRight"><input type="text" name="p_{$items[bit].vint_id}" value="{$items[bit].quantity}" maxlength="3" size="2" /></td>
<td class="alignRight">${$items[bit].total}</td>
<td class="alignCenter pix10"><a href="/cart/{$items[bit].item}/delete/">DEL</a></td>
</tr>
{/section}
<tr><td colspan="6" class="topdotted"></td><td></td></tr>
<tr class="nowrap">
<td colspan="5" class="pix14 rdd bld alignRight" style="vertical-align:middle;">Offer Code:</td>
<td class="alignRight" style="vertical-align:middle;">
<input style="background-color:#FDEFEF;" type="text" name="discount_name" value="{$smarty.session.discount_name}" maxlength="25" size="6" />
</td>
<td style="vertical-align:middle;"><button type="submit" title="Apply Discount" name="apply_discount" class="btn btn-sm btn-primary">Apply</button></td>
</tr>
<tr>
<td colspan="5" class="pix14 rdd bld alignRight">Grand Total:</td>
<td colspan="1" class="pix14 rdd bld alignRight nowrap">${$grand_total}</td>
<td></td>
</tr>
<tr><td colspan="6" class="alignRight"><a href="/shipping/" target="_blank">View our Shipping Information</a></td><td></td></tr>
</table>
<div class="buyprocess_buttons">
<button type="submit" title="Update Cart" name="submit_update" class="btn btn-sm btn-primary">Update Cart</button>
<button type="submit" title="Empty Cart" name="submit_empty" class="btn btn-sm btn-primary">Empty Cart</button>
<button type="submit" title="Continue Shopping" name="submit_shopping" class="btn btn-sm btn-primary">Continue Shopping</button>
<button type="submit" title="Checkout" name="submit_checkout" class="btn btn-sm btn-primary">Proceed to Checkout</button>
</div>
</form>
</div>

<div id ="cart_table" class="div_p">
<form method="post" action="/cart/">
<table cellpadding="3" cellspacing="0">
<tr>
<td colspan="1" style="width:90%;" class="bld">Item</td>
<td colspan="1" style="width:10%;" class="bld alignLeft">Quantity</td>
</tr>
<tr><td colspan="2" class="dotted"></td></tr>
{section name=bit loop=$items}
<tr>
<td colspan="1">
<a href="{$items[bit].url}" title="{$items[bit].title}">{$items[bit].title}</a>
{if $items[bit].base_price > $items[bit].price}<strike>${$items[bit].base_price}</strike> {/if} ${$items[bit].price}
</td>
<td colspan="1" class="alignRight"><input type="text" name="p_{$items[bit].vint_id}" value="{$items[bit].quantity}" maxlength="3" size="2" /></td>
</tr>
{/section}
<tr><td colspan="2" class="dotted"></td></tr>
<tr class="nowrap">
<td colspan="2" class="pix14 rdd bld alignRight"><span class="pix14 rdd bld alignRight">Offer Code:</span>&nbsp;
<input style="background-color:#FDEFEF;" type="text" name="discount_name" value="{$smarty.session.discount_name}" maxlength="10" size="6" />&nbsp;
<button type="submit" title="Apply Discount" name="apply_discount" class="btn btn-sm btn-primary">Apply</button>
</td>
</tr>
<tr>
<td colspan="1" class="pix14 rdd bld alignRight">Grand Total:</td>
<td colspan="1" class="pix14 rdd bld alignRight nowrap">${$grand_total}</td>
</tr>
<tr><td colspan="2" class="alignRight"><a href="/shipping/" target="_blank">View our Shipping Information</a></td></tr>
</table>
<div class="buyprocess_buttons">
<button type="submit" title="Update Cart" name="submit_update" class="btn btn-sm btn-primary">Update Cart</button>
<button type="submit" title="Empty Cart" name="submit_empty" class="btn btn-sm btn-primary">Empty Cart</button>
<button type="submit" title="Continue Shopping" name="submit_shopping" class="btn btn-sm btn-primary">Continue Shopping</button>
<button type="submit" title="Checkout" name="submit_checkout" class="btn btn-sm btn-primary">Proceed to Checkout</button>
</div>
</form>
</div>

{else}
<div class="ucvalidation">
&bull;&nbsp;Your cart is currently empty
</div>
<br>&nbsp;<br>
<div class="alignCenter"><a href="/wines/"><button class="btn btn-sm btn-primary">Continue Shopping</button></a></div>
{/if}

</article>
{assign var="head_title" value=" - Your Cart"}