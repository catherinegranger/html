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
            <li><a href="/shipping/" title="Shipping Information">Shipping</a></li>
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
          <li><a href="/spotlight/" title="Spotlight">Spotlight</a></li>
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
            {if !$is_user_from_trade}
            <li><a href="/trade/" title="For the Trade">For the Trade</a></li>
            {/if}
          </ul>
        </li>
       {if $is_user_from_trade}
        <li><a href="/trade/" title="For the Trade">Trade</a></li>
       {else}
        <li class="dropdown">
          <a href="/wines/" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Shop <span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            {section name=bit loop=$ncc}
            <li><a href="/wines/{$ncc[bit].web_name}/" title="Shop {$ncc[bit].full_name} Wines">{$ncc[bit].full_name}</a></li>
            {/section}
            <li><a href="/wines/specials/" title="Special Offers">Special Offers</a></li>
            <li><a href="/wines/samplers/" title="Gift Sets">Holiday Gift Sets</a></li>
            <li><a href="/giftcard/" title="Gift Cards">Gift Cards</a></li>
            <li><a href="/wines/books/" title="Books">Books &amp; Misc.</a></li>
            <li><a href="/wines/" title="All Wines">All Wines</a></li>
          </ul>
        </li>
        {/if}
      </ul>
   </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->