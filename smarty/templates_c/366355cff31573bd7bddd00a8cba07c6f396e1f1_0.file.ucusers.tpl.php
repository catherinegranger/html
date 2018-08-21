<?php
/* Smarty version 3.1.30, created on 2018-04-24 00:20:28
  from "/var/www/html/smarty/templates/amn/pages/ucusers.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5ade784cb95cc5_78731244',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '366355cff31573bd7bddd00a8cba07c6f396e1f1' => 
    array (
      0 => '/var/www/html/smarty/templates/amn/pages/ucusers.tpl',
      1 => 1523659342,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ade784cb95cc5_78731244 (Smarty_Internal_Template $_smarty_tpl) {
?>
<h2>View Users</h2>

<?php if ($_smarty_tpl->tpl_vars['uc_successes']->value) {?>
<div class="ucsuccess">
<?php
$__section_bit_0_saved = isset($_smarty_tpl->tpl_vars['__smarty_section_bit']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit'] : false;
$__section_bit_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['uc_successes']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_bit_0_total = $__section_bit_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_bit'] = new Smarty_Variable(array());
if ($__section_bit_0_total != 0) {
for ($__section_bit_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] = 0; $__section_bit_0_iteration <= $__section_bit_0_total; $__section_bit_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']++){
?>
&bull;&nbsp;<?php echo $_smarty_tpl->tpl_vars['uc_successes']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)];?>

<br>
<?php
}
}
if ($__section_bit_0_saved) {
$_smarty_tpl->tpl_vars['__smarty_section_bit'] = $__section_bit_0_saved;
}
?>
</div>
<?php }
if ($_smarty_tpl->tpl_vars['uc_errors']->value) {?>
<div class="ucerror">
<?php
$__section_bit_1_saved = isset($_smarty_tpl->tpl_vars['__smarty_section_bit']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit'] : false;
$__section_bit_1_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['uc_errors']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_bit_1_total = $__section_bit_1_loop;
$_smarty_tpl->tpl_vars['__smarty_section_bit'] = new Smarty_Variable(array());
if ($__section_bit_1_total != 0) {
for ($__section_bit_1_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] = 0; $__section_bit_1_iteration <= $__section_bit_1_total; $__section_bit_1_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']++){
?>
&bull;&nbsp;<?php echo $_smarty_tpl->tpl_vars['uc_errors']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)];?>

<br>
<?php
}
}
if ($__section_bit_1_saved) {
$_smarty_tpl->tpl_vars['__smarty_section_bit'] = $__section_bit_1_saved;
}
?>
</div>
<?php }?>

<form action="/delete_ucusers/" method="post">
<table cellpadding="4" cellspacing="1">
<tr>
<td colspan="3"><b>Showing <?php echo $_smarty_tpl->tpl_vars['two']->value;?>
 users</b></td>
<td colspan="6" style="text-align:right;"><a href="/amn/ucusers/wineclub/">Show Wine Club Members</a> | <a href="/amn/ucusers/">Show All</a></td>
</tr>
<tr>
<td class="nowrap" style="width:10%;"><b>Email</b></td>
<?php if ($_smarty_tpl->tpl_vars['two']->value != 'wineclub') {?>
<td class="nowrap" style="width:5%;"><b>User Name</b></td>
<td class="nowrap" style="width:5%;"><b>Display Name</b></td>
<?php }
if ($_smarty_tpl->tpl_vars['two']->value == 'wineclub') {?>
<td class="nowrap" style="width:5%;"><b>Last Name</b></td>
<td class="nowrap" style="width:5%;"><b>State</b></td>
<?php }?>
<td class="nowrap" style="width:5%; text-align:left;"><b>Active</b></td>
<td class="nowrap" style="width:10%; text-align:left;"><b>Subscription#</b></td>
<td class="nowrap" style="width:10%; text-align:left;"><b>Since</b></td>
<td class="nowrap" style="width:40%; text-align:left;"><b>Referral</b></td>
<td class="nowrap" style="width:10%; text-align:left;"><b>Last Sign In</b></td>
<?php if ($_smarty_tpl->tpl_vars['two']->value == 'wineclub') {?>
<td class="nowrap" style="width:5%;"><b>Order#</b></td>
<td class="nowrap" style="width:5%;"><b>Last Order</b></td>
<?php }?>
<td class="nowrap" style="width:5%; text-align:center;"><b>Delete?</b></td>
</tr>
<?php
$__section_bit_2_saved = isset($_smarty_tpl->tpl_vars['__smarty_section_bit']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit'] : false;
$__section_bit_2_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['users']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_bit_2_total = $__section_bit_2_loop;
$_smarty_tpl->tpl_vars['__smarty_section_bit'] = new Smarty_Variable(array());
if ($__section_bit_2_total != 0) {
for ($__section_bit_2_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] = 0; $__section_bit_2_iteration <= $__section_bit_2_total; $__section_bit_2_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']++){
?>
<tr>
<td class="nowrap"><a href="/amn/edit_ucuser/<?php echo $_smarty_tpl->tpl_vars['users']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['id'];?>
/"><?php echo $_smarty_tpl->tpl_vars['users']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['email'];?>
</a></td>
<?php if ($_smarty_tpl->tpl_vars['two']->value != 'wineclub') {?>
<td class="nowrap"><a href="/amn/edit_ucuser/<?php echo $_smarty_tpl->tpl_vars['users']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['id'];?>
/"><?php echo $_smarty_tpl->tpl_vars['users']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['user_name'];?>
</a></td>
<td class="nowrap"><?php echo $_smarty_tpl->tpl_vars['users']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['display_name'];?>
</td>
<?php }
if ($_smarty_tpl->tpl_vars['two']->value == 'wineclub') {?>
<td class="nowrap"><?php echo $_smarty_tpl->tpl_vars['users']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['last_name'];?>
</td>
<td class="nowrap"><?php echo $_smarty_tpl->tpl_vars['users']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['state'];?>
</td>
<?php }?>
<td class="nowrap"><?php echo $_smarty_tpl->tpl_vars['users']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['active'];?>
</td>
<td class="nowrap"><?php echo $_smarty_tpl->tpl_vars['users']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['subscription_id'];?>
</td>
<td class="nowrap"><?php echo $_smarty_tpl->tpl_vars['users']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['subscription_create_date'];?>
</td>
<td><?php echo $_smarty_tpl->tpl_vars['users']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['subscription_referral'];?>
</td>
<td class="nowrap"><?php echo $_smarty_tpl->tpl_vars['users']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['last_sign_in_stamp'];?>
</td>
<?php if ($_smarty_tpl->tpl_vars['two']->value == 'wineclub') {?>
<td class="nowrap"><?php echo $_smarty_tpl->tpl_vars['users']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['order_count'];?>
</td>
<td class="nowrap"><?php echo $_smarty_tpl->tpl_vars['users']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['order_placed'];?>
</td>
<?php }?>
<td class="nowrap" style="text-align:center;"><input type='checkbox' name='delete[<?php echo $_smarty_tpl->tpl_vars['users']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['id'];?>
]' id='delete[<?php echo $_smarty_tpl->tpl_vars['users']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['id'];?>
]' value='<?php echo $_smarty_tpl->tpl_vars['users']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['id'];?>
'></td>
</tr>
</form>
<?php
}
}
if ($__section_bit_2_saved) {
$_smarty_tpl->tpl_vars['__smarty_section_bit'] = $__section_bit_2_saved;
}
?>
</table>
<p>
<input type='submit' name='Submit' value='Delete' />
</p>
</form><?php }
}
