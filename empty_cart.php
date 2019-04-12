<?php
session_start();

if ($_GET['clear'] == -42){
unset($_SESSION['cart']);
$_SESSION['cart'] = array();
} else {
    unset($_SESSION['cart'][$_GET['clear']]);
    $_SESSION['cart'] = array_values($_SESSION['cart']);
}
?>
<meta http-equiv='refresh' content='0; URL=shoppingcart.php'>
