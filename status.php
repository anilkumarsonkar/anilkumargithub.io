<?php
$id=$_REQUEST['id'];
// echo $id;

include("../connect.php");
$query="select * from tbl_complain where cmpid='$id'";
$res=mysqli_query($con,$query);
if($row=mysqli_fetch_array($res))
{
$status =$row['status'];
}
if($status=='N')
{
 $query2="update tbl_complain set status='P' where cmpid='$id'";
 $res2=mysqli_query($con,$query2);
 echo"<script>alert('Status Seccessfully');window.location.href='noteprocessyet.php';</script>";

}



?>