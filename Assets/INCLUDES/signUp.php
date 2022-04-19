<?php

include 'Connexion.php';

class SignUp extends Connexion{

    public function register($nom , $password)
	{
		$sql = "INSERT INTO $this->tableUsers (nom , password) VALUES('$nom', '$password')";
        $this->conn->query($sql); 

		// I have to destroy the session when the user sign up (when he will be redirected to the sign in page if there is already a session he will access to an other user profil)
		session_start();
		session_unset(); //vider les variables de sessions
		session_destroy(); //detruire la session 
	} 
}

