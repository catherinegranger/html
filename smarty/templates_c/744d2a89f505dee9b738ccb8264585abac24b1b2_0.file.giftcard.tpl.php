<?php
/* Smarty version 3.1.30, created on 2018-06-04 20:48:25
  from "/var/www/html/smarty/templates/pages/giftcard.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5b15ddd9b5f422_81912352',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '744d2a89f505dee9b738ccb8264585abac24b1b2' => 
    array (
      0 => '/var/www/html/smarty/templates/pages/giftcard.tpl',
      1 => 1528159678,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:modules/mod_succerrors.tpl' => 1,
  ),
),false)) {
function content_5b15ddd9b5f422_81912352 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_function_html_select_date')) require_once '/var/www/Smarty/libs/plugins/function.html_select_date.php';
?>
<article id="buy_giftcard">

<?php $_smarty_tpl->_subTemplateRender("file:modules/mod_succerrors.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<?php if ($_smarty_tpl->tpl_vars['recipient_view']->value) {?>

<?php if ($_smarty_tpl->tpl_vars['giftcard']->value['authenticated'] == 1) {?>
<div class="some_space2 alignCenter pix14">
Hello <?php echo $_smarty_tpl->tpl_vars['giftcard']->value['recipient_name'];?>
,
<p>Here is your $<?php echo $_smarty_tpl->tpl_vars['giftcard']->value['balance'];?>
 E-Gift Card from <?php echo $_smarty_tpl->tpl_vars['giftcard']->value['purchaser_name'];?>
</p>
</div>

<div>
<div class="buy_giftcard_half buy_giftcard_half1">
<center>
<div class=<?php if ($_smarty_tpl->tpl_vars['giftcard']->value['type'] == '0') {?>"giftcard_basic" <?php } elseif ($_smarty_tpl->tpl_vars['giftcard']->value['type'] == '1') {?>"giftcard_holiday" <?php } elseif ($_smarty_tpl->tpl_vars['giftcard']->value['type'] == '2') {?>"giftcard_birthday" <?php } elseif ($_smarty_tpl->tpl_vars['giftcard_type']->value == '3') {?>"giftcard_bottles"<?php }?>>
<div class="giftcard_text">
<h5 class="tangerine">
<div class="giftcard_subtext"><?php if ($_smarty_tpl->tpl_vars['giftcard']->value['type'] == '0') {?>Gift Card <?php } elseif ($_smarty_tpl->tpl_vars['giftcard']->value['type'] == '1') {?>Happy<br>Holidays <?php } elseif ($_smarty_tpl->tpl_vars['giftcard']->value['type'] == '2') {?>Happy<br>Birthday! <?php } elseif ($_smarty_tpl->tpl_vars['giftcard_type']->value == '3') {?><span class="nowrap">Gift Card</span><?php }?>
<div class="giftcard_balance">$<?php echo $_smarty_tpl->tpl_vars['giftcard']->value['balance'];?>
</div></div>
</h5>
</div>
<div class="giftcard_logo"><img src="/img/all/transparent_logo.png" alt="Blue Danube Wine"></div>
<div class="clean"></div>
</div>
<div class="giftcard_code">
E-Gift Card Number: <b><?php echo $_smarty_tpl->tpl_vars['giftcard']->value['code'];?>
</b>
</div>
</center>
</div>

<div class="buy_giftcard_half buy_giftcard_half2">
<div class="pix14">
<div class="message">Message from <?php echo $_smarty_tpl->tpl_vars['giftcard']->value['purchaser_name'];?>
:</div>
<div class="receive_giftcard_message"><?php echo $_smarty_tpl->tpl_vars['giftcard']->value['message'];?>
</div>
</div>
</div>
<div class="clean"></div>
<form method="post" action="/do_thankyou/">
<input type="hidden" name="giftcard_id" value="<?php echo $_smarty_tpl->tpl_vars['giftcard']->value['id'];?>
" />
<div class="some_space1 pix14 alignCenter">
Send a thank you note to <?php echo $_smarty_tpl->tpl_vars['giftcard']->value['purchaser_name'];?>
:
</div>
<div class="some_space2 alignCenter">
<textarea rows="3" cols="40" name="thank_message" required placeholder="Add your message..."></textarea>
</div>
<div class="some_space2 alignCenter"><button type="submit" title="Thank You" name="thank_you" class="btn btn-sm btn-primary">Send Thank You</button></div>
</form>
<div class="some_space2 pix14 alignCenter">
To redeem your E-Gift Card, <a href="/wines">shop online</a> and enter your E-Gift Card Number <b><?php echo $_smarty_tpl->tpl_vars['giftcard']->value['code'];?>
</b> at Checkout on the Review page.
</div>
<form method="post" action="/sort_wines/">
<div class="some_space2 alignCenter"><button type="submit" title="Shop Wines" name="shop" class="btn btn-sm btn-primary">Shop Wines</button></div>
</form>
<div class="some_space2">
<ul class="bd_bullets">
<li>Bookmark this page if you're not planning to redeem your E-Gift Card right now or to check the card balance.</li>
<li>
Your  E-Gift Card is redeemable for cash when the balance is less than $10 or as otherwise required by law.
</li>
<li>For any question regarding your E-Gift Card, please contact our Customer Service at webshop@bluedanubewine.com or +1 (650) 941-4699.</li>

</ul>
</div>
<?php } else { ?>
<h1 title="E-Gift Card Security">E-Gift Card Security</h1>
<form method="post" action="/do_authenticate_giftcard/">
<div class="some_space2 alignCenter">
Please enter your email to retrieve your E-Gift Card

<div class="some_space2 alignRight">
<center><table cellpadding="4" cellspacing="4" style="width:30%;">
<tr>
<td class="alignRight nowrap bld"><label for=remail>Email:</label></td>
<td><input id=remail name=remail type=email required /></td>
</tr>
</table></center>
<div class="alignCenter some_space2"><button type="submit" title="Authenticate" name="authenticate" class="btn btn-sm btn-primary">Retrieve E-Gift Card</button></div>

</div>
</div>
</form>
<?php }?>

<?php } else { ?>
<h1 title="Buy A E-Gift Card">Buy A E-Gift Card</h1>

<div class="some_space2">
<p>Need a last minute gift? Buy a E-Gift Card. It will be instantly delivered to your friends and family via email or schedule a delivery date of your choice.
</p>
</div>

<div>
<div class="buy_giftcard_half buy_giftcard_half1">
<center>
<div class=<?php if ($_smarty_tpl->tpl_vars['giftcard_type']->value == '0') {?>"giftcard_basic" <?php } elseif ($_smarty_tpl->tpl_vars['giftcard_type']->value == '1') {?>"giftcard_holiday" <?php } elseif ($_smarty_tpl->tpl_vars['giftcard_type']->value == '2') {?>"giftcard_birthday" <?php } elseif ($_smarty_tpl->tpl_vars['giftcard_type']->value == '3') {?>"giftcard_bottles"<?php }?>>
<div class="giftcard_text">
<h5 class="tangerine"><div class="giftcard_subtext"><?php if ($_smarty_tpl->tpl_vars['giftcard_type']->value == '0') {?>Gift Card <?php } elseif ($_smarty_tpl->tpl_vars['giftcard_type']->value == '1') {?>Happy<br>Holidays <?php } elseif ($_smarty_tpl->tpl_vars['giftcard_type']->value == '2') {?>Happy<br>Birthday! <?php } elseif ($_smarty_tpl->tpl_vars['giftcard_type']->value == '3') {?><span class="nowrap">Gift Card</span><?php }?></div></h5>
</div>
<div class="giftcard_logo"><img src="/img/all/transparent_logo.png" alt="Blue Danube Wine"></div>
<div class="clean"></div>
</div>
</center>
</div>

<div class="buy_giftcard_half buy_giftcard_half2" >
<div>
<table class="width70">
<form method="post" action="/giftcard/">
<tr>
<td class="alignRight nowrap bld"><label for=giftcard_type>Design:</label></td>
<td>
<select name="giftcard_type" onchange="this.form.submit()">
	<option value="0"<?php if ($_smarty_tpl->tpl_vars['giftcard_type']->value == '0') {?> selected<?php }?>>Basic</option>
	<option value="3"<?php if ($_smarty_tpl->tpl_vars['giftcard_type']->value == '3') {?> selected<?php }?>>Message in the Bottle</option>
	<option value="1"<?php if ($_smarty_tpl->tpl_vars['giftcard_type']->value == '1') {?> selected<?php }?>>Holidays</option>
	<option value="2"<?php if ($_smarty_tpl->tpl_vars['giftcard_type']->value == '2') {?> selected<?php }?>>Birthday</option>
</select> 
</tr>
</form>
<form action="/add_giftcard/" method="post">
<input type="hidden" name="giftcard_type" value="<?php echo $_smarty_tpl->tpl_vars['giftcard_type']->value;?>
" />
<tr>
<td style="width: 20%;text-align:right;"><b>Delivery Date:</b></td>
<td style="width: 80%;"><?php echo smarty_function_html_select_date(array('end_year'=>'+1'),$_smarty_tpl);?>
 </td>
</tr>
<tr>
<td class="alignRight nowrap bld"><label for=value>Gift Value: $</label></td>
<td><input id=value name=value type=text required placeholder="100 for example"/></td>
</tr>
<tr>
<td class="alignRight nowrap bld"><label for=rname>Recipient Name:</label></td>
<td><input id=rname name=rname type=text required placeholder="Mom, Mary, Nickname" /></td>
</tr>
<tr>
<td class="alignRight nowrap bld"><label for=remail>Recipient Email:</label></td>
<td><input id=remail name=remail type=email required placeholder="recipient_email@domain.com"/></td>
</tr>
<tr>
<td class="alignRight nowrap bld"><label for=pname>Purchaser Name:</label></td>
<td><input id=pname name=pname type=text required placeholder="Dad, John, Nickname" /></td>
</tr>
<tr>
<td class="alignRight nowrap bld"><label for=pemail>Purchaser Email:</label></td>
<td><input id=pemail name=pemail type=email required  placeholder="purchaser_email@domain.com" /></td>
</tr>
<tr>
<td colspan="2"><textarea rows="3" cols="40" name="message" placeholder="Add your message..."></textarea></td>
</tr>
</table>
</div>
</div>
<div class="clean"></div>

<div class="alignCenter"><button type="submit" title="Buy" name="buy" class="btn btn-sm btn-primary">Add to Cart</button></div>
</form>
</div>

<div class="some_space2">
<ul class="bd_bullets">
<li>The recipient will receive your E-Gift Card via email within minutes of your purchase or at a time of your choosing.</li>
<li>Click the "Print/Preview E-Gift Card" link on your order receipt and print the page out for hand delivery.</li>
<li>Please check to make sure the email address of the recipient of the  E-Gift Cards is correct. We are not responsible for E-Gift Cards that were not delivered because the email address of the recipient was incorrect.</li>
<li>In case you have confirmed that the email address of the recipient was correct, here are the most common reasons why an email delivery has failed: </li>
<ul class="bd_bullets">
<li>Message sent to the Spam folder</li>
<li>Message blocked by a blacklist filter</li>
<li>Mailbox full or quota exceeded</li>
<li>Invalid email address</li>
</ul>
<li>If you need further assistance, please contact our Customer Service at webshop@bluedanubewine.com or +1 (650) 941-4699.</li>
</ul>
</div>
<?php }?>
</article>

<?php $_smarty_tpl->_assignInScope('head_title', 'Gift Card');
?></p>
<?php }
}
