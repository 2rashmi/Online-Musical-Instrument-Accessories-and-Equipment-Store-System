<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $mysqli = require __DIR__ . "/database.php";

    // Retrieve user from the database based on the provided email
    $sql = "SELECT * FROM user WHERE Email = ?";
    $stmt = $mysqli->prepare($sql);
    $stmt->bind_param("s", $_POST["email"]);
    $stmt->execute();

    $result = $stmt->get_result();

// Check if a user with the given email exists
    if ($result->num_rows === 1) {
        $user = $result->fetch_assoc();
    
        // Check if the email is admin's email
        if ($user["Email"] === "admin@melobea.lk") {

            if (sha1($_POST["password"]) === $user["Password"]) {
                session_start();
                $_SESSION["code"] = $user["userID"];
                $_SESSION["userID"] = $user["Fname"];
                $_SESSION["adr"] = $user["Address"];
                $_SESSION["mail"] = $user["Email"];
                $_SESSION["name"] = $user["Lname"];
                $_SESSION["isAdmin"] = true;
                header("Location: admin.php");
            } else {
                echo "<script>alert('Invalid password!');</script>";
                exit();
            }
        } 
        else{
            if (sha1($_POST["password"]) === $user["Password"]) {
                
                session_start();

                $_SESSION["code"] = $user["userID"];
                $_SESSION["userID"] = $user["Fname"];
                $_SESSION["adr"] = $user["Address"];
                $_SESSION["mail"] = $user["Email"];
                $_SESSION["name"] = $user["Lname"];
                header("Location: U_store.php");
            } else {
                echo "<script>alert('Invalid password!');</script>";
                exit();
            }
        }
    } else {
        echo "User not found!";
    }
    
    

    $stmt->close();
    $mysqli->close();
}
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

</body>
</html>
