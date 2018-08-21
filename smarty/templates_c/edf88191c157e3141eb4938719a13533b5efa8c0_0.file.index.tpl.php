<?php
/* Smarty version 3.1.30, created on 2018-04-23 22:36:56
  from "/var/www/html/smarty/templates/print/index.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5ade6008e28140_69532659',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'edf88191c157e3141eb4938719a13533b5efa8c0' => 
    array (
      0 => '/var/www/html/smarty/templates/print/index.tpl',
      1 => 1523659342,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ade6008e28140_69532659 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta content="initial-scale=1.0" name="viewport">
<meta charset="utf-8">
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<meta name="keywords" content="wine, austrian wine, wine from austria, croatian wine, zlatan plavac, bibich wines, hungarian wine, montenegro wine, red wine, white wine, balkan wine, plavac, plavac mali" />
<meta name="description" content="" />
<title>Blue Danube Wine</title>
<?php if ($_smarty_tpl->tpl_vars['one']->value == 'giftcard_print') {?>

<style type="text/css">
html {
  -webkit-box-sizing: border-box;
  -moz-box-sizing: border-box;
  box-sizing: border-box;
}
*, *:before, *:after {
  -webkit-box-sizing: inherit;
  -moz-box-sizing: inherit;
  box-sizing: inherit;
}
</style>

<?php }?>
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Tangerine" type="text/css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Dancing+Script" type="text/css">
<link href="/css/techsheetstyle.css" rel="stylesheet" type="text/css" />
<?php echo '<script'; ?>
 src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"><?php echo '</script'; ?>
>
</head>

<?php if ($_smarty_tpl->tpl_vars['one']->value == 'pricelist' || $_smarty_tpl->tpl_vars['one']->value == 'pricebookny' || $_smarty_tpl->tpl_vars['one']->value == 'pricebookca') {?>
<body>
<?php } else { ?>
<body style="width:800px;border:0">
<?php }
if ($_smarty_tpl->tpl_vars['one']->value == 'giftcard_print') {?>
<div id="giftcard_print">
<div>
<img src="/img/all/header_giftcard.jpg" />
</div>
<?php echo $_smarty_tpl->tpl_vars['content']->value;?>
	
</div>
<?php } else {
echo $_smarty_tpl->tpl_vars['content']->value;?>

<?php }?>
</body>
</html>
<?php }
}
