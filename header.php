<!DOCTYPE html>
<html>

<head>
  <link rel="apple-touch-icon" sizes="57x57" href="favicon/apple-icon-57x57.png">
  <link rel="apple-touch-icon" sizes="60x60" href="favicon/apple-icon-60x60.png">
  <link rel="apple-touch-icon" sizes="72x72" href="favicon/apple-icon-72x72.png">
  <link rel="apple-touch-icon" sizes="76x76" href="favicon/apple-icon-76x76.png">
  <link rel="apple-touch-icon" sizes="114x114" href="favicon/apple-icon-114x114.png">
  <link rel="apple-touch-icon" sizes="120x120" href="favicon/apple-icon-120x120.png">
  <link rel="apple-touch-icon" sizes="144x144" href="favicon/apple-icon-144x144.png">
  <link rel="apple-touch-icon" sizes="152x152" href="favicon/apple-icon-152x152.png">
  <link rel="apple-touch-icon" sizes="180x180" href="favicon/apple-icon-180x180.png">
  <link rel="icon" type="image/png" sizes="192x192" href="favicon/android-icon-192x192.png">
  <link rel="icon" type="image/png" sizes="32x32" href="favicon/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="96x96" href="favicon/favicon-96x96.png">
  <link rel="icon" type="image/png" sizes="16x16" href="favicon/favicon-16x16.png">
  <link rel="manifest" href="favicon/manifest.json">
  <meta name="msapplication-TileColor" content="#ffffff">
  <meta name="msapplication-TileImage" content="favicon/ms-icon-144x144.png">
  <meta name="theme-color" content="#ffffff">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="style.css">
  <meta charset="UTF-8">
  <meta name="viewport" content="width = device-width, initial-scale = 1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title> Sopranos Pizza </title>
</head>

<body>
    <header>
        <div class="jumbotron jumbotron-fluid">
          <img onclick="spin()" id="spinImg" src="img/pizzalogo.svg" alt="Pizza logo">
          <h1 class="display-4 lead">Sopranos Pizza</h1>
          <p class="lead">Pizza bereidt op een traditioneel Italiaanse manier</p>
        </div>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item active">
              <a class="nav-link" href="./index.php"><h2>Home</h2> <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="./menu.php"><h3>Menu</h3></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="./index.php#featured"><h3>Featured</h3></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="./about.php"><h3>Over ons</h3></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="./locaties.php"><h3>Locaties</h3></a>
            </li>
            </ul>
            <ul class="navbar-nav ml-auto">
            <li>
            <a class="nav-link" href=./shoppingcart.php> <img id="shoppingcart" src="img/Shopping_Cart.png"></a>
            </li>
          </ul>
        </div>
      </nav>
    </header>
    <div class="container container-fluid rounded">
