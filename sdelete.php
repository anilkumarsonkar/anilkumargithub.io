<?php
$id=$_REQUEST['id'];
// echo $id;
include("../connect.php");
$query="delete from tbl_session where sid=$id";
mysqli_query($con,$query);
header("location:session.php");

?>