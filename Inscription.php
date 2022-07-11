<!DOCTYPE html>
<html lang="fr">
<?php 
require('./head.php');
require("../database/db_connect.php");
?>
<body>
    <?php 
        require("../Actions/Nav.php");
    ?>
    <div class="conteneur">
        <form action="" method="post">

            <h1>INSCRIPTION</h1><br><br>
           
            <?php 
                if(isset($_POST['nom'])  && isset($_POST['pseudo'])  && isset($_POST['mail'])  && isset($_POST['mdp'])){

                    if(!empty($_POST['nom prenom']) && !empty($_POST['pseudo'])&& !empty($_POST['mail']) && !empty($_POST['mdp'])){
                        /*
                            récupération des élément entrée dans les champs respectifs
                            si les champs ne sont pas vide
                        */
                        $nom= htmlspecialchars($_POST['nom']);
                        $pseudo= htmlspecialchars($_POST['pseudo']);
                        $mail= htmlspecialchars($_POST['mail']);
                        $mdp= password_hash($_POST['mdp'], PASSWORD_DEFAULT);
                        
                            if(!filter_var($mail,FILTER_VALIDATE_EMAIL)){
                                //on vérifie si @mail est une adresse mail valide
                                $msg = "l'adresse mail que vous avez reseigné n'est pas valide";
                            }else{
                                if(strlen($mdp)<8){
                                    //vérification de la taille du mdp il doit avoir 8 char minimum
                                    $msg= "votre mot de passe doiut contenir 8 caratères minimum";
                                }else{
                                        /*
                                            ici on vérifie si le pseudo que l'utilisateur veut utiliser n'est pas déja occupé.
                                        */
                                        $Req_Verif_pseudo_existe= mysqli_query($db,"SELECT pseudo FROM clients");
                                        //on créee un tableau pour stocker le resultat de la requête 
                                        $result_pseudo= array();

                                        while($ligne = mysqli_fetch_assoc($Req_Verif_pseudo_existe)){
                                            $result_pseudo[]= $ligne['pseudo'];
                                        }

                                        if(!in_array($pseudo,$result_pseudo)){
                                            $Req_Inscription= mysqli_query($db,"INSERT INTO clients(nom prenom,pseudo,email,mdp) VALUES ('$nom','$prenom','$pseudo','$mail','$mdp')");

                                                if($Req_Inscription == true){
                                                    header("Location: ../Actions/Validation_Inscription.php"); 
                                                }else{
                                                    $msg= "echec lors de l'inscription";
                                                }
                                        }else{
                                            $msg= $pseudo. " est déja occupé par quelqu'un";
                                        }
                                }
                            }
                    }else{
                        $msg= "Veuillez bien remplir le formulaire svp";
                    }

                }
            ?>
            <div class="msg_error">
                <?php
                    if(isset($msg)){
                        echo $msg;
                    }
                ?>
            </div>
            <div class="contenu">
                <div class="one">
                    <div class="input">
                        <label >Nom et prenom</label><br>
                        <img src="../image/icons/user.png" alt="icon user">
                        <input type="text" name="nom">
                    </div>
                    <div class="input">
                        <label >pseudo</label><br>
                        <img src="../image/icons/pseudo.png" alt="icon masque">
                        <input type="text" name="pseudo">
                    </div>
                </div>

                <div class="two">
                    <div class="input">
                        <label >Email</label><br>
                        <img src="../image/icons/mail.png" alt="">
                        <input type="email" name="mail">
                    </div>

                    <div class="input">
                        <label>Mot de passe</label><br>
                        <img src="../image/icons/mdp.png" alt="icon cadenas">
                        <input type="password" name="mdp" id="" placeholder="********">
                    </div>
                </div>
            </div>
            <br>
            <div class="button">
                <button type="submit">Inscription</button>
            </div>
        </form>
    </div>
    
</body>
</html>