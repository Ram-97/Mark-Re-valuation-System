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
$paymentid=rand(1000000,10000000);
$amount=0;

if($value1=="CCADC41 Introduction to visual programming")
    $amount+=150;
if($value2=="CCADC42 Banking theory law and practice")
    $amount+=150;
if($value3=="CCADC43 Business Mathametics")
    $amount+=150;
if($value4=="CCADC44 Financial Accounting -IV")
    $amount+=150;
if($value5=="CCADC4P Visual programming lab")
    $amount+=150;
if($value6=="CCADS41 International Trade")
    $amount+=150;


if($value1!='' || $value2!=''||$value3!=''||$value4!=''||$value5!=''||$value6!=''){
    $sql="INSERT INTO photocopy (rollno ,sub1 ,sub2 ,sub3 ,sub4 ,sub5 ,sub6,amount,paymentid) VALUES ('$rollno','$value1','$value2','$value3','$value4','$value5','$value6','$amount','$paymentid')";

    if(!mysqli_query($db,$sql))
    {
    //echo"<h1>Email id already exists</h1>";
    //header("refresh:1 url=addemployee.php");
    header('location:pay.php?error=connection');

    }
    else{
        //echo "<h1>success</h1>";
        //header("refresh:1 url=welcome.php");
        header('location:pay.php?error=add');

    }
}
else{
    header('location:pay.php?error=select');

}

?>


