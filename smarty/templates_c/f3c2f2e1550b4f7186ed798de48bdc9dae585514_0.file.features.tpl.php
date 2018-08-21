<?php
/* Smarty version 3.1.30, created on 2018-04-18 01:02:12
  from "/var/www/html/smarty/templates/amn/pages/features.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5ad69914860b14_22321492',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f3c2f2e1550b4f7186ed798de48bdc9dae585514' => 
    array (
      0 => '/var/www/html/smarty/templates/amn/pages/features.tpl',
      1 => 1523659342,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ad69914860b14_22321492 (Smarty_Internal_Template $_smarty_tpl) {
?>
				<?php if ($_smarty_tpl->tpl_vars['tri']->value == 'success') {?><div class="error">Your work has been updated.</div><?php }?>
				<?php if ($_smarty_tpl->tpl_vars['for']->value == 'img_success') {?><div class="error">Your work has been updated.</div><?php }?>
				<?php if ($_smarty_tpl->tpl_vars['tri']->value == 'no_title') {?><div class="error">Your didn't put in a title or web name.</div><?php }?>
				<?php if ($_smarty_tpl->tpl_vars['tri']->value == 'deleted') {?><div class="error">Your work has been marked as deleted</div><?php }?>
				<?php if ($_smarty_tpl->tpl_vars['tri']->value == 'undeleted') {?><div class="error">Your work has been un-deleted</div><?php }?>
				<h2>Features</h2>
				<?php echo $_smarty_tpl->tpl_vars['pages']->value;?>

<?php
$__section_bit_0_saved = isset($_smarty_tpl->tpl_vars['__smarty_section_bit']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit'] : false;
$__section_bit_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['features']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_bit_0_total = $__section_bit_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_bit'] = new Smarty_Variable(array());
if ($__section_bit_0_total != 0) {
for ($__section_bit_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] = 0; $__section_bit_0_iteration <= $__section_bit_0_total; $__section_bit_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']++){
?>
				<table cellpadding="4" cellspacing="0" style="border:1px solid #000000;margin-bottom:10px;">
					<tr>
					<form action="/update_feature/" method="post">
					<input type="hidden" name="f_id" value="<?php echo $_smarty_tpl->tpl_vars['features']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['f_id'];?>
" />
					<input type="hidden" name="page" value="<?php echo $_smarty_tpl->tpl_vars['page']->value;?>
" />
						<td>
							<b>Title:</b><br />
							<input type="text" size="20" maxlength="25" name="title" value="<?php echo $_smarty_tpl->tpl_vars['features']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['title'];?>
" /><br />
							<br />&nbsp;<br />
							<input type="submit" value="Update" class="sbt" /> <?php if ($_smarty_tpl->tpl_vars['features']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['deleted'] == '1') {?><a href="/amn/features/<?php echo $_smarty_tpl->tpl_vars['page']->value;?>
/undelete/<?php echo $_smarty_tpl->tpl_vars['features']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['f_id'];?>
/" class="size10">UNDEL</a><?php } else { ?><a href="/amn/features/<?php echo $_smarty_tpl->tpl_vars['page']->value;?>
/delete/<?php echo $_smarty_tpl->tpl_vars['features']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['f_id'];?>
/" class="size10">DEL</a><?php }?>
						</td>
						<td>
							<b>Details:</b><br />
							<textarea rows="6" cols="45" name="details"><?php echo $_smarty_tpl->tpl_vars['features']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['details'];?>
</textarea>
						</td>
					</form>
						<td>
							<img src="/img/feature/thumb/<?php echo $_smarty_tpl->tpl_vars['features']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['f_id'];?>
.jpg" alt="<?php echo $_smarty_tpl->tpl_vars['features']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['f_id'];?>
" style="margin-bottom:5px;" /><br />
							<b>New or Replacement Image:</b>
							<form action="/update_feature_image/" method="post" enctype="multipart/form-data">
							<input type="hidden" name="f_id" value="<?php echo $_smarty_tpl->tpl_vars['features']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['f_id'];?>
" />
							<input type="hidden" name="page" value="<?php echo $_smarty_tpl->tpl_vars['page']->value;?>
" />	
							<input type="file" name="upload_file" /><br />&nbsp;<br />
							<input type="submit" value="Submit" class="sbt" />
							</form>
						</td>
					</tr>
				</table>
<?php
}
}
if ($__section_bit_0_saved) {
$_smarty_tpl->tpl_vars['__smarty_section_bit'] = $__section_bit_0_saved;
}
?>
				<?php echo $_smarty_tpl->tpl_vars['pages']->value;
}
}
