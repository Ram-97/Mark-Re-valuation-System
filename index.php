<html lang="en">
<head>
<title>Mark Revaluation</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="images/index.jpeg" rel="icon" type="image/jpeg"/>
<script type="text/javascript">
$(document).ready(function(){
    $("#button1").click(function(){
        $("#log_in").hide();
        $("#Sign_up").show();
    });

    $("#button2").click(function(){
        $("#log_in").show();
        $("#Sign_up").hide();
    });

});
</script>
</head>

<body class="jumbotron">
<div class="container-fluid">
    <div class="row" id="log_in">
        <div class="col-md-4"></div>
        <div class="col-md-4">
            <div class="panel panel-primary">
            <div class="panel-heading text-center "><h4>Student Login</h4> </div>
            <div class="panel-body">
            <div>
            <img src="images/profile.jpg" class="img-circle img-responsive center-block" alt="Student Profile" width="200" height="130"> 
                    <form method="post" action="login.php">
                            <div class="form-group">
                                <label for="Rollno">Rollno:</label>
                                <input type="text" name="rollno" id="username" placeholder="Enter Rollno" class="form-control" required/>
                            </div>
                            <div class="form-group">
                                 <label for="Password">Password:</label>
                                 <input type="password" name="password" id="password" placeholder="Enter password" class="form-control" required/>
                            </div> 
                            <input type="submit" value="login" id="submit" class="btn btn-success center-block"/>
                                
                        </form>
                        <hr/>
                        <div class="text-center">
                            <span class="glyphicon glyphicon-user "></span>
                            <a href="../Revaluation/admin/index.php" class="text-primary">Admin Login</a>
                            <br/><br/>
                            <a id="button1" class="text-center text-muted">For Create Account click here</a>
                        </div>
                        
                        
            </div>
            </div>
            </div>
        </div>
    </div>

    <div class="row" id="Sign_up" style="display:none">
        <div class="col-md-4"></div>
        <div class="col-md-4">
            <div class="panel panel-primary">
            <div class="panel-heading text-center "><h4>Student Signup</h4> </div>
            <div class="panel-body">
            <div>
                    <form method="post" action="signup.php">
                            <div class="form-group">
                                <label for="Rollno">Rollno:</label>
                                <input type="text" name="rollno" id="username" placeholder="Enter Rollno" class="form-control" required/>
                            </div>
                            <div class="form-group">
                                <label for="Username">Username:</label>
                                <input type="text" name="username" id="username" placeholder="Enter Username" class="form-control" required/>
                            </div>
                            <div class="form-group">
                                 <label for="Password">Password:</label>
                                 <input type="password" name="password" id="password" placeholder="Enter password" class="form-control" required/>
                            </div> 
                            <div class="form-group">
                                 <label for="ConfirmPassword">Confirm Password:</label>
                                 <input type="password" name="confirm_password" id="confirm_password" placeholder="Enter password again" class="form-control" required/>
                            </div> 
                            <input type="submit" value="Signup" id="submit" class="btn btn-success center-block"/>
                        </form>
                        <hr/>
                        <div class="text-center">
                            <a id="button2" class="text-center text-muted">For Sign in</a>
                        </div>
                        
            </div>
            </div>
            </div>
        </div>
    </div>

</div>
</body>
</html>