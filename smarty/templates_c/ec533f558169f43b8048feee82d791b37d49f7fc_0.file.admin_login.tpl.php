<?php
/* Smarty version 3.1.30, created on 2018-04-18 01:01:43
  from "/var/www/html/smarty/templates/pages/admin_login.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5ad698f78cf7d3_12365820',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ec533f558169f43b8048feee82d791b37d49f7fc' => 
    array (
      0 => '/var/www/html/smarty/templates/pages/admin_login.tpl',
      1 => 1523659342,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:modules/mod_succerrors.tpl' => 1,
  ),
),false)) {
function content_5ad698f78cf7d3_12365820 (Smarty_Internal_Template $_smarty_tpl) {
?>
<article id="login">
<header>
<h1 class="noborder title="Login">Please Login</h1>
</header>

<?php $_smarty_tpl->_subTemplateRender("file:modules/mod_succerrors.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<div style="text-align:center;margin:0% 40%;">
<form method="post" action="/do_admin_login/">
<table cellpadding="4" cellspacing="4">
<tr>
<td class="alignRight"><label><b>Username:</b></label></td>
<td><input type='text' name='username' /></td>
</tr>
<tr>
<td class="alignRight"><label><b>Password:</b></label></td>
<td><input type='password' name='password' /></td>
</tr>
<tr>
<td class="alignRight"><b>&nbsp;</b></td>
<td><button type="submit" title="Login" name="login" class="btn btn-sm btn-primary">Login</button></td>
</tr>
</table>
</form>
</div>
</article>

<?php $_smarty_tpl->_assignInScope('head_title', " - Admin Login");
}
}
