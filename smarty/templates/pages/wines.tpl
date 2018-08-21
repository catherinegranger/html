{include file="modules/nav_shop.tpl"}

<div class="bdgridcontent9">

<article id="wines">

{if TRUE}
<div class="alignCenter uchighlight bld">
Please be aware that shipping during periods of extreme heat may damage your wine. Therefore, we will gladly hold your purchased wines until there are more moderate temperatures. Just leave us shipping instructions or contact us  at webshop @ bluedanubewine.com or +1 (650) 941-4699.
</div>
{/if}

{if FALSE}
<div class="alignCenter uchighlight bld">
To ensure your wine arrives by December 24th, 2016, order by 12/14 for the East Coast/Midwest, 12/19 for the West Coast, and 12/20 for California. <br>Looking for a last minute gift? Consider sending a Blue Danube Wine <a href="/giftcard/" target="_blank">E-Gift Card</a>.
</div>
{/if}

{if FALSE}
<div class="alignCenter uchighlight bld">
<p class="pix16">The Webshop goes on vacation!</p>
<p>The Webshop team will be taking a well-deserved vacation from January 1st to January 14th 2018. During these two weeks, the online store will be open for orders but no wine will be shipped. Wine shipments will resume the week of January 15th.</p>
</div>
{/if}

<div class="wine_search_group">
<div class="wine_search_by">Search by:</div>
<div class="wine_search_set">
<div class="wine_search_form"><form method="post" action="/sort_wines/" >
<label>&nbsp;Wine Type:</label>
<select name="terms" onchange="this.form.submit();">
        <option value="">All</option>
	{section name=bit loop=$wine_types}
	<option value="{$wine_types[bit].web_name}"{if $search_criteria == $wine_types[bit].web_name} selected{/if}>{$wine_types[bit].full_name}</option>
	{/section}
</select>
</form></div>
<div class="wine_search_form"><form method="post" action="/sort_wines/" >
<label>&nbsp;Regions:</label>
<select name="terms" onchange="this.form.submit();">
	<option value="">All</option>
	{section name=bit loop=$ncc}
	<option value="{$ncc[bit].web_name}"{if $search_criteria == $ncc[bit].web_name} selected{/if}>{$ncc[bit].full_name}</option>
	{/section}
</select>
</form></div>
<div class="wine_search_form"><form method="post" action="/sort_wines/" >
<label>&nbsp;Wine Style:</label><select name="terms" onchange="this.form.submit();">
        <option value="">All</option>
	{section name=bit loop=$wine_styles}
	<option value="{$wine_styles[bit].web_name}"{if $search_criteria == $wine_styles[bit].web_name} selected{/if}>{$wine_styles[bit].full_name}</option>
	{/section}
</select>
</form></div>
<div class="wine_search_form"><form method="post" action="/sort_wines/" >
<label>&nbsp;Varietals:</label><select name="terms" onchange="this.form.submit();">
		<option value="">All</option>
		{section name=vs loop=$varietals}
		<option value="{$varietals[vs].friendly}"{if $search_criteria == $varietals[vs].friendly} selected{/if}>{$varietals[vs].name}</option>
		{/section}
</select>
</form></div>

</div><!-- /.wine_search_set -->
</div><!-- /.wine_search_group -->
<div class="clean"></div>

{if $new_arrivals}

<h2 title="New Arrivals"><a href="/wines/new/" title="New Arrivals">New Arrivals</h2>
{section name=bit loop=$new_arrivals}
<form method="post" action="/add_to_cart/">
<input type="hidden" name="vint_id" value="{$new_arrivals[bit].vint_id}" />
<input type="hidden" name="item_type" value="{$new_arrivals[bit].item_type}" />
<input type="hidden" name="product_id" value="{$new_arrivals[bit].product_id}" />
<input type="hidden" name="year" value="{$new_arrivals[bit].year}" />
<input type="hidden" name="size" value="{$new_arrivals[bit].size}" />
<input type="hidden" name="winery_id" value="{$new_arrivals[bit].winery_id}" />
<input type="hidden" name="winery_name" value="{$new_arrivals[bit].winery}" />
<input type="hidden" name="appellation" value="{$new_arrivals[bit].appellation}" />
<input type="hidden" name="vint_name" value="{$new_arrivals[bit].vintage}" />
<input type="hidden" name="base_price" value="{$new_arrivals[bit].price}"  />
<input type="hidden" name="price" value="{if $new_arrivals[bit].sale > '0'}{$new_arrivals[bit].sale}{else}{$new_arrivals[bit].price}{/if}" />
<input type="hidden" name="bottles" value="{$new_arrivals[bit].bottles}" />
<input type="hidden" name="shipping" value="{$new_arrivals[bit].shipping}" />
<input type="hidden" name="grup" value={$new_arrivals[bit].grup} />
<input type="hidden" name="quantity" value="1" />

<div class="mod_bottle_info" id="{$new_arrivals[bit].vint_id}">
<div class="mod_bottle_info_img">
<a href="{$new_arrivals[bit].url}" title="{$new_arrivals[bit].title}">
<img src="{$new_arrivals[bit].image_file}" alt="{$new_arrivals[bit].title}" />
</a>
</div><!-- /.mod_bottle_info_img -->
<div class="mod_bottle_info_text">
<a href="{$new_arrivals[bit].url}" title="{$new_arrivals[bit].title}">
<b>{if $new_arrivals[bit].pretty_winery_name}{$new_arrivals[bit].pretty_winery_name}<br>{/if}
{$new_arrivals[bit].vintage}
{if $new_arrivals[bit].pretty_year_size}<br>{$new_arrivals[bit].pretty_year_size}{/if}</b>
</a>
{if $new_arrivals[bit].notes || ($new_arrivals[bit].sale > 0)}
<div class="mod_bottle_info_text_notes">
{if $new_arrivals[bit].new > 0} <span class="bld">NEW!</span> {/if}
{$new_arrivals[bit].truncated_notes} 
<a href="{$new_arrivals[bit].url}" title="{$new_arrivals[bit].title}"><span class="nowrap">more &gt;</span></a>
</div><!-- /.mod_bottle_info_text_notes -->
{/if}
<div class="mod_bottle_info_text_buy">
{if $new_arrivals[bit].sale > 0}{if $new_arrivals[bit].sale < 10}<span class="rdd" style="padding-left:0.1em;">${$new_arrivals[bit].sale}</span> {else}<span class="rdd">${$new_arrivals[bit].sale}</span> {/if} {elseif $new_arrivals[bit].price > 0}${$new_arrivals[bit].price} {/if}
<button class="btn btn-xs btn-primary" type="submit" title="Add to Cart">Add to Cart</button>  {if $smarty.section.bit.last && ($search_criteria == "all")} <a href="/wines/new/" title="More New Arrivals"><span class="right_arrow fa-2x"><i class="fa fa-chevron-right" fa-5x"></i></span></a>{/if}
</div><!-- /.mod_bottle_info_text_buy -->
</div><!-- /.mod_bottle_info_text -->
</div><!-- /.mod_bottle_info -->
</form>
{/section}
<div class="clean"></div>
{/if}

{if $specials}

<h2 title="Special offers"><a href="/wines/specials/" title="Special Offers">Special Offers</a></h2>
{section name=bit loop=$specials}
<form method="post" action="/add_to_cart/">
<input type="hidden" name="vint_id" value="{$specials[bit].vint_id}" />
<input type="hidden" name="item_type" value="{$specials[bit].item_type}" />
<input type="hidden" name="product_id" value="{$specials[bit].product_id}" />
<input type="hidden" name="year" value="{$specials[bit].year}" />
<input type="hidden" name="size" value="{$specials[bit].size}" />
<input type="hidden" name="winery_id" value="{$specials[bit].winery_id}" />
<input type="hidden" name="winery_name" value="{$specials[bit].winery}" />
<input type="hidden" name="appellation" value="{$specials[bit].appellation}" />
<input type="hidden" name="vint_name" value="{$specials[bit].vintage}" />
<input type="hidden" name="base_price" value="{$specials[bit].price}"  />
<input type="hidden" name="price" value="{if $specials[bit].sale > '0'}{$specials[bit].sale}{else}{$specials[bit].price}{/if}" />
<input type="hidden" name="bottles" value="{$specials[bit].bottles}" />
<input type="hidden" name="shipping" value="{$specials[bit].shipping}" />
<input type="hidden" name="grup" value={$specials[bit].grup} />
<input type="hidden" name="quantity" value="1" />

<div class="mod_bottle_info" id="{$specials[bit].vint_id}">
<div class="mod_bottle_info_img">
<a href="{$specials[bit].url}" title="{$specials[bit].title}">
<img src="{$specials[bit].image_file}" alt="{$specials[bit].title}" />
</a>
</div><!-- /.mod_bottle_info_img -->
<div class="mod_bottle_info_text">
<a href="{$specials[bit].url}" title="{$specials[bit].title}">
<b>{if $specials[bit].pretty_winery_name}{$specials[bit].pretty_winery_name}<br>{/if}
{$specials[bit].vintage}
{if $specials[bit].pretty_year_size}<br>{$specials[bit].pretty_year_size}{/if}</b>
</a>
{if $specials[bit].notes || ($specials[bit].sale > 0)}
<div class="mod_bottle_info_text_notes">
{if $specials[bit].new > 0} <span class="bld">NEW!</span> {/if}
{$specials[bit].truncated_notes} 
<a href="{$specials[bit].url}" title="{$specials[bit].title}"><span class="nowrap">more &gt;</span></a>
</div><!-- /.mod_bottle_info_text_notes -->
{/if}
<div class="mod_bottle_info_text_buy">
{if $specials[bit].sale > 0}{if $specials[bit].sale < 10}<span class="rdd" style="padding-left:0.1em;">${$specials[bit].sale}</span> {else}<span class="rdd">${$specials[bit].sale}</span> {/if} {elseif $specials[bit].price > 0}${$specials[bit].price} {/if}
<button class="btn btn-xs btn-primary" type="submit" title="Add to Cart">Add to Cart</button>  {if $smarty.section.bit.last && ($search_criteria == "all")} <a href="/wines/specials/" title="More Special Offers"><span class="right_arrow fa-2x"><i class="fa fa-chevron-right" fa-5x"></i></span></a>{/if}
</div><!-- /.mod_bottle_info_text_buy -->
</div><!-- /.mod_bottle_info_text -->
</div><!-- /.mod_bottle_info -->
</form>
{/section}
<div class="clean"></div>
{/if}

{if $organic_wines}

<h2 title="Organic Wines"><a href="/wines/organic/" title="Organic Wines">Organic Wines</a></h2>
{section name=bit loop=$organic_wines}
<form method="post" action="/add_to_cart/">
<input type="hidden" name="vint_id" value="{$organic_wines[bit].vint_id}" />
<input type="hidden" name="item_type" value="{$organic_wines[bit].item_type}" />
<input type="hidden" name="product_id" value="{$organic_wines[bit].product_id}" />
<input type="hidden" name="year" value="{$organic_wines[bit].year}" />
<input type="hidden" name="size" value="{$organic_wines[bit].size}" />
<input type="hidden" name="winery_id" value="{$organic_wines[bit].winery_id}" />
<input type="hidden" name="winery_name" value="{$organic_wines[bit].winery}" />
<input type="hidden" name="appellation" value="{$organic_wines[bit].appellation}" />
<input type="hidden" name="vint_name" value="{$organic_wines[bit].vintage}" />
<input type="hidden" name="base_price" value="{$organic_wines[bit].price}"  />
<input type="hidden" name="price" value="{if $organic_wines[bit].sale > '0'}{$organic_wines[bit].sale}{else}{$organic_wines[bit].price}{/if}" />
<input type="hidden" name="bottles" value="{$organic_wines[bit].bottles}" />
<input type="hidden" name="shipping" value="{$organic_wines[bit].shipping}" />
<input type="hidden" name="grup" value={$organic_wines[bit].grup} />
<input type="hidden" name="quantity" value="1" />

<div class="mod_bottle_info" id="{$organic_wines[bit].vint_id}">
<div class="mod_bottle_info_img">
<a href="{$organic_wines[bit].url}" title="{$organic_wines[bit].title}">
<img src="{$organic_wines[bit].image_file}" alt="{$organic_wines[bit].title}" />
</a>
</div><!-- /.mod_bottle_info_img -->
<div class="mod_bottle_info_text">
<a href="{$organic_wines[bit].url}" title="{$organic_wines[bit].title}">
<b>{if $organic_wines[bit].pretty_winery_name}{$organic_wines[bit].pretty_winery_name}<br>{/if}
{$organic_wines[bit].vintage}
{if $organic_wines[bit].pretty_year_size}<br>{$organic_wines[bit].pretty_year_size}{/if}</b>
</a>
{if $organic_wines[bit].notes || ($organic_wines[bit].sale > 0)}
<div class="mod_bottle_info_text_notes">
{if $organic_wines[bit].new > 0} <span class="bld">NEW!</span> {/if}
{$organic_wines[bit].truncated_notes} 
<a href="{$organic_wines[bit].url}" title="{$organic_wines[bit].title}"><span class="nowrap">more &gt;</span></a>
</div><!-- /.mod_bottle_info_text_notes -->
{/if}
<div class="mod_bottle_info_text_buy">
{if $organic_wines[bit].sale > 0}{if $organic_wines[bit].sale < 10}<span class="rdd" style="padding-left:0.1em;">${$organic_wines[bit].sale}</span> {else}<span class="rdd">${$organic_wines[bit].sale}</span> {/if} {elseif $organic_wines[bit].price > 0}${$organic_wines[bit].price} {/if}
<button class="btn btn-xs btn-primary" type="submit" title="Add to Cart">Add to Cart</button>  {if $smarty.section.bit.last && ($search_criteria == "all")} <a href="/wines/organic/" title="More Organic"><span class="right_arrow fa-2x"><i class="fa fa-chevron-right" fa-5x"></i></span></a>{/if}
</div><!-- /.mod_bottle_info_text_buy -->
</div><!-- /.mod_bottle_info_text -->
</div><!-- /.mod_bottle_info -->
</form>
{/section}
<div class="clean"></div>
{/if}

{if $austria}

<h2 title="Wines from Austria"><a href="/wines/austria/" title="Wines from Austria">Austria</a></h2>
{section name=bit loop=$austria}
<form method="post" action="/add_to_cart/">
<input type="hidden" name="vint_id" value="{$austria[bit].vint_id}" />
<input type="hidden" name="item_type" value="{$austria[bit].item_type}" />
<input type="hidden" name="product_id" value="{$austria[bit].product_id}" />
<input type="hidden" name="year" value="{$austria[bit].year}" />
<input type="hidden" name="size" value="{$austria[bit].size}" />
<input type="hidden" name="winery_id" value="{$austria[bit].winery_id}" />
<input type="hidden" name="winery_name" value="{$austria[bit].winery}" />
<input type="hidden" name="appellation" value="{$austria[bit].appellation}" />
<input type="hidden" name="vint_name" value="{$austria[bit].vintage}" />
<input type="hidden" name="base_price" value="{$austria[bit].price}"  />
<input type="hidden" name="price" value="{if $austria[bit].sale > '0'}{$austria[bit].sale}{else}{$austria[bit].price}{/if}" />
<input type="hidden" name="bottles" value="{$austria[bit].bottles}" />
<input type="hidden" name="shipping" value="{$austria[bit].shipping}" />
<input type="hidden" name="grup" value={$austria[bit].grup} />
<input type="hidden" name="quantity" value="1" />

<div class="mod_bottle_info" id="{$austria[bit].vint_id}">
<div class="mod_bottle_info_img">
<a href="{$austria[bit].url}" title="{$austria[bit].title}">
<img src="{$austria[bit].image_file}" alt="{$austria[bit].title}" />
</a>
</div><!-- /.mod_bottle_info_img -->
<div class="mod_bottle_info_text">
<a href="{$austria[bit].url}" title="{$austria[bit].title}">
<b>{if $austria[bit].pretty_winery_name}{$austria[bit].pretty_winery_name}<br>{/if}
{$austria[bit].vintage}
{if $austria[bit].pretty_year_size}<br>{$austria[bit].pretty_year_size}{/if}</b>
</a>
{if $austria[bit].notes || ($austria[bit].sale > 0)}
<div class="mod_bottle_info_text_notes">
{if $austria[bit].new > 0} <span class="bld">NEW!</span> {/if}
{$austria[bit].truncated_notes} 
<a href="{$austria[bit].url}" title="{$austria[bit].title}"><span class="nowrap">more &gt;</span></a>
</div><!-- /.mod_bottle_info_text_notes -->
{/if}
<div class="mod_bottle_info_text_buy">
{if $austria[bit].sale > 0}{if $austria[bit].sale < 10}<span class="rdd" style="padding-left:0.1em;">${$austria[bit].sale}</span> {else}<span class="rdd">${$austria[bit].sale}</span> {/if} {elseif $austria[bit].price > 0}${$austria[bit].price} {/if}
<button class="btn btn-xs btn-primary" type="submit" title="Add to Cart">Add to Cart</button>  {if $smarty.section.bit.last && ($search_criteria == "all")} <a href="/wines/austria/" title="More Wines from Austria"><span class="right_arrow fa-2x"><i class="fa fa-chevron-right" fa-5x"></i></span></a>{/if}
</div><!-- /.mod_bottle_info_text_buy -->
</div><!-- /.mod_bottle_info_text -->
</div><!-- /.mod_bottle_info -->
</form>
{/section}
<div class="clean"></div>
{/if}

{if $bosnia}

<h2 title="Wines from Bosnia"><a href="/wines/bosnia_herzegovina/" title="Wines from Bosnia Herzegovina">Bosnia Herzegovina</A></h2>
{section name=bit loop=$bosnia}
<form method="post" action="/add_to_cart/">
<input type="hidden" name="vint_id" value="{$bosnia[bit].vint_id}" />
<input type="hidden" name="item_type" value="{$bosnia[bit].item_type}" />
<input type="hidden" name="product_id" value="{$bosnia[bit].product_id}" />
<input type="hidden" name="year" value="{$bosnia[bit].year}" />
<input type="hidden" name="size" value="{$bosnia[bit].size}" />
<input type="hidden" name="winery_id" value="{$bosnia[bit].winery_id}" />
<input type="hidden" name="winery_name" value="{$bosnia[bit].winery}" />
<input type="hidden" name="appellation" value="{$bosnia[bit].appellation}" />
<input type="hidden" name="vint_name" value="{$bosnia[bit].vintage}" />
<input type="hidden" name="base_price" value="{$bosnia[bit].price}"  />
<input type="hidden" name="price" value="{if $bosnia[bit].sale > '0'}{$bosnia[bit].sale}{else}{$bosnia[bit].price}{/if}" />
<input type="hidden" name="bottles" value="{$bosnia[bit].bottles}" />
<input type="hidden" name="shipping" value="{$bosnia[bit].shipping}" />
<input type="hidden" name="grup" value={$bosnia[bit].grup} />
<input type="hidden" name="quantity" value="1" />

<div class="mod_bottle_info" id="{$bosnia[bit].vint_id}">
<div class="mod_bottle_info_img">
<a href="{$bosnia[bit].url}" title="{$bosnia[bit].title}">
<img src="{$bosnia[bit].image_file}" alt="{$bosnia[bit].title}" />
</a>
</div><!-- /.mod_bottle_info_img -->
<div class="mod_bottle_info_text">
<a href="{$bosnia[bit].url}" title="{$bosnia[bit].title}">
<b>{if $bosnia[bit].pretty_winery_name}{$bosnia[bit].pretty_winery_name}<br>{/if}
{$bosnia[bit].vintage}
{if $bosnia[bit].pretty_year_size}<br>{$bosnia[bit].pretty_year_size}{/if}</b>
</a>
{if $bosnia[bit].notes || ($bosnia[bit].sale > 0)}
<div class="mod_bottle_info_text_notes">
{if $bosnia[bit].new > 0} <span class="bld">NEW!</span> {/if}
{$bosnia[bit].truncated_notes} 
<a href="{$bosnia[bit].url}" title="{$bosnia[bit].title}"><span class="nowrap">more &gt;</span></a>
</div><!-- /.mod_bottle_info_text_notes -->
{/if}
<div class="mod_bottle_info_text_buy">
{if $bosnia[bit].sale > 0}{if $bosnia[bit].sale < 10}<span class="rdd" style="padding-left:0.1em;">${$bosnia[bit].sale}</span> {else}<span class="rdd">${$bosnia[bit].sale}</span> {/if} {elseif $bosnia[bit].price > 0}${$bosnia[bit].price} {/if}
<button class="btn btn-xs btn-primary" type="submit" title="Add to Cart">Add to Cart</button>  {if $smarty.section.bit.last && ($search_criteria == "all")} <a href="/wines/bosnia_herzegovina/" title="More Wines from Bosnia Herzegovina"><span class="right_arrow fa-2x"><i class="fa fa-chevron-right" fa-5x"></i></span></a>{/if}
</div><!-- /.mod_bottle_info_text_buy -->
</div><!-- /.mod_bottle_info_text -->
</div><!-- /.mod_bottle_info -->
</form>
{/section}
<div class="clean"></div>
{/if}


{if $wines}
{foreach from=$wine_countries key=country_id item=country_name}
<h2 title="{$country_name}">
{if !$search_by_country}
{if $other_wines && $wines[0].winery == "Specials"}Gift Sets &mdash; {/if}
{/if}
<a href="/wines/{$country_name|lower}/" title="Wines from {$country_name}">{$country_name}</a></h2>
{section name=bit loop=$wines}
{if $wines[bit].country_id == $country_id && $wines[bit].winery != "Specials"}
<form method="post" action="/add_to_cart/">
<input type="hidden" name="vint_id" value="{$wines[bit].vint_id}" />
<input type="hidden" name="item_type" value="{$wines[bit].item_type}" />
<input type="hidden" name="product_id" value="{$wines[bit].product_id}" />
<input type="hidden" name="year" value="{$wines[bit].year}" />
<input type="hidden" name="size" value="{$wines[bit].size}" />
<input type="hidden" name="winery_id" value="{$wines[bit].winery_id}" />
<input type="hidden" name="winery_name" value="{$wines[bit].winery}" />
<input type="hidden" name="appellation" value="{$wines[bit].appellation}" />
<input type="hidden" name="vint_name" value="{$wines[bit].vintage}" />
<input type="hidden" name="base_price" value="{$wines[bit].price}"  />
<input type="hidden" name="price" value="{if $wines[bit].sale > '0'}{$wines[bit].sale}{else}{$wines[bit].price}{/if}" />
<input type="hidden" name="bottles" value="{$wines[bit].bottles}" />
<input type="hidden" name="shipping" value="{$wines[bit].shipping}" />
<input type="hidden" name="grup" value={$wines[bit].grup} />
<input type="hidden" name="quantity" value="1" />

<div class="mod_bottle_info" id="{$wines[bit].vint_id}">
<div class="mod_bottle_info_img">
<a href="{$wines[bit].url}" title="{$wines[bit].title}">
<img src="{$wines[bit].image_file}" alt="{$wines[bit].title}" />
</a>
</div><!-- /.mod_bottle_info_img -->
<div class="mod_bottle_info_text">
<a href="{$wines[bit].url}" title="{$wines[bit].title}">
<b>{if $wines[bit].pretty_winery_name}{$wines[bit].pretty_winery_name}<br>{/if}
{$wines[bit].vintage}
{if $wines[bit].pretty_year_size}<br>{$wines[bit].pretty_year_size}{/if}</b>
</a>
{if $wines[bit].notes || ($wines[bit].sale > 0)}
<div class="mod_bottle_info_text_notes">
{if $wines[bit].new > 0} <span class="bld">NEW!</span> {/if}
{$wines[bit].truncated_notes} 
<a href="{$wines[bit].url}" title="{$wines[bit].title}"><span class="nowrap">more &gt;</span></a>
</div><!-- /.mod_bottle_info_text_notes -->
{/if}
<div class="mod_bottle_info_text_buy">
{if $wines[bit].sale > 0}{if $wines[bit].sale < 10}<span class="rdd" style="padding-left:0.1em;">${$wines[bit].sale}</span> {else}<span class="rdd">${$wines[bit].sale}</span> {/if} {elseif $wines[bit].price > 0}${$wines[bit].price} {/if}
<button class="btn btn-xs btn-primary" type="submit" title="Add to Cart">Add to Cart</button> 
</div><!-- /.mod_bottle_info_text_buy -->
</div><!-- /.mod_bottle_info_text -->
</div><!-- /.mod_bottle_info -->

{assign var=last_country value=$wines[bit].country}
</form>
{/if}
{/section}

<div class="clean"></div>
{/foreach}
{/if}

{if $croatia}

<h2 title="Wines from Croatia"><a href="/wines/croatia/" title="Wines from Croatia">Croatia</a></h2>
{section name=bit loop=$croatia}
<form method="post" action="/add_to_cart/">
<input type="hidden" name="vint_id" value="{$croatia[bit].vint_id}" />
<input type="hidden" name="item_type" value="{$croatia[bit].item_type}" />
<input type="hidden" name="product_id" value="{$croatia[bit].product_id}" />
<input type="hidden" name="year" value="{$croatia[bit].year}" />
<input type="hidden" name="size" value="{$croatia[bit].size}" />
<input type="hidden" name="winery_id" value="{$croatia[bit].winery_id}" />
<input type="hidden" name="winery_name" value="{$croatia[bit].winery}" />
<input type="hidden" name="appellation" value="{$croatia[bit].appellation}" />
<input type="hidden" name="vint_name" value="{$croatia[bit].vintage}" />
<input type="hidden" name="base_price" value="{$croatia[bit].price}"  />
<input type="hidden" name="price" value="{if $croatia[bit].sale > '0'}{$croatia[bit].sale}{else}{$croatia[bit].price}{/if}" />
<input type="hidden" name="bottles" value="{$croatia[bit].bottles}" />
<input type="hidden" name="shipping" value="{$croatia[bit].shipping}" />
<input type="hidden" name="grup" value={$croatia[bit].grup} />
<input type="hidden" name="quantity" value="1" />

<div class="mod_bottle_info" id="{$croatia[bit].vint_id}">
<div class="mod_bottle_info_img">
<a href="{$croatia[bit].url}" title="{$croatia[bit].title}">
<img src="{$croatia[bit].image_file}" alt="{$croatia[bit].title}" />
</a>
</div><!-- /.mod_bottle_info_img -->
<div class="mod_bottle_info_text">
<a href="{$croatia[bit].url}" title="{$croatia[bit].title}">
<b>{if $croatia[bit].pretty_winery_name}{$croatia[bit].pretty_winery_name}<br>{/if}
{$croatia[bit].vintage}
{if $croatia[bit].pretty_year_size}<br>{$croatia[bit].pretty_year_size}{/if}</b>
</a>
{if $croatia[bit].notes || ($croatia[bit].sale > 0)}
<div class="mod_bottle_info_text_notes">
{if $croatia[bit].new > 0} <span class="bld">NEW!</span> {/if}
{$croatia[bit].truncated_notes} 
<a href="{$croatia[bit].url}" title="{$croatia[bit].title}"><span class="nowrap">more &gt;</span></a>
</div><!-- /.mod_bottle_info_text_notes -->
{/if}
<div class="mod_bottle_info_text_buy">
{if $croatia[bit].sale > 0}{if $croatia[bit].sale < 10}<span class="rdd" style="padding-left:0.1em;">${$croatia[bit].sale}</span> {else}<span class="rdd">${$croatia[bit].sale}</span> {/if} {elseif $croatia[bit].price > 0}${$croatia[bit].price} {/if}
<button class="btn btn-xs btn-primary" type="submit" title="Add to Cart">Add to Cart</button>  {if $smarty.section.bit.last && ($search_criteria == "all")} <a href="/wines/croatia/" title="More Wines from Croatia"><span class="right_arrow fa-2x"><i class="fa fa-chevron-right" fa-5x"></i></span></a>{/if}
</div><!-- /.mod_bottle_info_text_buy -->
</div><!-- /.mod_bottle_info_text -->
</div><!-- /.mod_bottle_info -->
</form>
{/section}
<div class="clean"></div>
{/if}

{if $georgia}

<h2 title="Wines from Georgia"><a href="/wines/georgia/" title="Wines from Georgia">Georgia</a></h2>
{section name=bit loop=$georgia}
<form method="post" action="/add_to_cart/">
<input type="hidden" name="vint_id" value="{$georgia[bit].vint_id}" />
<input type="hidden" name="item_type" value="{$georgia[bit].item_type}" />
<input type="hidden" name="product_id" value="{$georgia[bit].product_id}" />
<input type="hidden" name="year" value="{$georgia[bit].year}" />
<input type="hidden" name="size" value="{$georgia[bit].size}" />
<input type="hidden" name="winery_id" value="{$georgia[bit].winery_id}" />
<input type="hidden" name="winery_name" value="{$georgia[bit].winery}" />
<input type="hidden" name="appellation" value="{$georgia[bit].appellation}" />
<input type="hidden" name="vint_name" value="{$georgia[bit].vintage}" />
<input type="hidden" name="base_price" value="{$georgia[bit].price}"  />
<input type="hidden" name="price" value="{if $georgia[bit].sale > '0'}{$georgia[bit].sale}{else}{$georgia[bit].price}{/if}" />
<input type="hidden" name="bottles" value="{$georgia[bit].bottles}" />
<input type="hidden" name="shipping" value="{$georgia[bit].shipping}" />
<input type="hidden" name="grup" value={$georgia[bit].grup} />
<input type="hidden" name="quantity" value="1" />

<div class="mod_bottle_info" id="{$georgia[bit].vint_id}">
<div class="mod_bottle_info_img">
<a href="{$georgia[bit].url}" title="{$georgia[bit].title}">
<img src="{$georgia[bit].image_file}" alt="{$georgia[bit].title}" />
</a>
</div><!-- /.mod_bottle_info_img -->
<div class="mod_bottle_info_text">
<a href="{$georgia[bit].url}" title="{$georgia[bit].title}">
<b>{if $georgia[bit].pretty_winery_name}{$georgia[bit].pretty_winery_name}<br>{/if}
{$georgia[bit].vintage}
{if $georgia[bit].pretty_year_size}<br>{$georgia[bit].pretty_year_size}{/if}</b>
</a>
{if $georgia[bit].notes || ($georgia[bit].sale > 0)}
<div class="mod_bottle_info_text_notes">
{if $georgia[bit].new > 0} <span class="bld">NEW!</span> {/if}
{$georgia[bit].truncated_notes} 
<a href="{$georgia[bit].url}" title="{$georgia[bit].title}"><span class="nowrap">more &gt;</span></a>
</div><!-- /.mod_bottle_info_text_notes -->
{/if}
<div class="mod_bottle_info_text_buy">
{if $georgia[bit].sale > 0}{if $georgia[bit].sale < 10}<span class="rdd" style="padding-left:0.1em;">${$georgia[bit].sale}</span> {else}<span class="rdd">${$georgia[bit].sale}</span> {/if} {elseif $georgia[bit].price > 0}${$georgia[bit].price} {/if}
<button class="btn btn-xs btn-primary" type="submit" title="Add to Cart">Add to Cart</button>  {if $smarty.section.bit.last && ($search_criteria == "all")} <a href="/wines/georgia/" title="More Wines from Georgia"><span class="right_arrow fa-2x"><i class="fa fa-chevron-right" fa-5x"></i></span></a>{/if}
</div><!-- /.mod_bottle_info_text_buy -->
</div><!-- /.mod_bottle_info_text -->
</div><!-- /.mod_bottle_info -->
</form>
{/section}
<div class="clean"></div>
{/if}

{if $hungary}

<h2 title="Wines from Hungary"><a href="/wines/hungary/" title="Wines from Hungary">Hungary</a></h2>
{section name=bit loop=$hungary}
<form method="post" action="/add_to_cart/">
<input type="hidden" name="vint_id" value="{$hungary[bit].vint_id}" />
<input type="hidden" name="item_type" value="{$hungary[bit].item_type}" />
<input type="hidden" name="product_id" value="{$hungary[bit].product_id}" />
<input type="hidden" name="year" value="{$hungary[bit].year}" />
<input type="hidden" name="size" value="{$hungary[bit].size}" />
<input type="hidden" name="winery_id" value="{$hungary[bit].winery_id}" />
<input type="hidden" name="winery_name" value="{$hungary[bit].winery}" />
<input type="hidden" name="appellation" value="{$hungary[bit].appellation}" />
<input type="hidden" name="vint_name" value="{$hungary[bit].vintage}" />
<input type="hidden" name="base_price" value="{$hungary[bit].price}"  />
<input type="hidden" name="price" value="{if $hungary[bit].sale > '0'}{$hungary[bit].sale}{else}{$hungary[bit].price}{/if}" />
<input type="hidden" name="bottles" value="{$hungary[bit].bottles}" />
<input type="hidden" name="shipping" value="{$hungary[bit].shipping}" />
<input type="hidden" name="grup" value={$hungary[bit].grup} />
<input type="hidden" name="quantity" value="1" />

<div class="mod_bottle_info" id="{$hungary[bit].vint_id}">
<div class="mod_bottle_info_img">
<a href="{$hungary[bit].url}" title="{$hungary[bit].title}">
<img src="{$hungary[bit].image_file}" alt="{$hungary[bit].title}" />
</a>
</div><!-- /.mod_bottle_info_img -->
<div class="mod_bottle_info_text">
<a href="{$hungary[bit].url}" title="{$hungary[bit].title}">
<b>{if $hungary[bit].pretty_winery_name}{$hungary[bit].pretty_winery_name}<br>{/if}
{$hungary[bit].vintage}
{if $hungary[bit].pretty_year_size}<br>{$hungary[bit].pretty_year_size}{/if}</b>
</a>
{if $hungary[bit].notes || ($hungary[bit].sale > 0)}
<div class="mod_bottle_info_text_notes">
{if $hungary[bit].new > 0} <span class="bld">NEW!</span> {/if}
{$hungary[bit].truncated_notes} 
<a href="{$hungary[bit].url}" title="{$hungary[bit].title}"><span class="nowrap">more &gt;</span></a>
</div><!-- /.mod_bottle_info_text_notes -->
{/if}
<div class="mod_bottle_info_text_buy">
{if $hungary[bit].sale > 0}{if $hungary[bit].sale < 10}<span class="rdd" style="padding-left:0.1em;">${$hungary[bit].sale}</span> {else}<span class="rdd">${$hungary[bit].sale}</span> {/if} {elseif $hungary[bit].price > 0}${$hungary[bit].price} {/if}
<button class="btn btn-xs btn-primary" type="submit" title="Add to Cart">Add to Cart</button>  {if $smarty.section.bit.last && ($search_criteria == "all")} <a href="/wines/hungary/" title="More Wines from Hungary"><span class="right_arrow fa-2x"><i class="fa fa-chevron-right" fa-5x"></i></span></a>{/if}
</div><!-- /.mod_bottle_info_text_buy -->
</div><!-- /.mod_bottle_info_text -->
</div><!-- /.mod_bottle_info -->
</form>
{/section}
<div class="clean"></div>
{/if}

{if $serbia}

<h2 title="Wines from Serbia"><a href="/wines/serbia/" title="Wines from Serbia">Serbia</a></h2>
{section name=bit loop=$serbia}
<form method="post" action="/add_to_cart/">
<input type="hidden" name="vint_id" value="{$serbia[bit].vint_id}" />
<input type="hidden" name="item_type" value="{$serbia[bit].item_type}" />
<input type="hidden" name="product_id" value="{$serbia[bit].product_id}" />
<input type="hidden" name="year" value="{$serbia[bit].year}" />
<input type="hidden" name="size" value="{$serbia[bit].size}" />
<input type="hidden" name="winery_id" value="{$serbia[bit].winery_id}" />
<input type="hidden" name="winery_name" value="{$serbia[bit].winery}" />
<input type="hidden" name="appellation" value="{$serbia[bit].appellation}" />
<input type="hidden" name="vint_name" value="{$serbia[bit].vintage}" />
<input type="hidden" name="base_price" value="{$serbia[bit].price}"  />
<input type="hidden" name="price" value="{if $serbia[bit].sale > '0'}{$serbia[bit].sale}{else}{$serbia[bit].price}{/if}" />
<input type="hidden" name="bottles" value="{$serbia[bit].bottles}" />
<input type="hidden" name="shipping" value="{$serbia[bit].shipping}" />
<input type="hidden" name="grup" value={$serbia[bit].grup} />
<input type="hidden" name="quantity" value="1" />

<div class="mod_bottle_info" id="{$serbia[bit].vint_id}">
<div class="mod_bottle_info_img">
<a href="{$serbia[bit].url}" title="{$serbia[bit].title}">
<img src="{$serbia[bit].image_file}" alt="{$serbia[bit].title}" />
</a>
</div><!-- /.mod_bottle_info_img -->
<div class="mod_bottle_info_text">
<a href="{$serbia[bit].url}" title="{$serbia[bit].title}">
<b>{if $serbia[bit].pretty_winery_name}{$serbia[bit].pretty_winery_name}<br>{/if}
{$serbia[bit].vintage}
{if $serbia[bit].pretty_year_size}<br>{$serbia[bit].pretty_year_size}{/if}</b>
</a>
{if $serbia[bit].notes || ($serbia[bit].sale > 0)}
<div class="mod_bottle_info_text_notes">
{if $serbia[bit].new > 0} <span class="bld">NEW!</span> {/if}
{$serbia[bit].truncated_notes} 
<a href="{$serbia[bit].url}" title="{$serbia[bit].title}"><span class="nowrap">more &gt;</span></a>
</div><!-- /.mod_bottle_info_text_notes -->
{/if}
<div class="mod_bottle_info_text_buy">
{if $serbia[bit].sale > 0}{if $serbia[bit].sale < 10}<span class="rdd" style="padding-left:0.1em;">${$serbia[bit].sale}</span> {else}<span class="rdd">${$serbia[bit].sale}</span> {/if} {elseif $serbia[bit].price > 0}${$serbia[bit].price} {/if}
<button class="btn btn-xs btn-primary" type="submit" title="Add to Cart">Add to Cart</button>  {if $smarty.section.bit.last && ($search_criteria == "all")} <a href="/wines/serbia/" title="More Wines from Serbia"><span class="right_arrow fa-2x"><i class="fa fa-chevron-right" fa-5x"></i></span></a>{/if}
</div><!-- /.mod_bottle_info_text_buy -->
</div><!-- /.mod_bottle_info_text -->
</div><!-- /.mod_bottle_info -->
</form>
{/section}
<div class="clean"></div>
{/if}

{if $slovenia}

<h2 title="Wines from Slovenia"><a href="/wines/slovenia/" title="Wines from Slovenia">Slovenia</a></h2>
{section name=bit loop=$slovenia}
<form method="post" action="/add_to_cart/">
<input type="hidden" name="vint_id" value="{$slovenia[bit].vint_id}" />
<input type="hidden" name="item_type" value="{$slovenia[bit].item_type}" />
<input type="hidden" name="product_id" value="{$slovenia[bit].product_id}" />
<input type="hidden" name="year" value="{$slovenia[bit].year}" />
<input type="hidden" name="size" value="{$slovenia[bit].size}" />
<input type="hidden" name="winery_id" value="{$slovenia[bit].winery_id}" />
<input type="hidden" name="winery_name" value="{$slovenia[bit].winery}" />
<input type="hidden" name="appellation" value="{$slovenia[bit].appellation}" />
<input type="hidden" name="vint_name" value="{$slovenia[bit].vintage}" />
<input type="hidden" name="base_price" value="{$slovenia[bit].price}"  />
<input type="hidden" name="price" value="{if $slovenia[bit].sale > '0'}{$slovenia[bit].sale}{else}{$slovenia[bit].price}{/if}" />
<input type="hidden" name="bottles" value="{$slovenia[bit].bottles}" />
<input type="hidden" name="shipping" value="{$slovenia[bit].shipping}" />
<input type="hidden" name="grup" value={$slovenia[bit].grup} />
<input type="hidden" name="quantity" value="1" />

<div class="mod_bottle_info" id="{$slovenia[bit].vint_id}">
<div class="mod_bottle_info_img">
<a href="{$slovenia[bit].url}" title="{$slovenia[bit].title}">
<img src="{$slovenia[bit].image_file}" alt="{$slovenia[bit].title}" />
</a>
</div><!-- /.mod_bottle_info_img -->
<div class="mod_bottle_info_text">
<a href="{$slovenia[bit].url}" title="{$slovenia[bit].title}">
<b>{if $slovenia[bit].pretty_winery_name}{$slovenia[bit].pretty_winery_name}<br>{/if}
{$slovenia[bit].vintage}
{if $slovenia[bit].pretty_year_size}<br>{$slovenia[bit].pretty_year_size}{/if}</b>
</a>
{if $slovenia[bit].notes || ($slovenia[bit].sale > 0)}
<div class="mod_bottle_info_text_notes">
{if $slovenia[bit].new > 0} <span class="bld">NEW!</span> {/if}
{$slovenia[bit].truncated_notes} 
<a href="{$slovenia[bit].url}" title="{$slovenia[bit].title}"><span class="nowrap">more &gt;</span></a>
</div><!-- /.mod_bottle_info_text_notes -->
{/if}
<div class="mod_bottle_info_text_buy">
{if $slovenia[bit].sale > 0}{if $slovenia[bit].sale < 10}<span class="rdd" style="padding-left:0.1em;">${$slovenia[bit].sale}</span> {else}<span class="rdd">${$slovenia[bit].sale}</span> {/if} {elseif $slovenia[bit].price > 0}${$slovenia[bit].price} {/if}
<button class="btn btn-xs btn-primary" type="submit" title="Add to Cart">Add to Cart</button>  {if $smarty.section.bit.last && ($search_criteria == "all")} <a href="/wines/slovenia/" title="More Wines from Slovenia"><span class="right_arrow fa-2x"><i class="fa fa-chevron-right" fa-5x"></i></span></a>{/if}
</div><!-- /.mod_bottle_info_text_buy -->
</div><!-- /.mod_bottle_info_text -->
</div><!-- /.mod_bottle_info -->
</form>
{/section}
<div class="clean"></div>
{/if}

{if $turkey}

<h2 title="Wines from Turkey"><a href="/wines/turkey/" title="Wines from Turkey">Turkey</a></h2>
{section name=bit loop=$turkey}
<form method="post" action="/add_to_cart/">
<input type="hidden" name="vint_id" value="{$turkey[bit].vint_id}" />
<input type="hidden" name="item_type" value="{$turkey[bit].item_type}" />
<input type="hidden" name="product_id" value="{$turkey[bit].product_id}" />
<input type="hidden" name="year" value="{$turkey[bit].year}" />
<input type="hidden" name="size" value="{$turkey[bit].size}" />
<input type="hidden" name="winery_id" value="{$turkey[bit].winery_id}" />
<input type="hidden" name="winery_name" value="{$turkey[bit].winery}" />
<input type="hidden" name="appellation" value="{$turkey[bit].appellation}" />
<input type="hidden" name="vint_name" value="{$turkey[bit].vintage}" />
<input type="hidden" name="base_price" value="{$turkey[bit].price}"  />
<input type="hidden" name="price" value="{if $turkey[bit].sale > '0'}{$turkey[bit].sale}{else}{$turkey[bit].price}{/if}" />
<input type="hidden" name="bottles" value="{$turkey[bit].bottles}" />
<input type="hidden" name="shipping" value="{$turkey[bit].shipping}" />
<input type="hidden" name="grup" value={$turkey[bit].grup} />
<input type="hidden" name="quantity" value="1" />

<div class="mod_bottle_info" id="{$turkey[bit].vint_id}">
<div class="mod_bottle_info_img">
<a href="{$turkey[bit].url}" title="{$turkey[bit].title}">
<img src="{$turkey[bit].image_file}" alt="{$turkey[bit].title}" />
</a>
</div><!-- /.mod_bottle_info_img -->
<div class="mod_bottle_info_text">
<a href="{$turkey[bit].url}" title="{$turkey[bit].title}">
<b>{if $turkey[bit].pretty_winery_name}{$turkey[bit].pretty_winery_name}<br>{/if}
{$turkey[bit].vintage}
{if $turkey[bit].pretty_year_size}<br>{$turkey[bit].pretty_year_size}{/if}</b>
</a>
{if $turkey[bit].notes || ($turkey[bit].sale > 0)}
<div class="mod_bottle_info_text_notes">
{if $turkey[bit].new > 0} <span class="bld">NEW!</span> {/if}
{$turkey[bit].truncated_notes} 
<a href="{$turkey[bit].url}" title="{$turkey[bit].title}"><span class="nowrap">more &gt;</span></a>
</div><!-- /.mod_bottle_info_text_notes -->
{/if}
<div class="mod_bottle_info_text_buy">
{if $turkey[bit].sale > 0}{if $turkey[bit].sale < 10}<span class="rdd" style="padding-left:0.1em;">${$turkey[bit].sale}</span> {else}<span class="rdd">${$turkey[bit].sale}</span> {/if} {elseif $turkey[bit].price > 0}${$turkey[bit].price} {/if}
<button class="btn btn-xs btn-primary" type="submit" title="Add to Cart">Add to Cart</button>  {if $smarty.section.bit.last && ($search_criteria == "all")} <a href="/wines/turkey/" title="More Wines from Turkey"><span class="right_arrow fa-2x"><i class="fa fa-chevron-right" fa-5x"></i></span></a>{/if}
</div><!-- /.mod_bottle_info_text_buy -->
</div><!-- /.mod_bottle_info_text -->
</div><!-- /.mod_bottle_info -->
</form>
{/section}
<div class="clean"></div>
{/if}

{if $other_wines}

<h2 title="Multi-Producer Samplers"><a href="/wines/samplers/" title="Multi producer samplers">Gift Sets &mdash; Multi Producers</a></h2>

{section name=bit loop=$other_wines}
{if $other_wines[bit].winery == "Specials"}
<form method="post" action="/add_to_cart/">
<input type="hidden" name="vint_id" value="{$other_wines[bit].vint_id}" />
<input type="hidden" name="item_type" value="{$other_wines[bit].item_type}" />
<input type="hidden" name="product_id" value="{$other_wines[bit].product_id}" />
<input type="hidden" name="year" value="{$other_wines[bit].year}" />
<input type="hidden" name="size" value="{$other_wines[bit].size}" />
<input type="hidden" name="winery_id" value="{$other_wines[bit].winery_id}" />
<input type="hidden" name="winery_name" value="{$other_wines[bit].winery}" />
<input type="hidden" name="appellation" value="{$other_wines[bit].appellation}" />
<input type="hidden" name="vint_name" value="{$other_wines[bit].vintage}" />
<input type="hidden" name="base_price" value="{$other_wines[bit].price}"  />
<input type="hidden" name="price" value="{if $other_wines[bit].sale > '0'}{$other_wines[bit].sale}{else}{$other_wines[bit].price}{/if}" />
<input type="hidden" name="bottles" value="{$other_wines[bit].bottles}" />
<input type="hidden" name="shipping" value="{$other_wines[bit].shipping}" />
<input type="hidden" name="grup" value={$other_wines[bit].grup} />
<input type="hidden" name="quantity" value="1" />

<div class="mod_bottle_info" id="{$other_wines[bit].vint_id}">
<div class="mod_bottle_info_img">
<a href="{$other_wines[bit].url}" title="{$other_wines[bit].title}">
<img src="{$other_wines[bit].image_file}" alt="{$other_wines[bit].title}" />
</a>
</div><!-- /.mod_bottle_info_img -->
<div class="mod_bottle_info_text">
<a href="{$other_wines[bit].url}" title="{$other_wines[bit].title}">
<b>{if $other_wines[bit].pretty_winery_name}{$other_wines[bit].pretty_winery_name}<br>{/if}
{$other_wines[bit].vintage}
{if $other_wines[bit].pretty_year_size}<br>{$other_wines[bit].pretty_year_size}{/if}</b>
</a>
{if $other_wines[bit].notes || ($other_wines[bit].sale > 0)}
<div class="mod_bottle_info_text_notes">
{if $other_wines[bit].new > 0} <span class="bld">NEW!</span> {/if}
{$other_wines[bit].truncated_notes} 
<a href="{$other_wines[bit].url}" title="{$other_wines[bit].title}"><span class="nowrap">more &gt;</span></a>
</div><!-- /.mod_bottle_info_text_notes -->
{/if}
<div class="mod_bottle_info_text_buy">
{if $other_wines[bit].sale > 0}{if $other_wines[bit].sale < 10}<span class="rdd" style="padding-left:0.1em;">${$other_wines[bit].sale}</span> {else}<span class="rdd">${$other_wines[bit].sale}</span> {/if} {elseif $other_wines[bit].price > 0}${$other_wines[bit].price} {/if}
<button class="btn btn-xs btn-primary" type="submit" title="Add to Cart">Add to Cart</button>  {if $smarty.section.bit.last && ($search_criteria == "all")} <a href="/wines/samplers/" title="More Samplers}"><span class="right_arrow fa-2x"><i class="fa fa-chevron-right" fa-5x"></i></span></a>{/if}
</div><!-- /.mod_bottle_info_text_buy -->
</div><!-- /.mod_bottle_info_text -->
</div><!-- /.mod_bottle_info -->

</form>
{/if}
{/section}
<div class="clean"></div>
{/if}


{if $magnums && !$search_by_country}

<h2 title="Magnums"><a href="/wines/magnums/" title="Magnums">Big Bottles</a></h2>

{section name=bit loop=$magnums}
<form method="post" action="/add_to_cart/">
<input type="hidden" name="vint_id" value="{$magnums[bit].vint_id}" />
<input type="hidden" name="item_type" value="{$magnums[bit].item_type}" />
<input type="hidden" name="product_id" value="{$magnums[bit].product_id}" />
<input type="hidden" name="year" value="{$magnums[bit].year}" />
<input type="hidden" name="size" value="{$magnums[bit].size}" />
<input type="hidden" name="winery_id" value="{$magnums[bit].winery_id}" />
<input type="hidden" name="winery_name" value="{$magnums[bit].winery}" />
<input type="hidden" name="appellation" value="{$magnums[bit].appellation}" />
<input type="hidden" name="vint_name" value="{$magnums[bit].vintage}" />
<input type="hidden" name="base_price" value="{$magnums[bit].price}"  />
<input type="hidden" name="price" value="{if $magnums[bit].sale > '0'}{$magnums[bit].sale}{else}{$magnums[bit].price}{/if}" />
<input type="hidden" name="bottles" value="{$magnums[bit].bottles}" />
<input type="hidden" name="shipping" value="{$magnums[bit].shipping}" />
<input type="hidden" name="grup" value={$magnums[bit].grup} />
<input type="hidden" name="quantity" value="1" />

<div class="mod_bottle_info" id="{$magnums[bit].vint_id}">
<div class="mod_bottle_info_img">
<a href="{$magnums[bit].url}" title="{$magnums[bit].title}">
<img src="{$magnums[bit].image_file}" alt="{$magnums[bit].title}" />
</a>
</div><!-- /.mod_bottle_info_img -->
<div class="mod_bottle_info_text">
<a href="{$magnums[bit].url}" title="{$magnums[bit].title}">
<b>{if $magnums[bit].pretty_winery_name}{$magnums[bit].pretty_winery_name}<br>{/if}
{$magnums[bit].vintage}
{if $magnums[bit].pretty_year_size}<br>{$magnums[bit].pretty_year_size}{/if}</b>
</a>
{if $magnums[bit].notes || ($magnums[bit].sale > 0)}
<div class="mod_bottle_info_text_notes">
{if $magnums[bit].new > 0} <span class="bld">NEW!</span> {/if}
{$magnums[bit].truncated_notes} 
<a href="{$magnums[bit].url}" title="{$magnums[bit].title}"><span class="nowrap">more &gt;</span></a>
</div><!-- /.mod_bottle_info_text_notes -->
{/if}
<div class="mod_bottle_info_text_buy">
{if $magnums[bit].sale > 0}{if $magnums[bit].sale < 10}<span class="rdd" style="padding-left:0.1em;">${$magnums[bit].sale}</span> {else}<span class="rdd">${$magnums[bit].sale}</span> {/if} {elseif $magnums[bit].price > 0}${$magnums[bit].price} {/if}
<button class="btn btn-xs btn-primary" type="submit" title="Add to Cart">Add to Cart</button>  {if $smarty.section.bit.last && ($search_criteria == "all")} <a href="/wines/magnums/" title="More Magnums"><span class="right_arrow fa-2x"><i class="fa fa-chevron-right" fa-5x"></i></span></a>{/if}
</div><!-- /.mod_bottle_info_text_buy -->
</div><!-- /.mod_bottle_info_text -->
</div><!-- /.mod_bottle_info -->
</form>
{/section}
<div class="clean"></div>
{/if}

{if $other_items && !$search_by_country}

<h2 title="Other Items"><a href="/wines/others/" title="Books and Misc.">Books and Misc.</a></h2>

{section name=bit loop=$other_items}
<form method="post" action="/add_to_cart/">
<input type="hidden" name="vint_id" value="{$other_items[bit].vint_id}" />
<input type="hidden" name="item_type" value="{$other_items[bit].item_type}" />
<input type="hidden" name="product_id" value="{$other_items[bit].product_id}" />
<input type="hidden" name="year" value="0" />
<input type="hidden" name="size" value="0" />
<input type="hidden" name="winery_id" value="0" />
<input type="hidden" name="winery_name" value="" />
<input type="hidden" name="appellation" value="" />
<input type="hidden" name="vint_name" value="{$other_items[bit].vintage}" />
<input type="hidden" name="base_price" value="{$other_items[bit].price}"  />
<input type="hidden" name="price" value="{if $other_items[bit].sale > '0'}{$other_items[bit].sale}{else}{$other_items[bit].price}{/if}" />
<input type="hidden" name="bottles" value="0" />
<input type="hidden" name="shipping" value="{$other_items[bit].shipping}" />
<input type="hidden" name="grup" value="0" />
<input type="hidden" name="quantity" value="1" />

<div class="mod_other_item_info" id="{$other_items[bit].vint_id}">
<div class="mod_other_item_info_img">
<a href="{$other_items[bit].url}" title="{$other_items[bit].title}">
<img src="{$other_items[bit].image_file}" alt="{$other_items[bit].title}"  />
</a>
</div><!-- /.mod_other_item_info_img -->
<div class="mod_other_item_info_text">
<a href="{$other_items[bit].url}" title="{$other_items[bit].title}">
<b>{$other_items[bit].vintage}</b>
</a>
{if $other_items[bit].notes || ($other_items[bit].sale > 0)}
<div class="mod_other_item_info_text_notes">
{if $other_items[bit].new > 0} <span class="bld">NEW!</span> {/if}
{$other_items[bit].truncated_notes} 
<a href="{$other_items[bit].url}" title="{$other_items[bit].title}"><span class="nowrap">more &gt;</span></a>
</div><!-- /.mod_other_item_info_text_notes -->
{/if}
<div class="mod_other_item_info_text_buy">
{if $other_items[bit].sale > 0}{if $other_items[bit].sale < 10}<span class="rdd" style="padding-left:0.1em;">${$other_items[bit].sale}</span> {else}<span class="rdd">${$other_items[bit].sale}</span> {/if} {elseif $other_items[bit].price > 0}${$other_items[bit].price} {/if}
<button class="btn btn-xs btn-primary" type="submit" title="Add to Cart">Add to Cart</button>  {if $smarty.section.bit.last && ($search_criteria == "all")} <a href="/wines/others/" title="More Books & Misc."><span class="right_arrow fa-2x"><i class="fa fa-chevron-right" fa-5x"></i></span></a>{/if}
</div><!-- /.mod_other_item_info_text_buy -->
</div><!-- /.mod_other_item_info_text -->
</div><!-- /.mod_other_item_info -->
</form>
{/section}
<div class="clean"></div>
{/if}

{if $wines || $other_wines || $other_items}
{if $search_by_country}
{assign var=head_title value='Shop Wines from '|cat:$wines.0.country}
{assign var=head_desc value='Finest selection of wines from '|cat:$wines.0.country|cat:'. Blue Danube Wine imports, distributes, and sells wines from '|cat:$wines.0.country|cat:' in the United States'}
{else}
{assign var=re_search_criteria0 value=$search_criteria|replace:'_':' '}
{assign var=re_search_criteria value=$re_search_criteria0|capitalize}
{assign var=head_title value='Shop '|cat:$re_search_criteria|cat:' Wines'}
{assign var=head_desc value='Finest selection of '|cat:$re_search_criteria|cat:' Wines. Blue Danube Wine imports, distributes, and sells wines from Austria, Bosnia Herzegovina, Croatia, Georgia, Hungary, Montenegro, Serbia, Slovenia, and Turkey in the United States.'}
{/if}
<div style="text-align:center;padding:1%;"><i>All wines are 750ml unless otherwise noted.</i></div>

{else}

<div class="alignCenter some_space2 bld pix14">
<p>We're sorry, it appears that your search didn't return any results.</p>
</div>
<div class="alignCenter some_space2">
<p>Our inventory changes often, so please try this search option again in the future.</p>
</div>
{assign var=head_title value='Shop Online'}
{/if}

</article><!-- /#wines -->

</div><!-- /.bdgridcontent9 -->
<div class="clean"></div>
