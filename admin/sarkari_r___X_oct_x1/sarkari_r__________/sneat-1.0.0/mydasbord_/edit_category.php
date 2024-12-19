<?php

       include('conn.php');


/**
 * Function to edit category name by ID.
 * 
 * @param int $id The ID of the category to be updated.
 * @param string $newName The new name for the category.
 * @return bool Returns true if the update was successful, false otherwise.
 */
function editCategoryNameById($id, $newName) {
    global $conn;

    // Prepare an SQL statement to update the category name by ID
    $stmt = $conn->prepare("UPDATE Category SET name = ? WHERE id = ?");
    $stmt->bind_param("si", $newName, $id);

    // Execute the statement
    if ($stmt->execute()) {
        return true;
    } else {
        return false;
    }
    $stmt->close();
}


// Example usage
if (editCategoryNameById($_POST['value3'], $_POST['value2'])) {
    echo "Category name updated successfully!";
} else {
    echo "Failed to update category name.";
}

$conn->close();

?>
