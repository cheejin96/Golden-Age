<?php 
session_start();
if(isset($_SESSION['userID']) && $_SESSION['regisType'] == "A"){
	include ('../CSS.php');
	include ('adminHeader.php');


	include('../connDB.php');


	?>

	<!DOCTYPE html>
	<html>
	<title>Home</title>

	<body>

	<?php
		$query = "SELECT userID, name, ic, contact, regisType FROM usertable ORDER BY regisType";

		if($result = mysqli_query($con,$query)){
			echo "<center>";
			echo "<p class = big><strong>All User Data</strong></p>";
			echo "<table class ='showData' 	border = 1>";
			echo "<tr>";
			echo "<th>ID</th>";
			echo "<th>Name</th>";
			echo "<th>IC</th>";
			echo "<th>Contact</th>";
			echo "<th>Type</th>";
			echo "</tr>";

			while ($row = mysqli_fetch_array($result)) {
				echo "<tr>";
				echo "<td>".$row['userID']. "</td>";
				echo "<td>" .$row['name']. "</td>";
				echo "<td>" .$row['ic']. "</td>";
				echo "<td>" .$row['contact']. "</td>";
				if($row['regisType'] == '0'){
					echo "<td>Admin</td>";
				}elseif ($row['regisType'] == '1') {
					echo "<td>Client</td>";
				}elseif ($row['regisType'] == '2') {
					echo "<td>Chef</td>";
				}elseif ($row['regisType'] == '3') {
					echo "<td>Driver</td>";
				}elseif ($row['regisType'] == '4') {
					echo "<td>Nurse</td>";
				}elseif ($row['regisType'] == '5') {
					echo "<td>Patient</td>";
				}
				echo "</tr>";
			}
			echo "</table>";
			echo "</center>";
		}else{
			echo "No record found";
		}

		?>



		
	</body>

	</html>


	<?php
}else{
	header("HTTP/1.0 404 Not Found");
	echo "<h1>404 Not Found</h1>";
	echo "<p>The page that you have requested could not be found.</p>";

	echo "<a href= '../login.php'>";
	echo "Please Login to open this page.";
	echo "</a>";
	exit();
}
?>