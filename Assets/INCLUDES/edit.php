<?php
require_once "login.php";
require_once "CrudContacts.php";

if (isset($_POST['edit'])) {

    $id_contact = $_GET['id'] ;

    $nom = $_POST['nom'] ;
    $telephone = $_POST['telephone'] ;
    $email = $_POST['email'] ;
    $adress = $_POST['adress'] ;

    $modifierContact = new Contacts();
    $modifierContact->modifierContact($nom, $telephone, $email, $adress, $id_contact);
    header('Location: ../../profil.php');

}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="Assets/CSS/style.css">
    <title>Modifier un contact</title>
</head>

<body>
    <div class="container d-flex justify-content-center">
        <form method="POST" class="d-flex flex-column align-items-center bg-light w-50 mt-5">

            <!-- <input id="nom" class="w-75" type="text" name="id_contact"> -->

            <div class="d-flex w-75 mt-5 mb-3">
                <label class="w-25">Nom</label>
                <input id="nom" class="w-75" type="text" name="nom">
            </div>

            <div class="d-flex w-75 mb-3">
                <label class="w-25">Teléphone</label>
                <input id="telephone" class="w-75" type="text" name="telephone">
            </div>

            <div class="d-flex w-75 mb-3">
                <label class="w-25">Email</label>
                <input id="email" class="w-75" type="text" name="email">
            </div>

            <div class="d-flex w-75 mb-3">
                <label class="w-25">Adresse</label>
                <input id="adresse" class="w-75" type="text" name="adress">
            </div>
            <div class="w-100 d-flex justify-content-between">
                <button class="btn btn-danger"><a href="../../profil.php" class="text-decoration-none text-white">Revenir au profil</a></button>
                <button type="submit" name="edit" class="btn btn-primary">Modifier le contact </button>
            </div>
        </form>
    </div>
</body>

</html>