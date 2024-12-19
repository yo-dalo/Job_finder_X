<?php
include("function.php");
   $allCategories = getAllCategories();

      foreach ($allCategories as $category) {
       echo '<option value=""> select category</option>';
       echo '<option value="'.$category['id'].'">'.$category['name'].'</option>';

}
?>