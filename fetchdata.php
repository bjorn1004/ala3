<?php
//grabbing pizza based on id
function fetchPizza($p_ID) {
   include 'dbconnect.php';
    $stmt = $conn->prepare("SELECT * FROM pizzas where p_ID=:p_ID");
    $stmt->execute(['p_ID' => $p_ID]);
    $pizza = $stmt->fetch();
    $conn = null;
    if (empty($pizza)){
        return false;
    } else {
        return $pizza;
    }
}

//grabbing type based on id
function fetchType($t_ID) {
   include 'dbconnect.php';
    $stmt = $conn->prepare("SELECT * FROM pizzatypes where t_ID=:t_ID");
    $stmt->execute(['t_ID' => $t_ID]);
    $type = $stmt->fetch();
    $conn = null;
    if (empty($type)){
        return false;
    } else {
        return $type;
    }
}

?>
