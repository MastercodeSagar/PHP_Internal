<?php

include("config/db.php");

session_start();

if (isset($_POST['login'])) {

    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM users 
            WHERE username='$username' AND password='$password'";

    $result = mysqli_query($con, $sql);

    if (mysqli_num_rows($result) > 0) {

        $user = mysqli_fetch_assoc($result);

        $_SESSION['user_id'] = $user['id'];

        header("Location: profile.php");
        exit();

    } else {

        header("Location: Registration.php");
        exit();
    }
}

?>

<!DOCTYPE html>
<html>
<head>
    <title>User Login</title>
</head>

<body>

    <h2>User Login</h2>

    <form method="POST">

        <label>Username:</label>
        <input type="text" name="username" required>

        <br><br>

        <label>Password:</label>
        <input type="password" name="password" required>

        <br><br>

        <input type="submit" name="login" value="Login">

    </form>

</body>
</html>