<?php
require_once 'connexion.php';

//requetes
$req = "SELECT * FROM etudiants"; //requete sql
$prepStatement = $pdo->prepare($req); //preparation de la requete
$prepStatement->execute(); //Execution
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Etudiants</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <?php require 'header.php' ?>
    <div class="container">
    <div class="col-12 col-md-12 mt-5">
    <h1 class="pb-5">Liste des etudiants</h1>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>Code</th>
                <th>matricule</th>
                <th>Nom</th>
                <th>Email</th>
                <th>Photo</th>
            </tr>
        </thead>
        <tbody>
            <?php while($etd = $prepStatement->fetch()) {?>
            <tr>
                <td><?php echo "{$etd['idEtudiant']}"; ?></td>
                <td><?php echo "{$etd['matricule']}" ;?></td>
                <td><?php echo "{$etd['nom']}" ;?></td>
                <td><?php echo "{$etd['email']}" ;?></td>
                <td><?php echo "{$etd['photo']}"; ?></td>
            </tr>
            <?php }?>
        </tbody>
    </table>
    </div>
    </div>
    
</body>
</html>