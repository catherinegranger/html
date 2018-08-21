<?php
/* Smarty version 3.1.30, created on 2018-04-30 16:41:39
  from "/var/www/html/smarty/templates/amn/pages/customers.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5ae74743c04675_86644142',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '05be4a3afe474b98723cf4ecfcc547ab66d98701' => 
    array (
      0 => '/var/www/html/smarty/templates/amn/pages/customers.tpl',
      1 => 1523659342,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ae74743c04675_86644142 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['tri']->value) {
$_smarty_tpl->_assignInScope('page', $_smarty_tpl->tpl_vars['tri']->value);
} else {
$_smarty_tpl->_assignInScope('page', "0");
}?>

<?php if ($_smarty_tpl->tpl_vars['report']->value == "solve_report") {?>
<div class="error">
Report in <a href="<?php echo $_smarty_tpl->tpl_vars['report_url']->value;?>
" target="_blank"><?php echo $_smarty_tpl->tpl_vars['report_url']->value;?>
</a> 
<br />Monthly Report in <a href="<?php echo $_smarty_tpl->tpl_vars['monthly_report_url']->value;?>
" target="_blank"><?php echo $_smarty_tpl->tpl_vars['monthly_report_url']->value;?>
</a> 
<br />Country Report in <a href="<?php echo $_smarty_tpl->tpl_vars['country_report_url']->value;?>
" target="_blank"><?php echo $_smarty_tpl->tpl_vars['country_report_url']->value;?>
</a> 
<br />Orders Report in <a href="<?php echo $_smarty_tpl->tpl_vars['orders_report_url']->value;?>
" target="_blank"><?php echo $_smarty_tpl->tpl_vars['orders_report_url']->value;?>
</a> 
<br /><?php echo $_smarty_tpl->tpl_vars['error']->value;?>

</div>

<h2>Store Customers
<input type="hidden" name="page" value="<?php echo $_smarty_tpl->tpl_vars['page']->value;?>
" />
</h2>

<div >
<?php echo $_smarty_tpl->tpl_vars['paginator']->value;?>

<table cellpadding="2" cellspacing="1">
<?php
$__section_bit_0_saved = isset($_smarty_tpl->tpl_vars['__smarty_section_bit']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit'] : false;
$__section_bit_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['customers']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_bit_0_total = $__section_bit_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_bit'] = new Smarty_Variable(array());
if ($__section_bit_0_total != 0) {
for ($__section_bit_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] = 0; $__section_bit_0_iteration <= $__section_bit_0_total; $__section_bit_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']++){
?>
<tr>
<td class="border1" ><a href="/amn/edit_customer/<?php echo $_smarty_tpl->tpl_vars['customers']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['order_id'];?>
/"><?php echo $_smarty_tpl->tpl_vars['customers']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['name'];?>
</a></td>
<td class="border1" ><?php echo $_smarty_tpl->tpl_vars['customers']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['email'];?>
</td>
<td class="border1" ><?php echo $_smarty_tpl->tpl_vars['customers']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['phone'];?>
</td>
<td class="border1" ><?php echo $_smarty_tpl->tpl_vars['customers']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['full_address'];?>
</td>
<td class="border1" ><?php echo $_smarty_tpl->tpl_vars['customers']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['state'];?>
</td>
<td class="border1" ><?php echo $_smarty_tpl->tpl_vars['customers']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['placed'];?>
</td>
<td class="border1" >$<?php echo $_smarty_tpl->tpl_vars['customers']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['grand_total'];?>
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

<?php echo $_smarty_tpl->tpl_vars['paginator']->value;?>

</div>

<?php } else { ?>
<div>
<p class="large">Click <a href="/amn/customers/solve_reports/">here</a> for the Solve360 reports.
</p>
<h2>Montly Customers</h2>
<p class="large">
Number of orders this month: <?php echo $_smarty_tpl->tpl_vars['order_qty']->value;?>

<br>
Number of orders last month: <?php echo $_smarty_tpl->tpl_vars['past_order_qty']->value;?>

</p>
<table cellpadding="4" cellspacing="0" >
<tr>
<td class="nowrap" style="width:8%;border:none;"><b>Customer</b></td>
<td class="nowrap" style="width:5%;border:none;"><b>Email</b></td>
<td class="nowrap" style="width:5%;border:none;"><b>BDW orders</b></td>
<td class="nowrap" style="width:4%;border:none;"><b>State</b></td>
<td class="nowrap" style="width:5%;border:none;"><b>Order ID</b></td>
<td class="nowrap" style="width:5%;border:none;"><b>Placed</b></td>
<td class="nowrap" style="width:10%;border:none;"><b>Status</b></td>
<td class="nowrap" style="width:5%;border:none;"><b>Total</b></td>
</tr>
<?php
$__section_bit_1_saved = isset($_smarty_tpl->tpl_vars['__smarty_section_bit']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit'] : false;
$__section_bit_1_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['orders']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_bit_1_total = $__section_bit_1_loop;
$_smarty_tpl->tpl_vars['__smarty_section_bit'] = new Smarty_Variable(array());
if ($__section_bit_1_total != 0) {
for ($__section_bit_1_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] = 0; $__section_bit_1_iteration <= $__section_bit_1_total; $__section_bit_1_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']++){
?>
<tr>
<td class="nowrap" style="border:none;"><a href="/amn/edit_order/<?php echo $_smarty_tpl->tpl_vars['orders']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['o_id'];?>
/"><?php echo $_smarty_tpl->tpl_vars['orders']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['name'];?>
</a></td>
<td class="nowrap" style="border:none;"><?php echo $_smarty_tpl->tpl_vars['orders']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['email'];?>
</td>
<td class="nowrap" style="border:none;"><?php echo $_smarty_tpl->tpl_vars['orders']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['total_orders'];?>
</td>
<td class="nowrap" style="border:none;"><?php echo $_smarty_tpl->tpl_vars['orders']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['state'];?>
</td>
<td class="nowrap" style="border:none;"><?php echo $_smarty_tpl->tpl_vars['orders']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['o_id'];?>
</td>
<td class="nowrap" style="border:none;"><?php echo $_smarty_tpl->tpl_vars['orders']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['placed'];?>
</td>
<td class="nowrap" style="border:none;"><?php echo $_smarty_tpl->tpl_vars['orders']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['status'];?>
</td>
<td class="nowrap" style="border:none;">$<?php echo $_smarty_tpl->tpl_vars['orders']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['grand_total'];?>
</td>
</tr>
<?php
}
}
if ($__section_bit_1_saved) {
$_smarty_tpl->tpl_vars['__smarty_section_bit'] = $__section_bit_1_saved;
}
?>
</table>

</div>
<?php }
}
}
