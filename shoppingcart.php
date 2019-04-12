<?php include 'header.php';
include 'dbconnect.php';
include 'drawcartrow.php';

session_start();

var_dump($_SESSION['cart']);

$price = 0;
	
?>
<table class="table">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Naam</th>
            <th scope="col">Type</th>
            <th scope="col">Nummer</th>
            <th scope="col">Prijs</th>
        </tr>
    </thead>
    <tbody>
<?php
//draws a row for every index in $_SESSION['cart']


    $i = 0;
    $number_of_rows = count($_SESSION['cart']   );

    while ($i < $number_of_rows){
    $check = empty($_SESSION['cart'][$i]);
        if ($check == true)  {
            $number_of_rows++;
            $i++;
        } else {
            $price = $price + drawRow($i);
            $i++;
        }
    }
    ?>
    </tbody>
</table>
<a href="empty_cart.php">EMPTY</a>



<?php

 include 'footer.php';?>
