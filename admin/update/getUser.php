<?php

include('../../connDB.php');

if(isset($_GET["ID"])){
   $ID = $_GET["ID"];

   $query = "SELECT ID, Name, IC, Contact, BirthYear, Address, Gender, RegisDate, RegisType FROM users WHERE id = $ID";


   if($c_records = mysqli_query($con,$query)){

      $row = mysqli_fetch_array($c_records);

      $Name = $row['Name'];
      $IC = $row['IC'];
      $Age = date("Y") - $row['BirthYear'];
      $Gender = $row['Gender'];
      $Contact = $row['Contact'];
      $Address = $row['Address'];
      $regisType = $row['RegisType'];
      $regisDate = $row['RegisDate'];
  }
  else{
    echo "No Record";
}
}
?>