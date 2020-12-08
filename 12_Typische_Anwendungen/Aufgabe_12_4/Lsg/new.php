<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<body>
<?php
  $user=$_POST['user'];
  $mail=$_POST['mail'];
  $betreff=$_POST['betreff'];
  $forumsbeitrag=$_POST['forumsbeitrag'];

  //Zuerst Datum und Uhrzeit generieren:
  $punkt=".";
  $datum = date("d");
  $datum .=$punkt;
  $datum .=date("m");
  $datum .=$punkt;
  $datum .=date("Y");
  $zeit = date("G");
  $zeit .=$punkt;
  $zeit .=date("i");
  $zeit .=$punkt;
  $zeit .=date("s");

  //Sonderzeichen beachten:
  $user=htmlspecialchars ($user);
  $user=htmlentities($user);
  $betreff=htmlspecialchars ($betreff);
  $betreff=htmlentities($betreff);
  $forumsbeitrag=htmlspecialchars ($forumsbeitrag);
  $forumsbeitrag=htmlentities($forumsbeitrag);
  $forumsbeitrag=nl2br($forumsbeitrag);
 
  //Eintrag vornehmen:
  $db=mysqli_connect("localhost","root","")
    or die ("<b>Zur Zeit kein Connect zum Datenbankserver!</b>");
  mysqli_select_db($db,"manitu")
    or die ("<b>Datenbank konnte nicht angesprochen werden</b>");
  $anfrage="INSERT INTO forum VALUES ('";
  $anfrage.="0', '0', '";
  $anfrage.=$user;
  $anfrage.="', '";
  $anfrage.=$mail;
  $anfrage.="', '";
  $anfrage.=$datum;
  $anfrage.="', '";
  $anfrage.=$zeit;
  $anfrage.="', '";
  $anfrage.=$betreff;
  $anfrage.="', '";
  $anfrage.=$forumsbeitrag;
  $anfrage.="', 'false')";
  mysqli_query($db,$anfrage)
   or die ("<b>Fehler bei der Datenbankanfrage</b>");
 mysqli_close($db);
 print ("<p>Vielen Dank für Ihren Beitrag!</p>");
 print ("<a href='index.php'>Zurück zum Forumsüberblick</a>");

?>
</body></html>
