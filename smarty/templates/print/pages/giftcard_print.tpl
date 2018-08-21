
<div class="giftcard_hello alignCenter pix14">
Hello {$giftcard.recipient_name},
<p>Here is your ${$giftcard.balance} E-Gift Card from {$giftcard.purchaser_name}</p>
</div>

<div>
<div class="buy_giftcard_half">
<center>
<div class={if $giftcard.type == '0'}"giftcard_basic" {elseif $giftcard.type == '1'}"giftcard_holiday" {elseif $giftcard.type == '2'}"giftcard_birthday" {elseif $giftcard.type == '3'}"giftcard_bottles"{/if}>
<div class="giftcard_text">
<h5 class="tangerine">
<div class="giftcard_subtext">{if $giftcard.type == '0'}Gift Card {elseif $giftcard.type == '1'}Happy<br>Holidays {elseif $giftcard.type == '2'}Happy<br>Birthday! {elseif $giftcard.type == '3'}<span class="nowrap">Gift Card</span>{/if}
<div class="giftcard_balance">${$giftcard.balance}</div></div>
</h5>
</div>
<div class="giftcard_logo"><img src="/img/all/transparent_logo.png" alt="Blue Danube Wine"></div>
<div class="clean"></div>
</div>
<div class="giftcard_code">
E-Gift Card Number: <b>{$giftcard.code}
</div>
</center>
</div>

<div class="buy_giftcard_half">
<center>
<div class="pix14">
<div class="message">Message from {$giftcard.purchaser_name}:</div>
<div class="receive_giftcard_message">{$giftcard.message}</div>
</div>
</center>
</div>
<div class="receive_giftcard_info">
To redeem your E-Gift Card, shop our webstore and enter your E-Gift Card Number at Checkout.
<br>For any questions, contact us at webshop@bluedanubewine.com or +1 (707) 731-1376.
</div>



{assign var=head_title value='Print Gift Card'}</p>
