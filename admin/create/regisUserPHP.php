<?php 
include('../connDB.php');




	if (isset($_POST['next'])) {

$Name = $_POST['Name'];
$IC = $_POST['IC'];
$Gender = $_POST['Gender'];
$Age = $_POST['Age'];
$Birthyear = date("Y") - $Age;
$Contact = $_POST['Contact'];
$Address = $_POST['Address'];
$regisDate = $_POST['regisDate'];



$Password = md5($IC);

$sqlUser = "INSERT INTO users (Name, IC, Gender, Birthyear,Contact, Address, regisDate, regisType, Password) 
VALUES ('$Name', '$IC', '$Gender', $Birthyear, '$Contact', '$Address', '$regisDate', '$regisType', '$Password')";

$result = mysqli_query($con,$sqlUser);


var_dump($result);
		if ($result) {
			echo "User Added";
		}else{
			echo 'failed to add user';
		}	


/*
		$name = $_POST['name'];
		$ic = $_POST['ic'];
		$contact = $_POST['contact'];
		$sex = $_POST['sex'];
		$age = $_POST['age'];
		$addr = $_POST['addr'];
		$relation = $_POST['relation'];
		$date = $_POST['date'];
		$photo = $_POST['file'];
$patientID = $_POST['patient'];





		if ($name == null || $ic == null || $contact == null || $sex == null || $addr == null || $relation == null || $date == null) {
			echo '<script type="text/javascript">';
			echo "myFunction()";
			echo "</script>";
		}else{
			$sqlClient = "INSERT INTO clienttable(Photo,Name,IC,Contact,Age,Addr,Sex, regisDate, regisType, relation, password) VALUES($photo ,$name, $ic, $contact, $age, $addr,  $sex, $date, 1, $relation, $ic);";
			$userID = "SELECT ID FROM clienttable WHERE Name = '.$name.';";
			$sqlUser = "INSERT INTO usertable(userPass,Name,IC,Contact,Age,Addr, Sex, regisDate, regisType) VALUES($ic, $name, $ic, $contact, $age,  $addr, $sex, $date, 1);";
			$resultClient = mysqli_query($con, $sqlClient);
			var_dump($resultClient);
			$resultUser = mysqli_query($con, $sqlUser);
			var_dump($resultUser);
			if($resultClient AND $resultUser){
				echo "<script type='text/javascript'>alert('Client created');</script>";
			}else{
				echo "<script type='text/javascript'>alert('Error. Please try again');</script>";
			}
		}
*/
	}
?>