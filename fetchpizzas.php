<?php
//grabbing pizza based on id
function fetchPizza($p_ID) {
   include 'dbconnect.php';
    $stmt = $conn->prepare("SELECT * FROM pizzas where p_ID=:p_ID");
    $stmt->execute(['p_ID' => $p_ID]);
    $pizza = $stmt->fetch();
    if (empty($pizza)){
        return false;
    } else {
        return $pizza;
    }
}
?>
