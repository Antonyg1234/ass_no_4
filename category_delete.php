<?php
include('database.php');
//print_r($conn->query($sql));die;
if($_GET['id']) {

    $sql_delete = "DELETE FROM category WHERE id=$_GET[id]";

    if ($conn->query($sql_delete) === TRUE) {
        $message = "Record deleted successfully";
    } else {
        $error = "Error: " . $sql_delete . "<br>" . $conn->error;
    }
    header('Location:http://10.0.11.22/assignment_4/category_list.php');
}
?>