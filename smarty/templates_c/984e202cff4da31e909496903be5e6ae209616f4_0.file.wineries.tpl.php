<?php
/* Smarty version 3.1.30, created on 2018-04-18 01:02:15
  from "/var/www/html/smarty/templates/amn/pages/wineries.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5ad69917e3c020_37345821',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '984e202cff4da31e909496903be5e6ae209616f4' => 
    array (
      0 => '/var/www/html/smarty/templates/amn/pages/wineries.tpl',
      1 => 1523659342,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ad69917e3c020_37345821 (Smarty_Internal_Template $_smarty_tpl) {
?>
<h2>View and Update Wineries</h2>

<?php if ($_smarty_tpl->tpl_vars['for']->value == "success") {?><div class="error">Winery updated successfully!</div><?php }
if ($_smarty_tpl->tpl_vars['for']->value == "deleted") {?><div class="error">Winery has been deleted.</div><?php }
if ($_smarty_tpl->tpl_vars['for']->value == "undeleted") {?><div class="error">Winery has been undeleted.</div><?php }
if ($_smarty_tpl->tpl_vars['for']->value == "error") {?><div class="error">There was a problem.  Maybe a field was left blank?</div><?php }?>
		
<table cellpadding="4" cellspacing="1">
<tr><td colspan="4"><?php echo $_smarty_tpl->tpl_vars['paginator']->value;?>
</td></tr>
<?php if ($_smarty_tpl->tpl_vars['tri']->value) {
$_smarty_tpl->_assignInScope('page', $_smarty_tpl->tpl_vars['tri']->value);
} else {
$_smarty_tpl->_assignInScope('page', "0");
}?>
<tr>
<td colspan="2"><b>Showing <?php echo $_smarty_tpl->tpl_vars['two']->value;?>
 wineries</b></td>
<td colspan="2" style="text-align:right;"><a href="/amn/wineries/active/">Show Active</a> | <a href="/amn/wineries/undeleted/">Show Undeleted</a> | <a href="/amn/wineries/all/">Show All</a></td>
</tr>

<tr>
<td class="border1" style="width:40%;"><b>Winery Name</b></td>
<td class="border1" style="width:20%;text-align:center;"><b>Country</b></td>
<td class="border1" style="width:20%;text-align:center;"><b>Edit</b></td>
<td class="border1" style="width:20%;text-align:center;"><b>Delete?</b></td>
</tr>
<?php
$__section_bit_0_saved = isset($_smarty_tpl->tpl_vars['__smarty_section_bit']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit'] : false;
$__section_bit_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['wineries']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_bit_0_total = $__section_bit_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_bit'] = new Smarty_Variable(array());
if ($__section_bit_0_total != 0) {
for ($__section_bit_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] = 0; $__section_bit_0_iteration <= $__section_bit_0_total; $__section_bit_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']++){
?>
<tr>
<td class="border1"><a href="/amn/edit_winery/<?php echo $_smarty_tpl->tpl_vars['wineries']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['wy_id'];?>
/"><b><?php echo $_smarty_tpl->tpl_vars['wineries']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['name'];?>
</b></a></td>
<td class="border1" style="text-align:center;"><?php echo $_smarty_tpl->tpl_vars['wineries']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['full_name'];?>
</td>
<td class="border1" style="text-align:center;"><a href="/amn/edit_winery/<?php echo $_smarty_tpl->tpl_vars['wineries']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['wy_id'];?>
/">YES</a></td>
<td class="border1" style="text-align:center;"><?php if ($_smarty_tpl->tpl_vars['wineries']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['deleted'] == '0') {?><a href="/amn/wineries/<?php echo $_smarty_tpl->tpl_vars['two']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['page']->value;?>
/delete/<?php echo $_smarty_tpl->tpl_vars['wineries']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['wy_id'];?>
/">YES</a><?php } else { ?><a href="/amn/wineries/<?php echo $_smarty_tpl->tpl_vars['two']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['page']->value;?>
/undelete/<?php echo $_smarty_tpl->tpl_vars['wineries']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['wy_id'];?>
/">NO</a><?php }?></td>
</tr>
<?php
}
}
if ($__section_bit_0_saved) {
$_smarty_tpl->tpl_vars['__smarty_section_bit'] = $__section_bit_0_saved;
}
?>
<tr><td colspan="4"><?php echo $_smarty_tpl->tpl_vars['paginator']->value;?>
</td></tr>
</table>
<?php }
}
