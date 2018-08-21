								Tags: 
{section name=bit loop=$tags}
								<a href="#" onclick="deleteTag({$tags[bit].tag_id},{$tags[bit].data_id});return false;">{$tags[bit].words}</a>&nbsp;&nbsp;
{/section}
								(click to delete)