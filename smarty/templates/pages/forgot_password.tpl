<article id="forgot_password">
<header>
<h1 title="Forgot Password">Forgot Password</h1>
</header>

{include file="modules/mod_succerrors.tpl"}

<div>
<p class="large">
Forgot your password? Please enter the email address you used when you created your account. 
<br>A new password will be emailed to the supplied address.
</p>
</div>

<form method="post" action="/email_password/">
<table cellpadding="4" cellspacing="4">
<tr>
<td class="alignRight"><label>Email:</label></td>
<td><input type='text' size="20" maxlength="60" name='email' /></td>
</tr>
<tr>
<td class="alignRight"><b>&nbsp;</b></td>
<td><button type="submit" title="Forgot Password" name="submit" class="btn btn-sm btn-primary">Submit</button></td>
</tr>
</table>
</form>

</article>

{assign var="head_title" value=" - Forgot Password"}
