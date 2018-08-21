<h2>Add a New Varietal</h2>
<p>The web doesn't take kindly to non-English Latin characters and spaces, so the Web Name takes care of this issue.  <br />View the Varietals section to see some examples.<p />
		
{if $two == "success"}<div class="error">Varietal entered successfully!</div>{/if}
{if $two == "error"}<div class="error">There was a problem.  Maybe a field was left blank?</div>{/if}
{if $two == "duplicate"}<div class="error">This varietal is already in the database</div>{/if}
		
<form action="/submit_varietal/" method="post">
		
<table cellpadding="4" cellspacing="0">
<tr>
<td style="width:20%;" class="alignRight"><b>Varietal Name:</b></td>
<td style="width:80%;"><input type="text" size="30" maxlength="48" name="varietal_name" value="{$smarty.session.varietal_name}" /></td>
</tr>
<tr>
<td class="alignRight"><b>Web Name:</b></td>
<td><input type="text" size="30" maxlength="48" name="friendly" value="{$smarty.session.friendly}" /></td>
</tr>
<tr>
<td class="alignRight"><b>Type:</b></td>
<td><select name="type_id">
<option value="0">Choose</option>
{section name=bit loop=$types}
<option	value="{$types[bit].type_id}"{if $smarty.session.type_id == $types[bit].type_id} selected{/if}>{$types[bit].name}</option>
{/section}
</select>
</td>
</tr>
<tr>
<td class="alignRight"><b>Resource:</b></td>
<td><select name="resource_id">
<option value="0">Choose</option>
{section name=bit loop=$resources}
<option	value="{$resources[bit].resource_id}"{if $smarty.session.resource_id == $resources[bit].resource_id} selected{/if}>{$resources[bit].title}</option>
{/section}
</select>
</td>
</tr>
<tr>
<td class="alignRight"><b>Notes:</b></td>
<td><textarea cols="70" rows="10" name="notes">{$smarty.session.notes}</textarea></td>
</tr>
<tr>
<td class="alignRight">&nbsp;</td>
<td><input type="submit" value="Add Varietal" /></td>
</tr>
</table>
	
</form>