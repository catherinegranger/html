{section name=bit loop=$wines}
<form method="post" action="/add_to_cart/">
<input type="hidden" name="vint_id" value="{$wines[bit].vint_id}" />
<input type="hidden" name="product_id" value="{$wines[bit].product_id}" />
<input type="hidden" name="item_type" value="{$wines[bit].item_type}" />
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
{if $wines[bit].item_type == 0}
<div class="mod_bottle_info">
<div class="mod_bottle_info_img">
<a href="/wine/{if $wines[bit].grup}sampler/{/if}{$wines[bit].vint_id}/" title="{if $wines[bit].winery}{if $wines[bit].winery != "Specials"}{$wines[bit].winery} {/if}{/if}{$wines[bit].vintage} {if $wines[bit].year > 0}{$wines[bit].year}{/if}">
{if $wines[bit].image}
<img src="/img/bottles/thumb/{$wines[bit].vint_id}.jpg" alt="{if $wines[bit].winery}{if $wines[bit].winery != "Specials"}{$wines[bit].winery} {/if}{/if}{$wines[bit].vintage} {if $wines[bit].year > 0}{$wines[bit].year}{/if}"  />
{else}
<img src="/img/bottles/thumb/0.jpg" alt="No Bottle Image"  />
{/if}
</a>
</div><!-- /.mod_bottle_info_img -->
<div class="mod_bottle_info_text">
<a href="/wine/{if $wines[bit].grup}sampler/{/if}{$wines[bit].vint_id}/" title="{if $wines[bit].winery}{if $wines[bit].winery != "Specials"}{$wines[bit].winery} {/if}{/if}{$wines[bit].vintage} {if $wines[bit].year > 0}{$wines[bit].year}{/if}">
<b>{if $wines[bit].winery}{if $wines[bit].winery != "Specials"}{$wines[bit].winery}<br/>{/if}{/if}{$wines[bit].vintage}</b>
{if $wines[bit].pretty_year_size}<br/>{$wines[bit].pretty_year_size}<br />{/if}
</a>
{if $wines[bit].notes || ($wines[bit].sale > 0)}
<div class="mod_bottle_info_text_notes">
{if $wines[bit].sale > 0 && $can_show_retail_price} WAS ${$wines[bit].price}. {/if}
{if $wines[bit].low_inventory} Low inventory. {/if}
{if $wines[bit].vintage_length > 35 && $wines[bit].year > '0'}
{$wines[bit].notes|strip_tags|truncate:55:"...":true} 
{elseif $wines[bit].vintage_length > 21 && $wines[bit].year > '0'}
{$wines[bit].notes|strip_tags|truncate:55:"...":true} 
{else}
{$wines[bit].notes|strip_tags|truncate:80:"...":true} 
{/if}
<a href="/wine/{if $wines[bit].grup}sampler/{/if}{$wines[bit].vint_id}/" title="{$wines[bit].winery} {$wines[bit].vintage} {if $wines[bit].year > 0}{$wines[bit].year}{/if}"><span class="nowrap">more &gt;</span></a>
</div><!-- /.mod_bottle_info_text_notes -->
{/if}
{if $can_show_retail_price}
<div class="mod_bottle_info_text_buy">
{if $wines[bit].sale > 0}{if $wines[bit].sale < 10}<span class="rdd" style="padding-left:0.1em;">${$wines[bit].sale}</span> {else}<span class="rdd">${$wines[bit].sale}</span> {/if} {elseif $wines[bit].price > 0}${$wines[bit].price} {/if}
{if $wines[bit].price > 0}{if $wines[bit].stock > 0}&nbsp;<button class="btn btn-xs btn-primary" type="submit" title="Add to Cart">Add to Cart</button>{else}&nbsp; Sold out{/if}{else}Sorry, not available{/if}
</div><!-- /.mod_bottle_info_text_buy -->
{/if}
</div><!-- /.mod_bottle_info_text -->
</div><!-- /.mod_bottle_info -->

{else}

<div class="mod_other_item_info">
<div class="mod_other_item_info_img">
<a href="/wine/{$wines[bit].vint_id}/" title="{$wines[bit].vintage}">
{if $wines[bit].image}
<img src="/img/bottles/thumb/{$wines[bit].vint_id}.jpg" alt="{$wines[bit].vintage}"  />
{else}
<img src="/img/bottles/thumb/0.jpg" alt="No Bottle Image"  />
{/if}
</a>
</div><!-- /.mod_other_item_info_img -->
<div class="mod_other_item_info_text">
<a href="/wine/{$wines[bit].vint_id}/" title="{$wines[bit].vintage}">
<b>{$wines[bit].vintage}</b>
</a>
{if $wines[bit].notes || ($wines[bit].sale > 0)}
<div class="mod_other_item_info_text_notes">
{if $wines[bit].sale > 0} WAS ${$wines[bit].price}. {/if}
{if $wines[bit].low_inventory} Low inventory. {/if}
{if $wines[bit].vintage_length > 35 && $wines[bit].year > '0'}
{$wines[bit].notes|strip_tags|truncate:55:"...":true} 
{elseif $wines[bit].vintage_length > 21 && $wines[bit].year > '0'}
{$wines[bit].notes|strip_tags|truncate:55:"...":true} 
{else}
{$wines[bit].notes|strip_tags|truncate:80:"...":true} 
{/if}
<a href="/wine/{$wines[bit].vint_id}/" title="{$wines[bit].vintage}"><span class="nowrap">more &gt;</span></a>
</div><!-- /.mod_other_item_info_text_notes -->
{/if}
<div class="mod_other_item_info_text_buy">
{if $wines[bit].sale > 0}{if $wines[bit].sale < 10}<span class="rdd" style="padding-left:0.1em;">${$wines[bit].sale}</span> {else}<span class="rdd">${$wines[bit].sale}</span> {/if} {elseif $wines[bit].price > 0}${$wines[bit].price} {/if}
{if $wines[bit].price > 0}{if $wines[bit].stock > 0}&nbsp;<button class="btn btn-xs btn-primary" type="submit" title="Add to Cart">Add to Cart</button>{else}&nbsp; Sold out{/if}{else}Sorry, not available{/if}
</div><!-- /.mod_other_item_info_text_buy -->
</div><!-- /.mod_other_item_info_text -->
</div><!-- /.mod_other_item_info -->
{/if}
</form>
{/section}

<div class="clean"></div>
