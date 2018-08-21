				{if $tri == 'deleted'}<div class="error">Commentor Deleted</div>{/if}
				{if $tri == 'undeleted'}<div class="error">Commentor Un-Deleted</div>{/if}
				<h2>Commentors</h2>
				{$pages}
				<table cellpadding="3" cellspacing="1">
					<tr>
						<td style="width:20%;"><b>Name</b></td>
						<td style="width:30%;"><b>Email</b></td>
						<td style="width:40%;"><b>Website</b></td>
						<td style="width:10%;"><b>Delete</b></td>
					</tr>
				{section name=bit loop=$commentors}
					<tr>
						<td>{$commentors[bit].name}</td>
						<td>{ if $commentors[bit].email}{$commentors[bit].email}{else}<div class="size10" style="text-align:center;">&lt; none given &gt;</div>{/if}</td>
						<td>{ if $commentors[bit].website}<a href="http://{$commentors[bit].website}">{$commentors[bit].website}</a>{else}<div class="size10" style="text-align:center;">&lt; none given &gt;</div>{/if}</td>
						<td><a href="/amn/commentors/{$page}/{$commentors[bit].cm_id}/delete/">YES</a></td>
					</tr>
				{/section}
				</table>