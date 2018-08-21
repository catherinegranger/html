<?php
/* Smarty version 3.1.30, created on 2018-04-23 22:36:56
  from "/var/www/html/smarty/templates/print/pages/pricebookca.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5ade6008e0f226_22364382',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '15d1d38a2f410b713185d4faabbec737ed9aef0f' => 
    array (
      0 => '/var/www/html/smarty/templates/print/pages/pricebookca.tpl',
      1 => 1523659342,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ade6008e0f226_22364382 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_modifier_date_format')) require_once '/var/www/Smarty/libs/plugins/modifier.date_format.php';
?>
<div id="pricebook">

<div class="alignCenter break_after">
<a href="/img/all/round_logo_small_wave.png" title="Blue Danube Wine Co.">
<img class="bdwlogo" src="/img/all/round_logo_small_wave.png" alt="Blue Danube Wine Co." />
</a>
<?php echo $_smarty_tpl->tpl_vars['error']->value;?>

<div class="title">
California Wholesale Pricelist
<br><?php echo smarty_modifier_date_format(time(),"%B %Y");?>

</div><!-- /.title -->
<div class="company">
PO Box 1011
<br>Los Altos, California 94023 
<br>bluedanubewine.com
<br>sevenfifty.com/bluedanube
<br>(650) 941-4699
</div><!-- /.company -->
<img class="bdwmap" src="/img/all/bluedanubewine_map.jpg"/>
</div><!-- /.alignCenter -->
<div style="text-align:center;font-size:1.15em;">
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['country_names']->value, 'country_name', false, 'country_id', 'countries', array (
  'last' => true,
  'iteration' => true,
  'total' => true,
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['country_id']->value => $_smarty_tpl->tpl_vars['country_name']->value) {
$_smarty_tpl->tpl_vars['__smarty_foreach_countries']->value['iteration']++;
$_smarty_tpl->tpl_vars['__smarty_foreach_countries']->value['last'] = $_smarty_tpl->tpl_vars['__smarty_foreach_countries']->value['iteration'] == $_smarty_tpl->tpl_vars['__smarty_foreach_countries']->value['total'];
$__section_bit_0_saved = isset($_smarty_tpl->tpl_vars['__smarty_section_bit']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit'] : false;
$__section_bit_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['ncc']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_bit_0_total = $__section_bit_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_bit'] = new Smarty_Variable(array());
if ($__section_bit_0_total != 0) {
for ($__section_bit_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] = 0; $__section_bit_0_iteration <= $__section_bit_0_total; $__section_bit_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']++){
if ($_smarty_tpl->tpl_vars['country_id']->value == $_smarty_tpl->tpl_vars['ncc']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['c_id']) {
$_smarty_tpl->_assignInScope('country_webname', $_smarty_tpl->tpl_vars['ncc']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['web_name']);
}
}
}
if ($__section_bit_0_saved) {
$_smarty_tpl->tpl_vars['__smarty_section_bit'] = $__section_bit_0_saved;
}
?>
<a href="#<?php echo $_smarty_tpl->tpl_vars['country_webname']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['country_name']->value;?>
</a>
<?php if (!(isset($_smarty_tpl->tpl_vars['__smarty_foreach_countries']->value['last']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_countries']->value['last'] : null)) {?> &mdash; <?php }
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

</div>

<?php $_smarty_tpl->_assignInScope('previous_producer_name', 'Unknown Previous');
$_smarty_tpl->_assignInScope('producer_name', 'Unknown');
?>

<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['country_names']->value, 'country_name', false, 'country_id');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['country_id']->value => $_smarty_tpl->tpl_vars['country_name']->value) {
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['country_descriptions']->value, 'description', false, 'id2');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['id2']->value => $_smarty_tpl->tpl_vars['description']->value) {
if ($_smarty_tpl->tpl_vars['country_id']->value == $_smarty_tpl->tpl_vars['id2']->value) {
$_smarty_tpl->_assignInScope('country_description', $_smarty_tpl->tpl_vars['description']->value);
}
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

<?php
$__section_bit_1_saved = isset($_smarty_tpl->tpl_vars['__smarty_section_bit']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit'] : false;
$__section_bit_1_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['ncc']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_bit_1_total = $__section_bit_1_loop;
$_smarty_tpl->tpl_vars['__smarty_section_bit'] = new Smarty_Variable(array());
if ($__section_bit_1_total != 0) {
for ($__section_bit_1_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] = 0; $__section_bit_1_iteration <= $__section_bit_1_total; $__section_bit_1_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']++){
if ($_smarty_tpl->tpl_vars['country_id']->value == $_smarty_tpl->tpl_vars['ncc']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['c_id']) {
$_smarty_tpl->_assignInScope('country_webname', $_smarty_tpl->tpl_vars['ncc']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['web_name']);
}
}
}
if ($__section_bit_1_saved) {
$_smarty_tpl->tpl_vars['__smarty_section_bit'] = $__section_bit_1_saved;
}
?>
<a name="<?php echo $_smarty_tpl->tpl_vars['country_webname']->value;?>
">&nbsp;</a>

<?php
$__section_bit_2_saved = isset($_smarty_tpl->tpl_vars['__smarty_section_bit']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit'] : false;
$__section_bit_2_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['vintages']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_bit_2_total = $__section_bit_2_loop;
$_smarty_tpl->tpl_vars['__smarty_section_bit'] = new Smarty_Variable(array());
if ($__section_bit_2_total != 0) {
for ($__section_bit_2_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] = 0; $__section_bit_2_iteration <= $__section_bit_2_total; $__section_bit_2_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']++){
if ($_smarty_tpl->tpl_vars['vintages']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['country_id'] == $_smarty_tpl->tpl_vars['country_id']->value && $_smarty_tpl->tpl_vars['vintages']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['producer_name'] != "Specials") {
$_smarty_tpl->_assignInScope('producer_name', $_smarty_tpl->tpl_vars['vintages']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['producer_name']);
if ($_smarty_tpl->tpl_vars['producer_name']->value != $_smarty_tpl->tpl_vars['previous_producer_name']->value) {
if ($_smarty_tpl->tpl_vars['vintages']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['producer_webname'] == 'bibich' || $_smarty_tpl->tpl_vars['vintages']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['producer_webname'] == 'milos' || $_smarty_tpl->tpl_vars['vintages']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['producer_webname'] == 'kindzmarauli' || $_smarty_tpl->tpl_vars['vintages']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['producer_webname'] == 'apatsagi' || $_smarty_tpl->tpl_vars['vintages']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['producer_webname'] == 'eszterbauer' || $_smarty_tpl->tpl_vars['vintages']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['producer_webname'] == 'fuleky' || $_smarty_tpl->tpl_vars['vintages']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['producer_webname'] == 'kreinbacher' || $_smarty_tpl->tpl_vars['vintages']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['producer_webname'] == 'tinon' || $_smarty_tpl->tpl_vars['vintages']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['producer_webname'] == 'maurer' || $_smarty_tpl->tpl_vars['vintages']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['producer_webname'] == 'tokaj_nobilis2' || $_smarty_tpl->tpl_vars['vintages']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['producer_webname'] == 'tornai2' || $_smarty_tpl->tpl_vars['vintages']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['producer_webname'] == 'pfneiszl4' || $_smarty_tpl->tpl_vars['vintages']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['producer_webname'] == 'batic2' || $_smarty_tpl->tpl_vars['vintages']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['producer_webname'] == 'crnko2' || $_smarty_tpl->tpl_vars['vintages']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['producer_webname'] == 'santomas2' || $_smarty_tpl->tpl_vars['vintages']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['producer_webname'] == 'stoka2') {?>
<div style="font-size:0.5em;page-break-before: always;page-break-after: avoid;">&nbsp;</div>
<?php }?>
<div class="producer_group">
<div class="producer_name">
<a href="/winery/<?php echo $_smarty_tpl->tpl_vars['vintages']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['producer_webname'];?>
/" target="_blank" title="<?php echo $_smarty_tpl->tpl_vars['producer_name']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['producer_name']->value;?>
 &mdash; <?php echo $_smarty_tpl->tpl_vars['country_name']->value;?>
</a>
</div><!-- /.producer_name -->
<?php if ($_smarty_tpl->tpl_vars['vintages']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['producer_description']) {?>
<div class="producer_description_group">
<img class="producer_image" src="<?php echo $_smarty_tpl->tpl_vars['vintages']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['producer_image_file'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['producer_name']->value;?>
" />
<?php echo $_smarty_tpl->tpl_vars['vintages']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['producer_description'];?>

</div><!-- /.producer_description_group -->
<div class="clean"></div>
<?php }?>
</div><!-- /.producer_group -->
<?php }
$_smarty_tpl->_assignInScope('previous_producer_name', $_smarty_tpl->tpl_vars['vintages']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['producer_name']);
?>
<div class="vintage_group">
<div class="vintage_name">
<a href="/wine/<?php echo $_smarty_tpl->tpl_vars['vintages']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['vint_id'];?>
/" target="_blank" title="<?php echo $_smarty_tpl->tpl_vars['vintages']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['pretty_name'];?>
"><?php echo $_smarty_tpl->tpl_vars['vintages']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['pretty_name'];?>
</a>
</div>
<div class="vintage_description_group">
<div class="vintage_image">
<a href="<?php echo $_smarty_tpl->tpl_vars['vintages']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['image_file'];?>
" target="_blank" title="<?php echo $_smarty_tpl->tpl_vars['vintages']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['pretty_name'];?>
">
<img class="vintage_image" src="<?php echo $_smarty_tpl->tpl_vars['vintages']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['image_file'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['vintages']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['pretty_name'];?>
" />
</a>
</div>
<span class="vintage_region_p"><span class="bld">Region:</span> <?php echo $_smarty_tpl->tpl_vars['vintages']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['appellation'];?>
, <?php echo $_smarty_tpl->tpl_vars['vintages']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['country'];?>
</span>
<div class="vintage_description">
<span class="bld">Type:</span> <?php echo $_smarty_tpl->tpl_vars['vintages']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['product_subtype'];?>
 
<?php if ($_smarty_tpl->tpl_vars['vintages']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['product_style']) {?> &mdash; <?php echo $_smarty_tpl->tpl_vars['vintages']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['product_style'];
}
if ($_smarty_tpl->tpl_vars['vintages']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['features']) {?>, <?php echo $_smarty_tpl->tpl_vars['vintages']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['features'];?>
 <?php }?>
<br><span class="bld">Grapes:</span> <?php if ($_smarty_tpl->tpl_vars['vintages']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['producer_webname'] == 'kabaj' || $_smarty_tpl->tpl_vars['vintages']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['producer_webname'] == 'heimann') {?><span style="font-size:0.9em;"><?php }
echo $_smarty_tpl->tpl_vars['vintages']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['grapes'];
if ($_smarty_tpl->tpl_vars['vintages']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['producer_webname'] == 'kabaj' || $_smarty_tpl->tpl_vars['vintages']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['producer_webname'] == 'heimann') {?></span><?php }
if ($_smarty_tpl->tpl_vars['vintages']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['alcohol']) {?>
<br><span class="bld">Alcohol:</span> <?php echo $_smarty_tpl->tpl_vars['vintages']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['alcohol'];?>
%
<?php }
if ($_smarty_tpl->tpl_vars['vintages']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['residual_sugar']) {?>
<br><span class="bld">Residual Sugar:</span> <?php echo $_smarty_tpl->tpl_vars['vintages']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['residual_sugar'];?>

<?php }
if ($_smarty_tpl->tpl_vars['vintages']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['acidity']) {?>
<br><span class="bld">Acidity:</span> <?php echo $_smarty_tpl->tpl_vars['vintages']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['acidity'];?>

<?php }?>
<div class="vintage_pricing_group_p">
<span class="bld">Frontline:</span> $<?php echo $_smarty_tpl->tpl_vars['vintages']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['frontline'];?>

<?php if ($_smarty_tpl->tpl_vars['vintages']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['case']) {?>
<br><span class="bld">One case (<?php echo $_smarty_tpl->tpl_vars['vintages']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['case'];?>
):</span> $<?php echo $_smarty_tpl->tpl_vars['vintages']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['frontline_case'];?>

<?php }?>
</div><!-- /.vintage_pricing_group_p -->
</div><!-- /.vintage_description -->
</div><!-- /.vintage_description_group -->

<div class="vintage_pricing_group_l">
<span class="bld">Region:</span> <?php echo $_smarty_tpl->tpl_vars['vintages']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['appellation'];?>
, <?php echo $_smarty_tpl->tpl_vars['vintages']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['country'];?>

<div class="vintage_pricing">
<span class="bld">Frontline:</span> $<?php echo $_smarty_tpl->tpl_vars['vintages']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['frontline'];?>

<?php if ($_smarty_tpl->tpl_vars['vintages']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['case']) {?>
<br><span class="bld">One case (<?php echo $_smarty_tpl->tpl_vars['vintages']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['case'];?>
):</span> $<?php echo $_smarty_tpl->tpl_vars['vintages']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['frontline_case'];?>

<?php }?>
</div><!-- /.vintage_pricing -->
</div><!-- /.vintage_pricing_group_l -->

<div class="clean"></div>
</div><!-- /.vintage_group -->
<?php }
}
}
if ($__section_bit_2_saved) {
$_smarty_tpl->tpl_vars['__smarty_section_bit'] = $__section_bit_2_saved;
}
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>


<div class="term_group">
<span class="bld">Terms and Conditions:</span>  Net 30 days. 1.5% interest monthly for overdue accounts
<br>Free delivery in the Bay Area, Sacramento, LA, and San Diego: 3 cases or $300 minimum
<br>Broken/Mixed case charge: $6.00 - Prices subject to change without notice
</div><!-- /.term_group -->

</div><!-- /#pricebook -->

<?php }
}
