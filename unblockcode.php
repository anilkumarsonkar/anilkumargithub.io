<?php
$id=$_REQUEST['id'];
// echo $id;
include("../connect.php");
$query="select * from register where id='$id'";
$res=mysqli_query($con,$query);
if($row=mysqli_fetch_array($res))
{
$status=$row['status'];
}
if($status=='Y')
{
 $query2="update register set status='N' where id='$id'";
 $res2=mysqli_query($con,$query2);
 echo"<script>alert('User Un Block');window.location.href='../index.php';</script>";

}



?>