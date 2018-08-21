<?php
/* Smarty version 3.1.30, created on 2018-04-22 18:56:40
  from "/var/www/html/smarty/templates/amn/pages/add_news.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5adcdae809e791_94941494',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '40da809a3b120de457d58fc2d829898b5f029c1e' => 
    array (
      0 => '/var/www/html/smarty/templates/amn/pages/add_news.tpl',
      1 => 1523659342,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5adcdae809e791_94941494 (Smarty_Internal_Template $_smarty_tpl) {
?>
				<?php if ($_smarty_tpl->tpl_vars['two']->value == 'success') {?><div class="error">Your work has been succesfully entered.</div><?php }?>
				<?php if ($_smarty_tpl->tpl_vars['two']->value == 'no_title') {?><div class="error">There was no title!</div><?php }?>
				<h2>Enter Event</h2>
				<form action="/submit_news/" method="post" enctype="multipart/form-data">
				<table cellpadding="4" cellspacing="0">
					<tr>
						<td style="width: 20%;text-align:right;"><b>Date Happens:</b></td>
						<td style="width: 80%;">MM<?php echo $_smarty_tpl->tpl_vars['month']->value;?>
 DD<?php echo $_smarty_tpl->tpl_vars['day']->value;?>
 YYYY<?php echo $_smarty_tpl->tpl_vars['year']->value;?>
</td>
					</tr>
					<tr>
						<td style="text-align:right;"><b>Title:</b></td>
						<td><input type="text" size="45" maxlength="127" name="title" value="<?php echo $_SESSION['title'];?>
" /></td>
					</tr>
					<tr>
						<td style="text-align:right;"><b>Website:</b></td>
						<td><input type="text" size="45" maxlength="127" name="website" value="<?php echo $_SESSION['website'];?>
" /> (everything including http://)</td>
					</tr>
					<tr>
						<td style="text-align:right;"><b>City:</b></td>
						<td><input type="text" size="45" maxlength="127" name="city" value="<?php echo $_SESSION['city'];?>
" /></td>
					</tr>
					<tr>
						<td style="text-align:right;"><b>Location:</b></td>
						<td><textarea rows="5" cols="50" name="location"><?php echo $_SESSION['location'];?>
</textarea></td>
					</tr>
					<tr>
						<td style="text-align:right;"><b>Details:</b></td>
						<td><textarea rows="10" cols="50" name="details"><?php echo $_SESSION['details'];?>
</textarea></td>
					</tr>
					<tr>
						<td style="text-align:right;"><b>Image:</b></td>
						<td><input type="file" name="upload_file" /> (less than 500k, only jpeg, 170px wide)</td>
					</tr>
					<tr>
						<td style="text-align:right;padding-top:25px;">&nbsp;</td>
						<td style="padding-top:25px;"><input type="submit" value="Submit This" class="sbt" /></td>
					</tr>
				</table>
				</form>
<?php }
}
