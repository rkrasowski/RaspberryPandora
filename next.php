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

elseif ($Pandora == "PandoraOFF")
        {
                $colorON = "";
                $colorOFF = "red";
        }







if ($Speakers == "Front")
        {
                $colorSpeakerFront = "green";
                $colorSpeakerBack = "";
        }

elseif ($Speakers == "Back")
        {
                $colorSpeakerBack = "green";
                $colorSpeakerFront = "";
        }

?>


<form action= "next.php" method="post">
  <h2>Pandora Radio:</h2>
  <button name="Pandora" style="width:100px;font-size:13pt;padding:2px; border:3px; background-color:<?echo $colorON; ?>" type="submit" value= "PandoraON">ON</button>
  <button name="Pandora" style="width:100px;font-size:13pt;padding:2px; border:3px; background-color:<?echo $colorOFF; ?>" type="submit" value="PandoraOFF">OFF</button>
 <input type = "hidden" name="Speakers" value="<?php echo $Speakers; ?>">
</form>

<form action= "next.php" method="post">
 </br><br><h2>Choose speakers:</h2>
 <button name="Speakers" type="submit" style="width:100px;font-size:13pt;padding:2px; border:3px; background-color:<?echo $colorSpeakerFront; ?>" value="Front">FRONT</button>
 <button name="Speakers" type="submit" style="width:100px;font-size:13pt;padding:2px; border:3px; background-color:<?echo $colorSpeakerBack; ?>" value="Back">BACK</button>
 <input type = "hidden" name="Pandora" value="<?php echo $Pandora; ?>">
</form>

</body></html>

