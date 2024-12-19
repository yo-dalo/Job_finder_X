<?php
function deleteCategoryById($categoryId) {
    // Establish a database connection. Replace with your database credentials.
           include('conn.php');


    // SQL query to delete a category by its ID.
    $sql = "DELETE FROM Category WHERE id = $categoryId";

    if ($conn->query($sql) === TRUE) {
        echo "Category deleted successfully";
    } else {
        echo "Error deleting category: " . $conn->error;
    }

    // Close the database connection.
    $conn->close();
}

// Usage:
$categoryIdToDelete = $_POST['value1']; // Replace with the ID of the category you want to delete.
deleteCategoryById($categoryIdToDelete);
?>
