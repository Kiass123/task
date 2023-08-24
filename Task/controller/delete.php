<?php
include '../model/connect.php';

    $id = $_GET["id"];
    $con = getConnection();
    $sql = "DELETE FROM `testimonial` WHERE `id` = $id";
    $result = mysqli_query($con, $sql);

    if ($result) {
    $msg = "testimonial with ID $id has been deleted.";
    } else {
    $msg = "Error deleting testimonial with ID $id: " . mysqli_error($con);
    }
    header("Location: ../model/testimonial.php?msg=" . urlencode($msg));
    exit();
    ?>