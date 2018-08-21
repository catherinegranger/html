{if $two}
<article id="trade_winery">
<header>
<h1 title="Trade - {$name}"><a href="/trade/" title="Trade">Trade</a> - <a href="/winery/{$web_name}/" title="{$name}">{$name}</a></h1>
</header>
{if $wines}
{section name=bit loop=$wines}
{if $wines[bit].tech_file_exists > 0}
&bull;&nbsp;&nbsp;<a href="/techsheets/{$wines[bit].tech_file_name}" title="{$name} {$wines[bit].name} {if $wines[bit].year > '0'}{$wines[bit].year}{/if} PDF" target="_blank">{if $wines[bit].year > '0'}{$wines[bit].year}{/if} {$wines[bit].name}{if $wines[bit].size > '0'} ({$wines[bit].size}ml){/if} : 
<span class="trade_winery_pdf">
<span style="vertical-align:0px;margin-right:4px;">PDF File</span>
<img  style="position:relative;top:8px;" src="/img/all/pdficon_large.png" alt="PDF icon" />
</span></a>
{else}
&bull;&nbsp;&nbsp;<a href="/wine/{$wines[bit].vint_id}/" title="{$name} {$wines[bit].name} {if $wines[bit].year > '0'}{$wines[bit].year}{/if}">{if $wines[bit].year > '0'}{$wines[bit].year}{/if} {$wines[bit].name}{if $wines[bit].size > '0'} ({$wines[bit].size}ml){/if}</a>
{/if}
<br/>
{/section}
{/if}
</article>
{assign var=head_title value='Trade - '|cat:$name}

{else}

<article id="trade_wineries">
{if $price_list_url} 
<div class="some_space2">
<a href="{$price_list_url}" title="Price List" target="_blank">Download Price List
<span class="trade_winery_pdf">
<span style="vertical-align:0px;margin-right:4px;">PDF File</span>
<img  style="position:relative;top:8px;" src="/img/all/pdficon_large.png" alt="PDF icon" />
</span></a>
</div>
{/if}
<header>
<h1 title="Trade - Our Wineries">Trade - Our Wineries</h1>
</header>
{section name=c loop=$ncc}
<h2><a href="/regions/{$ncc[c].web_name}/" title="{$ncc[bit].full_name}">{$ncc[c].full_name}:</a></h2>
<div>
{section name=w loop=$nwys}
{if $nwys[w].c_id == $ncc[c].c_id}
<a href="/trade/{$nwys[w].web_name}/" title="{$nwys[w].name}">{$nwys[w].name} </a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
{/if}
{/section}
</div>
{if $ncc[c].web_name == "austria"}
<span style="vertical-align:50%;">Map of Austria:&nbsp;</span>
<a href="/img/regions/austria_map.jpg" target="_blank"><img style="width:50px;" src="/img/regions/austria_map.jpg" alt="Austria Map" /></a>
{elseif $ncc[c].web_name == "croatia"}
<span style="vertical-align:50%;">Map of Croatia:&nbsp;</span>
<a href="/img/regions/croatia_map.jpg" target="_blank"><img  style="width:50px;" src="/img/regions/croatia_map.jpg" alt="Croatia Map" /></a>
{elseif $ncc[c].web_name == "slovenia"}
<span style="vertical-align:50%;">Map of Slovenia:&nbsp;</span>
<a href="/img/regions/slovenia_map.jpg" target="_blank"><img  style="width:50px;" src="/img/regions/slovenia_map.jpg" alt="Slovenia Map" /></a>
{elseif $ncc[c].web_name == "hungary"}
<span style="vertical-align:50%;">Map of Hungary:&nbsp;</span>
<a href="/img/regions/hungary_map.jpg" target="_blank"><img  style="width:50px;" src="/img/regions/hungary_map.jpg" alt="Hungary Map" /></a>
<br />
<div style="margin:12px 0px;">
<span style="vertical-align:20px;margin-right:4px;"><a href="/pdf/Tokaji_Page.pdf" target="_blank">Tokaj Presentation</a></span>
<img  style="position:relative;top:-6px;" src="/img/all/pdficon_large.png" alt="PDF icon" />
<br />
<span style="vertical-align:20px;margin-right:4px;"><a href="/pdf/Somlo_Page.pdf" target="_blank">Somlo Presentation</a></span>
<img  style="position:relative;top:-6px;" src="/img/all/pdficon_large.png" alt="PDF icon" />
</div>	
{/if}
{/section}
</article>

<div class="clean"></div>
{assign var=head_title value='Trade - Our Wineries'}
{/if}