<?php
/* Smarty version 3.1.30, created on 2018-04-21 00:05:24
  from "/var/www/html/smarty/templates/pages/account.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5ada804424bd67_29448853',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3e0fa20bbbee962964592bdd5e78e7ba4ee9a255' => 
    array (
      0 => '/var/www/html/smarty/templates/pages/account.tpl',
      1 => 1523659342,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:modules/mod_succerrors.tpl' => 4,
  ),
),false)) {
function content_5ada804424bd67_29448853 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_function_html_options')) require_once '/var/www/Smarty/libs/plugins/function.html_options.php';
?>
<nav class="bdgridnav3 bdnavigation">
<ul class="top-level">
<li <?php if (!$_smarty_tpl->tpl_vars['account']->value['subscription_id']) {?> class="last" <?php }?>><a href="/account/" title="My Account" <?php if (!$_smarty_tpl->tpl_vars['two']->value) {?> class="on" <?php }?>>My Account</a></li>
<?php if (!$_smarty_tpl->tpl_vars['account']->value['subscription_id']) {
if (FALSE) {?>
<li class="last"><a href="/account/joinclub/" title="Join Vino Danubia" <?php if ($_smarty_tpl->tpl_vars['two']->value == 'joinclub') {?>  class="on"<?php }?>>Join Vino Danubia</a></li>
<?php }
} else { ?>
<li><a href="/account/updatesubscription/" title="Update Membership" <?php if ($_smarty_tpl->tpl_vars['two']->value == 'updatesubscription') {?> class="on"<?php }?>>Update Membership</a></li>
<li class="last"><a href="/account/cancelsubscription/" title="Cancel Membership" <?php if ($_smarty_tpl->tpl_vars['two']->value == 'cancelsubscription') {?> class="on"<?php }?>>Cancel Membership</a></li>
<?php }?>
</ul>
</nav>

<div class="bdgridcontent9">
<?php if ($_smarty_tpl->tpl_vars['two']->value == 'joinclub') {
if ($_smarty_tpl->tpl_vars['account']->value['subscription_id'] > 0) {
$_smarty_tpl->_assignInScope('two', 'updatesubscription');
}
}?>

<?php if ($_smarty_tpl->tpl_vars['two']->value == 'joinclub') {?>
<article id="wineclub">
<?php } else { ?>
<article id="account">
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['two']->value == 'cancelsubscription') {?>

<header>
<h1 title="Cancel My Membership">Cancel My Membership</h1>
</header>

<?php $_smarty_tpl->_subTemplateRender("file:modules/mod_succerrors.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<form action="/manage_subscription/" method="post" >
<input type="hidden" name="action_type" value="<?php echo $_smarty_tpl->tpl_vars['two']->value;?>
" />

<table>
<tr>
<td class="alignRight"><b>Email:</b></td>
<td><?php echo $_smarty_tpl->tpl_vars['account']->value['email'];?>
</td>
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

<?php } elseif ($_smarty_tpl->tpl_vars['two']->value == 'updatesubscription') {?>

<header>
<h1 title="Update My Membership">Update My Membership</h1>
</header>

<?php $_smarty_tpl->_subTemplateRender("file:modules/mod_succerrors.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>


<form action="/manage_subscription/" method="post" autocomplete='off'>
<input type="hidden" name="action_type" value="<?php echo $_smarty_tpl->tpl_vars['two']->value;?>
" />
<table>
<tr><td colspan="2"><h2 title="Payment Information" class="rdd">Payment Information</h2></td></tr>
<tr>
<td style="width:40%;" class="alignRight"><b>Email:</b></td>
<td style="width:60%;"><?php echo $_smarty_tpl->tpl_vars['account']->value['email'];?>
</td>
</tr>
<tr>
<td class="alignRight"><b>Password:*</b></td>
<td><input type="password"  name="password" value="" required /></td>
</tr>
<tr>
<td class="alignRight"><b><label for=card_number>Card Number:*</label></b></td>
<td><input id=card_number name=card_number type=text pattern="[0-9]{13,16}" required autocomplete='off' /></td>
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

<?php } elseif ($_smarty_tpl->tpl_vars['two']->value == 'joinclub') {?>

<header>
<h1 title="Join Club Vino Danubia">Join Club Vino Danubia</h1>
</header>
<div class="alignCenter uchighlight bld">
Sorry but we currently don't take any new memberships.
</div>
<div>
<img src="/img/all/winemakerscollage.jpg" alt="Winemakers" style="width:100%;" />
</div>

<?php $_smarty_tpl->_subTemplateRender("file:modules/mod_succerrors.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>


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
<br>We cannot ship to <?php echo $_smarty_tpl->tpl_vars['no_ship_states_string']->value;?>
 Also, we cannot offer free shipping to Alaska and Hawaii.
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






<?php } else { ?>

<header>
<h1 title="My Account">My Account</h1>
</header>

<?php $_smarty_tpl->_subTemplateRender("file:modules/mod_succerrors.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>


<div class="div_l">
<form action="/update_account/" method="post">
<input type="hidden" name="userId" value="<?php echo $_smarty_tpl->tpl_vars['account']->value['user_id'];?>
" />
<input type="hidden" name="default_shipping_method" value="<?php echo $_smarty_tpl->tpl_vars['account']->value['default_shipping_method'];?>
" />
<table>
<tr><td colspan="2"><h2 title="Account Information" class="rdd">Account Information</h2></td></tr>
<tr>
<td class="alignRight"><b>Email:*</b></td>
<td><input type="email" size="40" maxlength="60" name="email" value="<?php echo $_smarty_tpl->tpl_vars['account']->value['email'];?>
" required /></td>
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
<td><input type="text" size="40" maxlength="60" name="first_name" value="<?php echo $_smarty_tpl->tpl_vars['account']->value['first_name'];?>
" required /></td>
</tr>
<tr>
<td class="alignRight"><b>Last Name:*</b></td>
<td><input type="text" size="40" maxlength="60" name="last_name" value="<?php echo $_smarty_tpl->tpl_vars['account']->value['last_name'];?>
" required /></td>
</tr>
<tr>
<td class="alignRight"><b>Phone Number:*</b></td>
<td><input type="text" size="40" maxlength="60" name="phone" value="<?php echo $_smarty_tpl->tpl_vars['account']->value['phone'];?>
" required /></td>
</tr>
<tr>
<td class="alignRight"><b>Address 1:</b></td>
<td><input type="text" size="40" maxlength="60" name="address1" value="<?php echo $_smarty_tpl->tpl_vars['account']->value['address1'];?>
" /></td>
</tr>
<tr>
<td class="alignRight"><b>Address 2:</b></td>
<td><input type="text" size="40" maxlength="60" name="address2" value="<?php echo $_smarty_tpl->tpl_vars['account']->value['address2'];?>
" /></td>
</tr>
<tr>
<td class="alignRight"><b>City:</b></td>
<td><input type="text" size="40" maxlength="60" name="city" value="<?php echo $_smarty_tpl->tpl_vars['account']->value['city'];?>
" /></td>
</tr>
<tr>
<td class="alignRight"><b>State:</b></td>
<td><select name="state"><?php echo smarty_function_html_options(array('options'=>$_smarty_tpl->tpl_vars['states']->value,'selected'=>$_smarty_tpl->tpl_vars['account']->value['state']),$_smarty_tpl);?>
</select></td>
</tr>
<tr>
<td class="alignRight"><b>Zipcode:</b></td>
<td><input type="text" size="5" maxlength="5" name="zipcode" value="<?php echo $_smarty_tpl->tpl_vars['account']->value['zipcode'];?>
" /></td>
</tr>
<tr>
<td class="alignRight nowrap"><b>Use As Billing Address:</b></td>
<?php if ($_smarty_tpl->tpl_vars['account']->value['default_billing']) {?>
<td><input type="checkbox" name="default_billing" value="off" checked></td>
<?php } else { ?>
<td><input type="checkbox" name="default_billing" value="on"></td>
<?php }?>
</tr>
<tr>
<td class="alignRight nowrap"><b>Use As Shipping Address:</b></td>
<?php if ($_smarty_tpl->tpl_vars['account']->value['default_shipping']) {?>
<td><input type="checkbox" name="default_shipping" value="off" checked></td>
<?php } else { ?>
<td><input type="checkbox" name="default_shipping" value="on"></td>
<?php }?>
</tr>
<?php if ($_smarty_tpl->tpl_vars['two']->value == 'wineclub') {?>
<tr>
<td class="alignRight"><b>Subscription #:</b></td><td><?php echo $_smarty_tpl->tpl_vars['account']->value['subscription_id'];?>
</td>
</tr>
<tr>
<td class="alignRight"><b>Subscription Status Date:</b></td><td><?php echo $_smarty_tpl->tpl_vars['account']->value['subscription_status_date'];?>
</td>
</tr>
<tr>
<td class="alignRight"><b>Subscription Status:</b></td><td><?php echo $_smarty_tpl->tpl_vars['account']->value['subscription_status'];?>
</td>
</tr>
<tr>
<td class="alignRight"><b>Subscription Message:</b></td><td><?php echo $_smarty_tpl->tpl_vars['account']->value['subscription_message'];?>
</td>
</tr>
<?php }?>
<tr>
<td class="alignRight"><b>&nbsp;</b></td>
<td><button type="submit" title="Update Account" name="update_account" class="btn btn-sm btn-primary">Update Account</button></td>
</tr>
</table>
</form>
</div>

<div class="div_p">
<form action="/update_account/" method="post">
<input type="hidden" name="userId" value="<?php echo $_smarty_tpl->tpl_vars['account']->value['user_id'];?>
" />
<input type="hidden" name="default_shipping_method" value="<?php echo $_smarty_tpl->tpl_vars['account']->value['default_shipping_method'];?>
" />
<input type="hidden" name="default_shipping" value="<?php echo $_smarty_tpl->tpl_vars['account']->value['default_shipping'];?>
" />
<table>
<tr><td colspan="2"><h2 title="Account Information" class="rdd">Account Information</h2></td></tr>
<tr>
<td class="alignRight"><b>Email:*</b></td>
<td><input type="email" size="20" maxlength="60" name="email" value="<?php echo $_smarty_tpl->tpl_vars['account']->value['email'];?>
" required /></td>
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
<td><input type="text" size="20" maxlength="60" name="first_name" value="<?php echo $_smarty_tpl->tpl_vars['account']->value['first_name'];?>
" required /></td>
</tr>
<tr>
<td class="alignRight"><b>Last Name:*</b></td>
<td><input type="text" size="20" maxlength="60" name="last_name" value="<?php echo $_smarty_tpl->tpl_vars['account']->value['last_name'];?>
" required /></td>
</tr>
<tr>
<td class="alignRight"><b>Phone Number:*</b></td>
<td><input type="text" size="20" maxlength="60" name="phone" value="<?php echo $_smarty_tpl->tpl_vars['account']->value['phone'];?>
" required /></td>
</tr>
<tr>
<td class="alignRight"><b>Address 1:</b></td>
<td><input type="text" size="20" maxlength="60" name="address1" value="<?php echo $_smarty_tpl->tpl_vars['account']->value['address1'];?>
" /></td>
</tr>
<tr>
<td class="alignRight"><b>Address 2:</b></td>
<td><input type="text" size="20" maxlength="60" name="address2" value="<?php echo $_smarty_tpl->tpl_vars['account']->value['address2'];?>
" /></td>
</tr>
<tr>
<td class="alignRight"><b>City:</b></td>
<td><input type="text" size="20" maxlength="60" name="city" value="<?php echo $_smarty_tpl->tpl_vars['account']->value['city'];?>
" /></td>
</tr>
<tr>
<td class="alignRight"><b>State:</b></td>
<td><select name="state"><?php echo smarty_function_html_options(array('options'=>$_smarty_tpl->tpl_vars['states']->value,'selected'=>$_smarty_tpl->tpl_vars['account']->value['state']),$_smarty_tpl);?>
</select></td>
</tr>
<tr>
<td class="alignRight"><b>Zipcode:</b></td>
<td><input type="text" size="5" maxlength="5" name="zipcode" value="<?php echo $_smarty_tpl->tpl_vars['account']->value['zipcode'];?>
" /></td>
</tr>
<tr>
<td class="alignRight"><b>Use As Billing Address:</b></td>
<?php if ($_smarty_tpl->tpl_vars['account']->value['default_billing']) {?>
<td><input type="checkbox" name="default_billing" value="on" checked></td>
<?php } else { ?>
<td><input type="checkbox" name="default_billing" value="on"></td>
<?php }?>
</tr>
<tr>
<td class="alignRight"><b>Use As Shipping Address:</b></td>
<?php if ($_smarty_tpl->tpl_vars['account']->value['default_shipping']) {?>
<td><input type="checkbox" name="default_shipping" value="1" checked></td>
<?php } else { ?>
<td><input type="checkbox" name="default_shipping" value="0"></td>
<?php }?>
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
<?php if ($_smarty_tpl->tpl_vars['orders']->value) {?>
<div class="order_status">
<div class="div_S">
<table >
<tr>
<td class="nowrap"><b>Invoice #</b></td>
<td class="nowrap"><b>Placed</b></td>
<td class="nowrap"><b>Total</b></td>
<td class="nowrap"><b>Status</b></td>
</tr>
<?php
$__section_bit_0_saved = isset($_smarty_tpl->tpl_vars['__smarty_section_bit']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit'] : false;
$__section_bit_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['orders']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_bit_0_total = $__section_bit_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_bit'] = new Smarty_Variable(array());
if ($__section_bit_0_total != 0) {
for ($__section_bit_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] = 0; $__section_bit_0_iteration <= $__section_bit_0_total; $__section_bit_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']++){
?>
<tr>
<td class="nowrap"><a href="/view_order/<?php echo $_smarty_tpl->tpl_vars['orders']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['placed'];?>
/<?php echo $_smarty_tpl->tpl_vars['orders']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['o_id'];?>
/"><?php echo $_smarty_tpl->tpl_vars['orders']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['invoice_number'];?>
</a></td>
<td class="nowrap"><?php echo $_smarty_tpl->tpl_vars['orders']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['formatted_placed'];?>
</td>
<td class="nowrap">$<?php echo $_smarty_tpl->tpl_vars['orders']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['grand_total'];?>
</td>
<td class="nowrap"><?php echo $_smarty_tpl->tpl_vars['orders']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['status'];?>
 on <?php echo $_smarty_tpl->tpl_vars['orders']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['status_timestamp'];?>
</td>
</tr>
<?php
}
}
if ($__section_bit_0_saved) {
$_smarty_tpl->tpl_vars['__smarty_section_bit'] = $__section_bit_0_saved;
}
?>
</table>
</div>

<div class="div_XS">
<table >
<tr>
<td class="nowrap"><b>Invoice #</b></td>
<td class="nowrap"><b>Placed</b></td>
<td class="nowrap"><b>Total</b></td>
</tr>
<?php
$__section_bit_1_saved = isset($_smarty_tpl->tpl_vars['__smarty_section_bit']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit'] : false;
$__section_bit_1_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['orders']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_bit_1_total = $__section_bit_1_loop;
$_smarty_tpl->tpl_vars['__smarty_section_bit'] = new Smarty_Variable(array());
if ($__section_bit_1_total != 0) {
for ($__section_bit_1_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] = 0; $__section_bit_1_iteration <= $__section_bit_1_total; $__section_bit_1_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']++){
?>
<tr>
<td class="nowrap"><a href="/view_order/<?php echo $_smarty_tpl->tpl_vars['orders']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['placed'];?>
/<?php echo $_smarty_tpl->tpl_vars['orders']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['o_id'];?>
/"><?php echo $_smarty_tpl->tpl_vars['orders']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['invoice_number'];?>
</a></td>
<td class="nowrap"><?php echo $_smarty_tpl->tpl_vars['orders']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['formatted_placed'];?>
</td>
<td class="nowrap">$<?php echo $_smarty_tpl->tpl_vars['orders']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['grand_total'];?>
</td>
</tr>
<tr>
<td></td>
<td colspan="2"><?php echo $_smarty_tpl->tpl_vars['orders']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['status'];?>
 on <?php echo $_smarty_tpl->tpl_vars['orders']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['status_timestamp'];?>
</td>
</tr>
<?php
}
}
if ($__section_bit_1_saved) {
$_smarty_tpl->tpl_vars['__smarty_section_bit'] = $__section_bit_1_saved;
}
?>
</table>
</div>

</div>
<?php } else { ?>
<div><p>You don't have any orders associated with this account.</p></div>
<?php }?>


<?php }?>
</article>
</div>
<?php $_smarty_tpl->_assignInScope('head_title', " - Account");
}
}
