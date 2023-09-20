<?php
$session=$_POST['s'];
echo $session;
include("../connect.php");
$check="select * from tbl_session where session='$session'";
$res=mysqli_query($con,$check);
if($row=mysqli_fetch_array($res)){
    header("location:session.php?message=reject");
}else{
$query="insert into tbl_session(session,status,dor)values('$session','N',curdate())";

mysqli_query($con,$query);
header("location:session.php");

}

?>