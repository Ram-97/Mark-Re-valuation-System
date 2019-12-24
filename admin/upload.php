<?php
include('config.php');

if (!$db)
  {
echo "error in connecting database";
}


if(isset($_POST['submit']))
{
    
    for($x=0;$x<count($_FILES['myfile']['name']);$x++)
    {

    $rollno = $_POST['rollno'];

    $name = $_FILES['myfile']['name'][$x];
    $size = $_FILES['myfile']['size'][$x];
    $type = $_FILES['myfile']['type'][$x];
    $tmp_name = $_FILES['myfile']['tmp_name'][$x];

    $maxsize=1024 * 200000;
    $accepted=array("txt","pdf");
    $dir ="../documents/";
    $dr="documents/";

    if($size > $maxsize){
        //echo '$name is too large';
        header("location:uploaddocs.php?error=toolarge");

    }elseif(! in_array(pathinfo($name,PATHINFO_EXTENSION),$accepted)){
        //echo '$name is not an acceptable file type';
        header("location:uploaddocs.php?error=notaccepted");

    }else{
        move_uploaded_file($tmp_name,$dir.$name);
        //echo '$name uploaded successfully.<br/>';
        $query = "INSERT INTO documents (rollno,filename ,path) VALUES ('$rollno','$name','$dr$name')";
        if(!mysqli_query($db,$query))
        {
        //echo"error";
        header("location:uploaddocs.php?error=connection");
        }
        else{
           // header('Location:uploaddocs.php');
            header("location:uploaddocs.php?error=noneRemove");


        }
    }

    
       
    

    }

}

?>
