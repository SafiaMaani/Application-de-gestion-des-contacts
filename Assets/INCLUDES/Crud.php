<?php
include 'conDB.php';

class Crud extends Connexion
{	 
    public function affichage()
	{
		$query = "SELECT * FROM $this->tableUsers";

		$sql = $this->conn->query($query);
		$data = array();
		if ($sql->num_rows > 0) {
			while ($row = $sql->fetch_assoc()) {
			 $data[] = $row;
			}
			return $data;
		}else{
		 return false;
		}
	}
         
    public function insert($nom , $password)
    {
        $query = "INSERT INTO $this->tableUsers(nom , password) VALUES('$nom', '$password')";

        $sql = $this->conn->query($query);
    } 
}

$user = new Crud();

if (isset($_POST['submit'])) {
    
    $nom = $_POST['nom'];
    $password = $_POST['password'];
    
    $query = $user->insert($nom, $password);
}