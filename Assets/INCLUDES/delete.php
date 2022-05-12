<?php 
require_once 'CrudContacts.php';

if (isset($_GET['id_contact'])) 
{
    echo $id_contact = $_GET['id_contact'];

    $deleteContact = new Contacts();
    $deleteContact -> supprimerContact($id_contact);
}

header('Location: ../../profil.php');