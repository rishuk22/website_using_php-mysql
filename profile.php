<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: login_process.php");
    exit();
}

include 'database.php';
$username = $_SESSION['username'];
$sql = "SELECT name, email,gender,mob_num,username,dob FROM authenti WHERE username='$username'";
$result = $con->query($sql);

if ($result->num_rows > 0) {
    $user = $result->fetch_assoc();
} else {
    echo "User not found.";
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Profile</title>
    <link rel="stylesheet" href=" https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">

    <style>
        .card{
            postion:relative;
            left: 500px;
            top:30px;
        }
        body{
            background-image: url(a1.avif);
            background-size:cover;
        }
    </style>
</head>
<body >


    <div class="card" style="width: 18rem;">
        <img src="profile_image.png" hight="300px" width="400px" class="card-img-top" alt="profile">
        <div class="card-body">
          <h4 class="card-title"><u>Profile</u></h4>
          <p class="card-text">
    <b>Username:-</b> <?php echo htmlspecialchars($user['username']); ?><br>
    <b>Name:-</b> <?php echo htmlspecialchars($user['name']); ?><br>
    <b>Email:-</b><?php echo htmlspecialchars($user['email']); ?><br>
    <b>DOB:-</b> <?php echo htmlspecialchars($user['dob']); ?><br>
    <b>Gender:-</b> <?php echo htmlspecialchars($user['gender']); ?><br>
    <b>Mob.no:-</b> <?php echo htmlspecialchars($user['mob_num']); ?><br>

        </p>

          <a href="logout.php" class="btn btn-primary">Logout</a>
        </div>
    </div>
   
</body>
</html>




