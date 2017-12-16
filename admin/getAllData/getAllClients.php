<?php
include('../connDB.php');

//Get users data
$sql = "SELECT c.ID, c.Name, c.IC, c.Contact, c.BirthYear, c.Address, c.Gender, c.RegisDate, c.Patient_ID,  p.Name as P_Name, c.Relationship FROM clients c, patients p WHERE c.Patient_ID = p.ID";



if($records = mysqli_query($con,$sql)){

	echo "<center>";
	echo "<span><p class='big'>Clients</p></span>";
	echo "<table class ='showData' 	border = 1>";
	echo "<tr>";
	echo "<th>Link</th>";
	echo "<th>ID</th>";
	echo "<th>Name</th>";
	echo "<th>IC</th>";
	echo "<th>Age</th>";
	echo "<th>Contact</th>";
	echo "<th>Address</th>";
	echo "<th>Gender</th>";
	echo "<th>Registration Date</th>";
	echo "<th>Patient ID</th>";
	echo "<th>Patient Name</th>";
	echo "<th>Relationship</th>";
	echo "</tr>";

	while ($row = mysqli_fetch_array($records)) {
		echo "<tr>";


		echo '<td><input type="submit" value="Next" name="next"></td>';


		echo "<td>".$row['ID']. "</td>";
		echo "<td>" .$row['Name']. "</td>";
		echo "<td>" .$row['IC']. "</td>";
		$Age = date("Y") - $row['BirthYear'];
		echo "<td>" .$Age. "</td>";
		echo "<td>" .$row['Contact']. "</td>";
		echo "<td>" .$row['Address']. "</td>";
		if($row['Gender'] == 'F'){
			echo "<td>Female</td>";
		}elseif($row['Gender'] == 'M'){
			echo "<td>Male</td>";
		}
		echo "<td>" .$row['RegisDate']. "</td>";

echo "<td>" .$row['Patient_ID']. "</td>";
echo "<td>" .$row['P_Name']. "</td>";
echo "<td>" .$row['Relationship']. "</td>";


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
		else{

		}

		?>