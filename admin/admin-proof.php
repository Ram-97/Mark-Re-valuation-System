<?php
   include('session.php');
   $sql1="select * from proof";
   $res1=mysqli_query($db,$sql1);
?>

<html>
<head>
<title>Admin-Proof</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<link href="../images/book.jpeg" rel="icon" type="image/jpeg"/>
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
                    <a href="uploaddocs.php" class="list-group-item list-group-item-primary">Upload Docs</a>
                    <a href="admin-proof.php" class="list-group-item list-group-item-primary active">Proof</a>
                    <a href="admin-settings.php" class="list-group-item list-group-item-primary">Settings</a>
                </div>
            </div>

            <div class="col-md-8">
                <div class="row justify-content-md-center">
                    <div class="shadow-lg p-5 mb-5 bg-light rounded">
                        <table class="table table-bordered table-responsive">
                            <thead class="table-success">
                            <tr>
                                <th>S.No</th>
                                <th>RollNo</th>
                                <th>Filename</th>
                                <th>Download</th>
                            </tr>
                            </thead>
                            <tbody width="100%">
                                <?php
                                    while($row=mysqli_fetch_array($res1,MYSQLI_ASSOC))
                                    {
                                    $id= $row['id'];
                                    $name=$row['rollno'];
                                    $des=$row['filename'];
                                    $path=$row['path'];
                                    echo "<tr><td>".$id."</td><td>".$name."</td><td>".$des."</td><td>
                                            <a href='download.php?dow=$path' class='btn btn-info '>
                                                Download File
                                            </a>
                                    </td></tr>";
                                    }
                                ?>
                            </tbody>
                         </table>

                    </div>
                </div>
        </div>
    </div>

</body>
</html>