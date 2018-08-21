<div id="pricebook">

<div class="alignCenter break_after">
<a href="/img/all/round_logo_small_wave.png" title="Blue Danube Wine Co.">
<img class="bdwlogo" src="/img/all/round_logo_small_wave.png" alt="Blue Danube Wine Co." />
</a>
{$error}
<div class="title">
New York Wholesale Pricelist
<br>September 2017
</div><!-- /.title -->
<div class="company">
PO Box 1011
<br>Los Altos, California 94023 
<br>bluedanubewine.com
<br>sevenfifty.com/bluedanube
<br>(650) 941-4699
</div><!-- /.company -->
<img class="bdwmap" src="/img/all/bluedanubewine_map.jpg"/>
</div><!-- /.alignCenter -->
<div style="text-align:center;font-size:1.15em;">
{foreach name=countries from=$country_names key=country_id item=country_name}
{section name=bit loop=$ncc}
{if $country_id == $ncc[bit].c_id}
{assign var=country_webname value=$ncc[bit].web_name}
{/if}
{/section}
<a href="#{$country_webname}">{$country_name}</a>
{if !$smarty.foreach.countries.last} &mdash; {/if}
{/foreach}
</div>

{assign var=previous_producer_name value='Unknown Previous'}
{assign var=producer_name value='Unknown'}

{foreach from=$country_names key=country_id item=country_name}
{foreach from=$country_descriptions key=id2 item=description}
{if $country_id == $id2}
{assign var=country_description value=$description}
{/if}
{/foreach}
{section name=bit loop=$ncc}
{if $country_id == $ncc[bit].c_id}
{assign var=country_webname value=$ncc[bit].web_name}
{/if}
{/section}
<a name="{$country_webname}">&nbsp;</a>

{section name=bit loop=$vintages}
{if $vintages[bit].country_id == $country_id && $vintages[bit].producer_name != "Specials"}
{assign var=producer_name value=$vintages[bit].producer_name}
{if $producer_name != $previous_producer_name}
{if $vintages[bit].producer_webname == 'bibich'  || $vintages[bit].producer_webname == 'milos' || $vintages[bit].producer_webname == 'kindzmarauli'  || $vintages[bit].producer_webname == 'apatsagi'  || $vintages[bit].producer_webname == 'eszterbauer'  || $vintages[bit].producer_webname == 'fuleky'  || $vintages[bit].producer_webname == 'kreinbacher' || $vintages[bit].producer_webname == 'tinon'  || $vintages[bit].producer_webname == 'maurer'  || $vintages[bit].producer_webname == 'tokaj_nobilis2'  || $vintages[bit].producer_webname == 'tornai2'  || $vintages[bit].producer_webname == 'pfneiszl4'  || $vintages[bit].producer_webname == 'batic2'  || $vintages[bit].producer_webname == 'crnko2'  || $vintages[bit].producer_webname == 'santomas2'  || $vintages[bit].producer_webname == 'stoka2'}
<div style="font-size:0.5em;page-break-before: always;page-break-after: avoid;">&nbsp;</div>
{/if}
<div class="producer_group">
<div class="producer_name">
<a href="/winery/{$vintages[bit].producer_webname}/" target="_blank" title="{$producer_name}">{$producer_name} &mdash; {$country_name}</a>
</div><!-- /.producer_name -->
{if $vintages[bit].producer_description}
<div class="producer_description_group">
<img class="producer_image" src="{$vintages[bit].producer_image_file}" alt="{$producer_name}" />
{$vintages[bit].producer_description}
</div><!-- /.producer_description_group -->
<div class="clean"></div>
{/if}
</div><!-- /.producer_group -->
{/if}
{assign var=previous_producer_name value=$vintages[bit].producer_name}
<div class="vintage_group">
<div class="vintage_name">
<a href="/wine/{$vintages[bit].vint_id}/" target="_blank" title="{$vintages[bit].pretty_name}">{$vintages[bit].pretty_name}</a>
</div>
<div class="vintage_description_group">
<div class="vintage_image">
<a href="{$vintages[bit].image_file}" target="_blank" title="{$vintages[bit].pretty_name}">
<img class="vintage_image" src="{$vintages[bit].image_file}" alt="{$vintages[bit].pretty_name}" />
</a>
</div>
<span class="vintage_region_p"><span class="bld">Region:</span> {$vintages[bit].appellation}, {$vintages[bit].country}</span>
<div class="vintage_description">
<span class="bld">Type:</span> {$vintages[bit].product_subtype} 
{if $vintages[bit].product_style} &mdash; {$vintages[bit].product_style}{/if}
{if $vintages[bit].features}, {$vintages[bit].features} {/if}
<br><span class="bld">Grapes:</span> {if $vintages[bit].producer_webname == 'kabaj' || $vintages[bit].producer_webname == 'heimann'}<span style="font-size:0.9em;">{/if}{$vintages[bit].grapes}{if $vintages[bit].producer_webname == 'kabaj'  || $vintages[bit].producer_webname == 'heimann'}</span>{/if}
{if $vintages[bit].alcohol}
<br><span class="bld">Alcohol:</span> {$vintages[bit].alcohol}%
{/if}
{if $vintages[bit].residual_sugar}
<br><span class="bld">Residual Sugar:</span> {$vintages[bit].residual_sugar}
{/if}
{if $vintages[bit].acidity}
<br><span class="bld">Acidity:</span> {$vintages[bit].acidity}
{/if}
<div class="vintage_pricing_group_p">
{if $vintages[bit].case}
<span class="bld">1 cs({$vintages[bit].case})|1 btl.:</span> ${$vintages[bit].frontline_case}|${$vintages[bit].frontline}
{else}
<span class="bld">1 bottle:</span> ${$vintages[bit].frontline}
{/if}
{if $vintages[bit].discount3 > 0}
<br><span class="bld">3 cs({$vintages[bit].case})|1 btl.:</span> ${math equation="x * y" x=$vintages[bit].discount3 y=$vintages[bit].case format="%.2f"}|${$vintages[bit].discount3}
{/if}
{if $vintages[bit].discount5 > 0}
<br><span class="bld">5 cs({$vintages[bit].case})|1 btl.:</span> ${math equation="x * y" x=$vintages[bit].discount5 y=$vintages[bit].case format="%.2f"}|${$vintages[bit].discount5}
{/if}
</div><!-- /.vintage_pricing_group_p -->
</div><!-- /.vintage_description -->
</div><!-- /.vintage_description_group -->

<div class="vintage_pricing_group_l">
<span class="bld">Region:</span> {$vintages[bit].appellation}, {$vintages[bit].country}
<div class="vintage_pricing">
{if $vintages[bit].case}
<span class="bld">1 cs({$vintages[bit].case})|1 btl.:</span> ${$vintages[bit].frontline_case}|${$vintages[bit].frontline}
{else}
<span class="bld">1 bottle:</span> ${$vintages[bit].frontline}
{/if}
{if $vintages[bit].discount3 > 0}
<br><span class="bld">3 cs({$vintages[bit].case})|1 btl.:</span> ${math equation="x * y" x=$vintages[bit].discount3 y=$vintages[bit].case format="%.2f"}|${$vintages[bit].discount3}
{/if}
{if $vintages[bit].discount5 > 0}
<br><span class="bld">5 cs({$vintages[bit].case})|1 btl.:</span> ${math equation="x * y" x=$vintages[bit].discount5 y=$vintages[bit].case format="%.2f"}|${$vintages[bit].discount5}
{/if}
</div><!-- /.vintage_pricing -->
</div><!-- /.vintage_pricing_group_l -->

<div class="clean"></div>
</div><!-- /.vintage_group -->
{/if}
{/section}
{/foreach}

<div class="term_group">
<span class="bld">Terms and Conditions:</span> Net 30 days. 1.5% interest monthly for overdue accounts
<br>Free delivery in New York City: 4 cases or $400 minimum
<br>All sales are by Fruit of the Vines, Inc., Long Island City, NY 718-392-5640
</div><!-- /.term_group -->

</div><!-- /#pricebook -->

