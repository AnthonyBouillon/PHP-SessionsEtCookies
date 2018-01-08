 <?php 
            /* Si il n'est pas vide, créer un cookie durant  24h * 3600s = 365 jours */
            if(!empty($_POST['pseudo'])){
                setcookie('pseudo', $_POST['pseudo'], time()+24*3600, null, null, false, true);
            }       
            if(!empty($_POST['password'])){
                setcookie('password', $_POST['password'], time()+24*3600, null, null, false, true);
                };
        ?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8" />
        <title>Résultat des données des cookies</title>
    </head>
    <body>
        <h1>Les données du cookies</h1><hr/>
        <!-- Affiche les données des deux cookies -->
        <p>Vôtre pseudo est : <?php echo $_COOKIE['pseudo'];?></p>
        <p>Vôtre mot de passe est : <?php echo $_COOKIE['password'];?></p>
        <p><a a href="../exercice3/index.php">Lien explicite !</a></p>
    </body>
</html>
