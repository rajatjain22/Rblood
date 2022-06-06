<?php
$con = mysqli_connect('localhost:3308','root','');
mysqli_select_db($con,'rblood');
$fname = $_POST['p_fname'];
$lname=$_POST['p_lname'];
$dob = $_POST['p_dob'];
$address = $_POST['p_address'];
$state = $_POST['p_state'];
$city = $_POST['p_city'];
$zip = $_POST['p_zip'];
$email = $_POST['p_email'];
$mobile = $_POST['p_mobile'];
$aadhar = $_POST['p_aadhar'];
$attname = $_POST['p_attname'];
$bgroup = $_POST['p_bgroup'];
$attbgroup = $_POST['p_attbgroup'];
$ddate = $_POST['p_ddate'];
$dname = $_POST['p_dname'];
$gender = $_POST['p_gender'];

 $image_name = $_FILES['p_photo']['name'];
 $image_tmp_name= $_FILES['p_photo']['tmp_name'];
 $image_path='../DB/Patient/'.$image_name;
 move_uploaded_file($image_tmp_name,$image_path);
 
$q="insert into patient (p_fname,p_lname,p_dob,p_address,p_state,p_city,p_zip,p_email,p_mobile,p_aadhar,p_attname,p_bgroup,p_attbgroup,p_ddate,p_dname,p_gender,p_photo)values('$fname','$lname','$dob','$address','$state','$city','$zip','$email','$mobile','$aadhar','$attname','$bgroup','$attbgroup','$ddate','$dname','$gender','$image_path');";
$result = mysqli_query($con,$q);

if($result){
header('location:http://localhost/Rblood/Apatient.php');}
else
{   echo 'operation failed';
    header('location:http://localhost/Rblood/adminHome.php');}
  