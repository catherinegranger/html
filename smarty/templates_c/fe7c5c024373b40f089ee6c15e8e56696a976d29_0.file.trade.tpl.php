<?php
/* Smarty version 3.1.30, created on 2018-04-27 17:36:50
  from "/var/www/html/smarty/templates/pages/trade.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5ae35fb292c129_16091730',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fe7c5c024373b40f089ee6c15e8e56696a976d29' => 
    array (
      0 => '/var/www/html/smarty/templates/pages/trade.tpl',
      1 => 1523659342,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ae35fb292c129_16091730 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['two']->value) {?>
<article id="trade_winery">
<header>
<h1 title="Trade - <?php echo $_smarty_tpl->tpl_vars['name']->value;?>
"><a href="/trade/" title="Trade">Trade</a> - <a href="/winery/<?php echo $_smarty_tpl->tpl_vars['web_name']->value;?>
/" title="<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['name']->value;?>
</a></h1>
</header>
<?php if ($_smarty_tpl->tpl_vars['wines']->value) {
$__section_bit_0_saved = isset($_smarty_tpl->tpl_vars['__smarty_section_bit']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit'] : false;
$__section_bit_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['wines']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_bit_0_total = $__section_bit_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_bit'] = new Smarty_Variable(array());
if ($__section_bit_0_total != 0) {
for ($__section_bit_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] = 0; $__section_bit_0_iteration <= $__section_bit_0_total; $__section_bit_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']++){
if ($_smarty_tpl->tpl_vars['wines']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['tech_file_exists'] > 0) {?>
&bull;&nbsp;&nbsp;<a href="/techsheets/<?php echo $_smarty_tpl->tpl_vars['wines']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['tech_file_name'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
 <?php echo $_smarty_tpl->tpl_vars['wines']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['name'];?>
 <?php if ($_smarty_tpl->tpl_vars['wines']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['year'] > '0') {
echo $_smarty_tpl->tpl_vars['wines']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['year'];
}?> PDF" target="_blank"><?php if ($_smarty_tpl->tpl_vars['wines']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['year'] > '0') {
echo $_smarty_tpl->tpl_vars['wines']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['year'];
}?> <?php echo $_smarty_tpl->tpl_vars['wines']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['name'];
if ($_smarty_tpl->tpl_vars['wines']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['size'] > '0') {?> (<?php echo $_smarty_tpl->tpl_vars['wines']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['size'];?>
ml)<?php }?> : 
<span class="trade_winery_pdf">
<span style="vertical-align:0px;margin-right:4px;">PDF File</span>
<img  style="position:relative;top:8px;" src="/img/all/pdficon_large.png" alt="PDF icon" />
</span></a>
<?php } else { ?>
&bull;&nbsp;&nbsp;<a href="/wine/<?php echo $_smarty_tpl->tpl_vars['wines']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['vint_id'];?>
/" title="<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
 <?php echo $_smarty_tpl->tpl_vars['wines']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['name'];?>
 <?php if ($_smarty_tpl->tpl_vars['wines']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['year'] > '0') {
echo $_smarty_tpl->tpl_vars['wines']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['year'];
}?>"><?php if ($_smarty_tpl->tpl_vars['wines']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['year'] > '0') {
echo $_smarty_tpl->tpl_vars['wines']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['year'];
}?> <?php echo $_smarty_tpl->tpl_vars['wines']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['name'];
if ($_smarty_tpl->tpl_vars['wines']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['size'] > '0') {?> (<?php echo $_smarty_tpl->tpl_vars['wines']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['size'];?>
ml)<?php }?></a>
<?php }?>
<br/>
<?php
}
}
if ($__section_bit_0_saved) {
$_smarty_tpl->tpl_vars['__smarty_section_bit'] = $__section_bit_0_saved;
}
}?>
</article>
<?php $_smarty_tpl->_assignInScope('head_title', ('Trade - ').($_smarty_tpl->tpl_vars['name']->value));
?>

<?php } else { ?>

<article id="trade_wineries">
<?php if ($_smarty_tpl->tpl_vars['price_list_url']->value) {?> 
<div class="some_space2">
<a href="<?php echo $_smarty_tpl->tpl_vars['price_list_url']->value;?>
" title="Price List" target="_blank">Download Price List
<span class="trade_winery_pdf">
<span style="vertical-align:0px;margin-right:4px;">PDF File</span>
<img  style="position:relative;top:8px;" src="/img/all/pdficon_large.png" alt="PDF icon" />
</span></a>
</div>
<?php }?>
<header>
<h1 title="Trade - Our Wineries">Trade - Our Wineries</h1>
</header>
<?php
$__section_c_1_saved = isset($_smarty_tpl->tpl_vars['__smarty_section_c']) ? $_smarty_tpl->tpl_vars['__smarty_section_c'] : false;
$__section_c_1_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['ncc']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_c_1_total = $__section_c_1_loop;
$_smarty_tpl->tpl_vars['__smarty_section_c'] = new Smarty_Variable(array());
if ($__section_c_1_total != 0) {
for ($__section_c_1_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_c']->value['index'] = 0; $__section_c_1_iteration <= $__section_c_1_total; $__section_c_1_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_c']->value['index']++){
?>
<h2><a href="/regions/<?php echo $_smarty_tpl->tpl_vars['ncc']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_c']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_c']->value['index'] : null)]['web_name'];?>
/" title="<?php echo $_smarty_tpl->tpl_vars['ncc']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['full_name'];?>
"><?php echo $_smarty_tpl->tpl_vars['ncc']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_c']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_c']->value['index'] : null)]['full_name'];?>
:</a></h2>
<div>
<?php
$__section_w_2_saved = isset($_smarty_tpl->tpl_vars['__smarty_section_w']) ? $_smarty_tpl->tpl_vars['__smarty_section_w'] : false;
$__section_w_2_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['nwys']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_w_2_total = $__section_w_2_loop;
$_smarty_tpl->tpl_vars['__smarty_section_w'] = new Smarty_Variable(array());
if ($__section_w_2_total != 0) {
for ($__section_w_2_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_w']->value['index'] = 0; $__section_w_2_iteration <= $__section_w_2_total; $__section_w_2_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_w']->value['index']++){
if ($_smarty_tpl->tpl_vars['nwys']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_w']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_w']->value['index'] : null)]['c_id'] == $_smarty_tpl->tpl_vars['ncc']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_c']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_c']->value['index'] : null)]['c_id']) {?>
<a href="/trade/<?php echo $_smarty_tpl->tpl_vars['nwys']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_w']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_w']->value['index'] : null)]['web_name'];?>
/" title="<?php echo $_smarty_tpl->tpl_vars['nwys']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_w']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_w']->value['index'] : null)]['name'];?>
"><?php echo $_smarty_tpl->tpl_vars['nwys']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_w']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_w']->value['index'] : null)]['name'];?>
 </a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<?php }
}
}
if ($__section_w_2_saved) {
$_smarty_tpl->tpl_vars['__smarty_section_w'] = $__section_w_2_saved;
}
?>
</div>
<?php if ($_smarty_tpl->tpl_vars['ncc']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_c']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_c']->value['index'] : null)]['web_name'] == "austria") {?>
<span style="vertical-align:50%;">Map of Austria:&nbsp;</span>
<a href="/img/regions/austria_map.jpg" target="_blank"><img style="width:50px;" src="/img/regions/austria_map.jpg" alt="Austria Map" /></a>
<?php } elseif ($_smarty_tpl->tpl_vars['ncc']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_c']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_c']->value['index'] : null)]['web_name'] == "croatia") {?>
<span style="vertical-align:50%;">Map of Croatia:&nbsp;</span>
<a href="/img/regions/croatia_map.jpg" target="_blank"><img  style="width:50px;" src="/img/regions/croatia_map.jpg" alt="Croatia Map" /></a>
<?php } elseif ($_smarty_tpl->tpl_vars['ncc']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_c']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_c']->value['index'] : null)]['web_name'] == "slovenia") {?>
<span style="vertical-align:50%;">Map of Slovenia:&nbsp;</span>
<a href="/img/regions/slovenia_map.jpg" target="_blank"><img  style="width:50px;" src="/img/regions/slovenia_map.jpg" alt="Slovenia Map" /></a>
<?php } elseif ($_smarty_tpl->tpl_vars['ncc']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_c']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_c']->value['index'] : null)]['web_name'] == "hungary") {?>
<span style="vertical-align:50%;">Map of Hungary:&nbsp;</span>
<a href="/img/regions/hungary_map.jpg" target="_blank"><img  style="width:50px;" src="/img/regions/hungary_map.jpg" alt="Hungary Map" /></a>
<br />
<div style="margin:12px 0px;">
<span style="vertical-align:20px;margin-right:4px;"><a href="/pdf/Tokaji_Page.pdf" target="_blank">Tokaj Presentation</a></span>
<img  style="position:relative;top:-6px;" src="/img/all/pdficon_large.png" alt="PDF icon" />
<br />
<span style="vertical-align:20px;margin-right:4px;"><a href="/pdf/Somlo_Page.pdf" target="_blank">Somlo Presentation</a></span>
<img  style="position:relative;top:-6px;" src="/img/all/pdficon_large.png" alt="PDF icon" />
</div>	
<?php }
}
}
if ($__section_c_1_saved) {
$_smarty_tpl->tpl_vars['__smarty_section_c'] = $__section_c_1_saved;
}
?>
</article>

<div class="clean"></div>
<?php $_smarty_tpl->_assignInScope('head_title', 'Trade - Our Wineries');
}
}
}
