<nav class="bdgridnav2 bdnavigation">
<ul class="top-level">
<li><a href="/travel/" title="Travel" {if !$resource_category}class="on"{/if}>Travel News</a></li>
<li><a href="/travel/wine_tours_routes/" title="Wine Tours" {if $resource_category == 'wine_tours_routes'}class="on"{/if}>Wine Tours</a></li>
<li class="last"><a href="/travel/books_guides/" title="Books & Guides" {if $resource_category == 'books_guides'}class="on"{/if}>Books &amp; Guides</a></li>
</ul>
</nav>

<div class="bdgridcontent10">
<article id="bdnewsevents">

{if $travelitems}
<header>
<h1 title="Travel News">Travel News</h1>
</header/>
{section name=bit loop=$travelitems}
<figure>
<a href="{$travelitems[bit].link}" title="{$travelitems[bit].title}"> <img src="{$travelitems[bit].imagepath}" alt=""{$travelitems[bit].title}" /></a>
</figure>
<div class="news_text">
<h3 title="{$travelitems[bit].title}"><a href="{$travelitems[bit].link}" title="{$travelitems[bit].title}">{$travelitems[bit].title}</a></h3>
<p>{$travelitems[bit].content|truncate:500}</p>
<p><a class="btn btn-basic btn-xs" href="{$travelitems[bit].link}/">Continue &#10142;</a></p>
</div>
<div class="clean"></div>
<div class="news_events_separator"></div>
{/section}

{else}
<header>
<h1 title="{$resources.0.rc_title}">{$resources.0.rc_title}</h1>
</header/>
{/if}

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
{/if}

<div class="clean"></div>
{assign var=head_title value='Travel News'}
</article>
</div>

