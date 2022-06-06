<?php
$con = mysqli_connect('localhost:3308','root','');
mysqli_select_db($con,'rblood');
$fname = $_POST['a_fname'];
$lname=$_POST['a_lname'];
$username = $_POST['a_username'];
$address=$_POST['a_address'];
$state = $_POST['a_state'];
$city = $_POST['a_city'];
$zip = $_POST['a_zip'];
$email = $_POST['a_email'];
$mobile = $_POST['a_mobile'];
$aadhar = $_POST['a_aadhar'];
$password = $_POST['a_password'];
$bgroup = $_POST['a_bgroup'];
$cpassword = $_POST['a_cpassword'];
$gender = $_POST['a_gender'];

 $image_name = $_FILES['a_photo']['name'];
 $image_tmp_name= $_FILES['a_photo']['tmp_name'];
 $image_path='../DB/admin/'.$image_name;
 move_uploaded_file($image_tmp_name,$image_path);
 
$q="insert into admin(a_fname,a_lname,a_username,a_address,a_state,a_city,a_zip,a_email,a_mobile,a_aadhar,a_password,a_bgroup,a_cpassword,a_gender,a_photo)values('$fname','$lname','$username','$address','$state','$city','$zip','$email','$mobile','$aadhar','$password','$bgroup','$cpassword','$gender','$image_path');";
$result = mysqli_query($con,$q);

if($result){
header('location:http://localhost/Rblood/ANewUser.php');}
else
{   echo 'operation failed';
    header('location:http://localhost/Rblood/adminHome.php');}
 