<?php
/* Smarty version 3.1.30, created on 2018-04-18 01:01:51
  from "/var/www/html/smarty/templates/amn/pages/orders.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5ad698ffcc9e00_18665754',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '94561295f31ac10c64db13d739c250725139223b' => 
    array (
      0 => '/var/www/html/smarty/templates/amn/pages/orders.tpl',
      1 => 1523659342,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ad698ffcc9e00_18665754 (Smarty_Internal_Template $_smarty_tpl) {
?>
<h2>Order History</h2>
<div>
Welcome <?php echo $_smarty_tpl->tpl_vars['display_name']->value;?>
!
</div>
<br>
<table cellpadding="4" cellspacing="0" >
<tr><td colspan="8"><?php echo $_smarty_tpl->tpl_vars['pages']->value;?>
</td></tr>
<tr>
<td colspan="4"><b>Showing <?php echo $_smarty_tpl->tpl_vars['two']->value;?>
 orders</b></td>
<td colspan="4" style="text-align:right;"><a href="/amn/orders/active/0/">Show Active</a> | <a href="/amn/orders/suspended/0/">Show Suspended</a> | <a href="/amn/orders/all/">Show All</a></td>
</tr>
<tr>
<td class="nowrap" style="width:8%;border:none;"><b>Ordered By</b></td>
<td class="nowrap" style="width:8%;border:none;"><b>Ship To</b></td>
<td class="nowrap" style="width:4%;border:none;"><b>State</b></td>
<td class="nowrap" style="width:5%;border:none;"><b>Placed</b></td>
<td class="nowrap" style="width:5%;border:none;"><b>ID#</b></td>
<td class="nowrap" style="width:10%;border:none;"><b>Status</b></td>
<td class="nowrap" style="width:5%;border:none;"><b>Total</b></td>
<td  style="border:none;"><b>Instructions</b></td>
</tr>
<?php
$__section_bit_0_saved = isset($_smarty_tpl->tpl_vars['__smarty_section_bit']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit'] : false;
$__section_bit_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['orders']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_bit_0_total = $__section_bit_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_bit'] = new Smarty_Variable(array());
if ($__section_bit_0_total != 0) {
for ($__section_bit_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] = 0; $__section_bit_0_iteration <= $__section_bit_0_total; $__section_bit_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']++){
?>
<tr>
<td class="nowrap" style="border:none;"><a href="/amn/edit_order/<?php echo $_smarty_tpl->tpl_vars['orders']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['o_id'];?>
/"><?php echo $_smarty_tpl->tpl_vars['orders']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['name'];?>
</a></td>
<td class="nowrap" style="border:none;"><?php echo $_smarty_tpl->tpl_vars['orders']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['ship_to'];?>
</td>
<td class="nowrap" style="border:none;"><?php echo $_smarty_tpl->tpl_vars['orders']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['ship_state'];?>
</td>
<td class="nowrap" style="border:none;"><?php echo $_smarty_tpl->tpl_vars['orders']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['placed'];?>
</td>
<td class="nowrap" style="border:none;"><?php echo $_smarty_tpl->tpl_vars['orders']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['o_id'];?>
</td>
<td class="nowrap" style="border:none;"><?php echo $_smarty_tpl->tpl_vars['orders']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['status'];?>
</td>
<td class="nowrap" style="border:none;">$<?php echo $_smarty_tpl->tpl_vars['orders']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['grand_total'];?>
</td>
<td  style="border:none;"><?php echo $_smarty_tpl->tpl_vars['orders']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['instructions'];?>
</td>
</tr>
<?php
}
}
if ($__section_bit_0_saved) {
$_smarty_tpl->tpl_vars['__smarty_section_bit'] = $__section_bit_0_saved;
}
?>
<tr><td colspan="8"><?php echo $_smarty_tpl->tpl_vars['pages']->value;?>
</td></tr>
</table>
<?php }
}
