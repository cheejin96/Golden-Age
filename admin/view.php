<?php include ('../CSS.php') ?>
<?php include ('adminHeader.php') ?>

   <?php if(isset($_GET["type"])){
       $type = $_GET["type"]; 
   }
   ?>


<html>
<head>
    <title id = "title">Country</title>
</head>
<body>
    <div class="createUser">
        <form>
            <span><p class="big">View member </p></span>
            <label>Register Type:</label>
            <select name="type" onchange="this.form.submit()">
                <option value="" disabled selected>--select--</option>
                <option value="U" <?php echo (isset($type)&&$type=="U" ? 'selected':''); ?>>User</option>
                <option value="C" <?php echo (isset($type)&&$type=="C" ? 'selected':''); ?>>Client</option>
                <option value="P" <?php echo (isset($type)&&$type=="P" ? 'selected':''); ?>>Patient</option>





            </select>
        </form>
    </div>
    <?php
    if(isset($_GET["type"])){
       $type = $_GET["type"];

       switch ($type) {

case 'U':
include 'getAllData/getAllUsers.php';
    break;



        case 'P':
include 'getAllData/getAllPatients.php';
        
        break;
        case 'C':
include 'getAllData/getAllClients.php';
       
        break;

        default:
        # code...
        break;
    }




}
?>
</body>
</html>