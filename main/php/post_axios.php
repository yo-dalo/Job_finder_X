<?php
include("conn.php");
include("function.php");
header("Content-Type: application/json");
$id=$_GET["id"];
$data = [];
     $data_x=gPOST($conn,$id);
     
       foreach ($data_x as $data_){
             $data[] = $data_;
         }
         
echo json_encode($data);
$conn->close();







?>