<?php
$name=filter_input(INPUT_POST,'name');
$email=filter_input(INPUT_POST,'email');
$subject=filter_input(INPUT_POST,'subject');
$messege=filter_input(INPUT_POST,'messege');
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
    $sql = "INSERT INTO contact(c_name, c_email, subject, messege)
    values ('$name', '$email', '$subject', '$messege')";
    if($conn->query($sql)){
        header("Location: index.php");

    }
    else{
        echo "Error: ". $sql ."<br>". $conn->error;
    }
    $conn->close();
  }
}
else
{
  echo "Email should not be empty";
  die();
}
}
else{
   echo "Name should not be empty";
   die();
}

?>