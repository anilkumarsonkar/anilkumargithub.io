<?php
session_start();
$email=$_SESSION['user'];
if($_SESSION['user']=="")
{
// session_destroy();
header("location:index.php");
}
include("connect.php");
$query1="select * from register";
$res1=mysqli_query($con,$query1);


$query="select * from tbl_question";
$res=mysqli_query($con,$query);


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
        /* background-image:url('./images/ad2.jpg'); */
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
       
    .sdm{
      background-color: rgb(243, 249, 249);
      padding:30px;
      
      
    }
    /* .sdm:hover{
      background-color: rgb(189, 252, 252);
    } */
    hr{
      color:black;
    }
    .f{
            
            height:500px;
            width:900px;
            margin-top:30px;
            transition:transform 0.2s;
           
        }
        /* .f,input:hover{
          background-color:white;
          color:green;
          transform:scale(1.1);
          box-shadow:2px 2px 8px grey inset;
    
        }  */
        textarea{
            min-height:150px;
            width:600px;
            margin-top:60px;
            border-radius:10px;
            
        } 
        table{
            margin-top:30px;
            width:700px;
            border:1px solid;
        }
        td,tr,th{
            box-shadow:1px 1px 2px grey;
            color:black;
            text-align:center;
            
            
        }
       
        .btn1{
            height:40px;
             width:300px; 
             border:none;
             background-color:white;
             color:black;
             border-radius:10px;
            
             
        } 
        .btn1:hover{
            background-color:black;
            color:white;
            transform:scale(1.1);
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
                <a href="updateprofile.php" style="text-decoration:none; color:black;"><h6>UPDATE PROFILE</h6></a>
                <HR />
                <a href="uploadpic.php" style="text-decoration:none; color:black;"><h6>UPLOAD PIC</h6></a>
                <HR />
                <a href="addcomplain.php" style="text-decoration:none; color:black;"><h6>ADD COMPLAINED</h6></a>
                <HR />
               

                    <a href="mycomplains.php" style="text-decoration:none; color:black;"><h6>MY COMPLAINEDS</h6></a>
                <HR />

               

                <a href="disscus.php" style="text-decoration:none; color:black;"><h6>DISCUSSION FORUM</h6></a><hr/>
                <a href="closecomplain.php" style="text-decoration:none; color:black;"><h6>CLOSE COMPLAINEDS </h6></a><hr/>
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

                    
                       
                            <td><?php 
                            date_default_timezone_set('Asia/Kolkata');
                            $currenthour =date('G');
                            if($currenthour >=5 && $currenthour <12){
                                $greeting ='Good Morning !';
                            }
                            elseif($currenthour>=12 && $currenthour<16){
                                    $greeting='Good Afternoon';
                            }
                            else{
                                $greeting='Good Evening!';
                            }
                            echo "<i> $greeting</i>"
                            ?></td>
                        </div>
                           <!-- <?php
                           if($row1=mysqli_fetch_array($res1))
                           {
                            ?>
                            -->

                            <img src="student/<?php echo $row1['profile'];?>" alt=""  width="35" height="35"  style=" border-radius: 50%; margin-left:980px; margin-top:-35px;">
                            <!-- <?php
                           }
                           ?>   -->
                        <a class="navbar-brand" href="#">
                         <p style="margin-top:-20px;"><i>
                            <?php
                            echo $email;
                            ?>
                            </i>
                       
                         </p>
                        </a>
                    <!-- </div> -->
                  
                </nav>
                <center>
                    <div class="f">
                <form action="ques.php" method="post">
<textarea name="ques" placeholder="Add Question"></textarea>
<br/>
<input type="submit" class="btn1" value="AddQuestion"/>
</form>
<table>
    <tr>
        <th>S.No</th>
        <th>Question</th>
        <th>Post Answer</th>
        <th>View Answer</th>
    </tr>
    <?php
    $a=1;
while($row=mysqli_fetch_array($res)){
    ?>
    <tr>
        <td><?php echo $a; ?></td>
        <td><?php echo $row['question'];?></td>
        <td><a href="post.php?qid=<?php echo $row['qid']?>"><button style="color:white; background-color:black; width:100px;">
        <i class="fa-solid fa-square-arrow-up-right text-light"></i>
        Post</button></a></td>
        <td><a href="view.php?qid=<?php echo $row['qid']?>" style="text-decoration:none; color:white;"</style>
        <button style="color:white; background-color:black; width:100px;"> 👁‍🗨View</a></td>
</tr>
    <?php
    $a++;
}
    ?>
</table>
</div>
</center>
                </div>
</div>
<div class="row m-0 p-0">
    <div class="col-sm-12 footer bg-dark">
<p align="center" style="color:white; margin-top:15px;">&copy;CopyRights Disigned and develop by<b><i> Anil kumar sonkar</b></i></p>
    </div>
</div>
</body>

</html>

