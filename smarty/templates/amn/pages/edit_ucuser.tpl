<h2>Edit User {$user.user_name}</h2>
<br>

{include file="modules/mod_succerrors.tpl"}

		
<form action="/update_ucuser/" method="post">
<input type="hidden" name="userId" value="{$two}" />
		
<table cellpadding="4" cellspacing="0">
<tr>
<td class="alignRight"><b>Display Name:</b></td>
<td><input type="text" size="50" maxlength="60" name="display_name" value="{$user.display_name}" /></td>
</tr>
<tr>
<td class="alignRight"><b>Title:</b></td>
<td><input type="text" size="50" maxlength="60" name="title" value="{$user.title}" /></td>
</tr>
<tr>
<td class="alignRight"><b>Email:</b></td>
<td><input type="text" size="50" maxlength="60" name="email" value="{$user.email}" /></td>
</tr>
{if $user.active}
<tr>
<td style="width:20%;" class="alignRight"><b>Active:</b></td>
<td style="width:80%;">Yes</td>
</tr>
{else}
<tr>
<td style="width:20%;" class="alignRight"><b>Active:</b></td>
<td style="width:80%;">No</td>
</tr>
<tr>
<td style="width:20%;" class="alignRight"><b>Activate:</b></td>
<td style="width:80%;"><input type='checkbox' name='activate' id='activate' value='activate'></td>
</tr>
{/if}
<tr>
<td class="alignRight"><b>Subscription Status Date:</b></td><td>{$user.subscription_status_date_pretty}</td>
</tr>
<tr>
<td class="alignRight"><b>Subscription Expiration Date:</b></td><td>{$user.subscription_expiration_date}</td>
</tr>
<tr>
<td class="alignRight"><b>Subscription #:</b></td><td><input type="text" size="50" maxlength="60" name="subscription_id" value="{$user.subscription_id}" /></td>
</tr>
<tr>
<td class="alignRight"><b>Subscription Status:</b></td><td><input type="text" size="50" maxlength="60" name="subscription_status" value="{$user.subscription_status}" /></td>
</tr>
<tr>
<td class="alignRight"><b>Subscription Message:</b></td><td><input type="text" size="50" maxlength="60" name="subscription_message" value="{$user.subscription_message}" /></td>
</tr>
<td class="alignRight"><b>Subscription Referral:</b></td><td><input type="text" size="50" maxlength="60" name="subscription_referral" value="{$user.subscription_referral}" /></td>
</tr>

<tr>
<td class="alignRight"><b>Delete:</b></td>
<td><input type="checkbox" name='delete[{$user.id}]' id='delete[{$user.id}]' value='{$user.id}' /></td>
</tr>
{if $permissions}
<tr>
<td class="alignRight"><b>Remove Permission:</b></td>
<td>
{section name=bit loop=$permissions}
<input type="checkbox" name='removePermission[{$permissions[bit].id}]' id='removePermission[{$permissions[bit].id}]' value='{$permissions[bit].id}' /> {$permissions[bit].name}
<br>
{/section}
</td>
</tr>
{/if}
{if $newPermissions}
<tr>
<td class="alignRight"><b>Add Permission:</b></td>
<td>
{section name=bit loop=$newPermissions}
<input type="checkbox" name='addPermission[{$newPermissions[bit].id}]' id='addPermission[{$newPermissions[bit].id}]' value='{$newPermissions[bit].id}' /> {$newPermissions[bit].name}
<br>
{/section}
</td>
</tr>
{/if}
<tr>
<td class="alignRight"><b>&nbsp;</b></td>
<td><input type="submit" value='Update' class='submit' /></td>
</tr>
</table>
</form>