<?php include ('../CSS.php') ?>
<?php include ('adminHeader.php') ?>

<?php
	include('../connDB.php');

	$showPatient = 'SELECT ID, Name FROM patienttable;';

	$showNurse = 'SELECT ID, Name FROM membertable WHERE regisType = "4"';

	$showDriver = 'SELECT ID, Name FROM membertable WHERE regisType = "3"';

	$resultPatient = mysqli_query($con,$showPatient);
	if(!$resultPatient){
		echo "Patient not found";
	}

	$resultNurse = mysqli_query($con,$showNurse);
	if(!$resultNurse){
		echo "Nurse not found";
	}

	$resultDriver = mysqli_query($con,$showDriver);
	if(!$resultDriver){
		echo "Driver not found";
	}

	if(isset($_POST['assign'])){
		$patientID = $_POST['patientName'];
		$patientSQL = "SELECT name FROM patienttable WHERE ID  = '$patientID'";
		$resultPatientSQL = mysqli_query($con,$patientSQL);
		$getPatientName = mysqli_fetch_array($resultPatientSQL);
		$patientName = $getPatientName['name'];

		$nurseID = $_POST['nurseName'];
		$nurseSQL = "SELECT name FROM membertable WHERE ID  = '$nurseID'";
		$resultNurseSQL = mysqli_query($con,$nurseSQL);
		$getNurseName = mysqli_fetch_array($resultNurseSQL);
		$nurseName = $getNurseName['name'];

		$driverID = $_POST['driverName'];
		$driverSQL = "SELECT name FROM membertable WHERE ID  = '$driverID'";
		$resultDriverSQL = mysqli_query($con,$driverSQL);
		$getDriverName = mysqli_fetch_array($resultDriverSQL);
		$driverName = $getDriverName['name'];

		$date = $_POST['date'];

		$description = $_POST['description'];
		
		if($patientName == null || $nurseName == null || $driverName == null){
			echo '<script type="text/javascript">';
			echo "myFunction()";
			echo "</script>";
		}else{
			$sql = "INSERT INTO driverschedule(patientID, patientName, scheduleDate, nurseID, nurseName, driverID, driverName, description) VALUES ('$patientID','$patientName','$date','$nurseID','$nurseName','$driverID','$driverName', '$description')";
			$reuslt = mysqli_query($con,$sql);
			var_dump($reuslt);
			if($reuslt){
				echo "Assign successful";
			}else{
				echo "Error! Please try again";
			}
		}
	}
?>
<div class='create'>
	<form  name='assignDriver' method="post">
		<fieldset>
			<legend><strong><p class="big">Assign Driver</p></strong></legend>
			<label>Patient Name:</label>
			<select id="pID" name="patientName">
				<option value ="-1">-------</option>
				<?php while($row = mysqli_fetch_array($resultPatient)):;?>
				<option value="<?php echo $row[0];?>"><?php echo $row[1];?></option>
				<?php endwhile;?>
			</select>
			<font color="red"><div id="patient"></div></font>
			<br>
			<label>Nurse Name:</label>
			<select id="nID" name="nurseName">
				<option value ="-1">-------</option>
				<?php while($row = mysqli_fetch_array($resultNurse)):;?>
				<option value="<?php echo $row[0];?>"><?php echo $row[1];?></option>
				<?php endwhile;?>
			</select>
			<font color="red"><div id="nurse"></div></font>
			<br>
			<label>Driver Name:</label>
			<select id="dID" name="driverName">
				<option value ="-1">-------</option>
				<?php while($row = mysqli_fetch_array($resultDriver)):;?>
				<option value="<?php echo $row[0];?>"><?php echo $row[1];?></option>
				<?php endwhile;?>
			</select>
			<font color="red"><div id="driver"></div></font>
			<br>
			<label>Date:</label>
			<input type="datetime-local" name= "date" size="16" >
			<br><br>
			<label>Description:</label>
			<br>
			<textarea rows="4" cols="50" name="description">Enter text here...</textarea> 
		</fieldset>
		<center><input type="submit" value="Assign" name="assign" onclick="return myFunction()"> </center>	
	</form>
</div>
    
<script type="text/javascript">
	function myFunction()
	{
		if (createForm.patientName.value =="-1")
		{
			document.getElementById("patient").innerHTML = "Please select a patient";
			return false;
		}
		else
			document.getElementById("patient").innerHTML = null;
		if (createForm.driverName.value =="-1")
		{
			document.getElementById("nurse").innerHTML = "Please select a nurse";
			return false;
		}
		else
			document.getElementById("nurse").innerHTML = null;
		if (createForm.nurseName.value =="-1")
		{
			document.getElementById("driver").innerHTML = "Please select a driver";
			return false;
		}
		else
			document.getElementById("driver").innerHTML = null;
	}
</script>