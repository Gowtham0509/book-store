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
        <div><a targrt="blanket" href="images/children3.jpg"><img src="images/sci-fi2.jpg" alt="Fahrenheit 451"></a></div>
        <div class="text1">Book Title:Fahrenheit 451<br>Author:Ray Bradbury<br>Price:₹282<br>Pages:192<br>Publisher:Harper voyager</div>
    </div>
    <div class="books">
        <div><a targrt="blanket" href="images/children3.jpg"><img src="images/sci-fi1.jpg" alt="The Time Machine"></a></div>
        <div class="text1">Book Title:The Time Machine<br>Author:H.G.Wells<br>Price:₹89<br>Pages:144<br>Publisher:Fingerprint Publishers</div>
    </div>
    <div class="books">
        <div><a targrt="blanket" href="images/allthelight.jpg"><img src="images/sci-fi3.jpg" alt="Red Mars"></a></div>
        <div class="text1">Book Title:Red Mars(Trilogy)<br>Author:Kim Stanley Robinson<br>Price:₹799<br>Pages:592<br>Publisher:Spectra</div>
    </div>
    <div class="books">
        <div><a targrt="blanket" href="images/discoveryofindia.jpg"><img src="images/sci-fi4.jpg" alt="The Last Policeman"></a></div>
        <div class="text1">Book Title:The Last Policeman<br>Author:Ben H Winters<br>Price:₹870<br>Pages:336<br>Publisher:Quirk Books</div>
    </div>
    </div>
    <div class="box">
    <div class="books">
        <div><a targrt="blanket" href="images/darkmatter.jpg"><img src="images/sci-fi5.jpg" alt="1984"></a></div>
        <div class="text1">Book Title:1984<br>Author:George Orwell<br>Price:₹399<br>Pages:360<br>Publisher:Fingerprint Publishing</div>
    </div>
    <div class="books">
        <div><a targrt="blanket" href="images/children3.jpg"><img src="images/sci-fi6.jpg" alt="Foundation"></a></div>
        <div class="text1">Book Title:Foundation<br>Author:Isaac Asimov<br>Price:₹254<br>Pages:240<br>Publisher:Harper Voyager</div>
    </div>
    <div class="books">
        <div><a target="blank" href="images/asylum.jpg"><img src="images/sci-fi7.jpg" alt="Childhood's End"></a></div>
        <div class="text1">Book Title:Childhood's End<br>Author:Arthur C. Clarke<br>Price:₹517<br>Pages:224<br>Publisher:Del Rey</div>
    </div>
    <div class="books">
        <div><a targrt="blanket" href="images/children3.jpg"><img src="images/sci-fi8.jpg" alt="Stranger In A Strange Land"></a></div>
        <div class="text1">Book Title:Stranger In A Strange Land<br>Author:Robert A. Heinlein<br>Price:₹459<br>Pages:608<br>Publisher:Ace</div>
    </div> 
    </div>
</body>
</html>
