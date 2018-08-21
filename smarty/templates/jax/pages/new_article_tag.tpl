								<form id="addsForm" method="post" action="/jax/new_article_tag/" onsubmit="addTag($(this).serialize(true),{$data_id});getTags({$data_id});return false;">
								<input type="hidden" name="data_id" value="{$data_id}" />
								<input type="text" name="words" maxlength="32" style="width:100px;" /> <input type="submit" value="TAG" class="sbt" />
								</form>