<?php
/* Smarty version 3.1.30, created on 2018-07-17 22:51:17
  from "/var/www/html/smarty/templates/pages/wines.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5b4e72e5724990_55490066',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f2b052406e3043f1e607e87f4c06222a7b1a92a7' => 
    array (
      0 => '/var/www/html/smarty/templates/pages/wines.tpl',
      1 => 1531867869,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:modules/nav_shop.tpl' => 1,
  ),
),false)) {
function content_5b4e72e5724990_55490066 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_modifier_replace')) require_once '/var/www/Smarty/libs/plugins/modifier.replace.php';
if (!is_callable('smarty_modifier_capitalize')) require_once '/var/www/Smarty/libs/plugins/modifier.capitalize.php';
$_smarty_tpl->_subTemplateRender("file:modules/nav_shop.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<div class="bdgridcontent9">

<article id="wines">

<?php if (TRUE) {?>
<div class="alignCenter uchighlight bld">
Please be aware that shipping during periods of extreme heat may damage your wine. Therefore, we will gladly hold your purchased wines until there are more moderate temperatures. Just leave us shipping instructions or contact us  at webshop @ bluedanubewine.com or +1 (650) 941-4699.
</div>
<?php }?>

<?php if (FALSE) {?>
<div class="alignCenter uchighlight bld">
To ensure your wine arrives by December 24th, 2016, order by 12/14 for the East Coast/Midwest, 12/19 for the West Coast, and 12/20 for California. <br>Looking for a last minute gift? Consider sending a Blue Danube Wine <a href="/giftcard/" target="_blank">E-Gift Card</a>.
</div>
<?php }?>

<?php if (FALSE) {?>
<div class="alignCenter uchighlight bld">
<p class="pix16">The Webshop goes on vacation!</p>
<p>The Webshop team will be taking a well-deserved vacation from January 1st to January 14th 2018. During these two weeks, the online store will be open for orders but no wine will be shipped. Wine shipments will resume the week of January 15th.</p>
</div>
<?php }?>

<div class="wine_search_group">
<div class="wine_search_by">Search by:</div>
<div class="wine_search_set">
<div class="wine_search_form"><form method="post" action="/sort_wines/" >
<label>&nbsp;Wine Type:</label>
<select name="terms" onchange="this.form.submit();">
        <option value="">All</option>
	<?php
$__section_bit_0_saved = isset($_smarty_tpl->tpl_vars['__smarty_section_bit']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit'] : false;
$__section_bit_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['wine_types']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_bit_0_total = $__section_bit_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_bit'] = new Smarty_Variable(array());
if ($__section_bit_0_total != 0) {
for ($__section_bit_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] = 0; $__section_bit_0_iteration <= $__section_bit_0_total; $__section_bit_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']++){
$_smarty_tpl->tpl_vars['__smarty_section_bit']->value['last'] = ($__section_bit_0_iteration == $__section_bit_0_total);
?>
	<option value="<?php echo $_smarty_tpl->tpl_vars['wine_types']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['web_name'];?>
"<?php if ($_smarty_tpl->tpl_vars['search_criteria']->value == $_smarty_tpl->tpl_vars['wine_types']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['web_name']) {?> selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['wine_types']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['full_name'];?>
</option>
	<?php
}
}
if ($__section_bit_0_saved) {
$_smarty_tpl->tpl_vars['__smarty_section_bit'] = $__section_bit_0_saved;
}
?>
</select>
</form></div>
<div class="wine_search_form"><form method="post" action="/sort_wines/" >
<label>&nbsp;Regions:</label>
<select name="terms" onchange="this.form.submit();">
	<option value="">All</option>
	<?php
$__section_bit_1_saved = isset($_smarty_tpl->tpl_vars['__smarty_section_bit']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit'] : false;
$__section_bit_1_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['ncc']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_bit_1_total = $__section_bit_1_loop;
$_smarty_tpl->tpl_vars['__smarty_section_bit'] = new Smarty_Variable(array());
if ($__section_bit_1_total != 0) {
for ($__section_bit_1_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] = 0; $__section_bit_1_iteration <= $__section_bit_1_total; $__section_bit_1_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']++){
$_smarty_tpl->tpl_vars['__smarty_section_bit']->value['last'] = ($__section_bit_1_iteration == $__section_bit_1_total);
?>
	<option value="<?php echo $_smarty_tpl->tpl_vars['ncc']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['web_name'];?>
"<?php if ($_smarty_tpl->tpl_vars['search_criteria']->value == $_smarty_tpl->tpl_vars['ncc']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['web_name']) {?> selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['ncc']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['full_name'];?>
</option>
	<?php
}
}
if ($__section_bit_1_saved) {
$_smarty_tpl->tpl_vars['__smarty_section_bit'] = $__section_bit_1_saved;
}
?>
</select>
</form></div>
<div class="wine_search_form"><form method="post" action="/sort_wines/" >
<label>&nbsp;Wine Style:</label><select name="terms" onchange="this.form.submit();">
        <option value="">All</option>
	<?php
$__section_bit_2_saved = isset($_smarty_tpl->tpl_vars['__smarty_section_bit']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit'] : false;
$__section_bit_2_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['wine_styles']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_bit_2_total = $__section_bit_2_loop;
$_smarty_tpl->tpl_vars['__smarty_section_bit'] = new Smarty_Variable(array());
if ($__section_bit_2_total != 0) {
for ($__section_bit_2_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] = 0; $__section_bit_2_iteration <= $__section_bit_2_total; $__section_bit_2_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']++){
$_smarty_tpl->tpl_vars['__smarty_section_bit']->value['last'] = ($__section_bit_2_iteration == $__section_bit_2_total);
?>
	<option value="<?php echo $_smarty_tpl->tpl_vars['wine_styles']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['web_name'];?>
"<?php if ($_smarty_tpl->tpl_vars['search_criteria']->value == $_smarty_tpl->tpl_vars['wine_styles']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['web_name']) {?> selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['wine_styles']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['full_name'];?>
</option>
	<?php
}
}
if ($__section_bit_2_saved) {
$_smarty_tpl->tpl_vars['__smarty_section_bit'] = $__section_bit_2_saved;
}
?>
</select>
</form></div>
<div class="wine_search_form"><form method="post" action="/sort_wines/" >
<label>&nbsp;Varietals:</label><select name="terms" onchange="this.form.submit();">
		<option value="">All</option>
		<?php
$__section_vs_3_saved = isset($_smarty_tpl->tpl_vars['__smarty_section_vs']) ? $_smarty_tpl->tpl_vars['__smarty_section_vs'] : false;
$__section_vs_3_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['varietals']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_vs_3_total = $__section_vs_3_loop;
$_smarty_tpl->tpl_vars['__smarty_section_vs'] = new Smarty_Variable(array());
if ($__section_vs_3_total != 0) {
for ($__section_vs_3_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_vs']->value['index'] = 0; $__section_vs_3_iteration <= $__section_vs_3_total; $__section_vs_3_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_vs']->value['index']++){
?>
		<option value="<?php echo $_smarty_tpl->tpl_vars['varietals']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_vs']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_vs']->value['index'] : null)]['friendly'];?>
"<?php if ($_smarty_tpl->tpl_vars['search_criteria']->value == $_smarty_tpl->tpl_vars['varietals']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_vs']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_vs']->value['index'] : null)]['friendly']) {?> selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['varietals']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_vs']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_vs']->value['index'] : null)]['name'];?>
</option>
		<?php
}
}
if ($__section_vs_3_saved) {
$_smarty_tpl->tpl_vars['__smarty_section_vs'] = $__section_vs_3_saved;
}
?>
</select>
</form></div>

</div><!-- /.wine_search_set -->
</div><!-- /.wine_search_group -->
<div class="clean"></div>

<?php if ($_smarty_tpl->tpl_vars['new_arrivals']->value) {?>

<h2 title="New Arrivals"><a href="/wines/new/" title="New Arrivals">New Arrivals</h2>
<?php
$__section_bit_4_saved = isset($_smarty_tpl->tpl_vars['__smarty_section_bit']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit'] : false;
$__section_bit_4_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['new_arrivals']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_bit_4_total = $__section_bit_4_loop;
$_smarty_tpl->tpl_vars['__smarty_section_bit'] = new Smarty_Variable(array());
if ($__section_bit_4_total != 0) {
for ($__section_bit_4_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] = 0; $__section_bit_4_iteration <= $__section_bit_4_total; $__section_bit_4_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']++){
$_smarty_tpl->tpl_vars['__smarty_section_bit']->value['last'] = ($__section_bit_4_iteration == $__section_bit_4_total);
?>
<form method="post" action="/add_to_cart/">
<input type="hidden" name="vint_id" value="<?php echo $_smarty_tpl->tpl_vars['new_arrivals']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['vint_id'];?>
" />
<input type="hidden" name="item_type" value="<?php echo $_smarty_tpl->tpl_vars['new_arrivals']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['item_type'];?>
" />
<input type="hidden" name="product_id" value="<?php echo $_smarty_tpl->tpl_vars['new_arrivals']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['product_id'];?>
" />
<input type="hidden" name="year" value="<?php echo $_smarty_tpl->tpl_vars['new_arrivals']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['year'];?>
" />
<input type="hidden" name="size" value="<?php echo $_smarty_tpl->tpl_vars['new_arrivals']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['size'];?>
" />
<input type="hidden" name="winery_id" value="<?php echo $_smarty_tpl->tpl_vars['new_arrivals']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['winery_id'];?>
" />
<input type="hidden" name="winery_name" value="<?php echo $_smarty_tpl->tpl_vars['new_arrivals']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['winery'];?>
" />
<input type="hidden" name="appellation" value="<?php echo $_smarty_tpl->tpl_vars['new_arrivals']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['appellation'];?>
" />
<input type="hidden" name="vint_name" value="<?php echo $_smarty_tpl->tpl_vars['new_arrivals']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['vintage'];?>
" />
<input type="hidden" name="base_price" value="<?php echo $_smarty_tpl->tpl_vars['new_arrivals']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['price'];?>
"  />
<input type="hidden" name="price" value="<?php if ($_smarty_tpl->tpl_vars['new_arrivals']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['sale'] > '0') {
echo $_smarty_tpl->tpl_vars['new_arrivals']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['sale'];
} else {
echo $_smarty_tpl->tpl_vars['new_arrivals']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['price'];
}?>" />
<input type="hidden" name="bottles" value="<?php echo $_smarty_tpl->tpl_vars['new_arrivals']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['bottles'];?>
" />
<input type="hidden" name="shipping" value="<?php echo $_smarty_tpl->tpl_vars['new_arrivals']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['shipping'];?>
" />
<input type="hidden" name="grup" value=<?php echo $_smarty_tpl->tpl_vars['new_arrivals']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['grup'];?>
 />
<input type="hidden" name="quantity" value="1" />

<div class="mod_bottle_info" id="<?php echo $_smarty_tpl->tpl_vars['new_arrivals']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['vint_id'];?>
">
<div class="mod_bottle_info_img">
<a href="<?php echo $_smarty_tpl->tpl_vars['new_arrivals']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['url'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['new_arrivals']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['title'];?>
">
<img src="<?php echo $_smarty_tpl->tpl_vars['new_arrivals']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['image_file'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['new_arrivals']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['title'];?>
" />
</a>
</div><!-- /.mod_bottle_info_img -->
<div class="mod_bottle_info_text">
<a href="<?php echo $_smarty_tpl->tpl_vars['new_arrivals']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['url'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['new_arrivals']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['title'];?>
">
<b><?php if ($_smarty_tpl->tpl_vars['new_arrivals']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['pretty_winery_name']) {
echo $_smarty_tpl->tpl_vars['new_arrivals']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['pretty_winery_name'];?>
<br><?php }
echo $_smarty_tpl->tpl_vars['new_arrivals']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['vintage'];?>

<?php if ($_smarty_tpl->tpl_vars['new_arrivals']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['pretty_year_size']) {?><br><?php echo $_smarty_tpl->tpl_vars['new_arrivals']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['pretty_year_size'];
}?></b>
</a>
<?php if ($_smarty_tpl->tpl_vars['new_arrivals']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['notes'] || ($_smarty_tpl->tpl_vars['new_arrivals']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['sale'] > 0)) {?>
<div class="mod_bottle_info_text_notes">
<?php if ($_smarty_tpl->tpl_vars['new_arrivals']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['new'] > 0) {?> <span class="bld">NEW!</span> <?php }
echo $_smarty_tpl->tpl_vars['new_arrivals']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['truncated_notes'];?>
 
<a href="<?php echo $_smarty_tpl->tpl_vars['new_arrivals']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['url'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['new_arrivals']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['title'];?>
"><span class="nowrap">more &gt;</span></a>
</div><!-- /.mod_bottle_info_text_notes -->
<?php }?>
<div class="mod_bottle_info_text_buy">
<?php if ($_smarty_tpl->tpl_vars['new_arrivals']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['sale'] > 0) {
if ($_smarty_tpl->tpl_vars['new_arrivals']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['sale'] < 10) {?><span class="rdd" style="padding-left:0.1em;">$<?php echo $_smarty_tpl->tpl_vars['new_arrivals']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['sale'];?>
</span> <?php } else { ?><span class="rdd">$<?php echo $_smarty_tpl->tpl_vars['new_arrivals']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['sale'];?>
</span> <?php }?> <?php } elseif ($_smarty_tpl->tpl_vars['new_arrivals']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['price'] > 0) {?>$<?php echo $_smarty_tpl->tpl_vars['new_arrivals']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['price'];?>
 <?php }?>
<button class="btn btn-xs btn-primary" type="submit" title="Add to Cart">Add to Cart</button>  <?php if ((isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['last']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['last'] : null) && ($_smarty_tpl->tpl_vars['search_criteria']->value == "all")) {?> <a href="/wines/new/" title="More New Arrivals"><span class="right_arrow fa-2x"><i class="fa fa-chevron-right" fa-5x"></i></span></a><?php }?>
</div><!-- /.mod_bottle_info_text_buy -->
</div><!-- /.mod_bottle_info_text -->
</div><!-- /.mod_bottle_info -->
</form>
<?php
}
}
if ($__section_bit_4_saved) {
$_smarty_tpl->tpl_vars['__smarty_section_bit'] = $__section_bit_4_saved;
}
?>
<div class="clean"></div>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['specials']->value) {?>

<h2 title="Special offers"><a href="/wines/specials/" title="Special Offers">Special Offers</a></h2>
<?php
$__section_bit_5_saved = isset($_smarty_tpl->tpl_vars['__smarty_section_bit']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit'] : false;
$__section_bit_5_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['specials']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_bit_5_total = $__section_bit_5_loop;
$_smarty_tpl->tpl_vars['__smarty_section_bit'] = new Smarty_Variable(array());
if ($__section_bit_5_total != 0) {
for ($__section_bit_5_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] = 0; $__section_bit_5_iteration <= $__section_bit_5_total; $__section_bit_5_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']++){
$_smarty_tpl->tpl_vars['__smarty_section_bit']->value['last'] = ($__section_bit_5_iteration == $__section_bit_5_total);
?>
<form method="post" action="/add_to_cart/">
<input type="hidden" name="vint_id" value="<?php echo $_smarty_tpl->tpl_vars['specials']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['vint_id'];?>
" />
<input type="hidden" name="item_type" value="<?php echo $_smarty_tpl->tpl_vars['specials']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['item_type'];?>
" />
<input type="hidden" name="product_id" value="<?php echo $_smarty_tpl->tpl_vars['specials']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['product_id'];?>
" />
<input type="hidden" name="year" value="<?php echo $_smarty_tpl->tpl_vars['specials']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['year'];?>
" />
<input type="hidden" name="size" value="<?php echo $_smarty_tpl->tpl_vars['specials']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['size'];?>
" />
<input type="hidden" name="winery_id" value="<?php echo $_smarty_tpl->tpl_vars['specials']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['winery_id'];?>
" />
<input type="hidden" name="winery_name" value="<?php echo $_smarty_tpl->tpl_vars['specials']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['winery'];?>
" />
<input type="hidden" name="appellation" value="<?php echo $_smarty_tpl->tpl_vars['specials']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['appellation'];?>
" />
<input type="hidden" name="vint_name" value="<?php echo $_smarty_tpl->tpl_vars['specials']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['vintage'];?>
" />
<input type="hidden" name="base_price" value="<?php echo $_smarty_tpl->tpl_vars['specials']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['price'];?>
"  />
<input type="hidden" name="price" value="<?php if ($_smarty_tpl->tpl_vars['specials']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['sale'] > '0') {
echo $_smarty_tpl->tpl_vars['specials']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['sale'];
} else {
echo $_smarty_tpl->tpl_vars['specials']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['price'];
}?>" />
<input type="hidden" name="bottles" value="<?php echo $_smarty_tpl->tpl_vars['specials']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['bottles'];?>
" />
<input type="hidden" name="shipping" value="<?php echo $_smarty_tpl->tpl_vars['specials']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['shipping'];?>
" />
<input type="hidden" name="grup" value=<?php echo $_smarty_tpl->tpl_vars['specials']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['grup'];?>
 />
<input type="hidden" name="quantity" value="1" />

<div class="mod_bottle_info" id="<?php echo $_smarty_tpl->tpl_vars['specials']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['vint_id'];?>
">
<div class="mod_bottle_info_img">
<a href="<?php echo $_smarty_tpl->tpl_vars['specials']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['url'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['specials']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['title'];?>
">
<img src="<?php echo $_smarty_tpl->tpl_vars['specials']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['image_file'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['specials']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['title'];?>
" />
</a>
</div><!-- /.mod_bottle_info_img -->
<div class="mod_bottle_info_text">
<a href="<?php echo $_smarty_tpl->tpl_vars['specials']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['url'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['specials']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['title'];?>
">
<b><?php if ($_smarty_tpl->tpl_vars['specials']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['pretty_winery_name']) {
echo $_smarty_tpl->tpl_vars['specials']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['pretty_winery_name'];?>
<br><?php }
echo $_smarty_tpl->tpl_vars['specials']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['vintage'];?>

<?php if ($_smarty_tpl->tpl_vars['specials']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['pretty_year_size']) {?><br><?php echo $_smarty_tpl->tpl_vars['specials']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['pretty_year_size'];
}?></b>
</a>
<?php if ($_smarty_tpl->tpl_vars['specials']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['notes'] || ($_smarty_tpl->tpl_vars['specials']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['sale'] > 0)) {?>
<div class="mod_bottle_info_text_notes">
<?php if ($_smarty_tpl->tpl_vars['specials']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['new'] > 0) {?> <span class="bld">NEW!</span> <?php }
echo $_smarty_tpl->tpl_vars['specials']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['truncated_notes'];?>
 
<a href="<?php echo $_smarty_tpl->tpl_vars['specials']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['url'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['specials']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['title'];?>
"><span class="nowrap">more &gt;</span></a>
</div><!-- /.mod_bottle_info_text_notes -->
<?php }?>
<div class="mod_bottle_info_text_buy">
<?php if ($_smarty_tpl->tpl_vars['specials']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['sale'] > 0) {
if ($_smarty_tpl->tpl_vars['specials']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['sale'] < 10) {?><span class="rdd" style="padding-left:0.1em;">$<?php echo $_smarty_tpl->tpl_vars['specials']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['sale'];?>
</span> <?php } else { ?><span class="rdd">$<?php echo $_smarty_tpl->tpl_vars['specials']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['sale'];?>
</span> <?php }?> <?php } elseif ($_smarty_tpl->tpl_vars['specials']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['price'] > 0) {?>$<?php echo $_smarty_tpl->tpl_vars['specials']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['price'];?>
 <?php }?>
<button class="btn btn-xs btn-primary" type="submit" title="Add to Cart">Add to Cart</button>  <?php if ((isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['last']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['last'] : null) && ($_smarty_tpl->tpl_vars['search_criteria']->value == "all")) {?> <a href="/wines/specials/" title="More Special Offers"><span class="right_arrow fa-2x"><i class="fa fa-chevron-right" fa-5x"></i></span></a><?php }?>
</div><!-- /.mod_bottle_info_text_buy -->
</div><!-- /.mod_bottle_info_text -->
</div><!-- /.mod_bottle_info -->
</form>
<?php
}
}
if ($__section_bit_5_saved) {
$_smarty_tpl->tpl_vars['__smarty_section_bit'] = $__section_bit_5_saved;
}
?>
<div class="clean"></div>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['organic_wines']->value) {?>

<h2 title="Organic Wines"><a href="/wines/organic/" title="Organic Wines">Organic Wines</a></h2>
<?php
$__section_bit_6_saved = isset($_smarty_tpl->tpl_vars['__smarty_section_bit']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit'] : false;
$__section_bit_6_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['organic_wines']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_bit_6_total = $__section_bit_6_loop;
$_smarty_tpl->tpl_vars['__smarty_section_bit'] = new Smarty_Variable(array());
if ($__section_bit_6_total != 0) {
for ($__section_bit_6_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] = 0; $__section_bit_6_iteration <= $__section_bit_6_total; $__section_bit_6_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']++){
$_smarty_tpl->tpl_vars['__smarty_section_bit']->value['last'] = ($__section_bit_6_iteration == $__section_bit_6_total);
?>
<form method="post" action="/add_to_cart/">
<input type="hidden" name="vint_id" value="<?php echo $_smarty_tpl->tpl_vars['organic_wines']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['vint_id'];?>
" />
<input type="hidden" name="item_type" value="<?php echo $_smarty_tpl->tpl_vars['organic_wines']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['item_type'];?>
" />
<input type="hidden" name="product_id" value="<?php echo $_smarty_tpl->tpl_vars['organic_wines']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['product_id'];?>
" />
<input type="hidden" name="year" value="<?php echo $_smarty_tpl->tpl_vars['organic_wines']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['year'];?>
" />
<input type="hidden" name="size" value="<?php echo $_smarty_tpl->tpl_vars['organic_wines']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['size'];?>
" />
<input type="hidden" name="winery_id" value="<?php echo $_smarty_tpl->tpl_vars['organic_wines']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['winery_id'];?>
" />
<input type="hidden" name="winery_name" value="<?php echo $_smarty_tpl->tpl_vars['organic_wines']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['winery'];?>
" />
<input type="hidden" name="appellation" value="<?php echo $_smarty_tpl->tpl_vars['organic_wines']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['appellation'];?>
" />
<input type="hidden" name="vint_name" value="<?php echo $_smarty_tpl->tpl_vars['organic_wines']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['vintage'];?>
" />
<input type="hidden" name="base_price" value="<?php echo $_smarty_tpl->tpl_vars['organic_wines']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['price'];?>
"  />
<input type="hidden" name="price" value="<?php if ($_smarty_tpl->tpl_vars['organic_wines']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['sale'] > '0') {
echo $_smarty_tpl->tpl_vars['organic_wines']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['sale'];
} else {
echo $_smarty_tpl->tpl_vars['organic_wines']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['price'];
}?>" />
<input type="hidden" name="bottles" value="<?php echo $_smarty_tpl->tpl_vars['organic_wines']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['bottles'];?>
" />
<input type="hidden" name="shipping" value="<?php echo $_smarty_tpl->tpl_vars['organic_wines']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['shipping'];?>
" />
<input type="hidden" name="grup" value=<?php echo $_smarty_tpl->tpl_vars['organic_wines']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['grup'];?>
 />
<input type="hidden" name="quantity" value="1" />

<div class="mod_bottle_info" id="<?php echo $_smarty_tpl->tpl_vars['organic_wines']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['vint_id'];?>
">
<div class="mod_bottle_info_img">
<a href="<?php echo $_smarty_tpl->tpl_vars['organic_wines']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['url'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['organic_wines']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['title'];?>
">
<img src="<?php echo $_smarty_tpl->tpl_vars['organic_wines']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['image_file'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['organic_wines']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['title'];?>
" />
</a>
</div><!-- /.mod_bottle_info_img -->
<div class="mod_bottle_info_text">
<a href="<?php echo $_smarty_tpl->tpl_vars['organic_wines']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['url'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['organic_wines']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['title'];?>
">
<b><?php if ($_smarty_tpl->tpl_vars['organic_wines']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['pretty_winery_name']) {
echo $_smarty_tpl->tpl_vars['organic_wines']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['pretty_winery_name'];?>
<br><?php }
echo $_smarty_tpl->tpl_vars['organic_wines']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['vintage'];?>

<?php if ($_smarty_tpl->tpl_vars['organic_wines']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['pretty_year_size']) {?><br><?php echo $_smarty_tpl->tpl_vars['organic_wines']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['pretty_year_size'];
}?></b>
</a>
<?php if ($_smarty_tpl->tpl_vars['organic_wines']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['notes'] || ($_smarty_tpl->tpl_vars['organic_wines']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['sale'] > 0)) {?>
<div class="mod_bottle_info_text_notes">
<?php if ($_smarty_tpl->tpl_vars['organic_wines']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['new'] > 0) {?> <span class="bld">NEW!</span> <?php }
echo $_smarty_tpl->tpl_vars['organic_wines']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['truncated_notes'];?>
 
<a href="<?php echo $_smarty_tpl->tpl_vars['organic_wines']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['url'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['organic_wines']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['title'];?>
"><span class="nowrap">more &gt;</span></a>
</div><!-- /.mod_bottle_info_text_notes -->
<?php }?>
<div class="mod_bottle_info_text_buy">
<?php if ($_smarty_tpl->tpl_vars['organic_wines']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['sale'] > 0) {
if ($_smarty_tpl->tpl_vars['organic_wines']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['sale'] < 10) {?><span class="rdd" style="padding-left:0.1em;">$<?php echo $_smarty_tpl->tpl_vars['organic_wines']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['sale'];?>
</span> <?php } else { ?><span class="rdd">$<?php echo $_smarty_tpl->tpl_vars['organic_wines']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['sale'];?>
</span> <?php }?> <?php } elseif ($_smarty_tpl->tpl_vars['organic_wines']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['price'] > 0) {?>$<?php echo $_smarty_tpl->tpl_vars['organic_wines']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['price'];?>
 <?php }?>
<button class="btn btn-xs btn-primary" type="submit" title="Add to Cart">Add to Cart</button>  <?php if ((isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['last']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['last'] : null) && ($_smarty_tpl->tpl_vars['search_criteria']->value == "all")) {?> <a href="/wines/organic/" title="More Organic"><span class="right_arrow fa-2x"><i class="fa fa-chevron-right" fa-5x"></i></span></a><?php }?>
</div><!-- /.mod_bottle_info_text_buy -->
</div><!-- /.mod_bottle_info_text -->
</div><!-- /.mod_bottle_info -->
</form>
<?php
}
}
if ($__section_bit_6_saved) {
$_smarty_tpl->tpl_vars['__smarty_section_bit'] = $__section_bit_6_saved;
}
?>
<div class="clean"></div>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['austria']->value) {?>

<h2 title="Wines from Austria"><a href="/wines/austria/" title="Wines from Austria">Austria</a></h2>
<?php
$__section_bit_7_saved = isset($_smarty_tpl->tpl_vars['__smarty_section_bit']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit'] : false;
$__section_bit_7_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['austria']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_bit_7_total = $__section_bit_7_loop;
$_smarty_tpl->tpl_vars['__smarty_section_bit'] = new Smarty_Variable(array());
if ($__section_bit_7_total != 0) {
for ($__section_bit_7_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] = 0; $__section_bit_7_iteration <= $__section_bit_7_total; $__section_bit_7_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']++){
$_smarty_tpl->tpl_vars['__smarty_section_bit']->value['last'] = ($__section_bit_7_iteration == $__section_bit_7_total);
?>
<form method="post" action="/add_to_cart/">
<input type="hidden" name="vint_id" value="<?php echo $_smarty_tpl->tpl_vars['austria']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['vint_id'];?>
" />
<input type="hidden" name="item_type" value="<?php echo $_smarty_tpl->tpl_vars['austria']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['item_type'];?>
" />
<input type="hidden" name="product_id" value="<?php echo $_smarty_tpl->tpl_vars['austria']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['product_id'];?>
" />
<input type="hidden" name="year" value="<?php echo $_smarty_tpl->tpl_vars['austria']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['year'];?>
" />
<input type="hidden" name="size" value="<?php echo $_smarty_tpl->tpl_vars['austria']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['size'];?>
" />
<input type="hidden" name="winery_id" value="<?php echo $_smarty_tpl->tpl_vars['austria']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['winery_id'];?>
" />
<input type="hidden" name="winery_name" value="<?php echo $_smarty_tpl->tpl_vars['austria']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['winery'];?>
" />
<input type="hidden" name="appellation" value="<?php echo $_smarty_tpl->tpl_vars['austria']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['appellation'];?>
" />
<input type="hidden" name="vint_name" value="<?php echo $_smarty_tpl->tpl_vars['austria']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['vintage'];?>
" />
<input type="hidden" name="base_price" value="<?php echo $_smarty_tpl->tpl_vars['austria']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['price'];?>
"  />
<input type="hidden" name="price" value="<?php if ($_smarty_tpl->tpl_vars['austria']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['sale'] > '0') {
echo $_smarty_tpl->tpl_vars['austria']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['sale'];
} else {
echo $_smarty_tpl->tpl_vars['austria']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['price'];
}?>" />
<input type="hidden" name="bottles" value="<?php echo $_smarty_tpl->tpl_vars['austria']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['bottles'];?>
" />
<input type="hidden" name="shipping" value="<?php echo $_smarty_tpl->tpl_vars['austria']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['shipping'];?>
" />
<input type="hidden" name="grup" value=<?php echo $_smarty_tpl->tpl_vars['austria']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['grup'];?>
 />
<input type="hidden" name="quantity" value="1" />

<div class="mod_bottle_info" id="<?php echo $_smarty_tpl->tpl_vars['austria']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['vint_id'];?>
">
<div class="mod_bottle_info_img">
<a href="<?php echo $_smarty_tpl->tpl_vars['austria']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['url'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['austria']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['title'];?>
">
<img src="<?php echo $_smarty_tpl->tpl_vars['austria']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['image_file'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['austria']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['title'];?>
" />
</a>
</div><!-- /.mod_bottle_info_img -->
<div class="mod_bottle_info_text">
<a href="<?php echo $_smarty_tpl->tpl_vars['austria']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['url'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['austria']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['title'];?>
">
<b><?php if ($_smarty_tpl->tpl_vars['austria']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['pretty_winery_name']) {
echo $_smarty_tpl->tpl_vars['austria']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['pretty_winery_name'];?>
<br><?php }
echo $_smarty_tpl->tpl_vars['austria']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['vintage'];?>

<?php if ($_smarty_tpl->tpl_vars['austria']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['pretty_year_size']) {?><br><?php echo $_smarty_tpl->tpl_vars['austria']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['pretty_year_size'];
}?></b>
</a>
<?php if ($_smarty_tpl->tpl_vars['austria']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['notes'] || ($_smarty_tpl->tpl_vars['austria']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['sale'] > 0)) {?>
<div class="mod_bottle_info_text_notes">
<?php if ($_smarty_tpl->tpl_vars['austria']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['new'] > 0) {?> <span class="bld">NEW!</span> <?php }
echo $_smarty_tpl->tpl_vars['austria']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['truncated_notes'];?>
 
<a href="<?php echo $_smarty_tpl->tpl_vars['austria']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['url'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['austria']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['title'];?>
"><span class="nowrap">more &gt;</span></a>
</div><!-- /.mod_bottle_info_text_notes -->
<?php }?>
<div class="mod_bottle_info_text_buy">
<?php if ($_smarty_tpl->tpl_vars['austria']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['sale'] > 0) {
if ($_smarty_tpl->tpl_vars['austria']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['sale'] < 10) {?><span class="rdd" style="padding-left:0.1em;">$<?php echo $_smarty_tpl->tpl_vars['austria']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['sale'];?>
</span> <?php } else { ?><span class="rdd">$<?php echo $_smarty_tpl->tpl_vars['austria']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['sale'];?>
</span> <?php }?> <?php } elseif ($_smarty_tpl->tpl_vars['austria']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['price'] > 0) {?>$<?php echo $_smarty_tpl->tpl_vars['austria']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['price'];?>
 <?php }?>
<button class="btn btn-xs btn-primary" type="submit" title="Add to Cart">Add to Cart</button>  <?php if ((isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['last']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['last'] : null) && ($_smarty_tpl->tpl_vars['search_criteria']->value == "all")) {?> <a href="/wines/austria/" title="More Wines from Austria"><span class="right_arrow fa-2x"><i class="fa fa-chevron-right" fa-5x"></i></span></a><?php }?>
</div><!-- /.mod_bottle_info_text_buy -->
</div><!-- /.mod_bottle_info_text -->
</div><!-- /.mod_bottle_info -->
</form>
<?php
}
}
if ($__section_bit_7_saved) {
$_smarty_tpl->tpl_vars['__smarty_section_bit'] = $__section_bit_7_saved;
}
?>
<div class="clean"></div>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['bosnia']->value) {?>

<h2 title="Wines from Bosnia"><a href="/wines/bosnia_herzegovina/" title="Wines from Bosnia Herzegovina">Bosnia Herzegovina</A></h2>
<?php
$__section_bit_8_saved = isset($_smarty_tpl->tpl_vars['__smarty_section_bit']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit'] : false;
$__section_bit_8_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['bosnia']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_bit_8_total = $__section_bit_8_loop;
$_smarty_tpl->tpl_vars['__smarty_section_bit'] = new Smarty_Variable(array());
if ($__section_bit_8_total != 0) {
for ($__section_bit_8_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] = 0; $__section_bit_8_iteration <= $__section_bit_8_total; $__section_bit_8_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']++){
$_smarty_tpl->tpl_vars['__smarty_section_bit']->value['last'] = ($__section_bit_8_iteration == $__section_bit_8_total);
?>
<form method="post" action="/add_to_cart/">
<input type="hidden" name="vint_id" value="<?php echo $_smarty_tpl->tpl_vars['bosnia']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['vint_id'];?>
" />
<input type="hidden" name="item_type" value="<?php echo $_smarty_tpl->tpl_vars['bosnia']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['item_type'];?>
" />
<input type="hidden" name="product_id" value="<?php echo $_smarty_tpl->tpl_vars['bosnia']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['product_id'];?>
" />
<input type="hidden" name="year" value="<?php echo $_smarty_tpl->tpl_vars['bosnia']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['year'];?>
" />
<input type="hidden" name="size" value="<?php echo $_smarty_tpl->tpl_vars['bosnia']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['size'];?>
" />
<input type="hidden" name="winery_id" value="<?php echo $_smarty_tpl->tpl_vars['bosnia']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['winery_id'];?>
" />
<input type="hidden" name="winery_name" value="<?php echo $_smarty_tpl->tpl_vars['bosnia']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['winery'];?>
" />
<input type="hidden" name="appellation" value="<?php echo $_smarty_tpl->tpl_vars['bosnia']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['appellation'];?>
" />
<input type="hidden" name="vint_name" value="<?php echo $_smarty_tpl->tpl_vars['bosnia']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['vintage'];?>
" />
<input type="hidden" name="base_price" value="<?php echo $_smarty_tpl->tpl_vars['bosnia']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['price'];?>
"  />
<input type="hidden" name="price" value="<?php if ($_smarty_tpl->tpl_vars['bosnia']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['sale'] > '0') {
echo $_smarty_tpl->tpl_vars['bosnia']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['sale'];
} else {
echo $_smarty_tpl->tpl_vars['bosnia']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['price'];
}?>" />
<input type="hidden" name="bottles" value="<?php echo $_smarty_tpl->tpl_vars['bosnia']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['bottles'];?>
" />
<input type="hidden" name="shipping" value="<?php echo $_smarty_tpl->tpl_vars['bosnia']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['shipping'];?>
" />
<input type="hidden" name="grup" value=<?php echo $_smarty_tpl->tpl_vars['bosnia']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['grup'];?>
 />
<input type="hidden" name="quantity" value="1" />

<div class="mod_bottle_info" id="<?php echo $_smarty_tpl->tpl_vars['bosnia']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['vint_id'];?>
">
<div class="mod_bottle_info_img">
<a href="<?php echo $_smarty_tpl->tpl_vars['bosnia']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['url'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['bosnia']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['title'];?>
">
<img src="<?php echo $_smarty_tpl->tpl_vars['bosnia']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['image_file'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['bosnia']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['title'];?>
" />
</a>
</div><!-- /.mod_bottle_info_img -->
<div class="mod_bottle_info_text">
<a href="<?php echo $_smarty_tpl->tpl_vars['bosnia']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['url'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['bosnia']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['title'];?>
">
<b><?php if ($_smarty_tpl->tpl_vars['bosnia']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['pretty_winery_name']) {
echo $_smarty_tpl->tpl_vars['bosnia']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['pretty_winery_name'];?>
<br><?php }
echo $_smarty_tpl->tpl_vars['bosnia']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['vintage'];?>

<?php if ($_smarty_tpl->tpl_vars['bosnia']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['pretty_year_size']) {?><br><?php echo $_smarty_tpl->tpl_vars['bosnia']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['pretty_year_size'];
}?></b>
</a>
<?php if ($_smarty_tpl->tpl_vars['bosnia']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['notes'] || ($_smarty_tpl->tpl_vars['bosnia']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['sale'] > 0)) {?>
<div class="mod_bottle_info_text_notes">
<?php if ($_smarty_tpl->tpl_vars['bosnia']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['new'] > 0) {?> <span class="bld">NEW!</span> <?php }
echo $_smarty_tpl->tpl_vars['bosnia']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['truncated_notes'];?>
 
<a href="<?php echo $_smarty_tpl->tpl_vars['bosnia']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['url'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['bosnia']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['title'];?>
"><span class="nowrap">more &gt;</span></a>
</div><!-- /.mod_bottle_info_text_notes -->
<?php }?>
<div class="mod_bottle_info_text_buy">
<?php if ($_smarty_tpl->tpl_vars['bosnia']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['sale'] > 0) {
if ($_smarty_tpl->tpl_vars['bosnia']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['sale'] < 10) {?><span class="rdd" style="padding-left:0.1em;">$<?php echo $_smarty_tpl->tpl_vars['bosnia']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['sale'];?>
</span> <?php } else { ?><span class="rdd">$<?php echo $_smarty_tpl->tpl_vars['bosnia']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['sale'];?>
</span> <?php }?> <?php } elseif ($_smarty_tpl->tpl_vars['bosnia']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['price'] > 0) {?>$<?php echo $_smarty_tpl->tpl_vars['bosnia']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['price'];?>
 <?php }?>
<button class="btn btn-xs btn-primary" type="submit" title="Add to Cart">Add to Cart</button>  <?php if ((isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['last']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['last'] : null) && ($_smarty_tpl->tpl_vars['search_criteria']->value == "all")) {?> <a href="/wines/bosnia_herzegovina/" title="More Wines from Bosnia Herzegovina"><span class="right_arrow fa-2x"><i class="fa fa-chevron-right" fa-5x"></i></span></a><?php }?>
</div><!-- /.mod_bottle_info_text_buy -->
</div><!-- /.mod_bottle_info_text -->
</div><!-- /.mod_bottle_info -->
</form>
<?php
}
}
if ($__section_bit_8_saved) {
$_smarty_tpl->tpl_vars['__smarty_section_bit'] = $__section_bit_8_saved;
}
?>
<div class="clean"></div>
<?php }?>


<?php if ($_smarty_tpl->tpl_vars['wines']->value) {
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['wine_countries']->value, 'country_name', false, 'country_id');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['country_id']->value => $_smarty_tpl->tpl_vars['country_name']->value) {
?>
<h2 title="<?php echo $_smarty_tpl->tpl_vars['country_name']->value;?>
">
<?php if (!$_smarty_tpl->tpl_vars['search_by_country']->value) {
if ($_smarty_tpl->tpl_vars['other_wines']->value && $_smarty_tpl->tpl_vars['wines']->value[0]['winery'] == "Specials") {?>Gift Sets &mdash; <?php }
}?>
<a href="/wines/<?php echo strtolower($_smarty_tpl->tpl_vars['country_name']->value);?>
/" title="Wines from <?php echo $_smarty_tpl->tpl_vars['country_name']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['country_name']->value;?>
</a></h2>
<?php
$__section_bit_9_saved = isset($_smarty_tpl->tpl_vars['__smarty_section_bit']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit'] : false;
$__section_bit_9_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['wines']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_bit_9_total = $__section_bit_9_loop;
$_smarty_tpl->tpl_vars['__smarty_section_bit'] = new Smarty_Variable(array());
if ($__section_bit_9_total != 0) {
for ($__section_bit_9_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] = 0; $__section_bit_9_iteration <= $__section_bit_9_total; $__section_bit_9_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']++){
$_smarty_tpl->tpl_vars['__smarty_section_bit']->value['last'] = ($__section_bit_9_iteration == $__section_bit_9_total);
if ($_smarty_tpl->tpl_vars['wines']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['country_id'] == $_smarty_tpl->tpl_vars['country_id']->value && $_smarty_tpl->tpl_vars['wines']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['winery'] != "Specials") {?>
<form method="post" action="/add_to_cart/">
<input type="hidden" name="vint_id" value="<?php echo $_smarty_tpl->tpl_vars['wines']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['vint_id'];?>
" />
<input type="hidden" name="item_type" value="<?php echo $_smarty_tpl->tpl_vars['wines']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['item_type'];?>
" />
<input type="hidden" name="product_id" value="<?php echo $_smarty_tpl->tpl_vars['wines']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['product_id'];?>
" />
<input type="hidden" name="year" value="<?php echo $_smarty_tpl->tpl_vars['wines']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['year'];?>
" />
<input type="hidden" name="size" value="<?php echo $_smarty_tpl->tpl_vars['wines']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['size'];?>
" />
<input type="hidden" name="winery_id" value="<?php echo $_smarty_tpl->tpl_vars['wines']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['winery_id'];?>
" />
<input type="hidden" name="winery_name" value="<?php echo $_smarty_tpl->tpl_vars['wines']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['winery'];?>
" />
<input type="hidden" name="appellation" value="<?php echo $_smarty_tpl->tpl_vars['wines']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['appellation'];?>
" />
<input type="hidden" name="vint_name" value="<?php echo $_smarty_tpl->tpl_vars['wines']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['vintage'];?>
" />
<input type="hidden" name="base_price" value="<?php echo $_smarty_tpl->tpl_vars['wines']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['price'];?>
"  />
<input type="hidden" name="price" value="<?php if ($_smarty_tpl->tpl_vars['wines']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['sale'] > '0') {
echo $_smarty_tpl->tpl_vars['wines']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['sale'];
} else {
echo $_smarty_tpl->tpl_vars['wines']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['price'];
}?>" />
<input type="hidden" name="bottles" value="<?php echo $_smarty_tpl->tpl_vars['wines']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['bottles'];?>
" />
<input type="hidden" name="shipping" value="<?php echo $_smarty_tpl->tpl_vars['wines']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['shipping'];?>
" />
<input type="hidden" name="grup" value=<?php echo $_smarty_tpl->tpl_vars['wines']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['grup'];?>
 />
<input type="hidden" name="quantity" value="1" />

<div class="mod_bottle_info" id="<?php echo $_smarty_tpl->tpl_vars['wines']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['vint_id'];?>
">
<div class="mod_bottle_info_img">
<a href="<?php echo $_smarty_tpl->tpl_vars['wines']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['url'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['wines']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['title'];?>
">
<img src="<?php echo $_smarty_tpl->tpl_vars['wines']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['image_file'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['wines']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['title'];?>
" />
</a>
</div><!-- /.mod_bottle_info_img -->
<div class="mod_bottle_info_text">
<a href="<?php echo $_smarty_tpl->tpl_vars['wines']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['url'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['wines']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['title'];?>
">
<b><?php if ($_smarty_tpl->tpl_vars['wines']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['pretty_winery_name']) {
echo $_smarty_tpl->tpl_vars['wines']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['pretty_winery_name'];?>
<br><?php }
echo $_smarty_tpl->tpl_vars['wines']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['vintage'];?>

<?php if ($_smarty_tpl->tpl_vars['wines']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['pretty_year_size']) {?><br><?php echo $_smarty_tpl->tpl_vars['wines']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['pretty_year_size'];
}?></b>
</a>
<?php if ($_smarty_tpl->tpl_vars['wines']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['notes'] || ($_smarty_tpl->tpl_vars['wines']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['sale'] > 0)) {?>
<div class="mod_bottle_info_text_notes">
<?php if ($_smarty_tpl->tpl_vars['wines']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['new'] > 0) {?> <span class="bld">NEW!</span> <?php }
echo $_smarty_tpl->tpl_vars['wines']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['truncated_notes'];?>
 
<a href="<?php echo $_smarty_tpl->tpl_vars['wines']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['url'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['wines']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['title'];?>
"><span class="nowrap">more &gt;</span></a>
</div><!-- /.mod_bottle_info_text_notes -->
<?php }?>
<div class="mod_bottle_info_text_buy">
<?php if ($_smarty_tpl->tpl_vars['wines']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['sale'] > 0) {
if ($_smarty_tpl->tpl_vars['wines']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['sale'] < 10) {?><span class="rdd" style="padding-left:0.1em;">$<?php echo $_smarty_tpl->tpl_vars['wines']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['sale'];?>
</span> <?php } else { ?><span class="rdd">$<?php echo $_smarty_tpl->tpl_vars['wines']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['sale'];?>
</span> <?php }?> <?php } elseif ($_smarty_tpl->tpl_vars['wines']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['price'] > 0) {?>$<?php echo $_smarty_tpl->tpl_vars['wines']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['price'];?>
 <?php }?>
<button class="btn btn-xs btn-primary" type="submit" title="Add to Cart">Add to Cart</button> 
</div><!-- /.mod_bottle_info_text_buy -->
</div><!-- /.mod_bottle_info_text -->
</div><!-- /.mod_bottle_info -->

<?php $_smarty_tpl->_assignInScope('last_country', $_smarty_tpl->tpl_vars['wines']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['country']);
?>
</form>
<?php }
}
}
if ($__section_bit_9_saved) {
$_smarty_tpl->tpl_vars['__smarty_section_bit'] = $__section_bit_9_saved;
}
?>

<div class="clean"></div>
<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

<?php }?>

<?php if ($_smarty_tpl->tpl_vars['croatia']->value) {?>

<h2 title="Wines from Croatia"><a href="/wines/croatia/" title="Wines from Croatia">Croatia</a></h2>
<?php
$__section_bit_10_saved = isset($_smarty_tpl->tpl_vars['__smarty_section_bit']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit'] : false;
$__section_bit_10_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['croatia']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_bit_10_total = $__section_bit_10_loop;
$_smarty_tpl->tpl_vars['__smarty_section_bit'] = new Smarty_Variable(array());
if ($__section_bit_10_total != 0) {
for ($__section_bit_10_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] = 0; $__section_bit_10_iteration <= $__section_bit_10_total; $__section_bit_10_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']++){
$_smarty_tpl->tpl_vars['__smarty_section_bit']->value['last'] = ($__section_bit_10_iteration == $__section_bit_10_total);
?>
<form method="post" action="/add_to_cart/">
<input type="hidden" name="vint_id" value="<?php echo $_smarty_tpl->tpl_vars['croatia']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['vint_id'];?>
" />
<input type="hidden" name="item_type" value="<?php echo $_smarty_tpl->tpl_vars['croatia']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['item_type'];?>
" />
<input type="hidden" name="product_id" value="<?php echo $_smarty_tpl->tpl_vars['croatia']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['product_id'];?>
" />
<input type="hidden" name="year" value="<?php echo $_smarty_tpl->tpl_vars['croatia']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['year'];?>
" />
<input type="hidden" name="size" value="<?php echo $_smarty_tpl->tpl_vars['croatia']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['size'];?>
" />
<input type="hidden" name="winery_id" value="<?php echo $_smarty_tpl->tpl_vars['croatia']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['winery_id'];?>
" />
<input type="hidden" name="winery_name" value="<?php echo $_smarty_tpl->tpl_vars['croatia']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['winery'];?>
" />
<input type="hidden" name="appellation" value="<?php echo $_smarty_tpl->tpl_vars['croatia']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['appellation'];?>
" />
<input type="hidden" name="vint_name" value="<?php echo $_smarty_tpl->tpl_vars['croatia']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['vintage'];?>
" />
<input type="hidden" name="base_price" value="<?php echo $_smarty_tpl->tpl_vars['croatia']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['price'];?>
"  />
<input type="hidden" name="price" value="<?php if ($_smarty_tpl->tpl_vars['croatia']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['sale'] > '0') {
echo $_smarty_tpl->tpl_vars['croatia']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['sale'];
} else {
echo $_smarty_tpl->tpl_vars['croatia']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['price'];
}?>" />
<input type="hidden" name="bottles" value="<?php echo $_smarty_tpl->tpl_vars['croatia']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['bottles'];?>
" />
<input type="hidden" name="shipping" value="<?php echo $_smarty_tpl->tpl_vars['croatia']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['shipping'];?>
" />
<input type="hidden" name="grup" value=<?php echo $_smarty_tpl->tpl_vars['croatia']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['grup'];?>
 />
<input type="hidden" name="quantity" value="1" />

<div class="mod_bottle_info" id="<?php echo $_smarty_tpl->tpl_vars['croatia']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['vint_id'];?>
">
<div class="mod_bottle_info_img">
<a href="<?php echo $_smarty_tpl->tpl_vars['croatia']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['url'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['croatia']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['title'];?>
">
<img src="<?php echo $_smarty_tpl->tpl_vars['croatia']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['image_file'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['croatia']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['title'];?>
" />
</a>
</div><!-- /.mod_bottle_info_img -->
<div class="mod_bottle_info_text">
<a href="<?php echo $_smarty_tpl->tpl_vars['croatia']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['url'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['croatia']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['title'];?>
">
<b><?php if ($_smarty_tpl->tpl_vars['croatia']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['pretty_winery_name']) {
echo $_smarty_tpl->tpl_vars['croatia']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['pretty_winery_name'];?>
<br><?php }
echo $_smarty_tpl->tpl_vars['croatia']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['vintage'];?>

<?php if ($_smarty_tpl->tpl_vars['croatia']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['pretty_year_size']) {?><br><?php echo $_smarty_tpl->tpl_vars['croatia']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['pretty_year_size'];
}?></b>
</a>
<?php if ($_smarty_tpl->tpl_vars['croatia']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['notes'] || ($_smarty_tpl->tpl_vars['croatia']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['sale'] > 0)) {?>
<div class="mod_bottle_info_text_notes">
<?php if ($_smarty_tpl->tpl_vars['croatia']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['new'] > 0) {?> <span class="bld">NEW!</span> <?php }
echo $_smarty_tpl->tpl_vars['croatia']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['truncated_notes'];?>
 
<a href="<?php echo $_smarty_tpl->tpl_vars['croatia']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['url'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['croatia']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['title'];?>
"><span class="nowrap">more &gt;</span></a>
</div><!-- /.mod_bottle_info_text_notes -->
<?php }?>
<div class="mod_bottle_info_text_buy">
<?php if ($_smarty_tpl->tpl_vars['croatia']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['sale'] > 0) {
if ($_smarty_tpl->tpl_vars['croatia']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['sale'] < 10) {?><span class="rdd" style="padding-left:0.1em;">$<?php echo $_smarty_tpl->tpl_vars['croatia']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['sale'];?>
</span> <?php } else { ?><span class="rdd">$<?php echo $_smarty_tpl->tpl_vars['croatia']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['sale'];?>
</span> <?php }?> <?php } elseif ($_smarty_tpl->tpl_vars['croatia']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['price'] > 0) {?>$<?php echo $_smarty_tpl->tpl_vars['croatia']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['price'];?>
 <?php }?>
<button class="btn btn-xs btn-primary" type="submit" title="Add to Cart">Add to Cart</button>  <?php if ((isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['last']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['last'] : null) && ($_smarty_tpl->tpl_vars['search_criteria']->value == "all")) {?> <a href="/wines/croatia/" title="More Wines from Croatia"><span class="right_arrow fa-2x"><i class="fa fa-chevron-right" fa-5x"></i></span></a><?php }?>
</div><!-- /.mod_bottle_info_text_buy -->
</div><!-- /.mod_bottle_info_text -->
</div><!-- /.mod_bottle_info -->
</form>
<?php
}
}
if ($__section_bit_10_saved) {
$_smarty_tpl->tpl_vars['__smarty_section_bit'] = $__section_bit_10_saved;
}
?>
<div class="clean"></div>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['georgia']->value) {?>

<h2 title="Wines from Georgia"><a href="/wines/georgia/" title="Wines from Georgia">Georgia</a></h2>
<?php
$__section_bit_11_saved = isset($_smarty_tpl->tpl_vars['__smarty_section_bit']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit'] : false;
$__section_bit_11_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['georgia']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_bit_11_total = $__section_bit_11_loop;
$_smarty_tpl->tpl_vars['__smarty_section_bit'] = new Smarty_Variable(array());
if ($__section_bit_11_total != 0) {
for ($__section_bit_11_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] = 0; $__section_bit_11_iteration <= $__section_bit_11_total; $__section_bit_11_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']++){
$_smarty_tpl->tpl_vars['__smarty_section_bit']->value['last'] = ($__section_bit_11_iteration == $__section_bit_11_total);
?>
<form method="post" action="/add_to_cart/">
<input type="hidden" name="vint_id" value="<?php echo $_smarty_tpl->tpl_vars['georgia']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['vint_id'];?>
" />
<input type="hidden" name="item_type" value="<?php echo $_smarty_tpl->tpl_vars['georgia']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['item_type'];?>
" />
<input type="hidden" name="product_id" value="<?php echo $_smarty_tpl->tpl_vars['georgia']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['product_id'];?>
" />
<input type="hidden" name="year" value="<?php echo $_smarty_tpl->tpl_vars['georgia']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['year'];?>
" />
<input type="hidden" name="size" value="<?php echo $_smarty_tpl->tpl_vars['georgia']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['size'];?>
" />
<input type="hidden" name="winery_id" value="<?php echo $_smarty_tpl->tpl_vars['georgia']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['winery_id'];?>
" />
<input type="hidden" name="winery_name" value="<?php echo $_smarty_tpl->tpl_vars['georgia']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['winery'];?>
" />
<input type="hidden" name="appellation" value="<?php echo $_smarty_tpl->tpl_vars['georgia']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['appellation'];?>
" />
<input type="hidden" name="vint_name" value="<?php echo $_smarty_tpl->tpl_vars['georgia']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['vintage'];?>
" />
<input type="hidden" name="base_price" value="<?php echo $_smarty_tpl->tpl_vars['georgia']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['price'];?>
"  />
<input type="hidden" name="price" value="<?php if ($_smarty_tpl->tpl_vars['georgia']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['sale'] > '0') {
echo $_smarty_tpl->tpl_vars['georgia']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['sale'];
} else {
echo $_smarty_tpl->tpl_vars['georgia']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['price'];
}?>" />
<input type="hidden" name="bottles" value="<?php echo $_smarty_tpl->tpl_vars['georgia']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['bottles'];?>
" />
<input type="hidden" name="shipping" value="<?php echo $_smarty_tpl->tpl_vars['georgia']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['shipping'];?>
" />
<input type="hidden" name="grup" value=<?php echo $_smarty_tpl->tpl_vars['georgia']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['grup'];?>
 />
<input type="hidden" name="quantity" value="1" />

<div class="mod_bottle_info" id="<?php echo $_smarty_tpl->tpl_vars['georgia']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['vint_id'];?>
">
<div class="mod_bottle_info_img">
<a href="<?php echo $_smarty_tpl->tpl_vars['georgia']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['url'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['georgia']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['title'];?>
">
<img src="<?php echo $_smarty_tpl->tpl_vars['georgia']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['image_file'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['georgia']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['title'];?>
" />
</a>
</div><!-- /.mod_bottle_info_img -->
<div class="mod_bottle_info_text">
<a href="<?php echo $_smarty_tpl->tpl_vars['georgia']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['url'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['georgia']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['title'];?>
">
<b><?php if ($_smarty_tpl->tpl_vars['georgia']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['pretty_winery_name']) {
echo $_smarty_tpl->tpl_vars['georgia']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['pretty_winery_name'];?>
<br><?php }
echo $_smarty_tpl->tpl_vars['georgia']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['vintage'];?>

<?php if ($_smarty_tpl->tpl_vars['georgia']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['pretty_year_size']) {?><br><?php echo $_smarty_tpl->tpl_vars['georgia']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['pretty_year_size'];
}?></b>
</a>
<?php if ($_smarty_tpl->tpl_vars['georgia']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['notes'] || ($_smarty_tpl->tpl_vars['georgia']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['sale'] > 0)) {?>
<div class="mod_bottle_info_text_notes">
<?php if ($_smarty_tpl->tpl_vars['georgia']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['new'] > 0) {?> <span class="bld">NEW!</span> <?php }
echo $_smarty_tpl->tpl_vars['georgia']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['truncated_notes'];?>
 
<a href="<?php echo $_smarty_tpl->tpl_vars['georgia']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['url'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['georgia']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['title'];?>
"><span class="nowrap">more &gt;</span></a>
</div><!-- /.mod_bottle_info_text_notes -->
<?php }?>
<div class="mod_bottle_info_text_buy">
<?php if ($_smarty_tpl->tpl_vars['georgia']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['sale'] > 0) {
if ($_smarty_tpl->tpl_vars['georgia']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['sale'] < 10) {?><span class="rdd" style="padding-left:0.1em;">$<?php echo $_smarty_tpl->tpl_vars['georgia']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['sale'];?>
</span> <?php } else { ?><span class="rdd">$<?php echo $_smarty_tpl->tpl_vars['georgia']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['sale'];?>
</span> <?php }?> <?php } elseif ($_smarty_tpl->tpl_vars['georgia']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['price'] > 0) {?>$<?php echo $_smarty_tpl->tpl_vars['georgia']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['price'];?>
 <?php }?>
<button class="btn btn-xs btn-primary" type="submit" title="Add to Cart">Add to Cart</button>  <?php if ((isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['last']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['last'] : null) && ($_smarty_tpl->tpl_vars['search_criteria']->value == "all")) {?> <a href="/wines/georgia/" title="More Wines from Georgia"><span class="right_arrow fa-2x"><i class="fa fa-chevron-right" fa-5x"></i></span></a><?php }?>
</div><!-- /.mod_bottle_info_text_buy -->
</div><!-- /.mod_bottle_info_text -->
</div><!-- /.mod_bottle_info -->
</form>
<?php
}
}
if ($__section_bit_11_saved) {
$_smarty_tpl->tpl_vars['__smarty_section_bit'] = $__section_bit_11_saved;
}
?>
<div class="clean"></div>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['hungary']->value) {?>

<h2 title="Wines from Hungary"><a href="/wines/hungary/" title="Wines from Hungary">Hungary</a></h2>
<?php
$__section_bit_12_saved = isset($_smarty_tpl->tpl_vars['__smarty_section_bit']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit'] : false;
$__section_bit_12_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['hungary']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_bit_12_total = $__section_bit_12_loop;
$_smarty_tpl->tpl_vars['__smarty_section_bit'] = new Smarty_Variable(array());
if ($__section_bit_12_total != 0) {
for ($__section_bit_12_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] = 0; $__section_bit_12_iteration <= $__section_bit_12_total; $__section_bit_12_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']++){
$_smarty_tpl->tpl_vars['__smarty_section_bit']->value['last'] = ($__section_bit_12_iteration == $__section_bit_12_total);
?>
<form method="post" action="/add_to_cart/">
<input type="hidden" name="vint_id" value="<?php echo $_smarty_tpl->tpl_vars['hungary']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['vint_id'];?>
" />
<input type="hidden" name="item_type" value="<?php echo $_smarty_tpl->tpl_vars['hungary']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['item_type'];?>
" />
<input type="hidden" name="product_id" value="<?php echo $_smarty_tpl->tpl_vars['hungary']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['product_id'];?>
" />
<input type="hidden" name="year" value="<?php echo $_smarty_tpl->tpl_vars['hungary']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['year'];?>
" />
<input type="hidden" name="size" value="<?php echo $_smarty_tpl->tpl_vars['hungary']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['size'];?>
" />
<input type="hidden" name="winery_id" value="<?php echo $_smarty_tpl->tpl_vars['hungary']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['winery_id'];?>
" />
<input type="hidden" name="winery_name" value="<?php echo $_smarty_tpl->tpl_vars['hungary']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['winery'];?>
" />
<input type="hidden" name="appellation" value="<?php echo $_smarty_tpl->tpl_vars['hungary']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['appellation'];?>
" />
<input type="hidden" name="vint_name" value="<?php echo $_smarty_tpl->tpl_vars['hungary']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['vintage'];?>
" />
<input type="hidden" name="base_price" value="<?php echo $_smarty_tpl->tpl_vars['hungary']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['price'];?>
"  />
<input type="hidden" name="price" value="<?php if ($_smarty_tpl->tpl_vars['hungary']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['sale'] > '0') {
echo $_smarty_tpl->tpl_vars['hungary']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['sale'];
} else {
echo $_smarty_tpl->tpl_vars['hungary']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['price'];
}?>" />
<input type="hidden" name="bottles" value="<?php echo $_smarty_tpl->tpl_vars['hungary']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['bottles'];?>
" />
<input type="hidden" name="shipping" value="<?php echo $_smarty_tpl->tpl_vars['hungary']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['shipping'];?>
" />
<input type="hidden" name="grup" value=<?php echo $_smarty_tpl->tpl_vars['hungary']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['grup'];?>
 />
<input type="hidden" name="quantity" value="1" />

<div class="mod_bottle_info" id="<?php echo $_smarty_tpl->tpl_vars['hungary']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['vint_id'];?>
">
<div class="mod_bottle_info_img">
<a href="<?php echo $_smarty_tpl->tpl_vars['hungary']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['url'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['hungary']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['title'];?>
">
<img src="<?php echo $_smarty_tpl->tpl_vars['hungary']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['image_file'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['hungary']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['title'];?>
" />
</a>
</div><!-- /.mod_bottle_info_img -->
<div class="mod_bottle_info_text">
<a href="<?php echo $_smarty_tpl->tpl_vars['hungary']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['url'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['hungary']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['title'];?>
">
<b><?php if ($_smarty_tpl->tpl_vars['hungary']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['pretty_winery_name']) {
echo $_smarty_tpl->tpl_vars['hungary']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['pretty_winery_name'];?>
<br><?php }
echo $_smarty_tpl->tpl_vars['hungary']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['vintage'];?>

<?php if ($_smarty_tpl->tpl_vars['hungary']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['pretty_year_size']) {?><br><?php echo $_smarty_tpl->tpl_vars['hungary']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['pretty_year_size'];
}?></b>
</a>
<?php if ($_smarty_tpl->tpl_vars['hungary']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['notes'] || ($_smarty_tpl->tpl_vars['hungary']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['sale'] > 0)) {?>
<div class="mod_bottle_info_text_notes">
<?php if ($_smarty_tpl->tpl_vars['hungary']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['new'] > 0) {?> <span class="bld">NEW!</span> <?php }
echo $_smarty_tpl->tpl_vars['hungary']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['truncated_notes'];?>
 
<a href="<?php echo $_smarty_tpl->tpl_vars['hungary']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['url'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['hungary']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['title'];?>
"><span class="nowrap">more &gt;</span></a>
</div><!-- /.mod_bottle_info_text_notes -->
<?php }?>
<div class="mod_bottle_info_text_buy">
<?php if ($_smarty_tpl->tpl_vars['hungary']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['sale'] > 0) {
if ($_smarty_tpl->tpl_vars['hungary']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['sale'] < 10) {?><span class="rdd" style="padding-left:0.1em;">$<?php echo $_smarty_tpl->tpl_vars['hungary']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['sale'];?>
</span> <?php } else { ?><span class="rdd">$<?php echo $_smarty_tpl->tpl_vars['hungary']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['sale'];?>
</span> <?php }?> <?php } elseif ($_smarty_tpl->tpl_vars['hungary']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['price'] > 0) {?>$<?php echo $_smarty_tpl->tpl_vars['hungary']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['price'];?>
 <?php }?>
<button class="btn btn-xs btn-primary" type="submit" title="Add to Cart">Add to Cart</button>  <?php if ((isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['last']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['last'] : null) && ($_smarty_tpl->tpl_vars['search_criteria']->value == "all")) {?> <a href="/wines/hungary/" title="More Wines from Hungary"><span class="right_arrow fa-2x"><i class="fa fa-chevron-right" fa-5x"></i></span></a><?php }?>
</div><!-- /.mod_bottle_info_text_buy -->
</div><!-- /.mod_bottle_info_text -->
</div><!-- /.mod_bottle_info -->
</form>
<?php
}
}
if ($__section_bit_12_saved) {
$_smarty_tpl->tpl_vars['__smarty_section_bit'] = $__section_bit_12_saved;
}
?>
<div class="clean"></div>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['serbia']->value) {?>

<h2 title="Wines from Serbia"><a href="/wines/serbia/" title="Wines from Serbia">Serbia</a></h2>
<?php
$__section_bit_13_saved = isset($_smarty_tpl->tpl_vars['__smarty_section_bit']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit'] : false;
$__section_bit_13_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['serbia']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_bit_13_total = $__section_bit_13_loop;
$_smarty_tpl->tpl_vars['__smarty_section_bit'] = new Smarty_Variable(array());
if ($__section_bit_13_total != 0) {
for ($__section_bit_13_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] = 0; $__section_bit_13_iteration <= $__section_bit_13_total; $__section_bit_13_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']++){
$_smarty_tpl->tpl_vars['__smarty_section_bit']->value['last'] = ($__section_bit_13_iteration == $__section_bit_13_total);
?>
<form method="post" action="/add_to_cart/">
<input type="hidden" name="vint_id" value="<?php echo $_smarty_tpl->tpl_vars['serbia']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['vint_id'];?>
" />
<input type="hidden" name="item_type" value="<?php echo $_smarty_tpl->tpl_vars['serbia']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['item_type'];?>
" />
<input type="hidden" name="product_id" value="<?php echo $_smarty_tpl->tpl_vars['serbia']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['product_id'];?>
" />
<input type="hidden" name="year" value="<?php echo $_smarty_tpl->tpl_vars['serbia']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['year'];?>
" />
<input type="hidden" name="size" value="<?php echo $_smarty_tpl->tpl_vars['serbia']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['size'];?>
" />
<input type="hidden" name="winery_id" value="<?php echo $_smarty_tpl->tpl_vars['serbia']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['winery_id'];?>
" />
<input type="hidden" name="winery_name" value="<?php echo $_smarty_tpl->tpl_vars['serbia']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['winery'];?>
" />
<input type="hidden" name="appellation" value="<?php echo $_smarty_tpl->tpl_vars['serbia']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['appellation'];?>
" />
<input type="hidden" name="vint_name" value="<?php echo $_smarty_tpl->tpl_vars['serbia']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['vintage'];?>
" />
<input type="hidden" name="base_price" value="<?php echo $_smarty_tpl->tpl_vars['serbia']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['price'];?>
"  />
<input type="hidden" name="price" value="<?php if ($_smarty_tpl->tpl_vars['serbia']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['sale'] > '0') {
echo $_smarty_tpl->tpl_vars['serbia']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['sale'];
} else {
echo $_smarty_tpl->tpl_vars['serbia']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['price'];
}?>" />
<input type="hidden" name="bottles" value="<?php echo $_smarty_tpl->tpl_vars['serbia']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['bottles'];?>
" />
<input type="hidden" name="shipping" value="<?php echo $_smarty_tpl->tpl_vars['serbia']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['shipping'];?>
" />
<input type="hidden" name="grup" value=<?php echo $_smarty_tpl->tpl_vars['serbia']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['grup'];?>
 />
<input type="hidden" name="quantity" value="1" />

<div class="mod_bottle_info" id="<?php echo $_smarty_tpl->tpl_vars['serbia']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['vint_id'];?>
">
<div class="mod_bottle_info_img">
<a href="<?php echo $_smarty_tpl->tpl_vars['serbia']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['url'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['serbia']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['title'];?>
">
<img src="<?php echo $_smarty_tpl->tpl_vars['serbia']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['image_file'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['serbia']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['title'];?>
" />
</a>
</div><!-- /.mod_bottle_info_img -->
<div class="mod_bottle_info_text">
<a href="<?php echo $_smarty_tpl->tpl_vars['serbia']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['url'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['serbia']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['title'];?>
">
<b><?php if ($_smarty_tpl->tpl_vars['serbia']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['pretty_winery_name']) {
echo $_smarty_tpl->tpl_vars['serbia']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['pretty_winery_name'];?>
<br><?php }
echo $_smarty_tpl->tpl_vars['serbia']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['vintage'];?>

<?php if ($_smarty_tpl->tpl_vars['serbia']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['pretty_year_size']) {?><br><?php echo $_smarty_tpl->tpl_vars['serbia']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['pretty_year_size'];
}?></b>
</a>
<?php if ($_smarty_tpl->tpl_vars['serbia']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['notes'] || ($_smarty_tpl->tpl_vars['serbia']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['sale'] > 0)) {?>
<div class="mod_bottle_info_text_notes">
<?php if ($_smarty_tpl->tpl_vars['serbia']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['new'] > 0) {?> <span class="bld">NEW!</span> <?php }
echo $_smarty_tpl->tpl_vars['serbia']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['truncated_notes'];?>
 
<a href="<?php echo $_smarty_tpl->tpl_vars['serbia']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['url'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['serbia']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['title'];?>
"><span class="nowrap">more &gt;</span></a>
</div><!-- /.mod_bottle_info_text_notes -->
<?php }?>
<div class="mod_bottle_info_text_buy">
<?php if ($_smarty_tpl->tpl_vars['serbia']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['sale'] > 0) {
if ($_smarty_tpl->tpl_vars['serbia']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['sale'] < 10) {?><span class="rdd" style="padding-left:0.1em;">$<?php echo $_smarty_tpl->tpl_vars['serbia']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['sale'];?>
</span> <?php } else { ?><span class="rdd">$<?php echo $_smarty_tpl->tpl_vars['serbia']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['sale'];?>
</span> <?php }?> <?php } elseif ($_smarty_tpl->tpl_vars['serbia']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['price'] > 0) {?>$<?php echo $_smarty_tpl->tpl_vars['serbia']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['price'];?>
 <?php }?>
<button class="btn btn-xs btn-primary" type="submit" title="Add to Cart">Add to Cart</button>  <?php if ((isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['last']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['last'] : null) && ($_smarty_tpl->tpl_vars['search_criteria']->value == "all")) {?> <a href="/wines/serbia/" title="More Wines from Serbia"><span class="right_arrow fa-2x"><i class="fa fa-chevron-right" fa-5x"></i></span></a><?php }?>
</div><!-- /.mod_bottle_info_text_buy -->
</div><!-- /.mod_bottle_info_text -->
</div><!-- /.mod_bottle_info -->
</form>
<?php
}
}
if ($__section_bit_13_saved) {
$_smarty_tpl->tpl_vars['__smarty_section_bit'] = $__section_bit_13_saved;
}
?>
<div class="clean"></div>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['slovenia']->value) {?>

<h2 title="Wines from Slovenia"><a href="/wines/slovenia/" title="Wines from Slovenia">Slovenia</a></h2>
<?php
$__section_bit_14_saved = isset($_smarty_tpl->tpl_vars['__smarty_section_bit']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit'] : false;
$__section_bit_14_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['slovenia']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_bit_14_total = $__section_bit_14_loop;
$_smarty_tpl->tpl_vars['__smarty_section_bit'] = new Smarty_Variable(array());
if ($__section_bit_14_total != 0) {
for ($__section_bit_14_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] = 0; $__section_bit_14_iteration <= $__section_bit_14_total; $__section_bit_14_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']++){
$_smarty_tpl->tpl_vars['__smarty_section_bit']->value['last'] = ($__section_bit_14_iteration == $__section_bit_14_total);
?>
<form method="post" action="/add_to_cart/">
<input type="hidden" name="vint_id" value="<?php echo $_smarty_tpl->tpl_vars['slovenia']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['vint_id'];?>
" />
<input type="hidden" name="item_type" value="<?php echo $_smarty_tpl->tpl_vars['slovenia']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['item_type'];?>
" />
<input type="hidden" name="product_id" value="<?php echo $_smarty_tpl->tpl_vars['slovenia']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['product_id'];?>
" />
<input type="hidden" name="year" value="<?php echo $_smarty_tpl->tpl_vars['slovenia']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['year'];?>
" />
<input type="hidden" name="size" value="<?php echo $_smarty_tpl->tpl_vars['slovenia']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['size'];?>
" />
<input type="hidden" name="winery_id" value="<?php echo $_smarty_tpl->tpl_vars['slovenia']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['winery_id'];?>
" />
<input type="hidden" name="winery_name" value="<?php echo $_smarty_tpl->tpl_vars['slovenia']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['winery'];?>
" />
<input type="hidden" name="appellation" value="<?php echo $_smarty_tpl->tpl_vars['slovenia']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['appellation'];?>
" />
<input type="hidden" name="vint_name" value="<?php echo $_smarty_tpl->tpl_vars['slovenia']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['vintage'];?>
" />
<input type="hidden" name="base_price" value="<?php echo $_smarty_tpl->tpl_vars['slovenia']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['price'];?>
"  />
<input type="hidden" name="price" value="<?php if ($_smarty_tpl->tpl_vars['slovenia']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['sale'] > '0') {
echo $_smarty_tpl->tpl_vars['slovenia']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['sale'];
} else {
echo $_smarty_tpl->tpl_vars['slovenia']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['price'];
}?>" />
<input type="hidden" name="bottles" value="<?php echo $_smarty_tpl->tpl_vars['slovenia']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['bottles'];?>
" />
<input type="hidden" name="shipping" value="<?php echo $_smarty_tpl->tpl_vars['slovenia']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['shipping'];?>
" />
<input type="hidden" name="grup" value=<?php echo $_smarty_tpl->tpl_vars['slovenia']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['grup'];?>
 />
<input type="hidden" name="quantity" value="1" />

<div class="mod_bottle_info" id="<?php echo $_smarty_tpl->tpl_vars['slovenia']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['vint_id'];?>
">
<div class="mod_bottle_info_img">
<a href="<?php echo $_smarty_tpl->tpl_vars['slovenia']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['url'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['slovenia']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['title'];?>
">
<img src="<?php echo $_smarty_tpl->tpl_vars['slovenia']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['image_file'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['slovenia']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['title'];?>
" />
</a>
</div><!-- /.mod_bottle_info_img -->
<div class="mod_bottle_info_text">
<a href="<?php echo $_smarty_tpl->tpl_vars['slovenia']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['url'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['slovenia']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['title'];?>
">
<b><?php if ($_smarty_tpl->tpl_vars['slovenia']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['pretty_winery_name']) {
echo $_smarty_tpl->tpl_vars['slovenia']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['pretty_winery_name'];?>
<br><?php }
echo $_smarty_tpl->tpl_vars['slovenia']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['vintage'];?>

<?php if ($_smarty_tpl->tpl_vars['slovenia']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['pretty_year_size']) {?><br><?php echo $_smarty_tpl->tpl_vars['slovenia']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['pretty_year_size'];
}?></b>
</a>
<?php if ($_smarty_tpl->tpl_vars['slovenia']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['notes'] || ($_smarty_tpl->tpl_vars['slovenia']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['sale'] > 0)) {?>
<div class="mod_bottle_info_text_notes">
<?php if ($_smarty_tpl->tpl_vars['slovenia']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['new'] > 0) {?> <span class="bld">NEW!</span> <?php }
echo $_smarty_tpl->tpl_vars['slovenia']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['truncated_notes'];?>
 
<a href="<?php echo $_smarty_tpl->tpl_vars['slovenia']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['url'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['slovenia']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['title'];?>
"><span class="nowrap">more &gt;</span></a>
</div><!-- /.mod_bottle_info_text_notes -->
<?php }?>
<div class="mod_bottle_info_text_buy">
<?php if ($_smarty_tpl->tpl_vars['slovenia']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['sale'] > 0) {
if ($_smarty_tpl->tpl_vars['slovenia']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['sale'] < 10) {?><span class="rdd" style="padding-left:0.1em;">$<?php echo $_smarty_tpl->tpl_vars['slovenia']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['sale'];?>
</span> <?php } else { ?><span class="rdd">$<?php echo $_smarty_tpl->tpl_vars['slovenia']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['sale'];?>
</span> <?php }?> <?php } elseif ($_smarty_tpl->tpl_vars['slovenia']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['price'] > 0) {?>$<?php echo $_smarty_tpl->tpl_vars['slovenia']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['price'];?>
 <?php }?>
<button class="btn btn-xs btn-primary" type="submit" title="Add to Cart">Add to Cart</button>  <?php if ((isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['last']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['last'] : null) && ($_smarty_tpl->tpl_vars['search_criteria']->value == "all")) {?> <a href="/wines/slovenia/" title="More Wines from Slovenia"><span class="right_arrow fa-2x"><i class="fa fa-chevron-right" fa-5x"></i></span></a><?php }?>
</div><!-- /.mod_bottle_info_text_buy -->
</div><!-- /.mod_bottle_info_text -->
</div><!-- /.mod_bottle_info -->
</form>
<?php
}
}
if ($__section_bit_14_saved) {
$_smarty_tpl->tpl_vars['__smarty_section_bit'] = $__section_bit_14_saved;
}
?>
<div class="clean"></div>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['turkey']->value) {?>

<h2 title="Wines from Turkey"><a href="/wines/turkey/" title="Wines from Turkey">Turkey</a></h2>
<?php
$__section_bit_15_saved = isset($_smarty_tpl->tpl_vars['__smarty_section_bit']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit'] : false;
$__section_bit_15_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['turkey']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_bit_15_total = $__section_bit_15_loop;
$_smarty_tpl->tpl_vars['__smarty_section_bit'] = new Smarty_Variable(array());
if ($__section_bit_15_total != 0) {
for ($__section_bit_15_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] = 0; $__section_bit_15_iteration <= $__section_bit_15_total; $__section_bit_15_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']++){
$_smarty_tpl->tpl_vars['__smarty_section_bit']->value['last'] = ($__section_bit_15_iteration == $__section_bit_15_total);
?>
<form method="post" action="/add_to_cart/">
<input type="hidden" name="vint_id" value="<?php echo $_smarty_tpl->tpl_vars['turkey']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['vint_id'];?>
" />
<input type="hidden" name="item_type" value="<?php echo $_smarty_tpl->tpl_vars['turkey']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['item_type'];?>
" />
<input type="hidden" name="product_id" value="<?php echo $_smarty_tpl->tpl_vars['turkey']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['product_id'];?>
" />
<input type="hidden" name="year" value="<?php echo $_smarty_tpl->tpl_vars['turkey']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['year'];?>
" />
<input type="hidden" name="size" value="<?php echo $_smarty_tpl->tpl_vars['turkey']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['size'];?>
" />
<input type="hidden" name="winery_id" value="<?php echo $_smarty_tpl->tpl_vars['turkey']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['winery_id'];?>
" />
<input type="hidden" name="winery_name" value="<?php echo $_smarty_tpl->tpl_vars['turkey']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['winery'];?>
" />
<input type="hidden" name="appellation" value="<?php echo $_smarty_tpl->tpl_vars['turkey']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['appellation'];?>
" />
<input type="hidden" name="vint_name" value="<?php echo $_smarty_tpl->tpl_vars['turkey']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['vintage'];?>
" />
<input type="hidden" name="base_price" value="<?php echo $_smarty_tpl->tpl_vars['turkey']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['price'];?>
"  />
<input type="hidden" name="price" value="<?php if ($_smarty_tpl->tpl_vars['turkey']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['sale'] > '0') {
echo $_smarty_tpl->tpl_vars['turkey']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['sale'];
} else {
echo $_smarty_tpl->tpl_vars['turkey']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['price'];
}?>" />
<input type="hidden" name="bottles" value="<?php echo $_smarty_tpl->tpl_vars['turkey']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['bottles'];?>
" />
<input type="hidden" name="shipping" value="<?php echo $_smarty_tpl->tpl_vars['turkey']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['shipping'];?>
" />
<input type="hidden" name="grup" value=<?php echo $_smarty_tpl->tpl_vars['turkey']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['grup'];?>
 />
<input type="hidden" name="quantity" value="1" />

<div class="mod_bottle_info" id="<?php echo $_smarty_tpl->tpl_vars['turkey']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['vint_id'];?>
">
<div class="mod_bottle_info_img">
<a href="<?php echo $_smarty_tpl->tpl_vars['turkey']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['url'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['turkey']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['title'];?>
">
<img src="<?php echo $_smarty_tpl->tpl_vars['turkey']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['image_file'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['turkey']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['title'];?>
" />
</a>
</div><!-- /.mod_bottle_info_img -->
<div class="mod_bottle_info_text">
<a href="<?php echo $_smarty_tpl->tpl_vars['turkey']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['url'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['turkey']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['title'];?>
">
<b><?php if ($_smarty_tpl->tpl_vars['turkey']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['pretty_winery_name']) {
echo $_smarty_tpl->tpl_vars['turkey']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['pretty_winery_name'];?>
<br><?php }
echo $_smarty_tpl->tpl_vars['turkey']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['vintage'];?>

<?php if ($_smarty_tpl->tpl_vars['turkey']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['pretty_year_size']) {?><br><?php echo $_smarty_tpl->tpl_vars['turkey']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['pretty_year_size'];
}?></b>
</a>
<?php if ($_smarty_tpl->tpl_vars['turkey']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['notes'] || ($_smarty_tpl->tpl_vars['turkey']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['sale'] > 0)) {?>
<div class="mod_bottle_info_text_notes">
<?php if ($_smarty_tpl->tpl_vars['turkey']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['new'] > 0) {?> <span class="bld">NEW!</span> <?php }
echo $_smarty_tpl->tpl_vars['turkey']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['truncated_notes'];?>
 
<a href="<?php echo $_smarty_tpl->tpl_vars['turkey']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['url'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['turkey']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['title'];?>
"><span class="nowrap">more &gt;</span></a>
</div><!-- /.mod_bottle_info_text_notes -->
<?php }?>
<div class="mod_bottle_info_text_buy">
<?php if ($_smarty_tpl->tpl_vars['turkey']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['sale'] > 0) {
if ($_smarty_tpl->tpl_vars['turkey']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['sale'] < 10) {?><span class="rdd" style="padding-left:0.1em;">$<?php echo $_smarty_tpl->tpl_vars['turkey']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['sale'];?>
</span> <?php } else { ?><span class="rdd">$<?php echo $_smarty_tpl->tpl_vars['turkey']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['sale'];?>
</span> <?php }?> <?php } elseif ($_smarty_tpl->tpl_vars['turkey']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['price'] > 0) {?>$<?php echo $_smarty_tpl->tpl_vars['turkey']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['price'];?>
 <?php }?>
<button class="btn btn-xs btn-primary" type="submit" title="Add to Cart">Add to Cart</button>  <?php if ((isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['last']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['last'] : null) && ($_smarty_tpl->tpl_vars['search_criteria']->value == "all")) {?> <a href="/wines/turkey/" title="More Wines from Turkey"><span class="right_arrow fa-2x"><i class="fa fa-chevron-right" fa-5x"></i></span></a><?php }?>
</div><!-- /.mod_bottle_info_text_buy -->
</div><!-- /.mod_bottle_info_text -->
</div><!-- /.mod_bottle_info -->
</form>
<?php
}
}
if ($__section_bit_15_saved) {
$_smarty_tpl->tpl_vars['__smarty_section_bit'] = $__section_bit_15_saved;
}
?>
<div class="clean"></div>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['other_wines']->value) {?>

<h2 title="Multi-Producer Samplers"><a href="/wines/samplers/" title="Multi producer samplers">Gift Sets &mdash; Multi Producers</a></h2>

<?php
$__section_bit_16_saved = isset($_smarty_tpl->tpl_vars['__smarty_section_bit']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit'] : false;
$__section_bit_16_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['other_wines']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_bit_16_total = $__section_bit_16_loop;
$_smarty_tpl->tpl_vars['__smarty_section_bit'] = new Smarty_Variable(array());
if ($__section_bit_16_total != 0) {
for ($__section_bit_16_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] = 0; $__section_bit_16_iteration <= $__section_bit_16_total; $__section_bit_16_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']++){
$_smarty_tpl->tpl_vars['__smarty_section_bit']->value['last'] = ($__section_bit_16_iteration == $__section_bit_16_total);
if ($_smarty_tpl->tpl_vars['other_wines']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['winery'] == "Specials") {?>
<form method="post" action="/add_to_cart/">
<input type="hidden" name="vint_id" value="<?php echo $_smarty_tpl->tpl_vars['other_wines']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['vint_id'];?>
" />
<input type="hidden" name="item_type" value="<?php echo $_smarty_tpl->tpl_vars['other_wines']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['item_type'];?>
" />
<input type="hidden" name="product_id" value="<?php echo $_smarty_tpl->tpl_vars['other_wines']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['product_id'];?>
" />
<input type="hidden" name="year" value="<?php echo $_smarty_tpl->tpl_vars['other_wines']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['year'];?>
" />
<input type="hidden" name="size" value="<?php echo $_smarty_tpl->tpl_vars['other_wines']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['size'];?>
" />
<input type="hidden" name="winery_id" value="<?php echo $_smarty_tpl->tpl_vars['other_wines']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['winery_id'];?>
" />
<input type="hidden" name="winery_name" value="<?php echo $_smarty_tpl->tpl_vars['other_wines']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['winery'];?>
" />
<input type="hidden" name="appellation" value="<?php echo $_smarty_tpl->tpl_vars['other_wines']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['appellation'];?>
" />
<input type="hidden" name="vint_name" value="<?php echo $_smarty_tpl->tpl_vars['other_wines']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['vintage'];?>
" />
<input type="hidden" name="base_price" value="<?php echo $_smarty_tpl->tpl_vars['other_wines']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['price'];?>
"  />
<input type="hidden" name="price" value="<?php if ($_smarty_tpl->tpl_vars['other_wines']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['sale'] > '0') {
echo $_smarty_tpl->tpl_vars['other_wines']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['sale'];
} else {
echo $_smarty_tpl->tpl_vars['other_wines']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['price'];
}?>" />
<input type="hidden" name="bottles" value="<?php echo $_smarty_tpl->tpl_vars['other_wines']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['bottles'];?>
" />
<input type="hidden" name="shipping" value="<?php echo $_smarty_tpl->tpl_vars['other_wines']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['shipping'];?>
" />
<input type="hidden" name="grup" value=<?php echo $_smarty_tpl->tpl_vars['other_wines']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['grup'];?>
 />
<input type="hidden" name="quantity" value="1" />

<div class="mod_bottle_info" id="<?php echo $_smarty_tpl->tpl_vars['other_wines']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['vint_id'];?>
">
<div class="mod_bottle_info_img">
<a href="<?php echo $_smarty_tpl->tpl_vars['other_wines']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['url'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['other_wines']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['title'];?>
">
<img src="<?php echo $_smarty_tpl->tpl_vars['other_wines']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['image_file'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['other_wines']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['title'];?>
" />
</a>
</div><!-- /.mod_bottle_info_img -->
<div class="mod_bottle_info_text">
<a href="<?php echo $_smarty_tpl->tpl_vars['other_wines']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['url'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['other_wines']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['title'];?>
">
<b><?php if ($_smarty_tpl->tpl_vars['other_wines']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['pretty_winery_name']) {
echo $_smarty_tpl->tpl_vars['other_wines']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['pretty_winery_name'];?>
<br><?php }
echo $_smarty_tpl->tpl_vars['other_wines']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['vintage'];?>

<?php if ($_smarty_tpl->tpl_vars['other_wines']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['pretty_year_size']) {?><br><?php echo $_smarty_tpl->tpl_vars['other_wines']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['pretty_year_size'];
}?></b>
</a>
<?php if ($_smarty_tpl->tpl_vars['other_wines']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['notes'] || ($_smarty_tpl->tpl_vars['other_wines']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['sale'] > 0)) {?>
<div class="mod_bottle_info_text_notes">
<?php if ($_smarty_tpl->tpl_vars['other_wines']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['new'] > 0) {?> <span class="bld">NEW!</span> <?php }
echo $_smarty_tpl->tpl_vars['other_wines']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['truncated_notes'];?>
 
<a href="<?php echo $_smarty_tpl->tpl_vars['other_wines']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['url'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['other_wines']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['title'];?>
"><span class="nowrap">more &gt;</span></a>
</div><!-- /.mod_bottle_info_text_notes -->
<?php }?>
<div class="mod_bottle_info_text_buy">
<?php if ($_smarty_tpl->tpl_vars['other_wines']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['sale'] > 0) {
if ($_smarty_tpl->tpl_vars['other_wines']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['sale'] < 10) {?><span class="rdd" style="padding-left:0.1em;">$<?php echo $_smarty_tpl->tpl_vars['other_wines']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['sale'];?>
</span> <?php } else { ?><span class="rdd">$<?php echo $_smarty_tpl->tpl_vars['other_wines']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['sale'];?>
</span> <?php }?> <?php } elseif ($_smarty_tpl->tpl_vars['other_wines']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['price'] > 0) {?>$<?php echo $_smarty_tpl->tpl_vars['other_wines']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['price'];?>
 <?php }?>
<button class="btn btn-xs btn-primary" type="submit" title="Add to Cart">Add to Cart</button>  <?php if ((isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['last']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['last'] : null) && ($_smarty_tpl->tpl_vars['search_criteria']->value == "all")) {?> <a href="/wines/samplers/" title="More Samplers}"><span class="right_arrow fa-2x"><i class="fa fa-chevron-right" fa-5x"></i></span></a><?php }?>
</div><!-- /.mod_bottle_info_text_buy -->
</div><!-- /.mod_bottle_info_text -->
</div><!-- /.mod_bottle_info -->

</form>
<?php }
}
}
if ($__section_bit_16_saved) {
$_smarty_tpl->tpl_vars['__smarty_section_bit'] = $__section_bit_16_saved;
}
?>
<div class="clean"></div>
<?php }?>


<?php if ($_smarty_tpl->tpl_vars['magnums']->value && !$_smarty_tpl->tpl_vars['search_by_country']->value) {?>

<h2 title="Magnums"><a href="/wines/magnums/" title="Magnums">Big Bottles</a></h2>

<?php
$__section_bit_17_saved = isset($_smarty_tpl->tpl_vars['__smarty_section_bit']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit'] : false;
$__section_bit_17_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['magnums']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_bit_17_total = $__section_bit_17_loop;
$_smarty_tpl->tpl_vars['__smarty_section_bit'] = new Smarty_Variable(array());
if ($__section_bit_17_total != 0) {
for ($__section_bit_17_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] = 0; $__section_bit_17_iteration <= $__section_bit_17_total; $__section_bit_17_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']++){
$_smarty_tpl->tpl_vars['__smarty_section_bit']->value['last'] = ($__section_bit_17_iteration == $__section_bit_17_total);
?>
<form method="post" action="/add_to_cart/">
<input type="hidden" name="vint_id" value="<?php echo $_smarty_tpl->tpl_vars['magnums']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['vint_id'];?>
" />
<input type="hidden" name="item_type" value="<?php echo $_smarty_tpl->tpl_vars['magnums']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['item_type'];?>
" />
<input type="hidden" name="product_id" value="<?php echo $_smarty_tpl->tpl_vars['magnums']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['product_id'];?>
" />
<input type="hidden" name="year" value="<?php echo $_smarty_tpl->tpl_vars['magnums']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['year'];?>
" />
<input type="hidden" name="size" value="<?php echo $_smarty_tpl->tpl_vars['magnums']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['size'];?>
" />
<input type="hidden" name="winery_id" value="<?php echo $_smarty_tpl->tpl_vars['magnums']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['winery_id'];?>
" />
<input type="hidden" name="winery_name" value="<?php echo $_smarty_tpl->tpl_vars['magnums']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['winery'];?>
" />
<input type="hidden" name="appellation" value="<?php echo $_smarty_tpl->tpl_vars['magnums']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['appellation'];?>
" />
<input type="hidden" name="vint_name" value="<?php echo $_smarty_tpl->tpl_vars['magnums']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['vintage'];?>
" />
<input type="hidden" name="base_price" value="<?php echo $_smarty_tpl->tpl_vars['magnums']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['price'];?>
"  />
<input type="hidden" name="price" value="<?php if ($_smarty_tpl->tpl_vars['magnums']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['sale'] > '0') {
echo $_smarty_tpl->tpl_vars['magnums']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['sale'];
} else {
echo $_smarty_tpl->tpl_vars['magnums']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['price'];
}?>" />
<input type="hidden" name="bottles" value="<?php echo $_smarty_tpl->tpl_vars['magnums']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['bottles'];?>
" />
<input type="hidden" name="shipping" value="<?php echo $_smarty_tpl->tpl_vars['magnums']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['shipping'];?>
" />
<input type="hidden" name="grup" value=<?php echo $_smarty_tpl->tpl_vars['magnums']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['grup'];?>
 />
<input type="hidden" name="quantity" value="1" />

<div class="mod_bottle_info" id="<?php echo $_smarty_tpl->tpl_vars['magnums']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['vint_id'];?>
">
<div class="mod_bottle_info_img">
<a href="<?php echo $_smarty_tpl->tpl_vars['magnums']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['url'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['magnums']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['title'];?>
">
<img src="<?php echo $_smarty_tpl->tpl_vars['magnums']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['image_file'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['magnums']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['title'];?>
" />
</a>
</div><!-- /.mod_bottle_info_img -->
<div class="mod_bottle_info_text">
<a href="<?php echo $_smarty_tpl->tpl_vars['magnums']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['url'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['magnums']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['title'];?>
">
<b><?php if ($_smarty_tpl->tpl_vars['magnums']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['pretty_winery_name']) {
echo $_smarty_tpl->tpl_vars['magnums']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['pretty_winery_name'];?>
<br><?php }
echo $_smarty_tpl->tpl_vars['magnums']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['vintage'];?>

<?php if ($_smarty_tpl->tpl_vars['magnums']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['pretty_year_size']) {?><br><?php echo $_smarty_tpl->tpl_vars['magnums']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['pretty_year_size'];
}?></b>
</a>
<?php if ($_smarty_tpl->tpl_vars['magnums']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['notes'] || ($_smarty_tpl->tpl_vars['magnums']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['sale'] > 0)) {?>
<div class="mod_bottle_info_text_notes">
<?php if ($_smarty_tpl->tpl_vars['magnums']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['new'] > 0) {?> <span class="bld">NEW!</span> <?php }
echo $_smarty_tpl->tpl_vars['magnums']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['truncated_notes'];?>
 
<a href="<?php echo $_smarty_tpl->tpl_vars['magnums']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['url'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['magnums']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['title'];?>
"><span class="nowrap">more &gt;</span></a>
</div><!-- /.mod_bottle_info_text_notes -->
<?php }?>
<div class="mod_bottle_info_text_buy">
<?php if ($_smarty_tpl->tpl_vars['magnums']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['sale'] > 0) {
if ($_smarty_tpl->tpl_vars['magnums']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['sale'] < 10) {?><span class="rdd" style="padding-left:0.1em;">$<?php echo $_smarty_tpl->tpl_vars['magnums']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['sale'];?>
</span> <?php } else { ?><span class="rdd">$<?php echo $_smarty_tpl->tpl_vars['magnums']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['sale'];?>
</span> <?php }?> <?php } elseif ($_smarty_tpl->tpl_vars['magnums']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['price'] > 0) {?>$<?php echo $_smarty_tpl->tpl_vars['magnums']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['price'];?>
 <?php }?>
<button class="btn btn-xs btn-primary" type="submit" title="Add to Cart">Add to Cart</button>  <?php if ((isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['last']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['last'] : null) && ($_smarty_tpl->tpl_vars['search_criteria']->value == "all")) {?> <a href="/wines/magnums/" title="More Magnums"><span class="right_arrow fa-2x"><i class="fa fa-chevron-right" fa-5x"></i></span></a><?php }?>
</div><!-- /.mod_bottle_info_text_buy -->
</div><!-- /.mod_bottle_info_text -->
</div><!-- /.mod_bottle_info -->
</form>
<?php
}
}
if ($__section_bit_17_saved) {
$_smarty_tpl->tpl_vars['__smarty_section_bit'] = $__section_bit_17_saved;
}
?>
<div class="clean"></div>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['other_items']->value && !$_smarty_tpl->tpl_vars['search_by_country']->value) {?>

<h2 title="Other Items"><a href="/wines/others/" title="Books and Misc.">Books and Misc.</a></h2>

<?php
$__section_bit_18_saved = isset($_smarty_tpl->tpl_vars['__smarty_section_bit']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit'] : false;
$__section_bit_18_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['other_items']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_bit_18_total = $__section_bit_18_loop;
$_smarty_tpl->tpl_vars['__smarty_section_bit'] = new Smarty_Variable(array());
if ($__section_bit_18_total != 0) {
for ($__section_bit_18_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] = 0; $__section_bit_18_iteration <= $__section_bit_18_total; $__section_bit_18_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']++){
$_smarty_tpl->tpl_vars['__smarty_section_bit']->value['last'] = ($__section_bit_18_iteration == $__section_bit_18_total);
?>
<form method="post" action="/add_to_cart/">
<input type="hidden" name="vint_id" value="<?php echo $_smarty_tpl->tpl_vars['other_items']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['vint_id'];?>
" />
<input type="hidden" name="item_type" value="<?php echo $_smarty_tpl->tpl_vars['other_items']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['item_type'];?>
" />
<input type="hidden" name="product_id" value="<?php echo $_smarty_tpl->tpl_vars['other_items']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['product_id'];?>
" />
<input type="hidden" name="year" value="0" />
<input type="hidden" name="size" value="0" />
<input type="hidden" name="winery_id" value="0" />
<input type="hidden" name="winery_name" value="" />
<input type="hidden" name="appellation" value="" />
<input type="hidden" name="vint_name" value="<?php echo $_smarty_tpl->tpl_vars['other_items']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['vintage'];?>
" />
<input type="hidden" name="base_price" value="<?php echo $_smarty_tpl->tpl_vars['other_items']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['price'];?>
"  />
<input type="hidden" name="price" value="<?php if ($_smarty_tpl->tpl_vars['other_items']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['sale'] > '0') {
echo $_smarty_tpl->tpl_vars['other_items']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['sale'];
} else {
echo $_smarty_tpl->tpl_vars['other_items']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['price'];
}?>" />
<input type="hidden" name="bottles" value="0" />
<input type="hidden" name="shipping" value="<?php echo $_smarty_tpl->tpl_vars['other_items']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['shipping'];?>
" />
<input type="hidden" name="grup" value="0" />
<input type="hidden" name="quantity" value="1" />

<div class="mod_other_item_info" id="<?php echo $_smarty_tpl->tpl_vars['other_items']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['vint_id'];?>
">
<div class="mod_other_item_info_img">
<a href="<?php echo $_smarty_tpl->tpl_vars['other_items']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['url'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['other_items']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['title'];?>
">
<img src="<?php echo $_smarty_tpl->tpl_vars['other_items']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['image_file'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['other_items']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['title'];?>
"  />
</a>
</div><!-- /.mod_other_item_info_img -->
<div class="mod_other_item_info_text">
<a href="<?php echo $_smarty_tpl->tpl_vars['other_items']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['url'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['other_items']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['title'];?>
">
<b><?php echo $_smarty_tpl->tpl_vars['other_items']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['vintage'];?>
</b>
</a>
<?php if ($_smarty_tpl->tpl_vars['other_items']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['notes'] || ($_smarty_tpl->tpl_vars['other_items']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['sale'] > 0)) {?>
<div class="mod_other_item_info_text_notes">
<?php if ($_smarty_tpl->tpl_vars['other_items']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['new'] > 0) {?> <span class="bld">NEW!</span> <?php }
echo $_smarty_tpl->tpl_vars['other_items']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['truncated_notes'];?>
 
<a href="<?php echo $_smarty_tpl->tpl_vars['other_items']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['url'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['other_items']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['title'];?>
"><span class="nowrap">more &gt;</span></a>
</div><!-- /.mod_other_item_info_text_notes -->
<?php }?>
<div class="mod_other_item_info_text_buy">
<?php if ($_smarty_tpl->tpl_vars['other_items']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['sale'] > 0) {
if ($_smarty_tpl->tpl_vars['other_items']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['sale'] < 10) {?><span class="rdd" style="padding-left:0.1em;">$<?php echo $_smarty_tpl->tpl_vars['other_items']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['sale'];?>
</span> <?php } else { ?><span class="rdd">$<?php echo $_smarty_tpl->tpl_vars['other_items']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['sale'];?>
</span> <?php }?> <?php } elseif ($_smarty_tpl->tpl_vars['other_items']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['price'] > 0) {?>$<?php echo $_smarty_tpl->tpl_vars['other_items']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['price'];?>
 <?php }?>
<button class="btn btn-xs btn-primary" type="submit" title="Add to Cart">Add to Cart</button>  <?php if ((isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['last']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['last'] : null) && ($_smarty_tpl->tpl_vars['search_criteria']->value == "all")) {?> <a href="/wines/others/" title="More Books & Misc."><span class="right_arrow fa-2x"><i class="fa fa-chevron-right" fa-5x"></i></span></a><?php }?>
</div><!-- /.mod_other_item_info_text_buy -->
</div><!-- /.mod_other_item_info_text -->
</div><!-- /.mod_other_item_info -->
</form>
<?php
}
}
if ($__section_bit_18_saved) {
$_smarty_tpl->tpl_vars['__smarty_section_bit'] = $__section_bit_18_saved;
}
?>
<div class="clean"></div>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['wines']->value || $_smarty_tpl->tpl_vars['other_wines']->value || $_smarty_tpl->tpl_vars['other_items']->value) {
if ($_smarty_tpl->tpl_vars['search_by_country']->value) {
$_smarty_tpl->_assignInScope('head_title', ('Shop Wines from ').($_smarty_tpl->tpl_vars['wines']->value[0]['country']));
$_smarty_tpl->_assignInScope('head_desc', (((('Finest selection of wines from ').($_smarty_tpl->tpl_vars['wines']->value[0]['country'])).('. Blue Danube Wine imports, distributes, and sells wines from ')).($_smarty_tpl->tpl_vars['wines']->value[0]['country'])).(' in the United States'));
} else {
$_smarty_tpl->_assignInScope('re_search_criteria0', smarty_modifier_replace($_smarty_tpl->tpl_vars['search_criteria']->value,'_',' '));
$_smarty_tpl->_assignInScope('re_search_criteria', smarty_modifier_capitalize($_smarty_tpl->tpl_vars['re_search_criteria0']->value));
$_smarty_tpl->_assignInScope('head_title', (('Shop ').($_smarty_tpl->tpl_vars['re_search_criteria']->value)).(' Wines'));
$_smarty_tpl->_assignInScope('head_desc', (('Finest selection of ').($_smarty_tpl->tpl_vars['re_search_criteria']->value)).(' Wines. Blue Danube Wine imports, distributes, and sells wines from Austria, Bosnia Herzegovina, Croatia, Georgia, Hungary, Montenegro, Serbia, Slovenia, and Turkey in the United States.'));
}?>
<div style="text-align:center;padding:1%;"><i>All wines are 750ml unless otherwise noted.</i></div>

<?php } else { ?>

<div class="alignCenter some_space2 bld pix14">
<p>We're sorry, it appears that your search didn't return any results.</p>
</div>
<div class="alignCenter some_space2">
<p>Our inventory changes often, so please try this search option again in the future.</p>
</div>
<?php $_smarty_tpl->_assignInScope('head_title', 'Shop Online');
}?>

</article><!-- /#wines -->

</div><!-- /.bdgridcontent9 -->
<div class="clean"></div>
<?php }
}
