<?php
include('header.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js">
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Bookings</title>
</head>
<body>
<?php
session_start();
$con =mysqli_connect('localhost','root','');
mysqli_select_db($con,'project');
$rid=$_SESSION['regid'];
$sql="select * from booking where book_reg_id=$rid";
$result=mysqli_query($con,$sql);
echo '<h1 class="text-center mt-3">Your Bookings</h1>';
while($row=mysqli_fetch_assoc($result))
{
  $bid=$row['book_id'];
  $bname=$row['book_name'];
  $mobile=$row['mobile_no'];
  $hotel_name=$row['hotel_name'];
  $city=$row['city'];
  echo '<div class="container" >
  <div class="card mt-2 mx-auto" style="width:500px;">
   <div class="card-body">
     <p class="card-text">Name: '.$bname.' </p>
     <p class="card-text">Mobile number: '.$mobile.' </p>
     <p class="card-text">Hotel Name: '.$hotel_name.' </p>
     <p class="card-text">City: '.$city.' </p>
     <a href="cancel.php?b_id='.$bid.'" class="btn btn-danger">Cancel</a>
   </div>
  </div>
 </div>';
}
?>
</body>
</html>
<?php
include('footer.php');
?>
