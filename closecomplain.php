<?php
session_start();


$email=$_SESSION['user'];
// echo $email;
include("connect.php");
$query="select * from register where email='$email'";
$res=mysqli_query($con,$query);
if($row=mysqli_fetch_array($res)){
    $uid= $row['id'];
}
$query1="select * from tbl_complain where id='$uid' and status='C'";
$res1=mysqli_query($con,$query1);




?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="./css/bootstrap.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="./js/bootstrap.bundle.js"></script>
    <style>
        .n1 {
            height: 50px;
            background-color: rgb(243, 249, 249);
            box-shadow:5px 5px 5px grey;
            padding:5px;
           
        }
        .n1:hover{
            background-color: rgb(189, 252, 252);
          
        }
      
     
        .n3{
            height: 50px;
            width: 95%;
            background-color:#b4cf7f;
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
        body
        {
        background-image:url('./images/ad2.jpg');
        background-size:cover;
        background-color:#eef6fa;
        
    }
    .view{
        width:1250px;
        padding-top:30px;
    }
    .view th{
        width:1250px;
        padding:5px;
        box-shadow:2px 2px 5px black inset;
        text-align:center;
    }
    .view td{
        padding:5px;
        width:1250px;
        box-shadow:2px 2px 5px black inset;
        color:#121212;;
        font-size:16px;
        text-align:center;
       
    }
        .cr1{
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
    tr,td,th{
        box-shadow:2px 2px 4px black;
        margin-top:50px;
        margin-left:200px;
        text-align:center;
         
    }
    .sdm{
      background-color: rgb(243, 249, 249);
      box-shadow:5px 5px 15px grey inset;
      height:600px;
      
    }
    .sdm:hover{
      background-color: rgb(189, 252, 252);
    }
    hr{
      color:black;
    }
    
    </style>
</head>

<body>
    <div class="outer" class="container-fluid ">
        <div class="row p-0 m-0">
            <div class="col-sm-2 sdm" style="">
                <h3 style=" color:black; margin-top:10px;"> <img src="./images/mithla.jpg" height="50px"; width="50px"; style="border-radius:50%; "/> USER</h3>
                <hr />
              <a href="admin/dashboard.php"style="text-decoration:none; color:black;"><h5> <i class="fa-solid fa-gauge-high"></i>
                    Dashboard</h5></a><hr/>
                <a href="#" style="text-decoration:none; color:black;"><h6>UPDATE PROFILE</h6></a>
                <HR />
                <a href="addcomplain.php" style="text-decoration:none; color:black;"><h6>ADD COMPLAINED</h6></a>
                <HR />
               

                    <a href="mycomplains.php" style="text-decoration:none; color:black;"><h6>MY COMPLAINEDS</h6></a>
                <HR />

               

                <a href="#" style="text-decoration:none; color:black;"><h6>DISCUSSION FORUM</h6></a><hr/>
                <a href="admin/cp.php" style="text-decoration:none; color:black;"><h6>CLOSE COMPLAINEDS </h6></a><hr/>
               <a href="uchangepass.php" style="text-decoration:none; color:black;"><h6>CHNAGE PASSWORD</h6></a><hr/>
              

               <h6>
               <a href="admin/logout.php" style="text-decoration:none; color:black;"><h6>LOGOUT</h6></a><hr/>
              

              <h6>
                
               <a href="#" style="text-decoration:none; color:black;"> <h6>EXTRAS</h6></a>
                <hr />
                <a href="#" style="text-decoration:none; color:black;"><h6>PAGES  </h6></a><hr/>
                   </h6>

            </div>
            <div class="col-sm-10 m-0 p-0">
                <nav class="navbar n1">
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
                            
                            <img src="./images/flag2.jpg" alt=""  width="35" height="35"  style=" border-radius: 50%; margin-left:850px;">
                            <td><?php echo date('d/m/y H: i: s');?></td>
                        <a class="navbar-brand" href="#">
                            <img src="./images/adm.jpg" alt="Bootstrap" width="35" height="35"
                                style="margin-left:0; border-radius: 50%;">
                        </a>
                    </div>
                </nav>
                <center>
                <table>
                <tr>
                    <th>S.No</th>
                    <th>Type of Complaines </th>
                    <th>Complain</th>
                    <th>Status of Complain</th>
                    <th>Date of Complain</th>
                    <th>Date of Docompletion</th>

</tr>
<?php
$i=1;
while($row1=mysqli_fetch_array($res1))
{
    ?>
    <tr><td><?php echo $i; ?></td>
    <td><?php  $cmt= $row1['ctmid'];?>
<?php $query2="select * from tbl_complaint_type_mng where ctmid='$cmt'";
$res2=mysqli_query($con,$query2);
if($row2=mysqli_fetch_array($res2))
{
    echo $row2['ctmname'];
}
?>
</td>
    <td><?php  echo $row1['complain'];?>
    
</td>
    <td><?php  echo $row1['status'];?></td>
    <td><?php  echo $row1['doc'];?></td>
    <td><?php  echo $row1['docompletion'];?></td>
    </tr>
   <?php
}

?>

</table>

</center>
            </div>
          
            </div>          
              <!-- end table -->
            </div>
               
            </div>
        </div>
    </div>
    <div class="row m-0 p-0">
    <div class="col-sm-12 footer">
<p align="center" style="color:black; margin-top:15px;">&copy;CopyRights Disigned and develop by<b><i> Anil kumar sonkar</b></i></p>
    </div>
</div>
</body>

</html>