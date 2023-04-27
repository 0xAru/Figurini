<?php
include_once("../views/layout/header.php");
include_once("../controllers/basket.php");
?>
<main>
    <div class="basketContainer">
        <div class="flex">
            <img src='../assets/upload/<?=$product['product_image']?>' alt="image du produit" class="basket_image">
            <div>
                <h3><?=$product['product_name']?></h3>
                <p><strong><?=$product['product_price']?></strong></p>
            </div>
            <a><img src="../assets/images/fermer.png" class="close"></a>
        </div>
    </div>
</main>
<?php
include_once("../views/layout/footer.php");
?>