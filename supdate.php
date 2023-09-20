<?php
$sid=$_POST['cd'];
// echo $sid;
$session=$_POST['clg'];
// echo $collge;
include("../connect.php");
$query="update tbl_session set session='$session' where sid='$sid'";
mysqli_query($con,$query);
?>