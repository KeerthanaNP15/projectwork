<?php
include('header.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Activities</title>
    <!--Font awesome CDN-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <section class="hotels">
        <div class="container">
            <h5 class="section-head">
                <span class="heading">Your Booking is confirmed!</span>
                <span class="heading2">Check out some of the activities offered by your hotel</span>
            </h5>
            <div class="grid">
                <div class="grid-item featured-hotels">
                    <img src="outdoor.jpg" alt="" class="hotel-image">
                    <h5 class="hotel-name">Outdoor Activities</h5>
                    <span class="hotel-price"></span>
                    <div class="hotel-rating">
                        <i class="fas fa-star rating"></i>
                        <i class="fas fa-star rating"></i>
                        <i class="fas fa-star rating"></i>
                        <i class="fas fa-star rating"></i>
                        <i class="fas fa-star-half rating"></i>
                    </div>
                    <a href="Outdoor.php" class="btn btn-gradient">Explore
                        <span class="dots"><i class="fas fa-ellipsis-h"></i></span>
                    </a>
                </div>

                <div class="grid-item featured-hotels">
                  <img src="relax.jpg" alt="" class="hotel-image">
                  <h5 class="hotel-name">Relaxation</h5>
                  <span class="hotel-price"></span>
                  <div class="hotel-rating">
                      <i class="fas fa-star rating"></i>
                      <i class="fas fa-star rating"></i>
                      <i class="fas fa-star rating"></i>
                      <i class="fas fa-star rating"></i>
                      <i class="fas fa-star rating"></i>
                  </div>
                  <a href="relaxation.php" class="btn btn-gradient">Explore
                      <span class="dots"><i class="fas fa-ellipsis-h"></i></span>
                  </a>
              </div>

              <div class="grid-item featured-hotels">
                  <img src="combo.jpg" alt="" class="hotel-image">
                  <h5 class="hotel-name">Combo Packages</h5>
                  <span class="hotel-price"></span>
                  <div class="hotel-rating">
                      <i class="fas fa-star rating"></i>
                      <i class="fas fa-star rating"></i>
                      <i class="fas fa-star rating"></i>
                      <i class="fas fa-star rating"></i>
                      <i class="fas fa-star-half rating"></i>
                  </div>
                  <a href="combo.php" class="btn btn-gradient">Explore
                      <span class="dots"><i class="fas fa-ellipsis-h"></i></span>
                  </a>
              </div>
          </div>
       </div>
  </section>
</body>
</html>
<?php
include('footer.php');
?>