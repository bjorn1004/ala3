<?php
include 'header.php';
include 'drawcard.php';
include 'dbconnect.php';

?>
<section id="home">
<div id="pizzas" class="card-columns">
  <?php
//draws a pizza card for every pizza in the database

  
    $i = 1;
    $sql = "SELECT count(*) FROM `pizzas`";
    $result = $conn->prepare($sql);
    $result->execute();
    $number_of_rows = $result->fetchColumn();

    while ($i < $number_of_rows+1){
    $check = fetchPizza($i);
        if ($check == false)  {
            $number_of_rows++;
            $i++;
        } else {
            drawCard($i);
            $i++;
        }
    }
    ?>
</div>
</section>
<?php
include 'footer.php';

?>