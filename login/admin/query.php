<?php

if (!isset($_SESSION)) {
    session_start();
}
if (isset($_SESSION['data'])) {
    $array = $_SESSION['data'];
} else {
    echo "<script>location.href='../../index.php';</script>";
}
include("include/dbcon.php");


// booking room updates
if (isset($_GET['booking_accid'])) {
    $userid = $_GET['booking_accid'];

    $sql = "UPDATE booking_request SET status = 1 WHERE userid = '$userid';";
    $result = $con->query($sql);

    if ($result) {
        $selectdata = "select * from booking_request where userid = '$userid';";
        $selectdataresult = $con->query($selectdata);
        $row = $selectdataresult->fetch();
        
        $category = $row['category'];
        $building_no = $row['building_no'];
        $room_no = $row['room_no'];

        
        $userupdate = "UPDATE user SET category = '$category', building_no = $building_no, room_no = $room_no where userid = '$userid';";
        $userresult = $con->query($userupdate);

        header('location: booking_request.php');
        
    } else {
        echo "Error updating record: " . $con->error;
    }
}

if (isset($_GET['booking_rejectid'])) {
    $userid = $_GET['booking_rejectid'];

    $sql = "UPDATE booking_request SET status = 0 WHERE userid = '$userid';";
    $result = $con->query($sql);

    if ($result) {
        header('location: booking_request.php');
    } else {
        echo "Error updating record: " . $con->error;
    }
}



// change room updates

if (isset($_GET['change_accid'])) {
    $userid = $_GET['change_accid'];

    $sql = "UPDATE change_room_request SET status = 1 WHERE userid = '$userid';";
    $result = $con->query($sql);
        if ($result) {
            $selectdata = "select * from change_room_request where userid = '$userid';";
            $selectdataresult = $con->query($selectdata);
            $row = $selectdataresult->fetch();
            
            $category = $row['new_category'];
            $building_no = $row['new_building_no'];
            $room_no = $row['new_room_no'];
            
            $userupdate = "UPDATE user SET category = '$category', building_no = $building_no, room_no = $room_no where userid = '$userid';";
            $userresult = $con->query($userupdate);

            header('location: change_room_request.php');
    } else {
        echo "Error updating record: " . $con->error;
    }
}

if (isset($_GET['change_rejectid'])) {
    $userid = $_GET['change_rejectid'];

    $sql = "UPDATE change_room_request SET status = 0 WHERE userid = '$userid';";
    $result = $con->query($sql);

    if ($result) {

        header('location: change_room_request.php');
    } else {
        echo "Error updating record: " . $con->error;
    }
}




// cancle room updates

if (isset($_GET['cancle_accid'])) {
    $userid = $_GET['cancle_accid'];

    $sql = "UPDATE cancle_room_request SET status = 1 WHERE userid = '$userid';";
    $result = $con->query($sql);

    if ($result) {
        header('location: Cancel_Room_Requests.php');
    } else {
        echo "Error updating record: " . $con->error;
    }
}

if (isset($_GET['cancle_rejectid'])) {
    $userid = $_GET['cancle_rejectid'];

    $sql = "UPDATE cancle_room_request SET status = 0 WHERE userid = '$userid';";
    $result = $con->query($sql);

    if ($result) {
        header('location: Cancel_Room_Requests.php');
    } else {
        echo "Error updating record: " . $con->error;
    }
}



// maintainence_request updates

if (isset($_GET['maintainence_accid'])) {
    $userid = $_GET['maintainence_accid'];

    $sql = "UPDATE maintainence_request SET status = 1 WHERE userid = '$userid';";
    $result = $con->query($sql);

    if ($result) {
        header('location: maintenance_requests.php');
    } else {
        echo "Error updating record: " . $con->error;
    }
}

if (isset($_GET['maintainence_rejectid'])) {
    $userid = $_GET['maintainence_rejectid'];

    $sql = "UPDATE maintainence_request SET status = 0
    
    
    
    
     WHERE userid = '$userid';";
    $result = $con->query($sql);

    if ($result) {
        header('location: maintenance_requests.php');
    } else {
        echo "Error updating record: " . $con->error;
    }
}
