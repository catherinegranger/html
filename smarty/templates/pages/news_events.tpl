<article id="news_events">
<header>
<h1 title="News &amp; Events">News &amp; Events</h1>
</header/>
{section name=bit loop=$news}
<div class="news_events_img">
<img src="/img/news/{$news[bit].n_id}.jpg" alt="{$news[bit].title}" />
</div>
<div class="news_events_text">
<b>{$news[bit].location|regex_replace:"/[\n]/":"<br />"}</b>
{if $news[bit].website}
<br /><a href="{$news[bit].website}">Website</a>
{/if}
</div>
<div class="news_events_text2">
<h3>{$news[bit].title}</h3>
{$news[bit].details|regex_replace:"/[\n]/":"<br />"}
</div>
<div class="clean"></div>
<div class="news_events_separator"></div>
{/section}
<div class="clean"></div>
{assign var=head_title value='News &amp; Events'}