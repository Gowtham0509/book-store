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
        <div><a targrt="blanket" href="images/discoveryofindia.jpg"><img src="images/historical1.jpg" alt="The Discovery Of India"></a></div>
        <div class="text1">Book Title:The Discovery Of India<br>Author:Jawaharlal Nehru<br>Price:₹405<br>Pages:656<br>Publisher:Penguin India</div>
    </div>
    <div class="books">
        <div><a targrt="blanket" href="images/darkmatter.jpg"><img src="images/historical2.jpg" alt="All the Light We cannot see"></a></div>
        <div class="text1">Book Title:All the Light We cannot see<br>Author:Anthony Doerr<br>Price:₹305<br>Pages:544<br>Publisher:Fourth Estate</div>
    </div>
    <div class="books">
        <div><a targrt="blanket" href="images/darkmatter.jpg"><img src="images/historical3.jpg" alt="War and Peace"></a></div>
        <div class="text1">Book Title:War and Peace<br>Author:Leo Tolstoy<br>Price:₹284<br>Pages:1232<br>Publisher:Fingerprint Publishing</div>
    </div>
    <div class="books">
        <div><a targrt="blanket" href="images/thetimemachine.jpg"><img src="images/historical4.jpg" alt="The Silk Roads:A New History Of The World"></a></div>
        <div class="text1">Book Title:The Silk Roads:A New History Of The World<br>Author:Peter Frankopan<br>Price:₹454<br>Pages:656<br>Publisher:Bloomsbury Paperbacks</div>
    </div>
    </div>
    <div class="box">
    <div class="books">
        <div><a targrt="blanket" href="images/thetimemachine.jpg"><img src="images/historical5.jpg" alt="The Empire Of Gold"></a></div>
        <div class="text1">Book Title:The Empire Of Gold<br>Author:S A Chakraborty<br>Price:₹1963<br>Pages:782<br>Publisher:Harper Voyager</div>
    </div>
    <div class="books">
        <div><a targrt="blanket" href="images/allthelight.jpg"><img src="images/historical6.jpg" alt="The Last Assassin"></a></div>
        <div class="text1">Book Title:The Last Assassin<br>Author:Peter Stothard<br>Price:₹1825<br>Pages:288<br>Publisher:W&N</div>
    </div>
    <div class="books">
        <div><a targrt="blanket" href="images/thetimemachine.jpg"><img src="images/historical7.jpg" alt="Children Of Ash and Elm:A History Of Vikings"></a></div>
        <div class="text1">Book Title:Children Of Ash and Elm:A History Of Vikings<br>Author:Neil Price<br>Price:₹2287<br>Pages:624<br>Publisher:Basic Books</div>
    </div>
    <div class="books">
        <div><a targrt="blanket" href="images/allthelight.jpg"><img src="images/historical8.jpeg" alt="A Short History Of The Veitnam War"></a></div>
        <div class="text1">Book Title:A Short History Of The Veitnam War<br>Author:DK<br>Price:₹943<br>Pages:560<br>Publisher:DK</div>
    </div>
    </div>
</body>
</html>