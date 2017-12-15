<?php 
            // Le placer avant tout code php pour démarrer la session.
            session_start();

            $_SESSION['name'] = 'Max';
            $_SESSION['firstName'] = 'Caufield';
            $_SESSION['age'] = '18';
        ?>
<DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8"/>
        <title>Sessions & cookies Exercice 2</title>
    </head>
    <body>
        
        <h1>PHP - Variables superglobales, sessions et cookies</h1>
        <p>Bonjour <?php echo $_SESSION['name'] . ' ' . $_SESSION['firstName'] . ', ' . 'les voyages dans le temps avec Chloé ce passe bien ?' . ' ' . 'Quoi ? Comment ?.. C\'est ton anniversaire ?' . ' ' . '..' . ' ' . $_SESSION['age'] . ' ans !' . ' ' . 'Intéressant..';?></p>
        <p><a href="session-cookie.php">Vas-y, clique sur moi !</a><p>
        <!-- Direction vers l'exercice suivant -->
        <ul>
           <li><a href="../exercice1/index.php">Exercice 1</a></li>
           <li><a href="../exercice2/index.php">Exercice 2</a></li>
           <li><a href="../exercice3/index.php">Exercice 3</a></li>
           <li><a href="../exercice5/index.php">Exercice 5</a></li>
           <li><a href="../exercice4/modifCookie.php">Affichage des données du cookie</a></li>
         </ul>
        <style>
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