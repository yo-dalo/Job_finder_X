<?php
// Assuming you have a database connection established

function toggleCategoryStatus($categoryID) {
   
       include('conn.php');

   
   
   
    // Check the current status of the category
    $sql = "SELECT status FROM Category WHERE id = $categoryID";
    $result = mysqli_query($your_db_connection, $sql);
    
    if ($result) {
        $row = mysqli_fetch_assoc($result);
        $currentStatus = $row['status'];
        
        // Toggle the status
        $newStatus = ($currentStatus == 0) ? 1 : 0;
        
        // Update the status in the database
        $updateSql = "UPDATE Category SET status = $newStatus WHERE id = $categoryID";
        $updateResult = mysqli_query($your_db_connection, $updateSql);
        
        if ($updateResult) {
            return "Category status updated successfully.";
        } else {
            return "Error updating category status: " . mysqli_error($your_db_connection);
        }
    } else {
        return "Error fetching category status: " . mysqli_error($your_db_connection);
    }
}

// Example usage:
$categoryID = $_POST['value1']; // Replace with the actual category ID you want to toggle
$result = toggleCategoryStatus($categoryID);
echo $result;
?>
