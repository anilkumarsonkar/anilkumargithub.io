<?php
session_start();
$op=$_POST['opp'];
// echo $op;
$np=$_POST['npp'];
// echo $np;
$cnp=$_POST['cpp'];
// echo $cnp;
$email=$_SESSION['user'];

include("connect.php");
$query="select password from register where email='$email'";
$res=mysqli_query($con,$query);
if($row=mysqli_fetch_array($res)){
     $pp=$row['password'];
    
}
if($op==$pp){
  if($op==$np){
    // echo "nhi chalega";
   
    echo"<script>alert('old password and new are same');window.location.href='uchangepass.php'</script>";
  }
  elseif($np==$cnp){
    // echo "update chalega";
 echo $query2="update register set password='$np' where email='$email'";
  mysqli_query($con,$query2);

  echo"<script>alert(' password change Seccussfully');window.location.href='login.php'</script>";
  }
  else{
    echo"<script>alert('New password and Confirm password are not same');window.location.href='uchangepass.php'</script>";
    // echo "nhi hoga";
}
}
else{
    // echo "nhi";
   echo"<script>alert('old password and login password are same');window.location.href='uchangepass.php'</script>";
}




  


?>

