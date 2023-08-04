<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="sstyle.css">
    <script src="https://kit.fontawesome.com/92ae17eca5.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.css">
    <title>Nort Hall</title>
    
</head>
<body>
    <nav>
        <div class="st">
            Shaheed Tareq Huda Hall
        </div>
        <input type="checkbox" id="click" >
        <label for="click" class="menu-btn"><i class="fas fa-bars"></i></label>
        <ul>
            <li><a  class="active" href="thall.php">Home</a></li>
            <li><a href="about_hall.php">About Hall</a></li>
           
            <li><a href="#">Dinning</a></li>
            <li><a href="#">Room</a></li>
 
            <li><a href="register_form.php">Login</a></li>
        </ul>
    </nav>
    
    <div class="slide-show">
        <main class="slider">
          <div class="list">
            <div class="item">
              <img src="img/img1.jpg" alt="" />
            </div>
            <div class="item">
              <img src="img/img2.jpg" alt="" />
            </div>
            <div class="item">
              <img src="img/img3.jpg" alt="" />
            </div>
            <div class="item">
              <img src="img/img4.jpg" alt="" />
            </div>
            <div class="item">
              <img src="img/img5.jpg" alt="" />
            </div>
          </div>
          <div class="buttons">
            <button id="prev"><</button>
            <button id="next">></button>
          </div>
          <ul class="dots">
            <li class="active"></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
          </ul>
        </main>
      </div>
      <div class="footer-col">
  	 			<h1>follow us</h1>
          <br>
  	 			<div class="social-links">
  	 				<a href="#"><i class="fab fa-facebook-f"></i></a>
  	 				<a href="#"><i class="fab fa-twitter"></i></a>
  	 				<a href="#"><i class="fab fa-instagram"></i></a>
  	 				<a href="#"><i class="fab fa-linkedin-in"></i></a>
            <br>
            <br>
            <br>
  	 			</div>
  	 		</div>
        
      <?php include 'footer.php'?>
      <script src="javascrift.js"></script>
</body>
</html>