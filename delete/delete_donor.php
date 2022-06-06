<?php
$con = mysqli_connect('localhost:3308','root','');
mysqli_select_db($con,'rblood');
$deleteid=$_GET['deleteid'];
$sql="delete from donor where d_id = $deleteid";
$result = mysqli_query($con,$sql);
echo '<script> alert("run succe")</script>';
if($result){
    
    header('location:../Information/AdminInfo.php');
}
 else {
    die(mysqli_error($con));    
}

