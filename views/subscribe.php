<?php
session_start();
include_once("../views/layout/header.php");
?>

<main>
    <div class="layout">
        <div class="container">
            <form action="../controllers/subscribe.php" method="POST" class="registerForm">
                <div class="pad layout">
                    <a href="./login.php" class="forgot" id="padleft">Déjà inscrit?</a>
                </div>
                <div class="align">
                    <label for="firstname">Prénom: </label>
                    <input type="text" name="firstname" id="firstname">
                </div>
                <br>
                <div class="align">
                    <label for="name">Nom: </label>
                    <input type="text" name="name" id="name">
                </div>
                <br>
                <div class="align">
                    <label for="email">E-mail: </label>
                    <input type="email" name="email" id="email">
                </div>
                <div class="error">
                    <p class="small"><?php
                                        if (!empty($_SESSION["error_email"])) {
                                            echo $_SESSION["error_email"];
                                            unset($_SESSION["error_email"]);
                                        }
                                        ?>
                    </p>
                </div>
                <br>
                <div class="align">
                    <label for="password">Mot de passe: </label>
                    <input type="password" name="password" id="password">
                </div>
                <div class="mdp">
                    <small>
                        <p>Le mot de passe doit être composé d'au moins 8 caractères, commencer par une majuscule et contenir au moins un chiffre.<br>Les caractères spéciaux suivants sont autorisés: ? ! : ( ) /\ - _</p>
                    </small>
                    <p class="small"><?php
                                        if (!empty($_SESSION["error_passwordOne"])) {
                                            echo $_SESSION["error_passwordOne"];
                                            unset($_SESSION["error_passwordOne"]);
                                        }
                                        ?>
                    </p>
                </div>
                <br>
                <div class="align">
                    <label for="confirmPassword">Confirmez le mot de passe: </label>
                    <input type="password" name="confirmPassword" id="confirmPassword">
                </div>
                <div class="error">
                    <p class="small mdp"><?php
                                            if (!empty($_SESSION["error_passwordTwo"])) {
                                                echo $_SESSION["error_passwordTwo"];
                                                unset($_SESSION["error_passwordTwo"]);
                                            }
                                            ?>
                </div>
                <br>
                <div class="align">
                    <label for="adress">Adresse: </label>
                    <input type="adress" name="adress" id="adress">
                </div>
                <br>
                <div class="align">
                    <label for="postalCode">Code Postal: </label>
                    <input type="text" name="postalCode" id="postalCode">
                </div>
                <div class="error">
                    <p class="small"><?php
                                        if (!empty($_SESSION["error_postalCode"])) {
                                            echo $_SESSION["error_postalCode"];
                                            unset($_SESSION["error_postalCode"]);
                                        }
                                        ?>
                </div>
                <br>
                <div class="align">
                    <label for="city">Ville: </label>
                    <input type="text" name="city" id="city">
                </div>
                <br>
                <div class="align">
                    <label for="nmbPhone">Numéro de téléphone: </label>
                    <input type="text" name="nmbPhone" id="nmbPhone">
                </div>
                <div class="error">
                    <p class="small"><?php
                                        if (!empty($_SESSION["error_phone"])) {
                                            echo $_SESSION["error_phone"];
                                            unset($_SESSION["error_phone"]);
                                        }
                                        ?>
                </div>
                <br>
                <div class="center">
                    <button>
                        Envoyer
                        <span></span>
                        <span></span>
                        <span></span>
                        <span></span>
                    </button>
                </div>
        </div>
    </div>
    </form>
</main>
<?php
include_once("../views/layout/footer.php")
?>