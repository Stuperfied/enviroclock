
<!DOCTYPE html>
<html>
<head>
<title>Environmental Calculator</title>
</head>

<body>
<p>
<font style="font-size:18pt; padding-left:20px;"><a href="http://enviroclock.ddns.net/index.php">Home</a>&nbsp;&nbsp;<a href="http://enviroclock.ddns.net/facts.php">The Facts</a></font>
</p>

<div style="width: 600px; padding-left:20px; padding-bottom: 100px">
<h1>Welcome to the Environmental Calculator</h1>
<p>My name is Michael Hurt 
and I have programmed this site to allow people to test how long the earth has 
left if we keep increasing our emissions of CO2 and chopping down trees at the rate 
recorded for 2019.</p>

<p>The idea is simple really, a tree can only absorb X amount of CO2 as it grows 
and it's rate of growth is govered by both DNA limits plus the amount of water and 
nutrients in the soil. The oceans can only abosrb Y amount of CO2 each year which is 
goverened by waves crashing, storm surges and the concentration of CO2 at sea level.</p>

<p>Now I am not a scientist, I am just using statistical 
data which is readily available online coupled with some simple year 10 maths. 
If you have any questions, concerns, suggestions, or your programmer wishing to 
contribute, please feel free to contact me at hurt_domain@hotmail.com</p>
</div>

<?               
$idlh = 391463414634146.3;
$concentration = 3210000000000;
$preindustrial = 2192195121951.22;
$emissions = 33600000000;
$emgrowth = 0.6;
$trees = 3000000000000;
$treeabsorbtion = 21.7724;
$deforestation = 10000000000;
$oceanabsorbtion = 2600000000;

?>
<form name="form1" method="post" action="<? echo htmlentities($_SERVER['PHP_SELF']); ?>">
	<table style='white-space:nowrap; border:1px solid black; margin-left:auto; margin-right:auto;'>
	<caption><h3>Emissions</h3></caption>

	<tr>
	<td><label for="emissions">Emissions:</label></td>
	<td><input type="text" id="emissions" name="emissions" value=<? echo $emissions ?>></td>
	<td>Tonnes emitted annually</td>
	</tr>
	
	<tr>
	<td><label for="emgrowth">Growth:</label></td>
	<td><input type="text" id="emgrowth" name="emgrowth" value=<? echo $emgrowth ?>></td>
	<td>Percent annual emissions growth</td>	
	</tr>
	
	<tr>
	<td><label for="concentration">Concentration:</label></td>
	<td><input type="text" id="concentration" name="concentration" value=<? echo $concentration ?>></td>
	<td>Tonnes at current global level</td>	
	</tr>
	
	<tr>
	<td><label for="preindustrial">Pre-industrial:</label></td>
	<td><input type="text" id="preindustrial" name="preindustrial" value=<? echo $preindustrial ?>></td>
	<td>Tonnes at pre-industrial levels</td>	
	</tr>
	
	<tr>
	<td><label for="idlh">IDLH Value:</label></td>	
	<td><input type="text" id="idlh" name="idlh" value=<? echo sprintf("%.0f ",$idlh); ?>></td>
	<td>Parts per million will immediately kill</td>
	</tr></table>
	<br />
		
	<table style='white-space:nowrap; border:1px solid black; margin-left:auto; margin-right:auto;'>
	<caption><h3>Trees</h3></caption>
	
	<tr>
	<td><label for="trees">Trees:</label></td>
	<td><input type="text" id="trees" name="trees" value=<? echo $trees ?>></td>
	<td>Exist Globally</td>
	</tr>
	
	<tr>
	<td><label for="trees">Absorbtion:</label></td>
	<td><input type="text" id="treeabsorbtion" name="treeabsorbtion" value=<? echo $treeabsorbtion ?>></td>
	<td>kg of carbon absorbed annually by 1 average hardwood tree</td>
	</tr>
	
	<tr>
	<td><label for="trees">Deforestation:</label></td>
	<td><input type="text" id="deforestation" name="deforestation" value=<? echo $deforestation ?>></td>
	<td>Annual loss (Trees cut down + trees planted)</td>
	</tr></table>
	<br />
	
	<table style='white-space:nowrap; border:1px solid black; margin-left:auto; margin-right:auto;'>
	<caption><h3>Oceans</h3></caption>
	
	<tr>
	<td><label for="oceanabsorbtion">Ocean Absorbtion:</label></td>
	<td><input type="text" id="oceanabsorbtion" name="oceanabsorbtion" value=<? echo $oceanabsorbtion ?>></td>
	<td>tonnes of carbon absorbed annually by the oceans</td>
	</tr></table>
	<br />

	<table style='white-space:nowrap; margin-left:auto; margin-right:auto;'>
	<tr>
	<td><input type="submit" name="submit" value="Calculate"></td>
	</tr></table>
</form>
</div>
<br /><br />

<?
if(isset($_POST['submit'])) { 
    $emissions = htmlentities($_POST['emissions']);
	$emgrowth = htmlentities($_POST['emgrowth']);
	$concentration = htmlentities($_POST['concentration']);
	$preindustrial = htmlentities($_POST['preindustrial']);
	$idlh = htmlentities($_POST['idlh']);
	$trees = htmlentities($_POST['trees']);
	$treeabsorbtion = htmlentities($_POST['treeabsorbtion']);
	$deforestation = htmlentities($_POST['deforestation']);
	$oceanabsorbtion = htmlentities($_POST['oceanabsorbtion']);
	// $ = $_POST[''];
} 

echo "<table style='white-space:nowrap; border:1px solid black; margin-left:auto; margin-right:auto;'>";

echo "<tr><td>Calculate using:</td></tr>";
echo "<tr><td>&nbsp;</td>";
echo "<tr><td>" . number_format($emissions) . " emissions<td></tr>";
echo "<tr><td>" . number_format($emgrowth, 2) . " growth<td></tr>";
echo "<tr><td>" . number_format($concentration) . " current concentration<td></tr>";
echo "<tr><td>" . number_format($preindustrial) . " preindustrial concentration<td></tr>";
echo "<tr><td>" . number_format($idlh) . " IDLH for CO2<td></tr>";
echo "<tr><td>" . number_format($trees) . " trees<td></tr>";
echo "<tr><td>" . number_format($treeabsorbtion, 4) . " absorbtion<td></tr>";
echo "<tr><td>" . number_format($deforestation) . " deforestation<td></tr>";
echo "<tr><td>" . number_format($oceanabsorbtion) . " ocean absorbtion<td></tr>";
echo "</table>";

echo "<div style='width: 600px; padding-top: 100px; padding-left:20px; padding-bottom: 100px'>";
$emitting = $emissions;
$newconcentration = $concentration;
$year = 2020;

do {
    $absorbtion = ($treeabsorbtion * $trees) + $oceanabsorbtion;
	$remainder = $emitting - $absorbtion;
	$newconcentration += $remainder;
	if ($newconcentration < $preindustrial) $newconcentration = $concentration;
	
	echo "End of Year $year:<br />";
	echo "Concentrations are now at " . number_format($newconcentration) . " tonns of CO2 in the atmosphere<br />";
	echo "Humans are now emitting " . number_format($emitting) . " Tonns of CO2<br />";

	
	echo "The earth is capable of absorbing " . number_format($absorbtion) . " tonnes<br />";
	if ($remainder < 0) {		
		echo "<font color='green'>All has been absorbed</font><br />";
	} else {
		echo "<font color='red'>Failed to absorb all human emissions</font><br />";
		echo "Atmospheric contamination now at " . number_format($newconcentration) . " tonnes<br />";
	}
	
	if ($newconcentration > (($idlh/50)*2) && $newconcentration < (($idlh/50)*5)) {
		echo "<font color='red'>Some humans will now be experiencing headaches and dizzyness</font><br />";
	}
		
	if ($newconcentration > (($idlh/50)*5) && $newconcentration < (($idlh/50)*7)) {
		echo "<font color='red'>All humans are now experiencing headaches and dizzyness</font><br />";
		echo "<font color='red'>Some humans are now experiencing dissorentation and nausia</font><br />";
	}
	
		if ($newconcentration > (($idlh/50)*7) && $newconcentration < $idlh) {
		echo "<font color='red'>All humans are now experiencing headaches and dizzyness</font><br />";
		echo "<font color='red'>All humans are now experiencing dissorentation and nausia</font><br />";
	}
	
	if ($newconcentration > $idlh) {
		echo "<font color='red'>Atmospheric contamination of CO2 is now above IDLH levels</font><br />";
		echo "<p><font color='red'><b>The surface of the planet is now uninhabitable by humans</b></font></p>";
		break;
	}
	
	echo "Cutting down " . number_format($deforestation) . " trees<br />";
	$trees -= $deforestation;
	
	echo "Increasing emissions by " . number_format($emgrowth, 2) . " %<br />";
	$emitting += ($emissions *= (1 + $emgrowth));
	echo "<br />";
	$year++;
} while ($year < 2500);
echo"</div>";


?>



</body>
</html>


