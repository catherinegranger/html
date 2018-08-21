{assign var="page" value="0"}
<h2>Vintage Report</h2>
<div class="error">Report in {$filename} {$error}</div>


<p>
<table cellpadding="4" cellspacing="1">

{section name=bit loop=$vintages}
{/section}

{section name=bit loop=$vintages}
<tr>
<td class="border1" style="white-space:nowrap;">{$vintages[bit].wine_id}</td>
<td class="border1" style="white-space:nowrap;">{$vintages[bit].product_id}</td>
<td class="border1" style="white-space:nowrap;">{$vintages[bit].producer_name}</td>
<td class="border1" >{$vintages[bit].name}</td>
<td class="border1" >{$vintages[bit].bottle_size}</td>
<td class="border1" style="white-space:nowrap;text-align:center;">{$vintages[bit].unit_of_measure}</td>
<td class="border1" >{$vintages[bit].country}</td>
<td class="border1" >{$vintages[bit].region}</td>
<td class="border1" >{$vintages[bit].grapes}</td>
<td class="border1" >{$vintages[bit].organic}</td>
<td class="border1" >{$vintages[bit].vinification}</td>
<td class="border1" style="white-space:nowrap;text-align:left;">{$vintages[bit].description}</td>
</tr>
{/section}
</table>
</p>