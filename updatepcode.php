<?php

$id=$_POST['uid'];
$name=$_POST['name'];
// echo $name;
$fname=$_POST['fname'];
// echo $fname;
// $email=$_POST['email'];
// echo $email;
$mobile=$_POST['mobile'];
// echo $mobile;
$gender=$_POST['g'];
// echo $gender;
$dob=$_POST['dob'];
// echo $dob;
$pincode=$_POST['pincode'];
// echo $pincode;
$address=$_POST['text'];
// echo $address;

 
include("connect.php");
$query="update register set name='$name',fname='$fname',mobile='$mobile',gender='$gender',
dob='$dob',pincode='$pincode',address='$address' where id='$id'";

 mysqli_query($con,$query);
?>