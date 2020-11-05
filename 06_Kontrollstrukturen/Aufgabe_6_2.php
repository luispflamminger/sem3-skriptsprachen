<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8" />
        <title>Aufgabe 6.2</title>
    </head>
    <body>
        <table border="1">
            <?php
                for ($i=1; $i < 11; $i++) { 
                    echo "<tr>\n\t";
                    for ($j=1; $j < 11; $j++) { 
                        echo "<td>" . ($i * $j) . "</td>";
                    }
                    echo "\n</tr>\n";
                }
            ?>
        </table>
    </body>
</html>