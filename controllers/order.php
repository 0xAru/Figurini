<?php
include_once("bdd.php");

$sth = $conn->prepare("
SELECT p.* FROM products p 
LEFT JOIN command_detail cd ON p.product_id = cd.detail_product_id
LEFT JOIN commands c ON c.command_id = cd.detail_command_id
LEFT JOIN users u ON u.user_id = c.command_user_id
WHERE u.user_id = 1");

$sth->execute();
$orders = $sth->fetchAll();
?>