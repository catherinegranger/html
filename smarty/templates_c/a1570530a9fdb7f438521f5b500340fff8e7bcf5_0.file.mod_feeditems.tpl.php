<?php
/* Smarty version 3.1.30, created on 2018-04-17 03:11:35
  from "/var/www/html/smarty/templates/modules/mod_feeditems.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5ad565e7839f34_04195604',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a1570530a9fdb7f438521f5b500340fff8e7bcf5' => 
    array (
      0 => '/var/www/html/smarty/templates/modules/mod_feeditems.tpl',
      1 => 1523659342,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ad565e7839f34_04195604 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_modifier_truncate')) require_once '/var/www/Smarty/libs/plugins/modifier.truncate.php';
if ($_smarty_tpl->tpl_vars['feeditems_count']->value > 3) {?>
 <div class="bdfeeditems bdgridfeeditem4">
 <?php
$__section_bit_0_saved = isset($_smarty_tpl->tpl_vars['__smarty_section_bit']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit'] : false;
$__section_bit_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['feeditems']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_bit_0_total = min(($__section_bit_0_loop - 0), 4);
$_smarty_tpl->tpl_vars['__smarty_section_bit'] = new Smarty_Variable(array());
if ($__section_bit_0_total != 0) {
for ($__section_bit_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] = 0; $__section_bit_0_iteration <= $__section_bit_0_total; $__section_bit_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']++){
$_smarty_tpl->tpl_vars['__smarty_section_bit']->value['last'] = ($__section_bit_0_iteration == $__section_bit_0_total);
?>
 <div class="bdfeeditems_group bdgrid_group <?php if ((isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['last']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['last'] : null)) {?> bdgrid_group_last <?php }?>">
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
  
 <br><a class="btn btn-basic btn-xs" href="<?php echo $_smarty_tpl->tpl_vars['feeditems']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['link'];?>
/">Continue &#10142;</a>
 </div>
 <?php
}
}
if ($__section_bit_0_saved) {
$_smarty_tpl->tpl_vars['__smarty_section_bit'] = $__section_bit_0_saved;
}
?>
 </div>
<?php } else { ?>
 <?php if ($_smarty_tpl->tpl_vars['feeditems_count']->value == 3) {?>
  <div class="bdfeeditems bdgridfeeditem4">
  <?php
$__section_bit_1_saved = isset($_smarty_tpl->tpl_vars['__smarty_section_bit']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit'] : false;
$__section_bit_1_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['feeditems']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_bit_1_total = min(($__section_bit_1_loop - 0), 3);
$_smarty_tpl->tpl_vars['__smarty_section_bit'] = new Smarty_Variable(array());
if ($__section_bit_1_total != 0) {
for ($__section_bit_1_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] = 0; $__section_bit_1_iteration <= $__section_bit_1_total; $__section_bit_1_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']++){
$_smarty_tpl->tpl_vars['__smarty_section_bit']->value['last'] = ($__section_bit_1_iteration == $__section_bit_1_total);
?>
  <div class="bdfeeditems_group bdgrid_group">
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
  
  <br><a class="btn btn-basic btn-xs" href="<?php echo $_smarty_tpl->tpl_vars['feeditems']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['link'];?>
/">Continue &#10142;</a>
  </div>
  <?php
}
}
if ($__section_bit_1_saved) {
$_smarty_tpl->tpl_vars['__smarty_section_bit'] = $__section_bit_1_saved;
}
?>
  <div class="bdfeeditems_group bdgrid_group  bdgrid_group_last"> &nbsp; </div>
  </div>
 <?php } else { ?>
  <?php if ($_smarty_tpl->tpl_vars['feeditems_count']->value == 2) {?>
    <div class="bdfeeditems bdgridfeeditem4">
    <?php
$__section_bit_2_saved = isset($_smarty_tpl->tpl_vars['__smarty_section_bit']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit'] : false;
$__section_bit_2_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['feeditems']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_bit_2_total = min(($__section_bit_2_loop - 0), 2);
$_smarty_tpl->tpl_vars['__smarty_section_bit'] = new Smarty_Variable(array());
if ($__section_bit_2_total != 0) {
for ($__section_bit_2_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] = 0; $__section_bit_2_iteration <= $__section_bit_2_total; $__section_bit_2_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']++){
$_smarty_tpl->tpl_vars['__smarty_section_bit']->value['last'] = ($__section_bit_2_iteration == $__section_bit_2_total);
?>
    <div class="bdfeeditems_group bdgrid_group">
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
  
    <br><a class="btn btn-basic btn-xs" href="<?php echo $_smarty_tpl->tpl_vars['feeditems']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['link'];?>
/">Continue &#10142;</a>
    </div>
    <?php
}
}
if ($__section_bit_2_saved) {
$_smarty_tpl->tpl_vars['__smarty_section_bit'] = $__section_bit_2_saved;
}
?>
    <div class="bdfeeditems_group bdgrid_group"> &nbsp; </div>
    <div class="bdfeeditems_group bdgrid_group  bdgrid_group_last"> &nbsp; </div>
    </div>
  <?php } else { ?>
    <div class="bdfeeditems bdgridfeeditem4">
    <?php
$__section_bit_3_saved = isset($_smarty_tpl->tpl_vars['__smarty_section_bit']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit'] : false;
$__section_bit_3_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['feeditems']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_bit_3_total = min(($__section_bit_3_loop - 0), 1);
$_smarty_tpl->tpl_vars['__smarty_section_bit'] = new Smarty_Variable(array());
if ($__section_bit_3_total != 0) {
for ($__section_bit_3_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] = 0; $__section_bit_3_iteration <= $__section_bit_3_total; $__section_bit_3_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']++){
$_smarty_tpl->tpl_vars['__smarty_section_bit']->value['last'] = ($__section_bit_3_iteration == $__section_bit_3_total);
?>
    <div class="bdfeeditems_group bdgrid_group">
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
  
    <br><a class="btn btn-basic btn-xs" href="<?php echo $_smarty_tpl->tpl_vars['feeditems']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['link'];?>
/">Continue &#10142;</a>
    </div>
    <?php
}
}
if ($__section_bit_3_saved) {
$_smarty_tpl->tpl_vars['__smarty_section_bit'] = $__section_bit_3_saved;
}
?>
    <div class="bdfeeditems_group bdgrid_group"> &nbsp; </div>
    <div class="bdfeeditems_group bdgrid_group"> &nbsp; </div>
    <div class="bdfeeditems_group bdgrid_group  bdgrid_group_last"> &nbsp; </div>
    </div>
  <?php }?>
 <?php }
}?>

<div class="clean"></div>
<?php }
}
