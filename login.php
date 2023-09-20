<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="./css/bootstrap.css" rel="stylesheet" type="text/css" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet"
        type="text/css" />
        <script src=".js/bootstrap.bundle.js"></script>
        <link href="./css/admin.css" rel="stylesheet" type="text/css"/>
        <style>
            body{
                background-image:url('./images/bg.avif');
        background-size:cover;
            }

.c2 {
/* fallback for old browsers */
background: #fccb90;


background-image:url('./images/d4.jpg');
        background-size:cover; 
        background-size:100% 100%;
        border-radius:10px;
        
}
.footer{
        height:50px;
        width:100%;
        box-shadow:5px 5px 15px black;
        background-color: hwb(180 80% 5%);
        color:black;
        margin-top:37px;
        
    }
    
    .c{
        padding: auto;
    }
    form{
     width:700px;
     border-radius:10px;
     box-shadow:2px 2px 10px grey;
     
    }
    input{
      width:400px;
    }

            </style>
</head>
<body>
<section>
<h1 align="center"><img src="./images/mithla.jpg" style=" width:170px; border-radius:50%"/></h1>
            <h2 align="center" class="text-black;"><b><i>Lalit Narayan Mithila University, Darbhanga</i></b></h2>
           
            <h3 align="center" class="text-black" style="">
                    <b><i> Grienvance Redressal Portal</i></b>
            </h3>
 
          <div class="row m-0 p-0">
            <div class="col-sm-6">
              <div class="card-body">
                <div class="text-center"> 
                  
                </div>

                <form action="logcode.php" method="post">
                  <center>
                  <img src="images/1.png" style="border-radius:50%; height:60px;width:60px; margin-top:10px;"/>
                  <h3 style="margin-top:10px;"><b><i>STUDENT LOGIN</i></b></h3>

                  <div class="form-outline mb-2">
                    <input type="email" class="form-control"
                      placeholder="email address" name="em" style=" width:400px; margin-left:50px;" />
                    <label class="form-label" for="form2Example11">Username</label>
                  </div>

                  <div class="form-outline mb-4">
                    <input type="password"  class="form-control" name="pa" style=" width:400px; margin-left:50px;" />
                    <label class="form-label" for="form2Example22">Password</label>
                  </div>

                  <div class="text-center pt-1 mb-5 pb-1">
                    <button class="btn btn-primary  fa-lg" type="submit" style="height:40px; width:300px; margin-right:200px;  margin-left:200px;">Login
                     </button>
                    
                    
                  </div>
                  <a class="text-muted" href="registraion.php">Forgot password?</a>

                  <div class="d-flex align-items-center justify-content-center pb-4">
                    <p class="mb-0 me-2">Don't have an account?</p>
                    <a class="text-muted text-danger" href="registraion.php">Create New</a>
                    
</center>
                </form>

              </div>
            </div>
            <div class="col-sm-6 d-flex align-items-center justify-content-center gradient-custom-2 c2">
              <div class="text-black">
              
                 
              </div>
             
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
 
</section>

</body>
</html>