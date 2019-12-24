<html lang="en">
<head>
<title>Admin</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="../js/bootstrap.min.js"></script>
<link href="../css/bootstrap.min.css" rel="stylesheet">
<link href="../images/admin.jpeg" rel="icon" type="image/jpeg"/>
</head>
<body class="jumbotron">
<div class="container">
    <div class="row">
        <div class="col-md-4 col-md-offset-4 ">
            <div class="panel panel-primary">
            <div class="panel-heading text-center">Admin Login </div>
            <div class="panel-body">
            <img src="../images/admin_main.jpeg" class="img-circle img-responsive center-block" alt="Student Profile" width="150" height="80"> 
                    <form method="post" action="admin-login.php">
                            <div class="form-group">
                                <label for="Username">Username:</label>
                                <input type="text" name="username" id="username" placeholder="Enter username" class="form-control" required/>
                            </div>
                            <div class="form-group">
                                 <label for="Password">Password:</label>
                                 <input type="password" name="password" id="password" placeholder="Enter password" class="form-control" required/>
                            </div> 
                            <input type="submit" value="login" id="submit" class="btn btn-success center-block"/>
                                
                        </form>
                        <div class="text-center">
                            <span class="glyphicon glyphicon-home"></span>
                            <a href="../index.php" class="text-muted" >Home page</a>
                        </div>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>