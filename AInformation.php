<?php session_start(); 
$con = mysqli_connect('localhost:3308','root', "");
mysqli_select_db($con,'blood');
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
     
    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  
  
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
    width: 70%;
    float: left;
    box-shadow: 5px 5px 5px lightblue;
}
.btn{
        margin: 20px;
        border-radius: 12px;
        font-size: 30px;
        cursor: pointer;
}
  </style>
<body>

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
            <a href="AInformation.php" class="active">
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
            <span class="dashboard">Information</span>
          </a>
      </div>
      <div class="profile-details">
          <img src="images/Rajat.jpg" alt="">
        <span class="admin_name"><?php echo $_SESSION['username'] ?></span>
        <i class='bx bx-chevron-down' ></i>
      </div>
    </nav>
      
      dob

      <div  style="background-color:white;">
      <div class="container">
          <form name="myform">
              
              <h2>Information</h2>
              <center>
              <div class="row jumbotron">
                  <div class="col-md-6 form-group">
                      <button type="button" class="col-md-12 btn btn-primary"><a href="Information/DonorInfo.php" style="text-decoration: none;color: white">Donor</a></button>
                    </div>
                  
                  <div class="col-md-6 form-group">
                      <button type="button" class="col-md-12 btn btn-danger"><a href="Information/PatientInfo.php" style="text-decoration: none;color: white">Patient</a></button>
                  </div>
                  
                  <div class="col-md-6 form-group">
                      <button type="button" class="col-md-12 btn btn-warning"><a href="Information/requestInfo.php" style="text-decoration: none;color: white">Blood Request</a></button>
                    </div>
                  
                  <div class="col-md-6 form-group">
                  <button type="button" class=" col-md-12 btn btn-success">Salary</button>
                  </div>
                  
                  <div class="col-md-6 form-group">
                      <button type="button" class="col-md-12 btn btn-dark" onclick="">Staff</button>
                  </div>

                    
                    <div class="col-md-6 form-group">
                        <button type="button" class="col-md-12 btn btn-info"><a href="Information/AdminInfo.php" style="text-decoration: none;color: white">Admin</a></button>
                    </div>
                  
                  </center>
                
          </form>
          </div>
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

