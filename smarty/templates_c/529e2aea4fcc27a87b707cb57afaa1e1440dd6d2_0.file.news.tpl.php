<?php
/* Smarty version 3.1.30, created on 2018-04-18 01:02:05
  from "/var/www/html/smarty/templates/amn/pages/news.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5ad6990dcfe627_43020212',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '529e2aea4fcc27a87b707cb57afaa1e1440dd6d2' => 
    array (
      0 => '/var/www/html/smarty/templates/amn/pages/news.tpl',
      1 => 1523659342,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ad6990dcfe627_43020212 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['tri']->value == 'success') {?><div class="error">Your work has been updated.</div><?php }
if ($_smarty_tpl->tpl_vars['tri']->value == 'no_title') {?><div class="error">Your didn't put in a title or web name.</div><?php }
if ($_smarty_tpl->tpl_vars['tri']->value == 'deleted') {?><div class="error">Your work has been marked as deleted</div><?php }
if ($_smarty_tpl->tpl_vars['tri']->value == 'undeleted') {?><div class="error">Your work has been un-deleted</div><?php }?>
<h2>News</h2>
<?php echo $_smarty_tpl->tpl_vars['pages']->value;?>

<?php
$__section_bit_0_saved = isset($_smarty_tpl->tpl_vars['__smarty_section_bit']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit'] : false;
$__section_bit_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['news']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_bit_0_total = $__section_bit_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_bit'] = new Smarty_Variable(array());
if ($__section_bit_0_total != 0) {
for ($__section_bit_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] = 0; $__section_bit_0_iteration <= $__section_bit_0_total; $__section_bit_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']++){
?>
<table cellpadding="4" cellspacing="0" style="border:1px solid #000000;margin-bottom:10px;">
<tr>
<form action="/update_news/" method="post">
<input type="hidden" name="n_id" value="<?php echo $_smarty_tpl->tpl_vars['news']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['n_id'];?>
" />
<input type="hidden" name="page" value="<?php echo $_smarty_tpl->tpl_vars['page']->value;?>
" />
<td>
<b>Title:</b><br />
<input type="text" size="45" maxlength="128" name="title" value="<?php echo $_smarty_tpl->tpl_vars['news']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['title'];?>
" /><br />
<b>Website:</b><br />
<input type="text" size="45" maxlength="250" name="website" value="<?php echo $_smarty_tpl->tpl_vars['news']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['website'];?>
" /><br />
<b>Occurs:</b><br />
MM<?php echo $_smarty_tpl->tpl_vars['news']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['month'];?>
 DD<?php echo $_smarty_tpl->tpl_vars['news']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['day'];?>
 YY<?php echo $_smarty_tpl->tpl_vars['news']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['year'];?>

<br />&nbsp;<br />
<input type="submit" value="Update" class="sbt" /> &nbsp;&nbsp;<?php if ($_smarty_tpl->tpl_vars['news']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['deleted'] == '1') {?><a href="/amn/news/<?php echo $_smarty_tpl->tpl_vars['page']->value;?>
/undelete/<?php echo $_smarty_tpl->tpl_vars['news']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['n_id'];?>
/">UNDEL</a><?php } else { ?><a href="/amn/news/<?php echo $_smarty_tpl->tpl_vars['page']->value;?>
/delete/<?php echo $_smarty_tpl->tpl_vars['news']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['n_id'];?>
/">DEL</a><?php }?>
</td>
<td>
<b>City:</b><br />
<input type="text" size="45" maxlength="128" name="city" value="<?php echo $_smarty_tpl->tpl_vars['news']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['city'];?>
" /><br />
<b>Location:</b><br />
<textarea rows="3" cols="45" name="location"><?php echo $_smarty_tpl->tpl_vars['news']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['location'];?>
</textarea><br />
<b>Details:</b><br />
<textarea rows="4" cols="45" name="details"><?php echo $_smarty_tpl->tpl_vars['news']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['details'];?>
</textarea>
</td>
</form>
<td>
<img src="/img/news/thumb/<?php echo $_smarty_tpl->tpl_vars['news']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['n_id'];?>
.jpg" alt="<?php echo $_smarty_tpl->tpl_vars['news']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['n_id'];?>
" style="margin-bottom:5px;" /><br />
<b>New or Replacement Image:</b>
<form action="/update_news_image/" method="post" enctype="multipart/form-data">
<input type="hidden" name="n_id" value="<?php echo $_smarty_tpl->tpl_vars['news']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['n_id'];?>
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
