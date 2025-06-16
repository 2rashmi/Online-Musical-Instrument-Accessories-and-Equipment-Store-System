<?php
require'database.php';

        $cod=$_POST["code"];
        $brn=$_POST["brand"];
        $ty=$_POST["type"];
        $desc=$_POST["description"];
        $prc=$_POST["price"];
        $dat=$_POST["date"];
        $con=$_POST["country"];

    $sql="UPDATE sellitem SET ubrand='$brn', utype='$ty', udep='$desc', uprice='$prc' , udate=' $dat', ucountry='$con' WHERE ucode = '$cod'";    

    if(mysqli_query($mysqli,$sql)){
        echo "<script> alert ('Update used items Successflly')'</script>";
        header("Location:edituseditems.php");
    }
    else{
        echo "Not Update";
    }
    $mysqli_close($mysqli);
?>

