<!-- Display cart items and total price -->
<html lang="en">
    <head>
        <link rel="stylesheet" href="Style/cart.css">
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
                <link rel="stylesheet" href="Style/cart.css">
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

        <img src="Source/melobea logo.png">

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
            <div class="add">
                <div class="image-container">
                    <div class="text-overlay">
                        <p class="typing1">Welcome                 
                            <?php
                        
                                if(isset($_SESSION["userID"])) {
                        
                                    echo $_SESSION["userID"];}?>,
                        </p>
                    
                        <p class="typing2">Explore Your Cart</p>
                    </div>
                </div>
                <div class="pick">
                    <img src="Source/background 2.png" alt="">
                </div>
            </div>

            <div>
                <div id="cart-items" class="color">

                </div>
                <div class="clr">Total Price: <div class="totalPriceSpan">$</div><span id="totalPrice"></span>
                    <a href="">
                        <button class="paynow">
                            Pay Now <i class="fas fa-arrow-right"></i>
                        </button>
                    </a>
                </div>
            </div>


            <!--footer-->
           
            <footer class="footer">
                    <div class="foot">
                        <div class="row">
                    <!--website--> 
                            <div class="footpos1">                 
                                <div class="colomn">
                                    <h4 class="fh4">Website</h4>
                                        <ul>
                                            <li><a href="#">About us</a></li>
                                            <li><a href="#">Our Service</a></li>
                                            <li><a href="#">Privacy Policy</a></li>
                                        </ul>
                                </div>
                            </div>
        
                    <!--get help-->
                            <div class="footpos2">
                                <div class="colomn">
                                    <h4 class="fh4">Get Help</h4>
                                    <ul>
                                        <li><a href="#">FAQ</a></li>
                                        <li><a href="#">Shipping</a></li>
                                        <li><a href="#">Returns</a></li>
                                        <li><a href="#">Orders</a></li>
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

