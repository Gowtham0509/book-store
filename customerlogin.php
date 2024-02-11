<!DOCTYPE html>
<html>
<head>
    <title>Customer Login</title>
    <link rel="stylesheet" href="bookstyles.css">
    <link rel = "icon" href = "logoicon.jpg" type = "image/x-icon">
    </head>
    <body>
    <div class="title">
        <div class="logo">
        <img src="logo.png" width="100" height="80">
        </div>
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
        <h1>Customer Login</h1>
        <form action ="loginvalidate.php" onsubmit="return cloginvalidate()" method="POST">
            <label>Enter your Email Id:</label><br>
            <input type="email" id="email" name="email" placeholder="Email"><br>
            <p id="em" name="em"></p><br>
            <label>Enter your Password:</label><br>
            <input type="password" id="pwd" name="pwd" placeholder="Password"><br>
            <p id="pw" name="pw"></p><br>
            <input type="submit" name="submit" value="Login">
            <h3>Don't have an account?<a href="customersignup.php">Create an account</a></h3>
</form>
</center>
</div>
<script>
    function cloginvalidate(){
        var a = document.getElementById("email").value;
        var b = document.getElementById("pwd").value;
        if(a==''){
            document.getElementById("em").innerHTML="Enter your Email!";
            return false;
        }
        else{
            document.getElementById("em").innerHTML="";
        }
        if(b==''){
            document.getElementById("pw").innerHTML="Enter your Password!";
            return false;
        }
        else{
            document.getElementById("pw").innerHTML="";
        }
    }
</script>

</body>
</html>