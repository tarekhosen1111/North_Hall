<?php

@include 'config.php';
session_start();
$email=$_SESSION['usermail'];
if(!isset($_SESSION['usermail'])){
   header('location:login_form.php');
}
$sql = "SELECT * FROM `Game`";
$all_categories = mysqli_query($con,$sql);
if(isset($_POST['submit']))
    {
        // Store the Product name in a "name" variable
        
        // Store the Category ID in a "id" variable
        $id = mysqli_real_escape_string($con,$_POST['Game']);
        
        // Creating an insert query using SQL syntax and
        // storing it in a variable.
        $sql_insert =
        "INSERT INTO `product`(`product_name`, `category_id`)
            VALUES ('$name','$id')";
          
          // The following code attempts to execute the SQL query
          // if the query executes with no errors
          // a javascript alert message is displayed
          // which says the data is inserted successfully
          if(mysqli_query($con,$sql_insert))
        {
            echo '<script>alert("Product added successfully")</script>';
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
        margin-left: 350px;
        height: 300px; /* Should be removed. Only for demonstration */
     }
   </style>
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
   <script src="https://kit.fontawesome.com/92ae17eca5.js" crossorigin="anonymous"></script>
</head>

<body>
   <?php include 'tuser_header.php'?>
   <form method="POST">
        <label>Select a Game</label>
        <select name="Game">
            <?php
                // use a while loop to fetch data
                // from the $all_categories variable
                // and individually display as an option
                while ($category = mysqli_fetch_array(
                        $all_categories,MYSQLI_ASSOC)):;
            ?>
                <option value="<?php echo $category["Category_ID"];
                    // The value we usually set is the primary key
                ?>">
                    <?php echo $category["Category_Name"];
                        // To show the category name to the user
                    ?>
                </option>
            <?php
                endwhile;
                // While loop must be terminated
            ?>
        </select>
        <br>
        <input type="submit" value="submit" name="submit">
    </form>
</body>
</html>