<?php
  $mysqli = require __DIR__ . "/database.php";

  $Fname = $_POST["Fname"];
  $Lname = $_POST["Lname"];
  $Email = $_POST["Email"];
  $Address = $_POST["Address"];
  $ContatctNo = $_POST["ContatctNo"];
  $Country = $_POST["Country"];
  $Password = $_POST["Password"];
  $Repassword = $_POST["Repassword"];

  if ($Password === $Repassword) {
      // Passwords match, proceed with the insertion
      $sql = "INSERT INTO user (Fname, Lname, Email, Address, ContatctNo, Country, Password, Repassword) VALUES (?, ?, ?, ?, ?, ?, SHA1(?), SHA1(?))";

      $stmt = $mysqli->stmt_init();
      $stmt->prepare($sql);
      if (!$stmt->prepare($sql)) {
          die("SQL error" . $mysqli->error);
      }

      $stmt->bind_param("ssssssss", $Fname, $Lname, $Email, $Address, $ContatctNo, $Country, $Password, $Repassword);

      if ($stmt->execute()) {
          header("Location: signsuccess.html");
          exit; // Make sure to add exit() after header to prevent further execution
      } else {
          // Handle the case where the query does not execute successfully
          echo "Error: " . $stmt->error;
      }
  } else {
      // Passwords do not match, handle this case (e.g., show an error message)
      echo "Error: Passwords do not match.";
  }
?>
  
