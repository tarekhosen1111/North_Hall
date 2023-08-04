<?php

@include 'config.php';
session_start();
$email=$_SESSION['usermail'];
if(!isset($_SESSION['usermail'])){
    header('location:login_form.php');
 }

if (isset($_POST['submit'])) {

   $room =  $_POST['Room_No'];
   $select = " SELECT * FROM vacant_room WHERE room_no = '$room'";
   $select1="SELECT * FROM broom WHERE email='$email'";
   $result = mysqli_query($conn, $select);
   $result1=mysqli_query($conn,$select1);
   if (mysqli_num_rows($result) > 0 && mysqli_num_rows($result1)==0) {
        $delete="DELETE  FROM vacant_room WHERE room_no='$room'";
        mysqli_query($conn, $delete);
        $insert = "INSERT INTO broom(email,room_no) VALUES('$email','$room')";
        mysqli_query($conn, $insert);
        $error[] = 'book successfully';
    } else {
        $error[] = 'Room is not vacant';
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
         <h3 class="title">booking room</h3>
         <?php
         if (isset($error)) {
            foreach ($error as $error) {
               echo '<span class="error-msg">' . $error . '</span>';
            }
         }
         ?>
         <input type="number" name="Room_No" placeholder="enter room no" class="box" required>
         <input type="submit" value="Book" class="form-btn" name="submit">
      </form>

   </div>

   <?php include 'footer.php'?>
</body>

</html>