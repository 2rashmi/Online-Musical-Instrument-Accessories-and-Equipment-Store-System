<?php
require 'database.php';

if (isset($_GET["usercode"])) {
    $userID = $_GET["usercode"];

    // Delete records from child table 1 (faq)
    $stmt1 = $mysqli->prepare("DELETE FROM faq WHERE userID = ?");
    $stmt1->bind_param("i", $userID);
    $stmt1->execute();
    $stmt1->close();

    // // Delete records from child table 4 (e.g., refund)
    // $stmt5 = $mysqli->prepare("DELETE FROM refund WHERE payID IN (SELECT payID FROM payment WHERE userID = ?)");
    // $stmt5->bind_param("i", $userID);
    // $stmt5->execute();
    // $stmt5->close();

    // Delete records from child table 2 (payment)
    $stmt2 = $mysqli->prepare("DELETE FROM payment WHERE userID = ?");
    $stmt2->bind_param("i", $userID);
    $stmt2->execute();
    $stmt2->close();

    // Delete records from child table 3 (sellitem)
    $stmt3 = $mysqli->prepare("DELETE FROM sellitem WHERE userID = ?");
    $stmt3->bind_param("i", $userID);
    $stmt3->execute();
    $stmt3->close();

    // Delete user from the main user table
    $stmt4 = $mysqli->prepare("DELETE FROM user WHERE userID = ?");
    $stmt4->bind_param("i", $userID);
    $stmt4->execute();
    $stmt4->close();

    // Redirect to store.php after deletion
    header("Location: store.php");
    exit();
}
else{
    echo "<script>alert('You Can't Delete this Acoount Because this Account is being in refund process)</script>;";
}

mysqli_close($mysqli);
?>
