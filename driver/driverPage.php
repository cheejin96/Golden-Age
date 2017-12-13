<?php include ('../CSS.php') ?>
<?php include ('header.php') ?>	

<?php
	include('../connDB.php');

	$sql = "SELECT * FROM driverschedule WHERE scheduleDate> NOW()";
	$resultSQL = mysqli_query($con,$sql);

	if($resultSQL){
		echo "<center>";
		echo "<table class ='showData' 	border = 1>";
		echo "<tr>";
		echo "<th>Date</th>";
		echo "<th>Nurse</th>";
		echo "<th>Patient</th>";
		echo "<th>Description</th>";
		echo "</tr>";
		while ($row = mysqli_fetch_array($resultSQL)) {
			echo "<tr>";
			echo "<td>".$row['scheduleDate']. "</td>";
			echo "<td>".$row['nurseName']. "</td>";
			echo "<td>" .$row['patientName']. "</td>";
			echo "<td>" .$row['description']. "</td>";
			echo "</tr>";
		}
		echo "<table>";
		echo "</center>";
	}

?>