<?php

@include 'config.php';
session_start();
$email=$_SESSION['usermail'];
if(!isset($_SESSION['usermail'])){
    header('location:login_form.php');
 }

if (isset($_POST['submit'])) {

   $room =md5($_POST['old_pass']);
   $npass=md5($_POST['new_pass']);
   $cpass=md5($_POST['cpass']);
   $select = " SELECT * FROM `Admin` WHERE email='$email' && password = '$room'";
   $result = mysqli_query($conn, $select);
   if (mysqli_num_rows($result) > 0) {
        if($npass==$cpass){
            $insert = "UPDATE `Admin` SET password='$npass' WHERE email='$email'";
            mysqli_query($conn, $insert);
            $error[] = 'updated successfully';
        }
        else{
            $error[]='new password and confirm password are different';
        }
        
    } else {
        $error[] = 'old password is incorrect';
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
    <title>update</title>
    <style>
       .btn{
        font-size: 30px;
        cursor: pointer;
       }
    </style>
</head>
<body>
    <?php include 'tuser_header.php'?>
    <section class="form-container" style="min-height: calc(100vh - 19rem);">

        <form action="" method="post" enctype="multipart/form-data">
        <h3>update profile</h3>
        <div class="flex">
        <?php
         if (isset($error)) {
            foreach ($error as $error) {
               echo '<span class="error-msg">' . $error . '</span>';
            }
         }
         ?>
            <div class="col">
                <p>old password</p>
                <input type="password" class="old" name="old_pass" placeholder="enter your old password" maxlength="50" class="box">
                <p>new password</p>
                <input type="password" class="old" name="new_pass" placeholder="enter your new password" maxlength="50" class="box">
                <p>confirm password</p>
                <input type="password" class="old" name="cpass" placeholder="confirm your new password" maxlength="50" class="box">
            </div>
        </div>
        <br>
        <input type="submit" name="submit" value="update profile" class="btn">
        </form>

    </section>
</body>
</html>