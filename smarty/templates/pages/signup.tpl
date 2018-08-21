<article id="signup">
<header>
<h1 title="Sign Up">Sign Up</h1>
</header>

{include file="modules/mod_succerrors.tpl"}

<div class="some_space2">
<ul class="bd_bullets">
<li>Create an account to save time at checkout and track your order status and history</li>
<li>If you already have an account, please <a href="/login/">Log In</a></li>
</ul>
</div>

<div class="div_l">
<form action="/do_signup/" method="post">
<input type="hidden" name="gonext" value="{$two}" />
<table cellpadding="4" cellspacing="4">
<tr><td colspan="2"><h2 title="Logging Information" class="rdd">Logging Information</h2></td></tr>
<tr>
<td class="alignRight" style="width:20%"><b>Email:*</b></td>
<td  style="width:80%"><input type="email" size="40" maxlength="60" name="email" value="{$account.email}" required /></td>
</tr>
<tr>
<td class="alignRight"><b>Password:*</b></td>
<td><input type="password" size="40" maxlength="60" name="password" value="" required /></td>
</tr>
<tr>
<td class="alignRight"><b>Confirm Password:*</b></td>
<td><input type="password" size="40" maxlength="60" name="conf_password" value="" required /></td>
</tr>

<tr><td colspan="2"><h2 title="Contact Information" class="rdd">Contact Information</h2></td></tr>
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
<tr><td colspan="2"><h2 title="Billing and Payment Information" class="rdd">Billing &amp; Payment Information</h2></td></tr>
<tr>
<td class="alignRight"><b>Billing Address:</b></td>
{if $account.default_billing}
<td><input type="checkbox" name="default_billing" value="1" checked > Same as Contact Address</td>
{else}
<td><input type="checkbox" name="default_billing" value="1" > Same as Contact Address</td>
{/if}
</tr>
<tr><td colspan="2">We don't store any credit card information on our server. Payment will be handled securely on our payment gateway Authorize.net </td></tr>

<tr><td colspan="2"><h2 title="Shipping Information" class="rdd">Shipping Information</h2></td></tr>
<tr>
<td class="alignRight"><b>Shipping Address:</b></td>
{if $account.default_shipping}
<td><input type="checkbox" name="default_shipping" value="1" checked > Same as Contact Address</td>
{else}
<td><input type="checkbox" name="default_shipping" value="1" > Same as Contact Address</td>
{/if}
</tr>
<tr><td colspan="2"><b>Please note</b>: 
<ul class="bd_bullets">
<li>we can NOT ship to: {$no_ship_states_string}</li>
<li>To ship to Alaska and Hawaii, please contact us at webshop@bluedanubewine.com or +1 (650) 941-4699.</li>
<li><a href="/shipping/" target="_blank">View our Shipping Information</a></li>
</ul>
</td></tr>

<tr><td colspan="2" style="text-align:center;"><button type="submit" title="Create Account" name="create_account" class="btn btn-sm btn-primary">Create Account</button></td></tr>
</table>
</form>
</div>
<div class="div_p">
<form action="/do_signup/" method="post">
<input type="hidden" name="gonext" value="{$two}" />
<table cellpadding="4" cellspacing="4">
<tr><td colspan="2"><h2 title="Logging Information" class="rdd">Logging Information</h2></td></tr>
<tr>
<td class="alignRight"><b>Email:*</b></td>
<td><input type="email" size="20" maxlength="60" name="email" value="{$account.email}" required /></td>
</tr>
<tr>
<td class="alignRight"><b>Password:*</b></td>
<td><input type="password" size="20" maxlength="60" name="password" value="" required /></td>
</tr>
<tr>
<td class="alignRight"><b>Confirm Password:*</b></td>
<td><input type="password" size="20" maxlength="60" name="conf_password" value="" required /></td>
</tr>

<tr><td colspan="2"><h2 title="Contact Information" class="rdd">Contact Information</h2></td></tr>
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
<tr><td colspan="2"><h2 title="Billing and Payment Information" class="rdd">Billing &amp; Payment Information</h2></td></tr>
<tr>
<td class="alignRight"><b>Billing Address:</b></td>
{if $account.default_billing}
<td><input type="checkbox" name="default_billing" value="1" checked > Same as Contact Address</td>
{else}
<td><input type="checkbox" name="default_billing" value="1" > Same as Contact Address</td>
{/if}
</tr>
<tr><td colspan="2">We don't store any credit card information on our server. Payment will be handled securely on our payment gateway Authorize.net </td></tr>

<tr><td colspan="2"><h2 title="Shipping Information" class="rdd">Shipping Information</h2></td></tr>
<tr>
<td class="alignRight"><b>Shipping Address:</b></td>
{if $account.default_shipping}
<td><input type="checkbox" name="default_shipping" value="1" checked > Same as Contact Address</td>
{else}
<td><input type="checkbox" name="default_shipping" value="1" > Same as Contact Address</td>
{/if}
</tr>
<tr><td colspan="2"><b>Please note</b>:
<ul class="bd_bullets">
<li>We can NOT ship to: {$no_ship_states_string}</li>
<li>To ship to Alaska and Hawaii, please contact us at webshop@bluedanubewine.com or +1 (650) 941-4699.</li>
<li><a href="/shipping/" target="_blank">View our Shipping Information</a></li>
</ul>
</td></tr>

<tr>
<td class="alignRight"><b>&nbsp;</b></td>
<td><button type="submit" title="Create Account" name="create_account" class="btn btn-sm btn-primary">Create Account</button></td>
</tr>
</table>
</form>
</div>

<div class="pix11">
<span class="bld pix16">*</span> indicates a required field
</div>

</article>

{assign var="head_title" value=" - Sign Up"}
