<?php
	
    require 'database.php';

    $cod = $_GET["code"];
    
    // W3School delete query 
    $sql = "DELETE FROM sellitem WHERE ucode = '$cod'";
    if (mysqli_query($mysqli, $sql)) {
 
            echo "<script>alert('Deleted Used Items Successfully')</script>";
            header("Location: edituseditems.php");
        } 
        else {
            echo "Error deleting from newitem: " . $mysqli->error;
        }
    
    
    mysqli_close($mysqli);
    
?>