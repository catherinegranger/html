<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html>

<head>
  <title>BDW Admin</title>
  <meta http-equiv="content-type" content="text/html;charset=utf-8" />
  <link href="/css/style.css" rel="stylesheet" type="text/css" />
  <link href="/css/admin.css" rel="stylesheet" type="text/css" />
</head>

<body>

  <div id="container">
 		
 		<div style="text-align:center;">
			{if $one == 'blanks'}<div class="error">You must fill out both fields.</div>{/if}
			{if $one == 'unknown'}<div class="error">This is an unknown combination of username and password.</div>{/if}
			<br />&nbsp;<br />
			<form action="/admin_login/" method="post">
			Username: <input type="text" name="username" maxlength="32" /><br />&nbsp;<br />
			Password: <input type="password" name="password" maxlength="32" /><br />&nbsp;<br />
			<input type="submit" value="Enter" class="sbt" />
			</form>
			<br />&nbsp;<br />
 		</div>

  </div>

</body>

</html>
