<?php

class Connexion
{
    //Propriétés :
    private $server = 'localhost';
    private $username = 'root';
    private $password = '';
    private $database = 'gestioncontacts';
    public $tableUsers = 'users';
    public $conn;

    //Méthodes :
    public function __construct()
    {
        $this->conn = new mysqli($this->server, $this->username, $this->password, $this->database);
    }
}


