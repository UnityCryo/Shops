<?php
session_start();
require_once('./DB.class.php');
require('./Fetch.php');
if (!empty($_POST['user_email']) && !empty($_POST['user_Password'])) {
  $LastName = $_POST['user_LastName'];
  $firstName = $_POST['user_Firstname'];
  $email = htmlspecialchars($_POST['user_email']);
  $password = sha1($_POST['user_Password']);
  $req = $connect->prepare("INSERT INTO utilisateur(FirstName, LastName, email, MDP) VALUES(?, ?, ?, ?)");
  $req->execute(array($firstName, $LastName, $email, $password));
  header('Location: Connexion.php');
}
?>
<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <title>Compte</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://fonts.googleapis.com/css?family=Muli:900&display=swap" rel="stylesheet">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
  <link rel="stylesheet" href="/CSS/Reg.css">
  <center>
    <h1>フレマンゴ</h1>
  </center>
  <img src="./Pics/image.png" width="100" height="100">
  <form action="./Register.php?log=1" method="post" name="inscription">
    <form class="form">
      <div class="form__group">
        <input type="text" placeholder="LastName" class="form__input" name="user_LastName">
      </div>
      <br>
      <br>
      <br>
      <div class="form__group">
        <input type="Text" placeholder="FirstName" class="form__input" name="user_Firstname">
      </div>
      <br>
      <br>
      <br>
      <div class="form__group">
        <input type="email" placeholder="Email" class="form__input" name="user_email">
      </div>
      <br>
      <br>
      <br>
      <div class="form__group">
        <input type="password" placeholder="Mot de Passe" class="form__input" name="user_Password">
      </div>
    </form>
    </div>
  </form>


</head>

<body>
  <br>
  <br>
  <br>
  <div><a href="#">
      <p><span class="bg"></span><span class="base"></span><span class="text" onclick="inscription.submit()">Créer un Compte</span></p>
    </a>


</body>

</html>