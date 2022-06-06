<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
         <link rel="stylesheet" href="css/header.css">
  <link rel="stylesheet" href="css/login.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

    </head>
    <style>
        .container{
           
    margin-top: -40px;
   font-style:italic; 
}

.row{
    padding: 5px; 
    
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

        .top-head {
    width: 100%;
    float: left;
    background: #ed1b24;
    padding: 30px 0;
}

.doante {
    padding: 40px 0 5px;   
}
.doante h4 {
    font-size: 22px;
    color: #fff;
    font-weight: bold;
    text-align: right;
}
.bread {
    padding: 40px 0 5px;
}
.bread .breadcrumb {
    background: transparent;
    padding: 0;
    text-align: right;
    margin-bottom: 0;
}
.bread .breadcrumb li a {
    color: #fff;
}

.bread .breadcrumb>.active {
    color: #f9f9f9;
}
.bread .breadcrumb>li+li:before {
    content: "||";
    padding: 0 5px;
    color: #fff;
}
.blood-donote {
    padding: 50px 0 0;
    width: 100%;
    float: left;
}
.left-link {
    background: #f7f7f7;
    border-radius: 5px;
}
.left-link li {
    line-height: 41px;
    border-bottom: 1px solid rgba(204, 204, 204, 0.25);
    padding: 13px 40px;

}
.left-link li a {
    color: #000;
    font-size: 13px;
    font-weight: 500;
}
.left-link li:hover {
    background: #ed1c24;
    cursor: pointer;
}
.left-link li:hover a {
    color: #fff;
}

.left-link li:hover:first-child {
    border-radius: 5px 5px 0 0;
}
.left-link li:hover:last-child {
    border-radius: 0 0 5px 5px;
}
.left-link a i {
    float: right;
    top: 10px;
    position: relative;
    font-size: 15px;
}
.left-image {
    margin: 30px 0;
    height: 100%;
    width: 100%;
    overflow: hidden;
}
.left-image img {
    border-radius: 5px;
}


.right-head h3 {
    margin: 50px 0 30px;
    font-size: 20px;
    font-weight: 500;
}
.left-side {
    padding-left: 0;
}

.right-side h5 {
    font-size: 15px;
    padding: 10px 0 20px;
    font-weight: 500;
}
.right-side ul li {
    font-size: 13px;
    line-height: 22px;
    display: inline-block;
}
.right-side ul li span {
    font-size: 60px;
    color: #ed1c24;
    margin-right: 20px;
}
.right-side {
    border-bottom: 1px solid red;
    padding-bottom: 20px;
    margin-bottom: 37px;
}
.right-side p {
    font-size: 13px;
    color: #777777;
}

.right-side h6 {
    font-size: 14px;
    font-weight: 500;
    padding: 50px 0 10px;
}

.right-side.newui ul li {
    font-size: 13px;
    line-height: 22px;
    display: inline-block;
    width: 45%;
    color: #777777;
}
.right-head {
    margin-left: 50px;
}

    </style>
    <body>
        <?php include 'header.php'; ?>
        <u style="text-align: center;color: #ff3f61"><h1>
  
                WHY GIVE BLOOD</h1></u>
        
        <section class="blood-donote" style=" background: white;">
    <div class="container">
        <div class="row">
            <div class="col-md-12 donote-holder">
                <div class="col-md-4 left-side">
                    
                                        <div class="left-image">
                                            <img src="images/patient.png" class="img-responsive">
                    </div>
                </div>
                <div class="col-md-7 col-md-offset-1 right-head">
                    <h3><b>Who can give blood</b></h3>
<div class="right-side">
<h5>Most people can give blood. You can give blood if you:</h5>
<ul>
<li><span>.</span>Are fit and healthy</li><br/>
<li><span>.</span>Weigh over 7 stone 12 lbs or 50kg</li>
<li><span>.</span>Are aged between 17 and 66 (or 70 if you have given blood before)</li>
<li><span>.</span>Are over 70 and have given blood in the last two years</li>
</ul>
</div>
<div class="right-side">
<h5>How often can I give blood?</h5>
<p>Men can give blood every 12 weeks and women can give blood<span class="brake"></span> every 16 weeks.</p>
</div>
<div class="right-side newui">
<h5>Check you are able to give blood</h5>
<p>If you have an existing medical condition or have a question about your eligibility to give blood you should check the health and travel section before you book an appointment.</p>
<h6>Common eligibility questions include:</h6>
<ul>
<li><span>.</span>Receiving treatment</li>
<li><span>.</span>Taking medication</li>
<li><span>.</span>Travelling outside of the UK</li>
<li><span>.</span>Tattoos</li>
<li><span>.</span>Pregnancy</li>
<li><span>.</span>Illness</li>
<li><span>.</span>Cancer</li>
<li><span>.</span> received blood, blood products</li>
</ul>
</div>
<div class="right-side newui">
<h5>Women under 20 - check if you can give blood</h5>
<p>If you have an existing medical condition or have a question about your eligibility to give blood you should check the health and travel section before you book an appointment.</p>
</div>                </div>
            </div>
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

<?php include 'footer.php'; ?>