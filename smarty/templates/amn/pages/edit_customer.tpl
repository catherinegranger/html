
<div style="margin-left:10px;width:750px;">

<br />
<h3>{$first_name} {$last_name}</h3>

{$address1}
{if $address2}<br />{$address2}{/if}<br />
{$city}, {$state} {$zipcode}<br />
{$email}<br />
{$phone}<br />
<br />
<table cellpadding="2" cellspacing="0">
<tr>
<td style="width:5%;"><b>Placed</b></td>
<td style="width:5%;white-space:nowrap;"><b>Product Id</b></td>
<td style="width:50%;"><b>Item</b></td>
<td style="width:7%;text-align:right;"><b>Quantity</b></td>
<td style="width:9%;text-align:right;"><b>Unit Price</b></td>
<td style="width:9%;text-align:right;"><b>Total</b></td>
</tr>
<tr><td colspan="6" style="border-top: 1px dotted #aeaeae; padding: 3px;"></td></tr>
{section name=bit loop=$items}
<tr>
<td style="width:5%;white-space:nowrap;">{$items[bit].placed}</td>
<td>{$items[bit].product_id}</td>
<td>{$items[bit].ident}</td>
<td style="text-align:right;">{$items[bit].quantity}</td>
<td style="text-align:right;">${$items[bit].price}</td>
<td style="text-align:right;">${$items[bit].total_price}</td>
</tr>
{/section}
</table>
<br /><br />


</div>

