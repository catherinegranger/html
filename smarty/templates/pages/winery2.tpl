{include file="modules/nav_wineries.tpl"}

<div class="bdgridcontent9">
<article id="winery" class="bdwine_content">
<header>
<h1 title="{$name}">{$name}</h1>
</header>

<p>{$log}</p>

{if $proprietor}
<b>Proprietor:</b> {$proprietor}<br />
{/if}
{if $established}
<b>Founded:</b> {$established}<br />
{/if}
{if $website}
<b>Website:</b> <a href="{$website}" target="_blank">{$name} Winery</a><br />
{/if}
<b>Country Location:</b> <a href="/regions/{$country_web_name}/">{$country_full_name}</a>
{if $details}
<p>
{$details|regex_replace:"/[\n]/":"<br />"}
</p>
{/if}

<div class="clean"></div>

{if $feeditems}
<a id="winery_news"><h2 title="{$name} News" class="rdd">{$name} News:</h2></a>
{include file="modules/mod_feeditems.tpl"}
{/if}


{if $wines}
<a id="wines"><h2 title="{$two|capitalize} Wines" class="rdd">Wines:</h2></a>
{include file="modules/mod_wines.tpl"}
{/if}

</article>
</div>

<div class="clean"></div>
{assign var=head_title value=$name|cat:' Winery in '|cat:$country_full_name|cat:' - Buy '|cat:$name|cat:' Wines Online'}
{assign var=head_desc value='Finest selection of wines from '|cat:$name|cat:' Winery. Blue Danube Wine imports, distributes, and sells wines from '|cat:$country_full_name|cat:' in the United States'}