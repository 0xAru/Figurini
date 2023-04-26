<?php
include_once("./layout/header.php");
require("../controllers/shop.php");
?>
<main class= "mainShop">
    <?php
    foreach ($products as $product) {
       echo"<div class='product_card'>
                <div>
                    <img src='../assets/upload/" . $product['product_image'] . "'alt='image du produit' class='product_image'>
                </div>
                <div>
                    <h3>". $product['product_name'] ."</h3>
                        <p class='underline'>Description:</p> 
                        <br>
                        <p class='product_desc'>" . strstr($product['product_description'], ".", true) . "
                        <br>
                        <a href='product.php?product_id=" . $product['product_id'] . "' class='desc_link'>Lire la suite</a>
                        </p>
                        <br>
                <div class='price_container'>
                    <p><strong>Prix:</strong> " . $product['product_price'] . "</p>
                    <a href='#'><img src='../assets/images/ajouter-un-bouton.png' class='mini' title='Ajouter au panier'></a>
                </div>
                </div>
            </div>";
    }
    ?>
</main>
<?php
include_once("./layout/footer.php");
?>