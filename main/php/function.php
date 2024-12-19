<?php
include("conn.php");
function gCAT($conn, $id='') {
    if ($id !== '') {
        $sql = "SELECT * FROM Category WHERE id = $id AND status = 1";
    } else {
        $sql = "SELECT * FROM Category WHERE status = 1";
    }

    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $categories = array();
        while ($row = $result->fetch_assoc()) {
            $categories[] = $row;
        }
        return $categories;
    } else {
        return array(); // No categories found
    }
}


function gPOST($conn, $id = '', $limit = '', $cat_id = '') {
    $sql = "SELECT * FROM post WHERE status = 1";

    if ($id !== '') {
        $sql .= " AND id = $id"; // Added space before AND
    }
    if ($cat_id !== '') {
        $sql .= " AND category = $cat_id"; // Added space before AND
    }
    if ($limit !== '') {
        $sql .= " ORDER BY id DESC LIMIT $limit"; // Moved ORDER BY outside of the double quotes
    }

    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $posts = array();
        while ($row = $result->fetch_assoc()) {
            $posts[] = $row;
        }
        return $posts;
    } else {
        return array(); // No posts found
    }
}



?>
