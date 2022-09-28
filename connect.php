<?php
$username=filter_input(INPUT_POST,'username');
$password=filter_input(INPUT_POST,'password');
$email=filter_input(INPUT_POST,'email');
if(!empty($username))
{
if(!empty($password))
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
    $sql = "INSERT INTO register(reg_username ,reg_password,reg_email)
    values ('$username','$password','$email')";
    if($conn->query($sql)){
        header("Location: log.php");

    }
    else{
        echo "Error: ". $sql ."<br>". $conn->error;
    }
    $conn->close();
  }
}
else
{
  echo "Password should not be empty";
  die();
}
}
else{
   echo "Username should not be empty";
   die();
}

?>