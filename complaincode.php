<?php
session_start();
$complain=$_POST['ct'];
// echo $complain;
$addcomplain=$_POST['cta'];
// echo $addcomplain;
$email=$_SESSION['user'];
// echo $email;
include("connect.php");

$query="select * from register where email='$email'";
$res=mysqli_query($con,$query);
if($row=mysqli_fetch_array($res))
{
  $uid=$row['id'];
}
 $query2="insert into tbl_complain(ctmid,id,complain,doc,status)
values('$complain','$uid','$addcomplain',curdate(),'N')";
mysqli_query($con,$query2);


?>