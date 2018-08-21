				<h2>Drafts</h2>
				{$pages}
{section name=bit loop=$articles}
				<div style="border:1px solid #000000;padding:5px;margin-bottom:10px;">
					<form action="/get_draft/" method="post">
					<input type="hidden" name="page" value="{$page}" />
					<input type="hidden" name="sound" value="{$sound}" />
					<div style="float:left;width:200px;">
						<b>Title:</b><br />
						<input type="text" size="40" maxlength="255" name="title" value="{$articles[bit].title}" /><br />
						<b>Image Caption:</b><br />
						<textarea rows="3" cols="30" name="img_caption">{$articles[bit].img_caption}</textarea><br />
						<input type="submit" value="Retrieve this" class="sbt" /><br />
						<span class="size10">Saved @ {$articles[bit].drafted}</span>
					</div>
					<div style="float:right;width:600px;">
						<b>Body:</b><br />
						<textarea rows="6" cols="70" name="body">{$articles[bit].body}</textarea>
						<div style="float:left;width:175px;">
							<b>To Post:</b><br />
							{$articles[bit].month}{$articles[bit].day}{$articles[bit].year}<br />
						</div>
						<div style="float:left;width:425px;">
							<b>Tags:</b><br />
							<input type="text" size="60" maxlength="255" name="tags" value="{$articles[bit].tags}" />
						</div>
					</div>
					</form>
					<div style="clear:both;"></div>
				</div>
{/section}
				{$pages}