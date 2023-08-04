<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="sstyle.css">
    <style> 
    nav{
      position: fixed;
    }
    .abcd{
      padding-top: 60px;
    }
    </style>
    <script src="https://kit.fontawesome.com/92ae17eca5.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.css">
    <title>About Hall</title>
</head>
<body>
    <nav>
        <div class="st">
            Shaheed Tareq Huda Hall
        </div>
        <input type="checkbox" id="click" >
        <label for="click" class="menu-btn"><i class="fas fa-bars"></i></label>
        <ul>
            <li><a   href="thall.php">Home</a></li>
            <li><a class="active" href="about_hall.php">About Hall</a></li>
           
            <li><a href="#">Dinning</a></li>
            <li><a href="#">Room</a></li>
 
            <li><a href="register_form.php">Login</a></li>
        </ul>
    </nav>
    <div class="abcd">
    <div class="five">
      <div class="provost">
        <div class="provost-img"><img src="img/provost.jpg" /></div>
        <p>Dr. Md. Sanaul Rabbi</p>
        <p>provost</p>
      </div>
      <div class="provost-msg">
        <h1>Massage from Provost</h1>
        <p>
          SHAHEED TAREQ HUDA HALL is one of the biggest hall in Chittagong
          University of Engineering and Technology(CUET). It has more than 400
          students. It has well qualityfull dinning. 
        </p>
      </div>
    </div>
    <br /><br />
    <div class="grid-container">
      <div class="box">
        <div class="img-box"><img src="img/prov-1.jpg" /></div>
        <p>Dr. Mohammad Islam Miah</p>
        <p>Assistant provost</p>
        <br /><br />
      </div>
      <div class="box">
        <div class="img-box"><img src="img/prob-2.jpg" /></div>
        <p>MD. FARHAD HOSSAIN</p>
        <p>Assistant provost</p>
        <br /><br />
      </div>
      
    </div>
    <hr >
    <h2>About Hall</h2>
    <div class="hall">
      <div class="hall-info">
        <p>
          Shaheed Tareq Huda Hall is a residential hall located at Chittagong
          University of Engineering and Technology (CUET) in Bangladesh. The
          hall is named in honor of Shaheed Tareq Huda, a student leader who
          sacrificed his life during a protest movement in 2006. Shaheed Tareq
          Huda Hall provides accommodation for students studying at CUET. It
          offers comfortable living spaces, study areas, recreational
          facilities, and dining facilities. The hall aims to create a conducive
          environment for academic and personal growth, fostering a sense of
          community among its residents.
        </p>
      </div>
      <div class="hall-pic"><img src="img/img4.jpg" /></div>
    </div>
  </div>
    <hr >
    <script src="javascrift.js"></script>
    <?php include 'footer.php'?>
</body>
</html>