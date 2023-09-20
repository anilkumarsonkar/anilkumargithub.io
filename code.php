<?php
$name=$_POST['n'];
// echo $name;
$fname=$_POST['fn'];
// echo $fname;
$email=$_POST['email'];
// echo $email;
$password=$_POST['password'];
// echo $password;
$gender=$_POST['gender'];
// echo $gender;
$mobile=$_POST['mobile'];
// echo $mobile
$dob=$_POST['dob'];
// echo $dob;
$pincode=$_POST['pincode'];
// echo $pincode;
$addres=$_POST['text'];
// echo $addres;
$city=$_POST['city'];
// echo $city;
$course=$_POST['course'];
// echo $course;
$session=$_POST['session'];
// echo $session;
$college=$_POST['college'];
// echo $college;
include("connect.php");
$check="select * from register where email ='$email' or mobile='$mobile'";
$res=mysqli_query($con,$check);
if($row=mysqli_fetch_array($res)){
    header("location:registraion.php?message=reject");
}else{
echo $query="insert into register(name,fname,email,password,gender,mobile,dob,pincode,address,city,course,sid,cid,status,dor)
values('$name','$fname','$email','$password','$gender','$mobile','$dob','$pincode','$addres','$city','$course','$session','$college',
'N',curdate())";
mysqli_query($con,$query);
header("location:login.php?message=seccess");
}
?>