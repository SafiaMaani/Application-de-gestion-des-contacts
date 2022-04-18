<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="Assets/CSS/style.css">
    <title>Accueil</title>
</head>

<body>
    <?php
    include_once 'Assets/INCLUDES/navBar.php';
    ?>

    <section class="d-flex align-items-center p-5">
        <div class="w-50">
            <img src="Assets/SVG/Online world-pana.svg" alt="">
        </div>
        <div class="w-50 d-flex flex-column align-items-center">
            <h1>Bonjour !</h1>
            <div class="d-flex w-100 text-white">
                <div class="cadre1 w-50 ">
                    <p class="text-center">Vous avez pas de compte ?</p>
                    <a href="signUp.php" class="text-decoration-none text-white">
                        <div class="cadre2 d-flex align-items-center justify-content-center ">
                            S'inscrire
                        </div>
                    </a>
                </div>
                <div class="cadre1 w-50">
                    <p class="text-center">Vous avez déjà un compte ?</p>
                    <a href="signIn.php" class="text-decoration-none text-white">
                        <div class="cadre2 d-flex align-items-center justify-content-center ">
                            Se connecter
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>
</body>

</html>

</html>