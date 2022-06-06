<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
   
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>     
     
    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
  <link rel="stylesheet" href="css/header.css">
  <link rel="stylesheet" href="css/login.css">
  
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  
        <title></title>
    </head>
    <body>
        
<style>
    @import url(//fonts.googleapis.com/css?family=Montserrat:300,400,500);

    body { 
        background: #f6f8f9;
        margin-top: 5px
    }
    .contact-bg {
    background: #fff; 
    box-shadow: 0 0 29px #efeded; 
    padding: 40px; 
    }
    .contact-bg h4 { 
    margin-bottom: 15px;
    }
    form label { 
    margin-top: 15px;     
    margin-bottom: 0px;
    } 
    .form-control { 
    border-radius: 0px;
    }
    .btn-primary { 
    border-radius: 0px; 
    font-weight: 500;
    }
    .quick-contact-widget span { 
    display: block; 
    margin-bottom: 10px; 
    font-size: 15px; 
    line-height: 2; 
    display: table; 
    clear: both; 
    }
    .quick-contact-widget span i { 
    font-size: 14px; 
    padding-right: 10px; 
    color: #222; 
    border: 1px solid #ddd;   
    display: inline-block; 
    text-align: center; 
    padding: 12px; 
    height: 40px; 
    width: 40px; 
    margin-right: 10px; 
    border-radius: 100%; 
    float: left;
    }
    .white-bg { 
    background: #fff; 
    }
</style>
      
<?php include 'header.php'; ?>

<div class="container" style="margin-top:25px;">
       <div class="row mt-5">
           <div class="col-sm-6 col-md-6">
               <div class="contact-bg">
                   <h4 style="font-size:40px;font-weight:bolder">Contact Us</h4>
                   <form action="">
                       <label for="name">Name</label>
                       <input id="name" type="text" name="" id="" class="form-control">
                       <label for="email">Email</label>
                       <input id="email" type="text" name="" id="" class="form-control">
                       <label for="mobile">Mobile</label>
                       <input id="mobile" type="text" name="" id="" class="form-control">
                       <label for="message">Message</label>
                       <textarea name="" id="message" cols="30" rows="5" class="form-control"></textarea>
                       <button class="mt-2 btn btn-primary">Send Message</button>
                   </form>
               
               </div>
           </div>
           <div class="col-sm-6 col-md-6">
                   <div class="contact-bg">
                         <h4>Quick Contact</h4>
                         <div class="quick-contact-widget"> 
                               <span><i class="fa fa-phone" aria-hidden="true"></i>6265176404, 9826639872</span>
                               <span><i class="fa fa-envelope" aria-hidden="true"></i>jainr6000@gmail.com</span>
                               <span><i class="fa fa-map-marker"></i> 121 maharani laxmi bai choraha,
                                   Sanjeet Naka, Mandsaur </span>
                           </div>
                       </div>
                       <div class="p-2 white-bg mt-3">
                               <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3642.531035952881!2d75.07134393572082!3d24.082813842692346!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39642c0e5f104f8b%3A0x5c0f0bb771139aa0!2sSanjit%20Naka%20Geeta%20Bhawan%20Rd%2C%20Kothari%20Colony%2C%20Patel%20Nagar%2C%20Mandsaur%2C%20Madhya%20Pradesh%2C%20India!5e0!3m2!1sen!2sro!4v1652642508429!5m2!1sen!2sro" width="100%" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                       </div>
           </div>
       </div>
   </div>

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
