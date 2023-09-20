<?php
$college=$_POST['college'];
// echo $college;
include("../connect.php");
$check="select * from tbl_college where college ='$college'";
$res=mysqli_query($con,$check);
if($row=mysqli_fetch_array($res)){
    echo"<script>alert('Already Add College');window.location.href='college.php';</script>";
}else{
$query="insert into tbl_college(college,status,dor)values('$college','N',curdate())";
mysqli_query($con,$query);
header("location:college.php");
}

?>