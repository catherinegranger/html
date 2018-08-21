<?php
/* Smarty version 3.1.30, created on 2018-04-27 17:13:17
  from "/var/www/html/smarty/templates/modules/mod_wines.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5ae35a2deb4212_65222410',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5d9cdf5f97223eb91b0fe8183495b0c37f557f71' => 
    array (
      0 => '/var/www/html/smarty/templates/modules/mod_wines.tpl',
      1 => 1524848368,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ae35a2deb4212_65222410 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_modifier_truncate')) require_once '/var/www/Smarty/libs/plugins/modifier.truncate.php';
$__section_bit_0_saved = isset($_smarty_tpl->tpl_vars['__smarty_section_bit']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit'] : false;
$__section_bit_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['wines']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_bit_0_total = $__section_bit_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_bit'] = new Smarty_Variable(array());
if ($__section_bit_0_total != 0) {
for ($__section_bit_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] = 0; $__section_bit_0_iteration <= $__section_bit_0_total; $__section_bit_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']++){
?>
<form method="post" action="/add_to_cart/">
<input type="hidden" name="vint_id" value="<?php echo $_smarty_tpl->tpl_vars['wines']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['vint_id'];?>
" />
<input type="hidden" name="product_id" value="<?php echo $_smarty_tpl->tpl_vars['wines']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['product_id'];?>
" />
<input type="hidden" name="item_type" value="<?php echo $_smarty_tpl->tpl_vars['wines']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['item_type'];?>
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
<?php if ($_smarty_tpl->tpl_vars['wines']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['item_type'] == 0) {?>
<div class="mod_bottle_info">
<div class="mod_bottle_info_img">
<a href="/wine/<?php if ($_smarty_tpl->tpl_vars['wines']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['grup']) {?>sampler/<?php }
echo $_smarty_tpl->tpl_vars['wines']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['vint_id'];?>
/" title="<?php if ($_smarty_tpl->tpl_vars['wines']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['winery']) {
if ($_smarty_tpl->tpl_vars['wines']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['winery'] != "Specials") {
echo $_smarty_tpl->tpl_vars['wines']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['winery'];?>
 <?php }
}
echo $_smarty_tpl->tpl_vars['wines']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['vintage'];?>
 <?php if ($_smarty_tpl->tpl_vars['wines']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['year'] > 0) {
echo $_smarty_tpl->tpl_vars['wines']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['year'];
}?>">
<?php if ($_smarty_tpl->tpl_vars['wines']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['image']) {?>
<img src="/img/bottles/thumb/<?php echo $_smarty_tpl->tpl_vars['wines']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['vint_id'];?>
.jpg" alt="<?php if ($_smarty_tpl->tpl_vars['wines']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['winery']) {
if ($_smarty_tpl->tpl_vars['wines']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['winery'] != "Specials") {
echo $_smarty_tpl->tpl_vars['wines']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['winery'];?>
 <?php }
}
echo $_smarty_tpl->tpl_vars['wines']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['vintage'];?>
 <?php if ($_smarty_tpl->tpl_vars['wines']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['year'] > 0) {
echo $_smarty_tpl->tpl_vars['wines']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['year'];
}?>"  />
<?php } else { ?>
<img src="/img/bottles/thumb/0.jpg" alt="No Bottle Image"  />
<?php }?>
</a>
</div><!-- /.mod_bottle_info_img -->
<div class="mod_bottle_info_text">
<a href="/wine/<?php if ($_smarty_tpl->tpl_vars['wines']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['grup']) {?>sampler/<?php }
echo $_smarty_tpl->tpl_vars['wines']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['vint_id'];?>
/" title="<?php if ($_smarty_tpl->tpl_vars['wines']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['winery']) {
if ($_smarty_tpl->tpl_vars['wines']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['winery'] != "Specials") {
echo $_smarty_tpl->tpl_vars['wines']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['winery'];?>
 <?php }
}
echo $_smarty_tpl->tpl_vars['wines']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['vintage'];?>
 <?php if ($_smarty_tpl->tpl_vars['wines']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['year'] > 0) {
echo $_smarty_tpl->tpl_vars['wines']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['year'];
}?>">
<b><?php if ($_smarty_tpl->tpl_vars['wines']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['winery']) {
if ($_smarty_tpl->tpl_vars['wines']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['winery'] != "Specials") {
echo $_smarty_tpl->tpl_vars['wines']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['winery'];?>
<br/><?php }
}
echo $_smarty_tpl->tpl_vars['wines']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['vintage'];?>
</b>
<?php if ($_smarty_tpl->tpl_vars['wines']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['pretty_year_size']) {?><br/><?php echo $_smarty_tpl->tpl_vars['wines']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['pretty_year_size'];?>
<br /><?php }?>
</a>
<?php if ($_smarty_tpl->tpl_vars['wines']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['notes'] || ($_smarty_tpl->tpl_vars['wines']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['sale'] > 0)) {?>
<div class="mod_bottle_info_text_notes">
<?php if ($_smarty_tpl->tpl_vars['wines']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['sale'] > 0 && $_smarty_tpl->tpl_vars['can_show_retail_price']->value) {?> WAS $<?php echo $_smarty_tpl->tpl_vars['wines']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['price'];?>
. <?php }
if ($_smarty_tpl->tpl_vars['wines']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['low_inventory']) {?> Low inventory. <?php }
if ($_smarty_tpl->tpl_vars['wines']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['vintage_length'] > 35 && $_smarty_tpl->tpl_vars['wines']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['year'] > '0') {
echo smarty_modifier_truncate(preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->tpl_vars['wines']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['notes']),55,"...",true);?>
 
<?php } elseif ($_smarty_tpl->tpl_vars['wines']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['vintage_length'] > 21 && $_smarty_tpl->tpl_vars['wines']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['year'] > '0') {
echo smarty_modifier_truncate(preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->tpl_vars['wines']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['notes']),55,"...",true);?>
 
<?php } else {
echo smarty_modifier_truncate(preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->tpl_vars['wines']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['notes']),80,"...",true);?>
 
<?php }?>
<a href="/wine/<?php if ($_smarty_tpl->tpl_vars['wines']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['grup']) {?>sampler/<?php }
echo $_smarty_tpl->tpl_vars['wines']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['vint_id'];?>
/" title="<?php echo $_smarty_tpl->tpl_vars['wines']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['winery'];?>
 <?php echo $_smarty_tpl->tpl_vars['wines']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['vintage'];?>
 <?php if ($_smarty_tpl->tpl_vars['wines']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['year'] > 0) {
echo $_smarty_tpl->tpl_vars['wines']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['year'];
}?>"><span class="nowrap">more &gt;</span></a>
</div><!-- /.mod_bottle_info_text_notes -->
<?php }
if ($_smarty_tpl->tpl_vars['can_show_retail_price']->value) {?>
<div class="mod_bottle_info_text_buy">
<?php if ($_smarty_tpl->tpl_vars['wines']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['sale'] > 0) {
if ($_smarty_tpl->tpl_vars['wines']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['sale'] < 10) {?><span class="rdd" style="padding-left:0.1em;">$<?php echo $_smarty_tpl->tpl_vars['wines']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['sale'];?>
</span> <?php } else { ?><span class="rdd">$<?php echo $_smarty_tpl->tpl_vars['wines']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['sale'];?>
</span> <?php }?> <?php } elseif ($_smarty_tpl->tpl_vars['wines']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['price'] > 0) {?>$<?php echo $_smarty_tpl->tpl_vars['wines']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['price'];?>
 <?php }
if ($_smarty_tpl->tpl_vars['wines']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['price'] > 0) {
if ($_smarty_tpl->tpl_vars['wines']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['stock'] > 0) {?>&nbsp;<button class="btn btn-xs btn-primary" type="submit" title="Add to Cart">Add to Cart</button><?php } else { ?>&nbsp; Sold out<?php }
} else { ?>Sorry, not available<?php }?>
</div><!-- /.mod_bottle_info_text_buy -->
<?php }?>
</div><!-- /.mod_bottle_info_text -->
</div><!-- /.mod_bottle_info -->

<?php } else { ?>

<div class="mod_other_item_info">
<div class="mod_other_item_info_img">
<a href="/wine/<?php echo $_smarty_tpl->tpl_vars['wines']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['vint_id'];?>
/" title="<?php echo $_smarty_tpl->tpl_vars['wines']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['vintage'];?>
">
<?php if ($_smarty_tpl->tpl_vars['wines']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['image']) {?>
<img src="/img/bottles/thumb/<?php echo $_smarty_tpl->tpl_vars['wines']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['vint_id'];?>
.jpg" alt="<?php echo $_smarty_tpl->tpl_vars['wines']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['vintage'];?>
"  />
<?php } else { ?>
<img src="/img/bottles/thumb/0.jpg" alt="No Bottle Image"  />
<?php }?>
</a>
</div><!-- /.mod_other_item_info_img -->
<div class="mod_other_item_info_text">
<a href="/wine/<?php echo $_smarty_tpl->tpl_vars['wines']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['vint_id'];?>
/" title="<?php echo $_smarty_tpl->tpl_vars['wines']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['vintage'];?>
">
<b><?php echo $_smarty_tpl->tpl_vars['wines']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['vintage'];?>
</b>
</a>
<?php if ($_smarty_tpl->tpl_vars['wines']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['notes'] || ($_smarty_tpl->tpl_vars['wines']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['sale'] > 0)) {?>
<div class="mod_other_item_info_text_notes">
<?php if ($_smarty_tpl->tpl_vars['wines']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['sale'] > 0) {?> WAS $<?php echo $_smarty_tpl->tpl_vars['wines']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['price'];?>
. <?php }
if ($_smarty_tpl->tpl_vars['wines']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['low_inventory']) {?> Low inventory. <?php }
if ($_smarty_tpl->tpl_vars['wines']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['vintage_length'] > 35 && $_smarty_tpl->tpl_vars['wines']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['year'] > '0') {
echo smarty_modifier_truncate(preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->tpl_vars['wines']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['notes']),55,"...",true);?>
 
<?php } elseif ($_smarty_tpl->tpl_vars['wines']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['vintage_length'] > 21 && $_smarty_tpl->tpl_vars['wines']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['year'] > '0') {
echo smarty_modifier_truncate(preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->tpl_vars['wines']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['notes']),55,"...",true);?>
 
<?php } else {
echo smarty_modifier_truncate(preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->tpl_vars['wines']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['notes']),80,"...",true);?>
 
<?php }?>
<a href="/wine/<?php echo $_smarty_tpl->tpl_vars['wines']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['vint_id'];?>
/" title="<?php echo $_smarty_tpl->tpl_vars['wines']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['vintage'];?>
"><span class="nowrap">more &gt;</span></a>
</div><!-- /.mod_other_item_info_text_notes -->
<?php }?>
<div class="mod_other_item_info_text_buy">
<?php if ($_smarty_tpl->tpl_vars['wines']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['sale'] > 0) {
if ($_smarty_tpl->tpl_vars['wines']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['sale'] < 10) {?><span class="rdd" style="padding-left:0.1em;">$<?php echo $_smarty_tpl->tpl_vars['wines']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['sale'];?>
</span> <?php } else { ?><span class="rdd">$<?php echo $_smarty_tpl->tpl_vars['wines']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['sale'];?>
</span> <?php }?> <?php } elseif ($_smarty_tpl->tpl_vars['wines']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['price'] > 0) {?>$<?php echo $_smarty_tpl->tpl_vars['wines']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['price'];?>
 <?php }
if ($_smarty_tpl->tpl_vars['wines']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['price'] > 0) {
if ($_smarty_tpl->tpl_vars['wines']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['stock'] > 0) {?>&nbsp;<button class="btn btn-xs btn-primary" type="submit" title="Add to Cart">Add to Cart</button><?php } else { ?>&nbsp; Sold out<?php }
} else { ?>Sorry, not available<?php }?>
</div><!-- /.mod_other_item_info_text_buy -->
</div><!-- /.mod_other_item_info_text -->
</div><!-- /.mod_other_item_info -->
<?php }?>
</form>
<?php
}
}
if ($__section_bit_0_saved) {
$_smarty_tpl->tpl_vars['__smarty_section_bit'] = $__section_bit_0_saved;
}
?>

<div class="clean"></div>
<?php }
}
