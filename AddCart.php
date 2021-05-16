<?php

$produit = htmlspecialchars($_GET["p"]);

if (isset($_COOKIE["panier"])) $panier = $_COOKIE["panier"].",".$produit;
else $panier = $produit;

setcookie("panier", $panier);

header("Location: index.php");
&