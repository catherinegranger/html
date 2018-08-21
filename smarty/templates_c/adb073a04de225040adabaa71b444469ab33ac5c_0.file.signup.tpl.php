<?php
/* Smarty version 3.1.30, created on 2018-04-27 17:23:20
  from "/var/www/html/smarty/templates/pages/signup.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5ae35c881ee652_27310857',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'adb073a04de225040adabaa71b444469ab33ac5c' => 
    array (
      0 => '/var/www/html/smarty/templates/pages/signup.tpl',
      1 => 1523659342,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:modules/mod_succerrors.tpl' => 1,
  ),
),false)) {
function content_5ae35c881ee652_27310857 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_function_html_options')) require_once '/var/www/Smarty/libs/plugins/function.html_options.php';
?>
<article id="signup">
<header>
<h1 title="Sign Up">Sign Up</h1>
</header>

<?php $_smarty_tpl->_subTemplateRender("file:modules/mod_succerrors.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<div class="some_space2">
<ul class="bd_bullets">
<li>Create an account to save time at checkout and track your order status and history</li>
<li>If you already have an account, please <a href="/login/">Log In</a></li>
</ul>
</div>

<div class="div_l">
<form action="/do_signup/" method="post">
<input type="hidden" name="gonext" value="<?php echo $_smarty_tpl->tpl_vars['two']->value;?>
" />
<table cellpadding="4" cellspacing="4">
<tr><td colspan="2"><h2 title="Logging Information" class="rdd">Logging Information</h2></td></tr>
<tr>
<td class="alignRight" style="width:20%"><b>Email:*</b></td>
<td  style="width:80%"><input type="email" size="40" maxlength="60" name="email" value="<?php echo $_smarty_tpl->tpl_vars['account']->value['email'];?>
" required /></td>
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
<tr><td colspan="2"><h2 title="Billing and Payment Information" class="rdd">Billing &amp; Payment Information</h2></td></tr>
<tr>
<td class="alignRight"><b>Billing Address:</b></td>
<?php if ($_smarty_tpl->tpl_vars['account']->value['default_billing']) {?>
<td><input type="checkbox" name="default_billing" value="1" checked > Same as Contact Address</td>
<?php } else { ?>
<td><input type="checkbox" name="default_billing" value="1" > Same as Contact Address</td>
<?php }?>
</tr>
<tr><td colspan="2">We don't store any credit card information on our server. Payment will be handled securely on our payment gateway Authorize.net </td></tr>

<tr><td colspan="2"><h2 title="Shipping Information" class="rdd">Shipping Information</h2></td></tr>
<tr>
<td class="alignRight"><b>Shipping Address:</b></td>
<?php if ($_smarty_tpl->tpl_vars['account']->value['default_shipping']) {?>
<td><input type="checkbox" name="default_shipping" value="1" checked > Same as Contact Address</td>
<?php } else { ?>
<td><input type="checkbox" name="default_shipping" value="1" > Same as Contact Address</td>
<?php }?>
</tr>
<tr><td colspan="2"><b>Please note</b>: 
<ul class="bd_bullets">
<li>we can NOT ship to: <?php echo $_smarty_tpl->tpl_vars['no_ship_states_string']->value;?>
</li>
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
<input type="hidden" name="gonext" value="<?php echo $_smarty_tpl->tpl_vars['two']->value;?>
" />
<table cellpadding="4" cellspacing="4">
<tr><td colspan="2"><h2 title="Logging Information" class="rdd">Logging Information</h2></td></tr>
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
<td class="alignRight"><b>Confirm Password:*</b></td>
<td><input type="password" size="20" maxlength="60" name="conf_password" value="" required /></td>
</tr>

<tr><td colspan="2"><h2 title="Contact Information" class="rdd">Contact Information</h2></td></tr>
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
<tr><td colspan="2"><h2 title="Billing and Payment Information" class="rdd">Billing &amp; Payment Information</h2></td></tr>
<tr>
<td class="alignRight"><b>Billing Address:</b></td>
<?php if ($_smarty_tpl->tpl_vars['account']->value['default_billing']) {?>
<td><input type="checkbox" name="default_billing" value="1" checked > Same as Contact Address</td>
<?php } else { ?>
<td><input type="checkbox" name="default_billing" value="1" > Same as Contact Address</td>
<?php }?>
</tr>
<tr><td colspan="2">We don't store any credit card information on our server. Payment will be handled securely on our payment gateway Authorize.net </td></tr>

<tr><td colspan="2"><h2 title="Shipping Information" class="rdd">Shipping Information</h2></td></tr>
<tr>
<td class="alignRight"><b>Shipping Address:</b></td>
<?php if ($_smarty_tpl->tpl_vars['account']->value['default_shipping']) {?>
<td><input type="checkbox" name="default_shipping" value="1" checked > Same as Contact Address</td>
<?php } else { ?>
<td><input type="checkbox" name="default_shipping" value="1" > Same as Contact Address</td>
<?php }?>
</tr>
<tr><td colspan="2"><b>Please note</b>:
<ul class="bd_bullets">
<li>We can NOT ship to: <?php echo $_smarty_tpl->tpl_vars['no_ship_states_string']->value;?>
</li>
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

<?php $_smarty_tpl->_assignInScope('head_title', " - Sign Up");
}
}
