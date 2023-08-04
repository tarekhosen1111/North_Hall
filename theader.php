<?php

@include 'config.php';

session_start();
$email=$_SESSION['usermail'];
if(!isset($_SESSION['usermail'])){
   header('location:login_form.php');
}
$query = "SELECT id, room_no FROM vacant_room ";
$result = mysqli_query($conn, $query);
$query1="SELECT id, room_no,email FROM broom ";
$result1=mysqli_query($conn,$query1);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <script src="https://kit.fontawesome.com/92ae17eca5.js" crossorigin="anonymous"></script>
    <style>
        .welcome{
        padding-left: 40rem;
        font-size: 40px;
    }
    .room {
        float: left;
        width: 50%;
    }
    </style>
    <title>Document</title>
</head>
<body>
    <?php include 'tuser_header.php'?>
    <div class="welcome">
      <div class="room">
      <h1>vacant room</h1>
   <table border="1" cellspacing="10" cellpadding="10">
    <tr>
        <th>ID</th>
        <th>Room No</th>

    </tr>

    <?php
    if (mysqli_num_rows($result) > 0) {
        while ($data = mysqli_fetch_assoc($result)) {
    ?>
            <tr>
                <td><?php echo $data['id']; ?> </td>
                <td><?php echo $data['room_no']; ?> </td>
                
            </tr>
        <?php
        }
    } else { ?>
        <tr>
            <td colspan="2">No data found</td>
        </tr>
    <?php } ?>
   </table>
   <br>
   <br>
   </div>
   <div class="room">
      <h1>booked room</h1>
   <table border="1" cellspacing="10" cellpadding="10">
    <tr>
        <th>ID</th>
        <th>Room No</th>
        <th>Email</th>
    </tr>

    <?php
    if (mysqli_num_rows($result1) > 0) {
        while ($data = mysqli_fetch_assoc($result1)) {
    ?>
            <tr>
                <td><?php echo $data['id']; ?> </td>
                <td><?php echo $data['room_no']; ?> </td>
                <td><?php echo $data['email'];?></td>
            </tr>
        <?php
        }
    } else { ?>
        <tr>
            <td colspan="2">No data found</td>
        </tr>
    <?php } ?>
   </table>
   <br>
   <br>
   </div>
   </div>
</body>
</html>