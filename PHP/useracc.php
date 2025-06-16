<?php
session_start();

if (!isset($_SESSION["userID"])) {
    // User is not logged in, redirect to login page or handle the situation as needed
    header("Location: login.php");
    exit();
}

$mysqli = require __DIR__ . "/database.php";

// Retrieve user account details from useracc table based on the userID
$userID = $_SESSION["userID"];
$sql = "SELECT * FROM useracc WHERE userID = ?";
$stmt = $mysqli->prepare($sql);
$stmt->bind_param("i", $userID);
$stmt->execute();

$result = $stmt->get_result();

if ($result->num_rows === 1) {
    $useraccDetails = $result->fetch_assoc();
    // Display user account details
    echo "User ID: " . $useraccDetails["userID"] . "<br>";
    echo "First Name: " . $useraccDetails["Fname"] . "<br>";
    echo "Email: " . $useraccDetails["Email"] . "<br>";
    echo "Contact Number: " . $useraccDetails["ContatctNo"] . "<br>";
    echo "Address: " . $useraccDetails["Address"] . "<br>";
} else {
    echo "User account details not found!";
}

$stmt->close();
$mysqli->close();
?>
