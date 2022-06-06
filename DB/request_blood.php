<?php
$con = mysqli_connect('localhost:3308','root','');
mysqli_select_db($con,'rblood');
$fname = $_POST['r_fname'];
$lname=$_POST['r_lname'];
$address=$_POST['r_address'];
$state = $_POST['r_state'];
$city = $_POST['r_city'];
$mobile = $_POST['r_mobile'];
$aadhar = $_POST['r_aadhar'];
$bgroup = $_POST['r_bgroup'];
$rdate = $_POST['r_rdate'];
$gender = $_POST['r_gender'];


 $image_name = $_FILES['r_photo']['name'];
 $image_tmp_name= $_FILES['r_photo']['tmp_name'];
 $image_path='../DB/request_blood/'.$image_name;
 move_uploaded_file($image_tmp_name,$image_path);
 
 
$q="insert into request_blood(r_fname,r_lname,r_address,r_state,r_city,r_mobile,r_aadhar,r_bgroup,r_rdate,r_gender,r_photo)values('$fname','$lname','$address','$state','$city','$mobile','$aadhar','$bgroup','$rdate','$gender','$image_path');";
$result = mysqli_query($con,$q);

if($result){
header('location:http://localhost/Rblood/bloodrequest.php');}
else
{   echo 'operation failed';
    header('location:http://localhost/Rblood/index.php');}
 