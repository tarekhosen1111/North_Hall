<?php

@include 'config.php';
session_start();
$email=$_SESSION['usermail'];
if(!isset($_SESSION['usermail'])){
    header('location:login_form.php');
 }
$query1 = "SELECT * FROM Game";
$result1 = mysqli_query($conn, $query1);
 if (isset($_POST['submit'])) {

    $game =  $_POST['Game_name'];
    $select = " SELECT * FROM Game WHERE game_name = '$game'";
    $result = mysqli_query($conn, $select);

    if (mysqli_num_rows($result) == 0 ) {
         $insert = "INSERT INTO Game(game_name) VALUES('$game')";
         mysqli_query($conn, $insert);
         $error[] = 'insert successfully';
     } else {
         $error[] = 'you already inserted';
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
   <style>
    .row {
        display: flex;
    }
    .form-container {
        flex: 50%;
        margin-left: 450px;
        height: 300px; /* Should be removed. Only for demonstration */
     }
   </style>
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
   <script src="https://kit.fontawesome.com/92ae17eca5.js" crossorigin="anonymous"></script>
</head>

<body>
   <?php include 'tuser_header.php'?>
   <div class="row">
        <div class="form-container">

        <form action="" method="post">
        <h3 class="title">Insert Game</h3>
        <?php
        if (isset($error)) {
            foreach ($error as $error) {
                echo '<span class="error-msg">' . $error . '</span>';
            }
        }
        ?>
        <input type="text" name="Game_name" placeholder="Game name" class="box" required>
        <input type="submit" value="Insert" class="form-btn" name="submit">
        </form>

        </div>
        <div class="form-container">


   <table border="1" cellspacing="10" cellpadding="10">
    <tr>
        <th>Inserted Game</th>
    </tr>

    <?php
    if (mysqli_num_rows($result1) > 0) {
        while ($data = mysqli_fetch_assoc($result1)) {
    ?>
            <tr>
                <td><?php echo $data['game_name']; ?> </td>
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

        </div>
   </div>
   <?php include 'footer.php'?>
</body>

</html>