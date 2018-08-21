				{if $tri == 'deleted'}<div class="error">Comment Deleted</div>{/if}
				{if $tri == 'undeleted'}<div class="error">Comment Un-Deleted</div>{/if}
				{if $tri == 'approved'}<div class="error">Comment Approved</div>{/if}
				{if $tri == 'updated'}<div class="error">Comment Updated</div>{/if}
				{if $tri == 'error'}<div class="error">Something went wrong.  Call a geek.</div>{/if}
				<h2>Comments</h2>
				<span class="size11">({$total_comments} currently)</span><br />
				{$pages}
				<table cellpadding="4" cellspacing="0">
					<tr>
						<td style="width:17%;"><b>Article</b></td>
						<td style="width:38%;"><b>Blurb</b></td>
						<td style="width:5%;"><b>Author</b></td>
						<td style="width:25%;"><b>Posted</b></td>
						<td style="width:10%;"><b>Update</b></td>
						<td style="width:5%;text-align:center;"><b>APP</b></td>
						<td style="width:5%;text-align:center;"><b>DEL</b></td>
					</tr>
				{section name=bit loop=$comments}
					<form action="/update_comment/" method="post">
					<input type="hidden" name="c_id" value="{$comments[bit].c_id}" />
					<input type="hidden" name="two" value="{$page}" />
					<tr>
						<td><a href="/blog/view/{$comments[bit].web_name}/">{$comments[bit].title}</a></td>
						<td><textarea cols="35" rows="4" name="blurb">{$comments[bit].blurb}</textarea></td>
						<td>{$comments[bit].name}</td>
						<td>{$comments[bit].day}{$comments[bit].month}{$comments[bit].year}<br />&nbsp;<br /><input type="text" name="hours" value="{$comments[bit].hours}" maxlength="2" size="2" />:<input type="text" name="minutes" value="{$comments[bit].minutes}" maxlength="2" size="2" /></td>
						<td><input type="submit" value="Update" class="sbt" /></td>
						<td style="text-align:center;">{if $comments[bit].approved == '1'}-{else}<a href="/amn/comments/{$page}/{$comments[bit].c_id}/approve/">YES</a>{/if}</td>
						<td style="text-align:center;"><a href="/amn/comments/{$page}/{$comments[bit].c_id}/delete/" class="size9">COMM</a><br /><a href="/amn/comments/{$page}/{$comments[bit].c_id}/delete/{$comments[bit].cm_id}/delete/" class="size9">COMM+</a></td>
					</tr>
					</form>
				{/section}
				</table>