<?php

$_SESSION['user']['u_logged'] = 'false';

session_destroy();

header("Location: /");

exit;

?>