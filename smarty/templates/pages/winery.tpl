{include file="modules/nav_wineries.tpl"}

<div class="bdgridcontent9">
<article id="winery" class="bdwine_content">
{if !$name}
<div class="ucwarning">
Sorry, winery not found
</div>
{/if}
<header>
<h1 title="{$name}">{$name}</h1>
</header>

{if $proprietor}
<b>Proprietor:</b> {$proprietor}<br />
{/if}
{if $established}
<b>Founded:</b> {$established}<br />
{/if}
{if $website}
<b>Website:</b> <a href="{$website}" target="_blank">{$name} Winery</a><br />
{/if}
{if $name}
<b>Country Location:</b> <a href="/regions/{$country_web_name}/">{$country_full_name}</a>
{/if}
{if $motto}
<div class="some_space2">
<h2 class="itl pix18 some_space2">{$motto}</h2>
</div>
{if $introduction_image_file_name}
<div class="alignCenter  winery_caption some_space2"><img class="winery_16x9center" src="/img/wineries/{$introduction_image_file_name}" alt="{$introduction_img_caption}" /><br>{$introduction_img_caption}</div>
{/if}
{if $introduction}
<div class="some_space2">
<h3>The People</h3>
<div class="some_space">{$introduction}</div>
</div>
{/if}
{if $vineyards}
<div class="some_space2">
<h3>In the Vineyard</h3>
<div class="some_space">{$vineyards}</div>
</div>
{/if}
{if $winemaking}
<div class="some_space2">
<h3>In the Cellar</h3>
<div class="some_space">{$winemaking}</div>
{if $winemaking2}
{$winemaking2}
{/if}
</div>
{/if}

{else}
{if $details}
<p>
{$details|regex_replace:"/[\n]/":"<br />"}
</p>
{/if}
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
{assign var=head_title value=$name|cat:' Winery, '|cat:$country_full_name}
{assign var=head_desc value='Finest selection of wines from '|cat:$name|cat:' Winery. Blue Danube Wine imports, distributes, and sells wines from '|cat:$country_full_name|cat:' in the United States'}