<?php

if (!isset($_SESSION)) {
    session_start();
}
if (isset($_SESSION['data'])) {
    $array = $_SESSION['data'];
} else {
    echo "<script>location.href='../../index.php';</script>";
}
include ("include/dbcon.php");




 

    if (isset($_GET['id'])){
  

        $userid=$_GET['id'];

        // $sql="UPDATE `courses` SET `status`=1 WHERE id='$course_id'";
        $sql = "UPDATE booking_request SET status = 1 WHERE userid = $userid ;";
  
        // Execute the query
        // mysqli_query($con,$sql);
        var_dump($sql);
        die();
    }
  
    // Go back to course-page.php
    header('location: booking_request.php');

?>