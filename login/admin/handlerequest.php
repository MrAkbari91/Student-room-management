<?php
include ($_SERVER['DOCUMENT_ROOT'].'/code/dbcon.php');
	  
if($_GET['from'] == "booking"){
	if($_GET['type'] == "accept"){
		$id = $_GET['id'];
		
		$con->beginTransaction();
        $query = "UPDATE booking_request set status = 1 where ID = $id;";
		$result = $con->prepare($query);
		$output = $result->execute();
		
		$sql = "SELECT * FROM booking_request where ID = $id;";	
		$result = $con->query($sql);
		$reqdata = $result->fetch();
		$building_no = $reqdata['building_no'];
		$category = $reqdata['category'];
		$room_no = $reqdata['room_no'];
		$userid = $reqdata['userid'];
		
		$query = "UPDATE user set category = '$category',building_no = $building_no, room_no = $room_no, user_status = 'Resident'	where userid = '$userid';";
		$result = $con->prepare($query);
		$output = $result->execute();
		
		$con->commit();
		if($output){
			header("Location: booking_request.php?status=success");
		}else{
			header("Location: booking_request.php?status=failed");
		}
	}else{
		$id = $_GET['id'];
		$con->beginTransaction();
        $query = "UPDATE booking_request set status = 2 where ID = $id;";
		$result = $con->prepare($query);
		$output = $result->execute();
		$con->commit();
		if($output){
			header("Location: booking_request.php?status=success");
		}else{
			header("Location: booking_request.php?status=failed");
		}
	}
}

	  
if($_GET['from'] == "changeroom"){
	if($_GET['type'] == "accept"){
		$id = $_GET['id'];
		
		$con->beginTransaction();
        $query = "UPDATE change_room_request set status = 1 where ID = $id;";
		$result = $con->prepare($query);
		$output = $result->execute();
		
			
		$sql = "SELECT * FROM change_room_request where ID = $id;";	
		$result = $con->query($sql);
		$reqdata = $result->fetch();
		$building_no = $reqdata['new_building_no'];
		$category = $reqdata['new_category'];
		$room_no = $reqdata['new_room_no'];
		$userid = $reqdata['userid'];
		
		$query = "UPDATE user set category = '$category',building_no = $building_no, room_no = $room_no	where userid = '$userid';";
		
		$result = $con->prepare($query);
		$output = $result->execute();
		
		$con->commit();
		if($output){
			header("Location: change_room_request.php?status=success");
		}else{
			header("Location: change_room_request.php?status=failed");
		}
	}else{
		$id = $_GET['id'];
		$con->beginTransaction();
        $query = "UPDATE change_room_request set status = 2 where ID = $id;";
		$result = $con->prepare($query);
		$output = $result->execute();
		$con->commit();
		if($output){
			header("Location: change_room_request.php?status=success");
		}else{
			header("Location: change_room_request.php?status=failed");
		}
	}
}

	  
if($_GET['from'] == "cancelroom"){
	if($_GET['type'] == "accept"){
		$id = $_GET['id'];
		
		$con->beginTransaction();
        $query = "UPDATE cancle_room_request set status = 1 where ID = $id;";
		$result = $con->prepare($query);
		$output = $result->execute();
		$sql = "SELECT * FROM cancle_room_request where ID = $id;";	
		$result = $con->query($sql);
		$reqdata = $result->fetch();
		$userid = $reqdata['userid'];
		$query = "UPDATE user set category = '-',building_no = 0, room_no = 0 , user_status = 'Non-Resident' where userid = '$userid';";
		$result = $con->prepare($query);
		$output = $result->execute();
		
		$con->commit();
		if($output){
			header("Location: Cancel_Room_Requests.php?status=success");
		}else{
			header("Location: Cancel_Room_Requests.php?status=failed");
		}
	}else{
		$id = $_GET['id'];
		$con->beginTransaction();
        $query = "UPDATE cancle_room_request set status = 2 where ID = $id;";
		$result = $con->prepare($query);
		$output = $result->execute();
		$con->commit();
		if($output){
			header("Location: Cancel_Room_Requests.php?status=success");
		}else{
			header("Location: Cancel_Room_Requests.php?status=failed");
		}
	}
}
	  
if($_GET['from'] == "maintenance"){
	if($_GET['type'] == "accept"){
		$id = $_GET['id'];
		
		$con->beginTransaction();
        $query = "UPDATE maintainence_request set status = 1 where ID = $id;";
		$result = $con->prepare($query);
		$output = $result->execute();
		$con->commit();
		if($output){
			header("Location: maintenance_requests.php?status=success");
		}else{
			header("Location: maintenance_requests.php?status=failed");
		}
	}else{
		$id = $_GET['id'];
		$con->beginTransaction();
        $query = "UPDATE maintainence_request set status = 2 where ID = $id;";
		$result = $con->prepare($query);
		$output = $result->execute();
		$con->commit();
		if($output){
			header("Location: maintenance_requests.php?status=success");
		}else{
			header("Location: maintenance_requests.php?status=failed");
		}
	}
}
?>