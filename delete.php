<?php
include './sqlicon_con.php';


if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "DELETE FROM `marksheet` WHERE id=$id;";
    $result = mysqli_query($conn, $sql);
    if (!$result) {
        echo "<script>alert('something wrong can't delete');</script>";
    } else {
        header('Location: student_detail.php');
    }
}
