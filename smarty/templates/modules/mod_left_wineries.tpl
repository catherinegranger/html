<div style="float:left;width:170px;">

{if $two && $two != 'germany'}
<ul id="lnav">
{section name=bit loop=$ncc}
<li><a href="/regions/{$ncc[bit].web_name}/"{if $ncc[bit].c_id == $c_id} class="on"{/if} title="{$ncc[bit].full_name} Wines">{$ncc[bit].full_name}</a>
{if $ncc[bit].c_id == $c_id}
	<ul>
	{section name=bit2 loop=$nwys}
	{if $ncc[bit].c_id == $nwys[bit2].c_id}
	<li><a href="/winery/{$nwys[bit2].web_name}/"{if $two == $nwys[bit2].web_name} class="on"{/if} title="{$nwys[bit2].name} Winery">{$nwys[bit2].name}</a></li>
	{/if}
	{/section}
	</ul>
{/if}
</li>
{/section}
</ul>

{else}
<ul id="lnav">
<li><a href="/regions/austria/"{if $two == "austria"} class="on"{/if} title="Austrian Wines">Austria</a></li>
<li><a href="/regions/croatia/"{if $two == "croatia"} class="on"{/if} title="Croatian Wines">Croatia</a></li>
<li><a href="/regions/germany/"{if $two == "germany"} class="on"{/if} title="German Wines">Germany</a></li>
<li><a href="/regions/hungary/"{if $two == "hungary"} class="on"{/if} title="Hungarian Wines">Hungary</a></li>
<li><a href="/regions/montenegro/"{if $two == "montenegro"} class="on"{/if} title="Montenegrin Wines">Montenegro</a></li>
<li><a href="/regions/slovenia/"{if $two == "slovenia"} class="on"{/if} title="Slovenian Wines">Slovenia</a></li>
</ul>
{/if}
</div>