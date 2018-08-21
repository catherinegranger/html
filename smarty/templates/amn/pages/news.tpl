{if $tri == 'success'}<div class="error">Your work has been updated.</div>{/if}
{if $tri == 'no_title'}<div class="error">Your didn't put in a title or web name.</div>{/if}
{if $tri == 'deleted'}<div class="error">Your work has been marked as deleted</div>{/if}
{if $tri == 'undeleted'}<div class="error">Your work has been un-deleted</div>{/if}
<h2>News</h2>
{$pages}
{section name=bit loop=$news}
<table cellpadding="4" cellspacing="0" style="border:1px solid #000000;margin-bottom:10px;">
<tr>
<form action="/update_news/" method="post">
<input type="hidden" name="n_id" value="{$news[bit].n_id}" />
<input type="hidden" name="page" value="{$page}" />
<td>
<b>Title:</b><br />
<input type="text" size="45" maxlength="128" name="title" value="{$news[bit].title}" /><br />
<b>Website:</b><br />
<input type="text" size="45" maxlength="250" name="website" value="{$news[bit].website}" /><br />
<b>Occurs:</b><br />
MM{$news[bit].month} DD{$news[bit].day} YY{$news[bit].year}
<br />&nbsp;<br />
<input type="submit" value="Update" class="sbt" /> &nbsp;&nbsp;{if $news[bit].deleted == '1'}<a href="/amn/news/{$page}/undelete/{$news[bit].n_id}/">UNDEL</a>{else}<a href="/amn/news/{$page}/delete/{$news[bit].n_id}/">DEL</a>{/if}
</td>
<td>
<b>City:</b><br />
<input type="text" size="45" maxlength="128" name="city" value="{$news[bit].city}" /><br />
<b>Location:</b><br />
<textarea rows="3" cols="45" name="location">{$news[bit].location}</textarea><br />
<b>Details:</b><br />
<textarea rows="4" cols="45" name="details">{$news[bit].details}</textarea>
</td>
</form>
<td>
<img src="/img/news/thumb/{$news[bit].n_id}.jpg" alt="{$news[bit].n_id}" style="margin-bottom:5px;" /><br />
<b>New or Replacement Image:</b>
<form action="/update_news_image/" method="post" enctype="multipart/form-data">
<input type="hidden" name="n_id" value="{$news[bit].n_id}" />
<input type="hidden" name="page" value="{$page}" />	
<input type="file" name="upload_file" /><br />&nbsp;<br />
<input type="submit" value="Submit" class="sbt" />
</form>
</td>
</tr>
</table>
{/section}
{$pages}