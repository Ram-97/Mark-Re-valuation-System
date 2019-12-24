<?php
   include('session.php');
   $rollno=$row['rollno'];
?>

<html>
<head>
<title>View Book-<?php echo $login_session; ?></title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<link href="images/student.jpeg" rel="icon" type="image/jpeg"/>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</head>

<body class="bg-light"> 
<nav class="navbar navbar-expand-sm bg-primary navbar-dark">
        <ul class="navbar-nav">
            <li class="nav-item active">
            <a class="nav-link">Welcome <?php echo $login_session; ?></a>
            </li>
            <li class="nav-item active">
            <a class="btn btn-primary" href="welcome.php">Home</a>
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
<div class="container-fluid">         
<br/>
<div class="row">
  <div class="col-md-4">  
    <div class="list-group">
        <a href="welcome.php" class="list-group-item list-group-item-primary ">Register course</a>
        <a href="registered_course.php" class="list-group-item list-group-item-primary">Registered course</a>
        <a href="pay.php" class="list-group-item list-group-item-primary">Request Photocopy</a>
        <a href="View.php" class="list-group-item list-group-item-primary active">View Booklet</a>
        <a href="proof.php" class="list-group-item list-group-item-primary ">Upload proof</a>
        <a href="settings.php" class="list-group-item list-group-item-primary ">Settings</a>
    </div>
  </div>
  <div class="col-md-8">

    <div class="row justify-content-center">
      <div class="card" style="width:90%">
        <div class="card-body">
            <div id="error-div" class="alert alert-danger" role="alert" style="display:none;" align="center">
                            <span class="glyphicon glyphicon-exclamation-sign" id="error-glyphicon" aria-hidden="true"></span>
                            <span id="error-span"></span>
            </div>
            <h5 class="text-info">Your Exam Papers</h5>
            <?php
                  $sql1=mysqli_query($db,"SELECT * FROM documents where rollno='$rollno'");
                  
                  while($row1 = mysqli_fetch_array($sql1))
                  {
                  $path=$row1['path'];
                    echo'   <tr> 
                            <td><img src="images\book.jpeg" alt="Card image" style="width:20%"></td>';
                    echo "<td><a href=$path target='_blank' class='btn btn-success'>".$row1['filename'] ."</a> </td></tr>";
            
                  }

              ?>

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
            $msg = "You have already registered";
          }
          else if(strcmp($msg,"add")==0){
            $msg = "Registered successfully.";
          }
          else if(strcmp($msg,"select")==0){
            $msg = "Select atleast one";
          }
          

          if(strcmp($msg,"Registered successfully.")==0){
            echo "<script>
              document.getElementById('error-div').className = 'alert alert-success';
              document.getElementById('error-div').style.display = 'block';
              document.getElementById('error-glyphicon').className = 'glyphicon glyphicon-ok';
              document.getElementById('error-span').innerHTML = '".$msg."';
            </script>";
          }
          
          else if(strcmp($msg,"You have already registered")==0 || strcmp($msg,"Select atleast one")==0){
            echo "<script>
              document.getElementById('error-div').className = 'alert alert-danger';
              document.getElementById('error-div').style.display = 'block';
              document.getElementById('error-glyphicon').className = 'glyphicon glyphicon-remove-sign';
              document.getElementById('error-span').innerHTML = '".$msg."';
            </script>";
          }

          else if(strcmp($msg,"")!=0){
            echo "<script>
              document.getElementById('error-div').style.display = 'block';
              document.getElementById('error-span').innerHTML = '".$msg."';
            </script>";

          }
        }
?>



</body>
</html>