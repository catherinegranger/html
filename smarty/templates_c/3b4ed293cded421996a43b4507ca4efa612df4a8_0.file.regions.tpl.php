<?php
/* Smarty version 3.1.30, created on 2018-04-17 05:21:33
  from "/var/www/html/smarty/templates/pages/regions.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5ad5845d98a442_90193722',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3b4ed293cded421996a43b4507ca4efa612df4a8' => 
    array (
      0 => '/var/www/html/smarty/templates/pages/regions.tpl',
      1 => 1523942442,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:modules/nav_wineries.tpl' => 1,
    'file:modules/mod_feeditems.tpl' => 1,
    'file:modules/mod_wines.tpl' => 1,
  ),
),false)) {
function content_5ad5845d98a442_90193722 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:modules/nav_wineries.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<div class="bdgridcontent9">
<article id="region" class="bdwine_content">

<?php if ($_smarty_tpl->tpl_vars['regionName']->value) {?>
<header>
<h1 title="The Wines of <?php echo $_smarty_tpl->tpl_vars['regionName']->value;?>
">The Wines of <?php echo $_smarty_tpl->tpl_vars['regionName']->value;?>
</h1>
</header>

<?php echo $_smarty_tpl->tpl_vars['regionContent']->value;?>


<div id="region_wineries">
<h2 title="<?php echo $_smarty_tpl->tpl_vars['regionName']->value;?>
 Wineries" class="rdd">Our Wineries:</h2>
<?php
$__section_w_0_saved = isset($_smarty_tpl->tpl_vars['__smarty_section_w']) ? $_smarty_tpl->tpl_vars['__smarty_section_w'] : false;
$__section_w_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['nwys']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_w_0_total = $__section_w_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_w'] = new Smarty_Variable(array());
if ($__section_w_0_total != 0) {
for ($__section_w_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_w']->value['index'] = 0; $__section_w_0_iteration <= $__section_w_0_total; $__section_w_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_w']->value['index']++){
if ($_smarty_tpl->tpl_vars['nwys']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_w']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_w']->value['index'] : null)]['c_id'] == $_smarty_tpl->tpl_vars['c_id']->value) {?>
<span class="country_winery"><a href="/winery/<?php echo $_smarty_tpl->tpl_vars['nwys']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_w']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_w']->value['index'] : null)]['web_name'];?>
/" title="<?php echo $_smarty_tpl->tpl_vars['nwys']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_w']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_w']->value['index'] : null)]['name'];?>
"><?php echo $_smarty_tpl->tpl_vars['nwys']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_w']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_w']->value['index'] : null)]['name'];?>
</a></span>
<?php }
}
}
if ($__section_w_0_saved) {
$_smarty_tpl->tpl_vars['__smarty_section_w'] = $__section_w_0_saved;
}
?>
</div>


<?php if ($_smarty_tpl->tpl_vars['feeditems']->value) {?>
<h2 title="<?php echo $_smarty_tpl->tpl_vars['regionName']->value;?>
 News" class="rdd"><?php echo $_smarty_tpl->tpl_vars['regionName']->value;?>
 News:</h2>
<?php $_smarty_tpl->_subTemplateRender("file:modules/mod_feeditems.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php }?>

<?php if ($_smarty_tpl->tpl_vars['wines']->value) {?>
<h2 title="<?php echo $_smarty_tpl->tpl_vars['regionName']->value;?>
 Region Suggestions" class="rdd">Region Suggestions:</h2>
<?php $_smarty_tpl->_subTemplateRender("file:modules/mod_wines.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php }?>

<?php } else { ?>
<img src="/img/all/bluedanubewine_map.jpg"/>
<?php }?>
</article>
</div>
<div class="clean"></div>


<?php }
}
