<?php
include_once("bdd.php");

$product_id = $_GET["product_id"];

$sth = $conn->prepare("
SELECT * FROM products WHERE product_id = ?");
$sth->execute([$product_id]);
$product = $sth->fetch();
?>