<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8" />
        <title>Kasse</title>
        <?php
        session_start();
        ?>
    </head>
    <body>
        <h2>Kasse</h2>
        <p>Bitte bezahlen Sie den Gesamteinkaufspreis von <?php echo number_format($_SESSION["total"], 2, ',', '.'); ?> €</p>
        <p>......</p>
        <p><a href="start.php">Zur Startseite</a></p>
    </body>
</html>