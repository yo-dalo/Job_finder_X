<?php

include('function.php');
$postId = $_POST['value1'];
$allCategorie  = getAllCategories();
$Categorie_by_post_id  = getAllCategories($postId);

$sql = "SELECT post.id, post.name, post.title, post.Post_data, post.add_on, Category.name AS category_name, Category.id AS category_id, post.status
        FROM post
        LEFT JOIN Category ON post.category = Category.id
        WHERE post.id = $postId";
include("conn.php");


$result = $conn->query($sql);


if ($result->num_rows > 0) {
    // Output data for the post
    $row = $result->fetch_assoc();
    
   echo '
   
         <script src="https://cdn.ckeditor.com/4.7.0/full/ckeditor.js"></script>


   <label for="postNameInput" class="form-label"> Edit Post Name</label>
   <input
       type="text"
           value="'. $row['name'] . '"

       class="form-control"
       id="postNameInput"
         name="edit_post_name"
       placeholder="John Doe"
       aria-describedby="postNameHelp"
   />
   
      <input
          type="hidden"
              value="'. $row['id'] . '"
          class="form-control"
          name="edit_post_id"
          id="postNameInput"
      />
   
   
   <label for="postTitleInput" class="form-label">Edit Post Title</label>
   <input
       type="text"
           value="'. $row['title'] . '"
       class="form-control"
         name="edit_post_title"
       id="postTitleInput"
       placeholder="Post Title"
       aria-describedby="postTitleHelp"
   />
   
   <div class="mb-3">
       <label for="postCategorySelect" class="form-label">Post category</label>
       <select class="form-select"   name="edit_post_category"  aria-label="Default select example">
       <option  value="'.$row['category_id'].'">'.$row['category_name'].'</option>
       ';
       
   foreach ($allCategorie as $category) {
       echo '<option value="'.$category['id'].'">'.$category['name'].'</option>';
   }
   
   echo '
       </select>
   </div>
   
   <div class="container p-5">
       <label for="edit_post_textarea" class="form-label">Post Edit</label>
       <textarea id="edit_post_textarea"   name="edit_post_post_data"></textarea>
   </div>

   
   <div class="modal-footer">
       <button type="button" id="close_edit_post_modal"  class="btn btn-secondary" data-dismiss="modal">Close</button>
       <button type="submit" class="btn btn-primary" data-id="'. $row['id'] . '">Save changes</button>
   </div>
   <script>
   CKEDITOR.replace("edit_post_textarea");
    var objEditor = CKEDITOR.instances["edit_post_textarea"];

      
      setTimeout(() => {
               var newData = `'. $row['Post_data'] . '`;
               objEditor.setData(newData);
               
      },500)
      
      
      
   </script>
   
   
   
   ';
   
    
    
    
} else {
    echo "No posts found.";
}

$conn->close();
?>
