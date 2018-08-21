		{if $two == 'feed'}<div class="error">The blog RSS feed has been generated</div>{/if}
		<h2>Blue Danube Wine Site Administration</h2>
{if $orders}
		<table cellpadding="4" cellspacing="0">
			<tr>
				<td style="width:25%;"><b>Ordered By:</b></td>
				<td style="width:25%;"><b>Placed:</b></td>
				<td style="width:10%;"><b>ID#</b></td>
				<td style="width:20%;"><b>Status:</b></td>
				<td style="width:20%;"><b>Total:</b></td>
			</tr>
	{section name=bit loop=$orders}
			<tr>
				<td><a href="/amn/edit_order/{$orders[bit].o_id}/">{$orders[bit].name}</a></td>
				<td>{$orders[bit].placed}</td>
				<td>{$orders[bit].o_id}</td>
				<td>{$orders[bit].status}</td>
				<td>${$orders[bit].grand_total}</td>
			</tr>
	{/section}
		</table>
{else}
		<div style="text-align:center;padding:20px;" class="siz16 bld">No Unprocessed Orders Currently</div>
{/if}