		<h2>Add a New User</h2>
		<i>Both the username and password are required.</i>
		<br />&nbsp;<br />
		
		{if $two == "success"}<div class="error">User entered successfully!</div>{/if}
		{if $two == "error"}<div class="error">There was a problem.  Maybe a field was left blank?</div>{/if}
		
		<form action="/submit_user/" method="post">
		
		<table cellpadding="4" cellspacing="0">
			<tr>
				<td style="width:20%;" class="alignRight"><b>Username:</b></td>
				<td style="width:80%;"><input type="text" size="20" maxlength="32" name="uname" value="{$smarty.session.uname}" /></td>
			</tr>
			<tr>
				<td class="alignRight"><b>Password:</b></td>
				<td><input type="text" size="20" maxlength="16" name="pass" value="{$smarty.session.pass}" /></td>
			</tr>
			<tr>
				<td class="alignRight"><b>First Name:</b></td>
				<td><input type="text" size="20" maxlength="32" name="first_name" value="{$smarty.session.first_name}" /></td>
			</tr>
			<tr>
				<td class="alignRight"><b>Last Name:</b></td>
				<td><input type="text" size="20" maxlength="32" name="last_name" value="{$smarty.session.last_name}" /></td>
			</tr>
			<tr>
				<td class="alignRight"><b>Bio:</b></td>
				<td><textarea rows="5" cols="30" name="bio">{$smarty.session.bio}</textarea></td>
			</tr>
			<!--
			<tr>
				<td class="alignRight"><b>Level:</b></td>
				<td><input type="text" size="20" maxlength="16" name="lev" value="1" /> <i>1 to 5</i></td>
			</tr>
			-->
			<tr>
				<td class="alignRight">&nbsp;</td>
				<td><input type="submit" value="Add User" /></td>
			</tr>
		</table>
		
		</form>