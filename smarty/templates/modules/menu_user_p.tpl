<form class="form-inline" action="/wines/" method="post">
<ul>
{if isset($smarty.session.userCakeUser)}
<li><span class="glyphicon glyphicon-user" aria-hidden="true"></span> <a href="/account/" title="My Account">[{$smarty.session.userCakeUser.display_name}]</a></li>
{else}
<li><span class="glyphicon glyphicon-user" aria-hidden="true"></span> <a href="/login/" title="Login">Login</a></li>
{/if}
{if !$is_user_from_trade}
  <li><li><span class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span>
          <a href="/cart/" title="My Cart">
  {if ($smarty.session.cart_qty > 0) && ($one != 'process')}[{$smarty.session.cart_qty}]{else}[0]{/if}</a></li>
  {if ($smarty.session.cart_qty > 0) && ($one != 'process')}
     <li><a href="/checkout/" title="Checkout">Checkout</a></li>
  {/if}
{/if}
{if isset($smarty.session.userCakeUser)}
<li><a href="/logout/" title="Logout">Logout</a></li>
{/if}
<li><span class="input-group input-group-sm mb-3">
     <input class="form-control" name="search" placeholder="Search..." id="crown-search" autocomplete="off" autofocus="autofocus" type="text"  size="10">
     <span class="input-group-addon"><i class="glyphicon glyphicon-search"></i></span>
</span></li>
</ul>
</form>