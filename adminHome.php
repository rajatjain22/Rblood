<?php session_start(); 
$con = mysqli_connect('localhost:3308','root', "");
mysqli_select_db($con,'rblood');
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/adminPanel.css">

    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
<body>
    <style>

.table1{
    margin-left: auto;
    margin-right: auto;
    font-size: 40px;
    border-spacing: 10px;
    border: 2px solid black;
}
td img{
    height:75px;
    display: flex;
}
th, td {
  border: 2px solid black;
  padding: 15px;
}
tr:hover {background-color: #D6EEEE;}

@media screen and (max-width: 700px) {
  div.content {margin-left: 0;}
}

    </style>
    <div class="sidebar">
    <div class="logo-details">
        <img class="topicon" src="images/blood-donation.png">
      <span class="logo_name">BloodBank</span>
    </div>
      <ul class="nav-links">
        <li>
            <a href="adminHome.php" class="active">
            <i class='bx bx-grid-alt' ></i>
            <span class="links_name">Home</span>
          </a>
        </li>
        <li>
            <a href="Adonor.php">
            <i class='fas fa-stethoscope'></i>
            <span class="links_name">Donor</span>
          </a>
        </li>
        <li>
            <a href="Apatient.php">
            <i class='fas fa-procedures'></i>
            <span class="links_name">Patient</span>
          </a>
        </li>
        <li>
            <a href="ATransport.php">
            <i class='fas fa-ambulance'></i>
            <span class="links_name">Transport</span>
          </a>
        </li>
        <li>
            <a href="AInformation.php">
            <i class="fa fa-pie-chart"></i>
            <span class="links_name">Information</span>
          </a>
        </li>
        <li>
            <a href="AReport.php">
           <i class="fa fa-file-text"></i>
            <span class="links_name">Report</span>
          </a>
        </li>
        <li>
            <a href="Asalary.php">
            <i class='fas fa-rupee-sign'></i>
            <span class="links_name">Salary</span>
          </a>
        </li>
        <li>
            <a href="AStaff.php">
            <i class='fas fa-user-md'></i>
            <span class="links_name">Staff</span>
          </a>
        </li>
        <li>
            <a href="ANewUser.php">
            <i class='fas fa-plus'></i>
            <span class="links_name">Add new user</span>
          </a>
        </li>
        
        <li class="log_out">
          <a href="Logout.php">
            <i class='bx bx-log-out'></i>
            <span class="links_name">Log out</span>
          </a>
        </li>
      </ul>
  </div>
  <section class="home-section">
    <nav>
      <div class="sidebar-button">
        <i class='bx bx-menu sidebarBtn'></i>
        <a href="adminHome.php" style="text-decoration:none;color: black;">
            <span class="dashboard">Home</span>
          </a>
      </div>
      <div class="profile-details">
          <img src="images/Rajat.jpg"/>
          <span class="admin_name"><?php echo $_SESSION['username'] ?></span>
          <i class='bx bx-chevron-down' ></i>
      </div>
    </nav>
     
       <div class="home-content">
           <div class="overview-boxes" style="margin-bottom:0px">
        <div class="box">
          <div class="right-side">
            <div class="box-topic">Total Donor</div>
            <div class="number"><?php $q1="select * from donor ";$result=mysqli_query($con,$q1);$num1= mysqli_num_rows($result); echo $num1; ?></div>
          </div>
            <img src="images/blood_donation.png" style="width:70px;"/>
        </div>
        <div class="box">
          <div class="right-side">
            <div class="box-topic">Total Patient</div>
            <div class="number"><?php $q1="select * from Patient ";$result=mysqli_query($con,$q1);$num1= mysqli_num_rows($result); echo $num1; ?></div>
          </div>
            <img src="images/Patient.png" style="width:80px"/>
        </div>
        <div class="box">
          <div class="right-side">
            <div class="box-topic">Total Request</div>
            <div class="number"><?php $q1="select * from request_blood ";$result=mysqli_query($con,$q1);$num1= mysqli_num_rows($result); echo $num1; ?></div>
          </div>
           <img src="images/blood-drop.png" style="width:60px;"/>
        </div>
        
      </div>
           
      <div class="sales-boxes">
        <div class="recent-sales box">
          <div class="title">BLOOD BANK (Blood Stocks)</div>
          <ul class="details" style="padding:50px;">
                <table class="table1">
                  <tr>
                      <th>blood group</th>
                      <th>+ve</th>
                      <th>-ve</th>
                  </tr>
                  <tr style="margin: 50%">
                      <td><img src="images/blood-type-o.png" /></td>
                      <td><?php $q1="select * from donor where d_bgroup='O +ve'";$result=mysqli_query($con,$q1);$num1= mysqli_num_rows($result); echo $num1; ?></td>
                      <td><?php $q2="select * from donor where d_bgroup='O -ve'";$result=mysqli_query($con,$q2);$num1= mysqli_num_rows($result); echo $num1; ?></td>
                  </tr>
                  <tr>
                      <td><img src="images/blood-type-a.png" /></td>
                      <td><?php $q3="select * from donor where d_bgroup='A +ve'";$result=mysqli_query($con,$q3);$num1= mysqli_num_rows($result); echo $num1; ?></td>
                      <td><?php $q4="select * from donor where d_bgroup='A -ve'";$result=mysqli_query($con,$q4);$num1= mysqli_num_rows($result); echo $num1; ?></td>
                  </tr>
                  <tr>
                      <td><img src="images/blood-type-b.png" /></td>
                      <td><?php $q5="select * from donor where d_bgroup='B +ve'";$result=mysqli_query($con,$q5);$num1= mysqli_num_rows($result); echo $num1; ?></td>
                      <td><?php $q6="select * from donor where d_bgroup='B -ve'";$result=mysqli_query($con,$q6);$num1= mysqli_num_rows($result); echo $num1; ?></td>
                  </tr>
                  <tr>
                      <td><img src="images/blood-type-ab.png" /></td>
                      <td><?php $q7="select * from donor where d_bgroup='AB +ve'";$result=mysqli_query($con,$q7);$num1= mysqli_num_rows($result); echo $num1; ?></td>
                      <td><?php $q8="select * from donor where d_bgroup='AB -ve'";$result=mysqli_query($con,$q8);$num1= mysqli_num_rows($result); echo $num1; ?></td>
                  </tr>
              </table>
            </div>
                  <div class="top-sales box">
            <img src="images/blood groop compati.jpg" style="margin:20px;padding: 20px;width: 100%;height:60%"/>
            
        </div>
      </div>
          
            
  </section>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script>
   let sidebar = document.querySelector(".sidebar");
let sidebarBtn = document.querySelector(".sidebarBtn");
sidebarBtn.onclick = function() {
  sidebar.classList.toggle("active");
  if(sidebar.classList.contains("active")){
  sidebarBtn.classList.replace("bx-menu" ,"bx-menu-alt-right");
}else
  sidebarBtn.classList.replace("bx-menu-alt-right", "bx-menu");
}
 </script>

</body>
</html>

