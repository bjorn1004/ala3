<?php include 'header.php';
?>



<section id="home">
<div class="row">
    <div class="col-12">
        <div class="center">
            <h1 class="text-m"> Welkom! </h1> <br>
            <p class="text-m"> Lorem ipsum dolor sit amet, consectetur adipisicing elit. A in fugit perspiciatis architecto reiciendis obcaecati nisi sint accusantium tempore eum. Ratione aperiam enim non asperiores eius, ducimus quia ex ipsam.
            Accusamus ut, sint totam excepturi iure. Veniam cum eos fuga facere explicabo saepe earum iure, officiis id ullam. Debitis quidem ea expedita itaque non fugit reiciendis voluptates, labore ad laborum.
            Error impedit magni in, culpa aperiam, fuga veritatis odit alias, dolore pariatur soluta. Ipsam facilis unde illo dolores maiores itaque veniam totam voluptatem consequuntur officiis, eum beatae, eius quod, commodi.
            Odit hic quasi blanditiis omnis, suscipit repellat iste dolore molestias, officiis architecto pariatur sequi quibusdam incidunt sapiente natus velit possimus asperiores, harum magni aut. Suscipit veniam architecto repudiandae esse, enim.
            Maxime cupiditate aliquid sapiente, eaque ullam at magnam, ut sequi. Repellendus neque autem reprehenderit, dignissimos asperiores repudiandae tempora temporibus voluptatibus sit deserunt, pariatur cum vel suscipit saepe esse ullam nihil! </p>
        </div>
    </div>
</div>
<div class="row" id="imageindex">
    <img src="./img/Pizzas.png">
</div>


</section>




<section id="featured">
  <div class="text-m">
    <h1>Featured</h1>
    <p class="itext"> </p>
</div>
<div class="row">

<div class="col-12 col-sm-12 col-md-12 col-lg-4">

      <?php include "drawcard.php";
drawCard(1); ?>

</div>
<div class="col-12 col-sm-12 col-md-12 col-lg-4">
<?php 
drawCard(3); ?>
</div>
<div class="col-12 col-sm-12 col-md-12 col-lg-4">

      <?php
drawCard(5); ?>

    </div>
  </div>
</section>

<div id="pizzas" class="card-columns">
</div>

<?php include 'footer.php';?>
