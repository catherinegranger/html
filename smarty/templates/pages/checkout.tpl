<article id="checkout">
<header>
<h1 class="noborder title="Checkout">Checkout</h1>
</header>

{include file="modules/mod_succerrors.tpl"}

<div class="checkout login_checkout">
<h4>Returning Customers:</h4>
<form action="/do_login/" method="post">
<table cellpadding="4" cellspacing="4">
<tr><td colspan="2">Welcome back! Please sign in to complete your order.</td></tr>
<tr>
<td class="alignRight"><label><b>Email:</b></label></td>
<td><input type='text' name='email' /></td>
</tr>
<tr>
<td class="alignRight"><label><b>Password:</b></label></td>
<td><input type='password' name='password' /></td>
</tr>
<tr>
<td class="alignRight"><b>&nbsp;</b></td>
<td><a href="/forgot_password/" title="Forgot Password">Forgot Password</a></td>
</tr>
<tr>
<td class="alignRight"><b>&nbsp;</b></td>
<td><button type="submit" title="Login" name="login" class="btn btn-sm btn-primary">Login &amp; Checkout</button></td>
</tr>
</table>
</form>
</div>

<div class="checkout guest_checkout">
<h4>Guest Checkout:</h4>
<form action="/do_checkout/" method="post">
<table cellpadding="4" cellspacing="4">
<tr><td colspan="1">If you're a new customer, you may checkout as a guest or sign up for an account to save time on your future purchases and view your order status and history.</td></tr>
<tr>
<td><button type="submit" title="Guest Checkout" name="guest_checkout" class="btn btn-sm btn-primary">Guest Checkout</button>
&nbsp; or &nbsp; <button type="submit" title="Sign Up" name="signup" class="btn btn-sm btn-primary">Sign Up</button>
</td>
</tr>
</table>
</form>
</div>
<div class="clean"></div>
<div class="some_space2">
<h4><b>Please Note:</b></h4> 
<ul class="bd_bullets">
<li>We can NOT ship to: {$no_ship_states_string}</li>
<li>To ship to Alaska and Hawaii, please contact us at webshop@bluedanubewine.com or +1 (650) 941-4699.</li>
</ul> 
</div>
</article>

{assign var="head_title" value=" - Checkout"}
