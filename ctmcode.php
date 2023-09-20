<?php
$cotm=$_POST['ctm'];
// echo $cotm;

include("../connect.php");
$check="select * from tbl_complaint_type_mng where ctmid ='$cotm'";
$res=mysqli_query($con,$check);
if($row=mysqli_fetch_array($res)){
    header("location:tbl_complaint_type_mng.php?message=reject");
}else{
$query="insert into tbl_complaint_type_mng(ctmname,status,dor)values('$cotm','N',curdate())";
mysqli_query($con,$query);
header("location:complaint_type_mng.php");
}
?>