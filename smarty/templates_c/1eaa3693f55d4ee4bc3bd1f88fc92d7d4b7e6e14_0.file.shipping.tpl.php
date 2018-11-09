<?php
/* Smarty version 3.1.30, created on 2018-10-31 20:24:27
  from "/var/www/html/smarty/templates/pages/shipping.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5bda0f7b49c091_94403363',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1eaa3693f55d4ee4bc3bd1f88fc92d7d4b7e6e14' => 
    array (
      0 => '/var/www/html/smarty/templates/pages/shipping.tpl',
      1 => 1541017451,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5bda0f7b49c091_94403363 (Smarty_Internal_Template $_smarty_tpl) {
?>
<article id="shipping">
<h1>Shipping Information</h1>


<p>
We use professional wine shippers for packaging.  Our containers come in four different sizes:
<div class="bld">1 bottle - 3 bottles  –  up to 6 bottles  –  up to 12 bottles</div>
</p>
<p>
Due to recent UPS rate increases, we are raising our 1 bottle and 3 bottles shipping charges. We kindly request that you order a minimum of 3 bottles to make shipping more economical. 
</p>
<p>
Prices &amp; times for UPS Ground depend on the distance from the San Francisco Bay Area.
<br /> If you have other requirements, please <b>contact our Customer Service</b> at webshop @ bluedanubewine.com or +1 (650) 941-4699.
</p>
<p>
<b>Estimated shipping costs plus $<?php echo $_smarty_tpl->tpl_vars['adult_signature']->value;?>
 Adult Signature for each order</b>

<table cellpadding="5" cellspacing="0">
<tr>
<td>&nbsp;</td>
<td style="border:1px solid #aeaeae;">1 bottle</td>
<td style="border:1px solid #aeaeae;">3 bottles</td>
<td style="border:1px solid #aeaeae;">Up to 6 bottles</td>
<td style="border:1px solid #aeaeae;">Up to 12 bottles</td>
<td style="border:1px solid #aeaeae;">UPS Expected Shipping Time</td>
</tr>
<tr>
<td style="border:1px solid #aeaeae;">California</td>
<td style="border:1px solid #aeaeae;">$13</td>
<td style="border:1px solid #aeaeae;">$15</td>
<td style="border:1px solid #aeaeae;">$17</td>
<td style="border:1px solid #aeaeae;">$25</td>
<td style="border:1px solid #aeaeae;">1-2 business days</td>
</tr>
<tr>
<td style="border:1px solid #aeaeae;">Western US</td>
<td style="border:1px solid #aeaeae;">$15</td>
<td style="border:1px solid #aeaeae;">$18</td>
<td style="border:1px solid #aeaeae;">$20</td>
<td style="border:1px solid #aeaeae;">$30</td>
<td style="border:1px solid #aeaeae;">2-4 business days</td>
</tr>
<tr>
<td style="border:1px solid #aeaeae;">Midwest/East Coast</td>
<td style="border:1px solid #aeaeae;">$20</td>
<td style="border:1px solid #aeaeae;">$25</td>
<td style="border:1px solid #aeaeae;">$30</td>
<td style="border:1px solid #aeaeae;">$45</td>

<td style="border:1px solid #aeaeae;">3-5 business days</td>
</tr>
</table>
</p>
<p>
<ul class="bd_bullets">
<li>1 bottle is 750ml. Magnums (1.5L) count as 2 bottles.</li>
<li>All prices are for UPS Ground, faster service is available, please request a quote.</li>
<li>We only charge our actual cost for packaging materials and shipping fees.</li>
<li>We'll send you the tracking number at time of shipment.</li>
<li>We charge sales tax as applicable.</li>
<li>We generally ship twice a week, on Mondays and mid-week but avoid shipping wines right before the weekend.</li>
</ul>
</p>


<h2>Where We Ship To</h2>

<p>Due to new shipping policies from our shipping carrier, we can only ship to <?php echo $_smarty_tpl->tpl_vars['ship_states_string']->value;?>
</p>

<p>
If you live in a state that does not allow direct shipment of wine, you can give us an alternative shipping address in a state where direct shipping is allowed. Contact our customer service at webshop @ bluedanubewine.com or +1 (650) 941-4699 for more information.
</p>

<h2>Shipping Instructions</h2>

<p>
Use the "Special Instructions" text area of your order to inform us of any special shipping instructions.
</p>
<p>
If you indicate that your order is a gift, the packing list we include in the package will have no price information. You can also purchase from us a greeting card for $<?php echo $_smarty_tpl->tpl_vars['greeting_card']->value;?>
. Please enter your gift message in the "Personalised Message" text area of your order.</p>
<p>If the order is time critical or if the wines are intended for a special event, indicate the date you need the wines for. We'll do our best to have your order delivered on time.
</p>

<h2>Adult Signature</h2>
<p>
You have to be 21 and older to order and receive wine. An Adult Signature is required at time of delivery. We recommend shipping to a business address whenever possible where someone can sign at the time of delivery.
</p> 

<h2>Unfavorable Weather</h2>

<p>
Shipping during periods of extreme heat or cold can damage wine. Your wines will be shipped by us in perfect condition and any damage due to weather is not covered by UPS insurance, or guaranteed by us. Please contact our customer service at webshop @ bluedanubewine.com or +1 (650) 941-4699 and we will gladly store your wine.
</p>

<h2>Pick up your order at our location</h2>

<p>
Our default shipping method is UPS Ground but if you live in the San Francisco Bay Area, you can pick up your wines at our location in Los Altos Hills. To select this option, choose 'Pick Up Los Altos Hills' as your Shipping Method during checkout. For an alternative option, choose 'Please Contact Me' and we will send you an invoice to complete the purchase.
</p>
</article>

<?php $_smarty_tpl->_assignInScope('head_title', 'Shipping Policies');
?></p>
<?php }
}
