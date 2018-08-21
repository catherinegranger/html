<?php
/* Smarty version 3.1.30, created on 2018-04-24 00:20:36
  from "/var/www/html/smarty/templates/amn/pages/edit_ucuser.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5ade785494fb50_88291960',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd36312f5736c2db9f0099f8499196d5a81f32df9' => 
    array (
      0 => '/var/www/html/smarty/templates/amn/pages/edit_ucuser.tpl',
      1 => 1523659342,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:modules/mod_succerrors.tpl' => 1,
  ),
),false)) {
function content_5ade785494fb50_88291960 (Smarty_Internal_Template $_smarty_tpl) {
?>
<h2>Edit User <?php echo $_smarty_tpl->tpl_vars['user']->value['user_name'];?>
</h2>
<br>

<?php $_smarty_tpl->_subTemplateRender("file:modules/mod_succerrors.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


		
<form action="/update_ucuser/" method="post">
<input type="hidden" name="userId" value="<?php echo $_smarty_tpl->tpl_vars['two']->value;?>
" />
		
<table cellpadding="4" cellspacing="0">
<tr>
<td class="alignRight"><b>Display Name:</b></td>
<td><input type="text" size="50" maxlength="60" name="display_name" value="<?php echo $_smarty_tpl->tpl_vars['user']->value['display_name'];?>
" /></td>
</tr>
<tr>
<td class="alignRight"><b>Title:</b></td>
<td><input type="text" size="50" maxlength="60" name="title" value="<?php echo $_smarty_tpl->tpl_vars['user']->value['title'];?>
" /></td>
</tr>
<tr>
<td class="alignRight"><b>Email:</b></td>
<td><input type="text" size="50" maxlength="60" name="email" value="<?php echo $_smarty_tpl->tpl_vars['user']->value['email'];?>
" /></td>
</tr>
<?php if ($_smarty_tpl->tpl_vars['user']->value['active']) {?>
<tr>
<td style="width:20%;" class="alignRight"><b>Active:</b></td>
<td style="width:80%;">Yes</td>
</tr>
<?php } else { ?>
<tr>
<td style="width:20%;" class="alignRight"><b>Active:</b></td>
<td style="width:80%;">No</td>
</tr>
<tr>
<td style="width:20%;" class="alignRight"><b>Activate:</b></td>
<td style="width:80%;"><input type='checkbox' name='activate' id='activate' value='activate'></td>
</tr>
<?php }?>
<tr>
<td class="alignRight"><b>Subscription Status Date:</b></td><td><?php echo $_smarty_tpl->tpl_vars['user']->value['subscription_status_date_pretty'];?>
</td>
</tr>
<tr>
<td class="alignRight"><b>Subscription Expiration Date:</b></td><td><?php echo $_smarty_tpl->tpl_vars['user']->value['subscription_expiration_date'];?>
</td>
</tr>
<tr>
<td class="alignRight"><b>Subscription #:</b></td><td><input type="text" size="50" maxlength="60" name="subscription_id" value="<?php echo $_smarty_tpl->tpl_vars['user']->value['subscription_id'];?>
" /></td>
</tr>
<tr>
<td class="alignRight"><b>Subscription Status:</b></td><td><input type="text" size="50" maxlength="60" name="subscription_status" value="<?php echo $_smarty_tpl->tpl_vars['user']->value['subscription_status'];?>
" /></td>
</tr>
<tr>
<td class="alignRight"><b>Subscription Message:</b></td><td><input type="text" size="50" maxlength="60" name="subscription_message" value="<?php echo $_smarty_tpl->tpl_vars['user']->value['subscription_message'];?>
" /></td>
</tr>
<td class="alignRight"><b>Subscription Referral:</b></td><td><input type="text" size="50" maxlength="60" name="subscription_referral" value="<?php echo $_smarty_tpl->tpl_vars['user']->value['subscription_referral'];?>
" /></td>
</tr>

<tr>
<td class="alignRight"><b>Delete:</b></td>
<td><input type="checkbox" name='delete[<?php echo $_smarty_tpl->tpl_vars['user']->value['id'];?>
]' id='delete[<?php echo $_smarty_tpl->tpl_vars['user']->value['id'];?>
]' value='<?php echo $_smarty_tpl->tpl_vars['user']->value['id'];?>
' /></td>
</tr>
<?php if ($_smarty_tpl->tpl_vars['permissions']->value) {?>
<tr>
<td class="alignRight"><b>Remove Permission:</b></td>
<td>
<?php
$__section_bit_0_saved = isset($_smarty_tpl->tpl_vars['__smarty_section_bit']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit'] : false;
$__section_bit_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['permissions']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_bit_0_total = $__section_bit_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_bit'] = new Smarty_Variable(array());
if ($__section_bit_0_total != 0) {
for ($__section_bit_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] = 0; $__section_bit_0_iteration <= $__section_bit_0_total; $__section_bit_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']++){
?>
<input type="checkbox" name='removePermission[<?php echo $_smarty_tpl->tpl_vars['permissions']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['id'];?>
]' id='removePermission[<?php echo $_smarty_tpl->tpl_vars['permissions']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['id'];?>
]' value='<?php echo $_smarty_tpl->tpl_vars['permissions']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['id'];?>
' /> <?php echo $_smarty_tpl->tpl_vars['permissions']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['name'];?>

<br>
<?php
}
}
if ($__section_bit_0_saved) {
$_smarty_tpl->tpl_vars['__smarty_section_bit'] = $__section_bit_0_saved;
}
?>
</td>
</tr>
<?php }
if ($_smarty_tpl->tpl_vars['newPermissions']->value) {?>
<tr>
<td class="alignRight"><b>Add Permission:</b></td>
<td>
<?php
$__section_bit_1_saved = isset($_smarty_tpl->tpl_vars['__smarty_section_bit']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit'] : false;
$__section_bit_1_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['newPermissions']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_bit_1_total = $__section_bit_1_loop;
$_smarty_tpl->tpl_vars['__smarty_section_bit'] = new Smarty_Variable(array());
if ($__section_bit_1_total != 0) {
for ($__section_bit_1_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] = 0; $__section_bit_1_iteration <= $__section_bit_1_total; $__section_bit_1_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']++){
?>
<input type="checkbox" name='addPermission[<?php echo $_smarty_tpl->tpl_vars['newPermissions']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['id'];?>
]' id='addPermission[<?php echo $_smarty_tpl->tpl_vars['newPermissions']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['id'];?>
]' value='<?php echo $_smarty_tpl->tpl_vars['newPermissions']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['id'];?>
' /> <?php echo $_smarty_tpl->tpl_vars['newPermissions']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['name'];?>

<br>
<?php
}
}
if ($__section_bit_1_saved) {
$_smarty_tpl->tpl_vars['__smarty_section_bit'] = $__section_bit_1_saved;
}
?>
</td>
</tr>
<?php }?>
<tr>
<td class="alignRight"><b>&nbsp;</b></td>
<td><input type="submit" value='Update' class='submit' /></td>
</tr>
</table>
</form><?php }
}
