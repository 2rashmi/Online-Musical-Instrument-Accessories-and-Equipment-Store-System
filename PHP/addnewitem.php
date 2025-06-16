<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
        <title>Add New Item</title>
        <meta charset="UTF.8" />
        <link
            rel="stylesheet" href="Style/A_addnew.css">
    </head>

  <body>

    <img src="Source/melobea logo.png">

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


        <h1>Add Items to Store</h1>             
        <div class="additem">
            <form action="newitem.php" method="POST" enctype="multipart/form-data">
            <td>Item Category</td>
            <br>
            <select name="bcat" class="items">
                <option value="Guitar">Guitar</option>
                <option value="Voilin">Violin</option>
                <option value="Sitar">Sitar</option>
                <option value="Mandolin">Mandolin</option>
                <option value="Full Drum Set">Full Drum Set</option>
                <option value="Bass Drum">Bass Drum</option>
                <option value="Cymbals">Cymbals</option>
                <option value="Electronic Drum">Electrronic Drum</option>
                <option value="Flute">Flute</option>
                <option value="Saxophone">Saxophone</option>
                <option value="Trumpet">Trumpet</option>
                <option value="Organ">Organ</option>
                <option value="Melodika">Melodika</option>
                <option value="Piano">Piano</option>
                <option value="Speakers">Speakers</option>
                <option value="Microphone">Microphone</option>
                <option value="Mini DJ">Mini DJ</option>
                <option value="Bow">Bow</option>
                <option value="Drumstick">Drumstick</option>
                <option value="Stands">Stands</option>
                <option value="Picks">Picks</option>
                <option value="Tuners">Tuners</option>
                <option value="Strings">Strings</option>
                
            </select>
            <br><br>

                <td>Item name</td>
                <br>
                <input type="text" name="bname" class="items"><br><br> 

                <td>Item brand</td>
                <br>
                <input type="text" name="bbrand" class="items" ><br><br>

                <td>Item country</td>
                <br>
                <input type="text" name="bcountry" class="items"><br><br>

                <td>Item price</td>
                <br>
                <input type="txt" name="bprice" class="items"><br><br>

                <td>Item condition</td>
                <br>
                <input type="text" name="bcondition" class="items"><br><br>

                <td>Item description</td>
                <br>
                <textarea name="bdep" cols="66" rows="5"></textarea><br><br>

                <td>Item Image</td>
                <br>
                <input type="text" name="bimage" class="items">
                <input type="submit" class="submit" id="submit">
            </form>
        </div>

        <a href="editnewitem.php"><button class="update">Update</button></a>
  </body>
</html>
