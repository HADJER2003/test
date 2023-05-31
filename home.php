<?php 
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['fname'])) {
 ?>
 <!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>store.com</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" type ="text/css" href="./stylesheet.css">
    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
</head>
<body>
  
    <!--header-->
    <header>
        <a href="./home1.php" class="logo">
            <i class="fas fa-store-alt"></i>
            <h4>store.com</h4></a>
        <ul class ="navlist">
          <li> <a href ="./home1.php">Home</a></li>
          <li> <a href ="#new">New</a></li>
          <li> <a href ="#contact">contact</a></li>
          <li> <a href ="http://localhost/login-signup/" style="color: rgb(255, 0, 242); border:2px solid rgb(255, 0, 242); border-radius: 0.7rem;">logout</a></li>
        </ul>
        <div class ="header-icons">
          <div class="bx bx-menu" id="menu-icon"></div>
        </div>
    </header>
    <!--home section-->
    <section class="home" id="home">
    <div class="home-text">
      <h1>Men's New <br><span>Arrivals</span></h1>
      <p>New colors,now also available in men's sizing </p>
      <a href="#featured" class="btn">shop know </a>
    </div>
    </section>
    <!--featured men-->
    <section class="featured" id="featured">
     <div class ="center-text">
        <h2> Featured categories</h2>
     </div>
      
     <div class="featured-content">
        <div class ="row">
           <!--<img src ="photo/fea1.jpg" style ="width: 300px;"> -->
           <img src ="./photo/Park Seo-joon.jpg" style ="width: 300px;"> 
           <div class="fea-text">
            <h5>Mens</h5>
            <p>MULBERRY</p>
           </div>
           <div class="arrow">
            <a href ="https://www.mulberry.com/row/men"><i class="fas fa-arrow-right"></i></a>
           </div>
        </div>

        <div class ="row">
            <!--<img src ="photo/fea2.jpg "style ="width: 300px;"> -->
            <img src ="photo/téléchargé (13).jpg"style ="width: 300px;"> 
             <div class="fea-text">
              <h5>Mens</h5>
              <p>PRADA</p>
             </div>
             <div class="arrow">
              <a href ="https://www.prada.com/ww/en/men/ready_to_wear/jackets_and_coats.html"><i class="fas fa-arrow-right"></i></a>
             </div>
          </div>

          <div class ="row">
            <!--<img src ="photo/fea3.jpg"style ="width: 300px;"> -->
            <img src ="photo/How To Dress If You’re A Skinny Guy.jpg"style ="width: 300px;"> 
             <div class="fea-text">
              <h5>Mens</h5>
              <p>LUIS VUITON</p>
             </div>
             <div class="arrow">
              <a href ="https://me.louisvuitton.com/ara-ae/stories/horizon-campaign-jackson-wang"><i class="fas fa-arrow-right"></i></a>
             </div>
          </div>

          <div class ="row">
            <!--<img src ="photo/fea4.jpg"style ="width: 300px;"> -->
            <img src ="photo/Men Overshirts _ Explore our New Arrivals _ ZARA United States.png"style ="width: 300px;">
             <div class="fea-text">
              <h5>Mens</h5>
              <p>CHANEL</p>
             </div>
             <div class="arrow">
              <a href ="https://www.chanel.com/us/makeup/new-arrivals/#fragrance"><i class="fas fa-arrow-right"></i></a>
             </div>
          </div>

          <div class ="row">
           <!-- <img src ="photo/fea5.jpg" style ="width: 300px;"> -->
            <img src ="photo/Summer outfits men.jpg" style ="width: 300px;"> 
            <div class="fea-text">
              <h5>Mens</h5>
              <p>ZARA</p>
             </div>
             <div class="arrow">
              <a href ="https://www.zara.com/dz/en/man-new-in-l711.html?v1=2204415"><i class="fas fa-arrow-right"></i></a>
             </div>
          </div>

          <div class ="row">
            <img src ="photo/téléchargé (12).jpg"style ="width: 300px;"> 
             <div class="fea-text">
              <h5>Mens</h5>
              <p>GOCCI</p>
             </div>
             <div class="arrow">
              <a href ="https://www.gucci.com/fr/fr/ca/men-c-men"><i class="fas fa-arrow-right"></i></a>
             </div>
          </div>
     </div>
    </section>
    <!--women-->
    <section class="cta">
      <div class="cta-text">
        <h1>FOR WOMEN </h1>
        <h5>We help you find <br> the style that suits you best</h5>
        <a href="#women" class="btn"> Shop now </a>
      </div>
    </section>
    <div id="women">
    <section class="featured" id="featured">
      <div class ="center-text">
         <h2> Featured categories</h2>
      </div>
       
      <div class="featured-content">
         <div class ="row">
            <img src ="photo/woman.jpg" style ="width: 300px;"> 
            <div class="fea-text">
             <h5>women</h5>
             <p>Louis 
              <br>Vuitton</p>
            </div>
            <div class="arrow">
             <a href ="https://me.louisvuitton.com/ara-ae/women/ready-to-wear/all-ready-to-wear/_/N-to8aw9x"><i class="fas fa-arrow-right"></i></a>
            </div>
         </div>
 
         <div class ="row">
             <img src ="photo/woman 4.jpg" style="width: 300px;"> 
              <div class="fea-text">
               <h5>women</h5>
               <p>GOCCI</p>
              </div>
              <div class="arrow">
               <a href ="https://www.gucci.com/fr/fr/ca/women-c-women"><i class="fas fa-arrow-right"></i></a>
              </div>
           </div>
 
           <div class ="row">
             <img src ="photo/woman 2 (3).jpg" style="width: 300px;"> 
              <div class="fea-text">
               <h5>women</h5>
               <p>CHANEL</p>
              </div>
              <div class="arrow">
               <a href ="https://www.chanel.com/us/haute-couture/"><i class="fas fa-arrow-right"></i></a>
              </div>
           </div>
 
           <div class ="row">
             <img src ="photo/woman (2).jpg"style ="width: 300px;"> 
              <div class="fea-text">
               <h5>women</h5>
               <p>ZARA</p>
              </div>
              <div class="arrow">
               <a href ="https://www.zara.com/dz/en/woman-new-in-l1180.html?v1=2184058"><i class="fas fa-arrow-right"></i></a>
              </div>
           </div>
 
           <div class ="row">
             <img src ="photo/WOMAN (4).jpg" style ="width: 300px;"> 
              <div class="fea-text">
               <h5>women</h5>
               <p>MULBERRY</p>
              </div>
              <div class="arrow">
               <a href ="https://www.mulberry.com/row/women"><i class="fas fa-arrow-right"></i></a>
              </div>
           </div>
 
           <div class ="row">
             <img src ="photo/WOMAN (3).jpg"style ="width: 300px;"> 
              <div class="fea-text">
               <h5>women</h5>
               <p>PRADA</p>
              </div>
              <div class="arrow">
               <a href ="https://www.prada.com/ww/en/women/ready_to_wear/dresses.html"><i class="fas fa-arrow-right"></i></a>
              </div>
           </div>
      </div>
     </section>
    </div>
     <!--children-->
     <section class="cta1">
      <div class="cta1-text">
        <h6>children </h6>
        <h4>Make your son  <br>the most beautiful</h4>
        <a href="#children" class="btn"> Shop now </a>
      </div>
    </section>
    <div id="children">
    <section class="featured" id="featured">
      <div class ="center-text">
         <h2> Featured categories</h2>
      </div>
       
      <div class="featured-content">
         <div class ="row">
            <img src ="photo/photo_5989859123438664750_y.jpg" style ="width: 300px;"> 
            <div class="fea-text">
             <h5>children</h5>
             <p>Louis 
              <br>Vuitton</p>
            </div>
            <div class="arrow">
             <a href ="https://en.louisvuitton.com/eng-nl/recommendations/gifts-for-children"><i class="fas fa-arrow-right"></i></a>
            </div>
         </div>
 
         <div class ="row">
             <img src ="photo/LOOKBOOK - 2020 A_W.jpg" style="width: 300px;"> 
              <div class="fea-text">
               <h5>children </h5>
               <p>GOCCI</p>
              </div>
              <div class="arrow">
               <a href ="https://www.gucci.com/us/en/ca/children-c-children"><i class="fas fa-arrow-right"></i></a>
              </div>
           </div>
 
           <div class ="row">
             <img src ="photo/pexels-victoria-rain-1620815.jpg" style="width: 300px;"> 
              <div class="fea-text">
               <h5>children</h5>
               <p>H&M</p>
              </div>
              <div class="arrow">
               <a href ="https://www2.hm.com/en_us/kids.html"><i class="fas fa-arrow-right"></i></a>
              </div>
           </div>
 
           <div class ="row">
             <img src ="photo/Bottoms.jpg"style ="width: 300px;"> 
              <div class="fea-text">
               <h5>children</h5>
               <p>ZARA</p>
              </div>
              <div class="arrow">
               <a href ="https://www.zara.com/uk/en/kids-mkt1.html"><i class="fas fa-arrow-right"></i></a>
              </div>
           </div>
 
           <div class ="row">
             <img src ="photo/india _ terracotta.jpg" style ="width: 300px;"> 
              <div class="fea-text">
               <h5>children</h5>
               <p>JUNIOR</p>
              </div>
              <div class="arrow">
               <a href ="https://www.juniormagazine.co.uk/"><i class="fas fa-arrow-right"></i></a>
              </div>
           </div>
 
           <div class ="row">
             <img src ="photo/BLUZKA REJA IN IVORY – Nobonu.jpg"style ="width: 300px;"> 
              <div class="fea-text">
               <h5>children</h5>
               <p>FARRETHCH</p>
              </div>
              <div class="arrow">
               <a href ="https://www.farfetch.com/ge/shopping/kids/prada/items.aspx"><i class="fas fa-arrow-right"></i></a>
              </div>
           </div>
      </div>
     </section>
     </div>
     <!--parfumes-->
    <section class="cta2">
      <div class="cta2-text">
        <h6>PARFUMES </h6>
        <h4>Let it <br>make you special</h4>
        <a href="#parfumes" class="btn"> Shop now </a>
      </div>
    </section>
    <div id="parfumes">
    <section class="featured" id="featured">
      <div class ="center-text">
         <h2> Featured categories</h2>
      </div>
       
      <div class="featured-content">
         <div class ="row">
            <img src ="photo/Louis Vuitton Parfumerie.jpg" style ="width: 300px;"> 
            <div class="fea-text">
             <h5>perfumes</h5>
             <p>Louis 
              <br>Vuitton</p>
            </div>
            <div class="arrow">
             <a href ="https://fr.louisvuitton.com/fra-fr/parfums/collections/tous-les-parfums/_/N-t1vibucj"><i class="fas fa-arrow-right"></i></a>
            </div>
         </div>
 
         <div class ="row">
             <img src ="photo/gocci.jpg" style="width: 300px;"> 
              <div class="fea-text">
               <h5>perfumes </h5>
               <p>GOCCI</p>
              </div>
              <div class="arrow">
               <a href ="https://www.gucci.com/fr/fr/ca/beauty/fragrances/fragrances-for-women-c-beauty-fragrances-women"><i class="fas fa-arrow-right"></i></a>
              </div>
           </div>
 
           <div class ="row">
             <img src ="photo/Coco Mademoiselle - Chanel Paris.jpg" style="width: 300px;"> 
              <div class="fea-text">
               <h5>prevumes</h5>
               <p>CHANEL</p>
              </div>
              <div class="arrow">
               <a href ="https://www.chanel.com/fr/parfums/femmes/c/7x1x1/"><i class="fas fa-arrow-right"></i></a>
              </div>
           </div>
 
           <div class ="row">
             <img src ="photo/téléchargé (5).jpg"style ="width: 300px;"> 
              <div class="fea-text">
               <h5>perfumes</h5>
               <p>ZARA</p>
              </div>
              <div class="arrow">
               <a href ="https://www.zara.com/fr/fr/femme-beaute-parfums-l1415.html"><i class="fas fa-arrow-right"></i></a>
              </div>
           </div>
 
           <div class ="row">
             <img src ="photo/8bc41692-be59-49a7-a66c-169bd746bc27.jpg" style ="width: 300px;"> 
              <div class="fea-text">
               <h5>perfumes</h5>
               <p>YSL</p>
              </div>
              <div class="arrow">
               <a href ="https://www.yslbeauty.fr/parfum#view-mode=grid"><i class="fas fa-arrow-right"></i></a>
              </div>
           </div>
 
           <div class ="row">
             <img src ="photo/prada.jpg"style ="width: 300px;"> 
              <div class="fea-text">
               <h5>perfumes</h5>
               <p>PRADA</p>
              </div>
              <div class="arrow">
               <a href ="https://www.tendance-parfums.com/marque/prada/"><i class="fas fa-arrow-right"></i></a>
              </div>
           </div>
      </div>
     </section>
    </div>
    <!--chouse-->
    <section class="cta3">
      <div class="cta3-text">
        <h6>SHOES </h6>
        <h4>Shoes take us on a journey,<br> step by step, as we walk through life with comfort, style, and a confident stride</h4>
        <a href="#chousure" class="btn"> Shop now </a>
      </div>
    </section>
    <div id="chousure">
    <section class="featured" id="featured">
      <div class ="center-text">
         <h2> Featured categories</h2>
      </div>
       
      <div class="featured-content">
         <div class ="row">
            <img src ="photo/photo_5992117146659961253_y (1).jpg" style ="width: 300px;"> 
            <div class="fea-text">
             <h5>shoes</h5>
             <p>ADIDAS</p>
            </div>
            <div class="arrow">
             <a href ="https://www.adidas.com/us/originals-shoes"><i class="fas fa-arrow-right"></i></a>
            </div>
         </div>
 
         <div class ="row">
             <img src ="photo/photo_5992117146659961226_y.jpg" style="width: 300px;"> 
              <div class="fea-text">
               <h5>shoes</h5>
               <p>GOCCI</p>
              </div>
              <div class="arrow">
               <a href ="https://www.gucci.com/fr/fr/ca/beauty/fragrances/fragrances-for-women-c-beauty-fragrances-women"><i class="fas fa-arrow-right"></i></a>
              </div>
           </div>
 
           <div class ="row">
             <img src ="photo/the fourth time charm by maya hughes aesthetic.jpg" style="width: 300px;"> 
              <div class="fea-text">
               <h5>shoes</h5>
               <p>NIKE</p>
              </div>
              <div class="arrow">
               <a href ="https://www.nike.com/"><i class="fas fa-arrow-right"></i></a>
              </div>
           </div>
 
           <div class ="row">
             <img src ="photo/photo_5992117146659961225_y.jpg"style ="width: 300px;"> 
              <div class="fea-text">
               <h5>shoes</h5>
               <p>ZARA</p>
              </div>
              <div class="arrow">
               <a href ="https://www.zara.com/fr/fr/femme-chaussures-l1251.html?v1=2215112"><i class="fas fa-arrow-right"></i></a>
              </div>
           </div>
 
           <div class ="row">
             <img src ="photo/photo_5992117146659961238_y.jpg" style ="width: 300px;"> 
              <div class="fea-text">
               <h5>shoes</h5>
               <p>CHANEL</p>
              </div>
              <div class="arrow">
               <a href ="https://www.chanel.com/fr/mode/souliers/c/1x1x5/"><i class="fas fa-arrow-right"></i></a>
              </div>
           </div>
 
           <div class ="row">
             <img src ="photo/photo_5992117146659961243_y.jpg"style ="width: 300px;"> 
              <div class="fea-text">
               <h5>shoes</h5>
               <p>PRADA</p>
              </div>
              <div class="arrow">
               <a href ="https://www.prada.com/fr/fr/men/shoes.html"><i class="fas fa-arrow-right"></i></a>
              </div>
           </div>
      </div>
     </section>
    </div>
    <!--book-->
    <section class="cta4">
      <div class="cta4-text">
        <h6>BOOKS  </h6>
        <h4>Books are windows to new worlds,<br>where imagination takes flight and knowledge finds its voice</h4>
        <a href="#bock" class="btn"> Shop now </a>
      </div>
    </section>
    <div id="bock">
      <section class="featured" id="featured">
        <div class ="center-text">
           <h2> Featured categories</h2>
        </div>
        <div class="featured-content">
          <div class ="row">
             <img src ="photo/photo_5992117146659961205_y.jpg" style ="width: 300px;"> 
             <div class="arrow">
              <a href ="https://openlibrary.org"><i class="fas fa-arrow-right"></i></a>
             </div>
          </div>
  
          <div class ="row">
              <img src ="photo/photo_5992117146659961206_y.jpg"style ="width: 300px;"> 
               <div class="arrow">
                <a href ="https://society6.com/prints/library"><i class="fas fa-arrow-right"></i></a>
               </div>
            </div>
  
            <div class ="row">
              <img src ="photo/photo_5992117146659961208_y.jpg"style ="width: 300px;"> 
               <div class="arrow">
                <a href ="https://gmanga.app/mangas"><i class="fas fa-arrow-right"></i></a>
               </div>
            </div>
  
            <div class ="row">
              <img src ="photo/photo_5992117146659961207_y.jpg"style ="width: 300px;"> 
               <div class="arrow">
                <a href ="https://openlibrary.org"><i class="fas fa-arrow-right"></i></a>
               </div>
            </div>
  
            <div class ="row">
              <img src ="photo/photo_5992117146659961209_y.jpg" style ="width: 300px;">
               <div class="arrow">
                <a href ="https://gmanga.app/mangas"><i class="fas fa-arrow-right"></i></a>
               </div>
            </div>
  
            <div class ="row">
              <img src ="photo/photo_5992117146659961214_y.jpg"style ="width: 300px;"> 
               <div class="arrow">
                <a href ="https://www.gucci.com/fr/fr/ca/men-c-men"><i class="fas fa-arrow-right"></i></a>
               </div>
            </div>
       </div>
      </section>
      <!--home -->
      <section class="cta5">
        <div class="cta5-text">
          <h6>HOME </h6>
          <h4>enjoy <br>with IKIA</h4>
          <a href="#home1" class="btn"> Shop now </a>
        </div>
      </section>
      <div id="home1">
      <section class="featured" id="featured">
        <div class ="center-text">
           <h2> Featured categories</h2>
        </div>
         
        <div class="featured-content">
           <div class ="row">
              <img src ="./photo/home1.jpg" style ="width: 300px;"> 
              <div class="fea-text">
              </div>
              <div class="arrow">
               <a href ="https://en.louisvuitton.com/eng-nl/recommendations/gifts-for-children"><i class="fas fa-arrow-right"></i></a>
              </div>
           </div>
   
           <div class ="row">
               <img src ="photo/home2.jpg" style="width: 300px;"> 
                <div class="fea-text">
                </div>
                <div class="arrow">
                 <a href ="https://www.gucci.com/us/en/ca/children-c-children"><i class="fas fa-arrow-right"></i></a>
                </div>
             </div>
   
             <div class ="row">
               <img src ="photo/home3.jpg" style="width: 300px;"> 
                <div class="arrow">
                 <a href ="https://www2.hm.com/en_us/kids.html"><i class="fas fa-arrow-right"></i></a>
                </div>
             </div>
   
             <div class ="row">
               <img src ="./photo/home4.jpg"style ="width: 300px;">
                <div class="arrow">
                 <a href ="https://www.zara.com/uk/en/kids-mkt1.html"><i class="fas fa-arrow-right"></i></a>
                </div>
             </div>
   
             <div class ="row">
               <img src ="./photo/home5.jpg" style ="width: 300px;"> 
                <div class="arrow">
                 <a href ="https://www.juniormagazine.co.uk/"><i class="fas fa-arrow-right"></i></a>
                </div>
             </div>
   
             <div class ="row">
               <img src ="./photo/home6 (2).jpg"style ="width: 300px;"> 
                <div class="arrow">
                 <a href ="https://www.farfetch.com/ge/shopping/kids/prada/items.aspx"><i class="fas fa-arrow-right"></i></a>
                </div>
             </div>
        </div>
       </section>
       </div>
    <!--sale-->
    <section class="new" id="new"> 
      <div class ="center-text">
        <h2> New Arrivals</h2>
     </div> 
     <div class="new-content">
      <div class ="box">
        <a href ="https://www2.hm.com/en_us/sale/women/view-all.html">
        <img  style="height: 395px ;" src ="./photo/hmgoepprod.webp">
      </a>
        <h5> Take this opportunity forme h&m</h5>
        <h6>$26.99</h6>
        <div class ="sale">
           <h4>sale</h4>
        </div>
        <div class="arrow">
         </div>
      </div>

      <div class ="box">
        <a href="https://www2.hm.com/en_us/sale/men/view-all.html">
        <img src ="./photo/tren2.jpg">
        </a>
        <h5> Lorem Ipsum dizgi</h5>
        <h6>$22.99</h6>
        <div class ="sale">
           <h4>sale</h4>
        </div>
      </div>

      <div class ="box">
        <a href ="https://www2.hm.com/en_us/sale/kids/products.html">
        <img style="height: 395px;" src ="./photo/hmgoepprod.jpg">
        </a>
        <h5> Don't lose this opportunity</h5>
        <h6>$26.99</h6>
        <div class ="sale">
           <h4>sale</h4>
        </div>
      </div>

      <div class ="box">
        <a href ="https://www2.hm.com/en_us/productpage.1136743001.html">
        <img src ="./photo/hmgoepprod (1).jpg">
        </a>
        <h5> Enjoy a new look for your home at the lowest prices</h5>
        <h6>$4.99</h6>
        <div class ="sale">
           <h4>sale</h4>
        </div>
      </div>
     </div>  
    </section>
    

    <!--contact-->
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
          <li><a href ="#featured">clothing store</a></li>
          <li><a href ="#chousure">trending shoes</a></li>
          <li><a href ="#home1">home</a></li>
          <li><a href ="#new">sale</a></li>
       </div>

    </section>

    <div class="last-text">
        <p>copyright 2022 All rights reserved | this template is made with by CHOUDDER KAOUTHER HADJER 
        </p> 
    </div>
    <!--scroll top -->
     <a href="#" class="top"><i class="fa-solid fa-arrow-up"></i></a>
     <script src="https://unpkg.com/scrollreveal"></script>
    <!--custom js link -->
    <script  src="javasript.js"></script>
    <script  src="script1.js"></script>
  </form>
</body>
</html>

<?php }else {
	header("Location: login.php");
	exit;
} ?>