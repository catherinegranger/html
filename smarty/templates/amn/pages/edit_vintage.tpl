<h2>Update a Vintage</h2>

To update this vintage's varietals, just select the new choice from the dropdown selector and it will auto-update.  For all other items, update with the new data and click Update Vintage at the bottom.

<p><a href="/print/techsheet/{$two}" target="_blank">View the techsheet page &gt;&gt;</a></p>

		
{if $tri == 'too_small'}<div class="error">Image is too small or non-existent.</div>{/if}
{if $tri == 'too_big'}<div class="error">Image is too large.</div>{/if}
{if $tri == "success"}<div class="error">Vintage updated successfully! &nbsp; <a href="/wine/{if $grup == '1'}sampler/{/if}{$two}" target="_blank">View the wine page</a></div>{/if}
{if $tri == "error"}<div class="error">There was a problem.  Maybe a require field was left blank?</div>{/if}
{if $tri == "update_error"}<div class="error">Vintage update failed.</div>{/if}

<table cellpadding="2" cellspacing="2">
<tr>
<td>
<form action="/update_vintage_varietal/" method="post">
<input type="hidden" name="vint_id" value="{$two}" />
<input type="hidden" name="vv_id" value="{$vv_id_1}" />
<table cellpadding="3" cellspacing="2">
<tr>
<td style="width:15%;white-space:nowrap;" class="alignRight"><b>* Varietal 1:</b></td>
<td style="width:85%;"><select name="v_id" onchange="this.form.submit()">
<option value="delete"></option>
{section name=bit loop=$varietals}
<option value="{$varietals[bit].v_id}"{if $v_id_1 == $varietals[bit].v_id} selected{/if}>{$varietals[bit].name}</option>
{/section}
</select></td>
</tr>
</table>
</form>

<form action="/update_vintage_varietal/" method="post">
<input type="hidden" name="vint_id" value="{$two}" />
<input type="hidden" name="vv_id" value="{$vv_id_2}" />
<table cellpadding="3" cellspacing="2" style="width:100%;">
<tr>
<td style="width:15%;white-space:nowrap;" class="alignRight"><b>Varietal 2:</b></td>
<td style="width:85%;"><select name="v_id" onchange="this.form.submit()">
<option value="delete"></option>
{section name=bit loop=$varietals}
<option value="{$varietals[bit].v_id}"{if $v_id_2 == $varietals[bit].v_id} selected{/if}>{$varietals[bit].name}</option>
{/section}
</select></td>
</tr>
</table>
</form>

<form action="/update_vintage_varietal/" method="post">
<input type="hidden" name="vint_id" value="{$two}" />
<input type="hidden" name="vv_id" value="{$vv_id_3}" />
<table cellpadding="3" cellspacing="2" style="width:100%;">
<tr>
<td style="width:15%;white-space:nowrap" class="alignRight"><b>Varietal 3:</b></td>
<td style="width:85%;"><select name="v_id" onchange="this.form.submit()">
<option value="delete"></option>
{section name=bit loop=$varietals}
<option value="{$varietals[bit].v_id}"{if $v_id_3 == $varietals[bit].v_id} selected{/if}>{$varietals[bit].name}</option>
{/section}
</select></td>
</tr>
</table>
</form>

<form action="/update_vintage_varietal/" method="post">
<input type="hidden" name="vint_id" value="{$two}" />
<input type="hidden" name="vv_id" value="{$vv_id_4}" />
<table cellpadding="3" cellspacing="2" style="width:100%;">
<tr>
<td style="width:15%;white-space:nowrap" class="alignRight"><b>Varietal 4:</b></td>
<td style="width:85%;"><select name="v_id" onchange="this.form.submit()">
<option value="delete"></option>
{section name=bit loop=$varietals}
<option value="{$varietals[bit].v_id}"{if $v_id_4 == $varietals[bit].v_id} selected{/if}>{$varietals[bit].name}</option>
{/section}
</select></td>
</tr>
</table>
</form>

<form action="/update_vintage_varietal/" method="post">
<input type="hidden" name="vint_id" value="{$two}" />
<input type="hidden" name="vv_id" value="{$vv_id_5}" />
<table cellpadding="3" cellspacing="2" style="width:100%;">
<tr>
<td style="width:15%;white-space:nowrap" class="alignRight"><b>Varietal 5:</b></td>
<td style="width:85%;"><select name="v_id" onchange="this.form.submit()">
<option value="delete"></option>
{section name=bit loop=$varietals}
<option value="{$varietals[bit].v_id}"{if $v_id_5 == $varietals[bit].v_id} selected{/if}>{$varietals[bit].name}</option>
{/section}
</select></td>
</tr>
</table>
</form>

<form action="/update_vintage/" method="post">
<input type="hidden" name="vint_id" value="{$two}" />
<input type="hidden" name="vv_id" value="{$vv_id_1}" />
<table cellpadding="3" cellspacing="2" style="width:100%;">
<tr>
<td style="width:15%;" class="alignRight"><b>* Item Type:</b></td>
<td><select name="item_type">
	<option value="0"{if $item_type == '0'} selected{/if}>Vintage</option>
	<option value="2"{if $item_type == '2'} selected{/if}>Book</option>
</select></td>
</tr>
<td style="width:15%;" class="alignRight"><b>* Winery:</b></td>
<td style="width:85%;"><select name="wy_id">
<option value=""></option>
{section name=bit loop=$wineries}
<option value="{$wineries[bit].wy_id}"{if $wy_id == $wineries[bit].wy_id} selected{/if}>{$wineries[bit].name}</option>
{/section}
</select></td>
</tr>
<tr>
<td class="alignRight"><b>* Type:</b></td>
<td><select name="type_id">
<option value="0">Choose</option>
{section name=bit loop=$types}
<option	value="{$types[bit].type_id}"{if $type_id == $types[bit].type_id} selected{/if}>{$types[bit].name}</option>
{/section}
</select>
</td>
</tr>
<tr>
<td class="alignRight"><b>* Name:</b></td>
<td><input type="text" size="30" maxlength="100" name="vintage_name" value="{$vintage_name}" /></td>
</tr>
<tr>
<td class="alignRight"><b>* Product Id:</b></td>
<td><input type="text" size="30" maxlength="48" name="product_id" value="{$product_id}" /> <i>Product Id from Quickbooks</i></td>
</tr>
<tr>
<td class="alignRight"><b>UPC:</b></td>
<td><input type="text" size="30" maxlength="48" name="upc" value="{$upc}" /></td>
</tr>
<tr>
<td class="alignRight"><b>TTB:</b></td>
<td><input type="text" size="30" maxlength="48" name="ttb" value="{$ttb}" /> <i>for ttb.gov</i></td>
</tr>
<tr>
<td class="alignRight"><b>* Group:</b></td>
<td>YES<input type="radio" value="1" name="grup"{if $grup == '1'} checked{/if} /> NO<input type="radio" value="0" name="grup"{if $grup == '0'} checked{/if} /> <i>Winery, Varietals, and Type are not required if this is Yes</i></td>
</tr>
<tr>
<td class="alignRight"><b>Bottles #:</b></td>
<td><input type="text" size="3" maxlength="3" name="bottles" value="{$bottles}" />  <i>Number of bottles in a sampler; default value is 1</i></td>
</tr>
<tr>
<td class="alignRight"><b>Bottles per case:</b></td>
<td><input type="text" size="3" maxlength="3" name="bottles_per_case" value="{$bottles_per_case}" />  <i>Number of bottles in a case; default value is 12</i></td>
</tr>
<tr>
<td class="alignRight"><b>Shipping:</b></td>
<td>YES<input type="radio" value="1" name="shipping"{if $shipping == '1'} checked{/if} /> NO<input type="radio" value="0" name="shipping"{if $shipping == '0'} checked{/if} />  <i>No means free shipping for this item</i></td>
</tr>

<tr>
<td class="alignRight"><b>Appellation:</b></td>
<td><input type="text" size="30" maxlength="48" name="appellation" value="{$appellation}" /></td>
</tr>
<tr>
<td class="alignRight"><b>Country:</b></td>
<td><select name="country_id">
<option value="0">Select</option>
{section name=bit loop=$ncc}
<option value="{$ncc[bit].c_id}"{if $ncc[bit].c_id == $country_id} selected{/if}>{$ncc[bit].full_name}</option>
{/section}
</select></td>
</tr>
<tr>
<td class="alignRight"><b>Year:</b></td>
<td><input type="text" size="4" maxlength="4" name="year" value="{$year}" />  <i><b>Warning:</b> changing this field may compromise data integrity i.e. wrong product_id, tech sheet, alcohol level, and change the content of orders.</i></td>
</tr>
<tr>
<td class="alignRight"><b>Size:</b></td>
<td><input type="text" size="4" maxlength="4" name="size" value="{$size}" /> ml</td>
</tr>
<tr>
<td class="alignRight"><b>Alcohol:</b></td>
<td><input type="text" size="4" maxlength="4" name="alcohol" value="{$alcohol}" /></td>
</tr>
<tr>
<td class="alignRight"><b>Residual Sugar:</b></td>
<td><input type="text" size="4" maxlength="6" name="residual_sugar" value="{$residual_sugar}" /></td>
</tr>
<tr>
<td class="alignRight"><b>Acidity:</b></td>
<td><input type="text" size="4" maxlength="6" name="acidity" value="{$acidity}" /></td>
</tr>
<tr>
<td class="alignRight"><b>Organic:</b></td>
<td>YES<input type="radio" value="1" name="organic"{if $organic == '1'} checked{/if} /> NO<input type="radio" value="0" name="organic"{if $organic == '0'} checked{/if} /></td>
</tr>
<tr><td class="alignRight"><b>Price:</b></td>
<td><input type="text" size="5" maxlength="6" name="price" value="{$price}" /> 
{if !$product_id}
<i><b>Warning:</b> make sure we have a Quickbooks Product Id in the "Product Id" field for this product before pricing it and make it available for purchase. Otherwise, the T-Hub order import to Quickbooks will fail.</i>
{/if}
</td></tr>
<tr><td class="alignRight"><b>Sale:</b></td><td><input type="text" size="5" maxlength="6" name="sale" value="{$sale}" /></td></tr>
<tr><td class="alignRight"><b>Wineclub Price:</b></td><td><input type="text" size="5" maxlength="6" name="wineclub_price" value="{$wineclub_price}" /> <i>Only wine club members will see this price.</i></td></tr>
<tr><td class="alignRight"><b>Wineclub Sale:</b></td><td><input type="text" size="5" maxlength="6" name="wineclub_sale" value="{$wineclub_sale}" /> <i>Only wine club members will see this sale price.</i></td></tr>

<tr>
<td class="alignRight"><b>Active:</b></td>
<td>YES<input type="radio" value="0" name="inactive"{if $inactive == '0'} checked{/if} /> NO<input type="radio" value="1" name="inactive"{if $inactive == '1'} checked{/if} /></td>
</tr>
<tr>
<td class="alignRight"><b>In Website:</b></td>
<td>YES<input type="radio" value="1" name="online_store"{if $online_store == '1'} checked{/if} /> NO<input type="radio" value="0" name="online_store"{if $online_store == '0'} checked{/if} /> <i><b>Warning:</b> removing this product from the website will prevent the trade to access it and its technical information. It is ok to remove it if it is not sold by the trade anymore and there is a new vintage to replace it. If it is just sold-out for the webshop, please select In Stock:NO.</i></td>
</tr>
<tr>
<td class="alignRight"><b>In Stock:</b></td>
<td>YES<input type="radio" value="1" name="stock"{if $stock == '1'} checked{/if} /> NO<input type="radio" value="0" name="stock"{if $stock == '0'} checked{/if} /></td>
</tr>
<tr>
<td class="alignRight"><b>Low Inventory:</b></td>
<td>YES<input type="radio" value="1" name="low_inventory"{if $low_inventory == '1'} checked{/if} /> NO<input type="radio" value="0" name="low_inventory"{if $low_inventory == '0'} checked{/if} /></td>
</tr>
<tr>
<td class="alignRight"><b>Deleted:</b></td>
<td>YES<input type="radio" value="1" name="deleted"{if $deleted == '1'} checked{/if} /> NO<input type="radio" value="0" name="deleted"{if $deleted == '0'} checked{/if} /> <i><b>Warning:</b> do not delete products unless there are duplicates or mistakes.</i></td>
</tr>
<tr>
<td class="alignRight"><b>Show to:</b></td>
<td><select name="show">
	<option value="0"{if $show == '0'} selected{/if}>All</option>
	<option value="1"{if $show == '1'} selected{/if}>Webshop and CA/NY Trade only</option>
	<option value="2"{if $show == '2'} selected{/if}>Webshop and CA Trade only</option>
	<option value="3"{if $show == '3'} selected{/if}>Webshop only</option>
</select></td>
</tr>
<tr>
<td class="alignRight"><b>Image:</b></td>
<td>YES<input type="radio" value="1" name="image"{if $image == '1'} checked{/if} /> NO<input type="radio" value="0" name="image"{if $image == '0'} checked{/if} /></td>
</tr>
<tr>
<td class="alignRight"><b>Is Label?:</b></td>
<td>YES<input type="radio" value="1" name="is_label"{if $is_label == '1'} checked{/if} /> NO<input type="radio" value="0" name="is_label"{if $is_label == '0'} checked{/if} /></td>
</tr>
<tr>
<td class="alignRight"><b>Notes:</b></td>
<td><textarea cols="60" rows="12" name="notes">{$notes}</textarea></td>
</tr>
<tr><td colspan="2">&nbsp;</td></tr>
<tr><td colspan="2"><h3>Techsheet Information</h3></td></tr>
<tr><td colspan="2">&nbsp;</td></tr>
<tr>
<td class="alignRight"><b>Maceration and Aging:</b></td>
<td><textarea cols="60" rows="3" name="aging">{$aging}</textarea></td>
</tr>
<tr>
<td class="alignRight"><b>Grape Composition:</b></td>
<td><textarea cols="60" rows="3" name="composition">{$composition}</textarea></td>
</tr>
<tr>
<td class="alignRight"><b>Climate:</b></td>
<td><input type="text" size="50" maxlength="150" name="climate" value="{$climate}" /></td>
</tr>
<tr>
<td class="alignRight"><b>Soils:</b></td>
<td><input type="text" size="50" maxlength="150" name="soils" value="{$soils}" /></td>
</tr>
<tr>
<td class="alignRight"><b>Exposure:</b></td>
<td><input type="text" size="50" maxlength="150" name="exposure" value="{$exposure}" /></td>
</tr>
<tr>
<td class="alignRight"><b>Notes and Pairings:</b></td>
<td><textarea cols="60" rows="10" name="notespairings">{$notespairings}</textarea></td>
</tr>
<tr>
<td class="alignRight">&nbsp;</td>
<td><input type="submit" value="Update Vintage" /></td>
</tr>
</table>
</form>
		
<h2>New Vintage Review</h2>
<form action="/submit_vintage_review/" method="post">
<input type="hidden" name="vint_id" value="{$two}" />
<b>Review Title &amp; URL:</b> <input type="text" size="30" name="review_title" value="" /> <input type="text" size="30" name="review_url" value="" /> <input type="submit" value="Submit Review" />
</form>
{if $reviews}
<h2>Vintage Reviews</h2>
<table cellpadding="3" cellspacing="2" style="width:100%;">
<tr>
<td style="width:25%;"><b>Title</b></td>
<td style="width:35%;"><b>URL</b></td>
<td style="width:30%;">&nbsp;</td>
<td style="width:10%;">&nbsp;</td>
</tr>
</table>
{section name=rv loop=$reviews}
<form action="/update_vintage_review/" method="post">
<input type="hidden" name="rev_id" value="{$reviews[rv].rev_id}" />
<input type="hidden" name="vint_id" value="{$two}" />
<table cellpadding="3" cellspacing="2" style="width:100%;">
<tr>
<td style="width:25%;"><input type="text" size="20" maxlength="48" name="review_title" value="{$reviews[rv].title}" /></td>
<td style="width:35%;"><input type="text" size="40" maxlength="255" name="review_url" value="{$reviews[rv].url}" /></td>
<td style="width:30%;"><input type="submit" value="Update" name="Update" /> <input type="submit" value="Delete" name="Delete" /></td>
<td style="width:10%;"></td>
</tr>
</table>
</form>
{/section}
{/if}
</td>

<td>
<b>Update Image:</b><br />

<form action="/update_vintage_image/" method="post" enctype="multipart/form-data">
<input type="hidden" name="vint_id" value="{$two}" />
<input type="file" name="upload_file" /><br />&nbsp;<br />
<input type="submit" value="Submit" class="sbt" />
</form>

{if $image == '1'}<br /><img style="width:200px;" src="/img/bottles/{$two}.jpg" alt="{$name} {$year}" />{/if}
</td>
</tr>
</table>
<br />&nbsp;<br />




