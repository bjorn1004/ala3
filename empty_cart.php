<?php
session_start();
//when the main delete button is clicked, clear is set to -42 (never normally obtained) and it will clear the whole cart
if ($_GET['clear'] == -42){
unset($_SESSION['cart']);
$_SESSION['cart'] = array();
//    else it will just clear the index given
} else {
    unset($_SESSION['cart'][$_GET['clear']]);
//    reindexes the array so the numbering is consistent
    $_SESSION['cart'] = array_values($_SESSION['cart']);
}
?>
<meta http-equiv='refresh' content='0; URL=shoppingcart.php'>
