<?php
       include('conn.php');


// SQL query to retrieve posts with category information
$sql = "SELECT post.id, post.name, post.title, post.status, post.add_on, Category.id as category_id, Category.name as category_name 
        FROM post
        JOIN Category ON post.category = Category.id";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Output data of each row
    while ($post = $result->fetch_assoc()) {
           $statusBtn = "";
           if ($post["status"] == 1) {
               $statusBtn = '<button class="btn btn-success">Active</button>';
           } else if ($post["status"] == 0) {
               $statusBtn = '<button class="btn btn-danger">Deactivate</button>';
           }
       
       
       
       
        echo '
                                          <tr class="main_category_post_table">
                                             <td>
                                                <i class="fa-brands fa-wix fa-lg text-primary me-3"></i> <strong> '. $post['name'] . '</strong>
                                             </td>
                                             <td> '. $post['category_name'] . '</td>
                                             <td>
                                                 '. $post['id'] . '
                                             </td>
                                             <td><span class="badge me-1 change_post_status" data-id=" '. $post['id'] . '"> '.$statusBtn.'</span></td>
                                             <td><span class="badge bg-label-warning me-1"> '. $post['add_on'] . '</span></td>
                                             <td>
                                                <div class="dropdown">
                                                   <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                                                   <i class="bx bx-dots-vertical-rounded"></i>
                                                   </button>
                                                   <div class="dropdown-menu">
                                                      <a class="dropdown-item show_data_edit_btn" data-id=" '. $post['id'] . '" data-toggle="modal"  data-target="#edit_post_modal" href="javascript:void(0);"
                                                         ><i class="bx bx-edit-alt me-2"></i> Edit</a
                                                         >
                                                         
                                                         
                                                         
                                                      <a class="dropdown-item post_delect_btn" data-id=" '. $post['id'] . '" href="javascript:void(0);"
                                                         ><i class="bx bx-trash me-2"></i> Delete</a
                                                         >
                                                   </div>
                                                </div>
                                             </td>
                                          </tr>
        
        
        ';
    }
} else {
    echo "No posts found.";
}

$conn->close();
?>
