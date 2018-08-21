<?php
/* Smarty version 3.1.30, created on 2018-04-17 00:57:43
  from "/var/www/html/smarty/templates/pages/home.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5ad54687d99f79_98052618',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd271d709b4152ef88853c70cc10e1dca650240fe' => 
    array (
      0 => '/var/www/html/smarty/templates/pages/home.tpl',
      1 => 1523926607,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:modules/mod_succerrors.tpl' => 1,
  ),
),false)) {
function content_5ad54687d99f79_98052618 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_modifier_truncate')) require_once '/var/www/Smarty/libs/plugins/modifier.truncate.php';
$_smarty_tpl->_subTemplateRender("file:modules/mod_succerrors.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<div id="bd-carousel" class="carousel slide" data-ride="carousel" data-interval="10000">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#bd-carousel" data-slide-to="0" class="active"></li>
    <li data-target="#bd-carousel" data-slide-to="1"></li>
    <li data-target="#bd-carousel" data-slide-to="2"></li>
    <li data-target="#bd-carousel" data-slide-to="3"></li>
    <li data-target="#bd-carousel" data-slide-to="4"></li>
  </ol>
 
 <!-- Wrapper for slides -->
<div class="carousel-inner">
<?php
$__section_bit_0_saved = isset($_smarty_tpl->tpl_vars['__smarty_section_bit']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit'] : false;
$__section_bit_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['gallery']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_bit_0_total = min(($__section_bit_0_loop - 0), 5);
$_smarty_tpl->tpl_vars['__smarty_section_bit'] = new Smarty_Variable(array());
if ($__section_bit_0_total != 0) {
for ($__section_bit_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] = 0; $__section_bit_0_iteration <= $__section_bit_0_total; $__section_bit_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']++){
$_smarty_tpl->tpl_vars['__smarty_section_bit']->value['first'] = ($__section_bit_0_iteration == 1);
$_smarty_tpl->tpl_vars['__smarty_section_bit']->value['last'] = ($__section_bit_0_iteration == $__section_bit_0_total);
if ((isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['first']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['first'] : null)) {?>
<div class="item active">
<?php } else { ?>
<div class="item">
<?php }?>
<img src="/img/regions/<?php echo $_smarty_tpl->tpl_vars['gallery']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['img'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['gallery']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['country'];?>
">
<div class="carousel-caption">
<h1 class="wit pix32"><?php echo $_smarty_tpl->tpl_vars['gallery']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['country'];?>
</h1>
<p class="pix18 p_l"><?php echo $_smarty_tpl->tpl_vars['gallery']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['description'];?>
</p>
<p class="pix18"><a class="wit" href="regions/<?php echo strtolower($_smarty_tpl->tpl_vars['gallery']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['country']);?>
/">Learn more &gt; &gt;</a></p> 
</div>
</div>
<?php
}
}
if ($__section_bit_0_saved) {
$_smarty_tpl->tpl_vars['__smarty_section_bit'] = $__section_bit_0_saved;
}
?>
</div>
 
  <!-- Controls -->
  <a class="left carousel-control" href="#bd-carousel" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left"></span>
  </a>
  <a class="right carousel-control" href="#bd-carousel" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right"></span>
  </a>
</div> <!-- Carousel -->


<article id="latestnews" class="bdnews bdgrid4">
<header>
<h1 title="In the News"><a href="/news/" title="News">In the News</a></h1>
</header>
<?php
$__section_bit_1_saved = isset($_smarty_tpl->tpl_vars['__smarty_section_bit']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit'] : false;
$__section_bit_1_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['newsitems']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_bit_1_total = min(($__section_bit_1_loop - 0), 4);
$_smarty_tpl->tpl_vars['__smarty_section_bit'] = new Smarty_Variable(array());
if ($__section_bit_1_total != 0) {
for ($__section_bit_1_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] = 0; $__section_bit_1_iteration <= $__section_bit_1_total; $__section_bit_1_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']++){
$_smarty_tpl->tpl_vars['__smarty_section_bit']->value['first'] = ($__section_bit_1_iteration == 1);
$_smarty_tpl->tpl_vars['__smarty_section_bit']->value['last'] = ($__section_bit_1_iteration == $__section_bit_1_total);
?>
<div class="bdnews_group bdgrid_group <?php if ((isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['last']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['last'] : null)) {?> bdgrid_group_last <?php }?>">
<figure>
<a href="<?php echo $_smarty_tpl->tpl_vars['newsitems']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['link'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['newsitems']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['title'];?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['newsitems']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['imagepath'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['newsitems']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['title'];?>
" /></a>
</figure>
<h4 title="<?php echo $_smarty_tpl->tpl_vars['newsitems']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['title'];?>
">
<a href="<?php echo $_smarty_tpl->tpl_vars['newsitems']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['link'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['newsitems']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['title'];?>
"><?php echo $_smarty_tpl->tpl_vars['newsitems']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['title'];?>
</a>
</h4>
<span class="bld rdd"><?php echo strtoupper($_smarty_tpl->tpl_vars['newsitems']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['country_category']);?>
</span> <?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['newsitems']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['content'],150);?>
  
<br><a class="btn btn-basic btn-xs" href="<?php echo $_smarty_tpl->tpl_vars['newsitems']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['link'];?>
/">Continue &#10142;</a>
</div>
<?php
}
}
if ($__section_bit_1_saved) {
$_smarty_tpl->tpl_vars['__smarty_section_bit'] = $__section_bit_1_saved;
}
?>
</article>
<div class="clean"></div>

<article id="spotlight" class="bdspotlight bdgrid3">
<header>
<h1 title="Wine Wednesday Spotlight"><a href="/spotlight/" title="Spotlight">Wine Wednesday Spotlight</a></h1>
</header>
<?php
$__section_bit_2_saved = isset($_smarty_tpl->tpl_vars['__smarty_section_bit']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit'] : false;
$__section_bit_2_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['spotlightitems']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_bit_2_total = min(($__section_bit_2_loop - 0), 3);
$_smarty_tpl->tpl_vars['__smarty_section_bit'] = new Smarty_Variable(array());
if ($__section_bit_2_total != 0) {
for ($__section_bit_2_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] = 0; $__section_bit_2_iteration <= $__section_bit_2_total; $__section_bit_2_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']++){
$_smarty_tpl->tpl_vars['__smarty_section_bit']->value['first'] = ($__section_bit_2_iteration == 1);
$_smarty_tpl->tpl_vars['__smarty_section_bit']->value['last'] = ($__section_bit_2_iteration == $__section_bit_2_total);
?>
<div class="bdspotlight_group bdgrid_group <?php if ((isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['last']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['last'] : null)) {?> bdgrid_group_last <?php }?>">
<figure>
<a href="<?php echo $_smarty_tpl->tpl_vars['spotlightitems']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['link'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['spotlightitems']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['title'];?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['spotlightitems']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['imagepath'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['spotlightitems']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['title'];?>
" /></a>
</figure>
<h4 title="<?php echo $_smarty_tpl->tpl_vars['spotlightitems']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['title'];?>
">
<a href="<?php echo $_smarty_tpl->tpl_vars['spotlightitems']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['link'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['spotlightitems']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['title'];?>
"><?php echo $_smarty_tpl->tpl_vars['spotlightitems']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['title'];?>
</a>
</h4>
<span class="bld rdd"><?php echo strtoupper($_smarty_tpl->tpl_vars['spotlightitems']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['country_category']);?>
</span> <?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['spotlightitems']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['content'],150);?>
  
<br><a class="btn btn-basic btn-xs" href="<?php echo $_smarty_tpl->tpl_vars['spotlightitems']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['link'];?>
/">Continue &#10142;</a>
</div>
<?php
}
}
if ($__section_bit_2_saved) {
$_smarty_tpl->tpl_vars['__smarty_section_bit'] = $__section_bit_2_saved;
}
?>
</article>

<article id="latestevents" class="bdgrid4">
<header>
<h1 title="Events"><a href="/events/" title="Events">Tasting Events</a></h1>
</header>
<?php
$__section_bit_3_saved = isset($_smarty_tpl->tpl_vars['__smarty_section_bit']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit'] : false;
$__section_bit_3_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['events']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_bit_3_total = min(($__section_bit_3_loop - 0), 4);
$_smarty_tpl->tpl_vars['__smarty_section_bit'] = new Smarty_Variable(array());
if ($__section_bit_3_total != 0) {
for ($__section_bit_3_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] = 0; $__section_bit_3_iteration <= $__section_bit_3_total; $__section_bit_3_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']++){
$_smarty_tpl->tpl_vars['__smarty_section_bit']->value['first'] = ($__section_bit_3_iteration == 1);
$_smarty_tpl->tpl_vars['__smarty_section_bit']->value['last'] = ($__section_bit_3_iteration == $__section_bit_3_total);
?>
<div class="bdevent_group bdgrid_group <?php if ((isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['last']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['last'] : null)) {?> bdgrid_group_last <?php }?>">
<div class="eventtop">
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
<h4 class="left" title="<?php echo $_smarty_tpl->tpl_vars['events']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['title'];?>
"><a href="/events/" title="<?php echo $_smarty_tpl->tpl_vars['events']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['title'];?>
"><?php echo $_smarty_tpl->tpl_vars['events']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['title'];?>
</a></h4>
</div>
<div class="clean"></div>
<figure>
<a href="/events/" title="<?php echo $_smarty_tpl->tpl_vars['events']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['title'];?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['events']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['img_file_name'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['events']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['title'];?>
" /></a>
</figure>
<div class="eventbottom">
<span class="bld rdd"><?php echo strtoupper($_smarty_tpl->tpl_vars['events']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['city']);?>
</span> <?php echo $_smarty_tpl->tpl_vars['events']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['location'];?>

</div>
</div>
<?php
}
}
if ($__section_bit_3_saved) {
$_smarty_tpl->tpl_vars['__smarty_section_bit'] = $__section_bit_3_saved;
}
?>
</article>

<article id="othernews" class="bdnews bdgrid4">
<?php
$__section_bit_4_saved = isset($_smarty_tpl->tpl_vars['__smarty_section_bit']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit'] : false;
$__section_bit_4_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['feeditems']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_bit_4_total = min(($__section_bit_4_loop - 0), 4);
$_smarty_tpl->tpl_vars['__smarty_section_bit'] = new Smarty_Variable(array());
if ($__section_bit_4_total != 0) {
for ($__section_bit_4_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] = 0; $__section_bit_4_iteration <= $__section_bit_4_total; $__section_bit_4_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']++){
$_smarty_tpl->tpl_vars['__smarty_section_bit']->value['first'] = ($__section_bit_4_iteration == 1);
$_smarty_tpl->tpl_vars['__smarty_section_bit']->value['last'] = ($__section_bit_4_iteration == $__section_bit_4_total);
?>
<div class="bdnews_group bdgrid_group <?php if ((isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['last']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['last'] : null)) {?> bdgrid_group_last <?php }?>">
<h4 class="category" title="<?php echo $_smarty_tpl->tpl_vars['feeditems']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['category'];?>
"><?php echo strtoupper($_smarty_tpl->tpl_vars['feeditems']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['category']);?>
</h4>
<figure>
<a href="<?php echo $_smarty_tpl->tpl_vars['feeditems']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['link'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['feeditems']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['title'];?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['feeditems']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['imagepath'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['feeditems']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['title'];?>
" /></a>
</figure>
<h4 title="<?php echo $_smarty_tpl->tpl_vars['feeditems']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['title'];?>
">
<a href="<?php echo $_smarty_tpl->tpl_vars['feeditems']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['link'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['feeditems']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['title'];?>
"><?php echo $_smarty_tpl->tpl_vars['feeditems']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['title'];?>
</a>
</h4>
<?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['feeditems']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['content'],150);?>
 <a class="btn btn-basic btn-xs" href="/blog/category/<?php echo strtolower($_smarty_tpl->tpl_vars['feeditems']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['category']);?>
/">More <?php echo $_smarty_tpl->tpl_vars['feeditems']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['category'];?>
</a>
</div>
<?php
}
}
if ($__section_bit_4_saved) {
$_smarty_tpl->tpl_vars['__smarty_section_bit'] = $__section_bit_4_saved;
}
?>
</article>
<div class="clean"></div>


<?php }
}
