<?php
include 'Assets/INCLUDES/signUp.php';

if (isset($_POST['submit'])) {
    $nom = $_POST['nom'];
    $password = $_POST['password'];
     
    $newUser = new SignUp();
    $newUser->register($nom, $password);
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="Assets/CSS/style.css">
    <title>Inscription</title>
</head>

<body>
    <?php include 'Assets/INCLUDES/navBar.php'; ?>

    <section class="d-flex">
        <div class="w-50 d-flex justify-content-center">
            <img class="w-75" src="Assets/SVG/Mobile login-pana.svg" alt="">
        </div>
        <div class="w-50 d-flex align-items-center justify-content-center">
            <form onsubmit="return(validation())" method="POST" class="d-flex flex-column w-75">

                <h1 class="text-center p-3">Inscription</h1>

                <label class="mb-1">Nom</label>
                <input id="nom" class="mb-1" type="text" name="nom">
                <div id="error1" class="text-danger mb-1"></div>

                <label class="mb-1">Mot de passe</label>
                <input id="mdp" class="mb-1" type="password" name="password">
                <div id="error2" class="text-danger mb-1"></div>

                <label class="mb-1">Confirmer le mot de passe</label>
                <input id="mdp2" class="mb-1" type="password">
                <div id="error3" class="text-danger mb-1"></div>

                <button name="submit" type="submit" class="botona btn btn-secondary mb-4 mt-3">S'inscrire</button>
                <p>Vous avez déjà un compte ? <a href="signIn.php" class="text-decoration-none">Se connecter</a></p>

            </form>
        </div>
    </section>
    <script src="Assets/JS/script.js"></script>
</body>

</html>