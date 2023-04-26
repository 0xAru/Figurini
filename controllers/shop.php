<?php
include_once("bdd.php");

    $sth = $conn->prepare("
    SELECT * FROM products");
    $sth->execute();
    $products = $sth->fetchAll();
?>