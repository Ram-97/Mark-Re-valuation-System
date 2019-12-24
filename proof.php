<?php
   include('session.php');
   $rollno=$row['rollno'];
   $sql2=mysqli_query($db,"select * from proof where rollno='$rollno'");
   $row2=mysqli_fetch_array($sql2,MYSQLI_ASSOC);
?>

<html>
<head>
<title>Upload Proof-<?php echo $login_session; ?></title>
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
        <a href="View.php" class="list-group-item list-group-item-primary ">View Booklet</a>
        <a href="proof.php" class="list-group-item list-group-item-primary active">Upload proof</a>
        <a href="settings.php" class="list-group-item list-group-item-primary ">Settings</a>
    </div>
  </div>
  <div class="col-md-8">

    <div class="row justify-content-center">
      <div class="card" style="width:90%">
        <div class="card-body">

            <h5 class="text-info">Upload Doc (e-Signed copy of letter):</h5>
            <?php
                  $sql1=mysqli_query($db,"SELECT * FROM documents where rollno='$rollno'");
                  $row1= mysqli_fetch_array($sql1,MYSQLI_ASSOC);
                  if($row1['rollno']==$rollno)
                  {
                      if($row2['id']=='')
                      {
                      echo '
                            <form action="upload.php" method="post" enctype="multipart/form-data" class="form-group">
                                <br/>
                                <input type="file" name="myfile"  required/>
                                <br/><br/>
                                <h6 class="text-danger">Note:
                                                        You can upload any type of file. But File size must be within the range of 1MB<br/>
                                                        Your Filename must be in this format &lt Rollno letter &gt.eg:16cs00letter<br/>
                                </h6>
                                <br/>
                                <input type="submit" name="submit" value="Upload" class="btn btn-success"/>
                
                            </form>';
                      }
                      else
                      {
                          echo '<br/><h5 class="text-success">You Have Uploaded the necessary document.</h5>
                                <br/><h6 class="text-danger">Wait for 2-3 days <br/>
                                <br/> your Exam Paper will be revaluated and the marks should be uploaded to your portal.
                                </h6>';
                      }
                }
                  
              ?>

        </div>
      </div>
    </div>
</div>
</div>
</div>
</body>
</html>