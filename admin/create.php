<?php include ('../CSS.php') ?>
<?php include ('adminHeader.php') ?>

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
                <option value="A">Admin</option>
                <option value="C">Client</option>
                <option value="Z">Chef</option>
                <option value="D">Driver</option>
                <option value="N">Nurse</option>
                <option value="P">Patient</option>
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