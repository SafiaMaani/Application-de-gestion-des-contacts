<?php
include 'Assets/INCLUDES/login.php';
session_start();

if(isset($_SESSION['id'])){
    header("location: profil.php");
    
}else{
    
    if (isset($_POST['submit'])) {
        $nom = $_POST['nom'];
        $password = $_POST['password'];
        
        $verifierUser = new Login();
        $verifierUser->signIn($nom ,$password);       
    }
 
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="Assets/CSS/style.css">
    <title>Connexion</title>
</head>

<body>
    <?php include 'Assets/INCLUDES/navBar.php'; ?>

    <section class="d-flex">
        <div class="w-50 d-flex justify-content-center">
            <img class="w-75" src="Assets/SVG/Mobile login-cuate.svg" alt="">
        </div>
        <div class="w-50 d-flex align-items-center justify-content-center">
            <form onsubmit="return(validation())" method="post"  class="d-flex flex-column w-75">

                <h1 class="text-center p-3">Connexion</h1>

                <label class="mb-1">Nom</label>
                <input class="mb-1" type="text" id="nom" name="nom">
                <div id="error1" class="text-danger mb-1"></div>


                <label class="mb-1">Mot de passe</label>
                <input class="mb-1" type="password" id="mdp" name="password">
                <div id="error2" class="text-danger mb-1"></div>

                <button name="submit" type="submit" class="botona btn btn-secondary mb-4 mt-3">Se connecter</button>
                <p>Vous avez pas de compte ? <a href="signUp.php" class="text-decoration-none">Inscrivez-vous</a></p>
            </form>
        </div>
    </section>

    <script src="Assets/JS/script.js"></script>
</body>

</html>
<?php } ?>