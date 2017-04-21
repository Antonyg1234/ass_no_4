<?php

//echo "hello";exit;

include('database.php');
//print_r($conn->query($sql));die;

if($_POST['category_id']) {
    $category_id = $_POST['category_id'];
//    print_r($_POST['category_id']); die;
foreach($category_id as $value) {
    $sql_delete = "DELETE FROM category WHERE id=$value";
    $conn->query($sql_delete);
}

    header('Location:http://10.0.11.22/assignment_4/category_list.php');
}
?>