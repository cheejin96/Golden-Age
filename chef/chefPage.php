<?php include ('../CSS.php') ?>
<?php include ('header.php') ?>	

<?php
	include('../connDB.php');
	$vegetarianSql = "SELECT COUNT(*) FROM patienttable WHERE foodSensitive = '0'";
	$resultVegetarianSQL = mysqli_query($con,$vegetarianSql);
	$vegetarianCount = mysqli_fetch_array($resultVegetarianSQL);

	$noporkSql = "SELECT COUNT(*) FROM patienttable WHERE foodSensitive = '1'";
	$resultNoporkSQL = mysqli_query($con,$noporkSql);
	$noporkCount = mysqli_fetch_array($resultNoporkSQL);

	$nocowSql = "SELECT COUNT(*) FROM patienttable WHERE foodSensitive = '2'";
	$resultNocowSQL = mysqli_query($con,$nocowSql);
	$nocowCount = mysqli_fetch_array($resultNocowSQL);

	$normalSql = "SELECT COUNT(*) FROM patienttable WHERE foodSensitive = '3'";
	$resultNormalSQL = mysqli_query($con,$normalSql);
	$normalCount = mysqli_fetch_array($resultNormalSQL);

	$total = $vegetarianCount[0] + $noporkCount[0] + $nocowCount[0] + $normalCount[0];
	echo "<center>";
	echo "Vegetarian : $vegetarianCount[0] person";
	echo "<br>";
	echo "No Pork : $noporkCount[0] person";
	echo "<br>";
	echo "No Cow : $nocowCount[0] person";
	echo "<br>";
	echo "Normal : $normalCount[0] person";
	echo "<br>";
	echo "Total : $total person";
	echo "</center>";
?>