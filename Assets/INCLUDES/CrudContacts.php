<?php
include 'Connexion.php';

class Contacts extends Connexion{
	
    public function addContact($nom , $telephone , $email , $adress){

        $sql = "INSERT INTO $this->tableContacts (nom, telephone, email, adress) VALUES('$nom', '$telephone' , '$email' , '$adress')";
        $this->conn->query($sql);
    }

    // public function affichageUser()
	// {
	// 	$query = "SELECT * FROM $this->tableUsers";
	// 	$sql = $this->conn->query($query);
		
	// 	$data = [];
	// 	if ($sql->num_rows > 0) {
	// 		while ($row = $sql->fetch_assoc()) {
	// 			$data[] = $row;
	// 		}
	// 		return $data;
	// 	}else{
	// 		return false;
	// 	}
	// }

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