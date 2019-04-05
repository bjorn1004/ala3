<?php include 'header.php';

session_start();

var_dump($_SESSION['cart']);

$whereIn = implode(',',$_SESSION['cart']);

$sql = "
    SELECT * FROM products 
    WHERE p_ID IN ($whereIN)
";
echo $sql;

 include 'footer.php';?>
