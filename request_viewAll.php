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

form h2{
    color: yellowgreen;
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

input::-webkit-outer-spin-button,
input::-webkit-inner-spin-button {
  -webkit-appearance: none;
  margin: 0;
}

/* Firefox */
input[type=number] {
  -moz-appearance: textfield;
}
.infoc{
    padding: 20px;
    height: 50px;
}
.infoc tr th,td{
    text-align: center;
    height: 40px;
}
  </style>
  
<body>
    
 <?php include 'header.php'; ?>
    
    <section class="home-section"style="margin-top:25px">
         <div class="container">
		<div class="table-responsive">		
                    <h2><b>Recent Blood </b>Request</h2>
                    <hr/>
            <table class="table table-bordered " id="myTable">
                <thead class="infoc">
                    <tr class="info">
                                                    <th>Name</th>
                                                    <th>Mobile</th>
                                                    <th>City</th>
                                                    <th>Request Date</th>
                                                    <th>Blood Group</th>
						</tr>
					</thead>
					<tbody >
                                            <?php
                                                $con= mysqli_connect('localhost:3308', 'root','');
                                                mysqli_select_db($con,'rblood');
                                                $q1="select * from request_blood ORDER BY r_id desc";
                                                $result=mysqli_query($con,$q1);
                                                $num1= mysqli_num_rows($result);
                                                 
                                                
                                            for($i=0;$i<$num1;$i++)
                                            {
                                                $row=mysqli_fetch_array($result);
                                            ?>
                                            <tr >
                                                <td><?php echo $row['r_fname']," ",$row['r_lname']; ?></td>
                                                <td><?php echo $row['r_mobile']; ?></td>
                                                <td><?php echo $row['r_city']; ?></td>
                                                <td><?php echo $row['r_rdate']; ?></td>
                                                <td><?php echo $row['r_bgroup']; ?></td>

                                            </tr>
                                            <?php
                                            }
                                            ?>
                                        </tbody>
                                </table>			
			</div>
		</div>
        </section>
   </body>
</html>
