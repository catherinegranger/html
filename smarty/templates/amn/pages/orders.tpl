<h2>Order History</h2>
<div>
Welcome {$display_name}!
</div>
<br>
<table cellpadding="4" cellspacing="0" >
<tr><td colspan="8">{$pages}</td></tr>
<tr>
<td colspan="4"><b>Showing {$two} orders</b></td>
<td colspan="4" style="text-align:right;"><a href="/amn/orders/active/0/">Show Active</a> | <a href="/amn/orders/suspended/0/">Show Suspended</a> | <a href="/amn/orders/all/">Show All</a></td>
</tr>
<tr>
<td class="nowrap" style="width:8%;border:none;"><b>Ordered By</b></td>
<td class="nowrap" style="width:8%;border:none;"><b>Ship To</b></td>
<td class="nowrap" style="width:4%;border:none;"><b>State</b></td>
<td class="nowrap" style="width:5%;border:none;"><b>Placed</b></td>
<td class="nowrap" style="width:5%;border:none;"><b>ID#</b></td>
<td class="nowrap" style="width:10%;border:none;"><b>Status</b></td>
<td class="nowrap" style="width:5%;border:none;"><b>Total</b></td>
<td  style="border:none;"><b>Instructions</b></td>
</tr>
{section name=bit loop=$orders}
<tr>
<td class="nowrap" style="border:none;"><a href="/amn/edit_order/{$orders[bit].o_id}/">{$orders[bit].name}</a></td>
<td class="nowrap" style="border:none;">{$orders[bit].ship_to}</td>
<td class="nowrap" style="border:none;">{$orders[bit].ship_state}</td>
<td class="nowrap" style="border:none;">{$orders[bit].placed}</td>
<td class="nowrap" style="border:none;">{$orders[bit].o_id}</td>
<td class="nowrap" style="border:none;">{$orders[bit].status}</td>
<td class="nowrap" style="border:none;">${$orders[bit].grand_total}</td>
<td  style="border:none;">{$orders[bit].instructions}</td>
</tr>
{/section}
<tr><td colspan="8">{$pages}</td></tr>
</table>
