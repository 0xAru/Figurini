<?php
include_once("../views/layout/header.php")
?>
<main>
    <div class="layout">
        <div class="container">
            <form action="" method="POST" class="loginForm">
                <div class="align">
                    <label for="email">E-mail: </label>
                    <input type="email" name="email" id="email">
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