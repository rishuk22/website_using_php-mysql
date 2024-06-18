<?php
include 'database.php';
if(isset($_POST["submit"])){


    $name=$_POST['uname'];
    $email=$_POST['email'];
    $username=$_POST['username'];
    $dob=$_POST['dob'];
    $mob=$_POST['num'];
    $gender=$_POST['gender'];
    $password=$_POST['password'];

     $sql="insert into authenti(name,email,gender,mob_num,password,username,dob)
      values('$name','$email','$gender','$mob','$password','$username','$dob')";
      if(mysqli_query($con,$sql)){
        echo '<script>
        window.location.href ="login.php";
        alert("new record inserted,Now you can login")
        </script>';
        
      }
      else
      {
        echo "error:".mysqli_error($con);
      }

      mysqli_close($con);
} 
?>