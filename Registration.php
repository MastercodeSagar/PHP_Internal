<?php

include("config/db.php");

$message = "";

if (isset($_POST['register'])) {

    $name = trim($_POST['name']);
    $email = trim($_POST['email']);
    $mobile = trim($_POST['mobile']);
    $address = trim($_POST['address']);
    $course = trim($_POST['course']);
    $username = trim($_POST['username']);
    $password = $_POST['password'];

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {

        $message = "Please enter a valid email address.";

    }

    elseif (strlen($password) < 8) {

        $message = "Password must contain at least 8 characters.";

    }

    elseif (preg_match('/[,_\-\{\}\[\]\(\)<>]/', $password)) {

        $message = "Password contains invalid characters.";

    }

    else {

        $sql = "INSERT INTO users
                (name, email, mobile, address, course, username, password)
                VALUES
                ('$name', '$email', '$mobile', '$address', '$course', '$username', '$password')";

        if (mysqli_query($con, $sql)) {

            header("Location: login.php");
            exit();

        } else {

            $message = "Registration Failed: " . mysqli_error($con);
        }
    }
}

?>

<!DOCTYPE html>
<html>
<head>
    <title>User Registration</title>
</head>
<body>
    <h2>User Registration</h2>

    <form method="POST">

        <label>Name:</label>
        <input type="text" name="name" required>

        <br><br>

        <label>Email:</label>
        <input type="email" name="email" required>

        <br><br>

        <label>Mobile:</label>
        <input type="text" name="mobile" required>

        <br><br>

        <label>Address:</label>
        <input type="text" name="address" required>

        <br><br>

        <label>Course:</label>
        <input type="text" name="course" required>

        <br><br>

        <label>Username:</label>
        <input type="text" name="username" required>

        <br><br>

        <label>Password:</label>
        <input
            type="password"
            name="password"
            minlength="8"
            required
        >

        <br><br>
        <input type="submit" name="register" value="Register">
    </form>

</body>

</html>
