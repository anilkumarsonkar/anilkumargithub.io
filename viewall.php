<?php
// include("dashboard.php");
session_start();
$email=$_SESSION['user'];
$id=$_REQUEST['id'];
include("../connect.php");
$query="select * from register where id='$id'";
$res=mysqli_query($con,$query);

$query6="select * from register";
$res6=mysqli_query($con,$query6);
$query7="select * from register";
$res7=mysqli_query($con,$query7);

?>
<html>
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
            
    h1,h2,h3,h4,h5,h6{
    font-family: "Raleway", sans-serif;
}

.user-details {
            background-color: #fff;
            /* border: 2px solid gray; */
            border-radius: 8px;
            box-shadow: 0px 0px 13px lightseagreen;
            margin: 30px auto;
            padding: 20px;
            width: 10% !important;
            font-family: 'Poppins', sans-serif;
            position: relative;
            overflow: hidden;
            transition: .3s ease-in-out;
        }

        .user-details:hover{
            transform: scale(1.039);
        }

        .user-details h2 {
            font-size: 1.5rem;
            font-weight: 600;
            text-align: center;
            margin-bottom: 20px;
        }

        .user-info {
            padding: 10px;
            width:50%;
            background-color:black;
            color:white;
        }

        .user-info span {
            font-size: 1rem;
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding-bottom: 10px;
            margin-left:20px;

        }

        .user-info strong {
            font-weight: 600;
            margin-right: 10px;
        }

        .ruled-line {
            border-bottom: 2px unset #ccc;
            margin: 0 -20px;
            padding: 0 20px;
        }
            </style>
</head>
<body>
<div class="col-sm-12 m-0 p-0">
<nav class="navbar bg-body-tertiary n1">
                    <div class="container">

                    
                        <i class="fa-solid fa-magnifying-glass ic" style="font-size:25px; margin-left:-20px;"></i>
                        <i class="fa-solid fa-bell ic" style="font-size:25px;"></i>
                        
                        <i class="fa-regular fa-envelope ic" style="font-size:25px;"></i>
                        
                        <?php
    $a=1;
    if($row7=mysqli_fetch_array($res7)){

    
    ?>
                            
                            <img src="../student/<?php echo $row7['profile'] ?>" alt=""  width="35" height="35"  style="margin-left: 980px;  border-radius: 50%;">

                            <?php

}
?>
<?php
                            echo $email;
                            ?>
       
                        
                    </div>
                </nav>
       
                <!-- second navbar start -->
                
                </div>
</div>
<td><?php 
                            date_default_timezone_set('Asia/Kolkata');
                            $currenthour =date('G');
                            if($currenthour >=5 && $currenthour <12){
                                $greeting ='Hello Good Morning !';
                            }
                            elseif($currenthour>=12 && $currenthour<16){
                                    $greeting='Hello Good Afternoon';
                            }
                            else{
                                $greeting='Hello Good Evening!';
                            }
                            echo "<i style='font-size:25px; margin-left:400px; color:red;'> $greeting</i>"
                            ?></td>

<center>
<form action="" method="post">
   
    <div class="im">
    <?php
    $a=1;
    if($row6=mysqli_fetch_array($res6)){

    
    ?>
  <img src="../student/<?php echo $row6['profile'] ?> "height="100px" width="100px" style="border-radius:50%;"/>

<?php

    }
    ?>
    </div>
    <div class="container">
            <?php
            $i = 1;
            while ($row = mysqli_fetch_array($res)) {
                ?>
                
                    
                    
                    <div class="user-info">
                        <span><strong>Name:</strong>
                            <?php echo $row['name']; ?>
                        </span>

                        <div class="ruled-line"></div>

                        <span><strong>Father's Name:</strong>
                            <?php echo $row['fname']; ?>
                        </span>


                        <div class="ruled-line"></div>

                        <span><strong>Gender:</strong>
                            <?php echo $row['gender']; ?>
                        </span>


                        <div class="ruled-line"></div>

                        <span><strong>Email:</strong>
                            <?php echo $row['email']; ?>
                        </span>


                        <div class="ruled-line"></div>

                        <span><strong>Password:</strong>****</span>


                        <div class="ruled-line"></div>

                        <span><strong>Mobile:</strong>
                            <?php echo $row['mobile']; ?>
                        </span>


                        <div class="ruled-line"></div>

                        <span><strong>Date of Birth:</strong>
                            <?php echo $row['dob']; ?>
                        </span>


                        <div class="ruled-line"></div>

                        <span><strong>Address:</strong>
                            <?php echo $row['address']; ?>
                        </span>


                        <div class="ruled-line"></div>

                        <span><strong>City:</strong>
                            <?php echo $row['city']; ?>
                        </span>


                        <div class="ruled-line"></div>

                        <span><strong>Pincode:</strong>
                            <?php echo $row['pincode']; ?>
                        </span>


                        <div class="ruled-line"></div>

                        <span><strong>Course:</strong>
                            <?php echo $row['course']; ?>
                        </span>


                        <div class="ruled-line"></div>

                        <span><strong>Session:</strong>
                            <?php $session= $row['sid'];
                            $query3="select * from tbl_session where sid='$session'";
                            $res3=mysqli_query($con,$query3);
                            if($row3=mysqli_fetch_array($res3))
                            {
                                echo $row3['session'];
                            }
                            ?>
                        </span>


                        <div class="ruled-line"></div>

                        <span><strong>College:</strong>
                        <?php $college= $row['cid'];
                            $query4="select * from tbl_college where cid='$college'";
                            $res4=mysqli_query($con,$query4);
                            if($row4=mysqli_fetch_array($res4))
                            {
                                echo $row4['college'];
                            }
                            ?>
                        </span>


                        <div class="ruled-line"></div>

                        <span><strong>Status:</strong>
                            <a href="block.php?id=<?php echo $row['id'];?>"><?php echo $row['status']; ?></a>
                        </span>


                        <div class="ruled-line"></div>

                        <span><strong>Date of Registration:</strong>
                            <?php echo $row['dor']; ?>
                        </span>

                    </div>
                </div>
                <?php

            }
            ?>
        </div>
   

</form>
</center>
<div class="footer">
    <div class="row m-0 p-0">
        <div class="col-sm-12" style="height:45px; background-color:black;">
        <p align="center" style="color:white; margin-top:13px;">&copy;CopyRights Disigned and develop by<b><i> Anil kumar sonkar</i></b></p>
        </div>
            </div>
            </footer>
            </body>
</html>