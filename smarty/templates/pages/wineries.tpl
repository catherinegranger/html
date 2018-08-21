<h1 id="wineries" title="Our Wineries">Our Wineries</h1>

{section name=c loop=$ncc}
<article class="all_wineries">
<header>
<h2><a href="/regions/{$ncc[c].web_name}/" title="{$ncc[c].full_name}">{$ncc[c].full_name}</a></h2>
</header>
{section name=w loop=$nwys}
{if $nwys[w].c_id == $ncc[c].c_id}
<span class="country_winery"><a href="/winery/{$nwys[w].web_name}/" title="{$nwys[w].name}">{$nwys[w].name}</a></span>
{/if}
{/section}

{if $ncc[c].web_name == 'austria'}
<center><img src="/img/regions/austria_map.jpg" alt="Austrian Wine Regions" usemap="#austriamap"/><div class="size12 itl dgray">Click on the winery's number to navigate to the winery page.</div></center>
<map name="austriamap">
<area shape="circle" coords="545,102,6" href="/winery/weinrieder/"  alt="Weinrieder" >
<area shape="circle" coords="482,126,6" href="/winery/Geyerhof/"  alt="Geyerhof" >
<area shape="circle" coords="530,148,6" href="/winery/bernreiter/"  alt="Bernreiter" >
<area shape="circle" coords="567,187,6" href="/winery/juris/"  alt="Juris" >
<area shape="circle" coords="563,196,6" href="/winery/rosenhof/"  alt="Rosenhof" >
<area shape="circle" coords="540,213,6" href="/winery/j_heinrich/"  alt="J. Heinrich" >

<area shape="circle" coords="31,29,6" href="/winery/weinrieder/"  alt="Weinrieder Nav" >
<area shape="circle" coords="31,44,6" href="/winery/Geyerhof/"  alt="Geyerhof Nav" >
<area shape="circle" coords="31,56,6" href="/winery/bernreiter/"  alt="Bernreiter Nav" >
<area shape="circle" coords="31,70,6" href="/winery/juris/"  alt="Juris Nav" >
<area shape="circle" coords="31,84,6" href="/winery/rosenhof/"  alt="Rosenhof Nav" >
<area shape="circle" coords="31,97,6" href="/winery/j_heinrich/"  alt="J. Heinrich Nav" >
</map>
{elseif $ncc[c].web_name == 'croatia'}
<center><img  src="/img/regions/croatia_map.jpg" alt="Croatian Wine Regions" usemap="#croatiamap"/><div class="size12 itl dgray">Click on the winery's number to navigate to the winery page.</div></center>
<map name="croatiamap">
<area shape="circle" coords="140,114,7" href="/winery/coronica/"  alt="Coronica" >
<area shape="circle" coords="142,128,7" href="/winery/terzolo/"  alt="Terzolo" >
<area shape="circle" coords="177,116,7" href="/winery/piquentum/"  alt="Piquentum" >
<area shape="circle" coords="213,150,7" href="/winery/sipun/"  alt="Sipun" >
<area shape="circle" coords="444,122,7" href="/winery/daruvar_winery/"  alt="Daruvar" >
<area shape="circle" coords="311,260,7" href="/winery/bibich/"  alt="Bibich" >
<area shape="circle" coords="404,348,7" href="/winery/dingac/"  alt="Dingac" >
<area shape="circle" coords="427,361,7" href="/winery/milos/"  alt="Milos" >
<area shape="circle" coords="308,283,7" href="/winery/suha_punta/"  alt="Suha Punta" >
<area shape="circle" coords="361,331,7" href="/winery/caric/"  alt="Caric" >
<area shape="circle" coords="24,265,7" href="/winery/coronica/"  alt="Coronica Nav" >
<area shape="circle" coords="24,279,7" href="/winery/terzolo/"  alt="Terzolo Nav" >
<area shape="circle" coords="24,292,7" href="/winery/piquentum/"  alt="Piquentum Nav" >
<area shape="circle" coords="24,307,7" href="/winery/sipun/"  alt="Sipun Nav" >
<area shape="circle" coords="24,320,7" href="/winery/daruvar_winery/"  alt="Daruvar Nav" >
<area shape="circle" coords="24,334,7" href="/winery/bibich/"  alt="Bibich Nav" >
<area shape="circle" coords="24,348,7" href="/winery/dingac/"  alt="Dingac Nav" >
<area shape="circle" coords="24,362,7" href="/winery/milos/"  alt="Milos Nav" >
<area shape="circle" coords="24,376,7" href="/winery/suha_punta/"  alt="Suha Punta Nav" >
<area shape="circle" coords="24,392,7" href="/winery/caric/"  alt="Caric Nav" >
</map>
{elseif $ncc[c].web_name == 'hungary'}
<center><img src="/img/regions/hungary_map.jpg" alt="Hungarian Wine Regions" usemap="#hungarymap"/><div class="size12 itl dgray">Click on the winery's number to navigate to the winery page.</div></center>
<map name="hungarymap">
<area shape="circle" coords="394,168,6" href="/winery/jj/"  alt="J&J Eger" >
<area shape="circle" coords="367,179,6" href="/winery/szoke_matyas/"  alt="Szoke Matyas" >
<area shape="circle" coords="306,192,6" href="/winery/torley/"  alt="Torley" >
<area shape="circle" coords="185,179,6" href="/winery/pfneiszl/"  alt="Pfneiszl" >
<area shape="circle" coords="209,222,6" href="/winery/spiegelberg/"  alt="Spiegelberg" >
<area shape="circle" coords="212,236,6" href="/winery/fekete/"  alt="Fekete" >
<area shape="circle" coords="295,306,6" href="/winery/eszterbauer/"  alt="Eszterbauer" >
<area shape="circle" coords="263,341,6" href="/winery/vylyan/"  alt="Vylyan" >
<area shape="circle" coords="276,341,6" href="/winery/gere/"  alt="Gere" >
<area shape="circle" coords="447,134,6" href="/winery/bott/"  alt="Bott" >

<area shape="circle" coords="22,22,6" href="/winery/jj/"  alt="J&J Eger Nav" >
<area shape="circle" coords="22,37,6" href="/winery/szoke_matyas/"  alt="Szoke Matyas Nav" >
<area shape="circle" coords="22,50,6" href="/winery/torley/"  alt="Torley Nav" >
<area shape="circle" coords="22,64,6" href="/winery/pfneiszl/"  alt="Pfneiszl Nav" >
<area shape="circle" coords="22,77,6" href="/winery/spiegelberg/"  alt="Spiegelberg Nav" >
<area shape="circle" coords="22,91,6" href="/winery/fekete/"  alt="Fekete Nav" >
<area shape="circle" coords="22,103,6" href="/winery/eszterbauer/"  alt="Eszterbauer Nav" >
<area shape="circle" coords="22,117,6" href="/winery/vylyan/"  alt="Vylyan Nav" >
<area shape="circle" coords="22,131,6" href="/winery/gere/"  alt="Gere Nav" >
<area shape="circle" coords="581,241,6" href="/winery/bott/"  alt="Bott Nav" >
</map>
{elseif $ncc[c].web_name == 'slovenia'}
<center><img src="/img/regions/slovenia_map.jpg" alt="Slovenian Wine Regions" usemap="#sloveniamap"/><div class="size12 itl dgray">Click on the winery's number to navigate to the winery page.</div></center>
<map name="sloveniamap">
<area shape="circle" coords="113,215,6" href="/winery/kabaj/"  alt="Kabaj" >
<area shape="circle" coords="136,242,6" href="/winery/batic/"  alt="Batic" >
<area shape="circle" coords="153,286,6" href="/winery/stoka/"  alt="Stoka" >
<area shape="circle" coords="444,121,6" href="/winery/crnko/"  alt="Crnko" >
<area shape="circle" coords="509,161,6" href="/winery/kogl/"  alt="Kogl" >

<area shape="circle" coords="32,32,6" href="/winery/kabaj/"  alt="Kabaj Nav" >
<area shape="circle" coords="32,49,6" href="/winery/batic/"  alt="Batic Nav" >
<area shape="circle" coords="32,65,6" href="/winery/stoka/"  alt="Stoka Nav" >
<area shape="circle" coords="32,80,6" href="/winery/crnko/"  alt="Crnko Nav" >
<area shape="circle" coords="32,96,6" href="/winery/kogl/"  alt="Kogl Nav" >
</map>
{/if}
<div class="country_shop">
See all our wines from <a href="/wines/{$ncc[c].web_name}/" title="Wines of {$ncc[c].full_name}">{$ncc[c].full_name} &nbsp;&gt;</a>
</div>
</article>
{/section}
<div class="clean"></div>
{assign var=head_title value="Wineries"}