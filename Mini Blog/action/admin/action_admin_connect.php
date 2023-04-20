<?php

    require('../database.php');

    $msgError = "";

    /**
     * on vérifie si les champs existe 
    */
    if(isset($_POST['nom']) && isset($_POST['prenom']) &&  isset($_POST['mdp']) && isset($_POST['Conf_mdp'])  && isset($_POST['privilege']) ){

        /**
         * ensuite on vérifie si'ils ne sont pas vide
        */
        if( !empty($_POST['nom']) && !empty($_POST['prenom']) &&  !empty($_POST['mdp']) && !empty($_POST['Conf_mdp']) && !empty($_POST['privilege']) ) {

            $nom = htmlspecialchars($_POST['nom']);
            $prenom = htmlspecialchars($_POST['prenom']);
            $mdp = password_hash($_POST['mdp'], PASSWORD_DEFAULT);
            $conf_mdp = password_hash($_POST['Conf_mdp'], PASSWORD_DEFAULT);
            $privilege = filter_input(INPUT_POST,$_POST['privilege'],FILTER_VALIDATE_INT);

            echo $nom."\n".$prenom."\n".$mdp."\n".$privilege."\n";
            
            // if($_POST['mdp'] !== $_POST['Conf_mdp']){

            //     $msgError = "les mots de passe ne sont pas similaire";

            // }else{

            //     if(strlen($_POST['mdp']) < 8 && strlen($_POST['Conf_mdp']) < 8){

            //         $msgError = "les mots de passe doivent avoir 8 caractères minimum";

            //     }

            //     // $req_insert_admin = "INSERT INTO auteur(privilege, nom, prenom , Mot de passe) VALUES ('$privilege','$nom','$prenom','$mdp')"; 

            //     $register_admin = mysqli_query($mysqli,"INSERT INTO auteur(privilege, nom, prenom , mdp) VALUES ('$privilege','$nom','$prenom','$mdp')");
                
            //     if($register_admin === true){

            //         // header("Location: ../test.php");
            //         $msgError = "success";

            //     }else{

            //         $msgError = "echec de création" . $register_admin;
            //         echo $register_admin;
            //     }
            // }
        }
        else {  
                
            $msgError = "yes";
        }
    }

?>