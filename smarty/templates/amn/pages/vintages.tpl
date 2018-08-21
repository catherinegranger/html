{if $for}{assign var="page" value=$for}{else}{assign var="page" value="0"}{/if}
{if $tri}{assign var="winery" value=$tri}{else}{assign var="winery" value="all"}{/if}

<h2>View and Update Vintages</h2>


{if $fiv == "success"}<div class="error">Vintage updated successfully!</div>{/if}
{if $for == "error"}<div class="error">There was a problem, action failed.</div>{/if}
{if $for == "removed"}<div class="error">Vintage has been removed from the website.</div>{/if}
{if $for == "unremoved"}<div class="error">Vintage has been unremoved from the website.</div>{/if}
{if $for == "stockremoved"}<div class="error">Vintage is now out of stock.</div>{/if}
{if $for == "stockunremoved"}<div class="error">Vintage is back in stock.</div>{/if}

		
<table cellpadding="4" cellspacing="1">
<tr><td colspan="10">{$paginator}</td></tr>
<tr>
<td colspan="2"><b>Showing {$two} vintages</b></td>
<td colspan="3">
{if $tri != "prices"}
<form action="/sort_vintages/" method="post">
<input type="hidden" name="page" value="{$page}" />
<select name="wy_id" onchange="this.form.submit();">
<option value="all">All Wineries</option>
{section name="bit" loop=$wys}
<option value="{$wys[bit].wy_id}"{if $tri == $wys[bit].wy_id} selected{/if}>{$wys[bit].name}</option>
{/section}
<option value="samplers"{if $tri == 'samplers'} selected{/if}>Samplers</option>
<option value="others"{if $tri == 'others'} selected{/if}>Others</option>
</select>
</form>
{/if}
</td>
<td colspan="5" style="text-align:right;"><a href="/amn/vintages/active/{$winery}/0/">Show Active</a> | <a href="/amn/vintages/undeleted/{$winery}/0/">Show Undeleted</a> | <a href="/amn/vintages/all/{$winery}/0/">Show All</a></td>
</tr>

<tr>
{if $tri == "prices"}
<td class="border1" style="width:5%;text-align:center;white-space:nowrap;"><b>Product Id</b></td>
<td class="border1" style="width:15%;"><b>Winery</b></td>
<td class="border1" style="width:15%;"><b>Vintage Name</b></td>
<td class="border1" style="width:5%;text-align:center;"><b>Size</b></td>
<td class="border1" style="width:5%;text-align:center;"><b>Year</b></td>
<td class="border1" style="width:5%;text-align:center;white-space:nowrap;"><b>CA Price</b></td>
<td class="border1" style="width:5%;text-align:center;white-space:nowrap;"><b>Store Price</b></td>
<td class="border1" style="width:5%;text-align:center;white-space:nowrap;"><b>Store Sale</b></td>
<td class="border1" style="width:5%;text-align:center;white-space:nowrap;"><b>NY Price</b></td>
<td class="border1" style="text-align:center;white-space:nowrap;"><b>NY Discount</b></td>
{else}
<td class="border1" style="width:5%;text-align:center;white-space:nowrap;"><b>Product Id</b></td>
<td class="border1" style="width:15%;"><b>Winery</b></td>
<td class="border1" style="width:20%;"><b>Vintage Name</b></td>
<td class="border1" style="width:5%;text-align:center;"><b>Size</b></td>
<td class="border1" style="width:5%;text-align:center;"><b>Year</b></td>
<td class="border1" style="width:10%;text-align:center;"><b>Price</b></td>
<td class="border1" style="width:10%;text-align:center;"><b>Stock?</b></td>
<td class="border1" style="width:5%;text-align:center;"><b>Edit</b></td>
<td class="border1" style="width:15%;text-align:center;"><b>Edit New Vintage</b></td>
<td class="border1" style="width:10%;text-align:center;"><b>In Website?</b></td>
{/if}
</tr>
{section name=bit loop=$vintages}
<tr>
{if $tri == "prices"}
<td class="border1"><b>{$vintages[bit].product_id}</b></td>
<td class="border1" style="white-space:nowrap;"><b>{$vintages[bit].winery}</b></td>
<td class="border1" style="white-space:nowrap;"><b><a href="/amn/edit_vintage_price/{$vintages[bit].vint_id}/">{$vintages[bit].vintage}</a></b></td>
<td class="border1" style="text-align:center;">{$vintages[bit].size}</td>
<td class="border1" style="text-align:center;">{$vintages[bit].year}</td>
<td class="border1" style="text-align:right;">{if $vintages[bit].ca_price > 0}${$vintages[bit].ca_price}{else}-{/if}</td>
<td class="border1" style="text-align:right;">{if $vintages[bit].price > 0}${$vintages[bit].price}{else}-{/if}</td>
<td class="border1" style="text-align:right;">{if $vintages[bit].sale > 0}${$vintages[bit].sale}{else}-{/if}</td>
<td class="border1" style="text-align:right;">{if $vintages[bit].ny_price > 0}${$vintages[bit].ny_price}{else}-{/if}</td>
<td class="border1" style="text-align:left;">{$vintages[bit].ny_discount}</td>
{else}
<td class="border1"><b>{$vintages[bit].product_id}</b></td>
<td class="border1" style="white-space:nowrap;"><b>{$vintages[bit].winery}</b></td>
<td class="border1" style="white-space:nowrap;"><b><a href="/amn/edit_vintage/{$vintages[bit].vint_id}/">{$vintages[bit].vintage}</a></b></td>
<td class="border1" style="text-align:center;">{$vintages[bit].size}</td>
<td class="border1" style="text-align:center;">{$vintages[bit].year}</td>
<td class="border1" style="text-align:center;">{if $vintages[bit].price > 0}${$vintages[bit].price}{else}-{/if}</td>
<td class="border1" style="text-align:center;">{if $vintages[bit].stock == '1'}<a href="/amn/vintages/{$two}/{$tri}/stockremove/{$vintages[bit].vint_id}/">YES</a>{else}<a href="/amn/vintages/{$two}/{$tri}/stockunremove/{$vintages[bit].vint_id}/">NO</a>{/if}</td>
<td class="border1" style="text-align:center;"><a href="/amn/edit_vintage/{$vintages[bit].vint_id}/">YES</a></td>
<td class="border1" style="text-align:center;"><a href="/amn/add_vintage/{$vintages[bit].vint_id}/">YES</a></td>
<td class="border1" style="text-align:center;">{if $vintages[bit].online_store == '1'}<a href="/amn/vintages/{$two}/{$tri}/remove/{$vintages[bit].vint_id}/">YES</a>{else}<a href="/amn/vintages/{$two}/{$tri}/unremove/{$vintages[bit].vint_id}/">NO</a>{/if}</td>
{/if}
</tr>
{/section}
<tr><td colspan="10">{$paginator}</td></tr>
</table>

<p><a href="/amn/forecast/{$winery}/" target="_blank">View Past Vintage Sales &gt;&gt;</a></p>