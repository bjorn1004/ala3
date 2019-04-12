<?php include 'header.php';
    include 'fetchdata.php';
$pizza = fetchPizza($_GET['p_ID']);
?>
<div id="chart">
    <img src="img/<?= $pizza['p_ID']?>.png" class="card-img-top" alt="pizzapic">
    <h1><?= $pizza['name']?></h1>
    <h2><?= $pizza['descr']?></h2>
    <h3>&euro;<?= $pizza['price']?></h3>
    <form id="pizzaselect" action="add_to_cart.php" method="get">
       <input value="<?= $pizza['p_ID']?>" name="p_ID" readonly type="hidden">
       <label for="amount">Hoeveelheid</label><input id="amount" name="amount" value="1" min="1" max="10" type="number" >
        <label for="type">Welke Type?</label><select id="type" name="t_ID" form="pizzaselect">
            <?php
       include 'dbconnect.php';
         $i = 1;
     $sql = "SELECT count(*) FROM `pizzatypes`";
     $result = $conn->prepare($sql);
     $result->execute();
     $number_of_rows = $result->fetchColumn();

     while ($i < $number_of_rows+1){
    $stmt = $conn->prepare("SELECT * FROM `pizzatypes` where t_ID=:t_ID");
    $stmt->execute(['t_ID' => $i]);
    $type = $stmt->fetch();
    if (empty($type)){
        $number_of_rows++;
        $i++;
    } else {
             ?> <option value="<?= $type['t_ID']?>"><?= $type['name']?></option> <?php
             $i++;
         }
     }
    $conn = null;
            ?>
        </select>
    <div id="order" class="view">
        <ul>
            <li id="but1"><button type="submit" form="pizzaselect" class="btn btn-primary">&nbsp;</button></li>
        </ul>
    </div>
    </form>
</div>
<?php include 'footer.php';?>
