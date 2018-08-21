<?php
/* Smarty version 3.1.30, created on 2018-07-24 16:53:41
  from "/var/www/html/smarty/templates/pages/winery.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5b5759957ed3b1_38613658',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9d6980479887522e214c7799fb72b31d293959cc' => 
    array (
      0 => '/var/www/html/smarty/templates/pages/winery.tpl',
      1 => 1532451212,
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
function content_5b5759957ed3b1_38613658 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_modifier_regex_replace')) require_once '/var/www/Smarty/libs/plugins/modifier.regex_replace.php';
if (!is_callable('smarty_modifier_capitalize')) require_once '/var/www/Smarty/libs/plugins/modifier.capitalize.php';
$_smarty_tpl->_subTemplateRender("file:modules/nav_wineries.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<div class="bdgridcontent9">
<article id="winery" class="bdwine_content">
<?php if (!$_smarty_tpl->tpl_vars['name']->value) {?>
<div class="ucwarning">
Sorry, winery not found
</div>
<?php }?>
<header>
<h1 title="<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['name']->value;?>
</h1>
</header>

<?php if ($_smarty_tpl->tpl_vars['proprietor']->value) {?>
<b>Proprietor:</b> <?php echo $_smarty_tpl->tpl_vars['proprietor']->value;?>
<br />
<?php }
if ($_smarty_tpl->tpl_vars['established']->value) {?>
<b>Founded:</b> <?php echo $_smarty_tpl->tpl_vars['established']->value;?>
<br />
<?php }
if ($_smarty_tpl->tpl_vars['website']->value) {?>
<b>Website:</b> <a href="<?php echo $_smarty_tpl->tpl_vars['website']->value;?>
" target="_blank"><?php echo $_smarty_tpl->tpl_vars['name']->value;?>
 Winery</a><br />
<?php }
if ($_smarty_tpl->tpl_vars['name']->value) {?>
<b>Country Location:</b> <a href="/regions/<?php echo $_smarty_tpl->tpl_vars['country_web_name']->value;?>
/"><?php echo $_smarty_tpl->tpl_vars['country_full_name']->value;?>
</a>
<?php }
if ($_smarty_tpl->tpl_vars['motto']->value) {?>
<div class="some_space2">
<h2 class="itl pix18 some_space2"><?php echo $_smarty_tpl->tpl_vars['motto']->value;?>
</h2>
</div>
<?php if ($_smarty_tpl->tpl_vars['introduction_image_file_name']->value) {?>
<div class="alignCenter  winery_caption some_space2"><img class="winery_16x9center" src="/img/wineries/<?php echo $_smarty_tpl->tpl_vars['introduction_image_file_name']->value;?>
" alt="<?php echo $_smarty_tpl->tpl_vars['introduction_img_caption']->value;?>
" /><br><?php echo $_smarty_tpl->tpl_vars['introduction_img_caption']->value;?>
</div>
<?php }
if ($_smarty_tpl->tpl_vars['introduction']->value) {?>
<div class="some_space2">
<h3>The People</h3>
<div class="some_space"><?php echo $_smarty_tpl->tpl_vars['introduction']->value;?>
</div>
</div>
<?php }
if ($_smarty_tpl->tpl_vars['vineyards']->value) {?>
<div class="some_space2">
<h3>In the Vineyard</h3>
<div class="some_space"><?php echo $_smarty_tpl->tpl_vars['vineyards']->value;?>
</div>
</div>
<?php }
if ($_smarty_tpl->tpl_vars['winemaking']->value) {?>
<div class="some_space2">
<h3>In the Cellar</h3>
<div class="some_space"><?php echo $_smarty_tpl->tpl_vars['winemaking']->value;?>
</div>
<?php if ($_smarty_tpl->tpl_vars['winemaking2']->value) {
echo $_smarty_tpl->tpl_vars['winemaking2']->value;?>

<?php }?>
</div>
<?php }?>

<?php } else {
if ($_smarty_tpl->tpl_vars['details']->value) {?>
<p>
<?php echo smarty_modifier_regex_replace($_smarty_tpl->tpl_vars['details']->value,"/[\n]/","<br />");?>

</p>
<?php }
}?>
<div class="clean"></div>

<?php if ($_smarty_tpl->tpl_vars['feeditems']->value) {?>
<a id="winery_news"><h2 title="<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
 News" class="rdd"><?php echo $_smarty_tpl->tpl_vars['name']->value;?>
 News:</h2></a>
<?php $_smarty_tpl->_subTemplateRender("file:modules/mod_feeditems.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php }?>


<?php if ($_smarty_tpl->tpl_vars['wines']->value) {?>
<a id="wines"><h2 title="<?php echo smarty_modifier_capitalize($_smarty_tpl->tpl_vars['two']->value);?>
 Wines" class="rdd">Wines:</h2></a>
<?php $_smarty_tpl->_subTemplateRender("file:modules/mod_wines.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php }?>

</article>
</div>

<div class="clean"></div>
<?php $_smarty_tpl->_assignInScope('head_title', (($_smarty_tpl->tpl_vars['name']->value).(' Winery, ')).($_smarty_tpl->tpl_vars['country_full_name']->value));
$_smarty_tpl->_assignInScope('head_desc', (((('Finest selection of wines from ').($_smarty_tpl->tpl_vars['name']->value)).(' Winery. Blue Danube Wine imports, distributes, and sells wines from ')).($_smarty_tpl->tpl_vars['country_full_name']->value)).(' in the United States'));
}
}
