<?php 
//include ('../adminHeader.php');
include('../connDB.php');



//<a href="../view.php?regisType=U"><img src='../../button/back.png' width="50" height="50"></a> 


if(isset($_REQUEST["ID"]) && isset($_REQUEST['type'])){

   $ID = $_REQUEST["ID"];
   $type = $_REQUEST["type"];

   switch ($type) {
    case 'U':
    $query = "DELETE FROM users WHERE ID = $ID";
    break;
    case 'P':
    $query = "DELETE FROM patients WHERE ID = $ID";
    break;
    case 'C':
    $query = "DELETE FROM clients WHERE ID = $ID";
    break;
    default:

    break;
}

if(isset($query)){
    $result = mysqli_query($con,$query);

    $return = 'Location: view.php?type=' . $type;
    if ($result) {
            header($return);
        }else{
            echo 'failed to delete';
        }   

}else{
        header("HTTP/1.0 404 Not Found");
    echo "<h1>404 Not Found</h1>";
    echo "<p>The page that you have requested could not be found.</p>";


    exit();
}




}
else{
            header("HTTP/1.0 404 Not Found");
    echo "<h1>404 Not Found</h1>";
    echo "<p>The page that you have requested could not be found.</p>";


    exit();
}

?>