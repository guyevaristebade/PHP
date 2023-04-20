<?php

    session_start();

    $db_name = "miniblog";
    $host = "localhost";
    $password = "";
    $username = "root";
    
    /**
     * connexion à la base de donnée 
    */
    try {

        $mysqli = mysqli_connect($host, $username, $password , $db_name);
        
    } catch (Exception $e) {

        echo "erreur de la connexion à la base de donnée  ". $e->getMessage();
        die();
    }    
?>