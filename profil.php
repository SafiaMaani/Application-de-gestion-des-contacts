<?php
include_once("Assets/INCLUDES/Crud.php");
session_start();

if(empty($_SESSION['id'])){
    header("location: signIn.php");

}else{
    
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="Assets/CSS/style.css">
    <title>Profile</title>
</head>

<body>
    <?php include 'Assets/INCLUDES/navBar.php'; ?>

    <section class="d-flex w-100 text-white p-5">
        <div class="w-75 border border-5 p-5 profile">
            <h1>Bienvenue Mlle <?php echo $_SESSION['nom']; ?></h1>
            <div class="d-flex">
            <img class="w-25" src="Assets/SVG/Profile_pic-pana.svg" alt="">

                <div class="w-75 text-center">
                    <div class="info1 bg-dark">Nom d'utilisateur : <?php echo $_SESSION['nom']; ?></div>
                    <div class="info2">Date d'inscription : </div>
                    <div class="info3">Dernière Connexion : </div>

                </div>
            </div>
        </div>
        <div class="w-25 d-flex flex-column align-items-center">
            <div class="cadre1 w-75 ">
                <p class="text-center ">Souhaitez-vous ajouter un contact ?</p>
                <a href=" " class="text-decoration-none text-white" data-bs-toggle="modal" data-bs-target="#exampleModal">
                    <div class="cadre2 d-flex align-items-center justify-content-center ">
                        Ajouter un contact
                    </div>
                </a>
            </div>
            <div class="cadre1 w-75 ">
                <p class="text-center ">Souhaitez-vous voir votre liste de contacts ?</p>
                <a href=" " class="text-decoration-none text-white" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                    <div class="cadre2 d-flex align-items-center justify-content-center ">
                        Voir ma liste de contacts
                    </div>
                </a>
            </div>
        </div>
        
        <!-- Modal AJOUT CONTACT -->
        <div class="modal fade text-dark" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title text-primary" id="exampleModalLabel">Ajouter votre nouveau contact</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form action="" class="d-flex flex-column w-100">

                            <label class="mb-1">Nom</label>
                            <input id="nom" class="mb-1" type="text" name="nom">
                            <!-- <div id="error1" class="text-danger mb-1"></div> -->

                            <label class="mb-1">Teléphone</label>
                            <input id="telephone" class="mb-1" type="text" name="telephone">
                            <!-- <div id="error1" class="text-danger mb-1"></div> -->

                            <label class="mb-1">Email</label>
                            <input id="email" class="mb-1" type="text" name="email">
                            <!-- <div id="error1" class="text-danger mb-1"></div> -->

                            <label class="mb-1">Adresse</label>
                            <input id="adresse" class="mb-1" type="text" name="adresse">
                            <!-- <div id="error1" class="text-danger mb-1"></div> -->
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Enregistrer</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal LISTE CONTACTS -->
        <div class="modal fade text-dark" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title text-primary" id="staticBackdropLabel">Votre liste de contacts :</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <h1>A FAIRE</h1>
                        La liste de contacts ss forme d'un tableau donnant la possibilité de supprimer ou modifier le contact
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Fermer</button>
                    </div>
                </div>
            </div>
        </div>
    </section>

</body>

</html>
<?php } ?>