<?php
/* Smarty version 3.1.30, created on 2018-04-17 02:06:25
  from "/var/www/html/smarty/templates/pages/news.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5ad556a1b492c6_26094908',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '617f7941f448fdcd362286741684d186dd00fbd8' => 
    array (
      0 => '/var/www/html/smarty/templates/pages/news.tpl',
      1 => 1523659342,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ad556a1b492c6_26094908 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_modifier_truncate')) require_once '/var/www/Smarty/libs/plugins/modifier.truncate.php';
?>
<nav class="bdgridnav2 bdnavigation">
<ul class="top-level">
<li><a href="/news/" title="News" class="on">News &amp; Press</a></li>
<li><a href="/events/" title="Events">Events</a></li>
<li class="last"><a href="/spotlight/" title="Wine Wednesday Spotlight">Spotlight</a></li>
</ul>
</nav>

<div class="bdgridcontent10">
<article id="bdnewsevents">
<header>
<h1 title="News">News &amp; Press</h1>
</header/>
<?php
$__section_bit_0_saved = isset($_smarty_tpl->tpl_vars['__smarty_section_bit']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit'] : false;
$__section_bit_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['newsitems']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_bit_0_total = $__section_bit_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_bit'] = new Smarty_Variable(array());
if ($__section_bit_0_total != 0) {
for ($__section_bit_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] = 0; $__section_bit_0_iteration <= $__section_bit_0_total; $__section_bit_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']++){
?>
<figure>
<a href="<?php echo $_smarty_tpl->tpl_vars['newsitems']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['link'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['newsitems']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['title'];?>
"> <img src="<?php echo $_smarty_tpl->tpl_vars['newsitems']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['imagepath'];?>
" alt=""<?php echo $_smarty_tpl->tpl_vars['newsitems']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['title'];?>
" /></a>
</figure>
<div class="news_text">
<h3 title="<?php echo $_smarty_tpl->tpl_vars['newsitems']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['title'];?>
"><a href="<?php echo $_smarty_tpl->tpl_vars['newsitems']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['link'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['newsitems']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['title'];?>
"><?php echo $_smarty_tpl->tpl_vars['newsitems']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['title'];?>
</a></h3>
<p><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['newsitems']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['content'],500);?>
</p>
<p><a class="btn btn-basic btn-xs" href="<?php echo $_smarty_tpl->tpl_vars['newsitems']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['link'];?>
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
<div class="clean"></div>
</article>

</div>
<?php $_smarty_tpl->_assignInScope('head_title', 'News');
}
}
