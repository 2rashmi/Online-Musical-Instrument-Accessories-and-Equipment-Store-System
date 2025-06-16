<?php
    session_start();

    $mysqli = require __DIR__ . "/database.php";

    $sql = "INSERT INTO sellitem (userID, ubrand, utype, udep, uprice, udate, ucountry) VALUES (?, ?, ?, ?, ?, ?,?)";

    $stmt = $mysqli->prepare($sql);
    if (!$stmt) {
        die("SQL error: " . $mysqli->error);
    }
    
    //W3school Bind parametere Method
    $stmt->bind_param("sssssss",
        $_SESSION["code"],
        $_POST["usedbrand"],
        $_POST["usedtype"],
        $_POST["useddes"],
        $_POST["usedprice"],
        $_POST["useddate"],
        $_POST["usedct"]
    );

    if ($stmt->execute()) {
        echo "<script>alert('Your Melobea Item was added to site');</script>";

        exit; // Make sure to add exit() after header to prevent further execution
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
    $mysqli->close();
?>
    

