<?php
include_once("bdd.php");

if(!empty($_GET["id"])){
    $product_id = $_GET["id"];

    $sth = $conn->prepare("
    SELECT * FROM products WHERE product_id=?");
    $sth->execute([$product_id]);
    $product = $sth->fetch();
}
?>
