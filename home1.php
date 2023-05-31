<?php 
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['fname'])) {
 ?>
 <!DOCTYPE html>
<html lang="en" dir="ltr" >
    <head>
        <meta charset="UTF-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>store.com</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" integrity="sha512-PgQMlq+nqFLV4ylk1gwUOgm6CtIIXkKwaIHp/PAIWHzig/lKZSEGKEysh0TCVbHJXCLN7WetD8TFecIky75ZfQ==" crossorigin="anonymous"  />
        <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
        <link rel ="stylesheet" href="./styles.css"> 
    </head>
    <body> 
        <!--php-->
        <form class="shadow w-450 p-3" 
              action ="login.php"
              method="post">
<!--header-->
    <header>
        <a href="./home.php" class="logo">
            <i class="fas fa-store-alt"></i>
            <h4>store.com</h4></a>
        <ul class ="navlist">
            <li> <a href ="./home.php">Home</a></li>
            <li> <a href ="#sit-section">New</a></li>
            <li> <a href ="#contact">contact</a></li>
            <li> <a href ="./index.html" style="color: rgb(255, 0, 242); border:2px solid rgb(255, 0, 242); border-radius: 0.7rem;"> logout</a></li>
        </ul>
        <div class="header-icons">
         <div class="bx bx-menu" id="menu-icon"></div>
        </div>
    </header>

        <!--hero section-->
    <section class="hero">
        <div class="hero-section">
            <div class="content">
                <h4>Shop safly. Shop quickly.</h4>
                <h1>you can now identify,log in and even shop from any site you want </h1>
                <p> 
                    walk around the markets from where you are .<span> JUST TRUST US </span>
                </p>
                <button class="btn">
                    <a href ="#sit-section">know more</a>
                </button>
            </div>
            <div class="hero-image">
               <img src="./photo/online store.jpg" style ="width: 25rem;height: 32rem;">
            </div>
        </div>
    </section>

    <!--features section -->
    <section class="features" id ="features">
     <div class="fatures-section">
        <h4>why we are the beste choice?</h4>
        <div class="qualities">
            <div class="quality">
                <i class="fas fa-shipping-fast"></i>
                <h3>DELIVERY SPEED</h3>
                <P>your order will arrive within 2-5 days</P>
            </div>
            <div class="quality">
                <i class ="fas fa-user-shield"></i><!--the logo of eche one-->
                <h3>PROTECTION AND SAFETY</h3>
                <P>protection during electronic payment </P>
            </div>

            <div class="quality">
                <i class ="fas fa-sort-amount-up-alt"></i>
                <h3>WIDE SELECTION</h3>
                <P>we always have everything new in all areas</P>
            </div>

            <div class="quality">
                <i class="fas fa-phone-square-alt"></i>
                <h3>TECHNICAL SUPPORT</h3>
                <P>technical support around the clock to solve your problems </P>
            </div>
        </div>
     </div>
    </section>

    <!--newst site-->
    <section class="newset-sit">
     <div class="sit-section" id="sit-section">
        <h4> the best sites </h4>
        <section class="brand">
            <div class="brand-content">
              <div class="main">
               <a href="https://www.gucci.com/fr/fr/"> <img src ="photo/brand1.png"></a>
              </div>
              <div class="main">
              <a href ="https://www.zara.com"> <img src ="photo/brand2.png"></a>
             </div>
             <div class="main">
               <a href ="https://en.louisvuitton.com/eng-nl/homepage"><img src ="photo/brand3.png"></a>
             </div>
             <div class="main">
                <a href="https://www.chanel.com/us/"><img src ="photo/brand4.png"></a>
             </div>
             <div class="main">
               <a href ="https://www.prada.com/ww/en.html"><img src ="photo/brand5.png"></a>
             </div>
             <div class="main">
               <a href ="https://www.mulberry.com/row/"><img src ="photo/brand6.png"></a>
             </div>
            </div>
         </section>
            <button class="btn" >
                <a href="home.php">click for more</a>
             </button>
    </div>
    </section>
    <section class="contact" id="contact">

        <div class="main-contact">
          <h3>classix</h3>
          <h5>let's connect with us </h5>
          <div class="icons">
            <a href ="https://www.facebook.com/people/Kaouther-Manar-Nedjla/pfbid0A5zMVuJrphCpkAJNApihZFn3Za2NoNPWL8VpGFVkbDgSArKopeRnn6mRhzTDYT1ol/"><i class="fab fa-facebook-square"></i></a>
            <a href ="https://www.instagram.com/kaoutherhadjer/"><i class="fab fa-instagram"></i></a>
            <a href ="https://twitter.com/storekmn"><i class="fab fa-twitter"></i></a>
          </div>
          <div id = "digital-clock"  class="digital-clock"> </div>
          </div>
        
  
          <div class="main-contact">
            <h3>Explore</h3>
              <li> <a href ="#home">Home</a></li>
              <li> <a href ="#featured">Featured</a></li>
              <li> <a href ="#new">New</a></li>
              <li> <a href ="#contact">contact</a></li>
          </div>
  
          <div class="main-contact">
             <h3>our services</h3>
             <li><a href ="#">pricing</a></li>
             <li><a href ="#">free shipping</a></li>
             <li><a href ="#">gift cards</a></li>
          </div>
  
          <div class="main-contact">
            <h3>Shopping</h3>
            <li><a href ="index (3).html">clothing store</a></li>
            <li><a href ="index (3).html">trending shoes</a></li>
            <li><a href ="index (3).html">accessories</a></li>
            <li><a href ="index (3).html">sale</a></li>
         </div>
  
      </section>
  
      <div class="last-text">
          <p>copyright 2022 All rights reserved | this template is made with by CHOUDDER KAOUTHER HADJER 
          </p> 
      </div>
    <!--scroll top -->
    <a href="#" class="top"><i class="fas fa-arrow-up"></i></i></a>
    
    <!--custom js link -->
    <script  src="javasript.js"></script>
    <script src="script1.js"></script>
        </form>
    </body>
</html>
<?php }else {
	header("Location: login.php");
	exit;
} ?>