{if $tri}{assign var="page" value=$tri}{else}{assign var="page" value="0"}{/if}

{if $report == "solve_report"}
<div class="error">
Report in <a href="{$report_url}" target="_blank">{$report_url}</a> 
<br />Monthly Report in <a href="{$monthly_report_url}" target="_blank">{$monthly_report_url}</a> 
<br />Country Report in <a href="{$country_report_url}" target="_blank">{$country_report_url}</a> 
<br />Orders Report in <a href="{$orders_report_url}" target="_blank">{$orders_report_url}</a> 
<br />{$error}
</div>

<h2>Store Customers
<input type="hidden" name="page" value="{$page}" />
</h2>

<div >
{$paginator}
<table cellpadding="2" cellspacing="1">
{section name=bit loop=$customers}
<tr>
<td class="border1" ><a href="/amn/edit_customer/{$customers[bit].order_id}/">{$customers[bit].name}</a></td>
<td class="border1" >{$customers[bit].email}</td>
<td class="border1" >{$customers[bit].phone}</td>
<td class="border1" >{$customers[bit].full_address}</td>
<td class="border1" >{$customers[bit].state}</td>
<td class="border1" >{$customers[bit].placed}</td>
<td class="border1" >${$customers[bit].grand_total}</td>
</tr>
{/section}
</table>

{$paginator}
</div>

{else}
<div>
<p class="large">Click <a href="/amn/ny_customers/solve_reports/">here</a> for the Solve360 reports.
</p>
<h2>Montly Customers</h2>
<p class="large">
Number of orders this month: {$order_qty}
<br>
Number of orders last month: {$past_order_qty}
</p>
<table cellpadding="4" cellspacing="0" >
<tr>
<td class="nowrap" style="width:8%;border:none;"><b>Customer</b></td>
<td class="nowrap" style="width:5%;border:none;"><b>Email</b></td>
<td class="nowrap" style="width:5%;border:none;"><b>BDW orders</b></td>
<td class="nowrap" style="width:4%;border:none;"><b>State</b></td>
<td class="nowrap" style="width:5%;border:none;"><b>Order ID</b></td>
<td class="nowrap" style="width:5%;border:none;"><b>Placed</b></td>
<td class="nowrap" style="width:10%;border:none;"><b>Status</b></td>
<td class="nowrap" style="width:5%;border:none;"><b>Total</b></td>
</tr>
{section name=bit loop=$orders}
<tr>
<td class="nowrap" style="border:none;"><a href="/amn/edit_order/{$orders[bit].o_id}/">{$orders[bit].name}</a></td>
<td class="nowrap" style="border:none;">{$orders[bit].email}</td>
<td class="nowrap" style="border:none;">{$orders[bit].total_orders}</td>
<td class="nowrap" style="border:none;">{$orders[bit].state}</td>
<td class="nowrap" style="border:none;">{$orders[bit].o_id}</td>
<td class="nowrap" style="border:none;">{$orders[bit].placed}</td>
<td class="nowrap" style="border:none;">{$orders[bit].status}</td>
<td class="nowrap" style="border:none;">${$orders[bit].grand_total}</td>
</tr>
{/section}
</table>

</div>
{/if}