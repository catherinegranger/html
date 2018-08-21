<!DOCTYPE html>
<html lang="en">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta charset="utf-8">
<meta name="description" content="{if $head_desc}{$head_desc|truncate:180:'...'}{else}Blue Danube Wine imports wines from Austria, Bosnia Herzegovina, Croatia, Georgia, Hungary, Montenegro, and Slovenia to buy and distribute in the United States.{/if}" />
<meta name="keywords" content="wine, danube wines, austrian wines, croatian wines, georgian wines, hungarian wines, slovenian wines, montenegrin wines, central european wines, red wines, white wines, sweet wines, ice wines, tokaj, plavac mali, croatian zinfandel" />
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<meta name="y_key" content="189ad0ecc2edca13" />
<meta name="verify-v1" content="h0pM0WDwbtTannVQLIo5hxU3F2ojuhzmlPGacVZGsNw=" />
<meta name="msvalidate.01" content="DDBA606838644885844C3C20853B0C7E" />
<meta name="p:domain_verify" content="27491b5011806de5935059b98a498873"/>
<meta property="og:url" content="{$og_url}" /> 
<meta property="og:title" content="{$og_title}" /> 
<meta property="og:description" content="{$og_description}" />  
<meta property="og:image" content="{$og_image}" /> 
<title>Blue Danube Wine{if $head_title} - {$head_title}{/if}</title>

<link rel="stylesheet" href="/css/bootstrap.min.css" type="text/css">
<link rel="stylesheet" href="/css/bootstrap-theme.min.css" type="text/css">
<link rel="stylesheet" href="/css/font-awesome.min.css" type="text/css">
<link href="//cdn-images.mailchimp.com/embedcode/classic-081711.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="/css/bdstyle.css" type="text/css">
<link rel="alternate" href="/blog/feed/index.php" type="application/rss+xml" title="Blue Danube Wine Blog Feed">
<script type="text/javascript" src="/js/mootools.js"></script>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="/js/bootstrap.min.js"></script>

{literal}

<script type="text/javascript" src="/js/jquery.magnifier.js">
/***********************************************
* jQuery Image Magnify- (c) Dynamic Drive DHTML code library (www.dynamicdrive.com)
* This notice MUST stay intact for legal use
* Visit Dynamic Drive at http://www.dynamicdrive.com/ for this script and 100s more
***********************************************/
</script>


<script type="text/javascript">
	window.addEvent('domready', function(){});
</script>

<script type="text/javascript">
 jQuery(document).ready(function ($) {
        $('input[type="checkbox"]').click(function(){
            if($(this).attr("value")=="include_card"){
                $(".include_card").toggle();
            }
        });
    });
</script>

{/literal}

</head>
<body>

<!-- Google Analytics -->
{literal}
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-314963-2', 'bluedanubewine.com');
  ga('send', 'pageview');

</script>
{/literal}
<!-- End Google Analytics -->


<!-- Start of StatCounter Code -->
<script type="text/javascript">
sc_project=381182; 
sc_invisible=1; 
sc_partition=1; 
sc_security=""; 
</script>

<script type="text/javascript" src="http://www.statcounter.com/counter/counter.js"></script><noscript><div class="statcounter"><a title="web analytics" href="http://www.statcounter.com/" target="_blank"><img class="statcounter" src="http://c2.statcounter.com/381182/0//1/" alt="web analytics" /></a></div></noscript>
<!-- End of StatCounter Code -->


<header id="main_header">
<div class="followus_menu followus_colors followus_menu_header_l">
<ul>
    <li> <a href="http://www.facebook.com/BlueDanubeWine" title="facebook"><span class="fa-stack fa-lg"><i class="fa fa-circle fa-stack-2x"></i><i class="fa fa-facebook fa-stack-1x"></i></span></a></li>
    <li> <a href="https://twitter.com/bluedanubewine" title="twitter"><span class="fa-stack fa-lg"><i class="fa fa-circle fa-stack-2x"></i><i class="fa fa-twitter fa-stack-1x"></i></span></a></li>
    <li> <a href="https://instagram.com/bluedanubewine" title="instagram"><span class="fa-stack fa-lg"><i class="fa fa-circle fa-stack-2x"></i><i class="fa fa-instagram fa-stack-1x"></i></span></a></li>
    <li> <a href="https://plus.google.com/u/0/b/108870875968742784813/+BlueDanubeWine/posts" title="google+"><span class="fa-stack fa-lg"><i class="fa fa-circle fa-stack-2x"></i><i class="fa fa-google-plus fa-stack-1x"></i></span></a></li>
    </ul>
</div><!-- /.followus_menu_header_l -->
<div id="top_nav_l" class="topnav_header_l">
<form class="form-inline" action="/wines/" method="post">
<ul>
{if isset($smarty.session.userCakeUser)}
<li><span class="glyphicon glyphicon-user" aria-hidden="true"></span> <a href="/account/" title="My Account">My Account [{$smarty.session.userCakeUser.display_name}]</a></li>
{else}
<li><span class="glyphicon glyphicon-user" aria-hidden="true"></span> <a href="/login/" title="Login">Login</a></li>
<li><a href="/signup/" title="Sign Up">Sign Up</a></li>
{/if}
<li><a href="/cart/" title="My Cart"><img src="/img/all/blue_cart.jpg" alt="Shopping Cart" />My Cart
{if ($smarty.session.cart_qty > 0) && ($one != 'process')}[{$smarty.session.cart_qty}]{else}[0]{/if}</a></li>
{if isset($smarty.session.userCakeUser)}
{if ($smarty.session.cart_qty > 0) && ($one != 'process')}
<li><a href="/checkout/" title="Checkout">Checkout</a></li>
{/if}
<li><a href="/logout/" title="Logout">Logout</a></li>
{/if}
<li><span class="form-group"><input type="text" class="form-control input-sm" id="search" name="search" size="10" placeholder="Search..."><button type="button" class="btn btn-white btn-sm"><span class="glyphicon glyphicon-search" aria-hidden="true"></button></span></li>
</ul>
</form>
</div><!-- /#top_nav_l -->

<div id="top_nav_p">
<form class="form-inline" action="/wines/" method="post">
<ul>
{if isset($smarty.session.userCakeUser)}
<li><a href="/account/" title="My Account">My Account</a></li>
{else}
<li><a href="/login/" title="Login">Login</a></li>
<li><a href="/signup/" title="Sign Up">Sign Up</a></li>
{/if}
<li><a href="/cart/" title="My Cart">My Cart {if ($smarty.session.cart_qty > 0) && ($one != 'process')}[{$smarty.session.cart_qty}]{else}[0]{/if}</a></li>
{if ($smarty.session.cart_qty > 0) && ($one != 'process')}
<li><a href="/checkout/" title="Checkout">Checkout</a></li>
{/if}
{if isset($smarty.session.userCakeUser)}
<li><a href="/logout/" title="Logout">Logout</a></li>
{/if}
<li><input type="text" class="form-control input-sm" name="search" size="5" placeholder="Search Wines..."></li>
</ul>
</form>
</div><!-- /#top_nav_p -->

</header>

<div id="main_container">
<section id="main_section">

<div id="logonav_l">
<div class="bdgridnav2">
<a href="/" title="Blue Danube Wine"><img class="logoimg" src="/img/all/round_logo_small_wave.png" alt="Blue Danube Wine"></a>
</div>
<div class="bdgridcontent10">
<nav class="bdnav">
<ul>
<li><a href="/about/" title="About">About</a>
<ul>
<li><a href="/about/" title="About Us">About Us</a></li>
<li><a href="/team/" title="Our Team">Our Team</a></li>
<li><a href="/contact/" title="Contact Us">Contact Us</a></li>
</ul>
</li>
<li><a href="/wineries/" title="Wineries">Wineries</a>
<ul>
{section name=bit loop=$ncc}
<li><a href="/regions/{$ncc[bit].web_name}/" title="{$ncc[bit].full_name} Wines">{$ncc[bit].full_name}</a></li>
{/section}
</ul>
</li>
<li><a href="/blog/" title="Blog">Blog</a></li>
<li><a href="/news/" title="News &amp; Events">News &amp; Events</a>
<ul>
<li><a href="/news/" title="News">News &amp; Press</a></li>
<li><a href="/events/" title="Events">Events</a></li>
</ul>
</li>
</li>
<li><a href="/travel/" title="Travel">Travel</a>
<ul>
<li><a href="/travel/" title="Travel News">Travel News</a>
<li><a href="/travel/wine_tours_routes/" title="Wine Routes">Wine Tours &amp; Routes</a>
<li><a href="/travel/books_guides/" title="Books & Guides">Books &amp; Guides</a>
</ul>
</li>
<li><a href="/resources/" title="Resources">Resources</a>
<ul>
<li><a href="/resources/grape_varietals/" title="Grape Varietals">Grape Varietals</a></li>
<Li><a href="/resources/magazines/" title="Magazines">Magazines</a></li>
<li><a href="/resources/wine_links/" title="Wine Links">Wine Links</a></li>
<li><a href="/trade" title="For the Trade">For the Trade</a></li>
<li><a href="/resources/" title="All Resources">All Resources</a></li>
</ul>
</li>
<li><a href="/wines/" title="Shop">Shop</a>
<ul>
{section name=bit loop=$ncc}
<li><a href="/wines/{$ncc[bit].web_name}/" title="Shop {$ncc[bit].full_name} Wines">{$ncc[bit].full_name}</a></li>
{/section}
<li><a href="/wines/specials/" title="Special Offers">Special Offers</a></li>
<li><a href="/wines/samplers/" title="Gift Sets">Gift Sets</a></li>
<li><a href="/wines/bestsellers/" title="Best Sellers">Best Sellers</a></li>
<li><a href="/wines/" title="All Wines">All Wines</a></li>
</ul>
</li>
</ul>
</nav>
</div><!-- /.bdgridcontent10 -->
</div><!-- /.logonav_l -->


<nav class="main_navigation_p navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" title="Home" href="/"><img style="border:0;" src="/img/all/round_logo_small_wave.png" alt="Blue Danube Wine"> <span class="brand-text">Blue Danube Wine</span></a>
    </div>
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="active"><a href="/" title="Blue Danube Wine">Home</a></li>
        <li class="dropdown">
          <a href="/about/" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">About <span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="/about/" title="About Us">About Us</a></li>
            <li><a href="/team/" title="Our Team">Our Team</a></li>
            <li><a href="/contact/" title="Contact Us">Contact Us</a></li>
          </ul>
        </li>
        <li class="dropdown">
          <a href="/wineries/" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Wineries <span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            {section name=bit loop=$ncc}
            <li><a href="/regions/{$ncc[bit].web_name}/" title="{$ncc[bit].full_name} Wines">{$ncc[bit].full_name}</a></li>
            {/section}
          </ul>
        </li>
        <li><a href="/blog/" title="Blog">Blog</a></li>
        <li class="dropdown">
        <a href="/news/" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">News &amp; Events <span class="caret"></span></a>

          <ul class="dropdown-menu" role="menu">
          <li><a href="/news/" title="News">News &amp; Press</a></li>
          <li><a href="/events/" title="Events">Events</a></li>
          </ul>
       </li>
       <li class="dropdown">
          <a href="/travel/" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Travel <span class="caret"></span></a>
            <ul class="dropdown-menu" role="menu">
            <li><a href="/travel/" title="Travel News">Travel News</a></li>
	    <li><a href="/travel/wine_tours_routes/" title="Wine Routes">Wine Tours &amp; Routes</a>
	    <li><a href="/travel/books_guides/" title="Books & Guides">Books &amp; Guides</a>
          </ul>
       </li>
       <li class="dropdown">
          <a href="/resources/" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Resources <span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="/resources/grape_varietals/" title="Grape Varietals">Grape Varietals</a></li>
            <Li><a href="/resources/magazines/" title="Magazines">Magazines</a></li>
            <li><a href="/resources/wine_links/" title="Wine Links">Wine Links</a></li>
            <li><a href="/trade" title="For the Trade">For the Trade</a></li>
            <li><a href="/resources/" title="All Resources">All Resources</a></li>
          </ul>
        </li>
        <li class="dropdown">
          <a href="/wines/" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Shop <span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            {section name=bit loop=$ncc}
            <li><a href="/wines/{$ncc[bit].web_name}/" title="Shop {$ncc[bit].full_name} Wines">{$ncc[bit].full_name}</a></li>
            {/section}
            <li><a href="/wines/specials/" title="Special Offers">Special Offers</a></li>
            <li><a href="/wines/samplers/" title="Gift Sets">Gift Sets</a></li>
            <li><a href="/wines/bestsellers/" title="Best Sellers">Best Sellers</a></li>
            <li><a href="/wines/" title="All Wines">All Wines</a></li>
          </ul>
        </li>
      </ul>
   </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>

<div class="clean"></div>

{$content}


<footer id="main_footer">
<div class="footer_1">
<a href="/about/" title="About Us"><h3>About Us</h3></a>
<ul class="footer_menu">
<li><a href="/about/" title="About">About Us</a></li>
<li><a href="/team/" title="Team">Our Team</a></li>
<li><a href="/contact/" title="Contact">Contact Us</a></li>
<li> <a href="/wineries/" title="Blog">Wineries</a></li>
<li> <a href="/blog/" title="blog">Blog</a></li>
<li><a href="/news/" title="News & Events">News &amp; Events</a></li>
<li> <a href="/travel/" title="Travel">Travel</a></li>
<li> <a href="/resources/" title="Resources">Resources</a></li>
<li class="last"> <a href="/shipping/" title="Shipping">Shipping</a></li>
</ul>
</div><!-- /.footer_1 -->
<div class="between_footer1"></div>
<div class="footer_2">
<a href="/wines/" title="Shop"><h3>Shop</h3></a>
<ul class="footer_menu">
{section name=bit loop=$ncc}
<li><a href="/wines/{$ncc[bit].web_name}/" title="Shop {$ncc[bit].full_name} Wines">{$ncc[bit].full_name}</a></li>
{/section}
<li><a href="/wines/specials" title="Specials Offers">Specials</a></li>
<li class="last"><a href="/wines/samplers" title="Gift Sets">Gift Sets</a></li>
</ul>
</div><!-- /.footer_2 -->
<div class="between_footer2"></div>
<div class="footer_3">
<div class="div_Splus">
<h3>Follow Us</h3>
<ul class="footer_menu followus_colors">
<li>
<a href="http://www.facebook.com/BlueDanubeWine" title="facebook"><span class="fa-stack fa-lg"><i class="fa fa-circle fa-stack-2x"></i><i class="fa fa-facebook fa-stack-1x"></i></span></a><a href="http://www.facebook.com/BlueDanubeWine"> Find us on Facebook</a>
</li>
<li>
<a href="https://twitter.com/bluedanubewine" title="twitter"><span class="fa-stack fa-lg"><i class="fa fa-circle fa-stack-2x"></i><i class="fa fa-twitter fa-stack-1x"></i></span> Follow @BlueDanubeWine</a>
</li>
<li>
<a href="https://instagram.com/bluedanubewine"  title="instagram"><span class="fa-stack fa-lg"><i class="fa fa-circle fa-stack-2x"></i><i class="fa fa-instagram fa-stack-1x"></i></span> Follow us on Instagram</a>
</li>
<li class="last">
<a href="https://plus.google.com/u/0/b/108870875968742784813/+BlueDanubeWine/posts" title="google+"><span class="fa-stack fa-lg"><i class="fa fa-circle fa-stack-2x"></i><i class="fa fa-google-plus fa-stack-1x"></i></span> Find us on Google+</a>
</li>
</ul>
<script src="//platform.twitter.com/widgets.js" type="text/javascript"></script>
</div><!-- /.div_Splus -->
<div class="div_Sless followus_menu followus_colors alignCenter">
<ul>
    <li> <a href="http://www.facebook.com/BlueDanubeWine" title="facebook"><span class="fa-stack fa-lg"><i class="fa fa-circle fa-stack-2x"></i><i class="fa fa-facebook fa-stack-1x"></i></span></a></li>
    <li> <a href="https://twitter.com/bluedanubewine" title="twitter"><span class="fa-stack fa-lg"><i class="fa fa-circle fa-stack-2x"></i><i class="fa fa-twitter fa-stack-1x"></i></span></a></li>
    <li> <a href="https://instagram.com/bluedanubewine" title="instagram"><span class="fa-stack fa-lg"><i class="fa fa-circle fa-stack-2x"></i><i class="fa fa-instagram fa-stack-1x"></i></span></a></li>
    <li> <a href="https://plus.google.com/u/0/b/108870875968742784813/+BlueDanubeWine/posts" title="google+"><span class="fa-stack fa-lg"><i class="fa fa-circle fa-stack-2x"></i><i class="fa fa-google-plus fa-stack-1x"></i></span></a></li>
</ul>
</div><!-- /.divSless -->
</div><!-- /.footer_3 -->
<div class="between_footer1"></div>

<div class="footer_4">
<h3>Join Our Mailing List</h3>
<div class="follow_mc">
<!-- Begin MailChimp Signup Form -->
  <div id="mc_embed_signup">
  <form action="//bluedanubewine.us5.list-manage.com/subscribe/post?u=1c2b4aea3ee3178c45e4f94ec&amp;id=332a4aac61" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
  <div>Sign Up for our mailing list, get our exclusive offers:</div>
  <div id="mc_embed_signup_scroll">
    <div class="mc-field-group bd-field-group">
      <label for="mce-EMAIL">Email Address  <span class="asterisk">*</span></label>
      <input type="email" value="" name="EMAIL" class="required email" id="mce-EMAIL">
    </div><!-- /.mc-field-group -->
    <div class="mc-field-group bd-field-group">
      <label for="mce-LNAME">Name  <span class="asterisk">*</span></label>
      <input type="text" value="" name="LNAME" class="required" id="mce-LNAME">
    </div><!-- /.mc-field-group -->
    <div id="mce-responses" class="clear bd-response">
      <div class="response bd-error-response" id="mce-error-response" style="display:none"></div>
      <div class="response bd-success-response" id="mce-success-response" style="display:none"></div>
    </div><!-- /#mce-responses -->  <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
    <div style="position: absolute; left: -5000px;"><input type="text" name="b_1c2b4aea3ee3178c45e4f94ec_332a4aac61" tabindex="-1" value=""></div>
   <div class="newsletter"><a href="http://us5.campaign-archive2.com/home/?u=1c2b4aea3ee3178c45e4f94ec&id=332a4aac61" title="View our newsletter" target="_blank">View our newsletters &nbsp;&gt;</a></div>
    <div class="clear"><button type="submit" class="btn btn-primary" value="Subscribe" name="subscribe" id="mc-embedded-subscribe">Sign Up</button></div>
  </div><!-- /.mc_embed_signup_scroll --> 
  </form>
  </div><!-- /.mc_embed_signup --> 
{literal}
<script type='text/javascript' src='//s3.amazonaws.com/downloads.mailchimp.com/js/mc-validate.js'></script><script type='text/javascript'>(function($) {window.fnames = new Array(); window.ftypes = new Array();fnames[0]='EMAIL';ftypes[0]='email';fnames[1]='FNAME';ftypes[1]='text';fnames[2]='LNAME';ftypes[2]='text';fnames[3]='JOBTITLE';ftypes[3]='text';fnames[4]='BPHONE';ftypes[4]='text';fnames[5]='CELLULAR';ftypes[5]='text';fnames[6]='BEMAIL';ftypes[6]='text';fnames[7]='BADDRESS';ftypes[7]='text';fnames[8]='PEMAIL';ftypes[8]='text';fnames[9]='HPHONE';ftypes[9]='text';fnames[10]='HADDRESS';ftypes[10]='text';fnames[11]='WEBSITE';ftypes[11]='text';fnames[12]='MMERGE12';ftypes[12]='text';}(jQuery));var $mcj = jQuery.noConflict(true);</script>
{/literal}
<!--End mc_embed_signup-->
</div><!--.follow mc-->
</div><!--.footer_4-->
</footer>


<div class="bottom_footer">
&copy; 2002-{$smarty.now|date_format:"%Y"} Blue Danube Wine Company. All Rights Reserved.
</div>


</section>

<a href="http://technorati.com/claim/9p2w484rm5" rel="me" style="color:#ffffff;">Technorati Profile</a>
</div> <!-- /#main_container -->
</body>
</html>
