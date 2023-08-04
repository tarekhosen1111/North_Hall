<?php

@include 'config.php';

session_start();
$email=$_SESSION['usermail'];
if(!isset($_SESSION['usermail'])){
   header('location:login_form.php');
}
$query = "SELECT * FROM Temp_transaction ";
$result = mysqli_query($conn, $query);
$query1 = "SELECT * FROM transaction ";
$result1 = mysqli_query($conn, $query1);
if (isset($_POST['submitt'])) {

    $acc=  $_POST['Acc'];
    $txn= $_POST['txn'];
    $email=$_POST['email'];
    $select2 = " SELECT * FROM Temp_transaction WHERE transaction_id = '$txn'";
    $result2 = mysqli_query($conn, $select2);
    if (mysqli_num_rows($result2) > 0 ) {
         $delete="DELETE  FROM Temp_transaction WHERE transaction_id = '$txn'";
         mysqli_query($conn, $delete);
         $insert = "INSERT INTO transaction(transaction_id,account,email) VALUES('$txn','$acc','$email')";
         mysqli_query($conn, $insert);
         $error1[] = 'insert successfully';
     } 
     else{
        $error1[]='Not found in temporary transaction table';
     }
 
 }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <script src="https://kit.fontawesome.com/92ae17eca5.js" crossorigin="anonymous"></script>

    <style>
     .row {
        display: flex;
        margin-top: 200px;
        margin-left: 200px;
        font-family: sans-serif;
        font-size: 20px;
    }
    .form-container {
        flex: 50%;
        margin-left: 350px;
        height: 300px;
        
     }
    .form-container input{
        font-size: 30px;
        margin-top: 20px;
        border: 3px solid #000;

    }
    .form-btn{
        cursor: pointer;
    }
    .form-containert {
        flex: 50%;
        margin-left: 500px;
        height: 300px;
        
     }
    </style>
    <title>Dinning</title>
</head>
<body>
    <?php include 'tuser_header.php'?>
    <div class="row">
      
   <div class="form-container">
      <h1>Temporary Transaction Table</h1>
   <table border="1" cellspacing="10" cellpadding="10">
    <tr>
        <th>Account_No</th>
        <th>TXN_ID</th>
        <th>Email</th>
    </tr>

    <?php
    if (mysqli_num_rows($result) > 0) {
        while ($data = mysqli_fetch_assoc($result)) {
    ?>
            <tr>
                <td><?php echo $data['Acc_No']; ?> </td>
                <td><?php echo $data['transaction_id']; ?> </td>
                <td><?php echo $data['email_id'];?></td>
            </tr>
        <?php
        }
    } else { ?>
        <tr>
            <td colspan="3">No data found</td>
        </tr>
    <?php } ?>
   </table>
   <br>
   <br>
   </div>
   <div class="form-container">

        <form action="" method="post">
        <h1 class="title">Confirm Transaction</h3>
        <?php
        if (isset($error1)) {
            foreach ($error1 as $error1) {
                echo '<span class="error-msg">' . $error1. '</span>';
            }
        }
        ?>
        <input type="number" name="Acc" placeholder="enter Account no" class="box" required>
        <input type="string" name="txn" placeholder="enter txn no" class="box" required>
        <input type="email" name="email" placeholder="enter email id" class="box" required>
        <input type="submit" value="confirm" class="form-btn" name="submitt">
        </form>

        </div>
   </div>
   <div class="form-containert">
      <h1>Confirm Transaction Table</h1>
   <table border="1" cellspacing="10" cellpadding="10">
    <tr>
        <th>Account_No</th>
        <th>TXN_ID</th>
        <th>Email</th>
    </tr>

    <?php
    if (mysqli_num_rows($result1) > 0) {
        while ($data = mysqli_fetch_assoc($result1)) {
    ?>
            <tr>
                <td><?php echo $data['account']; ?> </td>
                <td><?php echo $data['transaction_id']; ?> </td>
                <td><?php echo $data['email'];?></td>
            </tr>
        <?php
        }
    } else { ?>
        <tr>
            <td colspan="3">No data found</td>
        </tr>
    <?php } ?>
   </table>
   <br>
   <br>
   </div>
</body>
</html>