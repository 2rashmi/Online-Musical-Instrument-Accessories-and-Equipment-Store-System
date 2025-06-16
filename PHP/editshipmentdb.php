<?php
	require'database.php';
	
	$payID=$_POST["payID"];   
	$bname=$_POST["bname"];
	$bprice=$_POST["bprice"];
	$cardtype=$_POST["cardtype"];
	$cdName=$_POST["cdName"];
	$Shipment=$_POST["Shipment"];
	
	
	$sql = "UPDATE payment SET	payID = '$payID',cardtype = '$cardtype',cdName = '$cdName',Shipment = '$Shipment' WHERE payID = '$payID'";
	
	if(mysqli_query($mysqli,$sql)){
		echo "<script>alert('Item Update Successfully')'</script>";
		header("Location:editpayment.php");
		
	}
	else{
		echo "Not Update";
	}
	mysqli_close($mysqli);
?>
