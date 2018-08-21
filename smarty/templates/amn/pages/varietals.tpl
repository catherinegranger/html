<h2>View and Update Varietals</h2>
		
{if $tri == "success"}<div class="error">Varietal updated successfully!</div>{/if}
{if $tri == "error"}<div class="error">There was a problem.  Maybe a field was left blank?</div>{/if}
		
{$paginator}
{if $two}{assign var="page" value=$two}{else}{assign var="page" value="0"}{/if}
		
{section name=bit loop=$varietals}
<form action="/update_varietal/" method="post">
<input type="hidden" name="v_id" value="{$varietals[bit].v_id}" />
<input type="hidden" name="page" value="{$page}" />
<table cellpadding="4" cellspacing="0" class="border1" style="margin:5px 0px;">
<tr>
<td style="width:15%;line-height:22px;" class="alignRight"><b>Varietal Name:</b><br /><b>Web Name:</b><br /><b>Type:</b><br /><b>Resource:</b></td>
<td style="width:15%;"><input type="text" size="30" maxlength="48" name="varietal_name" value="{$varietals[bit].name}" />
<br />
<input type="text" size="30" maxlength="48" name="friendly" value="{$varietals[bit].friendly}" />
<br />
<select name="type_id">
<option value="0">Choose</option>
{section name=bot loop=$types}
<option	value="{$types[bot].type_id}"{if $varietals[bit].type_id == $types[bot].type_id} selected{/if}>{$types[bot].name}</option>
{/section}
</select>
<br />
<select name="resource_id">
<option value="0">Choose</option>
{section name=index loop=$resources}
<option	value="{$resources[index].resource_id}"{if $varietals[bit].resource_id == $resources[index].resource_id} selected{/if}>{$resources[index].title}</option>
{/section}
</select>
<br />&nbsp;<br />
<input type="submit" value="Update Varietal" /></td>
<td style="width:10%;" class="alignRight"><b>Notes:</b></td>
<td style="width:40%;"><textarea cols="60" rows="6" name="notes">{$varietals[bit].notes}</textarea></td>
</tr>
</table>
</form>
{/section}
	
{$paginator}