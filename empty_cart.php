<?php
session_start();
unset($_SESSION['cart']);
$_SESSION['cart'] = array();
?>
<meta http-equiv='refresh' content='0; URL=shoppingcart.php'>
