<!DOCTYPE html>
<html lang="en">
<head>
<meta content="initial-scale=1.0" name="viewport">
<meta charset="utf-8">
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<meta name="keywords" content="wine, austrian wine, wine from austria, croatian wine, zlatan plavac, bibich wines, hungarian wine, montenegro wine, red wine, white wine, balkan wine, plavac, plavac mali" />
<meta name="description" content="" />
<title>Blue Danube Wine</title>
{if $one == 'giftcard_print'}
{literal}
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
{/literal}
{/if}
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Tangerine" type="text/css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Dancing+Script" type="text/css">
<link href="/css/techsheetstyle.css" rel="stylesheet" type="text/css" />
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
</head>

{if $one == 'pricelist' || $one == 'pricebookny' || $one == 'pricebookca'}
<body>
{else}
<body style="width:800px;border:0">
{/if}
{if $one == 'giftcard_print'}
<div id="giftcard_print">
<div>
<img src="/img/all/header_giftcard.jpg" />
</div>
{$content}	
</div>
{else}
{$content}
{/if}
</body>
</html>
