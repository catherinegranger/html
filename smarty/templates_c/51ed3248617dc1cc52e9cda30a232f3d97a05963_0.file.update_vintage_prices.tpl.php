<?php
/* Smarty version 3.1.30, created on 2018-05-01 17:50:28
  from "/var/www/html/smarty/templates/amn/pages/update_vintage_prices.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5ae8a8e4cc7269_45421181',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '51ed3248617dc1cc52e9cda30a232f3d97a05963' => 
    array (
      0 => '/var/www/html/smarty/templates/amn/pages/update_vintage_prices.tpl',
      1 => 1523659342,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ae8a8e4cc7269_45421181 (Smarty_Internal_Template $_smarty_tpl) {
?>
<h2>Update Vintage Prices</h2>
<div class="error"><?php echo $_smarty_tpl->tpl_vars['error']->value;?>
</div>
<table cellpadding="2" cellspacing="1">
<tr>
<td class="border1" style="white-space:nowrap;text-align:center;"><b>Product Id</b></td>
<td class="border1" style="white-space:nowrap;text-align:center;"><b>Winery</b></td>
<td class="border1" style="white-space:nowrap;text-align:center;"><b>Name</b></td>
<td class="border1" style="white-space:nowrap;text-align:center;"><b>Year</b></td>
<td class="border1" style="white-space:nowrap;text-align:center;"><b>Size</b></td>
<td class="border1" style="white-space:nowrap;text-align:center;"><b>CA Price</b></td>
<td class="border1" style="white-space:nowrap;text-align:center;"><b>Real name</b></td>
</tr>
<?php
$__section_bit_0_saved = isset($_smarty_tpl->tpl_vars['__smarty_section_bit']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit'] : false;
$__section_bit_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['vintages']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_bit_0_total = $__section_bit_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_bit'] = new Smarty_Variable(array());
if ($__section_bit_0_total != 0) {
for ($__section_bit_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] = 0; $__section_bit_0_iteration <= $__section_bit_0_total; $__section_bit_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']++){
?>
<tr>
<td class="border1" style="white-space:nowrap;"><?php echo $_smarty_tpl->tpl_vars['vintages']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)][0];?>
</td>
<td class="border1" ><?php echo $_smarty_tpl->tpl_vars['vintages']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)][1];?>
</td>
<td class="border1" ><?php echo $_smarty_tpl->tpl_vars['vintages']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)][2];?>
</td>
<td class="border1" style="white-space:nowrap;text-align:center;"><?php echo $_smarty_tpl->tpl_vars['vintages']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)][3];?>
</td>
<td class="border1" style="white-space:nowrap;text-align:center;"><?php echo $_smarty_tpl->tpl_vars['vintages']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)][4];?>
</td>
<td class="border1" style="white-space:nowrap;text-align:right;"><?php echo $_smarty_tpl->tpl_vars['vintages']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)][5];?>
</td>
<td class="border1" style="white-space:nowrap;text-align:left;"><?php echo $_smarty_tpl->tpl_vars['vintages']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)][6];?>
</td>
</tr>
<?php
}
}
if ($__section_bit_0_saved) {
$_smarty_tpl->tpl_vars['__smarty_section_bit'] = $__section_bit_0_saved;
}
?>
</table>

<?php }
}
