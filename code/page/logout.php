<?php

$_SESSION['user']['u_logged'] = 'false';

destroySession("userCakeUser");
if (isset($_SESSION['cart_total'])) unset($_SESSION['cart_total']);
if (isset($_SESSION['grand_total'])) unset($_SESSION['grand_total']);
if (isset($_SESSION['cart_qty'])) unset($_SESSION['cart_qty']);
if (isset($_SESSION['cart'])) unset($_SESSION['cart']);
if (isset($_SESSION['discount_id'])) unset($_SESSION["discount_id"]);
if (isset($_SESSION['discount_name'])) unset($_SESSION["discount_name"]);
if (isset($_SESSION['order'])) unset($_SESSION['order']);
if (isset($_SESSION['recipient'])) unset($_SESSION['recipient']);

session_unset();
session_destroy();

header("Location: /");

exit;

?>