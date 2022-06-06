<?php
session_start();
$con = mysqli_connect('localhost:3308','root','');
mysqli_select_db($con,'rblood');
$updateid = $_GET['updateid'];
$sql = "select * from donor where d_id = '$updateid'";
$res= mysqli_query($con, $sql);
$row = mysqli_fetch_assoc($res);
$fname = $row['d_fname'];
$lname=$row['d_lname'];
$dob = $row['d_dob'];
$address = $row['d_address'];
$state = $row['d_state'];
$city = $row['d_city'];
$zip = $row['d_zip'];
$email = $row['d_email'];
$mobile = $row['d_mobile'];
$aadhar = $row['d_aadhar'];
$ltd = $row['d_ltd'];
$bgroup = $row['d_bgroup'];
$dcount = $row['d_dcount'];
$gender = $row['d_gender'];



 if(isset($_POST['submit'])){
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

$q="UPDATE donor set d_fname='$fname',d_lname='$lname',d_dob='$dob',d_address='$address',d_state='$state',d_city='$city',d_zip='$zip',d_email='$email',d_mobile='$mobile',d_aadhar='$aadhar',d_ltd='$ltd',d_bgroup='$bgroup',d_dcount='$dcount',d_gender='$gender' where d_id=$updateid";
$result = mysqli_query($con,$q);

if($result){
header('location:../Information/DonorInfo.php');}
else
{   die(mysqli_error($con));}
 }
 ?>


<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/adminPanel.css">

    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>     
     
  </head>
  <style>
.container{
    padding: 5px;
   margin-top: 70px; 
   font-style:italic; 
}
form h2{
    color: coral;
    text-shadow: -1px 0 black, 0 1px black, 1px 0 black, 0 -1px black; 
    font-size: 40px 
}
.row{
    padding: 5px; 
    box-shadow: 5px 5px 5px lightblue;
}


  .button {
        border: none;
        border-radius: 12px;
        color: white;
        padding: 15px 30px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 16px;
        margin-left: 20px;
        cursor: pointer;
        -webkit-transition-duration: 0.4s; /* Safari */
        transition-duration: 0.4s;
   }

  .button1:hover {
            background-color: white; 
            color: black; 
            border: 2px solid #4CAF50;
     }

.button1 {
  background-color: #4CAF50;
  color: white;
}

.button2:hover {
  background-color: white; 
  color: black; 
  border: 2px solid #008CBA;
}

.button2 {
  background-color: #008CBA;
  color: white;
}

.button3:hover {
  background-color: white; 
  color: black; 
  border: 2px solid #f44336;
}

.button3 {
  background-color: #f44336;
  color: white;
}

.radio-inline{
    padding-left: 10px;
}

input::-webkit-outer-spin-button,
input::-webkit-inner-spin-button {
  -webkit-appearance: none;
  margin: 0;
}

/* Firefox */
input[type=number] {
  -moz-appearance: textfield;
}
  </style>
  
<body>
  <div class="sidebar">
    <div class="logo-details">
        <img class="topicon" src="../images/blood-donation.png">
      <span class="logo_name">BloodBank</span>
    </div>
      <ul class="nav-links">
        <li>
            <a href="../adminHome.php">
            <i class='bx bx-grid-alt' ></i>
            <span class="links_name">Home</span>
          </a>
        </li>
        <li>
            <a href="../Adonor.php">
            <i class='fas fa-stethoscope'></i>
            <span class="links_name">Donor</span>
          </a>
        </li>
        <li>
            <a href="../Apatient.php">
            <i class='fas fa-procedures'></i>
            <span class="links_name">Patient</span>
          </a>
        </li>
        <li>
            <a href="../ATransport.php">
            <i class='fas fa-ambulance'></i>
            <span class="links_name">Transport</span>
          </a>
        </li>
        <li>
            <a href="../AInformation.php" class="active">
            <i class="fa fa-pie-chart"></i>
            <span class="links_name">Information/Donor/Edit</span>
          </a>
        </li>
        <li>
            <a href="../AReport.php">
           <i class="fa fa-file-text"></i>
            <span class="links_name">Report</span>
          </a>
        </li>
        <li>
            <a href="../Asalary.php">
            <i class='fas fa-rupee-sign'></i>
            <span class="links_name">Salary</span>
          </a>
        </li>
        <li>
            <a href="../AStaff.php">
            <i class='fas fa-user-md'></i>
            <span class="links_name">Staff</span>
          </a>
        </li>
        <li>
            <a href="../ANewUser.php">
            <i class='fas fa-plus'></i>
            <span class="links_name">Add new user</span>
          </a>
        </li>
        
        <li class="log_out">
          <a href="../Logout.php">
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
            <span class="dashboard">Information / Donor / Edit</span>
          </a>
      </div>
      <div class="profile-details">
         <img src="images/Rajat.jpg"/>
        <span class="admin_name"><?php echo $_SESSION['username'] ?></span>
        <i class='bx bx-chevron-down' ></i>
      </div>
    </nav>
      
      dob

      <div  style="background-color:white;">
      <div class="container">
          <form method="post">
              
              <h2>Donor Update</h2>
              
              <div class="row jumbotron">
                  <div class="col-md-6 form-group">
                      <label for="inputname">First Name</label>
                      <input type="text" class="form-control" placeholder="Enter First Name" name="d_fname" value="<?php echo $fname; ?>" required>
                  </div>  
                  
                  <div class="col-md-6 form-group">
                      <label for="inputname">Last Name</label>
                      <input type="text" class="form-control" placeholder="Enter Last Name" name="d_lname" value="<?php echo $lname; ?>" required>
                  </div>   
                  
                    
                  <div class="col-md-6 form-group">
                      <label for="inputname">Date of Birth</label>
                      <input type="date" class="form-control" placeholder="Date Of Birth" name="d_dob" value="<?php echo $dob; ?>" required>
                  </div>
                  
                  <div class="col-md-6 form-group">
                      <label for="inputname">Address</label>
                      <input type="text" class="form-control" placeholder="Enter Address" name="d_address" value="<?php echo $address; ?>" required>
                  </div>
                  
                  <div class="col-md-6 form-group">
                      <label for="inputname">State</label>
                      <input type="text" class="form-control" placeholder="Enter State" name="d_state" value="<?php echo $state; ?>" required>
                  </div> 
                  
                  <div class="col-md-4 form-group">
                      <label for="inputname">City</label>
                      <input type="text" class="form-control" placeholder="Enter City" name="d_city" value="<?php echo $city; ?>" required>
                  </div> 
                  
                  <div class="col-md-2 form-group">
                      <label for="inputname">Zip</label>
                      <input type="text" class="form-control" placeholder="Enter Zip" name="d_zip" value="<?php echo $zip; ?>" required>
                  </div> 
                  
                  <div class="col-md-6 form-group">
                      <label for="email">Email</label>
                      <input type="email" class="form-control" placeholder="Enter Email" name="d_email" value="<?php echo $email; ?>" required>
                  </div>   
                  
                  <div class="col-md-6 form-group">
                      <label for="mobile">Mobile No.</label>
                      <input type="number" class="form-control" placeholder="Enter Mobile Number" name="d_mobile" value="<?php echo $mobile; ?>" required>
                  </div> 
                  
                  <div class="col-md-6 form-group">
                      <label for="aadhar">Aadhar Number</label>
                      <input type="number" class="form-control" placeholder="Enter Aadhar Number" name="d_aadhar" value="<?php echo $aadhar; ?>" required>
                  </div>
                  
                  <div class="col-md-6 form-group">
                      <label for="inputname">Last Time Donation</label>
                      <input type="date" class="form-control" placeholder="Last Time Donate Blood" name="d_ltd" value="<?php echo $ltd; ?>" required>
                  </div>
                  
                  <div class="col-md-6 form-group">
                      <label for="inputname">Donor Blood Group</label>
                      <select class="form-control" name="d_bgroup" value="<?php echo $bgroup; ?>" required><option <?php echo $bgroup ?></option><option value="O +ve">O +ve</option><option value="O -ve">O -ve</option><option value="A +ve">A +ve</option><option value="A -ve">A - ve</option><option value="B +ve">B +ve</option><option value="B -ve">B -ve</option><option value="AB +ve">AB +ve</option><option value="AB -ve">AB -ve</option></select>
                        </div>
                  
                  <div class="col-md-6 form-group">
                      <label for="Count">Donation Count</label>
                      <input type="number" class="form-control" placeholder="Donation Count" name="d_dcount" value="<?php echo $dcount; ?>" required>
                  </div> 
                  
                  <div class="col-md-6 form-group" >
                      <label for="inputname">Gender</label>
                   
                      <input type="radio" name="d_gender" value="Male">Male
                 
                      <input type="radio" name="d_gender" value="Female">Female
                     
                      <input type="radio" name="d_gender" value="Other">Other
            
                  </div>
                  
                  <div class="col-md-12 form-group">
                      <button type="submit" class="button button1 col-md-4" name="submit">Update Donor</button>
                  <button type="reset" class="button button2 col-md-4">Clear</button>
                  <button type="submit" class="button button3 col-md-3" value="Cancel" formaction="http://localhost/Rblood/Information/DonorInfo.php">Cancel</button>
                  </div>
                </div>
          </form>
      </div>
      </div>
  </section>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  
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



