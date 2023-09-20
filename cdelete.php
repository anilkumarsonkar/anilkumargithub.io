<?php
$id=$_REQUEST['id'];
// echo $id;
include("../connect.php");
$query="delete from tbl_college where cid=$id";
mysqli_query($con,$query);
header("location:college.php");

?>