<article id="login">
<header>
<h1 class="noborder title="Login">Please Login</h1>
</header>

{include file="modules/mod_succerrors.tpl"}

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

{assign var="head_title" value=" - Admin Login"}
