<?php
// Include your database connection code here
// Replace 'your_host', 'your_username', 'your_password', and 'your_database' with your actual database credentials.
include('conn.php');
// Function to add a category
function addCategory($name, $status) {
    global $connection;
    $name = mysqli_real_escape_string($connection, $name);
    $status = (int)$status;
    
    $query = "INSERT INTO `Category` (`name`, `status`) VALUES ('$name', $status)";
    $result = mysqli_query($connection, $query);
    
    if ($result) {
        return true;
    } else {
        return false;
    }
}

// Function to add a post

$category = $_POST["category_name"];

// Adding a category
if (addCategory($category, 1)) {
    echo "Category added successfully.";
} else {
    echo "Category addition failed.";
}

// Adding a post





// Close the database connection
mysqli_close($connection);










?>
