<nav class="bdgridnav2 bdnavigation">
<ul class="top-level">
<li><a href="/news/" title="News">News &amp; Press</a></li>
<li><a href="/events/" title="Events" class="on">Events</a></li>
<li class="last"><a href="/spotlight/" title="Wine Wednesday Spotlight">Spotlight</a></li>
</ul>
</nav>

<div class="bdgridcontent10">
<article id="bdnewsevents">
{if $event}
{assign var=head_title value='Event: '|cat:$event.title}
<figure>
<img src="/img/news/{$event.n_id}.jpg" alt="{$event.title}" />
</figure>
<div class="events_text">
<div class="left">
<time datetime="{$event.happens}" class="icon">
  <strong>{$event.month}</strong>
  <span>{$event.day}</span>
  <em>{$event.year}</em>
</time>
</div>
<h3 class="left">{$event.title}</h3>
<div class="clean"></div>
<div class="events_details">
<b>{$event.location|regex_replace:"/[\n]/":"<br />"}</b>
{if $event.website}
<br><a href="{$event.website}" target="_blank">Website</a>
{/if}
<p>
{$event.details|regex_replace:"/[\n]/":"<br />"}
</p>

<p class="dvk-social-sharing">
<span class="ss-ask">Share this: </span>
<a rel="external nofollow" class="ss-twitter" href="http://twitter.com/intent/tweet/?text={$event.url_title}&amp;url={$event.url}&amp;via=BlueDanubeWine" target="_blank"><span class="ss-icon-twitter"></span><span class="ss-text">on Twitter</span></a> 
<a rel="external nofollow" class="ss-facebook" href="{$event.facebook_url}" target="_blank"><span class="ss-icon-facebook"></span><span class="ss-text">on Facebook</span></a> 
<a rel="external nofollow" class="ss-googleplus" href="https://plus.google.com/share?url={$event.url}" target="_blank"><span class="ss-icon-googleplus"></span><span class="ss-text">on Google+</span></a>     
</p>


</div>
</div>
<div class="clean"></div>

{else}
{assign var=head_title value='Blue Danube Events'}
<header>
<h1 title="Events">Events Calendar</h1>
</header/>
{section name=bit loop=$events}
<figure>
<img src="/img/news/{$events[bit].n_id}.jpg" alt="{$events[bit].title}" />
</figure>
<div class="events_text">
<div class="left">
<time datetime="{$events[bit].happens}" class="icon">
  <strong>{$events[bit].month}</strong>
  <span>{$events[bit].day}</span>
  <em>{$events[bit].year}</em>
</time>
</div>
<h3 class="left"><a href="/events/{$events[bit].n_id}/" title="{$events[bit].title}">{$events[bit].title}</a></h3>
<div class="clean"></div>
<div class="events_details">
<b>{$events[bit].location|regex_replace:"/[\n]/":"<br />"}</b>
{if $events[bit].website}
<br><a href="{$events[bit].website}" target="_blank">Website</a>
{/if}
<p>
{$events[bit].details|regex_replace:"/[\n]/":"<br />"}
</p>
</div>
</div>
<div class="clean"></div>
<div class="news_events_separator"></div>
{/section}
{/if}
<div class="clean"></div>
</article>
</div>
