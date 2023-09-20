<?php
session_start();
$email=$_SESSION['user'];
if($_SESSION['user']=="")
{
// session_destroy();
header("location:index.php");
}
include("connect.php");
$query="select * from register";
$res=mysqli_query($con,$query);

$query3="select count(status) from tbl_complain where status='P'";
$res3=mysqli_query($con,$query3);
if($row3=mysqli_fetch_array($res3)){

}
$query4="select count(status) from tbl_complain where status='C'";
$res4=mysqli_query($con,$query4);
if($row4=mysqli_fetch_array($res4)){

}
$query5="select count(complain) from tbl_complain";
$res5=mysqli_query($con,$query5);
if($row5=mysqli_fetch_array($res5)){

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
        <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
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
        .footer{
        height:45px;
        width:100%;
        box-shadow:5px 5px 15px black;
        
        background-color:black;
        background-color: rgb(243, 249, 249);
        
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
    .c33{
            background-color:#2ff111d6;
            border-radius:20px;
            height:200px;
            color:white;
            transition:transform 0.2s;
            box-shadow:2px 2px 8px grey inset;
        }
        .c33:hover{
          background-color:white;
          color:green;
          transform:scale(1.1);
          box-shadow:2px 2px 8px grey inset;
        }
        .c34{
            background-color: #f03030d6;
            border-radius:20px;
            height:200px;
            color:white;
            transition:transform 0.2s;
            box-shadow:2px 2px 8px grey inset;
        }
        .c34:hover{
          background-color:white;
          color:red;
          transform:scale(1.1);
          box-shadow:2px 2px 8px grey inset;
        }
        .c35{
            background-color:rgba(235, 108, 57, 0.839);
            border-radius:20px;
            height:200px;
            color:white;
            transition:transform 0.2s;
            box-shadow:2px 2px 8px grey inset;
        }
        .c35:hover{
          background-color:white;
          color:green;
          transform:scale(1.1);
          box-shadow:2px 2px 8px grey inset;
        }
        .chart{
            height:300px;
            
            background-color:#eef6fa;

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
                            <?php 
                            if($row=mysqli_fetch_array($res)){
?>
                            <img src="student/<?php echo $row['profile'];?>" alt=""  width="35" height="35"  style=" border-radius: 50%; margin-left:980px; margin-top:-35px;">
                            <?php
                            }
                            ?>
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
                
                <div class="row mt-5 m-0 p-0">
                <div class="col-sm-4 ">
                    <a href="cp.php" style="text-decoration:none; text-align:center;">  
                        <div class="card c33">
                            <!-- <i class="fa-brands fa-linkedin-in ico"></i> -->
                          <div class="card-body">
                          <h4 class="card-title  mt-5 fs-3">My Complain</h4>
                          <h4><?php echo $row5['count(complain)'];?></h4>
                          

                          </div>
                        </div>
                      </a>
                      </div>
                      <div class="col-sm-4 ">
                    <a href="cp.php" style="text-decoration:none; text-align:center;">  
                        <div class="card c34">
                            <!-- <i class="fa-brands fa-linkedin-in ico"></i> -->
                          <div class="card-body">
                          <h4 class="card-title  mt-5 fs-3">Pending Complain</h4>
                          <h4><?php echo $row3['count(status)'];?></h4>
                          

                          </div>
                        </div>
                      </a>
                      </div>
                      <div class="col-sm-4 ">
                    <a href="cp.php" style="text-decoration:none; text-align:center;">  
                        <div class="card c35">
                            <!-- <i class="fa-brands fa-linkedin-in ico"></i> -->
                          <div class="card-body">
                          <h4 class="card-title  mt-5 fs-3">Close Complain</h4>
                          <h4><?php echo $row4['count(status)'];?></h4>
                          

                          </div>
                        </div>
                      </a>
                      </div>
                        <!-- <!-start chart---> 
                       
                        <div class="col-sm-12 mt-5">
                   
                        <div class="card chart">
                        
        <canvas id="myChart"></canvas>
        </div>
                        
                        
    <button id="updateChart">Update Chart</button>
                       
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
<script>
    // Get a reference to the chart canvas element and create a chart context
const ctx = document.getElementById('myChart').getContext('2d');

// Initialize the chart with some data
const initialData = {
    labels: ['Label 1', 'Label 2', 'Label 3'],
    datasets: [{
        label: 'Data',
        data: [15, 30, 50],
        backgroundColor: ['rgba(255, 99, 132, 0.2)', 'rgba(54, 162, 235, 0.2)', 'rgba(255, 206, 86, 0.2)'],
        borderColor: ['rgba(255, 99, 132, 1)', 'rgba(54, 162, 235, 1)', 'rgba(255, 206, 86, 1)'],
        borderWidth: 1
    }]
};

const myChart = new Chart(ctx, {
    type: 'bar',
    data: initialData,
    options: {
        scales: {
            y: {
                beginAtZero: true
            }
        }
    }
});

// Function to update the chart with new data
document.getElementById('updateChart').addEventListener('click', () => {
    const newData = {
        labels: ['Label 1', 'Label 2', 'Label 3'],
        datasets: [{
            label: 'Data',
            data: [Math.random() * 50, Math.random() * 50, Math.random() * 50],
            backgroundColor: ['rgba(255, 99, 132, 0.2)', 'rgba(54, 162, 235, 0.2)', 'rgba(255, 206, 86, 0.2)'],
            borderColor: ['rgba(255, 99, 132, 1)', 'rgba(54, 162, 235, 1)', 'rgba(255, 206, 86, 1)'],
            borderWidth: 1
        }]
    };

    myChart.data = newData;
    myChart.update();
});

</script>
</html>