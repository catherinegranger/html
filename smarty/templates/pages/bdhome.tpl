{include file="modules/mod_succerrors.tpl"}

<div id="bd-carousel" class="carousel slide carousel-fade" data-ride="carousel" data-interval="10000">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#bd-carousel" data-slide-to="0" class="active"></li>
    <li data-target="#bd-carousel" data-slide-to="1"></li>
    <li data-target="#bd-carousel" data-slide-to="2"></li>
    <li data-target="#bd-carousel" data-slide-to="3"></li>
    <li data-target="#bd-carousel" data-slide-to="4"></li>
  </ol>
 
 <!-- Wrapper for slides -->
<div class="carousel-inner">
{section name=bit loop=$gallery max=5}
{if $smarty.section.bit.first}
<div class="item active">
{else}
<div class="item">
{/if}
<img src="/img/regions/{$gallery[bit].img}" alt="{$gallery[bit].country}">
<div class="carousel-caption">
<h1 class="wit pix32">{$gallery[bit].country}</h1>
<p class="pix18 p_l">{$gallery[bit].description}</p>
<p class="pix18"><a class="wit" href="regions/{$gallery[bit].country|lower}/">Learn more &gt; &gt;</a></p> 
</div>
</div>
{/section}
</div>
 


</div> <!-- Carousel -->


<article id="latestnews" class="bdnews bdgrid4">
<header>
<h1 title="In the News"><a href="/news/" title="News">In the News</a></h1>
</header>
{section name=bit loop=$newsitems max=4}
<div class="bdnews_group bdgrid_group {if $smarty.section.bit.last} bdgrid_group_last {/if}">
<figure>
<a href="{$newsitems[bit].link}" title="{$newsitems[bit].title}"><img src="{$newsitems[bit].imagepath}" alt="{$newsitems[bit].title}" /></a>
</figure>
<h4 title="{$newsitems[bit].title}">
<a href="{$newsitems[bit].link}" title="{$newsitems[bit].title}">{$newsitems[bit].title}</a>
</h4>
<span class="bld rdd">{$newsitems[bit].country_category|upper}</span> {$newsitems[bit].content|truncate:150}  
<br><a class="btn btn-basic btn-xs" href="{$newsitems[bit].link}/">Continue &#10142;</a>
</div>
{/section}
</article>
<div class="clean"></div>

<article id="spotlight" class="bdspotlight bdgrid3">
<header>
<h1 title="Wine Wednesday Spotlight"><a href="/spotlight/" title="Spotlight">Wine Wednesday Spotlight</a></h1>
</header>
{section name=bit loop=$spotlightitems max=3}
<div class="bdspotlight_group bdgrid_group {if $smarty.section.bit.last} bdgrid_group_last {/if}">
<figure>
<a href="{$spotlightitems[bit].link}" title="{$spotlightitems[bit].title}"><img src="{$spotlightitems[bit].imagepath}" alt="{$spotlightitems[bit].title}" /></a>
</figure>
<h4 title="{$spotlightitems[bit].title}">
<a href="{$spotlightitems[bit].link}" title="{$spotlightitems[bit].title}">{$spotlightitems[bit].title}</a>
</h4>
<span class="bld rdd">{$spotlightitems[bit].country_category|upper}</span> {$spotlightitems[bit].content|truncate:150}  
<br><a class="btn btn-basic btn-xs" href="{$spotlightitems[bit].link}/">Continue &#10142;</a>
</div>
{/section}
</article>

<article id="latestevents" class="bdgrid4">
<header>
<h1 title="Events"><a href="/events/" title="Events">Tasting Events</a></h1>
</header>
{section name=bit loop=$events max=4}
<div class="bdevent_group bdgrid_group {if $smarty.section.bit.last} bdgrid_group_last {/if}">
<div class="eventtop">
<div class="left">
<time datetime="{$events[bit].happens}" class="icon">
  <strong>{$events[bit].month}</strong>
  <span>{$events[bit].day}</span>
  <em>{$events[bit].year}</em>
</time>
</div>
<h4 class="left" title="{$events[bit].title}"><a href="/events/" title="{$events[bit].title}">{$events[bit].title}</a></h4>
</div>
<div class="clean"></div>
<figure>
<a href="/events/" title="{$events[bit].title}"><img src="{$events[bit].img_file_name}" alt="{$events[bit].title}" /></a>
</figure>
<div class="eventbottom">
<span class="bld rdd">{$events[bit].city|upper}</span> {$events[bit].location}
</div>
</div>
{/section}
</article>

<article id="othernews" class="bdnews bdgrid4">
{section name=bit loop=$feeditems max=4}
<div class="bdnews_group bdgrid_group {if $smarty.section.bit.last} bdgrid_group_last {/if}">
<h4 class="category" title="{$feeditems[bit].category}">{$feeditems[bit].category|upper}</h4>
<figure>
<a href="{$feeditems[bit].link}" title="{$feeditems[bit].title}"><img src="{$feeditems[bit].imagepath}" alt="{$feeditems[bit].title}" /></a>
</figure>
<h4 title="{$feeditems[bit].title}">
<a href="{$feeditems[bit].link}" title="{$feeditems[bit].title}">{$feeditems[bit].title}</a>
</h4>
{$feeditems[bit].content|truncate:150} <a class="btn btn-basic btn-xs" href="/blog/category/{$feeditems[bit].category|lower}/">More {$feeditems[bit].category}</a>
</div>
{/section}
</article>
<div class="clean"></div>


