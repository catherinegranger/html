<?php
/* Smarty version 3.1.30, created on 2018-07-16 23:13:18
  from "/var/www/html/smarty/templates/amn/pages/forecast.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5b4d268ee076a5_24323884',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5690aa7466d741c154732ca7e5dcc301cafdb082' => 
    array (
      0 => '/var/www/html/smarty/templates/amn/pages/forecast.tpl',
      1 => 1523659342,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b4d268ee076a5_24323884 (Smarty_Internal_Template $_smarty_tpl) {
?>
<h2>View Past 8 Quarters of Sales and 4 Quarters of Forecast</h2>

<table cellpadding="4" cellspacing="1">
<tr>
<td class="border1" style="width:35%;text-align:center;"><b>Product Name</b></td>
<td class="border1" style="width:5%;text-align:center;white-space:nowrap;"><b>Total</b></td>
<td class="border1" style="width:5%;text-align:center;"><b>Q01</b></td>
<td class="border1" style="width:5%;text-align:center;"><b>Q02</b></td>
<td class="border1" style="width:5%;text-align:center;"><b>Q03</b></td>
<td class="border1" style="width:5%;text-align:center;"><b>Q04</b></td>
<td class="border1" style="width:5%;text-align:center;"><b>Q11</b></td>
<td class="border1" style="width:5%;text-align:center;"><b>Q12</b></td>
<td class="border1" style="width:5%;text-align:center;"><b>Q13</b></td>
<td class="border1" style="width:5%;text-align:center;"><b>Q14</b></td>
<td class="border1 rdd" style="width:5%;text-align:center;"><i><b>Q21</b></i></td>
<td class="border1 rdd" style="width:5%;text-align:center;"><i><b>Q22</b></i></td>
<td class="border1 rdd" style="width:5%;text-align:center;"><i><b>Q23</b></i></td>
<td class="border1 rdd" style="width:5%;text-align:center;"><i><b>Q24</b></i></td>
</tr>
<?php
$__section_bit_0_saved = isset($_smarty_tpl->tpl_vars['__smarty_section_bit']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit'] : false;
$__section_bit_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['vintages']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_bit_0_total = $__section_bit_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_bit'] = new Smarty_Variable(array());
if ($__section_bit_0_total != 0) {
for ($__section_bit_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] = 0; $__section_bit_0_iteration <= $__section_bit_0_total; $__section_bit_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']++){
?>
<tr>
<td class="border1" style="white-space:nowrap;"><b><?php echo $_smarty_tpl->tpl_vars['vintages']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['product_name'];?>
</b></td>
<td class="border1" style="white-space:nowrap;text-align:right;"><b><?php echo $_smarty_tpl->tpl_vars['vintages']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['total_qty'];?>
</b></td>
<td class="border1" style="white-space:nowrap;text-align:right;"><b><?php echo $_smarty_tpl->tpl_vars['vintages']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['q01'];?>
</b></td>
<td class="border1" style="white-space:nowrap;text-align:right;"><b><?php echo $_smarty_tpl->tpl_vars['vintages']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['q02'];?>
</b></td>
<td class="border1" style="white-space:nowrap;text-align:right;"><b><?php echo $_smarty_tpl->tpl_vars['vintages']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['q03'];?>
</b></td>
<td class="border1" style="white-space:nowrap;text-align:right;"><b><?php echo $_smarty_tpl->tpl_vars['vintages']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['q04'];?>
</b></td>
<td class="border1" style="white-space:nowrap;text-align:right;"><b><?php echo $_smarty_tpl->tpl_vars['vintages']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['q11'];?>
</b></td>
<td class="border1" style="white-space:nowrap;text-align:right;"><b><?php echo $_smarty_tpl->tpl_vars['vintages']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['q12'];?>
</b></td>
<td class="border1" style="white-space:nowrap;text-align:right;"><b><?php echo $_smarty_tpl->tpl_vars['vintages']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['q13'];?>
</b></td>
<td class="border1" style="white-space:nowrap;text-align:right;"><b><?php echo $_smarty_tpl->tpl_vars['vintages']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['q14'];?>
</b></td>
<td class="border1 rdd" style="white-space:nowrap;text-align:right;"><i><b><?php echo $_smarty_tpl->tpl_vars['vintages']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['q21'];?>
</b></i></td>
<td class="border1 rdd" style="white-space:nowrap;text-align:right;"><i><b><?php echo $_smarty_tpl->tpl_vars['vintages']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['q22'];?>
</b></i></td>
<td class="border1 rdd" style="white-space:nowrap;text-align:right;"><i><b><?php echo $_smarty_tpl->tpl_vars['vintages']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['q23'];?>
</b></i></td>
<td class="border1 rdd" style="white-space:nowrap;text-align:right;"><i><b><?php echo $_smarty_tpl->tpl_vars['vintages']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bit']->value['index'] : null)]['q24'];?>
</b></i></td>
</tr>
<?php
}
}
if ($__section_bit_0_saved) {
$_smarty_tpl->tpl_vars['__smarty_section_bit'] = $__section_bit_0_saved;
}
?>
</table>
<?php }
}
