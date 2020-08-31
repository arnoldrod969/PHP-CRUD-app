<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajouter un étudiant</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<?php
require_once "header.php";
?>
<div class="container mt-5">
    <h1 class="pb-5">Ajouter un etudiant</h1>
    <form class="form-group" action="saveEtudiant.php" method="post" enctype="multipart/form-data" >
        <div class="form-inline col-12">
            <label class="d-block col-4" for="nom">Nom et prenom :</label>
            <input name="nom" id="nom" class="d-block col-8 form-control" type="text">
        </div>
        <div class="form-inline col-8 my-3">
            <label class="d-block col-2" for="matricule">Matricule :</label>
            <input name="matricule" id="matricule" class="d-block col-6 offset-4 form-control" type="text">
        </div>
        <div class="form-inline col-8">
            <label class="d-block col-2" for="email">Email :</label>
            <input name="email" id="email" class="d-block col-6 offset-4 form-control" type="email">
        </div>
        <div class="form-inline col-8 my-3">
            <label class="d-block col-2" for="photo">Photo :</label>
            <input name="photo" id="photo" class="d-block col-6 offset-4 form-control" type="file">
        </div>
        <div class="col-6 offset-3">
            <button class="btn btn-success ml-5 w-75 my-5" type="submit" >Valider</button>
        </div>
        
    </form>
</div>