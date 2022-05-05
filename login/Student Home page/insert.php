<?php
	  session_start();
	  $array = $_SESSION['data'];
      include "include/dbcon.php";

      
      if(isset($_POST['book_room'])){
        $userid	= $array['userid'];
        $Category = $_POST['Category'];
        $Building = $_POST['Building'];
        $Room = $_POST['Room'];
        $date = date("Y-m-d");
        $update_date = date("Y-m-d");

        $query = "INSERT INTO booking_request (userid, category, building_no, room_no, created_date, updated_date) VALUES ($userid,'$Category',$Building,$Room , $date, $update_date);";
        $result = $con->query($query);
            if($result==true){
                header("Location: Booking_Report.php");
            }
        }  
    if(isset($_POST['change_room'])){
        $userid	= $array['userid'];
        $Category = $_POST['Category'];
        $Building = $_POST['Building'];
        $Room = $_POST['Room'];
        $date = date("Y-m-d");
        $update_date = date("Y-m-d");
        
        $query = "INSERT INTO change_room_request (userid, new_category, new_building_no, new_room_no, created_date, updated_date) VALUES ($userid,'$Category', $Building, $Room , $date, $update_date);";
        $result = $con->query($query);
        if($result==true){
            header("Location: Change_Room_Approved_Report.php");
        }
    }
?>