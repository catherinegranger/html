				{if $two == 'success'}<div class="error">Your work has been succesfully entered.</div>{/if}
				{if $two == 'no_title'}<div class="error">There was no title or web name!</div>{/if}
				{if $two == 'updated'}<div class="error">Blogroll updated</div>{/if}
				{if $two == 'too_small'}<div class="error">Image is too small or non-existent.</div>{/if}
				{if $two == 'too_big'}<div class="error">Image is too large.</div>{/if}
				<h2>Enter New Blog</h2>
				<div style="text-align:right;line-height:10px;margin-top:-10px;" class="size10">{$blog_count} blogs</div>
				<form id="article" action="/enter_article/" method="post" enctype="multipart/form-data">
				<table cellpadding="4" cellspacing="0">
					<tr>
						<td style="width: 20%;text-align:right;"><b>Date Public:</b></td>
						<td style="width: 80%;">MM{$month} DD{$day} YYYY{$year} Default is tomorrow</td>
					</tr>
					<tr>
						<td style="text-align:right;"><b>Title:</b></td>
						<td><input type="text" size="75" maxlength="255" name="title" value="{$smarty.session.title}" /></td>
					</tr>
					<tr>
						<td style="text-align:right;"><b>Body:</b></td>
						<td><textarea rows="16" cols="75" name="body" id="bodyText">{$smarty.session.body}</textarea></td>
					</tr>
					<tr>
						<td style="text-align:right;"><b>Tags:</b></td>
						<td><input type="text" size="75" maxlength="128" name="tags" value="{$smarty.session.tags}" /> Separate with commas</td>
					</tr>
					<tr>
						<td style="text-align:right;"><b>Image:</b></td>
						<td><input type="file" name="upload_file" /> Appears as article header</td>
					</tr>
					<tr>
						<td style="text-align:right;"><b>Image Caption:</b></td>
						<td><textarea rows="2" cols="50" name="caption">{$smarty.session.caption}</textarea></td>
					</tr>
					<tr>
						<td style="text-align:right;padding-top:25px;">&nbsp;</td>
						<td style="padding-top:25px;">
							<input type="submit" value="Submit This" class="sbt" style="float:left;" />
							<div style="float:left;margin-left:20px;">
								<div id="log">Type in the Body to start auto-save</div>
								<div style="height:20px;margin-bottom:10px;"><img src="/img/loadingSmall.gif" id="loader" alt="loading..." style="display:none;" /></div>
							</div>
						</td>
					</tr>
				</table>
				</form>
				<br />&nbsp;<br />
				<form action="/update_blogroll/" method="post">
				<table cellpadding="4" cellspacing="0">
					<tr>
						<td style="width: 20%;text-align:right;"><b>Blogroll:</b></td>
						<td style="width: 80%;"><textarea rows="20" cols="75" name="blogroll">{$blogroll}</textarea></td>
					</tr>
					<tr>
						<td style="text-align:right;padding-top:25px;">&nbsp;</td>
						<td style="padding-top:25px;"><input type="submit" value="Submit This" class="sbt" /></td>
					</tr>
				</table>
				</form>
{literal}
				<script type="text/javascript">
					var timing = 30000; 
					var periodical; 
					var url = '/admin_temp_article/';
					function sendForm() {
						if ($('bodyText').getValue() != '') {
							$('loader').style.display = 'block';
							new Ajax(
							   url,
							   {
								 method: "post",
								 data: $('article'),
								 update: $('log')
							   }
							 ).request().chain(function () {
								$('loader').style.display = 'none';
							});
						};
					}
					addEvent('load', function() {
						periodical = sendForm.periodical(timing);
					});
				</script>
{/literal}