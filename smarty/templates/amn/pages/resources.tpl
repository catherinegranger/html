{if $tri == 'success'}<div class="error">Your work has been updated.</div>{/if}
{if $for == 'img_success'}<div class="error">Your work has been updated.</div>{/if}
{if $tri == 'no_title'}<div class="error">Your didn't put in a title or web name.</div>{/if}
{if $tri == 'deleted'}<div class="error">Your work has been marked as deleted</div>{/if}
{if $tri == 'undeleted'}<div class="error">Your work has been un-deleted</div>{/if}
<h2>Resources</h2>
{$pages}
{section name=bit loop=$resources}
<table cellpadding="4" cellspacing="0" style="border:1px solid #000000;margin-bottom:10px;">
<tr>
<form action="/update_resource/" method="post">
<input type="hidden" name="r_id" value="{$resources[bit].r_id}" />
<input type="hidden" name="page" value="{$page}" />
<td>
<b>Title:</b><br />
<input type="text" size="20" maxlength="64" name="title" value="{$resources[bit].title}" /><br />
<b>Webname:</b><br />
<input type="text" size="20" maxlength="64" name="web_name" value="{$resources[bit].web_name}" /><br />
<b>Resource URL:</b><br />
<input type="text" size="20" maxlength="600" name="resource_url" value="{$resources[bit].resource_url}" /><br />
<b>Keyword:</b><br />
<input type="text" size="20" maxlength="50" name="keyword" value="{$resources[bit].keyword}" /><br />
<b>Cateogry</b><br />
<select name="rc_id">
{section name=bot loop=$cats}
<option value="{$cats[bot].rc_id}"{if $cats[bot].rc_id == $resources[bit].rc_id} selected{/if}>{$cats[bot].title}</option>
{/section}
</select>
<br />&nbsp;<br />
<input type="submit" value="Update" class="sbt" /> {if $resources[bit].deleted == '1'}<a href="/amn/resources/{$page}/undelete/{$resources[bit].r_id}/" class="size10">UNDEL</a>{else}<a href="/amn/resources/{$page}/delete/{$resources[bit].r_id}/" class="size10">DEL</a>{/if}
</td>
<td>
<b>Details:</b><br />
<textarea rows="14" cols="50" name="details">{$resources[bit].details}</textarea>
</td>
</form>
<td>
{if $resources[bit].img_art == '1'}
<img src="/img/resource/thumb/{$resources[bit].r_id}.jpg" alt="{$resources[bit].r_id}" style="margin-bottom:5px;height:50px;" />
<br />
{/if}
<b>New or Replacement Image:</b>
<form action="/update_resource_image/" method="post" enctype="multipart/form-data">
<input type="hidden" name="r_id" value="{$resources[bit].r_id}" />
<input type="hidden" name="page" value="{$page}" />	
<input type="file" name="upload_file" /><br />&nbsp;<br />
<input type="submit" value="Submit" class="sbt" />
</form>
</td>
</tr>
</table>
{/section}
{$pages}