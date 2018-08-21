				{if $two == 'success'}<div class="error">Your work has been succesfully entered.</div>{/if}
				{if $two == 'no_title'}<div class="error">There was no title.</div>{/if}
				{if $two == 'too_small'}<div class="error">Image is too small or non-existent.</div>{/if}
				{if $two == 'too_big'}<div class="error">Image is too large.</div>{/if}
				{if $two == 'file_format'}<div class="error">Image is the wrong format.  Must be .jpg</div>{/if}
				<h2>Enter New Feature</h2>
				<form action="/submit_feature/" method="post" enctype="multipart/form-data">
				<table cellpadding="4" cellspacing="0">
					<tr>
						<td style="text-align:right;"><b>Title:</b></td>
						<td><input type="text" size="50" maxlength="25" name="title" value="{$smarty.session.title}" /></td>
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
