<?php
session_start();

//connexion à la bdd
include_once("./bdd.php");

//gestion des erreurs
if (!empty($_FILES)) {
    $img_id = uniqid();
    $name = $img_id . $_FILES["product_image"]["name"];
    move_uploaded_file($_FILES["product_image"]["tmp_name"], "../assets/upload/" . $name);
}

if (!empty($_POST)) {
    $product_name = htmlspecialchars($_POST["product_name"]);
    $product_description = htmlspecialchars($_POST["product_description"]);
    $product_price = htmlspecialchars($_POST["product_price"]);
}

//préparation de la requête
if (!empty($product_name) && !empty($product_description) && !empty($product_price)) {
    $sth = $conn->prepare("
        INSERT INTO products(product_image, product_name, product_description, product_price)
        VALUES(:product_image, :product_name, :product_description, :product_price)"
    );
    $sth->bindParam(':product_image', $name);
    $sth->bindParam(':product_name', $product_name);
    $sth->bindParam(':product_description', $product_description);
    $sth->bindParam(':product_price', $product_price);

    $sth->execute();

    header("Location: ../views/adminDashboard.php");
}
