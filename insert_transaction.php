<?php

@include 'config.php';
session_start();
$email=$_SESSION['usermail'];
if(!isset($_SESSION['usermail'])){
    header('location:login_form.php');
 }

if (isset($_POST['submit'])) {

   $tran =  $_POST['Transaction_Id'];
   $acc=$_POST['Account_No'];
   $select = " SELECT * FROM Temp_transaction WHERE email_id = '$email'";
   $result = mysqli_query($conn, $select);
   if (mysqli_num_rows($result) > 0 ) {
        $error[] = 'You already inserted';
    } else {
        $insert = "INSERT INTO Temp_transaction(email_id,transaction_id,Acc_No) VALUES('$email','$tran','$acc')";
        mysqli_query($conn, $insert);
        $error[] = 'Transaction_id inserted';
    }

}

?>

<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="csslog/style.css">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
   <script src="https://kit.fontawesome.com/92ae17eca5.js" crossorigin="anonymous"></script>
</head>

<body>
   <?php include 'user_header.php'?>
   <div class="form-container">

      <form action="" method="post">
         <h3 class="title">Insert paymant document</h3>
         <?php
         if (isset($error)) {
            foreach ($error as $error) {
               echo '<span class="error-msg">' . $error . '</span>';
            }
         }
         ?>
         <input type="number" name="Transaction_Id" placeholder="enter transaction id" class="box" required>
         <input type="number" name="Account_No" placeholder="enter acc. no" class="box" required>
         <input type="submit" value="Insert" class="form-btn" name="submit">
      </form>

   </div>

   <?php include 'footer.php'?>
</body>

</html>