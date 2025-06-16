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
            <link rel="stylesheet" href="Style/seller.css">
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
            <form>
                <input type="text" placeholder="Search..." class="search">
                <button class="search1"><img src="Source/search.png" alt="" class="seimg"></button>
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
            <a href="" class="heartpos" id="favlink">
                <i class="fa fa-heart"></a></i>
                <div>Favourite</div>
            </a>
        </div>

        <!--login & signin-->
        <div class="logpos">
            <button id="dec1">Sign Up</button>
            <button id="dec2">Log in</button>
        </div>

        <!--Navigation bar-->
        <div class="navi">
        <ul>
            <li><a href="store.php">Brand New Items</a></li>
            <li><a href="Useditems.php">Used Items</a></li>
            <li><a href="#Offers page" id="categoryToggle">Categories</a></li>
            <li><a href="#">Looking For Selling</a></li>
            <li><a href="help.php">Help</a></li>
        </ul>
    </div>

    <div class="cat" id="categoryListWrapper">
        <div class="category-container">
            <div>
                <ul id="categoryList">
                    <li><a href="" class="catdec1">Strings</a></li><br>
                    <li><a href="guitar.php" class="catdec">Guitar</a></li><br>  
                    <li><a href="violin.php" class="catdec">Violin</a></li><br>  
                    <li><a href="sitar.php" class="catdec">Sitar</a></li><br>
                    <li><a href="mandoline.php" class="catdec">Mandoline</a></li><br>

                </ul>
            </div>
            <div>
                <ul id="categoryList">
                    <li><a href="" class="catdec1">Drums</a></li><br>
                    <li><a href="fulldrumset.php" class="catdec">Full Drum Set</a></li><br>
                    <li><a href="cymbal.php" class="catdec">Cymbals</a></li><br>         
               </ul>
            </div>
            <div>
                <ul id="categoryList">
                <li><a href="" class="catdec1">WoodWind</a></li><br>
                <li><a href="flute.php" class="catdec">Flute</a></li><br>  
                <li><a href="trumpet.php" class="catdec">Trumpet</a></li><br>  
                </ul>
            </div>
            <div>
                <ul id="categoryList">
                <li><a href="" class="catdec1">KeyBoard</a></li><br>
                <li><a href="orgon.php" class="catdec">Orgon</a></li><br>  
                <li><a href="melodica.php" class="catdec">Melodica</a></li><br> 
                </ul>
            </div>
            <div>
                <ul id="categoryList">
                <li><a href="" class="catdec1">Electronic</a></li><br>
                <li><a href="microphone.php" class="catdec">Microphone</a></li><br>  
                <li><a href="minidj.php" class="catdec">Mini DJ</a></li><br> 
                </ul>
            </div>
            <div>
                <ul id="categoryList">
                <li><a href="" class="catdec1">Accessories</a></li><br>
                <li><a href="pick.php" class="catdec">Pick</a></li><br>  
                <li><a href="stand.php" class="catdec">Stands</a></li><br> 
                </ul>
            </div>
        </div>
        
    </div>

        <!--ad poster-->
        <div class="add">
            <div class="image-container">
                <div class="text-overlay">
                    <p class="typing1">Explore Our Melobea Items to Make your own Beat</p>
                    <p class="typing2">Discover Your Ideal Equipment</p>
                </div>
            </div>
            <div class="pick">
                <img src="Source/background 2.png" alt="">
            </div>
        </div>
		<div class="sellform">
            <form method="post">
                <label class="label"> <b>Brand</b> </label><br>
                <input type="text" id="brand" name="brand">
                <pre></pre>
                
                <label class="label"> <b>Item Type</b> </label><br>
                <input type="text" id="brand" name="brand">
                <pre></pre>
                
                <label class="label"><b> Description</b></label><br>
                <input type="text" id="brand" name="brand">
                <pre></pre>
                
                <label class="label"><b>Price</b></label><br>
                <input type="text" id="brand" name="brand">		
                <pre></pre>
                
                <label class="label"><b>Item By Date:</b> </label><br>
                <input type="date" id="brand" name="brand">
                <pre></pre>
    
                <label class="label"><b>Country: </b></label><br>
                <input type="text" name="mobile" id="brand" name="brand"><br>
                <pre></pre>
                
                <label class="label"><b>Address:</b> </label><br>
                <textarea name="address" id="brand" name="brand" rows="5" cols="20"></textarea>
                <pre></pre>
                
                <label class="label"><b>Location: </b></label><br>
                <input type="text" id="brand" name="brand">
                <pre></pre>
                
                <label class="label"><b>Contact No:<b></label><br>
                <input type="tel" id="brand" name="brand" placeholder="1234567890" pattern="[0-9]{10}" required>
                <pre></pre>
                
                <label class="label"><b>E-mail:</b> </label><br>
                <input type="email" name="email" id="brand" pattern="[a-z0-9._%+\-]+@[a-z0-9.\-]+\.[a-z]{2,}$" placeholder="@gmail">
                <pre></pre>
                
                <label class="label"><b>Purches(optional)deatils: </b></label> <br>
                <input type="text" id="brand" name="brand">
                <pre></pre>
                
                <label class="label"><b>Condition: </b></label><br>
                <input type="text" id="brand" name="brand">
                <pre></pre>
                
                <label for="image"><b class="b">Choose an image:</b></label><br>
                <div id="inputimage">
                    <input type="file" name="image" accept="image/*">
                </div>
                
                <input type="submit" value="Submit">
                
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
        <div class="overlay">
            <div class="popup">
                <div class="close-btn">&times;</div>
                <div class="form">
                    <h2>Log In</h2>
                    <div class="form-Element">
                        <label for="email">Username</label>
                        <input type="text" id="email" placeholder="Enter Username">
                    </div>
                    <div class="form-Element">
                        <label for="Password">Password</label>
                        <input type="password" id="password" placeholder="Enter Password">
                    </div>
                    <div class="form-Element">
                       <input type="checkbox" id="Remember">
                       <label for="Remember">Remember Me</label>
                    </div>
                    <div class="form-Element">
                        <button>Log In</button>
                    </div>
                    <div class="form-Element">
                        <a href="#">Forgot Password</a>
                    </div>                                                                     
                </div>
            </div>
        </div>
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

        <script src="Js/store.js"></script>
    </body>
</html>
