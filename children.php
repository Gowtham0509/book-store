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
        </ul><br>
    <div class="gbox">
    <div class="genre">
    <div><a targrt="blanket" href="images/thetimemachine.jpg"><img src="images/children1.jpg" alt="Great Stories for Children"></a></div>
    <div class="text1"><h3>Book Title:Great Stories for Children</h3>
    <h3>Author:Ruskin Bond</h3>
    <h3>Price:₹118</h3>
    <h3>Pages:200</h3>
    <h3>Publisher:Rupa</h3></div>
    <div><button>Add to Cart</button></div>
    </div>
    
    <div class="genre">
        <div><a target="blank" href="images/asylum.jpg"><img src="images/children2.jpg" alt="Children's Encyclopedia"></a></div>
        <div class="text1">Book Title:Children's Encyclopedia<br>Author:Manasvi Vohra<br>Price:₹120<br>Pages:128<br>Publisher:V&S Publishers</div>
    </div>
    <div class="genre">
        <div><a targrt="blanket" href="images/children3.jpg"><img src="images/children3.jpg" alt="Grandma's Bag Of Stories"></a></div>
        <div class="text1">Book Title:Grandma's Bag Of Stories<br>Author:Sudha Murty<br>Price:₹173<br>Pages:176<br>Publisher:Penguin Books Limited</div>
    </div>
    <div class="genre">
        <div><a targrt="blanket" href="images/children3.jpg"><img src="images/children4.jpg" alt="World's Greatest Leaders"></a></div>
        <div class="text1">Book Title:World's Greatest Leaders<br>Author:Wonder House Books<br>Price:₹99<br>Pages:160<br>Publisher:Wonder House Books</div>
    </div>
</div>
    <div class="gbox">
    <div class="genre">
        <div><a targrt="blanket" href="images/discoveryofindia.jpg"><img src="images/children5.jpg" alt="Peppa Pig Early Learning Library"></a></div>
        <div class="text1">Book Title:Peppa Pig Early Learning Library<br>Author:Wonder House Books<br>Price:₹399<br>Pages:220<br>Publisher:Wonder House Books</div>
    </div>
    <div class="genre">
        <div><a target="blank" href="images/asylum.jpg"><img src="images/children6.jpg" alt="Brain Games For Kids"></a></div>
        <div class="text1">Book Title:Brain Games For Kids<br>Author:Gareth Moore<br>Price:₹179<br>Pages:192<br>Publisher:Michael O'Mara Books</div>
    </div>
    <div class="genre">
        <div><a targrt="blanket" href="images/thetimemachine.jpg"><img src="images/children7.jpg" alt="Brilliant Brain Activity Book"></a></div>
        <div class="text1">Book Title:Brilliant Brain Activity Book<br>Author:Dreamland Publications<br>Price:₹138<br>Pages:80<br>Publisher:Dreamland Publications</div>
    </div>
    <div class="genre">
        <div><a targrt="blanket" href="images/thetimemachine.jpg"><img src="images/children8.jpg" alt="Little Red Riding Hood"></a></div>
        <div class="text1">Book Title:Little Red Riding Hood<br>Author:Wonder House Books<br>Price:₹105<br>Pages:16<br>Publisher:Wonder House Books</div>
</div>
</div>

</body>
</html>

