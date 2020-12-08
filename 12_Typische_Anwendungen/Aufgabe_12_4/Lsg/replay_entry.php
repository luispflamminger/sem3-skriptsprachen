<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<body>
<?php
  $id=$_POST['forums_id'];
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
  
  //Antwort in die DB schreiben:
  $db=mysqli_connect("localhost","root","")
    or die ("<b>Zur Zeit kein Connect zum Datenbankserver!</b>");
  mysqli_select_db($db, "manitu") 
    or die ("<b>Datenbank konnte nicht angesprochen werden</b>");
  $anfrage="INSERT INTO forum VALUES ('0','0','";
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
  $anfrage.="', 'true')";
  mysqli_query($db, $anfrage)
   or die ("<b>Fehler bei der Datenbankanfrage: </b>".mysqli_error($db));
  //Jetzt die neue beitrags_id der soeben eingetragenen Antwort ermitteln:
  $antwort_id=mysqli_insert_id($db);
  //Usprungsbeitrag, auf dem die Antwort geschrieben wurde,
  // aktualisieren:
  $anfrage="SELECT * FROM forum WHERE beitrags_id LIKE '";
  $anfrage.=$id;
  $anfrage.="'";
  $ergebnis=mysqli_query($db,$anfrage);
  $zeile=mysqli_fetch_row($ergebnis);
  $update="UPDATE forum SET bezugs_id='";
  $update.=$antwort_id;
  $update.="' WHERE beitrags_id='";
  $update.=$id;
  $update.="'";
  mysqli_query($db, $update)
    or die (mysqli_errno().": ".mysqli_error($db));
   
   
 mysqli_close($db);
 print ("<p>Vielen Dank für Ihren Beitrag!</p>");
 print ("<a href='index.php'>Zurück zum Forumsüberblick</a>");

?>
</body></html>
