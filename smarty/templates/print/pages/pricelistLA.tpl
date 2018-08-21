<div id="pricebook" style="background-color:white;padding:10px;">
<div style="text-align:center;margin:10px 0 0 0;border-bottom: solid white;">
<div style="margin:0 0 0 0;">
<a href="/img/all/round_logo_small_wave.png" title="Blue Danube Wine Co.">
<img style="width:150px;" src="/img/all/round_logo_small_wave.png" alt="Blue Danube Wine Co." />
</a>
</div>
<div style="font-weight:bold;font-size:2em;line-height:1.5em;margin:15px 0;">
Down To Earth Trade Tasting
<br>September 18
<br>LEDLOW, Los Angeles
</div>
<div style="font-weight:bold;font-size:1.4em;line-height:1.5em;margin:15px 0;">
PO Box 1011
<br>Los Altos, California 94023 
<br>bluedanubewine.com
<br>sevenfifty.com/bluedanube
<br>(650) 941-4699
</div>
<div class="clean"></div>
<div style="padding:10px 0;">
<img style="width:600px;margin:0 0 0 0;" src="/img/wineries/crnko_earth.jpg"/>
</div>
</div>
<div style="font-size:0.5em;page-break-before: always;page-break-after: avoid;">&nbsp;</div>

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

{section name=bit loop=$vintages}
{if $vintages[bit].country_id == $country_id && $vintages[bit].producer_name != "Specials"}
{assign var=producer_name value=$vintages[bit].producer_name}
{if $producer_name != $previous_producer_name}
{if $vintages[bit].producer_webname == 'rosenhof' || $vintages[bit].producer_webname == 'fuleky'  || $vintages[bit].producer_webname == 'kreinbacher'  || $vintages[bit].producer_webname == 'tinon'  || $vintages[bit].producer_webname == 'torley'}
<div style="font-size:0.5em;page-break-before: always;page-break-after: avoid;">&nbsp;</div>
{/if}
<div style="margin:10px 0 6px 0;page-break-after: avoid;">
<span style="font-size:1.5em;color:#888888;font-style:bold;page-break-after: avoid;">
{$producer_name} &mdash; {$country_name}
</span>
{if $vintages[bit].producer_description}
<div style="font-size:0.95;color:#888888;font-style:italic;margin:0 0 10px 0;">
<img style="width:180px;margin:0 0 10px 10px;float:right;" src="{$vintages[bit].producer_image_file}" alt="{$producer_name}" />
{$vintages[bit].producer_description}
</div>
<div style="clear:both"></div>
{/if}
</div>
{/if}
{assign var=previous_producer_name value=$vintages[bit].producer_name}
<div style="margin:5px;padding:5px 10px;border-bottom: solid white 1px;page-break-after: avoid;page-break-inside: avoid;">
<div style="float:left;margin:0 10px 0 0;">
<a href="{$vintages[bit].image_file}" title="{$vintages[bit].pretty_name}">
<img style="width:40px;" src="{$vintages[bit].image_file}" alt="{$vintages[bit].pretty_name}" />
</a>
</div>
<div style="float:right;font-size:1.05em;">
<span style="font-weight:bold;">Region:</span> {$vintages[bit].appellation}, {$vintages[bit].country}
<br><span style="font-weight:bold;">Frontline:</span> ${$vintages[bit].frontline}
{if $vintages[bit].case}
<br><span style="font-weight:bold;">One case ({$vintages[bit].case}):</span> ${$vintages[bit].frontline_case}
{/if}
</div>
<div style="float:left;font-size:1.05em;padding:0 0 0 10px;">
<span style="font-weight:bold;font-size:1.05em;">{$vintages[bit].pretty_name}</span>
<br><span style="font-weight:bold;">Type:</span> {$vintages[bit].product_subtype} 
{if $vintages[bit].product_style} &mdash; {$vintages[bit].product_style}{/if}
{if $vintages[bit].features}, {$vintages[bit].features} {/if}
<br><span style="font-weight:bold;">Grapes:</span> {$vintages[bit].grapes}
{if $vintages[bit].alcohol}
<br><span style="font-weight:bold;">Alcohol:</span> {$vintages[bit].alcohol}%
{/if}
{if $vintages[bit].residual_sugar}
<br><span style="font-weight:bold;">Residual Sugar:</span> {$vintages[bit].residual_sugar}
{/if}
{if $vintages[bit].acidity}
<br><span style="font-weight:bold;">Acidity:</span> {$vintages[bit].acidity}
{/if}
</div>

<div class="clean"></div>
</div>
{/if}
{/section}
{/foreach}

<div style="font-size:1.05em;padding:10px 0;">
<span style="font-weight:bold">Terms and Conditions:</span> Net 30 days. 1.5% interest monthly for overdue accounts
<br>Free delivery in the Bay Area, Sacramento, LA, and San Diego: 3 cases or $300 minimum
<br>Broken/Mixed case charge: $6.00 - Prices subject to change without notice
</div>

<div style="font-size:0.5em;page-break-before: always;page-break-after: avoid;">&nbsp;</div>
</div>
