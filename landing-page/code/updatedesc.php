<?php

include "landing.dbconf.php";

try{

    $connexion = new PDO(DB_DRIVER . ":host=" . DB_HOST . ";dbname=" . DB_NAME . ";charset=" . DB_CHARSET, DB_LOGIN, DB_PASS, DB_OPTIONS);

    $description = $_POST['description'];


    $requete = "UPDATE `metadescription`
                SET `description` = :description
                WHERE `id_meta` = 1";
    $prepare = $connexion->prepare($requete);
    $prepare->execute(array(
      ":description" => $description
    ));
    $resultat = $prepare->rowCount();



} catch (PDOException $e) {
    exit("🚫" . $e->getMessage());

}

header('Refresh:2; url=admin.php');
echo 'La description a bien été modifiée';


?>