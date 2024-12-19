<?php
header("Content-Type: application/json");

// Sample data (you can replace this with your data retrieval logic)
$data = array(
    array('id' => 1, 'name' => 'Item 1'),
    array('id' => 2, 'name' => 'Item 2'),
    array('id' => 3, 'name' => 'Item 3')
);

echo json_encode($data);
?>
