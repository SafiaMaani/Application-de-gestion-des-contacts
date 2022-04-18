<?php


class Connexion
{
    //Propriétés :
    public $tableUsers = 'users';
    public $conn;

    //Méthodes :
    public function __construct()
    {
        $this->conn = new mysqli('localhost', 'root', '', 'gestioncontacts');
        return $this->conn;
    }
}



