<h2>System Users</h2>
		
{if $tri == "success"}<div class="error">User updated!</div>{/if}
{if $tri == "error"}<div class="error">There was a problem.</div>{/if}
{if $tri == "deleted"}<div class="error">User has been set as deleted.</div>{/if}
{if $tri == "undeleted"}<div class="error">User has been undeleted.</div>{/if}
		
{$paginator}
{if $two}{assign var="page" value=$two}{else}{assign var="page" value="0"}{/if}
<table cellpadding="4" cellspacing="1">
<tr>
<td class="border1" style="width:20%;"><b>Username</b></td>
<td class="border1" style="width:20%;"><b>Password</b></td>
<td class="border1" style="width:20%;"><b>First Name</b></td>
<td class="border1" style="width:20%;"><b>Last Name</b></td>
<td class="border1" style="width:20%;"><b>Bio</b></td>
<td class="border1" style="width:10%; text-align:center;">&nbsp;</td>
<td class="border1" style="width:5%; text-align:center;"><b>Active?</b></td>
<td class="border1" style="width:5%; text-align:center;"><b>Delete?</b></td>
</tr>
{section name=user loop=$group}
<form action="/update_user/" method="post">
<input type="hidden" name="u_id" value="{$group[user].u_id}" />
<input type="hidden" name="page" value="{$page}" />
<tr>
<td class="border1"><input type="text" size="15" maxlength="32" name="username" value="{$group[user].user}" /></td>
<td class="border1"><input type="password" size="15" maxlength="16" name="password" value="{$group[user].pass}" /></td>
<td class="border1"><input type="text" size="15" maxlength="32" name="first_name" value="{$group[user].first_name}" /></td>
<td class="border1"><input type="text" size="15" maxlength="32" name="last_name" value="{$group[user].last_name}" /></td>
<td class="border1"><textarea rows="2" cols="20" name="bio">{$group[user].bio}</textarea></td>
<td class="border1" style="text-align:center;"><input type="hidden" size="1" maxlength="1" name="lev" value="{$group[user].lev}" /><input type="submit" value="Update" /></td>
<td class="border1" style="text-align:center;">{if $group[user].deleted == '0'}<span class="stable">YES</span>{else}<span class="error">NO</span>{/if}</td>
<td class="border1" style="text-align:center;">{if $group[user].deleted == '0'}<a href="/amn/users/{$page}/delete/{$group[user].u_id}/">Delete</a>{else}<a href="/amn/users/{$page}/undelete/{$group[user].u_id}/">Undelete</a>{/if}</td>
</tr>
</form>
{/section}
</table>