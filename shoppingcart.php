<?php include 'header.php';
include 'dbconnect.php';
include 'fetchdata.php';

session_start();

var_dump($_SESSION['cart']);

$whereIn = implode(',',$_SESSION['cart']);


$sql ="
    SELECT * FROM pizzas 
    WHERE p_ID IN ($whereIn)
";

	
?>
<table class="table">
<thead>
  <tr>
    <th scope="col">#</th>
    <th scope="col">Naam</th>
    <th scope="col">Type</th>
    <th scope="col">Prijs</th>
  </tr>
</thead>
<tbody>
  <tr>
    <th scope="row">1</th>
    <td><?php var_dump($_SESSION['cart']); ?> </td>
    <td><?php echo $_SESSION['cart']['0']['t_ID']; ?> </td>
    <td>@mdo</td>
  </tr>
</tbody>
</table>
<a href="empty_cart.php">EMPTY</a>



<?php

 include 'footer.php';?>
