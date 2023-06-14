<?php
session_start();
//connexion à la bdd
include_once("./bdd.php");


//gestion des erreurs
if (!empty($_POST)) {
    $regexMail = "/^[a-zA-Z0-9.%+-]+@[a-zA-Z0-9.-]+.[a-zA-Z]{2,}$/";

    if (!preg_match($regexMail, $_POST["email"])) {
        $_SESSION["error_email"] = "Votre email est invalide";
        header("Location: ../views/login.php");
        exit();
    } else {
        $email = $_POST["email"];
    }

    $regexPassword = '/^(?=.*[A-Z])(?=.*\d)[A-Z][A-Za-z\d?!\(\)\-\/\\\\_]{7,}$/';
    if (!preg_match($regexPassword, $_POST["password"])) {
        $_SESSION["error_passwordOne"] = "Mot de passe invalide";
        header("Location: ../views/login.php");
        exit();
    } else {
        $password = $_POST["password"];
    }
}

//préparation de la requête
if (!empty($email) && !empty($password)) {
    $sth = $conn->prepare("
    SELECT * FROM users WHERE user_email = ?");
    $sth->execute([$email]);

    if ($sth->rowCount() > 0) {
        $user = $sth->fetch();
        if (password_verify($password, $user['user_password'])) {
            $_SESSION["user_id"] = $user["id"];
            if ($user["user_role"] == 1) {
                header("Location: ../views/adminDashboard.php");
                exit();
            } else {
                header("Location: ../views/dashboard.php");
                exit();
            }
        }
    }
}
//Si aucun utilisateur trouvé ou mot de passe incorrect
$_SESSION["error_login"] = "Identifiants invalides";
header("Location: ../views/login.php");
exit();
