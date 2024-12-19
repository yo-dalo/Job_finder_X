<?php


/*
            $servername = "sql309.infinityfree.com";
             $username = "if0_35321460";
             $password = "i93QJulP3Hbl";
         $dbname = "if0_35321460_SarkarR"; // Your database name

*/

 $servername = "127.0.0.1";
  $username = "root";
 $password = "root";
  $dbname = "SarkarR";
// Create a database connection

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
