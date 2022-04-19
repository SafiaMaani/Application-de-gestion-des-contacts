<?php
include 'Connexion.php';

class Login extends Connexion{

    public function signIn($nom , $password)
    {	
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
            }
        }
        else{
            echo "<script>alert('les identifiants que vous avez entré sont incorrectes');</script>";
        }
        
    }
}