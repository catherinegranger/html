<?php
/* Smarty version 3.1.30, created on 2018-04-23 22:35:33
  from "/var/www/html/smarty/templates/amn/pages/add_discount.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5ade5fb5b41054_64622439',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e6a4e1ea8daf16075c0f061e4614a13587f72c37' => 
    array (
      0 => '/var/www/html/smarty/templates/amn/pages/add_discount.tpl',
      1 => 1523659342,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ade5fb5b41054_64622439 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['two']->value == 'success') {?><div class="error">Your discount has been succesfully entered.</div><?php }
if ($_smarty_tpl->tpl_vars['two']->value == 'no_name') {?><div class="error">Discount name missing</div><?php }
if ($_smarty_tpl->tpl_vars['two']->value == 'updated') {?><div class="error">Discount updated</div><?php }?>

<h2>Enter New Discount</h2>

<form id="article" action="/enter_discount/" method="post" ">
<table cellpadding="4" cellspacing="0">
<tr>
<td style="text-align:right;"><b>Name:</b></td>
<td><input type="text" size="10" maxlength="30" name="discount_name" value="<?php echo $_SESSION['discount_name'];?>
" /></td>
</tr>
<tr>
<td style="text-align:right;"><b>Discount Type:</b></td>
<td>
<select name="discount_type" >
	<option value="0"<?php if ($_smarty_tpl->tpl_vars['discount_type']->value == '0') {?> selected<?php }?>>General</option>
	<option value="1"<?php if ($_smarty_tpl->tpl_vars['discount_type']->value == '1') {?> selected<?php }?>>Winery</option>
	<option value="2"<?php if ($_smarty_tpl->tpl_vars['discount_type']->value == '2') {?> selected<?php }?>>Wine</option>
	<option value="9"<?php if ($_smarty_tpl->tpl_vars['discount_type']->value == '9') {?> selected<?php }?>>Wine Type</option>
	<option value="3"<?php if ($_smarty_tpl->tpl_vars['discount_type']->value == '3') {?> selected<?php }?>>Appellation</option>
	<option value="7"<?php if ($_smarty_tpl->tpl_vars['discount_type']->value == '7') {?> selected<?php }?>>Country</option>
	<option value="4"<?php if ($_smarty_tpl->tpl_vars['discount_type']->value == '4') {?> selected<?php }?>>Free Shipping</option>
	<option value="5"<?php if ($_smarty_tpl->tpl_vars['discount_type']->value == '5') {?> selected<?php }?>>One Time</option>
	<option value="6"<?php if ($_smarty_tpl->tpl_vars['discount_type']->value == '6') {?> selected<?php }?>>One Time Club</option>
	<option value="8"<?php if ($_smarty_tpl->tpl_vars['discount_type']->value == '8') {?> selected<?php }?>>One Time Club 6 for 5</option>
</select>
</td>
<tr>
<td style="text-align:right;"><b>Apply To:</b></td>
<td>
<select name="apply_to" >
	<option value="0"<?php if ($_smarty_tpl->tpl_vars['apply_to']->value == '0') {?> selected<?php }?>>Regular</option>
	<option value="1"<?php if ($_smarty_tpl->tpl_vars['apply_to']->value == '1') {?> selected<?php }?>>Specials</option>
	<option value="2"<?php if ($_smarty_tpl->tpl_vars['apply_to']->value == '2') {?> selected<?php }?>>All</option>
</select>
</td>
</tr>
<tr>
<td style="width: 20%;text-align:right;"><b>From Date:</b></td>
<td style="width: 80%;">MM<input type="text" size="2" maxlength="2" name="from_month" value="<?php echo $_SESSION['from_month'];?>
" /> DD<input type="text" size="2" maxlength="2" name="from_day" value="<?php echo $_SESSION['from_day'];?>
" /> YYYY<input type="text" size="4" maxlength="4" name="from_year" value="<?php echo $_SESSION['from_year'];?>
" /> </td>
</tr>
<tr>
<td style="width: 20%;text-align:right;"><b>To Date:</b></td>
<td style="width: 80%;">MM<input type="text" size="2" maxlength="2" name="to_month" value="<?php echo $_SESSION['to_month'];?>
" /> DD<input type="text" size="2" maxlength="2" name="to_day" value="<?php echo $_SESSION['to_day'];?>
" /> YYYY<input type="text" size="4" maxlength="4" name="to_year" value="<?php echo $_SESSION['to_year'];?>
" /> </td>
</tr>
<tr>
<td style="text-align:right;"><b>Discount Type Value (Integer):</b></td>
<td><input type="text" size="10" maxlength="10" name="discount_type_value" value="<?php echo $_SESSION['discount_type_value'];?>
" /></td>
</tr>
<tr>
<td style="text-align:right;"><b>Discount Type Value (String):</b></td>
<td><input type="text" size="20" maxlength="50" name="discount_type_value_string" value="<?php echo $_SESSION['discount_type_value_string'];?>
" /></td>
</tr>
<tr>
<td style="text-align:right;"><b>Discount Percent:</b></td>
<td><input type="text" size="3" maxlength="3" name="discount_percent" value="<?php echo $_SESSION['discount_percent'];?>
" /> %</td>
</tr>
<tr>
<td style="text-align:right;"><b>Discount Value:</b></td>
<td><input type="text" size="10" maxlength="10" name="discount_value" value="<?php echo $_SESSION['discount_value'];?>
" /></td>
</tr>
<tr>
<td style="text-align:right;"><b>Mininum Bottles:</b></td>
<td><input type="text" size="3" maxlength="3" name="min_bottles" value="<?php echo $_SESSION['min_bottles'];?>
" /></td>
</tr>

<tr>
<td style="text-align:right;padding-top:25px;">&nbsp;</td>
<td style="padding-top:25px;">
<input type="submit" value="Submit" class="sbt" style="float:left;" />

</td>
</tr>
</table>
</form>


<?php }
}
