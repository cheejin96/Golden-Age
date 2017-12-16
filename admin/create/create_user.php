<?php 
include 'regisUserPHP.php'; 
?>
<!DOCTYPE html>
<html>
<body>

	<div class='create'>
		<form method="post" name="createForm" action="" enctype='multipart/form-data' onsubmit="return myFunction()">
			<fieldset>
				<legend><p class="big"><strong>Create 

					<?php 
					switch ($regisType) {

						case 'A':
						echo 'Admin';
						break;
						case 'D':
						echo 'Driver';
						break;
						case 'N':
						echo 'Nurse';
						break;
						case 'Z':
						echo 'Chef';
						break;
					}
					?>



				</strong></p></legend>
				<label for="name">Name:</label>
				<input id="name" name="Name" type="text" value="" maxlength="255" />
				<font color="red"><div id = "nameError"></div></font>
				<br/><br/>


				<label for="IC">IC:</label>
				<input id="ic" name="IC" type="text" value="" maxlength="16" />
				<font color="red"><div id = "icError"></div></font>
				<br/><br/>

				<label for="Contact">Contact:</label>
				<input id="contact" name="Contact" type="text" value="" maxlength="16" />
				<font color="red"><div id = "contactError"></div></font>
				<br/><br/>

				<label for="Age">Age:</label>
				<input id="age" name="Age" type="text" value="" maxlength="3" />
				<font color="red"><div id = "ageError"></div></font>
				<br/><br/>

				<label for="Address">Address:</label>
				<input id="address" name="Address" type="text" value="" maxlength="255" />
				<font color="red"><div id = "addressError"></div></font>
				<br/><br/>

				<!-- Gender -->
				<input type="radio" name="Gender" value="M" checked> Male<br>
				<input type="radio" name="Gender" value="F"> Female<br>


<!--		<label for="Sex">Gender:</label>
		<select id="sex" name="sex">
			<option value="-1">------</option>
			<option value="0">Female</option>
			<option value="1">Male</option>
		</select>
		<br/><br/>
	-->
	<br/>

	<label for="Date">Date:</label>
	<input id="date" name="regisDate" type="date" value="" maxlength="16" />
	<font color="red"><div id = "dateError"></div></font>
	<br/><br/>

	



</fieldset>

<br>
<center><input type="submit" value="Next" name="next" onclick="return myFunction()"></center>
</form>
</div>



<script>
	function myFunction() {
		var i = 0;
		if (createForm.name.value ==""){
			document.getElementById("nameError").innerHTML = "Name cannot be empty";
//return false;
i++;
}else
document.getElementById("nameError").innerHTML = null;



if (createForm.ic.value ==""){
	document.getElementById("icError").innerHTML = "IC must be fill";
//return false;
i++;
}else
document.getElementById("icError").innerHTML = null;

if (createForm.contact.value ==""){
	document.getElementById("contactError").innerHTML = "Contact must be fill";
//return false;
i++;
}else
document.getElementById("contactError").innerHTML = null;

if (!createForm.age.value ==""){
	if (isNaN(createForm.age.value)){
		document.getElementById("ageError").innerHTML = "Not a number";
//return false;
i++;
}else
document.getElementById("ageError").innerHTML = null;

}else{
	document.getElementById("ageError").innerHTML = "Age must be fill";
//	return false;
i++;
}

if(createForm.address.value == ""){
	document.getElementById("addressError").innerHTML = "Address must be filled";
//return false;
i++;
}else{
	document.getElementById("addressError").innerHTML = null;
}





return (i == 0);
}
</script>







</body>
</html> 