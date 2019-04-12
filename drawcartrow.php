<?php
include 'fetchdata.php';

//        draws a row with information taken from $_SESSION['cart'] based on # given
function drawRow($row){
    $type = fetchType($_SESSION['cart'][$row]['t_ID']);
    $pizza = fetchPizza($_SESSION['cart'][$row]['p_ID']);
    $pizza = fetchPizza($_SESSION['cart'][$row]['p_ID']);
    $amount = $_SESSION['cart'][$row]['amount'];
    $price = ($pizza['price'] + $type['price']) * $amount;
    ?>
        <tr>
            <th scope="row"><?= $row + 1 ?></th>
            <td><?php
                    echo $pizza['name'];?> </td>
            <td><?php
                    echo $type['name'];
        ?> </td>
           <td><?= $amount ?></td>
            <td><?= $price ?></td>
        </tr>
        <?php
return $price; };
?>
