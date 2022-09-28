<?php
$name=filter_input(INPUT_POST,'name');
$no_of_people=filter_input(INPUT_POST,'people');
$time=filter_input(INPUT_POST,'time');
$date=filter_input(INPUT_POST,'date');
$mobile_no=filter_input(INPUT_POST,'number');
$email=filter_input(INPUT_POST,'email');
$hotel_name=filter_input(INPUT_POST,'hotel');
$city=filter_input(INPUT_POST,'city');
$room=filter_input(INPUT_POST,'room');
if(!empty($name))
{
if(!empty($no_of_people))
{
  $host="localhost";
  $dbusername="root";
  $dbpassword="";
  $dbname="project";

  //create connection
  $conn=new mysqli($host,$dbusername,$dbpassword,$dbname);
  if(mysqli_connect_error())
  {
    die('Connect Error('. mysqli_connect_errno() .')'
    . mysqli_connect_error());
  }
  else if(isset($_POST['submit'])||isset($_POST['submit1'])){
    $sql1= "Select * from register where reg_email='$email'";
    $result=mysqli_query($conn,$sql1);
    $record=mysqli_fetch_assoc($result);
    $reg_id=$record['reg_id'];
    $sql = "INSERT INTO booking(book_name,no_of_people,time_of_arr,date_of_arr,mobile_no,book_email,hotel_name,city,room_type,book_reg_id)
    values ('$name','$no_of_people','$time','$date','$mobile_no','$email','$hotel_name','$city','$room','$reg_id')";

    if(isset($_POST['submit']))
        {
           header("Location: payment.html");
        }
    else  if(isset($_POST['submit1']))
        {
           header("Location: Activities.php");
        }
   if(!($conn->query($sql))){
       echo "Error: ". $sql ."<br>". $conn->error;
   }
  }
   $conn->close();
  }
else
{
  echo "No of People should not be empty";
  die();
}
}
else{
   echo "Username should not be empty";
   die();
}

?>