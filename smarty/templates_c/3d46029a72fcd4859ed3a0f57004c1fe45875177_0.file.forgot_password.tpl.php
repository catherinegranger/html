<?php
/* Smarty version 3.1.30, created on 2018-04-28 15:20:49
  from "/var/www/html/smarty/templates/pages/forgot_password.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5ae49151e153d5_37160499',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3d46029a72fcd4859ed3a0f57004c1fe45875177' => 
    array (
      0 => '/var/www/html/smarty/templates/pages/forgot_password.tpl',
      1 => 1523659342,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:modules/mod_succerrors.tpl' => 1,
  ),
),false)) {
function content_5ae49151e153d5_37160499 (Smarty_Internal_Template $_smarty_tpl) {
?>
<article id="forgot_password">
<header>
<h1 title="Forgot Password">Forgot Password</h1>
</header>

<?php $_smarty_tpl->_subTemplateRender("file:modules/mod_succerrors.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<div>
<p class="large">
Forgot your password? Please enter the email address you used when you created your account. 
<br>A new password will be emailed to the supplied address.
</p>
</div>

<form method="post" action="/email_password/">
<table cellpadding="4" cellspacing="4">
<tr>
<td class="alignRight"><label>Email:</label></td>
<td><input type='text' size="20" maxlength="60" name='email' /></td>
</tr>
<tr>
<td class="alignRight"><b>&nbsp;</b></td>
<td><button type="submit" title="Forgot Password" name="submit" class="btn btn-sm btn-primary">Submit</button></td>
</tr>
</table>
</form>

</article>

<?php $_smarty_tpl->_assignInScope('head_title', " - Forgot Password");
}
}
