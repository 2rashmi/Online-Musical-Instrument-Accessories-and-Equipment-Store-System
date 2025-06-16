<?php
	
    require 'database.php';

    $iReturn = $_GET["refund"];
    
    // Delete from payment table first
    $sql_delete_payment = "DELETE FROM refund WHERE refundID = '$iReturn'";
    if (mysqli_query($mysqli, $sql_delete_payment)) {
 
            echo "<script>alert('Deleted Used Items Successfully')</script>";
            header("Location: refundedit.php");
        } 
        else {
            echo "Error deleting from newitem: " . $mysqli->error;
        }
    
    
    mysqli_close($mysqli);
    
?>