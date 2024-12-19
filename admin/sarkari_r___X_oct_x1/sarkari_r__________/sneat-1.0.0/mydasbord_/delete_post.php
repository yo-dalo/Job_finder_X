<?php
// Define your database connection parameters
           include('conn.php');

// Function to delete a post by ID
function deletePostById($postID, $conn) {
    $postID = mysqli_real_escape_string($conn, $postID); // Sanitize input

    $sql = "DELETE FROM `post` WHERE `id` = $postID";

    if ($conn->query($sql) === TRUE) {
        echo "Post with ID $postID has been deleted successfully.";
    } else {
        echo "Error deleting post: " . $conn->error;
    }
}

// Usage
$deletePostId = $_POST['value1']; // Replace with the ID you want to delete
deletePostById($deletePostId, $conn);

// Close the database connection
$conn->close();
?>
