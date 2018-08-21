<div class="error">
{$filename}
<br />
first email = {$first_email}
</div>

<h2>Collado Customers</h2>

<div>
<table cellpadding="2" cellspacing="1">
{section name=bit loop=$customers}
<tr>
<td class="border1" ><a href="/amn/edit_customer/{$customers[bit].order_id}/">{$customers[bit].name}</a></td>
<td class="border1" >{$customers[bit].email}</td>
<td class="border1" >{$customers[bit].phone}</td>
<td class="border1" >{$customers[bit].full_address}</td>
<td class="border1" >{$customers[bit].state}</td>
<td class="border1" >{$customers[bit].placed}</td>
<td class="border1" >{$customers[bit].order_status}</td>
<td class="border1" >${$customers[bit].grand_total}</td>
</tr>
{/section}
</table>
</div>