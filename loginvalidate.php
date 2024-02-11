<?php
if(isset($_POST['submit'])){
    session_start();


    $servername="localhost";
    $username="root";
    $password="";
    $db="bookstore";
    $conn=mysqli_connect($servername,$username,$password,$db);
    $uemail=$_POST['email'];
    $pwd=$_POST['pwd'];
    $verify="select * from signup where Email='$uemail'";
    echo '<center>';
    if(mysqli_num_rows(mysqli_query($conn,$verify))>0){
        $row="select * from signup where Email='$uemail'";
        $value=mysqli_fetch_assoc(mysqli_query($conn,$row));
        if($value['Password']!=$pwd){echo "<p>Incorrect Password<br><a href='customerlogin.php'>Try Again</a></p>";}
        else{   
            $_SESSION["username"]=$value["Username"];
            $_SESSION['email']=$uemail;
            $_SESSION["pw"]=$pwd;
            header('location:bookstore.php');
         }}
    else{
        echo "<p>It seems you don't have a Account</p>";
        header('location:customersignup.php');
    }
}
?>