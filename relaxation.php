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
    <title>Explore</title>
    <!--Font awesome CDN-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <section class="hotels">
        <div class="container">
            <h5 class="section-head">
                <span class="heading">Explore</span>
                <span class="sub-heading">Our various activities</span>
            </h5>
            <div class="grid">
                <div class="grid-item featured-hotels">
                    <img src="spa.jpg" alt="" class="hotel-image">
                    <h5 class="hotel-name">Spa Day</h5>
                    <span class="hotel-price">From 1000/-</span>
                    <div class="hotel-rating">
                        <i class="fas fa-star rating"></i>
                        <i class="fas fa-star rating"></i>
                        <i class="fas fa-star rating"></i>
                        <i class="fas fa-star rating"></i>
                        <i class="fas fa-star-half rating"></i>
                    </div>
                    <a href="finalbook.php" class="btn btn-gradient">Book now
                        <span class="dots"><i class="fas fa-ellipsis-h"></i></span>
                    </a>
                </div>

                <div class="grid-item featured-hotels">
                  <img src="sauna.jpg" alt="" class="hotel-image">
                  <h5 class="hotel-name">Steamy Sauna</h5>
                  <span class="hotel-price">From 800/- per Hour</span>
                  <div class="hotel-rating">
                      <i class="fas fa-star rating"></i>
                      <i class="fas fa-star rating"></i>
                      <i class="fas fa-star rating"></i>
                      <i class="fas fa-star rating"></i>
                      <i class="fas fa-star rating"></i>
                  </div>
                  <a href="finalbook.php" class="btn btn-gradient">Book now
                      <span class="dots"><i class="fas fa-ellipsis-h"></i></span>
                  </a>
              </div>

              <div class="grid-item featured-hotels">
                  <img src="jacuzzi.jpg" alt="" class="hotel-image">
                  <h5 class="hotel-name">Jacuzzi</h5>
                  <span class="hotel-price">From 200/- per Hour</span>
                  <div class="hotel-rating">
                      <i class="fas fa-star rating"></i>
                      <i class="fas fa-star rating"></i>
                      <i class="fas fa-star rating"></i>
                      <i class="fas fa-star rating"></i>
                      <i class="fas fa-star-half rating"></i>
                  </div>
                  <a href="finalbook.php" class="btn btn-gradient">Book now
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