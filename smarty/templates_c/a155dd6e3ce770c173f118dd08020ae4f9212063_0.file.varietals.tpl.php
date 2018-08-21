<?php
/* Smarty version 3.1.30, created on 2018-04-18 01:02:02
  from "/var/www/html/smarty/templates/amn/pages/varietals.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5ad6990adac9d1_12467382',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a155dd6e3ce770c173f118dd08020ae4f9212063' => 
    array (
      0 => '/var/www/html/smarty/templates/amn/pages/varietals.tpl',
      1 => 1523659342,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ad6990adac9d1_12467382 (Smarty_Internal_Template $_smarty_tpl) {
?>
<h2>View and Update Varietals</h2>
		
<?php if ($_smarty_tpl->tpl_vars['tri']->value == "success") {?><div class="error">Varietal updated successfully!</div><?php }
if ($_smarty_tpl->tpl_vars['tri']->value == "error") {?><div class="error">There was a problem.  Maybe a field was left blank?</div><?php }?>
		
<?php echo $_smarty_tpl->tpl_vars['paginator']->value;?>

<?php if ($_smarty_tpl->tpl_vars['two']->value) {
$_smarty_tpl->_assignInScope('page', $_smarty_tpl->tpl_vars['two']->value);
} else {
$_smarty_tpl->_assignInScope('page', "0");
}?>
		
<?php
$__section_bit_0_saved = isset($_smarty_tpl->tpl_vars['__smarty_section_bit']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit'] : false;
$__section_bit_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['varietals']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_bit_0_total = $__section_bit_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_bit'] = new Smarty_Variable(array());
if ($__section_bit_0_total != 0) {
for ($__section_bit_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] = 0; $__section_bit_0_iteration <= $__section_bit_0_total; $__section_bit_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']++){
?>
<form action="/update_varietal/" method="post">
<input type="hidden" name="v_id" value="<?php echo $_smarty_tpl->tpl_vars['varietals']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['v_id'];?>
" />
<input type="hidden" name="page" value="<?php echo $_smarty_tpl->tpl_vars['page']->value;?>
" />
<table cellpadding="4" cellspacing="0" class="border1" style="margin:5px 0px;">
<tr>
<td style="width:15%;line-height:22px;" class="alignRight"><b>Varietal Name:</b><br /><b>Web Name:</b><br /><b>Type:</b><br /><b>Resource:</b></td>
<td style="width:15%;"><input type="text" size="30" maxlength="48" name="varietal_name" value="<?php echo $_smarty_tpl->tpl_vars['varietals']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['name'];?>
" />
<br />
<input type="text" size="30" maxlength="48" name="friendly" value="<?php echo $_smarty_tpl->tpl_vars['varietals']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['friendly'];?>
" />
<br />
<select name="type_id">
<option value="0">Choose</option>
<?php
$__section_bot_1_saved = isset($_smarty_tpl->tpl_vars['__smarty_section_bot']) ? $_smarty_tpl->tpl_vars['__smarty_section_bot'] : false;
$__section_bot_1_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['types']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_bot_1_total = $__section_bot_1_loop;
$_smarty_tpl->tpl_vars['__smarty_section_bot'] = new Smarty_Variable(array());
if ($__section_bot_1_total != 0) {
for ($__section_bot_1_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_bot']->value['index'] = 0; $__section_bot_1_iteration <= $__section_bot_1_total; $__section_bot_1_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_bot']->value['index']++){
?>
<option	value="<?php echo $_smarty_tpl->tpl_vars['types']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bot']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bot']->value['index'] : null)]['type_id'];?>
"<?php if ($_smarty_tpl->tpl_vars['varietals']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['type_id'] == $_smarty_tpl->tpl_vars['types']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bot']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bot']->value['index'] : null)]['type_id']) {?> selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['types']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bot']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bot']->value['index'] : null)]['name'];?>
</option>
<?php
}
}
if ($__section_bot_1_saved) {
$_smarty_tpl->tpl_vars['__smarty_section_bot'] = $__section_bot_1_saved;
}
?>
</select>
<br />
<select name="resource_id">
<option value="0">Choose</option>
<?php
$__section_index_2_saved = isset($_smarty_tpl->tpl_vars['__smarty_section_index']) ? $_smarty_tpl->tpl_vars['__smarty_section_index'] : false;
$__section_index_2_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['resources']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_index_2_total = $__section_index_2_loop;
$_smarty_tpl->tpl_vars['__smarty_section_index'] = new Smarty_Variable(array());
if ($__section_index_2_total != 0) {
for ($__section_index_2_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_index']->value['index'] = 0; $__section_index_2_iteration <= $__section_index_2_total; $__section_index_2_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_index']->value['index']++){
?>
<option	value="<?php echo $_smarty_tpl->tpl_vars['resources']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_index']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_index']->value['index'] : null)]['resource_id'];?>
"<?php if ($_smarty_tpl->tpl_vars['varietals']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['resource_id'] == $_smarty_tpl->tpl_vars['resources']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_index']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_index']->value['index'] : null)]['resource_id']) {?> selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['resources']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_index']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_index']->value['index'] : null)]['title'];?>
</option>
<?php
}
}
if ($__section_index_2_saved) {
$_smarty_tpl->tpl_vars['__smarty_section_index'] = $__section_index_2_saved;
}
?>
</select>
<br />&nbsp;<br />
<input type="submit" value="Update Varietal" /></td>
<td style="width:10%;" class="alignRight"><b>Notes:</b></td>
<td style="width:40%;"><textarea cols="60" rows="6" name="notes"><?php echo $_smarty_tpl->tpl_vars['varietals']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['notes'];?>
</textarea></td>
</tr>
</table>
</form>
<?php
}
}
if ($__section_bit_0_saved) {
$_smarty_tpl->tpl_vars['__smarty_section_bit'] = $__section_bit_0_saved;
}
?>
	
<?php echo $_smarty_tpl->tpl_vars['paginator']->value;
}
}
