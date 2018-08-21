<?php
/* Smarty version 3.1.30, created on 2018-04-18 01:02:08
  from "/var/www/html/smarty/templates/amn/pages/resources.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5ad69910537cc2_07647349',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '67fe6d5c6773d93442f088b868ac3c65045c38b4' => 
    array (
      0 => '/var/www/html/smarty/templates/amn/pages/resources.tpl',
      1 => 1523659342,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ad69910537cc2_07647349 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['tri']->value == 'success') {?><div class="error">Your work has been updated.</div><?php }
if ($_smarty_tpl->tpl_vars['for']->value == 'img_success') {?><div class="error">Your work has been updated.</div><?php }
if ($_smarty_tpl->tpl_vars['tri']->value == 'no_title') {?><div class="error">Your didn't put in a title or web name.</div><?php }
if ($_smarty_tpl->tpl_vars['tri']->value == 'deleted') {?><div class="error">Your work has been marked as deleted</div><?php }
if ($_smarty_tpl->tpl_vars['tri']->value == 'undeleted') {?><div class="error">Your work has been un-deleted</div><?php }?>
<h2>Resources</h2>
<?php echo $_smarty_tpl->tpl_vars['pages']->value;?>

<?php
$__section_bit_0_saved = isset($_smarty_tpl->tpl_vars['__smarty_section_bit']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit'] : false;
$__section_bit_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['resources']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_bit_0_total = $__section_bit_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_bit'] = new Smarty_Variable(array());
if ($__section_bit_0_total != 0) {
for ($__section_bit_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] = 0; $__section_bit_0_iteration <= $__section_bit_0_total; $__section_bit_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']++){
?>
<table cellpadding="4" cellspacing="0" style="border:1px solid #000000;margin-bottom:10px;">
<tr>
<form action="/update_resource/" method="post">
<input type="hidden" name="r_id" value="<?php echo $_smarty_tpl->tpl_vars['resources']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['r_id'];?>
" />
<input type="hidden" name="page" value="<?php echo $_smarty_tpl->tpl_vars['page']->value;?>
" />
<td>
<b>Title:</b><br />
<input type="text" size="20" maxlength="64" name="title" value="<?php echo $_smarty_tpl->tpl_vars['resources']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['title'];?>
" /><br />
<b>Webname:</b><br />
<input type="text" size="20" maxlength="64" name="web_name" value="<?php echo $_smarty_tpl->tpl_vars['resources']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['web_name'];?>
" /><br />
<b>Resource URL:</b><br />
<input type="text" size="20" maxlength="600" name="resource_url" value="<?php echo $_smarty_tpl->tpl_vars['resources']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['resource_url'];?>
" /><br />
<b>Keyword:</b><br />
<input type="text" size="20" maxlength="50" name="keyword" value="<?php echo $_smarty_tpl->tpl_vars['resources']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['keyword'];?>
" /><br />
<b>Cateogry</b><br />
<select name="rc_id">
<?php
$__section_bot_1_saved = isset($_smarty_tpl->tpl_vars['__smarty_section_bot']) ? $_smarty_tpl->tpl_vars['__smarty_section_bot'] : false;
$__section_bot_1_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['cats']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_bot_1_total = $__section_bot_1_loop;
$_smarty_tpl->tpl_vars['__smarty_section_bot'] = new Smarty_Variable(array());
if ($__section_bot_1_total != 0) {
for ($__section_bot_1_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_bot']->value['index'] = 0; $__section_bot_1_iteration <= $__section_bot_1_total; $__section_bot_1_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_bot']->value['index']++){
?>
<option value="<?php echo $_smarty_tpl->tpl_vars['cats']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bot']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bot']->value['index'] : null)]['rc_id'];?>
"<?php if ($_smarty_tpl->tpl_vars['cats']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bot']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bot']->value['index'] : null)]['rc_id'] == $_smarty_tpl->tpl_vars['resources']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['rc_id']) {?> selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['cats']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bot']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bot']->value['index'] : null)]['title'];?>
</option>
<?php
}
}
if ($__section_bot_1_saved) {
$_smarty_tpl->tpl_vars['__smarty_section_bot'] = $__section_bot_1_saved;
}
?>
</select>
<br />&nbsp;<br />
<input type="submit" value="Update" class="sbt" /> <?php if ($_smarty_tpl->tpl_vars['resources']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['deleted'] == '1') {?><a href="/amn/resources/<?php echo $_smarty_tpl->tpl_vars['page']->value;?>
/undelete/<?php echo $_smarty_tpl->tpl_vars['resources']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['r_id'];?>
/" class="size10">UNDEL</a><?php } else { ?><a href="/amn/resources/<?php echo $_smarty_tpl->tpl_vars['page']->value;?>
/delete/<?php echo $_smarty_tpl->tpl_vars['resources']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['r_id'];?>
/" class="size10">DEL</a><?php }?>
</td>
<td>
<b>Details:</b><br />
<textarea rows="14" cols="50" name="details"><?php echo $_smarty_tpl->tpl_vars['resources']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['details'];?>
</textarea>
</td>
</form>
<td>
<?php if ($_smarty_tpl->tpl_vars['resources']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['img_art'] == '1') {?>
<img src="/img/resource/thumb/<?php echo $_smarty_tpl->tpl_vars['resources']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['r_id'];?>
.jpg" alt="<?php echo $_smarty_tpl->tpl_vars['resources']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['r_id'];?>
" style="margin-bottom:5px;height:50px;" />
<br />
<?php }?>
<b>New or Replacement Image:</b>
<form action="/update_resource_image/" method="post" enctype="multipart/form-data">
<input type="hidden" name="r_id" value="<?php echo $_smarty_tpl->tpl_vars['resources']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['r_id'];?>
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
echo $_smarty_tpl->tpl_vars['pages']->value;
}
}
