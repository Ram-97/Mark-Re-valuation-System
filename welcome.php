<?php
   include('session.php');
?>

<html>
<head>
<title>Hi <?php echo $login_session; ?></title>
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
        <a href="welcome.php" class="list-group-item list-group-item-primary active">Register course</a>
        <a href="registered_course.php" class="list-group-item list-group-item-primary">Registered course</a>
        <a href="pay.php" class="list-group-item list-group-item-primary">Request Photocopy</a>
        <a href="View.php" class="list-group-item list-group-item-primary ">View Booklet</a>
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
            <form  method="post" action="register_course.php">
            <table class="table table-hover">
                    <thead>
                    <tr>
                        <th width="5%">Check</th>
                        <th width="5%">Code</th>
                        <th width="20%">Course Name</th>
                        <th >Description</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td><input type="checkbox" name="value1" value="CCADC41 Introduction to visual programming" required /> </td>
                        <td>CCADC41</td>
                        <td>Introduction to visual programming</td>
                        <td>Visual programming languages are widely used for rapid development of graphical applications the visual programming</td>
                    </tr>
                    <tr>
                        <td><input type="checkbox" name="value2" value="CCADC42 Banking theory law and practice" required/> </td>
                        <td>CCADC42</td>
                        <td>Banking theory law and practice</td>
                        <td> The Banking system as a whole can collectively create money, while each individual bank.</td>
                    </tr>
                    <tr>
                        <td><input type="checkbox" name="value3" value="CCADC43 Business Mathametics" required/>  </td>
                        <td>CCADC43</td>
                        <td> Business Mathametics</td>
                        <td> Business Mathametics used by commercial enterprises to record and manage business operations.</td>
                    </tr>
                    <tr>
                        <td><input type="checkbox" name="value4" value="CCADC44 Financial Accounting -IV" required/> </td>
                        <td>CCADC44</td>
                        <td>Financial Accounting -IV</td>
                        <td>Financial Accounting is the field of accounting concerned with the summary analysis and reporting of financial transactions.</td>
                      </tr>
                    <tr>
                        <td><input type="checkbox" name="value5" value="CCADC4P Visual programming lab" required/> </td>
                        <td>CCADC4P</td>
                        <td>Visual programming lab</td>
                        <td> Visual programming using a visual environment through the useful visual programming.</td>
                      </tr>
                    <tr>
                        <td><input type="checkbox" name="value6" value="CCADS41 International Trade" required/>  </td>
                        <td>CCADS41</td>
                        <td> International Trade</td>
                        <td> International Trade is the exchange of capital, goods and services across international borders as territories. </td>
                      </tr>
                    </tbody>
            </table>
            <input type="submit"  value="Submit" class="btn btn-success">
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