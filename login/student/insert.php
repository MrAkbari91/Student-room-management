<?php
if (!isset($_SESSION)) {
    session_start();
}
if (isset($_SESSION['data'])) {
    $array = $_SESSION['data'];
} else {
    echo "<script>location.href='../../index.php';</script>";
}
include "include/dbcon.php";


if (isset($_POST['book_room'])) {
    $userid    = $array['userid'];
    $Category = $_POST['Category'];
    $Building = $_POST['Building'];
    $Room = $_POST['Room'];
    $date = date("Y-m-d");
    $update_date = date("Y-m-d");

    $query = "INSERT INTO booking_request (userid, category, building_no, room_no, created_date, updated_date) VALUES ($userid,'$Category',$Building,$Room , $date, $update_date);";
    $result = $con->query($query);
    if ($result == true) {
        header("Location: Booking_Report.php");
    }
}

if (isset($_POST['change_room'])) {
    $userid    = $array['userid'];
    $Category = $_POST['Category'];
    $Building = $_POST['Building'];
    $Room = $_POST['Room'];
    $date = date("Y-m-d");
    $update_date = date("Y-m-d");
    
    $query = "INSERT INTO change_room_request (userid, new_category, new_building_no, new_room_no, created_date, updated_date) VALUES ($userid,'$Category', $Building, $Room , $date, $update_date);";
    $result = $con->query($query);
    if ($result == true) {
        header("Location: Change_Room_Approved_Report.php");
    }
}

if (isset($_POST['cancel_room'])) {
    $userid = $array['userid'];
    $reason = $_POST['textarea_txt'];
    $date = date("Y-m-d");
    $update_date = date("Y-m-d");

    $query = "INSERT INTO cancle_room_request (userid, reason, created_date, updated_date) VALUES ($userid, '$reason', $date, $update_date);";
    $result = $con->query($query);
    if ($result == true) {
        header("Location: Cancel_Room_Approved_Report.php");
    }
}

if (isset($_POST['maintenance_room'])) {
    $userid = $array['userid'];
    $concern = $_POST['maintanence_txt'];
    $date = date("Y-m-d");
    $update_date = date("Y-m-d");

    $query = "INSERT INTO maintainence_request (userid, concern, created_date, updated_date) VALUES ($userid, '$concern', $date, $update_date);";
    $result = $con->query($query);
    if ($result == true) {
        header("Location: Request_Maintenance_Report.php");
    }
}
