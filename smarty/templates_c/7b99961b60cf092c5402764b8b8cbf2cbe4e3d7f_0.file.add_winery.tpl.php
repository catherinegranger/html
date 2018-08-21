<?php
/* Smarty version 3.1.30, created on 2018-04-23 21:33:41
  from "/var/www/html/smarty/templates/amn/pages/add_winery.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5ade5135132555_09383378',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7b99961b60cf092c5402764b8b8cbf2cbe4e3d7f' => 
    array (
      0 => '/var/www/html/smarty/templates/amn/pages/add_winery.tpl',
      1 => 1523659342,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ade5135132555_09383378 (Smarty_Internal_Template $_smarty_tpl) {
?>
<h2>Add a New Winery</h2>
		
<?php if ($_smarty_tpl->tpl_vars['two']->value == "success") {?><div class="error" style="text-align:center;">Winery entered successfully!</div><?php }
if ($_smarty_tpl->tpl_vars['two']->value == "error") {?><div class="error" style="text-align:center;">There was a problem.  Maybe the Name and/or Country were left blank?</div><?php }?>
		
<form action="/submit_winery/" method="post">
<table cellpadding="4" cellspacing="0">
<tr>
<td style="width:15%;" class="alignRight"><b>Winery Name:</b></td>
<td style="width:85%;"><input type="text" size="30" maxlength="48" name="winery_name" value="<?php echo $_SESSION['winery_name'];?>
" /></td>
</tr>
<tr>
<td class="alignRight"><b>Web Name:</b></td>
<td><input type="text" size="30" maxlength="48" name="web_name" value="<?php echo $_SESSION['web_name'];?>
" /></td>
</tr>
<tr>
<td class="alignRight"><b>Proprietor:</b></td>
<td><input type="text" size="30" maxlength="48" name="proprietor" value="<?php echo $_SESSION['proprietor'];?>
" /></td>
</tr>
<tr>
<td class="alignRight"><b>Website:</b></td>
<td><input type="text" size="30" maxlength="48" name="website" value="<?php echo $_SESSION['website'];?>
" /></td>
</tr>
<tr>
<td class="alignRight"><b>Country:</b></td>
<td><select name="c_id">
<option value="0">Select</option>
<?php
$__section_bit_0_saved = isset($_smarty_tpl->tpl_vars['__smarty_section_bit']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit'] : false;
$__section_bit_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['countries']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_bit_0_total = $__section_bit_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_bit'] = new Smarty_Variable(array());
if ($__section_bit_0_total != 0) {
for ($__section_bit_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] = 0; $__section_bit_0_iteration <= $__section_bit_0_total; $__section_bit_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']++){
?>
<option value="<?php echo $_smarty_tpl->tpl_vars['countries']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['c_id'];?>
"<?php if ($_SESSION['c_id'] == $_smarty_tpl->tpl_vars['countries']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['c_id']) {?> selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['countries']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['country_name'];?>
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
<td class="alignRight"><b>Appellation:</b></td>
<td><input type="text" size="30" maxlength="48" name="winery_appellation" value="<?php echo $_SESSION['winery_appellation'];?>
" /></td>
</tr>
<tr>
<td class="alignRight"><b>Year Established:</b></td>
<td><input type="text" size="4" maxlength="4" name="established" value="<?php echo $_SESSION['established'];?>
" /></td>
</tr>
<tr>
<td class="alignRight"><b>Active:</b></td>
<td>YES<input type="radio" value="0" name="inactive"<?php if ($_SESSION['inactive'] == '0') {?> checked<?php }?> /> NO<input type="radio" value="1" name="inactive"<?php if ($_SESSION['inactive'] == '1') {?> checked<?php }?> /></td>
</tr>
<tr>
<td class="alignRight"><b>Details:</b></td>
<td><textarea cols="70" rows="10" name="details"><?php echo $_SESSION['details'];?>
</textarea></td>
</tr>
<tr>
<td class="alignRight"><b>Contact Info:</b><br /><i>Will not display publicly</i></td>
<td><textarea cols="30" rows="3" name="contact"><?php echo $_SESSION['contact'];?>
</textarea></td>
</tr>
<tr><td colspan="2">&nbsp;</td></tr>
<tr><td colspan="2"><h3>Techsheet Information</h3></td></tr>
<tr><td colspan="2">&nbsp;</td></tr>
<tr>
<td class="alignRight"><b>Phonetic Name:</b></td>
<td><input type="text" size="30" maxlength="48" name="phonetic_name" value="<?php echo $_SESSION['phonetic_name'];?>
" /></td>
</tr>
<tr>
<td class="alignRight"><b>Phonetic Appellation:</b></td>
<td><input type="text" size="30" maxlength="48" name="phonetic_appellation" value="<?php echo $_SESSION['phonetic_appellation'];?>
" /></td>
</tr>
<tr>
<td class="alignRight"><b>Introduction:</b></td>
<td><textarea cols="70" rows="9" name="introduction"><?php echo $_SESSION['introduction'];?>
</textarea></td>
</tr>
<tr>
<td class="alignRight"><b>Vineyards:</b></td>
<td><textarea cols="70" rows="9" name="vineyards"><?php echo $_SESSION['vineyards'];?>
</textarea></td>
</tr>
<tr>
<td class="alignRight"><b>Wine Making:</b></td>
<td><textarea cols="70" rows="9" name="winemaking"><?php echo $_SESSION['winemaking'];?>
</textarea></td>
</tr>
<tr>
<td class="alignRight"><b>Wine Making (2nd Part):</b></td>
<td><textarea cols="70" rows="9" name="winemaking2"><?php echo $_SESSION['winemaking2'];?>
</textarea></td>
</tr>
<tr>
<td class="alignRight">&nbsp;</td>
<td><input type="submit" value="Add Winery" /></td>
</tr>
</table>
</form><?php }
}
