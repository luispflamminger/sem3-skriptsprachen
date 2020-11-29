<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8" />
        <title>Produktwahl</title>
        <?php
        include "sc_shop.inc.php";
        session_start();
        ?>
    </head>
    <body>
        <h2><?php echo $abtname[$_GET["abtnr"]]; ?></h2>
        <p>Wählen Sie aus:</p>
        <form action="warenkorb.php" method="POST">
            <table border="1">
                <tr>
                    <th align="left">Artikel</th>
                    <th align="left">Nr.</th>
                    <th align="left">Preis</th>
                    <th align="left">Anzahl</th>
                </tr>
                <?php
                    //Die gewählte Abteilung wird über GET übergeben. Auflistung der Artikel über Kategorieindex und iteration
                    //$artnr[$_GET["abtnr"]] gibt uns die Anzahl der Produkte in der jeweiligen Kategorie
                    for ($r=0; $r < count($artnr[$_GET["abtnr"]]); $r++) { 
                        echo "<tr>\n";
                        echo "<td align='left'>" . $aname[$_GET["abtnr"]][$r] . "</td>\n";
                        echo "<td align='left'>" . $artnr[$_GET["abtnr"]][$r] . "</td>\n";
                        //number_format() wird genutzt um Preise in deutscher Darstellung anzuzeigen
                        echo "<td align='right'>" . number_format($preis[$_GET["abtnr"]][$r], 2, ',', '.') . " €</td>\n";
                        
                        //Im Feld Anzahl soll die Anzahl des jeweiligen Artikels angezeigt werden, falls der Nutzer diesen schon
                        //vorher zum Warenkorb hinzugefügt hat. Falls der Warenkorb den Artikel enthält, bekommt $value die Anzahl,
                        //ansonsten bleibt Value leer.
                        $j = 0;
                        $value = "";
                        while (isset($_SESSION["cartPos${j}ItemNr"])) {
                            if ($_SESSION["cartPos${j}ItemNr"] == $artnr[$_GET["abtnr"]][$r]) {
                                $value = $_SESSION["cartPos${j}Quantity"];
                                break;
                            }
                            $j++;
                        }
                        //Bei Eingabe der Anzahl sind nur ganze Zahlen zwischen 0 und 9999 erlaubt (wird vom Browser kontrolliert) 
                        echo "<td><input type='number' name='quantity$r' value='$value' min='0' max='9999' style='width: 3em;'/></td>\n";
                        echo "<input type='hidden' name='abtnr' value='" . $_GET["abtnr"] . "'"; 
                        echo "</tr>\n";
                    }
                ?>
                    

            </table>
            <input type="submit" value="In den Warenkorb" name="warenkorb"/>
        </form>

        <p><a href="start.php">Zur Startseite</a></p>
    </body>
</html>