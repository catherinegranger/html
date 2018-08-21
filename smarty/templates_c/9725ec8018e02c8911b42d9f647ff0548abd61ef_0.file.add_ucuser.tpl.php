<?php
/* Smarty version 3.1.30, created on 2018-04-18 01:01:57
  from "/var/www/html/smarty/templates/amn/pages/add_ucuser.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5ad699059dabb6_08278934',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9725ec8018e02c8911b42d9f647ff0548abd61ef' => 
    array (
      0 => '/var/www/html/smarty/templates/amn/pages/add_ucuser.tpl',
      1 => 1523659342,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:modules/mod_succerrors.tpl' => 1,
  ),
),false)) {
function content_5ad699059dabb6_08278934 (Smarty_Internal_Template $_smarty_tpl) {
?>
<h2>Register a New User</h2>
<br />
		
<?php $_smarty_tpl->_subTemplateRender("file:modules/mod_succerrors.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


		
<form name action="/submit_ucuser/" method="post">
<table cellpadding="4" cellspacing="0">
<tr>
<td style="width:20%;" class="alignRight"><b>User Name:</b></td>
<td style="width:80%;"><input type="text" size="20" maxlength="32" name="user_name" value="<?php echo $_SESSION['user_name'];?>
" /></td>
</tr>
<tr>
<td style="width:20%;" class="alignRight"><b>Display Name:</b></td>
<td style="width:80%;"><input type="text" size="20" maxlength="32" name="display_name" value="<?php echo $_SESSION['display_name'];?>
" /></td>
</tr>
<tr>
<td class="alignRight"><b>Password:</b></td>
<td><input type="password" size="20" maxlength="16" name="password1" value="<?php echo $_SESSION['password1'];?>
" /></td>
</tr>
<tr>
<td class="alignRight"><b>Confirm Password:</b></td>
<td><input type="password" size="20" maxlength="16" name="password2" value="<?php echo $_SESSION['password2'];?>
" /></td>
</tr>
<tr>
<td class="alignRight"><b>Email:</b></td>
<td><input type="text" size="20" maxlength="32" name="email" value="<?php echo $_SESSION['email'];?>
" /></td>
</tr>
<td class="alignRight"><b>Role:</b></td>
<td><select name="role">
	<option value="1" selected>New Member</option>
	<option value="3">Trade CA</option>
	<option value="4">Trade NY</option>
	<option value="5">Distributor</option>
</select></td>
</tr>
<tr>
<td class="alignRight">&nbsp;</td>
<td><input type="submit" value="Register User" /></td>
</tr>
</table>
</form>
&nbsp;<br /><?php }
}
