<?php
$cd=$_POST['cd'];
// echo $cid;
$collge=$_POST['clg'];
// echo $collge;
include("../connect.php");
$query="update tbl_college set college='$collge' where cid='$cd'";
mysqli_query($con,$query);
header("location:college.php");

?>