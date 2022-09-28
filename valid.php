<?php
session_start();
$con =mysqli_connect('localhost','root','');
mysqli_select_db($con,'project');
$email=$_POST['email'];
$name=$_POST['username'];
$pass=$_POST['password'];

$s="select * from register where reg_username= '$name' && reg_password='$pass'";
$result=mysqli_query($con,$s);
$num=mysqli_num_rows($result);
$row=mysqli_fetch_assoc($result);
$regid=$row['reg_id'];
if($num==1){
    $_SESSION['username']=$name;
    $_SESSION['regid']=$regid;
    header('Location:index.php');
}
else{
    header('Location:log.php');
}
?>