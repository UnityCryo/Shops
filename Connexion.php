<?php
session_start();
require_once('./DB.class.php');
require('./Fetch.php');
if (!empty($_POST['user_email']) && !empty($_POST['user_mdp'])) {
  $email = htmlspecialchars($_POST['user_email']);
  $password = $_POST['user_mdp'];
  $req = $connect->prepare("SELECT * FROM utilisateur WHERE email = ? AND MDP = ?");
  $req->execute(array($email, $password));
  $_SESSION['email'] = $email;
  header('Location:index.php');
}
//$check = $bdd->prepare('SELECT email, password FROM membre WHERE email = ?');
//$check->execute(array($email));
//$database = $check->fetch();
//$row = $check->rowCount();
//if ($row == 1) {
// if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
// if (password_verify($password, $database['password'])) {
//  if (!(isset($_SESSION))) {
//  }
//
//     }
//   }
// }

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
  <link rel="stylesheet" href="./CSS/Log.css">
  <center>
    <h1>フレッシュ</h1>
  </center>
  <img src="./Pics/image.png" width="100" height="100">


  <form method="POST" name="inscription">
    <div class="form__group">
      <input type="email" placeholder="Email" class="form__input" name="user_email">
    </div>
    <br>
    <br>
    <div class="form__group">
      <input type="password" placeholder="Mot de Passe" class="form__input" name="user_mdp">
    </div>
  </form>
</head>

<body>
  <div><a href="#">
      <p><span class="bg"></span><span class="base"></span><span class="text" onclick="inscription.submit()">Connécter</span></p>
    </a>
    <link href="./index.php">
</body>

</html>