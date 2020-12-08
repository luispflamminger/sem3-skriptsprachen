<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<body>
<h3>Das Diskussionsforum</h3>
<table style="border:black solid; border-width: 1px; border-style:inset"  width="500">
<th>Beitrag</th>
<th>von</th>
<th>Datum und Uhrzeit</th>
<?php
 $db=mysqli_connect("localhost","root","");       
 mysqli_select_db($db, "manitu");       
 $anfrage="SELECT * FROM forum";
 $ergebnis=mysqli_query($db,$anfrage);

 $anz=mysqli_num_rows($ergebnis);
  for ($a=$anz-1;$a>-1; $a--) {
   mysqli_data_seek ($ergebnis, $a);   //Setzt den Zeiger auf eine bestimmte Position (Zeile)
   $zeile=mysqli_fetch_row($ergebnis);
     if ($zeile[8]=="false") {
       ausgabe ($db, $zeile);
	  }
 }	
 print ("</table>");
 mysqli_close($db);
 
 function ausgabe($db, $datensatz) {
  print ("<tr align='left'>");
  print ("<td>");
  if ($datensatz[8]=="false") {
     print ("&nbsp;");
	}
  else {
     print ("&nbsp;&nbsp;&nbsp;&nbsp;");
     print ("&nbsp;&nbsp;&nbsp;&nbsp;");
  }	
  print ("<a href='read.php?forums_id=");
  print ($datensatz[0]);
  print ("'>");
  print ($datensatz[6]);
  print ("</a>");
  print ("</td>");
  print ("<td>");
  print ($datensatz[2]);
  print ("</td>");
  print ("<td>");
  print ($datensatz[4]);
  print (" um ");
  print ($datensatz[5]);
  print ("</td>");
  print ("</tr>");
  if ($datensatz[1]>0) {
    antwort_holen($db, $datensatz[1]);  
  }
 }
 
  function antwort_holen($db, $id) {
   $anf="SELECT * FROM forum WHERE beitrags_id='";
   $anf.=$id;
   $anf.="'";
   $er=mysqli_query($db, $anf);
   $z=mysqli_fetch_row($er);
   ausgabe($db, $z);
  }
  
  ?>
<br><br>
<a href="new.html">Einen neuen Beitrag hinzufügen</a>
</body></html>
