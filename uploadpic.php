<?php
session_start();
include("connect.php");
$email=$_SESSION['user'];
$query="select * from register where email='$email'";
$res=mysqli_query($con,$query);
if($row=mysqli_fetch_array($res))
{
   
}

?>

<html>
    <head>
</head>
<body>
    <form action="profilecode.php"  enctype="multipart/form-data" method="post" ><h2>FILE UPLOADING</h2><br/><br/>
    ID
    <input type="text" name="id" value="<?php echo $row['id'];?>"/>
       
        <br/>
        Upload Pic
        <input type="file" name="file"/>
        <br/>
        <input type="submit" value="UPLOAD"/>
</form>
<br/>
<table>
    <tr>
        <th>ID</th>
        <th>NAME</th>
        <th>FILENAME</th>
        <th>STATUS</th>
        <th>DATE OF UPLOADING</th>
        <th>DOWNLOAD</th>
</tr>
<?php
$a=1;
while($row=mysqli_fetch_array($res)){
   ?>
   <tr>
    <td><?php echo $a; ?></td>
    <td><?php echo $row['name']; ?></td>
    <td><img  style="width:150px; height:190px;" src="student/<?php echo $row['profile']?>"/></td>
    <td><?php  echo $row['status']; ?></td>
    <td><?php echo $row['dor']?></td>
    <td><a href="http:localhost/fileuploading/student/<?php echo $row['profile'] ?>">Download</a></td>
   </tr>
   <?php
   $a++;
}
?>
</table>
</body>
    </html>