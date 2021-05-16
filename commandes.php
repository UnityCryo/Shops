<?php
$connect = new pdo("mysql:host=localhost;dbname=mydb;charset=utf8", "root", "");
function ajouter($Name_Product, $Product_Price, $Description_Product, $Product_image)
{
    try {

        global $connect;
        $req = $connect->prepare("INSERT INTO produit (Name_Product, Product_Price, Description_Product, Product_image) VALUES (?,?,?,?)");
        $req->execute(array($Name_Product, $Product_Price, $Description_Product, $Product_image));

    } catch (PDOException $err) {

        echo $err->getMessage();

    }

}

function afficher()
{
    global $connect;
    $req = $connect->prepare("SELECT * FROM produit ORDER BY idProduit DESC");

    $req->execute();

    $data = $req->fetchAll(PDO::FETCH_OBJ);

    return $data;
}

function supprimer($id)
{
    global $connect;
    $req = $connect->prepare("DELETE FROM produit WHERE idProduit = ?");

    $req->execute([$id]);

}
