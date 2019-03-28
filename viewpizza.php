<?php include 'header.php';?>
<?php include 'fetchpizzas.php';
$pizza = fetchPizza($_GET['p_ID']);
?>
<div id="chart">
  <img src="img/<?= $pizza['p_ID']?>.png" class="card-img-top" alt="pizzapic">
  <h1><?= $pizza['name']?></h1>
  <h2><?= $pizza['descr']?></h2>
  <h3>&euro;<?= $pizza['price']?></h3>
  <div id="order" class="view">
    <ul>
        <li id="but1"><a href="#Bestellen"><button type="button" class="btn btn-primary">Bestellen</button></a></li>
        <li id="but2"><a href="#Afhalen"><button type="button" class="btn btn-secondary">Afhalen</button></a></li>
    </ul>
</div>
</div>
<?php include 'footer.php';?>
