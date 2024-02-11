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
        <div><a targrt="blanket" href="images/thetimemachine.jpg"><img src="images/horror1.jpg" alt="Dark Tales"></a></div>
        <div class="text1">Book Title:Dark Tales<br>Author:Venita Coelho<br>Price:₹181<br>Pages:184<br>Publisher:Penguin</div>
    </div>
    <div class="books">
        <div><a targrt="blanket" href="images/allthelight.jpg"><img src="images/horror2.jpg" alt="Asylum"></a></div>
        <div class="text1">Book Title:Asylum<br>Author:Madeleine Roux<br>Price:₹323<br>Pages:336<br>Publisher:HarperCollins</div>
    </div>
    <div class="books">
        <div><a target="blank" href="images/asylum.jpg"><img src="images/horror3.jpg" alt="The Shining"></a></div>
        <div class="text1">Book Title:The Shining<br>Author:Stephen King<br>Price:₹279<br>Pages:512<br>Hodder Paperbacks</div>
    </div>
    <div class="books">
        <div><a targrt="blanket" href="images/thetimemachine.jpg"><img src="images/horror4.jpg" alt="The Wind on Haunted Hill"></a></div>
        <div class="text1">Book Title:The Wind on Haunted Hill<br>Author:Ruskin Bond<br>Price:₹149<br>Pages:40<br>Publisher:Puffin</div>
    </div>
    </div>
    <div class="box">
    <div class="books">
        <div><a targrt="blanket" href="images/children3.jpg"><img src="images/horror5.jpg" alt="The Ruins"></a></div>
        <div class="text1">Book Title:The Ruins<br>Author:Scott Smith<br>Price:₹1162<br>Pages:384<br>Publisher:Vintage</div>
    </div>
    <div class="books">
        <div><a targrt="blanket" href="images/thetimemachine.jpg"><img src="images/horror6.jpg" alt="A Head Full Of Ghosts"></a></div>
        <div class="text1">Book Title:A Head Full Of Ghosts<br>Author:Paul Tremblay<br>Price:₹909<br>Pages:320<br>Publisher:William Morrow Paperbacks</div>
    </div>
    <div class="books">
        <div><a targrt="blanket" href="images/allthelight.jpg"><img src="images/horror7.jpg" alt="House Of Leaves"></a></div>
        <div class="text1">Book Title:House Of Leaves<br>Author:Mark Z. Danielewski<br>Price:₹1150<br>Pages:736<br>Publisher:Pantheon</div>
    </div>
    <div class="books">
        <div><a targrt="blanket" href="images/discoveryofindia.jpg"><img src="images/horror8.jpg" alt="Don't Go To Sleep(Goosebumps)"></a></div>
        <div class="text1">Book Title:Don't Go To Sleep(Goosebumps)<br>Author:R L Stine<br>Price:₹202<br>Pages:144<br>Publisher:Scholastic Incorporated</div>  
    </div>
    </div>

</body>
</html>
