<?php
$cd=$_POST['cd'];
// echo $cid;
$collge=$_POST['clg'];
// echo $collge;
include("../connect.php");
$query="update tbl_complaint_type_mng set ctmname='$collge' where ctmid='$cd'";
mysqli_query($con,$query);
header("location:complaint_type_mng.php");

?>