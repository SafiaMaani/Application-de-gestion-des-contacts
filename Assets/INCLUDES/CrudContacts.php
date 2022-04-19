<?php
require_once 'Connexion.php';

class Contacts extends Connexion{
	
    public function addContact($nom , $telephone , $email , $adress ,$id){

        $query = "INSERT INTO $this->tableContacts (nom, telephone, email, adress , id ) VALUES('$nom', '$telephone' , '$email' , '$adress' , '$id')";
        
        $sql = $this->conn->query($query);
    }

    public function affichageContacts($id)
	{        
		$query = "SELECT * FROM $this->tableContacts WHERE id = $id";
		$sql = $this->conn->query($query);
		
		$contacts = [];

		if ($sql->num_rows > 0) {
			while ($row = $sql->fetch_assoc()) {
				$contacts[] = $row;
			}
			return $contacts;
		}
	}
    public function supprimerContact($id){

        $query = "DELETE FROM $this->tableContacts WHERE id_contact = $id";
        $sql = $this->conn->query($query);
    }

    public function modifierContact($nom , $telephone , $email , $adress , $id_contact ){

        $query = "UPDATE $this->tableContacts SET `nom`= '$nom', `telephone` = '$telephone',`email` = '$email', `adress` = '$adress' WHERE id_contact = '$id_contact' ";

        $sql = $this->conn->query($query);
    }
}

