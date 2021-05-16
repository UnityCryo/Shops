<?php

include_once("commandes.php");

if (isset($_POST['valider'])) {
    if (isset($_POST['nom']) and isset($_POST['prix']) and isset($_POST['desc']) and isset($_POST['Link'])) {
        if (!empty($_POST['nom']) and !empty($_POST['prix']) and !empty($_POST['desc']) and !empty($_POST['Link'])) {
            /* $Name_Product = htmlspecialchars(strip_tags($_POST['nom']));
            $Product_Price = htmlspecialchars(strip_tags($_POST['prix']));
            $Description_Product = htmlspecialchars(strip_tags($_POST['desc']));
            $Product_image = htmlspecialchars(strip_tags($_POST['image'])); */
            $Name_Product = $_POST['nom'];
            $Product_Price = $_POST['prix'];
            $Description_Product = $_POST['desc'];
            $Product_image = $_POST['Link'];
            ajouter($_POST['nom'], $Product_Price, $Description_Product, $Product_image);
            //die ('test');
        }
    }
}

?>
<!DOCTYPE html>
<html>

<head>
    Admin Session
    <ul><li><a href="index.php">Menu</a></ul>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
    <title></title>
</head>

<body>

    <div class="album py-5 bg-light">
        <div class="container">

            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">

                <form method="post">
                    <div class="mb-3">
                        <label for="name" class="form-label">Nom du produit</label>
                        <input type="text" class="form-control" name="nom" required>
                    </div>

                    <div class="mb-3">
                        <label for="Price" class="form-label">Prix</label>
                        <input type="number" class="form-control" name="prix" required>
                    </div>

                    <div class="mb-3">
                        <label for="Description" class="form-label">Description</label>
                        <textarea class="form-control" name="desc" required></textarea>
                    </div>

                    <div class="mb-3">
                        <label for="Link" class="form-label">Image Source</label>
                        <textarea class="form-control" name="Link" required></textarea>
                    </div>

                    <button type="submit" name="valider" class="btn btn-primary">Ajouter un nouveau produit</button>
                </form>

            </div>
        </div>
    </div>


</body>

</html>