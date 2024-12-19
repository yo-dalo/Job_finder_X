<?php
include("function.php");
$allCategories = getAllCategories();

foreach ($allCategories as $category) {

    // Decide which button to show based on the status
    $statusBtn = "";
    if ($category["status"] == 1) {
        $statusBtn = '<button class="btn btn-success">Active</button>';
    } else if ($category["status"] == 0) {
        $statusBtn = '<button class="btn btn-danger">Deactivate</button>';
    }

    echo '
        <tr class="main_category_post_table">
            <td>
                <i class="fa-solid fa-arrow-right fa-lg text-primary me-3"></i> <strong>' . $category["name"] . '</strong>
            </td>
            <td>' . $category["add_on"] . '</td>
            <td> ' . $category["id"] . '
            </td>
            <td>
                <span class="badge  change_status" data-id="' . $category['id'] . '">   ' . $statusBtn . ' </span>
             
            </td>
            <td>
                <div class="dropdown">
                    <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                        <i class="bx bx-dots-vertical-rounded "></i>
                    </button>
                    <div class="dropdown-menu">
                        <a class="dropdown-item edit_category_btn" data-id="' . $category['id'] . '" data-bs-toggle="modal" data-bs-target="#edit_category" href="javascript:void(0);">
                            <i class="bx bx-edit-alt me-2 "></i> Edit</a>
                        <a class="dropdown-item delete_category_btn" href="javascript:void(0);"data-id="' . $category['id'] . '">
                            <i class="bx bx-trash me-2"></i> Delete</a>
                    </div>
                </div>
            </td> 
        </tr>
    ';
}
?>
