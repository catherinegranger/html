<?php
/* Smarty version 3.1.30, created on 2018-04-18 01:02:00
  from "/var/www/html/smarty/templates/amn/pages/vintages.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5ad69908634d09_94027376',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1d0e9c3596f5f1a1efa5f91c9adb4ef89b56e773' => 
    array (
      0 => '/var/www/html/smarty/templates/amn/pages/vintages.tpl',
      1 => 1523659342,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ad69908634d09_94027376 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['for']->value) {
$_smarty_tpl->_assignInScope('page', $_smarty_tpl->tpl_vars['for']->value);
} else {
$_smarty_tpl->_assignInScope('page', "0");
}
if ($_smarty_tpl->tpl_vars['tri']->value) {
$_smarty_tpl->_assignInScope('winery', $_smarty_tpl->tpl_vars['tri']->value);
} else {
$_smarty_tpl->_assignInScope('winery', "all");
}?>

<h2>View and Update Vintages</h2>


<?php if ($_smarty_tpl->tpl_vars['fiv']->value == "success") {?><div class="error">Vintage updated successfully!</div><?php }
if ($_smarty_tpl->tpl_vars['for']->value == "error") {?><div class="error">There was a problem, action failed.</div><?php }
if ($_smarty_tpl->tpl_vars['for']->value == "removed") {?><div class="error">Vintage has been removed from the website.</div><?php }
if ($_smarty_tpl->tpl_vars['for']->value == "unremoved") {?><div class="error">Vintage has been unremoved from the website.</div><?php }
if ($_smarty_tpl->tpl_vars['for']->value == "stockremoved") {?><div class="error">Vintage is now out of stock.</div><?php }
if ($_smarty_tpl->tpl_vars['for']->value == "stockunremoved") {?><div class="error">Vintage is back in stock.</div><?php }?>

		
<table cellpadding="4" cellspacing="1">
<tr><td colspan="10"><?php echo $_smarty_tpl->tpl_vars['paginator']->value;?>
</td></tr>
<tr>
<td colspan="2"><b>Showing <?php echo $_smarty_tpl->tpl_vars['two']->value;?>
 vintages</b></td>
<td colspan="3">
<?php if ($_smarty_tpl->tpl_vars['tri']->value != "prices") {?>
<form action="/sort_vintages/" method="post">
<input type="hidden" name="page" value="<?php echo $_smarty_tpl->tpl_vars['page']->value;?>
" />
<select name="wy_id" onchange="this.form.submit();">
<option value="all">All Wineries</option>
<?php
$__section_bit_0_saved = isset($_smarty_tpl->tpl_vars['__smarty_section_bit']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit'] : false;
$__section_bit_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['wys']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_bit_0_total = $__section_bit_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_bit'] = new Smarty_Variable(array());
if ($__section_bit_0_total != 0) {
for ($__section_bit_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] = 0; $__section_bit_0_iteration <= $__section_bit_0_total; $__section_bit_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']++){
?>
<option value="<?php echo $_smarty_tpl->tpl_vars['wys']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['wy_id'];?>
"<?php if ($_smarty_tpl->tpl_vars['tri']->value == $_smarty_tpl->tpl_vars['wys']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['wy_id']) {?> selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['wys']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['name'];?>
</option>
<?php
}
}
if ($__section_bit_0_saved) {
$_smarty_tpl->tpl_vars['__smarty_section_bit'] = $__section_bit_0_saved;
}
?>
<option value="samplers"<?php if ($_smarty_tpl->tpl_vars['tri']->value == 'samplers') {?> selected<?php }?>>Samplers</option>
<option value="others"<?php if ($_smarty_tpl->tpl_vars['tri']->value == 'others') {?> selected<?php }?>>Others</option>
</select>
</form>
<?php }?>
</td>
<td colspan="5" style="text-align:right;"><a href="/amn/vintages/active/<?php echo $_smarty_tpl->tpl_vars['winery']->value;?>
/0/">Show Active</a> | <a href="/amn/vintages/undeleted/<?php echo $_smarty_tpl->tpl_vars['winery']->value;?>
/0/">Show Undeleted</a> | <a href="/amn/vintages/all/<?php echo $_smarty_tpl->tpl_vars['winery']->value;?>
/0/">Show All</a></td>
</tr>

<tr>
<?php if ($_smarty_tpl->tpl_vars['tri']->value == "prices") {?>
<td class="border1" style="width:5%;text-align:center;white-space:nowrap;"><b>Product Id</b></td>
<td class="border1" style="width:15%;"><b>Winery</b></td>
<td class="border1" style="width:15%;"><b>Vintage Name</b></td>
<td class="border1" style="width:5%;text-align:center;"><b>Size</b></td>
<td class="border1" style="width:5%;text-align:center;"><b>Year</b></td>
<td class="border1" style="width:5%;text-align:center;white-space:nowrap;"><b>CA Price</b></td>
<td class="border1" style="width:5%;text-align:center;white-space:nowrap;"><b>Store Price</b></td>
<td class="border1" style="width:5%;text-align:center;white-space:nowrap;"><b>Store Sale</b></td>
<td class="border1" style="width:5%;text-align:center;white-space:nowrap;"><b>NY Price</b></td>
<td class="border1" style="text-align:center;white-space:nowrap;"><b>NY Discount</b></td>
<?php } else { ?>
<td class="border1" style="width:5%;text-align:center;white-space:nowrap;"><b>Product Id</b></td>
<td class="border1" style="width:15%;"><b>Winery</b></td>
<td class="border1" style="width:20%;"><b>Vintage Name</b></td>
<td class="border1" style="width:5%;text-align:center;"><b>Size</b></td>
<td class="border1" style="width:5%;text-align:center;"><b>Year</b></td>
<td class="border1" style="width:10%;text-align:center;"><b>Price</b></td>
<td class="border1" style="width:10%;text-align:center;"><b>Stock?</b></td>
<td class="border1" style="width:5%;text-align:center;"><b>Edit</b></td>
<td class="border1" style="width:15%;text-align:center;"><b>Edit New Vintage</b></td>
<td class="border1" style="width:10%;text-align:center;"><b>In Website?</b></td>
<?php }?>
</tr>
<?php
$__section_bit_1_saved = isset($_smarty_tpl->tpl_vars['__smarty_section_bit']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit'] : false;
$__section_bit_1_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['vintages']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_bit_1_total = $__section_bit_1_loop;
$_smarty_tpl->tpl_vars['__smarty_section_bit'] = new Smarty_Variable(array());
if ($__section_bit_1_total != 0) {
for ($__section_bit_1_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] = 0; $__section_bit_1_iteration <= $__section_bit_1_total; $__section_bit_1_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']++){
?>
<tr>
<?php if ($_smarty_tpl->tpl_vars['tri']->value == "prices") {?>
<td class="border1"><b><?php echo $_smarty_tpl->tpl_vars['vintages']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['product_id'];?>
</b></td>
<td class="border1" style="white-space:nowrap;"><b><?php echo $_smarty_tpl->tpl_vars['vintages']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['winery'];?>
</b></td>
<td class="border1" style="white-space:nowrap;"><b><a href="/amn/edit_vintage_price/<?php echo $_smarty_tpl->tpl_vars['vintages']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['vint_id'];?>
/"><?php echo $_smarty_tpl->tpl_vars['vintages']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['vintage'];?>
</a></b></td>
<td class="border1" style="text-align:center;"><?php echo $_smarty_tpl->tpl_vars['vintages']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['size'];?>
</td>
<td class="border1" style="text-align:center;"><?php echo $_smarty_tpl->tpl_vars['vintages']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['year'];?>
</td>
<td class="border1" style="text-align:right;"><?php if ($_smarty_tpl->tpl_vars['vintages']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['ca_price'] > 0) {?>$<?php echo $_smarty_tpl->tpl_vars['vintages']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['ca_price'];
} else { ?>-<?php }?></td>
<td class="border1" style="text-align:right;"><?php if ($_smarty_tpl->tpl_vars['vintages']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['price'] > 0) {?>$<?php echo $_smarty_tpl->tpl_vars['vintages']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['price'];
} else { ?>-<?php }?></td>
<td class="border1" style="text-align:right;"><?php if ($_smarty_tpl->tpl_vars['vintages']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['sale'] > 0) {?>$<?php echo $_smarty_tpl->tpl_vars['vintages']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['sale'];
} else { ?>-<?php }?></td>
<td class="border1" style="text-align:right;"><?php if ($_smarty_tpl->tpl_vars['vintages']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['ny_price'] > 0) {?>$<?php echo $_smarty_tpl->tpl_vars['vintages']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['ny_price'];
} else { ?>-<?php }?></td>
<td class="border1" style="text-align:left;"><?php echo $_smarty_tpl->tpl_vars['vintages']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['ny_discount'];?>
</td>
<?php } else { ?>
<td class="border1"><b><?php echo $_smarty_tpl->tpl_vars['vintages']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['product_id'];?>
</b></td>
<td class="border1" style="white-space:nowrap;"><b><?php echo $_smarty_tpl->tpl_vars['vintages']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['winery'];?>
</b></td>
<td class="border1" style="white-space:nowrap;"><b><a href="/amn/edit_vintage/<?php echo $_smarty_tpl->tpl_vars['vintages']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['vint_id'];?>
/"><?php echo $_smarty_tpl->tpl_vars['vintages']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['vintage'];?>
</a></b></td>
<td class="border1" style="text-align:center;"><?php echo $_smarty_tpl->tpl_vars['vintages']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['size'];?>
</td>
<td class="border1" style="text-align:center;"><?php echo $_smarty_tpl->tpl_vars['vintages']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['year'];?>
</td>
<td class="border1" style="text-align:center;"><?php if ($_smarty_tpl->tpl_vars['vintages']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['price'] > 0) {?>$<?php echo $_smarty_tpl->tpl_vars['vintages']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['price'];
} else { ?>-<?php }?></td>
<td class="border1" style="text-align:center;"><?php if ($_smarty_tpl->tpl_vars['vintages']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['stock'] == '1') {?><a href="/amn/vintages/<?php echo $_smarty_tpl->tpl_vars['two']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['tri']->value;?>
/stockremove/<?php echo $_smarty_tpl->tpl_vars['vintages']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['vint_id'];?>
/">YES</a><?php } else { ?><a href="/amn/vintages/<?php echo $_smarty_tpl->tpl_vars['two']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['tri']->value;?>
/stockunremove/<?php echo $_smarty_tpl->tpl_vars['vintages']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['vint_id'];?>
/">NO</a><?php }?></td>
<td class="border1" style="text-align:center;"><a href="/amn/edit_vintage/<?php echo $_smarty_tpl->tpl_vars['vintages']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['vint_id'];?>
/">YES</a></td>
<td class="border1" style="text-align:center;"><a href="/amn/add_vintage/<?php echo $_smarty_tpl->tpl_vars['vintages']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['vint_id'];?>
/">YES</a></td>
<td class="border1" style="text-align:center;"><?php if ($_smarty_tpl->tpl_vars['vintages']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['online_store'] == '1') {?><a href="/amn/vintages/<?php echo $_smarty_tpl->tpl_vars['two']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['tri']->value;?>
/remove/<?php echo $_smarty_tpl->tpl_vars['vintages']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['vint_id'];?>
/">YES</a><?php } else { ?><a href="/amn/vintages/<?php echo $_smarty_tpl->tpl_vars['two']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['tri']->value;?>
/unremove/<?php echo $_smarty_tpl->tpl_vars['vintages']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['vint_id'];?>
/">NO</a><?php }?></td>
<?php }?>
</tr>
<?php
}
}
if ($__section_bit_1_saved) {
$_smarty_tpl->tpl_vars['__smarty_section_bit'] = $__section_bit_1_saved;
}
?>
<tr><td colspan="10"><?php echo $_smarty_tpl->tpl_vars['paginator']->value;?>
</td></tr>
</table>

<p><a href="/amn/forecast/<?php echo $_smarty_tpl->tpl_vars['winery']->value;?>
/" target="_blank">View Past Vintage Sales &gt;&gt;</a></p><?php }
}
