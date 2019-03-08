
<?php
//grabbing pizza based on id

function fetchPizza($p_ID) {
   include 'dbconnect.php';
    $stmt = $conn->prepare("SELECT * FROM pizzas where p_ID=:p_ID");
    $stmt->execute(['p_ID' => $p_ID]);
    $pizza = $stmt->fetch();
    return $pizza;
}
/*$pizza = fetchPizza($_GET['p_ID']);
var_dump($pizza);
echo $pizza["p_ID"]."<br>";
echo $pizza["name"]."<br>";
echo $pizza["descr"]."<br>";
echo $pizza["price"]."<br>";*/
?>
