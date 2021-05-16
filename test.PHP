<?php require 'header.php'; ?>

<?php
$bdd = new mysqli();
$req = $base->prepare('SELECT * FROM produit');
$req->execute();

?>



    <?php require 'footer.php'; ?>