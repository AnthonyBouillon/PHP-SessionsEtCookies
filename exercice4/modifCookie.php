 <?php 
            if(isset($_POST['pseudo'])){
                setcookie('pseudo', $_POST['pseudo'], time()+24*3600, null, null, false, true);
            }       
            if(isset($_POST['password'])){
                setcookie('password', $_POST['password'], time()+24*2600, null, null, false, true);
                };
        ?>
<DOCTYPE html>
<html>
    <head>
        <title>Page cookie</title>
    </head>
    <body>
        <h1>Les données du cookies</h1><hr/>
       <p>Vôtre pseudo est : <?php echo $_COOKIE['pseudo'];?></p>
          <p>Vôtre mot de passe est : <?php echo $_COOKIE['password'];?></p>
          <p><a a href="../exercice3/index.php">Lien explicite !</a></p>
    </body>
</html>
