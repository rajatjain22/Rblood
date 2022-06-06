<?php 
session_start(); 
$con = mysqli_connect('localhost:3308','root', "");
mysqli_select_db($con,'rblood');
$q1="select * from donor";
$result=mysqli_query($con,$q1);
$num1= mysqli_num_rows($result);
mysqli_close($con);
?>
<?php
$con = mysqli_connect('localhost:3308','root','');
mysqli_select_db($con,'rblood');
$updateid = $_GET['updateid'];
$sql = "select * from patient where p_id = '$updateid'";
$res= mysqli_query($con, $sql);
$row1 = mysqli_fetch_assoc($res);
$fname = $row1['p_fname'];
$lname=$row1['p_lname'];
$dob = $row1['p_dob'];
$address = $row1['p_address'];
$state = $row1['p_state'];
$city = $row1['p_city'];
$zip = $row1['p_zip'];
$email = $row1['p_email'];
$mobile = $row1['p_mobile'];
$aadhar = $row1['p_aadhar'];
$attname = $row1['p_attname'];
$bgroup = $row1['p_bgroup'];
$attbgroup = $row1['p_attbgroup'];
$ddate = $row1['p_ddate'];
$dname = $row1['p_dname'];
$gender = $row1['p_gender'];

 if(isset($_POST['submit'])){
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

$q="UPDATE patient set d_fname='$fname',d_lname='$lname',d_dob='$dob',d_address='$address',d_state='$state',d_city='$city',d_zip='$zip',d_email='$email',d_mobile='$mobile',d_aadhar='$aadhar',p_attname='$attname',d_bgroup='$bgroup',p_attbgroup='$attbgroup',p_ddate='$ddate',p_dname='$dname',d_gender='$gender' where d_id=$updateid";
$resu = mysqli_query($con,$q);

if($resu){
header('location:../Information/PatientInfo.php');}
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
    color: darkseagreen;
    text-shadow: -1px 0 black, 0 1px black, 1px 0 black, 0 -1px black; 
    font-size: 40px;   
}
.row{
    padding: 5px; 
    box-shadow: 5px 5px 5px lightblue;
}
.form-group label{
    padding-right:10px;
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
  
  </body>
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
            <span class="links_name">Information/patient/Edit</span>
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
            <span class="dashboard">Information / Patient / Edit</span>
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
              
              <h2>Patient Update</h2>
              
              <div class="row jumbotron">
                  <div class="col-md-6 form-group">
                      <label for="inputname">First Name</label>
                      <input type="text" class="form-control" placeholder="Enter First Name" name="p_fname" value="<?php echo $fname; ?>" required>
                  </div>
                  
                  <div class="col-md-6 form-group">
                      <label for="inputname">Last Name</label>
                      <input type="text" class="form-control" placeholder="Enter Last Name" name="p_lname" value="<?php echo $lname; ?>" required>
                  </div>  
                  
                    <div class="col-md-6 form-group">
                      <label for="inputname">Date of Birth</label>
                      <input type="date" class="form-control" placeholder="Date Of Birth" name="p_dob" value="<?php echo $dob; ?>" required>
                  </div> 
                  
                  <div class="col-md-6 form-group">
                      <label for="inputname">Address</label>
                      <input type="text" class="form-control" placeholder="Enter Address" name="p_address" value="<?php echo $address; ?>" required>
                  </div>
                  
                  <div class="col-md-6 form-group">
                      <label for="inputname">State</label>
                      <input type="text" class="form-control" placeholder="Enter State" name="p_state" value="<?php echo $state; ?>" required>
                  </div> 
                  
                  <div class="col-md-4 form-group">
                      <label for="inputname">City</label>
                      <input type="text" class="form-control" placeholder="Enter City" name="p_city" value="<?php echo $city; ?>" required>
                  </div> 
                  
                  <div class="col-md-2 form-group">
                      <label for="inputname">Zip</label>
                      <input type="text" class="form-control" placeholder="Enter Zip" name="p_zip" value="<?php echo $zip; ?>" required>
                  </div> 
                  
                  <div class="col-md-6 form-group">
                      <label for="email">Email</label>
                      <input type="email" class="form-control" placeholder="Enter Email" name="p_email" value="<?php echo $email; ?>" required>
                  </div>   
                  
                  <div class="col-md-6 form-group">
                      <label for="mobile">Mobile No.</label>
                      <input type="number" class="form-control" placeholder="Enter Mobile Number" name="p_mobile" value="<?php echo $mobile; ?>" required>
                  </div>  
                  
                  <div class="col-md-6 form-group">
                      <label for="aadhar">Aadhar Number</label>
                      <input type="number" class="form-control" placeholder="Enter Aadhar Number" name="p_aadhar" value="<?php echo $aadhar; ?>" required>
                  </div>
                  
                  <div class="col-md-6 form-group">
                      <label for="inputname">Attender Name</label>
                      <input type="text" class="form-control" placeholder="Attender Name" name="p_attname" value="<?php echo $attname; ?>" required>
                  </div>
                  
                  <div class="col-md-6 form-group">
                      <label for="inputname">Patient Blood Group</label>
                      <select class="form-control" name="p_bgroup" value="<?php echo $bgroup; ?>" required><option <?php echo $bgroup; ?></option><option value="O +ve">O +ve</option><option value="O -ve">O -ve</option><option value="A +ve">A +ve</option><option value="A -ve">A - ve</option><option value="B +ve">B +ve</option><option value="B -ve">B -ve</option><option value="AB +ve">AB +ve</option><option value="AB -ve">AB -ve</option></select>
                        </div>
                  
                  <div class="col-md-6 form-group">
                      <label for="inputname">Attender Blood Group</label>
                        <select class="form-control" name="p_attbgroup" value="<?php echo $attbgroup; ?>"><option <?php echo $attbgroup; ?></option><option value="O +ve">O +ve</option><option value="O -ve">O -ve</option><option value="A +ve">A +ve</option><option value="A -ve">A - ve</option><option value="B +ve">B +ve</option><option value="B -ve">B -ve</option><option value="AB +ve">AB +ve</option><option value="AB -ve">AB -ve</option></select>
                        </div>
                  
                  <div class="col-md-6 form-group">
                      <label for="inputname">Date of Donation</label>
                      <input type="date" class="form-control" placeholder="Date Of Donation" name="p_ddate" value="<?php echo $ddate; ?>" required>
                  </div> 
                  
                  <div class="col-md-6 form-group">
                      <label for="inputname">Donor Name</label>
                      <select class="form-control" name="p_dname" value="<?php echo $dname; ?>" required><option <?php echo $dname; ?></option>
                        <option value="from Bank">NA</option>
                            <?php 
                                for($i=1;$i<=$num1;$i++)
                                {
                                    $row=mysqli_fetch_array($result);
                                ?>
                            <option value="<?php echo $row['d_fname']," ",$row['d_lname']; ?>"> <?php echo $row['d_fname']," ",$row['d_lname']; ?> </option>
                            <?php
                            }
                            ?>
                        </select>
                        </div>
                  
                 <div class="col-md-6 form-group" >
                      <label for="inputname">Gender</label>
                   
                      <input type="radio" name="p_gender" value="Male">Male
                 
                      <input type="radio" name="p_gender" value="Female">Female
                     
                      <input type="radio" name="p_gender" value="Other">Other
            
                  </div>
                  
                  <div class="col-md-12 form-group">
                      <button type="submit" class="button button1 col-md-4" name="submit">Update Patient</button>
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

