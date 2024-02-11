<!DOCTYPE html>
<html>
    <head>
        <title>Create an account</title>
        <link rel="stylesheet" href="bookstyles.css">
        <link rel = "icon" href = "logoicon.jpg" type = "image/x-icon">
</head>
<body>
    <div class="title">
        <div class="logo">
        <img src="logo.png" width="100" height="80">
        </div>
        <div></div>
        <div class="header">
<h1>GTM BOOK STORE</h1></div>
        </div>
        <ul>
            <li><a href="home.html">Home</a></li>
            <li><a href="customerlogin.php">Customer Login</a></li>
            <li><a href="customersignup.php">Customer Signup</a></li>
        </ul><br><br>
    <div class="center">
    <center>
    <h2>Create an account here</h2>
    <form action='signupdetails.php' onsubmit="return signupvalidate()" method="POST">
        <label>Enter your Username:</label><br>
        <input type="text" id="uname" name="uname" placeholder="Full Name"><br><p id="fn"></p><br>
        <label>Enter your Email:</label><br>
        <input type="email" id="email" name="email" placeholder="Email"><br><p id="em"></p><br>
        <label>Enter your Mobile number:</label><br>
        <input type="number" id="mno" name="mno" placeholder="Mobile Number"><br><p id="m"></p><br>
        <label>Create an Password:</label><br>
        <input type="password" id="pw" name="pw" placeholder="Password"><br><p id="p"></p><br>
        <input type="submit" name="submit" value="Create">
</form>
        </center>
</div>
<script>
    function signupvalidate(){
        var a = document.getElementById("uname").value;
        var b = document.getElementById("email").value;
        var c = document.getElementById("mno").value;
        var d = document.getElementById("pw").value;
        if(a==''){
            document.getElementById("fn").innerHTML="Enter your Username!";
            return false;
        }
        else{
            document.getElementById("fn").innerHTML="";
        }
        if(b==''){
            document.getElementById("em").innerHTML="Enter your Email!";
            return false;
        }
        else{
            document.getElementById("em").innerHTML="";
        }
        if(c==''){
            document.getElementById("m").innerHTML="Enter your Mobile Number!";
            return false;
        }
        else if(c.length<10){
            document.getElementById("m").innerHTML="Your Mobile Number should contain 10 digits!";
            return false;
        }
        else if(c.length>10){
            document.getElementById("m").innerHTML="Your Mobile Number should contain 10 digits!";
            return false;
        }
        else{
            document.getElementById("m").innerHTML="";
        }
        if(d==''){
            document.getElementById("p").innerHTML="Create a password!";
            return false;
        }
        else{
            document.getElementById("p").innerHTML="";
        }

    }
    </script>
    </body>
    </html>