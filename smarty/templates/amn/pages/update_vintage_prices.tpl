<h2>Update Vintage Prices</h2>
<div class="error">{$error}</div>
<table cellpadding="2" cellspacing="1">
<tr>
<td class="border1" style="white-space:nowrap;text-align:center;"><b>Product Id</b></td>
<td class="border1" style="white-space:nowrap;text-align:center;"><b>Winery</b></td>
<td class="border1" style="white-space:nowrap;text-align:center;"><b>Name</b></td>
<td class="border1" style="white-space:nowrap;text-align:center;"><b>Year</b></td>
<td class="border1" style="white-space:nowrap;text-align:center;"><b>Size</b></td>
<td class="border1" style="white-space:nowrap;text-align:center;"><b>CA Price</b></td>
<td class="border1" style="white-space:nowrap;text-align:center;"><b>Real name</b></td>
</tr>
{section name=bit loop=$vintages}
<tr>
<td class="border1" style="white-space:nowrap;">{$vintages[bit].0}</td>
<td class="border1" >{$vintages[bit].1}</td>
<td class="border1" >{$vintages[bit].2}</td>
<td class="border1" style="white-space:nowrap;text-align:center;">{$vintages[bit].3}</td>
<td class="border1" style="white-space:nowrap;text-align:center;">{$vintages[bit].4}</td>
<td class="border1" style="white-space:nowrap;text-align:right;">{$vintages[bit].5}</td>
<td class="border1" style="white-space:nowrap;text-align:left;">{$vintages[bit].6}</td>
</tr>
{/section}
</table>

