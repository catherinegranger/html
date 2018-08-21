{assign var="page" value="0"}
<h2>Customer Export</h2>
<div class="error">Report in {$filename} {$error}</div>
<div>
<table style="width:50%;" cellpadding="2" cellspacing="1">

{section name=bit loop=$recipients}
<tr>
<td class="border1" style="width:5%;white-space:nowrap;">{$recipients[bit].name}</td>
<td class="border1" style="width:3%;">{$recipients[bit].email}</td>
<td class="border1" style="width:1%;white-space:nowrap;">{$recipients[bit].phone}</td>
<td class="border1" style="width:15%;white-space:nowrap;">{$recipients[bit].address}</td>
<td class="border1" style="width:5%;white-space:nowrap;">{$recipients[bit].city}</td>
<td class="border1" style="width:1%;">{$recipients[bit].state}</td>
<td class="border1" style="width:1%;">{$recipients[bit].zipcode}</td>
<td class="border1" style="width:2%;white-space:nowrap;">{$recipients[bit].country}</td>
<td class="border1" style="width:15%;white-space:nowrap;">{$recipients[bit].ship_address}</td>
<td class="border1" style="width:5%;white-space:nowrap;">{$recipients[bit].ship_city}</td>
<td class="border1" style="width:1%;">{$recipients[bit].ship_state}</td>
<td class="border1" style="width:1%;">{$recipients[bit].ship_zipcode}</td>
<td class="border1" style="width:2%;white-space:nowrap;">{$recipients[bit].ship_country}</td>
<td class="border1" style="width:2%;white-space:nowrap;">{$recipients[bit].type}</td>
</tr>
{/section}
</table>
</div>