<?php
/* Smarty version 3.1.30, created on 2018-04-23 19:01:20
  from "/var/www/html/smarty/templates/amn/pages/add_vintage.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5ade2d800f4635_33925265',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '694a83157f1b7a4ad0eb600b1c0364795a6290d8' => 
    array (
      0 => '/var/www/html/smarty/templates/amn/pages/add_vintage.tpl',
      1 => 1523659342,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ade2d800f4635_33925265 (Smarty_Internal_Template $_smarty_tpl) {
?>
<h2>Add a New Vintage</h2>
Any (*) indicate a field required for entry.
		
<?php if ($_smarty_tpl->tpl_vars['two']->value == "success") {?><div class="error">Vintage entered successfully! &nbsp; <a href="/wine/<?php echo $_smarty_tpl->tpl_vars['added_vint_id']->value;?>
">View the wine page</a></div><?php }
if ($_smarty_tpl->tpl_vars['two']->value == "error") {?><div class="error">There was a problem.  Maybe a field was left blank?</div><?php }?>

<?php if ($_smarty_tpl->tpl_vars['two']->value == "too_small") {?><div class="error">Adding image failed. The image is too small.</div><?php }
if ($_smarty_tpl->tpl_vars['two']->value == "too_big") {?><div class="error">Adding image failed. The image is too big.</div><?php }?>
	
<form action="/submit_vintage/" method="post" enctype="multipart/form-data">
<table cellpadding="4" cellspacing="0">
<tr>
<td style="width:15%;" class="alignRight"><b>* Item Type:</b></td>
<td><select name="item_type">
	<option value="0"<?php if ($_smarty_tpl->tpl_vars['item_type']->value == '0') {?> selected<?php }?>>Vintage</option>
	<option value="2"<?php if ($_smarty_tpl->tpl_vars['item_type']->value == '2') {?> selected<?php }?>>Book</option>
</select></td>
</tr>
<tr>
<td style="width:15%;" class="alignRight"><b>* Winery:</b></td>
<td style="width:85%;"><select name="wy_id">
<option value=""></option>
<?php
$__section_bit_0_saved = isset($_smarty_tpl->tpl_vars['__smarty_section_bit']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit'] : false;
$__section_bit_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['wineries']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_bit_0_total = $__section_bit_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_bit'] = new Smarty_Variable(array());
if ($__section_bit_0_total != 0) {
for ($__section_bit_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] = 0; $__section_bit_0_iteration <= $__section_bit_0_total; $__section_bit_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']++){
?>
<option value="<?php echo $_smarty_tpl->tpl_vars['wineries']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['wy_id'];?>
"<?php if ($_SESSION['wy_id'] == $_smarty_tpl->tpl_vars['wineries']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['wy_id']) {?> selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['wineries']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['wy_name'];?>
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
<tr>
<td class="alignRight"><b>* Name:</b></td>
<td><input type="text" size="30" maxlength="100" name="vintage_name" value="<?php echo $_SESSION['vintage_name'];?>
" /></td>
</tr>
<tr>
<td class="alignRight"><b>* Product Id:</b></td>
<td><input type="text" size="30" maxlength="48" name="product_id" value="<?php echo $_SESSION['product_id'];?>
" /> <i>Product Id from Quickbooks</i></td>
</tr>
<tr>
<td class="alignRight"><b>UPC:</b></td>
<td><input type="text" size="30" maxlength="48" name="upc" value="<?php echo $_SESSION['upc'];?>
" /></td>
</tr>
<tr>
<td class="alignRight"><b>TTB:</b></td>
<td><input type="text" size="30" maxlength="48" name="ttb" value="<?php echo $_SESSION['ttb'];?>
" /> <i>for ttb.gov</i></td>
</tr>
<tr>
<td class="alignRight"><b>* Group:</b></td>
<td>YES<input type="radio" value="1" name="grup"<?php if ($_SESSION['grup'] == '1') {?> checked<?php }?> /> NO<input type="radio" value="0" name="grup"<?php if ($_SESSION['grup'] == '0' || !$_SESSION['grup']) {?> checked<?php }?> /> <i>Winery, Varietals, and Type are not required if this is Yes</i></td>
</tr>
<tr>
<td class="alignRight"><b>Bottles #:</b></td>
<td><input type="text" size="3" maxlength="3" name="bottles" value="<?php echo $_SESSION['bottles'];?>
" />  <i>Number of bottles in a sampler; default value is 1</i></td>
</tr>
<tr>
<td class="alignRight"><b>Bottles per case:</b></td>
<td><input type="text" size="3" maxlength="3" name="bottles_per_case" value="<?php echo $_SESSION['bottles_per_case'];?>
" />  <i>Number of bottles in a case; default value is 12</i></td>
</tr><tr>
<td class="alignRight"><b>Shipping:</b></td>
<td>YES<input type="radio" value="1" name="shipping"<?php if ($_SESSION['shipping'] == '1') {?> checked<?php }?> /> NO<input type="radio" value="0" name="shipping"<?php if ($_SESSION['shipping'] == '0') {?> checked<?php }?> />  <i>No means free shipping for this item</i></td>
</tr>
<tr>
<td class="alignRight"><b>* Varietal 1:</b></td>
<td><select name="v_id_1">
<option value=""></option>
<?php
$__section_bit_1_saved = isset($_smarty_tpl->tpl_vars['__smarty_section_bit']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit'] : false;
$__section_bit_1_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['varietals']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_bit_1_total = $__section_bit_1_loop;
$_smarty_tpl->tpl_vars['__smarty_section_bit'] = new Smarty_Variable(array());
if ($__section_bit_1_total != 0) {
for ($__section_bit_1_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] = 0; $__section_bit_1_iteration <= $__section_bit_1_total; $__section_bit_1_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']++){
?>
<option value="<?php echo $_smarty_tpl->tpl_vars['varietals']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['v_id'];?>
"<?php if ($_SESSION['v_id_1'] == $_smarty_tpl->tpl_vars['varietals']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['v_id']) {?> selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['varietals']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['v_name'];?>
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
<tr>
<td class="alignRight"><b>Varietal 2:</b></td>
<td><select name="v_id_2">
<option value=""></option>
<?php
$__section_bit_2_saved = isset($_smarty_tpl->tpl_vars['__smarty_section_bit']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit'] : false;
$__section_bit_2_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['varietals']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_bit_2_total = $__section_bit_2_loop;
$_smarty_tpl->tpl_vars['__smarty_section_bit'] = new Smarty_Variable(array());
if ($__section_bit_2_total != 0) {
for ($__section_bit_2_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] = 0; $__section_bit_2_iteration <= $__section_bit_2_total; $__section_bit_2_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']++){
?>
<option value="<?php echo $_smarty_tpl->tpl_vars['varietals']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['v_id'];?>
"<?php if ($_SESSION['v_id_2'] == $_smarty_tpl->tpl_vars['varietals']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['v_id']) {?> selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['varietals']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['v_name'];?>
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
<tr>
<td class="alignRight"><b>Varietal 3:</b></td>
<td><select name="v_id_3">
<option value=""></option>
<?php
$__section_bit_3_saved = isset($_smarty_tpl->tpl_vars['__smarty_section_bit']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit'] : false;
$__section_bit_3_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['varietals']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_bit_3_total = $__section_bit_3_loop;
$_smarty_tpl->tpl_vars['__smarty_section_bit'] = new Smarty_Variable(array());
if ($__section_bit_3_total != 0) {
for ($__section_bit_3_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] = 0; $__section_bit_3_iteration <= $__section_bit_3_total; $__section_bit_3_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']++){
?>
<option value="<?php echo $_smarty_tpl->tpl_vars['varietals']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['v_id'];?>
"<?php if ($_SESSION['v_id_3'] == $_smarty_tpl->tpl_vars['varietals']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['v_id']) {?> selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['varietals']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['v_name'];?>
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
<tr>
<td class="alignRight"><b>Varietal 4:</b></td>
<td><select name="v_id_4">
<option value=""></option>
<?php
$__section_bit_4_saved = isset($_smarty_tpl->tpl_vars['__smarty_section_bit']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit'] : false;
$__section_bit_4_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['varietals']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_bit_4_total = $__section_bit_4_loop;
$_smarty_tpl->tpl_vars['__smarty_section_bit'] = new Smarty_Variable(array());
if ($__section_bit_4_total != 0) {
for ($__section_bit_4_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] = 0; $__section_bit_4_iteration <= $__section_bit_4_total; $__section_bit_4_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']++){
?>
<option value="<?php echo $_smarty_tpl->tpl_vars['varietals']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['v_id'];?>
"<?php if ($_SESSION['v_id_4'] == $_smarty_tpl->tpl_vars['varietals']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['v_id']) {?> selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['varietals']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['v_name'];?>
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
<tr>
<td class="alignRight"><b>Varietal 5:</b></td>
<td><select name="v_id_5">
<option value=""></option>
<?php
$__section_bit_5_saved = isset($_smarty_tpl->tpl_vars['__smarty_section_bit']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit'] : false;
$__section_bit_5_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['varietals']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_bit_5_total = $__section_bit_5_loop;
$_smarty_tpl->tpl_vars['__smarty_section_bit'] = new Smarty_Variable(array());
if ($__section_bit_5_total != 0) {
for ($__section_bit_5_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] = 0; $__section_bit_5_iteration <= $__section_bit_5_total; $__section_bit_5_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']++){
?>
<option value="<?php echo $_smarty_tpl->tpl_vars['varietals']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['v_id'];?>
"<?php if ($_SESSION['v_id_5'] == $_smarty_tpl->tpl_vars['varietals']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['v_id']) {?> selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['varietals']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['v_name'];?>
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
"<?php if ($_SESSION['type_id'] == $_smarty_tpl->tpl_vars['types']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['type_id']) {?> selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['types']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['type_name'];?>
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
<td class="alignRight"><b>Appellation:</b></td>
<td><input type="text" size="30" maxlength="48" name="appellation" value="<?php echo $_SESSION['appellation'];?>
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
"<?php if ($_smarty_tpl->tpl_vars['ncc']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['c_id'] == $_SESSION['country_id']) {?> selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['ncc']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['full_name'];?>
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
<td><input type="text" size="4" maxlength="4" name="year" value="<?php echo $_SESSION['year'];?>
" /></td>
</tr>
<tr>
<td class="alignRight"><b>Size:</b></td>
<td><input type="text" size="4" maxlength="4" name="size" value="<?php echo $_SESSION['size'];?>
" /> ml</td>
</tr>
<tr>
<td class="alignRight"><b>Alcohol:</b></td>
<td><input type="text" size="4" maxlength="6" name="alcohol" value="<?php echo $_SESSION['alcohol'];?>
" /></td>
</tr>
<tr>
<td class="alignRight"><b>Residual Sugar:</b></td>
<td><input type="text" size="4" maxlength="6" name="residual_sugar" value="<?php echo $_SESSION['residual_sugar'];?>
" /></td>
</tr>
<tr>
<td class="alignRight"><b>Acidity:</b></td>
<td><input type="text" size="4" maxlength="6" name="acidity" value="<?php echo $_SESSION['acidity'];?>
" /></td>
</tr>
<tr><td class="alignRight"><b>Organic:</b></td>
<td>YES<input type="radio" value="1" name="organic"<?php if ($_SESSION['organic'] == '1') {?> checked<?php }?> /> NO<input type="radio" value="0" name="organic"<?php if ($_SESSION['organic'] == '0') {?> checked<?php }?> /></td></tr>
<tr><td class="alignRight"><b>Price:</b></td>
<td><input type="text" size="5" maxlength="6" name="price" value="<?php echo $_SESSION['price'];?>
" /> <i><b>Warning:</b> make sure we have a Quickbooks Product Id in the "Product Id" field for this product before pricing it and make it available for purchase. Otherwise, the T-Hub order import to Quickbooks will fail.</td></tr>
<tr><td class="alignRight"><b>Sale:</b></td><td><input type="text" size="5" maxlength="6" name="sale" value="<?php echo $_SESSION['sale'];?>
" /></td></tr>
<tr><td class="alignRight"><b>Wineclub Price:</b></td><td><input type="text" size="5" maxlength="6" name="wineclub_price" value="<?php echo $_smarty_tpl->tpl_vars['wineclub_price']->value;?>
" /> <i>Only wine club members will see this price.</i></td></tr>
<tr><td class="alignRight"><b>Wineclub Sale:</b></td><td><input type="text" size="5" maxlength="6" name="wineclub_sale" value="<?php echo $_smarty_tpl->tpl_vars['wineclub_sale']->value;?>
" /> <i>Only wine club members will see this sale price.</i></td></tr>

<tr>
<td class="alignRight"><b>Active:</b></td>
<td>YES<input type="radio" value="0" name="inactive"<?php if ($_SESSION['inactive'] == '0') {?> checked<?php }?> /> NO<input type="radio" value="1" name="inactive"<?php if ($_SESSION['inactive'] == '1') {?> checked<?php }?> /></td>
</tr>
<tr>
<td class="alignRight"><b>In Website:</b></td>
<td>YES<input type="radio" value="1" name="online_store"<?php if ($_SESSION['online_store'] == '1') {?> checked<?php }?> /> NO<input type="radio" value="0" name="online_store"<?php if ($_SESSION['online_store'] == '0') {?> checked<?php }?> /></td>
</tr>
<tr>
<td class="alignRight"><b>In Stock:</b></td>
<td>YES<input type="radio" value="1" name="stock"<?php if ($_SESSION['stock'] == '1') {?> checked<?php }?> /> NO<input type="radio" value="0" name="stock"<?php if ($_SESSION['stock'] == '0') {?> checked<?php }?> /></td>
</tr>
<tr>
<td class="alignRight"><b>Low Inventory:</b></td>
<td>YES<input type="radio" value="1" name="low_inventory"<?php if ($_SESSION['low_inventory'] == '1') {?> checked<?php }?> /> NO<input type="radio" value="0" name="low_inventory"<?php if ($_SESSION['low_inventory'] == '0') {?> checked<?php }?> /></td>
</tr>
<tr>
<td class="alignRight"><b>Spotlight:</b></td>
<td>YES<input type="radio" value="1" name="spotlight"<?php if ($_SESSION['spotlight'] == '1') {?> checked<?php }?> /> NO<input type="radio" value="0" name="spotlight"<?php if ($_SESSION['spotlight'] == '0') {?> checked<?php }?> /></td>
</tr>
<tr>
<td class="alignRight"><b>Top Pick:</b></td>
<td>YES<input type="radio" value="1" name="top_pick"<?php if ($_SESSION['top_pick'] == '1') {?> checked<?php }?> /> NO<input type="radio" value="0" name="top_pick"<?php if ($_SESSION['top_pick'] == '0') {?> checked<?php }?> /></td>
</tr>
<tr>
<td class="alignRight"><b>Image:</b></td>
<td><input type="file" name="upload_file" /> <i>jpeg only and less than 500k</i></td>
</tr>
<tr>
<td class="alignRight"><b>Is Label?:</b></td>
<td>YES<input type="radio" value="1" name="is_label"<?php if ($_SESSION['is_label'] == '1') {?> checked<?php }?> /> NO<input type="radio" value="0" name="is_label"<?php if ($_SESSION['is_label'] == '0') {?> checked<?php }?> /></td>
</tr>
<tr>
<td class="alignRight"><b>Review Title &amp; URL:</b></td>
<td><input type="text" size="20" maxlength="48" name="review_title" value="<?php echo $_SESSION['review_title'];?>
" /> <input type="text" size="40" maxlength="255" name="review_url" value="<?php echo $_SESSION['review_url'];?>
" /> <i>Everything including http://</i></td>
</tr>
<tr>
<td class="alignRight"><b>Notes:</b></td>
<td><textarea cols="60" rows="10" name="notes"><?php echo $_SESSION['notes'];?>
</textarea></td>
</tr>
<tr><td colspan="2">&nbsp;</td></tr>
<tr><td colspan="2"><h3>Techsheet Information</h3></td></tr>
<tr><td colspan="2">&nbsp;</td></tr>
<tr>
<td class="alignRight"><b>Maceration and Aging:</b></td>
<td><textarea cols="60" rows="3" name="aging"><?php echo $_SESSION['aging'];?>
</textarea></td>
</tr>
<tr>
<td class="alignRight"><b>Grape Composition:</b></td>
<td><textarea cols="60" rows="3" name="composition"><?php echo $_SESSION['composition'];?>
</textarea></td>
</tr>
<tr>
<td class="alignRight"><b>Climate:</b></td>
<td><input type="text" size="50" maxlength="150" name="climate" value="<?php echo $_SESSION['climate'];?>
" /></td>
</tr>
<tr>
<td class="alignRight"><b>Soils:</b></td>
<td><input type="text" size="50" maxlength="150" name="soils" value="<?php echo $_SESSION['soils'];?>
" /></td>
</tr>
<tr>
<td class="alignRight"><b>Exposure:</b></td>
<td><input type="text" size="50" maxlength="150" name="exposure" value="<?php echo $_SESSION['exposure'];?>
" /></td>
</tr>
<tr>
<td class="alignRight"><b>Notes and Pairings:</b></td>
<td><textarea cols="60" rows="10" name="notespairings"><?php echo $_SESSION['notespairings'];?>
</textarea></td>
</tr>
<tr>
<td class="alignRight">&nbsp;</td>
<td><input type="submit" value="Add Vintage" /></td>
</tr>
</table>
</form><?php }
}
