<!DOCTYPE html>
<html lang="en">
<head>
  <title>Blood Bank</title>
  
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
  <link rel="stylesheet" href="css/header.css">
  <link rel="stylesheet" href="css/login.css">
  
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  
</head> 
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
