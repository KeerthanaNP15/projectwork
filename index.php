<?php
session_start();
?>

<!Doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Travelix</title>
    <!--Font awesome CDN-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
    <link rel="stylesheet" href="style.css">
    
</head>
<body>
    <!--Header start-->
    <header class="header">
        <div class="container">
            <nav class="nav">
                <a class="logo" href="index.php">
                    <img src="logo.png" alt="">
                </a>
                <div class="hamburger-menu">
                    <i class="fas fa-bars open-state"></i>
                    <i class="fas fa-times close-state"></i>
                </div>
                <ul class="nav-list">
                    <li class="nav-item">
                        <a href="index.php" class="nav-link">Home</a>
                    </li>
                    <li class="nav-item">
                        <a href="idkwhat.html" class="nav-link">About</a>
                    </li>
                    <li class="nav-item">
                        <a href="bookings.php" class="nav-link">View Bookings</a>
                    </li>
                    <li class="nav-item">
                        <a href="taxi.html" class="nav-link">Book A Ride</a>
                    </li>
                    <li class="nav-item">
                        <a href="Contact.html" class="nav-link">Contact</a>
                    </li>
                    <li class="nav-item">
                        <a href="logout.php" class="nav-link">Logout</a>
                    </li>
                </ul>
            </nav>
        </div>
    </header>

    <main>
        <div class="hero">
            <div class="container">
                <div class="main-heading">
                    <h1 class="title">Discover</h1>
                    <h2 class="subtitle">Luxury hotels</h2>
                </div>
                <a href="Explore.html" class="btn btn-gradient">Explore now
                    <span class="dots"><i class="fas fa-ellipsis-h"></i></span>
                </a>
            </div>
        </div>

        <section class="hotels">
              <div class="container">
                  <h5 class="section-head">
                      <span class="heading">Explore</span>
                      <span class="sub-heading">Our beautiful hotels</span>
                  </h5>
                  <div class="grid">
                      <div class="grid-item featured-hotels">
                          <img src="hotel_astro_resort.jpg" alt="" class="hotel-image">
                          <h5 class="hotel-name">Astro Hotel</h5>
                          <span class="hotel-price">From 1500/- per Night</span>
                          <div class="hotel-rating">
                              <i class="fas fa-star rating"></i>
                              <i class="fas fa-star rating"></i>
                              <i class="fas fa-star rating"></i>
                              <i class="fas fa-star rating"></i>
                              <i class="fas fa-star-half rating"></i>
                          </div>
                          <a href="Login.html" class="btn btn-gradient">Book now
                              <span class="dots"><i class="fas fa-ellipsis-h"></i></span>
                          </a>
                      </div>

                      <div class="grid-item featured-hotels">
                        <img src="hotel_the_enchanted_garden.jpg" alt="" class="hotel-image">
                        <h5 class="hotel-name">Enchanted Garden</h5>
                        <span class="hotel-price">From 3000/- per Night</span>
                        <div class="hotel-rating">
                            <i class="fas fa-star rating"></i>
                            <i class="fas fa-star rating"></i>
                            <i class="fas fa-star rating"></i>
                            <i class="fas fa-star rating"></i>
                            <i class="fas fa-star rating"></i>
                        </div>
                        <a href="Login.html" class="btn btn-gradient">Book now
                            <span class="dots"><i class="fas fa-ellipsis-h"></i></span>
                        </a>
                    </div>

                    <div class="grid-item featured-hotels">
                        <img src="hotel_the_paradise.jpg" alt="" class="hotel-image">
                        <h5 class="hotel-name">The paradise</h5>
                        <span class="hotel-price">From 4500/- per Night</span>
                        <div class="hotel-rating">
                            <i class="fas fa-star rating"></i>
                            <i class="fas fa-star rating"></i>
                            <i class="fas fa-star rating"></i>
                            <i class="fas fa-star rating"></i>
                            <i class="fas fa-star-half rating"></i>
                        </div>
                        <a href="Login.html" class="btn btn-gradient">Book now
                            <span class="dots"><i class="fas fa-ellipsis-h"></i></span>
                        </a>
                    </div>
                </div>
             </div>
        </section>
      <!--  <section class = "offer">
            <div class="container">
                <div class="offer-content">
                    <div class="discount">
                        48% off
                    </div>
                    <h5 class="hotel-name">The Paradise</h5>
                    <div class="hotel-rating">
                        <i class="fas fa-star rating"></i>
                        <i class="fas fa-star rating"></i>
                        <i class="fas fa-star rating"></i>
                        <i class="fas fa-star rating"></i>
                        <i class="fas fa-star-half rating"></i>
                    </div>
                    <p class="paragraph">Get 48% off on all bookings in the Paradise Hotel*.</p>
                    <p class="paragraph">*T&C apply.</p>
                    <a href="#" class="btn btn-gradient">Redeem offer
                        <span class="dots"><i class="fas fa-ellipsis-h"></i></span>
                    </a>
                </div>
            </div>
        </section>-->
        <section class="rooms">
            <div class="container">
                <h5 class="section-head">
                    <span class="heading">Luxurious</span>
                    <span class="sub-heading">Affordable</span>
                </h5>
                <div class="grid rooms-grid">
                    <div class="grid-item featured-rooms">
                        <div class="image-wrap">
                            <img class="room-image" src="room_1.jpg" alt="">
                            <h5 class="room-name">Standard</h5>
                        </div>
                        <div class="room-info-wrap">
                            <span class="room-price">1500/- <span class="per-night">
                                Per night</span>
                            </span>
                            <p class="paragraph">Our Standard King Room, where modern design meets absolute comfort, features a king sized bed and a spacious living room area along with the floor.</p>
                            <a href="Login.html" class="btn rooms-btn">Book now &rarr;</a>
                        </div>
                    </div>
                        <div class="grid-item featured-rooms">
                            <div class="image-wrap">
                                <img class="room-image" src="room_2.jpg" alt="">
                                <h5 class="room-name">Executive</h5>
                            </div>
                            <div class="room-info-wrap">
                                <span class="room-price">3000/- <span class="per-night">
                                    Per night</span>
                                </span>
                                <p class="paragraph">The spacious Executive Room, with its king-sized bed and elegant lounge area, is fitted with stylish furniture choices and sophisticated modern lighting.</p>
                                <a href="Login.html" class="btn rooms-btn">Book now &rarr;</a>
                            </div>
                        </div>
                        <div class="grid-item featured-rooms">
                            <div class="image-wrap">
                                <img class="room-image" src="room_3.jpg" alt="">
                                <h5 class="room-name">Deluxe</h5>
                            </div>
                            <div class="room-info-wrap">
                                <span class="room-price">5000/-<span class="per-night">
                                    Per night</span>
                                </span>
                                <p class="paragraph">The Deluxe King Room are fitted with king-sized beds and offer beautiful and spacious living rooms. Floor-to-ceiling windows open onto the Black Sea and the pine tree forest in all of their splendid beauty.</p>
                                <a href="Login.html" class="btn rooms-btn">Book now &rarr;</a>
                            </div>
                        </div>
                        <div class="grid-item featured-rooms">
                            <div class="image-wrap">
                                <img class="room-image" src="room_4.jpg" alt="">
                                <h5 class="room-name">Suite</h5>
                            </div>
                            <div class="room-info-wrap">
                                <span class="room-price">6500/-<span class="per-night">
                                    Per night</span>
                                </span>
                                <p class="paragraph">Our Family Suite is another exceptional option for an exclusively chic stay. An airy design, soft colors, contemporary details and bright accents are signature components of this room.</p>
                                <a href="Login.html" class="btn rooms-btn">Book now &rarr;</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    
    <footer class="footer">
       <div class="container">
           <div class="footer-content">
               <div class="footer-content-brand">
                   <a href="index.html" class="logo">
                       <img class="logo-image" src="./images/logo.png" alt="">
                   </a>
                   <div class="page">
   
                    <h1 class="footer1">subscribe to our newsletter &hellip;</h1>
                    <form  class="news" action="connects.php" method="POST">
                      <input class="newsletter" type="https://www.google.com/" placeholder="Email (e.g. someone@host.com)" name="newsletter" id="newsletter"/>
                      <input class="newsletter" type="submit" value="Subscribe" />
                    </form>
                    
                  </div>
               </div>
               <div class="social-media-wrap">
                   <h4 class="footer-heading" >Follow us</h4>
                   <div class="social-media">
                       <a href="#" class="sm-link"><i class="fab fa-twitter"></i></a>
                       <a href="#" class="sm-link"><i class="fab fa-facebook-square"></i></a>
                       <a href="#" class="sm-link"><i class="fab fa-instagram"></i></a>
                       <a href="#" class="sm-link"><i class="fab fa-pinterest"></i></a>
                       <a href="#" class="sm-link"><i class="fab fa-tripadvisor"></i></a>
                   </div>
               </div>
           </div>
       </div>
    </footer>
    <script src="main.js"></script>
</body>

</html>