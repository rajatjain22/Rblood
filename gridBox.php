

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Blood Bank </title>
<body>  
    
<style>
/* ---------------- Section content-area ---------------- */

.why-bold {
    padding: 50px;
    margin: 0 auto;
    text-align: center;
}
.why-bold {
    padding: 50px;
    margin: 0 auto;
    text-align: center;
}
.content-area {
    background: #fff;
    position: relative;
}
.red-bg {
    width: 65%;
    background: #28292c;                                                            /* yha pr hai wo */
    position: absolute;
    height: 100%;
    border-radius: 0 0 15px;
}
.why-bold h4 {
    color: #fff;
    padding: 20px 0;
    text-align: center;
    font-weight: bold;
    font-size: 22px;
    margin-bottom: 10px;
}
.right-line {
    border-right: 2px solid rgba(0, 0, 0, 0.06);
}
.why-bold a {
    background: #000;
    color: #fff;
    padding: 14px 45px;
    border-radius: 4px;
    margin: 10px 0;
    text-transform: uppercase;
    font-weight: bold;
    font-size: 11px;
    box-shadow: 0px 26px 51px 0px rgba(0, 0, 0, 0.22);
}
.why-bold:hover a {
    background: #ffca08;
    color: #000;
    cursor: pointer;
}
.right-line.active a{
    background: #ffca08;
    color: #000;
    cursor: pointer;
}
.white-holder h4 {
    color: #000;
}
.why-bold:hover{
    cursor: pointer;   
}

/* ---------------- tip-section ---------------- */

.tip-section {
    padding: 100px 0 50px;
}
.tips {
    padding: 20px 30px 0;
    cursor: pointer;
    border-radius: 6px;
    margin-bottom: 20px;
}
.tips:hover
{
     box-shadow: 0px 6px 16px 0px rgba(0, 0, 0, 0.13);
}
.tips.active {
    box-shadow: 0px 6px 16px 0px rgba(0, 0, 0, 0.13);
}
.tips img {
    width: 50px;
    max-width: 50px
}
.tips h4 {
    font-size: 16px;
    padding: 30px 0;
    font-weight: bold;
}
span.break {
    display: block;
    line-height: 25px;
}
ul.pulright {
    float: right;
}
.blood-group {
    padding: 80px;
    background: #fbfafa;
    padding-bottom: 30px;
    height: 421px;
    overflow-y: auto;
}
.blood-group h4 {
    font-size: 18px;
    font-weight: 600;
    display: inline-block;
    margin-bottom: 30px;
}
.blood-group a {
    color: #ccc;
    font-size: 13px;
}
.blood-tst {
    padding-left: 0;
}
.blood-symbol {
    float: right;
    text-align: right;
}
.blood-symbol h3 {
    font-weight: bold;
    color: #dd352e;
    font-size: 18px;
}
.blood-tst h5 {
font-size: 14px;
    font-weight: 600;
    line-height: 22px;
}
.blood-tst h5 span {
    font-size: 13px;
    font-weight: 400;
}
.group-main {
    display: block;
    margin-bottom: 20px;
    float: left;
    width: 100%;
}

/* ---------------- add-section ---------------- */

.add-bg{
    background: rgba(40, 41, 44, 0.94) url(../images/add-bg.png) no-repeat;
    background-position: center center;
    background-size: cover;
    padding: 50px;
    border-radius: 15px;
    width: 100%;
    float: left;
    box-shadow: 0px 26px 51px 0px rgba(0, 0, 0, 0.22);
}
.add-bg{
    background-attachment: fixed;
}
.add {
    padding: 0 0 50px;
}
.add-bg h4 {
    text-shadow: 0px 2px 0px rgba(0, 0, 0, 0.22);
    color: rgb(255, 255, 255);
    font-size: 22px;
    font-weight: bold;
    margin-top: 10px;
}
.add-bg p {
    text-shadow: 0px 2px 0px rgba(0, 0, 0, 0.22);
    color: rgb(255, 255, 255);
    font-size: 14px;
}
.align {
    margin: 0 auto;
    text-align: center;
    float: none;
}
.tip-holder {
    padding-left: 0;
}

</style>

<section class="content-area">
     <div class="red-bg"></div>
     <div class="container">
        <div class="row">
           <div class="col-md-4 col-sm-4 col-xs-12 why-bold right-line">
              <img src="images/icon1.png">
              <h4>WHY GIVE BLOOD</h4>
              <a href="WhyGiveBlood.php">read more</a>
           </div>
           <div class="col-md-4 col-sm-4 col-xs-12 why-bold">
              <img src="images/icon1.png">
              <h4>BLOOD DONATE</h4>
              <a href="HowToDonateBlood.php">read more</a>
           </div>
           <div class="col-md-4 col-sm-4 col-xs-12  why-bold white-holder">
              <img src="images/icon2.png">
              <h4>FIND A DONOR</h4>
              <a href="#">Find</a>
           </div>
        </div>
     </div>
 </section>
    
    
<section class="tip-section">
    <div class="container">
       <div class="col-md-6 col-sm-12  tip-holder">
          <div class="col-md-6 col-sm-6 tips">
             <a href="https://indianbloodbank.com/blood-donate">
                <img src="images/tip-icon.png" data-src="images/tip-icon.png" data-gif="images/why.gif" class="img-responsive tip_icon_img" /> 
                <h4>Who Can Give<span class="break"> Blood?</span></h4>
             </a>
          </div>
          <div class="col-md-6 col-sm-6 tips">
             <a href="https://indianbloodbank.com/donor-search">
                <img src="images/tip-icon2.png" data-src="images/tip-icon2.png" data-gif="images/tips.gif" class="img-responsive tip_icon_img" />
                <h4>Search<span class="break"> Donors</span></h4>
             </a>
          </div>
          <div class="col-md-6 col-sm-6 tips">
             <a href="https://indianbloodbank.com/blood-bank">
                <img src="images/tip-icon3.png" data-src="images/tip-icon3.png" data-gif="images/bank.gif" class="img-responsive tip_icon_img" />
                <h4>List Of<span class="break"> Blood Bank</span></h4>
             </a>
          </div>
          <div class="col-md-6 col-sm-6 tips">
             <a href="https://indianbloodbank.com/health-considarations">
                <img src="images/tip-icon1.png" data-src="images/tip-icon1.png" data-gif="images/donate.gif" class="img-responsive tip_icon_img" />
                <h4>Tips On<span class="break"> Blood Donation</span></h4>
             </a>
          </div>
       </div>
        
       

                      <div class="col-md-6 col-sm-12  blood-group">
             <h4>Recent Blood Requests</h4>
             <a href="request_viewAll.php" class="view pull-right">View All</a>
            
                                            <?php
                                                $con= mysqli_connect('localhost:3308', 'root','');
                                                mysqli_select_db($con,'rblood');
                                                $q1="select * from request_blood ORDER BY r_id desc";
                                                $result=mysqli_query($con,$q1);
                                                $num1= mysqli_num_rows($result);
                                                 
                                                
                                            for($i=0;$i<4;$i++)
                                            {
                                                $row=mysqli_fetch_array($result);
                                            ?>

                                  <div class="group-main">
                   <div class="col-md-8 col-sm-8 col-xs-8 blood-tst">
                       <h5><b> <?php echo $row['r_fname']," ",$row['r_lname']; ?></b><span class="brake">
                         <?php echo $row['r_city']; ?></span>
                      </h5>
                   </div>
                   <div class="col-md-4 col-sm-4 col-xs-4 blood-symbol">
                      <h3><?php echo $row['r_bgroup']; ?></h3>
                   </div>
                </div>
            <?php
                }
                ?>	
                </div>
                            </div>
                </div>
 </section>
    
    
<section class="add">
     <div class="container">
        <div class="add-bg">
           <div class="col-md-12 align">
              <div class="col-md-4 col-sm-4 col-xs-12">
                 <div class="col-md-3">
                    <img src="images/add-icon.png">
                 </div>
                                      <div class="col-md-6">
                    <h4><?php $q1="select * from donor ";$result=mysqli_query($con,$q1);$num1= mysqli_num_rows($result); echo $num1; ?></h4>
                    <p>blood doners</p>
                 </div>
              </div>
              <div class="col-md-4 col-sm-4 col-xs-12">
                 <div class="col-md-3">
                    <img src="images/add-icon1.png">
                 </div>
                 <div class="col-md-6">
                    <h4> <?php $q1="select * from request_blood ";$result=mysqli_query($con,$q1);$num1= mysqli_num_rows($result); echo $num1; ?></h4>
                    <p>blood requests</p>
                 </div>
              </div>
              <div class="col-md-4 col-sm-4 col-xs-12">
                 <div class="col-md-3">
                    <img src="images/add-icon2.png">
                 </div>
                 <div class="col-md-6">
                    <h4><?php $q1="select * from donor ";$result=mysqli_query($con,$q1);$num1= mysqli_num_rows($result); echo $num1; ?></h4>
                    <p>Active doners</p>
                 </div>
              </div>
           </div> 
        </div>
     </div>
  </section>
    
</body>
</html>
