<?php
include_once("./layout/header.php");
require("../controllers/order.php");
?>
<main>
    <h2>Mes Commandes:</h2>
    <?php
     //récupération et affichage des produits d'une commande utilisateur
     foreach ($orders as $order) {
        echo"<div class='order_container'>
                <div class='order_card flex'>
                    <div>
                        <img src='../assets/upload/" . $order['product_image'] . "'alt='image du produit' class='order_image'>
                    </div>
                    <div>
                        <h3>". $order['product_name'] ."</h3>
                            <p class='underline'>Description:</p> 
                            <br>
                            <p class='product_desc'>" . strstr($order['product_description'], ".", true) . "
                            <br>
                            <a href='product.php?product_id=" . $order['product_id'] . "' class='desc_link'>Lire la suite</a>
                            </p>
                            <br>
                    <div class='price_container'>
                        <p><strong>Prix:</strong> " . $order['product_price'] . "</p>
                    </div>
                </div>
            </div>";
     }
     ?>
</main>
<?php
include_once("./layout/footer.php");
?>