<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Exercice 6</title>
    </head>
    <body>
        <a href="index.php?building=12&room=101">000</a>
        <p>
    <?php
    if (!empty($_GET['building']) && isset($_GET['room'])){
      echo $_GET['building'] ." ". $_GET['room'] ." ";
    } else {
        echo 'Erreurs dans les paramètre';
    }
    ?>
        </p>
    </body>
</html>
