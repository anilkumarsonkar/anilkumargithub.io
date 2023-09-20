<?php
$ct=$_POST['ct'];
include("../connect.php");
$query="select * from tbl_complain where ctmid='$ct'";
$res=mysqli_query($con,$query);
while($row=mysqli_fetch_array($res)){
    echo $row['complain'];
}

?>
<input type="button" value="Print" onclick="window.print();"/>