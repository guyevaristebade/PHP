<?php   require_once('./action_admin_connect.php')
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../style/creat-admin.css">
    <title>Create admin</title>
</head>
<body>
    <div class="create_admin_container">
        <div class="title-container">
            <h2>Admin Register</h2>
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
            <div class="items">
                <label for="Conf_mdp">Confirmez le mot de passe </label>
                <input type="password" name="Conf_mdp" placeholder="*******">
            </div>
            <div class="items">
                <label for="privilege">Privilège</label>
                <input type="number" name="privilege" placeholder="0" size="1" min="0" max="2">
            </div>
            <div class="error_msg">
                <h3><?php if(isset($msgError)){echo $msgError;} ?></h3>
            </div>
            <div class="btn-container">
                <input type="submit" value="Connection" id="btn_submit">
            </div>
        </form>
    </div>
</body>
</html>