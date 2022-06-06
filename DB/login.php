<?php
session_start();
$username=$_POST['email'];
$password=$_POST['pswd'];
$con = mysqli_connect('localhost:3308','root','');
mysqli_select_db($con,'rblood');
$q="select * from admin where a_username='$username' OR a_email = '$username' AND a_password='$password'";
$result=mysqli_query($con,$q);
$num =mysqli_num_rows($result);
$row=mysqli_fetch_array($result);
if($num==1)
{
$_SESSION['username']=$row['a_username'];
header('location:http://localhost/Rblood/adminHome.php');}
else
{
  header('location:http://localhost/Rblood/index.php'); 
  print "wrong password";
  
}

?>

