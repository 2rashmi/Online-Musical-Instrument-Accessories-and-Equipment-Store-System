<?php
	session_start();

	require'database.php';
    
	$user = $_SESSION["code"];
	
	$icode=$_POST["icode"];
    $iCnumber= $_POST["cnum"];
    $iType= $_POST["ctype"];
    $iScode= $_POST["secode"];
    $iFirstname= $_POST["fname"];
    $iLastname= $_POST["lname"];

    $sql = "INSERT INTO payment (payID,cardtype,cdName,cardNo,cvv,userID,bcode,shipment) VALUES ('','$iType','$iFirstname','$iCnumber','$iScode','$user','$icode','Shipping Pending')";
			
	if(mysqli_query($mysqli,$sql))
	{
		echo"<script>alert('record inserted successfully')</script>";
		header("Location:paymentsuccess.php");
	}
	else{
		echo $mysqli->error;
		echo"<script>alert('Error in insertion')</script>";
	}
	mysqli_close($mysqli);
?>