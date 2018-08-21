{if $two == 'success'}<div class="error">Your discount has been succesfully entered.</div>{/if}
{if $two == 'no_name'}<div class="error">Discount name missing</div>{/if}
{if $two == 'updated'}<div class="error">Discount updated</div>{/if}

<h2>Enter New Discount</h2>

<form id="article" action="/enter_discount/" method="post" ">
<table cellpadding="4" cellspacing="0">
<tr>
<td style="text-align:right;"><b>Name:</b></td>
<td><input type="text" size="10" maxlength="30" name="discount_name" value="{$smarty.session.discount_name}" /></td>
</tr>
<tr>
<td style="text-align:right;"><b>Discount Type:</b></td>
<td>
<select name="discount_type" >
	<option value="0"{if $discount_type == '0'} selected{/if}>General</option>
	<option value="1"{if $discount_type == '1'} selected{/if}>Winery</option>
	<option value="2"{if $discount_type == '2'} selected{/if}>Wine</option>
	<option value="9"{if $discount_type == '9'} selected{/if}>Wine Type</option>
	<option value="3"{if $discount_type == '3'} selected{/if}>Appellation</option>
	<option value="7"{if $discount_type == '7'} selected{/if}>Country</option>
	<option value="4"{if $discount_type == '4'} selected{/if}>Free Shipping</option>
	<option value="5"{if $discount_type == '5'} selected{/if}>One Time</option>
	<option value="6"{if $discount_type == '6'} selected{/if}>One Time Club</option>
	<option value="8"{if $discount_type == '8'} selected{/if}>One Time Club 6 for 5</option>
</select>
</td>
<tr>
<td style="text-align:right;"><b>Apply To:</b></td>
<td>
<select name="apply_to" >
	<option value="0"{if $apply_to == '0'} selected{/if}>Regular</option>
	<option value="1"{if $apply_to == '1'} selected{/if}>Specials</option>
	<option value="2"{if $apply_to == '2'} selected{/if}>All</option>
</select>
</td>
</tr>
<tr>
<td style="width: 20%;text-align:right;"><b>From Date:</b></td>
<td style="width: 80%;">MM<input type="text" size="2" maxlength="2" name="from_month" value="{$smarty.session.from_month}" /> DD<input type="text" size="2" maxlength="2" name="from_day" value="{$smarty.session.from_day}" /> YYYY<input type="text" size="4" maxlength="4" name="from_year" value="{$smarty.session.from_year}" /> </td>
</tr>
<tr>
<td style="width: 20%;text-align:right;"><b>To Date:</b></td>
<td style="width: 80%;">MM<input type="text" size="2" maxlength="2" name="to_month" value="{$smarty.session.to_month}" /> DD<input type="text" size="2" maxlength="2" name="to_day" value="{$smarty.session.to_day}" /> YYYY<input type="text" size="4" maxlength="4" name="to_year" value="{$smarty.session.to_year}" /> </td>
</tr>
<tr>
<td style="text-align:right;"><b>Discount Type Value (Integer):</b></td>
<td><input type="text" size="10" maxlength="10" name="discount_type_value" value="{$smarty.session.discount_type_value}" /></td>
</tr>
<tr>
<td style="text-align:right;"><b>Discount Type Value (String):</b></td>
<td><input type="text" size="20" maxlength="50" name="discount_type_value_string" value="{$smarty.session.discount_type_value_string}" /></td>
</tr>
<tr>
<td style="text-align:right;"><b>Discount Percent:</b></td>
<td><input type="text" size="3" maxlength="3" name="discount_percent" value="{$smarty.session.discount_percent}" /> %</td>
</tr>
<tr>
<td style="text-align:right;"><b>Discount Value:</b></td>
<td><input type="text" size="10" maxlength="10" name="discount_value" value="{$smarty.session.discount_value}" /></td>
</tr>
<tr>
<td style="text-align:right;"><b>Mininum Bottles:</b></td>
<td><input type="text" size="3" maxlength="3" name="min_bottles" value="{$smarty.session.min_bottles}" /></td>
</tr>

<tr>
<td style="text-align:right;padding-top:25px;">&nbsp;</td>
<td style="padding-top:25px;">
<input type="submit" value="Submit" class="sbt" style="float:left;" />

</td>
</tr>
</table>
</form>


