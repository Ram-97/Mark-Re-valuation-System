<?php
include('session.php');

if(!$db)
{
 die("ERROR:Could not connect.".mysqli_connect_error());
}
extract($_POST);
$value1=$_POST['value1'];
$value2=$_POST['value2'];
$value3=$_POST['value3']; 
$value4=$_POST['value4']; 
$value5=$_POST['value5']; 
$value6=$_POST['value6']; 
$rollno=$row['rollno'];

if($value1!='' || $value2!=''||$value3!=''||$value4!=''||$value5!=''||$value6!=''){
    $sql="INSERT INTO course (rollno ,sub1 ,sub2 ,sub3 ,sub4 ,sub5 ,sub6 ) VALUES ('$rollno','$value1','$value2','$value3','$value4','$value5','$value6')";

    if(!mysqli_query($db,$sql))
    {
    //echo"<h1>Email id already exists</h1>";
    //header("refresh:1 url=addemployee.php");
    header('location:welcome.php?error=connection');

    }
    else{
        //echo "<h1>success</h1>";
        //header("refresh:1 url=welcome.php");
        header('location:welcome.php?error=add');

    }
}
else{
    header('location:welcome.php?error=select');

}

?>


