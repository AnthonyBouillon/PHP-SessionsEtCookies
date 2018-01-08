<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8" />
        <title>Sessions & cookies Exercice 1</title>
    </head>
    <body>   
        <h1>PHP - Variables superglobales, sessions et cookies</h1>
        <p>Bonjour <?php
        // On apelle la superGlobale $_SERVEUR qui affiche les valeurs demandés : ?, IP, nom du serveur. 
            echo $_SERVER['HTTP_USER_AGENT'] . ', ' . 'saviez vous que votre adresse ip était : ' . $_SERVER['REMOTE_ADDR'] . ' ' . 'et que le nom du serveur est' . ' ' . $_SERVER['SERVER_NAME'] . ' ' . '?';
            ?>
        </p>
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
