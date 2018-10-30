{section name=c loop=$ncc}

<article class="wineries clearfix">

<header>
<h2><a href="/regions/{$ncc[c].web_name}/" title="{$ncc[c].full_name}">{$ncc[c].full_name}</a></h2>
</header>

{assign var=country_webname value=$ncc[c].web_name}

{section name=w loop=$nwys}

{if $nwys[w].c_id == $ncc[c].c_id}
<div class="wineries_group">
{assign var="winery_image" value="img/wineries/`$nwys[w].web_name`_pricelist.jpg"}
<figure>
{if file_exists($winery_image)} 
<a href="/winery/{$nwys[w].web_name}/" title="{$nwys[w].name}"><img src="/img/wineries/{$nwys[w].web_name}_pricelist.jpg" alt="{$nwys[w].name}" /></a>
{else}
<a href="/winery/{$nwys[w].web_name}/" title="{$nwys[w].name}"><img src="/img/wineries/grape_pricelist.jpg" alt="{$nwys[w].name}" /></a>
{/if}
</figure>
<h4 title="{$nwys[w].name}">
<a href="/winery/{$nwys[w].web_name}/" title="{$nwys[w].name}">{$nwys[w].name}</a>
</h4>
</div>


{/if}

{/section}

</article>
{/section}
<div class="clean"></div>
{assign var=head_title value="Wineries"}