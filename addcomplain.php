<?php
include("connect.php");
$query="select * from tbl_complaint_type_mng";
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
        background-image:url('./images/ad2.jpg');
        background-size:cover;
        background-color:#eef6fa;
        
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
        /* margin-top:100px; */
        background-color:black;
        background-color: rgb(243, 249, 249);
        
    }
    .sdm{
      background-color: rgb(243, 249, 249);
      padding:20px;
      
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
                <h3 style=" color:black; margin-top:10px;"> <img src="./images/mithla.jpg" height="50px"; width="50px"; style="border-radius:50%; "/> L.N.M.U</h3>
                <hr />
              <a href="admin/dashboard.php"style="text-decoration:none; color:black;"><h5> <i class="fa-solid fa-gauge-high"></i>
                    Dashboard</h5></a><hr/>
                <a href="#" style="text-decoration:none; color:black;"><h6>UPDATE PROFILE</h6></a>
                <HR />
                <a href="addcomplain.php" style="text-decoration:none; color:black;"><h6>ADD COMPLAINET</h6></a>
                <HR />
               

                    <a href="#" style="text-decoration:none; color:black;"><h6>MY COMPLAINETS</h6></a>
                <HR />

               

                <a href="#" style="text-decoration:none; color:black;"><h6>DISCUSSION FORUM</h6></a><hr/>
                <a href="#" style="text-decoration:none; color:black;"><h6>CLOSE COMPLAINETS </h6></a><hr/>
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

                <form action="complaincode.php" method="post" 
                style="margin-top:50px; margin-left:200px;  width:600px;">
    <!-- Complain type -->
   <select name="ct" style="min-height:56px; width:400px; border-radius:10px; margin-left:140px; margin-top:10px; box-shadow:2px 2px 4px grey;" >
    <option value="">-Select Complain-</option>
    <?php
   
    while($row=mysqli_fetch_array($res)){
        ?>
        <option value="<?php echo $row['ctmid'];?>">
        <?php echo $row['ctmname'];?></option>

        <?php
    }
    ?>
</select><br/>
<!-- Complain -->
<textarea name="cta" style="min-height:150px; width:400px;border-radius:10px; margin-left:140px; margin-top:10px; box-shadow:2px 2px 4px grey; border:none;" placeholder="Complain">
</textarea></br>
<input type="submit" value="Add" style="background-color:skyblue; border:none;min-height:40px; border-radius:10px; width:230px;margin-top:10px; margin-left:220px; margin-bottom:10px;"/>
</form>
               
            </div>
        </div>
    </div>
    <div class="row m-0 p-0">
    <div class="col-sm-12 footer">
<p align="center" style="color:black; margin-top:12px;">&copy;CopyRights Disigned and develop by<b><i> Anil kumar sonkar</b></i></p>
    </div>
</div>
</body>
    </html>