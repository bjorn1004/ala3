<?php
include 'fetchdata.php';

//        draws a row with information taken from $_SESSION['cart'] based on # given
function drawRow($row){
    $type = fetchType($_SESSION['cart'][$row]['t_ID']);
    $pizza = fetchPizza($_SESSION['cart'][$row]['p_ID']);
    $pizza = fetchPizza($_SESSION['cart'][$row]['p_ID']);
    $amount = $_SESSION['cart'][$row]['amount'];
    $price = ($pizza['price'] + $type['price']) * $amount;
    $return = array("quantity"=>$amount, "price"=>$price);
    ?>
<tr>
    <th scope="row"><?= $row + 1 ?></th>
    <td><?=
                    $pizza['name'];?> </td>
    <td><?=
                    $type['name'];
        ?> </td>
    <td><?= $amount ?></td>
    <td>&euro;<?= $price ?>
        <a href="empty_cart.php?clear=<?= $row ?>"><img class="deleteicon" src="img/trash.png"></a></td>
</tr>
<?php
return $return; };

function finalRow($quantity, $price) {
       ?>
<tr>
    <th scope="row">#</th>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>Pizza's: <?= $quantity ?></td>
    <td>Prijs: &euro;<?= $price ?></td>
</tr>
<?php
};
?>
