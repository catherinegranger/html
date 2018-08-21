<?php
/* Smarty version 3.1.30, created on 2018-05-01 03:31:53
  from "/var/www/html/smarty/templates/print/pages/techsheet.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5ae7dfa9028b65_91715029',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bc87cf3ce2d8b51cf87ce9902b963b4c1428db25' => 
    array (
      0 => '/var/www/html/smarty/templates/print/pages/techsheet.tpl',
      1 => 1525145503,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ae7dfa9028b65_91715029 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div id="techsheet">

<div class="techsheet_main">

<p class="nowrap">
<h1><?php if ($_smarty_tpl->tpl_vars['year']->value > 0) {
echo $_smarty_tpl->tpl_vars['year']->value;?>
 <?php }
echo $_smarty_tpl->tpl_vars['winery_name']->value;?>
 <?php echo $_smarty_tpl->tpl_vars['vintage_name']->value;?>
</h1>
<h2 class="region_subheader"><?php echo $_smarty_tpl->tpl_vars['appellation']->value;?>
, <?php echo $_smarty_tpl->tpl_vars['country_name']->value;?>
</h2>
</p>
<div class="inner_techsheet_main">
<div class="inner_techsheet_left">
<p class="top_paragraph"><span class="big_blue"><?php echo $_smarty_tpl->tpl_vars['first_letter']->value;?>
</span><?php echo $_smarty_tpl->tpl_vars['introduction']->value;?>

</p>
<?php if ($_smarty_tpl->tpl_vars['vineyards']->value) {?>
<h3>VINEYARDS</h3>
<p><?php echo $_smarty_tpl->tpl_vars['vineyards']->value;?>

</p>
<?php }
if ($_smarty_tpl->tpl_vars['winemaking']->value) {?>
<h3>WINE MAKING</h3>
<p>
<?php echo $_smarty_tpl->tpl_vars['winemaking']->value;?>

</p>
<?php }?>
</div>
<div class="inner_techsheet_right">
<div class="inner_techsheet_middle_right">
<div class="techsheet_bottle_img">
<div class="inner_box"><img src="<?php echo $_smarty_tpl->tpl_vars['bottle_img_name']->value;?>
" alt="<?php echo $_smarty_tpl->tpl_vars['year']->value;?>
 <?php echo $_smarty_tpl->tpl_vars['winery_name']->value;?>
 <?php echo $_smarty_tpl->tpl_vars['vintage_name']->value;?>
" /></div>
</div>
</div>
<div class="inner_techsheet_right_right">
<?php if ($_smarty_tpl->tpl_vars['winemaking2']->value) {?>
<p><?php echo $_smarty_tpl->tpl_vars['winemaking2']->value;?>
</p>
<?php }?>
<h3>NOTES &amp; PAIRINGS</h3>
<p><?php echo $_smarty_tpl->tpl_vars['notespairings']->value;?>

</p>
<h3>ANALYTICS &amp; PRONUNCIATION</h3>
<p>
<b>PRODUCER</b>: <?php echo $_smarty_tpl->tpl_vars['winery_name']->value;?>
 <?php if ($_smarty_tpl->tpl_vars['winery_phonetic_name']->value) {?>(<?php echo $_smarty_tpl->tpl_vars['winery_phonetic_name']->value;?>
)<?php }?>
<br><b>APPELLATION</b>: <?php echo $_smarty_tpl->tpl_vars['appellation']->value;?>
 <?php if ($_smarty_tpl->tpl_vars['winery_phonetic_appellation']->value) {?>(<?php echo $_smarty_tpl->tpl_vars['winery_phonetic_appellation']->value;?>
)<?php }
if ($_smarty_tpl->tpl_vars['year']->value > 0) {?><br><b>VINTAGE</b>: <?php echo $_smarty_tpl->tpl_vars['year']->value;
}?>
<br><b>GRAPE COMPOSITION</b>: <?php echo $_smarty_tpl->tpl_vars['composition']->value;?>

<?php if ($_smarty_tpl->tpl_vars['climate']->value) {?>
<br><b>CLIMATE</b>: <?php echo $_smarty_tpl->tpl_vars['climate']->value;?>

<?php }
if ($_smarty_tpl->tpl_vars['soils']->value) {?>
<br><b>SOILS</b>: <?php echo $_smarty_tpl->tpl_vars['soils']->value;?>

<?php }
if ($_smarty_tpl->tpl_vars['exposure']->value) {?>
<br><b>EXPOSURE</b>: <?php echo $_smarty_tpl->tpl_vars['exposure']->value;?>

<?php }
if ($_smarty_tpl->tpl_vars['aging']->value) {?>
<br><b>MACERATION & AGING</b>: <?php echo $_smarty_tpl->tpl_vars['aging']->value;?>

<?php }
if ($_smarty_tpl->tpl_vars['alcohol']->value) {?>
<br><b>ALCOHOL</b>: <?php echo $_smarty_tpl->tpl_vars['alcohol']->value;?>
%
<?php }
if ($_smarty_tpl->tpl_vars['residual_sugar']->value) {?>
<br><b>RESIDUAL SUGAR</b>: <?php echo $_smarty_tpl->tpl_vars['residual_sugar']->value;?>
 g/l
<?php }
if ($_smarty_tpl->tpl_vars['acidity']->value) {?>
<br><b>ACIDITY</b>: <?php echo $_smarty_tpl->tpl_vars['acidity']->value;?>
 g/l
<?php }?>
</p>
</div>
</div>

<div class="techsheet_map_block">
<?php if ($_smarty_tpl->tpl_vars['map_file']->value) {?>
<img src="<?php echo $_smarty_tpl->tpl_vars['map_file']->value;?>
">
<?php }?>
</div>

</div>
<div id="techsheet_footer">
To order or get more information call or fax +1 (650) 941-4699.
<br>Blue Danube Wine Company
<br>PO Box 1011 | Los Altos, California 94023 | USA
<br><a href="http://www.bluedanubewine.com">www.bluedanubewine.com</a>
</div>
</div><?php }
}
