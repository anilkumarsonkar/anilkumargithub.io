<?php
session_start();
$ques=$_POST['ques'];
// echo $ques;
include("connect.php");
$email=$_SESSION['user'];
// echo $email;
$query="select * from register where email='$email'";
$res=mysqli_query($con,$query);
if($row=mysqli_fetch_array($res)){
    $uid= $row['id'];
}
$query2="insert into tbl_question(id,question,date)values('$uid','$ques',curdate())";
$res2=mysqli_query($con,$query2);
echo"<script>alert('Question Added Secessfully');window.location.href='disscus.php';</script>";

?>