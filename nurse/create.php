<?php include ('../CSS.php') ?>
<?php include ('header.php') ?>	

   <?php if(isset($_GET["regisType"])){
       $regisType = $_GET["regisType"]; 
   }
   ?>

<html>
<head>
    <title id = "title">Country</title>
</head>
<body>
    <div class="createUser">
        <form>
            <span><p class="big">Create member </p></span>
            <label>Register Type:</label>
            <select name="regisType" onchange="this.form.submit()">
                <option value="" disabled selected>--select--</option>              
                <option value="C" <?php echo (isset($regisType)&&$regisType=="C" ? 'selected':''); ?>>Client</option>

<!--
                <option value="Z" <?php echo (isset($regisType)&&$regisType=="Z" ? 'selected':''); ?>>Chef</option>
                <option value="D" <?php echo (isset($regisType)&&$regisType=="D" ? 'selected':''); ?>>Driver</option>
                <option value="N" <?php echo (isset($regisType)&&$regisType=="N" ? 'selected':''); ?>>Nurse</option>
-->
              
                <option value="P" <?php echo (isset($regisType)&&$regisType=="P" ? 'selected':''); ?>>Patient</option>
            </select>
        </form>
    </div>
    <?php
    if(isset($_GET["regisType"])){
       $regisType = $_GET["regisType"];

       switch ($regisType) {

case 'A':
case 'D':
case 'N':
case 'Z':
include('create/create_user.php');
    break;



        case 'P':
        include('create/create_patient.php');
        break;
        case 'C':
        include('create/create_client.php');
        break;

        default:
        # code...
        break;
    }




}
?>
</body>
</html>