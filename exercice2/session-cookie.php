<?php 
            // Le placer avant tout code php pour démarrer la session.
            session_start();
        ?>
<DOCTYPE html>
<html>
    <head>
        <title>Sessions & cookies Exercice 2</title>
    </head>
    <body>
        <h1>PHP - Variables superglobales, sessions et cookies</h1>
        <p>Je ne pensais pas que tu aurais cliqué <?php echo $_SESSION['name'] . ' ' . $_SESSION['firstName'] . ', ' . 'au faite, tu en a tué combien ? Un ? ou toute la ville ?' . ' ' . 'Quoi ? Comment ?.. J\'ai oublié ton cadeaux pour tes' . ' ' . $_SESSION['age'] . ' ans ?!';?></p>
        <p><a href="index.php">Retour en arrière</a><p>
    </body>
</html>

   