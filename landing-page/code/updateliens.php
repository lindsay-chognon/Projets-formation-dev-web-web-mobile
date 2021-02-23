<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php

include "landing.dbconf.php";

try{

    $connexion = new PDO(DB_DRIVER . ":host=" . DB_HOST . ";dbname=" . DB_NAME . ";charset=" . DB_CHARSET, DB_LOGIN, DB_PASS, DB_OPTIONS);

    $lien = $_POST['lien'];
    $id_lien = $_POST['id_lien'];

    // Si le bouton supprimer a été cliqué, la variable est rendue NULL

    if(isset($_POST['supprimer'])){
        $lien = NULL; 
    }
    else{
    
    }

    // Update avec la valeur entrée si le bouton modifier a été cliqué, soit la valeur rendue NULL si le bouton supprimer a été cliqué

    $requete = "UPDATE `liens`
                SET `lien` = :lien
                WHERE `id_lien` = :id_lien";
    $prepare = $connexion->prepare($requete);
    $prepare->execute(array(
      ":lien" => $lien,
      ":id_lien" => $id_lien
    ));
    $resultat = $prepare->rowCount();



} catch (PDOException $e) {
    exit("🚫" . $e->getMessage());

}

header('Refresh:2; url=admin.php');
echo 'La lien a bien été modifié ou supprimé.';


?>
</body>
</html>