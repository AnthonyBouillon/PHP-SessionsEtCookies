<?php 
    if(isset($_POST['pseudo']))
        setcookie('pseudo', $_POST['pseudo'], time()+24*3600, null, null, false, true);
    if(isset($_POST['password']))
        setcookie('password', $_POST['password'], time()+24*2600, null, null, false, true);
?>
<DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8"/>
        <title>Sessions & cookies Exercice 3</title>
    </head>
    <body>        
        <h1>PHP - Variables superglobales, sessions et cookies</h1><hr/>
        <form method="post" action="../exercice4/modifCookie.php">
            <h2>Formulaire de connexion</h2>
            <fieldset>
                <label>Pseudo : </label><input type="text" name="pseudo" placeholder="Saisissez votre pseudo" id="inputPseudo"/><br/>
                <label>Mot de passe : </label><input type="password" name="password" placeholder="Saisissez votre mot de passe"/>
                <button>Validez</button>
            </fieldset>
        </form>
        <!-- Direction vers l'exercice suivant -->
        <ul>
           <li><a href="../exercice1/index.php">Exercice 1</a></li>
           <li><a href="../exercice2/index.php">Exercice 2</a></li>
           <li><a href="../exercice3/index.php">Exercice 3</a></li>
           <li><a href="../exercice5/index.php">Exercice 5</a></li>
         </ul>
        
        <style>
            #inputPseudo{
                margin-left: 48px;
            }
           ul {
            list-style-type:none;
            }

           ul li a {
            display:block;
            float:left;   
            width:100px;
            background-color:#6495ED;
            color:black;
            text-decoration:none;
            text-align:center;
            padding:5px;
            border:2px solid;
            }
           ul li a:hover {
            background-color:#D3D3D3;
            }  
        </style>
    </body>
</html>