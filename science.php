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
        <div><a targrt="blanket" href="images/darkmatter.jpg"><img src="images/science1.jpg" alt="The Origin Of Species"></a></div>
        <div class="text1">Book Title:The Origin Of Species<br>Author:Charles Darwin<br>Price:₹149<br>Pages:500<br>Publisher:Fingerprint Publishing</div>
    </div>
    <div class="books">
        <div><a targrt="blanket" href="images/discoveryofindia.jpg"><img src="images/science2.jpg" alt="Sapiens:A Brief History Of Humankind"></a></div>
        <div class="text1">Book Title:Sapiens:A Brief History Of Humankind<br>Author:Yuval Noah Harari<br>Price:₹349<br>Pages:512<br>Publisher:Penguin Random House</div>
    </div>
    <div class="books">
        <div><a targrt="blanket" href="images/thetimemachine.jpg"><img src="images/science3.jpg" alt="A Brief History of Time:From Big Bang To Black Holes"></a></div>
        <div class="text1">Book Title:A Brief History of Time:From Big Bang To Black Holes<br>Author:Stepehen Hawking<br>Price:₹240<br>Pages:240<br>Publisher:Bantam</div>
    </div>
    <div class="books">
        <div><a target="blank" href="images/asylum.jpg"><img src="images/science4.jpg" alt="Cosmos"></a></div>
        <div class="text1">Book Title:Cosmos<br>Author:Carl Sagan<br>Price:₹2312<br>Pages:432<br>Publisher:Random House USA Inc</div>
    </div>
    </div>
    <div class="box">
    <div class="books">
        <div><a targrt="blanket" href="images/thetimemachine.jpg"><img src="images/science5.jpg" alt="The Second Kind Of Impossible"></a></div>
        <div class="text1">Book Title:The Second Kind Of Impossible<br>Author:Paul Steinhardt<br>Price:₹810<br>Pages:400<br>Publisher:Simon and Schuster</div>
    </div>
    <div class="books">
        <div><a targrt="blanket" href="images/discoveryofindia.jpg"><img src="images/science6.jpg" alt="The Order Of Time"></a></div>
        <div class="text1">Book Title:The Order Of Time<br>Author:Carlo rovelli<br>Price:₹311<br>Pages:224<br>Publisher:Penguin</div>
    </div>
    <div class="books">
        <div><a targrt="blanket" href="images/discoveryofindia.jpg"><img src="images/science7.jpg" alt="The Future Of Humanity"></a></div>
        <div class="text1">Book Title:The Future Of Humanity<br>Author:Michio Kaku<br>Price:₹408<br>Pages:368<br>Publisher:Penguin</div>
    </div>
    <div class="books">
        <div><a targrt="blanket" href="images/darkmatter.jpg"><img src="images/science8.jpg" alt="Spying On Whales"></a></div>
        <div class="text1">Book Title:Spying On Whales<br>Author:Nick Pyenson<br>Price:₹880<br>Pages:336<br>Publisher:William Collins</div>
    </div>
    </div>
</body>
</html>
