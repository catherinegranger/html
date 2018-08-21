<?php
/* Smarty version 3.1.30, created on 2018-04-23 21:31:51
  from "/var/www/html/smarty/templates/amn/pages/add_varietal.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5ade50c7c7ebc6_75624027',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8fe545f3f75ac6a0b77b8a37821fc6bebec25b66' => 
    array (
      0 => '/var/www/html/smarty/templates/amn/pages/add_varietal.tpl',
      1 => 1523659342,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ade50c7c7ebc6_75624027 (Smarty_Internal_Template $_smarty_tpl) {
?>
<h2>Add a New Varietal</h2>
<p>The web doesn't take kindly to non-English Latin characters and spaces, so the Web Name takes care of this issue.  <br />View the Varietals section to see some examples.<p />
		
<?php if ($_smarty_tpl->tpl_vars['two']->value == "success") {?><div class="error">Varietal entered successfully!</div><?php }
if ($_smarty_tpl->tpl_vars['two']->value == "error") {?><div class="error">There was a problem.  Maybe a field was left blank?</div><?php }
if ($_smarty_tpl->tpl_vars['two']->value == "duplicate") {?><div class="error">This varietal is already in the database</div><?php }?>
		
<form action="/submit_varietal/" method="post">
		
<table cellpadding="4" cellspacing="0">
<tr>
<td style="width:20%;" class="alignRight"><b>Varietal Name:</b></td>
<td style="width:80%;"><input type="text" size="30" maxlength="48" name="varietal_name" value="<?php echo $_SESSION['varietal_name'];?>
" /></td>
</tr>
<tr>
<td class="alignRight"><b>Web Name:</b></td>
<td><input type="text" size="30" maxlength="48" name="friendly" value="<?php echo $_SESSION['friendly'];?>
" /></td>
</tr>
<tr>
<td class="alignRight"><b>Type:</b></td>
<td><select name="type_id">
<option value="0">Choose</option>
<?php
$__section_bit_0_saved = isset($_smarty_tpl->tpl_vars['__smarty_section_bit']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit'] : false;
$__section_bit_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['types']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_bit_0_total = $__section_bit_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_bit'] = new Smarty_Variable(array());
if ($__section_bit_0_total != 0) {
for ($__section_bit_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] = 0; $__section_bit_0_iteration <= $__section_bit_0_total; $__section_bit_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']++){
?>
<option	value="<?php echo $_smarty_tpl->tpl_vars['types']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['type_id'];?>
"<?php if ($_SESSION['type_id'] == $_smarty_tpl->tpl_vars['types']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['type_id']) {?> selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['types']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['name'];?>
</option>
<?php
}
}
if ($__section_bit_0_saved) {
$_smarty_tpl->tpl_vars['__smarty_section_bit'] = $__section_bit_0_saved;
}
?>
</select>
</td>
</tr>
<tr>
<td class="alignRight"><b>Resource:</b></td>
<td><select name="resource_id">
<option value="0">Choose</option>
<?php
$__section_bit_1_saved = isset($_smarty_tpl->tpl_vars['__smarty_section_bit']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit'] : false;
$__section_bit_1_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['resources']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_bit_1_total = $__section_bit_1_loop;
$_smarty_tpl->tpl_vars['__smarty_section_bit'] = new Smarty_Variable(array());
if ($__section_bit_1_total != 0) {
for ($__section_bit_1_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] = 0; $__section_bit_1_iteration <= $__section_bit_1_total; $__section_bit_1_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']++){
?>
<option	value="<?php echo $_smarty_tpl->tpl_vars['resources']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['resource_id'];?>
"<?php if ($_SESSION['resource_id'] == $_smarty_tpl->tpl_vars['resources']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['resource_id']) {?> selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['resources']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['title'];?>
</option>
<?php
}
}
if ($__section_bit_1_saved) {
$_smarty_tpl->tpl_vars['__smarty_section_bit'] = $__section_bit_1_saved;
}
?>
</select>
</td>
</tr>
<tr>
<td class="alignRight"><b>Notes:</b></td>
<td><textarea cols="70" rows="10" name="notes"><?php echo $_SESSION['notes'];?>
</textarea></td>
</tr>
<tr>
<td class="alignRight">&nbsp;</td>
<td><input type="submit" value="Add Varietal" /></td>
</tr>
</table>
	
</form><?php }
}
