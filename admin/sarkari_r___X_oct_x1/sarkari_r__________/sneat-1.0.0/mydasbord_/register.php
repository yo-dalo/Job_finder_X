<?php
include('conn.php');
$re_username = mysqli_real_escape_string($conn, $_POST['re_username']);
$re_password = mysqli_real_escape_string($conn, $_POST['re_password']);

// Define a function to check if the username already exists
function isUsernameTaken($username, $connection) {
    $query = "SELECT username FROM admin WHERE username = '$username'";
    $result = mysqli_query($connection, $query);

    return (mysqli_num_rows($result) > 0);
}

// Define a function for user registration
function registerUser($username, $password, $connection) {
    if (isUsernameTaken($username, $connection)) {
        return 2; // Username already exists
    } else {
        $hashedPassword = password_hash($password, PASSWORD_BCRYPT); // Hash the password
        $query = "INSERT INTO admin (username, password) VALUES ('$username', '$hashedPassword')";
        $result = mysqli_query($connection, $query);

        if ($result) {
            return 1; // Registration successful
        } else {
            return 0; // Registration failed
        }
    }
}

// Usage example
$registrationResult = registerUser($re_username, $re_password, $conn);

if ($registrationResult == 1) {
    echo 1; // Registration successful
} elseif ($registrationResult == 2) {
    echo 2; // Username already exists
} else {
    echo 0; // Registration failed
}

// Close the database connection
mysqli_close($connection);
?>
