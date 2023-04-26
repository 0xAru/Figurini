<?php
include_once("../views/layout/header.php");
require("../controllers/product.php");
?>
<main class="mainShop">
    <div class="selected_product">
        <div><img src="../assets/upload/<?=$product['product_image']?>" alt="image du produit" class='product_image'>
        </div>
        <div>
            <h3><?=$product['product_name']?></h3>
            <p>Description:
                <br>
                <?=$product['product_description']?>
            </p>
            <br>
            <div class="price_container">
                <p><strong>Prix:</strong> <?=$product['product_price']?></p>
                <a href="#"><img src="../assets/images/ajouter-un-bouton.png" class="mini" title="Ajouter au panier"></a>
            </div>
        </div>
    </div>
</main>
<?php
include_once("../views/layout/footer.php");
?>