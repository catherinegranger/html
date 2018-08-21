<!DOCTYPE html>
<html lang="en">
<head>
<meta content="initial-scale=1.0" name="viewport">
<meta charset="utf-8">
<meta name="description" content="{if $head_desc}{$head_desc|truncate:180:'...'}{else}Blue Danube Wine imports wines from Austria, Bosnia Herzegovina, Croatia, Georgia, Hungary, Montenegro, and Slovenia to buy and distribute in the United States.{/if}" />
<meta name="keywords" content="wine, danube wines, austrian wines, croatian wines, georgian wines, hungarian wines, slovenian wines, montenegrin wines, central european wines, red wines, white wines, sweet wines, ice wines, tokaj, plavac mali, croatian zinfandel" />
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<meta name="y_key" content="189ad0ecc2edca13" />
<meta name="verify-v1" content="h0pM0WDwbtTannVQLIo5hxU3F2ojuhzmlPGacVZGsNw=" />
<meta name="msvalidate.01" content="DDBA606838644885844C3C20853B0C7E" />
<meta name="p:domain_verify" content="27491b5011806de5935059b98a498873"/>
<title>Blue Danube Wine{if $head_title} - {$head_title}{/if}</title>
<link rel="stylesheet" href="/css/newstyle.css" type="text/css">
<link rel="stylesheet" href="http://cdn-images.mailchimp.com/embedcode/classic-081711.css" type="text/css">
<link rel="alternate" href="/blog/feed/index.php" type="application/rss+xml" title="Blue Danube Wine Blog Feed">
<script type="text/javascript" src="/js/mootools.js"></script>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>

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

{literal}
<script type="text/javascript">
		var WRInitTime=(new Date()).getTime();
		sfhover = function() {
			var sfEls = $("main_nav_l").getElements("li");
			for (var i=0; i<sfEls.length; i++) {
				sfEls[i].onmouseover=function() {
					this.className+=" sfhover";
				}
				sfEls[i].onmouseout=function() {
					this.className=this.className.replace(new RegExp(" sfhover\\b"), "");
				}
			}
		}
		if (window.attachEvent) window.attachEvent("onload", sfhover);
		
</script>
{/literal}

<div id="top_div_l">
<form action="/wines/" method="post">
<ul>
{if isset($smarty.session.userCakeUser)}
<li><a href="/account/" title="My Account">My Account [{$smarty.session.userCakeUser.display_name}]</a></li>
{else}
<li><a href="/login/" title="Login">Login</a></li>
<li><a href="/signup/" title="Sign Up">Sign Up</a></li>
{/if}
<li><a href="/cart/" title="My Cart"><img src="/img/all/blue_cart.jpg" alt="Shopping Cart" />My Cart
{if ($smarty.session.grand_total > 0) && ($one != 'process')}(${$smarty.session.grand_total}){else}($0){/if}</a></li>
{if isset($smarty.session.userCakeUser)}
{if ($smarty.session.grand_total > 0) && ($one != 'process')}
<li><a href="/checkout/" title="Checkout">Checkout</a></li>
{/if}
<li><a href="/logout/" title="Logout">Logout</a></li>
{/if}
<li><input type="text" name="search" size="7" placeholder="search"> <button class="sassyb" type="submit" title="Search">Go</button></li>
</ul>
</form>
</div>

<header id="main_header">

<div id="top_div_p">
<form action="/wines/" method="post">
<ul>
{if isset($smarty.session.userCakeUser)}
<li><a href="/account/" title="My Account">My Account</a></li>
{else}
<li><a href="/login/" title="Login">Login</a></li>
<li><a href="/signup/" title="Sign Up">Sign Up</a></li>
{/if}
<li><a href="/cart/" title="My Cart">My Cart</a></li>
{if isset($smarty.session.userCakeUser)}
<li><a href="/logout/" title="Logout">Logout</a></li>
{/if}
<li><input type="text" name="search" size="5" placeholder="search"><button class="sassyb" type="submit" title="Search">Go</button></li>
</ul>
</form>
</div>

<a id="header_wrapper" href="/" title="Blue Danube Wine"><img src="/img/all/header2.jpg" width="100%" alt="Blue Danube Wine"></a>
<ul id="main_nav_l">
  <li><a href="/about/" class="about{if $one == 'about'|| $one == 'team' || $one == 'contact'} on{/if}" title="About Us"></a>
  <ul>
    <li><a href="/about/" title="About Us">About Us</a></li>
    <li><a href="/team/" title="Our Team">Our Team</a></li>
    <li><a href="/contact/" title="Contact Us">Contact Us</a></li>
  </ul>
</li>
<li><a href="/wineries/" class="wineries{if $one == 'wineries' || $one == 'winery' || $one == 'regions'} on{/if}" title="Wineries &amp; Regions"></a>
  <ul>
  {section name=bit loop=$ncc}
    <li><a href="/regions/{$ncc[bit].web_name}/" title="{$ncc[bit].full_name} Wines">{$ncc[bit].full_name}</a>
      <ul>
        {section name=bit2 loop=$nwys}
        {if $ncc[bit].c_id == $nwys[bit2].c_id}
          <li><a href="/winery/{$nwys[bit2].web_name}/" title="{$nwys[bit2].name} Winery">{$nwys[bit2].name}</a></li>
        {/if}
        {/section}
      </ul>
    </li>
  {/section}
  </ul>
</li>
<li><a href="/blog/" class="blog{if $one == 'blog'} on{/if}" title="Blog"> </a></li>
<li><a href="/news_events/" class="news{if $one == 'news_events'} on{/if}" title="News &amp; Events"> </a></li>
<li><a href="/resources/" class="resources{if $one == 'resources'} on{/if}" title="Resources"> </a>
  <ul>
    <li><a href="/resources/books_guides/" title="Books &amp; Guides">Books &amp; Guides</a></li>
    <li><a href="/resources/grape_varietals/" title="Grape Varietals">Grape Varietals</a></li>
    <li><a href="/resources/magazines/" title="Magazines">Magazines</a></li>
    <li><a href="/resources/wine_links/" title="Wine Links">Wine Links</a></li>
    <li><a href="/resources/wine_tours_routes" title="Wine Tours &amp; Routes">Wine Tours/Routes</a></li>
    <li><a href="/trade" title="For the Trade">For the Trade</a></li>
    <li><a href="/resources/" title="All Resources">All Resources</a></li>
  </ul>
</li>
<li><a href="/wines/" class="shop{if $one == 'wines' || $one == 'wine' || $one == 'cart' || $one == 'checkout' || $one == 'billship' || $one == 'review'} on{/if}" title="Shop for Wines"> </a>
  <ul>
     {section name=bit loop=$ncc}
     <li><a href="/wines/{$ncc[bit].web_name}/" title="Shop {$ncc[bit].full_name} Wines">{$ncc[bit].full_name}</a>
     </li>
    {/section}
    <li><a href="/wines/specials/" title="Special Offers">Special Offers</a></li>
    <li><a href="/wines/samplers/" title="Gift Sets">Gift Sets</a></li>
    <li><a href="/wines/bestsellers/" title="Best Sellers">Best Sellers</a></li>
    <li><a href="/wines/" title="All Wines">All Wines</a></li>
  </ul>
</li>
</ul>
</div>
</header>

<section id="main_section">

<nav class="main_nav_p">
    <ul>
    <li><a href="/about/" title="About">About</a></li>
    <li><a href="/wineries/" title="Wineries">Wineries</a></li>
    <li><a href="/blog/" title="Blog">Blog</a></li>
    <li><a href="/news_events/" title="News & Events">News &amp; Events</a></li>
    <li><a href="/resources/" title="Resources">Resources</a></li>
    <li><a href="/wines/" title="Shop">Shop</a></li>
    </ul>
    <div class="clean"></div>
</nav>
<div class="clean"></div>


{$content}
</section>

<footer id="main_footer">
<a href="/" title="home">home</a> | <a href="/news_events/" title="news and events"> news and events</a> | <a href="/blog/" title="blog"> blog</a> | <a href="/wines/" title="shop">shop</a> | <a href="/shipping/" title="shipping">shipping</a> | <a href="/about/" title="about us">about us</a> | <a href="/contact/" title="contact">contact</a><br />
		&copy; 2002-{$smarty.now|date_format:"%Y"} Blue Danube Wine Company. All Rights Reserved.
</footer>

<a href="http://technorati.com/claim/9p2w484rm5" rel="me" style="color:#ffffff;">Technorati Profile</a>
</body>
</html>
