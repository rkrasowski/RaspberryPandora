<html><body><h1>
<meta name="viewport" content="initial-scale=1.0">
<h1>Pandora radio controller</h1>

<?
$variable = "test";

?>


<form action="processform.php" method="post">
  Pandora Radio:
  <button name="Pandora" type="submit" value="PandoraON">ON</button>
  <button name="Pandora" type="submit" value="PandoraOFF">OFF</button>
  Choose speakers:
  <button name="Speakers" type="submit" value="Front">FRONT</button>
  <button name="Speakers" type="submit" value="Back">BACK</button>


<input type="hidden" name="country" value=<?echo $variable; ?>>




</form>



</body></html>

