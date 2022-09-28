<?php
$name=filter_input(INPUT_POST,'name');
$email=filter_input(INPUT_POST,'email');
$number=filter_input(INPUT_POST,'number');
$city=filter_input(INPUT_POST,'city');
$hname=filter_input(INPUT_POST,'hotel');
$time=filter_input(INPUT_POST,'time');
$date=filter_input(INPUT_POST,'date');
$spot=filter_input(INPUT_POST,'spot');
$ride=filter_input(INPUT_POST,'ride');
if(!empty($name))
{
if(!empty($city))
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
  else{
    $sql1= "Select * from register where reg_email='$email'";
    $result=mysqli_query($conn,$sql1);
    $record=mysqli_fetch_assoc($result);
    $reg_id=$record['reg_id'];
    $sql = "INSERT INTO book_a_ride(b_name,b_mobilenumber,b_email,b_city,b_hotel,b_timeofarr,b_dateofarr,pick_up_spot,choice_of_ride,b_reg_id)
    values ('$name','$number','$email','$city','$hname','$time','$date','$spot','$ride','$reg_id')";
  }
    if($conn->query($sql))
    {
       header("Location: payment.html");
    }

    else{
   echo "Error: ". $sql ."<br>". $conn->error;
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