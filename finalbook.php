<?php
include('header.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="style1.css">
    <title>Booking</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Caveat:wght@400;700&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Architects+Daughter&display=swap" rel="stylesheet">
    
</head>

<body>
   <!-- <header class="header1">
        <div class="container">
            <nav class="nav">
                <a class="logo" href="index.html">
                    <img src="logo.png" alt="">
                </a>
                <div class="hamburger-menu">
                    <i class="fas fa-bars open-state"></i>
                    <i class="fas fa-times close-state"></i>
                </div>
                <ul class="nav-list">
                    <li class="nav-item">
                        <a href="index.html" class="nav-link">Home</a>
                    </li>
                    <li class="nav-item">
                        <a href="idkwhat.html" class="nav-link">About</a>
                    </li>
                    <li class="nav-item">
                        <a href="taxi.html" class="nav-link">Book A Ride</a>
                    </li>
                    <li class="nav-item">
                        <a href="Contact.html" class="nav-link">Contact</a>
                    </li>
                    <li class="nav-item">
                        <a href="Donate.html" class="nav-link">Donate</a>
                    </li>
                </ul>
            </nav>
        </div>
    </header>-->
    <main class="main_bg1">
    <div class="form">
        <div class="form-text">
            <h1>Book Now </h1>
        </div>
        <div class="main-form">
            <form action="finalbooking.php" method="POST">
                <div>
                    <span>Name</span>
                    <input type="text" name="name" id="name" required>
                </div>
                <div>
                    <span>Email Address</span>
                    <input type="email" name="email" id="email" required> 
                </div>
                <div>
                    <!-- <---this is the select option--->
                    <span>Activities</span>
                    <select name="activity" id="activity" required>
                        
                        <option value="Zip Line">Zip Line</option>
                        <option value="Fun and Games">Fun and Games</option>
                        <option value="Pool Day">Pool Day</option>
                        <option value="Spa Day">Spa Day</option>
                        <option value="Steamy Sauna">Steamy Sauna</option>
                        <option value="Jacuzzi">Jacuzzi</option>
                        <option value="Outdoor Activities + Food">Outdoor Activities + Food</option>
                        <option value="Activities + Relaxation">Activities + Relaxation</option>
                        <option value="Relaxation + Food">Relaxation + Food</option>
                    </select>
                    <!-- <---this is the select option--->
                </div>
               <!-- <div>
                    <span>Time of Arrival</span>
                    <input type="text" name="time" id="time" required>
                </div>
                <div>
                    <span>Date of Arrival</span>
                    <input type="date" name="date" id="date" required>
                </div>-->
                <div>
                    <span>Mobile Number</span>
                    <input type="tel" name="number" id="number" required>
                </div>
                <div id="submit">
                    <input type="submit" name="submit" value="Pay now" id="submit"> 
                </div>
            </form>
        </div>
    </div>
</main>
<!--<footer class="footer">
    <div class="container">
        <div class="footer-content">
            <div class="footer-content-brand">
                <a href="index.html" class="logo">
                    <img class="logo-image" src="./images/logo.png" alt="">
                </a>
                <div class="page">

                 <h1 class="footer1">subscribe to our newsletter &hellip;</h1>
                 <form  class="news" action="#">
                   <input class="newsletter" type="https://www.google.com/" placeholder="Email (e.g. someone@host.com)" />
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
 <script src="main.js"></script>-->
</body>
</html>
<?php
include('footer.php');
?>