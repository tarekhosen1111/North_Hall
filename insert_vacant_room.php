<?php

@include 'config.php';

session_start();

if (isset($_POST['submit'])) {

   $room =  $_POST['Room_No'];
   $select = " SELECT * FROM vacant_room WHERE room_no = '$room'";
   $result = mysqli_query($conn, $select);
   if (mysqli_num_rows($result) > 0) {
        $error[] = 'room already exit';
    } else {
        $insert = "INSERT INTO vacant_room(room_no) VALUES('$room')";
        if(mysqli_query($conn, $insert)){
            $error[]="Insert successfully";
        }
        else{
            $error[]="Not inserted";
        }
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
</head>

<body>

   <div class="form-container">

      <form action="" method="post">
         <h3 class="title">vacant room</h3>
         <?php
         if (isset($error)) {
            foreach ($error as $error) {
               echo '<span class="error-msg">' . $error . '</span>';
            }
         }
         ?>
         <input type="number" name="Room_No" placeholder="enter room no" class="box" required>
         <input type="submit" value="submit" class="form-btn" name="submit">
      </form>

   </div>


</body>

</html>