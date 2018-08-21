{assign var="page" value="0"}
<h2>Price Posting</h2>
<div class="error">Report in {$filename} {$error}</div>
<table cellpadding="4" cellspacing="1">

{section name=bit loop=$vintages}
<tr>
<td class="border1" style="white-space:nowrap;">{$vintages[bit].post_type}</td>
<td class="border1" style="white-space:nowrap;">{$vintages[bit].post_month}</td>
<td class="border1" style="white-space:nowrap;">{$vintages[bit].post_year}</td>
<td class="border1" >{$vintages[bit].wholesaler}</td>
<td class="border1" >{$vintages[bit].bev_type}</td>
<td class="border1" >{$vintages[bit].prod_item}</td>
<td class="border1" >{$vintages[bit].combo_lim}</td>
<td class="border1" >{$vintages[bit].brand_reg}</td>
<td class="border1" >{$vintages[bit].ttb_id}</td>
<td class="border1" style="white-space:nowrap;;">{$vintages[bit].brand_name}</td>
<td class="border1" style="white-space:nowrap;;">{$vintages[bit].prod_name}</td>
<td class="border1" >{$vintages[bit].label_type}</td>
<td class="border1" >{$vintages[bit].prim_info}</td>
<td class="border1" >{$vintages[bit].distrib_id}</td>
<td class="border1" >{$vintages[bit].item_size}</td>
<td class="border1" >{$vintages[bit].um}</td>
<td class="border1" >{$vintages[bit].botpercase}</td>
<td class="border1" >{$vintages[bit].subpack}</td>
<td class="border1" >{$vintages[bit].vintage}</td>
<td class="border1" >{$vintages[bit].alcohol}</td>
<td class="border1" >{$vintages[bit].proof}</td>
<td class="border1" >{$vintages[bit].bot_price}</td>
<td class="border1" >{$vintages[bit].case_price}</td>
<td class="border1" >{$vintages[bit].bot_nyc}</td>
<td class="border1" >{$vintages[bit].case_nyc}</td>
<td class="border1" >{$vintages[bit].fullcase}</td>
<td class="border1" >{$vintages[bit].split_char}</td>
<td class="border1" >{$vintages[bit].fob}</td>
<td class="border1" >{$vintages[bit].nys_whole}</td>
<td class="border1" >{$vintages[bit].prod_item}</td>
<td class="border1" >{$vintages[bit].combo_disa}</td>
<td class="border1" >{$vintages[bit].combo_asse}</td>
<td class="border1" >{$vintages[bit].lim_avail}</td>
</tr>
{/section}
</table>
