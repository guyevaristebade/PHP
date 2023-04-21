
<?php require("./action_admin_connect.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../style/creat-admin.css">
    <title>Connexion Admin</title>
</head>
<body>
<div class="create_admin_container">
        <div class="title-container">
            <h2>Connexion Admin Panel</h2>
        </div>
        <form method="post" class="forms-container">
            <div class="items">
                <label for="nom">Nom</label>
                <input type="text" name="nom" placeholder="nom">
            </div>
            <div class="items">
                <label for="prenom">Prenom</label>
                <input type="text" name="prenom" placeholder="prenom">
            </div>
            <div class="items">
                <label for="mdp">Mot de passe</label>
                <input type="password" name="mdp" placeholder="*******">
            </div>
            <div class="mesgError">
                <h3><?php if(isset($msgError)){echo $msgError;} ?></h3>
            </div>
            <div class="btn-container">
                <input type="submit" value="Connection" id="btn_submit">
            </div>
        </form>
    </div>
</body>
</html>