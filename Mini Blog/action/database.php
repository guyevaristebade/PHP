<?php

    $db_name = "miniblog";
    $host = "localhost";
    $password = "";
    $username = "root";
    
    /**
     * connexion à la base de donnée 
    */

    $mysqli = mysqli_connect($host, $username, $password , $db_name);

    if(!$mysqli){
        echo " Echec de la connexion à la base de donnée";
        die();
    }
?>