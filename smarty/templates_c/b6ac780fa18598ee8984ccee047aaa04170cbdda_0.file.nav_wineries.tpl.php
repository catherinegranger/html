<?php
/* Smarty version 3.1.30, created on 2018-04-17 03:10:59
  from "/var/www/html/smarty/templates/modules/nav_wineries.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5ad565c3016be5_88725459',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b6ac780fa18598ee8984ccee047aaa04170cbdda' => 
    array (
      0 => '/var/www/html/smarty/templates/modules/nav_wineries.tpl',
      1 => 1523659342,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ad565c3016be5_88725459 (Smarty_Internal_Template $_smarty_tpl) {
?>
<nav class="bdgridnav3 bdnavigation">

<ul class="top-level">
<?php
$__section_bit_2_saved = isset($_smarty_tpl->tpl_vars['__smarty_section_bit']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit'] : false;
$__section_bit_2_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['ncc']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_bit_2_total = $__section_bit_2_loop;
$_smarty_tpl->tpl_vars['__smarty_section_bit'] = new Smarty_Variable(array());
if ($__section_bit_2_total != 0) {
for ($__section_bit_2_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] = 0; $__section_bit_2_iteration <= $__section_bit_2_total; $__section_bit_2_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']++){
$_smarty_tpl->tpl_vars['__smarty_section_bit']->value['last'] = ($__section_bit_2_iteration == $__section_bit_2_total);
if ((isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['last']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['last'] : null)) {?>
<li class="last"><a href="/regions/<?php echo $_smarty_tpl->tpl_vars['ncc']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['web_name'];?>
/"<?php if ($_smarty_tpl->tpl_vars['ncc']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['c_id'] == $_smarty_tpl->tpl_vars['c_id']->value) {?> class="on"<?php }?> title="<?php echo $_smarty_tpl->tpl_vars['ncc']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['full_name'];?>
 Wines"><?php echo $_smarty_tpl->tpl_vars['ncc']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['full_name'];?>
</a>
<?php } else { ?>
<li><a href="/regions/<?php echo $_smarty_tpl->tpl_vars['ncc']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['web_name'];?>
/"<?php if ($_smarty_tpl->tpl_vars['ncc']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['c_id'] == $_smarty_tpl->tpl_vars['c_id']->value) {?> class="on"<?php }?> title="<?php echo $_smarty_tpl->tpl_vars['ncc']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['full_name'];?>
 Wines"><?php echo $_smarty_tpl->tpl_vars['ncc']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['full_name'];?>
</a>
<?php }
if ($_smarty_tpl->tpl_vars['ncc']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['c_id'] == $_smarty_tpl->tpl_vars['c_id']->value) {?>
	<ul class="sub-level">
	<?php
$__section_bit2_3_saved = isset($_smarty_tpl->tpl_vars['__smarty_section_bit2']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit2'] : false;
$__section_bit2_3_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['nwys']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_bit2_3_total = $__section_bit2_3_loop;
$_smarty_tpl->tpl_vars['__smarty_section_bit2'] = new Smarty_Variable(array());
if ($__section_bit2_3_total != 0) {
for ($__section_bit2_3_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_bit2']->value['index'] = 0; $__section_bit2_3_iteration <= $__section_bit2_3_total; $__section_bit2_3_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_bit2']->value['index']++){
?>
	<?php if ($_smarty_tpl->tpl_vars['ncc']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['c_id'] == $_smarty_tpl->tpl_vars['nwys']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit2']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit2']->value['index'] : null)]['c_id']) {?>
	<li><a href="/winery/<?php echo $_smarty_tpl->tpl_vars['nwys']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit2']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit2']->value['index'] : null)]['web_name'];?>
/"<?php if ($_smarty_tpl->tpl_vars['winery_web_name']->value == $_smarty_tpl->tpl_vars['nwys']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit2']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit2']->value['index'] : null)]['web_name']) {?> class="on"<?php }?> title="<?php echo $_smarty_tpl->tpl_vars['nwys']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit2']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit2']->value['index'] : null)]['name'];?>
 Winery"><?php echo $_smarty_tpl->tpl_vars['nwys']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit2']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit2']->value['index'] : null)]['name'];?>
</a></li>
	<?php }?>
	<?php
}
}
if ($__section_bit2_3_saved) {
$_smarty_tpl->tpl_vars['__smarty_section_bit2'] = $__section_bit2_3_saved;
}
?>
	</ul>
<?php }?>
</li>
<?php
}
}
if ($__section_bit_2_saved) {
$_smarty_tpl->tpl_vars['__smarty_section_bit'] = $__section_bit_2_saved;
}
?>
</ul>

</nav><?php }
}
