<?php
session_start();
$email=$_SESSION['admin'];
if($_SESSION['admin']=="")
{
session_destroy();
header("location:../index.php");
}
include("../connect.php");
$query="select * from register";

$res=mysqli_query($con,$query);
$query2="select count(status) from tbl_complain where status='N'";
$res2=mysqli_query($con,$query2);
if($row2=mysqli_fetch_array($res2)){

}
$query3="select count(status) from tbl_complain where status='P'";
$res3=mysqli_query($con,$query3);
if($row3=mysqli_fetch_array($res3)){

}
$query4="select count(status) from tbl_complain where status='C'";
$res4=mysqli_query($con,$query4);
if($row4=mysqli_fetch_array($res4)){

}
$query5="select count(status) from tbl_complain";
$res5=mysqli_query($con,$query5);
if($row5=mysqli_fetch_array($res5)){

}
$query6="select count(college) from tbl_college";
$res6=mysqli_query($con,$query6);
if($row6=mysqli_fetch_array($res6)){

}
$query7="select count(session) from tbl_session";
$res7=mysqli_query($con,$query7);
if($row7=mysqli_fetch_array($res7)){

}
$query8="select count(name) from register";
$res8=mysqli_query($con,$query8);
if($row8=mysqli_fetch_array($res8)){

}
$query9="select count(status) from register where status='Y'";
$res9=mysqli_query($con,$query9);
if($row9=mysqli_fetch_array($res9)){

}

//profilepic code 

$query10="select * from register where email='$email'";
$res10=mysqli_query($con,$query10);
if($row10=mysqli_fetch_array($res10))
{
$filename=$row10['profile'];
}
else{
  $filename="..default.png";
}
$location ="../student";
$profilePicPath=$location . $filename;
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
        <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="../js/bootstrap.bundle.js"></script>
    <style>
   
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
        body{
        background-image:url('../images/d1.avif');
        background-size:cover;
        
    }
        .cr1{
            margin: auto;
            margin: 20px;
            border: none;     
        }

        .c1{
          background-color:hwb(27 9% 1% / 0.839);
          border-radius:20px;
            height:200px;
            color:white;
            box-shadow:2px 2px 8px grey inset;
            transition:transform 0.2s;
          
        }
        .c1:hover{
          background-color:white;
          color:red;
          box-shadow:2px 2px 8px grey inset;
          transform:scale(1.1);
        }
      
        .c11{
            background-color: red;
            border-radius:20px;
            height:200px;
            color:white;
            box-shadow:2px 2px 8px grey inset;
            transition:transform 0.2s;
          
        }
        .c11:hover{
          background-color:white;
          color:red;
          box-shadow:2px 2px 8px grey inset;
          transform:scale(1.1);
        }
        .c22{
            background-color:yellow;
            height:200px;
            border-radius:20px;
            color:black;
            box-shadow:2px 2px 8px grey inset;
            transition:transform 0.2s;
        }
        .c22:hover{
          background-color:white;
          color:yellow;
          transform:scale(1.1);
          box-shadow:2px 2px 8px grey inset;
          
        }
        .c2{
          border-radius:20px;
            background-color: hsla(61, 70%, 71%, 0.839);
            height:200px;
            color:black;
            border-radius:20px;
            box-shadow:2px 2px 8px grey inset;
            transition:transform 0.2s;
        }
        .c2:hover{
          background-color:white;
          color:white;
          transform:scale(1.1);
          box-shadow:2px 2px 8px grey inset;
          
        }
        .c33{
            background-color:green;
            border-radius:20px;
            height:200px;
            transition:transform 0.2s;
            box-shadow:2px 2px 8px grey inset;
        }
        .c33:hover{
          background-color:white;
          color:green;
          transform:scale(1.1);
          box-shadow:2px 2px 8px grey inset;
        }
        .c3{
       
            height:200px;
            color:black;
            border-radius:20px;
            box-shadow:2px 2px 8px grey inset;
            transition:transform 0.2s;
            border-radius:20px;
            background-color: hsla(61, 70%, 71%, 0.839);
        }
        .c3:hover{
          background-color:white;
          color:white;
          transform:scale(1.1);
          box-shadow:2px 2px 8px grey;
          
        }
        .c4{
        
            height:200px;
            border-radius:20px;
            color:black;
            box-shadow:2px 2px 8px grey;
            transition:transform 0.2s;
        }
        /* .c4:hover{
          background-color:white;
          color:black;
          transform:scale(1.1);
          box-shadow:2px 2px 8px grey;
          
        } */
        
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
       margin-top:58px;
        background-color:black;
        background-color: rgb(243, 249, 249);
        
    }
    .sdm{
      
      
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
                <h3 style=" color:black; margin-top:10px;"> <img src="../images/mithla.jpg" height="50px"; width="50px"; style="border-radius:50%; "/> L.N.M.U</h3>
                <hr />
                
              <a href="dashboard.php"style="text-decoration:none; color:black;"><h5> <i class="fa-solid fa-gauge-high"></i>
                    Dashboard</h5></a><hr/>
                    <a href="college.php" style="text-decoration:none; color:black;"><h6>COLLEGE MANAGEMENT</h6></a>
                <HR/>
                <a href="session.php" style="text-decoration:none; color:black;"><h6>SESSION MANAGEMENT</h6></a>
                <HR />
                <a href="complaint_type_mng.php" style="text-decoration:none; color:black;"><h6>COMPLAINED TYPE MNG</h6></a>
                <HR />
             


               

               <div class="dropdown">
  <button class="btn text-dark dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
  <span style="margin-left:-10px; color:black;">COMPLAINED MANAGEMENT<span>
  </button>
  
  <ul class="dropdown-menu">
    <li><a class="dropdown-item" href="noteprocessyet.php" style="text-decoration:none; color:black;">None Process Yet</a></li>
    <li><a class="dropdown-item" href="pc.php" style="text-decoration:none; color:black;">Pending Complained</a></li>
    <li><a class="dropdown-item" href="cp.php" style="text-decoration:none; color:black;">Close Complained</a></li>
    <li><a class="dropdown-item" href="report.php" style="text-decoration:none; color:black;">Download Report  </a></li>
    
  </ul>
</div>
<hr/>
<a href="../usermanagement.php" style="text-decoration:none; color:black;"><h6>USER MANAGEMENT</h6></a>
                <HR />
                
                
              
                <a href="#" style="text-decoration:none; color:black;"><h6>DISCUSSION FORUM </h6></a><hr/>
               <a href="changepass.php" style="text-decoration:none; color:black;"><h6>CHANGE PASSWORD </h6></a><hr/>
              

               
                
               <a href="logout.php" style="text-decoration:none; color:black;"> <h6>LOGOUT</h6></a>
                <hr />
               

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
                            
                           
                           <h6 style="margin-left:790px; margin-top:10px;"> <?php echo 'admin@123gmail.com';?></h6>
                           <h6 style="margin-top:10px;"> <td><?php echo date('d/m/y');?></td><h6>
                           <a href="#">
                        <i class="fa-solid fa-gear" style="font-size:20px; text-decoration:none; color:black; margin-top:10px;padding:5px;"></i>
                        </a>
                        <a class="navbar-brand" href="dashboard.php" style="text-decoration:none;">
                            <img src="../images/admn.png" alt="Bootstrap" width="35" height="35"
                                style="margin-left:0; border-radius: 50%; margin-top:0px;">

</a>
                    </div>
                </nav>
                <!-- second navbar start -->
                <div class="container m-0 p-0 mt-2 n2">
                    <nav class="navbar navbar-expand-lg bg-body-tertiary">
                        <div class="container-fluid">
                            <a class="navbar-brand" href="#">Admin Dashboard</a>
                        </div>
                    </nav>
                </div>
                <!-- second navbar end -->
               
                <!-- card start -->
                
                <!-- card end -->
                <!-- second card start -->
                 <div class="row mt-5 cr1">
                 <a href="noteprocessyet.php" style="text-decoration:none; text-align:center;">
                    <div class="col-sm-4">
                      <div class="card c11">
                        <!-- <i class="fa-brands fa-facebook ico" style="background-color: darkblue;"></i> -->
                        <div class="card-body ">
                            <h4 class="card-title mt-5 fs-3 ">Not Process Yet </h4>
                            <h4><?php echo $row2['count(status)'];?></h4>
                          
                        </div>
                      </div>
                      </a>
                    </div>
                    <div class="col-sm-4">
                    <a href="pc.php" style="text-decoration:none; text-align:center;"> 
                      <div class="card c22">
                        <!-- <i class="fa-brands fa-twitter ico"></i> -->
                        <div class="card-body mt-3">
                        <a href="pc.php" style="text-decoration:none; text-align:center;"> 
                         <h4 class="card-title mt-4 fs-3 text-dark">Pending Complain</h4>
                         <h4><?php echo $row3['count(status)'];?></h4>
                        
                        </div>
                      </div>
  </a>
                    </div>
                    <div class="col-sm-4 ">
                    <a href="cp.php" style="text-decoration:none; text-align:center;">  
                        <div class="card c33">
                            <!-- <i class="fa-brands fa-linkedin-in ico"></i> -->
                          <div class="card-body">
                          <h4 class="card-title  mt-5 fs-3">Close Complain</h4>
                          <h4><?php echo $row4['count(status)'];?></h4>
                          

                          </div>
                        </div>
                      </a>
                      </div>
                      
                <!-- second card end --> 
                <!-- third navbar start -->
                <div class="row mt-5 cr1 ">
                 <a href="college.php" style="text-decoration:none; text-align:center;">
                    <div class="col-sm-4">
                      <div class="card c1">
                        <!-- <i class="fa-brands fa-facebook ico" style="background-color: darkblue;"></i> -->
                        <div class="card-body ">
                            <h4 class="card-title mt-5 fs-3 ">Total College </h4>
                            <h4><?php echo $row6['count(college)'];?></h4>
                          
                        </div>
                      </div>
                      </a>
                    </div>
                    <div class="col-sm-4">
                    <a href="session.php" style="text-decoration:none; text-align:center;"> 
                      <div class="card c2">
                        <!-- <i class="fa-brands fa-twitter ico"></i> -->
                        <div class="card-body mt-3">
                        <a href="session.php" style="text-decoration:none; text-align:center;"> 
                         <h4 class="card-title mt-4 fs-3 text-dark">Total Session</h4>
                         <h4><?php echo $row7['count(session)'];?></h4>
                        
                        </div>
                      </div>
  </a>
                    </div>
                    
                      <div class="col-sm-4 ">
                    <!-- <a href="cp.php" style="text-decoration:none; text-align:center;">   -->
                        <div class="card c4">
                            <!-- <i class="fa-brands fa-linkedin-in ico"></i> -->
                            <!-- <div class="chart-container"> -->
        <canvas id="myPieChart" style="margin-left:100px;"></canvas>
    <!-- </div> -->
    <button id="updateChart" style="width:150px; margin-left:120px; border-radius:10px; background-color:black;
    margin-top:10px; border:none; color:white;">
    Update Chart</button>
                          <div class="card-body">
                          <!-- <h4 class="card-title mt-5 fs-3">Total Block User</h4> -->
                         
                           

                          </div>
                        </div>
                      <!-- </a> -->
                      </div>
                      
                  </div>
               
             <!-- third nav end -->
        </div>
    </div>
    <div class="row m-0 p-0">
    <div class="col-sm-12 footer">
<p align="center" style="color:black; margin-top:15px;">&copy;CopyRights Disigned and develop by<b><i> Anil kumar sonkar</b></i></p>
    </div>
</div>
</body>
<script>
    // Get a reference to the pie chart canvas element and create a chart context
const pieCtx = document.getElementById('myPieChart').getContext('2d');

// Initialize the pie chart with some data
const initialData = {
    labels: ['Label 1', 'Label 2', 'Label 3'],
    datasets: [{
        data: [30, 40, 30], // Specify data values here
        backgroundColor: ['rgba(255, 99, 132, 0.5)', 'rgba(54, 162, 235, 0.5)', 'rgba(255, 206, 86, 0.5)'],
        borderWidth: 1
    }]
};

const pieChart = new Chart(pieCtx, {
    type: 'pie',
    data: initialData
});

// Function to update the pie chart with new data
document.getElementById('updateChart').addEventListener('click', () => {
    const newData = {
        labels: ['Label 1', 'Label 2', 'Label 3'],
        datasets: [{
            data: [Math.random() * 50, Math.random() * 50, Math.random() * 50], // Generate random data
            backgroundColor: ['rgba(255, 99, 132, 0.5)', 'rgba(54, 162, 235, 0.5)', 'rgba(255, 206, 86, 0.5)'],
            borderWidth: 1
        }]
    };

    pieChart.data = newData;
    pieChart.update();
});

</script>
</html>