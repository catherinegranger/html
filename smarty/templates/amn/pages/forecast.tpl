<h2>View Past 8 Quarters of Sales and 4 Quarters of Forecast</h2>

<table cellpadding="4" cellspacing="1">
<tr>
<td class="border1" style="width:35%;text-align:center;"><b>Product Name</b></td>
<td class="border1" style="width:5%;text-align:center;white-space:nowrap;"><b>Total</b></td>
<td class="border1" style="width:5%;text-align:center;"><b>Q01</b></td>
<td class="border1" style="width:5%;text-align:center;"><b>Q02</b></td>
<td class="border1" style="width:5%;text-align:center;"><b>Q03</b></td>
<td class="border1" style="width:5%;text-align:center;"><b>Q04</b></td>
<td class="border1" style="width:5%;text-align:center;"><b>Q11</b></td>
<td class="border1" style="width:5%;text-align:center;"><b>Q12</b></td>
<td class="border1" style="width:5%;text-align:center;"><b>Q13</b></td>
<td class="border1" style="width:5%;text-align:center;"><b>Q14</b></td>
<td class="border1 rdd" style="width:5%;text-align:center;"><i><b>Q21</b></i></td>
<td class="border1 rdd" style="width:5%;text-align:center;"><i><b>Q22</b></i></td>
<td class="border1 rdd" style="width:5%;text-align:center;"><i><b>Q23</b></i></td>
<td class="border1 rdd" style="width:5%;text-align:center;"><i><b>Q24</b></i></td>
</tr>
{section name=bit loop=$vintages}
<tr>
<td class="border1" style="white-space:nowrap;"><b>{$vintages[bit].product_name}</b></td>
<td class="border1" style="white-space:nowrap;text-align:right;"><b>{$vintages[bit].total_qty}</b></td>
<td class="border1" style="white-space:nowrap;text-align:right;"><b>{$vintages[bit].q01}</b></td>
<td class="border1" style="white-space:nowrap;text-align:right;"><b>{$vintages[bit].q02}</b></td>
<td class="border1" style="white-space:nowrap;text-align:right;"><b>{$vintages[bit].q03}</b></td>
<td class="border1" style="white-space:nowrap;text-align:right;"><b>{$vintages[bit].q04}</b></td>
<td class="border1" style="white-space:nowrap;text-align:right;"><b>{$vintages[bit].q11}</b></td>
<td class="border1" style="white-space:nowrap;text-align:right;"><b>{$vintages[bit].q12}</b></td>
<td class="border1" style="white-space:nowrap;text-align:right;"><b>{$vintages[bit].q13}</b></td>
<td class="border1" style="white-space:nowrap;text-align:right;"><b>{$vintages[bit].q14}</b></td>
<td class="border1 rdd" style="white-space:nowrap;text-align:right;"><i><b>{$vintages[bit].q21}</b></i></td>
<td class="border1 rdd" style="white-space:nowrap;text-align:right;"><i><b>{$vintages[bit].q22}</b></i></td>
<td class="border1 rdd" style="white-space:nowrap;text-align:right;"><i><b>{$vintages[bit].q23}</b></i></td>
<td class="border1 rdd" style="white-space:nowrap;text-align:right;"><i><b>{$vintages[bit].q24}</b></i></td>
</tr>
{/section}
</table>
