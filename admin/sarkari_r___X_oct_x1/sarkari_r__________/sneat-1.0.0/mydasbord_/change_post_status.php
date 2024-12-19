<?php
// Assuming you have a database connection established

       


function togglepostStatus($postID) {
   

   include('conn.php');

   
    // Check the current status of the post
    $sql = "SELECT status FROM post WHERE id = $postID";
    $result = mysqli_query($your_db_connection, $sql);
    
    if ($result) {
        $row = mysqli_fetch_assoc($result);
        $currentStatus = $row['status'];
        
        // Toggle the status
        $newStatus = ($currentStatus == 0) ? 1 : 0;
        
        // Update the status in the database
        $updateSql = "UPDATE post SET status = $newStatus WHERE id = $postID";
        $updateResult = mysqli_query($your_db_connection, $updateSql);
        
        if ($updateResult) {
            return "post status updated successfully.";
        } else {
            return "Error updating post status: " . mysqli_error($your_db_connection);
        }
    } else {
        return "Error fetching post status: " . mysqli_error($your_db_connection);
    }
}

// Example usage:
$postID = $_POST['value1']; // Replace with the actual post ID you want to toggle
$result = togglepostStatus($postID);
echo $result;
?>
