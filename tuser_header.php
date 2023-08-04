<?php

@include 'config.php';

session_start();
$email=$_SESSION['usermail'];
if(!isset($_SESSION['usermail'])){
   header('location:login_form.php');
}

?>
<header class="header">

    <section class="flex">
        <a href="thall.php" class="logo">North Hall Admin deshbord</a>
        <div class="icons">
            <div id="menu-btn" class="fas fa-bars"></div>
            <div id="user-btn" class="fas fa-user"></div>
        </div>

        <div class="profile">
            
            <span><?php echo $email?></span><br>
            <a href="tupdate_password.php" class="btn">update profile</a><br>
            <a href="logout.php" onclick="return confirm('logout from this website?');" class="delete-btn">logout</a>
        </div>

    </section>

</header>
<div class="side-bar">
    <nav class="navbar">
        <a href="theader.php"><i class="fas fa-home"></i><span>home</span></a>
        <a href="tdining.php"><i class="fas fa-question"></i><span>Dinning</span></a>
        <a href="tinsert_room.php"><i class="fa-solid fa-landmark"></i><span>Seat</span></a>
        <a href="tsports.php"><i class="fa-solid fa-basketball"></i><span>Sports</span></a>
        <a href="#"><i class="fas fa-headset"></i><span>Others</span></a>
    </nav>
</div>
<style>
    
.header {
    background-color: var(--white);
    border-bottom: var(--border);
    position: fixed;
    top: 0;
    left: 0;
    right: 0;
    z-index: 1000;
}

.header .flex {
    padding: 1.5rem 2rem;
    position: sticky;
    display: flex;
    align-items: center;
    justify-content: space-between;
}

.header .flex .logo {
    font-size: 2.5rem;
    color: var(--black);
    font-weight: bolder;
    text-decoration: none;
}

.header .flex .icons div {
    font-size: 2rem;
    color: var(--black);
    border-radius: .5rem;
    height: 4.5rem;
    cursor: pointer;
    width: 4.5rem;
    line-height: 4.4rem;
    background-color: var(--light-bg);
    text-align: center;
    margin-left: .5rem;
}

.header .flex .icons div:hover {
    background-color: var(--black);
    color: var(--white);
}

#search-btn {
    display: none;
}

.header .flex .profile {
    position: absolute;
    top: 100%;
    right: -105px;
    background-color: var(--white);
    border-radius: .5rem;
    padding: 2rem;
    text-align: center;
    width: 30rem;
    transform: scale(0);
    transform-origin: top right;
}

.header .flex .profile.active {
    transform: scale(1);
    transition: .2s linear;
}
.header .flex .profile span {
    color: var(--light-color);
    font-size: 1.6rem;
}

.side-bar {
    position: fixed;
    top: 6rem;
    left: 0;
    height: 100vh;
    width: 30rem;
    background-color: var(--white);
    border-right: var(--border);
    z-index: 1200;
}
.side-bar .navbar a {
    display: block;
    padding: 2rem;
    margin: .5rem 0;
    font-size: 1.8rem;
    text-decoration: none;
}

.side-bar .navbar a i {
    color: var(--main-color);
    margin-right: 1.5rem;
    transition: .2s linear;

}

.side-bar .navbar a span {
    color: var(--light-color);
}

.side-bar .navbar a:hover {
    background-color: var(--light-bg);
}

.side-bar .navbar a:hover i {
    margin-right: 2.5rem;
}

.side-bar.active {
    left: -31rem;
}
@media (max-width:1200px){

body{
padding-left: 0;
}

.side-bar{
transition: .2s linear;
left: -30rem;
background-color: black;
z-index: 10;
}

.side-bar.active{
left: 0;
box-shadow: 0 0 0 100vw rgba(0,0,0,.7);

}

.side-bar .close-side-bar{
display: block;
}

}
</style>
<script>
    let profile = document.querySelector('.header .flex .profile');

    document.querySelector('#user-btn').onclick = () => {
        profile.classList.toggle('active');

    }
    let sideBar = document.querySelector('.side-bar');

    document.querySelector('#menu-btn').onclick = () => {
        sideBar.classList.toggle('active');
        body.classList.toggle('active');
    }

    document.querySelector('.side-bar .close-side-bar').onclick = () => {
        sideBar.classList.remove('active');
        body.classList.remove('active');
    }
</script>