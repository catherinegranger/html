<?php
/* Smarty version 3.1.30, created on 2018-04-20 23:23:45
  from "/var/www/html/smarty/templates/pages/login.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5ada768154a479_32108133',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6d56e0448997b43bcf9b3bdc7b1770013a6b63e2' => 
    array (
      0 => '/var/www/html/smarty/templates/pages/login.tpl',
      1 => 1523659342,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:modules/mod_succerrors.tpl' => 1,
  ),
),false)) {
function content_5ada768154a479_32108133 (Smarty_Internal_Template $_smarty_tpl) {
?>
<article id="login">
<header>
<h1 class="noborder title="Login">Please Login</h1>
</header>

<?php $_smarty_tpl->_subTemplateRender("file:modules/mod_succerrors.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<div class="some_space">
<ul class="bd_bullets">
<li>If you're a returning customer and previously signed up for an account at BlueDanubeWine.com, please login below.</li>
</ul>
</div>
<div class="some_space2">
<form action="/do_login/" method="post">
<table cellpadding="4" cellspacing="4">
<tr>
<td class="alignRight"><label><b>Email:</b></label></td>
<td><input type='email' size="20" maxlength="150" name='email' required /></td>
</tr>
<tr>
<td class="alignRight"><label><b>Password:</b></label></td>
<td><input type='password' size="20" maxlength="225" name='password' required /></td>
</tr>
<tr>
<td class="alignRight"><b>&nbsp;</b></td>
<td><a href="/forgot_password/" title="Forgot Password">Forgot Password</a></td>
</tr>
<tr>
<td class="alignRight"><b>&nbsp;</b></td>
<td><button type="submit" title="Login" name="login" class="btn btn-sm btn-primary">Login</button></td>
</tr>
</table>
</form>
</div>
<div class="some_space2">
<ul class="bd_bullets">
<li>If you're a new customer, <a href="/signup/" title="Sign Up">Sign Up</a> for an account. This will save you the time from entering Billing and Shipping information for future purchases and will give you access to current and past orders made with this account.</li>
</ul>
</div>

</article>

<?php $_smarty_tpl->_assignInScope('head_title', " - Login");
}
}
