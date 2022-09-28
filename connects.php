<?php
$email=filter_input(INPUT_POST,'newsletter');
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
    $sql = "INSERT INTO newsletter(Email)
    values ('$email')";
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

?>