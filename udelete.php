<?php
$id=$_REQUEST['id'];
// echo $id;
include("connect.php");
$query="delete from register where id=$id";
mysqli_query($con,$query);
header("location:userdashboard.php");

?>