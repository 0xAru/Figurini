<?php
session_start();
include_once("../views/layout/header.php");
// include_once("../controllers/bdd.php");
//     $sth = $conn->prepare("
//     SELECT * from users WHERE user_id = ?");
//     $sth->execute($SESSION["user_id"]);
?>
<main class="mainContainer">
    <h2>Mon Profil</h2>
    <div class="boxContainer">
        <a href="../views/order.php" class="boxLink">
            <div class="box">
                <h3>Mes commandes</h3>
                <p><small>Suivre mes commandes</small></p>
            </div>
        </a>
        <a href="../views/adress.php" class="boxLink">
            <div class="box">
                <h3>Mes adresses</h3>
                <p><small>Modifier les adresses et les préférences de livraisons</small></p>
            </div>
        </a>
        <a href="../views/sécurity.php" class="boxLink">
            <div class="box">
                <h3>Connexion et Sécurité</h3>
                <p><small>Gérer le mot de passe, l'adresse mail et le numéro de téléphone</small></p>
            </div>
        </a>
    </div>
    <div class="boxContainer margin">
        <a href="../views/payment.php" class="boxLink">
            <div class="box">
                <h3>Mes paiements</h3>
                <p><small>Gérer les modes de paiement et les paramètres</small></p>
            </div>
        </a>
        <a href="../views/messaging.php" class="boxLink">
            <div class="box">
                <h3>Messagerie</h3>
                <p><small>Consulter les messages de Figurini</small></p>
            </div>
        </a>
    </div>
</main>
<?php
include_once("../views/layout/footer.php")
?>