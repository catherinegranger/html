<?php
/* Smarty version 3.1.30, created on 2018-04-23 21:36:46
  from "/var/www/html/smarty/templates/amn/pages/edit_vintage.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5ade51ee728ee0_43689443',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a3502b284283cd3c0ba946346ab452cb040cdfbb' => 
    array (
      0 => '/var/www/html/smarty/templates/amn/pages/edit_vintage.tpl',
      1 => 1523659342,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ade51ee728ee0_43689443 (Smarty_Internal_Template $_smarty_tpl) {
?>
<h2>Update a Vintage</h2>

To update this vintage's varietals, just select the new choice from the dropdown selector and it will auto-update.  For all other items, update with the new data and click Update Vintage at the bottom.

<p><a href="/print/techsheet/<?php echo $_smarty_tpl->tpl_vars['two']->value;?>
" target="_blank">View the techsheet page &gt;&gt;</a></p>

		
<?php if ($_smarty_tpl->tpl_vars['tri']->value == 'too_small') {?><div class="error">Image is too small or non-existent.</div><?php }
if ($_smarty_tpl->tpl_vars['tri']->value == 'too_big') {?><div class="error">Image is too large.</div><?php }
if ($_smarty_tpl->tpl_vars['tri']->value == "success") {?><div class="error">Vintage updated successfully! &nbsp; <a href="/wine/<?php if ($_smarty_tpl->tpl_vars['grup']->value == '1') {?>sampler/<?php }
echo $_smarty_tpl->tpl_vars['two']->value;?>
" target="_blank">View the wine page</a></div><?php }
if ($_smarty_tpl->tpl_vars['tri']->value == "error") {?><div class="error">There was a problem.  Maybe a require field was left blank?</div><?php }
if ($_smarty_tpl->tpl_vars['tri']->value == "update_error") {?><div class="error">Vintage update failed.</div><?php }?>

<table cellpadding="2" cellspacing="2">
<tr>
<td>
<form action="/update_vintage_varietal/" method="post">
<input type="hidden" name="vint_id" value="<?php echo $_smarty_tpl->tpl_vars['two']->value;?>
" />
<input type="hidden" name="vv_id" value="<?php echo $_smarty_tpl->tpl_vars['vv_id_1']->value;?>
" />
<table cellpadding="3" cellspacing="2">
<tr>
<td style="width:15%;white-space:nowrap;" class="alignRight"><b>* Varietal 1:</b></td>
<td style="width:85%;"><select name="v_id" onchange="this.form.submit()">
<option value="delete"></option>
<?php
$__section_bit_0_saved = isset($_smarty_tpl->tpl_vars['__smarty_section_bit']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit'] : false;
$__section_bit_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['varietals']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_bit_0_total = $__section_bit_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_bit'] = new Smarty_Variable(array());
if ($__section_bit_0_total != 0) {
for ($__section_bit_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] = 0; $__section_bit_0_iteration <= $__section_bit_0_total; $__section_bit_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']++){
?>
<option value="<?php echo $_smarty_tpl->tpl_vars['varietals']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['v_id'];?>
"<?php if ($_smarty_tpl->tpl_vars['v_id_1']->value == $_smarty_tpl->tpl_vars['varietals']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['v_id']) {?> selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['varietals']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['name'];?>
</option>
<?php
}
}
if ($__section_bit_0_saved) {
$_smarty_tpl->tpl_vars['__smarty_section_bit'] = $__section_bit_0_saved;
}
?>
</select></td>
</tr>
</table>
</form>

<form action="/update_vintage_varietal/" method="post">
<input type="hidden" name="vint_id" value="<?php echo $_smarty_tpl->tpl_vars['two']->value;?>
" />
<input type="hidden" name="vv_id" value="<?php echo $_smarty_tpl->tpl_vars['vv_id_2']->value;?>
" />
<table cellpadding="3" cellspacing="2" style="width:100%;">
<tr>
<td style="width:15%;white-space:nowrap;" class="alignRight"><b>Varietal 2:</b></td>
<td style="width:85%;"><select name="v_id" onchange="this.form.submit()">
<option value="delete"></option>
<?php
$__section_bit_1_saved = isset($_smarty_tpl->tpl_vars['__smarty_section_bit']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit'] : false;
$__section_bit_1_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['varietals']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_bit_1_total = $__section_bit_1_loop;
$_smarty_tpl->tpl_vars['__smarty_section_bit'] = new Smarty_Variable(array());
if ($__section_bit_1_total != 0) {
for ($__section_bit_1_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] = 0; $__section_bit_1_iteration <= $__section_bit_1_total; $__section_bit_1_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']++){
?>
<option value="<?php echo $_smarty_tpl->tpl_vars['varietals']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['v_id'];?>
"<?php if ($_smarty_tpl->tpl_vars['v_id_2']->value == $_smarty_tpl->tpl_vars['varietals']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['v_id']) {?> selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['varietals']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['name'];?>
</option>
<?php
}
}
if ($__section_bit_1_saved) {
$_smarty_tpl->tpl_vars['__smarty_section_bit'] = $__section_bit_1_saved;
}
?>
</select></td>
</tr>
</table>
</form>

<form action="/update_vintage_varietal/" method="post">
<input type="hidden" name="vint_id" value="<?php echo $_smarty_tpl->tpl_vars['two']->value;?>
" />
<input type="hidden" name="vv_id" value="<?php echo $_smarty_tpl->tpl_vars['vv_id_3']->value;?>
" />
<table cellpadding="3" cellspacing="2" style="width:100%;">
<tr>
<td style="width:15%;white-space:nowrap" class="alignRight"><b>Varietal 3:</b></td>
<td style="width:85%;"><select name="v_id" onchange="this.form.submit()">
<option value="delete"></option>
<?php
$__section_bit_2_saved = isset($_smarty_tpl->tpl_vars['__smarty_section_bit']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit'] : false;
$__section_bit_2_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['varietals']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_bit_2_total = $__section_bit_2_loop;
$_smarty_tpl->tpl_vars['__smarty_section_bit'] = new Smarty_Variable(array());
if ($__section_bit_2_total != 0) {
for ($__section_bit_2_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] = 0; $__section_bit_2_iteration <= $__section_bit_2_total; $__section_bit_2_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']++){
?>
<option value="<?php echo $_smarty_tpl->tpl_vars['varietals']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['v_id'];?>
"<?php if ($_smarty_tpl->tpl_vars['v_id_3']->value == $_smarty_tpl->tpl_vars['varietals']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['v_id']) {?> selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['varietals']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['name'];?>
</option>
<?php
}
}
if ($__section_bit_2_saved) {
$_smarty_tpl->tpl_vars['__smarty_section_bit'] = $__section_bit_2_saved;
}
?>
</select></td>
</tr>
</table>
</form>

<form action="/update_vintage_varietal/" method="post">
<input type="hidden" name="vint_id" value="<?php echo $_smarty_tpl->tpl_vars['two']->value;?>
" />
<input type="hidden" name="vv_id" value="<?php echo $_smarty_tpl->tpl_vars['vv_id_4']->value;?>
" />
<table cellpadding="3" cellspacing="2" style="width:100%;">
<tr>
<td style="width:15%;white-space:nowrap" class="alignRight"><b>Varietal 4:</b></td>
<td style="width:85%;"><select name="v_id" onchange="this.form.submit()">
<option value="delete"></option>
<?php
$__section_bit_3_saved = isset($_smarty_tpl->tpl_vars['__smarty_section_bit']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit'] : false;
$__section_bit_3_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['varietals']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_bit_3_total = $__section_bit_3_loop;
$_smarty_tpl->tpl_vars['__smarty_section_bit'] = new Smarty_Variable(array());
if ($__section_bit_3_total != 0) {
for ($__section_bit_3_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] = 0; $__section_bit_3_iteration <= $__section_bit_3_total; $__section_bit_3_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']++){
?>
<option value="<?php echo $_smarty_tpl->tpl_vars['varietals']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['v_id'];?>
"<?php if ($_smarty_tpl->tpl_vars['v_id_4']->value == $_smarty_tpl->tpl_vars['varietals']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['v_id']) {?> selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['varietals']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['name'];?>
</option>
<?php
}
}
if ($__section_bit_3_saved) {
$_smarty_tpl->tpl_vars['__smarty_section_bit'] = $__section_bit_3_saved;
}
?>
</select></td>
</tr>
</table>
</form>

<form action="/update_vintage_varietal/" method="post">
<input type="hidden" name="vint_id" value="<?php echo $_smarty_tpl->tpl_vars['two']->value;?>
" />
<input type="hidden" name="vv_id" value="<?php echo $_smarty_tpl->tpl_vars['vv_id_5']->value;?>
" />
<table cellpadding="3" cellspacing="2" style="width:100%;">
<tr>
<td style="width:15%;white-space:nowrap" class="alignRight"><b>Varietal 5:</b></td>
<td style="width:85%;"><select name="v_id" onchange="this.form.submit()">
<option value="delete"></option>
<?php
$__section_bit_4_saved = isset($_smarty_tpl->tpl_vars['__smarty_section_bit']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit'] : false;
$__section_bit_4_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['varietals']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_bit_4_total = $__section_bit_4_loop;
$_smarty_tpl->tpl_vars['__smarty_section_bit'] = new Smarty_Variable(array());
if ($__section_bit_4_total != 0) {
for ($__section_bit_4_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] = 0; $__section_bit_4_iteration <= $__section_bit_4_total; $__section_bit_4_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']++){
?>
<option value="<?php echo $_smarty_tpl->tpl_vars['varietals']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['v_id'];?>
"<?php if ($_smarty_tpl->tpl_vars['v_id_5']->value == $_smarty_tpl->tpl_vars['varietals']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['v_id']) {?> selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['varietals']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['name'];?>
</option>
<?php
}
}
if ($__section_bit_4_saved) {
$_smarty_tpl->tpl_vars['__smarty_section_bit'] = $__section_bit_4_saved;
}
?>
</select></td>
</tr>
</table>
</form>

<form action="/update_vintage/" method="post">
<input type="hidden" name="vint_id" value="<?php echo $_smarty_tpl->tpl_vars['two']->value;?>
" />
<input type="hidden" name="vv_id" value="<?php echo $_smarty_tpl->tpl_vars['vv_id_1']->value;?>
" />
<table cellpadding="3" cellspacing="2" style="width:100%;">
<tr>
<td style="width:15%;" class="alignRight"><b>* Item Type:</b></td>
<td><select name="item_type">
	<option value="0"<?php if ($_smarty_tpl->tpl_vars['item_type']->value == '0') {?> selected<?php }?>>Vintage</option>
	<option value="2"<?php if ($_smarty_tpl->tpl_vars['item_type']->value == '2') {?> selected<?php }?>>Book</option>
</select></td>
</tr>
<td style="width:15%;" class="alignRight"><b>* Winery:</b></td>
<td style="width:85%;"><select name="wy_id">
<option value=""></option>
<?php
$__section_bit_5_saved = isset($_smarty_tpl->tpl_vars['__smarty_section_bit']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit'] : false;
$__section_bit_5_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['wineries']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_bit_5_total = $__section_bit_5_loop;
$_smarty_tpl->tpl_vars['__smarty_section_bit'] = new Smarty_Variable(array());
if ($__section_bit_5_total != 0) {
for ($__section_bit_5_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] = 0; $__section_bit_5_iteration <= $__section_bit_5_total; $__section_bit_5_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']++){
?>
<option value="<?php echo $_smarty_tpl->tpl_vars['wineries']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['wy_id'];?>
"<?php if ($_smarty_tpl->tpl_vars['wy_id']->value == $_smarty_tpl->tpl_vars['wineries']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['wy_id']) {?> selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['wineries']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['name'];?>
</option>
<?php
}
}
if ($__section_bit_5_saved) {
$_smarty_tpl->tpl_vars['__smarty_section_bit'] = $__section_bit_5_saved;
}
?>
</select></td>
</tr>
<tr>
<td class="alignRight"><b>* Type:</b></td>
<td><select name="type_id">
<option value="0">Choose</option>
<?php
$__section_bit_6_saved = isset($_smarty_tpl->tpl_vars['__smarty_section_bit']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit'] : false;
$__section_bit_6_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['types']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_bit_6_total = $__section_bit_6_loop;
$_smarty_tpl->tpl_vars['__smarty_section_bit'] = new Smarty_Variable(array());
if ($__section_bit_6_total != 0) {
for ($__section_bit_6_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] = 0; $__section_bit_6_iteration <= $__section_bit_6_total; $__section_bit_6_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']++){
?>
<option	value="<?php echo $_smarty_tpl->tpl_vars['types']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['type_id'];?>
"<?php if ($_smarty_tpl->tpl_vars['type_id']->value == $_smarty_tpl->tpl_vars['types']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['type_id']) {?> selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['types']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['name'];?>
</option>
<?php
}
}
if ($__section_bit_6_saved) {
$_smarty_tpl->tpl_vars['__smarty_section_bit'] = $__section_bit_6_saved;
}
?>
</select>
</td>
</tr>
<tr>
<td class="alignRight"><b>* Name:</b></td>
<td><input type="text" size="30" maxlength="100" name="vintage_name" value="<?php echo $_smarty_tpl->tpl_vars['vintage_name']->value;?>
" /></td>
</tr>
<tr>
<td class="alignRight"><b>* Product Id:</b></td>
<td><input type="text" size="30" maxlength="48" name="product_id" value="<?php echo $_smarty_tpl->tpl_vars['product_id']->value;?>
" /> <i>Product Id from Quickbooks</i></td>
</tr>
<tr>
<td class="alignRight"><b>UPC:</b></td>
<td><input type="text" size="30" maxlength="48" name="upc" value="<?php echo $_smarty_tpl->tpl_vars['upc']->value;?>
" /></td>
</tr>
<tr>
<td class="alignRight"><b>TTB:</b></td>
<td><input type="text" size="30" maxlength="48" name="ttb" value="<?php echo $_smarty_tpl->tpl_vars['ttb']->value;?>
" /> <i>for ttb.gov</i></td>
</tr>
<tr>
<td class="alignRight"><b>* Group:</b></td>
<td>YES<input type="radio" value="1" name="grup"<?php if ($_smarty_tpl->tpl_vars['grup']->value == '1') {?> checked<?php }?> /> NO<input type="radio" value="0" name="grup"<?php if ($_smarty_tpl->tpl_vars['grup']->value == '0') {?> checked<?php }?> /> <i>Winery, Varietals, and Type are not required if this is Yes</i></td>
</tr>
<tr>
<td class="alignRight"><b>Bottles #:</b></td>
<td><input type="text" size="3" maxlength="3" name="bottles" value="<?php echo $_smarty_tpl->tpl_vars['bottles']->value;?>
" />  <i>Number of bottles in a sampler; default value is 1</i></td>
</tr>
<tr>
<td class="alignRight"><b>Bottles per case:</b></td>
<td><input type="text" size="3" maxlength="3" name="bottles_per_case" value="<?php echo $_smarty_tpl->tpl_vars['bottles_per_case']->value;?>
" />  <i>Number of bottles in a case; default value is 12</i></td>
</tr>
<tr>
<td class="alignRight"><b>Shipping:</b></td>
<td>YES<input type="radio" value="1" name="shipping"<?php if ($_smarty_tpl->tpl_vars['shipping']->value == '1') {?> checked<?php }?> /> NO<input type="radio" value="0" name="shipping"<?php if ($_smarty_tpl->tpl_vars['shipping']->value == '0') {?> checked<?php }?> />  <i>No means free shipping for this item</i></td>
</tr>

<tr>
<td class="alignRight"><b>Appellation:</b></td>
<td><input type="text" size="30" maxlength="48" name="appellation" value="<?php echo $_smarty_tpl->tpl_vars['appellation']->value;?>
" /></td>
</tr>
<tr>
<td class="alignRight"><b>Country:</b></td>
<td><select name="country_id">
<option value="0">Select</option>
<?php
$__section_bit_7_saved = isset($_smarty_tpl->tpl_vars['__smarty_section_bit']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit'] : false;
$__section_bit_7_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['ncc']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_bit_7_total = $__section_bit_7_loop;
$_smarty_tpl->tpl_vars['__smarty_section_bit'] = new Smarty_Variable(array());
if ($__section_bit_7_total != 0) {
for ($__section_bit_7_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] = 0; $__section_bit_7_iteration <= $__section_bit_7_total; $__section_bit_7_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']++){
?>
<option value="<?php echo $_smarty_tpl->tpl_vars['ncc']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['c_id'];?>
"<?php if ($_smarty_tpl->tpl_vars['ncc']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['c_id'] == $_smarty_tpl->tpl_vars['country_id']->value) {?> selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['ncc']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['full_name'];?>
</option>
<?php
}
}
if ($__section_bit_7_saved) {
$_smarty_tpl->tpl_vars['__smarty_section_bit'] = $__section_bit_7_saved;
}
?>
</select></td>
</tr>
<tr>
<td class="alignRight"><b>Year:</b></td>
<td><input type="text" size="4" maxlength="4" name="year" value="<?php echo $_smarty_tpl->tpl_vars['year']->value;?>
" />  <i><b>Warning:</b> changing this field may compromise data integrity i.e. wrong product_id, tech sheet, alcohol level, and change the content of orders.</i></td>
</tr>
<tr>
<td class="alignRight"><b>Size:</b></td>
<td><input type="text" size="4" maxlength="4" name="size" value="<?php echo $_smarty_tpl->tpl_vars['size']->value;?>
" /> ml</td>
</tr>
<tr>
<td class="alignRight"><b>Alcohol:</b></td>
<td><input type="text" size="4" maxlength="4" name="alcohol" value="<?php echo $_smarty_tpl->tpl_vars['alcohol']->value;?>
" /></td>
</tr>
<tr>
<td class="alignRight"><b>Residual Sugar:</b></td>
<td><input type="text" size="4" maxlength="6" name="residual_sugar" value="<?php echo $_smarty_tpl->tpl_vars['residual_sugar']->value;?>
" /></td>
</tr>
<tr>
<td class="alignRight"><b>Acidity:</b></td>
<td><input type="text" size="4" maxlength="6" name="acidity" value="<?php echo $_smarty_tpl->tpl_vars['acidity']->value;?>
" /></td>
</tr>
<tr>
<td class="alignRight"><b>Organic:</b></td>
<td>YES<input type="radio" value="1" name="organic"<?php if ($_smarty_tpl->tpl_vars['organic']->value == '1') {?> checked<?php }?> /> NO<input type="radio" value="0" name="organic"<?php if ($_smarty_tpl->tpl_vars['organic']->value == '0') {?> checked<?php }?> /></td>
</tr>
<tr><td class="alignRight"><b>Price:</b></td>
<td><input type="text" size="5" maxlength="6" name="price" value="<?php echo $_smarty_tpl->tpl_vars['price']->value;?>
" /> 
<?php if (!$_smarty_tpl->tpl_vars['product_id']->value) {?>
<i><b>Warning:</b> make sure we have a Quickbooks Product Id in the "Product Id" field for this product before pricing it and make it available for purchase. Otherwise, the T-Hub order import to Quickbooks will fail.</i>
<?php }?>
</td></tr>
<tr><td class="alignRight"><b>Sale:</b></td><td><input type="text" size="5" maxlength="6" name="sale" value="<?php echo $_smarty_tpl->tpl_vars['sale']->value;?>
" /></td></tr>
<tr><td class="alignRight"><b>Wineclub Price:</b></td><td><input type="text" size="5" maxlength="6" name="wineclub_price" value="<?php echo $_smarty_tpl->tpl_vars['wineclub_price']->value;?>
" /> <i>Only wine club members will see this price.</i></td></tr>
<tr><td class="alignRight"><b>Wineclub Sale:</b></td><td><input type="text" size="5" maxlength="6" name="wineclub_sale" value="<?php echo $_smarty_tpl->tpl_vars['wineclub_sale']->value;?>
" /> <i>Only wine club members will see this sale price.</i></td></tr>

<tr>
<td class="alignRight"><b>Active:</b></td>
<td>YES<input type="radio" value="0" name="inactive"<?php if ($_smarty_tpl->tpl_vars['inactive']->value == '0') {?> checked<?php }?> /> NO<input type="radio" value="1" name="inactive"<?php if ($_smarty_tpl->tpl_vars['inactive']->value == '1') {?> checked<?php }?> /></td>
</tr>
<tr>
<td class="alignRight"><b>In Website:</b></td>
<td>YES<input type="radio" value="1" name="online_store"<?php if ($_smarty_tpl->tpl_vars['online_store']->value == '1') {?> checked<?php }?> /> NO<input type="radio" value="0" name="online_store"<?php if ($_smarty_tpl->tpl_vars['online_store']->value == '0') {?> checked<?php }?> /> <i><b>Warning:</b> removing this product from the website will prevent the trade to access it and its technical information. It is ok to remove it if it is not sold by the trade anymore and there is a new vintage to replace it. If it is just sold-out for the webshop, please select In Stock:NO.</i></td>
</tr>
<tr>
<td class="alignRight"><b>In Stock:</b></td>
<td>YES<input type="radio" value="1" name="stock"<?php if ($_smarty_tpl->tpl_vars['stock']->value == '1') {?> checked<?php }?> /> NO<input type="radio" value="0" name="stock"<?php if ($_smarty_tpl->tpl_vars['stock']->value == '0') {?> checked<?php }?> /></td>
</tr>
<tr>
<td class="alignRight"><b>Low Inventory:</b></td>
<td>YES<input type="radio" value="1" name="low_inventory"<?php if ($_smarty_tpl->tpl_vars['low_inventory']->value == '1') {?> checked<?php }?> /> NO<input type="radio" value="0" name="low_inventory"<?php if ($_smarty_tpl->tpl_vars['low_inventory']->value == '0') {?> checked<?php }?> /></td>
</tr>
<tr>
<td class="alignRight"><b>Deleted:</b></td>
<td>YES<input type="radio" value="1" name="deleted"<?php if ($_smarty_tpl->tpl_vars['deleted']->value == '1') {?> checked<?php }?> /> NO<input type="radio" value="0" name="deleted"<?php if ($_smarty_tpl->tpl_vars['deleted']->value == '0') {?> checked<?php }?> /> <i><b>Warning:</b> do not delete products unless there are duplicates or mistakes.</i></td>
</tr>
<tr>
<td class="alignRight"><b>Show to:</b></td>
<td><select name="show">
	<option value="0"<?php if ($_smarty_tpl->tpl_vars['show']->value == '0') {?> selected<?php }?>>All</option>
	<option value="1"<?php if ($_smarty_tpl->tpl_vars['show']->value == '1') {?> selected<?php }?>>Webshop and CA/NY Trade only</option>
	<option value="2"<?php if ($_smarty_tpl->tpl_vars['show']->value == '2') {?> selected<?php }?>>Webshop and CA Trade only</option>
	<option value="3"<?php if ($_smarty_tpl->tpl_vars['show']->value == '3') {?> selected<?php }?>>Webshop only</option>
</select></td>
</tr>
<tr>
<td class="alignRight"><b>Image:</b></td>
<td>YES<input type="radio" value="1" name="image"<?php if ($_smarty_tpl->tpl_vars['image']->value == '1') {?> checked<?php }?> /> NO<input type="radio" value="0" name="image"<?php if ($_smarty_tpl->tpl_vars['image']->value == '0') {?> checked<?php }?> /></td>
</tr>
<tr>
<td class="alignRight"><b>Is Label?:</b></td>
<td>YES<input type="radio" value="1" name="is_label"<?php if ($_smarty_tpl->tpl_vars['is_label']->value == '1') {?> checked<?php }?> /> NO<input type="radio" value="0" name="is_label"<?php if ($_smarty_tpl->tpl_vars['is_label']->value == '0') {?> checked<?php }?> /></td>
</tr>
<tr>
<td class="alignRight"><b>Notes:</b></td>
<td><textarea cols="60" rows="12" name="notes"><?php echo $_smarty_tpl->tpl_vars['notes']->value;?>
</textarea></td>
</tr>
<tr><td colspan="2">&nbsp;</td></tr>
<tr><td colspan="2"><h3>Techsheet Information</h3></td></tr>
<tr><td colspan="2">&nbsp;</td></tr>
<tr>
<td class="alignRight"><b>Maceration and Aging:</b></td>
<td><textarea cols="60" rows="3" name="aging"><?php echo $_smarty_tpl->tpl_vars['aging']->value;?>
</textarea></td>
</tr>
<tr>
<td class="alignRight"><b>Grape Composition:</b></td>
<td><textarea cols="60" rows="3" name="composition"><?php echo $_smarty_tpl->tpl_vars['composition']->value;?>
</textarea></td>
</tr>
<tr>
<td class="alignRight"><b>Climate:</b></td>
<td><input type="text" size="50" maxlength="150" name="climate" value="<?php echo $_smarty_tpl->tpl_vars['climate']->value;?>
" /></td>
</tr>
<tr>
<td class="alignRight"><b>Soils:</b></td>
<td><input type="text" size="50" maxlength="150" name="soils" value="<?php echo $_smarty_tpl->tpl_vars['soils']->value;?>
" /></td>
</tr>
<tr>
<td class="alignRight"><b>Exposure:</b></td>
<td><input type="text" size="50" maxlength="150" name="exposure" value="<?php echo $_smarty_tpl->tpl_vars['exposure']->value;?>
" /></td>
</tr>
<tr>
<td class="alignRight"><b>Notes and Pairings:</b></td>
<td><textarea cols="60" rows="10" name="notespairings"><?php echo $_smarty_tpl->tpl_vars['notespairings']->value;?>
</textarea></td>
</tr>
<tr>
<td class="alignRight">&nbsp;</td>
<td><input type="submit" value="Update Vintage" /></td>
</tr>
</table>
</form>
		
<h2>New Vintage Review</h2>
<form action="/submit_vintage_review/" method="post">
<input type="hidden" name="vint_id" value="<?php echo $_smarty_tpl->tpl_vars['two']->value;?>
" />
<b>Review Title &amp; URL:</b> <input type="text" size="30" name="review_title" value="" /> <input type="text" size="30" name="review_url" value="" /> <input type="submit" value="Submit Review" />
</form>
<?php if ($_smarty_tpl->tpl_vars['reviews']->value) {?>
<h2>Vintage Reviews</h2>
<table cellpadding="3" cellspacing="2" style="width:100%;">
<tr>
<td style="width:25%;"><b>Title</b></td>
<td style="width:35%;"><b>URL</b></td>
<td style="width:30%;">&nbsp;</td>
<td style="width:10%;">&nbsp;</td>
</tr>
</table>
<?php
$__section_rv_8_saved = isset($_smarty_tpl->tpl_vars['__smarty_section_rv']) ? $_smarty_tpl->tpl_vars['__smarty_section_rv'] : false;
$__section_rv_8_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['reviews']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_rv_8_total = $__section_rv_8_loop;
$_smarty_tpl->tpl_vars['__smarty_section_rv'] = new Smarty_Variable(array());
if ($__section_rv_8_total != 0) {
for ($__section_rv_8_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_rv']->value['index'] = 0; $__section_rv_8_iteration <= $__section_rv_8_total; $__section_rv_8_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_rv']->value['index']++){
?>
<form action="/update_vintage_review/" method="post">
<input type="hidden" name="rev_id" value="<?php echo $_smarty_tpl->tpl_vars['reviews']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_rv']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_rv']->value['index'] : null)]['rev_id'];?>
" />
<input type="hidden" name="vint_id" value="<?php echo $_smarty_tpl->tpl_vars['two']->value;?>
" />
<table cellpadding="3" cellspacing="2" style="width:100%;">
<tr>
<td style="width:25%;"><input type="text" size="20" maxlength="48" name="review_title" value="<?php echo $_smarty_tpl->tpl_vars['reviews']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_rv']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_rv']->value['index'] : null)]['title'];?>
" /></td>
<td style="width:35%;"><input type="text" size="40" maxlength="255" name="review_url" value="<?php echo $_smarty_tpl->tpl_vars['reviews']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_rv']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_rv']->value['index'] : null)]['url'];?>
" /></td>
<td style="width:30%;"><input type="submit" value="Update" name="Update" /> <input type="submit" value="Delete" name="Delete" /></td>
<td style="width:10%;"></td>
</tr>
</table>
</form>
<?php
}
}
if ($__section_rv_8_saved) {
$_smarty_tpl->tpl_vars['__smarty_section_rv'] = $__section_rv_8_saved;
}
}?>
</td>

<td>
<b>Update Image:</b><br />

<form action="/update_vintage_image/" method="post" enctype="multipart/form-data">
<input type="hidden" name="vint_id" value="<?php echo $_smarty_tpl->tpl_vars['two']->value;?>
" />
<input type="file" name="upload_file" /><br />&nbsp;<br />
<input type="submit" value="Submit" class="sbt" />
</form>

<?php if ($_smarty_tpl->tpl_vars['image']->value == '1') {?><br /><img style="width:200px;" src="/img/bottles/<?php echo $_smarty_tpl->tpl_vars['two']->value;?>
.jpg" alt="<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
 <?php echo $_smarty_tpl->tpl_vars['year']->value;?>
" /><?php }?>
</td>
</tr>
</table>
<br />&nbsp;<br />




<?php }
}
