<?php

session_start();

include("config/db.php");

if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit();
}

$user_id = $_SESSION['user_id'];

$sql = "SELECT * FROM users WHERE id='$user_id'";

$result = mysqli_query($con, $sql);

$user = mysqli_fetch_assoc($result);

?>

<!DOCTYPE html>
<html>
<head>
    <title>User Profile</title>
</head>

<body>

    <h2>User Full Information</h2>
    
    <p><b>Name:</b> <?php echo $user['name']; ?></p>
    <p><b>Email:</b> <?php echo $user['email']; ?></p>
    <p><b>Mobile:</b> <?php echo $user['mobile']; ?></p>
    <p><b>Address:</b> <?php echo $user['address']; ?></p>
    <p><b>Course:</b> <?php echo $user['course']; ?></p>
    <p><b>Username:</b> <?php echo $user['username']; ?></p>

    <br>

    <a href="logout.php">Logout</a>

</body>
</html>