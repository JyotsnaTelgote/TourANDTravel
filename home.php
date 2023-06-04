<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>home</title>

   <!-- swiper css link  -->
   <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<!-- header section starts  -->

<section class="header">

   <a href="home.php" class="logo">TNT -> Tours & Travels</a>

   <nav class="navbar">
      <a href="home.php">home</a>
      <a href="about.php">about</a>
      <a href="package.php">package</a>
      <a href="book.php">book</a>
      <a href="signUp_Login.html"> Log In / Sign Up </a>
   </nav>

   <div id="menu-btn" class="fas fa-bars"></div>

</section>

<!-- header section ends -->

<!-- home section starts  -->
<!--url(images/home-slide-1.jpg) no-repeat-->
<section class="home">

   <div class="swiper home-slider">

      <div class="swiper-wrapper">

         <div class="swiper-slide slide" style="background:url(images/final1.jpeg) no-repeat">
            <div class="content">
               <span>explore, discover, travel</span>
               <h3>travel arround the world</h3>
               <a href="package.php" class="btn">discover more</a>
            </div>
         </div>

         <div class="swiper-slide slide" style="background:url(images/final2.jpeg) no-repeat">
            <div class="content">
               <span>explore, discover, travel</span>
               <h3>discover the new places</h3>
               <a href="package.php" class="btn">discover more</a>
            </div>
         </div>

         <div class="swiper-slide slide" style="background:url(images/final3.jpeg) no-repeat">
            <div class="content">
               <span>explore, discover, travel</span>
               <h3>make your tour worthwhile</h3>
               <a href="package.php" class="btn">discover more</a>
            </div>
         </div>
         
      </div>

      <div class="swiper-button-next"></div>
      <div class="swiper-button-prev"></div>

   </div>

</section>

<!-- home section ends -->

<!-- services section starts  -->

<section class="services">

   <h1 class="heading-title"> our services </h1>

   <div class="box-container" style ="color=yellow">

      <div class="box">
         <img src="images/icon-1.png" alt="">
         <h3>adventure</h3>
      </div>

      <div class="box">
         <img src="images/icon-2.png" alt="">
         <h3>tour guide</h3>
      </div>

      <div class="box">
         <img src="images/icon-3.png" alt="">
         <h3>trekking</h3>
      </div>

      <div class="box">
         <img src="images/icon-4.png" alt="">
         <h3>camp fire</h3>
      </div>

      <div class="box">
         <img src="images/icon-5.png" alt="">
         <h3>off road</h3>
      </div>

      <div class="box">
         <img src="images/icon-6.png" alt="">
         <h3>camping</h3>
      </div>

   </div>

</section>

<!-- Categories -->
<section class="services">

   <h1 class="heading-title"> Categories </h1>

   <div class="box-container">

      <a href="hotel_form.php">
         <div class="box">
            <img src="images/hotel-icon.png" alt="">
            <h3>Hotels</h3>
         </div>
      </a>

      <a href="flight.html">
         <div class="box">
            <img src="images/flight-icon.png" alt="">
            <h3>Flights</h3>
         </div>
      </a>

      <a href="train.html">
         <div class="box">
            <img src="images/train-icon1.png" alt="">
            <h3>Trains</h3>
         </div>
      </a>

      <div class="box">
         <img src="images/bus-icon.png" alt="">
         <h3>Buses</h3>
      </div>

   </div>

</section>

<!-- services section ends -->

<!-- home about section starts  -->

<section class="home-about">

   <div class="image">
      <img src="images/img-12.jpg" alt="">
   </div>

   <div class="content">
      <h3>About us</h3>
      <h3>Why </h3>
      <p>We give Assurance with My Safety with safe holidays assured stays ,clean cabs abd 24/7 support .Also realibility with flexible cancellation.Best deals and offers in the industry.Over two decades of expertise.</p>
      <a href="about.php" class="btn">read more</a>
   </div>

</section>

<!-- home about section ends -->

<!-- home packages section starts  -->

<section class="home-packages">

   <h1 class="heading-title"> our packages </h1>

   <div class="box-container">

      <div class="box">
         <div class="image">
            <img src="https://i.postimg.cc/gkwxB6KX/goa1.jpg" alt="">
         </div>
         <div class="content">
            <h3>GOA</h3>
            <h3>Adventure & Tour</h3>
            <p>Starting at Rs.11,000 Per person</p>
            <a href="book.php" class="btn">book now</a>
         </div>
      </div>

      <div class="box">
         <div class="image">
            <img src="https://i.postimg.cc/76RMzrVf/dubai.jpg" alt="">
         </div>
         <div class="content">
            <h3>Dubai</h3>
            <h3>Adventure & Tour</h3>
            <p>Starting at Rs 20,000 Per person.Grab it fast!!</p>
            <a href="book.php" class="btn">Book Now</a>
         </div>
      </div>
      
      <div class="box">
         <div class="image">
            <img src="https://i.postimg.cc/K87kbh3t/thailand.jpg" alt="">
         </div>
         <div class="content">
         <   <h3>Thailand</h3>
            <h3>Adventure & Tour</h3>
            <p>Starting at Rs.21,000 Per person.Grab it fast!!</p>
            <a href="book.php" class="btn">Book Now</a>
         </div>
      </div>

   </div>

   <div class="load-more"> <a href="package.php" class="btn">Load More</a> </div>

</section>

<!-- home packages section ends -->

<!-- home offer section starts  -->

<section class="home-offer">
   <div class="content">
      <h3>Upto 50% OFF!!</h3>
      <p>Take off for your dream vacay with OH-SO-AMAZING deals on international flights,
live till 23rd January.So, get set for EPIC journeys with these good deals:</p>
      <a href="book.php" class="btn">Book Now</a>
   </div>
</section>

<!-- home offer section ends -->

















<!-- footer section starts  -->

<section class="footer">

   <div class="box-container">

      <div class="box">
         <h3>quick links</h3>
         <a href="home.php"> <i class="fas fa-angle-right"></i> home</a>
         <a href="about.php"> <i class="fas fa-angle-right"></i> about</a>
         <a href="package.php"> <i class="fas fa-angle-right"></i> package</a>
         <a href="book.php"> <i class="fas fa-angle-right"></i> book</a>
      </div>

      <div class="box">
         <h3>extra links</h3>
         <a href="#"> <i class="fas fa-angle-right"></i> ask questions</a>
         <a href="#"> <i class="fas fa-angle-right"></i> about us</a>
         <a href="#"> <i class="fas fa-angle-right"></i> privacy policy</a>
         <a href="#"> <i class="fas fa-angle-right"></i> terms of use</a>
      </div>

      <div class="box">
         <h3>contact info</h3>
         <a href="#"> <i class="fas fa-phone"></i> +123-456-7890 </a>
         <a href="#"> <i class="fas fa-phone"></i> +111-222-3333 </a>
         <a href="#"> <i class="fas fa-envelope"></i> shaikhanas@gmail.com </a>
         <a href="#"> <i class="fas fa-map"></i> mumbai, india - 400104 </a>
      </div>

      <div class="box">
         <h3>follow us</h3>
         <a href="#"> <i class="fab fa-facebook-f"></i> facebook </a>
         <a href="#"> <i class="fab fa-twitter"></i> twitter </a>
         <a href="#"> <i class="fab fa-instagram"></i> instagram </a>
         <a href="#"> <i class="fab fa-linkedin"></i> linkedin </a>
      </div>

   </div>

   <div class="credit"> created by *<span>Kiran</span>  *<span>Sadanand</span><br> *<span>Saurabh</span> *<span>Jyotsna</span> </div>

</section>

<!-- footer section ends -->









<!-- swiper js link  -->
<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>