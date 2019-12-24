<?php
include('config.php');

if(isset($_GET['dow'])){

    $path=$_GET['dow'];
    $sql="select * from proof where path='$path'";
    $res = mysqli_query($db,$sql);
    $path1='../'.$path;
    header('Content-Type: application/octet-stream');
    header('Content-Disposition: attachment; filename="'.basename($path1).'"');
    header('Content-Length:'.filesize($path1));
    readfile($path1);
}

?>
