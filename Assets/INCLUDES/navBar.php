<?php

if (isset($_SESSION['id'])) {
    $name = $_SESSION['nom'];
    $contacts = '<a href="contacts.php" class="navLink navbar-brand">Contacts</a>';
    $btn = '<a id="btnDcnx" href="deconnexion.php" class="navLink text-decoration-none "><button type="button" class="btn border border-2 rounded-pill">Se déconnecter</a>';
} else {
    $name = '';
    $contacts ='';
    $btn = '<a id="btnCnx" href="signIn.php" class="navLink text-decoration-none "><button type="button" class="btn border border-2 rounded-pill">Se connecter</a>';
}
?>

<header class="d-flex justify-content-center align-items-center">
    <nav class="navbar bg-white  h-75 rounded-pill">
        <div class="container-fluid">
            <div>
                <a class="navLink navbar-brand">Liste des contacts</a>
            </div>
            <div>
                <a class="navLink navbar-brand"> <?php echo $name ;?></a>
                <?php echo $contacts?>
                <?php echo $btn; ?>
            </div>
        </div>
    </nav>
</header>