<?php
$con = mysqli_connect('localhost:3308','root','');
mysqli_select_db($con,'rblood');
$fname = $_POST['d_fname'];
$lname=$_POST['d_lname'];
$dob = $_POST['d_dob'];
$address = $_POST['d_address'];
$state = $_POST['d_state'];
$city = $_POST['d_city'];
$zip = $_POST['d_zip'];
$email = $_POST['d_email'];
$mobile = $_POST['d_mobile'];
$aadhar = $_POST['d_aadhar'];
$ltd = $_POST['d_ltd'];
$bgroup = $_POST['d_bgroup'];
$dcount = $_POST['d_dcount'];
$gender = $_POST['d_gender'];

 $image_name = $_FILES['d_photo']['name'];
 $image_tmp_name= $_FILES['d_photo']['tmp_name'];
 $image_path='../DB/Donor/'.$image_name;
 move_uploaded_file($image_tmp_name,$image_path);
 
$q="insert into donor(d_fname,d_lname,d_dob,d_address,d_state,d_city,d_zip,d_email,d_mobile,d_aadhar,d_ltd,d_bgroup,d_dcount,d_gender,d_photo)values('$fname','$lname','$dob','$address','$state','$city','$zip','$email','$mobile','$aadhar','$ltd','$bgroup','$dcount','$gender','$image_path');";
$result = mysqli_query($con,$q);

if($result){
header('location:http://localhost/Rblood/Adonor.php');}
else
{   echo 'operation failed';
    header('location:http://localhost/Rblood/adminHome.php');}
 