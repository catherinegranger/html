<h2>Add a New Vintage</h2>
Any (*) indicate a field required for entry.
		
{if $two == "success"}<div class="error">Vintage entered successfully! &nbsp; <a href="/wine/{$added_vint_id}">View the wine page</a></div>{/if}
{if $two == "error"}<div class="error">There was a problem.  Maybe a field was left blank?</div>{/if}

{if $two == "too_small"}<div class="error">Adding image failed. The image is too small.</div>{/if}
{if $two == "too_big"}<div class="error">Adding image failed. The image is too big.</div>{/if}
	
<form action="/submit_vintage/" method="post" enctype="multipart/form-data">
<table cellpadding="4" cellspacing="0">
<tr>
<td style="width:15%;" class="alignRight"><b>* Item Type:</b></td>
<td><select name="item_type">
	<option value="0"{if $item_type == '0'} selected{/if}>Vintage</option>
	<option value="2"{if $item_type == '2'} selected{/if}>Book</option>
</select></td>
</tr>
<tr>
<td style="width:15%;" class="alignRight"><b>* Winery:</b></td>
<td style="width:85%;"><select name="wy_id">
<option value=""></option>
{section name=bit loop=$wineries}
<option value="{$wineries[bit].wy_id}"{if $smarty.session.wy_id == $wineries[bit].wy_id} selected{/if}>{$wineries[bit].wy_name}</option>
{/section}
</select></td>
</tr>
<tr>
<td class="alignRight"><b>* Name:</b></td>
<td><input type="text" size="30" maxlength="100" name="vintage_name" value="{$smarty.session.vintage_name}" /></td>
</tr>
<tr>
<td class="alignRight"><b>* Product Id:</b></td>
<td><input type="text" size="30" maxlength="48" name="product_id" value="{$smarty.session.product_id}" /> <i>Product Id from Quickbooks</i></td>
</tr>
<tr>
<td class="alignRight"><b>UPC:</b></td>
<td><input type="text" size="30" maxlength="48" name="upc" value="{$smarty.session.upc}" /></td>
</tr>
<tr>
<td class="alignRight"><b>TTB:</b></td>
<td><input type="text" size="30" maxlength="48" name="ttb" value="{$smarty.session.ttb}" /> <i>for ttb.gov</i></td>
</tr>
<tr>
<td class="alignRight"><b>* Group:</b></td>
<td>YES<input type="radio" value="1" name="grup"{if $smarty.session.grup == '1'} checked{/if} /> NO<input type="radio" value="0" name="grup"{if $smarty.session.grup == '0' || !$smarty.session.grup} checked{/if} /> <i>Winery, Varietals, and Type are not required if this is Yes</i></td>
</tr>
<tr>
<td class="alignRight"><b>Bottles #:</b></td>
<td><input type="text" size="3" maxlength="3" name="bottles" value="{$smarty.session.bottles}" />  <i>Number of bottles in a sampler; default value is 1</i></td>
</tr>
<tr>
<td class="alignRight"><b>Bottles per case:</b></td>
<td><input type="text" size="3" maxlength="3" name="bottles_per_case" value="{$smarty.session.bottles_per_case}" />  <i>Number of bottles in a case; default value is 12</i></td>
</tr><tr>
<td class="alignRight"><b>Shipping:</b></td>
<td>YES<input type="radio" value="1" name="shipping"{if $smarty.session.shipping == '1'} checked{/if} /> NO<input type="radio" value="0" name="shipping"{if $smarty.session.shipping == '0'} checked{/if} />  <i>No means free shipping for this item</i></td>
</tr>
<tr>
<td class="alignRight"><b>* Varietal 1:</b></td>
<td><select name="v_id_1">
<option value=""></option>
{section name=bit loop=$varietals}
<option value="{$varietals[bit].v_id}"{if $smarty.session.v_id_1 == $varietals[bit].v_id} selected{/if}>{$varietals[bit].v_name}</option>
{/section}
</select></td>
</tr>
<tr>
<td class="alignRight"><b>Varietal 2:</b></td>
<td><select name="v_id_2">
<option value=""></option>
{section name=bit loop=$varietals}
<option value="{$varietals[bit].v_id}"{if $smarty.session.v_id_2 == $varietals[bit].v_id} selected{/if}>{$varietals[bit].v_name}</option>
{/section}
</select></td>
</tr>
<tr>
<td class="alignRight"><b>Varietal 3:</b></td>
<td><select name="v_id_3">
<option value=""></option>
{section name=bit loop=$varietals}
<option value="{$varietals[bit].v_id}"{if $smarty.session.v_id_3 == $varietals[bit].v_id} selected{/if}>{$varietals[bit].v_name}</option>
{/section}
</select></td>
</tr>
<tr>
<td class="alignRight"><b>Varietal 4:</b></td>
<td><select name="v_id_4">
<option value=""></option>
{section name=bit loop=$varietals}
<option value="{$varietals[bit].v_id}"{if $smarty.session.v_id_4 == $varietals[bit].v_id} selected{/if}>{$varietals[bit].v_name}</option>
{/section}
</select></td>
</tr>
<tr>
<td class="alignRight"><b>Varietal 5:</b></td>
<td><select name="v_id_5">
<option value=""></option>
{section name=bit loop=$varietals}
<option value="{$varietals[bit].v_id}"{if $smarty.session.v_id_5 == $varietals[bit].v_id} selected{/if}>{$varietals[bit].v_name}</option>
{/section}
</select></td>
</tr>
<tr>
<td class="alignRight"><b>* Type:</b></td>
<td><select name="type_id">
<option value="0">Choose</option>
{section name=bit loop=$types}
<option	value="{$types[bit].type_id}"{if $smarty.session.type_id == $types[bit].type_id} selected{/if}>{$types[bit].type_name}</option>
{/section}
</select>
</td>
</tr>
<tr>
<td class="alignRight"><b>Appellation:</b></td>
<td><input type="text" size="30" maxlength="48" name="appellation" value="{$smarty.session.appellation}" /></td>
</tr>
<tr>
<td class="alignRight"><b>Country:</b></td>
<td><select name="country_id">
<option value="0">Select</option>
{section name=bit loop=$ncc}
<option value="{$ncc[bit].c_id}"{if $ncc[bit].c_id == $smarty.session.country_id} selected{/if}>{$ncc[bit].full_name}</option>
{/section}
</select></td>
</tr>
<tr>
<td class="alignRight"><b>Year:</b></td>
<td><input type="text" size="4" maxlength="4" name="year" value="{$smarty.session.year}" /></td>
</tr>
<tr>
<td class="alignRight"><b>Size:</b></td>
<td><input type="text" size="4" maxlength="4" name="size" value="{$smarty.session.size}" /> ml</td>
</tr>
<tr>
<td class="alignRight"><b>Alcohol:</b></td>
<td><input type="text" size="4" maxlength="6" name="alcohol" value="{$smarty.session.alcohol}" /></td>
</tr>
<tr>
<td class="alignRight"><b>Residual Sugar:</b></td>
<td><input type="text" size="4" maxlength="6" name="residual_sugar" value="{$smarty.session.residual_sugar}" /></td>
</tr>
<tr>
<td class="alignRight"><b>Acidity:</b></td>
<td><input type="text" size="4" maxlength="6" name="acidity" value="{$smarty.session.acidity}" /></td>
</tr>
<tr><td class="alignRight"><b>Organic:</b></td>
<td>YES<input type="radio" value="1" name="organic"{if $smarty.session.organic == '1'} checked{/if} /> NO<input type="radio" value="0" name="organic"{if $smarty.session.organic == '0'} checked{/if} /></td></tr>
<tr><td class="alignRight"><b>Price:</b></td>
<td><input type="text" size="5" maxlength="6" name="price" value="{$smarty.session.price}" /> <i><b>Warning:</b> make sure we have a Quickbooks Product Id in the "Product Id" field for this product before pricing it and make it available for purchase. Otherwise, the T-Hub order import to Quickbooks will fail.</td></tr>
<tr><td class="alignRight"><b>Sale:</b></td><td><input type="text" size="5" maxlength="6" name="sale" value="{$smarty.session.sale}" /></td></tr>
<tr><td class="alignRight"><b>Wineclub Price:</b></td><td><input type="text" size="5" maxlength="6" name="wineclub_price" value="{$wineclub_price}" /> <i>Only wine club members will see this price.</i></td></tr>
<tr><td class="alignRight"><b>Wineclub Sale:</b></td><td><input type="text" size="5" maxlength="6" name="wineclub_sale" value="{$wineclub_sale}" /> <i>Only wine club members will see this sale price.</i></td></tr>

<tr>
<td class="alignRight"><b>Active:</b></td>
<td>YES<input type="radio" value="0" name="inactive"{if $smarty.session.inactive == '0'} checked{/if} /> NO<input type="radio" value="1" name="inactive"{if $smarty.session.inactive == '1'} checked{/if} /></td>
</tr>
<tr>
<td class="alignRight"><b>In Website:</b></td>
<td>YES<input type="radio" value="1" name="online_store"{if $smarty.session.online_store == '1'} checked{/if} /> NO<input type="radio" value="0" name="online_store"{if $smarty.session.online_store == '0'} checked{/if} /></td>
</tr>
<tr>
<td class="alignRight"><b>In Stock:</b></td>
<td>YES<input type="radio" value="1" name="stock"{if $smarty.session.stock == '1'} checked{/if} /> NO<input type="radio" value="0" name="stock"{if $smarty.session.stock == '0'} checked{/if} /></td>
</tr>
<tr>
<td class="alignRight"><b>Low Inventory:</b></td>
<td>YES<input type="radio" value="1" name="low_inventory"{if $smarty.session.low_inventory == '1'} checked{/if} /> NO<input type="radio" value="0" name="low_inventory"{if $smarty.session.low_inventory == '0'} checked{/if} /></td>
</tr>
<tr>
<td class="alignRight"><b>Spotlight:</b></td>
<td>YES<input type="radio" value="1" name="spotlight"{if $smarty.session.spotlight == '1'} checked{/if} /> NO<input type="radio" value="0" name="spotlight"{if $smarty.session.spotlight == '0'} checked{/if} /></td>
</tr>
<tr>
<td class="alignRight"><b>Top Pick:</b></td>
<td>YES<input type="radio" value="1" name="top_pick"{if $smarty.session.top_pick == '1'} checked{/if} /> NO<input type="radio" value="0" name="top_pick"{if $smarty.session.top_pick == '0'} checked{/if} /></td>
</tr>
<tr>
<td class="alignRight"><b>Image:</b></td>
<td><input type="file" name="upload_file" /> <i>jpeg only and less than 500k</i></td>
</tr>
<tr>
<td class="alignRight"><b>Is Label?:</b></td>
<td>YES<input type="radio" value="1" name="is_label"{if $smarty.session.is_label == '1'} checked{/if} /> NO<input type="radio" value="0" name="is_label"{if $smarty.session.is_label == '0'} checked{/if} /></td>
</tr>
<tr>
<td class="alignRight"><b>Review Title &amp; URL:</b></td>
<td><input type="text" size="20" maxlength="48" name="review_title" value="{$smarty.session.review_title}" /> <input type="text" size="40" maxlength="255" name="review_url" value="{$smarty.session.review_url}" /> <i>Everything including http://</i></td>
</tr>
<tr>
<td class="alignRight"><b>Notes:</b></td>
<td><textarea cols="60" rows="10" name="notes">{$smarty.session.notes}</textarea></td>
</tr>
<tr><td colspan="2">&nbsp;</td></tr>
<tr><td colspan="2"><h3>Techsheet Information</h3></td></tr>
<tr><td colspan="2">&nbsp;</td></tr>
<tr>
<td class="alignRight"><b>Maceration and Aging:</b></td>
<td><textarea cols="60" rows="3" name="aging">{$smarty.session.aging}</textarea></td>
</tr>
<tr>
<td class="alignRight"><b>Grape Composition:</b></td>
<td><textarea cols="60" rows="3" name="composition">{$smarty.session.composition}</textarea></td>
</tr>
<tr>
<td class="alignRight"><b>Climate:</b></td>
<td><input type="text" size="50" maxlength="150" name="climate" value="{$smarty.session.climate}" /></td>
</tr>
<tr>
<td class="alignRight"><b>Soils:</b></td>
<td><input type="text" size="50" maxlength="150" name="soils" value="{$smarty.session.soils}" /></td>
</tr>
<tr>
<td class="alignRight"><b>Exposure:</b></td>
<td><input type="text" size="50" maxlength="150" name="exposure" value="{$smarty.session.exposure}" /></td>
</tr>
<tr>
<td class="alignRight"><b>Notes and Pairings:</b></td>
<td><textarea cols="60" rows="10" name="notespairings">{$smarty.session.notespairings}</textarea></td>
</tr>
<tr>
<td class="alignRight">&nbsp;</td>
<td><input type="submit" value="Add Vintage" /></td>
</tr>
</table>
</form>