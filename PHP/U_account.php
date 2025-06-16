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
                <link rel="stylesheet" href="Style/U_account.css">
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
                <a href="" class="heartpos">
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
            <div class="udetail">
                <div class="fname">
                    <?php
                        if (isset($_SESSION["userID"])) {
                            echo "Your First Name - " . $_SESSION["userID"] . "<br>";
                        }
                    ?>
                </div><br><br>
                <div class="fname">
                    <?php
                        if (isset($_SESSION["userID"])) {
                            echo "Your Last Name - " . $_SESSION["name"]."<br>";
                        }
                    ?>
                </div><br><br>
                <div class="fname">
                    <?php
                        if (isset($_SESSION["userID"])) {
                            echo "Your Address - " . $_SESSION["adr"]."<br>";
                        }
                    ?>
                </div><br><br>
                <div class="fname">
                    <?php
                        if (isset($_SESSION["userID"])) {
                            echo "Your Email address - " . $_SESSION["mail"]."<br>";
                        }
                    ?>
                </div>
            </div>
            
            <?php

                echo '<a href="editprofile.php?name=' . $_SESSION["userID"]. '&lname=' . $_SESSION["name"] . '&address=' . $_SESSION["adr"] . '&email=' . $_SESSION["mail"] . '&code=' . $_SESSION["code"] . '"><button class="editpro">Edit Profile</button></a>';
                
                
            ?>

            <a href="logout.php"><button class="logout">Log Out</button></a>

            <a href="U_deactivate.php?usercode=<?php echo $_SESSION["code"]; ?>"><button class="deactivate">Deactivate Account</button></a>



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
                                        <li><a href="">Orders</a></li>
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



        <script src="Js/cart.js"></script>
    </body>
</html>    

