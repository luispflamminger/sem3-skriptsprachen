<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8" />
        <title>Aufgabe 9.2</title>

        <?php
            if(!file_exists("u_schreiben.txt"))
                exit("Datei konnte nicht geöffnet werden");
            
            $fsource = True;
            $fOutA = True;
            $fOutB = True;

            if(!$fsource || !$fOutA || !$fOutB) 
                exit("Eine der Dateien konnte nicht geöffnet werden");

            $countA = 0;
            $countB = 0;

            while (!feof($fsource)) {
                $nr = fgets($fsource, 100);
                $vor = fgets($fsource, 100);
                $nach = fgets($fsource, 100);
                if ($nr < 1000) {
                    $fOut = @$fOutA;
                    $countA++;
                } else {
                    $fOut = @$fOutB;
                    $countB++;
                }
                fputs($fOut, "$nr$vor$nach");
            }

            fclose($fsource);
            fclose($fOutA);
            fclose($fOutB);
        ?>
    </head>
    <body>
        <?php
            echo "<p>Es wurden " . ($countA+$countB) . " Datensätze gefunden."
                . "<br>Davon wurden $countA in Datei 'u_schreiben_a.txt'"
                . "<br>und $countB in Datei 'u_schreiben_b.txt' geschrieben.</p>"
        ?>
    </body>
</html>