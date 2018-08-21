{assign var="page" value="0"}
<h2>Vintage Report</h2>
<div class="error">Report in {$filename} {$error}</div>
<table cellpadding="4" cellspacing="1">

{section name=bit loop=$vintages}
<tr>
<td class="border1" style="white-space:nowrap;">{$vintages[bit].product_id}</td>
<td class="border1" style="white-space:nowrap;">{$vintages[bit].producer_name}</td>
<td class="border1" >{$vintages[bit].product_name}</td>
<td class="border1" style="white-space:nowrap;text-align:center;">{$vintages[bit].vintage}</td>
<td class="border1" style="white-space:nowrap;text-align:center;">{$vintages[bit].size}</td>
<td class="border1" style="white-space:nowrap;text-align:center;">{$vintages[bit].product_style}</td>
<td class="border1" >{$vintages[bit].grapes}</td>
<td class="border1" >{$vintages[bit].appellation}</td>
<td class="border1" style="white-space:nowrap;text-align:center;">{$vintages[bit].alcohol}</td>
<td class="border1" style="white-space:nowrap;text-align:center;">{$vintages[bit].upc}</td>
<td class="border1" style="white-space:nowrap;text-align:center;">{$vintages[bit].ttb}</td>
<td class="border1" style="white-space:nowrap;text-align:right;">{$vintages[bit].frontline}</td>
<td class="border1" style="white-space:nowrap;text-align:left;">{$vintages[bit].discount}</td>
<td class="border1" style="white-space:nowrap;text-align:left;">{$vintages[bit].description}</td>
</tr>
{/section}
</table>
