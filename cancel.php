<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js">
    <title>Document</title>
</head>
<body>
<?php
session_start();
$con =mysqli_connect('localhost','root','');
mysqli_select_db($con,'project');
$rid=$_SESSION['regid'];
$bid=$_GET['b_id'];
$sql1="delete from booking where book_reg_id='$rid' and book_id='$bid'";
mysqli_query($con,$sql1);
 echo '<div class="alert alert-danger" role="alert">
  Your booking has been cancelled.<a href="index.php" class="alert-link"> Click this to go to home page</a>
</div>';
?>
</body>
</html>
