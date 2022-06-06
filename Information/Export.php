<?php
$con= mysqli_connect('localhost:3308', 'root','');
mysqli_select_db($con,'rblood');
$q1="select * from admin ORDER BY a_id asc";
$result=mysqli_query($con,$q1);
$excel='<table><tr><td>ID</td><td>NAME</td><td>MOBILE</td><td>EMAIL</td><td>CITY</td><td>BLOOD GROUP</td></tr>';
while ($row=mysqli_fetch_array($result))
        {
        $excel.='<tr><td>'. $row['a_id']. '</td><td>'.$row['a_fname'].'</td><td>' .$row['a_mobile']. '</td><td>'.$row['a_email'].'</td><td>'.$row['a_city'].'</td><td>'.$row['a_bgroup'].'</td></tr>';
        }
$excel.='</table>';
header('content-type:application/xls');
header('content-Disposition:attachment; filename=AdminInformation.xls');
echo $excel;
?>