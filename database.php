<?php
$servername="localhost";
$username="root";
$password="";
$database="social_media";


#$con=mysqli_connect("localhost","root","",library);
$con=mysqli_connect($servername,$username,$password,$database);
if(!$con){
    die("error detected.mysqli_error($con)");
}
?>
