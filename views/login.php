<?php
include_once("../views/layout/header.php");
?>

<main>
    <div class="layout">
        <div class="container">
            <div class="error">
                <p class="small"><?php
                                    if (!empty($_SESSION["error_login"])) {
                                        echo $_SESSION["error_login"];
                                        unset($_SESSION["error_login"]);
                                    }
                                    ?>
                </p>
            </div>
            <form action="../controllers/login.php" method="POST" class="loginForm">
                <div class="pad">
                    <a href="../views/subscribe.php" class="new">Nouveau sur le site ?</a>
                </div>
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
                <div class="error">
                    <p class="small"><?php
                                        if (!empty($_SESSION["error_passwordOne"])) {
                                            echo $_SESSION["error_passwordOne"];
                                            unset($_SESSION["error_passwordOne"]);
                                        }
                                        ?>
                    </p>
                </div>
                <br>
                <div>
                    <a href="../views/forgotPassword.php" class="new">Mot de passe oublié ?</a>
                </div>
                <br>
                <div class="logBtn">
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
include_once("../views/layout/footer.php");
?>