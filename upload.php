<?php
include('session.php');
$rollno=$row['rollno'];

if (!$db)
  {
echo "error in connecting database";
}


if(isset($_POST['submit']))
{
    $name = $_FILES['myfile']['name'];
    $tmp_name = $_FILES['myfile']['tmp_name'];

    if($name ){
        $Location ="documents/$name";
        move_uploaded_file($tmp_name,$Location);
        $query = "INSERT INTO proof (rollno,filename,path) VALUES ('$rollno','$rollno$name','$Location')";
        if(!mysqli_query($db,$query))
        {
        echo"error";
        }
        else{
            header('Location:proof.php');

        }
    }
}

?>
