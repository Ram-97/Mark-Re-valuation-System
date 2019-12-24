<?php
$con=mysqli_connect("localhost","root","","internalmark");

if(!$con)
{
 die("ERROR:Could not connect.".mysqli_connect_error());
}
extract($_POST);
$Rollno=$_POST['rollno'];
$Username=$_POST['username'];
$Password=$_POST['password']; 
$Cpassword=$_POST['confirm_password']; 
 
if($Password==$Cpassword){
    $sql="INSERT INTO student (rollno,username,password) VALUES ('$Rollno','$Username','$Password')";

    if(!mysqli_query($con,$sql))
    {
    //echo"<h1>Error:Could not able to execute $sql</h1>".mysqli_error($con);
    header("location:error.php");
    }
    else{
        //echo "<h1>success</h1>";
        header("refresh:0 url=index.php");
    }
}
else{
    $sql1=mysqli_query($con,"select rollno from student where rollno='$Rollno'");
    $row=mysqli_fetch_array($sql1,MYSQLI_ASSOC);
    $id=$row['rollno'];
    if($id==$rollno)
        header("location:error.php");
    else
        header("location:error1.php");
}
?>


