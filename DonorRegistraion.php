<!DOCTYPE html>
<html lang="en">
<head>
  <title>Blood Bank</title>
  
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
  <link rel="stylesheet" href="css/header.css">
  <link rel="stylesheet" href="css/login.css">
  
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

  
</head>

  <style>
.container{
    margin-top: -40px;
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
    
    <header>
        <img src="images/Top.png" class="top">
    <h4 style="color:#ff1c52; font-weight: bolder;">Blood Bank Management System</h4>
    <p> Give Blood save Life</p>
    </header>
    
    <nav class="navbar navbar-inverse" style="margin-bottom:3px;">
  <div class="container-fluid">
    <div class="navbar-header">
        <img class="Logo" src="images\Icon.png" >
    </div>
     <ul class="nav navbar-nav" id="ul">
         <li><a  href="index.php">Home</a></li>
      <li><a href="#" >gallary</a></li>
      <li><a href="DonorRegistraion.php" >Donor Ragister</a></li>
      <li><a href="bloodRequest.php" >Blood Request</a></li>
      <li><a href="#">Donation</a></li>
      <li><a href="contact us.php" >Contact us</a></li>
    </ul>
      <button class="btn btn-danger navbar-btn" id="login" onclick="openForm()"> Login / SignIN</button>
  </div>
</nav>
    
    <section class="home-section"style="margin-top:25px">
      <div  style="background-color:white;">
      <div class="container">
          <form name="myform">
              
              <h2>Donor Registration</h2>
              
              <div class="row jumbotron">
                  <div class="col-md-6 form-group">
                      <label for="inputname">First Name</label>
                      <input type="text" class="form-control" placeholder="Enter First Name">
                  </div>  
                  
                  <div class="col-md-6 form-group">
                      <label for="inputname">Last Name</label>
                      <input type="text" class="form-control" placeholder="Enter Last Name">
                  </div>   
                  
                    
                  <div class="col-md-6 form-group">
                      <label for="inputname">Date of Birth</label>
                      <input type="date" class="form-control" placeholder="Date Of Birth">
                  </div>
                  
                  <div class="col-md-6 form-group">
                      <label for="inputname">Address</label>
                      <input type="text" class="form-control" placeholder="Enter Address">
                  </div>
                  
                  <div class="col-md-6 form-group">
                      <label for="inputname">State</label>
                      <input type="text" class="form-control" placeholder="Enter State">
                  </div> 
                  
                  <div class="col-md-4 form-group">
                      <label for="inputname">City</label>
                      <input type="text" class="form-control" placeholder="Enter City">
                  </div> 
                  
                  <div class="col-md-2 form-group">
                      <label for="inputname">Zip</label>
                      <input type="text" class="form-control" placeholder="Enter Zip">
                  </div> 
                  
                  <div class="col-md-6 form-group">
                      <label for="email">Email</label>
                      <input type="email" class="form-control" placeholder="Enter Email">
                  </div>   
                  
                  <div class="col-md-6 form-group">
                      <label for="mobile">Mobile No.</label>
                      <input type="number" class="form-control" placeholder="Enter Mobile Number">
                  </div> 
                  
                  <div class="col-md-6 form-group">
                      <label for="aadhar">Aadhar Number</label>
                      <input type="number" class="form-control" placeholder="Enter Aadhar Number">
                  </div>
                  
                  <div class="col-md-6 form-group">
                      <label for="inputname">Last Time Donation</label>
                      <input type="date" class="form-control" placeholder="Last Time Donate Blood">
                  </div>
                  
                  <div class="col-md-6 form-group">
                      <label for="inputname">Donor Blood Group</label>
                        <select class="form-control" name="p_bgroup"><option value=" " disabled selected hidden>--Select--</option><option value="O +ve">O +ve</option><option value="O -ve">O -ve</option><option value="A +ve">A +ve</option><option value="A -ve">A - ve</option><option value="B +ve">B +ve</option><option value="B -ve">B -ve</option><option value="AB +ve">AB +ve</option><option value="AB -ve">AB -ve</option></select>
                        </div>
                  
                  <div class="col-md-6 form-group">
                      <label for="Count">Donation Count</label>
                      <input type="number" class="form-control" placeholder="Donation Count">
                  </div> 
                  
                  <div class="col-md-6 form-group radio-inline" >
                      <label for="inputname">Gender</label>
                      <label class="radio-inline">
                        <input type="radio" name="optradio" checked>Male
                      </label>
                      <label class="radio-inline">
                        <input type="radio" name="optradio">Female
                      </label>
                      <label class="radio-inline">
                        <input type="radio" name="optradio">Other
                      </label>
                  </div>
                  
                    <div class="col-md-6 form-group">
                      <input type="file" name="d_photo"  required>
                    </div>
                  
                  <div class="col-md-12 form-group">
                  <button type="submit" class="button button1 col-md-4">Add Donor</button>
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

<div class="loginPopup">
      <div class="formPopup" id="popupForm">
        <form action="DB/login.php" method="post" class="formContainer">
          <h1>Please Log in</h1>
          <label for="email">
            <strong>E-mail</strong>
          </label>
          <input type="text" id="email" placeholder="Your Email or Username" name="email" required>
          <label for="psw">
            <strong>Password</strong>
          </label>
          <input type="password" id="psw" placeholder="Your Password" name="pswd" required>
          <button type="submit" class="btn">Log in</button>
          <button type="button" class="btn cancel" onclick="closeForm()">Close</button>
        </form>
      </div>
    </div>

</body>
</html>
<script>
          function openForm() {
        document.getElementById("popupForm").style.display = "block";
      }
      function closeForm() {
        document.getElementById("popupForm").style.display = "none";
      }

</script>
