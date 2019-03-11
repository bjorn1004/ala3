<?php
    include 'fetchpizzas.php';
    function drawCard($p_ID) {
//        draws a pizzacard with information taken from database based on p_ID given
    $pizza = fetchPizza($p_ID);
?>
<div class="card mb-4" style="width: 18rem;">
    <img src="img/placeholder.png" class="card-img-top" alt="pizzapic">
    <div class="card-body">
        <h5 class="card-title">
            <?= $pizza['name']?>
        </h5>
        <p class="card-text"><?= $pizza['descr'] ?></p>
    </div>
    <ul class="list-group list-group-flush">
        <li class="list-group-item">&euro;<?= $pizza['price'] ?></li>
        <li class="list-group-item"><a href="#" class="btn btn-primary">Bestellen</a></li>
    </ul>
</div>
<?php }
?>
