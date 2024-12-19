<?php
session_start();
if (isset($_POST['value1'])) {
    session_unset();
    session_destroy();
    exit();
}
?>
