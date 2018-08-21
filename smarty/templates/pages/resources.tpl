{if $two}
<nav class="bdgridnav2 bdnavigation">
<ul class="top-level">
{if $resource_category == 'travel' || $resource_category == 'wine_tours_routes' || $resource_category == 'books_guides'} 

<li><a href="/travel/" title="Travel" {if $resource_category == 'travel'}class="on"{/if}>Travel News</a></li>
<li><a href="/travel/wine_tours_routes/" title="Wine Tours" {if $resource_category == 'wine_tours_routes'}class="on"{/if}>Wine Tours</a></li>
<li class="last"><a href="/travel/books_guides/" title="Books & Guides" {if $resource_category == 'books_guides'}class="on"{/if}>Books &amp; Guides</a></li>
{else}
<li><a href="/resources/grape_varietals/" title="Grape Varietals" {if $resource_category == 'grape_varietals'}class="on"{/if}>Grape Varietals</a></li>
<li class="last"><a href="/trade/" title="For the Trade" {if $resource_category == 'trade'}class="on"{/if}>For the Trade</a></li>
{/if}
</ul>
</nav>
<div class="bdgridcontent10">
<article id="bdnewsevents">
{if $tri}
{assign var=head_title value='Resources - '|cat:$rc_title|cat:' - '|cat:$title}
<header>
<h1 title={$title}>{$title}</h1>
</header/>
<div class="some_space">
{if $img_art}
<img src="/img/resource/{$r_id}.jpg" alt="{$title}" class="resource_postcardleft" />
{/if}
{$details|regex_replace:"/[\n]/":"<br />"}
<div class="clean"></div>
{if $wines}
<div class="some_space5">
<a href="/wines/{$varietal_web}/" title="Shop {$varietal_name}"><h2 title="{$varietal_name} Wines" class="rdd">All {$varietal_name} Wines:</h2></a>
{include file="modules/mod_wines.tpl"}
</div>
{/if}
</div>
{else}
{assign var=head_title value='Resources - '|cat:$resources.0.rc_title}
<header>
<h1 class="noborder"><a href="/resources/{$resource_category}/">{$resources.0.rc_title}</a></h1>
</header/>
<p>
{if $resources}
{section name=bit loop=$resources}
{if $resources[bit].img_art}
<figure>
<a href="/resources/{$resource_category}/{$resources[bit].web_name}/" title="{$resources[bit].title}"> <img src="/img/resource/{$resources[bit].r_id}.jpg" alt="{$resources[bit].title}" /></a>
</figure>
{/if}
<div class="news_text">
<h3 title="{$resources[bit].title}"><a href="/resources/{$resource_category}/{$resources[bit].web_name}/" title="{$resources[bit].title}">{$resources[bit].title}</a></h3>
<p>{$resources[bit].details|truncate:500}</p>
{if $resources[bit].resource_url}
<p><a class="btn btn-basic btn-xs" href="{$resources[bit].resource_url}">Continue &#10142;</a></p>
{else}
<p><a class="btn btn-basic btn-xs" href="/resources/{$resource_category}/{$resources[bit].web_name}/">Continue &#10142;</a></p>
{/if}
</div>
<div class="clean"></div>
<div class="news_events_separator"></div>
{/section}
{else}
{assign var=head_title value='Resources'}
<h3 class="noborder">We are working to add content to this section.</h3>
{/if}
</p>
{/if}
</article>
</div>
{else}
{assign var=head_title value='Resources'}
<article id="all_resources">
<header><h1 title="Resources"><a href="/resources/">Resources</a></h1></header>

<div class="box all_resources_item"><a href="/resources/grape_varietals/" title="Grape Varietals" class="size16 bld">Grape Varietals</a></div>
 <div class="box all_resources_item"><a href="/trade/" title="" class="size16 bld">For the Trade</a></div>
<div class="clean"></div>
</article>
{/if}
<div class="clean"></div>
