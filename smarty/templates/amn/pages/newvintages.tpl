{if $tri}{assign var="page" value=$tri}{else}{assign var="page" value="0"}{/if}
		<form action="/sort_vintages/" method="post">
		<h2>View and Update Vintages
		<input type="hidden" name="page" value="{$page}" />
		<select name="wy_id" onchange="this.form.submit();">
		<option value="all">All</option>
{section name="bit" loop=$wys}
		<option value="{$wys[bit].wy_id}"{if $two == $wys[bit].wy_id} selected{/if}>{$wys[bit].name}</option>
{/section}
		<option value="samplers"{if $two == 'samplers'} selected{/if}>Samplers</option>
		</select>
		</h2>
		</form>
		
		{if $tri == "success"}<div class="error">Vintage updated successfully!</div>{/if}
		{if $tri == "delete"}<div class="error">Vintage has been deleted.</div>{/if}
		{if $tri == "undelete"}<div class="error">Vintage has been undeleted.</div>{/if}
		{if $tri == "error"}<div class="error">There was a problem.</div>{/if}
		
		{$paginator}
		
		<table cellpadding="4" cellspacing="1">
			<tr>
				<td class="border1" style="width:30%;"><b>Winery</b></td>
				<td class="border1" style="width:20%;"><b>Vintage Name</b></td>
				<td class="border1" style="width:10%;text-align:center;"><b>Year</b></td>
				<td class="border1" style="width:10%;text-align:center;"><b>Price</b></td>
				<td class="border1" style="width:10%;text-align:center;"><b>Stock?</b></td>
				<td class="border1" style="width:10%;text-align:center;"><b>Edit</b></td>
				<td class="border1" style="width:10%;text-align:center;"><b>Delete?</b></td>
			</tr>
		{section name=bit loop=$vintages}
			<tr>
				<td class="border1"><b>{$vintages[bit].winery}</b></a></td>
				<td class="border1"><b>{$vintages[bit].vintage}</b></a></td>
				<td class="border1" style="text-align:center;">{$vintages[bit].year}</td>
				<td class="border1" style="text-align:center;">{if $vintages[bit].price > 0}${$vintages[bit].price}{else}-{/if}</td>
				<td class="border1" style="text-align:center;">{if $vintages[bit].stock == '1'}YES{else}NO{/if}</td>
				<td class="border1" style="text-align:center;"><a href="/amn/edit_vintage/{$vintages[bit].vint_id}/">YES</a></td>
				<td class="border1" style="text-align:center;">{if $vintages[bit].deleted == '0'}<a href="/amn/vintages/{$two}/{$page}/delete/{$vintages[bit].vint_id}/">YES</a>{else}<a href="/amn/vintages/{$two}/{$page}/undelete/{$vintages[bit].vint_id}/">NO</a>{/if}</td>
			</tr>
		{/section}
		</table>
		
		{$paginator}