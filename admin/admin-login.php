<?php
include("config.php");
session_start();
if($_SERVER["REQUEST_METHOD"] == "POST"){

$myusername=mysqli_real_escape_string($db,$_POST['username']);
$mypassword=mysqli_real_escape_string($db,$_POST['password']);

$sql="SELECT id FROM admin WHERE username='$myusername' and password='$mypassword'";
$result=mysqli_query($db,$sql);
$row=mysqli_fetch_array($result,MYSQLI_ASSOC);


$count=mysqli_num_rows($result);

if($count==1){
$_SESSION['login_user']=$myusername;
header("location:admin-welcome.php");
}else{
echo "error";
header("location:index.php");
}
}

?>