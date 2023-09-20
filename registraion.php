<?php

include("connect.php");
$query="select * from tbl_session";

$res=mysqli_query($con,$query);

$cquery="select * from tbl_college";
$cres=mysqli_query($con,$cquery);

?>
<html>
    <head>
    <link href="./css/bootstrap.css" rel="stylesheet" type="text/css"/>
<script src="./js/bootstrap.bundle.js"></script>
<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <style>
            body{
    background-repeat: no-repeat;
    background-size: 100% 100%;
    height: 689px;
   
    /* background-image: linear-gradient(hsla(0, 56%, 98%, 0.9),rgba(248, 247, 247, 0.9)),url('../image/a5.jpg'); */
}
body{
        background-image:url('./images/bg.avif');
        background-size:cover;
        
    }
.fl{
    height:700px;
    width:400px;
    /* border:1px solid; */
    /* margin-left:400px;  */
    border-radius:10px;
    /* box-shadow:2px 2px 7px gray; */
    

}
form{
    /* */
    /* height:500px;
    width:700px;
    border:1px solid;
    padding:20px; */
}
input{
    height:40px;
    width:300px;
    margin:5px;
    border-radius:10px;
    box-shadow:2px 2px 7px gray;
    border:none;
}
.g{
    height:10px;
    width:10px;
    margin:5px;
}
textarea{
    margin:5px;
    min-height:40px;
    width:300px;
    border-radius:10px;
    box-shadow:2px 2px 7px gray;
    border:none;
}

.s{
    height:40px;
    width:300px;
    margin:5px;
    border-radius:10px;
    box-shadow:2px 2px 7px gray;
    border:none;
}
.s1{
    height:40px;
    width:610px;
    margin:5px;
    border-radius:10px;
    box-shadow:2px 2px 7px gray;
    border:none;
    margin-left:54px;
}


.h{
    text-shadow:1px 1px 2px black;
    color:white;
    margin-top:20px;
}
input,textarea,select{
   
    text-align:center;
    font-size:15px;
   
}
.l{
    height: 150px;
    width:150px;
    border-radius:50%;
   
}
table{
    margin-left:50px;
}
input[type='submit']:hover{
    border:1px solid green;
    background-color:white;
    color:green;
}
.footer{
        height:45px;
        width:100%;
        box-shadow:5px 5px 15px black;
       color:black;
        background-color: hsl(180, 30%, 72%);
        
    }

            </style>
</head>
<body>
<nav class="navbar navbar-expand-lg  header bg-info" style="height:50px;">
  <div class="container-fluid mb-2">
    <a class="navbar-brand" href="#"><i class="fa-brands fa-facebook-f"></i> </a>
    <a class="navbar-brand" href="#">
    <i class="fa-brands fa-x-twitter"></i> </a>

<a class="navbar-brand" href="#">
<i class="fa-brands fa-linkedin-in"></i> 
<a class="navbar-brand" href="#">
<i class="fa-brands fa-instagram"></i></a>
<a class="navbar-brand" href="#">
<i class="fa-brands fa-google-plus-g"></i></a>

<a class="navbar-brand" href="#" >
<i class="fa-solid fa-phone-volume" style="margin-left:845px;"></i>+917233819626</a>
<a class="navbar-brand" href="#">
  <i class="fa-regular fa-envelope"></i>Sonkar7233@gmail.com</a>
  <a class="navbar-brand" href="index.php">
<i class="fa-solid fa-right-from-bracket"></i> Back</a>

   
   
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      
    </div>
  </div>
</nav>
            
    <div class="container-fluid">
        <div class="row m-0 p-0">

        <div class="col-sm-6 bg-light m-0 p-0">

<img src="./images/r4.jpeg" class="d-block w-100" alt="..." height="650px;">

</div>
            <div class="col-sm-6 m-0 p-0">
                <marquee ><h4>Welcome
Grievance Redressal Portal.
Please register yourself from here.</h4></marquee>
            
            <h1 align="center"> <img src="./images/mithla.jpg" class="l"/></h1>

    <form action="code.php" method="post" style="height:430px;">
       
    
        <table>
            <tr>
                <td>
        <input type="text" name="n" placeholder="Enter your name"/></td>
        <td><input type="text" name="fn" placeholder="Enter your Fname"/></td>
</tr>
<tr>
                <td>
        <input type="text" name="email" placeholder="Enter your Email"/></td>
        <td><input type="password" name="password" placeholder="Enter your Password"/></td>
</tr>

<tr><td>
&nbsp;&nbsp;Gender<input type="radio" name="gender" value="male" class="g"/>Male
<input type="radio" name="gender" value="female" class="g"/>Female
<input type="radio" name="gender" value="other" class="g"/>Others
</td>
<td>
        <input type="number" name="mobile" placeholder="Enter your Mobile No"/></td></tr>
<tr>
           
        <td><input type="date" name="dob" placeholder="Enter your DOB"/></td>
        <td>
        <input type="number" name="pincode" placeholder="Enter your Pincode"/></td>
</tr>

<tr><td>
    <textarea name="text">Address</textarea>
</td>
<td>
        <select name="city" class="s">
            <option value="">
                -Select City-
            </option>
            <option>Darbhanga</option>
            <option>Muzaffarpur</option>
            <option>Samastipur</option>
            <option>Madhubani</option>
          
        </select>
</td>
</tr>
<tr>
    

          
</tr>
<tr><td>
<select name="course" class="s">
            <option value="">
                -Select Course-
            </option>
            <option>B.Sc</option>
            <option>B.A</option>
            <option>B.Com</option>
            <option>M.Sc</option>
            <option>M.A</option>
            <option>M.com</option>
            <option>MBA</option>
            <option>PHD</option>
            
          
        </select>
</td>
<td>
<select name="session" class="s">
 <option value="">_Select Session-</option>          
<?php
while($row=mysqli_fetch_array($res)){


?>
<option value="<?php  echo $row['sid'];?>">
           
            <?php echo $row['session'];?> </option>
       <?php
       }
       ?>
        </select>
</td>
</tr>
<tr>
<td>

</td>
</tr>
<tr><td>
    
</td></tr>
</table>
<select name="college" class="s1">
<option value="">_Select college-</option> 
    <?php
    while($crow=mysqli_fetch_array($cres)){

   
    ?>
    <option value="<?php  echo $crow['cid'];?>">
            
                <?php echo $crow['college'];

                ?>
            </option>
            
        <?php
         }
        
        ?>
          
        </select>
<input type="submit" value="Register Here" style="margin-left:220px; margin-top:20px; width:250px;"/>
<h6 align="center" style="font-size:20px;  margin-top:20px; text-shadow:1px 1px 2px gray;">Have alrady an account <a href="login.php" style="text-decoration:none;">Login here</a></h6>
</form>
</fieldset>


</div>

</div>
    </div>
    <div class="row m-0 p-0">
    <div class="col-sm-12 footer">
<p align="center" style="margin-top:15px;">&copy;CopyRights Disigned and develop by<b><i> Anil kumar sonkar</b></i></p>
    </div>
</div>
</body>
    </html>