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
            $row['date_inscription'];

            if($nom = $row['nom'] && $password = $row['password']){
            $_SESSION['id'] = $row['id'] ;
            $_SESSION['nom'] = $row['nom'] ;
            $_SESSION['password'] = $row['password'] ;
            $_SESSION['date_inscription'] = $row['date_inscription'];
            $_SESSION['derCnx'] = date("Y-m-d H:i:sa");
            }
        }
        else{
            echo "<script>alert('les identifiants que vous avez entré sont incorrectes');</script>";
        }
        
    }
}