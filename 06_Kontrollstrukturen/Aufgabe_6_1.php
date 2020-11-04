<?php
    date_default_timezone_set("Europe/Berlin");
    $uhrzeit = date("H");
    if ($uhrzeit < 5 || $uhrzeit > 20) {
        $gruss = "Gute Nacht";
        $color = "darkslateblue";
    } elseif ($uhrzeit < 11) {
        $gruss = "Guten Morgen";
        $color = "coral";
    } elseif ($uhrzeit < 15) {
        $gruss = "Guten Mittag";
        $color = "crimson";
    } elseif ($uhrzeit < 18) {
        $gruss = "Guten Nachmittag";
        $color = "magenta";
    } else {
        $gruss = "Guten Abend";
        $color = "cornflowerblue";
    }
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8" />
        <title>Unterschiedliche Begrüßung</title>
    </head>
    <style>
        body {
            background-color:<?php echo "$color";?>
        }
    </style>
    <body>
        <?php
            echo $gruss;
        ?>
    </body>
</html>