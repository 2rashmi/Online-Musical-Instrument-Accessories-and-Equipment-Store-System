<?php
	require 'database.php';


	$iReturn = $_POST["return"];
	$iPricecode = $_POST["pcode"];


	$sql = "INSERT INTO refund (refundID, reason, payID) VALUES (NULL, ?, ?)";


	$stmt = $mysqli->prepare($sql);


	$stmt->bind_param("ss", $iReturn, $iPricecode);

	if ($stmt->execute()) {
		echo "<script>alert('Record inserted successfully')</script>";
		// header("Location: U_returnform.php");
	} else {
		echo $stmt->error;
		echo "<script>alert('Error in insertion')</script>";
	}

	$stmt->close();
	$mysqli->close();
?>
