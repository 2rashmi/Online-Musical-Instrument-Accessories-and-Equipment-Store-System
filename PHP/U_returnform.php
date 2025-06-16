<html>
    <head>
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
        <!-- end Fonts-->

        <!--Style Sheet-->
            <link rel="stylesheet" href="Style/return.css">
        <!-- End Style Sheet-->
        <script type="text/javascript" src="js/myjscipt.js"></script>

        <title>
            Music Instrument Store
        </title>
    </head>

    <body>


        
    <a href="U_store.php"><img src="Source/melobea logo.png"></a>
        

        <div>
            <form>
                <input type="text" placeholder="Search..." class="search">
                <button class="search1"><img src="Source/search.png" alt="" class="seimg"></button>
            </form>
        </div> 
		
		        <div class="iconcart">
            <a href="cart.php" class="cartpos">
                <i class="fa fa-shopping-cart"></a></i>
                <div>Cart</div>
            </a>
        </div>

        <div class="iconheart">
            <a href="" class="heartpos">
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


            <h1>Retrun Item Form </h1>

            <div class="Returnform">
                <form action="returnFormdb.php" method="POST">
                
                    <label><b>Reason For Return</b></label><br>
                    <input type="text" name="return" required>
                    <pre></pre>

                    <label><b>Payment ID</b></label><br>
                    <input type="text" placeholder="If you can't Find Payment ID Go Orders tab" name="pcode" required>
                    <pre></pre>

                    <input type="submit" value="Request Return">

                </from>
            </div>

            <footer class="footer">
                <div class="foot">
                    <div class="row">
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
    
                        <div class="footpos2">
                            <div class="colomn">
                                <h4 class="fh4">Get Help</h4>
                                <ul>
                                    <li><a href="U_faq.php">FAQ</a></li>
                                    <li><a href="">Shipping</a></li>
                                    <li><a href="#">Returns</a></li>
                                    <li><a href="paymentsuccess.php">Orders</a></li>
                                </ul>
                            </div>
                        </div>
                        
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
        </body>