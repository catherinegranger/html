<?php
/* Smarty version 3.1.30, created on 2018-04-17 03:14:24
  from "/var/www/html/smarty/templates/pages/resources.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5ad56690c7d374_66546510',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e2adf516cfde32098f4205d676682fe150e71d9d' => 
    array (
      0 => '/var/www/html/smarty/templates/pages/resources.tpl',
      1 => 1523659342,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:modules/mod_wines.tpl' => 1,
  ),
),false)) {
function content_5ad56690c7d374_66546510 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_modifier_regex_replace')) require_once '/var/www/Smarty/libs/plugins/modifier.regex_replace.php';
if (!is_callable('smarty_modifier_truncate')) require_once '/var/www/Smarty/libs/plugins/modifier.truncate.php';
if ($_smarty_tpl->tpl_vars['two']->value) {?>
<nav class="bdgridnav2 bdnavigation">
<ul class="top-level">
<?php if ($_smarty_tpl->tpl_vars['resource_category']->value == 'travel' || $_smarty_tpl->tpl_vars['resource_category']->value == 'wine_tours_routes' || $_smarty_tpl->tpl_vars['resource_category']->value == 'books_guides') {?> 

<li><a href="/travel/" title="Travel" <?php if ($_smarty_tpl->tpl_vars['resource_category']->value == 'travel') {?>class="on"<?php }?>>Travel News</a></li>
<li><a href="/travel/wine_tours_routes/" title="Wine Tours" <?php if ($_smarty_tpl->tpl_vars['resource_category']->value == 'wine_tours_routes') {?>class="on"<?php }?>>Wine Tours</a></li>
<li class="last"><a href="/travel/books_guides/" title="Books & Guides" <?php if ($_smarty_tpl->tpl_vars['resource_category']->value == 'books_guides') {?>class="on"<?php }?>>Books &amp; Guides</a></li>
<?php } else { ?>
<li><a href="/resources/grape_varietals/" title="Grape Varietals" <?php if ($_smarty_tpl->tpl_vars['resource_category']->value == 'grape_varietals') {?>class="on"<?php }?>>Grape Varietals</a></li>
<li class="last"><a href="/trade/" title="For the Trade" <?php if ($_smarty_tpl->tpl_vars['resource_category']->value == 'trade') {?>class="on"<?php }?>>For the Trade</a></li>
<?php }?>
</ul>
</nav>
<div class="bdgridcontent10">
<article id="bdnewsevents">
<?php if ($_smarty_tpl->tpl_vars['tri']->value) {
$_smarty_tpl->_assignInScope('head_title', ((('Resources - ').($_smarty_tpl->tpl_vars['rc_title']->value)).(' - ')).($_smarty_tpl->tpl_vars['title']->value));
?>
<header>
<h1 title=<?php echo $_smarty_tpl->tpl_vars['title']->value;?>
><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</h1>
</header/>
<div class="some_space">
<?php if ($_smarty_tpl->tpl_vars['img_art']->value) {?>
<img src="/img/resource/<?php echo $_smarty_tpl->tpl_vars['r_id']->value;?>
.jpg" alt="<?php echo $_smarty_tpl->tpl_vars['title']->value;?>
" class="resource_postcardleft" />
<?php }
echo smarty_modifier_regex_replace($_smarty_tpl->tpl_vars['details']->value,"/[\n]/","<br />");?>

<div class="clean"></div>
<?php if ($_smarty_tpl->tpl_vars['wines']->value) {?>
<div class="some_space5">
<a href="/wines/<?php echo $_smarty_tpl->tpl_vars['varietal_web']->value;?>
/" title="Shop <?php echo $_smarty_tpl->tpl_vars['varietal_name']->value;?>
"><h2 title="<?php echo $_smarty_tpl->tpl_vars['varietal_name']->value;?>
 Wines" class="rdd">All <?php echo $_smarty_tpl->tpl_vars['varietal_name']->value;?>
 Wines:</h2></a>
<?php $_smarty_tpl->_subTemplateRender("file:modules/mod_wines.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

</div>
<?php }?>
</div>
<?php } else {
$_smarty_tpl->_assignInScope('head_title', ('Resources - ').($_smarty_tpl->tpl_vars['resources']->value[0]['rc_title']));
?>
<header>
<h1 class="noborder"><a href="/resources/<?php echo $_smarty_tpl->tpl_vars['resource_category']->value;?>
/"><?php echo $_smarty_tpl->tpl_vars['resources']->value[0]['rc_title'];?>
</a></h1>
</header/>
<p>
<?php if ($_smarty_tpl->tpl_vars['resources']->value) {
$__section_bit_0_saved = isset($_smarty_tpl->tpl_vars['__smarty_section_bit']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit'] : false;
$__section_bit_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['resources']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_bit_0_total = $__section_bit_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_bit'] = new Smarty_Variable(array());
if ($__section_bit_0_total != 0) {
for ($__section_bit_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] = 0; $__section_bit_0_iteration <= $__section_bit_0_total; $__section_bit_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']++){
if ($_smarty_tpl->tpl_vars['resources']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['img_art']) {?>
<figure>
<a href="/resources/<?php echo $_smarty_tpl->tpl_vars['resource_category']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['resources']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['web_name'];?>
/" title="<?php echo $_smarty_tpl->tpl_vars['resources']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['title'];?>
"> <img src="/img/resource/<?php echo $_smarty_tpl->tpl_vars['resources']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['r_id'];?>
.jpg" alt="<?php echo $_smarty_tpl->tpl_vars['resources']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['title'];?>
" /></a>
</figure>
<?php }?>
<div class="news_text">
<h3 title="<?php echo $_smarty_tpl->tpl_vars['resources']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['title'];?>
"><a href="/resources/<?php echo $_smarty_tpl->tpl_vars['resource_category']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['resources']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['web_name'];?>
/" title="<?php echo $_smarty_tpl->tpl_vars['resources']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['title'];?>
"><?php echo $_smarty_tpl->tpl_vars['resources']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['title'];?>
</a></h3>
<p><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['resources']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['details'],500);?>
</p>
<?php if ($_smarty_tpl->tpl_vars['resources']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['resource_url']) {?>
<p><a class="btn btn-basic btn-xs" href="<?php echo $_smarty_tpl->tpl_vars['resources']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['resource_url'];?>
">Continue &#10142;</a></p>
<?php } else { ?>
<p><a class="btn btn-basic btn-xs" href="/resources/<?php echo $_smarty_tpl->tpl_vars['resource_category']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['resources']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['web_name'];?>
/">Continue &#10142;</a></p>
<?php }?>
</div>
<div class="clean"></div>
<div class="news_events_separator"></div>
<?php
}
}
if ($__section_bit_0_saved) {
$_smarty_tpl->tpl_vars['__smarty_section_bit'] = $__section_bit_0_saved;
}
} else {
$_smarty_tpl->_assignInScope('head_title', 'Resources');
?>
<h3 class="noborder">We are working to add content to this section.</h3>
<?php }?>
</p>
<?php }?>
</article>
</div>
<?php } else {
$_smarty_tpl->_assignInScope('head_title', 'Resources');
?>
<article id="all_resources">
<header><h1 title="Resources"><a href="/resources/">Resources</a></h1></header>

<div class="box all_resources_item"><a href="/resources/grape_varietals/" title="Grape Varietals" class="size16 bld">Grape Varietals</a></div>
 <div class="box all_resources_item"><a href="/trade/" title="" class="size16 bld">For the Trade</a></div>
<div class="clean"></div>
</article>
<?php }?>
<div class="clean"></div>
<?php }
}
