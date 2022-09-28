<!DOCTYPE html>
<!-- Coding by CodingLab | www.codinglabweb.com-->
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--<title> Registration or Sign Up form in HTML CSS | CodingLab </title>-->
    <link rel="stylesheet" href="style2.css">
   </head>
<body>
  <div class="wrapper">
    <h2>Registration</h2>
    <form method="post" action="connect.php" id="form">
      <div class="input-box">
        <input type="text" placeholder="Enter your name" required name="username" id="username">
      </div>
      <div class="input-box">
        <input type="text" placeholder="Enter your email" required name="email" id="email">
      </div>
      <div class="input-box">
        <input type="password" placeholder="Create password" required name="password" id="password">
      </div>
     <!-- <div class="input-box">
        <input type="password" placeholder="Confirm password" required>
      </div>-->
      <div class="policy">
        <input type="checkbox">
        <h3>I accept all terms & condition</h3>
      </div>
      <div class="input-box button">
        <input type="Submit" value="Register Now">
      </div>
      <div class="text">
        <h3>Already have an account? <a href="log.php">Login now</a></h3>
      </div>
    </form>
  </div>
  <script src="script.js"></script>
</body>
</html>
