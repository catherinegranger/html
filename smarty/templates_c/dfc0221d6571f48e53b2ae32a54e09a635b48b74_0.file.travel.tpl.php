<?php
/* Smarty version 3.1.30, created on 2018-04-17 03:14:13
  from "/var/www/html/smarty/templates/pages/travel.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5ad56685d822a7_90081259',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'dfc0221d6571f48e53b2ae32a54e09a635b48b74' => 
    array (
      0 => '/var/www/html/smarty/templates/pages/travel.tpl',
      1 => 1523659342,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ad56685d822a7_90081259 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_modifier_truncate')) require_once '/var/www/Smarty/libs/plugins/modifier.truncate.php';
?>
<nav class="bdgridnav2 bdnavigation">
<ul class="top-level">
<li><a href="/travel/" title="Travel" <?php if (!$_smarty_tpl->tpl_vars['resource_category']->value) {?>class="on"<?php }?>>Travel News</a></li>
<li><a href="/travel/wine_tours_routes/" title="Wine Tours" <?php if ($_smarty_tpl->tpl_vars['resource_category']->value == 'wine_tours_routes') {?>class="on"<?php }?>>Wine Tours</a></li>
<li class="last"><a href="/travel/books_guides/" title="Books & Guides" <?php if ($_smarty_tpl->tpl_vars['resource_category']->value == 'books_guides') {?>class="on"<?php }?>>Books &amp; Guides</a></li>
</ul>
</nav>

<div class="bdgridcontent10">
<article id="bdnewsevents">

<?php if ($_smarty_tpl->tpl_vars['travelitems']->value) {?>
<header>
<h1 title="Travel News">Travel News</h1>
</header/>
<?php
$__section_bit_0_saved = isset($_smarty_tpl->tpl_vars['__smarty_section_bit']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit'] : false;
$__section_bit_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['travelitems']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_bit_0_total = $__section_bit_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_bit'] = new Smarty_Variable(array());
if ($__section_bit_0_total != 0) {
for ($__section_bit_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] = 0; $__section_bit_0_iteration <= $__section_bit_0_total; $__section_bit_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']++){
?>
<figure>
<a href="<?php echo $_smarty_tpl->tpl_vars['travelitems']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['link'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['travelitems']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['title'];?>
"> <img src="<?php echo $_smarty_tpl->tpl_vars['travelitems']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['imagepath'];?>
" alt=""<?php echo $_smarty_tpl->tpl_vars['travelitems']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['title'];?>
" /></a>
</figure>
<div class="news_text">
<h3 title="<?php echo $_smarty_tpl->tpl_vars['travelitems']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['title'];?>
"><a href="<?php echo $_smarty_tpl->tpl_vars['travelitems']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['link'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['travelitems']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['title'];?>
"><?php echo $_smarty_tpl->tpl_vars['travelitems']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['title'];?>
</a></h3>
<p><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['travelitems']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['content'],500);?>
</p>
<p><a class="btn btn-basic btn-xs" href="<?php echo $_smarty_tpl->tpl_vars['travelitems']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['link'];?>
/">Continue &#10142;</a></p>
</div>
<div class="clean"></div>
<div class="news_events_separator"></div>
<?php
}
}
if ($__section_bit_0_saved) {
$_smarty_tpl->tpl_vars['__smarty_section_bit'] = $__section_bit_0_saved;
}
?>

<?php } else { ?>
<header>
<h1 title="<?php echo $_smarty_tpl->tpl_vars['resources']->value[0]['rc_title'];?>
"><?php echo $_smarty_tpl->tpl_vars['resources']->value[0]['rc_title'];?>
</h1>
</header/>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['resources']->value) {
$__section_bit_1_saved = isset($_smarty_tpl->tpl_vars['__smarty_section_bit']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit'] : false;
$__section_bit_1_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['resources']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_bit_1_total = $__section_bit_1_loop;
$_smarty_tpl->tpl_vars['__smarty_section_bit'] = new Smarty_Variable(array());
if ($__section_bit_1_total != 0) {
for ($__section_bit_1_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] = 0; $__section_bit_1_iteration <= $__section_bit_1_total; $__section_bit_1_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']++){
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
if ($__section_bit_1_saved) {
$_smarty_tpl->tpl_vars['__smarty_section_bit'] = $__section_bit_1_saved;
}
}?>

<div class="clean"></div>
<?php $_smarty_tpl->_assignInScope('head_title', 'Travel News');
?>
</article>
</div>

<?php }
}
