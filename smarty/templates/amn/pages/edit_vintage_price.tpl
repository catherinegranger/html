<h2>Update Vintage Prices</h2>

		
{if $tri == "success"}<div class="error">Vintage updated successfully! &nbsp; <a href="/wine/{$two}" target="_blank">View the wine page</a></div>{/if}
{if $tri == "error"}<div class="error">There was a problem.  Maybe a require field was left blank?</div>{/if}
{if $tri == "update_error"}<div class="error">Vintage update failed.</div>{/if}


<table cellpadding="4" cellspacing="4">
<tr><td colspan="2" class="bld size16">{$year} {$wy_name} {$wine_name} - {$size}ml</td></tr>
<tr><td class="alignRight" style="width:1%;white-space:nowrap;"><b>Product Id:</b></td><td>{$product_id}</td></tr>
<tr><td class="alignRight" style="width:1%;white-space:nowrap;"><b>Buying Price:</b></td><td><input type="text" size="5" maxlength="6" name="buying_price" value="{$buying_price}" /></td></tr>
<tr><td class="alignRight" style="width:1%;white-space:nowrap;"><b>Landing Price:</b></td><td><input type="text" size="5" maxlength="6" name="landing_price" value="{$landing_price}" /></td></tr>
<tr><td class="alignRight" style="width:1%;white-space:nowrap;"><b>Distribution Price:</b></td><td><input type="text" size="5" maxlength="6" name="us_distribution_price" value="{$us_distribution_price}" /></td></tr>
<tr><td class="alignRight" style="width:1%;white-space:nowrap;"><b>CA Wholesale:</b></td><td><input type="text" size="5" maxlength="6" name="ca_wholesale_price" value="{$ca_wholesale_price}" /></td></tr>
<tr><td class="alignRight" style="width:1%;white-space:nowrap;"><b>Store Price:</b></td><td><input type="text" size="5" maxlength="6" name="price" value="{$price}" />
&nbsp;(store markup: {if $store_markup > 0}{$store_markup}%{else}n/a{/if})</td></tr>
<tr><td class="alignRight" style="width:1%;white-space:nowrap;"><b>Store sale:</b></td><td><input type="text" size="5" maxlength="6" name="sale" value="{$sale}" /></td></tr>
<tr><td class="alignRight" style="width:1%;white-space:nowrap;"><b>NY Wholesale:</b></td><td><input type="text" size="5" maxlength="6" name="ny_wholesale_price" value="{$ny_wholesale_price}" />
&nbsp;(NY markup: {if $ny_markup > 0}{$ny_markup}%{else}n/a{/if})</td></tr>
<tr><td class="alignRight" style="width:1%;white-space:nowrap;"><b>NY Discount:</b></td><td><input type="text" size="50" maxlength="100" name="ny_discount" value="{$ny_discount}" /></td></tr>
</table>
<br />&nbsp;<br />




