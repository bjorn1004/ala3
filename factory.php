<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


class pizzaFactory {

   protected $servername = "127.0.0.1";
protected $conn;

protected $username = "root";
protected $password = "usbw";
protected $database = "ala3";
  protected $port = 3306;

  function connect(){
    // port 3307
try {
    $this->conn = new PDO("mysql:host=$this->servername;port=$this->port;dbname=$this->database", $this->username, $this->password);
    // set the PDO error mode to exception
    $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//    echo "Connected successfully";
    }
catch(PDOException $e)
    {
    echo "Connection failed: " . $e->getMessage();
    }
                    }

  function fetchPizza($p_ID) {
   //include 'dbconnect.php';
    $stmt = $this->conn->prepare("SELECT * FROM pizzas where p_ID=:p_ID");
    $stmt->execute(['p_ID' => $p_ID]);
    $pizza = $stmt->fetch();
    $this->conn = null;
    if (empty($pizza)){
        return false;
    } else {
        return $pizza;
    }
}

  function echomonster(){
    echo 'shit php...';
  }

  function generateCards(){
    $pizzaData = $this->fetchPizza(1);
      var_dump($pizzaData); exit();
foreach($pizzaData as $pizza){

return '<div class="card mb-4" style="width: 18rem;">
    <img src="img/'.$pizza['p_ID'].'.png" class="card-img-top" alt="pizzapic">
    <div class="card-body">
        <h5 class="card-title">
            '.$pizza['name'].'
        </h5>
        <p class="card-text">'.$pizza['descr'].'</p>
    </div>
    <ul class="list-group list-group-flush">
        <li class="list-group-item">&euro;'.$pizza['price'].'</li>
        <li class="list-group-item"><a href ="viewpizza.php?p_ID='.$pizza['p_ID'].'" class="btn btn-primary">Bestellen</a></li>
    </ul>
</div>';


  }

}

$d = new factory();
$pizzas = $d->echomonster();
echo 'Dab';
?>
<!--
if (isset($_POST["pizza_id"]) && isset($_POST["amount"])) {

$p_ID = $_POST["p_ID"]}}
-->
