<?php
include 'conDB.php';

class Crud extends Connexion
{	 
	public function insertUser($nom , $password)
	{
		$query = "INSERT INTO $this->tableUsers(nom , password) VALUES('$nom', '$password')";
		$sql = $this->conn->query($query);   
	} 

    public function affichageUser()
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
	public function signIn(){
		if (isset($_POST['submit'])) {
			$nom = $_POST['nom'];
			$password = $_POST['password'];
		
			// echo 'HELLLOOOOOOOOOOOOOOO';
		
			$sql = "SELECT * FROM users";
			$query = mysqli_query($this ->conn, $sql);
		
			while ($row = mysqli_fetch_assoc($query)) {
				$row['nom'];
				$row['password'];
				$row['id'];
		
				if ($nom == $row['nom'] && $password == $row['password']) {
					$_SESSION['nom'] = $row['nom'];
					$_SESSION['password'] = $row['password'];
					$_SESSION['id'] = $row['id'];
		
					header("Location: profil.php");
		
				} else if ($nom !== $row['nom'] || $password !== $row['password']) {
					$error = "The authentication is failed (Incorrect nom or Password)";
				}
			}
	}
}
}

class User{

}

class Contact{

}

?>
<!-- $voirUser = new Crud();
$users = $voirUser->affichageUser();
$output = "";
$output .= "
                            <table class='table table-striped table-hover'>
                                <thead>
                                <tr>
                                    <th>Nom</th>
                                    <th>Date d'inscription</th>
                                    <th>Derniere Connxion</th>
                                </tr>
                                </thead>
                                <tbody>";
foreach ($users as $user) {
    $output .= "<tr>
                                    <td>" . $user['nom'] . "</td>
                                    <td>" . $user['id'] . "</td>
                                    <td>" . $user['password'] . "</td>
                                
                                </tr>";
}
$output .= "</tbody>
                            </table>";
echo $output; -->