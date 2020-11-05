<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8" />
        <title>Aufgabe 6.3</title>
    </head>
    <body>
        <!--
            Zwei Spieler würfeln gegeneinander (Zufallszahlengenerator)
            Die Würfe jedes Spielers sollen addiert werden.
            Sobald einer der beiden Spieler oder beide Spieler nach einer Spielrunde 
            den Wert 25 erreicht oder überschritten haben, ist das Spiel zu Ende.
        -->
        <?php
            echo "Würfelspiel! <br>Wer zuerst 25 erreicht gewinnt!<br><br>\n";
            $a = 0;
            $b = 0;
            $cur = 0;
            while (true) {
                $cur = random_int(1,6);
                $a += $cur;
                echo "Spieler 1 würfelt eine " . $cur . ".<br>\n";
                $cur = random_int(1,6);
                $b += $cur;
                echo "Spieler 2 würfelt eine " . $cur . ".<br>\n";

                if ($a >= 25 || $b >= 25) {
                    break;
                }

                if ($a != $b) {
                    echo "Zwischenstand: " . (max($a,$b)) . " zu " . (min($a,$b)) . " für ";

                    if ($a > $b) {
                        echo "Spieler 1!<br>\n";
                    } else {
                        echo "Spieler 2!<br>\n";
                    }
                } else {
                    echo "Gleichstand! Beide Spieler haben " . $a . " Punkte!<br>\n";
                }
            }
            if ($a != $b) {
                echo "Glückwunsch! Spieler ";

                if ($a > $b) {
                    echo "1";
                } else {
                    echo "2";
                }
                echo " hat mit " . (max($a,$b)) . " zu " . (min($a,$b)) . " gewonnen!";
            } else {
                echo "Gleichstand! Beide Spieler haben " . $a . " Punkte!<br> Leider hat keiner gewonnen...\n";
            }
    ?>

    </body>
</html>