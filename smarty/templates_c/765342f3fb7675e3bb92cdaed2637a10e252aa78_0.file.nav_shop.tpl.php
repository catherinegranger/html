<?php
/* Smarty version 3.1.30, created on 2018-04-17 02:06:38
  from "/var/www/html/smarty/templates/modules/nav_shop.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5ad556ae9e2c28_96438693',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '765342f3fb7675e3bb92cdaed2637a10e252aa78' => 
    array (
      0 => '/var/www/html/smarty/templates/modules/nav_shop.tpl',
      1 => 1523659342,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ad556ae9e2c28_96438693 (Smarty_Internal_Template $_smarty_tpl) {
?>
<nav class="bdgridnav3">
<div class="nav_shop_menu">
<i class="fa fa-bars fa-2x toggle-btn" data-toggle="collapse" data-target="#shop_menu_content"></i>
<div class="nav_shop_menu_list">
<ul id="shop_menu_content" class="nav_shop_menu_content collapse out">
<li><a  href="/wines/all/" title="Shop All"><span <?php if ($_smarty_tpl->tpl_vars['search_all']->value) {?>class="on"<?php }?>>Shop All</span></a></li>
<li data-toggle="collapse" data-target="#winetypes" <?php if (!$_smarty_tpl->tpl_vars['search_by_type']->value) {?>class="collapsed"<?php }?>>Wine Types<span class="arrow"></span></li>
<ul class="sub_shop_menu collapse <?php if ($_smarty_tpl->tpl_vars['search_by_type']->value) {?>in<?php }?>" id="winetypes">
<?php
$__section_bit_19_saved = isset($_smarty_tpl->tpl_vars['__smarty_section_bit']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit'] : false;
$__section_bit_19_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['wine_types']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_bit_19_total = $__section_bit_19_loop;
$_smarty_tpl->tpl_vars['__smarty_section_bit'] = new Smarty_Variable(array());
if ($__section_bit_19_total != 0) {
for ($__section_bit_19_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] = 0; $__section_bit_19_iteration <= $__section_bit_19_total; $__section_bit_19_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']++){
?>
<li <?php if ($_smarty_tpl->tpl_vars['wine_types']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['web_name'] == $_smarty_tpl->tpl_vars['search_criteria']->value) {?> class="active"<?php }?>><a href="/wines/<?php echo $_smarty_tpl->tpl_vars['wine_types']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['web_name'];?>
/" title="Shop <?php echo $_smarty_tpl->tpl_vars['wine_types']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['full_name'];?>
"><?php echo $_smarty_tpl->tpl_vars['wine_types']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['full_name'];?>
</a></li>
<?php
}
}
if ($__section_bit_19_saved) {
$_smarty_tpl->tpl_vars['__smarty_section_bit'] = $__section_bit_19_saved;
}
?>
</ul><!-- /#winetypes -->
<li data-toggle="collapse" data-target="#winestyles" <?php if (!$_smarty_tpl->tpl_vars['search_by_style']->value) {?>class="collapsed"<?php }?>>Wine Styles<span class="arrow"></span></li>
<ul class="sub_shop_menu collapse <?php if ($_smarty_tpl->tpl_vars['search_by_style']->value) {?>in<?php }?>" id="winestyles">
<?php
$__section_bit_20_saved = isset($_smarty_tpl->tpl_vars['__smarty_section_bit']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit'] : false;
$__section_bit_20_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['wine_styles']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_bit_20_total = $__section_bit_20_loop;
$_smarty_tpl->tpl_vars['__smarty_section_bit'] = new Smarty_Variable(array());
if ($__section_bit_20_total != 0) {
for ($__section_bit_20_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] = 0; $__section_bit_20_iteration <= $__section_bit_20_total; $__section_bit_20_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']++){
?>
<li <?php if ($_smarty_tpl->tpl_vars['wine_styles']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['web_name'] == $_smarty_tpl->tpl_vars['search_criteria']->value) {?> class="active"<?php }?>><a href="/wines/<?php echo $_smarty_tpl->tpl_vars['wine_styles']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['web_name'];?>
/" title="Shop <?php echo $_smarty_tpl->tpl_vars['wine_styles']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['full_name'];?>
"><?php echo $_smarty_tpl->tpl_vars['wine_styles']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['full_name'];?>
</a></li>
<?php
}
}
if ($__section_bit_20_saved) {
$_smarty_tpl->tpl_vars['__smarty_section_bit'] = $__section_bit_20_saved;
}
?>
</ul><!-- /#winestyles -->
<li data-toggle="collapse" data-target="#regions" <?php if (!$_smarty_tpl->tpl_vars['search_by_country']->value) {?>class="collapsed"<?php }?>>Regions<span class="arrow"></span></li>
<ul class="sub_shop_menu collapse <?php if ($_smarty_tpl->tpl_vars['search_by_country']->value) {?>in<?php }?>" id="regions">
<?php
$__section_bit_21_saved = isset($_smarty_tpl->tpl_vars['__smarty_section_bit']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit'] : false;
$__section_bit_21_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['ncc']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_bit_21_total = $__section_bit_21_loop;
$_smarty_tpl->tpl_vars['__smarty_section_bit'] = new Smarty_Variable(array());
if ($__section_bit_21_total != 0) {
for ($__section_bit_21_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] = 0; $__section_bit_21_iteration <= $__section_bit_21_total; $__section_bit_21_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']++){
?>
<li <?php if ($_smarty_tpl->tpl_vars['ncc']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['web_name'] == $_smarty_tpl->tpl_vars['search_criteria']->value) {?> class="active"<?php }?>><a href="/wines/<?php echo $_smarty_tpl->tpl_vars['ncc']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['web_name'];?>
/" title="Shop <?php echo $_smarty_tpl->tpl_vars['ncc']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['full_name'];?>
"><?php echo $_smarty_tpl->tpl_vars['ncc']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['full_name'];?>
</a></li>
<?php
}
}
if ($__section_bit_21_saved) {
$_smarty_tpl->tpl_vars['__smarty_section_bit'] = $__section_bit_21_saved;
}
?>
</ul><!-- /#regions -->
<li data-toggle="collapse" data-target="#varietals" <?php if (!$_smarty_tpl->tpl_vars['search_by_varietal']->value) {?>class="collapsed"<?php }?>>Varietals<span class="arrow"></span></li>
<ul class="sub_shop_menu collapse <?php if ($_smarty_tpl->tpl_vars['search_by_varietal']->value) {?>in<?php }?>" id="varietals">
<?php
$__section_bit_22_saved = isset($_smarty_tpl->tpl_vars['__smarty_section_bit']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit'] : false;
$__section_bit_22_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['varietals']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_bit_22_total = $__section_bit_22_loop;
$_smarty_tpl->tpl_vars['__smarty_section_bit'] = new Smarty_Variable(array());
if ($__section_bit_22_total != 0) {
for ($__section_bit_22_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] = 0; $__section_bit_22_iteration <= $__section_bit_22_total; $__section_bit_22_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']++){
?>
<li <?php if ($_smarty_tpl->tpl_vars['varietals']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['web_name'] == $_smarty_tpl->tpl_vars['search_criteria']->value) {?> class="active"<?php }?>><a href="/wines/<?php echo $_smarty_tpl->tpl_vars['varietals']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['web_name'];?>
/" title="Shop <?php echo $_smarty_tpl->tpl_vars['varietals']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['full_name'];?>
"><?php echo $_smarty_tpl->tpl_vars['varietals']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['full_name'];?>
</a></li>
<?php
}
}
if ($__section_bit_22_saved) {
$_smarty_tpl->tpl_vars['__smarty_section_bit'] = $__section_bit_22_saved;
}
?>
</ul><!-- /#varietals -->
</ul><!-- /.menu-list -->
</div><!-- /.menu-content -->
</div><!-- /.nav_shop_menu -->
</nav><?php }
}
