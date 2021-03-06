<?php

session_start();


    
$con=mysqli_connect('localhost','root','');

mysqli_select_db($con,'userregistration');

$name = $_POST["username"];
$email = $_POST["email"];
$age=$_POST["age"];
$weight=$_POST["weight"];
$height = $_POST["height"];
$mobile_no=$_POST["mb_no"];
$password=$_POST["password"];
$gender=$_POST["gender"];

$s = "select * from usertable where email = '$email'";

$result=mysqli_query($con,$s);

$num=mysqli_num_rows($result);

if($num > 0)
{
    echo '<script>alert("This emailId has already been registered");</script>';
    
}
else
{
    $reg="insert into usertable(username,email,age,weight,height,mobile_no,gender, password) values ('$name','$email','$age','$weight','$height','$mobile_no','$gender','$password')";
    mysqli_query($con,$reg);
    echo '<script>alert("Registration successfull");</script>'; 
}

?>