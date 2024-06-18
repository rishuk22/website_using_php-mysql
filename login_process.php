<?php
session_start();
include 'database.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $con->real_escape_string($_POST['username']);
    $password = $con->real_escape_string($_POST['password']);

    $sql = "SELECT username,name,email,gender,mob_num,dob FROM authenti WHERE username='$username' and password='$password'";
    $result = $con->query($sql);

    if ($result->num_rows > 0) {
        $user = $result->fetch_assoc();
        $_SESSION['username'] = $user['username'];
        $_SESSION['name'] = $user['name'];
        $_SESSION['email'] = $user['email'];
        $_SESSION['gender']=$user['gender'];
        $_SESSION['num'] = $user['mob_num'];
        $_SESSION['dob'] = $user['dob'];
        header("Location: profile.php");
    } else {
        echo '<script>
        window.location.href ="login.php";
        alert("Login failed.Invalid username or password!!! ")
        </script>';
    }
}
?>
