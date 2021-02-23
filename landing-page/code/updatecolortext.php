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

    $textcolor = $_POST['textcolor'];


    $requete = "UPDATE `textcolor`
                SET `color` = :textcolor
                WHERE `id_textcolor` = 1";
    $prepare = $connexion->prepare($requete);
    $prepare->execute(array(
      ":textcolor" => $textcolor
    ));
    $resultat = $prepare->rowCount();



} catch (PDOException $e) {
    exit("🚫" . $e->getMessage());

}

header('Refresh:2; url=admin.php');
echo 'La couleur du texte a bien été modifiée.';


?>
</body>
</html>