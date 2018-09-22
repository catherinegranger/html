<?php
/* Smarty version 3.1.30, created on 2018-09-12 18:11:00
  from "/var/www/html/smarty/templates/pages/billship.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5b9956b46127e4_42730159',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9e618df4ee55f1dc76c4e89a9fff72de20e3b63f' => 
    array (
      0 => '/var/www/html/smarty/templates/pages/billship.tpl',
      1 => 1536770821,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:modules/mod_succerrors.tpl' => 1,
  ),
),false)) {
function content_5b9956b46127e4_42730159 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_function_html_options')) require_once '/var/www/Smarty/libs/plugins/function.html_options.php';
?>
<table class="buyprocess">
<tr>
<td class="nowrap buyprocessCurrent">Billing & Shipping</td>
<td>&mdash;</td>
<td>Review</td>
<td>&mdash;</td>
<td>Pay</td>
<td>&mdash;</td>
<td>Receipt</td>
</tr>
</table>

<h1>Enter Billing & Shipping</h1>

<?php $_smarty_tpl->_subTemplateRender("file:modules/mod_succerrors.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<?php if ($_smarty_tpl->tpl_vars['two']->value == 'shippingstate') {?>
<div><p>We CAN only ship to <?php echo $_smarty_tpl->tpl_vars['ship_states_string']->value;?>
<br/>If you live in a state that does not allow direct shipment of wine, you can give us an alternative shipping address in a state where direct shipping is allowed. Contact our Customer Service at webshop @ bluedanubewine.com or +1 (650) 941-4699 for more information.</p></div><br /><?php }?>


<?php echo '<script'; ?>
 type="text/javascript">
	function copyfields() {
		var myform = document.forms['billship'];
		var i;
		var tostr = "ship_";
		var names = new Array("first_name","last_name","address1","address2",
					  "city","state","zipcode","email","phone");
		for (i = 0; i < names.length; i++) {
			eval( "myform." + tostr + names[i] + ".value = myform." + names[i] + ".value");
		}
	}
<?php echo '</script'; ?>
>



<form action="/review/" method="post" id="billship">

<article class="bdgrid6first billship">
<h4>Billing Information:</h4>

<table >
<tr>
<td class="alignRight"><b>First Name:</b></td>
<td><input type="text" size="20" maxlength="48" name="first_name" value="<?php echo $_smarty_tpl->tpl_vars['recipient']->value['first_name'];?>
" /></td>
</tr>
<tr>
<td class="alignRight"><b>Last Name:</b></td>
<td><input type="text" size="20" maxlength="48" name="last_name" value="<?php echo $_smarty_tpl->tpl_vars['recipient']->value['last_name'];?>
" /></td>
</tr>
<tr><td></td><td colspan="1" class="alignLeft"><span class="pix13 bld">Adult signature required: we highly recommend<br> shipping to a business address.</span> <br><span class="itl">We cannot ship to PO Boxes.</span></td></tr>
<tr>
<td class="alignRight"><b>Address 1:</b></td>
<td><input type="text" size="20" maxlength="48" name="address1" value="<?php echo $_smarty_tpl->tpl_vars['recipient']->value['address1'];?>
" /></td>
</tr>

<tr><td></td><td colspan="1" class="alignLeft itl">Apartment, suite, unit, building, floor, etc</td></tr>
<tr>
<td class="alignRight"><b>Address 2:</b></td>
<td><input type="text" size="20" maxlength="48" name="address2" value="<?php echo $_smarty_tpl->tpl_vars['recipient']->value['address2'];?>
" /></td>
</tr>

<tr>
<td class="alignRight"><b>City:</b></td>
<td><input type="text" size="20" maxlength="48" name="city" value="<?php echo $_smarty_tpl->tpl_vars['recipient']->value['city'];?>
" /></td>
</tr>
<tr>
<td class="alignRight"><b>State:</b></td>
<td><select name="state"><?php echo smarty_function_html_options(array('options'=>$_smarty_tpl->tpl_vars['states']->value,'selected'=>$_smarty_tpl->tpl_vars['recipient']->value['state']),$_smarty_tpl);?>
</select></td>
</tr>
<tr>
<td class="alignRight"><b>Zipcode:</b></td>
<td><input type="text" size="5" maxlength="5" name="zipcode" value="<?php echo $_smarty_tpl->tpl_vars['recipient']->value['zipcode'];?>
" /></td>
</tr>
<tr>
<td class="alignRight"><b>Email:</b></td>
<td><input type="text" size="20" maxlength="48" name="email" value="<?php echo $_smarty_tpl->tpl_vars['recipient']->value['email'];?>
" /></td>
</tr>
<tr>
<td class="alignRight"><b>Phone Number:</b></td>
<td><input type="text" size="20" maxlength="48" name="phone" value="<?php echo $_smarty_tpl->tpl_vars['recipient']->value['phone'];?>
" /></td>
</tr>
<tr>
<td class="alignRight"><b>Include Greeting Card:</b></td>
<?php if ($_smarty_tpl->tpl_vars['order']->value['include_card']) {?>
<td><input type="checkbox" name="include_card" value="include_card" checked > (Cost: <?php echo $_smarty_tpl->tpl_vars['greeting_card_cost']->value;?>
)</td>
<?php } else { ?>
<td><input type="checkbox" name="include_card" value="include_card"  > (Cost: <?php echo $_smarty_tpl->tpl_vars['greeting_card_cost']->value;?>
)</td>
<?php }?>
</tr>
<?php if ($_smarty_tpl->tpl_vars['order']->value['include_card']) {?>
<tr class="include_card toggleonbox">
<td class="alignRight"><span ><b>Personalised Message:</b></span></td>
<td><span ><textarea rows="5" cols="20" name="include_card_msg"><?php echo $_smarty_tpl->tpl_vars['order']->value['include_card_msg'];?>
</textarea></span></td>
</tr>
<?php } else { ?>
<tr class="include_card toggleoffbox">
<td class="alignRight"><span ><b>Personalised Message:</b></span></td>
<td><span ><textarea rows="5" cols="20" name="include_card_msg"><?php echo $_smarty_tpl->tpl_vars['order']->value['include_card_msg'];?>
</textarea></span></td>
</tr>
<?php }?>
<tr><td></td><td colspan="1" class="alignLeft"><span class="itl">In case of a gift, please indicate how to join gift recipient.</span></span></td></tr>
<?php if ($_smarty_tpl->tpl_vars['order']->value['include_card']) {?>
<tr>
<td class="alignRight"><b>Special Instructions:</b></td>
<td><textarea rows="3" cols="20" name="instructions"><?php echo $_smarty_tpl->tpl_vars['order']->value['instructions'];?>
</textarea></td>
</tr>
<?php } else { ?>
<tr>
<td class="alignRight"><b>Special Instructions:</b></td>
<td><textarea rows="3" cols="20" name="instructions"><?php echo $_smarty_tpl->tpl_vars['order']->value['instructions'];?>
</textarea></td>
</tr>
<?php }?>
</table>
</article>

<article class="bdgrid6last billship">
<h4>Shipping Information: &nbsp;<input type="checkbox" name="cpychk" onclick="if (this.checked) copyfields();" /> <span class="billship_arial pix12"><a href="javascript:copyfields();">Same as Billing Address</a></span></h4>
<table>
<tr>
<td style="width:40%;" class="alignRight"><b>First Name:</b></td>
<td style="width:60%;"><input type="text" size="20" maxlength="48" name="ship_first_name" value="<?php echo $_smarty_tpl->tpl_vars['order']->value['first_name'];?>
" /></td>
</tr>
<tr>
<td class="alignRight"><b>Last Name:</b></td>
<td><input type="text" size="20" maxlength="48" name="ship_last_name" value="<?php echo $_smarty_tpl->tpl_vars['order']->value['last_name'];?>
"  /></td>
</tr>
<tr><td></td><td colspan="1" class="alignLeft"><span class="pix13 bld">Adult signature required: we highly recommend shipping to a business address.</span> <br><span class="itl">We cannot ship to PO Boxes.</span></td></tr>
<tr>
<td class="alignRight"><b>Address 1:</b></td>
<td><input type="text" size="20" maxlength="48" name="ship_address1" value="<?php echo $_smarty_tpl->tpl_vars['order']->value['address1'];?>
" /></td>
</tr>
<tr><td></td><td colspan="1" class="alignLeft itl">Apartment, suite, unit, building, floor, etc</td></tr>
<tr>
<td class="alignRight"><b>Address 2:</b><br /></td>
<td><input type="text" size="20" maxlength="48" name="ship_address2" value="<?php echo $_smarty_tpl->tpl_vars['order']->value['address2'];?>
" /></td>
</tr>

<tr>
<td class="alignRight"><b>City:</b></td>
<td><input type="text" size="20" maxlength="48" name="ship_city" value="<?php echo $_smarty_tpl->tpl_vars['order']->value['city'];?>
" /></td>
</tr>
<tr>
<td class="alignRight"><b>State:</b></td>
<td><select name="ship_state"><?php echo smarty_function_html_options(array('options'=>$_smarty_tpl->tpl_vars['states']->value,'selected'=>$_smarty_tpl->tpl_vars['order']->value['state']),$_smarty_tpl);?>
</select><span class="pix16 bld"> *</span></td>
</tr>
<tr><td></td><td colspan="1" class="alignLeft itl">Please select the shipping state</td></tr>
<tr>
<td class="alignRight"><b>Zipcode:</b></td>
<td><input type="text" size="5" maxlength="5" name="ship_zipcode" value="<?php echo $_smarty_tpl->tpl_vars['order']->value['zipcode'];?>
" /></td>
</tr>
<tr>
<td class="alignRight"><b>Email:</b></td>
<td><input type="text" size="20" maxlength="48" name="ship_email" value="<?php echo $_smarty_tpl->tpl_vars['order']->value['email'];?>
" /></td>
</tr>
<tr>
<td class="alignRight"><b>Phone Number:</b></td>
<td><input type="text" size="20" maxlength="48" name="ship_phone" value="<?php echo $_smarty_tpl->tpl_vars['order']->value['phone'];?>
" /></td>
</tr>
<tr>
<td class="alignRight"><b>Shipping Method:</b></td>
<td class="nowrap"><select name="ship_method"><?php echo smarty_function_html_options(array('options'=>$_smarty_tpl->tpl_vars['shipping_methods']->value,'selected'=>$_smarty_tpl->tpl_vars['order']->value['shipping_method']),$_smarty_tpl);?>
</select><span class="bld pix16"> **</span></td>
</tr>
<tr>
<td class="alignRight"><b>Needed By:</b></td>
<td><textarea rows="1" cols="20" name="need_by_date"><?php echo $_smarty_tpl->tpl_vars['order']->value['need_by_date'];?>
</textarea></td>
</tr>
<tr><td></td><td colspan="1" class="alignLeft itl">View our <a href="/shipping/" target="_blank">Shipping Information</a> for shipping time.</td></tr>
<tr>
<td colspan="2">
<div class="billshipcheckout" id="submitIt">
<button type="submit" title="Continue Checkout" name="do_checkout" class="btn btn-sm btn-primary">Continue Checkout</button>
</div>
<div class="alignCenter bigError border1" style="margin-top:5px;display:none;" id="careful">Your order is being processed by our system.<br /><b>DO NOT</b> click Refresh or Back in your browser</div></td>
</tr>
</table>
</article>


<?php echo '<script'; ?>
 type="text/javascript">
	function changeOut () {
		document.getElementById('careful').style.display="block";
		document.getElementById('submitIt').style.display="none";
	}
<?php echo '</script'; ?>
>

</form>

<div class="clean"></div>

<div class="billshipnotes">
<span class="bld pix16">*</span>Due to new shipping policies from our shipping carrier, we CANNOT ship to: <?php echo $_smarty_tpl->tpl_vars['no_ship_states_string']->value;?>


<br/><span class="bld pix16">**</span>Our default shipping method is UPS Ground. If you live in the San Francisco Bay Area, you can also pick up your wines at our location in Los Altos Hills. To select this option, choose 'Pick Up Los Altos Hills' as your Shipping Method. For an alternative option, choose 'Please Contact Me' and we will send you an invoice to complete the purchase.
</br /><span class="bld pix12">Unfavorable Weather:</span>
Shipping during periods of extreme heat or cold can damage wine. Your wines will be shipped by us in perfect condition and any damage due to weather is not covered by UPS insurance, or guaranteed by us. Please contact our Customer Service at webshop @ bluedanubewine.com or +1 (650) 941-4699 and we will gladly store your wine.
</br /><span class="bld pix12">Manage your home deliveries with UPS My Choice:</span>
Take control of your home deliveries by signing up for UPS My Choice today! As a UPS My Choice Member you can reschedule, redirect, or give authorization online for UPS to deliver packages without a signature when you won't be home to sign in person &mdash; that means no more missed deliveries. With two membership levels to choose from, UPS My Choice &mdash; which is free &mdash; and UPS My Choice Premium, you decide how much control you need when it comes to managing your UPS home deliveries. If this interests you please sign up at <a href="http://www.ups.com/mychoice/" target="_blank">http://www.ups.com/mychoice/</a>
</br /><span class="bld pix12">Non US Billing Address:</span>
Our online payment system supports only zipcodes in the US format. If you have a non US billing address, simply enter 99999 for the billing zipcode.
<div class="bld pix12"><a href="/shipping/" target="_blank">View our Shipping Information</a></div>
</div>

<?php $_smarty_tpl->_assignInScope('head_title', " - Billing & Shipping");
}
}
