<?php
include_once("../views/layout/header.php");
?>

<main>
    <div class="layout">
        <div class="container">
            <form action="../controllers/login.php" method="POST">
                <div class="align">
                    <label for="email">E-mail: </label>
                    <input type="email" name="email" id="email">
                </div>
                <br>
                <div class="align">
                    <label for="password">Mot de passe: </label>
                    <input type="password" name="password" id="password">
                </div>
                <br>
                <div>
                    <a href="../views/forgotPassword.php" class="forgot center">Mot de passe oublié ?</a>
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
include_once("../views/layout/footer.php");
?>