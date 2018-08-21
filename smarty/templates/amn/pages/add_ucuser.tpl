<h2>Register a New User</h2>
<br />
		
{include file="modules/mod_succerrors.tpl"}

		
<form name action="/submit_ucuser/" method="post">
<table cellpadding="4" cellspacing="0">
<tr>
<td style="width:20%;" class="alignRight"><b>User Name:</b></td>
<td style="width:80%;"><input type="text" size="20" maxlength="32" name="user_name" value="{$smarty.session.user_name}" /></td>
</tr>
<tr>
<td style="width:20%;" class="alignRight"><b>Display Name:</b></td>
<td style="width:80%;"><input type="text" size="20" maxlength="32" name="display_name" value="{$smarty.session.display_name}" /></td>
</tr>
<tr>
<td class="alignRight"><b>Password:</b></td>
<td><input type="password" size="20" maxlength="16" name="password1" value="{$smarty.session.password1}" /></td>
</tr>
<tr>
<td class="alignRight"><b>Confirm Password:</b></td>
<td><input type="password" size="20" maxlength="16" name="password2" value="{$smarty.session.password2}" /></td>
</tr>
<tr>
<td class="alignRight"><b>Email:</b></td>
<td><input type="text" size="20" maxlength="32" name="email" value="{$smarty.session.email}" /></td>
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
&nbsp;<br />