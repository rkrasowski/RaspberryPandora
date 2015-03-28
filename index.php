<html><body><h1>
<meta name="viewport" content="initial-scale=1.0">
<h1>Pandora radio controller</h1>

<?


$Pandora  =  $_POST["Pandora"];
$Speakers = $_POST["Speakers"];


if ($Pandora == "PandoraON")
	{
		$colorON = "green";
		$colorOFF = "";
	}

if ($Pandora == "PandoraOFF")
        {
                $colorON = "";
                $colorOFF = "red";
        }




	
?>


<form action= "index.php" method="post">
  Pandora Radio:</br>
  <button name="Pandora" style="width:100px;font-size:13pt;padding:2px; border:3px; background-color:<?echo $colorON; ?>" type="submit" value="PandoraON">ON</button>
  <button name="Pandora" style="width:100px;font-size:13pt;padding:2px; border:3px; background-color:<?echo $colorOFF; ?>" type="submit" value="PandoraOFF">OFF</button>
  </br></br>Choose speakers:</br>
  <button name="Speakers" type="submit" value="Front">FRONT</button>
  <button name="Speakers" type="submit" value="Back">BACK</button>


<input type="hidden" name="country" value=<?echo $variable; ?>>




</form>



</body></html>

