{include file="modules/nav_wineries.tpl"}

<div class="bdgridcontent9">
<article id="region" class="bdwine_content">

{if $regionName}
<header>
<h1 title="The Wines of {$regionName}">The Wines of {$regionName}</h1>
</header>

{$regionContent}

<div id="region_wineries">
<h2 title="{$regionName} Wineries" class="rdd">Our Wineries:</h2>
{section name=w loop=$nwys}
{if $nwys[w].c_id == $c_id}
<span class="country_winery"><a href="/winery/{$nwys[w].web_name}/" title="{$nwys[w].name}">{$nwys[w].name}</a></span>
{/if}
{/section}
</div>


{if $feeditems}
<h2 title="{$regionName} News" class="rdd">{$regionName} News:</h2>
{include file="modules/mod_feeditems.tpl"}
{/if}

{if $wines}
<h2 title="{$regionName} Region Suggestions" class="rdd">Region Suggestions:</h2>
{include file="modules/mod_wines.tpl"}
{/if}

{else}
<img src="/img/all/bluedanubewine_map.jpg"/>
{/if}
</article>
</div>
<div class="clean"></div>


