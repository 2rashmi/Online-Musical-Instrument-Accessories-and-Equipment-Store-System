<!-- this is php page we insert users faq to database -->
<?php
    session_start();
    require "database.php";

    $qus = $_POST["qusFQ"];
    $code = $_SESSION["code"];

    $sql = "INSERT INTO faq(faqid, que, ans,userID) VALUES('', '$qus', 'Admin Will Answer','$code')";


    if(mysqli_query($mysqli,$sql))
    {
        echo "<script>alert('Record inserted Successfully!')</script>";
    }
else
{
    echo "<script>alert('Error In Submit')</script>";
}
    mysqli_close($mysqli);
?>