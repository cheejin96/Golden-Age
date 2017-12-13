<?php
	include('../connDB.php');

	$q = $_REQUEST["q"];
	$type = $_REQUEST["type"];

	if($q!== ""){
		$q = strtolower($q);
		$len = strlen($q);
		if($type == "0"){
			$sql= "SELECT * FROM 
			patienttable WHERE name LIKE '$q%'";
		}else{
			$sql= "SELECT * FROM 
			patienttable WHERE userID LIKE '$q%'";
		}

		if($records = mysqli_query($con,$sql)){
			echo "<center>";
			echo "<table class ='showData' 	border = 1>";
			echo "<tr>";
			echo "<th>ID</th>";
			echo "<th>Name</th>";
			echo "<th>IC</th>";
			echo "<th>Contact</th>";
			echo "<th>Address</th>";
			echo "<th>Gender</th>";
			echo "<th>Diseases</th>";
			echo "<th>Registration Date</th>";
			echo "<th>Food Sensitive</th>";
			echo "</tr>";

			while ($row = mysqli_fetch_array($records)) {
				echo "<tr>";
				echo "<td>".$row['ID']. "</td>";
				echo "<td>" .$row['Name']. "</td>";
				echo "<td>" .$row['IC']. "</td>";
				echo "<td>" .$row['Contact']. "</td>";
				echo "<td>" .$row['Addr']. "</td>";
				if($row['Sex'] == '0'){
					echo "<td>Female</td>";
				}elseif($row['Sex'] == '1'){
					echo "<td>Male</td>";
				}
				if($row['diseases']== '0'){
					echo "<td>Diabetes</td>";
				}elseif ($row['diseases']== '1') {
					echo "<td>Heart Diseases</td>";
				}elseif ($row['diseases']== '2') {
					echo "<td>Dementia</td>";
				}elseif ($row['diseases']== '3') {
					echo "<td>Lung Diseases</td>";
				}
				echo "<td>" .$row['regisDate']. "</td>";
				echo "<td>" .$row['foodSensitive']. "</td>";
				/*echo "<td>";
				echo "<a href= 'edit.php?id={$row['userID']}'>Edit</a>";
				echo "/";
				echo "<a href= 'Delete.php?id={$row['userID']}'>Delete</a>";
				echo "</td>";*/
				echo "</tr>";
			}
			echo "</table>";
			echo "</center>";
		}
	}
?>