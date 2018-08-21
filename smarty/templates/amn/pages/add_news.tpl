				{if $two == 'success'}<div class="error">Your work has been succesfully entered.</div>{/if}
				{if $two == 'no_title'}<div class="error">There was no title!</div>{/if}
				<h2>Enter Event</h2>
				<form action="/submit_news/" method="post" enctype="multipart/form-data">
				<table cellpadding="4" cellspacing="0">
					<tr>
						<td style="width: 20%;text-align:right;"><b>Date Happens:</b></td>
						<td style="width: 80%;">MM{$month} DD{$day} YYYY{$year}</td>
					</tr>
					<tr>
						<td style="text-align:right;"><b>Title:</b></td>
						<td><input type="text" size="45" maxlength="127" name="title" value="{$smarty.session.title}" /></td>
					</tr>
					<tr>
						<td style="text-align:right;"><b>Website:</b></td>
						<td><input type="text" size="45" maxlength="127" name="website" value="{$smarty.session.website}" /> (everything including http://)</td>
					</tr>
					<tr>
						<td style="text-align:right;"><b>City:</b></td>
						<td><input type="text" size="45" maxlength="127" name="city" value="{$smarty.session.city}" /></td>
					</tr>
					<tr>
						<td style="text-align:right;"><b>Location:</b></td>
						<td><textarea rows="5" cols="50" name="location">{$smarty.session.location}</textarea></td>
					</tr>
					<tr>
						<td style="text-align:right;"><b>Details:</b></td>
						<td><textarea rows="10" cols="50" name="details">{$smarty.session.details}</textarea></td>
					</tr>
					<tr>
						<td style="text-align:right;"><b>Image:</b></td>
						<td><input type="file" name="upload_file" /> (less than 500k, only jpeg, 170px wide)</td>
					</tr>
					<tr>
						<td style="text-align:right;padding-top:25px;">&nbsp;</td>
						<td style="padding-top:25px;"><input type="submit" value="Submit This" class="sbt" /></td>
					</tr>
				</table>
				</form>
