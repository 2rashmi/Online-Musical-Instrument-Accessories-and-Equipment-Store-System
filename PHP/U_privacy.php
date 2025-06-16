
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

        <!-- end Fonts-->

        <!--Style Sheet-->
            <link rel="stylesheet" href="Style/U_privacy.css">
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
            <a href="cart.php" class="cartpos">
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

        <!-- log in -->
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

                <!--Privacy policy-->
                <div class="ser1">
                    <div class="ser">
        
                    <div  class="h2ser"><h1>Privacy policy</h1></div>
        
                    <div class="prc1">
                        Information We Collect: 
                    </div>
                        <div class="prc">
                            We collect personal information such as name, email address, shipping address, and payment information when you make a purchase or register an account on Melobea.
        
                            <br><br>When users create listings to sell second-hand items, we may collect additional information, including product descriptions and images.
                            
                           <br><br>We may also collect data automatically, including IP addresses, browser type, device information, and usage patterns when you interact with our website. 
                        </div>
                        <div class="prc1">
                            How We Use Your Information:            
                        </div>
                        <div class="prc">
                            We use your personal information to process transactions, provide customer support, and communicate with you about your orders and account activity.
        
                            <br><br>
                            Seller information, including listings and ratings, may be displayed on our website to facilitate transactions and build trust among users.
        
                            
                           <br><br>
                           We may use the information collected automatically for website optimization, analytics, and security purposes.
        
                        </div>
                        <div class="prc1">
                        Third-Party Services: 
                    </div>
                        <div class="prc">
                        We may use third-party payment processors to handle debit and credit card transactions. Your payment information is securely processed by these providers, and we do not store your payment card details.
        
        
                            <br><br>
                            We may use third-party analytics and advertising services to improve our website's functionality and user experience.
        
                            
                        </div>
                        <div class="prc1">
                        Data Security: 
                    </div>
                        <div class="prc">
                        We implement security measures to protect your personal information from unauthorized access, disclosure, or alteration. However, no method of transmission over the internet or electronic storage is completely secure, and we cannot guarantee absolute security.
        
                        </div>
                        <div class="prc1">
                        User Rights:
                    </div>
                        <div class="prc">
                        You have the right to access, modify, or delete your personal information stored on our website. You can do this by logging into your account or contacting our customer support.
         
                        </div>
                        <div class="prc1">
                        Data Retention:
                    </div>
                        <div class="prc">
                        We retain your personal information for as long as necessary to fulfill the purposes for which it was collected, or as required by applicable laws.
        
                        </div>
                        <div class="prc1">
                        Cookies and Tracking:
                    </div>
                        <div class="prc">
                        We use cookies and similar technologies to enhance your browsing experience. You can manage cookie preferences through your browser settings.
        
                        </div>
                        <div class="prc1">
                        Changes to Privacy Policy:
                    </div>
                        <div class="prc">
                        We may update our privacy policy to reflect changes in our practices or to comply with legal requirements. Users will be notified of any material changes.
         
                        </div>
                        <div class="prc1">
                        Contact Us:
                    </div>
                        <div class="prc">
                        If you have questions or concerns about your privacy or our privacy practices, please contact us at [contact email/physical address]. 
                    </div>    
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
                                    <li><a href="U_aboutus.php">About us</a></li>
                                    <li><a href="U_service.php">Our Service</a></li>
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
                                <li><a href="store.php">www.melobea.com</a></li>
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
                            <input type="text" id="email" required name="Email" pattern="[a-z0-9._%+\-]+@[a-z0-9.\-]+\.[a-z]{2,}$">
                        </div>
                        <div class="form-Element">
                            <label>Address</label>
                            <textarea rows="5" cols="65" required name="Address"></textarea>
                        </div>
                        <div class="form-Element">
                            <label>Enter your Mobile No</label>
			                <input type="text" required name="ContatctNo" pattern="[0-9]{10}">
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

        <script src="Js/store1.js"></script>
    </body>
</html>
