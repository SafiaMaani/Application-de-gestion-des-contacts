<?php
include 'conDB.php';

class SignUp extends Connexion{

    public function insertUser($nom , $password)
	{
		$sql = "INSERT INTO $this->tableUsers(nom , password) VALUES('$nom', '$password')";
		$query = $this->conn->query($sql);  

        // var_dump($sql);
        
	} 
	
	public function signUp(){

		// if (isset($_POST['submit'])) {
	
		// 	$nom = $_POST['nom'];
		// 	$password = $_POST['password'];

        //     echo 'hello';
				
		// 	// $newUser = new SignUp($nom , $password);
		
		// 	// $query = $newUser->insertUser($nom, $password);
		
		// 	// echo "<script>alert('Votre inscription a été enregistrée avec succés');</script>";
		// }
	}
}