<?php
require 'database.php';

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $faqID = $_POST["code"];
    $question = $_POST["brand"];
    $answer = $_POST["type"];

    // Use prepared statements to prevent SQL injection
    $stmt = $mysqli->prepare("UPDATE faq SET que=?, ans=? WHERE faqID=?");
    $stmt->bind_param("ssi", $question, $answer, $faqID);

    if ($stmt->execute()) {
        echo "<script>alert('FAQ Updated Successfully')</script>";
        header("Location: editfaq.php");
    } else {
        echo "Error updating FAQ: " . $stmt->error;
    }

    $stmt->close();
    $mysqli->close();
}
?>

