<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php
        if(isset($isHome) && $isHome){
            $path = "./";
        } else {
            $path = "../";
        }
    ?>
    <link rel='stylesheet' href='<?=$path?>assets/css/style.css'>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lobster+Two&display=swap" rel="stylesheet">
    <title>Figurini</title>
</head>

<body>
    <header>
        <h1><a href='<?=$path?>index.php'><img src='<?=$path?>assets/images/logo_figurini.png' class="logo"></a></h1>
        <nav>
            <ul class="nav-list">
            <li class="nav-item">
                    <a href='<?=$path?>views/shop.php' class="nav-link">Boutique</a>
                </li>
                <li class="nav-item">
                    <a href='<?=$path?>views/subscribe.php' class="nav-link">Inscription</a>
                </li>
                <li class="nav-item">
                    <a href='<?=$path?>views/login.php' class="nav-link">Connexion</a>
                </li>
                <li class="nav-item">
                    <a href='<?=$path?>views/dashboard.php' class="nav-link">Profil</a>
                </li>
                <li class="nav-item">
                    <a href='<?=$path?>views/basket.php' class="nav-link"><img src='<?=$path?>assets/images/panier.svg' class="mini"></a>
                </li>
            </ul>
        </nav>
    </header>