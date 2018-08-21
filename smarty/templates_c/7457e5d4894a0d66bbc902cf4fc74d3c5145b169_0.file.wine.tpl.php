<?php
/* Smarty version 3.1.30, created on 2018-05-09 00:36:08
  from "/var/www/html/smarty/templates/pages/wine.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5af24278879753_85483657',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7457e5d4894a0d66bbc902cf4fc74d3c5145b169' => 
    array (
      0 => '/var/www/html/smarty/templates/pages/wine.tpl',
      1 => 1525826167,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:modules/nav_wineries.tpl' => 1,
    'file:modules/mod_succerrors.tpl' => 1,
    'file:modules/mod_wines.tpl' => 1,
  ),
),false)) {
function content_5af24278879753_85483657 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_modifier_regex_replace')) require_once '/var/www/Smarty/libs/plugins/modifier.regex_replace.php';
$_smarty_tpl->_subTemplateRender("file:modules/nav_wineries.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<div class="bdgridcontent9">
<article id="wine">
<?php if ($_smarty_tpl->tpl_vars['wine_name']->value) {
$_smarty_tpl->_subTemplateRender("file:modules/mod_succerrors.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php if ($_smarty_tpl->tpl_vars['image']->value) {
if ($_smarty_tpl->tpl_vars['other_image']->value || $_smarty_tpl->tpl_vars['is_label']->value) {?>
<div id="wine_other_img">
<img class="other_product" src="/img/bottles/<?php echo $_smarty_tpl->tpl_vars['vint_id']->value;?>
.jpg" alt="<?php echo $_smarty_tpl->tpl_vars['wine_name']->value;?>
" />
</div>
<?php } else { ?>
<div id="wine_img">
<img class="magnify" src="/img/bottles/<?php echo $_smarty_tpl->tpl_vars['vint_id']->value;?>
.jpg" alt="<?php echo $_smarty_tpl->tpl_vars['wine_name']->value;?>
" />
</div>
<?php }
} else { ?>
<div id="wine_img">
<img src="/img/bottles/0.jpg" alt="No Bottle Image"  />
</div>
<?php }?>

<div id="wine_buy">
<header>
<h1 title="<?php echo $_smarty_tpl->tpl_vars['wine_header']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['wine_header']->value;?>
</h1>
</header>

<div id="wine_detail">
<?php if ($_smarty_tpl->tpl_vars['winery_name']->value) {?> 
<label>Winery:</label>
<?php if ($_smarty_tpl->tpl_vars['wine_full_appellation']->value) {?>
<a href="/winery/<?php echo $_smarty_tpl->tpl_vars['wyweb_name']->value;?>
/" title="<?php echo $_smarty_tpl->tpl_vars['winery_name']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['winery_name']->value;?>
</a>, 
<?php if ($_smarty_tpl->tpl_vars['appellation']->value) {?> 
<?php echo $_smarty_tpl->tpl_vars['appellation']->value;?>
 <?php if ($_smarty_tpl->tpl_vars['wine_country_full_name']->value) {?>(<a href="/regions/<?php echo $_smarty_tpl->tpl_vars['wine_country_web_name']->value;?>
/" title="<?php echo $_smarty_tpl->tpl_vars['wine_country_full_name']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['wine_country_full_name']->value;?>
</a>)<?php }
} else {
if ($_smarty_tpl->tpl_vars['wine_country_full_name']->value) {?><a href="/regions/<?php echo $_smarty_tpl->tpl_vars['wine_country_web_name']->value;?>
/" title="<?php echo $_smarty_tpl->tpl_vars['wine_country_full_name']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['wine_country_full_name']->value;?>
</a><?php }
}
} else { ?>
<a href="/winery/<?php echo $_smarty_tpl->tpl_vars['wyweb_name']->value;?>
/" title="<?php echo $_smarty_tpl->tpl_vars['winery_name']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['winery_name']->value;?>
</a> 
<?php }?>
<br>
<?php }
if ($_smarty_tpl->tpl_vars['type_name']->value) {?> 
<label>Type:</label>
<?php echo $_smarty_tpl->tpl_vars['type_name']->value;?>
 <?php if ($_smarty_tpl->tpl_vars['alcohol']->value > 0) {?> (<?php echo $_smarty_tpl->tpl_vars['alcohol']->value;?>
%) <?php }?> <?php if ($_smarty_tpl->tpl_vars['organic']->value) {?>, Organic <?php }?><br>
<?php }
if ($_smarty_tpl->tpl_vars['varietals']->value) {?> 
<label>Varietals:</label>
<?php
$__section_bit_0_saved = isset($_smarty_tpl->tpl_vars['__smarty_section_bit']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit'] : false;
$__section_bit_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['varietals']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_bit_0_total = $__section_bit_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_bit'] = new Smarty_Variable(array());
if ($__section_bit_0_total != 0) {
for ($__section_bit_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] = 0; $__section_bit_0_iteration <= $__section_bit_0_total; $__section_bit_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']++){
$_smarty_tpl->tpl_vars['__smarty_section_bit']->value['last'] = ($__section_bit_0_iteration == $__section_bit_0_total);
if (!(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['last']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['last'] : null)) {
if ($_smarty_tpl->tpl_vars['varietals']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['resource_id'] > 0) {?>
<a href="/resources/grape_varietals/<?php echo $_smarty_tpl->tpl_vars['varietals']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['resource_webname'];?>
/" title="<?php echo $_smarty_tpl->tpl_vars['varietals']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['name'];?>
"><?php echo $_smarty_tpl->tpl_vars['varietals']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['name'];?>
</a>,
<?php } else {
echo $_smarty_tpl->tpl_vars['varietals']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['name'];?>
,
<?php }
} else {
if ($_smarty_tpl->tpl_vars['varietals']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['resource_id'] > 0) {?>
<a href="/resources/grape_varietals/<?php echo $_smarty_tpl->tpl_vars['varietals']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['resource_webname'];?>
/" title="<?php echo $_smarty_tpl->tpl_vars['varietals']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['name'];?>
"><?php echo $_smarty_tpl->tpl_vars['varietals']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['name'];?>
</a>
<?php } else {
echo $_smarty_tpl->tpl_vars['varietals']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['name'];?>

<?php }
}
}
}
if ($__section_bit_0_saved) {
$_smarty_tpl->tpl_vars['__smarty_section_bit'] = $__section_bit_0_saved;
}
}
if ($_smarty_tpl->tpl_vars['size']->value > 0 && $_smarty_tpl->tpl_vars['size']->value != 750) {?> 
<br><label>Size:</label>
<?php if ($_smarty_tpl->tpl_vars['size']->value == 1000) {?>1l <?php } else { ?> <?php echo $_smarty_tpl->tpl_vars['size']->value;?>
ml <?php }
}?>
</div>

<div id="wine_price">
<?php if ($_smarty_tpl->tpl_vars['can_show_retail_price']->value) {
if ($_smarty_tpl->tpl_vars['actual_price']->value > '0') {?>
<label>Price:</label>
<?php if ($_smarty_tpl->tpl_vars['actual_sale']->value > '0') {?><strike>$<?php echo $_smarty_tpl->tpl_vars['actual_price']->value;?>
</strike> <span class="bld rdd">$<?php echo $_smarty_tpl->tpl_vars['actual_sale']->value;?>
</span><?php } else { ?>$<?php echo $_smarty_tpl->tpl_vars['actual_price']->value;
}?>
 <?php if ($_smarty_tpl->tpl_vars['low_inventory']->value) {?> - <b>low inventory</b><?php }
if ($_smarty_tpl->tpl_vars['in_stock']->value) {
if (($_smarty_tpl->tpl_vars['wineclub_member']->value && (($_smarty_tpl->tpl_vars['wineclub_price']->value > 0) || ($_smarty_tpl->tpl_vars['wineclub_sale']->value > 0)))) {?> <div class="bld">Exclusive offer for Vino Danubia Members</div> <?php }?>
<div class="bld grn">In Stock.</div>
<form method="post" action="/add_to_cart/">
<label>Quantity:</label>
<input type="hidden" name="grup" value="<?php echo $_smarty_tpl->tpl_vars['grup']->value;?>
" />
<input type="hidden" name="bottles" value="<?php echo $_smarty_tpl->tpl_vars['bottles']->value;?>
" />
<input type="hidden" name="shipping" value="<?php echo $_smarty_tpl->tpl_vars['shipping']->value;?>
" />
<input type="hidden" name="vint_id" value="<?php echo $_smarty_tpl->tpl_vars['vint_id']->value;?>
"  />
<input type="hidden" name="product_id" value="<?php echo $_smarty_tpl->tpl_vars['product_id']->value;?>
"  />
<input type="hidden" name="item_type" value="<?php echo $_smarty_tpl->tpl_vars['item_type']->value;?>
"  />
<input type="hidden" name="year" value="<?php echo $_smarty_tpl->tpl_vars['year']->value;?>
"  />
<input type="hidden" name="size" value="<?php echo $_smarty_tpl->tpl_vars['size']->value;?>
"  />
<input type="hidden" name="winery_id" value="<?php echo $_smarty_tpl->tpl_vars['wy_id']->value;?>
"  />
<input type="hidden" name="winery_name" value="<?php echo $_smarty_tpl->tpl_vars['wy_name']->value;?>
"  />
<input type="hidden" name="appellation" value="<?php echo $_smarty_tpl->tpl_vars['appellation']->value;?>
"  />
<input type="hidden" name="vint_name" value="<?php echo $_smarty_tpl->tpl_vars['wine_name']->value;?>
"  />
<input type="hidden" name="base_price" value="<?php echo $_smarty_tpl->tpl_vars['actual_price']->value;?>
"  />
<input type="hidden" name="price" value="<?php if ($_smarty_tpl->tpl_vars['actual_sale']->value > '0') {
echo $_smarty_tpl->tpl_vars['actual_sale']->value;
} else {
echo $_smarty_tpl->tpl_vars['actual_price']->value;
}?>"  />
<input type="text" size="4" maxlength="6" name="quantity" value="1" />
&nbsp;<button type="submit" title="Add to Cart" class="btn btn-sm btn-primary">Add to Cart</button>
</form>
<a href="/shipping/" target="_blank">View our Shipping Information</a>
<?php } else { ?>
<div class="bld rdd">Sorry, sold out</div>
<?php }
} else { ?>
Sorry, not available online
<?php }
} else { ?>
Please ckeck our Price List for availability and pricing
<?php }?>
</div>

<div id="wine_social">
<div id="wine_social_top"></div>
<div id="social" style="width:90%;white-space:nowrap;">
<ul>
<li class="twit">
<a href="https://twitter.com/share" class="twitter-share-button" data-url="http://www.bluedanubewine.com/wine/<?php echo $_smarty_tpl->tpl_vars['vint_id']->value;?>
" data-count="none" data-via="BlueDanubeWine">Tweet</a><?php echo '<script'; ?>
 type="text/javascript" src="//platform.twitter.com/widgets.js"><?php echo '</script'; ?>
>
</li>

<li class="goog"><g:plusone size="medium" annotation="none"></g:plusone></li>

<?php echo '<script'; ?>
 type="text/javascript">
  (function() {
    var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
    po.src = 'https://apis.google.com/js/plusone.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
  })();
<?php echo '</script'; ?>
>


<li class="fb">
<iframe src="//www.facebook.com/plugins/like.php?href=http%3A%2F%2Fwww.bluedanubewine.com%2Fwine%2F<?php echo $_smarty_tpl->tpl_vars['vint_id']->value;?>
&amp;send=false&amp;layout=button_count&amp;width=30&amp;show_faces=false&amp;action=like&amp;colorscheme=light&amp;font=arial&amp;height=21&amp;appId=278592638819082" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:450px; height:21px;" allowTransparency="true"></iframe>
</li>
</div>
</div>

</div>
<div class="clean"></div>

<div id="wine_notes">
<?php if ($_smarty_tpl->tpl_vars['notes']->value) {?>
<b>Our Notes:</b> <?php echo smarty_modifier_regex_replace($_smarty_tpl->tpl_vars['notes']->value,"/[\n]/","<br/>");?>

<?php }
if ($_smarty_tpl->tpl_vars['reviews']->value) {?>
<br><label>More Reviews:</label>
<?php
$__section_rv_1_saved = isset($_smarty_tpl->tpl_vars['__smarty_section_rv']) ? $_smarty_tpl->tpl_vars['__smarty_section_rv'] : false;
$__section_rv_1_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['reviews']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_rv_1_total = $__section_rv_1_loop;
$_smarty_tpl->tpl_vars['__smarty_section_rv'] = new Smarty_Variable(array());
if ($__section_rv_1_total != 0) {
for ($__section_rv_1_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_rv']->value['index'] = 0; $__section_rv_1_iteration <= $__section_rv_1_total; $__section_rv_1_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_rv']->value['index']++){
?>
<br><a href="<?php echo $_smarty_tpl->tpl_vars['reviews']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_rv']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_rv']->value['index'] : null)]['url'];?>
" target="_blank"><?php echo $_smarty_tpl->tpl_vars['reviews']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_rv']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_rv']->value['index'] : null)]['title'];?>
</a>
<?php
}
}
if ($__section_rv_1_saved) {
$_smarty_tpl->tpl_vars['__smarty_section_rv'] = $__section_rv_1_saved;
}
}?>

<?php if ($_smarty_tpl->tpl_vars['tech_file_name']->value) {?>
<div><span style="margin-right:0.5em;"><a href="/techsheets/<?php echo $_smarty_tpl->tpl_vars['tech_file_name']->value;?>
" target="_blank">Download PDF Fact Sheet</a></span>
<img  style="position:relative;top:1em;" src="/img/all/pdficon_large.png" alt="PDF icon" />
</div>
<?php }?>

</div>

<?php if ($_smarty_tpl->tpl_vars['wines']->value) {
if ($_smarty_tpl->tpl_vars['winery_name']->value) {?>
<a href="/winery/<?php echo $_smarty_tpl->tpl_vars['wyweb_name']->value;?>
/" title="<?php echo $_smarty_tpl->tpl_vars['winery_name']->value;?>
"><h2 title="<?php echo $_smarty_tpl->tpl_vars['winery_name']->value;?>
 Wines" class="rdd">All <?php echo $_smarty_tpl->tpl_vars['winery_name']->value;?>
 Wines:</h2></a>
<?php } elseif ($_smarty_tpl->tpl_vars['item_type']->value > 0) {?>
<a href="/wines/books/" title="Books"><h2 title="Books and Mics." class="rdd">All Books &amp; Misc.:</h2></a>
<?php } else { ?>
<a href="/wines/samplers/" title="Samplers"><h2 title="Samplers and Gift Sets" class="rdd">All Samplers and Gift Sets:</h2></a>
<?php }
$_smarty_tpl->_subTemplateRender("file:modules/mod_wines.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php }?>


<?php $_smarty_tpl->_assignInScope('head_title', (($_smarty_tpl->tpl_vars['wine_fullname']->value).(' ')).($_smarty_tpl->tpl_vars['wine_full_appellation']->value));
?>

<?php } else { ?>
<div style="text-align:center;padding:5% 0%;">
<b>We're sorry, it appears that your search didn't return any results.</b>
<br />&nbsp;<br />
Our inventory changes often, so please try again in the future.
</div>
<?php $_smarty_tpl->_assignInScope('head_title', 'Buy Wine Online');
}?>

</article>
</div>
<div class="clean"></div><?php }
}
