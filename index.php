<?php include 'header.php';
?>



<section id="home">

  <div id="imageindex" class="center">
    <h1 class="text-m"> Welkom! </h1> <br>
    <p class="text-m"> Inleiding............textexttexttexttexttexttexttextexttexttexttexttexttexttextexttexttexttexttexttexttextexttexttexttexttexttext
      textexttexttexttexttexttexttextexttexttexttexttexttexttextexttexttexttexttexttexttextexttexttexttexttexttext
      textexttexttexttexttexttexttextexttexttexttexttexttexttextexttexttexttexttexttexttextexttexttexttexttexttext </p>
    <img src="./img/1.png">
    <img src="./img/2.png">
    <img src="./img/3.png">
    <img src="./img/5.png">
  </div>

</section>




<section id="featured">
  <div class="text-m">
    <h1>Featured</h1>
    <p class="itext"> </p>
  </div>

  <div class="row">
    <div class="col-4 col-sm-12 col-md-4">

      <?php include "drawcard.php";
drawCard(1); ?>

    </div>
    <div class="col-4 col-sm-12 col-md-4">
      <?php
drawCard(3); ?>
    </div>
    <div class="col-4 col-sm-12 col-md-4">

      <?php
drawCard(5); ?>

    </div>
  </div>
</section>


<!-- <div class="row">
<div id="order" class="index">
    <ul>
        <li id="but1"><a href="#Bestellen"><button type="button" class="btn btn-primary">&nbsp;</button></a></li>
        <li id="but2"><a href="#Afhalen"><button type="button" class="btn btn-secondary">Afhalen</button></a></li>
    </ul>
</div>
</div> -->

<div id="pizzas" class="card-columns">
  <?php
//draws a pizza card for every pizza in the database
    // include 'drawcard.php';
    // include 'dbconnect.php';
    // $i = 1;
    // $sql = "SELECT count(*) FROM `pizzas`";
    // $result = $conn->prepare($sql);
    // $result->execute();
    // $number_of_rows = $result->fetchColumn();

    // while ($i < $number_of_rows+1){
    // $check = fetchPizza($i);
    //     if ($check == false)  {
    //         $number_of_rows++;
    //         $i++;
    //     } else {
    //         drawCard($i);
    //         $i++;
    //     }
    // }
    ?>
</div>

<?php include 'footer.php';?>
