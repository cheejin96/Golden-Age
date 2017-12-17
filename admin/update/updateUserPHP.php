<?php 

	if (isset($_POST['update'])) {

$Name = $_POST['Name'];
$IC = $_POST['IC'];
$Gender = $_POST['Gender'];
$Age = $_POST['Age'];
$Birthyear = date("Y") - $Age;
$Contact = $_POST['Contact'];
$Address = $_POST['Address'];
$regisDate = $_POST['regisDate'];



$Password = md5($IC);

$sqlUser = "UPDATE users SET Name = '$Name', IC = '$IC', Gender = '$Gender', Birthyear = '$Birthyear', Contact = '$Contact', Address = '$Address', regisDate = '$regisDate' WHERE id=$ID";

$result = mysqli_query($con,$sqlUser);


var_dump($result);
		if ($result) {
			header('Location: ../view.php?type=U');
		}else{
			echo 'failed to add client';
		}	
	}
?>