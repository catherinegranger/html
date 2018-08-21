<div id="techsheet">

<div class="techsheet_main">

<p class="nowrap">
<h1>{if $year > 0}{$year} {/if}{$winery_name} {$vintage_name}</h1>
<h2 class="region_subheader">{$appellation}, {$country_name}</h2>
</p>
<div class="inner_techsheet_main">
<div class="inner_techsheet_left">
<p class="top_paragraph"><span class="big_blue">{$first_letter}</span>{$introduction}
</p>
{if $vineyards}
<h3>VINEYARDS</h3>
<p>{$vineyards}
</p>
{/if}
{if $winemaking}
<h3>WINE MAKING</h3>
<p>
{$winemaking}
</p>
{/if}
</div>
<div class="inner_techsheet_right">
<div class="inner_techsheet_middle_right">
<div class="techsheet_bottle_img">
<div class="inner_box"><img src="{$bottle_img_name}" alt="{$year} {$winery_name} {$vintage_name}" /></div>
</div>
</div>
<div class="inner_techsheet_right_right">
{if $winemaking2}
<p>{$winemaking2}</p>
{/if}
<h3>NOTES &amp; PAIRINGS</h3>
<p>{$notespairings}
</p>
<h3>ANALYTICS &amp; PRONUNCIATION</h3>
<p>
<b>PRODUCER</b>: {$winery_name} {if $winery_phonetic_name}({$winery_phonetic_name}){/if}
<br><b>APPELLATION</b>: {$appellation} {if $winery_phonetic_appellation}({$winery_phonetic_appellation}){/if}
{if $year > 0}<br><b>VINTAGE</b>: {$year}{/if}
<br><b>GRAPE COMPOSITION</b>: {$composition}
{if $climate}
<br><b>CLIMATE</b>: {$climate}
{/if}
{if $soils}
<br><b>SOILS</b>: {$soils}
{/if}
{if $exposure}
<br><b>EXPOSURE</b>: {$exposure}
{/if}
{if $aging}
<br><b>MACERATION & AGING</b>: {$aging}
{/if}
{if $alcohol}
<br><b>ALCOHOL</b>: {$alcohol}%
{/if}
{if $residual_sugar}
<br><b>RESIDUAL SUGAR</b>: {$residual_sugar} g/l
{/if}
{if $acidity}
<br><b>ACIDITY</b>: {$acidity} g/l
{/if}
</p>
</div>
</div>

<div class="techsheet_map_block">
{if $map_file}
<img src="{$map_file}">
{/if}
</div>

</div>
<div id="techsheet_footer">
To order or get more information call or fax +1 (650) 941-4699.
<br>Blue Danube Wine Company
<br>PO Box 1011 | Los Altos, California 94023 | USA
<br><a href="http://www.bluedanubewine.com">www.bluedanubewine.com</a>
</div>
</div>