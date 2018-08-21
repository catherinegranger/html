<?php
/* Smarty version 3.1.30, created on 2018-04-23 21:26:09
  from "/var/www/html/smarty/templates/amn/pages/add_resource.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5ade4f71c07775_35130008',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '392c92bf76abfd1ddd67da14360eea1e0aa0ab3c' => 
    array (
      0 => '/var/www/html/smarty/templates/amn/pages/add_resource.tpl',
      1 => 1523659342,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ade4f71c07775_35130008 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['two']->value == 'success') {?><div class="error">Your work has been succesfully entered.</div><?php }
if ($_smarty_tpl->tpl_vars['two']->value == 'no_title') {?><div class="error">There was no title.</div><?php }
if ($_smarty_tpl->tpl_vars['two']->value == 'too_small') {?><div class="error">Image is too small or non-existent.</div><?php }
if ($_smarty_tpl->tpl_vars['two']->value == 'too_big') {?><div class="error">Image is too large.</div><?php }?>
<h2>Enter New Resource</h2>
<form action="/submit_resource/" method="post" enctype="multipart/form-data">
<table cellpadding="4" cellspacing="0">
<tr>
<td style="text-align:right;"><b>Category:</b></td>
<td><select name="rc_id"><option value="">Select</option>
<?php
$__section_bit_0_saved = isset($_smarty_tpl->tpl_vars['__smarty_section_bit']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit'] : false;
$__section_bit_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['cats']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_bit_0_total = $__section_bit_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_bit'] = new Smarty_Variable(array());
if ($__section_bit_0_total != 0) {
for ($__section_bit_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] = 0; $__section_bit_0_iteration <= $__section_bit_0_total; $__section_bit_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']++){
?>
<option value="<?php echo $_smarty_tpl->tpl_vars['cats']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['rc_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['cats']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['title'];?>
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
<td style="text-align:right;"><b>Title:</b></td>
<td><input type="text" size="50" maxlength="100" name="title" value="<?php echo $_SESSION['title'];?>
" /></td>
</tr>
<tr>
<td style="text-align:right;"><b>Resource URL:</b></td>
<td><input type="text" size="50" maxlength="600" name="resource_url" value="<?php echo $_SESSION['resource_url'];?>
" /></td>
</tr>
<tr>
<td style="text-align:right;"><b>Keyword:</b></td>
<td><input type="text" size="50" maxlength="600" name="keyword" value="<?php echo $_SESSION['keyword'];?>
" /></td>
</tr>
<tr>
<td style="text-align:right;"><b>Details:</b></td>
<td><textarea rows="12" cols="60" name="details"><?php echo $_SESSION['details'];?>
</textarea></td>
</tr>
<tr>
<td style="text-align:right;"><b>Image:</b></td>
<td><input type="file" name="upload_file" /> (less than 500k only jpeg)</td>
</tr>
<tr>
<td>&nbsp;</td>
<td><input type="submit" value="Submit This" class="sbt" /></td>
</tr>
</table>
</form>
<?php }
}
