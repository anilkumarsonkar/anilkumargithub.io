<?php
session_start();
$id=$_POST['id'];
//echo $id;
$filename=$_FILES['file']['name'];
//echo $filename;
$size=$_FILES['file']['size'];
//echo $size;
$type=$_FILES['file']['type'];
//echo $type;
$tmp_name=$_FILES['file']['tmp_name'];
// echo $tmp_name;
$email=$_SESSION['user'];



include("connect.php");
$query="select * from register where email='$email'"; 
$res=mysqli_query($con,$query);
if($row=mysqli_fetch_array($res))
{
    $location="student/";
    $query1="update register set profile='$filename' where email='$email'";
    mysqli_query($con,$query1);
    echo $query1;




move_uploaded_file($tmp_name,$location.$filename);

echo"<script>alert('PIC UPLOADED😊😊');window.location.href='uploadpic.php';</script>";
}
?>