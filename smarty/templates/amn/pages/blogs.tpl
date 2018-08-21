				{if $tri == 'success'}<div class="error">Your work has been updated.</div>{/if}
				{if $for == 'img_success'}<div class="error">Your work has been updated.</div>{/if}
				{if $tri == 'no_title'}<div class="error">Your didn't put in a title or web name.</div>{/if}
				{if $tri == 'deleted'}<div class="error">Your work has been marked as deleted</div>{/if}
				{if $tri == 'undeleted'}<div class="error">Your work has been un-deleted</div>{/if}
				<h2>Blogs</h2>
				{$pages}
{section name=bit loop=$articles}
				<table cellpadding="4" cellspacing="0" style="border:1px solid #000000;margin-bottom:10px;">
					<tr>
					<form action="/update_article/" method="post">
					<input type="hidden" name="data_id" value="{$articles[bit].data_id}" />
					<input type="hidden" name="page" value="{$page}" />
						<td>
							<b>Title:</b><br />
							<input type="text" size="30" maxlength="150" name="title" value="{$articles[bit].title}" /><br />
							<b>Web Friendly Name:</b><br />
							<input type="text" size="30" maxlength="150" name="web_name" value="{$articles[bit].web_name}" /><br />
							<b>Image Caption:</b><br />
							<input type="text" size="30" name="img_caption" value="{$articles[bit].img_caption}" /><br />
							<b>Posted:</b><br />
							{$articles[bit].month}{$articles[bit].day}{$articles[bit].year}<br />
							<b>By: </b>
							<select name="u_id">
								<option value="0">Anonymous</option>
	{section name=bit0 loop=$users}
								<option value="{$users[bit0].u_id}"{if $articles[bit].u_id == $users[bit0].u_id} selected{/if}>{$users[bit0].username}</option>
	{/section}
							</select>
							<br />&nbsp;<br />
							<input type="submit" value="Update" class="sbt" /> {if $articles[bit].deleted == '1'}<a href="/amn/blogs/{$page}/undelete/{$articles[bit].data_id}/" class="size10">UNDEL</a>{else}<a href="/amn/blogs/{$page}/delete/{$articles[bit].data_id}/" class="size10">DEL</a>{/if}
						</td>
						<td>
							<b>Body:</b><br />
							<textarea rows="10" cols="50" name="body">{$articles[bit].body}</textarea>
						</td>
					</form>
						<td>
							<b>Update or Replace Image:</b><br />
	{if $articles[bit].img_art}
							<img src="/img/blog/box/thumb/{$articles[bit].data_id}.jpg" alt="{$articles[bit].data_id}" style="margin-bottom:10px;" /><br />
	{/if}
							<form action="/update_article_image/" method="post" enctype="multipart/form-data">
							<input type="hidden" name="data_id" value="{$articles[bit].data_id}" />
							<input type="hidden" name="page" value="{$page}" />	
							<input type="file" name="upload_file" /><br />&nbsp;<br />
							<input type="submit" value="Submit" class="sbt" />
							</form>
						</td>
					</tr>
					<tr>
						<td colspan="4">
							<div id="tags{$articles[bit].data_id}" style="float:left;width:650px;" class="size10">
								Tags: 
			{section name=bit1 loop=$articles[bit].tags}
								<a href="#" onclick="deleteTag({$articles[bit].tags[bit1].tag_id},{$articles[bit].data_id});return false;">{$articles[bit].tags[bit1].words}</a>&nbsp;&nbsp;
			{/section}
								<span class="size8">{if $articles[bit].tags}(click to delete){else}[ none ]{/if}</span>
							</div>
							<div id="adds{$articles[bit].data_id}" style="float:right;width:200px;text-align:right;">
								<form id="addsForm{$articles[bit].data_id}" method="post" action="/jax/new_article_tag/" onsubmit="addTag({$articles[bit].data_id});return false;">
								<input type="hidden" name="data_id" value="{$articles[bit].data_id}" />
								<input id="words{$articles[bit].data_id}" type="text" name="words" maxlength="32" style="width:100px;" /> <input type="submit" value="TAG" />
								</form>
							</div>
							<br style="clear:both;" />
						</td>
					</tr>
				</table>
{/section}
				{literal}
				<script type="text/javascript">
					function addTag(dataID){
						var dataID;
						var url = '/jax/new_article_tag/';
						upitBit = 'words'+dataID;
						new Ajax(
						   url,
						   {
							 method: "post",
							 data: $('addsForm'+dataID)
						   }
						 ).request().chain(function() {
							$(upitBit).setProperty('value','');
							url = '/jax/get_tags/'+dataID+'/';
							upBit = 'tags'+dataID;
							 new Ajax(
							   url,
							   {
								 method: "get",
								 update: $(upBit)
							   }
							 ).request();
						 });
					}
					function deleteTag(tagID,dataID) {
						var dataID;
						var url = '/jax/get_tags/delete/'+tagID;
						new Ajax(
						   url,
						   {
							 method: "post"
						   }
						 ).request().chain(function() {
							url = '/jax/get_tags/'+dataID+'/';
							upBit = 'tags'+dataID;
							 new Ajax(
							   url,
							   {
								 method: "get",
								 update: $(upBit)
							   }
							 ).request();
						 });
					}
				</script>
				{/literal}
				{$pages}