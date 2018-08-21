<?php
/* Smarty version 3.1.30, created on 2018-06-04 23:51:37
  from "/var/www/html/smarty/templates/print/pages/giftcard_print.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5b15d08983c486_57991618',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '96ef9b7e2242d92bade4e64d258fb9da566b6c19' => 
    array (
      0 => '/var/www/html/smarty/templates/print/pages/giftcard_print.tpl',
      1 => 1523659342,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b15d08983c486_57991618 (Smarty_Internal_Template $_smarty_tpl) {
?>

<div class="giftcard_hello alignCenter pix14">
Hello <?php echo $_smarty_tpl->tpl_vars['giftcard']->value['recipient_name'];?>
,
<p>Here is your $<?php echo $_smarty_tpl->tpl_vars['giftcard']->value['balance'];?>
 E-Gift Card from <?php echo $_smarty_tpl->tpl_vars['giftcard']->value['purchaser_name'];?>
</p>
</div>

<div>
<div class="buy_giftcard_half">
<center>
<div class=<?php if ($_smarty_tpl->tpl_vars['giftcard']->value['type'] == '0') {?>"giftcard_basic" <?php } elseif ($_smarty_tpl->tpl_vars['giftcard']->value['type'] == '1') {?>"giftcard_holiday" <?php } elseif ($_smarty_tpl->tpl_vars['giftcard']->value['type'] == '2') {?>"giftcard_birthday" <?php } elseif ($_smarty_tpl->tpl_vars['giftcard']->value['type'] == '3') {?>"giftcard_bottles"<?php }?>>
<div class="giftcard_text">
<h5 class="tangerine">
<div class="giftcard_subtext"><?php if ($_smarty_tpl->tpl_vars['giftcard']->value['type'] == '0') {?>Gift Card <?php } elseif ($_smarty_tpl->tpl_vars['giftcard']->value['type'] == '1') {?>Happy<br>Holidays <?php } elseif ($_smarty_tpl->tpl_vars['giftcard']->value['type'] == '2') {?>Happy<br>Birthday! <?php } elseif ($_smarty_tpl->tpl_vars['giftcard']->value['type'] == '3') {?><span class="nowrap">Gift Card</span><?php }?>
<div class="giftcard_balance">$<?php echo $_smarty_tpl->tpl_vars['giftcard']->value['balance'];?>
</div></div>
</h5>
</div>
<div class="giftcard_logo"><img src="/img/all/transparent_logo.png" alt="Blue Danube Wine"></div>
<div class="clean"></div>
</div>
<div class="giftcard_code">
E-Gift Card Number: <b><?php echo $_smarty_tpl->tpl_vars['giftcard']->value['code'];?>

</div>
</center>
</div>

<div class="buy_giftcard_half">
<center>
<div class="pix14">
<div class="message">Message from <?php echo $_smarty_tpl->tpl_vars['giftcard']->value['purchaser_name'];?>
:</div>
<div class="receive_giftcard_message"><?php echo $_smarty_tpl->tpl_vars['giftcard']->value['message'];?>
</div>
</div>
</center>
</div>
<div class="receive_giftcard_info">
To redeem your E-Gift Card, shop our webstore and enter your E-Gift Card Number at Checkout.
<br>For any questions, contact us at webshop@bluedanubewine.com or +1 (707) 731-1376.
</div>



<?php $_smarty_tpl->_assignInScope('head_title', 'Print Gift Card');
?></p>
<?php }
}
