{assign var="page" value="0"}
<h2>Vintage Report</h2>
<div class="error">Report in {$filename} {$error}</div>
<table cellpadding="2" cellspacing="1">
<tr>
<td class="border1" style="white-space:nowrap;text-align:center;"><b>Product Id</b></td>
<td class="border1" style="white-space:nowrap;text-align:center;"><b>Winery</b></td>
<td class="border1" style="white-space:nowrap;text-align:center;"><b>Name</b></td>
<td class="border1" style="white-space:nowrap;text-align:center;"><b>Year</b></td>
<td class="border1" style="white-space:nowrap;text-align:center;"><b>Size</b></td>
<td class="border1" style="white-space:nowrap;text-align:center;"><b>Type</b></td>
<td class="border1" style="white-space:nowrap;text-align:center;"><b>Appellation</b></td>
<td class="border1" style="white-space:nowrap;text-align:center;"><b>Alcohol</b></td>
<td class="border1" style="white-space:nowrap;text-align:center;"><b>UPC</b></td>
<td class="border1" style="white-space:nowrap;text-align:center;"><b>TTB</b></td>
<td class="border1" style="white-space:nowrap;text-align:center;"><b>Price</b></td>
<td class="border1" style="white-space:nowrap;text-align:center;"><b>Sale</b></td>
<td class="border1" style="white-space:nowrap;text-align:center;"><b>Notes</b></td>
<td class="border1" style="white-space:nowrap;text-align:center;"><b>Image</b></td>
</tr>
{section name=bit loop=$vintages}
<tr>
<td class="border1" style="white-space:nowrap;">{$vintages[bit].product_id}</td>
<td class="border1" >{$vintages[bit].winery}</td>
<td class="border1" >{$vintages[bit].vintage}</td>
<td class="border1" style="white-space:nowrap;text-align:center;">{$vintages[bit].year}</td>
<td class="border1" style="white-space:nowrap;text-align:center;">{$vintages[bit].size}</td>
<td class="border1" style="white-space:nowrap;text-align:center;">{$vintages[bit].type}</td>
<td class="border1" >{$vintages[bit].appellation}</td>
<td class="border1" style="white-space:nowrap;text-align:center;">{$vintages[bit].alcohol}</td>
<td class="border1" style="white-space:nowrap;text-align:center;">{$vintages[bit].upc}</td>
<td class="border1" style="white-space:nowrap;text-align:center;">{$vintages[bit].ttb}</td>
<td class="border1" style="white-space:nowrap;text-align:right;">{$vintages[bit].price}</td>
<td class="border1" style="white-space:nowrap;text-align:right;">{$vintages[bit].sale}</td>
<td class="border1" >{$vintages[bit].notes}</td>
<td class="border1" >{$vintages[bit].image}</td>
</tr>
{/section}
</table>
