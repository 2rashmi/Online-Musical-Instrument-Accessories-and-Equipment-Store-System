<?php

    require"database.php";

    $name=$_GET["name"];
    $lname=$_GET["lname"];
    $address=$_GET["address"];
    $email=$_GET["email"];
    $code=$_GET["code"]

?>

<!-- Display cart items and total price -->
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

                <!--Fonts-->
                <!--Icon font-->
                <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
                    
                <!--google fonts 1-->
                    <link rel="preconnect" href="https://fonts.googleapis.com">      
                    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
                    <link href="https://fonts.googleapis.com/css2?family=Roboto+Mono:ital,wght@0,100;1,400&display=swap" rel="stylesheet">
                <!--google fonts 2-->
                    <link rel="preconnect" href="https://fonts.googleapis.com">
                    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
                    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
                <!--google fonts 3-->
                <link rel="preconnect" href="https://fonts.googleapis.com">
                <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
                <link href="https://fonts.googleapis.com/css2?family=Phudu:wght@300&family=Poppins&display=swap" rel="stylesheet">
                <!--Google font 4-->

            <!-- end Fonts-->

            <!--Style Sheet-->
                <link rel="stylesheet" href="Style/editprofile.css">
            <!-- End Style Sheet-->

            <!--
                <script type="text/javascript" src="Java/melstorejs.js"></script>
            -->

            <title>
                My Cart
            </title>
            <link rel="icon" href="Source/melobea logo.png">
    </head>
    <body>

    <a href="U_store.php"><img src="Source/melobea logo.png"></a>

            <!--search bar-->
            <div>
                <form>
                    <input type="text" placeholder="Search..." class="search">
                    <button class="search1"><img src="Source/search.png" alt="" class="seimg"></button>
                </form>
            </div>

            <!--cart-->
            <div class="iconcart">
                <a href="#" class="cartpos">
                    <i class="fa fa-shopping-cart"></a></i>
                    <div>Cart</div>
                </a>
            </div>

            <!--favourite-->
            <div class="iconheart">
                <a href="store2.html" class="heartpos">
                    <i class="fa fa-heart"></a></i>
                    <div>Favourite</div>
                </a>
            </div>
            <!--login & signin-->
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

            <form action="editprodb.php" method="POST">

                <div class="form-group">
                    <label for="code">Customer Code</label>
                    <input type="text" value="<?php echo $code ?>" class="form-control" name="uid" readonly>
                </div>

                <div class="form-group">
                    <label for="Fname">Edit Your First Name:</label>
                    <input type="text" value="<?php echo $name ?>" id="First" class="form-control" name="first" required>
                </div>

                <div class="form-group">
                    <label for="Lname">Edit Your Last Name:</label>
                    <input type="text" value="<?php echo $lname ?>" id="Last" class="form-control" name="last" required>
                </div>

                <div class="form-group">
                    <label for="Address">Edit Your Address:</label>
                    <input type="text" value="<?php echo $address ?>" id="Ads" class="form-control" name="ads" required>
                </div>

                <div class="form-group">
                    <label for="Email">Edit Your Email:</label>
                    <input type="text" value="<?php echo $email ?>" id="Email" class="form-control" name="mail" required>
                </div>

                <div class="form-group">
                    <label for="Password">Enter New Password</label>
                    <input type="password" id="Password" class="form-control" name="ps" required>
                </div>

                <div class="form-group">
                    <label for="Repassword">Re-Type Password</label>
                    <input type="password" id="Repassword" class="form-control" name="reps" required>
                </div>

                <input type="submit" value="Update Profile" class="submit-btn">
            </form>



            <!--footer-->
           
            <footer class="footer">
                    <div class="foot">
                        <div class="row">
                    <!--website--> 
                            <div class="footpos1">                 
                                <div class="colomn">
                                    <h4 class="fh4">Website</h4>
                                        <ul>
                                            <li><a href="U_aboutus.php">About us</a></li>
                                            <li><a href="U_service.php">Our Service</a></li>
                                            <li><a href="U_privacy.php">Privacy Policy</a></li>
                                        </ul>
                                </div>
                            </div>
        
                    <!--get help-->
                            <div class="footpos2">
                                <div class="colomn">
                                    <h4 class="fh4">Get Help</h4>
                                    <ul>
                                        <li><a href="U_faq.php">FAQ</a></li>
                                        <li><a href="">Shipping</a></li>
                                        <li><a href="U_returnform.php">Returns</a></li>
                                        <li><a href="paymentsuccess.php">Orders</a></li>
                                    </ul>
                                </div>
                            </div>
                    
                    <!--contact us-->        
                            <div class="footpos3">                   
                                <div class="colomn">
                                    <h4 class="fh4">Contact Us</h4>
                                    <ul>
                                        <li><a href="#">www.melobea.com</a></li>
                                        <li><a href="#">+94 7122220</a></li>
                                        <li><a href="#">081 3258562</a></li>
                                    </ul>
                                </div>
                            </div>
        
                    <!--social media-->        
                            <div class="colomn">
                                <h4 class="fh41">Social Media</h4>
                                <div class="social">
                                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                                    <a href="#"><i class="fab fa-twitter"></i></a>
                                    <a href="#"><i class="fab fa-instagram"></i></a>
                                    <a href="#"><i class="fab fa-linkedin"></i></a>
                                    <a href="#"><i class="fab fa-arrow-down"></i></a>
        
                                
                                </div>
                            </div>
        
                        </div>
        
                    </div>
        
            </footer> 



        <script src="Js/editpro.js"></script>
    </body>
</html>    


