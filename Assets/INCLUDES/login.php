<?php
include 'conDB.php';

class Login extends Connexion{

    public function signIn($nom , $password){
		
        $sql = "SELECT * FROM users WHERE nom = '$nom' AND password = '$password'";
        $query = $this->conn->query($sql);
        
        if($query->num_rows > 0){

            $row = $query->fetch_array();

            $row['id'] ;
            $row['nom'] ;
            $row['password'] ;

            if($nom = $row['nom'] && $password = $row['password']){
            $_SESSION['id'] = $row['id'] ;
            $_SESSION['nom'] = $row['nom'] ;
            $_SESSION['password'] = $row['password'] ;

            // header('Location : ../../profil.php');
            }
        }
        else{
            echo "<script>alert('les idantifiants que vous avez entré sont incorrectes');</script>";
        }
        
}
}