<?php
/* Smarty version 3.1.30, created on 2018-04-26 00:26:21
  from "/var/www/html/smarty/templates/amn/pages/edit_winery.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5ae11cad3dcee6_96167660',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '37066359fcde237a080b2e999237bca70316677a' => 
    array (
      0 => '/var/www/html/smarty/templates/amn/pages/edit_winery.tpl',
      1 => 1523659342,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ae11cad3dcee6_96167660 (Smarty_Internal_Template $_smarty_tpl) {
?>
<h2>Edit Winery</h2>
		
<?php if ($_smarty_tpl->tpl_vars['tri']->value == "success") {?><div class="error">Winery updated successfully! &nbsp; <a href="/winery/<?php echo $_smarty_tpl->tpl_vars['web_name']->value;?>
" target="_blank">View the winery page</a></div><?php }
if ($_smarty_tpl->tpl_vars['tri']->value == "error") {?><div class="error">There was a problem.  Maybe the Name and/or Country were left blank?</div><?php }?>
		
<form action="/update_winery/" method="post">
<input type="hidden" name="wy_id" value="<?php echo $_smarty_tpl->tpl_vars['two']->value;?>
" />
		
<table cellpadding="4" cellspacing="0">
<tr>
<td style="width:15%;" class="alignRight"><b>Winery Name:</b></td>
<td style="width:85%;"><input type="text" size="30" maxlength="48" name="winery_name" value="<?php echo $_smarty_tpl->tpl_vars['winery_name']->value;?>
" /></td>
</tr>
<tr>
<td class="alignRight"><b>Web Name:</b></td>
<td><input type="text" size="30" maxlength="48" name="web_name" value="<?php echo $_smarty_tpl->tpl_vars['web_name']->value;?>
" /></td>
</tr>
<tr>
<td class="alignRight"><b>Proprietor:</b></td>
<td><input type="text" size="30" maxlength="48" name="proprietor" value="<?php echo $_smarty_tpl->tpl_vars['proprietor']->value;?>
" /></td>
</tr>
<tr>
<td class="alignRight"><b>Website:</b></td>
<td><input type="text" size="30" maxlength="48" name="website" value="<?php echo $_smarty_tpl->tpl_vars['website']->value;?>
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
"<?php if ($_smarty_tpl->tpl_vars['countries']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['c_id'] == $_smarty_tpl->tpl_vars['c_id']->value) {?> selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['countries']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['full_name'];?>
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
<td><input type="text" size="30" maxlength="48" name="winery_appellation" value="<?php echo $_smarty_tpl->tpl_vars['winery_appellation']->value;?>
" /></td>
</tr>
<tr>
<td class="alignRight"><b>Year Established:</b></td>
<td><input type="text" size="4" maxlength="4" name="established" value="<?php echo $_smarty_tpl->tpl_vars['established']->value;?>
" /></td>
</tr>
<tr>
<td class="alignRight"><b>Active:</b></td>
<td>YES<input type="radio" value="0" name="inactive"<?php if ($_smarty_tpl->tpl_vars['inactive']->value == '0') {?> checked<?php }?> /> NO<input type="radio" value="1" name="inactive"<?php if ($_smarty_tpl->tpl_vars['inactive']->value == '1') {?> checked<?php }?> /></td>
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
<td class="alignRight"><b>Details:</b></td>
<td><textarea cols="70" rows="12" name="details"><?php echo $_smarty_tpl->tpl_vars['details']->value;?>
</textarea></td>
</tr>
<td class="alignRight"><b>Short Description:</b></td>
<td><textarea cols="70" rows="12" name="short_description"><?php echo $_smarty_tpl->tpl_vars['short_description']->value;?>
</textarea></td>
</tr>
<tr>
<td class="alignRight"><b>Contact Info:</b><br /><i>Will not display publicly</i></td>
<td><textarea cols="30" rows="3" name="contact"><?php echo $_smarty_tpl->tpl_vars['contact']->value;?>
</textarea></td>
</tr>
<tr><td colspan="2">&nbsp;</td></tr>
<tr><td colspan="2"><h3>Techsheet Information</h3></td></tr>
<tr><td colspan="2">&nbsp;</td></tr>
<tr>
<td class="alignRight"><b>Phonetic Name:</b></td>
<td><input type="text" size="30" maxlength="48" name="phonetic_name" value="<?php echo $_smarty_tpl->tpl_vars['phonetic_name']->value;?>
" /></td>
</tr>
<tr>
<td class="alignRight"><b>Phonetic Appellation:</b></td>
<td><input type="text" size="30" maxlength="48" name="phonetic_appellation" value="<?php echo $_smarty_tpl->tpl_vars['phonetic_appellation']->value;?>
" /></td>
</tr>
<tr>
<td class="alignRight"><b>Motto:</b></td>
<td><textarea cols="70" rows="5" name="motto"><?php echo $_smarty_tpl->tpl_vars['motto']->value;?>
</textarea></td>
</tr>
<tr>
<td class="alignRight"><b>Intro Img Caption:</b></td>
<td><input type="text" size="70" maxlength="128" name="introduction_img_caption" value="<?php echo $_smarty_tpl->tpl_vars['introduction_img_caption']->value;?>
" /></td>
</tr>
<tr>
<td class="alignRight"><b>Introduction:</b></td>
<td><textarea cols="70" rows="9" name="introduction"><?php echo $_smarty_tpl->tpl_vars['introduction']->value;?>
</textarea></td>
</tr>
<tr>
<td class="alignRight"><b>Vineyards:</b></td>
<td><textarea cols="70" rows="9" name="vineyards"><?php echo $_smarty_tpl->tpl_vars['vineyards']->value;?>
</textarea></td>
</tr>
<tr>
<td class="alignRight"><b>Wine Making:</b></td>
<td><textarea cols="70" rows="9" name="winemaking"><?php echo $_smarty_tpl->tpl_vars['winemaking']->value;?>
</textarea></td>
</tr>
<td class="alignRight"><b>Wine Making (2nd Part):</b></td>
<td><textarea cols="70" rows="9" name="winemaking2"><?php echo $_smarty_tpl->tpl_vars['winemaking2']->value;?>
</textarea></td>
</tr>
<tr>
<td class="alignRight">&nbsp;</td>
<td><input type="submit" value="Update Winery" /></td>
</tr>
</table>
</form><?php }
}
