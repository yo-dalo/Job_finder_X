<?php
   include("function.php");
   $category_id=$_POST['value1'];


$allCategories = getAllCategories($category_id);

foreach ($allCategories as $category) {
$trimmed = trim($category['name']);
echo $trimmed;

}

?>
                                                             