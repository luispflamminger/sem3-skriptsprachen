<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8" />
        <title>Zufallsbilder</title>
    </head>
    <body>
        <?php
            $bilder = array("blumen.jpg", "boot.jpg", "landschaft.jpg", "stadt_am_meer.jpg", "strand.jpg");
            $max = count($bilder) - 1;
            $zufallszahl = rand(0, $max);
            echo "<img src='$bilder[$zufallszahl]' height='200' width='150' />";
        ?>
    </body>
</html>
