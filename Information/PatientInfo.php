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
    <link rel="stylesheet" href="../css/adminPanel.css">

    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>     
     
    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  
  
  </head>
  <style>
      .container{
    padding: 4px;
   margin-top: 70px; 
   font-style:italic; 
      }  

.table-responsive h2{
    font-size: 50px;
    text-align: center;
    padding-bottom: 15px;
    
}

.btn{
        border-radius: 12px;
        font-size: 20px;
        cursor: pointer;
}


#myInput {
    text-align:center;
    float: right;
  background-position: 10px 12px; /* Position the search icon */
  background-repeat: no-repeat; /* Do not repeat the icon image */
  width: 30%; /* Full-width */
  font-size: 16px; /* Increase font-size */
  padding: 12px 20px 12px 40px; /* Add some padding */
  border: 1px solid #4CAF50;
  margin: 4px 2px;
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
            <span class="links_name">Information / Patient</span>
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
            <span class="dashboard">Information / Patient</span>
          </a>
      </div>
      <div class="profile-details">
          <img src="../images/Rajat.jpg"/>
        <span class="admin_name"><?php echo $_SESSION['username'] ?></span>
        <i class='bx bx-chevron-down' ></i>
      </div>
    </nav>
      
      dob


    
    <div class="container">
		<div class="table-responsive">		
                    <h2><b>Patient </b>Information</h2>
                    <button class="btn btn-warning button1" onclick="window.location='../AInformation.php'" style="padding:10px 20px;">Back</button>
                    <input type="text" id="myInput" onkeyup="myFunction()"  placeholder="Search for Names.." >
                    <a href="Export.php "><button type="button" class="btn btn-success">Export to Excel</button></a>
            
                    <hr/>
            <table class="table table-striped table-hover" id="myTable">
					<thead>
                                            <tr>
                                                
                                                    <th> <input type="checkbox" name="checkbox" onclick="checkbox(this);" ></th>
                                                    <th>ID</th>
                                                    <th>Name</th>
                                                    <th>Mobile</th>
                                                    <th>Email</th>
                                                    <th>City</th>
                                                    <th>Blood Group</th>
                                                    <th>Image</th> 
                                                    <th>Operation</th>
						</tr>
					</thead>
					<tbody >
                                            <?php
                                                $con= mysqli_connect('localhost:3308', 'root','');
                                                mysqli_select_db($con,'rblood');
                                                $q1="select * from patient ORDER BY p_id asc";
                                                $result=mysqli_query($con,$q1);
                                                $num1= mysqli_num_rows($result);
                                                 
                                                
                                            for($i=0;$i<$num1;$i++)
                                            {
                                                $row=mysqli_fetch_array($result);
                                            ?>
                                            <tr>
                                                <td>
                                                    <input type="checkbox" name="checkbox" value="<?php $row['p_email']; ?>" >
                                                </td>
                                                <td><?php echo $row['p_id']; ?></td>
                                                <td><?php echo $row['p_fname']," ",$row['p_lname']; ?></td>
                                                <td><?php echo $row['p_mobile']; ?></td>
                                                <td><?php echo $row['p_email']; ?></td>
                                                <td><?php echo $row['p_city']; ?></td>
                                                <td><?php echo $row['p_bgroup']; ?></td>

                                               <td> <img src="<?php echo $row['p_photo']; ?>"  height="100px" width="100px" alt=""/></td>     
                                                <td>
                                                    <button class="btn btn-info edit"><a href="../update/update_Patient.php?updateid=<?php echo $row['p_id']; ?>" style="text-decoration: none;color:white; "><i class="material-icons">&#xE254;<span>Edit</span></i></a></button>
                                                    <button class="btn btn-danger delete"><a href="../delete/delete_Patient.php?deleteid=<?php echo $row['p_id']; ?>" style="text-decoration: none;color:white;"><i class="material-icons">&#xE872;<span>Delete</span> </i></a></button>
                                                </td>

                                            </tr>
                                            <?php
                                            }
                                            ?>
                                        </tbody>
                                </table>			
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
 


<script>
    function checkbox(source) {
    var checkboxes = document.querySelectorAll('input[type="checkbox"]');
    for (var i = 0; i < checkboxes.length; i++) {
        if (checkboxes[i] != source)
            checkboxes[i].checked = source.checked;
    }
}
</script>

</body>
</html>
<script>
function myFunction() {
  // Declare variables
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");

  // Loop through all table rows, and hide those who don't match the search query
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[2];
    if (td) {
      txtValue = td.textContent || td.innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }
  }
}
</script>


