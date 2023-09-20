<?php
session_start();
$ans=$_POST['ans'];

// echo $ans;
$qid=$_POST['qid'];
// echo $qid;
include("connect.php");
$email=$_SESSION['user'];
$query="select * from register where email='$email'";
$res=mysqli_query($con,$query);
if($row=mysqli_fetch_array($res)){
    $uid= $row['id'];
}
$query2="insert into tbl_answer(id,qid,answer,date) value('$uid','$qid','$ans',curdate())";
mysqli_query($con,$query2);
echo"<script>alert('Your Answer!');window.location.href='disscus.php';</script>";

?>