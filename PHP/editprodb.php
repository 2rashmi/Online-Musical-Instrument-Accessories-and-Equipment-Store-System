<?php
    session_start();
    $mysqli = require __DIR__ . "/database.php";

    $code = $_POST["uid"];
    $Fname = $_POST["first"];
    $Lname = $_POST["last"];
    $Address = $_POST["ads"];
    $Email = $_POST["mail"];
    $Password = $_POST["ps"];
    $Repassword = $_POST["reps"];

    if ($Password === $Repassword) {

        $hashedPassword = sha1($Password);

        $sql = "UPDATE user SET Fname=?, Lname=?, Email=?, Address=?, Password=? WHERE userID=?";

        $stmt = $mysqli->prepare($sql);
        if ($stmt) {
            $stmt->bind_param("ssssss", $Fname, $Lname, $Email, $Address, $hashedPassword, $code);

            if ($stmt->execute()) {
                echo "<script>alert('Item Update Successfully')</script>";
                header("Location: store.php");
                exit();
            } else {
                echo "Error updating record: " . $stmt->error;
            }
        } else {
            echo "Error in prepared statement: " . $mysqli->error;
        }

        $stmt->close();
    } else {
 
        echo "Error: Passwords do not match.";
    }

    $mysqli->close();
?>




