<!-- users faq page -->
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
            <link href="https://fonts.googleapis.com/css2?family=Kanit&family=Phudu:wght@300&family=Poppins&display=swap" rel="stylesheet">

        <!-- end Fonts-->

        <!--Style Sheet-->
            <link rel="stylesheet" href="Style/U_faq.css">
        <!-- End Style Sheet-->

        <!--
            <script type="text/javascript" src="Java/melstorejs.js"></script>
        -->

        <title>
            Molobea Store
        </title>
        <link rel="icon" href="Source/melobea logo.png">
    </head>

    <body class="faqbody">
        
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
        
        <!-----------FAQ page------------------>
        <div class="FAQ">FAQ</div>
        <p>"Explore our FAQs for quick and easy answers"</p>  
        <div> 
             <form action="faqdb.php" method="POST">
      
         <input type="text" name="qusFQ" placeholder="Enter Your Question!" class="faqbox" required>
         <input type="submit" value="Ask Question" class="faqsubmit">

         </form>

         <!-- showing faq -->
         <?php
            require 'database.php';

            // Query to retrieve faq questions and answers along with corresponding user emails
            $sql = "SELECT f.que, f.ans, u.Email, u.Fname
                    FROM faq f
                    JOIN user u ON u.userID = f.userID";

            $result = $mysqli->query($sql);

            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    $faqs = $row['que'];
                    $faqAns = $row['ans'];
                    $userEmail = $row['Email'];
                    $username = $row['Fname'];

                    echo '<div class="disbox3">';
                    echo '<div class="disbox1">' . $faqs . '</div>';
                    echo '<div class="disbox2">' . '✍️' . $faqAns . '</div>';
                    echo '<div class="disbox2">' . 'This Question From: ' . $userEmail . '</div>';
                    echo '</div>';
                }
            } else {
                echo "No Any FAQ's Found";
            }

            $mysqli->close(); // Close the database connection when done.
        ?>

<!-- display sample question -->
      
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
                                    <li><a href="U_privacy.php">Privacy Policy</a></li>
                                </ul>
                        </div>
                    </div>

            <!--get help-->
                    <div class="footpos2">
                        <div class="colomn">
                            <h4 class="fh4">Get Help</h4>
                            <ul>
                                <li><a href="#">FAQ</a></li>
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

       
    </body>
</html>