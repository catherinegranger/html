<?php
/* Smarty version 3.1.30, created on 2018-05-01 20:37:06
  from "/var/www/html/smarty/templates/amn/index.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5ae8cff272a211_95699466',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bda53f03aa09a3a622d37682afba783dca71cb91' => 
    array (
      0 => '/var/www/html/smarty/templates/amn/index.tpl',
      1 => 1525207013,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ae8cff272a211_95699466 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	
	<title>Blue Danube Wine: Admin</title>
	<meta http-equiv="content-type" content="text/html;charset=utf-8" />
	<meta name="keywords" content="wine, austrian wine, wine from austria, croatian wine, zlatan plavac, bibich wines, hungarian wine, montenegro wine, red wine, white wine, balkan wine, plavac, plavac mali" />
	<meta name="description" content="" />
	<link href="/css/newstyle.css" rel="stylesheet" type="text/css" />
	<link href="/css/admin.css" rel="stylesheet" type="text/css" />
	
	<?php echo '<script'; ?>
 src="/js/mootools.js" type="text/javascript"><?php echo '</script'; ?>
>

</head>

<body>
	
	<div id="menuAdmin">
		<a href="/amn/" class="menu">Admin Home</a>&nbsp;&nbsp;&nbsp;
		<a href="/logout/" class="menu">Logout</a>&nbsp;&nbsp;&nbsp;
		<a href="/amn/add_ucuser/" class="menu">Add User</a>&nbsp;&nbsp;&nbsp;
		<a href="/amn/ucusers/" class="menu">Users</a>&nbsp;&nbsp;&nbsp;
		<a href="/amn/orders/" class="menu">Orders</>&nbsp;&nbsp;&nbsp;
		<a href="/amn/customers/" class="menu">Customers</a>&nbsp;&nbsp;&nbsp;
		<a href="/print/pricebookca/" class="menu">CA Price List</a>&nbsp;&nbsp;&nbsp;
		<a href="/print/pricebookny/" class="menu">NY Price List</a>&nbsp;&nbsp;&nbsp;
		
		<br /><a href="/amn/add_discount/" class="menu">Add Discount</a>
                <a href="/amn/add_winery/" class="menu">Add Winery</a>&nbsp;&nbsp;&nbsp;
		<a href="/amn/wineries/active/" class="menu">Wineries</a>&nbsp;&nbsp;&nbsp;
		<a href="/amn/add_varietal/" class="menu">Add Varietal</a>&nbsp;&nbsp;&nbsp;
		<a href="/amn/varietals/" class="menu">Varietals</a>&nbsp;&nbsp;&nbsp;
		<a href="/amn/add_vintage/" class="menu">Add Vintage</a>&nbsp;&nbsp;&nbsp;
		<a href="/amn/vintages/active/" class="menu">Vintages</a>&nbsp;&nbsp;&nbsp;
		
		<br />
		<a href="/amn/add_feature/" class="menu">Add Feature</a>&nbsp;&nbsp;&nbsp;
		<a href="/amn/features/" class="menu">Features</a>&nbsp;&nbsp;&nbsp;
		<a href="/amn/add_resource/" class="menu">Add Resource</a>&nbsp;&nbsp;&nbsp;
		<a href="/amn/resources/" class="menu">Resources</a>&nbsp;&nbsp;&nbsp;
		<a href="/amn/add_news/" class="menu">Add News &amp; Events</a>&nbsp;&nbsp;&nbsp;
		<a href="/amn/news/" class="menu">News &amp; Events</a>&nbsp;&nbsp;&nbsp;

	</div>
	
	<div style="width:898px;margin-right:auto;margin-left:auto;border:1px solid #c7c8ff;padding:5px;">
	
		<?php echo $_smarty_tpl->tpl_vars['content']->value;?>
	
		
	</div>

</body>

</html>
<?php }
}
