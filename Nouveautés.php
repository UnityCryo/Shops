<?php
session_start();
require 'Header2.php';
require("commandes.php");
require_once('DB.class.php');
$Produits = afficher();

global $connect;
$req = $connect->prepare("SELECT * FROM produit");
$req->execute();


?>

<?php while ($row = $req->fetch()) : ?>
  <section class="main">
    <div class="cards">
      <div class="card">

        <?php echo '<img src="'. $row['Product_image'] . '">' ?>

        <div class="card-header">
          <?php echo $row['Name_Product']; ?>
          <div><?php echo $row['Description_Product']; ?>
          <div><?php echo $row['Product_Price']; ?>
          </div>
        </div>
        </div>
        <div class="card-body">
              <a href="addCart?p=<?php $row['Name_Product']; ?>">Add to cart</a>
              <small class="text-muted"><?php $row['Product_Price']; ?>€</small>
        </div>

<?php endwhile; ?>

<?php if (isset($_SESSION['email'])) {
  echo '<script>alert("session active")</script>';
} ?>