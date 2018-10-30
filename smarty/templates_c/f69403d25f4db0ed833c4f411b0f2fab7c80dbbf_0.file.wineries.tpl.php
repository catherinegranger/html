<?php
/* Smarty version 3.1.30, created on 2018-10-30 00:54:08
  from "/var/www/html/smarty/templates/pages/wineries.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5bd7abb036e2b7_68938761',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f69403d25f4db0ed833c4f411b0f2fab7c80dbbf' => 
    array (
      0 => '/var/www/html/smarty/templates/pages/wineries.tpl',
      1 => 1540860844,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5bd7abb036e2b7_68938761 (Smarty_Internal_Template $_smarty_tpl) {
$__section_c_0_saved = isset($_smarty_tpl->tpl_vars['__smarty_section_c']) ? $_smarty_tpl->tpl_vars['__smarty_section_c'] : false;
$__section_c_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['ncc']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_c_0_total = $__section_c_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_c'] = new Smarty_Variable(array());
if ($__section_c_0_total != 0) {
for ($__section_c_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_c']->value['index'] = 0; $__section_c_0_iteration <= $__section_c_0_total; $__section_c_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_c']->value['index']++){
?>

<article class="wineries clearfix">

<header>
<h2><a href="/regions/<?php echo $_smarty_tpl->tpl_vars['ncc']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_c']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_c']->value['index'] : null)]['web_name'];?>
/" title="<?php echo $_smarty_tpl->tpl_vars['ncc']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_c']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_c']->value['index'] : null)]['full_name'];?>
"><?php echo $_smarty_tpl->tpl_vars['ncc']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_c']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_c']->value['index'] : null)]['full_name'];?>
</a></h2>
</header>

<?php $_smarty_tpl->_assignInScope('country_webname', $_smarty_tpl->tpl_vars['ncc']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_c']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_c']->value['index'] : null)]['web_name']);
?>

<?php
$__section_w_1_saved = isset($_smarty_tpl->tpl_vars['__smarty_section_w']) ? $_smarty_tpl->tpl_vars['__smarty_section_w'] : false;
$__section_w_1_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['nwys']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_w_1_total = $__section_w_1_loop;
$_smarty_tpl->tpl_vars['__smarty_section_w'] = new Smarty_Variable(array());
if ($__section_w_1_total != 0) {
for ($__section_w_1_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_w']->value['index'] = 0; $__section_w_1_iteration <= $__section_w_1_total; $__section_w_1_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_w']->value['index']++){
?>

<?php if ($_smarty_tpl->tpl_vars['nwys']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_w']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_w']->value['index'] : null)]['c_id'] == $_smarty_tpl->tpl_vars['ncc']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_c']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_c']->value['index'] : null)]['c_id']) {?>
<div class="wineries_group">
<?php $_smarty_tpl->_assignInScope('winery_image', "img/wineries/".((string)$_smarty_tpl->tpl_vars['nwys']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_w']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_w']->value['index'] : null)]['web_name'])."_pricelist.jpg");
?>
<figure>
<?php if (file_exists($_smarty_tpl->tpl_vars['winery_image']->value)) {?> 
<a href="/winery/<?php echo $_smarty_tpl->tpl_vars['nwys']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_w']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_w']->value['index'] : null)]['web_name'];?>
/" title="<?php echo $_smarty_tpl->tpl_vars['nwys']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_w']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_w']->value['index'] : null)]['name'];?>
"><img src="/img/wineries/<?php echo $_smarty_tpl->tpl_vars['nwys']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_w']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_w']->value['index'] : null)]['web_name'];?>
_pricelist.jpg" alt="<?php echo $_smarty_tpl->tpl_vars['nwys']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_w']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_w']->value['index'] : null)]['name'];?>
" /></a>
<?php } else { ?>
<a href="/winery/<?php echo $_smarty_tpl->tpl_vars['nwys']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_w']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_w']->value['index'] : null)]['web_name'];?>
/" title="<?php echo $_smarty_tpl->tpl_vars['nwys']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_w']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_w']->value['index'] : null)]['name'];?>
"><img src="/img/wineries/grape_pricelist.jpg" alt="<?php echo $_smarty_tpl->tpl_vars['nwys']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_w']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_w']->value['index'] : null)]['name'];?>
" /></a>
<?php }?>
</figure>
<h4 title="<?php echo $_smarty_tpl->tpl_vars['nwys']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_w']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_w']->value['index'] : null)]['name'];?>
">
<a href="/winery/<?php echo $_smarty_tpl->tpl_vars['nwys']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_w']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_w']->value['index'] : null)]['web_name'];?>
/" title="<?php echo $_smarty_tpl->tpl_vars['nwys']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_w']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_w']->value['index'] : null)]['name'];?>
"><?php echo $_smarty_tpl->tpl_vars['nwys']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_w']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_w']->value['index'] : null)]['name'];?>
</a>
</h4>
</div>


<?php }?>

<?php
}
}
if ($__section_w_1_saved) {
$_smarty_tpl->tpl_vars['__smarty_section_w'] = $__section_w_1_saved;
}
?>

</article>
<?php
}
}
if ($__section_c_0_saved) {
$_smarty_tpl->tpl_vars['__smarty_section_c'] = $__section_c_0_saved;
}
?>
<div class="clean"></div>
<?php $_smarty_tpl->_assignInScope('head_title', "Wineries");
}
}
