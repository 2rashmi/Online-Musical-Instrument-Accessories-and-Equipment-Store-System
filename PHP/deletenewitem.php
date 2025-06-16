<?php
	
    require 'database.php';

    $cod = $_GET["code"];
    
    //W3School delete
    $sql_delete_payment = "DELETE FROM payment WHERE bcode = '$cod'";
    if (mysqli_query($mysqli, $sql_delete_payment)) {
        //W3school delete
        $sql_delete_newitem = "DELETE FROM newitem WHERE bcode = '$cod'";
        if (mysqli_query($mysqli, $sql_delete_newitem)) {
            echo "<script>alert('Items and Payments deleted successfully')</script>";
            header("Location: editnewitem.php");
        } else {
            echo "Error deleting from newitem: " . $mysqli->error;
        }
    } else {
        echo "Error deleting from payment: " . $mysqli->error;
    }
    
    mysqli_close($mysqli);
    

?>