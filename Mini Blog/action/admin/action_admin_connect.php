<?php

    require('../database.php');
    session_start();
    $msgError = "";

    /**
     * on vérifie si les champs existe 
    */
    if(isset($_POST['nom']) && isset($_POST['prenom']) &&  isset($_POST['mdp']) ){

        /**
         * ensuite on vérifie si'ils ne sont pas vide
        */
        if( !empty($_POST['nom']) && !empty($_POST['prenom']) &&  !empty($_POST['mdp']) ) {

            $nom = htmlspecialchars($_POST['nom']);
            $prenom = htmlspecialchars($_POST['prenom']);
            $mdp = htmlspecialchars($_POST['mdp']);
            
            if(getMdpEntered($nom, $prenom,$mdp,$mysqli)){
                $_SESSION['nom_prenom'] = $nom." ".$prenom;
                // $_SESSION['estConnecté'] = true;
                header('Location: ./panneau_admin.php');
                exit;
            }

        }else {

            $msgError = "Veuillez bien remplir les champs !!!";
        }
    }


    function getMdpEntered($nom,$prenom,$mdp,$mysqli) {
        $req = mysqli_query($mysqli,"SELECT * FROM auteur WHERE nom = '$nom' AND prenom = '$prenom' AND mdp = '$mdp'");
        if (mysqli_num_rows($req) == 1) {
            return true;
        }else {
            $msgError = "Les informations que vous avez entrées ne sont pas correct";
        }
    }
?>