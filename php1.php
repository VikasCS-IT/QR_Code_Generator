<?php
    $name=$_POST['name'];
    $photo=$_FILES['photo']['name'];
    $filename=$_FILES['photo']['tmp_name'];
    $folder="images/".$photo;
    move_uploaded_file($filename,$folder);
    $con=mysqli_connect("localhost","root","","php");
    $query="INSERT INTO php (name,photo) VALUES ('$name','$folder')";
    $data=mysqli_query($con,$query);
    if($data==true){
        echo "Your data successfully submitted";
    }
    else{
        echo "Server error please try again";
    }
?>