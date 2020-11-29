<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8" />
        <title>Warenkorb</title>
        <?php
        include "sc_shop.inc.php";
        session_start();

        //Falls abtnr per POST übergeben wird, kommt der Nutzer von der Abteilungsseite -> Produkte müssen hinzugefügt werden
        if (isset($_POST["abtnr"])) {
            for ($i=0; $i < count($artnr[$_POST["abtnr"]]); $i++) { 
                //Falls eine Anzahl im Feld steht, muss das Produkt dem Warenkorb hinzugefügt werden
                if ($_POST["quantity$i"] != "") {
                    /* Aufbau der Session-Variablen
                    Die Positionen im Warenkorb werden im $_SESSION-Array gespeichert
                    Schema der Var-Namen: cartPos{Positionsnummer}{ItemNr/ItemDesc/ItemPrice/Quantity}
                    Somit werden alle Werte die im Warenkorb benötigt werden in der Session gespeichert
                    */
                    //Hier wird geprüft, ob für das Produkt bereits eine Position im Warenkorb besteht,
                    //falls ja, wird diese geändert, falls nein, wird der nächste nicht Belegte Index genommen 
                    $j = 0;
                    $sessVarNum = -1;
                    while (isset($_SESSION["cartPos${j}ItemNr"])) {
                        if ($_SESSION["cartPos${j}ItemNr"] == $artnr[$_POST["abtnr"]][$i]) {
                            $sessVarNum = $j;
                        }
                        $j++;
                    }

                    if ($sessVarNum < 0) {
                        //Noch keine Position vorhanden
                        $sessVarNum = $j;
                    }
                    
                    $_SESSION["cartPos${sessVarNum}ItemDesc"] = $aname[$_POST["abtnr"]][$i];
                    $_SESSION["cartPos${sessVarNum}ItemNr"] = $artnr[$_POST["abtnr"]][$i];
                    $_SESSION["cartPos${sessVarNum}ItemPrice"] = $preis[$_POST["abtnr"]][$i];
                    $_SESSION["cartPos${sessVarNum}Quantity"] = $_POST["quantity$i"];
                }
            }
        }
        ?>
    </head>
    <body>
        <h2>Warenkorb</h2>
        <p>Sie haben bisher gewählt:</p>
        <table border="1">
            <tr>
                <th align="left">Artikel</th>
                <th align="left">Nr.</th>
                <th align="left">Einzelpreis</th>
                <th align="left">Anzahl</th>
                <th align="left">Gesamtpreis</th>
            </tr>
            <?php
            //Logik für Einkaufswagen
                $i = 0;
                $_SESSION["total"] = 0;
                $posTotal = 0;
                //Alle Positionen werden dem Warenkorb hinzugefügt
                while (isset($_SESSION["cartPos${i}ItemNr"])) { 
                    $posTotal = $_SESSION["cartPos${i}Quantity"] * $_SESSION["cartPos${i}ItemPrice"];
                    echo "<tr>\n";
                    echo "<td align='left'>" . $_SESSION["cartPos${i}ItemDesc"] . "</td>\n";
                    echo "<td align='left'>" . $_SESSION["cartPos${i}ItemNr"] . "</td>\n";
                    echo "<td align='right'>" . number_format($_SESSION["cartPos${i}ItemPrice"], 2, ',', '.') . " €</td>\n";
                    echo "<td align='right'>" . $_SESSION["cartPos${i}Quantity"] . "</td>\n";
                    echo "<td align='right'>" . number_format($posTotal, 2, ',', '.') . " €</td>\n";
                    echo "</tr>\n";

                    $_SESSION["total"] += $posTotal;
                    $i++;
                }
            ?>
            <tr>
                <td colspan="4">Gesamteinkaufspreis</td>
                <td align="right"><?php echo number_format($_SESSION["total"], 2, ',', '.'); ?> €</td>
            </tr>

        </table>
        <p><a href="kasse.php">Zur Kasse</a></p>
        <p><a href="start.php">Zur Startseite</a></p>
    </body>
</html>