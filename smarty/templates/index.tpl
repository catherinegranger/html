<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xml:lang="en" lang="en">
<head>
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<title>Blue Danube Wine{if $head_title} - {$head_title}{/if}</title>
<meta name="description" content="{if $head_desc}{$head_desc|truncate:180:'...'}{else}Blue Danube Wine imports wines from Austria, Croatia, Georgia, Hungary, Montenegro, and Slovenia to buy and distribute in the United States.{/if}" />
<meta name="keywords" content="wine, danube wines, austrian wines, croatian wines, georgian wines, hungarian wines, slovenian wines, montenegrin wines, central european wines, red wines, white wines, sweet wines, ice wines, tokaj, plavac mali, croatian zinfandel" />
<meta name="y_key" content="189ad0ecc2edca13" />
<meta name="verify-v1" content="h0pM0WDwbtTannVQLIo5hxU3F2ojuhzmlPGacVZGsNw=" />
<meta name="msvalidate.01" content="DDBA606838644885844C3C20853B0C7E" />

<link href="/css/style.css" rel="stylesheet" type="text/css" />
{literal}
<link href="http://cdn-images.mailchimp.com/embedcode/classic-081711.css" rel="stylesheet" type="text/css">
<style type="text/css">
	#mc_embed_signup{clear:left; font:11px Helvetica,Arial,sans-serif;  width:170px;}
	/* Add your own MailChimp form style overrides in your site stylesheet or in this style block.
	   We recommend moving this block and the preceding CSS link to the HEAD of your HTML file. */
</style>
<script type="text/javascript" src="/js/mootools.js"></script>
<script type="text/javascript" src="/js/jquery.js"></script>

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
{/literal}

<link rel="alternate" type="application/rss+xml" title="Blue Danube Wine Blog Feed" href="/blog/feed/index.php" />

</head>
<body>

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
			var sfEls = $("topnav").getElements("li");
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

<div id="menu">

<a href="/" title="Blue Danube Wine" style="display:block;width:600px;height:60px;"></a>
<ul id="topnav">
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
					<li><a href="/wines/austria/" title="Austrian Wines">Austrian</a></li>
					<li><a href="/wines/bosnia_herzegovina/" title="Bosnian &amp; Herzegovian Wines">Bosnia-Herzegovian</a></li>
					<li><a href="/wines/croatia/" title="Croatian Wines">Croatian</a></li>
					<li><a href="/wines/hungary/" title="Hungarian Wines">Hungarian</a></li>
					<li><a href="/wines/montenegro/" title="Montenegrin Wines">Montenegrin</a></li>
					<li><a href="/wines/slovenia/" title="Slovenian Wines">Slovenian</a></li>
					<li><a href="/wines/specials/" title="Special Offers">Special Offers</a></li>
					<li><a href="/wines/samplers/" title="Wine Samplers">Wine Samplers</a></li>
					<li><a href="/wines/bestsellers/" title="Best Sellers">Best Sellers</a></li>
					<li><a href="/wines/" title="All Wines">All Wines</a></li>
				</ul>
			</li>
</ul>

<div style="float:right;height:20px;margin:22px 15px 5px 5px;">
<table cellpadding="0" cellspacing="10" border="0">
<tr>
<td>
{if ($smarty.session.grand_total > 0) && ($one != 'process')}
<form action="/cart/" method="post">
<button type="submit" title="Go to Cart">Cart Total: ${$smarty.session.grand_total}</button>
</form>
{/if}
</td>
<td style="white-space:nowrap;text-align:right;">
<form action="/wines/" method="post">
 <input type="text" name="search" size="13" value="search wine" onblur="if(this.value=='') this.value='search wine';" onfocus="if(this.value=='search wine') this.value='';" />
 <button type="submit" title="Search">Go</button>
</form>
</td>
</tr>
</table>
</div>

</div>

<div id="container">
{$content}
</div>

<div id="bdfooter">
		<a href="/" title="home">home</a> | <a href="/news_events/" title="news and events"> news and events</a> | <a href="/blog/" title="blog"> blog</a> | <a href="/wines/" title="shop">shop</a> | <a href="/shipping/" title="shipping">shipping</a> | <a href="/about/" title="about us">about us</a> | <a href="/contact/" title="contact">contact</a><br />
		&copy; 2002-{$smarty.now|date_format:"%Y"} Blue Danube Wine Company. All Rights Reserved.
	</div>

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


<a href="http://technorati.com/claim/9p2w484rm5" rel="me" style="color:#ffffff;">Technorati Profile</a>
</body>

</html>
