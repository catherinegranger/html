<nav class="bdgridnav3 bdnavigation">
<ul class="top-level">
<li><a href="/account/" title="My Account" {if !$two} class="on" {/if}>My Account</a></li>
{if !$account.subscription_id}
<li class="last"><a href="/account/joinclub/" title="Join Vino Danubia" {if $two == 'joinclub'}  class="on"{/if}>Join Vino Danubia</a></li>
{else}
<li><a href="/account/updatesubscription/" title="Update Membership" {if $two == 'updatesubscription'} class="on"{/if}>Update Membership</a></li>
<li class="last"><a href="/account/cancelsubscription/" title="Cancel Membership" {if $two == 'cancelsubscription'} class="on"{/if}>Cancel Membership</a></li>
{/if}
</ul>
</nav>

<div class="bdgridcontent9">
<article id="account">

{if $two == 'joinclub'}
{if $account.subscription_id > 0}
{assign var="two" value='updatesubscription'}
{/if}
{/if}

{if $two == 'cancelsubscription'}

<header>
<h1 title="Cancel My Membership">Cancel My Membership</h1>
</header>

{include file="modules/mod_succerrors.tpl"}

<form action="/manage_subscriptiondebug/" method="post" >
<input type="hidden" name="action_type" value="{$two}" />

<table>
<tr>
<td class="alignRight"><b>Email:</b></td>
<td>{$account.email}</td>
</tr>
<tr>
<td class="alignRight"><b>Password:*</b></td>
<td><input type="password"  name="password" value="" required /></td>
</tr>
<tr>
<td class="alignRight"><b>&nbsp;</b></td>
<td><button type="submit" title="Cancel Membership" name="submit_cancel_subscription" class="btn btn-sm btn-primary">Cancel Membership</button></td>
</tr>
</table>
</form>
<div class="pix11">
<span class="bld pix16">*</span> indicates a required field
</div>

{elseif $two == 'updatesubscription'}

<header>
<h1 title="Update My Membership">Update My Membership</h1>
</header>

{include file="modules/mod_succerrors.tpl"}

<form action="/manage_subscriptiondebug/" method="post" autocomplete='off'>
<input type="hidden" name="action_type" value="{$two}" />
<table>
<tr><td colspan="2"><h2 title="Payment Information" class="rdd">Payment Information</h2></td></tr>
<tr>
<td style="width:40%;" class="alignRight"><b>Email:</b></td>
<td style="width:60%;">{$account.email}</td>
</tr>
<tr>
<td class="alignRight"><b>Password:*</b></td>
<td><input type="password"  name="password" value="" required /></td>
</tr>
<tr>
<td class="alignRight"><b><label for=card_number>Card Number:*</label></b></td>
<td><input id=card_number name=card_number type=text {literal}pattern="[0-9]{13,16}"{/literal} required autocomplete='off' /></td>
</tr>
<tr>
<td class="alignRight"><b><label for=expiration_date>Card Expiration Date (YYYY-MM):*</label></b></td>
<td><input id=expiration_date name=expiration_date type=text required maxlength="7" /></td>
</tr>
<tr>
<td class="alignRight"><b><label for=secure>Security Code:*</label></b></td>
<td><input id=secure name=secure type=number required autocomplete='off' /></td>
</tr>
<tr>
<td class="alignRight"><b>&nbsp;</b></td>
<td><button type="submit" title="Update Membership" name="submit_update_subscription" class="btn btn-sm btn-primary">Update Membership</button></td>
</tr>
</table>
</form>
<div class="pix11">
<span class="bld pix16">*</span> indicates a required field
</div>
<div class="some_space2">We don't store any credit card information on our server. Payment will be handled securely on our payment gateway.
</div>

{elseif $two == 'joinclub'}

<header>
<h1 title="Join Vino Danubia">Join Vino Danubia</h1>
</header>

<div>
<img src="/img/all/winemakerscollage.jpg" alt="Winemakers" style="width:100%;" />
</div>

{include file="modules/mod_succerrors.tpl"}

<div class="some_space2">
<p>To reward you, our frequent customers, we have created the Vino Danubia Membership Program.</p>
<p>Benefits of the program include:</p>
<ul style="list-style-type:disc;margin:0.5em 2em;font-style:italic;">
<li>Free UPS Ground Shipping for multiples of 6 bottles</li>
<li>Pre sale offering of new arrivals</li>
<li>Priority access to limited allocation wines</li>
<li>Exclusive email offers featuring recipes/pairing recommendations</li>
<li>Send us the receipt of a Blue Danube wine purchased from your favorite restaurant and receive a 10% discount on your next purchase</li>
</ul>
</div>
<div class="some_space2">
<p>As a member, we want you to feel like a VIP! Discuss your preferences with Gisele for personalized concierge shopping assistance.</p>
<p>Special Services include:</p>
<ul style="list-style-type:disc;margin:0.5em 2em;font-style:italic;">
<li>Targeted wine suggestions and promotions based upon your preferences</li>
<li>Event/menu planning assistance</li>
<li>Gift shopping for all those people on your list</li>
<li>Corporate and Personal Gift Services upon request</li>
<li>In home tasting opportunities (SF Bay Area)</li>
</ul>
</div>

<div class="some_space2 alignCenter bld">
<p>
All of this for the low annual fee of $49! 
</p>
</div>
<p>
We look forward to getting to know you and the wines you are passionate about!
</p>

<form action="/manage_subscriptiondebug/" method="post" autocomplete='off' >
<input type="hidden" name="action_type" value="{$two}" />
<table>
<tr><td colspan="2"><h2 title="Payment Information" class="rdd">Payment Information</h2></td></tr>
<tr>
<td style="width:40%;" class="alignRight"><b>Email:</b></td>
<td style="width:60%;">{$account.email}</td>
</tr>
<tr>
<td class="alignRight"><b>Password:*</b></td>
<td><input type="password"  name="password" value="" required /></td>
</tr>
<tr>
<td class="alignRight"><b><label for=card_number>Card Number:*</label></b></td>
<td><input id=card_number name=card_number type=text {literal}pattern="[0-9]{13,16}"{/literal} required autocomplete='off'/></td>
</tr>
<tr>
<td class="alignRight"><b><label for=expiration_date>Card Expiration Date (YYYY-MM):*</label></b></td>
<td><input id=expiration_date name=expiration_date type=text required maxlength="7" /></td>
</tr>
<tr>
<td class="alignRight"><b><label for=secure>Security Code:*</label></b></td>
<td><input id=secure name=secure type=number required  autocomplete='off' /></td>
</tr>
<tr>
<td class="alignRight"><b>&nbsp;</b></td>
<td><button type="submit" title="Join Vino Danubia" name="submit_create_subscription" class="btn btn-sm btn-primary">Join Vino Danubia</button></td>
</tr>
</table>
</form>
<div class="pix11">
<span class="bld pix16">*</span> indicates a required field
</div>
<div class="some_space2">We don't store any credit card information on our server. Payment will be handled securely on our payment gateway.
</div>

{else}

<header>
<h1 title="My Account">My Account</h1>
</header>

{include file="modules/mod_succerrors.tpl"}

<div class="div_l">
<form action="/update_account/" method="post">
<input type="hidden" name="userId" value="{$account.user_id}" />
<input type="hidden" name="default_shipping_method" value="{$account.default_shipping_method}" />
<table>
<tr><td colspan="2"><h2 title="Account Information" class="rdd">Account Information</h2></td></tr>
<tr>
<td class="alignRight"><b>Email:*</b></td>
<td><input type="email" size="40" maxlength="60" name="email" value="{$account.email}" required /></td>
</tr>
<tr>
<td class="alignRight"><b>Password:*</b></td>
<td><input type="password" size="40" maxlength="60" name="password" value="" required /></td>
</tr>
<tr>
<td class="alignRight"><b>New Password:</b></td>
<td><input type="password" size="40" maxlength="60" name="new_password" value="" /></td>
</tr>
<tr>
<td class="alignRight"><b>Confirm New Password:</b></td>
<td><input type="password" size="40" maxlength="60" name="conf_new_password" value="" /></td>
</tr>
<tr>
<td class="alignRight"><b>First Name:*</b></td>
<td><input type="text" size="40" maxlength="60" name="first_name" value="{$account.first_name}" required /></td>
</tr>
<tr>
<td class="alignRight"><b>Last Name:*</b></td>
<td><input type="text" size="40" maxlength="60" name="last_name" value="{$account.last_name}" required /></td>
</tr>
<tr>
<td class="alignRight"><b>Phone Number:*</b></td>
<td><input type="text" size="40" maxlength="60" name="phone" value="{$account.phone}" required /></td>
</tr>
<tr>
<td class="alignRight"><b>Address 1:</b></td>
<td><input type="text" size="40" maxlength="60" name="address1" value="{$account.address1}" /></td>
</tr>
<tr>
<td class="alignRight"><b>Address 2:</b></td>
<td><input type="text" size="40" maxlength="60" name="address2" value="{$account.address2}" /></td>
</tr>
<tr>
<td class="alignRight"><b>City:</b></td>
<td><input type="text" size="40" maxlength="60" name="city" value="{$account.city}" /></td>
</tr>
<tr>
<td class="alignRight"><b>State:</b></td>
<td><select name="state">{html_options options=$states selected=$account.state}</select></td>
</tr>
<tr>
<td class="alignRight"><b>Zipcode:</b></td>
<td><input type="text" size="5" maxlength="5" name="zipcode" value="{$account.zipcode}" /></td>
</tr>
<tr>
<td class="alignRight nowrap"><b>Use As Billing Address:</b></td>
{if $account.default_billing}
<td><input type="checkbox" name="default_billing" value="off" checked></td>
{else}
<td><input type="checkbox" name="default_billing" value="on"></td>
{/if}
</tr>
<tr>
<td class="alignRight nowrap"><b>Use As Shipping Address:</b></td>
{if $account.default_shipping}
<td><input type="checkbox" name="default_shipping" value="off" checked></td>
{else}
<td><input type="checkbox" name="default_shipping" value="on"></td>
{/if}
</tr>
{if $two == 'wineclub'}
<tr>
<td class="alignRight"><b>Subscription #:</b></td><td>{$account.subscription_id}</td>
</tr>
<tr>
<td class="alignRight"><b>Subscription Status Date:</b></td><td>{$account.subscription_status_date}</td>
</tr>
<tr>
<td class="alignRight"><b>Subscription Status:</b></td><td>{$account.subscription_status}</td>
</tr>
<tr>
<td class="alignRight"><b>Subscription Message:</b></td><td>{$account.subscription_message}</td>
</tr>
{/if}
<tr>
<td class="alignRight"><b>&nbsp;</b></td>
<td><button type="submit" title="Update Account" name="update_account" class="btn btn-sm btn-primary">Update Account</button></td>
</tr>
</table>
</form>
</div>

<div class="div_p">
<form action="/update_account/" method="post">
<input type="hidden" name="userId" value="{$account.user_id}" />
<input type="hidden" name="default_shipping_method" value="{$account.default_shipping_method}" />
<input type="hidden" name="default_shipping" value="{$account.default_shipping}" />
<table>
<tr><td colspan="2"><h2 title="Account Information" class="rdd">Account Information</h2></td></tr>
<tr>
<td class="alignRight"><b>Email:*</b></td>
<td><input type="email" size="20" maxlength="60" name="email" value="{$account.email}" required /></td>
</tr>
<tr>
<td class="alignRight"><b>Password:*</b></td>
<td><input type="password" size="20" maxlength="60" name="password" value="" required /></td>
</tr>
<tr>
<td class="alignRight"><b>New Password:</b></td>
<td><input type="password" size="20" maxlength="60" name="new_password" value="" /></td>
</tr>
<tr>
<td class="alignRight"><b>Confirm New Password:</b></td>
<td><input type="password" size="20" maxlength="60" name="conf_new_password" value="" /></td>
</tr>
<tr>
<td class="alignRight"><b>First Name:*</b></td>
<td><input type="text" size="20" maxlength="60" name="first_name" value="{$account.first_name}" required /></td>
</tr>
<tr>
<td class="alignRight"><b>Last Name:*</b></td>
<td><input type="text" size="20" maxlength="60" name="last_name" value="{$account.last_name}" required /></td>
</tr>
<tr>
<td class="alignRight"><b>Phone Number:*</b></td>
<td><input type="text" size="20" maxlength="60" name="phone" value="{$account.phone}" required /></td>
</tr>
<tr>
<td class="alignRight"><b>Address 1:</b></td>
<td><input type="text" size="20" maxlength="60" name="address1" value="{$account.address1}" /></td>
</tr>
<tr>
<td class="alignRight"><b>Address 2:</b></td>
<td><input type="text" size="20" maxlength="60" name="address2" value="{$account.address2}" /></td>
</tr>
<tr>
<td class="alignRight"><b>City:</b></td>
<td><input type="text" size="20" maxlength="60" name="city" value="{$account.city}" /></td>
</tr>
<tr>
<td class="alignRight"><b>State:</b></td>
<td><select name="state">{html_options options=$states selected=$account.state}</select></td>
</tr>
<tr>
<td class="alignRight"><b>Zipcode:</b></td>
<td><input type="text" size="5" maxlength="5" name="zipcode" value="{$account.zipcode}" /></td>
</tr>
<tr>
<td class="alignRight"><b>Use As Billing Address:</b></td>
{if $account.default_billing}
<td><input type="checkbox" name="default_billing" value="on" checked></td>
{else}
<td><input type="checkbox" name="default_billing" value="on"></td>
{/if}
</tr>
<tr>
<td class="alignRight"><b>Use As Shipping Address:</b></td>
{if $account.default_shipping}
<td><input type="checkbox" name="default_shipping" value="1" checked></td>
{else}
<td><input type="checkbox" name="default_shipping" value="0"></td>
{/if}
</tr>
<tr>
<td class="alignRight"><b>&nbsp;</b></td>
<td><button type="submit" title="Update Account" name="update_account" class="btn btn-sm btn-primary">Update Account</button></td>
</tr>
</table>
</form>
</div>
<div class="pix11">
<span class="bld pix16">*</span> indicates a required field
</div>

<h2 title="Order Status" class="rdd">Order Status</h2>
{if $orders}
<div class="order_status">
<div class="div_S">
<table >
<tr>
<td class="nowrap"><b>Invoice #</b></td>
<td class="nowrap"><b>Placed</b></td>
<td class="nowrap"><b>Total</b></td>
<td class="nowrap"><b>Status</b></td>
</tr>
{section name=bit loop=$orders}
<tr>
<td class="nowrap"><a href="/view_order/{$orders[bit].placed}/{$orders[bit].o_id}/">{$orders[bit].invoice_number}</a></td>
<td class="nowrap">{$orders[bit].formatted_placed}</td>
<td class="nowrap">${$orders[bit].grand_total}</td>
<td class="nowrap">{$orders[bit].status} on {$orders[bit].status_timestamp}</td>
</tr>
{/section}
</table>
</div>

<div class="div_XS">
<table >
<tr>
<td class="nowrap"><b>Invoice #</b></td>
<td class="nowrap"><b>Placed</b></td>
<td class="nowrap"><b>Total</b></td>
</tr>
{section name=bit loop=$orders}
<tr>
<td class="nowrap"><a href="/view_order/{$orders[bit].placed}/{$orders[bit].o_id}/">{$orders[bit].invoice_number}</a></td>
<td class="nowrap">{$orders[bit].formatted_placed}</td>
<td class="nowrap">${$orders[bit].grand_total}</td>
</tr>
<tr>
<td></td>
<td colspan="2">{$orders[bit].status} on {$orders[bit].status_timestamp}</td>
</tr>
{/section}
</table>
</div>

</div>
{else}
<div><p>You don't have any orders associated with this account.</p></div>
{/if}


{/if}
</article>
</div>
{assign var="head_title" value=" - Account"}
