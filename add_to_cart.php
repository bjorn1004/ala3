<?php

session_start();

if (empty($_SESSION['cart'])){
    $_SESSION['cart'] = array();
// session array
}

//checks every entry in $_SESSION['cart'] to see if new item is identical to old, if yes, adds amount together instead of making new entry
    $i = 0;
    $number_of_rows = count($_SESSION['cart']);
    $merged = false;
if ($number_of_rows != 0) {
    while ($i < $number_of_rows) {
        if ($_SESSION['cart'][$i]['p_ID'] == $_GET['p_ID'] && $_SESSION['cart'][$i]['t_ID'] == $_GET['t_ID'])  {
            $_SESSION['cart'][$i]['amount'] = $_SESSION['cart'][$i]['amount'] + $_GET["amount"];
            $merged = true;
            break;
        }
        $i++;
    }  if ($merged == false) {array_push($_SESSION['cart'], array("p_ID"=>$_GET['p_ID'], "t_ID"=>$_GET['t_ID'], "amount"=>$_GET["amount"]));
    }
} else {
        array_push($_SESSION['cart'], array("p_ID"=>$_GET['p_ID'], "t_ID"=>$_GET['t_ID'], "amount"=>$_GET["amount"]));
}
// pushing a p_id to the array cart

?>
<!-- pushes 'add-to-card.php' to go to the shopping cart automatically. content = how many seconds -->
<meta http-equiv='refresh' content='0; URL=shoppingcart.php'>
