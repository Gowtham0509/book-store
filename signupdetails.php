<?php
session_start();
header('location:customerlogin.php');

$servername='localhost';
$username='root';
$password='';
$conn=mysqli_connect($servername,$username,$password);
mysqli_query($conn,'CREATE DATABASE bookstore');
$conn=mysqli_connect($servername,$username,$password,'bookstore');
mysqli_query($conn,"CREATE TABLE signup(Id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,Username VARCHAR(100) NOT NULL,
Email VARCHAR(100) NOT NULL,Mobile_no VARCHAR(100) NOT NULL,Password VARCHAR(100) NOT NULL)");
$query="select * from signup";
$table=mysqli_query($conn,$query);
$numberofrows=mysqli_num_rows($table);
$id=$numberofrows+1;
$uname=$_POST['uname'];
$email=$_POST['email'];
$mobile=$_POST['mno'];
$pw=$_POST['pw'];
$sql=mysqli_query($conn,"INSERT INTO signup VALUES('$id','$uname','$email','$mobile','$pw')");
echo "Your data is successfully registered!";
?>