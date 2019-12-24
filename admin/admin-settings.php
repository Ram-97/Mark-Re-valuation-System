<?php
   include('session.php');
?>

<html>
<head>
<title>Admin-Settings</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<link href="../images/Settings.jpeg" rel="icon" type="image/jpeg"/>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

</head>


<body class="bg-light"> 
    <nav class="navbar navbar-expand-sm bg-primary navbar-dark">
        <ul class="navbar-nav">
            <li class="nav-item active">
            <a class="nav-link">Welcome <?php echo $login_session; ?></a>
            </li>
            <li class="nav-item active">
            <a class="btn btn-primary" href="admin-welcome.php">Home</a>
            </li>
        </ul>
        <div class="collapse navbar-collapse justify-content-end" id="nav-content">
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="btn btn-primary" href = "logout.php">  Sign Out</a>
                </li>
         </ul>
        </div>
    </nav>
<br/>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-4">  
                <div class="list-group">
                    <a href="admin-welcome.php" class="list-group-item list-group-item-primary ">Request</a>
                    <a href="uploaddocs.php" class="list-group-item list-group-item-primary ">Upload Docs</a>
                    <a href="admin-proof.php" class="list-group-item list-group-item-primary">Proof</a>
                    <a href="admin-settings.php" class="list-group-item list-group-item-primary active">Settings</a>
                </div>
            </div>

            <div class="col-md-8">
                <div class="row justify-content-md-center">
                    <div class="shadow-lg p-5 mb-5 bg-light rounded">
                        <div class="card" style="width:100%">
                            <div class="card-body">
                                <div id="error-div" class="alert alert-danger" role="alert" style="display:none;" align="center">
                                    <span class="glyphicon glyphicon-exclamation-sign" id="error-glyphicon" aria-hidden="true"></span>
                                    <span id="error-span"></span>
                                </div>                               
                                <form method="post" action="change_pswd.php">
                                    <h6 class="text-dark">Current Password:</h6>
                                    <input type="password" name="current_pswd" placeholder="Enter current password" class="form-control" size="55" required/>
                                    <br/>
                                    <h6 class="text-dark">Change Password:</h6>
                                    <input type="password" name="change_pswd" placeholder="Enter new password" class="form-control" size="55" required/>
                                    <br/>
                                    <h6 class="text-dark">Confirm Password:</h6>
                                    <input type="password" name="confirm_pswd" placeholder="Confirm password" class="form-control" size="55" required/>
                                    <br/>
                                    <input type="submit" value="Change"  class="btn btn-success mx-auto d-block"/>
                                </form>                               
                            </div>
                        </div>
                    </div>
                </div>
        </div>
    </div>

    <?php
        $msg="";
        if(isset($_GET['error'])){
          $msg=$_GET['error'];
          if(strcmp($msg,"connection")==0){
            $msg = "Connection problem. Please try again later.";
          }
          else if(strcmp($msg,"current")==0){
            $msg = "Password Wrong.";
          }
          else if(strcmp($msg,"change")==0){
            $msg = "changed successfully.";
          } 
          else if(strcmp($msg,"notchange")==0){
            $msg = "Password not matched.";
          }

          if(strcmp($msg,"changed successfully.")==0){
            echo "<script>
              document.getElementById('error-div').className = 'alert alert-success';
              document.getElementById('error-div').style.display = 'block';
              document.getElementById('error-glyphicon').className = 'glyphicon glyphicon-ok';
              document.getElementById('error-span').innerHTML = '".$msg."';
            </script>";
          }
          if(strcmp($msg,"Password Wrong.")==0){
            echo "<script>
              document.getElementById('error-div').className = 'alert alert-warning';
              document.getElementById('error-div').style.display = 'block';
              document.getElementById('error-glyphicon').className = 'glyphicon glyphicon-info-sign';
              document.getElementById('error-span').innerHTML = '".$msg."';
            </script>";
          }
          if(strcmp($msg,"Password not matched.")==0){
            echo "<script>
              document.getElementById('error-div').className = 'alert alert-warning';
              document.getElementById('error-div').style.display = 'block';
              document.getElementById('error-glyphicon').className = 'glyphicon glyphicon-info-sign';
              document.getElementById('error-span').innerHTML = '".$msg."';
            </script>";
          }
          if(strcmp($msg,"")!=0){
            echo "<script>
              document.getElementById('error-div').style.display = 'block';
              document.getElementById('error-span').innerHTML = '".$msg."';
            </script>";

          }
        }
    ?>



</body>
</html>