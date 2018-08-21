<nav class="bdgridnav3 bdnavigation">
<ul class="top-level">
<li {if  !$account.subscription_id} class="last" {/if}><a href="/account/" title="My Account" {if !$two} class="on" {/if}>My Account</a></li>
{if !$account.subscription_id}
{if FALSE}
<li class="last"><a href="/account/joinclub/" title="Join Vino Danubia" {if $two == 'joinclub'}  class="on"{/if}>Join Vino Danubia</a></li>
{/if}
{else}
<li><a href="/account/updatesubscription/" title="Update Membership" {if $two == 'updatesubscription'} class="on"{/if}>Update Membership</a></li>
<li class="last"><a href="/account/cancelsubscription/" title="Cancel Membership" {if $two == 'cancelsubscription'} class="on"{/if}>Cancel Membership</a></li>
{/if}
</ul>
</nav>

<div class="bdgridcontent9">
{if $two == 'joinclub'}
{if $account.subscription_id > 0}
{assign var="two" value='updatesubscription'}
{/if}
{/if}

{if $two == 'joinclub'}
<article id="wineclub">
{else}
<article id="account">
{/if}

{if $two == 'cancelsubscription'}

<header>
<h1 title="Cancel My Membership">Cancel My Membership</h1>
</header>

{include file="modules/mod_succerrors.tpl"}

<form action="/manage_subscription/" method="post" >
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

<form action="/manage_subscription/" method="post" autocomplete='off'>
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
<h1 title="Join Club Vino Danubia">Join Club Vino Danubia</h1>
</header>
<div class="alignCenter uchighlight bld">
Sorry but we currently don't take any new memberships.
</div>
<div>
<img src="/img/all/winemakerscollage.jpg" alt="Winemakers" style="width:100%;" />
</div>

{include file="modules/mod_succerrors.tpl"}

<div class="wineclub_section alignCenter clearfix">
<h2 title="How it works">How It Works</h2>
<div class="some_space2">
<div class="bld pix18">$49 Yearly </div>
Never pay for shipping again!
<br>Free UPS Ground shipping for multiples of 6 bottles
<br>Choose your own wines
<br>Monthly newsletter featuring a mixed 6-bottle pack & wine pairing
<br>Personal Wine Consultant
</div>
</div>

<div class="wineclub_section alignCenter clearfix">
<h2 class="noborder" title="Personal Wine Consulting">Personal Wine Consulting</h2>
<div class="bdgrid2">
<div class="bdgrid_group wineclub_half">
Help finding wines that fit your taste
<br>Personalized hand-selected wines shipments 
<br>Food and wine pairing suggestions
<br>Event/menu planning assistance
</div>
<div class="bdgrid_group bdgrid_group_last wineclub_half">
Help with travel plans to visit our producers
<br>In home tasting opportunities (SF Bay Area)
<br>Corporate and Personal Gift Services upon request
<br>Schedule shipmnent dates, Vacation holds, etc.
</div>
</div>
</div>


<div class="wineclub_section">
<span class="alignCenter"><h2 title="Questions">Questions about the Program?</h2></span>
<div class="some_space2 alignLeft">
<b>&bull;&nbsp;Do you have shipping restrictions?</b>
<br>We cannot ship to {$no_ship_states_string} Also, we cannot offer free shipping to Alaska and Hawaii.
<br><b>&bull;&nbsp;What's your shipping method?</b>
<br>We ship UPS Ground. Faster service is available, please request a quote. Also check our <a href="/shipping/" target="_blank">shipping information page</a> for more detailed information. 
<br><b>&bull;&nbsp;Can I order wines from specific countries?</b>
<br>You order any wines you want from our portfolio. Just order 6 or any multiples of 6 bottles to get free shipping.
<div class="some_space">
We look forward to getting to know you and the wines you are passionate about! For any additional questions about the program, email us at <b><a href="mailto:info@bluedanubewine.com">webshop@bluedanubewine.com</a></b> or call us at <b>+1 (650) 941-4699</b>.</div>
</div>
</div>
<div class="wineclub_section clearfix" >
<span class="alignCenter"><h2 class="noborder" title="Testimonials">Check our Members' Testimonials</h2></span>
<div class="bdgrid3">
<div class="bdgrid_group">
<span class="kalamfont pix14">&ldquo;I stumbled upon Blue Danube after my Croatia trip in 2015 and it has been the best wine buying and tasting experience for me, I spoke with Gisele and she introduced me to the Wine club. I only drink red wines so this has been a wonderful journey for me, to be able to taste various eastern European wines and Gisele is very thorough about explaining the regions and grapes of these wines and has always kept my specific palette in mind when recommending wines. I would recommend the Wine Club and Blue Danube to any wine enthusiast to connoisseur, with their selection, ease of receiving delivery and processing fees, it's an amazing find! Thank you!&rdquo;</span> Dimple K.
</div>
<div class="bdgrid_group wineclub_section_next">
<span class="kalamfont pix14">&ldquo;I wanted to thank you for the good customer service and speedy delivery. Additionally, the Dingac Postup and Dingac Dingac are beloved by everyone that I give a sample to (and I am very stingy with how much I share). These two were delightful and so different than anyone else has tasted. My friend works at a winery in Napa and he brought the Dingac for the staff to taste. The crowd went wild and you will have at least 3 new customers shortly based on that bottle that I gifted to him.&rdquo;</span> Lawrence G.
</div>
<div class="bdgrid_group bdgrid_group_last wineclub_section_next">
<span class="kalamfont pix14">&ldquo;Our July family reunion was fabulous, and your wines from Blue Danube were a big hit... especially the Grgich with all the Croatian lamb, etc., it reminded us of the wine our grandfather made...&rdquo;</span> Pat S.
</div>
</div>
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
