<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8" />
        <title>Aufgabe 7.3</title>

        <?php
            function printArray($array) {
                echo "<pre>";
                print_r($array);
                echo "</pre>";
            }
        ?>
    </head>
    <body>
        <?php
            $a = array("anfang", 1, 2, 3, 4, "ende");
            printArray($a);
        ?>
    </body>
</html>