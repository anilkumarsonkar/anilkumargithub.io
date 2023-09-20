<?php
$id=$_REQUEST['id'];
// echo $id;
include("../connect.php");
$query="delete from tbl_complaint_type_mng where ctmid=$id";
mysqli_query($con,$query);
header("location:tbl_complaint_type_mng.php");

?>