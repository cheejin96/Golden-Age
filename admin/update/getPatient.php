<?php 

include('../../connDB.php');


    if(isset($_GET["ID"])){
     $ID = $_GET["ID"];

     $query = "SELECT Name, IC, Contact, BirthYear, Address, Gender, RegisDate, BloodType, Meals, Allergic, Sickness, Deposit, Image FROM patients WHERE ID = $ID";



     if($records = mysqli_query($con,$query)){

        $row = mysqli_fetch_array($records);

 $Name = $row['Name'];
      $IC = $row['IC'];
      $Age = date("Y") - $row['BirthYear'];
      $Gender = $row['Gender'];
      $Contact = $row['Contact'];
      $Address = $row['Address'];
      $regisDate = $row['RegisDate'];


$BloodType = $row['BloodType'];
$Meals = $row['Meals'];
$Allergic = $row['Allergic'];

$Sickness = $row['Sickness'];
$Deposit = $row['Deposit'];
$RegisDate = $row['RegisDate'];

$Image = $row['Image'];

    }
    else{
        echo "No Record";
    }


}
?>