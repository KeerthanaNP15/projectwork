<!DOCTYPE html>
<!-- === Coding by CodingLab | www.codinglabweb.com === -->
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- ===== Iconscout CSS ===== -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">

    <!-- ===== CSS ===== -->
    <link rel="stylesheet" href="style3.css">
         
    <!--<title>Login & Registration Form</title>-->
</head>
<body>
    <div class="container">
        <div class="forms">
            <div class="form login">
                <span class="title">Login</span>

                <form id="form" method="post" action="valid.php">
                    <div class="input-field">
                    <input type="text" placeholder="Enter your email" required name="email" id="email">
                    <i class="uil uil-envelope icon"></i>
                    </div>
                    <div class="input-field">
                        <input type="text" placeholder="Enter your username" required name="username" id="username">
                        <i class="uil uil-envelope icon"></i>
                    </div>
                    <div class="input-field">
                        <input type="password" class="password" name="password" placeholder="Enter your password" required name="password" id="password">
                        <i class="uil uil-lock icon"></i>
                        <i class="uil uil-eye-slash showHidePw"></i>
                    </div>
                    <div class="checkbox-text">
                        <div class="checkbox-content">
                            <input type="checkbox" id="logCheck">
                            <label for="logCheck" class="text">Remember me</label>
                        </div>
                        
                        <a href="#" class="text">Forgot password?</a>
                    </div>

                    <div class="input-field button">
                        <input type="submit" value="Login">
                    </div>
                </form>

                <div class="login-signup">
                    <span class="text">Not a member?
                        <a href="reg.php" class="text signup-link">Signup Now</a>
                    </span>
                </div>
            </div>
        </div>
    </div>

    <!--<script src="script.js"></script>-->
</body>
</html>

