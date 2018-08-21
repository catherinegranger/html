<h2>View and Update Wineries</h2>

{if $for == "success"}<div class="error">Winery updated successfully!</div>{/if}
{if $for == "deleted"}<div class="error">Winery has been deleted.</div>{/if}
{if $for == "undeleted"}<div class="error">Winery has been undeleted.</div>{/if}
{if $for == "error"}<div class="error">There was a problem.  Maybe a field was left blank?</div>{/if}
		
<table cellpadding="4" cellspacing="1">
<tr><td colspan="4">{$paginator}</td></tr>
{if $tri}{assign var="page" value=$tri}{else}{assign var="page" value="0"}{/if}
<tr>
<td colspan="2"><b>Showing {$two} wineries</b></td>
<td colspan="2" style="text-align:right;"><a href="/amn/wineries/active/">Show Active</a> | <a href="/amn/wineries/undeleted/">Show Undeleted</a> | <a href="/amn/wineries/all/">Show All</a></td>
</tr>

<tr>
<td class="border1" style="width:40%;"><b>Winery Name</b></td>
<td class="border1" style="width:20%;text-align:center;"><b>Country</b></td>
<td class="border1" style="width:20%;text-align:center;"><b>Edit</b></td>
<td class="border1" style="width:20%;text-align:center;"><b>Delete?</b></td>
</tr>
{section name=bit loop=$wineries}
<tr>
<td class="border1"><a href="/amn/edit_winery/{$wineries[bit].wy_id}/"><b>{$wineries[bit].name}</b></a></td>
<td class="border1" style="text-align:center;">{$wineries[bit].full_name}</td>
<td class="border1" style="text-align:center;"><a href="/amn/edit_winery/{$wineries[bit].wy_id}/">YES</a></td>
<td class="border1" style="text-align:center;">{if $wineries[bit].deleted == '0'}<a href="/amn/wineries/{$two}/{$page}/delete/{$wineries[bit].wy_id}/">YES</a>{else}<a href="/amn/wineries/{$two}/{$page}/undelete/{$wineries[bit].wy_id}/">NO</a>{/if}</td>
</tr>
{/section}
<tr><td colspan="4">{$paginator}</td></tr>
</table>
