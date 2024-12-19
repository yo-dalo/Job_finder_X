<?php
session_start();

            $servername = "127.0.0.1";
            $username = "root";
           $password = "root";
          $database = "SarkarR"; // Your database name
          









           // $servername = "sql309.infinityfree.com";
          //   $username = "if0_35321460";
          //   $password = "i93QJulP3Hbl";
        // $database = "if0_35321460_SarkarR"; // Your database name
          
        // Create a connection
        $conn = new mysqli($servername, $username, $password, $database);
    $connection = new mysqli($servername, $username, $password, $database);
    $your_db_connection = new mysqli($servername, $username, $password, $database);
   
   
    
        // Check the connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
    
            if ($conn->connect_error) {
                die("Connection failed: " . $connection->connect_error);
            }
        







// If the connection is successful, you can perform database operations here

// Remember to close the connection when you're done

?>
