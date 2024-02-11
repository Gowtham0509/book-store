<!DOCTYPE html>
<html>
<head>
    <title>GTM BOOK STORE</title>
    <link rel="stylesheet" href="bookstyles.css">
    <link rel = "icon" href = "logoicon.jpg" type = "image/x-icon">
</head>
<body>
    <?php
    session_start();
    
    ?>
    <div class="title">
    <div class="logo">
    <img src="logo.png" width="100" height="80">
    </div>
    <div class="header">
        <h1>GTM BOOK STORE</h1>
    </div>
    <div class="logout">
        <button type="button" class="button" name="logout" ><a href="logout.php">Logout</a></button>
    </div>

    </div>

    <ul>
            <li><a href="bookstore.php">All Books</a></li>
            <li><a href="biography.php">Biography</a></li>
            <li><a href="children.php">Children</a></li>
            <li><a href="historical.php">Historical</a></li>
            <li><a href="horror.php">Horror</a></li>
            <li><a href="science.php">Science</a></li>
            <li><a href="sciencefiction.php">Science-Fiction</a></li>
            <li><a href="#"><img src="cart.png" alt="Cart" width="25" height="20" ></a></li>
        </ul>

    <div class="box">
    <div class="books">
        <div><a targrt="blanket" href="images/allthelight.jpg"><img src="images/thriller1.jpg" alt="One Arranged Murder"></a></div>
        <div class="text1">Book Title:One Arranged Murder<br>Author:Chetan Bhagat<br>Price:₹135<br>Pages:312<br>Publisher:Westland</div>
    </div>
    <div class="books">
        <div><a targrt="blanket" href="images/thetimemachine.jpg"><img src="images/thriller2.jpg" alt="Dark Matter"></a></div>
        <div class="text1">Book Title:Dark Matter<br>Author:Blake Crouch<br>Price:₹292<br>Pages:416<br>Publisher:PAN</div>
    </div>
    <div class="books">
        <div><a targrt="blanket" href="images/thetimemachine.jpg"><img src="images/thriller3.jpg" alt="The Silent Patient"></a></div>
        <div class="text1">Book Title:The Silent Patient<br>Author:Alex Michaelides<br>Price:₹280<br>Pages:352<br>Publisher:Orion</div>
    </div>
    <div class="books">
        <div><a targrt="blanket" href="images/allthelight.jpg"><img src="images/thriller4.jpg" alt="Murder On The Orient Express"></a></div>
        <div class="text1">Book Title:Murder On The Orient Express<br>Author:Agatha Christie<br>Price:₹164<br>Pages:288<br>Publisher:HarperCollins</div>
    </div>
    </div>
    <div class="box">
    <div class="books">
        <div><a target="blank" href="images/asylum.jpg"><img src="images/thriller5.jpg" alt="The Complete Novels Of Sherlock Holmes"></a></div>
        <div class="text1">Book Title:The Complete Novels Of Sherlock Holmes<br>Author:Arthur Connon Doyle<br>Price:₹136<br>Pages:536<br>Publisher:Fingerprint Publishing</div>
    </div>
    <div class="books">
        <div><a targrt="blanket" href="images/thetimemachine.jpg"><img src="images/thriller6.jpg" alt="Edge Of The Grave"></a></div>
        <div class="text1">Book Title:Edge Of The Grave<br>Author:Robbie Morrison<br>Price:₹1485<br>Pages:365<br>Publisher:Macmillan</div>
    </div>
    <div class="books">
        <div><a targrt="blanket" href="images/darkmatter.jpg"><img src="images/thriller7.jpg" alt="The Guest List"></a></div>
        <div class="text1">Book Title:The Guest List<br>Author:Lucy Foley<br>Price:₹254<br>Pages:384<br>Publisher:HarperCollins</div>
    </div>
    <div class="books">
        <div><a targrt="blanket" href="images/thetimemachine.jpg"><img src="images/thriller8.jpg" alt="Death On The Nile"></a></div>
        <div class="text1">Book Title:Death On The Nile<br>Author:Agatha Christie<br>Price:₹646<br>Pages:373<br>Publisher:Harper Collins</div>
    </div>
</div>

</body>
</html>
