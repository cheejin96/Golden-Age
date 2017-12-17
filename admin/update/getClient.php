<?php

include('../../connDB.php');

if(isset($_GET["ID"])){
   $ID = $_GET["ID"];

$query = "SELECT c.ID, c.Name, c.IC, c.Contact, c.BirthYear, c.Address, c.Gender, c.RegisDate, c.Patient_ID,  p.Name as P_Name, c.Relationship FROM clients c, patients p WHERE c.Patient_ID = p.ID AND c.ID = $ID";


   if($c_records = mysqli_query($con,$query)){

      $row = mysqli_fetch_array($c_records);

      $Name = $row['Name'];
      $IC = $row['IC'];
      $Age = date("Y") - $row['BirthYear'];
      $Gender = $row['Gender'];
      $Contact = $row['Contact'];
      $Address = $row['Address'];
      $regisDate = $row['RegisDate'];
$Patient_ID = $row['Patient_ID'];
            $P_Name = $row['P_Name'];

            $Relationship = $row['Relationship'];
  }
  else{
    echo "No Record";
}
}
?>