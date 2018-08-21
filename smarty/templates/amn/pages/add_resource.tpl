{if $two == 'success'}<div class="error">Your work has been succesfully entered.</div>{/if}
{if $two == 'no_title'}<div class="error">There was no title.</div>{/if}
{if $two == 'too_small'}<div class="error">Image is too small or non-existent.</div>{/if}
{if $two == 'too_big'}<div class="error">Image is too large.</div>{/if}
<h2>Enter New Resource</h2>
<form action="/submit_resource/" method="post" enctype="multipart/form-data">
<table cellpadding="4" cellspacing="0">
<tr>
<td style="text-align:right;"><b>Category:</b></td>
<td><select name="rc_id"><option value="">Select</option>
{section name=bit loop=$cats}
<option value="{$cats[bit].rc_id}">{$cats[bit].title}</option>
{/section}
</select></td>
</tr>
<tr>
<td style="text-align:right;"><b>Title:</b></td>
<td><input type="text" size="50" maxlength="100" name="title" value="{$smarty.session.title}" /></td>
</tr>
<tr>
<td style="text-align:right;"><b>Resource URL:</b></td>
<td><input type="text" size="50" maxlength="600" name="resource_url" value="{$smarty.session.resource_url}" /></td>
</tr>
<tr>
<td style="text-align:right;"><b>Keyword:</b></td>
<td><input type="text" size="50" maxlength="600" name="keyword" value="{$smarty.session.keyword}" /></td>
</tr>
<tr>
<td style="text-align:right;"><b>Details:</b></td>
<td><textarea rows="12" cols="60" name="details">{$smarty.session.details}</textarea></td>
</tr>
<tr>
<td style="text-align:right;"><b>Image:</b></td>
<td><input type="file" name="upload_file" /> (less than 500k only jpeg)</td>
</tr>
<tr>
<td>&nbsp;</td>
<td><input type="submit" value="Submit This" class="sbt" /></td>
</tr>
</table>
</form>
