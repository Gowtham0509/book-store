<!DOCTYPE html>
<html>
<head>
    <title>GTM BOOK STORE</title>
    <link rel="stylesheet" href="bookstyles.css">
    <link rel = "icon" href = "logoicon.jpg" type = "image/x-icon">
</head>
<body>

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
        <?php
    session_start();
    if(isset($_SESSION["username"]) && isset($_SESSION["pw"])){
        echo"<center><h2>Welcome ".$_SESSION['username']."!</h2>";
        echo "<center><h3>Have a great shopping!</h3></center>";}
    else{
        header("location:customerlogin.php");
        }
?>
    <div class="box">
        <div class="books">
        <div><a target="blank" href="images/asylum.jpg"><img src="images/biography.jpg" alt="Autobiography of Malcolm X"></a></div>
        <div class="text1">Book Title:Autobiography of Malcolm X<br>Author:Malcolm X<br>Price:₹1489<br>Pages:496<br>Publisher:RHUS</div>
        <div><button class="cart">Add to Cart</button></div>
    </div>
    <div class="books">
        <div><a targrt="blanket" href="images/allthelight.jpg"><img src="images/thriller1.jpg" alt="One Arranged Murder"></a></div>
        <div class="text1">Book Title:One Arranged Murder<br>Author:Chetan Bhagat<br>Price:₹135<br>Pages:312<br>Publisher:Westland</div>
        <br><div><button class="cart">Add to Cart</button></div>
    </div>
    <div class="books">
        <div><a targrt="blanket" href="images/discoveryofindia.jpg"><img src="images/historical1.jpg" alt="The Discovery Of India"></a></div>
        <div class="text1">Book Title:The Discovery Of India<br>Author:Jawaharlal Nehru<br>Price:₹405<br>Pages:656<br>Publisher:Penguin India</div>
        <div><button class="cart">Add to Cart</button></div>
    </div>
    <div class="books">
        <div><a targrt="blanket" href="images/darkmatter.jpg"><img src="images/science1.jpg" alt="The Origin Of Species"></a></div>
        <div class="text1">Book Title:The Origin Of Species<br>Author:Charles Darwin<br>Price:₹149<br>Pages:500<br>Publisher:Fingerprint Publishing</div>
        <br><br><div><button class="cart">Add to Cart</button></div>
    </div>
    <div class="books">
        <div><a targrt="blanket" href="images/children3.jpg"><img src="images/sci-fi2.jpg" alt="Fahrenheit 451"></a></div>
        <div class="text1">Book Title:Fahrenheit 451<br>Author:Ray Bradbury<br>Price:₹282<br>Pages:192<br>Publisher:Harper voyager</div>
        <div><button class="cart">Add to Cart</button></div>
    </div>
    <div class="books">
        <div><a targrt="blanket" href="images/thetimemachine.jpg"><img src="images/children1.jpg" alt="Great Stories for Children"></a></div>
        <div class="text1">Book Title:Great Stories for Children<br>Author:Ruskin Bond<br>Price:₹118<br>Pages:200<br>Publisher:Rupa</div>
        <br><div><button class="cart">Add to Cart</button></div>
    </div>
    <div class="books">
        <div><a targrt="blanket" href="images/thetimemachine.jpg"><img src="images/horror1.jpg" alt="Dark Tales"></a></div>
        <div class="text1">Book Title:Dark Tales<br>Author:Venita Coelho<br>Price:₹181<br>Pages:184<br>Publisher:Penguin</div>
        <br><div><button class="cart">Add to Cart</button></div>
    </div><br><br>
    
    </div>
    <div class="box">
        <div class="books">
        <div><a target="blank" href="images/asylum.jpg"><img src="images/children2.jpg" alt="Children's Encyclopedia"></a></div>
        <div class="text1">Book Title:Children's Encyclopedia<br>Author:Manasvi Vohra<br>Price:₹120<br>Pages:128<br>Publisher:V&S Publishers</div>
        <br><br><div><button class="cart">Add to Cart</button></div>
    </div>
    <div class="books">
        <div><a targrt="blanket" href="images/allthelight.jpg"><img src="images/horror2.jpg" alt="Asylum"></a></div>
        <div class="text1">Book Title:Asylum<br>Author:Madeleine Roux<br>Price:₹323<br>Pages:336<br>Publisher:HarperCollins</div>
        <br><br><div><button class="cart">Add to Cart</button></div>
    </div>
    <div class="books">
        <div><a targrt="blanket" href="images/discoveryofindia.jpg"><img src="images/science2.jpg" alt="Sapiens:A Brief History Of Humankind"></a></div>
        <div class="text1">Book Title:Sapiens:A Brief History Of Humankind<br>Author:Yuval Noah Harari<br>Price:₹349<br>Pages:512<br>Publisher:Penguin Random House</div>
        <div><button class="cart">Add to Cart</button></div>
    </div>
    <div class="books">
        <div><a targrt="blanket" href="images/darkmatter.jpg"><img src="images/historical2.jpg" alt="All the Light We cannot see"></a></div>
        <div class="text1">Book Title:All the Light We cannot see<br>Author:Anthony Doerr<br>Price:₹305<br>Pages:544<br>Publisher:Fourth Estate</div>
        <br><div><button class="cart">Add to Cart</button></div>
    </div>
    <div class="books">
        <div><a targrt="blanket" href="images/children3.jpg"><img src="images/sci-fi1.jpg" alt="The Time Machine"></a></div>
        <div class="text1">Book Title:The Time Machine<br>Author:H.G.Wells<br>Price:₹89<br>Pages:144<br>Publisher:Fingerprint Publishers</div>
        <br><br><div><button class="cart">Add to Cart</button></div>
    </div>
    <div class="books">
        <div><a targrt="blanket" href="images/thetimemachine.jpg"><img src="images/biography2.jpg" alt="Wings Of Fire:An Autobiography Of Abdul Kalam"></a></div>
        <div class="text1">Book Title:Wings Of Fire:An Autobiography Of Abdul Kalam<br>Author:A.P.J Abdul Kalam,Arun Tiwari<br>Price:₹221<br>Pages:180<br>Publisher:Universities Press</div>
        <div><button class="cart">Add to Cart</button></div>
    </div>
    <div class="books">
        <div><a targrt="blanket" href="images/thetimemachine.jpg"><img src="images/thriller2.jpg" alt="Dark Matter"></a></div>
        <div class="text1">Book Title:Dark Matter<br>Author:Blake Crouch<br>Price:₹292<br>Pages:416<br>Publisher:PAN</div>
        <br><br><div><button class="cart">Add to Cart</button></div>
    </div>
    </div>
    <div class="box">
        <div class="books">
        <div><a target="blank" href="images/asylum.jpg"><img src="images/horror3.jpg" alt="The Shining"></a></div>
        <div class="text1">Book Title:The Shining<br>Author:Stephen King<br>Price:₹279<br>Pages:512<br>Hodder Paperbacks</div>
        <br><div><button class="cart">Add to Cart</button></div>
    </div>
    <div class="books">
        <div><a targrt="blanket" href="images/allthelight.jpg"><img src="images/sci-fi3.jpg" alt="Red Mars"></a></div>
        <div class="text1">Book Title:Red Mars(Trilogy)<br>Author:Kim Stanley Robinson<br>Price:₹799<br>Pages:592<br>Publisher:Spectra</div>
        <div><button class="cart">Add to Cart</button></div>
    </div>
    <div class="books">
        <div><a targrt="blanket" href="images/discoveryofindia.jpg"><img src="images/biography3.jpg" alt="The Story Of My Life"></a></div>
        <div class="text1">Book Title:The Story Of My Life<br>Author:Helen Keller<br>Price:₹129<br>Pages:408<br>Publisher:Fingerprint Publishing</div>
        <br><br><div><button class="cart">Add to Cart</button></div>
    </div>
    <div class="books">
        <div><a targrt="blanket" href="images/darkmatter.jpg"><img src="images/historical3.jpg" alt="War and Peace"></a></div>
        <div class="text1">Book Title:War and Peace<br>Author:Leo Tolstoy<br>Price:₹284<br>Pages:1232<br>Publisher:Fingerprint Publishing</div>
        <br><br><br><div><button class="cart">Add to Cart</button></div>
    </div>
    <div class="books">
        <div><a targrt="blanket" href="images/children3.jpg"><img src="images/children3.jpg" alt="Grandma's Bag Of Stories"></a></div>
        <div class="text1">Book Title:Grandma's Bag Of Stories<br>Author:Sudha Murty<br>Price:₹173<br>Pages:176<br>Publisher:Penguin Books Limited</div>
        <div><button class="cart">Add to Cart</button></div>
    </div>
    <div class="books">
        <div><a targrt="blanket" href="images/thetimemachine.jpg"><img src="images/thriller3.jpg" alt="The Silent Patient"></a></div>
        <div class="text1">Book Title:The Silent Patient<br>Author:Alex Michaelides<br>Price:₹280<br>Pages:352<br>Publisher:Orion</div>
        <div><button class="cart">Add to Cart</button></div>
    </div>
    <div class="books">
        <div><a targrt="blanket" href="images/thetimemachine.jpg"><img src="images/science3.jpg" alt="A Brief History of Time:From Big Bang To Black Holes"></a></div>
        <div class="text1">Book Title:A Brief History of Time:From Big Bang To Black Holes<br>Author:Stepehen Hawking<br>Price:₹240<br>Pages:240<br>Publisher:Bantam</div>
        <div><button class="cart">Add to Cart</button></div>
    </div>
    </div>
    <div class="box">
        <div class="books">
        <div><a target="blank" href="images/asylum.jpg"><img src="images/science4.jpg" alt="Cosmos"></a></div>
        <div class="text1">Book Title:Cosmos<br>Author:Carl Sagan<br>Price:₹2312<br>Pages:432<br>Publisher:Random House USA Inc</div>
        <div><button class="cart">Add to Cart</button></div>
    </div>
    <div class="books">
        <div><a targrt="blanket" href="images/allthelight.jpg"><img src="images/thriller4.jpg" alt="Murder On The Orient Express"></a></div>
        <div class="text1">Book Title:Murder On The Orient Express<br>Author:Agatha Christie<br>Price:₹164<br>Pages:288<br>Publisher:HarperCollins</div>
        <div><button class="cart">Add to Cart</button></div>
    </div>
    <div class="books">
        <div><a targrt="blanket" href="images/discoveryofindia.jpg"><img src="images/sci-fi4.jpg" alt="The Last Policeman"></a></div>
        <div class="text1">Book Title:The Last Policeman<br>Author:Ben H Winters<br>Price:₹870<br>Pages:336<br>Publisher:Quirk Books</div>
        <div><button class="cart">Add to Cart</button></div>
    </div>
    <div class="books">
        <div><a targrt="blanket" href="images/darkmatter.jpg"><img src="images/biography4.jpg" alt="Steve Jobs" height="150"></a></div>
        <div class="text1">Book Title:Steve Jobs<br>Author:Walter Isaacson<br>Price:₹366<br>Pages:592<br>Publisher:Abacus</div>
        <div><button class="cart">Add to Cart</button></div>
    </div>
    <div class="books">
        <div><a targrt="blanket" href="images/children3.jpg"><img src="images/children4.jpg" alt="World's Greatest Leaders"></a></div>
        <div class="text1">Book Title:World's Greatest Leaders<br>Author:Wonder House Books<br>Price:₹99<br>Pages:160<br>Publisher:Wonder House Books</div>
        <div><button class="cart">Add to Cart</button></div>
    </div>
    <div class="books">
        <div><a targrt="blanket" href="images/thetimemachine.jpg"><img src="images/horror4.jpg" alt="The Wind on Haunted Hill"></a></div>
        <div class="text1">Book Title:The Wind on Haunted Hill<br>Author:Ruskin Bond<br>Price:₹149<br>Pages:40<br>Publisher:Puffin</div>
        <div><button class="cart">Add to Cart</button></div>
    </div>
    <div class="books">
        <div><a targrt="blanket" href="images/thetimemachine.jpg"><img src="images/historical4.jpg" alt="The Silk Roads:A New History Of The World"></a></div>
        <div class="text1">Book Title:The Silk Roads:A New History Of The World<br>Author:Peter Frankopan<br>Price:₹454<br>Pages:656<br>Publisher:Bloomsbury Paperbacks</div>
        <div><button class="cart">Add to Cart</button></div>
    </div>
    </div>
    <div class="box">
        <div class="books">
        <div><a target="blank" href="images/asylum.jpg"><img src="images/thriller5.jpg" alt="The Complete Novels Of Sherlock Holmes"></a></div>
        <div class="text1">Book Title:The Complete Novels Of Sherlock Holmes<br>Author:Arthur Connon Doyle<br>Price:₹136<br>Pages:536<br>Publisher:Fingerprint Publishing</div>
        <div><button class="cart">Add to Cart</button></div>
    </div>
    <div class="books">
        <div><a targrt="blanket" href="images/allthelight.jpg"><img src="images/biography5.jpg" alt="I Am Malala"></a></div>
        <div class="text1">Book Title:I Am Malala<br>Author:Malala Yousafzai<br>Price:₹271<br>Pages:272<br>Publisher:Orion Books</div>
        <div><button class="cart">Add to Cart</button></div>
    </div>
    <div class="books">
        <div><a targrt="blanket" href="images/discoveryofindia.jpg"><img src="images/children5.jpg" alt="Peppa Pig Early Learning Library"></a></div>
        <div class="text1">Book Title:Peppa Pig Early Learning Library<br>Author:Wonder House Books<br>Price:₹399<br>Pages:220<br>Publisher:Wonder House Books</div>
        <div><button class="cart">Add to Cart</button></div>
    </div>
    <div class="books">
        <div><a targrt="blanket" href="images/darkmatter.jpg"><img src="images/sci-fi5.jpg" alt="1984"></a></div>
        <div class="text1">Book Title:1984<br>Author:George Orwell<br>Price:₹399<br>Pages:360<br>Publisher:Fingerprint Publishing</div>
        <div><button class="cart">Add to Cart</button></div>
    </div>
    <div class="books">
        <div><a targrt="blanket" href="images/children3.jpg"><img src="images/horror5.jpg" alt="The Ruins"></a></div>
        <div class="text1">Book Title:The Ruins<br>Author:Scott Smith<br>Price:₹1162<br>Pages:384<br>Publisher:Vintage</div>
        <div><button class="cart">Add to Cart</button></div>
    </div>
    <div class="books">
        <div><a targrt="blanket" href="images/thetimemachine.jpg"><img src="images/science5.jpg" alt="The Second Kind Of Impossible"></a></div>
        <div class="text1">Book Title:The Second Kind Of Impossible<br>Author:Paul Steinhardt<br>Price:₹810<br>Pages:400<br>Publisher:Simon and Schuster</div>
        <div><button class="cart">Add to Cart</button></div>
    </div>
    <div class="books">
        <div><a targrt="blanket" href="images/thetimemachine.jpg"><img src="images/historical5.jpg" alt="The Empire Of Gold"></a></div>
        <div class="text1">Book Title:The Empire Of Gold<br>Author:S A Chakraborty<br>Price:₹1963<br>Pages:782<br>Publisher:Harper Voyager</div>
        <div><button class="cart">Add to Cart</button></div>
    </div>
    </div>

    <div class="box">
        <div class="books">
        <div><a target="blank" href="images/asylum.jpg"><img src="images/children6.jpg" alt="Brain Games For Kids"></a></div>
        <div class="text1">Book Title:Brain Games For Kids<br>Author:Gareth Moore<br>Price:₹179<br>Pages:192<br>Publisher:Michael O'Mara Books</div>
    </div>
    <div class="books">
        <div><a targrt="blanket" href="images/allthelight.jpg"><img src="images/historical6.jpg" alt="The Last Assassin"></a></div>
        <div class="text1">Book Title:The Last Assassin<br>Author:Peter Stothard<br>Price:₹1825<br>Pages:288<br>Publisher:W&N</div>
    </div>
    <div class="books">
        <div><a targrt="blanket" href="images/discoveryofindia.jpg"><img src="images/science6.jpg" alt="The Order Of Time"></a></div>
        <div class="text1">Book Title:The Order Of Time<br>Author:Carlo rovelli<br>Price:₹311<br>Pages:224<br>Publisher:Penguin</div>
    </div>
    <div class="books">
        <div><a targrt="blanket" href="images/darkmatter.jpg"><img src="images/biography6.jpg" alt="Mahatma Gandhi Autobiography"></a></div>
        <div class="text1">Book Title:Mahatma Gandhi Autobiography<br>Author:Mahatma Gandhi<br>Price:₹99<br>Pages:448<br>Publisher:Fingerprint publishing</div>
    </div>
    <div class="books">
        <div><a targrt="blanket" href="images/children3.jpg"><img src="images/sci-fi6.jpg" alt="Foundation"></a></div>
        <div class="text1">Book Title:Foundation<br>Author:Isaac Asimov<br>Price:₹254<br>Pages:240<br>Publisher:Harper Voyager</div>
    </div>
    <div class="books">
        <div><a targrt="blanket" href="images/thetimemachine.jpg"><img src="images/thriller6.jpg" alt="Edge Of The Grave"></a></div>
        <div class="text1">Book Title:Edge Of The Grave<br>Author:Robbie Morrison<br>Price:₹1485<br>Pages:365<br>Publisher:Macmillan</div>
    </div>
    <div class="books">
        <div><a targrt="blanket" href="images/thetimemachine.jpg"><img src="images/horror6.jpg" alt="A Head Full Of Ghosts"></a></div>
        <div class="text1">Book Title:A Head Full Of Ghosts<br>Author:Paul Tremblay<br>Price:₹909<br>Pages:320<br>Publisher:William Morrow Paperbacks</div>
    </div>
    </div>
    <div class="box">
        <div class="books">
        <div><a target="blank" href="images/asylum.jpg"><img src="images/sci-fi7.jpg" alt="Childhood's End"></a></div>
        <div class="text1">Book Title:Childhood's End<br>Author:Arthur C. Clarke<br>Price:₹517<br>Pages:224<br>Publisher:Del Rey</div>
    </div>
    <div class="books">
        <div><a targrt="blanket" href="images/allthelight.jpg"><img src="images/horror7.jpg" alt="House Of Leaves"></a></div>
        <div class="text1">Book Title:House Of Leaves<br>Author:Mark Z. Danielewski<br>Price:₹1150<br>Pages:736<br>Publisher:Pantheon</div>
    </div>
    <div class="books">
        <div><a targrt="blanket" href="images/discoveryofindia.jpg"><img src="images/science7.jpg" alt="The Future Of Humanity"></a></div>
        <div class="text1">Book Title:The Future Of Humanity<br>Author:Michio Kaku<br>Price:₹408<br>Pages:368<br>Publisher:Penguin</div>
    </div>
    <div class="books">
        <div><a targrt="blanket" href="images/darkmatter.jpg"><img src="images/thriller7.jpg" alt="The Guest List"></a></div>
        <div class="text1">Book Title:The Guest List<br>Author:Lucy Foley<br>Price:₹254<br>Pages:384<br>Publisher:HarperCollins</div>
    </div>
    <div class="books">
        <div><a targrt="blanket" href="images/children3.jpg"><img src="images/biography7.jpg" alt="Long Walk To Freedom"></a></div>
        <div class="text1">Book Title:Long Walk To Freedom<br>Author:Nelson Mandela<br>Price:₹436<br>Pages:784<br>Publisher:Abacus</div>
    </div>
    <div class="books">
        <div><a targrt="blanket" href="images/thetimemachine.jpg"><img src="images/historical7.jpg" alt="Children Of Ash and Elm:A History Of Vikings"></a></div>
        <div class="text1">Book Title:Children Of Ash and Elm:A History Of Vikings<br>Author:Neil Price<br>Price:₹2287<br>Pages:624<br>Publisher:Basic Books</div>
    </div>
    <div class="books">
        <div><a targrt="blanket" href="images/thetimemachine.jpg"><img src="images/children7.jpg" alt="Brilliant Brain Activity Book"></a></div>
        <div class="text1">Book Title:Brilliant Brain Activity Book<br>Author:Dreamland Publications<br>Price:₹138<br>Pages:80<br>Publisher:Dreamland Publications</div>
    </div>
    </div>
    <div class="box">
        <div class="books">
        <div><a target="blank" href="images/asylum.jpg"><img src="images/biography8.jpg" alt="The Autobiography Of Benjamin Franklin"></a></div>
        <div class="text1">Book Title:The Autobiography Of Benjamin Franklin<br>Author:Benjamin Franklin<br>Price:₹146<br>Pages:184<br>Publisher:Rupa Publications India</div>
    </div>
    <div class="books">
        <div><a targrt="blanket" href="images/allthelight.jpg"><img src="images/historical8.jpeg" alt="A Short History Of The Veitnam War"></a></div>
        <div class="text1">Book Title:A Short History Of The Veitnam War<br>Author:DK<br>Price:₹943<br>Pages:560<br>Publisher:DK</div>
    </div>
    <div class="books">
        <div><a targrt="blanket" href="images/discoveryofindia.jpg"><img src="images/horror8.jpg" alt="Don't Go To Sleep(Goosebumps)"></a></div>
        <div class="text1">Book Title:Don't Go To Sleep(Goosebumps)<br>Author:R L Stine<br>Price:₹202<br>Pages:144<br>Publisher:Scholastic Incorporated</div>  
    </div>
    <div class="books">
        <div><a targrt="blanket" href="images/darkmatter.jpg"><img src="images/science8.jpg" alt="Spying On Whales"></a></div>
        <div class="text1">Book Title:Spying On Whales<br>Author:Nick Pyenson<br>Price:₹880<br>Pages:336<br>Publisher:William Collins</div>
    </div>
    <div class="books">
        <div><a targrt="blanket" href="images/children3.jpg"><img src="images/sci-fi8.jpg" alt="Stranger In A Strange Land"></a></div>
        <div class="text1">Book Title:Stranger In A Strange Land<br>Author:Robert A. Heinlein<br>Price:₹459<br>Pages:608<br>Publisher:Ace</div>
    </div>
    <div class="books">
        <div><a targrt="blanket" href="images/thetimemachine.jpg"><img src="images/children8.jpg" alt="Little Red Riding Hood"></a></div>
        <div class="text1">Book Title:Little Red Riding Hood<br>Author:Wonder House Books<br>Price:₹105<br>Pages:16<br>Publisher:Wonder House Books</div>
    </div>
    <div class="books">
        <div><a targrt="blanket" href="images/thetimemachine.jpg"><img src="images/thriller8.jpg" alt="Death On The Nile"></a></div>
        <div class="text1">Book Title:Death On The Nile<br>Author:Agatha Christie<br>Price:₹646<br>Pages:373<br>Publisher:Harper Collins</div>
    </div>
    </div>
    
    </body>
</html>