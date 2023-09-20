<?php
session_start();
$email=$_POST['em'];
// echo $email;

$password=$_POST['pa'];
// echo $password;
include("connect.php");
$query="select * from register where email='$email' and password='$password' and status='N'";
$res=mysqli_query($con,$query);

if($row=mysqli_fetch_array($res))
{
   $_SESSION['user']=$email;
header("location:userdashboard.php");

}
else{
    echo"<script>alert('Invaild email id and password');window.location.href='login.php'</script>";
}


?>