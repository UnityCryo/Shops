<?php
session_start();
require 'ShopHeader.php';
include_once('DB.class.php');
$panier = $_COOKIE["panier"];
$req = $connect->prepare("SELECT * FROM produit");
$req->execute();
?>
<html>

<body>
	<title>Shop Cart</title>
</body>
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

</body>

</html>


