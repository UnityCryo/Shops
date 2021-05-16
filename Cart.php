<?php
require 'DB.class.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Fresh</title>
  <link rel="icon" type="image/png" href="images/icons/favicon.ico">
  <link rel="stylesheet" href="./CSS/styles.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.13.0/css/all.css" />
</head>

<body>
  <!-- Barre de navigation -->

  <nav>
    <h1>フレッシュ</h1>
    <div class="onglets">
      <ul>
        <li><a href="Nouveautés.php">Nouveautés</a>
        <li><a href="Shop.php">Shop</a>
        <li><a href="Contact.php">Contactez-nous</a>
      </ul>


      <p><a href="Register.php"><i class="fas fa-user-circle"></i></a></p>
      <p><a href="Connexion.php">Connexion</a></p>
      <p><a href="deconnexion.php"><img src="./Pics/Deco.png"></img></a>
      <p><a href="Cart.php"><i class="fas fa-shopping-cart"></i></a></p>
      <p><a href="Supprimer.php"><i class="fas fa-users-cog"></i></a></p>
    </div>
  </nav>
  <!-- Fin de la barre de navigation -->

  <!-- Header -->
  <header>
    <h1>Panier</h1>
  </header>