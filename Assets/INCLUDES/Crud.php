<?php
include 'classes.php';

$user = new Crud();

if (isset($_POST['submit'])) {
    
    $nom = $_POST['nom'];
    $password = $_POST['password'];
    
    $query = $user->insertUser($nom, $password);

    echo "<script>alert('Votre inscription a été enregistrée avec succés');</script>";
}

// header("Location : navBar.php");