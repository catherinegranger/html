<ul>
<li><a href="/about/" title="About">About</a>
<ul>
<li><a href="/about/" title="About Us">About Us</a></li>
<li><a href="/team/" title="Our Team">Our Team</a></li>
<li><a href="/contact/" title="Contact Us">Contact Us</a></li>
<li><a href="/shipping/" title="Shipping Information">Shipping</a></li>
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
<li><a href="/spotlight/" title="Spotlight">Spotlight</a></li>
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
<li><a href="/resources/grape_varietals/" title="Resources">Resources</a>
<ul>
<li><a href="/resources/grape_varietals/" title="Grape Varietals">Grape Varietals</a></li>
{if !$is_user_from_trade}
<li><a href="/trade/" title="For the Trade">For the Trade</a></li>
{/if}
</ul>
</li>
{if $is_user_from_trade}
<li><a href="/trade/" title="For the Trade">Trade</a></li>
{else}
<li><a href="/wines/" title="Shop">Shop</a>
<ul>
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
