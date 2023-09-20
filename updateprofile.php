<?php
session_start();
$email=$_SESSION['user'];
// echo $email;
include("connect.php");
$query="select * from register where email='$email'";
$res=mysqli_query($con,$query);
if($row=mysqli_fetch_array($res)){
    $uid=$row['id'];
}


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
       
        background-color:black;
        background-color: rgb(243, 249, 249);
        
    }
    .sdm{
      background-color: rgb(243, 249, 249);
      /* padding:30px; */
      
      
    }
    .sdm:hover{
      background-color: rgb(189, 252, 252);
    }
    hr{
      color:black;
    }
form{
   
    
   
}
.f{
   
    margin-top:100px;
    height:500px;
    margin-left:70px;
    width:90%;
    border:1px solid;
    margin-bottom:30px;
    border-radius:30px;
    padding-top:15px;
}
.f1{
    margin-left:150px;
   
}
input,textarea{
   height:50px; 
   margin-left:30px;
   width:500px;
   box-shadow:2px 2px 5px grey;
   border-radius:10px;
   border:none;
}
lable{
    margin-left:30px;
}
.g{
    height:20px;
    width:20px;
    margin-top:30px;
    margin-bottom:30px;
}
.b{
    float: left;
}
.bn:hover{
    color:black;
    background-color:skyblue;
}
    </style>
</head>

<body>
    <div class="outer" class="container-fluid ">
        <div class="row p-0 m-0">
            <div class="col-sm-2 sdm" style="">
                <h3 style=" color:black; margin-top:10px; text-align:center;"> 
                <img src="./images/mithla.jpg" height="80px"; width="80px"; style="border-radius:50%; margin-top:15px; "/></h3>
                <h5 align="center">UpdateProFile</h5>
                <hr />
              <a href="admin/dashboard.php"style="text-decoration:none; color:black;"><h5> <i class="fa-solid fa-gauge-high"></i>
                    Dashboard</h5></a><hr/>
                <a href="updateprofile.php" style="text-decoration:none; color:black;"><h6>UPDATE PROFILE</h6></a>
                <HR />
                <a href="addcomplain.php" style="text-decoration:none; color:black;"><h6>ADD COMPLAINES</h6></a>
                <HR />
               

                    <a href="mycomplains.php" style="text-decoration:none; color:black;"><h6>MY COMPLAINES</h6></a>
                <HR />

               

                <a href="#" style="text-decoration:none; color:black;"><h6>DISCUSSION FORUM</h6></a><hr/>
                <a href="closecomplain.php" style="text-decoration:none; color:black;"><h6>CLOSE COMPLAINES </h6></a><hr/>
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
                            echo "<b><i> $greeting</i></b>"
                            ?></td>
                            
                           
                            <p><b><i><?php echo date('d/m/y');?></i></b></p>
                       
                       <b></i> <?php
echo $email;
                        ?></i></b>
                         <a class="navbar-brand" href="#">
                            
                            <img src="student/<?php echo $row['profile']; ?>" alt="Bootstrap" width="35" height="35"
                                style="border-radius: 50%; mrgin-right:-80px;">
                        </a>
                    </div>
                </nav>

    <div class="container-flued f">
        <div class="row m-0 p-0">
      
    <form action="updatepcode.php" method="post">
    <div class="col-sm-4 b">
        <input type="hidden" name="uid" value="<?php echo $uid;?>"/>
        <lable>Name</lable><br/>
        <input type="text" name="name" value="<?php echo $row['name'];?>"/><br/>
        
        <lable>Email</lable><br/>
        <input type="email"  name="email" readonly value=<?php echo $row['email'];?>/><br/>
      
        <lable>Gender</lable>
        <input type="radio" class="g" name="g" value="male" <?php if($row['gender']=='male') echo 'checked';?>/>Male
        <input type="radio" name="g"   class="g" value="fmale" <?php if($row['gender']=='female') echo 'checked';?>/>Female
        <br/>
        <lable>Pincode</lable><br/>
        <input type="text" name="pincode" value=<?php echo $row['pincode'];?>/></lable><br/>
        <lable>City</lable><br/>
        <input type="text" readonly value=<?php echo $row['city'];?>/></br/>
</div>

<div class="col-sm-4 b f1">
<lable>fname</lable><br/>
        <input type="text" name="fname" value=<?php  echo $row['fname'];?>/><br/>
        <lable>Dob</lable><br/>
        <input type="date" name="dob" value=<?php echo $row['dob'];?>/><br/>
        <lable>Mobile</lable><br/>
        <input type="mobile" name="mobile" value=<?php echo $row['mobile'];?>/><br/>
        <lable> Course</lable><br/><input readonly type="text" value=<?php echo $row['course'];?>/></br/>
       <lable> Address</lable><br>
       <textarea name="text"><?php echo $row['address'];?></textarea><br/>
        
       
        <input type="submit" class="bn" style=" margin-left:-140px; width:350px; margin-top:30px; background-color:black; color:white;"/>
        
        </div>    
</form>
</div>
</div>
</center>
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
