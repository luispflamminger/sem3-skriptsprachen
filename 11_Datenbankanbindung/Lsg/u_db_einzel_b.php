<html>
<body>
<?php
if (isset($_POST["auswahl"]))
{
   $con = mysqli_connect("","root");
   mysqli_select_db($con, "hardware");

   $sql = "select * from fp where artnummer = '" . $_POST["auswahl"] . "'";
   $res = mysqli_query($con, $sql);
   $dsatz = mysqli_fetch_assoc($res);

   echo "<p>F�hren Sie die �nderungen durch,<br />";
   echo "bet�tigen Sie anschlie�end den Button</p>";
   echo "<form action = 'u_db_einzel_c.php' method = 'post'>";

   echo "<p><input name='her' value='" . $dsatz["hersteller"] . "' /> Hersteller</p>";
   echo "<p><input name='typ' value='" . $dsatz["typ"] . "' /> Typ</p>";
   echo "<p><input name='gb'  value='" . $dsatz["gb"] . "' /> Kapazit�t in GB</p>";
   echo "<p><input name='pre' value='" . $dsatz["preis"] . "' /> Preis</p>";
   echo "<p><input name='anr' value='" . $_POST["auswahl"] . "' /> Artikelnummer</p>";
   echo "<p><input name='pro' value='" . $dsatz["prod"] . "' /> erstes Produktionsdatum</p>";
   echo "<input type='hidden' name='orianr' value='" . $_POST["auswahl"] . "' />";
   echo "<p><input type='submit' value='�nderungen in Datenbank speichern'>";
   echo "<input type='reset' /></p>";
   echo "</form>";
   
   mysqli_close($con);
}
else
   echo "<p>Es wurde kein Datensatz ausgew�hlt</p>";
?>
</body>
</html>
