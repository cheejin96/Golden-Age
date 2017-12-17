<?php include ('../CSS.php') ?>
<?php include ('driverHeader.php') ?>	

<?php
include('../connDB.php');

$timezone = date_default_timezone_set("Asia/Kuala_Lumpur");
$time = date('H:i:s', time());


$query = "SELECT ds.ID, d.Name AS Driver_Name, p.Name AS Patient_Name, n.Name AS Nurse_Name, ds.Location, ds.Description, ds.Date, ds.Time FROM users d INNER JOIN driver_schedule ds ON ds.Driver_ID = d.ID INNER JOIN users n ON ds.Nurse_ID = n.ID INNER JOIN patients p ON ds.Patient_ID = p.ID WHERE ds.Date < CURDATE() ORDER BY Date, Time";


$result = mysqli_query($con,$query);

echo "<center>";

if($row = mysqli_fetch_array($result)){
	

	echo "<table class ='showData' 	border = 1>";
	echo "<tr>";
	echo "<th>Date</th>";
	echo "<th>Time</th>";
	echo "<th>Location</th>";
	echo "<th>Nurse</th>";
	echo "<th>Patient</th>";
	echo "<th>Description</th>";
	echo "</tr>";

	echo "<tr>";
		echo "<td>".$row['Date']. "</td>";
		echo "<td>".$row['Time']. "</td>";
		echo "<td>".$row['Location']. "</td>";
		echo "<td>".$row['Nurse_Name']. "</td>";
		echo "<td>" .$row['Patient_Name']. "</td>";
		echo "<td>" .$row['Description']. "</td>";
		echo "</tr>";


while ($row = mysqli_fetch_array($result)) {
		echo "<tr>";
		echo "<td>".$row['Date']. "</td>";
		echo "<td>".$row['Time']. "</td>";
		echo "<td>".$row['Location']. "</td>";
		echo "<td>".$row['Nurse_Name']. "</td>";
		echo "<td>" .$row['Patient_Name']. "</td>";
		echo "<td>" .$row['Description']. "</td>";
		echo "</tr>";
	}
	echo "<table>";


}else{
	echo "No Schedule Today";
}

	echo "</center>";


?>