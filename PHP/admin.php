<!DOCTYPE html>
<html lang="en"></html>
<html>
  <head>
    <!--Fonts-->
    <!--Icon font-->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"
    />

    <!--google fonts 1-->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Roboto+Mono:ital,wght@0,100;1,400&display=swap"
      rel="stylesheet"
    />
    <!--google fonts 2-->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins&display=swap"
      rel="stylesheet"
    />
    <!--google fonts 3-->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Phudu:wght@300&family=Poppins&display=swap"
      rel="stylesheet"
    />
    <!--Google font 4-->

    <!-- end Fonts-->

    <!--Style Sheet-->
    <link rel="stylesheet" href="Style/admin.css">
    <!-- End Style Sheet-->

    <!--Java Script-->
    <script type="text/javascript" src="storejs.js"></script>
    <!--Java Script-->

    <title>Molobea Store</title>
    <link rel="icon" href="Source/melobea_logo.png">
  </head>

  <body class="page">
  <a href="U_store.php"><img src="Source/melobea logo.png"></a>
  <div class="logpos">
            <div class="namepos">
                <?php
                    session_start();
                    if (isset($_SESSION["userID"])) {
                        echo "Hello, " . $_SESSION["userID"];
                    } 
                ?>
            </div>
            <button id="dec1"><a href="U_account.php"><i class="fas fa-user"></i></a></button>
    </div>

    <header>
      <h1><span class="highlight">Admin Dashboard </span></h1>
    </header>

    <div class="goback"><a href="U_store.php">Go Back To Store</a></div>

    <div class="button-container">
      <a href="addnewitem.php">
        <button class="mybutton" id="button1">Manage Items</button>
    </a>

    <div class="button-container">
      <a href="edituseditems.php">
        <button class="mybutton" id="button2">Manage Used Items</button>
    </a>
    <div class="button-container">
      <a href="editfaq.php">
        <button class="mybutton" id="button2">Manage FAQ</button>
    </a>
      <a href="refundedit.php">
        <button class="mybutton" id="button4">Manage Refund</button>
    </a>
      <a href="edituserbyadmin.php">
        <button class="mybutton" id="button4">Manage Users</button>
    </a>
    </a>
      <a href="editpayment.php">
        <button class="mybutton" id="button4">Manage payment</button>
    </a>

    </div>
  </body>
</html>
