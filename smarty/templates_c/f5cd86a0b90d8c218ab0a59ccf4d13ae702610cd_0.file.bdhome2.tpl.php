<?php
/* Smarty version 3.1.30, created on 2018-05-25 00:59:24
  from "/var/www/html/smarty/templates/pages/bdhome2.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5b075fec174411_72244072',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f5cd86a0b90d8c218ab0a59ccf4d13ae702610cd' => 
    array (
      0 => '/var/www/html/smarty/templates/pages/bdhome2.tpl',
      1 => 1527209844,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:modules/mod_succerrors.tpl' => 1,
  ),
),false)) {
function content_5b075fec174411_72244072 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:modules/mod_succerrors.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>




<p><?php echo $_smarty_tpl->tpl_vars['debug_items']->value;?>
</p>
<p><?php echo $_smarty_tpl->tpl_vars['rss_items']->value;?>
</p>







<div class="clean"></div>


<?php }
}
