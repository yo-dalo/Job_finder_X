<?php
// Include your database connection code here
// Replace 'your_host', 'your_username', 'your_password', and 'your_database' with your actual database credentials.
include('conn.php');
// Function to add a category

// Function to add a post
function addPost($name, $title, $post_data, $category, $status) {
    global $connection;
    $name = mysqli_real_escape_string($connection, $name);
    $title = mysqli_real_escape_string($connection, $title);
    $post_data = mysqli_real_escape_string($connection, $post_data);
    $category = (int)$category;
    $status = (int)$status;
    
    $query = "INSERT INTO `post` (`name`, `title`, `Post_data`, `category`, `status`) VALUES ('$name', '$title', '$post_data', $category, $status)";
    $result = mysqli_query($connection, $query);
    
    if ($result) {
        return true;
    } else {
        return false;
    }
}







// Adding a category
$post_editor=$_POST['post_editor'];
$post_category=$_POST['post_category'];
$post_title=$_POST['post_title'];
$post_name=$_POST['post_name'];
$editor=$_POST['editor'];

   //echo($editor);

// Adding a post
if (addPost($post_name,$post_title,$editor, $post_category, 1)) {
    echo "Post added successfully.";
} else {
    echo "Post addition failed.";
}





// Close the database connection
mysqli_close($connection);



?>
