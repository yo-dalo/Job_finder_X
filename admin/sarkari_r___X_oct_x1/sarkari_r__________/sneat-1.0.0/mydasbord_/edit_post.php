<?php
           include('conn.php');


// Function to edit a post by ID
function editPost($postID, $newName, $newTitle, $newPostData, $newCategory) {
    global $conn;
    
    $postID = mysqli_real_escape_string($conn, $postID);
    $newName = mysqli_real_escape_string($conn, $newName);
    $newTitle = mysqli_real_escape_string($conn, $newTitle);
    $newPostData = mysqli_real_escape_string($conn, $newPostData);
    $newCategory = mysqli_real_escape_string($conn, $newCategory);

    $sql = "UPDATE `post` SET `name`='$newName', `title`='$newTitle', `Post_data`='$newPostData', `category`='$newCategory' WHERE `id`='$postID'";

    if ($conn->query($sql) === TRUE) {
        echo "Post updated successfully";
    } else {
        echo "Error updating post: " . $conn->error;
    }
}


// Example usage

$postID=$_POST['edit_post_id'];

$edit_post_name=$_POST['edit_post_name'];
$edit_post_title=$_POST['edit_post_title'];
$edit_post_post_data=$_POST['edit_post_post_data'];
$edit_post_category=$_POST['edit_post_category'];
$editor=$_POST['editor'];

editPost($postID, $edit_post_name,$edit_post_title,$editor,$edit_post_category);


$conn->close(); // Close the database connection
?>
