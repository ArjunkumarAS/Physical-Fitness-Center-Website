<?php
session_start();
$con=mysqli_connect('localhost','root','');
mysqli_select_db($con,'userregistration');

$email=$_POST["email"];
$password=$_POST["password"];

$s="select * from usertable where email='$email' && password='$password'";

$result=mysqli_query($con,$s) or die("failed to query database");

$num=mysqli_num_rows($result);
 if($num > 0)
{
  while($row = $result->fetch_assoc())
 {
  $_SESSION['username']=$row["username"];
  $_SESSION['email']=$row["email"];
  $_SESSION['age']=$row["age"];
  $_SESSION['weight']=$row["weight"];
  $_SESSION['height']=$row["height"];
  $_SESSION['gender']=$row["gender"];
 }
  header('location:process.php');
}    
 else
 {
  
   header('location:signin.html');
 }

?>