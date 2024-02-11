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
        <div><a target="blank" href="images/asylum.jpg"><img src="images/biography.jpg" alt="Autobiography of Malcolm X"></a></div>
        <div class="text1">Book Title:Autobiography of Malcolm X<br>Author:Malcolm X<br>Price:₹1489<br>Pages:496<br>Publisher:RHUS</div>
    </div>
    <div class="books">
        <div><a targrt="blanket" href="images/thetimemachine.jpg"><img src="images/biography2.jpg" alt="Wings Of Fire:An Autobiography Of Abdul Kalam"></a></div>
        <div class="text1">Book Title:Wings Of Fire:An Autobiography Of Abdul Kalam<br>Author:A.P.J Abdul Kalam,Arun Tiwari<br>Price:₹221<br>Pages:180<br>Publisher:Universities Press</div>
    </div>
    <div class="books">
        <div><a targrt="blanket" href="images/discoveryofindia.jpg"><img src="images/biography3.jpg" alt="The Story Of My Life"></a></div>
        <div class="text1">Book Title:The Story Of My Life<br>Author:Helen Keller<br>Price:₹129<br>Pages:408<br>Publisher:Fingerprint Publishing</div>
    </div>
    <div class="books">
        <div><a targrt="blanket" href="images/darkmatter.jpg"><img src="images/biography4.jpg" alt="Steve Jobs"></a></div>
        <div class="text1">Book Title:Steve Jobs<br>Author:Walter Isaacson<br>Price:₹366<br>Pages:592<br>Publisher:Abacus</div>
    </div>
    </div>
    <div class="box">
    <div class="books">
        <div><a targrt="blanket" href="images/allthelight.jpg"><img src="images/biography5.jpg" alt="I Am Malala"></a></div>
        <div class="text1">Book Title:I Am Malala<br>Author:Malala Yousafzai<br>Price:₹271<br>Pages:272<br>Publisher:Orion Books</div>
    </div>
    <div class="books">
        <div><a targrt="blanket" href="images/darkmatter.jpg"><img src="images/biography6.jpg" alt="Mahatma Gandhi Autobiography"></a></div>
        <div class="text1">Book Title:Mahatma Gandhi Autobiography<br>Author:Mahatma Gandhi<br>Price:₹99<br>Pages:448<br>Publisher:Fingerprint publishing</div>
    </div>
    <div class="books">
        <div><a targrt="blanket" href="images/children3.jpg"><img src="images/biography7.jpg" alt="Long Walk To Freedom"></a></div>
        <div class="text1">Book Title:Long Walk To Freedom<br>Author:Nelson Mandela<br>Price:₹436<br>Pages:784<br>Publisher:Abacus</div>
    </div>
    <div class="books">
        <div><a target="blank" href="images/asylum.jpg"><img src="images/biography8.jpg" alt="The Autobiography Of Benjamin Franklin"></a></div>
        <div class="text1">Book Title:The Autobiography Of Benjamin Franklin<br>Author:Benjamin Franklin<br>Price:₹146<br>Pages:184<br>Publisher:Rupa Publications India</div>
    </div>
    </div>
</body>
</html>