<?php
include('conn.php');
function login($username, $password, $conn) {
    $username = $conn->real_escape_string($username);

    // Query to retrieve the hashed password for the given username
    $sql = "SELECT id, username, password FROM admin WHERE username='$username'";
    $result = $conn->query($sql);

    if ($result->num_rows == 1) {
        $row = $result->fetch_assoc();
        $hashedPassword = $row['password'];

        // Verify the input password against the hashed password
        if (password_verify($password, $hashedPassword)) {
            // Password is correct
            return $row;
        }
    }

    // User not found or invalid credentials
    return false;
}
// Example usage:
$username = $_POST['username'];
$password = $_POST['password'];
$userData = login($username, $password, $conn);
if ($userData) {
    echo "valid";
    $_SESSION['USER_LOGIN'] = 'yes';
    $_SESSION['user_id'] = $userData['id'];
    $_SESSION['user_username'] = $userData['username'];
} else {
    echo "wrong";
        $_SESSION['USER_LOGIN'] = 'yes';

}
// Close the database connection
$conn->close();
?>
