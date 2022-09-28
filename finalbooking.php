<?php
$name=filter_input(INPUT_POST,'name');
$email=filter_input(INPUT_POST,'email');
$activity=filter_input(INPUT_POST,'activity');
$number=filter_input(INPUT_POST,'number');
if(!empty($name))
{
if(!empty($email))
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
    $sql1= "Select * from booking where book_email='$email'";
    $result=mysqli_query($conn,$sql1);
    $record=mysqli_fetch_assoc($result);
    $book_id=$record['book_id'];
    $sql = "INSERT INTO activities(a_name,a_email,a_mobilenumber,a_activity,a_book_id)
    values ('$name','$email','$number','$activity','$book_id')";
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