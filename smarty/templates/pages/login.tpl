<article id="login">
<header>
<h1 class="noborder title="Login">Please Login</h1>
</header>

{include file="modules/mod_succerrors.tpl"}

<div class="some_space">
<ul class="bd_bullets">
<li>If you're a returning customer and previously signed up for an account at BlueDanubeWine.com, please login below.</li>
</ul>
</div>
<div class="some_space2">
<form action="/do_login/" method="post">
<table cellpadding="4" cellspacing="4">
<tr>
<td class="alignRight"><label><b>Email:</b></label></td>
<td><input type='email' size="20" maxlength="150" name='email' required /></td>
</tr>
<tr>
<td class="alignRight"><label><b>Password:</b></label></td>
<td><input type='password' size="20" maxlength="225" name='password' required /></td>
</tr>
<tr>
<td class="alignRight"><b>&nbsp;</b></td>
<td><a href="/forgot_password/" title="Forgot Password">Forgot Password</a></td>
</tr>
<tr>
<td class="alignRight"><b>&nbsp;</b></td>
<td><button type="submit" title="Login" name="login" class="btn btn-sm btn-primary">Login</button></td>
</tr>
</table>
</form>
</div>
<div class="some_space2">
<ul class="bd_bullets">
<li>If you're a new customer, <a href="/signup/" title="Sign Up">Sign Up</a> for an account. This will save you the time from entering Billing and Shipping information for future purchases and will give you access to current and past orders made with this account.</li>
</ul>
</div>

</article>

{assign var="head_title" value=" - Login"}
