<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<title>PHP-Forumsbeitrag - Antwort</title></head>
<body>
<div style="font-family:arial">
<h2>Ihre Antwort auf den Forumsbeitrag:</h2>
<form method="post" action="replay_entry.php">
<table border="0">
<tr>
<td>Ihr Name</td>
<td><input type="text" name="user"></td></tr>
<tr>
<td>Ihre E-Mail-Adresse</td>
<td><input type="text" name="mail"></td></tr>
<tr>
<td>Betreff-Zeile</td>
<td>
<?php
 $id=$_GET['forums_id'];
 $db=mysqli_connect("localhost","root","");
 mysqli_select_db($db, "manitu");
 $anfrage="SELECT * FROM forum WHERE beitrags_id LIKE '";
 $anfrage.=$id;
 $anfrage.="'";
 $ergebnis=mysqli_query($db, $anfrage);
 $zeile=mysqli_fetch_row($ergebnis);
 $betreff="<input type='text' name='betreff' value='";
 $betreff.="Re: ";
 $betreff.=$zeile[6];
 $betreff.="'>";
 print ($betreff);
 print ("<input type='hidden' name='forums_id' value='");
 print ($id);
 print ("'>");
?>
</td></tr>
<tr><td>Ihr Eintrag</td>
<td><textarea name="forumsbeitrag" cols="40" rows="5"></textarea></td></tr>
<tr>
<td><input type="submit" value="Abschicken">
<input type="reset" value="L�schen"></td></tr>
</table>
</form></div>
</body></html>
