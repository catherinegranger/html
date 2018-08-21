<?php
/* Smarty version 3.1.30, created on 2018-05-23 18:40:47
  from "/var/www/html/smarty/templates/pages/cart.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5b05b5afb87fc3_37124989',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0383f4bd0fd25e8274ab5addea6b8ca3084de476' => 
    array (
      0 => '/var/www/html/smarty/templates/pages/cart.tpl',
      1 => 1527100835,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:modules/mod_succerrors.tpl' => 1,
  ),
),false)) {
function content_5b05b5afb87fc3_37124989 (Smarty_Internal_Template $_smarty_tpl) {
?>
<article id="cart">

<?php if ($_smarty_tpl->tpl_vars['items']->value) {?>

<?php $_smarty_tpl->_subTemplateRender("file:modules/mod_succerrors.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


You have
<?php if ($_smarty_tpl->tpl_vars['two']->value == 'deleted') {?>
now
<?php }
if ($_smarty_tpl->tpl_vars['total_items']->value > 1) {
echo $_smarty_tpl->tpl_vars['total_items']->value;?>
 items in your cart.
<?php } else {
echo $_smarty_tpl->tpl_vars['total_items']->value;?>
 item in your cart.
<?php }?>
<div id="cart_table" class="div_l">
<form method="post" action="/cart/">
<table cellpadding="3" cellspacing="0">
<tr>
<td style="width:6%;"><b>Year</b></td>
<td style="width:67%;"><b>Name</b></td>
<td style="width:5%;" class="alignRight nowrap" colspan="2"><b>Unit Price</b></td>
<td style="width:8%;" class="alignRight"><b>Quantity</b></td>
<td style="width:8%;" class="alignRight"><b>Total</b></td>
<td style="width:6%;"></td>
</tr>
<tr><td colspan="6" class="dotted"></td><td></td></tr>
<?php
$__section_bit_0_saved = isset($_smarty_tpl->tpl_vars['__smarty_section_bit']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit'] : false;
$__section_bit_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['items']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_bit_0_total = $__section_bit_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_bit'] = new Smarty_Variable(array());
if ($__section_bit_0_total != 0) {
for ($__section_bit_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] = 0; $__section_bit_0_iteration <= $__section_bit_0_total; $__section_bit_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']++){
?>
<tr>
<td><?php if ($_smarty_tpl->tpl_vars['items']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['year']) {
echo $_smarty_tpl->tpl_vars['items']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['year'];
}?></td>
<td><a href="<?php echo $_smarty_tpl->tpl_vars['items']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['url'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['items']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['title'];?>
"><?php echo $_smarty_tpl->tpl_vars['items']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['full_name'];?>
</a></td>
<td class="alignRight nowrap">
<?php if ($_smarty_tpl->tpl_vars['items']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['base_price'] > $_smarty_tpl->tpl_vars['items']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['price']) {?><strike>$<?php echo $_smarty_tpl->tpl_vars['items']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['base_price'];?>
</strike> <?php }?>
</td>
<td class="alignRight nowrap">$<?php echo $_smarty_tpl->tpl_vars['items']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['price'];?>
</td>
<td class="alignRight"><input type="text" name="p_<?php echo $_smarty_tpl->tpl_vars['items']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['vint_id'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['items']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['quantity'];?>
" maxlength="3" size="2" /></td>
<td class="alignRight">$<?php echo $_smarty_tpl->tpl_vars['items']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['total'];?>
</td>
<td class="alignCenter pix10"><a href="/cart/<?php echo $_smarty_tpl->tpl_vars['items']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['item'];?>
/delete/">DEL</a></td>
</tr>
<?php
}
}
if ($__section_bit_0_saved) {
$_smarty_tpl->tpl_vars['__smarty_section_bit'] = $__section_bit_0_saved;
}
?>
<tr><td colspan="6" class="topdotted"></td><td></td></tr>
<tr class="nowrap">
<td colspan="5" class="pix14 rdd bld alignRight" style="vertical-align:middle;">Offer Code:</td>
<td class="alignRight" style="vertical-align:middle;">
<input style="background-color:#FDEFEF;" type="text" name="discount_name" value="<?php echo $_SESSION['discount_name'];?>
" maxlength="25" size="6" />
</td>
<td style="vertical-align:middle;"><button type="submit" title="Apply Discount" name="apply_discount" class="btn btn-sm btn-primary">Apply</button></td>
</tr>
<tr>
<td colspan="5" class="pix14 rdd bld alignRight">Grand Total:</td>
<td colspan="1" class="pix14 rdd bld alignRight nowrap">$<?php echo $_smarty_tpl->tpl_vars['grand_total']->value;?>
</td>
<td></td>
</tr>
<tr><td colspan="6" class="alignRight"><a href="/shipping/" target="_blank">View our Shipping Information</a></td><td></td></tr>
</table>
<div class="buyprocess_buttons">
<button type="submit" title="Update Cart" name="submit_update" class="btn btn-sm btn-primary">Update Cart</button>
<button type="submit" title="Empty Cart" name="submit_empty" class="btn btn-sm btn-primary">Empty Cart</button>
<button type="submit" title="Continue Shopping" name="submit_shopping" class="btn btn-sm btn-primary">Continue Shopping</button>
<button type="submit" title="Checkout" name="submit_checkout" class="btn btn-sm btn-primary">Proceed to Checkout</button>
</div>
</form>
</div>

<div id ="cart_table" class="div_p">
<form method="post" action="/cart/">
<table cellpadding="3" cellspacing="0">
<tr>
<td colspan="1" style="width:90%;" class="bld">Item</td>
<td colspan="1" style="width:10%;" class="bld alignLeft">Quantity</td>
</tr>
<tr><td colspan="2" class="dotted"></td></tr>
<?php
$__section_bit_1_saved = isset($_smarty_tpl->tpl_vars['__smarty_section_bit']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit'] : false;
$__section_bit_1_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['items']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_bit_1_total = $__section_bit_1_loop;
$_smarty_tpl->tpl_vars['__smarty_section_bit'] = new Smarty_Variable(array());
if ($__section_bit_1_total != 0) {
for ($__section_bit_1_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] = 0; $__section_bit_1_iteration <= $__section_bit_1_total; $__section_bit_1_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']++){
?>
<tr>
<td colspan="1">
<a href="<?php echo $_smarty_tpl->tpl_vars['items']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['url'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['items']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['title'];?>
"><?php echo $_smarty_tpl->tpl_vars['items']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['title'];?>
</a>
<?php if ($_smarty_tpl->tpl_vars['items']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['base_price'] > $_smarty_tpl->tpl_vars['items']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['price']) {?><strike>$<?php echo $_smarty_tpl->tpl_vars['items']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['base_price'];?>
</strike> <?php }?> $<?php echo $_smarty_tpl->tpl_vars['items']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['price'];?>

</td>
<td colspan="1" class="alignRight"><input type="text" name="p_<?php echo $_smarty_tpl->tpl_vars['items']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['vint_id'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['items']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['quantity'];?>
" maxlength="3" size="2" /></td>
</tr>
<?php
}
}
if ($__section_bit_1_saved) {
$_smarty_tpl->tpl_vars['__smarty_section_bit'] = $__section_bit_1_saved;
}
?>
<tr><td colspan="2" class="dotted"></td></tr>
<tr class="nowrap">
<td colspan="2" class="pix14 rdd bld alignRight"><span class="pix14 rdd bld alignRight">Offer Code:</span>&nbsp;
<input style="background-color:#FDEFEF;" type="text" name="discount_name" value="<?php echo $_SESSION['discount_name'];?>
" maxlength="10" size="6" />&nbsp;
<button type="submit" title="Apply Discount" name="apply_discount" class="btn btn-sm btn-primary">Apply</button>
</td>
</tr>
<tr>
<td colspan="1" class="pix14 rdd bld alignRight">Grand Total:</td>
<td colspan="1" class="pix14 rdd bld alignRight nowrap">$<?php echo $_smarty_tpl->tpl_vars['grand_total']->value;?>
</td>
</tr>
<tr><td colspan="2" class="alignRight"><a href="/shipping/" target="_blank">View our Shipping Information</a></td></tr>
</table>
<div class="buyprocess_buttons">
<button type="submit" title="Update Cart" name="submit_update" class="btn btn-sm btn-primary">Update Cart</button>
<button type="submit" title="Empty Cart" name="submit_empty" class="btn btn-sm btn-primary">Empty Cart</button>
<button type="submit" title="Continue Shopping" name="submit_shopping" class="btn btn-sm btn-primary">Continue Shopping</button>
<button type="submit" title="Checkout" name="submit_checkout" class="btn btn-sm btn-primary">Proceed to Checkout</button>
</div>
</form>
</div>

<?php } else { ?>
<div class="ucvalidation">
&bull;&nbsp;Your cart is currently empty
</div>
<br>&nbsp;<br>
<div class="alignCenter"><a href="/wines/"><button class="btn btn-sm btn-primary">Continue Shopping</button></a></div>
<?php }?>

</article>
<?php $_smarty_tpl->_assignInScope('head_title', " - Your Cart");
}
}
