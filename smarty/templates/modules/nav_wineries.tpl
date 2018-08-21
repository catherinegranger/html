<nav class="bdgridnav3 bdnavigation">

<ul class="top-level">
{section name=bit loop=$ncc}
{if $smarty.section.bit.last}
<li class="last"><a href="/regions/{$ncc[bit].web_name}/"{if $ncc[bit].c_id == $c_id} class="on"{/if} title="{$ncc[bit].full_name} Wines">{$ncc[bit].full_name}</a>
{else}
<li><a href="/regions/{$ncc[bit].web_name}/"{if $ncc[bit].c_id == $c_id} class="on"{/if} title="{$ncc[bit].full_name} Wines">{$ncc[bit].full_name}</a>
{/if}
{if $ncc[bit].c_id == $c_id}
	<ul class="sub-level">
	{section name=bit2 loop=$nwys}
	{if $ncc[bit].c_id == $nwys[bit2].c_id}
	<li><a href="/winery/{$nwys[bit2].web_name}/"{if $winery_web_name == $nwys[bit2].web_name} class="on"{/if} title="{$nwys[bit2].name} Winery">{$nwys[bit2].name}</a></li>
	{/if}
	{/section}
	</ul>
{/if}
</li>
{/section}
</ul>

</nav>