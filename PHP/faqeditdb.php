<?php
    require 'database.php';

    // Check if faq parameter is set in the URL
    if(isset($_GET["faq"])) {
        // Use intval to ensure $iReturn is an integer and prevent SQL injection
        $iReturn = intval($_GET["faq"]);

        // Use prepared statement to prevent SQL injection
        $stmt = $mysqli->prepare("DELETE FROM faq WHERE faqID = ?");
        $stmt->bind_param("i", $iReturn);

        if ($stmt->execute()) {
            echo "<script>alert('Deleted FAQ Successfully')</script>";
            header("Location: editfaq.php");
        } else {
            echo "Error deleting FAQ: " . $stmt->error;
        }

        $stmt->close();
    } else {
        echo "Invalid faq ID";
    }

    $mysqli->close();
?>
