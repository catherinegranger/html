<nav class="bdgridnav2 bdnavigation">
<ul class="top-level">
<li><a href="/news/" title="News">News &amp; Press</a></li>
<li><a href="/events/" title="Events">Events</a></li>
<li class="last"><a href="/spotlight/" title="Wine Wednesday Spotlight" class="on">Spotlight</a></li>
</ul>
</nav>

<div class="bdgridcontent10">
<article id="bdnewsevents">
<header>
<h1 title="Wine Wednesday Spotlight">Wine Wednesday Spotlight</h1>
</header/>
{section name=bit loop=$spotlightitems}
<figure>
<a href="{$spotlightitems[bit].link}" title="{$spotlightitems[bit].title}"> <img src="{$spotlightitems[bit].imagepath}" alt=""{$spotlightitems[bit].title}" /></a>
</figure>
<div class="news_text">
<h3 title="{$spotlightitems[bit].title}"><a href="{$spotlightitems[bit].link}" title="{$spotlightitems[bit].title}">{$spotlightitems[bit].title}</a></h3>
<p>{$spotlightitems[bit].content|truncate:500}</p>
<p><a class="btn btn-basic btn-xs" href="{$spotlightitems[bit].link}/">Continue &#10142;</a></p>
</div>
<div class="clean"></div>
<div class="news_events_separator"></div>
{/section}
<div class="clean"></div>
</article>

</div>
{assign var=head_title value='Wine Wednesday Spotlight'}