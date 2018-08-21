<h2>View Users</h2>

{if $uc_successes}
<div class="ucsuccess">
{section name=bit loop=$uc_successes}
&bull;&nbsp;{$uc_successes[bit]}
<br>
{/section}
</div>
{/if}
{if $uc_errors}
<div class="ucerror">
{section name=bit loop=$uc_errors}
&bull;&nbsp;{$uc_errors[bit]}
<br>
{/section}
</div>
{/if}

<form action="/delete_ucusers/" method="post">
<table cellpadding="4" cellspacing="1">
<tr>
<td colspan="3"><b>Showing {$two} users</b></td>
<td colspan="6" style="text-align:right;"><a href="/amn/ucusers/wineclub/">Show Wine Club Members</a> | <a href="/amn/ucusers/">Show All</a></td>
</tr>
<tr>
<td class="nowrap" style="width:10%;"><b>Email</b></td>
{if $two!='wineclub'}
<td class="nowrap" style="width:5%;"><b>User Name</b></td>
<td class="nowrap" style="width:5%;"><b>Display Name</b></td>
{/if}
{if $two=='wineclub'}
<td class="nowrap" style="width:5%;"><b>Last Name</b></td>
<td class="nowrap" style="width:5%;"><b>State</b></td>
{/if}
<td class="nowrap" style="width:5%; text-align:left;"><b>Active</b></td>
<td class="nowrap" style="width:10%; text-align:left;"><b>Subscription#</b></td>
<td class="nowrap" style="width:10%; text-align:left;"><b>Since</b></td>
<td class="nowrap" style="width:40%; text-align:left;"><b>Referral</b></td>
<td class="nowrap" style="width:10%; text-align:left;"><b>Last Sign In</b></td>
{if $two=='wineclub'}
<td class="nowrap" style="width:5%;"><b>Order#</b></td>
<td class="nowrap" style="width:5%;"><b>Last Order</b></td>
{/if}
<td class="nowrap" style="width:5%; text-align:center;"><b>Delete?</b></td>
</tr>
{section name=bit loop=$users}
<tr>
<td class="nowrap"><a href="/amn/edit_ucuser/{$users[bit].id}/">{$users[bit].email}</a></td>
{if $two!='wineclub'}
<td class="nowrap"><a href="/amn/edit_ucuser/{$users[bit].id}/">{$users[bit].user_name}</a></td>
<td class="nowrap">{$users[bit].display_name}</td>
{/if}
{if $two=='wineclub'}
<td class="nowrap">{$users[bit].last_name}</td>
<td class="nowrap">{$users[bit].state}</td>
{/if}
<td class="nowrap">{$users[bit].active}</td>
<td class="nowrap">{$users[bit].subscription_id}</td>
<td class="nowrap">{$users[bit].subscription_create_date}</td>
<td>{$users[bit].subscription_referral}</td>
<td class="nowrap">{$users[bit].last_sign_in_stamp}</td>
{if $two=='wineclub'}
<td class="nowrap">{$users[bit].order_count}</td>
<td class="nowrap">{$users[bit].order_placed}</td>
{/if}
<td class="nowrap" style="text-align:center;"><input type='checkbox' name='delete[{$users[bit].id}]' id='delete[{$users[bit].id}]' value='{$users[bit].id}'></td>
</tr>
</form>
{/section}
</table>
<p>
<input type='submit' name='Submit' value='Delete' />
</p>
</form>