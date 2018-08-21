<nav class="bdgridnav2 bdnavigation">
<ul class="top-level">
<li><a href="/news/" title="News" class="on">News &amp; Press</a></li>
<li><a href="/events/" title="Events">Events</a></li>
<li class="last"><a href="/spotlight/" title="Wine Wednesday Spotlight">Spotlight</a></li>
</ul>
</nav>

<div class="bdgridcontent10">
<article id="bdnewsevents">
<header>
<h1 title="News">News &amp; Press</h1>
</header/>
{section name=bit loop=$newsitems}
<figure>
<a href="{$newsitems[bit].link}" title="{$newsitems[bit].title}"> <img src="{$newsitems[bit].imagepath}" alt=""{$newsitems[bit].title}" /></a>
</figure>
<div class="news_text">
<h3 title="{$newsitems[bit].title}"><a href="{$newsitems[bit].link}" title="{$newsitems[bit].title}">{$newsitems[bit].title}</a></h3>
<p>{$newsitems[bit].content|truncate:500}</p>
<p><a class="btn btn-basic btn-xs" href="{$newsitems[bit].link}/">Continue &#10142;</a></p>
</div>
<div class="clean"></div>
<div class="news_events_separator"></div>
{/section}
<div class="clean"></div>
</article>

</div>
{assign var=head_title value='News'}