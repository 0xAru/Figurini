<?php 
session_start();

//gestion des erreurs
if(!empty($_POST)) {
    $firstname = htmlspecialchars($_POST["firstname"]);
    $name = htmlspecialchars($_POST["name"]);
    $adress = htmlspecialchars($_POST["adress"]);
    $city = htmlspecialchars($_POST["city"]);


$regexMail ="/^[a-zA-Z0-9.%+-]+@[a-zA-Z0-9.-]+.[a-zA-Z]{2,}$/";

if(!preg_match($regexMail, $_POST["email"])){
    $_SESSION["error_email"] = "Votre email est invalide";
    header("Location: ../views/subscribe.php");
} else {
    $email = $_POST["email"];
}

$regexPassword = '/^(?=.*[A-Z])(?=.*\d)[A-Z][A-Za-z\d?!\(\)\-\/\\\\_]{7,}$/';

if(!preg_match($regexPassword, $_POST["password"])) {
    $_SESSION["error_passwordOne"] = "Mot de passe invalide";
    header("Location: ../views/subscribe.php");
} 

if ($_POST["password"] == $_POST["confirmPassword"]) {
    
    $password = $_POST["password"];
} else {
    $_SESSION["error_passwordTwo"] = "Vos mots de passe ne correspondent pas";
    header("Location: ../views/subscribe.php");
}

$regexPostalCode = "/^(([0-8][0-9])|(9[0-5])|(2[ab])|(20)|(21)|(97[12]))[0-9]{3}$/";

if(!preg_match($regexPostalCode, $_POST["postalCode"]) || strlen($_POST["postalCode"]) < 5){
    $_SESSION["error_postalCode"] = "Le code postal renseigné est invalide";
    header("Location: ../views/subscribe.php");
} else {
    $postalCode = $_POST["postalCode"];
}

$regexPhone = '/^0[1-9](\s|-)?(\d{2}(\s|-)?){3}\d{2}$/';

if(!preg_match($regexPhone, $_POST["nmbPhone"])) {
    $_SESSION["error_phone"] = "Votre numéro de téléphone est invalide";
    header("Location: ../views/subscribe.php");
} else {
    $phone = $_POST["nmbPhone"];
}
}

//connexion à la bdd
include_once("./bdd.php");


//preparation de la requête
$hash = password_hash($password, PASSWORD_DEFAULT);
if (!empty($firstname) && !empty($name) && !empty($email) && !empty($hash) && !empty($adress) && !empty($postalCode) && !empty($city) && !empty($phone)) {
 
    $sth = $conn->prepare("
        INSERT INTO users(user_firstname, user_name, user_email, user_password, user_adress, user_postal_code, user_city, user_phone)
        VALUES(:firstname, :name, :email, :password, :adress, :postalCode, :city, :phone)
        ");
    
    $sth->bindParam(':firstname', $firstname);
    $sth->bindParam(':name', $name);
    $sth->bindParam(':email', $email);
    $sth->bindParam(':password', $hash);
    $sth->bindParam(':adress', $adress);
    $sth->bindParam(':postalCode', $postalCode);
    $sth->bindParam(':city', $city);
    $sth->bindParam(':phone', $phone);
//execution de la requête
    $sth->execute();

    header("Location: ../views/login.php");
}else{
    header("Location: ../views/subscribe.php");
}


