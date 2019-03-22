<?php include 'header.php';?>
<?php include 'drawcard.php';
drawCard($_GET['p_ID'])?>

<!--moet een ontwerp voor deze pagina hebben-->
<div id="chart">
  <img src="img/<?= $pizza['name']?>.png" class="card-img-top" alt="pizzapic">
</div>
<?php include 'footer.php';?>
