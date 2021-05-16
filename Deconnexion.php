<?php
session_start();
session_destroy();

$_SESSION = array();

unset($_SESSION['email']);

header('Location: index.php');

?>