
<?php

session_start();
if($_SESSION['admin']=="")
{
session_destroy();
header("location:../index.php");
}
include("../connect.php");
$query="select * from tbl_session order by sid";
$res=mysqli_query($con,$query);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="../css/bootstrap.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="../js/bootstrap.bundle.js"></script>
    <style>
        .sdm:hover{
      background-color: rgb(189, 252, 252);
      
    }
        .n1 {
            height: 50px;
            box-shadow: 5px 5px 15px rgb(190, 42, 42)y;
            padding: 5px;
        }

        .n2 {
            height: 50px;
            box-shadow: 0px 0px 5px gray;
            padding: 5px;
        }
        .n3{
            height: 50px;
            width: 95%;
            background-color: #b4cf7f;
            
           
            border-radius: 10px;
        }

        .s1 {
            height: 20px;
            width: 20px;
            border-radius: 50%;
            border: none;
            color: white;
            background-color: red;
            margin-left: -12px;
            margin-bottom: 15px;
            float: left;


        }

        .s2 {
            height: 20px;
            width: 20px;
            border-radius: 50%;
            border: none;
            color: white;
            background-color: rgb(0, 26, 255);
            margin-left: -10px;
            float: left;
            margin-bottom: 15px;

        }
        .cr{
            margin: auto;
            margin: 20px;
            border: none;
        }
      
        .cr1{
            margin: auto;
            margin: 20px;
            border: none;
           
            
        }
        .tr{
            margin: auto;
            margin: 20px;
            border: none;
            

        }
        .c11{
            background-color: darkblue;
            height:100px;
        }
        .c22{
            background-color: rgb(61, 212, 238);
            height:100px;
        }
        .c33{
            background-color: darkblue;
            height:100px;
        }
        .c44{
            background-color: red;
            height:100px;
        }
        .ico{
            color: wheat;
            font-size: 50px;
            padding-left:100px;
            margin-top: 20px;
        }
        .one{
            height: 60px;
            border: 1px solid;
            /* margin-right: 10px;
          
            margin-top: 10px; */
            margin-bottom: 10px;
            border-radius: 5pxpx;
            
        }
        .footer{
        height:45px;
        width:100%;
        box-shadow:5px 5px 15px black;
       margin-top:100px;
        background-color:black;
        background-color: rgb(243, 249, 249);
        
    }
    body{
        background-image:url('../images/d1.avif');
        background-size:cover;
        
    }
    .sdm{
      background-color: rgb(243, 249, 249);
      box-shadow:5px 5px 15px grey inset;
    }
    hr{
      color:black;
    }
    form{
        margin-left:100px;
        margin-top:40px;
        height:180px;
        width:500px;
        border-radius:20px;
       
        border:1px solid skyblue;

    }
   form input{
        height:50px;
        width:300px;
        border-radius:10px;
        border:1px solid;
        margin-left:100px;
    }
    table{
        height:50px;
        width:700px;
        border-radius:20px;
        margin-top:50px;
        border:1px solid;
        padding:20px;
        

    }
    th,tr,td{
        padding:10px;
        box-shadow:2px 2px 4px grey inset;
        text-align:center;
    }
    </style>
</head>

<body>
    <div class="outer" class="container-fluid ">
        <div class="row p-0 m-0">
        <div class="col-sm-2 sdm" style=" height: 600px; color: gainsboro;">
                <h3 style=" color:black; margin-top:10px;"> <img src="../images/mithla.jpg" height="50px"; width="50px"; style="border-radius:50%; "/> L.N.M.U</h3>
 <hr />
 <a href="dashboard.php" style="text-decoration:none;"> <h5 align="" style="color:black; "> <i class="fa-solid fa-gauge-high"></i>&nbsp;&nbsp;
                    Dashboard </h5></a><HR/>
                <a href="session.php" style="text-decoration:none; color:black;"><h6>SESSION MANAGEMENT</h6></a>
                <HR />
                <a href="college.php" style="text-decoration:none; color:black;"><h6>COLLEGE MANAGEMENT</h6></a>
                <HR />
               

                    <a href="../userdashboard.php" style="text-decoration:none; color:black;"><h6>USER MANAGEMENT</h6></a>
                <HR />

               

               <div class="dropdown">
  <button class="btn text-dark dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
  <span style="margin-left:-10px; color:black;">COMPLAINED MANAGEMENT<span>
  </button>
  
  <ul class="dropdown-menu">
    <li><a class="dropdown-item" href="noteprocessyet.php">None Process Yet</a></li>
    <li><a class="dropdown-item" href="pc.php">Pending Complained</a></li>
    <li><a class="dropdown-item" href="cp.php">Close Complained</a></li>
    <a href="report.php" style="text-decoration:none; color:black;"><h6>Download Report  </h6></a><hr/>
  </ul>
</div>
<hr/>
     

               <a href="#" style="text-decoration:none; color:black;"><h6>CHANGE PASSWORD </h6></a><hr/>
               <a href="#" style="text-decoration:none; color:black;"><h6>USER lOG MANAGEMENT  </h6></a><hr/>

               <h6>
                
               <a href="#" style="text-decoration:none; color:black;"> <h6>EXTRAS</h6></a>
                <hr />
                <a href="#" style="text-decoration:none; color:black;"><h6>PAGES  </h6></a><hr/>
                   </h6>
</div>

            <div class="col-sm-10 m-0 p-0">
                <nav class="navbar bg-body-tertiary n1">
                    <div class="container">

                    
                        <i class="fa-solid fa-magnifying-glass ic" style="margin-left: 20px;"></i>
                        <i class="fa-solid fa-bell ic" style="margin-left: 20px;"></i>
                        <div class="s1"><sup>
                                &nbsp;&nbsp;5
                            </sup></div>
                        <i class="fa-regular fa-envelope ic" style="margin-left: 20px;"></i>
                        <div class="s2"><sup>
                                &nbsp;&nbsp;6
                            </sup></div>
                            <a href="logout.php">
                            <input type="submit" value="Logout" style="margin-left: 830px; border-radius: 10%; background-color:red; color:white; border:none;"></a>
                           <h6><i><?php echo 'admin@1234gmail.com' ?></i></h6>
                        <a class="navbar-brand" href="#">
                            <img src="../images/admn.png" alt="Bootstrap" width="35" height="35"
                                style="margin-left:0; border-radius: 50%;">
                        </a>
                    </div>
                </nav>
                <!-- second navbar start -->
                <div class="container m-0 p-0 mt-2 n2">
                    <nav class="navbar navbar-expand-lg bg-body-tertiary">
                        <div class="container-fluid">
                            <a class="navbar-brand" href="#">Session</a>
                        </div>
                    </nav>
                </div>
                <!-- second navbar end -->
            <form action="scode.php" method="post">    
          <h5 align="center">Session<h5>
          <input type="text" name="s">
          <br/>
          <br/>
          <input type="submit" value="Add Session"/>

        

</form> 
<table>
    <tr>
    <th>S.No</th>
    <th>Academic Session</th><th>Date Of Creation</th><th>Created By</th>
    
    <th>Edit</th>
    <th>Delete</th>
</tr>

    <?php
    $i=1;
    while($row=mysqli_fetch_array($res)){

    ?>
    <tr>
        <td><?php echo $i;?></td>
        <td><?php echo $row['session'];?></td>
        <td><?php echo date('d/m/y');?></td>
        <td><?php echo "<img src='../images/admn.png' height='30px;' style='border-radius:50%;'/>"?></td>
        <td><a href="editsession.php?id=<?php echo $row['sid'];?>">Edit</a></td>
        <td><a href="sdelete.php?id=<?php echo $row['sid'];?>" style="text-decoration:none; color:white;">
        <button style="width:70px; border:none; border-radius:10px; background-color:black;">❌</a></button></td>
        
       
    </tr>
    <?php
     $i++;
     }
    
    ?>

</table>
            </div>
        </div>
    </div>
    <div class="row m-0 p-0">
    <div class="col-sm-12 footer">
<p align="center" style="color:black; margin-top:15px;">&copy;CopyRights Disigned and develop by<b><i> Anil kumar sonkar</i></b></p>
    </div>
</div>
</body>

</html>