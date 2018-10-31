<!DOCTYPE html>
<html lang="en">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta charset="utf-8">
<meta name="description" content="{if $head_desc}{$head_desc|truncate:180:'...'}{else}Blue Danube Wine imports wines from Austria, Bosnia Herzegovina, Croatia, Georgia, Hungary, Montenegro, and Slovenia to buy and distribute in the United States.{/if}" />
<meta name="keywords" content="wine, danube wines, austrian wines, bosnian wines, croatian wines, georgian wines, hungarian wines, slovenian wines, montenegrin wines, central european wines, red wines, white wines, sweet wines, ice wines, tokaj, plavac mali, croatian zinfandel" />
<meta property="og:title" content="{if $og_title}{$og_title}{else}Blue Danube Wine{/if}" />
<meta property="og:description" content="{if $og_description}{$og_description}{else}Blue Danube Wine imports, distributes, and sells wines from Austria, Bosnia Herzegovina, Croatia, Georgia, Hungary, Montenegro, Serbia, and Slovenia in the United States.{/if}" />
<meta property="og:type" content="article" />
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<meta name="y_key" content="189ad0ecc2edca13" />
<meta name="verify-v1" content="h0pM0WDwbtTannVQLIo5hxU3F2ojuhzmlPGacVZGsNw=" />
<meta name="msvalidate.01" content="DDBA606838644885844C3C20853B0C7E" />
<meta name="p:domain_verify" content="27491b5011806de5935059b98a498873"/>
<title>{if $head_title}{$head_title} | {/if}Blue Danube Wine</title>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" type="text/css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Dancing+Script|Kalam|Open+Sans|Roboto|Tangerine|Ubuntu|Source+Sans+Pro|PT+Serif">
<link rel="stylesheet" href="/css/bdstyle2.css" type="text/css">

<link rel="alternate" href="/blog/feed/index.php" type="application/rss+xml" title="Blue Danube Wine Blog Feed">

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>


<script type="text/javascript" async defer data-pin-hover="true" src="//assets.pinterest.com/js/pinit.js"></script>

{literal}

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

{literal}
<!-- Google Analytics -->
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-314963-2', 'bluedanubewine.com');
  ga('send', 'pageview');

</script>
<!-- End Google Analytics -->


{/literal}


<header id="top_header" class="header_grid">
<div id="header_social_l" class="menu_left_l">{include file="modules/menu_social.tpl"}</div>
<div id="header_user_l" class="menu_right_l">{include file="modules/menu_user.tpl"}</div>
<div id="header_user_p">{include file="modules/menu_user_p.tpl"}</div>
</header><!--#top_header -->

<div id="bottom_header">
<div id="nav_logo_group_l"><!--#nav_logo_group_l -->
<div id="nav_logo_l" >
<a href="/" title="Blue Danube Wine"><img class="noborder" src="/img/all/round_logo_transparent.png" alt="Blue Danube Wine"></a>
</div>
<nav id="nav_bd_l" >{include file="modules/menu_bd.tpl"}</nav>
</div><!-- /#nav_logo_group_l -->
<nav id="nav_bd_p" class="navbar navbar-default">{include file="modules/menu_bd_p.tpl"}</nav>
</div><!--#bottom_header -->

<div id="main_container" class="page_content">
<section id="main_section">
<div class="clean"></div>
{$content}
</section> <!-- /#main_section -->
</div> <!-- /#main_container -->

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
<li class="last"> <a href="/shipping/" title="Shipping Information">Shipping</a></li>
</ul>
</div><!-- /.footer_1 -->
<div class="between_footer1"></div>
<div class="footer_2">
<a href="/wines/" title="Shop"><h3>Shop</h3></a>
<ul class="footer_menu">
{section name=bit loop=$ncc}
<li><a href="/wines/{$ncc[bit].web_name}/" title="Shop {$ncc[bit].full_name} Wines">{$ncc[bit].full_name}</a></li>
{/section}
<li class="last"><a href="/wines/specials/" title="Specials Offers">Specials</a></li>
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
<a href="https://www.pinterest.com/bluedanubewine/" title="pinterest"><span class="fa-stack fa-lg"><i class="fa fa-circle fa-stack-2x"></i><i class="fa fa-pinterest fa-stack-1x"></i></span> Find us on Pinterest</a>
</li>
</ul>
<script src="//platform.twitter.com/widgets.js" type="text/javascript"></script>
</div><!-- /.div_Splus -->
<div class="div_Sless followus_menu followus_colors alignCenter">
<ul>
    <li> <a href="http://www.facebook.com/BlueDanubeWine" title="facebook"><span class="fa-stack fa-lg"><i class="fa fa-circle fa-stack-2x"></i><i class="fa fa-facebook fa-stack-1x"></i></span></a></li>
    <li> <a href="https://twitter.com/bluedanubewine" title="twitter"><span class="fa-stack fa-lg"><i class="fa fa-circle fa-stack-2x"></i><i class="fa fa-twitter fa-stack-1x"></i></span></a></li>
    <li> <a href="https://instagram.com/bluedanubewine" title="instagram"><span class="fa-stack fa-lg"><i class="fa fa-circle fa-stack-2x"></i><i class="fa fa-instagram fa-stack-1x"></i></span></a></li>
    <li> <a href="https://www.pinterest.com/bluedanubewine/" title="pinterest"><span class="fa-stack fa-lg"><i class="fa fa-circle fa-stack-2x"></i><i class="fa fa-pinterest fa-stack-1x"></i></span></a></li>
</ul>
</div><!-- /.divSless -->
</div><!-- /.footer_3 -->
<div class="between_footer1"></div>

<div class="footer_4">
<h3>Join Our Mailing List</h3>
<div class="follow_slv">
<!-- Begin Signup Form -->
  <div id="slv_embed_signup">
  <form action="/submit_solve_contact/" method="post" id="slv-form" name="slv-form">
  <div>Sign Up for our mailing list, get our exclusive offers:</div>
  <div id="slv_embed_signup_scroll">
    <div class="slv-field-group bd-field-group">
      <label for="slv-EMAIL">Email Address  <span class="asterisk">*</span></label>
      <input type="email" value="" name="email" class="required email" id="slv-EMAIL" required>
    </div><!-- /.slv-field-group -->
    <div class="slv-field-group bd-field-group">
      <label for="slv-LNAME">Name  <span class="asterisk">*</span></label>
      <input type="text" value="" name="lastname" class="required" id="slv-LNAME" required>
    </div><!-- /.slv-field-group -->
    <div id="slv-responses" class="clear bd-response">
      {if $solve_errors}
      <div class="response bd-error-response" id="slv-error-response">
      {section name=bit loop=$solve_errors}
      {$solve_errors[bit]}
      <br>
      {/section}
      </div>
      {else}
      <div class="response bd-error-response" id="slv-error-response" style="display:none"></div>
      {/if}
      {if $solve_successes}
      <div class="response bd-success-response" id="slv-success-response">
      {section name=bit loop=$solve_successes}
      {$solve_successes[bit]}
      <br>
      {/section}
      </div>
      {else}
      <div class="response bd-success-response" id="slv-success-response" style="display:none"></div>
      {/if}
    </div><!-- /#slv-responses -->  <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
    <div style="position: absolute; left: -5000px;"><input type="text" name="b_1c2b4aea3ee3178c45e4f94ec_332a4aac61" tabindex="-1" value=""></div>
   <div class="newsletter"><a href="http://us5.campaign-archive2.com/home/?u=1c2b4aea3ee3178c45e4f94ec&id=332a4aac61" title="View our newsletter" target="_blank">View our newsletters &nbsp;&gt;</a></div>
    <div class="clear"><button type="submit" class="btn btn-primary" value="Subscribe" name="subscribe" id="slv-subscribe">Sign Up</button></div>
  </div><!-- /.slv_embed_signup_scroll --> 
  </form>
  </div><!-- /.slv_embed_signup --> 
<!--End slv_embed_signup-->
</div><!--.follow slv-->
</div><!--.footer_4-->
</footer>
<div id="bottom_footer">
&copy; 2002-{$smarty.now|date_format:"%Y"} Blue Danube Wine Company. All Rights Reserved.
</div><!--#bottom_footer-->




<!-- Bing -->
{literal}
<script>(function(w,d,t,r,u){var f,n,i;w[u]=w[u]||[],f=function(){var o={ti:"4049358"};o.q=w[u],w[u]=new UET(o),w[u].push("pageLoad")},n=d.createElement(t),n.src=r,n.async=1,n.onload=n.onreadystatechange=function(){var s=this.readyState;s&&s!=="loaded"&&s!=="complete"||(f(),n.onload=n.onreadystatechange=null)},i=d.getElementsByTagName(t)[0],i.parentNode.insertBefore(n,i)})(window,document,"script","//bat.bing.com/bat.js","uetq");</script><noscript><img src="//bat.bing.com/action/0?ti=4049358&Ver=2" height="0" width="0" style="display:none; visibility: hidden;" /></noscript>
{/literal}
<!-- End Bing -->

{literal}
<!-- Start of StatCounter Code for Default Guide -->
<script type="text/javascript">
var sc_project=381182; 
var sc_invisible=1; 
var sc_security=""; 
var scJsHost = (("https:" == document.location.protocol) ?
"https://secure." : "http://www.");
document.write("<sc"+"ript type='text/javascript' src='" +
scJsHost+
"statcounter.com/counter/counter.js'></"+"script>");
</script>
<noscript><div class="statcounter"><a title="shopify
analytics" href="http://statcounter.com/shopify/"
target="_blank"><img class="statcounter"
src="//c.statcounter.com/381182/0//1/" alt="shopify
analytics"></a></div></noscript>
<!-- End of StatCounter Code for Default Guide -->

<script type="text/javascript" src="/js/mootools.js"></script>
<script type="text/javascript">
	window.addEvent('domready', function(){});
</script>

<script type="text/javascript" src="/js/jquery.magnifier.js">
/***********************************************
* jQuery Image Magnify- (c) Dynamic Drive DHTML code library (www.dynamicdrive.com)
* This notice MUST stay intact for legal use
* Visit Dynamic Drive at http://www.dynamicdrive.com/ for this script and 100s more
***********************************************/
</script>

<script>
window.onscroll = function() {stickyFunction()};
var header = document.getElementById("bottom_header");
var sticky = header.offsetTop;

function stickyFunction() {
  if (window.pageYOffset > sticky) {
    header.classList.add("sticky");
  } else {
    header.classList.remove("sticky");
  }
}
</script>
{/literal}


</body>
</html>
