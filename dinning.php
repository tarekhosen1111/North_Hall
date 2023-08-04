<?php

@include 'config.php';
session_start();
$email=$_SESSION['usermail'];
if(!isset($_SESSION['usermail'])){
   header('location:login_form.php');
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
   <script src="https://kit.fontawesome.com/92ae17eca5.js" crossorigin="anonymous"></script>
   <title>Dinning</title>
   <style>
      .dinning{
         margin-left: 400px;
      }
      .submitt{
         margin-left:400px;
         font-size: 30px;
         font-weight: bold;
      }
      .submitt .text{
         width:300px;
         height:50px;
         font-size: 30px;
      }
      .submitt .submit{
         background-color: #FF0000; 
         color: #FFFFFF; 
         border: none; 
         border-radius: 10px; 
         cursor: pointer;
         width:100px;
         height: 50px;
         margin-left:20px;
      }
   </style>
</head>
<body>
   <?php include 'user_header.php'?>
   <div class="dinning">
      <br>
      <br>
      <br>
      <br>
      <br>
      <br>
      <br>
      <br>
      <h2>Send Money using<br> Sonali E-walet:</h2>
      <h1>0818534118552(Shaheed Tareq Huda Hall)</h1>
      <h2>Bkash:</h2>
      <h1>01680517919</h1>
   </div>
   <div class ='submitt'>
      <?php
      $sql = "SELECT * FROM `transaction` WHERE email='$email'";
      $result = mysqli_query($conn, $sql);
      
      if (mysqli_num_rows($result) > 0) {?>

        <?php // output data of each row
        //echo "Your payment successfully received";
        /*while($row = mysqli_fetch_assoc($result)) {
         if($_SESSION['usermail']==$row['email'])
            echo "id: " . $row["id"]. " - Name: " . $row["transaction_id"]. " " . $row["account"]. "<br>";
          
        }*/
        ?>
        <h1>Your payment successfully received</h1>
      <?php } else {
        echo "Please pay for dinning";
      }
      ?>
   </div>
   <br>
   <br>
   <br>
   <br>
   <br>
   <br>
   <br>
   <br>
   <br>
   <br>
   <br>
   <br>
   <br>
   <br>
   <br>
   <br>
   <br>
   <br>
   <br>
   <br>
   <br>
   <br>
   <br>
   <br>
   <br>
   <br>
   <br>
   <br>
   <?php include 'footer.php'?>
</body>
</html>