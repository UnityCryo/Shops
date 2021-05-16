<?php

try {
	$connect = new pdo("mysql:host=localhost;dbname=mydb;charset=utf8", "root", "");

	$connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
} catch (Exception $e) {
	$e->getMessage();
}
