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
if($status=='N')
{
 $query2="update register set status='Y' where id='$id'";
 $res2=mysqli_query($con,$query2);
 echo"<script>alert('User Block');window.location.href='../index.php';</script>";

}



?>