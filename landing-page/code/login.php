<?php

include "landing.dbconf.php";

try{

$connexion = new PDO(DB_DRIVER . ":host=" . DB_HOST . ";dbname=" . DB_NAME . ";charset=" . DB_CHARSET, DB_LOGIN, DB_PASS, DB_OPTIONS);

// déclaration

$goodUser = FALSE;

// récupère les valeurs postées

$postedPassword = $_POST['password'];

// récupère le mot de passe stocké dans la BDD

$requete = "SELECT * FROM `password`";
$prepare = $connexion->prepare($requete);
$prepare->execute(array());
$resultat = $prepare->fetchAll();

} catch (PDOException $e) {
    exit("🚫" . $e->getMessage());

}

foreach($resultat as $key => $value){
    $password = $value['mdp'];
}

// si le mot de passe correspond, la valeur de $goodUser passe à TRUE

if($postedPassword === $password){
    $goodUser = TRUE;
        }

// Si le mot de passe est reconnu on lance la session sinon bye bye

if($goodUser){

    include("session-init.php");
    $_SESSION['token'] = TRUE;
    header('Location: admin.php');
    exit;
}

else{
    header('Refresh:4; url=index.php');
    echo 'Le mot de passe est erroné, vous allez être redirigé vers la page d\'accueil';
}