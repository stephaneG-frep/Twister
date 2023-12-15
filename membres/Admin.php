<?php
//require "Utilisateurs.php";
//require "UtilisateursManager.php";
require "InclureClasses.php";



$bddPDO = new PDO('mysql:host=localhost; dbname=twister', 'root', '');
$bddPDO->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$manager = new UtilisateursManager($bddPDO);


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Administration</title>
    <link rel="stylesheet" href="admin.css">
</head>
<body>
    <p><a href="../index.php">Accéder à l'accueil du site</a></p>

        <table>
            <tr><th>Nom</th><th>Prenom</th><th>Tel</th><th>Email</th></tr>

            <?php

                foreach ($manager->getListeUtilisateurs() as $utilisateur)
                {
                    echo '<tr><td>', $utilisateur->getNom(),'</td><td>',
                    $utilisateur->getPrenom(),'</td><td>',
                    $utilisateur->getTel(),'</td><td>',
                    $utilisateur->getMail(),'</td></tr>';
                }

            ?>
        </table>
</body>
</html>