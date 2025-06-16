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
            <link rel="stylesheet" href="Style/paysuccess.css">
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

        <!--login & signin-->
        <!-- <div class="logpos">
            <button id="dec1">Sign Up</button>
            <button id="dec2">Log in</button>
        </div> -->


    <div class="cat" id="categoryListWrapper">
        <div class="category-container">
            <div>
                <ul id="categoryList">
                    <li><a href="" class="catdec1">Strings</a></li><br>
                    <li><a href="guitar.php" class="catdec">Guitar</a></li><br>
                    <li><a href="piano.php" class="catdec">Sitar</a></li><br>
                    <li><a href="payment.php" class="catdec">Piano</a></li><br>
                    <li><a href="payment.php" class="catdec">Piano</a></li><br>
                    <li><a href="payment.php" class="catdec">Piano</a></li><br>
                    <li><a href="payment.php" class="catdec">Piano</a></li><br>
                </ul>
            </div>
            <div>
                <ul id="categoryList">
                    <li><a href="payment.php" class="catdec">Guitar</a></li><br>
                    <li>Bass Drums</li><br>
                    <li>Piano</li><br>
                    <li>Piano</li><br>
                    <li>Piano</li><br>
                    <li>Piano</li><br>
                    <li>Piano</li><br>
                </ul>
            </div>
            <div>
                <ul id="categoryList">
                    <a href="payment.php"><li>Guitar</li></a><br>
                    <li>Bass Drums</li><br>
                    <li>Piano</li><br>
                    <li>Piano</li><br>
                    <li>Piano</li><br>
                    <li>Piano</li><br>
                    <li>Piano</li><br>
                </ul>
            </div>
            <div>
                <ul id="categoryList">
                    <a href="payment.php"><li>Guitar</li></a><br>
                    <li>Bass Drums</li><br>
                    <li>Piano</li><br>
                    <li>Piano</li><br>
                    <li>Piano</li><br>
                    <li>Piano</li><br>
                    <li>Piano</li><br>
                </ul>
            </div>
            <div>
                <ul id="categoryList">
                    <a href="payment.php"><li>Guitar</li></a><br>
                    <li>Bass Drums</li><br>
                    <li>Piano</li><br>
                    <li>Piano</li><br>
                    <li>Piano</li><br>
                    <li>Piano</li><br>
                    <li>Piano</li><br>
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
        

        <?php
                include('database.php');
                
                $id = $_SESSION["code"];

                $sql = "SELECT p.payID,p.shipment,u.Fname, u.Lname, n.bname as itemName, n.bprice as price
                    FROM payment p
                    JOIN newitem n ON p.bcode = n.bcode
                    JOIN user u ON p.userID = u.userID AND p.userID = {$id}";


                $result = $mysqli->query($sql);

                if ($result->num_rows > 0){
                    while ($row = $result->fetch_assoc()){
                        $payID = $row['payID'];
                        $userFname = $row['Fname'];
                        $itemName = $row['itemName'];
                        $price = $row['price'];
                        $last = $row['Lname'];
                        $ship=$row['shipment'];

                        echo '<div class="purchase-item">';
                        echo '<div class="purchase-details">';
                        echo "<div class='Payment'>Payment ID: $payID</div>";
                        echo "<div class='User'>" . $userFname . " " . $last . "</div>";
                        echo "<div class='Item'>Item Name: $itemName</div>";
                        echo "<div class='Price'>Price: $price</div>";
                        echo "<div class='ship'>Shipment: $ship</div>";
                        echo '</div>';
                        echo '</div>';
                    }
                }

        $mysqli->close();
    ?>

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
                                <li><a href="#">Orders</a></li>
                            </ul>
                        </div>
                    </div>
            
            <!--contact us-->        
                    <div class="footpos3">                   
                        <div class="colomn">
                            <h4 class="fh4">Contact Us</h4>
                            <ul>
                                <li><a href="U_store.php">www.melobea.com</a></li>
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
