<?php
$mat = $_POST['matricule'];
$nom = $_POST['nom'];
$email = $_POST['email'];
$picname = $_FILES['photo']['name'];
$tmpFile = $_FILES['photo']['tmp_name'];

// echo '<pre>';
// var_dump($_FILES);
// var_dump($_POST);

move_uploaded_file($tmpFile, './images/'.$picname);