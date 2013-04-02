<?php $doctitle = 'Max-von-Laue-Gymnasium - Aktuelles - Mensa Bestellung'; 
session_start();
session_destroy();
////////////////////////////
// Jonas Bayer            //
// Mensa Bestellsystem    //
// HAG MvLG.de            //
////////////////////////////

?>
<?php include 'doc_header.php.inc'; ?>
<body><div id="wrap">
<?php include 'inc/header_menu.php.inc'; ?>
<div id="main"><div id="content"><div id="links">
<!-- ********************* CONTENT ********************* -->
<!-- ********************** TITEL ********************** -->
<span class="headline">Mensa Bestellung</span><br />
<!-- ********************* CONTENT ********************* -->
<div id="content_head">
<div id="zitat"> Der Student geht solange zur Mensa bis er bricht. 
        

<br /><br />
<div id="autor">Volksweisheit</div>
</div>

</div>
<!-- ********************* LINKE SPALTE ********************* -->
<br /><br /><br /><br />
</div><!-- ********************* RECHTE SPALTE ********************* --><div id="rechts">
Anmelden:
<div style="float: right;">
<form action="auswahl.php" method="post">
<table>
<tr>
<td><input type="text" name="Name" placeholder="e-Mail" /></td>
</tr>
<tr>
<td><input type="password" name="Passwort" placeholder="Passwort" /></td>
</tr>
<tr>
<td><input type="submit" value="Anmelden" style="width: 100%;" /></td>
</tr>
</table>
<a href="register.php">Neu hier? Jetzt registrieren!</a>
</form>
</div>
<?php
if($_SERVER['REQUEST_METHOD']=="POST")
{
  $name = $_POST['submitter'];
  $kommentar = $_POST['comment'];
  $date = date("j,n,Y \u\m H:i:s \: ");
  $nachricht = ($name." Schrieb am ".$date. $kommentar);
  mail('mensa.mvlg@icloud.com', 'Kommentar', $nachricht);
  echo "Vielen Dank f&uuml;r das Feedback!";
}
else
{
?>
<br /><br /><br /><br /><br /><br /><br /><br /><br />
Verbesserungsvorschläge? Hier bist du richtig:<br/>
<form action="<?echo $_SERVER['SCRIPT_NAME']?>" method="POST">
Dein Name:<br/>
<input type="text" name="submitter"/><br/>
Dein Kommentar:<br/>
<textarea name="comment" rows=4 cols=30></textarea>
<br/>
<input type="submit"/>
</form>
<?}?>
</div>
</div>
<?php include 'inc/sidebar.php.inc'; ?>
<?php include 'inc/footer.php.inc'; 
?>
</body></html>