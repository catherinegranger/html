				{if $tri == 'success'}<div class="error">Your work has been updated.</div>{/if}
				{if $for == 'img_success'}<div class="error">Your work has been updated.</div>{/if}
				{if $tri == 'no_title'}<div class="error">Your didn't put in a title or web name.</div>{/if}
				{if $tri == 'deleted'}<div class="error">Your work has been marked as deleted</div>{/if}
				{if $tri == 'undeleted'}<div class="error">Your work has been un-deleted</div>{/if}
				<h2>Features</h2>
				{$pages}
{section name=bit loop=$features}
				<table cellpadding="4" cellspacing="0" style="border:1px solid #000000;margin-bottom:10px;">
					<tr>
					<form action="/update_feature/" method="post">
					<input type="hidden" name="f_id" value="{$features[bit].f_id}" />
					<input type="hidden" name="page" value="{$page}" />
						<td>
							<b>Title:</b><br />
							<input type="text" size="20" maxlength="25" name="title" value="{$features[bit].title}" /><br />
							<br />&nbsp;<br />
							<input type="submit" value="Update" class="sbt" /> {if $features[bit].deleted == '1'}<a href="/amn/features/{$page}/undelete/{$features[bit].f_id}/" class="size10">UNDEL</a>{else}<a href="/amn/features/{$page}/delete/{$features[bit].f_id}/" class="size10">DEL</a>{/if}
						</td>
						<td>
							<b>Details:</b><br />
							<textarea rows="6" cols="45" name="details">{$features[bit].details}</textarea>
						</td>
					</form>
						<td>
							<img src="/img/feature/thumb/{$features[bit].f_id}.jpg" alt="{$features[bit].f_id}" style="margin-bottom:5px;" /><br />
							<b>New or Replacement Image:</b>
							<form action="/update_feature_image/" method="post" enctype="multipart/form-data">
							<input type="hidden" name="f_id" value="{$features[bit].f_id}" />
							<input type="hidden" name="page" value="{$page}" />	
							<input type="file" name="upload_file" /><br />&nbsp;<br />
							<input type="submit" value="Submit" class="sbt" />
							</form>
						</td>
					</tr>
				</table>
{/section}
				{$pages}