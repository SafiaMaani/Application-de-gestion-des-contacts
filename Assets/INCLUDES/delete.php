<?php 
require_once 'CrudContacts.php';

if (isset($_GET['id'])) 
{
    echo $id = $_GET['id'];

    $deleteContact = new Contacts();
    $deleteContact -> supprimerContact($id);
}

header('Location: ../../profil.php');