<?php

session_start();

if (empty($_SESSION['cart'])){
    $_SESSION['cart'] = array();
// session array
}

array_push($_SESSION['cart'], array("p_ID"=>$_GET['p_ID'], "t_ID"=>$_GET['t_ID'], "amount"=>$_GET["amount"]));
// pushing a p_id to the array cart

?>
<!-- pushes 'add-to-card.php' to go to the shopping cart automatically. content = how many seconds -->
<meta http-equiv='refresh' content='0; URL=shoppingcart.php'>
