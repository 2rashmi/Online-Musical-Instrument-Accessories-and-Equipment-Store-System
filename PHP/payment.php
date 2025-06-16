<html lang="en">
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
            <!--Google font 4-->
            <link rel="preconnect" href="https://fonts.googleapis.com">
            <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
            <link href="https://fonts.googleapis.com/css2?family=Roboto+Mono:ital,wght@0,100;1,400&family=Young+Serif&display=swap" rel="stylesheet">
            <!--Google font 5-->
            <link rel="preconnect" href="https://fonts.googleapis.com">
            <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
            <link href="https://fonts.googleapis.com/css2?family=Kanit&family=Phudu:wght@300&family=Poppins&display=swap" rel="stylesheet">
            <!--Google font 6-->
            <link rel="preconnect" href="https://fonts.googleapis.com">
            <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
            <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Exo+2&family=Kanit&family=Phudu:wght@300&family=Poppins&display=swap" rel="stylesheet">
            
        <!-- end Fonts-->

        <!--Style Sheet-->
            <link rel="stylesheet" href="Style/payment.css">
        <!-- End Style Sheet-->

        <!--
            <script type="text/javascript" src="Java/melstorejs.js"></script>
        -->

        <title>
            Molobea Store
        </title>
        <link rel="icon" href="Source/melobea logo.png">
    </head>

    <body>
    <a href="store.php"><img src="Source/melobea logo.png"></a>

        <!--search bar-->
        <div>
            <form action="search.php" method="GET">

                <input type="text" placeholder="Search..." class="search" name="searching">
                <button type="submit" class="search1"><img src="Source/search.png" alt="" class="seimg"></button>

            </form>
        </div> 

        <!--cart-->
        <div class="iconcart">
            <a href="" class="cartpos" id="carting">
                <i class="fa fa-shopping-cart"></a></i>
                <div>Cart</div>
            </a>
        </div>

        <!--favourite-->
        <div class="iconheart">
            <a href="" class="heartpos" id ="favlink">
                <i class="fa fa-heart"></a></i>
                <div>Favourite</div>
            </a>
        </div>

        <!--login & signin-->
        <div class="logpos">
            <button id="dec1">Sign Up</button>
            <button id="dec2">Log in</button>
        </div>

        <h1> Payment Gateway</h1>

        <?php
            // payment.php

            // Get item details from the URL parameters
            $bname = $_GET['bname'];
            $bbrand = $_GET['bbrand'];
            $bcondition = $_GET['bcondition'];
            $bprice = $_GET['bprice'];
            $bcountry = $_GET['bcountry'];
            $bimage = $_GET['bimage'];
            $bdep = $_GET['bdep'];

            // Now, you can use these variables in your payment.php file

            echo "<div class=\"imgcon\"><img src='" . $bimage . "' class='imgc'></div><br>";
            echo "<div class=\"items1\">". $bbrand ." - ".$bname. "</div><br>";
            echo "<div class=\"items2\">".$bdep."</div><br>";
            echo "<div class=\"items3\">US $: " . $bprice . "</div><br>";
            
        ?>

        <div class="paymentform">
            <form action="" method="Post" class="visaform">

                <label class="visaform1"><b>Card Number</b></label><br>
                <input type="number" name="cnum" pattern="^[0-9]{16}$" placeholder="0000-0000-0000-0000" required>
                <pre></pre>

                <label class="visaform"><b>Card Type</b></label><br>
                <input type="text" name="ctype">
                <pre></pre>

                <label class="visaform"><b>Expire date</b></label><br>
                <input type="date" name="exdate">
                <pre></pre>

                <label class="visaform"><b>First name</b></label><br>
                <input type="text" name="fname">
                <pre></pre>

                <label class="visaform"><b>Last name</b></label><br>
                <input type="text" name="lname">
                <pre></pre>

                <label class="visaform"><b>Security code</b></label><br>
                <input type="text" name="secode">
                <pre></pre>


                <input type="submit" value="Confirm & Buy" id="buy"><br>
            </form>
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
                                    <li><a href="aboutus.html">About us</a></li>
                                    <li><a href="service.html">Our Service</a></li>
                                    <li><a href="privacy.html">Privacy Policy</a></li>
                                </ul>
                        </div>
                    </div>

            <!--get help-->
                    <div class="footpos2">
                        <div class="colomn">
                            <h4 class="fh4">Get Help</h4>
                            <ul>
                                <li><a href="faq.php">FAQ</a></li>
                                <li><a href="">Shipping</a></li>
                                <li><a href="" id="return">Returns</a></li>
                                <li><a href="" id="orders">Orders</a></li>
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

        <!--Login Popup-->
        <form action="login.php" method="POST">
        <div class="overlay">
            <div class="popup">
                <div class="close-btn">&times;</div>
                
                <div class="form">
                    <h2>Log In</h2>
                    <div class="form-Element">
                        <label for="email">Email</label>
                        <input type="email" id="email" placeholder="Enter Email" name="email">
                    </div>
                    <div class="form-Element">
                        <label for="Password">Password</label>
                        <input type="password" id="password" placeholder="Enter Password" name="password">
                    </div>
                    <div class="form-Element">
                       <input type="checkbox" id="Remember">
                       <label for="Remember">Remember Me</label>
                    </div>
                    <div class="form-Element">
                        <input type="submit" value="Log in">
                    </div>
                    <div class="form-Element">
                        <a href="#">Forgot Password</a>
                    </div>                                                                     
                </div>
            </div>
        
        </div>
    </form>
        <!--Sign Up-->
        <form action="signup.php" method="POST" onsubmit="return checkpassword()">
            <div class="overlay1">
                <div class="popup1">
                    <div class="close-btn">&times;</div>

                    <div class="form">
                        <h2>Sign In</h2>
                        <div class="form-Element1">
                            <div>
                                <label>Enter Your First Name</label><br>
			                    <input type="text" required  class="Fname" name="Fname">
                            </div>
                            <div>
                                <label>Enter Your Last Name</label><br>
                                <input type="text" required  class="Lname" name="Lname">
                            </div>
                        </div>
                        <div class="form-Element">
                            <label>E-mail Address</label>
                            <input type="text" id="email" required name="Email">
                            <span id="email-error" class="error"></span>
                        </div>
                        <div class="form-Element">
                            <label>Address</label>
                            <textarea rows="5" cols="65" required name="Address"></textarea>
                        </div>
                        <div class="form-Element">
                            <label>Enter your Mobile No</label>
			                <input type="text" required name="ContatctNo">
                            <span id="mobile-error" class="error"></span>
                        </div>
                        <div class="form-Element">
                            <label>Enter your Country</label>
			                <input type="text" required name="Country">
                        </div>                        
                        <div class="form-Element">
                            <label>Enter New Password</label>
			                <input type="password" id="pwd" required name="Password">
                        </div>
                        <div class="form-Element">
                            <label>Re enter your Password</label>
			                <input type="password" id="repwd" required name="Repassword">
                            <span id="password-error" class="error"></span>
                        </div>

                        <input type="checkbox" name="check" id="check" onclick="enablebtn()" required>
                        <label class="check">By continuing, you agree to MELOBEA's Terms of service, privacy policy.</label>
                        <br><br>
                        <input type = "Submit" value="Sign In" id="submit" disabled>                                                                    
                    </div>
                </div>
            </div>
        </form>

        <div id="password-message"></div>
<br><br><br>
        <script src="Js/payment.js"></script>
    </body>
</html>
