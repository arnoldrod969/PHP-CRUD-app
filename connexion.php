<?php
try {
    $strConnection = 'mysql:host=localhost;dbname=ProjetPHPGestionEtudiants';
    $pdo = new PDO($strConnection, 'root', '');
} catch (PDOException $e) {
    $msg = 'Erreur PDO dans '.$e->getMessage();
    die($msg);
}