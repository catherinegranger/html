<?php
/* Smarty version 3.1.30, created on 2018-04-17 02:06:28
  from "/var/www/html/smarty/templates/pages/events.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5ad556a48a85c0_19991275',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b0979a09b2cbf8768fc62062ee1d396295f12b26' => 
    array (
      0 => '/var/www/html/smarty/templates/pages/events.tpl',
      1 => 1523659342,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ad556a48a85c0_19991275 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_modifier_regex_replace')) require_once '/var/www/Smarty/libs/plugins/modifier.regex_replace.php';
?>
<nav class="bdgridnav2 bdnavigation">
<ul class="top-level">
<li><a href="/news/" title="News">News &amp; Press</a></li>
<li><a href="/events/" title="Events" class="on">Events</a></li>
<li class="last"><a href="/spotlight/" title="Wine Wednesday Spotlight">Spotlight</a></li>
</ul>
</nav>

<div class="bdgridcontent10">
<article id="bdnewsevents">
<?php if ($_smarty_tpl->tpl_vars['event']->value) {
$_smarty_tpl->_assignInScope('head_title', ('Event: ').($_smarty_tpl->tpl_vars['event']->value['title']));
?>
<figure>
<img src="/img/news/<?php echo $_smarty_tpl->tpl_vars['event']->value['n_id'];?>
.jpg" alt="<?php echo $_smarty_tpl->tpl_vars['event']->value['title'];?>
" />
</figure>
<div class="events_text">
<div class="left">
<time datetime="<?php echo $_smarty_tpl->tpl_vars['event']->value['happens'];?>
" class="icon">
  <strong><?php echo $_smarty_tpl->tpl_vars['event']->value['month'];?>
</strong>
  <span><?php echo $_smarty_tpl->tpl_vars['event']->value['day'];?>
</span>
  <em><?php echo $_smarty_tpl->tpl_vars['event']->value['year'];?>
</em>
</time>
</div>
<h3 class="left"><?php echo $_smarty_tpl->tpl_vars['event']->value['title'];?>
</h3>
<div class="clean"></div>
<div class="events_details">
<b><?php echo smarty_modifier_regex_replace($_smarty_tpl->tpl_vars['event']->value['location'],"/[\n]/","<br />");?>
</b>
<?php if ($_smarty_tpl->tpl_vars['event']->value['website']) {?>
<br><a href="<?php echo $_smarty_tpl->tpl_vars['event']->value['website'];?>
" target="_blank">Website</a>
<?php }?>
<p>
<?php echo smarty_modifier_regex_replace($_smarty_tpl->tpl_vars['event']->value['details'],"/[\n]/","<br />");?>

</p>

<p class="dvk-social-sharing">
<span class="ss-ask">Share this: </span>
<a rel="external nofollow" class="ss-twitter" href="http://twitter.com/intent/tweet/?text=<?php echo $_smarty_tpl->tpl_vars['event']->value['url_title'];?>
&amp;url=<?php echo $_smarty_tpl->tpl_vars['event']->value['url'];?>
&amp;via=BlueDanubeWine" target="_blank"><span class="ss-icon-twitter"></span><span class="ss-text">on Twitter</span></a> 
<a rel="external nofollow" class="ss-facebook" href="<?php echo $_smarty_tpl->tpl_vars['event']->value['facebook_url'];?>
" target="_blank"><span class="ss-icon-facebook"></span><span class="ss-text">on Facebook</span></a> 
<a rel="external nofollow" class="ss-googleplus" href="https://plus.google.com/share?url=<?php echo $_smarty_tpl->tpl_vars['event']->value['url'];?>
" target="_blank"><span class="ss-icon-googleplus"></span><span class="ss-text">on Google+</span></a>     
</p>


</div>
</div>
<div class="clean"></div>

<?php } else {
$_smarty_tpl->_assignInScope('head_title', 'Blue Danube Events');
?>
<header>
<h1 title="Events">Events Calendar</h1>
</header/>
<?php
$__section_bit_0_saved = isset($_smarty_tpl->tpl_vars['__smarty_section_bit']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit'] : false;
$__section_bit_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['events']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_bit_0_total = $__section_bit_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_bit'] = new Smarty_Variable(array());
if ($__section_bit_0_total != 0) {
for ($__section_bit_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] = 0; $__section_bit_0_iteration <= $__section_bit_0_total; $__section_bit_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']++){
?>
<figure>
<img src="/img/news/<?php echo $_smarty_tpl->tpl_vars['events']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['n_id'];?>
.jpg" alt="<?php echo $_smarty_tpl->tpl_vars['events']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['title'];?>
" />
</figure>
<div class="events_text">
<div class="left">
<time datetime="<?php echo $_smarty_tpl->tpl_vars['events']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['happens'];?>
" class="icon">
  <strong><?php echo $_smarty_tpl->tpl_vars['events']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['month'];?>
</strong>
  <span><?php echo $_smarty_tpl->tpl_vars['events']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['day'];?>
</span>
  <em><?php echo $_smarty_tpl->tpl_vars['events']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['year'];?>
</em>
</time>
</div>
<h3 class="left"><a href="/events/<?php echo $_smarty_tpl->tpl_vars['events']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['n_id'];?>
/" title="<?php echo $_smarty_tpl->tpl_vars['events']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['title'];?>
"><?php echo $_smarty_tpl->tpl_vars['events']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['title'];?>
</a></h3>
<div class="clean"></div>
<div class="events_details">
<b><?php echo smarty_modifier_regex_replace($_smarty_tpl->tpl_vars['events']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['location'],"/[\n]/","<br />");?>
</b>
<?php if ($_smarty_tpl->tpl_vars['events']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['website']) {?>
<br><a href="<?php echo $_smarty_tpl->tpl_vars['events']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['website'];?>
" target="_blank">Website</a>
<?php }?>
<p>
<?php echo smarty_modifier_regex_replace($_smarty_tpl->tpl_vars['events']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['details'],"/[\n]/","<br />");?>

</p>
</div>
</div>
<div class="clean"></div>
<div class="news_events_separator"></div>
<?php
}
}
if ($__section_bit_0_saved) {
$_smarty_tpl->tpl_vars['__smarty_section_bit'] = $__section_bit_0_saved;
}
}?>
<div class="clean"></div>
</article>
</div>
<?php }
}
