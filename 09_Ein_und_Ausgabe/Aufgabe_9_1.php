<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8" />
        <title>Aufgabe 9.1</title>

        <?php
            if(!file_exists("u_lesen.txt"))
                exit("Datei konnte nicht geöffnet werden");
            
            $fp = @fopen("u_lesen.txt","r");
            if(!$fp)
                exit("Datei konnte nicht geöffnet werden");
            
            $namen = array(array());
            $name = 0;
            while (!feof($fp)) {
                $namen[$name][0] = fgets($fp, 100);
                $namen[$name][1] = fgets($fp, 100);
                $name++;
            }
            fclose($fp);
        ?>
    </head>
    <body>
        <?php
            echo "<table border='1'>";
            echo "<tr> <td align='left'>Nummer</td><td align='left'>Vorname</td><td align='left'>Nachname</td></tr>\n";
            
            for ($i=0; $i < sizeof($namen); $i++) { 
                echo "<tr>";
                echo "<td align='left'> " . ($i+1) . " </td>";
                echo "<td align='left'> " . $namen[$i][0] . " </td>";
                echo "<td align='left'> " . $namen[$i][1] . " </td>";
                echo "</tr>";
            }
            echo "</table>";
        ?>
    </body>
</html>