{assign var="page" value="0"}
<h2>Vintage Price Report</h2>
<div class="error">Report in  <a href="{$report_url}" target="_blank">{$filename}</a> {$error}</div>
<table cellpadding="2" cellspacing="1">
<tr>
<td class="border1" style="white-space:nowrap;text-align:center;"><b>Product Id</b></td>
<td class="border1" style="white-space:nowrap;text-align:center;"><b>Winery</b></td>
<td class="border1" style="white-space:nowrap;text-align:center;"><b>Name</b></td>
<td class="border1" style="white-space:nowrap;text-align:center;"><b>Year</b></td>
<td class="border1" style="white-space:nowrap;text-align:center;"><b>Size</b></td>
<td class="border1" style="white-space:nowrap;text-align:center;"><b>CA Price</b></td>
</tr>
{section name=bit loop=$vintages}
<tr>
<td class="border1" style="white-space:nowrap;">{$vintages[bit].product_id}</td>
<td class="border1" >{$vintages[bit].winery}</td>
<td class="border1" >{$vintages[bit].vintage}</td>
<td class="border1" style="white-space:nowrap;text-align:center;">{$vintages[bit].year}</td>
<td class="border1" style="white-space:nowrap;text-align:center;">{$vintages[bit].size}</td>
<td class="border1" style="white-space:nowrap;text-align:right;">{$vintages[bit].ca_price}</td>
</tr>
{/section}
</table>
