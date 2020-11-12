<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8" />
        <title>Aufgabe 8.2</title>

        <?php

            class Math {
                public static function wurzel($i) {
                    echo "Wurzel aus $i ist " . sqrt($i) . "<br>\n";
                }

                public static function absolut($lost) {
                    echo "Betrag von $lost ist " . abs($lost) . "<br>\n";
                }
            }
            
        ?>
    </head>
    <body>
        <?php
            Math::absolut(-5);
            Math::wurzel(8);
        ?>
    </body>
</html>