<?php

function getAllCategories($categoryId='') {
    // Include the database connection parameters from 'conn.php'
    include('conn.php');

    $categories = array(); // An array to store categories

    if ($categoryId !== '') {
        $sql = "SELECT * FROM Category WHERE id = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param('i', $categoryId);
    } else {
        $sql = "SELECT * FROM Category";
        $stmt = $conn->prepare($sql);
    }

    // Execute the query
    $stmt->execute();
    $result = $stmt->get_result();

    // Check if there are results
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $categories[] = $row; // Add each category to the array
        }
    }

    // Close the statement and database connection
    $stmt->close();
    $conn->close();

    return $categories; // Return the array of categories
}

// Example usage:
//$allCategories = getAllCategories(173);

//foreach ($allCategories as $category) {
//    echo "ID: " . $category["id"] . " - Name: " . $category["name"] . " - Job: " . $category["job"] . "<br>";
//}

?>
