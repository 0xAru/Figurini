<?php
include_once("../views/layout/header.php");
?>
<main>
    <h1>Interface administrateur</h1>
    <div class="layout">
        <div class="container">
            <form action="../controllers/adminDashboard.php" method="POST" enctype="multipart/form-data">
                <div class="align">
                    <label for="image">Selectionnez une image:</label>
                    <input type="file" name="product_image" id="product_image">
                </div>
                <br>
                <div class="align">
                    <label for="product_name">Nom du produit:</label>
                    <input type="text" name="product_name" id="product_name">
                </div>
                <br>
                <div class="align">
                    <label for="product_description">Description du produit:</label>
                    <input type="text" name="product_description" id="product_description">
                </div>
                <br>
                <div class="align">
                    <label for="product_price">Prix du produit:</label>
                    <input type="text" name="product_price" id="product_price">
                </div>
                <br>
                <div class="buttonDash">
                    <button type="submit">Envoyer
                        <span></span>
                        <span></span>
                        <span></span>
                        <span></span>
                    </button>
                </div>
            </form>
        </div>
    </div>
</main>
<?php
include_once("../views/layout/footer.php")
?>