<?php session_start(); 
$con = mysqli_connect('localhost:3308','root', "");
mysqli_select_db($con,'rblood');
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/adminPanel.css">

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
    color: darkorchid;
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
        <img class="topicon" src="images/blood-donation.png">
      <span class="logo_name">BloodBank</span>
    </div>
      <ul class="nav-links">
        <li>
            <a href="adminHome.php">
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
            <a href="ANewUser.php" class="active">
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
            <span class="dashboard">Add New User</span>
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
          <form name="myform" action="DB/Admin.php" method="post" enctype="multipart/form-data">
              
              <h2>Add New User</h2>
              
              <div class="row jumbotron">
                  <div class="col-md-6 form-group">
                      <label for="inputname">First Name</label>
                      <input type="text" class="form-control" placeholder="Enter First Name" name="a_fname" required>
                  </div>
                  
                  <div class="col-md-6 form-group">
                      <label for="inputname">Last Name</label>
                      <input type="text" class="form-control" placeholder="Enter Last Name" name="a_lname" required>
                  </div>   
                  
                  <div class="col-md-6 form-group">
                      <label for="inputname">UserName</label>
                      <input type="text" class="form-control" placeholder="Enter User Name" name="a_username" required>
                  </div>    
                  
                  <div class="col-md-6 form-group">
                      <label for="inputname">Address</label>
                      <input type="text" class="form-control" placeholder="Enter Address" name="a_address" required>
                  </div>
                  
                  <div class="col-md-6 form-group">
                      <label for="inputname">State</label>
                      <input type="text" class="form-control" placeholder="Enter State" name="a_state" required>
                  </div> 
                  
                  <div class="col-md-4 form-group">
                      <label for="inputname">City</label>
                      <input type="text" class="form-control" placeholder="Enter City" name="a_city" required>
                  </div> 
                  
                  <div class="col-md-2 form-group">
                      <label for="inputname">Zip</label>
                      <input type="text" class="form-control" placeholder="Enter Zip" name="a_zip" required>
                  </div> 
                  
                  <div class="col-md-6 form-group">
                      <label for="email">Email</label>
                      <input type="email" class="form-control" placeholder="Enter Email" name="a_email" required>
                  </div>   
                  
                  <div class="col-md-6 form-group">
                      <label for="mobile">Mobile No.</label>
                      <input type="number" class="form-control" placeholder="Enter Mobile Number" name="a_mobile" required>
                  </div>  
                  
                  <div class="col-md-6 form-group">
                      <label for="aadhar">Aadhar Number</label>
                      <input type="number" class="form-control" placeholder="Enter Aadhar Number" name="a_aadhar" required>
                  </div>
                  
                  <div class="col-md-6 form-group">
                      <label for="psw">Password</label>
                      <input type="password" class="form-control" placeholder="Enter Password"name="a_password" required>
                  </div>
                  
                   <div class="col-md-6 form-group">
                      <label for="inputname">Blood Group</label>
                      <select class="form-control" name="a_bgroup" required><option value=" " disabled selected hidden>--Select--</option><option value="O +ve">O +ve</option><option value="O -ve">O -ve</option><option value="A +ve">A +ve</option><option value="A -ve">A - ve</option><option value="B +ve">B +ve</option><option value="B -ve">B -ve</option><option value="AB +ve">AB +ve</option><option value="AB -ve">AB -ve</option></select>
                        </div>
                  
                  <div class="col-md-6 form-group">
                      <label for="psw">Confirm Password</label>
                      <input type="password" class="form-control" placeholder="Enter Confirm Password" name="a_cpassword" required>
                  </div>
                  
                  <div class="col-md-6 form-group" >
                      <label for="inputname">Gender</label>
                   
                      <input type="radio" name="a_gender" value="Male">Male
                 
                      <input type="radio" name="a_gender" value="Female">Female
                     
                      <input type="radio" name="a_gender" value="Other">Other
            
                  </div>
                  
                    <div class="col-md-6 form-group">
                      <input type="file" name="a_photo"  required>
                    </div>
                  
                  <div class="col-md-12 form-group">
                      <button type="submit" class="button button1 col-md-4" name="submit">Add New USer</button>
                  <button type="reset" class="button button2 col-md-4">Clear</button>
                  <button type="submit" class="button button3 col-md-3" value="Cancel" onclick="window.location='adminHome.php'">Cancel</button>
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

