<?php

    function passwordCompare($psswd , $psswdConf){
        if($psswd  !== $psswdConf){
            $msgError = "les mot de passe ne sont pas similaire";
            return true;
        }        
    }
?>